<?php
namespace Controllers;
require('../entities/Resume.php');
use Entities\Resume;

$data = $_POST;
$resume = new Resume($data);
var_dump($resume);