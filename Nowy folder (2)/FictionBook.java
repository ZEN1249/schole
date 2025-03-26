public class FictionBook extends Book {
    private String genre;

    public FictionBook(String title, int totalPages, int daysToRead, int rating, String genre) {
        super(title, totalPages, daysToRead, rating);
        this.genre = genre;
    }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Gatunek: " + genre);
    }

    public String getGenre() {
        return genre;
    }

}
