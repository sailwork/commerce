<?php

namespace Sailwork\Commerce\GraphQL\Category\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use JetBrains\PhpStorm\ArrayShape;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Sailwork\Commerce\Category\Actions\GetCategory;

class CategoriesQuery extends Query
{
    protected $attributes = [
        'name' => 'categories',
    ];

    public function type(): Type
    {
        return GraphQL::paginate('Category');
    }

    #[ArrayShape(['page' => "array", 'limit' => "array"])]
    public function args(): array
    {
        return  [
            'page' => [
                'name' => 'page',
                'type' => Type::int(),
                'rules' => ['required'],
            ],
            'limit' => [
                'name' => 'limit',
                'type' => Type::int(),
                'rules' => ['required'],
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $fields = $getSelectFields();

        return GetCategory::run($fields->getSelect(), $args['limit'], $args['page']);
    }
}
