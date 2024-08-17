<?php 
$saldo = 1000;
$titular = "João Lucas";

echo "**********\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: $saldo\n";
    echo "**********\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

do {
    $pergunta = (int) fgets(STDIN);

    switch ($pergunta) {
    case 1:
        $consultarSaldo = $saldo;
        echo "**********\n";
        echo "Titular: $titular\n";
        echo "Saldo atual: $saldo\n";
        echo "**********\n";
        echo "1. Consultar saldo atual\n";
        echo "2. Sacar valor\n";
        echo "3. Depositar valor\n";
        echo "4. Sair\n";
        break;

    case 2:
        echo "Sacar: \n";
        $sacar = (float) fgets(STDIN);
        if ($sacar > $saldo) {
            echo "Saldo insuficiente\n";
            echo "Titular: $titular\n";
            echo "Saldo atual: $saldo\n";
            echo "**********\n";

            echo "1. Consultar saldo atual\n";
            echo "2. Sacar valor\n";
            echo "3. Depositar valor\n";
            echo "4. Sair\n";
        } else { 
            $saldo -= $sacar;
            echo "Titular: $titular\n";
            echo "Saldo atual: $saldo\n";
        }
        break;

    case 3:
        echo "Depositar: \n";
        $deposito = (float) fgets(STDIN);
        $saldo += $deposito;
        echo "Titular: $titular\n";
        echo "Saldo atual: $saldo\n";
        break;
    case 4:
        echo "Adeus\n";
        break;
    default:
        echo "Opção inválida\n";
        break;
    }
} while ($pergunta != 4);
