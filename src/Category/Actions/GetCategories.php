<?php

namespace Sailwork\Commerce\Category\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Sailwork\Commerce\Category\Category;

class GetCategories
{
    use AsAction;

    protected Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function handle(array $fields, int $limit, int $page)
    {
        return $this->category->select($fields)
                              ->paginate($limit, ['*'], 'page', $page);
    }
}
