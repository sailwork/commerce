<?php


namespace Sailwork\Commerce\GraphQL\Category\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CategoryType extends GraphQLType
{
    protected $attributes = [
        'name'          => 'Category',
        'slug'          => 'Slug of Category',
        'description'   => 'Description',
        'is_active'     => 'Active or Disable',
        'model'         => CategoryType::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular category',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the category',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The slug of the category',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The description of the category',
            ],
            'is_active' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'The status of the category',
            ]
        ];
    }
}
