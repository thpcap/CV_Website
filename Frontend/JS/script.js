/*
         ___________
        |           |
        |    \"/    |
        |  .-.".-.  |
        |   '   `   |
        |  Warning  |
        | Bad  Code |
        |___________|
*/

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

$(document).ready(function () {
    //Gestion Du Sommaire
    // Récupère le conteneur du sommaire
    const $sommaire = $('#sommaire');
    // Parcourt chaque section et récupère le titre
    $('section').each(function () {
        const $section = $(this); // La section actuelle
        const $title = $section.find('h2').first(); // Le premier h2 dans la section pour le titre

        // Vérifie si la section a un ID
        const sectionId = $section.attr('id');

        if ($title.length!=0 && sectionId &&sectionId!="sommaire") {
            // Ajoute le titre dans le sommaire comme lien
            $sommaire.find('div').append(`
                <a href="#${sectionId}" class="sommaire-item">${$title.text()}</a>
            `);
        }
    });
    
    const darkModeToggle = $('#dark-mode-toggle');
    const body = $('body');

    // Vérifier les préférences du navigateur (mode sombre ou clair)
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        body.addClass('dark-mode');
        darkModeToggle.text('☀️ Light Mode');
    } else {
        body.removeClass('dark-mode');
        darkModeToggle.text('🌙 Dark Mode');
    }

    // Charger l'état précédent du mode sombre de localStorage
    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.addClass('dark-mode');
        darkModeToggle.text('☀️ Light Mode');
    } else if (localStorage.getItem('dark-mode') === 'disabled') {
        body.removeClass('dark-mode');
        darkModeToggle.text('🌙 Dark Mode');
    }

    // Gérer le clic sur le bouton
    darkModeToggle.click(function () {
        if (body.hasClass('dark-mode')) {
            body.removeClass('dark-mode');
            localStorage.setItem('dark-mode', 'disabled');
            darkModeToggle.text('🌙 Dark Mode');
        } else {
            body.addClass('dark-mode');
            localStorage.setItem('dark-mode', 'enabled');
            darkModeToggle.text('☀️ Light Mode');
        }
    });
});
