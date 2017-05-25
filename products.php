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
    

    <div class="main">
       <?php  
        include "website.php";
        display_products();
        ?>
            </div>
       
       <center>
    <div class="footer">Created By:Alex Nicot <a href="mailto:alex_nicot@me.com">Alex_Nicot@me.com</a>
        </div></center>
    




</body>

</html>