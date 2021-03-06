<!DOCTYPE html>

<html>

<head>

    <meta name="description" content="HW1"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="cssstyles.css">


    <!-- <script src="interact.js" type="text/javascript"></script> -->

</head>


<body>
<div id="main">

    <div class="help-text">

            <textarea id="helpText" rows="8" cols="60">
         <!-- interact.js -->
            </textarea>

    </div>

    <form id="form" action="#" name="theForm" >


        Name: <input type="text" class="input-fields" class="help-text-field" id="nameInput" name="customerName"/> <br/>
        Email: <input type="text" class="input-fields" class="help-text-field" id="emailInput" name="customerEmail"/>

        <br/>

        <h3>Toppings:</h3>

        <p>
            Extra Cheese:<input type="checkbox" name="toppings[]" value="extra cheese" class="toppings"/>
            Pepperoni:<input type="checkbox" name="toppings[]" value="pepperoni" class="toppings"/>
            Olives:<input type="checkbox" name="toppings[]" value="olives" class="toppings"/>
            Pepper:<input type="checkbox" name="toppings[]" value="pepper" class="toppings"/>
            Bacon:<input type="checkbox" name="toppings[]" value="Bacon" class="toppings">
            Tomatoes:<input type="checkbox" name="topping[]" value="tomatoes" class="toppings"/>
            Mushrooms:<input type="checkbox" name="toppings[]" value="mushrooms" class="toppings"/>

        </p>

        <p>

        <h3>How do you want to get your pizza!</h3>
        Delivery <input id="delivery" type="radio" name="deliveryPreference"/>
        Pickup <input type="radio" name="deliveryPreference"/>


        <h3>Tip?</h3>
        <select id="tip" name="tip">
            <option value="15">15%</option>
            <option value="20">20%</option>
            <option value="25">25%</option>
        </select>

        <hr>

        </p>

        <p>

        <h3> Address:</h3>
        <textarea id="address" name="address" rows="4" cols="40" class="help-text-field"> </textarea>
        <br>
        <input id="submitButton" type="submit" value="Submit" class="help-text-field"/>
        <button type="button" id="resetButton" class="help-text-field" onclick="reset();"> Reset</button>
        <button id="showSummary" type="button"> Show Summary</button>

        <br>

        <!-- Insert Pizza Order Summary Table here -->
        <div id="pizzaTable">
            <h2>Pizza Order Summary</h2>
            <table id="pizzaOrderSummary">
                <tr>
                    <td class="table-headers">Name:</td>
                    <td id="nameData" class="oddrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Email:</td>
                    <td id="emailData" class="evenrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Address:</td>
                    <td id="addressData" class="oddrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Toppings</td>
                    <td class="evenrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Topping 1</td>
                    <td id="topping1Data" class="oddrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Topping 2</td>
                    <td id="topping2Data" class="evenrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Delivery?</td>
                    <td id="deliveryData" class="oddrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Tip Amount</td>
                    <td id="tipData" class="evenrow"></td>
                </tr>

                <tr>
                    <td class="table-headers">Total</td>
                    <td id="totalData" class="oddrow"></td>
                </tr>

            </table>

        </div>

        </p>

    </form>

    </form>


    <!--
    Validation
           <div id="footer">
               <a href="http://validator.w3.org/check?uri=referer">Validate HTML</a>
               <a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a>

           </div>
   -->
</div>
<!-- Javascript/JQuery Files Located Here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="validate.js" type="text/javascript"></script>
<script src="interact.js" type="text/javascript"></script>
</body>

</html>