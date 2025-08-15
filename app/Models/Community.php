<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\HasDatetimeCasts;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Community extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'communities';

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'discipline_id'
    ];
}
