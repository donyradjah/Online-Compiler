<?php

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

$arr = json_decode($_POST);
echo json_encode($arr);


//
//$CC = "g++";
//$out = "timeout 5s ./a.out";
//$code = $_POST["code"];
//$input = $_POST["input"];
//$filename_code = "main.cpp";
//$filename_in = "input.txt";
//$filename_error = "error.txt";
//$executable = "a.out";
//$command = $CC . " -lm " . $filename_code;
//$command_error = $command . " 2>" . $filename_error;
//$check = 0;
//
////if(trim($code)=="")
////die("The code area is empty");
//
//$file_code = fopen($filename_code, "w+");
//fwrite($file_code, $code);
//fclose($file_code);
//$file_in = fopen($filename_in, "w+");
//fwrite($file_in, $input);
//fclose($file_in);
//exec("chmod -R 777 $filename_in");
//exec("chmod -R 777 $filename_code");
//exec("chmod 777 $filename_error");
//
//shell_exec($command_error);
//exec("chmod -R 777 $executable");
//$error = file_get_contents($filename_error);
//$executionStartTime = microtime(true);
//
//$statusError = 0;
//
//if (trim($error) == "") {
//    if (trim($input) == "") {
//        $output = shell_exec($out);
//    } else {
//        $out = $out . " < " . $filename_in;
//        $output = shell_exec($out);
//
//
//    }
//    //echo "<pre>$output</pre>";
//} else if (!strpos($error, "error")) {
//    $statusError = 1;
//    if (trim($input) == "") {
//        $output = shell_exec($out);
//    } else {
//        $out = $out . " < " . $filename_in;
//        $output = shell_exec($out);
//    }
//} else {
//    $statusError = 1;
//}
//
//$executionEndTime = microtime(true);
//$seconds = $executionEndTime - $executionStartTime;
//$seconds = sprintf('%0.2f', $seconds);
//
//$verdict = "";
//
//if ($check == 1) {
//    $verdict = "<pre>Verdict : CE</pre>";
//} else if ($check == 0 && $seconds > 3) {
//    $verdict = "<pre>Verdict : TLE</pre>";
//} else if (trim($output) == "") {
//    $verdict = "<pre>Verdict : WA</pre>";
//} else if ($check == 0) {
//    $verdict = "<pre>Verdict : AC</pre>";
//}
//
//exec("rm $filename_code");
//exec("rm *.o");
//exec("rm *.txt");
//exec("rm $executable");
//
//$array = array(
//    "waktu"        => $seconds,
//    "verdict"      => $verdict,
//    "error"        => $statusError,
//    "output"       => $output,
//    "errorMessage" => $error,
//    "POST"         => ($_POST)
//);
//
//
//header('Content-type: application/json');
//echo json_encode($array);


?>
