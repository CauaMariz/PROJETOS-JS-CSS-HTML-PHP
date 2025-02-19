
package javatest;
import java.util.Scanner;
public class Atividade1DS {
    public static void main(String[] args){
        System.out.println("Digite tres valores");
        Scanner teclado = new Scanner(System.in);
        
        double valor1 = teclado.nextDouble();
        double valor2 = teclado.nextDouble();
        double valor3 = teclado.nextDouble();
        
        double media = (valor1 + valor2 + valor3) / 3;
        System.out.println("Media dos valores: " + media);
    }
}
