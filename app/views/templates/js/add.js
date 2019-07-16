/**
 * Created by Vlad on 24.06.2018.
 */

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validatePhoneNumber(phone){
    var ph = /^[789]\d{9}$/;
    return ph.test(String(phone))
}

function checkEmailInCollection(email, emails) {
    if(jQuery.inArray(email, emails) == -1){
        return 1;
    }
    return 0;
}

function getEmailsOnPage() {
    var emails = [];
    for(var i = 1; i < $("td").length; i+=4) {
        var td = $("td").eq(i);
        emails.push(td.text());
    }

    return emails;
}

$('#final_add_emp').click(function (event){
    event.preventDefault();
    //getEmailsOnPage();
    var fio = $('#fio').val();
    var email = $('#email').val();
    var phones = $('#phone').val();
    var office_num = $('#office_num').val();
    phones = phones.split(';');
    if (fio && validateEmail(email) && checkEmailInCollection(email, getEmailsOnPage()) && phones){
        var form = $('#add-form').serialize();
        var url = "/";
        $.post( "add", form ).done(function(response) {
            console.log(response);
            $("#table").append("<tr><td>" + fio + "</td><td>" + email + "</td><td>"+ phones + "</td><td>" +
                office_num  + "</td></tr>");
            $('#add-form')[0].reset();
        });
    }

});
getEmailsOnPage();