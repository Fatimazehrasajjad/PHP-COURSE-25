<?php

$path= __DIR__ .'/data.txt';
if(!file_exists($path)) {
    echo"File doesnot exist";
}
//Method 1: USING FILE GET CONTENTS
$content = file_get_contents($path);
echo "<h3> Using file_get_contents() </h3>";
echo "<pre>" . htmlspecialchars($content) . "</pre>";

//Method 2: USING FOPEN + FREAD

$handle = fopen($path,'r');
if($handle){
    $size = filesize($path);
    if($size > 0){
        $data =fread($handle,$size);
    } else{
        $date ="";
        while(!feof($handle)){
            $data = fgets($handle, $size);
        }
    }
    fclose($handle);
    echo "<h3> Using fopen + fread </h3>";
    echo "<pre>" . htmlspecialchars($data) . "</pre>";


}
?>