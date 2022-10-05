<?php
namespace Controllers;
require('../entities/Resume.php');
require('../views/Resume.view.php');
use Entities\Resume;
use Views\ResumeView;

$data = $_POST;
$resume = new Resume($data);
$view  = new ResumeView($resume);
$view->inflate();
echo($view->render());