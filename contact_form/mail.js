       $(document).ready(function(){
   $("form").submit(function(event){
       event.preventDefault();
       
       var username = $("#username_group").val();
       var email = $("#email_group").val();
       var message = $("#message_group").val();
       var submit = $("#submit_group").val();
       
       $("#message_info").load("contact.php",{
           username: username,
           email: email,
           message: message,
           submit: submit
       });
   });
});