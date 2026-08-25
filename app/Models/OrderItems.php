<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    //
       protected $fillable =[ 'quantity','price' ];
  public function orders(): BelongsTo
  {
    return $this->belongsTo(Orders::class);
  }
}
