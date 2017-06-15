<h3>User info</h3>
<br>
<h4>Change data</h4>

<h5 class="text-danger"><?= $stav; ?></h5>

<form action="/user" method="post">
    <input type="text" required name="meno" value="<?= $meno; ?>" Placeholder="Name" class="form-control"/><br>
    <input type="email" required name="email" value="<?= $email; ?>" Placeholder="Email" class="form-control" /><br>
    <input type="text" required name="adresa" value="<?= $adresa; ?>" Placeholder="Address" class="form-control" /><br>
    <br>
    <input type="submit" value="Change data" name="zmenit" class="btn btn-success pull-right"/>
</form>

   <br>   <br>


<h4>Change password</h4>

<form action="/user" method="post">
    <input type="password"   name="pass1" value="<?= $pass1; ?>" Placeholder="Password" class="form-control" /><br>
    <input type="password"   name="pass2" value="<?= $pass2; ?>" Placeholder="Password again" class="form-control" /><br>
    <br>
    <input type="submit" value="Change password" name="zmenit_heslo" class="btn btn-success pull-right"/>
</form>
