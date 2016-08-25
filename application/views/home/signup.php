<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php include 'header.php'; ?>
        <!-- MENU SECTION END-->
        <main>
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
                            <h4 class="page-head-line">Activate Your Account and Unlock Your Report!</h4>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-12">
                            <form action="<?php echo base_url('home/save'); ?>" method="post" id="registerForm">
                                <div class="row">

                                    <div class="col-md-8 col-lg-8 col-sm-12 col-md-offset-2 col-lg-offset-2">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" placeholder="First Name" class="form-control" name="firstName" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" placeholder="Last Name" class="form-control" name="lastName" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" placeholder="Email" class="form-control" name="email" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" placeholder="Confirm Password" class="form-control" name="repassword" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" name="chkTerms"/>
                                                    <a href="#">I agree to the terms and conditions</a>
                                                </div>
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-info" ><span class="glyphicon glyphicon-user"></span>Register</button>
                                                    <button  type="reset" class="btn btn-default" >Reset</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix" style="margin-top: 20px"></div>
                    <div  class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">

                            <?php
                            if (!empty($result)) {
                                ?>
                                <div class="list-group">
                                    <div class="list-group-item-heading">
                                        <div class="row">
                                            <div class="col-md-12">                                            
                                                <h3 class="text-center"> 
                                                    <button type="button" class="btn btn-success btn-lg  btn-circle"><i class="fa fa-check fa-1x"></i></button><b>
                                                        <?php echo $totalResults . ' Results found for ' . $s; ?> 
                                                    </b>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                foreach ($result as $r) {
                                    ?>
                                    <div class="list-group-item-text">
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Person</label>
                                                        <h4><a href="<?php echo base_url('home/people/s?name=' . $r['firstName'] . ' ' . $r['lastName'] . '&id=' . $r['id']); ?>"><?php echo $r['fullName']; ?></a></h4>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <div><?php echo (!empty($r['age']) ? $r['age'] : 'NA'); ?></div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>City, State</label>
                                                        <div><?php echo (!empty($r['city']) ? $r['city'] . ', ' : '') . (!empty($r['state']) ? $r['state'] : ''); ?></div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Locations</label>
                                                        <div>
                                                            <?php
                                                            if (!empty($r['addresses'])) {
                                                                foreach ($r['addresses'] as $location) {
                                                                    ?>
                                                                    <?php echo $location['city'] . ', ' . $location['state']; ?><br/>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Relatives</label>
                                                        <div>
                                                            <?php
                                                            if (!empty($r['relatives'])) {
                                                                foreach ($r['relatives'] as $relatives) {
                                                                    ?>
                                                                    <?php echo $relatives['fullName']; ?><br/>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>  
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <?php
                                }
                            }
                            if (empty($result) && isset($s)) {
                                ?>
                                <div class="list-group">
                                    <div class="list-group-item-heading">
                                        <div class="row">
                                            <div class="col-md-12">                                            
                                                <h3 class="text-center"> 
                                                    <button type="button" class="btn btn-danger btn-lg  btn-circle"><i class="fa fa-times fa-1x"></i></button><b>
                                                        <?php echo 'No Results found for ' . $s; ?> 
                                                    </b>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- CONTENT-WRAPPER SECTION END-->
        <?php include 'footer.php'; ?>
        <!-- FOOTER SECTION END-->
        <script type="text/javascript">
            $(document).on('ready', function () {

                $('#registerForm').validate({
                    rules: {
                        firstName: 'required',
                        lastName: 'required',
                        dob: "required",
                        email: {
                            required: true,
                            email: true,
                            remote: $base_url + 'home/emailExistance'
                        },
                        phone: {
                            required: true,
                            remote: $base_url + 'home/mobileExistance'
                        },
                        address: 'required',
                        city: 'required',
                        zip: 'required',
                        password: {
                            required: true,
                            minlength: 6
                        },
                        repassword: {
                            required: true,
                            minlength: 6,
                            equalTo: "#password"
                        },
                        tcAgree: "required"

                    }, messages: {
                        firstName: "Enter First Name",
                        lastName: "Enter Last Name",
                        dob: "Enter Date of Birth",
                        phone: {
                            required: "Enter Mobile",
                            remote: jQuery.validator.format("Mobile Number already used")
                        },
                        address: "Enter Address",
                        city: "Enter City",
                        zip: "Enter Zip Code",
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
                        tcAgree: "Read and accept Terms and Conditions and Privacy Policy"
                    }
                });
            });
        </script>
    </body>
</html>
