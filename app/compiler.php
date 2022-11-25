<?php
echo "Hello";
    $language = strtolower($_POST['language']);
    $language = "cpp";
    $code = $_POST['code'];

    $random = substr(md5(mt_rand()), 0, 7);
    // $random ="App";
<<<<<<< HEAD
    $filePath = "temp/" . $random . "." . $language;
    echo $language. "  " . $random." ". $code;  
=======
    $filePath = "temp/" . $random. "." . $language;
    // echo $language. "  " . $random." ". $code;  
>>>>>>> 5bd14ee4d6076495311a8553d937758fc9d5cff1
    $programFile = fopen($filePath, "w");
    fwrite($programFile, $code);
    fclose($programFile);
    if($language == "php") {
        $output = shell_exec("C:\xampp\php\php.exe $filePath 2>&1");
        // echo "Hello";
        echo $output;
    }
    if($language == "python") {
        $output = shell_exec("C:\Python310\python.exe $filePath 2>&1");
        echo $output;
    }
    if($language == "java") {
        $output = shell_exec("C:\Program Files\Java\jdk-17.0.1\java.exe $filePath 2>&1");
        echo $output;
    }
    if($language == "node") {
        rename($filePath, $filePath.".js");
        $output = shell_exec("node $filePath.js 2>&1");
        echo $output;
    }
    if($language == "c") {
        $outputExe = $random . ".exe";
        shell_exec("gcc $filePath -o $outputExe");
        $output = shell_exec(__DIR__ . "//$outputExe");
        echo $output;
    }
    if($language == "cpp") {
        $outputExe = $random . ".exe";
        shell_exec("g++ $filePath -o $outputExe");
        $output = shell_exec(__DIR__ . "//$outputExe");
        echo $output;
    }
?>