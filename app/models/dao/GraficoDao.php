<?php

namespace app\models\dao;

use app\core\Model;

class GraficoDao extends Model
{
    public function totalFases()
    {
        $sql = "SELECT f.descricao, sum(a.valor) as valor from lancamento a
        inner join fase f on a.id_fase = f.id group by 1";
        return $this->select($this->db, $sql);
    }
    public function totalFornecedor()
    {
        $sql = "SELECT f.descricao, sum(a.valor) as valor
        from lancamento a inner join fornecedor f on a.id_fornecedor = f.id group by 1";
        return $this->select($this->db, $sql);
    }

    public function totalData()
    {
        $sql = "SELECT a.data_pagamento, sum(a.valor) as valor  FROM lancamento a GROUP by 1";
        return $this->select($this->db, $sql);
    }
}
