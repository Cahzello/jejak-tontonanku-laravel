document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("filmSearchInput");
    // const filmCardsContainer = document.getElementById("filmCardsContainer");
    const filmCards = document.querySelectorAll(".film-card"); // Select all film cards
    const noInitialDataMessage = document.getElementById(
        "noInitialDataMessage"
    );
    const noSearchResultsMessage = document.getElementById(
        "noSearchResultsMessage"
    );

    // Hide the "No initial data" message if there are any film cards
    if (filmCards.length > 0 && noInitialDataMessage) {
        noInitialDataMessage.style.display = "none";
    }

    searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value.toLowerCase().trim();
        let foundResults = false;

        filmCards.forEach((card) => {
            const titleElement = card.querySelector(".film-title");
            const yearElement = card.querySelector(".film-year");

            // Extract text content and convert to lowercase for comparison
            const title = titleElement
                ? titleElement.textContent.toLowerCase()
                : "";
            const year = yearElement
                ? yearElement.textContent.toLowerCase()
                : "";

            // Check if the search term is present in either title or year
            if (title.includes(searchTerm) || year.includes(searchTerm)) {
                card.style.display = ""; // Show the card
                foundResults = true;
            } else {
                card.style.display = "none"; // Hide the card
            }
        });

        // Show/hide the "No search results" message
        if (noSearchResultsMessage) {
            if (foundResults) {
                noSearchResultsMessage.style.display = "none";
            } else {
                noSearchResultsMessage.style.display = "flex"; // Use flex to center it
            }
        }
    });
});
