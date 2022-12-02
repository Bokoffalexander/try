<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  
<?php 
echo '<h1>Hello World</h1>'; 
$username = "Sasha";
echo "My name is $username";
echo "<br>";
echo "<hr>";
$current_user = $username;
echo $current_user;
echo "<br>";

$count = 1;
$count +=9;
$floatnum=5.5;
echo $count + $floatnum;
echo "<br>";

$team = array("Kate",'Sash',"Stef");
echo $team[0];
echo "<br>";

$team_who = array(array("Woman","172"),
      array("Man","180"),
      array("Woman","70"));
echo $team_who[0][1];
echo "<br>";

?>

<form action="index.php" method="get">
	<p>Name:<br><input type="text" name="hereISname"> </p>
	<p>Age: <br> <input type="number" name="age"> </p> <br>
	<input type="submit">
</form>
<br>
Your name is "<b> <?php echo $_GET["hereISname"] ?> </b>" <br>
Your age is <b> <?php echo $_GET["age"] ?> </b> <br>
<?php
mail("bokoffalexander@gmail.com", "Заявка с сайта", $_GET["hereISname"]);
?>
<hr>

<form action="index.php" method="get">
	Число1:<input type="number" name="num1"><br>
	Число2:<input type="number" name="num2"><br>
	+ или -   <input type="text" name="num3" size="1"><br>
<input type="submit">
<br>
</form>

<?php
echo "Answer ";
if ($_GET["num3"] == "+") echo $_GET["num1"]+$_GET["num2"];
if ($_GET["num3"] == "-") echo $_GET["num1"]-$_GET["num2"];
?>

<br>
<br>
<form>
  <fieldset>
    <legend>Контактная информация</legend>
    <p><label for="name">Имя <em>*</em></label><input type="text" id="name"></p>
    <p><label for="email">E-mail</label><input type="email" id="email"></p>
  </fieldset>
<p><input type="submit" value="Отправить"></p>
</form>

<br>

<hr>

</body>
</html>