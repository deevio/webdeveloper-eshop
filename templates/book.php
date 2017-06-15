<?php


preVar($book);

            echo '<div class="jumbotron hero-spacer text-left" >';            
            echo 'Title: <strong>' . $book->getTitle() .'</strong>';            
            echo '<br>';
            echo $book->getDescription();
            echo '<br>';
            echo '<br>';
            echo 'Price: <strong>' . priceformat($book->getPrice()) . '</strong>';
            echo '<br>'; 
            echo '<br>'; 
            echo '<br>'; 
            echo backButton();
            echo '<input type="submit" value="Buy" name="kupit" class="btn btn-success pull-right"/>';    
            echo '<br>';      
            echo '</div>';          

?>



