<?php
function connect(){
    $host = "dustbustertest.cuu1evata1oa.eu-west-2.rds.amazonaws.com";
    $user = "Alex";
    $pass = "Dustbuster1337";
    $db = "Dustbuster";
    $port = "3306";
    $conn = mysqli_connect($host, $user, $pass, $db, $port);

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
    echo "<table><thead align='left'><tr align='left'>";
    while ( $row = mysqli_fetch_array($results) )
    { echo "<tr align='left'>

        <td><br/><br/><img src='$row[imagepath]' width='250px' height='250px'/></td>
       <td><h2>$row[name]</h2>
       <h5>$row[description]</h5>
       <h5>£$row[price]</h5>
      <h5>Stock Level: $row[stock]</h5>

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
        echo "<h3 style=margin-left:55px;>Your basket is empty.</h3>";
        return;
    }
    echo "  <div style='margin-left:60px;'>

        <h5>Product Name &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp;
            Quantity &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp;
            Price &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; Subtotal &nbsp; &nbsp; &nbsp; &nbsp; </h5>
        </div>  ";
    $conn = connect();
    $total = 0;
    foreach ($_SESSION["basket"] as $key=>$value) {
        $query = "SELECT name, price FROM db_product WHERE pid=$key";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "<div style='margin-left:60px;'>
            <h5>$row[name]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              $value &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                £$row[price] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                £". number_format($value*$row['price'], 2, '.', '')."
                <br /><br /><br />
            <form action='remove.php?pid=".$key."' method='post'><input type='submit' value='Remove' /></form>

            </div>
            </h5>

            ";
        $total = $total + $value*$row['price'];
    }
    mysqli_close($conn);
    echo "
        <br /><br /><br />
        <div style='margin-left:60px;'>
        <h5>Total: &nbsp;&nbsp;&nbsp;


        £". number_format($total, 2, '.', '') ." </h5>
        <h5><form action='order.php' method='post'><input type='submit' value='Order' /></form></h5>";
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
        $query2 = "UPDATE db_product SET stock = stock - $value  WHERE pid = $key";
        mysqli_query($conn, $query);
        mysqli_query($conn, $query2);
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
