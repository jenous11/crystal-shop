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
User::firstOrCreate(
    ['email' => 'test@example.com'],
    ['name' => 'Test User', 'password' => bcrypt('password')]
);

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
    Product::factory()->create([
      'name' => 'Howlite flat bracelet',
      'description' => 'Energy Grounding',
      'price' => 1500,
      'image' => 'images/01KZ0MMT5E7C9E6HFJHJT1PMJH.jpg',
      'category_id' => $category->id,
      'is_featured' => true,
      'is_stock' => true,
    ]);

    // new form here




Product::create([
    'name' => 'Amethyst Flat Bracelet',
    'description' => 'Protects from stress and anxiety',
    'price' => 1350,
    'image' => 'images/7gPJszC271l8apCXM1W8QXk8098unBlqgut53baI.jpg',
    'category_id' => $category->id,
    'is_featured' => false,
    'is_stock' => true,
]);

Product::create([
    'name' => 'Serene Protection Bracelet',
    'description' => 'The Serene Protection Bracelet is designed to bring calmness, clarity, and protection into your life. Turquoise, known as the "Stone of Wisdom and Healing," has been cherished for centuries for its ability to promote emotional balance and ward off negativity.',
    'price' =>1100 ,
    'image' => 'images/7LgK0Y9D7JzqKGdAUFjlVFol7OyIJRU9kjvZaQU4.jpg',
    'category_id' => $category->id,
    'is_featured' => false,
    'is_stock' => true,
]);

Product::create([
    'name' => 'Lapis Lazuli',
    'description' => '- Handmade in pure silver
- Genuine Lapis Lazuli Crystal',
    'price' => 5500,
    'image' => 'images/92Z9XugWYV7ymkRpaPezUBMAkx4tZa1v9WBqNbMv.jpg',
    'category_id' => $category->id,
    'is_featured' => false,
    'is_stock' => true,
]);


  }
}

