public class Book {
    protected String title;
    protected int totalPages;
    protected int daysToRead;
    protected int rating;

    public Book(String title, int totalPages, int daysToRead, int rating) {
        this.title = title;
        this.totalPages = totalPages;
        this.daysToRead = daysToRead;
        this.rating = rating;
    }

    public void displayInfo() {
        System.out.println("\nTytuł: " + title);
        System.out.println("Liczba stron: " + totalPages);
        System.out.println("Liczba dni na czytanie: " + daysToRead);
        int dailyPages = (int) Math.ceil((double) totalPages / daysToRead);
        System.out.println("Musisz czytać około " + dailyPages + " stron dziennie.");
        displayRating();
    }

    public void displayRating() {
        if (rating > 0) {
            System.out.println("Ocena: " + rating + "/5");
        } else {
            System.out.println("Brak oceny.");
        }
    }
}
