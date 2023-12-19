<html>
    <head>
    <title>LOG IN PAGE</title>
     <script type="Text/javascript" src="validation1.js"></script>
    <style>

        .vertical-center 
        {
            margin: 2;
            position: absolute;
            top: 25%;
            -ms-transform: translateY(-70%);
            transform: translateY(-70%);
            -ms-transform: translateX(180%);
            transform: translateX(180%);
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
             background: #808080;
             display: 
        }
        
       
        body 
        {
            background-image: url('indian-railways-history.jpeg');
            background-size: 100% 100%;
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
    
    <div class="heading-box">
                <div class="heading-position">
     <h1 align="center" style="font color: white; font-size: 20px;">USER LOG IN </h1>
    </div>
    </div>
     <center><table border="0" cellspacing="10">
     
     <br><br><br>

          <div class="vertical-center">
             <div class="login-box">
                <div class="login-position">

              

            <br><br><br>

            <center><label for="User ID">Enter User ID :</font></label>
            <input type="id" name="ID" style="font-size:18pt; height: 23px; color: yellow;"></center>

            
            <br><br>

            <center><label for="PWD"><font color="orange">Enter User Password :</font></label>
            <input type="password" name="Pwd" style="font-size:18pt; height: 23px; color: yellow"></center>

            <br><br>
  
             <input type="submit" value="submit" onclick="val()" style="font-size: medium;">

        
            <br><br><br>

           <font color="white">Don't have a account ? Click </font><a href="user creation page.html"><font color="deep blue">HERE</font></a>
        </form>  
            
             </div>
    </body>



</html>