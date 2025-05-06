<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/images/'); ?>favicon.ico">
    <title>Techinal Test Pako Group</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/skin_color.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single {
            height: 38px;
            padding: 12px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            font-size: 1rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 24px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
            right: 10px;
        }
    </style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="<?= base_url('assets/images/'); ?>logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="<?= base_url('assets/images/'); ?>logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">Menu</li>
                            <li class="">
                                <a href="<?= base_url('transaksi'); ?>">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Transaksi</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('barang'); ?>">
                                    <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Barang</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?= base_url('akses'); ?>">
                                    <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Manajemen Akses</span>
                                    <span class="pull-right-container">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <di class="container-full">
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
                                    <h3 class="box-title">Transaksi</h3>
                                    <button type="button" class="btn btn-primary-light pull-right" data-bs-toggle="modal"
                                        data-bs-target="#modal-center">
                                        Tambah Transaksi
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal-center" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="<?= base_url('transaksi/tambahTransaksi'); ?>">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Tambah Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="barangSelect" class="form-label">Pilih Barang</label>
                                                <select name="barang_id" id="barangSelect" class="js-example-basic-single" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php foreach ($barang as $b): ?>
                                                        <option value="<?= $b['id']; ?>"><?= $b['kode']; ?> - <?= $b['nama']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="qtyInput" class="form-label">Qty</label>
                                                        <input type="number" class="form-control" min="1" value="1" id="qtyInput" name="quantity" placeholder="Masukkan jumlah" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="harga" class="form-label">Harga</label>
                                                        <input type="text" class="form-control" id="harga" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Laporan Transaksi</h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kode Barang</th>
                                                    <th>Harga</th>
                                                    <th>Quantity</th>
                                                    <th>Total harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($transaksi as $t):  ?>
                                                    <tr>
                                                        <td><?= $t['tanggal']; ?></td>
                                                        <td> <?= $t['nama_barang']; ?></td>
                                                        <td><?= $t['kode_barang']; ?></td>
                                                        <td>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span>Rp <?= $t['harga_transaksi']; ?></span>
                                                                <i class="fa fa-money"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Harga saat ini: Rp <?= $t['harga_barang']; ?>">
                                                                </i>
                                                            </div>
                                                        </td>
                                                        <td><?= $t['quantity']; ?></td>
                                                        <td>Rp<?= $t['total']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit-<?= $t['id']; ?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-<?= $t['id']; ?>">
                                                                Delete
                                                            </button>
                                                            <div class="modal fade" id="modal-delete-<?= $t['id']; ?>" tabindex="-1" aria-labelledby="modal-delete-label" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modal-delete-label">Konfirmasi Hapus Transaksi</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Apakah Anda yakin ingin menghapus Transaksi <strong><?= $t['nama_barang'] ?> ~ <?= $t['tanggal']; ?></strong>?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                            <form action="<?= base_url('transaksi/hapusTransaksi/' . $t['id']); ?>" method="POST" style="display:inline;">
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
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kode Barang</th>
                                                    <th>Harga</th>
                                                    <th>Quantity</th>
                                                    <th>Total harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit -->
                    <?php foreach ($transaksi as $t): ?>
                        <div class="modal fade" id="modal-edit-<?= $t['id']; ?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form class="form" method="POST" action="<?= base_url('transaksi/updateTransaksi/' . $t['id']); ?>">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Transaksi: <?= $t['nama_barang']; ?> ~ <?= $t['tanggal']; ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama" value="<?= $t['nama_barang']; ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Barang</label>
                                                <input type="text" name="kode" value="<?= $t['kode_barang']; ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" step="0.01" name="harga" value="<?= $t['harga_transaksi']; ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" min="1" value="<?= $t['quantity']; ?>" class="form-control">
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
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-body">
                                <p class="text-fade">Grafik Laporan Transaksi</p>
                                <h3 class="mt-0 mb-20">Bulan <?= date('F'); ?></h3>
                                <canvas id="grafikTransaksi"></canvas>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
    </footer>
    <div class="control-sidebar-bg"></div>

    </div>

    <script src="<?= base_url('assets/main/'); ?>js/vendors.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/pages/chat-popup.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>icons/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>vendor_components/datatable/datatables.min.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>vendor_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>vendor_components/fullcalendar/fullcalendar.js"></script>
    <script src="<?= base_url('assets/assets/'); ?>vendor_components/chart.js-master/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#barangSelect').select2({
                dropdownParent: $('#modal-center')
            });
            $('#barangSelect').on('change', function() {
                var barangId = $(this).val();
                if (barangId) {
                    $.ajax({
                        url: "<?= base_url('transaksi/getharga/') ?>" + barangId,
                        method: "GET",
                        dataType: 'json',
                        success: function(data) {
                            $('#harga').val(data.harga);
                        },
                        error: function() {
                            alert('Gagal ambil data');
                        }
                    });
                } else {
                    $('#harga').val('');
                }
            });
        });
    </script>
    <script>
        const labels = <?php echo $labels; ?>;
        const totalTransaksi = <?php echo $total_transaksi; ?>;
        const target = <?php echo $target; ?>;
        const ctx = document.getElementById('grafikTransaksi').getContext('2d');
        const grafikTransaksi = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Nominal Transaksi',
                    data: totalTransaksi,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Target',
                    data: Array(labels.length).fill(target),
                    type: 'line',
                    borderColor: 'red',
                    borderWidth: 2,
                    fill: false,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Transaksi Harian'
                    },
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Tanggal Transaksi'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Nominal Transaksi (Rp)'
                        }
                    }
                }
            }
        });
    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function(tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script src="<?= base_url('assets/main/'); ?>js/template.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/pages/dashboard3.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/pages/calendar.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/pages/data-table.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/pages/widget-charts2.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?= $this->session->flashdata('success'); ?>',
                confirmButtonText: 'OK',
                timer: 3000,
                showConfirmButton: true,
                timerProgressBar: true
            });
        </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: '<?= $this->session->flashdata('error'); ?>',
                confirmButtonText: 'Coba Lagi',
                timer: 3000,
                showConfirmButton: true,
                timerProgressBar: true
            });
        </script>
    <?php endif; ?>
</body>

</html>