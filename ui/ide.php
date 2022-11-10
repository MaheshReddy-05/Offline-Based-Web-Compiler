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
             
            
        
        $input = fopen("upload/". $filename, "r");
  
    // Display a line of the file until the end 
    while(!feof($input)) {
  
        // Display each line
        echo "<script>document.getElementsByClassName('ace_scroller').innerHTML= </script>".fgets($input). "<br>";
    }
         
        /*else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }*/
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Software Edge</title>

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <div class="header"> Software Edge IDE</div>
    <div class="control-panel">
        Select Language:
        &nbsp; &nbsp;
        <select id="languages" class="languages" onchange="changeLanguage()">
            <option value="c"> C </option>
            <option value="cpp"> C++ </option>
            <option value="php"> PHP </option>
            <option value="python"> Python </option>
            <option value="node"> Node JS </option>
            <option value="java"> Java </option>
            <option value="html"> HTML </option>
            <option value="css"> CSS</option>
            <option value="js"> Java Script</option>
        </select>
        <hr><hr>
        <form method="post" enctype="multipart/form-data">
        <p>Upload File</p>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    </div>
    <div class="editor" id="editor"></div>

    <div class="button-container">
        <button class="btn" onclick="executeCode()"> Run the code</button>
        <!-- <input type="text" onclick()="executeCode()"> -->
    </div>
    
    <div class="output"> Output</div>
    <br>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ide.js"></script>
    <script src="js/lib/ace.js"></script>
    <script src="js/lib/theme-monokai.js"></script>

</body>
</html>