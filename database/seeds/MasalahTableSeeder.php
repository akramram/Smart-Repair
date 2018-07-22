<?php

use Illuminate\Database\Seeder;

class MasalahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masalah = new \App\Masalah([
          'deskripsi'=>'Layar Mati',
          'nama_komponen' => 'Display',
          'harga'=>'300000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Tombol Power Rusak',
          'nama_komponen' => 'Tombol',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Tombol Volume Rusak',
          'nama_komponen' => 'Tombol',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Layar Retak',
          'nama_komponen' => 'Display',
          'harga'=>'300000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Dead Pixel',
          'nama_komponen' => 'Display',
          'harga'=>'300000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Layar Tidak Respon',
          'nama_komponen' => 'Display',
          'harga'=>'300000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Baterai Bocor',
          'nama_komponen' => 'Baterai',
          'harga'=>'120000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Mati Total',
          'nama_komponen' => 'EMMC',
          'harga'=>'450000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Sering Hang',
          'nama_komponen' => 'EMMC',
          'harga'=>'450000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Sering Restart',
          'nama_komponen' => 'EMMC',
          'harga'=>'450000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'SD Card Tidak Terbaca',
          'nama_komponen' => 'Slot SD Card',
          'harga'=>'80000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Kartu SIM Tidak Terbaca',
          'nama_komponen' => 'Slot SIM Card',
          'harga'=>'80000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Fingerprint Tidak Terbaca',
          'nama_komponen' => 'Fingerprint Reader',
          'harga'=>'95000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Kamera tidak Terbuka',
          'nama_komponen' => 'Kamera',
          'harga'=>'150000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Lampu Flash tidak Menyala',
          'nama_komponen' => 'Flash',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Wifi Tidak Bisa Terkoneksi',
          'nama_komponen' => 'WiFi Adapter',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Suara Speaker Pecah / Tidak Bersuara',
          'nama_komponen' => 'Speaker',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Headphone tidak Terdeteksi',
          'nama_komponen' => 'Audio Port',
          'harga'=>'35000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

        $masalah = new \App\Masalah([
          'deskripsi'=>'Charger/USB tidak Terdeteksi',
          'nama_komponen' => 'USB Port',
          'harga'=>'40000',
          'imagePath'=>'#'
        ]);
        $masalah->save();

    }
}
