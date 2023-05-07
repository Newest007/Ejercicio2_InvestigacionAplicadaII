<?php

namespace App\GraphQL\Mutations;

final class SingUp
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // Insertamos en la DB
        return [
            'id' => 2,
            'name' => 'Jose',
            'email' => 'Jose@example.com'
        ];
    }
}
