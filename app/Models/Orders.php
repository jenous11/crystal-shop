<?php

namespace App\Models;

use App\Models\OrderItems;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    //
  protected $fillable =[ 'status' ];
  public function orderitems(): HasMany
  {
    return $this->hasMany(OrderItems::class);
  }
}
