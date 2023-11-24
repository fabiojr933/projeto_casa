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
    public function totalGastos()
    {
        $sql = "SELECT 'Total gasto' as total, sum(a.valor) as valor FROM lancamento a";
        return $this->select($this->db, $sql);
    }

    public function mesesGastos()
    {
        $sql = "
        SELECT 
        case 
        EXTRACT(MONTH FROM a.data_pagamento)
        WHEN 1 THEN 'Janeiro'
        WHEN 2 THEN 'Fevereiro'
        WHEN 3 THEN 'Março'
        WHEN 4 THEN 'Abril'
        WHEN 5 THEN 'Maio'
        WHEN 6 THEN 'Junho'
        WHEN 7 THEN 'Julho'
        WHEN 8 THEN 'Agosto'
        WHEN 9 THEN 'Setembro'
        WHEN 10 THEN 'Outubro'
        WHEN 11 THEN 'Novembro'
        WHEN 12 THEN 'Desembro'
        end as mes,
        sum(a.valor) as valor         
        from lancamento a  group by 1
        ";
        return $this->select($this->db, $sql);
    }
}
