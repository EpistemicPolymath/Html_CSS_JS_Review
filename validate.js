
window.onload = pageload();


function pageload() { //On the page's load the submit button will be hooked to the function validateForm

    document.getElementById("submitButton").onclick = validateForm;
}


function validateForm() {


//Name Validation

    var name = document.forms["theForm"]["CustomerName"].value;
    if (name == null || name == " ") {

        console.log('name validation failed');
        alert("The Name value needs to be filled");
        return false;

    }
    //Email Validation

    var email = document.forms["theForm"]["CustomerEmail"].value;
    if (email == null || email == " ") {
        console.log('email validation failed');
        alert("The Email value needs to be filled");
        return false;
    } else if (email.indexOf('@') === -1) //This checks to see if the email has an @ symbol. "-1" is an error code
    {
        console.log('email validation failed');
        alert("Email needs to contain an '@' symbol.");

        return false;
    }

    //Radio or Delivery Type Validation

    for (var i=0; i < document.theForm.deliveryPreference.length; i++) {
        //Uses the DOM and name attributes to make radio button array.length


        if (document.theForm.deliveryPreference[i].checked != true){
            console.log('delivery option validation failed');
            alert("Please select your preferred delivery option!");
            return false;

        }
    }

        //Address Validation

    var address = document.forms["theForm"]["address"].value;
    if (address == null || address == " ") {

        console.log('address validation failed');
        alert("The Address needs to be filled");
        return false;

    }

    return true;



}