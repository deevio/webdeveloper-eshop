<h3>Order</h3>
<h4>Number: <?= $idOrder; ?> </h4>

<br>
<h5 class="text-danger"><?= $stav; ?></h5>

<?php

        //preVar($order);   

        foreach($order as $item) {
            echo preVar($item);  
            echo '<div class="jumbotron hero-spacer text-left" >';
            //echo 'Title: ' . $item['item']->title;
            //echo '<br>';
            echo  'Quantity: ' . $item['mnozstvo'];
            echo '</div>';
        }
            //echo $order->mnozstvo;      
  
?>

<form action="/order/<?= $idOrder ; ?>" method="post">
<input type="submit" value="Cancel Order" name="storno" class="btn btn-danger pull-right"/>
</form>


<a href="<?= $_SERVER['HTTP_REFERER'] ; ?>" title="back" class="btn btn-info pull-left"/> Back </a>
