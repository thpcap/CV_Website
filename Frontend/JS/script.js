// Fonction pour afficher/masquer les informations
function toggleInfo(experienceId) {
    var details = document.getElementById(experienceId);

    // Si le div est actuellement caché, on l'affiche
    if (details.style.display === "none" || details.style.display === "") {
        details.style.display = "block";
    } else {
        // Sinon on le cache
        details.style.display = "none";
    }
}