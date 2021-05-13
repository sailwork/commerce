<?php

namespace Sailwork\Commerce\Category\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Sailwork\Commerce\Category\Category;

class CreateCategory
{
    use AsAction;

    protected Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function handle($attributes)
    {
        return $this->category->create($attributes);
    }
}
