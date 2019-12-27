<?php include "db.php";?>
<?php include "functions.php";?>

<?php include "includes/header.php" ?>


<div class="container">
    
    <div class="col-sm-6">
    <?php include "register.php"; ?>

   <pre>
 <?php  ReadRows();  ?>
    </pre>
     
    </div>


<?php include "includes/footer.php"?>