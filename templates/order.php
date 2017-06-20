<h3>Order</h3>
<h4>Number: <?= $idOrder; ?> </h4>

<br>
<h4 >Bought Items</h4>
<br>
<h5 class="text-danger"><?= $stav; ?></h5>


<?php
        //preVar($order);   
/*
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
*/

$html = '<table class=" table">';
$html .= '<tr><td style="font-weight: bold">Name</td><td style="font-weight: bold">Quantity</td><td style="font-weight: bold">Price</td></tr>';
//$html .= '<tr><td colspan="3"></td></tr>';
        $item = '';
        $total = 0;

        foreach($order as $item){
        $orderDetail = $item['item'];

$html .= '
          <tr>
            <td  width="33%"> ' . $orderDetail->getTitle()  . ' </td>
            <td width="33%"> ' . $item['mnozstvo'] . ' </td>
            <td width="33%"> ' . priceformat($orderDetail->getPrice()  * $item['mnozstvo'] ) . ' </td>
          </tr>';

          $total = $orderDetail->getPrice()  * $item['mnozstvo']  + $total;
        }

$html .= '<tr><td colspan="3" align="right"><br><hr/><br><h4> To pay: '. priceformat($total)  .'</h4></td></tr>';
$html .= '</table><br><br>';

echo $html;            

  
?>

<form action="/order/<?= $idOrder ; ?>" method="post">
    <input type="submit" value="Cancel Order" name="storno" class="btn btn-danger pull-right"/>
</form>



<form action="/invoice/<?= $idOrder ; ?>" method="post">
    <input type="submit" value="Generate PDF" name="pdf" class="btn btn-success pull-right"/>
</form>


</form>


<?= backButton() ;?>
