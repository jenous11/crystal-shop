<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderItems extends Model
{
    //
       protected $fillable =[ 'quantity','price' ];
  public function orders(): BelongsTo
  {
    return $this->belongsTo(Orders::class);
  }

  // belongs to means the table this method is defined on has the foreign key i.e OrderItems
  public function product(): BelongsTo
  {
    return $this->belongsTo(Product::class);
  }
}
