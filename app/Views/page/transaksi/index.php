<?=$this->extend('components/main')?>
<?=$this->section('content')?>

<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">Table transaksi</h5>
            </div>
            <div class="px-2">

                <form action="<?=base_url('/tes')?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Produk</label>
                        <select class="form-control" name="produk_id">
                            <?php foreach ($produk as $key => $item) {
                            ?>
                                <option value="<?=$item['produk_id']?>"><?=$item['nama_produk']?></option>
                            <?php
                            } ?>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">User</label>
                        <select class="form-control" name="user_id">
                            <?php foreach ($user as $key => $item) {
                            ?>
                                <option value="<?=$item['user_id']?>"><?=$item['nama_pelanggan']?></option>
                            <?php
                            } ?>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">jumlah</label>
                        <input type="text" class="form-control" name="jumlah" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">total harga</label>
                        <input type="text" class="form-control" name="total_harga" required>
                    </div>
                    <button  class="btn btn-primary">Save</button>
                </form>
            </div>
            
            <hr>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>transaksi id</th>
                        <th class="d-none d-xl-table-cell">produk id</th>
                        <th class="d-none d-xl-table-cell">user id</th>
                        <th class="d-none d-md-table-cell">tanggal transaksi</th>
                        <th class="d-none d-md-table-cell">jumlah</th>
                        <th class="d-none d-md-table-cell">total harga</th>
                        <th class="d-none d-md-table-cell">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $key=>$item):?>

                    <tr>
                        <td><?=$item["transaksi_id"]?></td>
                        <td><?=$item["produk_id"]?></td>
                        <td><?=$item["user_id"]?></td>
                        <td><?=$item["tanggal_transaksi"]?></td>
                        <td><?=$item["jumlah"]?></td>
                        <td><?=$item["total_harga"]?></td>
                        <td><a href="<?=base_url("/tes/".$item["transaksi_id"])?>">edit</a></td>
                        <td><a href="<?=base_url("/tes/".$item["transaksi_id"].'/del')?>">delete</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?=$this->endSection()?>