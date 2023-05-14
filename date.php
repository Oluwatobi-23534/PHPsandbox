<?php 
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('Y'); // Yeaar
    // echo date('l');    // Day of the week

    // echo date('Y/m/d');
    // echo date('m/d/Y');

    // echo date('h'); // Hour
    // echo date('i'); // Min
    // echo date ('s');   // Seconds
    // echo date('a'); // AM or PM


    // Set Time Zone
    date_default_timezone_set('Africa/Lagos');
    // echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    // echo $timestamp;

    // echo date('m/d/Y h:i:sa', $timestamp);


    $timestamp2 = strtotime('10:00pm April 22 2023');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');
    // echo $timestamp2;
    echo date('m/d/Y h:i:sa', $timestamp5);
?>
