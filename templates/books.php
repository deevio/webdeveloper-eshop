<!-- Title -->
  <div class="row">
      <div class="col-lg-12">
          <h3>Latest Books</h3>
          <br>
      </div>
      <a href="<?= queryBuild('ord', 'nazov'); ?>">Nazov</a> 
      <a href="<?= queryBuild('ord', 'cena'); ?>">Cena</a> 
  </div>
  <!-- /.row -->
<form method="post"  action="/cart">
<?php

foreach($books as $book){ 


    $excerpt = 'Lorem ipsum  Lorem ipsum Lorem ipsum Lorem ipsum ';
    $imgUrl = 'https://placeimg.com/345/280/people/' . rand(1, 20);

    echo thumbnail($book->getId(), $book->getTitle() , $excerpt, $book->getPrice(), $book->getUrl(), $imgUrl);

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
<input type="submit" value="Vlozit do Kosika" name="vlozKnihy" class="btn button-succes pull-right"/>
</form>


<br><br>Celkom <?= $pocetKnih; ?> produktov<br><br>

<?php 

 echo pagination( 'books', $pocetKnih, 10, $idPage );

//echo '<br>'. $idPage . ' id page';
?>

