import java.io.*;
import java.util.ArrayList;
import java.util.Scanner;

public class ReadingPlan {
    private ArrayList<Book> books;
    private Scanner scanner;
    private final String FILE_NAME = "books.txt";

    public ReadingPlan() {
        books = new ArrayList<>();
        scanner = new Scanner(System.in);
        loadBooksFromFile();
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

        System.out.print("Podaj ocenę książki (1-5) lub 0 jeśli nie chcesz oceniać: ");
        int rating = scanner.nextInt();
        scanner.nextLine();

        System.out.print("Czy jest to książka fabularna? (tak/nie): ");
        String isFiction = scanner.nextLine().trim().toLowerCase();

        if (isFiction.equals("tak")) {
            System.out.print("Podaj gatunek książki: ");
            String genre = scanner.nextLine();
            books.add(new FictionBook(title, totalPages, daysToRead, rating, genre));
        } else {
            books.add(new Book(title, totalPages, daysToRead, rating));
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
        saveBooksToFile();
        System.out.println("Dane zapisane. Do zobaczenia!");
        scanner.close();
    }

    private void saveBooksToFile() {
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(FILE_NAME))) {
            for (Book book : books) {
                if (book instanceof FictionBook) {
                    FictionBook fb = (FictionBook) book;
                    writer.write("F;" + fb.title + ";" + fb.totalPages + ";" + fb.daysToRead + ";" + fb.rating + ";" + fb.getGenre());
                } else {
                    writer.write("N;" + book.title + ";" + book.totalPages + ";" + book.daysToRead + ";" + book.rating);
                }
                writer.newLine();
            }
        } catch (IOException e) {
            System.out.println("Błąd podczas zapisu do pliku: " + e.getMessage());
        }
    }

    private void loadBooksFromFile() {
        File file = new File(FILE_NAME);
        if (!file.exists()) return;

        try (BufferedReader reader = new BufferedReader(new FileReader(file))) {
            String line;
            while ((line = reader.readLine()) != null) {
                String[] parts = line.split(";");
                if (parts[0].equals("F")) {
                    // Fabularyjna: F;tytuł;strony;dni;ocena;gatunek
                    books.add(new FictionBook(
                            parts[1],
                            Integer.parseInt(parts[2]),
                            Integer.parseInt(parts[3]),
                            Integer.parseInt(parts[4]),
                            parts[5]
                    ));
                } else if (parts[0].equals("N")) {
                    // Niefabularna: N;tytuł;strony;dni;ocena
                    books.add(new Book(
                            parts[1],
                            Integer.parseInt(parts[2]),
                            Integer.parseInt(parts[3]),
                            Integer.parseInt(parts[4])
                    ));
                }
            }
        } catch (IOException | NumberFormatException e) {
            System.out.println("Błąd podczas wczytywania danych: " + e.getMessage());
        }
    }

    public static void main(String[] args) {
        ReadingPlan readingPlan = new ReadingPlan();
        readingPlan.run();
    }
}
