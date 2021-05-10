<?php

namespace Sailwork\Commerce\GraphQL\Template\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Sailwork\Commerce\Template\Template;

class TemplateType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Template',
        'slug' => 'Slug of Template',
        'description' => 'Description',
        'is_active' => 'Active or Disable',
        'model' => Template::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular template',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the template',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The slug of the template',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The description of the template',
            ],
            'is_active' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'The status of the template',
            ],
        ];
    }
}
