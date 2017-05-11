
<?php

//var_dump($_POST);

?>
<h3>Cart</h3>

<form action="/cart" method="post">
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
<h4><?= $suma; ?> EUR   -  pocet <?= $mnozstvo; ?></h4>

<br>
<input type="submit" value="Zaplatit" name="zaplat" class="btn btn-success pull-right"/>
&nbsp;&nbsp;&nbsp;
<input type="submit" value="Odstranit" name="zmazat" class="btn btn-danger pull-right"/>
</form>