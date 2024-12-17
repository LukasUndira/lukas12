<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TransaksiModel;
use App\Models\ProdukModel;
use App\Models\UserModel;

class TransaksiContoller extends BaseController
{
    protected $transaksi;
    protected $user;
    protected $product;

    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->product = new ProdukModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        return view("page/transaksi/index",[
            "data"=>$this->transaksi->findAll(),
            "user"=>$this->user->findAll(),
            "produk"=>$this->product->findAll(),
            
        ]);
    }
    public function edit($id)
    {
        return view("page/transaksi/edit",[
            "data"=>$this->transaksi->find($id),
            "user"=>$this->user->findAll(),
            "produk"=>$this->product->findAll(),
            
        ]);
    }
    public function create()
    {
        helper(['form','url']);
        $data=[
            "produk_id"=>$this->request->getPost('produk_id'),
            "user_id"=>$this->request->getPost('user_id'),
            "jumlah"=>$this->request->getPost('jumlah'),
            "total_harga"=>$this->request->getPost('total_harga'),
        ];

        try {
            //code...
            $this->transaksi->save($data);
            return redirect()->back();
        } catch (\Throwable $th) {
            var_dump($th);
            die();
        }
    }

    public function update($id)
    {
        helper(['form','url']);
        $data=[
            "produk_id"=>$this->request->getPost('produk_id'),
            "user_id"=>$this->request->getPost('user_id'),
            "jumlah"=>$this->request->getPost('jumlah'),
            "total_harga"=>$this->request->getPost('total_harga'),
        ];

        try {
            //code...
            $this->transaksi->update($id,$data);
            return redirect()->to(base_url('transaksi'));
        } catch (\Throwable $th) {
            var_dump($th);
            die();
        }
    }

    public function delete($id)
    {
         $this->transaksi->where('transaksi_id',)->delete();
         return redirect()->back();
    }
}