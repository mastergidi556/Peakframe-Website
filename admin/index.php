<?php require_once 'header.php';?> 
    <div class="formholder">
        <form action="login.php" method="POST" class="form-inline">
            <input type="text" name="uname" placeholder="Username" class="form-control input-lg">
            <br><br>
            <input type ="password" name="pword" placeholder="Password" class="form-control input-lg">
            <br><br>
            <input type="submit" name="submit" value="login" class="btn btn-primary">
        </form>
    </div>
<?php require_once 'footer.php';?>  