<?php

namespace App\Exceptions;

use Exception;

class productNotBelongsToUser extends Exception
{
    public function render()
    {
        return [
            'errors' => 'Product Not Belongs To User'
        ];
    }
}
