<?php

namespace Sailwork\Commerce\Template\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Sailwork\Commerce\Template\Template;

class CreateTemplate
{
    use AsAction;

    public function handle(Template $template, $data): Template
    {
        $template->fill($data);
        $template->save();

        return $template;
    }
}
