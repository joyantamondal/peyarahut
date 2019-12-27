<?php
include "db.php";
function CreateRows(){
    global $connection;
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $tk = $_POST['tk'];


$query ="INSERT INTO registercustomer(name,mobileno,person,date,tk ) ";
$query.="VALUES('$name','$mobileno','$person','$date','$tk' )";
$result= mysqli_query($connection,$query );
    
if(!$result)
{
    echo("Query FAILED". mysqli_error($connection));
}
    else
        echo "Successfully Created!";

}
}
function ReadRows(){
    global $connection;
    
 $query ="SELECT * FROM registercustomer";

$result= mysqli_query($connection,$query);
    
if(!$result)
{
    
    echo ("Query FAILED". mysqli_error());
} 
    while($row=mysqli_fetch_assoc($result))
    {
      foreach ($row as $rows) {
    echo $rows; 
    echo "<br>";
          echo "<br>";
} 
    }
}

function showAlldata(){
    global $connection;
$query ="SELECT * FROM registercustomer";

$result= mysqli_query($connection,$query);
    
if(!$result)
{
    echo ("Query FAILED". mysqli_error());
}

 while($row= mysqli_fetch_assoc($result))
                {
                    $id = $row['id'];
                    echo "<option value=$id>$id</option>";
                }

}
function UpdateTable(){
    
    if(isset($_POST['submit']))
     {
        global $connection;
        if(isset($_POST['submit'])){
      $name = $_POST['name'] ;
       $mobileno = $_POST['mobileno'] ;
       $person = $_POST['person'] ;
       $date = $_POST['date'] ;
       $tk = $_POST['tk'] ;
        $id = $_POST['id'] ;
       
       $query = "UPDATE registercustomer SET " ;    
       $query .= "name = '$name', ";
       $query .= "mobileno = '$mobileno', ";
       $query .= "person = '$person', ";
       $query .= "date = '$date', ";
       $query .= "tk = '$tk' ";
    
       $query .= " WHERE id = $id " ;
       $result=mysqli_query($connection, $query);
       if(!$result)
       {
           die("Query Failed" . mysqli_error($connection));
       } 
     else
        echo "Successfully Updated!";
}
}
}

function DeleteRows(){
    if(isset($_POST['submit']))
{
       global $connection;
     
       $id = $_POST['id'];
       $query = "DELETE  FROM registercustomer ";
       $query .= "WHERE id = $id ";
       $result=mysqli_query($connection,$query);
       if(!$result)
       {
           die("Query Failed" . mysqli_error($connection));
       } 
    else
        echo "Successfully Deleted!";
}
}
   
?>

