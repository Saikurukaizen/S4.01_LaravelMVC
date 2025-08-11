<?php 
declare(strict_types=1);

namespace App\Models\Traits;

trait HasDatetimeCasts{
    protected function casts(): array{
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
?>