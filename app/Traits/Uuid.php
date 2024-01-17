<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid as UuidUuid;

trait Uuid {
    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = UuidUuid::uuid4()->toString();
        });

    }
}
