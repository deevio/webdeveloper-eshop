<?php
use Classes\User;
use Classes\Cart;
use Classes\Objednavky;


$idUser = (!isLoggedIn()) ? header('Location: /')  : loggedUserId();

$zakaznik = new User();
$objednavky = new Objednavky();

$order = $objednavky->getOrder($idOrder, $idUser );
$orders = unserialize($order);
$date = time();

//config
//$stylesheet = '../dist/css/style-print.css';

//store
$logo = '<img src="../dist/images/bookstore.png" alt="logo" width="120"  />';
$header = '&nbsp;&nbsp; <span style="color: grey;"> Bookstore s.r.o., Lievancova 6, 04001 Kosice</span>';

//customer
$customer  = '<h3>'. $zakaznik->getUserInfo($idUser, 'name') .'</h3><br>';
$customer .=  $zakaznik->getUserInfo($idUser , 'address') .'<br><br>';
$customer .=  $zakaznik->getUserInfo($idUser , 'email') .'<br>';

$payId = date('ymd', $date) . $idOrder; 
$eshop = '<h3>Bookstore s.r.o.</h3> <br> Lievancova 6<br> 04001 Kosice<br><br>  phone: 055 111111<br>  email: bookstore@bookstore.sk';
$contact = '';
$bankAccount = 'SK 123  456 7890 ';
$footer = '';



//html
$html  = $logo . $header;
$html .= '<br><hr style"color:  #d2d2d2"/><br>';
$html .= '<br><br>';
$html .= '<table width="100%" style="width:100%">';
$html .= '<tr>';
$html .= '<td colspan="2">';
$html .= '<h2>Invoice #'. $payId . '</h2><br><br>' ;
$html .= '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td valign="top">';
$html .=  $eshop;
$html .= '</td>';
$html .= '<td valign="top">';
$html .=  $customer;
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';

$html .= '<br><hr style"color:  #d2d2d2"/><br>';

$html .= '<h3>Bought Items</h3>' ;

$html .= '<table width="100%">';
$html .= '<tr><td style="font-weight: bold">Name</td><td style="font-weight: bold">Quantity</td><td style="font-weight: bold">Price</td></tr>';

        $item = '';
        $total = 0;

        foreach($orders as $item){
        $orderDetail = $item['item'];

$html .= '<tr><td colspan="3"></td></tr>
          <tr>
            <td  width="33%"> ' . $orderDetail->getTitle()  . ' </td>
            <td width="33%"> ' . $item['mnozstvo'] . ' </td>
            <td width="33%"> ' . priceformat($orderDetail->getPrice()  * $item['mnozstvo'] ) . ' </td>
          </tr>';

          $total = $orderDetail->getPrice()  * $item['mnozstvo']  + $total;
        }

$html .= '<tr><td colspan="3" align="right"><br><hr/><br><h4> To pay: '. priceformat($total)  .'</h4></td></tr>';
$html .= '</table>';








//generate PDF
$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('invoice-'.$idOrder.'.pdf','D');
//$mpdf->Output();
exit;



?>