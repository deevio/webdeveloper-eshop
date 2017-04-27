$(document).ready(function() {

    //console.log('ok');

    $.get(
        'http://eshop:8888/data/books'
    )

    .done(function(data) {

        //console.table(data);
        var books = '';
        books = `
            <thead>
                <tr>
                    <th class="col-sm-12 col-md-3">Name</th>
                    <th class="col-sm-12 col-md-3">Price</th>
                    <th class="col-sm-12 col-md-1">Edit</th>
                    <th class="col-sm-12 col-md-1">Delete</th>                    
                </tr>   
            </thead>     
        `;

        $.each(data, function(index, kniha) {



            books += `
                <tr>
                    <td>
                        <input type="text" class="form-control" name="title" value=" ${kniha.title} "/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="cena" value=" ${kniha.cena} "/>
                    </td>                    
                    <td>
                        <input name"save"  type="button" value="save" class="btn btn-success"/>
                    </td>
                    <td>
                        <input name"delete"  type="button" value="delete" class="btn btn-danger"/>
                        <input type="hidden"  name="id" value=" ${kniha.id} "/>
                    </td>                    
                </tr>            
            `;

            console.log(books);

            //var a = $('#zoznamKnih').html(books);

            // console.log(a);  

        });
        var a = $('#listOfBooks').html(books);

    });

    $('input[name="save"]').on('click', function() {
        $.post('http://eshop/data/book', {

        });
    });

});