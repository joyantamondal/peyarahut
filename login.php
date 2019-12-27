

<?php include "includes/header.php" ?>
<div class="container">
    
    <div class="col-sm-6">
       <h1 class="text-center">LOGIN</h1>
        <form action="process.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="user" name="user" class="form-control">
            </div>
            
             <div class="form-group">
                <label                                                                  for="password">Password</label>
            <input type="password" id="pass" name="pass" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            
        </form>
    </div>





</div>
<?php include "includes/footer.php" ?>