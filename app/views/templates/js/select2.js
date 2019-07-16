var data = [
];



function matchCustom(params, data) {
    // If there are no search terms, return all of the data


    /*if ((params.term.length) > 2 ) {
        console.log(params.term );
        $("#select_query").val(params.term);

        $.post( "addclientcategory", $("#form-customer").serialize(), data)
            .done(function( response ) {
                if(response) {

                    data = JSON.parse(response);
                    $("#customer-heading").append($('<option>',
                        {
                            value:data[0]['name'],
                            text:'One'
                        }
                    ));
                    console.log( data );
                }
            });

        event.preventDefault();
    }*/

    if ($.trim(params.term) === '') {
        return data;
    }

    // Do not display the item if there is no 'text' property
    if (typeof data.text === 'undefined') {
        return null;
    }

    // `params.term` should be the term that is used for searching
    // `data.text` is the text that is displayed for the data object
    if (data.text.indexOf(params.term) > -1) {
        var modifiedData = $.extend({}, data, true);
        modifiedData.text += ' (matched)';

        // You can return modified objects from here
        // This includes matching the `children` how you want in nested data sets
        return modifiedData;
    }

    // Return `null` if the term should not be displayed
    return null;
}



$(document).ready(function() {

    $('#customer-heading').select2({

        width: 700,
        placeholder: 'Select an option',
        ajax:  {
            type: 'POST',
            url: 'addclientcategory',
            data: function (params) {
                return {
                    term: params.term // search term
                };
            },
            processResults: function (data) {
                var arr = JSON.parse(data);
                console.log("Совпадения в бд:" + arr[0].name);
                var test =  [
                    { id: 0, text: 'enhancement' },
                    { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' },
                    { id: 2, text: 'invalid' }, { id: 4, text: 'wontfix' }
                ];
                var test2 = [];

                $("#customer-heading").trigger('click');

                $("#customer-heading").html('').select2({data: test});

            }

        },
        theme: "classic",
        data: data,
        allowClear: true,
        matcher: matchCustom,
        minimumInputLength: 3
    });

    $('#doer-heading').select2({

        width: 700,
        placeholder: 'Select an option',
        ajax:  {
            type: 'POST',
            url: 'addCategory',
            data: function (params) {
                return {
                    term: params.term // search term
                };
            },
            processResults: function (data) {
                var arr = JSON.parse(data);
                console.log("Совпадения в бд:" + arr[0].name);

                var test =  [
                    { id: 0, text: 'enhancement' },
                    { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' },
                    { id: 2, text: 'invalid' }, { id: 4, text: 'wontfix' }
                ];

                /*$.each(arr, function (i, v){
                 if (i == "ID")
                 test2["id"] = v;
                 });*/

                $("#doer-heading").trigger('click');

                $("#doer-heading").html('').select2({data: test});



                /*for(var i = 0; i < arr.length; i++){
                 $("#customer-heading").append("<option value='"+arr[i].ID+"' "+arr[i].name+"</option>");
                 }*/

                //$('#customer-heading').trigger('change');
            }

        },
        theme: "classic",
        data: data,
        allowClear: true,
        matcher: matchCustom,
        minimumInputLength: 3
    });

});


