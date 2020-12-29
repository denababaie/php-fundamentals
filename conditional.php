<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<!-------------------------- EX N°2. Display greeting message depending on the current time----------------------------->
<?php 
// Starting off by displaying current time

date_default_timezone_set('Europe/Paris');
$heure = date("G") ; 
$minutes = date("i");
echo "$heure". " : " ."$minutes";

// 05h00 and 09h00
if($heure == 5 && $heure == 9){
    echo " Good morning";

    // 09h01 and 12h00
} elseif ($heure == 9 || $minutes > 1  && $heure < 12) {
    echo " Good day"; 

//12h01 and 16h00
}elseif ($heure == 12 || $minutes > 1  && $heure < 16) {
    echo " Good afternoon !"; 
}

//16h01 and 21h00 
elseif ($heure == 16 || $minutes > 1  && $heure < 21) {
    echo " Good evening  !"; 
}


//21h01 and 4h59 
elseif ($heure == 21 || $minutes > 1  && $heure == 4 || $minutes == 59) {
    echo " Good night !"; 
}
?>


<!------------------------------- EX N°3. Display greeting message according user's age----------------------------->

<form method="get" action="">
	<label for="">Please type in your age</label>
	<input type="" name="age">
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender" value="female">
    <input type="submit" name="submit" value="Greet me now">


</form>

<?php
if (isset($_GET['age'])){
    if($_GET['age'] == 12){
        echo "Hello kiddo"; 
    }elseif ($_GET['age'] >=12 && $_GET['age'] < 18) {
        echo "Hello teenager"; 
    }elseif ($_GET['age'] > 18 && $_GET['age'] < 115) {
        echo "Hello adult"; 
    }else{
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
?>

<!----------------------- EX N°4. Display different greeting according to user's age and gender------------------------>

<!----------------------- EX N°5. Display different greeting according to user's age, gender & mothertongue------------------------>

<form method="get" action="">
	<label for="soccers">Fill in this form to get into the soccer team</label>
    
    <label for="yes">Name </label>
    <input type="text" name="soccers" >

    <label for="">Age</label>
    <input type="text" name="ageplayer"  >
    
    <label for="">Gender</label>
     <input type="radio"  name="gender" value = "female" > female
     <input type="radio"  name="gender" value = "man" > man
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php 
    if(isset($_GET['soccers']) && isset($_GET['ageplayer'])){
     

    $acceptPlayer = ($_GET['ageplayer'] > 21 && $_GET['ageplayer'] < 40 && $_GET['gender'] == "female" ?  "Welcome to the team!" :  "Sorry, you don't fit the criteria"); 
        echo "$acceptPlayer"; 
}
?>

<!----------------------- EX N°8. Create form allowing teachers to grade students----------------------->

<form method="get" action="">
    <label for="Grade">What's the students' grade? </label>
    <input type="text" name="grade" >
    <input type="submit" name="submit" value="Enter">
</form>

<?php 
    if(isset($_GET['grade'])){
        if($_GET['grade'] <= 4){
            echo "This work is really bad. What a dumb kid! "; 
        }elseif ($_GET['grade'] >= 5 && $_GET['grade'] <= 9) {
            echo "This is not sufficient. More studying is required."; 
        }elseif ($_GET['grade'] == 10) {
            echo "barely enough!"; 
        }elseif ($_GET['grade'] > 10 && $_GET['grade'] <= 14) {
            echo  "Not bad!"; 
        }elseif ($_GET['grade'] > 14 && $_GET['grade'] <= 18){
            echo  "Bravo, bravissimo!"; 
        }elseif ($_GET['grade'] > 18 && $_GET['grade'] <= 20) {
            echo  "Too good to be true : confront the cheater!";
        }
    }
?>

<!----------------------- EX N°9. Switch structure----------------------->
