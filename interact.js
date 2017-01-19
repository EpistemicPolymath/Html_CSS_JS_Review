
$(document).getElementById("nameInput").onfocus( function () {
    document.getElementById("help-text").value = "Enter your name as you want it to appear on the bill.";
    document.getElementById("help-text").innerHTML = "Enter your name as you want it to appear on the bill.";
    $("textarea#help-text").text("Enter your name as you want it to appear on the bill.");
    $('#help-text').text("Enter your name as you want it to appear on the bill.");
});



// When the document loads this function plays out.
$(document).ready(function () {


   $(document).getElementById("nameInput").focus( function () {
        document.getElementById("help-text").value = "Enter your name as you want it to appear on the bill.";
        document.getElementById("help-text").innerHTML = "Enter your name as you want it to appear on the bill.";
        $("textarea#help-text").text("Enter your name as you want it to appear on the bill.");
        $('#help-text').text("Enter your name as you want it to appear on the bill.");
    });

    $('help-text-field').focus(function () {


            if (id == "nameInput") {

                document.getElementById("help-text").value = "Enter your name as you want it to appear on the bill.";
                $("textarea#help-text").text("Enter your name as you want it to appear on the bill.");
                $('#help-text').text("Enter your name as you want it to appear on the bill.");
            }


            if (id == "emailInput") {


                document.getElementById("help-text").innerHTML = "Enter your email address in the format user@domain";
            }


            if (id == "submitButton") {


                document.getElementById("help-text").innerHTML = "Enter Address for shipping";
            }


            if (id == "resetButton") {

                document.getElementById("help-text").innerHTML = "Submit Order";

            }

            if ((id == " ") || (id == "") || (id == null)) {

                document.getElementById("help-text").innerHTML = "This is to provide context-sensitive help. " +
                    "Click on any input field or use the TAB key to get more information about the input field."


            }
        });
});