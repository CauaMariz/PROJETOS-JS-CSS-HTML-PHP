package projectcalculadorajava;

import javax.swing.JOptionPane;

public class ProjectCalculadoraJava {

    public static void main(String[] args) {
        JOptionPane.showMessageDialog(null, "Bem vindo a calculadora em Java!");
        String nameUser = JOptionPane.showInputDialog("Digite seu nome: ");
        while (nameUser.isEmpty()) {
            nameUser = JOptionPane.showInputDialog("Digite novamente seu nome: ");
        }
        JOptionPane.showMessageDialog(null, "'Muito bem " + nameUser + ". Vamos comecar o programa!");

        String numOne = JOptionPane.showInputDialog("Digite o primeiro número: ");
        double newNumOne = Double.parseDouble(numOne);

        while (newNumOne < 0) {
            numOne = JOptionPane.showInputDialog("Digite novamente o primeiro número, nao é permitido numeros menores que zero: ");
            newNumOne = Double.parseDouble(numOne);
        }
        String numTwo = JOptionPane.showInputDialog("Digite o segundo número: ");
        double newNumTwo = Double.parseDouble(numTwo);

        while (newNumTwo < 0) {
            numTwo = JOptionPane.showInputDialog("Digite novamente o segundo número, nao é permitido numeros menores que zero: ");
            newNumTwo = Double.parseDouble(numTwo);
        }

        String optionUser = JOptionPane.showInputDialog("Voce deseja somar (+), subtrair(-), multiplicar(x) ou dividir(/) os numeros? ");

        switch (optionUser) {
            case "+":
                double soma = newNumOne + newNumTwo;
                JOptionPane.showMessageDialog(null, newNumOne + " + " + newNumTwo + " = " + String.format("%.2f",soma));
                JOptionPane.showMessageDialog(null, "Programa finalizado! Obrigado pela preferencia " + nameUser + "!");
                break;
            case "-":
                double subtr = newNumOne - newNumTwo;
                JOptionPane.showMessageDialog(null, newNumOne + " - " + newNumTwo + " = " + String.format("%.2f",subtr));
                JOptionPane.showMessageDialog(null, "Programa finalizado! Obrigado pela preferencia " + nameUser + "!");
                break;
            case "x":
                double mult = newNumOne * newNumTwo;
                JOptionPane.showMessageDialog(null, newNumOne + " x " + newNumTwo + " = " + String.format("%.2f",mult));
                JOptionPane.showMessageDialog(null, "Programa finalizado! Obrigado pela preferencia " + nameUser + "!");
                break;
            case "/":
                double div = newNumOne / newNumTwo;
                JOptionPane.showMessageDialog(null, newNumOne + " / " + newNumTwo + " = " + String.format("%.2f",div));
                JOptionPane.showMessageDialog(null, "Programa finalizado! Obrigado pela preferencia " + nameUser + "!");
                break;
        }

    }
}
