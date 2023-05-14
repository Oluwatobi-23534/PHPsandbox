<?php 
# substr()
# returns a portion of a string

    // $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    # returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # finds the position of the first occurence of a sub string

    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos() 
    # finds the position of the last occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    # strips whitespace

    /*
    $text = 'Hello World';
    // var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);
    */

    # strtoupper()
    # makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower
    # makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    # capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # check if string

    // $val = '22';
    // $output = is_string($val);

    // echo $output;
    
    /*
    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0,'0');

    foreach($values as $value) {
    	if(is_string($value)) {
    		echo "{$value} is a string<br>";
    	}
    }
    */

    # gzcompress()
    # compress a string

    $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia tincidunt mattis. Proin aliquam dapibus metus vel malesuada. Vivamus ut hendrerit neque. Donec tempus, nulla vitae rhoncus varius, lectus nunc aliquam turpis, at maximus ex ex venenatis ipsum. Praesent tortor lorem, dapibus finibus augue sed, lacinia placerat velit. Aliquam ultricies ipsum quis purus aliquet, non laoreet diam varius. Praesent sit amet nibh at tortor ornare vehicula ac id purus.";

    $compressed = gzcompress($string);
    // echo $compressed;

    $original =gzuncompress($compressed);
    echo $original;
?>