<?php 
echo '<div class="row">
        <div class="col-lg-12">';
        $viewedBook = [];
        foreach($viewedBooks as $viewedBook){
            preVar($viewedBook);
        };
echo ' </div>
    </div>';        
?>