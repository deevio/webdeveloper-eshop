<h3>Order</h3>
<h4>Number: <?= $idOrder; ?> </h4>

<br>
<h4 >Items</h4>
<h5 class="text-danger"><?= $stav; ?></h5>


<?php
        //preVar($order);   

        foreach($order as $item) {
            //echo preVar($item);  
            $orderDetail = $item['item'];
            echo '<div class="jumbotron hero-spacer text-left" >';            
            echo 'Title: <strong>' . $orderDetail->getTitle() .'</strong>';            
            echo '<br>';
            echo 'Price for item: ' . priceformat($orderDetail->getPrice()) ;
            echo '<br>';
            echo 'Total : ' . priceformat($orderDetail->getPrice()  * $item['mnozstvo'] );
            echo '<br>';
            echo  'Quantity: ' . $item['mnozstvo'];
            echo '</div>';
        }
            //echo $order->mnozstvo;      
  
?>

<form action="/order/<?= $idOrder ; ?>" method="post">
<input type="submit" value="Cancel Order" name="storno" class="btn btn-danger pull-right"/>
</form>


<?= backButton() ;?>
