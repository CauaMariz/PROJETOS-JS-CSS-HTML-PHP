package javatest;

import java.util.Random;
import java.util.Scanner;

public class JavaTest {

    public static int somaPontosUser = 0;
    public static int somaPontosComp = 0;

    public static void showMenu() {
        System.out.println("---BEM VINDO AO PROGRAMA! -");
        System.out.println("1-----------SAIR-----------");
        System.out.println("2---------REPETIR--------");
        System.out.println("3------VER PONTUACAO-------");

    }

    public static void startProgram() {
        Random rand = new Random();

        Scanner teclado = new Scanner(System.in);
        System.out.println("Muito bem, nos diga seu nome: ");
        String nameUser = teclado.nextLine();

        while (nameUser.trim().isEmpty()) {
            System.out.println("Digite seu nome novamente: ");
            nameUser = teclado.nextLine();
        }

        System.out.println("Certo " + nameUser + "! O programa é um jogo de dados!");

        System.out.println("Regras: ");
        System.out.println("Cada jogador terá dois dados lancados aleatorios.");
        System.out.println("Serão 5 rodadas.");
        System.out.println("Os numeros que sairem nos dados \nserão somados, assim, que tiver mais pontos \nna rodada ganha um ponto.");
        System.out.println("Se empatarem ninguem recebe ponto.");
        System.out.println("Ganha quem tiver mais pontos no fim do jogo.");

        System.out.println("Digite qualquer coisa para comecar.");

        String respUser = teclado.nextLine();

        while (respUser.trim().isEmpty()) {
            System.out.println("Digite novamente para comecar.");
            respUser = teclado.nextLine();
        }

        int somaDadosUser;
        int somaDadosComp;
        for (int contador = 0; contador < 6; contador++) {
            System.out.println("RODADA: " + (contador + 1));
            int dadoUser1 = rand.nextInt(6) + 1;
            int dadoCompt1 = rand.nextInt(6) + 1;
            int dadoUser2 = rand.nextInt(6) + 1;
            int dadoCompt2 = rand.nextInt(6) + 1;

            somaDadosUser = dadoUser1 + dadoUser2;
            somaDadosComp = dadoCompt1 + dadoCompt2;

            System.out.println("Seus dados: " + dadoUser1 + "\n" + dadoUser2);
            System.out.println("Dados do computador: " + dadoCompt1 + "\n" + dadoCompt2);

            if (somaDadosUser > somaDadosComp) {
                System.out.println("Parabens! Voce venceu essa rodada com " + somaDadosUser + " pontos!");
                somaPontosUser += 1;
                String x = teclado.nextLine();
            } else if (somaDadosComp == somaDadosUser) {
                System.out.println("Voces empataram com " + somaDadosUser + "pontos!");
                String x = teclado.nextLine();
            } else {
                System.out.println("O computador venceu essa rodada com " + somaDadosComp + " pontos!");
                somaPontosComp += 1;
                String x = teclado.nextLine();
            }

        }
        if (somaPontosUser > somaPontosComp) {
            System.out.println("PARABENS! VOCE VENCEU O JOGO COM " + somaPontosUser + " PONTOS!");
            
            showMenu();

            System.out.print("Digite algo: ");
            String respUser1 = teclado.nextLine();

            while (respUser1.isEmpty()) {
                showMenu();

                System.out.print("Digite a opção novamente: ");
                respUser1 = teclado.nextLine();
            }
              switch (respUser1) {
            case "1":
                System.out.println("PROGRAMA FINALIZADO!");
                break;
            case "2":
                startProgram();
                break;
            case "3":
                System.out.println("Seus pontos: " + seePoints());
                break;
        }
        } else if (somaPontosComp > somaPontosUser) {
            System.out.println("O COMPUTADOR VENCEU O JOGO COM " + somaPontosComp);
             showMenu();

            System.out.print("Digite algo: ");
            String respUser1 = teclado.nextLine();

            while (respUser1.isEmpty()) {
                showMenu();

                System.out.print("Digite a opção novamente: ");
                respUser1 = teclado.nextLine();
            }
              switch (respUser1) {
            case "1":
                System.out.println("PROGRAMA FINALIZADO!");
                break;
            case "2":
                startProgram();
                break;
            case "3":
                System.out.println("Seus pontos: " + seePoints());
                break;
        }
        } else {
            System.out.println("VOCES EMPATARAM NO JOGO!");
             showMenu();

            System.out.print("Digite algo: ");
            String respUser1 = teclado.nextLine();

            while (respUser1.isEmpty()) {
                showMenu();

                System.out.print("Digite a opção novamente: ");
                respUser1 = teclado.nextLine();
            }
              switch (respUser1) {
            case "1":
                System.out.println("PROGRAMA FINALIZADO!");
                break;
            case "2":
                startProgram();
                break;
            case "3":
                System.out.println("Seus pontos: " + seePoints());
                break;
        }
        }

    }

    public static int seePoints() {
        return somaPontosUser;
    }

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        showMenu();

        System.out.print("Digite algo: ");
        String respUser = teclado.nextLine();

        while (respUser.isEmpty()) {
            System.out.println("1-----------SAIR-----------");
            System.out.println("2---------REPETIR--------");
            System.out.println("3------VER PONTUACAO-------");

            System.out.print("Digite a opção novamente: ");
            respUser = teclado.nextLine();
        }
        switch (respUser) {
            case "1":
                System.out.println("PROGRAMA FINALIZADO!");
                break;
            case "2":
                startProgram();
                break;
            case "3":
                System.out.println("Seus pontos: " + seePoints());
                break;
        }
    }

}
