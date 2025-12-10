import java.util.*;

public class Zadanie1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        Dane dane = new Dane();
        System.out.println("Podaj trzy liczby rzeczywiste a b c:");
        dane.setA(sc.nextDouble());
        dane.setB(sc.nextDouble());
        dane.setC(sc.nextDouble());

        double delta = DeltaCalculator.obliczDelte(dane.getA(), dane.getB(), dane.getC());
        System.out.println("Delta: " + delta);

        double[] pos = Sorter.posortuj(dane.getA(), dane.getB(), dane.getC());
        System.out.println("Liczby w kolejności rosnącej: " + pos[0] + " " + pos[1] + " " + pos[2]);

        System.out.println("Podaj liczbę całkowitą n do obliczenia silni:");
        dane.setN(sc.nextInt());

        if (dane.getN() < 0) {
            System.out.println("Silnia nie istnieje dla liczb ujemnych");
        } else {
            System.out.println("n! = " + Factorial.silnia(dane.getN()));
        }
    }
}
