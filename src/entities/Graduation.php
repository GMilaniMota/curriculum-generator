<?php
namespace Entities;
class Graduation {
    public string $nome;
    public string $intituicao;
    public string $nivel; 
    public string $data_inicial;
    public string $data_final;
    
    public function __construct($data){
        foreach($data as $key => $field) {
            $this->$key = $field;
        }
    }
}