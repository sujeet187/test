<html>
<body>
<h1> This is my first page </h1>
<?php
$color = "Green";
echo "this is my 1 Php Learning session! $color<br>";
Echo "this it my 2 line for test. $color<br>";
ECHO "this is my 3 lines for test<br>";
?>
</body>
</html>

</html>
<boday>
<h1> This time i am testing without read </h1>
<?php
$A = "Red";
$B = "black";
$c = "pink";
$D = 5;
$E = 10;
$F = 15;
$G = 20;
$H = 6;
$I = 4;
echo "this is green color <br>";
echo "Color is $A <br>";
echo "Color is $B <br>";
echo "Color is $c <br>";
echo "Aryan is $H years old <br>";
echo "Aditi is $I Years old";
?>

<?php
$x= 5; //global scope 
function test() {
echo "<p> Aryan age is: $x</p>";
} 

test ();
echo "<p>Aryan age is: $x</p>";
?>

<?php
function test2 (){
	$P=3; //local scope 
echo "<p> Aryan is $P year old than Aditi</p>";
}

test2 ();
echo "<p> Aryan is $P year old than Aditi</p>";
?>

<?php
$y = $E - $H;
echo "Aryan is $H<br>";
echo $D + $E, "<br>";
echo "Aditi is $y year old <br>";
?>
<?php
$x=187;
var_dump($x);


?>
</boday>
</html>
