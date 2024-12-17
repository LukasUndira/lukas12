<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model {
  protected $table = "products";
  protected $primaryKey = "produk_id";
  protected $allowedFields = [
    "nama_produk",
    "deskirpsi_produk",
    "harga",
    "stok",
    "gambar_produk",
    "status",
    "berat",
    "ukuran",
  ];

    public function get_all_product() {
      $query = $this->db->query("SELECT * FROM `products`");
      return $query->getResultArray();
    }

    public function get_info_product($id){
      $query = $this->db->query("SELECT * FROM products WHERE produk_id = $id");
      return $query->getResultArray();
    }

    public function get_all_id() {
      $query = $this->db->query("SELECT produk_id FROM products ORDER BY produk_id");
      return $query->getResultArray();
    }

    public function get_product_price($price) {
      $query = $this->db->query("SELECT harga FROM products WHERE produk_id = $price");
      return $query->getResultArray();
    }

}





?>