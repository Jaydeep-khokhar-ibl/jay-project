<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>

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

<div>
    <h4>abs:-</h4>
    <h5>Return the absolute value of different numbers:</h5>
    <?php
    echo(abs(6.7) . "<br>");
    echo(abs(-6.7) . "<br>");
    echo(abs(-3) . "<br>");
    echo(abs(3));
    ?>
</div>

<div>
    <h4>acos:-</h4>
    <h5>Return the arc cosine of different numbers:</h5>
    <?php
    echo(acos(0.64) . "<br>");
    echo(acos(-0.4) . "<br>");
    echo(acos(0) . "<br>");
    echo(acos(-1) . "<br>");
    echo(acos(1) . "<br>");
    echo(acos(2));
    ?>
</div>

<div>
    <h4>acosh:-</h4>
    <h5>Return the inverse hyperbolic cosine of different numbers:</h5>
    <?php
    echo(acosh(7) . "<br>");
    echo(acosh(56) . "<br>");
    echo(acosh(2.45));
    ?>
</div>

<div>
    <h4>asin:-</h4>
    <h5>Return the arc sine of different numbers:</h5>
    <?php
    echo(asin(0.64) . "<br>");
    echo(asin(-0.4) . "<br>");
    echo(asin(0) . "<br>");
    echo(asin(-1) . "<br>");
    echo(asin(1) . "<br>");
    echo(asin(2));
    ?>
</div>

<div>
    <h4>asinh:-</h4>
    <h5>Return the inverse hyperbolic sine of different numbers:</h5>
    <?php
    echo(asinh(7) . "<br>");
    echo(asinh(56) . "<br>");
    echo(asinh(2.45));
    ?>
</div>

<div>
    <h4>atan:-</h4>
    <h5>Return the arc tangent of different numbers with the atan() function:</h5>
    <?php
    echo(atan(0.50) . "<br>");
    echo(atan(-0.50) . "<br>");
    echo(atan(5) . "<br>");
    echo(atan(-5) . "<br>");
    echo(atan(100) . "<br>");
    echo(atan(-100));
    ?>
</div>

<div>
    <h4>atan2:-</h4>
    <h5>Return the arc tangent of two variables with the atan2() function:</h5>
    <?php
    echo(atan2(0.50,0.50) . "<br>");
    echo(atan2(-0.50,-0.50) . "<br>");
    echo(atan2(5,5) . "<br>");
    echo(atan2(10,20) . "<br>");
    echo(atan2(-5,-5) . "<br>");
    echo(atan2(-10,10));
    ?>
</div>

<div>
    <h4>atanh:-</h4>
    <h5>Return the inverse hyperbolic tangent of different numbers:</h5>
    <?php
    echo(atanh(M_PI_4) . "<br>");
    echo(atanh(0.50) . "<br>");
    echo(atanh(-0.50) . "<br>");
    echo(atanh(1) . "<br>");
    echo(atanh(-1));
    ?>
</div>

<div>
    <h4>base_convert:-</h4>
    <h5>Convert a hexadecimal number to octal number:</h5>
    <?php
    $hex = "E196";
    echo base_convert($hex,16,8);
    ?>
</div>

<div>
    <h4>bindec:-</h4>
    <h5>Convert binary to decimal:</h5>
    <?php
    echo bindec("0011") . "<br>";
    echo bindec("01") . "<br>";
    echo bindec("11000110011") . "<br>";
    echo bindec("111");
    ?>
</div>

<div>
    <h4>ceil:-</h4>
    <h5>Round numbers up to the nearest integer:</h5>
    <?php
    echo(ceil(0.60) . "<br>");
    echo(ceil(0.40) . "<br>");
    echo(ceil(5) . "<br>");
    echo(ceil(5.1) . "<br>");
    echo(ceil(-5.1) . "<br>");
    echo(ceil(-5.9));
    ?>
</div>


<div>
    <h4>cos:-</h4>
    <h5>Return the cosine of different numbers:</h5>
    <?php
    echo(cos(3) . "<br>");
    echo(cos(-3) . "<br>");
    echo(cos(0) . "<br>");
    echo(cos(M_PI) . "<br>");
    echo(cos(2*M_PI));
    ?>
</div>

<div>
    <h4>cosh:-</h4>
    <h5>Return the hyperbolic cosine of different numbers:</h5>
    <?php
    echo(cosh(3) . "<br>");
    echo(cosh(-3) . "<br>");
    echo(cosh(0) . "<br>");
    echo(cosh(M_PI) . "<br>");
    echo(cosh(2*M_PI));
    ?>
</div>

<div>
    <h4>decbin:-</h4>
    <h5>Convert decimal to binary:</h5>
    <?php
    echo decbin("3") . "<br>";
    echo decbin("1") . "<br>";
    echo decbin("1587") . "<br>";
    echo decbin("7");
    ?>
</div>

<div>
    <h4>dechex:-</h4>
    <h5>Convert decimal to hexadecimal:</h5>
    <?php
    echo dechex("30") . "<br>";
    echo dechex("10") . "<br>";
    echo dechex("1587") . "<br>";
    echo dechex("70");
    ?>
</div>

<div>
    <h4>decoct:-</h4>
    <h5>Convert decimal to octal:</h5>
    <?php
    echo decoct("30") . "<br>";
    echo decoct("10") . "<br>";
    echo decoct("1587") . "<br>";
    echo decoct("70");  
    ?>
</div>

<div>
    <h4>deg2rad:-</h4>
    <h5>Convert degrees to radians:</h5>
    <?php
    echo deg2rad("45") . "<br>";
    echo deg2rad("90") . "<br>";
    echo deg2rad("360");
    ?>
