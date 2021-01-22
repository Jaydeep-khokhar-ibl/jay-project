<?php
//Dimensional Array......
    $array_1d = array("one 1D","two 1D","three 1D");
    $array_2d = array(
        array(
            "one 2D","two 2D","three 2D"
        ),
        "two 1D","three 1D"
    );
    $array_3d = array(
        array(
            "one 2D","two 2D",array(
                "one 3D","two 3D","three 3D"
            )
        ),
        "two 1D","three 1D"
    );

//Change key case......
    $key_up_case=array("key_a"=>"35","key_b"=>"37","key_c"=>"43");

//array chunk......
    //split array in selected parts
    $cars_chunk=array("car-a","car-b","car-c","car-d","car-e","car-f","car-g");

//array column (Select all value of same column)......
    $array_clmn = array(
        array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
        ),
        array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
        ),
        array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
        )
    );
    $last_names_column = array_column($array_clmn, 'last_name');

//array_combine......
    //Create an array by using the elements from one "keys" array and one "values" array:
    $key_array_id=array("5","3","6");
    $value_array_name=array("value-n-1","value-n-2","value-n-3");
    $combine_array=array_combine($key_array_id,$value_array_name);

//array_count_values......
    //Count all the values of an array - how much it is!!:
    $array_val_count=array("A","Cat","Dog","A","Dog");

//array_diff......
    //compare values of two array and return differance
    $array_diff_1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $array_diff_2=array("e"=>"red","a"=>"green","g"=>"blue");
    $result_diff=array_diff($array_diff_1,$array_diff_2);

//array_diff_assoc......
    //compare keys and values of two array and return differance
    $result_diff_assoc=array_diff_assoc($array_diff_1,$array_diff_2);

//array_diff_key......
    $array_diff_key=array_diff_key($array_diff_1,$array_diff_2);

//array_diff_uassoc......
    //compare both array with uaser define function
    function my_ud_function($a,$b)
    {
        if ($a===$b)
        {
            return 0;
        }
        return ($a<$b)?1:-1;
    }
    $result_diff_uassoc=array_diff_uassoc($array_diff_1,$array_diff_2,"my_ud_function");

//array_diff_assoc......
    $result_diff_ukey=array_diff_ukey($array_diff_1,$array_diff_2,"my_ud_function");

//array_fill(index, number, value)......
    $array_fill=array_fill(3,5,"value-blue");
//array_fill(user defined key, value)......
    $ud_key = array("a","b","c","d");
    $array_fill_key=array_fill_keys($ud_key,"value-blue");

//array_filter......
    function test_odd($var)
    {
        return($var & 1);
    }
    $array_filter_a=array(1,3,2,3,4);
//array_flip......
    //flip key and value from each-other
    $for_flip_array=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $result_flip=array_flip($for_flip_array);

//return matched value
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","d"=>"graeen","c"=>"blue");
$array_intersect=array_intersect($a1,$a2);

//return matched key and value
$array_intersect_assoc=array_intersect_assoc($a1,$a2);

//return matched key
$array_intersect_key=array_intersect_key($a1,$a2);

//return matched value with usrdefined function
$array_intersect_uassoc=array_intersect_uassoc($a1,$a2,"my_ud_function");

//return matched key with usrdefined function
$array_intersect_ukey=array_intersect_ukey($a1,$a2,"my_ud_function");

//return matched key with usrdefined function
$array_intersect_ukey=array_intersect_ukey($a1,$a2,"my_ud_function");


