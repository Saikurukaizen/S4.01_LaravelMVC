<?php
declare(strict_types=1);

namespace App\Models\Traits;

trait HasRouteKeyName
{
    public function getRouteKeyName()
    {
        return 'slug'; // O el campo que quieras reutilizar
    }
}