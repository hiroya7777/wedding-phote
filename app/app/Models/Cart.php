<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'carts';

    protected $fillable = [
        'stock_id',
        'cart_id'
    ];
}
