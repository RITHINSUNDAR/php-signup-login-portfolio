
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
  
   
</head >
<body>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <body style= "background-color: #282828;"></body>

    <div class="container">
        
          <div class="name">
            <form  id="form1" action="signupconnection.php" method="post" >
                
                <h1 class="head">Signup</h1>
            
       
     <table class="table"> 
     <tr>
                <td></td>
               <td> <label style="display: none;" id="error1">Enter minimun 12 characters</label></td>
            </tr>
          <tr >
           <td> <label class="username" >Username:</label></td>
           <td> <input id="uname3" type="text" name="uname3" ></td>
          </tr>
          <tr>
           <td> <label class="password"> Password:</label></td>
           <td><input id="pass3" type="password" name="pass3"  require ></td> 
          </tr>
          <tr>
            <td></td>
           <td> <label style="display: none;" id="error">Enter minimun 8 characters</label></td>
        </tr>
           
     </table>
         <tr>
            <td> <input style="width: 280px;" id="login3" type="submit" value="Signup"></td>
          </tr>
         
          <tr><p style="padding-left: 98px;">Already have an account?<a href="index.php">Login</a></p></tr>
      
          </div>
        </form>  
       </div>
       <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="design.js"></script>
    <script>
     $("#login3").hover(function(){
        $(this).css("background-color","#6b8e23");
     
        },function(){
            $(this).css("background"," #9acd32");
        },
        $("#cancel").hover(function(){
        $(this).css("background-color","#f5f5f5");
     
        },function(){
            $(this).css("background","white");
        }));
        $("#pass3").blur(function(){
            var text=$(this).val()
            if(text.length<8){
                $("#error").show()
            }else{
                $("#error").hide()
            }
        })
        $("#uname3").blur(function(){
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