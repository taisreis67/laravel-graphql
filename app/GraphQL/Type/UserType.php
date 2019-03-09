<?php

namespace App\GraphQL\Type;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user type',
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
            ],
        ];
    }
}