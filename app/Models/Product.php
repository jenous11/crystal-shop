<?php
namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
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
}
