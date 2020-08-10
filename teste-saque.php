<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Rafael Aquino Risalte',
        new Endereco("Campo Grande", 'Jockey Club', 'Japão', '1384')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
