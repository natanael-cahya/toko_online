<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/jsjs/config.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->


<!-- Page level custom scripts -->

<script src="<?php echo base_url() ?>assets/js/datatables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        var tb = $('#dt').DataTable({});
        $('#fil').on('change', function() {
            tb.search(this.value).draw()
        });


    });
    $(document).ready(function() {
        var tb = $('#dtt').DataTable({
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
        $('#fil').on('change', function() {
            tb.search(this.value).draw()
        });


    });
</script>
</body>

</html>