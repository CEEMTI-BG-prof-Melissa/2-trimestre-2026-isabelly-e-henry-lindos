<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    </head>
    <body>
        <?php
            
        $pre = 120;
        $qnt = 3;
        $des = 30;
        $pars = 2;
            
            $ttl = $pre * $qnt;
            $vF = $ttl - $des;
            $vP = $vF / $pars;
           $vCT = $vF + 15;
            $resto = $vF % 2;
            
        echo "Valor total da compra: R$ $ttl<br>";
         echo "Valor após o desconto: R$ $vF<br>";
        echo "Valor de cada parcela: R$ $vP<br>";
         echo "Valor com taxa de R$ 15,00: R$ $vCT<br>";
        echo "Resto da divisão por 2: $resto";
        ?>
    </body>
</html>
