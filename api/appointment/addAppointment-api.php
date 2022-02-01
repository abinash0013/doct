<?php

    include '../../config.php';

    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    
    $insert = $con->query("INSERT INTO `appointment`(`name`, `number`, `email`, `date`) VALUES ('$name','$number','$email','$date')");

    $res->success = false;
    if($insert > 0){ 
        $rsp->status = '200';
        $rsp->message = 'Successfully Added';
    }
    else{
        $rsp->status = '204';
        $rsp->message = 'Failed';
    }
    echo json_encode($rsp);
    
?>