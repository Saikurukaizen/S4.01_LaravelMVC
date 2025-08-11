<?php
declare(strict_types=1);

namespace App\Enums;

enum CommunityName: string{
    case Taichi = 'Tai-Chi Lovers';
    case Boxeo = 'Pega Pega';
    case Bodybuilder = 'Los Gymbros';

    public function description(): string{
        return match($this) {
            self::Taichi => 'Un espacio para compartir y practicar Tai-Chi.',
            self::Boxeo => 'Grupo de boxeo',
            self::Bodybuilder => 'Comunidad para amantes del culturismo.',
        };
    }
}

?>