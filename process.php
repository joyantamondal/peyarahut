<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username );
$password = mysql_real_escape_string($password);
mysql_connect("localhost", "root", "");
mysql_select_db("login");
$result = mysql_query("select * from  trylog where username = '$username and password = '$password' ");

$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] = $password){
    
    
    echo "login success!! welcome ".$row['username'];
}
else {
    echo "failed";
}





?>