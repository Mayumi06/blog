<?php
function insert (string $entidade, array $dados) : string
{
    $instrucao = "INSERT INTO {$entidade}";

    $campos = implode(',', array_keys($dados));
    $valores = implode(',', array_values($dados));

    $instrucao .= "({$campos})";
    $instrucao .= " VALUES ({$valores})";

    return $instrucao;

}

    function update (string $entidade, array $dados, array $criterio = (l) :string
{
    $instrucao = "UPDATE ($entidade)";
foreach ($dados as $campo => $dado) {
$set[] = "{$campo}" = {$dado}";
}
$instrucao .= ' SET ' .implod(',', $set) ;

if (!empty ($criterio)){
$instrucao = 'WHERE ';

foreach ($criterio as $expressao) {
$instrucao .= '' . implode('', $expressao);
}
}

return Sinstrucao;
}

function delete(string $entidade, array $criterio = [1] : string
{
    $intrucao = "DELETE {$entidade}";
    if(!empty($criterio)){
        $instrucao = '' . implode('',$expressao);
    }
}
    return $instrucao;
}
function seletc (string $entidade, array $campos, array $criterio = [],
string $orde = null) : string
{
    $instrucao = "SELECT" implode (',', $campos);
    $instrucao = "FROM" implode {$entidade}";

    if(!empty($criterio)){
        $instrucao = 'WHERE';
        foreach($criterio as $expressao){
            $instrucao
        }
    }
    ?>