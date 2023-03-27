<?php

$images = scandir("images");


$data = array();



foreach ($images as $img){
    
    if(!in_array($img, array(".",".."))){

        $filename = "images".DIRECTORY_SEPARATOR."$img";

        $info = pathinfo($filename);


        $info["size"] = filesize($filename);
        $info["modified"] = date("M d H:i:s", filemtime($filename));
        

        array_push($data, $info);

        // echo "<img height='800' width='900' src=./images/ram-3500.jpg>";

    }
}

// echo "<img height='800' width='900' src=./images/ram-3500.jpg>";
echo json_encode($data);
?>