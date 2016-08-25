<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>

        <div id="wrapper">

            <!-- header start -->
            <?php include 'header.php'; ?>
            <!-- header end -->

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo $page_title; ?></h1>
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
                            <form action="<?php echo base_url('admin/updateProfile'); ?>" method="post" id="updateSettings">   
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $details['firstName']; ?>" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $details['lastName']; ?>" name="lastName">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $details['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Mobile</label>

                                                <input type="text" class="form-control" placeholder="Mobile" name="phone" value='<?php echo $details['phone']; ?>'>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $details['password']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Confirm Password</label>

                                                <input type="password" class="form-control" placeholder="Confirm Password" name="repassword" value='<?php echo $details['password']; ?>'>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Address</label>
                                                <textarea name="address" placeholder="Address" cols="10" rows="3" class="form-control"><?php echo $details['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $details['city']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Zip Code</label>
                                                <input type="text" class="form-control" placeholder="Zip code" name="zip" value="<?php echo $details['zip']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-success btnDoctorFormAction">Save</button>
                                            <a href="<?php echo base_url('admin'); ?>" class="btn btn-default">Cancel</a>
                                        </div>                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- /#page-wrapper -->

            <!-- footer start -->
            <?php include 'footer.php'; ?>
            <!-- footer end -->
            <script>
                $('#updateSettings').validate({
                    rules: {
                        firstName: 'required',
                        lastName: 'required',
                        email: {
                            email: true,
                            required: true,
                            //remote: $base_url + 'home/emailExistance'
                        },
                        phone: {
                            required: true,
                            //remote: $base_url + 'home/mobileExistance'
                        },
                        address: 'required',
                        city: 'required',
                        password: {
                            required: true,
                            minlength: 6
                        },
                        repassword: {
                            required: true,
                            minlength: 6,
                            equalTo: "#password"
                        },
                    }, messages: {
                        firstName: "Enter First Name",
                        lastName: "Enter Last Name",
                        phone: {
                            required: "Enter Mobile",
                            remote: jQuery.validator.format("Mobile Number already used")
                        },
                        address: "Enter Address",
                        city: "Enter City",
                        email: {
                            required: "Enter Email",
                            email: 'Enter valid Email',
                            remote: jQuery.validator.format("Email already used")
                        },
                        password: {
                            required: "Enter Password",
                            minlength: "Password must be 6 character"
                        },
                        repassword: {
                            required: "Enter Confirm Password",
                            minlength: "Confirm Password must be 6 character",
                            equalTo: 'Confirm Password mismatch'
                        },
                    }
                });
            </script>
    </body>
</html>

