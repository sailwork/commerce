<?php

namespace Sailwork\Commerce\Category\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Sailwork\Commerce\Category\Category;

class UpdateCategory
{
    use AsAction;

    protected Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function handle(int $id, $attributes)
    {
        $category = $this->category->findOrFail($id);

        return $category->update($attributes);
    }
}
