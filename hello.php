<?php

    $hello = "Hello World";

    echo $hello;

?>

<?php

    $array = [8,9,10,11,12];

    for ($i=0; $i < count($array) ; $i++) { 

        echo " $array[$i] \n";
    };

?>

<?php if( $hello == "Hello World"): ?>
    I will Learn PHP
<?php else: ?>
    I think this not work!
<?php endif ?>


<?php

$bool = TRUE;
$string = "This is a string";
$number = 12;


if (is_string($string)){
    
    echo "$string \n";
};

if (is_int($number)){
    $number += 1;
    echo "$number \n";

};

if (is_bool($bool)){
    
    echo "It is bool \n";
};

var_dump($number)

?>



<?php

$array = [];

$array[0] = 1;

$array["a"] = "Hello";

var_dump($array);

echo $array[0];

?>

<?php

$source_array = [1,2,3,4,5,6, "last"];

[$one,,,,,,$last] = $source_array;

echo "$last, \n $one";


$multiple_array = [
    [1,2],
    [3,4]
];

print "\n";

foreach ($multiple_array as [$first, $second] ){
    echo $first, $second, "\n";
};

?>