<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultiTenantable
{
    public static function bootMultiTenantable(): void
    {
        if (auth()->check()) {
            static::creating(function ($model) {
                $model->company_id = auth()->user()->company_id;
            });
            static::addGlobalScope('company_id', function (Builder $builder) {
                $builder->where($builder->getModel()->getTable().'.company_id', auth()->user()->company_id);
            });
        }
    }
}
