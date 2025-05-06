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