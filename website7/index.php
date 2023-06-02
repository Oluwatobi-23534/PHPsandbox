<?php 
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    // echo basename($path);

    // Return filename without extension
    // echo basename($path, 'php');

    // Return the dir name from the path
    // echo dirname($path);

    // Check if file exists
    // echo file_exists($file);

    // Get abs path
    // echo realpath($file);

    // Check to see if file
    // echo file_exists('test');

    // Check if writable
    // echo is_writable($file);

    // Check if readable
    // echo is_readable($file);

    // Get file size
    // echo filesize($file);

    // Create a directory
    // mkdir('testing');

    //Remove dir if empty
    // rmdir('testing');

    // Copy file
    // echo copy('file1.txt', 'file2.txt');

    // Rename file
    // rename('myfile.tex', 'myfile.txt');

    // Delete File
    // unlink('myfile.txt');

    // Write from file to string
    // echo file_get_contents($file);

    // Write string to file
    // echo file_put_contents($file, 'Goodbye!');

    // $current = file_get_contents($file);

    // $current .= ' How are you';

    // file_put_contents($file, $current);

    // Open File For Reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "James Bond\n";
    fwrite($handle, $txt);
    $txt = "John Wick\n";
    fwrite($handle, $txt);
    fclose($handle);
?>