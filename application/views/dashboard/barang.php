<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row align-items-end">
                <div class="col-xl-12 col-12">
                    <div class="box bg-primary-light pull-up">
                        <div class="box-body p-xl-0">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-3"><img src="<?= base_url('assets/images/'); ?>svg-icon/color-svg/custom-14.svg" alt=""></div>
                                <div class="col-12 col-lg-9">
                                    <h2>Hello, Welcome Back!</h2>
                                    <p class="text-dark mb-0 fs-16">
                                        Your course Overcoming the fear of public speaking was completed by 11 New users this week!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box no-shadow mb-0 bg-transparent">
                        <div class="box-header no-border px-0">
                            <h3 class="box-title">Barang</h3>
                            <button type="button" class="btn btn-primary-light pull-right" data-bs-toggle="modal"
                                data-bs-target="#modal-center">
                                Tambah Barang
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal center-modal fade" id="modal-center" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Barang</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form" method="POST" action="<?= base_url('barang/tambahBarang'); ?>">
                                    <div class="box-body">
                                        <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Informasi Barang</h4>
                                        <hr class="my-15">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama barang">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Kode</label>
                                                    <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode barang">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Harga</label>
                                                    <input type="number" step="0.01" min="0.01" name="harga" id="harga" class="form-control" placeholder="Harga barang" name="harga">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer modal-footer-uniform">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary float-end">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.modal -->
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">List Data Barang</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Di input</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($barang as $b):  ?>
                                            <tr>
                                                <td><?= $b['nama']; ?></td>
                                                <td><?= $b['kode']; ?></td>
                                                <td>Rp <?= $b['harga']; ?></td>
                                                <td><?= $b['created_at']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-<?= $b['id']; ?>">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-<?= $b['id']; ?>">
                                                        Delete
                                                    </button>
                                                    <div class="modal fade" id="modal-delete-<?= $b['id']; ?>" tabindex="-1" aria-labelledby="modal-delete-label" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modal-delete-label">Konfirmasi Hapus Barang</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah Anda yakin ingin menghapus barang <strong><?= $b['nama']; ?></strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                    <form action="<?= base_url('barang/hapusBarang/' . $b['id']); ?>" method="POST" style="display:inline;">
                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Di input</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($barang as $b): ?>
                    <div class="modal fade" id="modal-edit-<?= $b['id']; ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" method="POST" action="<?= base_url('barang/updateBarang/' . $b['id']); ?>">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Barang: <?= $b['nama']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" value="<?= $b['nama']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" name="kode" value="<?= $b['kode']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" step="0.01" name="harga" value="<?= $b['harga']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>