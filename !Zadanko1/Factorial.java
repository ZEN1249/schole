import java.math.BigInteger;

public class Factorial {
    public static BigInteger silnia(int n) {
        BigInteger wynik = BigInteger.ONE;
        for (int i = 2; i <= n; i++) {
            wynik = wynik.multiply(BigInteger.valueOf(i));
        }
        return wynik;
    }
}
