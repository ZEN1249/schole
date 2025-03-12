import java.util.ArrayList;
import java.util.Scanner;

public class ReadingPlan {
    private ArrayList<Book> books;
    private Scanner scanner;

    public ReadingPlan() {
        books = new ArrayList<>();
        scanner = new Scanner(System.in);
    }

    public void run() {
        while (true) {
            displayMenu();
            int choice = scanner.nextInt();
            scanner.nextLine();

            switch (choice) {
                case 1:
                    addBook();
                    break;
                case 2:
                    displayBooks();
                    break;
                case 3:
                    exit();
                    return;
                default:
                    System.out.println("Nieprawidłowa opcja. Spróbuj ponownie.");
            }
        }
    }

    private void displayMenu() {
        System.out.println("\nMenu:");
        System.out.println("1. Dodaj książkę");
        System.out.println("2. Wyświetl książki i plany czytania");
        System.out.println("3. Wyjście");
        System.out.print("Wybierz opcję: ");
    }

    private void addBook() {
        System.out.print("Podaj tytuł książki: ");
        String title = scanner.nextLine();

        System.out.print("Podaj liczbę stron: ");
        int totalPages = scanner.nextInt();

        System.out.print("Podaj liczbę dni na przeczytanie: ");
        int daysToRead = scanner.nextInt();
        scanner.nextLine();

        System.out.print("Czy jest to książka fabularna? (tak/nie): ");
        String isFiction = scanner.nextLine().trim().toLowerCase();

        if (isFiction.equals("tak")) {
            System.out.print("Podaj gatunek książki: ");
            String genre = scanner.nextLine();
            books.add(new FictionBook(title, totalPages, daysToRead, genre));
        } else {
            books.add(new Book(title, totalPages, daysToRead));
        }

        System.out.println("Książka dodana!");
    }

    private void displayBooks() {
        if (books.isEmpty()) {
            System.out.println("Nie dodano jeszcze żadnych książek.");
        } else {
            for (Book book : books) {
                book.displayInfo();
            }
        }
    }

    private void exit() {
        System.out.println("Do zobaczenia!");
        scanner.close();
    }

    public static void main(String[] args) {
        ReadingPlan readingPlan = new ReadingPlan();
        readingPlan.run();
    }
}
