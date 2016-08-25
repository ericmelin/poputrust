$.validator.setDefaults(
        {
            showErrors: function (map, list)
            {
                this.currentElements.parents('label:first, div:first').find('.has-error').remove();
                this.currentElements.parents('.form-group:first').removeClass('has-error');
                this.currentElements.parents('.form-group-sm:first').removeClass('has-error');
                $.each(list, function (index, error)
                {
                    var ee = $(error.element);
                    var eep = ee.parents('label:first').length ? ee.parents('label:first') : ee.parents('div:first');

                    ee.parents('.form-group:first').addClass('has-error');
                    ee.parents('.form-group-sm:first').addClass('has-error');
                    eep.find('.has-error').remove();
                    eep.append('<p class="has-error help-block">' + error.message + '</p>');
                });
                //refreshScrollers();
            }
        });

$(function ()
{
    $(".login_form").validate({
        rules: {
            email: {
                required: true,
                email:true
            },
            password: {
                required: true,
                minlength: 6
            }
            

        },
        messages: {
           email: {
                required: "Enter Email",
                email: 'Enter valid Email'
            },
            password: {
                required: "Enter Password",
                minlength: "Password must be 6 a character long"
            }
        }
    });

    $(".set_new_password").validate({
        rules: {
            password: {
                required: true,
                minlength: 5,
            },
            confirmPassword: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            password: {
                required: "Please enter New Password",
                minlength: "Password must be 5 characters long"
            },
            confirmPassword: {
                required: "Please enter Confirm New Password",
                minlength: "Your password must be 5 characters long",
                equalTo: 'New Password and Confirm New Password must be same'
            }
        }
    });



});
