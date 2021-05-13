<?php

namespace Sailwork\Commerce\GraphQL\Category\Mutations;

use Closure;
use GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Sailwork\Commerce\Category\Actions\UpdateCategory;

class UpdateCategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateCategory',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('Category'));
    }

    public function args(): array
    {
        return [
            'id' => ['
                name' => 'id',
                'type' => Type::nonNull(Type::int()),
            ],
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string()),
            ],
            'slug' => [
                'name' => 'slug',
                'type' => Type::nonNull(Type::string()),
            ],
            'description' => [
                'name' => 'description',
                'type' => Type::string(),
            ],
            'is_active' => [
                'name' => 'is_active',
                'type' => Type::boolean(),
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return UpdateCategory::run($args['id'], $args);
    }
}
