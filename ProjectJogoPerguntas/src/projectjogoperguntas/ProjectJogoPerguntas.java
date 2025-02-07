package projectjogoperguntas;

import java.util.Random;
import java.util.Scanner;

public class ProjectJogoPerguntas {

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.println("Bem vindo ao programa de perguntas, lhe serao perguntadas 10 coisas aleatorias para saber seu conhecimento, no fim, vamos lhe mostrar quantos pontos voce fez!");

        System.out.print("Primeiramente, nos diga seu nome: ");
        String nameUser = teclado.nextLine();

        System.out.println("Certo " + nameUser + "! Vamos comecar...");

        String[] perguntas = {"Qual é o maior oceano do mundo?", "Quem escreveu \"Dom Quixote\"?", "Qual é a capital da França?", "Quantos planetas existem no Sistema Solar?", "Quem pintou a Mona Lisa?", "Quantos lados tem um triângulo?", "Em que país fica a Estátua da Liberdade?", "Qual é o metal principal presente no aço inoxidável?", "Quem foi o primeiro homem a pisar na Lua?", "Qual é o maior país do mundo em território?"};
        String[] respostasCorretas = {
            "Oceano Pacífico",
            "Miguel de Cervantes",
            "Paris",
            "8",
            "Leonardo da Vinci",
            "3",
            "Estados Unidos",
            "Ferro",
            "Neil Armstrong",
            "Rússia"
        };
        int pontuacao = 0;
        Random random = new Random();
        boolean[] perguntasFeitas = new boolean[perguntas.length];
        for (int contador = 0; contador < perguntas.length; contador++) {
            int index;

            do {
                index = random.nextInt(perguntas.length);
            } while (perguntasFeitas[index]);

            perguntasFeitas[index] = true;

            System.out.println("Pergunta: " + (contador + 1) + perguntas[index]);
            System.out.print("Sua resposta: ");
            String respUser = teclado.nextLine();

            if (respUser.equalsIgnoreCase(respostasCorretas[index])) {
                System.out.println("CORRETO!");
                pontuacao++;
            }
            else{
                System.out.println("Errado!");
                System.out.println("A resposta certa é " + respostasCorretas[index]);
            }
        }
        System.out.println("Parabens, sua pontuacao foi de " + pontuacao + "!");
    }

}
