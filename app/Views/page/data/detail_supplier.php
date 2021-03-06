<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Detail Supplier
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <a href="<?= base_url('supplier/hal_list_supplier'); ?>" class="btn btn-danger mt-2">Back</a>
    <h1 class="mt-2"><?= $supplier['nama_supplier']; ?></h1>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Detail Supplier</li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <table>
                        <tr>
                            <th>Alamat</th>
                            <td>: <?= $supplier['alamat_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>: <?= $supplier['email_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th>No. Telp</th>
                            <td>: <?= $supplier['telp_supplier']; ?></td>
                        </tr>
                        <tr>
                            <th><a class="btn btn-warning" style="margin-top: 10px;" href="<?= base_url('supplier/hal_edit_supplier') . '/' . $supplier['id_supplier'] ?>">Edit Supplier</a>
                            </th>
                            <th>
                                <form action="<?= '/supplier/delete/' . $supplier['id_supplier']; ?>" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE" ?>
                                    <button type="submit" class="btn btn-danger" style="margin-top: 10px;" onclick="return confirm('Yakin mau hapus?');">Hapus Supplier</button>
                                </form>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <ol class="breadcrumb my-2">
                <li class="breadcrumb-item active">Barang</li>
            </ol>
            <div class="table-responsive">
                <a class="btn btn-primary mb-2" href="<?= base_url('supplier/hal_tambah_barang_supplier/' . $supplier['id_supplier']); ?>"> Insert Barang</a>
                <table class="table table-dark myTable" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($barang_supplier as $bs) :

                        ?>
                            <tr>
                                <th scope="row"></th>
                                <td><?= $bs['nama_barang']; ?></td>
                                <td><?= $bs['harga_barang']; ?></td>
                                <td>
                                    <form action="<?= '/supplier/delete_barang_supplier/' . $bs['id_barang_supplier'] . '/' . $bs['id_supplier']; ?>" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE" ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?');">Hapus</button>
                                    </form>
                                </td>


                            </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>