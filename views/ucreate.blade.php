<html>
<head>
<title> User Creation Page</title>
 <script type="Text/javascript" src="validation.js"></script>
<style>

    .vertical-center 
    {
        margin: 2;
        position: absolute;
        top: 20%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -ms-transform: translateX(140%);
        transform: translateX(140%);
    }

    .login-box
    {
         background: rgba(0,0,0,0.7)  ;
         display: flex;
    }
    .login-position
    {
         flex-basis:-150%;
         padding:30px 10px;
    }

    .heading-box
    {
         background: #7b8ea8;
         display: 
    }
    
   
    body 
    {
        background-image: url('3rd page.jpg');
    }

    option 
    { 
        background-color: #5a88af;
    }


     input[type=submit]
    {
        background-color: #B0B948;
        border: none;
        border-radius: 14px;
        color: black;
        padding: 14px 25px;
        text-decoration: none;
        margin: none
        cursor: pointer;
        -ms-transform: translateX(00%);
        transform: translateX(00%);
    }

</style>
</head>
<body>
    

     <h1 align="center"><font style="font-size: 24px">REGISTRATION</h1>
     <center><table border="0" cellspacing="10">
     
     <br><br><br>

          <div class="vertical-center">
             <div class="login-box">
                <div class="login-position">


              
            <form name="uac" action="{{ url('/') }}/new_Account }}" method="POST">

                @csrf


            <br><br>

            <center><label for="Name"><font color="orange"style="font-size: 18px;">Enter User Name :</font></label>
            <input type="text" name="name" style = "font-size:11pt; height: 23px;"></center>

            <br><br>

            <center><label for="Num"><font color="orange" style="font-size: 18px;">Enter Mobile Number :</font></label>
            <input type="tel" name="number" style = "font-size:11pt; height: 23px;"></center>

            <br><br>

            <center><label for="eid"><font color="orange" style = "font-size: 18px;">Enter User Email ID :</font></label>
            <input type="email" name="email_id" style = "font-size:11pt; height: 23px;"></center>

           <br><br>

           <center><label for="gender"><font color="cyan" style = "font-size: 18px;">Select gender :</font></label>
            <select name="type" id="TOL" style = "font-size: 18pt; color: orange;">
            <option value="    ">        </option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
            </select>
           </center>

            <br><br>

            <center><label for="pass"><font color="orange" style = "font-size: 18px;">Enter new Password :
            </font></label>
            <input type="password" name="pass" style = "font-size:11pt; height: 23px;"></center>

            <br><br>

            <center><label for="pass"><font color="orange" style = "font-size: 18px;">Confirm new Password :
            </font></label>
            <input type="password" name="apass" style = "font-size:11pt; height: 23px;"></center>

            <br><br><br>
  
             <input type="submit" value="Submit" onclick="val()" style="font-size: medium;">

        
          <br><br><br>
        </form>  
            
             </div>
</body>
</html>