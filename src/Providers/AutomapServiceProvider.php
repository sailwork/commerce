<?php

namespace Sailwork\Commerce\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Str;

class AutomapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mapping();
    }

    public function register()
    {
        //
    }

    private function mapping()
    {
        // read all folders to get the class with implement
        $dir = new \DirectoryIterator(dirname(__DIR__ . '../'));
        $folders = collect([]);

        foreach ($dir as $fileinfo) {
            if (! $fileinfo->isDot() && ! $fileinfo->isFile()) {
                $folders->push($fileinfo->getFileName());
            }
        }

        // Remove system Folder
        $excludedFolders = $folders->filter(function ($item) {
            return ! in_array($item, ['Http', 'Commands', 'Contracts', 'Providers']);
        });

        $excludedFolders->each(function ($folder) {
            $files = collect(scandir(__DIR__ . '/../' . $folder));
            $files->filter(function ($file) {
                return ! in_array($file, ['.', '..']);
            })->each(function ($file) use ($folder) {
                $filePath = __DIR__ . '/../' . $folder . '/' . $file;
                $fileContent = file_get_contents($filePath);

                if (Str::contains($fileContent, 'implements')) {
                    preg_match('/class (.*) implements (.*)/', $fileContent, $match);
                    if (count($match) > 0) {
                        $matchedItem = collect($match)->map(function ($string) {
                            return trim($string);
                        })->toArray();

                        preg_match('/namespace (.*)/', $fileContent, $namespace);
                        $namespace = Str::replaceLast(';', '\\', trim($namespace[1]));
                        $conCreate = $namespace . $matchedItem[1];

                        $interface = $matchedItem[2];

                        if (! Str::contains($interface, '\\')) {
                            preg_match('/use (.*)\\'.$interface.'/', $fileContent, $outInterface);
                            $interface = trim($outInterface[1]) . $interface;
                        }
                        $this->app->singleton($interface, $conCreate);
                    }
                }
            });
        });
    }
}
