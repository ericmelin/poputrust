<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>
        <!-- header start -->
        <?php include 'header.php'; ?>
        <!-- header end -->

        <!-- middle area start -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="alertMessage col-md-12 col-sm-12">
                        <?php
                        $flash_data = $this->session->flashdata('alert');
                        if (!empty($flash_data)) {
                            ?>
                            <div class="alert alert-<?php echo $flash_data['class']; ?>">
                                <?php echo $flash_data['message']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-12">
                        <h4 class="page-head-line">Cancel</h4>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12">
                        <div class="alert alert-danger">
                            You have canceled the last transaction.
                            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- middlearea end -->

        <!-- footer start -->
        <?php include 'footer.php'; ?>
        <!-- footer end -->
        <script type="text/javascript">
           
        </script>
    </body>
</html>