<?php include "db.php"; ?>
<?php include "functions.php"; ?> 
<?php DeleteRows(); ?>
<?php include "includes/header.php" ?>

<div class="container">
    
    <div class="col-sm-6">
      <?php include "register.php"; ?>
       <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label                                                                  for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
            <select name="id" id="">
             <?php
               showAlldata();
                
                ?>
           
            </select>
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            
        </form>
    </div>

   </div>
   <?php include "includes/footer.php" ?> 
