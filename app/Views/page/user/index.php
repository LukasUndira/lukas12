<?=$this->extend('components/main')?>
<?=$this->section('content')?>
 <div class="container-sm bg-secondary-subtle my-3 p-3 border border-secondary" style="width: 500px ">
    <h1 class="row justify-content-center py-1 fw-bold">Profile</h1>
    <hr>
    <div class="row">
      <div class="col-4">
        <p class="border py-1">ID Pendaftaran:</p>
        <p class="border py-1">Nama:</p>
        <p class="border py-1">Agama:</p>
        <p class="border py-1">Tempat Lahir:</p>
        <p class="border py-1">Tinggi badan:</p>
        <p class="border py-1">Berat Badan:</p>
        <p class="border py-1">Nama Hubungan:</p>
        <p class="border py-1">Jenis Dokumen:</p>
        <p class="border py-1">Nomor Dokumen:</p>
        <p class="border py-1">Nama Hobby:</p>
        <p class="border py-1">Alamat: </p>
        <p class="border py-1">Username: </p>
      </div>
      <div class="col">
        <p class="border border-secondary p-1"><?= esc($ambildata['ID_PENDAFTARAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMA']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['AGAMA']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['TEMPATLAHIR']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['TINGGIBADAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['BERATBADAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMAHUBUNGAN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['JENIS_DOKUMEN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NOMOR_DOKUMEN']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['NAMAHOBBY']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['ALAMAT']) ?></p>
        <p class="border border-secondary p-1"><?= esc($ambildata['USERNAME']) ?></p>
      </div>
    </div>

  </div>
<?=$this->endSection()?>