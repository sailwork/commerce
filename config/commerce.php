<?php

return [
    'graphql' => [
        'query' => [
            #Category
            \Sailwork\Commerce\GraphQL\Category\Queries\CategoriesQuery::class,
            \Sailwork\Commerce\GraphQL\Category\Queries\CategoryQuery::class
        ],
        'mutation' => [],
        'types' => [
            #Category
            \Sailwork\Commerce\GraphQL\Category\Types\CategoryType::class
        ],
        'middleware' => [],
        'method' => ['get', 'post']
    ]
];
