<?php
function connect(){
    $host = "localhost";
    $user = "dustbuster";
    $pass = "pa$$";
    $db = "dustbuster";
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    return $conn;
}

function register($email, $fname, $sname, $pcode, $pass){
    $conn = connect();
    $pass = md5($_POST['pass']);
    $query = "INSERT INTO db_customer VALUES ('$email', '$fname', '$sname', '$pcode', '$pass')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header('Location:index.php');
}


function login($email, $pass){
    $conn = connect();
    $pass = md5($_POST['pass']);
    $query = "SELECT * FROM db_customer WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    if ( mysqli_num_rows($result)===1  ){
        session_start();
        $_SESSION['user']=$email;      
        header('Location:index.php');
    }else {
        $msg = "The username/password combination supplied is incorrect Please try again.";
        echo "<script type='text/javascript'>
            alert('$msg');
            window.location = 'register.php';
            </script>";
    } 
}


function display_products() { 
 $conn = connect();
    $query = "SELECT * FROM db_product";
    $results = mysqli_query($conn, $query);
    echo "<table><thead align='left'><tr align='left'>
         <th>Product Name</th> 
         <th>Prodcut Description</th>
         <th>Image</th>
         <th>Price</th>
         <th>Order</th> 
         </tr>
        <font color=#ddd>";
    while ( $row = mysqli_fetch_array($results) )
    { echo "<tr align='left'> 
       <td align='left'>$row[name]</td>
       <td align='left'>$row[description]</td>
       <td><img src='$row[imagepath]' width='250px' height='250px'/></td>
       <td>$row[price]</td>
       <td>
       <form action='cart.php' method='post'>

<input type='submit' value='Add to basket' name='$row[pid]' />

            </form>
            
            </td>
            </tr>";
    }
    echo "</table>";
    
}

function add_to_basket($pid){
    session_start();
    if (  isset($_SESSION['basket'])  ) {
        if ( isset($_SESSION['basket'][$pid]) ){
            $_SESSION['basket'][$pid]++;
        }else {
            $_SESSION['basket'][$pid]=1;
        }
        
    }else {
        $_SESSION['basket'] = array($pid => 1);
    }
    header("Location: products.php");
}

function display_basket(){
    if ( !isset($_SESSION["basket"]) ){
        echo "<p>Your basket is empty.</p>";
        return;
    }
    echo "<table><tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
        </tr>";
    $conn = connect();
    $total = 0;
    foreach ($_SESSION["basket"] as $key=>$value) {
        $query = "SELECT name, price FROM db_product WHERE pid=$key";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "<tr>
            <td>$row[name]</td>
            <td>$value</td>
            <td>$row[price]</td>
            <td>". number_format($value*$row['price'], 2, '.', '')."</td>
            <td><form action='remove.php?pid=".$key."' method='post'><input type='submit' value='Remove' /></form></td>

            </tr>";
        $total = $total + $value*$row['price'];
    }
    echo "</table>";
    mysqli_close($conn);
    echo "<table><tr>
        <th>Total</th>
        <th>Order</th>
        </tr>
        <tr>
        <td>". number_format($total, 2, '.', '') ."</td>
        <td><form action='order.php' method='post'><input type='submit' value='Order' /></form></td>
        </tr>
        </table>";
}

function order(){
    session_start();
    if ( !isset($_SESSION["user"]) ){
        $msg = "You must be registered and logged in to order items";
        echo "<script type='text/javascript'>
            alert('$msg');
            window.location = 'register.php';
            </script>
            ";
    }
    $conn = connect();
    $query = "INSERT INTO db_order VALUES(NULL, '$_SESSION[user]')";
    mysqli_query($conn, $query);
    $oid = mysqli_insert_id($conn);
     
    foreach ($_SESSION['basket'] as $key=>$value) {
        $query = "INSERT INTO db_orderitems VALUES($oid, $key, $value)";
        mysqli_query($conn, $query);
    } 
    unset($_SESSION['basket']); 
    mysqli_close($conn);
    header('Location:index.php');
    }

function remove($pid){
unset($_SESSION['basket'][$pid]);
header("location: basket.php");
}
?>