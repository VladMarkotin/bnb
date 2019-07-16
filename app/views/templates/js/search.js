/**
 * Created by Vlad on 06.01.2019.
 */

//alert("Hi!"); works!

$('#sign').click(function (){
    $("#async").val(1);
});

$('#customer-submit').click(function (){
    $("#async2").val(1);
});

$("#form-doer").submit(function( event ) {

    if ($("#async").val() == 0 ){

        //

        console.log("Async");
        console.log("Submit executer");
        var data = Array();
        data['doer-town'] = $("#doer-town").val();

        $.post( "addexecuter", $("#form-doer").serialize())
            .done(function( response ) {
                var text = $.parseJSON(response);
                //console.log($.map(text, function(el) { return el }) );
                var result = $("#towns").text( text[0][0] );
                result.click(function (event){
                    var city = $("#towns").text();
                    $("#doer-town").val(city);
                    //$("#towns").text("");
                });
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
        $.post( "addclient", $("#form-customer").serialize())
            .done(function( response ) {

                var text = $.parseJSON(response);
                $.map(text, function(el) { return el });
                var result = $("#customer-towns-output").text( text[0][0] );


                result.click(function (event){
                    var city = $("#customer-towns-output").text();
                    $("#customer-towns").val(city);
                    $("#customer-towns-output").text("");
                });
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

        /*$.ajax({
            url: "postcity",
            type: "post",
            data: data
        }).done(function(response) {
            //$( this ).addClass( "done" );
            console.log(response);
        });*/
    }

    this.init = function (str, form){
        text = str;
        var data = [];
        data['text'] = str;
        console.log("Request init");
        makeRequest(JSON.stringify( data ), form);

    };
}

/* То что надо */

$("#doer-town").keypress(function(eventObject){

    var request = new Request();
    var form = $("#form-doer");
    if($("#doer-town").val().length > 2){
        var str = $("#doer-town").val();
        request.init(str, form);
    }

});

$("#customer-town").keypress(function(eventObject){

    var request = new Request();

    var form = $("#form-customer");
    if($("#customer-town").val().length > 2){
        console.log("Customer");
        var str = $("#customer-town").val();
        request.init(str, form);
    }

});