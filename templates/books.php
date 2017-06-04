<!-- Title -->
  <div class="row">
      <div class="col-lg-12">
          <h3>Latest Books</h3>
          <br>
      </div>
      <div class="col-lg-12">
      Sort by: 
        <a href="<?= zoradQueryString('nazov'); ?>">Name</a> 
        <a href="<?= zoradQueryString('cena'); ?>">Price</a> 
      </div>
  </div>
  <!-- /.row -->
<hr class="clearfix">
<div class="jumbotron">

<form method="get"  action="/books">
      <label>Filter</label>
      <input type="text" name="cena_od" value="<?= (isset($_GET['cena_od'])) ? $_GET['cena_od'] : ''; ?>" placeholder="price from" class="form-control"/>      
      <input type="text" name="cena_do" value="<?= (isset($_GET['cena_do'])) ? $_GET['cena_do'] : ''; ?>" placeholder="price to" class="form-control"/>
      <input type="text" name="hladaj" value="<?= (isset($_GET['hladaj'])) ? $_GET['hladaj'] : ''; ?>" placeholder="search phrase" class="form-control"/><br/>
      
      <input type="submit" value="Search" class="btn btn-success"><br/><br/>
</form>


</div>




<form method="post"  action="/cart">
<?php

foreach($books as $book){ 


    //$excerpt = 'Lorem ipsum  Lorem ipsum Lorem ipsum Lorem ipsum ';
    $imgUrl = 'https://placeimg.com/345/280/people/' . rand(1, 20);

    echo thumbnail($book->getId(), $book->getTitle() , $book->getDescription() , $book->getPrice(), $book->getUrl(), $imgUrl);

};






/*
echo ' <table class="table table-hover">
    <thead>
      <tr>
        <th>Nazov </th>
        <th>Cena</th>       
      </tr>
    </thead>
    <tbody>
';


foreach($books as $book => $listOfBooks){


    $url = '/book/' . slug($listOfBooks -> title) . '/' .$listOfBooks -> id;
    echo '<tr>';
    echo '<td>';
    echo '<a href="'. $listOfBooks -> url .'" >';    
    echo $listOfBooks -> title;
    echo '</a>';
    echo '</td>';
    echo '<td>';
    echo $listOfBooks -> cena;
    echo ' EUR';
    echo '</td>';

    

};

echo '</tbody> </table>';
*/

?>
<div style="clear:both;"></div>
<hr class="clearfix">
<input type="submit" value="Add to Cart" name="vlozKnihy" class="btn btn-info pull-right"/>
</form>



<?php 
// pagination
if( $pocetKnih > 0 ){
?>
<br><br>Number of Products: <?= $pocetKnih; ?> <br><br>
<?php 
 echo pagination( 'books', $pocetKnih, $limit, $idPage );
?>
<?php
}
?>

