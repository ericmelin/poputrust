<!-- jQuery -->
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'bower_components/jquery/dist/jquery.min.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'dist/js/sb-admin-2.js'); ?>"></script>

<!--Jquery validator-->
<script src="<?php echo base_url('assets/custom/js/jquery.validate.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/custom/js/form-validator.init.js'); ?>" type="text/javascript"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'bower_components/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url(PATH_ADMIN_THEME . 'bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js'); ?>"></script>

<!--PLUpload Library-->
<script src="<?php echo base_url('assets/custom/js/plupload/plupload.full.min.js'); ?>"></script>


<script  type="text/javascript">

    // tooltip demo
    $('body').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    });
</script>
<!--DatePicker-->
<link href="<?php echo base_url('assets/custom/js/bootstrap-datepicker.css'); ?>" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url('assets/custom/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>

<script>
    function activeTab(tabname) {
        $('.nav-tabs a[href="#' + tabname + '"]').tab('show');
    }

    $(document).ready(function () {
        //make active tab as per action
<?php
$flash_data = $this->session->flashdata('alert');

if (!empty($flash_data['active_tab'])) {
    ?>
            activeTab('<?php echo $flash_data['active_tab']; ?>');

<?php } ?>
    });
</script>