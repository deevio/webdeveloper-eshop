<h1>Knihy</h1>

<?php 


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



?>