
$(document).ready(function(){

    //console.log('ok');
    
    $.get(
        'http://eshop/data/books'
    )
    
    .done(function( data ) {

        //console.table(data);
        var books = '';

        $.each( data, function(index, kniha){

           

            books += `
                <tr>
                <td><input type="text" class="form-control" name="title" value=" ${kniha.title} "/></td>
                <td><input type="text" class="form-control" name="cena" value=" ${kniha.cena} "/></td>
                <td><input type="hidden"  name="id" value=" ${kniha.id} "/></td>
                <td><input name"ulozit"  type="button" value="Uloz" class="btn btn-success"/>                
                </tr>            
            `;

            console.log(books);
          
            //var a = $('#zoznamKnih').html(books);

            // console.log(a);  

        });
         var a = $('#zoznamKnih').html(books);

    });

    $('input[name="ulozit"]').on('click', function(){
        $.post('http://eshop/data/book', {

        });
    });

});