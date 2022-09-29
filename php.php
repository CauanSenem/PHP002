<?php
$valor = $_POST['valor'];
if ($valor % 2 == 0)
{
    echo "O valor é divisivel por 2";
}
else 
{
    echo "Não é divisivel por 2";
}
?>