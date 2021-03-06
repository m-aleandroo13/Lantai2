<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Insert Bahan Baku Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Insert Bahan Baku Produk <?= $produk['nama_produk']; ?>
    </ol>

    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4 ">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Bahan Baku Produk <b><?= $produk['nama_produk']; ?></b></h3>
                    <a class="btn btn-danger" href="<?= base_url('/produk/detail/' . $produk['id_produk']); ?>">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('produk/insert_barang_produk/') ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Bahan Baku</label>
                            <select class="custom-select" name="id_barang" id="id_barang">
                                <option value="">Pilih Bahan Baku</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputKebutuhanBarang">Kebutuhan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="kebutuhan" placeholder="Enter kebutuhan bahan baku" required>
                                <div class="input-group-append">
                                    <select class="custom-select" id="inputGroupSelect04" name="satuan" required>
                                        <option>Pilih satuan...</option>
                                        <option value="Kilogram">kilogram</option>
                                        <option value="Gram">gram</option>
                                        <option value="MiliLiter">mililiter</option>
                                        <option value="Liter">liter</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="id_produk" value="<?= $produk['id_produk']; ?>">
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>