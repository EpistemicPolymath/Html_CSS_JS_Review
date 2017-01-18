// When the document loads this function plays out.
$(document).ready(function () {

    $('help-text-field').focus( function() {


            if (id == "nameInput") {

                document.getElementById("help-box").innerHTML = "Enter your name as you want it to appear on the bill.";

            }


            if (id == "emailInput") {


                document.getElementById("help-box").innerHTML = "Enter your email address in the format user@domain";
            }


            if (id == "submitButton") {


                document.getElementById("help-box").innerHTML = "Enter Address for shipping";
            }


            if (id == "resetButton"){

                document.getElementById("help-box").innerHTML = "Submit Order";

            }

            if ((id == " ") || (id == "") || (id == null)){

                document.getElementById("help-box").innerHTML = "This is to provide context-sensitive help. " +
                    "Click on any input field or use the TAB key to get more information about the input field."

            }

        }
    )
}
