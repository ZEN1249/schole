public class FictionBook extends Book {
    private String genre;

    public FictionBook(String title, int totalPages, int daysToRead, String genre) {
        super(title, totalPages, daysToRead);
        this.genre = genre;
    }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Gatunek: " + genre);
    }
}
