# crystal-shop

> ✅ **Status: Core features complete** — Cart, Checkout, Orders, and eSewa Payment Integration are fully working. UI polish in progress.

🔗 **Live Demo:** [crystal-shop-production.up.railway.app](https://crystal-shop-production.up.railway.app)

A Laravel e-commerce app for browsing and purchasing crystal jewelry and bracelets, with full cart, checkout, and real payment gateway integration (eSewa).

## Products Page
![productspage](public/images/imagestoshow/productspage.png)
## Single Products Page
![singleproductspage](public/images/imagestoshow/singleproductpage.png)
## Options to choose from
![mightalsolikeimages](public/images/imagestoshow/mightalsolike.png)
## Admin Panel
![adminpanelfilament](public/images/imagestoshow/adminpanelfilament.png)

## 🔑 Test Login
Want to try the app without registering?
- Email: `test@example.com`
- Password: `password`

## 💳 Testing Payments (eSewa Sandbox)
Checkout uses eSewa's official test environment — no real money is involved.
- eSewa ID: `9806800001` (also valid: `9806800002` through `9806800005`)
- Password: `Nepal123`
- MPIN: `1122`

## 🚀 Features
- Breeze Authentication (Login/Register/Password Reset)
- Product Listing, Details, Category Filtering & Search
- Cart System — AJAX-based (fetch), live quantity updates, no page reload
- Checkout Flow with DB transactions (atomic order creation)
- Order Management & Order History
- eSewa Payment Gateway Integration (HMAC signature generation + callback verification)
- Cart Item Authorization via Laravel Policy
- Admin Panel (Filament)
- Responsive Design
- Eloquent ORM

---
## 🛠 Tech Stack
- Laravel
- Blade
- Laravel Breeze (Auth)
- Tailwind CSS
- MySQL / SQLite
- Vite
- Composer
- Filament (Admin Panel)
- eSewa Payment Gateway

---
## ⚙️ Installation

### 1. Clone
```bash
git clone https://github.com/jenous11/crystal-shop.git
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Env

Linux/Mac:
```bash
cp .env.example .env
```

Windows (cmd):
```bash
copy .env.example .env
```

Then:
```bash
php artisan key:generate
```

Edit `.env`:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crystal_shop
DB_USERNAME=root
DB_PASSWORD=
```

Also add your eSewa sandbox credentials:
```bash
ESEWA_MERCHANT_CODE=EPAYTEST
ESEWA_SECRET_KEY=8gBm/:&EnhH.1/q
ESEWA_BASE_URL=https://rc-epay.esewa.com.np
ESEWA_STATUS_URL=https://rc.esewa.com.np
```

### 4. Migrate & Seed
```bash
php artisan migrate --seed
```

### 5. Build Assets
```bash
npm run build
```

### 6. Run
```bash
php artisan serve
npm run dev
```

Open:
```bash
http://localhost:8000
```

---
## Database Schema

### Categories Table
```php
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
```

### Products Table
```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->string('image')->nullable();
    $table->foreignId('category_id')->constrained();
    $table->boolean('is_featured')->default(false);
    $table->boolean('is_stock')->default(true);
    $table->timestamps();
});
```

### Cart Items Table
```php
Schema::create('cart_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('product_id')->constrained();
    $table->foreignId('user_id')->constrained();
    $table->integer('quantity')->default(1);
    $table->timestamps();
});
```

### Orders Table
```php
Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained();
    $table->decimal('total', 8, 2);
    $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');
    $table->string('transaction_uuid')->nullable();
    $table->string('transaction_code')->nullable();
    $table->timestamps();
});
```

### Order Items Table
```php
Schema::create('order_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('order_id')->constrained();
    $table->foreignId('product_id')->constrained();
    $table->integer('quantity');
    $table->decimal('price', 8, 2);
    $table->timestamps();
});
```

### Relationships
- `Category` **hasMany** `Product`
- `Product` **belongsTo** `Category`
- `User` **hasMany** `CartItems`
- `CartItems` **belongsTo** `User`, **belongsTo** `Product`
- `Order` **hasMany** `OrderItems`
- `OrderItems` **belongsTo** `Order`, **belongsTo** `Product`

---
## 📂 Project Structure
```bash
crystal-shop/
│
├── app/
│   ├── Http/Controllers/
│   │   ├── CartController.php
│   │   ├── CheckoutController.php
│   │   └── ProductController.php
│   ├── Models/
│   │   ├── Category.php
│   │   ├── Product.php
│   │   ├── CartItems.php
│   │   ├── Orders.php
│   │   └── OrderItems.php
│   ├── Policies/
│   │   └── CartItemPolicy.php
│   ├── Services/
│   │   └── EsewaGateway.php
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── phpunit.xml
├── postcss.config.js
├── tailwind.config.js
├── vite.config.js
└── README.md
```

---
## 🔒 Security
- Laravel Breeze Auth
- CSRF Protection
- Eloquent (SQL injection safe)
- Hashed Passwords
- Policy-based Authorization (cart item ownership)
- HMAC SHA256 signature verification for payment callbacks

---
## 📌 TODO
- [ ] UI/UX polish pass
- [ ] Full responsive design pass
- [ ] Wishlist
- [ ] Reviews
- [ ] Order Tracking
