<?php

namespace Sailwork\Commerce\GraphQL\Type\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TypeType extends GraphQLType
{
    protected $attributes = [
        'name'      => 'Type',
        'slug'      => 'Identification',
        'is_active' => 'Active or Disable',
        'model'     => ProductType::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular product type',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the product type',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The slug of the product type',
            ],
            'is_active' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'Active or Disabled',
            ]
        ];
    }
}
