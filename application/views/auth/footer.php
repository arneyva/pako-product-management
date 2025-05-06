<!-- Vendor JS -->
<script src="<?= base_url('assets/main/'); ?>js/vendors.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/pages/chat-popup.js"></script>
<script src="<?= base_url('assets/assets/'); ?>icons/feather-icons/feather.min.js"></script>
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