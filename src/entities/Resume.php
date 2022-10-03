<?php 
namespace Entities;


enum Sex {

}

class Resume {
    public string $nome;
    public string $email;
    public string $dataNasc;
    public string $telefone;
    public string $sobre;
    public Address $endereco;
    public array $exeperiencias;
    public array $graduacoes;

    public function __construct($data){
        foreach($data as $key => $field) {
            $this->{$key} = $field;
        }
    }

}