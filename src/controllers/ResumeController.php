<?php
namespace Controllers;
require('../entities/Resume.php');
require('../views/Resume.view.php');
use Entities\Resume;
use Views\ResumeView;

$data = $_POST;
if (!move_uploaded_file($_FILES["picture"]["tmp_name"], '../../public/uploads/'.$_FILES["picture"]["name"])) {
    return false;
}
$data["picture"] = $_FILES["picture"]["name"];
$resume = new Resume($data);
$view  = new ResumeView($resume);
$view->inflate();
echo($view->render());