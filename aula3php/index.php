<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
       
        $preco = 120;
        $quantidade = 3;
        $desconto = 30;
        $parcelas = 2;
            
       
        $total = $preco * $quantidade;
        $valorFinal = $total - $desconto;
        $valorParcial = $valorFinal / $parcelas;
        $valorComTaxa = $valorFinal + 15;
        $resto = $valorFinal;
            
       
        echo "Valor total da compra: R$ $total<br>";
        echo "Valor após o desconto: R$ $valorFinal<br>";
        echo "Valor de cada parcela: R$ $valorParcial<br>";
        echo "Valor com taxa de R$ 15,00: R$ $valorComTaxa<br>";
        echo "Resto da divisão por 2: $resto";
        ?>
    </body>
</html>
