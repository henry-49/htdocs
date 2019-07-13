<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
   
   <script src="mail.js"></script> 
</head>
<body>
    
    <div class="container" style="width:500px;">
      
                <h1>Contact Form</h1>
                <p id="message_info"></p>
               <br> 
               <form  action="contact.php" method="post" id="resgisterForm">
               
                   <div class="form-group">
                    
                       <label for="username">Username</label>
                       <input type="text" class="form-control" name="username" id="username_group" value="" placeholder="Enter Username" >
                       <span id="username_error_message" class="error_message invalid-feedback"></span>
                   </div>
                      
                      <div id="" class="form-group">
                       <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email_group" value="" placeholder="name@example.com" >
                         <span id="email_error_message" class="error_message invalid-feedback"></span>
                    </div>
                     
                      <div id=""class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message_group" name="message" rows="6"  placeholder="Write your Message"></textarea>
                 <span id="message_error_message" class="error_message invalid-feedback"></span>
            </div>
                    
                   <button type="submit" id="submit_group" name ="submit" class="btn btn-success">Submit</button>
                    
               </form>
           
               
        
    </div>
     
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
</body>
</html>