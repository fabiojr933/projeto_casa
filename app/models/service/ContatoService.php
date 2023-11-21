<?php

namespace app\models\service;

use app\models\validacao\ContatoValidacao;
use app\util\UtilService;

class ContatoService
{
    public static function listar($contato, $campo, $tabela)
    {
        return Service::lista($contato, $campo, $tabela);
    }
}
