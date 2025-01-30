package javateste1;

import java.util.Arrays;
import javax.swing.JOptionPane;

public class JavaTeste1 {

    public static void funcNotas() {
        try {
            String nomeUser = JOptionPane.showInputDialog("Digite seu nome: ");
            String inputIdadeUser = JOptionPane.showInputDialog("Digite sua idade: ");
            int idadeUser = Integer.parseInt(inputIdadeUser);

            int opcao = JOptionPane.showConfirmDialog(null, "Olá " + nomeUser.toUpperCase() + "!" + ". Seja bem vindo! Está certo seu nome e sua idade?");
            switch (opcao) {
                case JOptionPane.YES_OPTION:

                    JOptionPane.showMessageDialog(null, "Perfeito! " + nomeUser + "!" + " Seja bem vindo ao nosso programa de calcular notas ");
                    String inputNotas = JOptionPane.showInputDialog("Quantas notas voce quer inserir? ");
                    int quantidadeNotas = Integer.parseInt(inputNotas);
                    int notas[] = new int[quantidadeNotas];

                    for (int contador = 0; contador < quantidadeNotas; contador++) {
                        String nota = JOptionPane.showInputDialog("Digite a " + (contador + 1) + " nota: ");
                        int newNota = Integer.parseInt(nota);
                        notas[contador] = newNota;
                    }

                    int confirmNotas = JOptionPane.showConfirmDialog(null, "As notas estao certas? " + Arrays.toString(notas));

                    if (confirmNotas == (JOptionPane.YES_OPTION)) {
                        JOptionPane.showMessageDialog(null, "Perfeito!");
                    } else {
                        JOptionPane.showMessageDialog(null, "Ok. Vamos inserir novamente as notas");

                        for (int contador = 0; contador < quantidadeNotas; contador++) {
                            String nota = JOptionPane.showInputDialog("Insira a " + (contador + 1) + " nota: ");
                            int newNota = Integer.parseInt(nota);
                            notas[contador] = newNota;
                        }
                    }
                    int media = 0;
                    for (int contador = 0; contador <= notas.length - 1; contador++) {
                        media += notas[contador];
                    }

                    JOptionPane.showMessageDialog(null, "A media é: " + media / quantidadeNotas);
                    JOptionPane.showMessageDialog(null, "Notas do aluno: " + Arrays.toString(notas));
                    JOptionPane.showMessageDialog(null, "PROGRAMA FINALIZADO! OBRIGADO PELA PRESENCA!");
                    break;

                case JOptionPane.NO_OPTION:
                    JOptionPane.showMessageDialog(null, "Certo, vamos reiniciar o programa.");
                    JOptionPane.showMessageDialog(null,"Carregando...");
                    funcNotas();
                    break;
                case JOptionPane.CANCEL_OPTION:
                    JOptionPane.showMessageDialog(null, "Programa encerrado...");
                    break;
                default:
                    System.out.println("Erro");

            }

        } catch (NumberFormatException e) {
            JOptionPane.showInputDialog("Por favor, digite uma idade válida: ");
        }
    }

    public static void main(String[] args) {
        funcNotas();
    }
}
