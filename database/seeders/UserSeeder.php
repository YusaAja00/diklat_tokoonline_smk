<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT into users (id, nama_lengkap, username, email, password, no_telp, provinsi_id, kabupaten_id, kode_pos, alamat_lengkap, level_user) VALUES (1, 'Admin', 'admin', 'admin@gmail.com', '".bcrypt('admin')."', null, null, null, null, null, 'admin'),
        (2, 'Pengguna', 'Pengguna', 'Pengguna@gmail.com', '".bcrypt('Pengguna')."', '085234234234', 35, 3576, '61354', 'Kota Mojokerto, Jawa Timur', 'Pengguna')");
    }
}
