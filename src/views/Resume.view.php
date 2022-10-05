<?php 
namespace Views;
class ResumeView {
    private $layout;
    private $data;

    public function __construct($data){
        $this->data = $data;
        global $data;
        session_start(); 
        $_SESSION['data'] = $this->data;
    }

    public function inflate() {
        ob_start();
        require("../layouts/ResumeLayout.php");
        $this->layout = ob_get_clean();
    }
    
    public function render() {
        return $this->layout;
    }
}