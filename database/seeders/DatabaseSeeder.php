<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::firstOrCreate([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    $category = Category::factory()->create([
      'name' => 'bracelet'
    ]);

    Product::factory()->create([
      'name' => 'Rose Quartz Flat',
      'description' => 'For Love',
      'price' => 120,
      'image' => 'images/0dgjH7LRZVppRjspANaFtDd6JFwsiTD3wwcXJ4Mn.jpg',
      'category_id' => $category->id,
      'is_featured' => true,
      'is_stock' => true,
    ]);
  }
}
