<?php

namespace Sailwork\Commerce\GraphQL\Type\Queries;

use Closure;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Sailwork\Commerce\Models\Catalog\ProductType;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

class TypeQuery extends Query
{
    protected $attributes = [
        'name' => 'type',
    ];

    public function type(): Type
    {
        return GraphQL::type('Type');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return ProductType::findOrFail($args['id']);
    }
}
