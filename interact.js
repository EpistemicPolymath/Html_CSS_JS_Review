//Help-Text Interactions
// When the document loads this function plays out.
$(document).ready(function () {

    $("#nameInput").focus(function () {

        $("#helpText").val("Enter your name as you want it to appear on the bill.");

    });

    $("#emailInput").focus(function () {

        $("#helpText").val("Enter your email address in the format user@domain");
    });


    $("#address").focus(function () {

        $("#helpText").val("Enter Address for shipping");

    });

    $("#submitButton").focus(function () {

        $("#helpText").val("Submit Order");

    });


    $("#resetButton").focus(function () {

        $("#helpText").val("Clear All");

    });

    $("#helpText").val("This is to provide context-sensitive help. " +
        "Click on any input field or use the TAB key to get more information about the input field.");

});
