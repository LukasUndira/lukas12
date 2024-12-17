<?php

namespace App\Models;
use CodeIgniter\Model;

class TransaksiModel extends Model {
  protected $table = "transaksi";
  protected $primaryKey = "transaksi_id";
  protected $allowedFields = [
    "transaksi_id",
    "produk_id",
    "user_id",
    "tanggal_transaksi",
    "jumlah",
    "total_harga"
  ];

    public function get_all_transaksi() {
      $query = $this->db->query("SELECT * FROM `transaksi`");
      return $query->getResultArray();
    }

    public function get_info_transaksi($id) {
      $query = $this->db->query("SELECT * FROM transaksi WHERE transaksi_id = $id");
      return $query->getResultArray();
    }


}


?>