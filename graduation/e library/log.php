<!DOCTYPE html>
<html>
<head>
    <meta charset= "utf-8">
    <title> login form </title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="loginbox"> 
        <img src="pic2.jpeg" class="pic2">
        <h1>LOGIN HERE</h1>
        <form method="POST" action="home.php" >
            <label class="tt">USERNAME:</label>
            <input type="name"  name="name" placeholder="enter name" required autofocus> 

            <label class="tt">PASSWORD:</label>
            <input type="password" name="password" placeholder="enter password" required minlength="10" maxlength="20"> 

            <label class="tt">THE EMAIL:</label> 
            <input type="email" name="email" placeholder="enter your email"> 

            <input type="submit"  value="SUBMIT">
            <input type="reset"  value="RESET">


            <a href="#"> Forgot your password</a> <br>
            <a href="#"> Don't have account</a>
        </form>
    </div>

</body>
</html>
