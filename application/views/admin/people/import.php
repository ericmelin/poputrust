<!DOCTYPE html>
<html lang="en">
    <?php include APPPATH . 'views/admin/head.php'; ?>
    <body>

        <div id="wrapper">

            <!-- header start -->
            <?php include APPPATH . 'views/admin/header.php'; ?>
            <!-- header end -->

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">                        
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $page_title; ?>   </h1>
                        </div>
                        <div class="alertMessage col-md-12 col-lg-12 col-sm-12">
                            <?php
                            $flash_data = $this->session->flashdata('alert');
                            if (!empty($flash_data)) {
                                ?>
                                <div class="alert alert-<?php echo $flash_data['class']; ?>">
                                    <?php echo $flash_data['message']; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                </div>
                                <br/>
                            <?php } ?>
                        </div>
                        <div class="col-lg-12">
                            <!--stories--> 
                            <form id="addDisease" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/people/doImport'); ?>" >
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Select People CSV File</label>
                                            <input type="file" class=""  value="" name="peopleCSV">
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" >Save</button>
                                        </div>
                                    </div>
                                </div>                               

                            </form>
                        </div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- /#page-wrapper -->

        <!-- footer start -->
        <?php include APPPATH . 'views/admin/footer.php'; ?>
        <!-- footer end -->
        <script type="text/javascript">
            $(document).ready(function () {

                $base_url = "<?php echo base_url(); ?>";
                $uploadContentUrl = $base_url + 'admin/';
            });
        </script>
    </body>
</html>

