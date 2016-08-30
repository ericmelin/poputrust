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
                        <h4 class="page-head-line">Success</h4>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12">
                        <div class="alert alert-success">
                            <b>Success!</b> Your order has been placed successfully. Please stay tuned
                            our analyst will contact you soon.
                            <br>
                            Your Reference # : <b>ROD-7832112</b>
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
            $('#loginForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }

                }, messages: {
                    email: {
                        required: "Enter Email",
                        email: 'Enter valid Email'
                    },
                    password: {
                        required: "Enter Password",
                        minlength: "Password must be 6 character"
                    }
                }
            });
        </script>
    </body>
</html>