function mul_with_self($num)
{
  return($num*$num);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array - Functions</title>
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
    <h3>PHP Array-Functions</h3>
    <div>
        <h4>Dimensional Array</h4>
        <p><?= "This is first index of one dimensional array_1D:- ".$array_1d[0]; ?></p>
        <p><?= "This is index of two dimensional array_2D:- ".$array_2d[0][1]; ?></p>
        <p><?= "This is index of three dimensional array_3D:- ".$array_3d[0][2][2]; ?></p>
    </div>

    <div>
        <h4>Array_change_key_case</h4>
        <h5>Upper</h5>
        <p><?php print_r(array_change_key_case($key_up_case,CASE_UPPER)); ?></p>
        <h5>Lower</h5>
        <p><?php print_r(array_change_key_case($key_up_case,CASE_LOWER)); ?></p>
    </div>

    <div>
        <h4>Array_chunk</h4>
        <p><?php print_r(array_chunk($cars_chunk,2,true)); ?></p>
    </div>

    <div>
        <h4>Array_column</h4>
        <p><?php print_r($last_names_column); ?></p>
    </div>

    <div>
        <h4>Array_combine</h4>
        <p><?php print_r($combine_array); ?></p>
    </div>

    <div>
        <h4>Array_value_count</h4>
        <p><?php print_r(array_count_values($array_val_count)); ?></p>
    </div>

    <div>
        <h4>Array_diff</h4>
        <p><?php print_r($result_diff); ?></p>
    </div>

    <div>
        <h4>Array_diff_assoc</h4>
        <p><?php print_r($result_diff_assoc); ?></p>
    </div>

    <div>
        <h4>Array_diff_key</h4>
        <p><?php print_r($array_diff_key); ?></p>
    </div>

    <div>
        <h4>Array_diff_uassoc</h4>
        <p><?php print_r($result_diff_uassoc); ?></p>
    </div>

    <div>
        <h4>Array_diff_ukey</h4>
        <p><?php print_r($result_diff_ukey); ?></p>
    </div>

    <div>
        <h4>Array_fill</h4>
        <p><?php print_r($array_fill); ?></p>
    </div>

    <div>
        <h4>Array_fill_key</h4>
        <p><?php print_r($array_fill_key); ?></p>
    </div>

    <div>
        <h4>Array_fillter</h4>
        <p><?php print_r(array_filter($array_filter_a,"test_odd")); ?></p>
    </div>

    <div>
        <h4>Array_flip</h4>
        <p><?php print_r($result_flip); ?></p>
    </div>

    <div>
        <h4>Array_intersect</h4>
        <p><?php print_r($array_intersect); ?></p>
    </div>

    <div>
        <h4>Array_intersect_assoc</h4>
        <p><?php print_r($array_intersect_assoc); ?></p>
    </div>

    <div>
        <h4>Array_intersect_key</h4>
        <p><?php print_r($array_intersect_key); ?></p>
    </div>
    
    <div>
        <h4>array_intersect_uassoc</h4>
        <p><?php print_r($array_intersect_uassoc); ?></p>
    </div>    
    
    <div>
        <h4>array_intersect_ukey</h4>
        <p><?php print_r($array_intersect_ukey); ?></p>
    </div>    
    
    <div>
        <h4>array_key_exists</h4>
        <p>
            <?php 
            $a=array("Volvo"=>"XC90","BMW"=>"X5");
            if (array_key_exists("Volvo",$a))
            {
                echo "Key exists!";
            }
            else
            {
                echo "Key does not exist!";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>array_keys</h4>
        <p><?php print_r(array_keys($a)); ?></p>
    </div>

    <div>
        <h4>array_map</h4>
        <p>
            <?php 
            $a=array(1,2,3,4,5);
            print_r(array_map("mul_with_self",$a)); 
            ?>
        </p>
    </div>

    <div>
        <h4>array_merge</h4>
        <p>
            <?php
            $a1=array("red","green");
            $a2=array("blue","yellow");
            print_r(array_merge($a1,$a2));
            ?>
        </p>
    </div>

    <div>
        <h4>array_merge_recursive</h4>
        <p>
            <?php
            $a1=array("a"=>"red","b"=>"green");
            $a2=array("c"=>"blue","b"=>"yellow");
            print_r(array_merge_recursive($a1,$a2));
            ?>
        </p>
    </div>

    <div>
        <h4>array_multisort</h4>
        <p>
            <?php
            $a=array("Dog","Cat","Horse","Bear","Zebra");
            array_multisort($a);
            print_r($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_pad</h4>
        <p>
            <?php
            $a=array("red","green");
            print_r(array_pad($a,5,"blue"));
            ?>
        </p>
    </div>

    <div>
        <h4>array_pop</h4>
        <p>
            <?php
            $a=array("red","green","blue");
            array_pop($a);
            print_r($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_product</h4>
        <p>
            <?php
            $a=array(5,53);
            echo(array_product($a));
            ?>
        </p>
    </div>

    <div>
        <h4>array_push</h4>
        <p>
            <?php
            $a=array("red","green");
            array_push($a,"blue","yellow");
            print_r($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_rand</h4>
        <p>
            <?php
            $a=array("red","green","blue","yellow","brown");
            $random_keys=array_rand($a,3);
            echo $a[$random_keys[0]]."<br>";
            echo $a[$random_keys[1]]."<br>";
            echo $a[$random_keys[2]];
            ?>
        </p>
    </div>

    <div>
        <h4>array_reduce</h4>
        <p>
            <?php
            function myfunctionar($v1,$v2)
            {
            return $v1 . "-" . $v2;
            }
            $a=array("Dog","Cat","Horse");
            print_r(array_reduce($a,"myfunctionar"));
            ?>
        </p>
    </div>
    
    <div>
        <h4>array_replace</h4>
        <p>
            <?php
            $a1=array("red","green");
            $a2=array("blue","yellow");
            print_r(array_replace($a1,$a2));
            ?>
        </p>
    </div>

    <div>
        <h4>array_replace_recursive</h4>
        <p>
            <?php
            $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
            $a2=array("a"=>array("yellow"),"b"=>array("black"));
            print_r(array_replace_recursive($a1,$a2));
            ?>
        </p>
    </div>

    <div>
        <h4>array_reverse</h4>
        <p>
            <?php
            $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
            print_r(array_reverse($a));
            ?>
        </p>
    </div>

    <div>
        <h4>array_search</h4>
        <p>
            <?php
            $a=array("a"=>"red","b"=>"green","c"=>"blue");
            echo array_search("red",$a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_shift</h4>
        <p>
            <?php
            $a=array("a"=>"red","b"=>"green","c"=>"blue");
            echo array_shift($a)."<br>";
            print_r ($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_slice</h4>
        <p>
            <?php
            $a=array("red","green","blue","yellow","brown");
            print_r(array_slice($a,2));
            ?>
        </p>
    </div>

    <div>
        <h4>array_splice</h4>
        <p>
            <?php
            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $a2=array("a"=>"purple","b"=>"orange");
            array_splice($a1,0,2,$a2);
            print_r($a1);
            ?>
        </p>
    </div>

    <div>
        <h4>array_sum</h4>
        <p>
            <?php
            $a=array(5,15,25);
            echo array_sum($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_udiff</h4>
        <p>
            <?php
            function myfunctionudf($a,$b)
            {
            if ($a===$b)
              {
              return 0;
              }
              return ($a>$b)?1:-1;
            }
            
            $a1=array("a"=>"red","b"=>"green","c"=>"blue");
            $a2=array("a"=>"blue","b"=>"black","e"=>"blue");
            
            $result=array_udiff($a1,$a2,"myfunctionudf");
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>array_udiff_assoc</h4>
        <p>
            <?php
            $result=array_udiff_assoc($a1,$a2,"myfunctionudf");
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>array_udiff_uassoc</h4>
        <p>
            <?php
            function myfunction_key($a,$b)
            {
            if ($a===$b)
              {
              return 0;
              }
              return ($a>$b)?1:-1;
            }
            
            function myfunction_value($a,$b)
            {
            if ($a===$b)
              {
              return 0;
              }
              return ($a>$b)?1:-1;
            }
            
            $a1=array("a"=>"red","b"=>"green","c"=>"blue");
            $a2=array("a"=>"red","b"=>"green","c"=>"green");
            
            $result=array_udiff_uassoc($a1,$a2,"myfunction_key","myfunction_value");
            print_r($result);
            
            ?>
        </p>
    </div>

    <div>
        <h4>array_uintersect</h4>
        <p>
            <?php
            $result=array_uintersect($a1,$a2,"myfunctionudf");
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>array_uintersect_assoc</h4>
        <p>
            <?php
            $result=array_uintersect_assoc($a1,$a2,"myfunctionudf");
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>array_uintersect_uassoc</h4>
        <p>
            <?php
            $result=array_uintersect_uassoc($a1,$a2,"myfunction_key","myfunction_value");
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>array_unique</h4>
        <p>
            <?php
            $a=array("a"=>"red","b"=>"green","c"=>"red");
            print_r(array_unique($a));
            ?>
        </p>
    </div>

    <div>
        <h4>array_unshift</h4>
        <p>
            <?php
            $a=array("a"=>"red","b"=>"green");
            array_unshift($a,"blue");
            print_r($a);
            ?>
        </p>
    </div>

    <div>
        <h4>array_values</h4>
        <p>
            <?php
            $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
            print_r(array_values($a));
            ?>
        </p>
    </div>

    <div>
        <h4>array_walk</h4>
        <p>
            <?php
            function myfunctionaw($value,$key)
            {
            echo "The key $key has the value $value<br>";
            }
            $a=array("a"=>"red","b"=>"green","c"=>"blue");
            array_walk($a,"myfunctionaw");
            ?>
        </p>
    </div>

    <div>
        <h4>array_walk_recursive</h4>
        <p>
            <?php
            function myfunctionawr($value,$key)
            {
            echo "The key $key has the value $value<br>";
            }
            $a1=array("a"=>"red","b"=>"green");
            $a2=array($a1,"1"=>"blue","2"=>"yellow");
            array_walk_recursive($a2,"myfunctionawr");
            ?>
        </p>
    </div>

    <div>
        <h4>arsort</h4>
        <p>
            <?php
            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
            arsort($age);
            foreach($age as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>asort</h4>
        <p>
            <?php
            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
            asort($age);
            foreach($age as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>compact</h4>
        <p>
            <?php
            $firstname = "Peter";
            $lastname = "Griffin";
            $age = "41";
            
            $result = compact("firstname", "lastname", "age");
            
            print_r($result);
            ?>
        </p>
    </div>

    <div>
        <h4>count</h4>
        <p>
            <?php
            $cars=array("Volvo","BMW","Toyota");
            echo count($cars);
            ?>
        </p>
    </div>

    <div>
        <h4>current</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo current($people) . "<br>";
            ?>
        </p>
    </div>

    <div>
        <h4>each</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            print_r (each($people));
            ?>
        </p>
    </div>

    <div>
        <h4>end</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo current($people) . "<br>";
            echo end($people);
            ?>
        </p>
    </div>

    <div>
        <h4>extract</h4>
        <p>
            <?php
            $a = "Original";
            $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
            extract($my_array);
            echo "\$a = $a; \$b = $b; \$c = $c";
            ?>
        </p>
    </div>

    <div>
        <h4>in_array</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");

            if (in_array("Glenn", $people))
              {
              echo "Match found";
              }
            else
              {
              echo "Match not found";
              }
            ?>
        </p>
    </div>

    <div>
        <h4>key</h4>
        <p>
            <?php
            $people=array("Peter","Joe","Glenn","Cleveland");
            echo "The key from the current position is: " . key($people);
            ?>
        </p>
    </div>

    <div>
        <h4>krsort</h4>
        <p>
            <?php
            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
            krsort($age);
            foreach($age as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>ksort</h4>
        <p>
            <?php
            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
            ksort($age);
            foreach($age as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>list</h4>
        <p>
            <?php
            $my_array = array("Dog","Cat","Horse");

            list($a, $b, $c) = $my_array;
            echo "I have several animals, a $a, a $b and a $c.";
            ?>
        </p>
    </div>

    <div>
        <h4>natsort / natcasesort</h4>
        <p>
            <?php
            $temp_files = array("temp15.txt","Temp10.txt",
            "temp1.txt","Temp22.txt","temp2.txt");
            
            natsort($temp_files);
            echo "Natural order: ";
            print_r($temp_files);
            echo "<br />";
            
            natcasesort($temp_files);
            echo "Natural order case insensitve: ";
            print_r($temp_files);
            ?>
        </p>
    </div>

    <div>
        <h4>next</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo current($people) . "<br>";
            echo next($people);
            ?>
        </p>
    </div>

    <div>
        <h4>pos</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo pos($people) . "<br>";
            ?>
        </p>
    </div>

    <div>
        <h4>prev</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo current($people) . "<br>";
            echo next($people) . "<br>";
            echo prev($people);
            ?>
        </p>
    </div>

    <div>
        <h4>range</h4>
        <p>
            <?php
            $number = range(0,5);
            print_r ($number);
            ?>
        </p>
    </div>

    <div>
        <h4>reset</h4>
        <p>
            <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");
            echo current($people) . "<br>";
            echo next($people) . "<br>";
            echo reset($people);
            ?>
        </p>
    </div>

    <div>
        <h4>rsort</h4>
        <p>
            <?php
            $cars=array("Volvo","BMW","Toyota");
            rsort($cars);
            foreach($cars as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>shuffle</h4>
        <p>
            <?php
            $my_array = array("red","green","blue","yellow","purple");
            shuffle($my_array);
            print_r($my_array);
            ?>
        </p>
    </div>

    <div>
        <h4>sizeof</h4>
        <p>
            <?php
            $cars=array("Volvo","BMW","Toyota");
            echo sizeof($cars);        
            ?>
        </p>
    </div>

    <div>
        <h4>sort</h4>
        <p>
            <?php
            $cars=array("Volvo","BMW","Toyota");
            sort($cars);
            foreach($cars as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>uasort</h4>
        <p>
            <?php
            function my_sort($a,$b)
            {
            if ($a==$b) return 0;
            return ($a<$b)?-1:1;
            }
            
            $arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
            uasort($arr,"my_sort");
            foreach($arr as $x=>$x_value){
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </p>
    </div>

    <div>
        <h4>uksort</h4>
        <p>
            <?php
            $arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
            uksort($arr,"my_sort");
            print_r($arr);
            ?>
        </p>
    </div>

    <div>
        <h4>usort</h4>
        <p>
            <?php
            $a=array(4,2,8,6);
            usort($a,"my_sort");
            print_r($arr);
            ?>
        </p>
    </div>
</body>
</html>