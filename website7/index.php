<?php
//======================= HELPFUL PHP FILE FUNCTIONS ===============/
    $path = 'dir1/myfile.php';
    $file = 'firstText.txt';
/*
    // Return filename
    echo basename($path);

    // Return filename without ext
    echo basename($path, '.php');

    // Return the dir name from path
    echo dirname($path);

    // Check if file exists
    echo file_exists('firstText.txt');

    // Get abs path
    echo realpath($file);
 
    // Check to see if file - Will return a dir using file_exists
    echo file_exists($file);


    // Check if file is writable - files are writable by defaut - can change to read-only
    echo is_writable($file);

    // Check if file is readable
    echo is_readable($file);

    // Check for file size
    echo filesize($file);

======================================================
    // Create directory
    mkdir('testing');

    //Remove directory - if it has no files inside
    rmdir('testing');
 
    // Copy file
    echo copy('firstText.txt', 'secondText.txt');

    // Rename a file
    echo rename('secondText.txt', '2.txt');

    // Delete a file
    echo unlink('2.txt');

    // Write from file to string
    echo file_get_contents($file);

    // Write string to file - outputs file size
    echo file_put_contents($file, 'hello world');

    // Append text in file
    $current = file_get_contents($file);

    $current .= ' bye world';

    file_put_contents($file, $current);

    // Open a file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
*/
    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $text = " new text\n";
    fwrite($handle, $text);
    $text = " more text\n";
    fwrite($handle, $text);
    fclose($handle);