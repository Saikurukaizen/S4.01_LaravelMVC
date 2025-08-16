<?php
declare(strict_types=1);

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug{

    public function setSlugAttribute($value)
    {
        if (is_string($value) && $value !== '') {
            $this->attributes['slug'] = Str::slug($value);
        } else {
            $this->attributes['slug'] = '';
        }
    }
}