

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    

   
</head >
<body>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <body style= "background-color: #282828;"></body>

    <div class="container">
        
          <div class="name">
            <form style="height:365px; width: 410px;" id="form1" action="login.php" method="POST">
                <h1 class="head">Login</h1>
            
       
        <table class="table">
            <tr>
                <td></td>
               <td> <label style="display: none;" id="error1">Enter minimun 12 characters</label></td>
            </tr>
          <tr>
           <td> <label class="username">Username:</label></td>
           <td> <input id="uname" type="text" name="uname" ></td>
          </tr>
          <tr>
          
           <td> <label class="password">Password:</label></td>
           <td><input id="pass" type="password" name="pass" ></td> 
          </tr>
           <tr>
            <td></td>
           <td> <label style="display: none;" id="error">Enter minimun 8 characters</label></td>
        </tr>
           
    
          
          <tr>
           <td> <label class="forgotPassword"><a href="forgotpassword.php">forgot password?</a></label></td>
           <td></td>
        </tr>
        <tr>

          <td>  <button style="width: 182px;" id="login1" type="button">Login</button></td>
          <td> <button id="cancel" type="button">Cancel</button></td>
        </tr>
       
            </form>
            <tr >
           <td  style="padding-left:46px;"><p>Don't have an account? </p></td>
           <td  style="padding-left:20px;"><p><a href="signup.php"> Signup </a></p></td>
          
        </tr>
        </table>
        
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="design.js"></script>
    <script>
     $("#login1").hover(function(){
        $(this).css("background-color","#6b8e23");
     
        },function(){
            $(this).css("background"," #9acd32");
        },
        $("#cancel").hover(function(){
        $(this).css("background-color","#f5f5f5");
     
        },function(){
            $(this).css("background","white");
        }));
        $("#pass").blur(function(){
            var text=$(this).val()
            if(text.length<8){
                $("#error").show()
            }else{
                $("#error").hide()
            }
        })
        $("#uname").blur(function(){
            var text=$(this).val()
            if(text.length<12){
                $("#error1").show()
            }else{
                $("#error1").hide()
            }
        })
       
       
    </script>
    
    </body>
</html>
