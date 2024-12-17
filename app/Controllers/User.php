<?php

// Post request belum diamankan

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{  

  public function login_get() {
    //Redundant login check, gk bisa buat function terus dipanggil didalem
    return view("login");
   
    $session = session();
    if($session->isLoggedIn == True) {
      return redirect()->to(base_url('dashboard'),);
    }
  }

  public function login_post() {
    $session = session();
    $UserModel = new UserModel();

    $username = $this->request->getPost("username"); 
    $password = $this->request->getPost("password");

    $data = $UserModel->where("username", $username)->first(); 

    if ($data) {
      $hashed_password = $data["password"];

      if (password_verify($password, $hashed_password)) {

        $session->set([
          "nama_pelanggan" => $data["nama_pelanggan"],
          "user_id" => $data["user_id"],
          "isLoggedIn" => True
        ]);
        $session->setFlashdata('success', "Welcome " . $data["nama_pelanggan"]);
        
        return redirect()->to(base_url('dashboard'), null, 'refresh');
      } else {
        $session->setFlashdata('error', "Password Salah");
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('error', "Username Tidak Ada");
      return redirect()->to('/', null, 'refresh');
    }      
  }

  public function register_get() {
    return view('/register');
  }

  public function register_post() {
    
    $session = session();
    
    
    $UserModel = new UserModel();

    $file = $this->request->getFile('foto_profil');
    if($file != "") {
      $nameImgFile = $file->getRandomName();
      $file->move(ROOTPATH.'public/fotoProfil', $nameImgFile);
    } else {
      $nameImgFile = "";
    }
    
    helper(['url','form']);

    // user_id 	nama_pelanggan 	alamat 	kontak 	email username 	password 	created_at 	tanggal_lahir 	jenis_kelamin 	status 	foto_profil 	
    $data = [
      "nama_pelanggan" => $this->request->getPost("nama_pelanggan"),
      "alamat"         => $this->request->getPost("alamat"),
      "kontak"         => $this->request->getPost("kontak"),
      "email"          => $this->request->getPost("email"),
      "password"       => $this->hashPassword($this->request->getPost("password")),
      "tanggal_lahir"  => $this->request->getPost("tanggal_lahir"),
      "jenis_kelamin"  => $this->request->getPost("jenis_kelamin"),
      "username"       => $this->request->getPost("username"),
      "foto_profil"    => $nameImgFile
    ];
    // $data2 = [
    //   "nama_pelanggan" => "s",
    //   "alamat"         => "asd",
    //   "kontak"         => "111",
    //   "email"          => "22",
    //   "password"       => "1",
    //   "tanggal_lahir"  => 20241201,
    //   "jenis_kelamin"  => "L",
    //   "username"       => "lukas",
    //   "foto_profil"    => "1"
    // ];
    
    if ($UserModel->save($data)) {
      $session->setFlashdata("success", 'Pendaftaran Berhasil');
    } else {
      // $session->setFlashdata("error", "Registrasi Gagal");
      var_dump($UserModel->save($data));
      echo json_encode($data);
      die();
    }
    return redirect()->to(base_url('/login'));
  }

  public function logout() {
    $session = session();
    $session->destroy();
    return redirect()->to('/');
  }

  private function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }



}
