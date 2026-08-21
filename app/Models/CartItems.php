<?php

namespace App\Models;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CartItems extends Model
{
    //
    protected $fillable =[ 'user_id','product_id','quantity' ];
  public function products(): HasMany
  {
    return $this->hasMany(Product::class);
  }
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
