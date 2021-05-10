<?php

namespace Sailwork\Commerce\GraphQL\Category\Mutations;

use Closure;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;
use Sailwork\Commerce\Category\Category;

class UpdateCategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateCategory'
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
                'type' => Type::nonNull(Type::string()),
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
                'name' => 'slug',
                'type' => Type::nonNull(Type::boolean()),
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $category = Category::findOrFail($args['id']);
        if(!$category) {
            return null;
        }

        $category->name = $args['name'];
        $category->is_active = $args['is_active'];
        $category->description = $args['description'];
        $category->slug = $args['slug'];
        $category->save();

        return $category;
    }
}
