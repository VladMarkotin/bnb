/**
 * Created by Vlad on 26.06.2018.
 */

/* Кстати говоря, подвесить обработчик можно через each()!!!*/

/*
$.each($("td button").click(function (elem){
    //alert("Yeaaaa!"); //работает !!!
    $('#edit_window').modal('show');
    id = $(this).parent().parent().children().eq(0).html(); //id правильный!
    //comment = $(this).parent().children().eq(3).html();
    //$("#edit-name").val(name);
    $("#edit-end-time").val(status);
    //$("#edit-comment").val(comment);
    $("#id").val(id);
    console.log(id);

}));

$('#edit-form').click(function (event){

    // Stop form from submitting normally
    event.preventDefault();

    // Get some values from elements on the page:
    var id = $(this).parent().parent().children().eq(0).html();


    // Send the data using post
    var posting = $.post( url, { id: id} );

    // Put the results in a div
    posting.done(function( data ) {
        alert("Yea");
    });
});

*/
