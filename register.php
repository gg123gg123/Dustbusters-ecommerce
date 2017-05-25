
<!DOCTYPE html>

<html>

<head>
    <title>DustBusters</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="navigation">
        <div class="logo"><img src="img/logo.png" />
        </div>
        <div class="menu">
            <a class="item" href="index.php">Home</a>
            <a class="item" href="products.php">Products</a>
            <a class="item" href="register.php">Register</a>
            <a class="item" href="basket.php">Basket</a>
        </div>
    </header>

    
    <font color="#ddd">
    <div class="main">
        <div class="register">
            <p>Sign up to dustbusters.</p>
        <form action="reg.php" method="post">
            <p><label>Email address:</label><input type="text" name="email"/></p>
            <p><label>First Name:</label><input type="text" name="fname"/></p>
            <p><label>Surname:</label> <input type="text" name="sname"/> </p>
            <p><label>Post Code:</label> <input type="text" name="pcode"/></p>
            <p><label>Password:</label> <input type="password" name="pass" maxlength="25" /> 25 character limit</p>
            <p><input type="submit" value="Register" /></p>
        </form>
        </div>
        
           <div class="login">
            <p> login to your DustBusters account.</p>
            <form action="login.php" method="post">
            <p><label>Email address:</label><input type="text" name="email"/></p>
                <p><label>Password:</label><input type="password" name="pass"/></p>
                <p><input type="submit" value="LogIn"/></p>
            </form>
        </div>
    </div>
    
    <center>
    <div class="footer">Created By:Alex Nicot <a href="mailto:alex_nicot@me.com">Alex_Nicot@me.com</a>
        </div></center>
   


</body>

</html>

