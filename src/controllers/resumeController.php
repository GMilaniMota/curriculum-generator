<?php 
    $data = $_POST;
    $resume = new Resume();
    foreach ($data as $key => $field) {
        $resume->$key = $field; 
    }
    