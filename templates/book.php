<?php
echo $slug;
echo '<br>';
//echo $idBook;


/*
foreach($lastBooks as  $key =>  $book){
    echo $key .' - '. $book; 
    echo '<br>';
}
*/

preVar($book);

            echo '<div class="jumbotron hero-spacer text-left" >';            
            echo 'Title: <strong>' . $book->getTitle() .'</strong>';            
            echo '<br>';
            echo $book->getDescription();
            echo '<br>';
            echo '<br>';
            echo 'Price: ' . priceformat($book->getPrice());
            echo '<br>'; 
            echo '<br>'; 
            echo '<br>'; 
            echo backButton();
            echo '<input type="submit" value="Buy" name="kupit" class="btn btn-success pull-right"/>';    
            echo '<br>';      
            echo '</div>';          

?>



