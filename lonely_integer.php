<?php
/*
Given an array of integers, where all elements but one occur twice, find the unique element.

Example

The unique element is .

Function Description

Complete the lonelyinteger function in the editor below.

lonelyinteger has the following parameter(s):

int a[n]: an array of integers
Returns

int: the element that occurs only once
Input Format

The first line contains a single integer, , the number of integers in the array.
The second line contains  space-separated integers that describe the values in .

Constraints

It is guaranteed that  is an odd number and that there is one unique element.
, where .


 */
 
function lonely_integer($a){
    $list = [];

    for( $i = 0; $i < count($a); $i++) {
        
        if( isset($list[$a[$i]])){
            $list[$a[$i]] += 1;
        } else {
            $list[$a[$i]] = 1;
        }
    };

    var_dump($list);


    echo array_search(1, $list);

};



$array = [1,2,3,4,5,1,2,3,4];

lonely_integer($array);


 ?>