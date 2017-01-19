window.onload = pageload();


function pageload() { //On the page's load the submit button will be hooked to the function validateForm

    document.getElementById("submitButton").onclick = validateForm;
}


function validateForm() {


//Name Validation

    var name = document.forms["theForm"]["customerName"].value;
    if ((name == " ") || (name == null) || (name == "")) {

        console.log('name validation failed');
        alert("The Name value needs to be filled");
        return false;
    }
    //Email Validation

    var email = document.forms["theForm"]["customerEmail"].value;
    if ((email == " ") || (email == null) || ( email == "")) {
        console.log('email validation failed');
        alert("The Email value needs to be filled");
        return false;
    } else if (email.indexOf('@') === -1) //This checks to see if the email has an @ symbol. "-1" is an error code
    {
        console.log('email validation failed');
        alert("Email needs to contain an '@' symbol.");
        return false;
    }


    /* If I wanted to check for at least one topping CheckBoxes

     if (document.querySelector('.toppings:checked')) {
     // somethings checked
     }else{

     alert("Don't you want a topping?");
     return false;
     }

     */
    //Radio or Delivery Type Validation
    var success = false;
    for (var i = 0; i < document.theForm.deliveryPreference.length; i++) {
        //Uses the DOM and name attributes to make radio button array.length

        if (document.theForm.deliveryPreference[i].checked == true) {
            success = true;
            break;
        }
    }

    if (success == false) {
        console.log('delivery option validation failed');
        alert("Please select your preferred delivery option!");
        return false;
    }

    //Address Validation

    var address = document.forms["theForm"]["address"].value;
    if (address == null || address == " ") {

        console.log('address validation failed');
        alert("The Address needs to be filled");
        return false;
    }


    //  document.getElementById("showSummary").style.display = "unset";
    // Tried to build Dynamic table here...never did it before so I could not finish.
    $(document).ready(function () {

        $('#showSummary').show();

        $("#showSummary").click(function () {


            $("#nameData").innerHTML = document.forms["theForm"]["customerName"].value;
            $("#emailData").innerHTML = document.forms["theForm"]["customerEmail"].value;
            $("#addressData").innerHTML = document.forms["theForm"]["address"].value;

            //Couldn't figure out how to do toppings in time

            var delivery = " ";
            if ($('#delivery').is(':checked')) {

                delivery = "Yes";
            } else {

                delivery = "No";
            }

            $("#deliveryData").innerHTML = delivery;
            $("#tipData").innerHTML = $("#tip").val();
            //Would need toppings for this
            $("#totalData").innerHTML = " ";

            $("#pizzaTable").show();

        });


    });


    return true;


}