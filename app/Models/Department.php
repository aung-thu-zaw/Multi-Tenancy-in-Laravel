<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::addGlobalScope(TenantScope::class);

        static::creating(function ($model) {
            if(session()->has("tenant_id")) {
                $model->tenant_id = session()->get("tenant_id");
            }
        });
    }
}
