<?php

return [
    'required' => 'Kolom :attribute wajib diisi.',
    'string' => 'Kolom :attribute harus berupa teks.',
    'email' => 'Format :attribute tidak valid.',
    'regex' => 'Format pada kolom :attribute tidak valid.',
    'alpha' => 'Kolom :attribute hanya boleh berisi huruf..',
    'phone' => 'Kolom :attribute tidak valid.',
    'unique' => ':attribute sudah digunakan. Silahkan pilih :attribute lain.',
    'max' => [
        'string' => 'Panjang karakter pada kolom :attribute maksimal :max karakter.',
        'file' => 'Ukuran berkas pada kolom :attribute maksimal :max kilobyte.',
    ],
    'min' => [
        'string' => 'Panjang karakter pada kolom :attribute minimal :min karakter.'
    ],
    'password' => [
        'default' => 'Kolom :attribute harus memenuhi persyaratan keamanan berikut:',
        'uppercase' => 'Setidaknya satu huruf besar (uppercase).',
        'lowercase' => 'Setidaknya satu huruf kecil (lowercase).',
        'numeric' => 'Setidaknya satu karakter angka.',
    ],
    'date' => 'Format tanggal pada kolom :attribute tidak valid.',
    'confirmed' => ':attribute tidak cocok.',
    'accepted' => 'Anda harus menerima :attribute.',
    'custom' => [
        'email' => [
            'unique' => 'Email ini telah digunakan. Silahkan login.'
        ],
        'phone' => [
            'unique' => 'Nomor telepon ini telah digunakan.'
        ],
        'login' => [
            'failed' => 'Login gagal. Mohon periksa kembali email dan kata sandi Anda.',
        ],
        // Tambahkan pesan kustom lain jika diperlukan
    ],
    'attributes' => [
        'firstName' => 'Nama Depan',
        'lastName' => 'Nama Belakang',
        'birthDate' => 'Tanggal Lahir',
        'email' => 'Alamat Email',
        'phone' => 'Nomor Telepon',
        'password' => 'Kata Sandi',
        'terms' => 'Syarat & Ketentuan',
        'subject' => 'Subjek',
        'message' => 'Pesan',
        'name' => 'Nama Lengkap',
    ],
    'fortify' => [
        'failed' => 'Identitas ini tidak cocok dengan data kami.'
    ],
];
