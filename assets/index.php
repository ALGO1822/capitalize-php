<?php 

    $sentence = null;
    $error = null;

        if(isset($_POST['sentenceOutput'])){
            $sentence = strtoupper($_POST['sentence']);
            $alert = 'alert alert-success p-2" role="alert"';
            $error = 'Here is your text 😊';
            
            if(empty($_POST['sentence'])){
                $alert = 'alert alert-danger p-2" role="alert"';
                $error = 'Please input some sentences 😊';
            }
        }

    include('cap.php');
?>