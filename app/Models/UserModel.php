<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
  protected $table = "users";
  protected $primaryKey = "user_id";
  protected $allowedFields = [
    "nama_pelanggan",
    "alamat",
    "kontak",
    "email",
    "username",
    "password",
    "tanggal_lahir",
    "jenis_kelamin",
    "foto_profil"
  ];

  
}




?>