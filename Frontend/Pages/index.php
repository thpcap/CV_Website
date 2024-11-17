<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thomas Capron - CV</title>

    <!-- Chargement dynamique de Styles.css -->
    <link id="main-stylesheet" rel="stylesheet" href="../Css/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>



<body>
    <header>
        <div class="header-content">
            <img src="../Images/photo_profil.png" alt="Thomas Capron" class="profile-photo">
            <h1>Thomas CAPRON</h1>
            <p>Futur ingénieur en informatique</p>
            <p><strong>Date de naissance :</strong> 10 avril 2003</p>
            <p><strong>Nationalité :</strong> Française</p>
        </div>
    </header>

    <section id="contact" data-aos="fade-up">
        <h2>Contact</h2>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <div class="contact-details">
                    <strong>Téléphone :</strong>
                    <p>+33 (0)7 82 05 16 50</p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <div class="contact-details">
                    <strong>E-Mail :</strong>
                    <a href="mailto:thomas.capron@etu.imtnord-europe.fr">thomas.capron@etu.imtnord-europe.fr</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-details">
                    <strong>Adresse :</strong>
                    <p>819 Rue Voltaire, 59283 RAIMBEAUCOURT</p>
                </div>
            </div>
        </div>
    </section>


    <section id="formation" data-aos="fade-up">
        <h2>Formation</h2>
        
        <!-- Flèche symbolisant le temps -->
        <div class="time-arrow"></div>

        <div class="formation-container">
            <!-- IMT Nord Europe -->
            <div class="formation-card">
                <img src="../Images/logos/imt_logo.png" alt="IMT Nord Europe" class="formation-logo">
                <div class="formation-info">
                    <h3 class="formation-title">IMT Nord Europe (2021 - Actuellement)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('formation1')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="formation1" class="formation-details">
                        <p>2ème année de cycle ingénieur à IMT Nord Europe, spécialisation en informatique.</p>
                    </div>
                </div>
            </div>

            <!-- Lycée Edmond Labbé -->
            <div class="formation-card">
                <img src="../Images/logos/edmond_labbé_logo.png" alt="Lycée Edmond Labbé" class="formation-logo">
                <div class="formation-info">
                    <h3 class="formation-title">Lycée Edmond Labbé, Douai (2018 - 2021)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('formation2')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="formation2" class="formation-details">
                        <p>Bac général, option mathématiques, physique, mention Très Bien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="experiences" data-aos="fade-up">
        <h2>Expériences Professionnelles</h2>
        
        <!-- Flèche symbolisant le temps -->
        <div class="time-arrow"></div>

        <div class="experience-container">
            <!-- Airbus -->
            <div class="experience-card">
                <img src="../Images/logos/airbus_logo.png" alt="Airbus Defense and Space" class="experience-logo">
                <div class="experience-info">
                    <h3 class="experience-title">Stage à Airbus Defense and Space (2023)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('experience1')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="experience1" class="experience-details">
                        <p>Stage de 9 semaines dans le service validation...</p>
                        <p>Intégration dans le service validation du site « région parisienne » :</p>
                        <strong>Tâches effectuées :</strong>
                        <ul>
                            <li>Installation d’équipements anti ESD.</li>
                            <li>Mise en place de pratiques 5S dans un laboratoire d’électronique.</li>
                            <li>Démontage de moyens de tests d’équipements.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Worldline -->
            <div class="experience-card">
                <img src="../Images/logos/worldline_logo.png" alt="Worldline" class="experience-logo">
                <div class="experience-info">
                    <h3 class="experience-title">Stage à Worldline (2022)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('experience2')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="experience2" class="experience-details">
                        <p>Stage de 8 semaines dans l’équipe « Computer Room » des sites de Seclin :</p>
                        <strong>Tâches effectuées :</strong>
                        <ul>
                            <li>Installation, maintenance, démontage de serveurs dans un datacenter.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- NXP Semiconductors -->
            <div class="experience-card">
                <img src="../Images/logos/nxp_logo.png" alt="NXP Semiconductors" class="experience-logo">
                <div class="experience-info">
                    <h3 class="experience-title">Stage à NXP Semiconductors (2019)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('experience3')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="experience3" class="experience-details">
                        <p>Stage de 2 semaines dans une entreprise de semi-conducteurs.</p>
                    </div>
                </div>
            </div>

            <!-- Atos Worldline -->
            <div class="experience-card">
                <img src="../Images/logos/atos_logo.png" alt="Atos Worldline" class="experience-logo">
                <div class="experience-info">
                    <h3 class="experience-title">Stage à Atos Worldline (2017)</h3> <!-- Titre ajouté -->
                    <button class="show-info-btn" onclick="toggleInfo('experience4')">
                        <i class="fas fa-plus-circle"></i> <!-- Icône de plus d'informations -->
                    </button>
                    <div id="experience4" class="experience-details">
                        <p>Stage de 1 semaine dans une SSII, découverte des différents métiers de l’informatique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="competences" data-aos="fade-up">
        <h2>Compétences</h2>

        <div class="competences-container">
            <!-- Compétences générales -->
            <div class="competence-category">
                <h3>Compétences Générales</h3>
                <div class="competence-list">
                    <div class="competence-item">
                        <i class="fas fa-users"></i>
                        <p>Travail d’équipe</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-clock"></i>
                        <p>Gestion du temps</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-random"></i>
                        <p>Adaptabilité</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-lightbulb"></i>
                        <p>Esprit d’initiative</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-clipboard-check"></i>
                        <p>Rigueur</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-cogs"></i>
                        <p>Méthode</p>
                    </div>
                </div>
            </div>

            <!-- Séparation des langages de programmation -->
            <div class="competence-category">
                <h3>Langages de Programmation</h3>
                <div class="competence-list">
                    <div class="competence-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/C_Programming_Language.svg/280px-C_Programming_Language.svg.png" alt="C Logo" width="auto" height="30">
                        <p>C</p>
                    </div>
                    <div class="competence-item">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/30/Java_programming_language_logo.svg/1200px-Java_programming_language_logo.svg.png" alt="Java Logo" width="auto" height="30">
                        <p>Java</p>
                    </div>
                    <div class="competence-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python Logo" width="auto" height="30">
                        <p>Python</p>
                    </div>
                    <div class="competence-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP Logo" width="auto" height="30">
                        <p>PHP</p>
                    </div>
                </div>
            </div>



            <!-- Séparation des compétences front-end -->
            <div class="competence-category">
                <h3>Compétences Front-End</h3>
                <div class="competence-list">
                    <div class="competence-item">
                        <i class="fab fa-html5"></i>
                        <p>HTML</p>
                    </div>
                    <div class="competence-item">
                        <i class="fab fa-css3-alt"></i>
                        <p>CSS</p>
                    </div>
                    <div class="competence-item">
                        <i class="fab fa-js-square"></i>
                        <p>Javascript</p>
                    </div>
                </div>
            </div>

            <!-- Séparation des compétences back-end -->
            <div class="competence-category">
                <h3>Compétences Back-End</h3>
                <div class="competence-list">
                    <div class="competence-item">
                        <i class="fas fa-database"></i>
                        <p>SQL</p>
                    </div>
                    <div class="competence-item">
                        <i class="fab fa-linux"></i>
                        <p>Linux / Windows</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-server"></i>
                        <p>Virtualisation</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-network-wired"></i>
                        <p>Infrastructure Réseau</p>
                    </div>
                    <div class="competence-item">
                        <i class="fas fa-cloud"></i>
                        <p>Infrastructure Web</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="langues" data-aos="fade-up">
        <h2>Langues</h2>

        <div class="languages-container">
            <!-- Anglais -->
            <div class="language-card">
                <h3>Anglais</h3>
                <p><strong>Niveau :</strong> Expérimenté (C1)</p>
                <p><strong>TOEIC :</strong> 985/990</p>
                <div class="language-bar">
                    <div class="language-progress" style="width: 98%;"></div>
                </div>
            </div>

            <!-- Allemand -->
            <div class="language-card">
                <h3>Allemand</h3>
                <p><strong>Niveau :</strong> Scolaire</p>
                <div class="language-bar">
                    <div class="language-progress" style="width: 50%;"></div>
                </div>
            </div>
        </div>
    </section>


    

    <section id="activites" data-aos="fade-up">
        <h2>Activités extrascolaires</h2>
        <div class="activities-container">
            <div class="activity-item">
                <i class="fas fa-bullseye"></i>
                <div class="activity-details">
                    <strong>Tir à l’arc en club</strong>
                    <p>Pratique du tir à l'arc en club, développement de la concentration et de la précision.</p>
                </div>
            </div>
            <div class="activity-item">
                <i class="fas fa-music"></i>
                <div class="activity-details">
                    <strong>Chorale au collège</strong>
                    <p>Participation au concert "Prodiges le grand concert" diffusé sur France 2 en 2017.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="download" data-aos="fade-up">
        <h2>Télécharger le CV</h2>

        <!-- Bouton pour télécharger le CV -->
        <a href="../CV_Thomas_Capron.pdf" download>
            <button class="download-btn">
                <i class="fas fa-download"></i> Télécharger en PDF
            </button>
        </a>
    </section>


    

    <footer>
        <p>&copy; 2024 Thomas Capron. Tous droits réservés.</p>
    </footer>

    <script src="../Js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
