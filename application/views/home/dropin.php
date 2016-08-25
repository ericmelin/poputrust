<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <script src="https://js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
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
                            <form action="<?php echo base_url('braintree/step2');?>" method="post" name="registrationForm" id="registerForm">
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
                                                    <input type="hidden" class="" name="payment_method_nonce" value="">
                                                    <input type="password" placeholder="Confirm Password" class="form-control" name="repassword" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" name="chkTerms"/>
                                                    <a href="#">I agree to the terms and conditions</a>
                                                </div>

                                                    <div id="dropin-container"></div>
                                                

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

                braintree.setup('<?php echo $clientToken ?>', 'dropin', {
                    container: 'dropin-container',
                    paypal: {
                        singleUse: true,
                        amount: 10.00,
                        currency: 'USD'
                    },
                    onPaymentMethodReceived: function (obj) {
                        // Do some logic in here.
                        // When you're ready to submit the form:
                        //myForm.submit();
                        $('[name=payment_method_nonce]').val(obj.nonce);
                        console.log(obj);
                        registrationForm.submit();
                    },
                    onError: function (obj) {
                        if (obj.type == 'VALIDATION') {
                            // Validation errors contain an array of error field objects:
                            obj.details.invalidFields;

                        } else if (obj.type == 'SERVER') {
                            // If the customer's browser cannot connect to Braintree:
                            obj.message; // "Connection error"

                            // If the credit card failed verification:
                            obj.message; // "Credit card is invalid"
                            obj.details; // Object with error-specific information
                        }
                    }
                    
                });
            });
        </script>
    </body>
</html>
