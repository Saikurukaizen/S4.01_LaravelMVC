<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\HasDatetimeCasts;

class Community extends Model
{
    use HasFactory;

    protected $table = 'communities';
}
