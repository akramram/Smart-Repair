<?php

use Illuminate\Database\Seeder;

class MerekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/asus.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'ASUS'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/acer.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'acer'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/apple.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Apple'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://drop.ndtv.com/TECH/product_database/images/9302015110250AM_google_logo.jpg?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Google'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/huawei.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Huawei'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/samsung.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Samsung'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/oppo.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Oppo'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/xiaomi.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Xiaomi'
      ]);
      $merek->save();

      $merek = new \App\merek([
        'imagePath'=>'https://cdn.gadgets360.com/content/assets/brands/vivo.png?downsize=100:67&output-quality=70&output-format=webp',
        'nama'=>'Vivo'
      ]);
      $merek->save();
    }
}
