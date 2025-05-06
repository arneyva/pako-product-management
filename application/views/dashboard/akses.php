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
                            <h3 class="box-title">Manajemen Akses</h3>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">List Data User</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Role Akses</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($akses as $a):  ?>
                                            <tr>
                                                <td><?= $a['username']; ?></td>
                                                <td><?= $a['email']; ?></td>
                                                <td><?= $a['useraccess']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-<?= $a['id']; ?>">
                                                        Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Role Akses</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($akses as $a): ?>
                    <div class="modal fade" id="modal-edit-<?= $a['id']; ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" method="POST" action="<?= base_url('akses/updateAkses/' . $a['id']); ?>">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit user: <?= $a['nama']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="nama" value="<?= $a['username']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="<?= $a['email']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Role Akses</label>
                                            <select name="useraccess" class="form-control">
                                                <option value="admin" <?= ($a['useraccess'] == 'admin') ? 'selected' : '' ?>>Admin</option>
                                                <option value="user" <?= ($a['useraccess'] == 'user') ? 'selected' : '' ?>>User</option>
                                            </select>
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