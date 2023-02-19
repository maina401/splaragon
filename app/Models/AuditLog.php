<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory,HasUUID;

    /**
     * @var mixed|string
     */
    public mixed $action;
    public mixed $user_id;
    /**
     * @var mixed|string
     */
    public mixed $item;

    //json column getter and setter
    public mixed $change;
    public mixed $item_id;
    protected $fillable = [
        'action',
        'user_id',
        'item',
        'item_id',
        'change',
    ];

    public function getChangeAttribute()
    {
        return json_decode($this->attributes['change'], true);
    }
    public function setChangeAttribute($value)
    {
        $this->attributes['change'] = json_encode($value);
    }
}
