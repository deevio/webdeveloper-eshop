<?php
//preVar($book);

            echo '<div class="jumbotron hero-spacer text-left" >';            
            echo '<h3>' . $book->getTitle() .'</h3>';            
            echo '<br>';
            echo 'Author: ';
            echo '<br>'; 
            echo $book->getDescription();
            echo '<br>';            
            echo '<br>';
            echo 'Price: <strong>' . priceformat($book->getPrice()) . '</strong>';            
            echo '<br>';

            echo '<hr>';

            if(count($images) > 0){
                foreach($images as $image) {

                    echo '<img src="'. $path . $idBook . '/' .$image .'" class="img-thumbnail" alt="image" width="200" style="margin-right: 10px;" >';

                }
            }

           


            echo '<br>'; 
            echo '<br>'; 
            echo backButton();
            // echo '<form method="get"  action="' .  $_SERVER['REQUEST_URI'] . '">';
            echo '<form method="post"  action="/cart">';
            //echo ' Quantity : <input  type="number" name="mnozstvo" value="1" min="1" class="form-control">';
            echo '<input type="submit" value="Buy" name="kupit" class="btn btn-success pull-right"/>';    
            echo '<br>';      
            echo '</div>';          

?>



