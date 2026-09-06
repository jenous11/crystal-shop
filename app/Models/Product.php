<?php
namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'description',
    'price',
    'image',
    'category_id',
    'is_featured',
    'is_stock'
  ];
  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }
    public function cartitems(): HasMany
  {
    return $this->hasMany(CartItems::class);
  }
}
