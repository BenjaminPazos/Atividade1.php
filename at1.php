<?php

$G = 0; //gamer
$H = 0; //hqs 
$F = 0; //filmes
$C = 0; //camisas nerds
$A = 0; //animes
$AC = 0; //acessorios nerds
$CalculoNerd = 0;

$resposta = (string) readline("Deseja calcular seu nivel de nerd? (s/n): ");

if ($resposta == "s") {

    print "Vamos começar as perguntas!!! \n";

    //trim(fgets(STDIN)), fgets(STDIN): Lê uma linha e inclue \n, trim() remove espaços ao redor

    print "Quantas horas você joga semanalmente? ";
    $G = (int) trim(fgets(STDIN));

    print "Quantas HQs você lê mensalmente? ";
    $H = (int) trim(fgets(STDIN));

    print "Quantos filmes você vê mensalmente? ";
    $F = (int) trim(fgets(STDIN));

    print "Quantas camisas nerds você tem? ";
    $C = (int) trim(fgets(STDIN));

    print "Quantos animes você vê mensalmente? ";
    $A = (int) trim(fgets(STDIN));

    print "Quantos acessórios nerds você tem? ";
    $AC = (int) trim(fgets(STDIN));

    print "Calculando";
    for ($i = 1; $i <= 5; $i++) {
        print ".";
        sleep(1);
    }

    print " Calculado!!! \n";

    $maxPontuacao = 40 * 1 + 20 * 2 + 20 * 2 + 10 * 1 + 20 * 2 + 10 * 1; // total máximo
    $CalculoNerd = ($G * 1 + $H * 2 + $F * 2 + $C * 1 + $A * 2 + $AC * 1) / $maxPontuacao * 100;

    if ($CalculoNerd < 20) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Saibaman. \n";
    } elseif ($CalculoNerd < 40) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Kuririn. \n";
    } elseif ($CalculoNerd < 60) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Super Saiajyn. \n";
    } elseif ($CalculoNerd < 80) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Super Saiajyn 2. \n";
    } elseif ($CalculoNerd < 100) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Super Saiajyn 3. \n";
    } elseif ($CalculoNerd < 8000) {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é Deus Yamcha!!! \n";
    } else {
        print "Você é $CalculoNerd% porcento nerd!!!, seu nivel é mais de 8 mil!!! \n";
    }
} else {

    print "Que pena ); \n";
}
