<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with adjustable DPI.',
                'price' => 25.99,
                'image' => 'products/wireless-mouse.jpg',
                'category' => 'Accessories',
                'brand' => 'Logitech',
                'stock' => 50,
                'is_featured' => true,
                'is_new' => true,
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'RGB mechanical keyboard with tactile switches.',
                'price' => 79.99,
                'image' => 'products/mechanical-keyboard.jpg',
                'category' => 'Accessories',
                'brand' => 'Redragon',
                'stock' => 30,
                'is_featured' => true,
                'is_new' => false,
            ],
            [
                'name' => 'Gaming Headset',
                'description' => 'Over-ear gaming headset with a noise-canceling microphone.',
                'price' => 59.99,
                'image' => 'products/gaming-headset.jpg',
                'category' => 'Audio',
                'brand' => 'HyperX',
                'stock' => 20,
                'is_featured' => true,
                'is_new' => true,
            ],
            [
                'name' => 'USB-C Hub',
                'description' => 'Multiport USB-C hub with HDMI and USB 3.0 ports.',
                'price' => 39.99,
                'image' => 'products/usb-c-hub.jpg',
                'category' => 'Accessories',
                'brand' => 'Anker',
                'stock' => 40,
                'is_featured' => false,
                'is_new' => true,
            ],
            [
                'name' => 'Portable SSD 1TB',
                'description' => 'Compact 1TB solid-state drive for fast file transfers.',
                'price' => 99.99,
                'image' => 'products/portable-ssd.jpg',
                'category' => 'Storage',
                'brand' => 'Samsung',
                'stock' => 15,
                'is_featured' => true,
                'is_new' => false,
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'Portable Bluetooth speaker with rich stereo sound.',
                'price' => 45.50,
                'image' => 'products/bluetooth-speaker.jpg',
                'category' => 'Audio',
                'brand' => 'JBL',
                'stock' => 25,
                'is_featured' => false,
                'is_new' => true,
            ],
            [
                'name' => '1080p Webcam',
                'description' => 'Full HD webcam suitable for meetings and streaming.',
                'price' => 34.99,
                'image' => 'products/webcam.jpg',
                'category' => 'Computer Peripherals',
                'brand' => 'Logitech',
                'stock' => 35,
                'is_featured' => false,
                'is_new' => false,
            ],
            [
                'name' => '27-inch Monitor',
                'description' => '27-inch monitor with a crisp display for work and gaming.',
                'price' => 229.99,
                'image' => 'products/27-inch-monitor.jpg',
                'category' => 'Displays',
                'brand' => 'Dell',
                'stock' => 12,
                'is_featured' => true,
                'is_new' => true,
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Adjustable aluminum laptop stand for improved ergonomics.',
                'price' => 29.99,
                'image' => 'products/laptop-stand.jpg',
                'category' => 'Accessories',
                'brand' => 'UGREEN',
                'stock' => 45,
                'is_featured' => false,
                'is_new' => false,
            ],
            [
                'name' => 'Gaming Mouse Pad',
                'description' => 'Large desk mouse pad with a smooth tracking surface.',
                'price' => 19.99,
                'image' => 'products/gaming-mouse-pad.jpg',
                'category' => 'Accessories',
                'brand' => 'Razer',
                'stock' => 60,
                'is_featured' => false,
                'is_new' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                ...$product,
                'slug' => Str::slug($product['name']),
            ]);
        }
    }
}
