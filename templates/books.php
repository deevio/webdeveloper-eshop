<!-- Title -->
  <div class="row">
      <div class="col-lg-12">
          <h3>Latest Books</h3>
          <br>
      </div>
      <div class="col-lg-12">
      <strong>Sort by</strong> 
        <a href="<?= zoradQueryString('nazov'); ?>">Name</a> 
        <a href="<?= zoradQueryString('cena'); ?>">Price</a> 
      </div>
  </div>
  <!-- /.row -->
<br>
<form method="get"  action="/books">
    <strong>Filter</strong>
    <br>
    <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3">  
            <input type="text" name="hladaj" value="<?= (isset($_GET['hladaj'])) ? $_GET['hladaj'] : ''; ?>" placeholder="search phrase" class="form-control"/>
        </div>     

        <div class="col-sm-1 col-md-2 col-lg-2">  
            <input type="text" name="cena_od" value="<?= (isset($_GET['cena_od'])) ? $_GET['cena_od'] : ''; ?>" placeholder="price from" class="form-control"/>      
        </div>

        <div class="col-sm-1 col-md-2 col-lg-2"> 
            <input type="text" name="cena_do" value="<?= (isset($_GET['cena_do'])) ? $_GET['cena_do'] : ''; ?>" placeholder="price to" class="form-control"/>
        </div>

        <div class="col-sm-1 col-md-3 col-lg-3">   
            <select class="form-control" name="autor">
                <option value="">author</option>
                <?php 

                $selected = '';           

                foreach($authors as $author){

                    $selected = (isset($_GET['autor'])  && $_GET['autor'] === $author->id ) ? ' selected="selected" ' : $selected;
                    echo '<option value="' . $author->id . '"
                    
                    ' . $selected . '

                    
                    >' . $author->name . '</option>';

                    unset($selected);

                }
                ?>
            </select>
        </div>  
        <div class="col-sm-1 col-md-2 col-lg-2 align-righ"> 
            <input type="submit" value="Search" class="btn btn-success pull-right clearfix ">
        </div>

    </div>
    <br>  
</form>

<hr class="clearfix"/>



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

