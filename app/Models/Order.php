<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'id',
        'user_name',
        'menu_id',
        'status'
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
     
}
