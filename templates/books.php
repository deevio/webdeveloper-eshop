<!-- Title -->
  <div class="row">
      <div class="col-lg-12">
          <h3>Latest Books</h3>
      </div>
  </div>
  <!-- /.row -->

<?php 

foreach($books as $book => $listOfBooks){ 


    $excerpt = 'Lorem ipsum  Lorem ipsum Lorem ipsum Lorem ipsum ';
    $imgUrl = 'https://placeimg.com/245/180/people/' . rand(1, 20);

    echo thumbnail($listOfBooks -> title, $excerpt, $listOfBooks -> cena, $listOfBooks -> url, $imgUrl);

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