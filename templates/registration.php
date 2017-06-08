<h3>Registration</h3>

<h4><?= $stav; ?></h4>

<form action="/registration" method="post">

<input type="text" required name="meno" value="<?= $meno ; ?>" Placeholder="Name" class="form-control"/><br>
<input type="email" required name="email" value="<?= $email ; ?>" Placeholder="Email" class="form-control" /><br>
<input type="password"  required  name="pass1" value="<?= $pass1; ?>" Placeholder="Password" class="form-control" /><br>
<input type="password" required  name="pass2" value="<?= $pass2; ?>" Placeholder="Password again" class="form-control" /><br>
<input type="text" name="adresa" value="<?= $adresa ;?>" Placeholder="Address" class="form-control" /><br>
<input type="submit" value="Register" name="registrovat" class="btn btn-success pull-right"/>

</form>