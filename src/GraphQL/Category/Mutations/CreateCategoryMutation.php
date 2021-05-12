<?php

namespace Sailwork\Commerce\GraphQL\Category\Mutations;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Sailwork\Commerce\Category\Actions\CreateCategory;
use Sailwork\Commerce\Category\Category;

class CreateCategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCategory',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('Category'));
    }

    public function args(): array
    {
        return [
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
                'name' => 'slug',
                'type' => Type::nonNull(Type::boolean()),
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return CreateCategory::run(app(Category::class), $args);
    }
}