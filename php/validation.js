//login valiudation//
function LoginValidation() {
    var vCheck = true;
    if ($('#username').val() === "") {
        vCheck = false;
        $('#username-error').text('Enter User name');
    } else {
        $('#username-error').text('');
    }
    if ($('#password').val() === "") {
        vCheck = false;
        $('#password-error').text('Enter Password');
    } else {
        $('#password-error').text('');
    }
    return vCheck;
}
//customer validation//
function CreateCustomerValidation(){

    var vCheck =true;
    if ($('#cardid').val() === "") {
        vCheck = false;
        $('#cardid-error').text('Enter a Customer Card ID');
    } else {
        $('#cardid-error').text('');
    }

    if ($('#fullname').val() === "") {
        vCheck = false;
        $('#fullname-error').text('Enter Fullname ');
    } else {
        $('#fullname-error').text('');
    }

    if ($('#mobilenumber ').val() === "") {
        vCheck = false;
        $('#mobilenumber-error').text('Enter mobile number');
    } else {
        $('#mobilenumber-error').text('');
    }

    if ($('#email').val() === "") {
        vCheck = false;
        $('#email-error').text('Enter email');
    } else {
        $('#email-error').text('');
    }

    if ($('#postcode').val() === "") {
        vCheck = false;
        $('#postcode-error').text('Enter Postcode');
    } else {
        $('#postcode-error').text('');
    }

    if ($('#housenumber').val() === "") {
        vCheck = false;
        $('#housenumber-error').text('Enter house number');
    } else {
        $('#housenumber-error').text('');
    }

    if ($('#cardissuedate').val() === "") {
        vCheck = false;
        $('#cardissuedate-error').text('Enter the card issue date ');
    } else {
        $('#cardissuedate-error').text('');
    }


    if ($('#customerfaxnumber').val() === "") {
        vCheck = false;
        $('#customerfaxnumber-error').text('Enter customer fax number');
    } else {
        $('#customerfaxnumber-error').text('');
    }
    return vCheck;
}
//New Invoice validation//
function CreateInvoiceValidation(){

    var vCheck =true;
    if ($('#invoiceid').val() === "") {
        vCheck = false;
        $('#invoiceid-error').text('Enter a Invoice ID Number');
    } else {
        $('#invoiceid-error').text('');
    }

    if ($('#address').val() === "") {
        vCheck = false;
        $('#address-error').text('Enter an Address ');
    } else {
        $('#address-error').text('');
    }

    if ($('#labourcost').val() === "") {
        vCheck = false;
        $('#labourcost-error').text('Enter labour cost');
    } else {
        $('#labourcost-error').text('');
    }

    if ($('#email').val() === "") {
        vCheck = false;
        $('#email-error').text('Enter email');
    } else {
        $('#email-error').text('');
    }

    if ($('#postcode').val() === "") {
        vCheck = false;
        $('#postcode-error').text('Enter User name');
    } else {
        $('#postcode-error').text('');
    }

    if ($('#housenumber').val() === "") {
        vCheck = false;
        $('#housenumber-error').text('Enter house number');
    } else {
        $('#housenumber-error').text('');
    }

    if ($('#cardissuedate').val() === "") {
        vCheck = false;
        $('#cardissuedate-error').text('Enter the card issue date ');
    } else {
        $('#cardissuedate-error').text('');
    }


    if ($('#customerfaxnumber').val() === "") {
        vCheck = false;
        $('#customerfaxnumber-error').text('Enter customer fax number');
    } else {
        $('#customerfaxnumber-error').text('');
    }
    return vCheck;
}


//New Job validation//
function CreateCustomervalidation(){

    var vCheck =true;
    if ($('#JobID').val() === "") {
        vCheck = false;
        $('#JobID-error').text('Enter a Customer Card ID');
    } else {
        $('#JobID-error').text('');
    }

    if ($('#JobType').val() === "") {
        vCheck = false;
        $('#JobType-error').text('Enter Fullname ');
    } else {
        $('#JobType-error').text('');
    }

    if ($('#JobStatus').val() === "") {
        vCheck = false;
        $('#JobStatus-error').text('Enter mobile number');
    } else {
        $('#JobStatus-error').text('');
    }

    if ($('#JobEstimatedTime').val() === "") {
        vCheck = false;
        $('#JobEstimatedTime-error').text('Enter email');
    } else {
        $('#JobEstimatedTime-error').text('');
    }

    if ($('#JobDescription').val() === "") {
        vCheck = false;
        $('#JobDescription-error').text('Enter User name');
    } else {
        $('#JobDescription-error').text('');
    }

    if ($('#JobAcceptedDate').val() === "") {
        vCheck = false;
        $('#JobAcceptedDate-error').text('Enter house number');
    } else {
        $('#JobAcceptedDate-error').text('');
    }

    if ($('#JobDeadlineDate').val() === "") {
        vCheck = false;
        $('#JobDeadlineDate-error').text('Enter the card issue date ');
    } else {
        $('#JobDeadlineDate-error').text('');
    }


    if ($('#FK_CustomerCardID').val() === "") {
        vCheck = false;
        $('#FK_CustomerCardID-error').text('Enter customer fax number');
    } else {
        $('#FK_CustomerCardID-error').text('');
    }

    if ($('#FK_VehicleRegistrationIDNumber').val() === "") {
        vCheck = false;
        $('#FK_VehicleRegistrationIDNumber-error').text('Enter customer fax number');
    } else {
        $('#FK_VehicleRegistrationIDNumber-error').text('');
    }
    return vCheck;
}