
<?php

//var_dump($_POST);

?>
<h3>Cart</h3>

<form action="/cart" method="post">

<input type="text" name="meno" value="<?=  (isset($_POST['meno'])) ? $_POST['meno'] : '' ; ?>" Placeholder="Name" class="form-control"/><br>
<input type="email" name="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : '' ; ?>" Placeholder="Email" class="form-control" /><br>
<input type="text" name="adresa" value="<?= (isset($_POST['adresa'])) ? $_POST['adresa'] : '' ; ?>" Placeholder="Addresss" class="form-control" /><br>

<table class="table table-striped">
  <tr><th>Name</th><th>Price</th><th>Quantity</th><th>Action</th></tr>
  <?php
    foreach ($knihyVKosiku as $infoOKnihe) {
    	$book = $infoOKnihe['item'];
    	$mnozstvo = $infoOKnihe['mnozstvo'];
    	echo '<tr>'
    	. '<td><a href="' . $book->getUrl() . '">' . $book->getTitle() . '</a>
    	  </td>'
    	. '<td>' . $book->getPrice() . '</td>
    	<td>' . $mnozstvo . '</td>'
    	. '<td><input type="checkbox" name="zKosika[]" value="' . $book->getId()  . '" /></td>
    	</tr>';
    }
  ?>	
</table>
<br>
<h4><?= $suma; ?> EUR   -  amount:  <?= $mnozstvo; ?></h4>

<br>
<input type="submit" value="Send order" name="objednat" class="btn btn-success pull-right"/>
&nbsp;&nbsp;&nbsp;
<input type="submit" value="Delete" name="zmazat" class="btn btn-danger pull-right"/>
</form>