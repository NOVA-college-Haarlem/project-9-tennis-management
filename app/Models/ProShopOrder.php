<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProShopOrder extends Model
{
    public function orderItems()
    {
        return $this->hasMany(ProShopOrderItem::class);
    }
}
