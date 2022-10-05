<?php 
namespace Entities;
class Experience {
    public string $cargo;
    public string $empresa;
    public string $data_inicial;
    public string $data_final;
    public bool $cargo_atual;
    public string $atribuicoes;

    public function __construct($data){
        foreach($data as $key => $field){
            $this->$key = $field;
        }
    }
}