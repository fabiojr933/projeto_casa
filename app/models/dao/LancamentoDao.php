<?php

namespace app\models\dao;

use app\core\Model;

class LancamentoDao extends Model
{
    public function listaLancamento()
    {
        $sql = "SELECT f.id as id_fase, f.descricao as fase, fo.descricao as fornecedor, p.descricao as pagamento, lanc.id, lanc.valor, lanc.nfe, lanc.data_pagamento, lanc.data_lancamento
        FROM lancamento lanc 
        inner join fase f on f.id = lanc.id_fase
        inner join fornecedor fo on fo.id = lanc.id_fornecedor
        inner join pagamento p on p.id = lanc.id_pagamento";

        return $this->select($this->db, $sql);
    }

    public function totalLancamento()
    {
        $sql = "SELECT sum(valor) as  total FROM lancamento";
        return $this->select($this->db, $sql);
    }

   
}




