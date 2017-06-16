<h3>Authors</h3>

<table class="table table-striped">
  <tr><th>Name</th><th>Bio</th><th>Books</th></tr> 
  </tr>
        <?php 

        foreach($authors as $author){
            echo ' <tr>';

                echo ' <td>';
                    echo '<a href="/author/'. $author->id .'" title="" >' . $author->name . '</a>';
                echo ' </td>';

                echo ' <td>';
                    echo excerpt($author->about, 19 ) ;
                echo ' </td>';

                 echo ' <td>';
                    echo '<a href="/books?autor=' . $author->id . '" title="books of author" >Books</a>';
                echo ' </td>';               

            echo ' </tr>';
        }
        ?> 
</table>