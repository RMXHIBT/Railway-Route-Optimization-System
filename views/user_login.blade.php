<html>
<head>
<title> LOG IN PAGE</title>
 <script type="Text/javascript" src="validation1.js"></script>
<style>

    .vertical-center 
    {
        margin: 2;
        position: absolute;
        top: 20%;
        -ms-transform: translateY(-60%);
        transform: translateY(-60%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
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
         background: #364653;
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
    
     <h1 align="center"><font style="font-size: 24px">LOG IN </h1>
     <center><table border="0" cellspacing="10">
     
     <br><br><br>

          <div class="vertical-center">
             <div class="login-box">
                <div class="login-position">

              

            <form name="usl" action="{{ url('/') }}/Au_or_not" method="POST">

                @csrf


            <br><br><br>

              <center><label for="User ID"><font color="orange" style="font-size: 20px">Enter User ID :</font></label>
              <input type="id" name="ID" style = "font-size: 16pt; height: 23px;"></center>

            
            <br><br>


            <center><label for="pass"><font color="orange" style="font-size: 20px">Enter User Password :</font></label>
            <input type="password" name="Pass" style = "font-size:16pt; height: 23px;"></center>

            <br><br>
  
            <input type="submit" value="submit" onclick="val()" style="font-size: 17px;">

        
          <br><br><br>

           <font color="white" font style="font-size: 20px;">Don't have a account ? Click </font><a href="http://127.0.0.1:8000/ucreate"><font color="deep blue" font style="font-size: 20px;">HERE</font></a>
        </form>  
            
             </div>

            
</body>
</html>


