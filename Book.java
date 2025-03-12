public class Book {
    protected String title;
    protected int totalPages;
    protected int daysToRead;

    public Book(String title, int totalPages, int daysToRead) {
        this.title = title;
        this.totalPages = totalPages;
        this.daysToRead = daysToRead;
    }

    public void displayInfo() {
        System.out.println("\nTytuł: " + title);
        System.out.println("Liczba stron: " + totalPages);
        System.out.println("Liczba dni na czytanie: " + daysToRead);
        int dailyPages = (int) Math.ceil((double) totalPages / daysToRead);
        System.out.println("Musisz czytać około " + dailyPages + " stron dziennie.");
    }
}
