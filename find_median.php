<?php
    /*

    Find the median
    The median of a list of numbers is essentially its middle element after sorting. 
    After him appears the same number of elements as before. 
    Given a list of numbers with an odd number of elements, find the median?

    Example
    array = [5, 3, 1, 2, 4]
    The sorted array arr' = [1, 2, 3, 4, 5]. 

    The element mean and the median is 3.

    Descriptive function
    Complete the findMedian function in the editor following.
    findMedian has the following parameters:
        • int arr[n]: an unordered array of integers
    Returns
        * int: the median of the array

    */

    $array = [4,2,4,6,2,1,6,7,4,9,9];

    function find_median($arr){
        # First sort the array
        asort($arr);

        # Assign values order in new array sort
        $sort_array = array_values($arr);         
        
        # Show keys and values in sort array
        var_dump($sort_array);

        # Calculate the median key of the array
        $median = count($arr) / 2;
        
        # Print the median key index
        echo $median, "\n";
        
        # Return the median valua
        return $sort_array[$median];
        
    }


    echo find_median($array)

?>