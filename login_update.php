<?php include "db.php"; ?>
<?php include "functions.php"; ?> 
<?php UpdateTable(); ?>

   <?php include "includes/header.php" ?>
   <div class="container">
    
    <div class="col-sm-6">
      <?php include "register.php"; ?>
       <h1 class="text-center">UPDATE</h1>
        <form action="login_update.php" method="post">
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            </div>
             <div class="form-group">
            <label for="mobileno">Mobile No</label>
            <input type="text" name="mobileno" class="form-control">
            </div>
             <div class="form-group">
            <label for="person">Person</label>
            <input type="text" name="person" class="form-control">
            </div>
             <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control">
            </div>
             <div class="form-group">
            <label for="tk">Taka</label>
            <input type="text" name="tk" class="form-control">
            </div>
            
          
            
            <div class="form-group">
            <select name="id" id="">
             <?php
               showAlldata();
                
                ?>
           
            </select>
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            
        </form>
    </div>
    </div>
    <?php include "includes/footer.php" ?>

