<?php

//Init my errors

$formErrors = [
    'title' => '',
    'url_content' => '',
    'file_content' => '',
];

// Validation process -- false at the beginning

$validationForm = false;

// validation process for all the form

// Affect POST with submit

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $urlContent = $_POST['url_content'];
    $fileContent = $_POST['file_content'];

    // test part

    if(empty($title) ) {
    $formErrors['title'] = '<p> Please give a little title to your post </p>';
    } else {
    $formErrors['title'] = '';
    }

    if(empty($urlContent)&&empty($fileContent)){
        $formErrors['url_content'] = 'Please select an url or browse file';

    }

    if(!empty($urlContent)&&!empty($fileContent)){
        $formErrors['url_content'] = 'Please select an url or browse file';
    }


if($validationForm == true){

    }
}