<?php 


$file = 'test.txt';

// if(file_exists($file)){ 
    // echo readfile($file).'<br/>';

//     // // COPY
//     // copy($file,'qoutes.txt');

//     // // ABSOLUTE PATH
//     // echo realpath($file) . '<br/>';

//     // // FILE SIZE
//     // echo filesize($file) . '<br/>';

//     // //RENAME
//     // rename('qoutes.txt','test.txt');

// }else {
//     echo 'File does not exist';
// }


// // MAKE DIR
// mkdir('quotes');

$handle = fopen($file, 'r+');
$handle = fopen($file, 'a+');

// READ
// echo fread($handle,filesize($file));

// echo fread($handle,112);

// READ SINGLE LINE
// echo fgets($handle);
// echo fgets($handle);

// READ A SINGLE CHARACTER
// echo fgetc($handle);

// WRITE TO A FILE
fwrite($handle, "\nEverything was sold off");


// DELETE FILE
unlink($tests);

// CLOSE FILE
fclose($handle);


?>