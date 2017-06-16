<h3>Author</h3>

<?php
foreach($author as $item) {

    echo ' <h3> '. $item->name . '</h3>'; 
    echo '<br>'; 

    echo '<p>';
    echo $item->about;
    echo '</p>';

    echo '<br>';    
    echo '<a href="/books?autor=' . $item->id . '" title="Books from author" >Books from author</a>';

    echo '<br>';
    echo '<br>';

}
?>

<?php 

echo backButton();

?>