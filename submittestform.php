<?php 
session_start();
error_reporting(0);
include_once 'DB/DBMain.php';

$dbFunc = new DBMain();

$test_code= $_REQUEST['t_code'];
$lab_test= $_REQUEST['t_name'];
$test_preparation= $_REQUEST['t_pre'];
$cities= $_REQUEST['city'];
$amount= $_REQUEST['t_amount'];	

$insertData = array(
        "test_code" => $test_code,
        "lab_test" => $lab_test,
        "test_preparation" => $test_preparation,
        "cities" => $cities, 
        "amount" => $amount,
        "status" => 1
    );
    // print_r($insertData);exit;        
    $sid= $dbFunc->partner->insert("lab_tests", $insertData);  
    // print_r($sid);exit;        
?>