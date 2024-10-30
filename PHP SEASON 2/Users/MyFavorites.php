<?php

session_start();

if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];

}else{

    echo "<script>window.location.href='../';</script>";
}

include ("../connections.php");


include ("nav.php");


$check = $checkErr = "";

if(isset($_POST["btnSubmit"])) {

    if(empty($_POST["check"])) {
        $checkErr = "Please select at least one ( 1 )";
    }else{
        $check = $_POST["check"];
    }


    if($check) {

        echo "<br><br>";

        foreach($check as $new_check) {

            echo $new_check . "<br>";
        }
    }
}



?>


<hr>

<form method="POST">

<input type="checkbox" name="check[]" value="Beer"> Beer <Br>

<input type="checkbox" name="check[]" value="San Miguel Apple"> San Miguel Apple <Br>

<input type="checkbox" name="check[]" value="Alfonso"> Alfonso <Br>

<input type="checkbox" name="check[]" value="Tang Orange"> Tang Orange <Br>

<input type="checkbox" name="check[]" value="Kapeng Barako yung kaya ka ipaglaban"> Kapeng Barako yung kaya ka ipaglaban <Br>

<input type="checkbox" name="check[]" value="Kopiko Tinola Flavor"> Kopiko Tinola Flavor <Br>

<input type="checkbox" name="check[]" value="Soy sauce"> Soy sauce <Br>

<input type="checkbox" name="check[]" value="Ice Cream Yummy"> Ice Cream Yummy <Br>

<input type="checkbox" name="check[]" value="Kalamares"> Kalamares <Br>

<input type="checkbox" name="check[]" value="Kwek-Kwek"> Kwek-Kwek <Br>

<input type="checkbox" name="check[]" value="Balot"> Balot <Br>

<input type="checkbox" name="check[]" value="Great Taste White Choco"> Greate Taste White Choco <Br>

<input type="submit" name="btnSubmit" value="Submit">



</form>

<hr>

<script type="text/javascript">

var Category = {
    "Car": ["Honda", "BMW", "Mustang"],
    "Food": ["Pizza", "Burger", "Fries"],
    "Beer": ["Red Horse", "Alfonso", "Root Beer"],
    "Beverages": ["Coke", "Sprite", "Royal"],
    "Kape": ["Great Taste White Choco", "Kopiko Tinola Flavor", "Macha x Rambutan"],
    "FoodV2": ["Kwek-Kwek", "Kalamares", "Balot"],
    "EnergyDrink": ["Cobra", "Gatorade", "Sting"],
    "Ulam": ["Hotdog na Malungkot", "Siomeow", "Paa ng manok"],
    "Sapatos": ["Nyek", "Adidododas", "Converge"],
    "Internet": ["PLDC", "Converge", "Kabayahn"],

}

function category(value) {
    if (value.length == 0) 
        document.getElementById("choice").innerHTML = "<option></option>";
    else {
        var category_options = "";
        for (var category_name in Category[value]) {
            category_options += "<option value='" + Category[value][category_name] + "'>" + Category[value][category_name] + "</option>";
        }
        document.getElementById("choice").innerHTML = category_options;
    }
}

</script>



<select name="category" id="category" onChange="category(this.value);">

    <option name="category" value="">Select Category by clicking Here</option>

    <option name="category" value="Car">Car</option>
    <option name="category" value="Food">Food</option>
    <option name="category" value="Beer">Beer</option>
    <option name="category" value="Beverages">Beverages</option>
    <option name="category" value="Kape">Kape</option>
    <option name="category" value="FoodV2">FoodV2</option>
    <option name="category" value="EnergyDrink">Energy Drink</option>
    <option name="category" value="Ulam">Ulam</option>
    <option name="category" value="Sapatos">Sapatos</option>

</select>

<select name="choice" id="choice">

    <option name="choice" value="">Select Category First</option>

</select>