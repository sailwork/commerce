<?php


namespace Sailwork\Commerce\Category\Actions;


use Lorisleiva\Actions\Concerns\AsAction;
use Sailwork\Commerce\Category\Category;

class CreateCategory
{
    use AsAction;

    public function handle(Category $category, $data): Category
    {
        $category->fill($data);
        $category->save();
        return $category->refresh();
    }
}
