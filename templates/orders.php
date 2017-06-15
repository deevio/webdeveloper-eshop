<h3>Orders</h3>

<br>
<h5 class="text-danger"><?= $stav; ?></h5>


<form action="/orders" method="post">

<table class="table table-striped">
  <tr><th>Date</th><th>Number</th><th>Status</th><th>Address</th><th>Detail</th></tr> 
 
        <?php 

        // order status : confirmed rejected shipped canceled 
        $status = ['created','confirmed','waiting','shipped','rejected', '<b>canceled</b>'];

        foreach($orders as $order){
            echo ' <tr>';

                //preVar($order);
                echo ' <td>';
                    echo date('d.m.Y', $order->date);
                echo ' </td>';

                echo ' <td>';
                    echo $order->id;
                    echo '<input type="hidden" value="' . $order->id . '" name="id" />';
                echo ' </td>';

                echo ' <td>';
                    echo  $status[$order->status] ;
                echo ' </td>';  

                echo ' <td>';
                //echo preVar(unserialize($order->items));
                    echo $order->customer;
                    echo '<br>';
                    echo  $order->address;
                echo ' </td>';

                echo ' <td>';
                //echo preVar(unserialize($order->items));
                    echo '<a href="/order/' . $order->id  . '" >Show details</a>';
                echo ' </td>';

            echo ' </tr>';
        }
        ?>

</table>

<br>


</form>
