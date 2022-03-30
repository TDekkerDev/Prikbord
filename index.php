<?php include "php/inc/header.php"; ?>
<?php include "php/inc/navbar.php"; ?>
<?php include "php/tokengen.php"; ?>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="username">name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="password">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="token" name="token" hidden>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "php/inc/footer.php"; ?>