</div>

<div>
    <h4>exp:-</h4>
    <h5>Return 'E' raised to the power of different numbers:</h5>
    <?php
    echo(exp(0) . "<br>");
    echo(exp(1) . "<br>");
    echo(exp(10) . "<br>");
    echo(exp(4.8));
    ?>
</div>

<div>
    <h4>expm1:-</h4>
    <h5>Return exp() - 1:</h5>
    <?php
    echo(expm1(0) . "<br>");
    echo(expm1(1) . "<br>");
    echo(expm1(10) . "<br>");
    echo(expm1(4.8));
    ?>
</div>

<div>
    <h4>floor:-</h4>
    <h5>Round numbers down to the nearest integer:</h5>
    <?php
    echo(floor(0.60) . "<br>");
    echo(floor(0.40) . "<br>");
    echo(floor(5) . "<br>");
    echo(floor(5.1) . "<br>");
    echo(floor(-5.1) . "<br>");
    echo(floor(-5.9));
    ?>
</div>

<div>
    <h4>fmod:-</h4>
    <h5>Return the remainder of x/y:</h5>
    <?php
    echo(fmod(-10, 3) . "<br>");
    echo(fmod(0, 0));
    ?>
</div>

<div>
    <h4>getrandmax:-</h4>
    <h5>Return largest possible random value that can be returned by rand():</h5>
    <?php
    echo(getrandmax());
    ?>
</div>

<div>
    <h4>hexdec:-</h4>
    <h5>Convert hexadecimal to decimal:</h5>
    <?php
    echo hexdec("cceeff");
    ?>
</div>

<div>
    <h4>intdiv:-</h4>
    <h5>Perform some integer divisions:</h5>
    <?php
    echo intdiv(5, 2) . "<br>";
    echo intdiv(-5, -2);
    ?>
</div>

<div>
    <h4>is_finite:-</h4>
    <h5>Check whether a value is finite or not:</h5>
    <?php
    echo is_finite(2000);
    ?>
</div>

<div>
    <h4>is_infinite:-</h4>
    <h5>Check whether a value is infinite or not:</h5>
    <?php
    echo is_infinite(2) . "<br>";
    ?>
</div>

<div>
    <h4>is_nan:-</h4>
    <h5>Check whether a value is 'not-a-number':</h5>
    <?php
    echo is_nan(200) . "<br>";
    ?>
</div>

<div>
    <h4>log:-</h4>
    <h5>Return the natural logarithm of different numbers:</h5>
    <?php
    echo(log(2));
    ?>
</div>

<div>
    <h4>mt_rand:-</h4>
    <h5>Generate random numbers:</h5>
    <?php
    echo(mt_rand() . "<br>");
    echo(mt_rand(10,100));
    ?>
</div>

<div>
    <h4>mt_srand:-</h4>
    <h5>Seed the random number generator:</h5>
    <?php
    mt_srand(mktime());
    echo(mt_rand());
    ?>
</div>

<div>
    <h4>rand:-</h4>
    <h5>Generate random numbers:</h5>
    <?php
    echo(rand() . "<br>");
    echo(rand(10,100));
    ?>
</div>

<div>
    <h4>pi:-</h4>
    <h5>Return the value of PI:</h5>
    <?php
    echo(pi());
    ?>
</div>

<div>
    <h4>pow:-</h4>
    <h5>return second element power of first element ex:- 2,3 = 8:</h5>
    <?php
    echo(pow(2,4) . "<br>");
    echo(pow(-2,4) . "<br>");
    ?>
</div>

<div>
    <h4>rad2deg:-</h4>
    <h5>Convert radians to degrees:</h5>
    <?php
    echo rad2deg(pi()/4);
    ?>
</div>

<div>
    <h4>round:-</h4>
    <h5>retun round of ele:</h5>
    <?php
    echo(round(-4.60));
    ?>
</div>

<div>
    <h4>sin:-</h4>
    <h5>Return the sine of different numbers:</h5>
    <?php
    echo(sin(3));
    ?>
</div>

<div>
    <h4>sinh:-</h4>
    <h5>Return the hyperbolic sine of different numbers:</h5>
    <?php
    echo(sinh(3));
    ?>
</div>

<div>
    <h4>sqrt:-</h4>
    <h5>Return the square root of different numbers:</h5>
    <?php
    echo(sqrt(-9));
    ?>
</div>

<div>
    <h4>srand:-</h4>
    <h5>Seed the random number generator:</h5>
    <?php
    srand(mktime());
    echo(rand());
    ?>
</div>

<div>
    <h4>tan:-</h4>
    <h5>Return the tangent of different numbers:</h5>
    <?php
    echo(tan(10));
    ?>
</div>

<div>
    <h4>tanh:-</h4>
    <h5>Return the hyperbolic tangent of different numbers:</h5>
    <?php
    echo(tanh(5));
    ?>
</div>

<div>
    <h4>is_int:-</h4>
    <?php
    $x = 5985;
    var_dump(is_int($x));
    $x = 59.85;
    var_dump(is_int($x));
    ?>
</div>

<div>
    <h4>is_float:-</h4>
    <?php
    var_dump(is_float($x));
    ?>
</div>

<div>
    <h4>is_numeric:-</h4>
    <?php
    $x = 5985;
    var_dump(is_numeric($x));
    
    $x = "5985";
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
    ?>
</div>

<div>
    <h4>int_cast:-</h4>
    <h5>Cast float to int</h5>
    <?php
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
</div>

<div>
    <h4>int_cast:-</h4>
    <h5>Cast string to int</h5>
    <?php
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    ?>
</div>

</body>
</html>