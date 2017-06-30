$(document).ready(function() {

    //console.log('ok');

    $.get(
        'http://eshop/data/books'
    )

    .done(function(data) {

        //console.table(data);
        var books = '';

        
        books += ` 
        <form class="add">
            <table class="table table-condensed"> 
                <tr>
                    <td colspan="4"><strong>Add book</strong> </td>
                </tr>        
                <tr id="add">
                    <td class="col-sm-12 col-md-2"><input placeholder="name" class="form-control" type="text" name="nameAdd" /></td>
                    <td class="col-sm-12 col-md-2"><input  placeholder="price" class="form-control" type="text" name="priceAdd" /></td>
                    <td class="col-sm-12 col-md-2"><input  placeholder="description" class="form-control" type="text" name="descriptionAdd" /></td>
                    <td class="col-sm-12 col-md-2"><input  class="form-control" type="file" name="photo[]" multiple/></td>
                    <td class="col-sm-12 col-md-1"><input type="button" class="form-control btn btn-info" name="add" value="add" /></td>                
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
            </table>
        </form>
            `;

        books += `  
        <form class="change">      
           <table class="table table-condensed">
                <tr>
                    <th class="col-sm-12 col-md-3">Name</th>
                    <th class="col-sm-12 col-md-3">Price</th>
                    <th class="col-sm-12 col-md-3">Description</th>
                    <th class="col-sm-12 col-md-2">Edit</th>
                    <th class="col-sm-12 col-md-1">Delete</th>                    
                </tr>   
                
        `;

        
        $.each(data, function(index, kniha) {
            
            books += `
            
                <tr id="${kniha.id}">
                    <td>
                        <input type="text" class="form-control" name="title[${kniha.id}]" value="${kniha.title}"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="price[${kniha.id}]" value="${kniha.cena}"/>
                    </td>  
                    <td>
                        <input type="text" class="form-control" name="description[${kniha.id}]" value="${kniha.description}"/>
                    </td>                     
                    <td>                        
                       <input type="button" class="form-control btn btn-success" name="save" value="save"  data-id="${kniha.id}"/>
                    </td>
                    <td>                        
                        <input type="button" class="form-control btn btn-danger" name="delete" value="delete"  data-id="${kniha.id}"/>
                        <input type="hidden"  name="id"  value="${kniha.id} "/>
                    </td>                    
                </tr>    
                   
            `;
           

            //console.log(books);

            //var a = $('#zoznamKnih').html(books);

            // console.log(a);  

        });

        books += '</table></form>';
        

        var a = $('#listOfBooks').html(books);


        $('input[name="save"]').on('click', function() {

            var buttonClicked =  $(this);
            var id = buttonClicked.data('id');

            //console.log(id);
            //console.log($('input[name="save"]'));

            var title = $(`[name="title[${id}]"]`).val();
            var price = $(`[name="price[${id}]"]`).val();
            var description = $(`[name="description[${id}]"]`).val();

        
             
            $.ajax( {
                url: 'http://eshop/data/books/' + id,
                type: 'PUT',                
                data: 'title=' + title +  '&price=' + price + '&description=' + description ,
                processData: false,
                contentType: false
            } ).done(function(returnedData) {
                
                var idTr = '#' + returnedData.id;
                ok(idTr );

                if(returnedData.errorCode){
                    alert(returnedData.errorMessage);
                };

            });

      
        });


        $('input[name="delete"]').on('click', function() {

            var buttonClicked =  $(this);
            var id = buttonClicked.data('id');     
          
            $.post('http://eshop/data/book/delete/' + id, {

                id              

            }).done(function(returnedData) {
        
                console.table(returnedData);
                $('#' + returnedData.id).fadeOut(800);

                if(returnedData.errorCode){
                    alert(returnedData.errorMessage);
                };
            });
;
      
        });



        $('input[name="add"]').on('click', function() {
             
            $.ajax( {
                url: 'http://eshop/data/book/add',
                type: 'POST',                
                data: new FormData( $('form.add')[0] ),
                processData: false,
                contentType: false
            } ).done(function(returnedData) {

                 ok('#add');
                                  
            });

      
        });

    });

    function ok(sel){
       
        $(sel).css("background", 'lightgreen');
        setTimeout(function(){
        $(sel).css("background", 'white');}, 1000);
    };
            



});