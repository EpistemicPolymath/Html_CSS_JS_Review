/**
 * Created by EpistemicPolymath on 1/17/2017.
 */
window.onload = pageload;

function pageload() { //On the page's load the submit button will be hooked to the function validateForm

    var submitCompute = document.getElementById("submitButton");
    submitCompute.onlick = validateForm;

}

function validateForm() {

    var valid = 0;

//Name Validation

    var name = document.forms["theForm"]["CustomerName"].value
    if (name == null || name == " ") {

        alert("The Name value needs to be filled");
        return false;
    } else {
        valid++;
    }
    //Email Validation

    var email = document.forms["theForm"]["CustomerEmail"].value
    if (email == null || email == " ") {

        alert("The Email value needs to be filled");
        return false
    } else if (email.indexOf('@') === -1) //This checks to see if the email has an @ symbol. "-1" is an error code
    {
        alert("Email needs to contain an '@' symbol.");
        return false;
    } else {
        valid++;
    }


    //Radio or Delivery Type Validation

    for (var i=0; i < document.theForm.deliveryPreference.length; i++) {
        //Uses the DOM and name attributes to make radio button array.length

        if (document.theForm.deliveryPreference[i].checked == true){
            valid++
            return true;
        } else {

            alert("Please select your preferred delivery option!")
            return false;
        }
    }

        //Address Validation

    var address = document.forms["theForm"]["address"].value
    if (address == null || address == " ") {

        alert("The Address needs to be filled")
        return false;
    } else {
        valid++;
    }

}