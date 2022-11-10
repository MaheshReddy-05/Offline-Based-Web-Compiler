<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("txt" => "image/txt", "py" => "image/py", "java" => "image/java", "c" => "image/c");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
             
            
        
        $input = fopen("upload/". $filename, "r");
  
    // Display a line of the file until the end 
    while(!feof($input)) {
  
        // Display each line
        echo fgets($input). "<br>";
    }
         
        /*else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }*/
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>