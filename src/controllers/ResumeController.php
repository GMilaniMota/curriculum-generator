<?php
namespace Controllers;
require('../entities/Resume.php');
use Entities\Resume;

$data = $_POST;
$resume = new Resume();
foreach($data as $key => $field) {
    $resume->{$key} = $field;
}
var_dump($resume);