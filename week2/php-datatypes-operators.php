<?php
//string......
$string_1 = "DT:- this is string var name = string_1";
$str_var_1 = "This is var1";
$str_var_2 = "This is var2";
$str_var_2 .= $str_var_1;

//integer......
$int_1 = 456;
$int_2 = 123;
$int_sum = $int_1 + $int_2;
$int_sub = $int_1 - $int_2;
$int_mul = $int_1 * $int_2;
$int_div = $int_1 / $int_2;
$int_mod = $int_1 % $int_2;
$int_exp = $int_1 ** $int_2;
$int_as_eql = 200;
$x = 10;
$y = 20;

//Float or Double......
$float_1 = 1.23;

//Boolean......
$bool_1 = true;

//Array......
$array_1 = array("Volvo","BMW","Toyota");

//Object......
class Obj_car_class {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "DT Object-car:- My car is a " . $this->color . " " . $this->model . "!";
    }
}
$obj_car_1 = new Obj_car_class("black", "Volvo");

//null......
$null_1 = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DataTypes and Operators</title>

    <style>
        h4, h5{
            margin: 0;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        div{
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h3>PHP DataTypes and Operators</h3>
    <div>
        <h4>String:-</h4>
        <?= $string_1; ?>
        <br>
        <?= "Op:- This vars are joined with (.) === ".$str_var_1 . $str_var_2; ?>
        <br>
        <?= "Op:- This is only one var and joined with (.=) === ".$str_var_1; ?>
    </div>

    <div>
        <h4>Integer:-</h4>
        <?= "-:DT".var_dump($int_1); ?>

        <h5>Arithmetic Operators</h5>
        <?= "Op:- Addition of $int_1 and $int_2 = ".$int_sum; ?>
        <br>
        <?= "Op:- Subtraction of $int_1 and $int_2 = ".$int_div; ?>
        <br>
        <?= "Op:- Multiplication of $int_1 and $int_2 = ".$int_mul; ?>
        <br>
        <?= "Op:- Division of $int_1 and $int_2 = ".$int_div; ?>
        <br>
        <?= "Op:- Modulus of $int_1 and $int_2 = ".$int_mod; ?>
        <br>
        <?= "Op:- Exponentiation of $int_1 and $int_2 = ".$int_exp; ?>
        
        <h5>Assignment Operators</h5>
        <?= "Op:- (=) x = y ".$int_as_eql; ?>
        <br>
        <?= "Op:- Addition (x += y) ".$int_as_eql += 123; ?>
        <br>
        <?= "Op:- Subtraction (x -= y) ".$int_as_eql -= 123; ?>
        <br>
        <?= "Op:- Multiplication (x *= y) ".$int_as_eql *= 123; ?>
        <br>
        <?= "Op:- Division (x /= y) ".$int_as_eql /= 123; ?>
        <br>
        <?= "Op:- Modulus (x %= y) ".$int_as_eql %= 123; ?>

        <h5>Comparison Operators</h5>
        X = 10, Y = 20
        <br>
        <?= "Op:- Equal(x == y) Returns true if $x is equal to $y:- "; ?>
        <b><?= var_dump($x == $y); ?></b>
        <br>
        <?= "Op:- Identical(x === y) Returns true if $x is equal to $y, and they are of the same type:- "; ?>
        <b><?= var_dump($x === $y); ?></b>
        <br>
        <?= "Op:- Not equal(x != y) Returns true if $x is not equal to $y:- "; ?>
        <b><?= var_dump($x != $y); ?></b>
        <br>
        <?= "Op:- Not equal(x <> y) Returns true if $x is not equal to $y:- "; ?>
        <b><?= var_dump($x <> $y); ?></b>
        <br>
        <?= "Op:- Not identical(x !== y) Returns true if $x is not equal to $y, or they are not of the same type:- "; ?>
        <b><?= var_dump($x !== $y); ?></b>
        <br>
        <?= "Op:- Greater than(x > y) Returns true if $x is greater than $y:- "; ?>
        <b><?= var_dump($x > $y); ?></b>
        <br>
        <?= "Op:- Less than(x < y) Returns true if $x is less than $y:- "; ?>
        <b><?= var_dump($x < $y); ?></b>
        <br>
        <?= "Op:- Greater than or equal to(x >= y) Returns true if $x is greater than or equal to $y:- "; ?>
        <b><?= var_dump($x >= $y); ?></b>
        <br>
        <?= "Op:- Less than or equal to(x <= y) Returns true if $x is less than or equal to $y:- "; ?>
        <b><?= var_dump($x <= $y); ?></b>
        <br>
        <?= "Op:- Spaceship(x <=> y) Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.:- "; ?>
        <b><?= ($x <=> $y); ?></b>

        <h5>Increment / Decrement Operators</h5>
        X = 10
        <br>
        <?php $x = 10; ?>
        <?= "Op:- Pre-increment(++x) Increments $x by one, then returns x:- "; ?>
        <b><?= ++$x; ?></b>
        <br>
        <?php $x = 10; ?>
        <?= "Op:- Post-increment(x++) Returns $x, then increments x by one:- "; ?>
        <b><?= $x++; ?></b>
        <br>
        <?php $x = 10; ?>
        <?= "Op:- Pre-decrement(--x) Decrements $x by one, then returns x:- "; ?>
        <b><?= --$x; ?></b>
        <br>
        <?php $x = 10; ?>
        <?= "Op:- Post-decrement(x--) Returns $x, then decrements x by one:- "; ?>
        <b><?= $x--; ?></b>

        <h5>Logical Operators</h5>
        X = 100, Y = 50
        <br>
        <?php $x = 100; $y = 50; ?>
        <?php
        if ($x == 100 and $y == 50) {
            echo "x == 100 and y == 50";
        }?>
        <br>
        <?php
        if ($x == 120 or $y == 50) {
            echo "x == 100 or y == 80";
        }?>
        <br>
        <?php
        if ($x == 100 xor $y == 80) {
            echo "x == 100 xor y == 80";
        }?>
        <br>
        <?php
        if ($x == 100 && $y == 50) {
            echo "x == 100 && y == 50";
        }?>
        <br>
        <?php
        if ($x == 150 || $y == 50) {
            echo "x == 100 || y == 80";
        }?>
        <br>
        <?php
        if ($x !== 90) {
            echo "x !== 90";
        }?>
    </div>

    <div>
        <h4>Float / Double:-</h4>
        <?= "-:DT".var_dump($float_1); ?>
    </div>

    <div>
        <h4>Boolean:-</h4>
        <?= "-:DT".var_dump($bool_1); ?>
    </div>

    <div>
        <h4>Array:-</h4>
        <?= "-:DT".var_dump($array_1); ?>
    </div>

    <div>
        <h4>Boolean:-</h4>
        <?= $obj_car_1 -> message(); ?>
    </div>

    <div>
        <h4>Null:-</h4>
        <?= "-:DT".var_dump($null_1); ?>
    </div>

</body>
</html>