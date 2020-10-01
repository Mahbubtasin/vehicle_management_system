$('document').ready(function(){
    var username_state = false;
    var email_state = false;
    $('#exampleUserName').on('blur', function(){
        var username = $('#exampleUserName').val();
        if (username == '') {
            username_state = false;
            return;
        }
        $.ajax({
            url: 'register.php',
            type: 'post',
            data: {
                'username_check' : 1,
                'username' : username,
            },
            success: function(response){
                if (response == 'taken' ) {
                    username_state = false;
                    $('#exampleUserName').parent().removeClass();
                    $('#exampleUserName').parent().addClass("form_error");
                    $('#exampleUserName').siblings("span").text('Sorry... Username already taken');
                }else if (response == 'not_taken') {
                    username_state = true;
                    $('#exampleUserName').parent().removeClass();
                    $('#exampleUserName').parent().addClass("form_success");
                    $('#exampleUserName').siblings("span").text('Username available');
                }
            }
        });
    });
    $('#exampleInputEmail').on('blur', function(){
        var email = $('#exampleInputEmail').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
            url: 'register.php',
            type: 'post',
            data: {
                'email_check' : 1,
                'email' : email,
            },
            success: function(response){
                if (response == 'taken' ) {
                    email_state = false;
                    $('#exampleInputEmail').parent().removeClass();
                    $('#exampleInputEmail').parent().addClass("form_error");
                    $('#exampleInputEmail').siblings("span").text('Sorry... Email already taken');
                }else if (response == 'not_taken') {
                    email_state = true;
                    $('#exampleInputEmail').parent().removeClass();
                    $('#exampleInputEmail').parent().addClass("form_success");
                    $('#exampleInputEmail').siblings("span").text('Email available');
                }
            }
        });
    });

    $('#reg_btn').on('click', function(){
        var username = $('#exampleUserName').val();
        var email = $('#exampleInputEmail').val();
        var password = $('#exampleInputPassword').val();
        if (username_state == false || email_state == false) {
            $('#error_msg').text('Fix the errors in the form first');
        }else{
            // proceed with form submission
            $.ajax({
                url: 'register.php',
                type: 'post',
                data: {
                    'save' : 1,
                    'email' : email,
                    'username' : username,
                    'password' : password,
                },
                success: function(response){
                    alert('user saved');
                    $('#exampleUserName').val('');
                    $('#exampleInputEmail').val('');
                    $('#exampleInputPassword').val('');
                }
            });
        }
    });
});