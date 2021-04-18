<!-- Vendor -->
<script src="/website/vendors/jquery/jquery.min.js"></script>
<script src="/website/vendors/jquery.appear/jquery.appear.min.js"></script>
<script src="/website/vendors/jquery.easing/jquery.easing.min.js"></script>
<script src="/website/vendors/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/website/vendors/popper/umd/popper.min.js"></script>
<script src="/website/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/website/vendors/jquery.validation/jquery.validate.min.js"></script>
<script src="/website/vendors/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/website/vendors/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/website/vendors/lazysizes/lazysizes.min.js"></script>
<script src="/website/vendors/isotope/jquery.isotope.min.js"></script>
<script src="/website/vendors/owl.carousel/owl.carousel.min.js"></script>
<script src="/website/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/website/vendors/vide/jquery.vide.min.js"></script>
<script src="/website/vendors/vivus/vivus.min.js"></script>
<script src="/website/vendors/nanoscroller/jquery.nanoscroller.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/website/js/theme.js"></script>


<!-- Current Page Vendor and Views -->
<script src="/website/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/website/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Theme Custom -->
<script src="/website/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/website/js/theme.init.js"></script>
<script src="/website/vendors/jquery.countdown/jquery.countdown.min.js"></script>

<script src="<?= base_url() ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
</body>

</html>