    <?php
     
    $coresCarros = array("vermelho","amarelo","preto","prata","rosa");
     
    $cor = 3;
 
     
    switch ($cor) {
        case 0:
        echo "Carro vermelho";
        break;
     
        case 1:
        echo "carro amarelo";
        break;
     
        case 2:
        echo "carro preto";
        break;
     
        case 3:
        echo "carro prata";
        break;
     
        case 4:
        echo "carro rosa";
        break;
     
        default:
        echo "cor invalida";
     
    }