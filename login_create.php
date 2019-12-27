<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php CreateRows(); ?>

<?php include "includes/header.php" ?>
<div class="container">
   
    
    <div class="col-sm-6">
      
       <h1 class="text-center">Registration</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
            <label for="name">Your Name </label>
            <input type="text" name="name" class="form-control">
            </div>
            
             <div class="form-group">
                <label                                                                  for="contact">Mobile Number</label>
            <input type="number" name="mobileno" class="form-control">
            </div>
             <div class="form-group">
                <label                                                                  for="person">How Many Person You Want To Come</label>
            <input type="text" name="person" class="form-control">
            </div>
            <div class="form-group">
                <label                                                                  for="password">Date</label>
            <input type="date" name="date" class="form-control">
            </div>
             <div class="form-group">
                <label                                                                  for="payment">After Payment Our Bkash Number then write here how much money you paid </label>
            <input type="text" name="tk" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Register">
            
        </form>
    </div>
</div>


<?php include "includes/footer.php" ?>

