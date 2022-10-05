<?php 
namespace Entities;
require('../entities/Experience.php');
require('../entities/Graduation.php');

enum Sex {

}

class Resume {
    public string $nome;
    public string $email;
    public string $dataNasc;
    public string $telefone;
    public string $sobre;
    public Address $endereco;
    public array $exeperiencias = [];
    public array $graduacoes = [];

    public function __construct($data){
        foreach($data as $key => $field) {
            if (str_contains($key, 'graduacao')) {
                foreach($field as $graduacao) {
                    $graduacaoClass = new Graduation($graduacao);
                    array_push($this->graduacoes, $graduacaoClass);
                }
            }
            if (str_contains($key, 'ocupacao')) {
                foreach($field as $ocupacao) {
                    $ocupacaoClass = new Experience($ocupacao);
                    array_push($this->exeperiencias, $ocupacaoClass);
                }
            } else {
                $this->{$key} = $field; 
            }
        }
    }

}