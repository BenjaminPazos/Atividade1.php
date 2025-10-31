<?php

$chute = 0;
$tentativas = 1;
$pontuação = 10;

print("");

$intervalo1 = (int) readline("Digite um número menor para o intervalo: ");
$intervalo2 = (int) readline("Digite um número maior para o intervalo: ");

$sorteado = rand($intervalo1, $intervalo2);

while ($chute != $sorteado) {

    $chute = (int) readline("Digite um número: ");

    if ($chute == $sorteado) {
        $pontuação = $pontuação - $tentativas;
        print("Você venceu!!! \n");
        print("Número de tentativas:$tentativas \n");
        print("Você fez:$pontuação pontos!!! \n");
    } else {

        ++$tentativas;

        if ($chute > $sorteado) {
            print("Valor muito alto \n");
        } else {
            print("Valor muito baixo \n");
        }
    }
    if ($tentativas > 10) {
        print("Você perdeu o jogo, tente novamente mais tarde!!!");
        break;
    }
}
