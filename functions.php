<?php 

     // Create simple Function
    function simpleFunction() {
    	echo 'Hello World';
    }

    // Run simple function
    // simpleFunction();

    // Function with param
    function sayHello($name = 'World') {
        echo "Hello $name<br>";
    }

    //sayHello('Ben');
    //sayHello('Affleck')

    // Return Value
    function addNumbers($num1, $num2) {
    	return $num1 + $num2;
    }

    // echo addNumbers(2, 3); 

    // By Reference

    $myNum = 10;

    function addFive($num) {
    	$num += 5;
    }

    function addTen(&$num) {
    	$num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";
?>