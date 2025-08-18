<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Discipline extends Model
{
    use HasFactory;

    protected $table = 'disciplines';

    protected $fillable = [
        'name',
        'description',
    ];

    /*Esta función name() para asignar al campo name de la table Disciplines un
    atributo. Este atributo hará que se modifiquen los valores del campo antes de almacenarlos.
    En este caso, estamos pasando toda la cadena de texto a minusculas.
    */
    protected function name(): Attribute{
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => ucfirst(strtolower($value)),
        );
    }
}
