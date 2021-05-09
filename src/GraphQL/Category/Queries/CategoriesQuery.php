<?php

namespace Sailwork\Commerce\GraphQL\Category\Queries;

use Closure;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Sailwork\Commerce\Category\Category;

class CategoriesQuery extends Query
{

    protected $attributes = [
        'name' => 'categories'
    ];

    public function type(): Type
    {
        return GraphQL::paginate('Category');
    }

    public function args(): array
    {
        return  [
            'page' => [
                'name' => 'page',
                'type' => Type::int(),
                'rules' => ['required']
            ],
            'limit' => [
                'name' => 'limit',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $fields = $getSelectFields();

        return Category::select($fields->getSelect())
                        ->paginate($args['limit'], ['*'], 'page', $args['page']);
    }
}
