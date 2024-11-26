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

// Récupérer le bouton et le body
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

// Charger le mode précédemment sélectionné (localStorage)
if (localStorage.getItem('dark-mode') === 'enabled') {
    body.classList.add('dark-mode');
    darkModeToggle.textContent = '☀️ Light Mode';
}

// Gérer le clic sur le bouton
darkModeToggle.addEventListener('click', () => {
    if (body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
        localStorage.setItem('dark-mode', 'disabled');
        darkModeToggle.textContent = '🌙 Dark Mode';
    } else {
        body.classList.add('dark-mode');
        localStorage.setItem('dark-mode', 'enabled');
        darkModeToggle.textContent = '☀️ Light Mode';
    }
});

// Vérifier les préférences utilisateur
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    body.classList.add('dark-mode');
    localStorage.setItem('dark-mode', 'enabled');
    darkModeToggle.textContent = '☀️ Light Mode';
}
