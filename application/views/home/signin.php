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
                        <h4 class="page-head-line">Sign In</h4>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12">
                        <form action="<?php echo base_url('home/trySignin'); ?>" method="post" id="loginForm">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-sm-12 col-md-offset-2 col-lg-offset-2">
                                    <div class="panel">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" placeholder="Email" class="form-control" name="email" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" class="form-control" name="password" id="password" value="">
                                            </div>                                               
                                            <div class="form-group">
                                                <button  type="submit" class="btn btn-info" ><span class="glyphicon glyphicon-user"></span> Signin</button>
                                                <button  type="reset" class="btn btn-default" >Reset</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
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