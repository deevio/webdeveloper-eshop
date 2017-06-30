<h3>Admin Login</h3>

<h4><?= $stav; ?></h4>

<form action="/login" method="post">

<input type="email" required name="email" value="<?= $email ; ?>" Placeholder="Email" class="form-control" /><br>
<input type="password"  required  name="pass" value="<?= $pass; ?>" Placeholder="Password" class="form-control" /><br>
<input type="hidden"  name="ref" value="<?= $ref; ?>" />
<input type="submit" value="Login" name="prihlasit" class="btn btn-success pull-right"/>

</form>