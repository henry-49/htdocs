$(function(){
    $("#username_error_message").hide();
    $("#email_error_message ").hide();
    $("#message_error_message").hide();
    
      var error_username = false;
     var error_email = false;
    var error_message = false;
    
    $("#username_group").focusout(function(){
        check_username()
    });
    

      $("#email_group").focusout(function(){
        check_email()
    });
    
    
      $("#message_group").focusout(function(){
        check_message()
    });
    
     //  username Error Check Function
    function check_username(){
        var username_length = $("#username_group").val().length;
        if(username_length < 7 || username_length > 20){
            $("#username_error_message").html("Should be between 7 - 20 characters");
            $("#username_error_message").show();
             error_username = true;
        }else{
            $("#username_error_message").hide();
        }
    }
    
    
     // Email Error Check Function
     function check_email(){
         var emailPattern = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);
    
        if(emailPattern.test($("#email_group").val())){
            $("#email_error_message").hide();
        }else{
           
             $("#email_error_message").html("Enter a valid email address");
            $("#email_error_message").show();
             error_email = true;
        }
         
    }
    
    
    // Message Error Check Function
     function check_message(){
        var message_length = $("#message_group").val().length;
        if(message_length < 100 || message_length > 150){
            $("#message_error_message").html("Should be between 100 - 150 characters");
            $("#message_error_message").show();
             error_message = true;
        }else{
            $("#message_error_message").hide();
        }
    }

if(res.success){

        $('.success_message').html('<div class="alert-success">Message Submited Successfully.</div>');
    }else{
        $('.success_message').html('<div class="alert alert-danger">Smomthing went wrong. Try again</div>');
    }



if(result.success){

    $('#success_message').html('<div class="alert-success">Message Submited Successfully.</div>');
}else{
    $('#error_message').html('<div class="alert alert-danger">Smomthing went wrong. Try again</div>');
}
    
    $("#resgisterForm").submit(function(){
     var error_username = false;
     var error_email = false;
    var error_message = false;
    check_username();
    check_email();
    check_message();
        if(error_username == false && error_email == false && error_message == false) {
            return true;
        }else{
            return false;
        }
    });
});
    