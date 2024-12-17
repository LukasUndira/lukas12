<?=$this->extend('components/main')?>
<?=$this->section('content')?>

<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">Table transaksi</h5>
            </div>
            <div class="px-2">

                <form action="<?=base_url('/tes/'.$data['transaksi_id'])?>" method="post">
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
                    <button  class="btn btn-primary">Update</button>
                </form>
            </div>
            
            <hr>
        </div>
    </div>
</div>


<?=$this->endSection()?>