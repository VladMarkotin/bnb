/**
 * Created by Vlad on 10.01.2019.
 */

//alert("Test!");

$("#form-doer").submit(function( event ) {

    if ($("#async").val() == 0 ){

        //

        console.log("Async");
        console.log("Submit executer");
        var data = Array();
        data['doer-heading'] = $("#doer-heading").val();

        $.post( "addcategory", $("#form-doer").serialize())
            .done(function( response ) {
                if(response) {
                    var text = $.parseJSON(response);

                    var final_result = '';
                    $("#close").show();
                    $('#categories-doer-result').append('<p>Список подрубрик, которые относятс к данной рубрике:' +
                    '</p><ul id = "cat-list">')
                    for (var i = 0; i < text.length; i++){
                        $('#cat-list').append("<li id=" +  i + ">" + text[i][0]);
                        $('#cat-list').append('</li>');
                        //$('li')
                    }



                }
                console.log( response );
            });

        event.preventDefault();
    }
    else{

    }
});

$("#form-customer").submit(function( event ) {

    if ($("#async2").val() == 0 ){

        //



        console.log("Async");
        var data = Array();
        data['customer-town'] = $("#customer-town").val();

        console.log("Submit executer2");
        $.post( "addclientcategory", $("#form-customer").serialize())
            .done(function( response ) {
                if(response) {
                    var text = $.parseJSON(response);

                    var final_result = '';
                    $("#close").show();

                    $('#categories-customer-result').append('<p>Список подрубрик, которые относятс к данной рубрике:' );
                    /*'</p><ul id = "cat-list">')
                    for (var i = 0; i < text.length; i++){
                        $('#cat-list').append("<li id=" +  i + ">" + text[i][0]);
                        $('#cat-list').append('</li>');
                        //$('li')
                    }*/
                    $('#categories-customer-result').show();
                    console.log( response );



                }



            });

        event.preventDefault();
    }
    else{

    }
});

function Request(){

    var text;


    function makeRequest (data, form, eventObject){

        form.trigger( "submit" );
    }

    this.init = function (str, form){
        text = str;
        var data = [];
        data['text'] = str;
        console.log("Request init");
        makeRequest(JSON.stringify( data ), form);

    };
}


$("#doer-heading").change(function(){
    //if($(this).val() == 0) return false;

    //alert();
    //console.log( $(this).val() );

    var request = new Request();
    var form = $("#form-doer");
    var select = $(this).val();
    var i = 0;
    if(select.length > 0 ){
        //console.log(select[i] );
        var str = select[i];
        request.init(str, form);
    }
});

$("#customer-heading").change(function(){
    //if($(this).val() == 0) return false;

    //alert();
    //console.log( $(this).val() );


    var request = new Request();
    var form = $("#form-customer");
    var select = $(this).val();
    var i = 0;
    if(select.length > 0 ){
        //console.log(select[i] );
        var str = select[i];
        request.init(str, form);
    }
});

$("#close").hide();

$("#close").click(function (){
    $('#categories-customer-result').hide();
});


