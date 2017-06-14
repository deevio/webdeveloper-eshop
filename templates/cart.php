
<?php

//var_dump($_POST);

?>
<h3>Cart</h3>
<br>
<h4>Order form</h4>

<h5 class="text-danger"><?= $stav; ?></h5>

<form action="/cart" method="post">

<input type="text" required name="meno" value="<?= $meno; ?>" Placeholder="Name" class="form-control"/><br>
<input type="email" required name="email" value="<?= $email; ?>" Placeholder="Email" class="form-control" /><br>
<input type="text" required name="adresa" value="<?= $adresa; ?>" Placeholder="Address" class="form-control" /><br>


<table class="table table-striped">
  <tr><th>Name</th><th>Price</th><th>Quantity</th><th>Action</th></tr>
  <?php
    foreach ($knihyVKosiku as $infoOKnihe) {

    	$book = $infoOKnihe['item'];
    	$mnozstvo = $infoOKnihe['mnozstvo'];

    	echo 
			'<tr>'
    	. '<td><a href="' . $book->getUrl() . '">' . $book->getTitle() . '</a>
    	  </td>'
    	. '<td>' . $book->getPrice() . '</td>
    	<td>' . $mnozstvo . '</td>'
    	. '<td><input type="checkbox" name="zKosika[]" value="' . $book->getId()  . '" /></td>
    	</tr>';

			$mnozstvo;
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