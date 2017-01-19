<?php

/**
 * printing un-validated input from a user on the screen is a bad practice and can be a security problem dont do in productions
 * @param $varName
 * @return string
 */
function checkGet($varName) {
    if (array_key_exists($varName,$_GET)) {
        return $_GET[$varName];
    }else {
        return $varName;
    }
}
?>

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
            This TEXTAREA provides context-sensitive help.
                Click on any input field or use the TAB key to get more information
                about the input field.
            </textarea>

    </div>

    <form action="#" name="theForm">

        <!-- follow the pattern here for the rest of the inputs -->
        Name: <input value="<?= checkGet('customerName');?>" type="text" class="input-fields" class="help-text-field" id="nameInput" name="customerName"/> <br/>
        Email: <input value="<?= checkGet('customerEmail');?>" type="text" class="input-fields" class="help-text-field" id="emailInput" name="customerEmail"/>

        <br/>

        <h3>Toppings:</h3>

        <p>
            Extra Cheese:<input type="checkbox" name="toppings[extra cheese]" class="toppings"/>
            Pepperoni:<input type="checkbox" name="toppings[pepperoni]" class="toppings"/>
            Olives:<input type="checkbox" name="toppings[olives]" class="toppings"/>
            Pepper:<input type="checkbox" name="toppings[pepper]" class="toppings"/>
            Bacon:<input type="checkbox" name="toppings[Bacon]" class="toppings">
            Tomatoes:<input type="checkbox" name="toppings[tomatoes]" class="toppings"/>
            Mushrooms:<input type="checkbox" name="toppings[mushrooms]" class="toppings"/>

        </p>

        <p>

        <h3>How do you want to get your pizza!</h3>
        Delivery <input id="delivery" type="radio" name="deliveryPreference" value="Delivery"/>
        Pickup <input type="radio" name="deliveryPreference" value="Pickup"/>


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
        <textarea id="address" name="address" rows="4" cols="40" class="help-text-field"></textarea>
        <br>
        <input id="submitButton" type="submit" value="Submit" class="help-text-field"/>
        <button type="button" id="resetButton" class="help-text-field" onclick="reset();"> Reset</button>
        <input name="showSummary" type="submit" value="Show Summary">

        <br>

        <!-- Insert Pizza Order Summary Table here -->
        <!-- this is short-hand PHP, if showSummary is not present then hide the pizza table -->
        <div id="pizzaTable" <?= (!array_key_exists('showSummary',$_GET) ? "style='display: none;'" : ""); ?>>
            <h2>Pizza Order Summary</h2>
            <table id="pizzaOrderSummary">
                <?php
                    if (array_key_exists('showSummary',$_GET)) {
                        $SummaryVariables = [
                                'customerName' => 'Customer Name',
                                'customerEmail' => 'Customer Email',
                                'toppings' => 'Toppings',
                                'deliveryPreference' => 'Delivery Preference',
                                'address' => 'Address',
                                'tip' => 'Tip'
                        ];
                        foreach ($SummaryVariables as $getVar => $Label) {
                            ?>
                            <tr>
                                <td class="table-headers"><?= $Label;?>:</td>
                                <td id="<?= $getVar;?>" class="oddrow">
                                    <?= (is_array($_GET[$getVar]) ? implode(', ',$_GET[$getVar]) : $_GET[$getVar]);?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>

        </div>

        </p>

    </form>

    </form>

    <pre>
        <?php print_r($_GET);?>
    </pre>


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