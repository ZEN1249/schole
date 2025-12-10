import java.util.*;

public class Zadanie2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        DaneFibo dane = new DaneFibo();
        System.out.println("Podaj n (n >= 0):");
        dane.setN(sc.nextInt());

        if (dane.getN() < 0) {
            System.out.println("Błąd: podano liczbę ujemną");
            return;
        }

        System.out.println("F(" + dane.getN() + ") = " + Fibonacci.fib(dane.getN()));
    }
}
