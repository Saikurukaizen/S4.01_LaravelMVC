<?php
declare(strict_types=1);

namespace App\Enums;

enum DisciplineName: string{
    case Taichi = 'Tai-Chi';
    case Boxeo = 'Boxeo';
    case Bodybuilder = 'Bodybuilder';

    public function description(): string{
        return match($this) {
            self::Taichi => 'Combina movimientos del kung-fu con técnicas de respiración y meditación.',
            self::Boxeo => 'Deporte de combate que consiste en golpear con los puños.',
            self::Bodybuilder => 'Entrenamiento de fuerza para desarrollar la musculatura.',
        };
    }
}
?>