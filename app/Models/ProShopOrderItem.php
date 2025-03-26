<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProShopOrderItem extends Model
{
    public function order()
    {
        return $this->belongsTo(ProShopOrder::class);
    }
}
