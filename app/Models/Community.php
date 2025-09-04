<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;


    protected $table = 'communities';

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'discipline_id'
    ];

    protected function name(): Attribute{
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => ucfirst(strtolower($value)),
        );
    }

    public function discipline(): \Illuminate\Database\Eloquent\Relations\BelongsTo{
        return $this->belongsTo(Discipline::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo{
        return $this->belongsTo(User::class);
    }
}
