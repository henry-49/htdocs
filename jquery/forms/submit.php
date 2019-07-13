<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
</head>
<body>
    
        
                
   <div class="jumbotron" style="">
       <div id="message_info"></div>
        <form id="formSubmit" action="contact.php" method="POST">
       <div class="row">
            <div class="col-md-8 col-lg-4 col-sm-12 ml-5">
        <div class="form-group">
          <label for="username">Username</label>
           <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter Username">
        </div>
           <div class="form-group">
            <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter Email">
        </div>
          
           <div class="form-group">
            <label for="message">Message</label>
               <textarea type="message" class="form-control" id="message" name="message" value="" placeholder="Write your message"></textarea>   
        </div>
            </div>
        </div>
         <button id="submit" class="btn btn-success">Submit</button>
         
    </form>
   </div>
             
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  <script src="js/main.js"></script>
    
 <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  
</body>
</html>