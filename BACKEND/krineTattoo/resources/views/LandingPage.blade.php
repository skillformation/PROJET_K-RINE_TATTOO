<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K'RINE TATTOO - Salon de Tatouage en Martinique</title>
    <meta name="description" content="K'RINE TATTOO - Salon de tatouage professionnel en Martinique. Plus de 15 ans d'expérience, styles réaliste et géométrique. Consultation gratuite.">
    
    <!-- Polices Google - Oswald & Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icônes Lucide -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    
<!-- En-tête -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo à Gauche -->
                <div class="logo desktop-logo">
                    <img src="assets/images/logo.png" alt="K'RINE TATTOO" class="logo-img">
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="nav-desktop">
                    <a href="#home" class="nav-link">Accueil</a>
                    <a href="#about" class="nav-link">À Propos</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
                

                <!-- CTA -->
                <div class="header-cta">
                    <a href="#contact" class="btn btn-primary">Prendre RDV</a>
                </div>

                <!-- Bouton Menu Mobile -->
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Ouvrir le menu de navigation" aria-expanded="false" aria-controls="mobileNav">
                    <span class="hamburger-line hamburger-line-1"></span>
                    <span class="hamburger-line hamburger-line-2"></span>
                    <span class="hamburger-line hamburger-line-3"></span>
                </button>
            </div>

            <!-- Navigation Mobile -->
            <div class="nav-mobile" id="mobileNav">
                <div class="nav-mobile-content">
                    <!-- Bouton de fermeture -->
                    <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Fermer le menu">
                        <span class="close-line-1"></span>
                        <span class="close-line-2"></span>
                    </button>
                    <a href="#home" class="nav-link-mobile">Accueil</a>
                    <a href="#about" class="nav-link-mobile">À Propos</a>
                    <a href="#services" class="nav-link-mobile">Services</a>
                    <a href="#portfolio" class="nav-link-mobile">Portfolio</a>
                    <a href="#contact" class="nav-link-mobile">Contact</a>
                    
                    <!-- Portfolio Showcase Mobile -->
                    <div class="mobile-portfolio-showcase">
                        <h4 class="showcase-title">Découvrez mes créations</h4>
                        <div class="showcase-grid">
                            <div class="showcase-item">
                                <div class="showcase-image">
                                    <img src="assets/images/portfolio/image1.png" alt="Fleur Minimaliste">
                                    <div class="showcase-overlay">
                                        <span class="showcase-tag">Minimaliste</span>
                                    </div>
                                </div>
                                <div class="showcase-content">
                                    <h5>Fleur Minimaliste</h5>
                                    <p>Line-art délicat</p>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <div class="showcase-image">
                                    <img src="assets/images/portfolio/image3.png" alt="Rose Line-Art">
                                    <div class="showcase-overlay">
                                        <span class="showcase-tag">Line-Art</span>
                                    </div>
                                </div>
                                <div class="showcase-content">
                                    <h5>Rose Line-Art</h5>
                                    <p>Élégance pure</p>
                                </div>
                            </div>
                        </div>
                        <a href="#portfolio" class="showcase-link nav-link-mobile">Voir tout le portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenu Principal -->
    <main class="main-content">
        <!-- Section Héro -->
        <section id="home" class="hero">
            <video class="hero-video" autoplay muted loop>
                <source src="assets/videos/fume.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="hero-brand">
                            <div class="hero-title">
                                <h1 class="title-main">K'RINE</h1>
                                <h1 class="title-accent">TATTOO</h1>
                            </div>
                        </div>
                        
                        <p class="hero-description">
                            L'art du tatouage redéfini. Découvrez un univers où créativité, expertise et passion se rencontrent pour créer votre œuvre d'art corporelle unique.
                        </p>

                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-primary btn-lg">
                                Prendre Rendez-vous
                                <i data-lucide="arrow-right" class="icon-sm"></i>
                            </a>
                            <a href="#portfolio" class="btn btn-outline btn-lg">
                                Voir Portfolio
                            </a>
                        </div>

                    </div>

                    <!-- Image Mise en Avant -->
                    <div class="hero-image">
                        <div class="image-container">
                            <img src="assets/images/artiste.png" alt="Artiste tatoueur au travail" class="featured-img">
                        </div>
                        <div class="decorative-box decorative-box-1"></div>
                        <div class="decorative-box decorative-box-2"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section À Propos -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <div class="section-header">
                            <h2 class="section-title">
                                À Propos de<br>
                                <span class="title-accent">K'RINE TATTOO</span>
                            </h2>
                            <div class="title-underline"></div>
                        </div>

                        <div class="about-description">
                            <p>
                                Découvrez l'<span class="highlight-word">univers artistique</span> de K'RINE TATTOO, où chaque trait d'aiguille raconte une histoire unique. Depuis plus de cinq années de passion dédiée à l'art corporel, je donne vie à vos <span class="highlight-word">projets les plus personnels</span>, créant des œuvres qui vous accompagneront toute votre vie.
                            </p>
                            
                            <p>
                                Votre vision devient réalité grâce à mon <span class="highlight-word">approche personnalisée</span> et mon <span class="highlight-word">expertise technique</span>. Ensemble, nous créons une <span class="highlight-word">œuvre sur mesure</span> qui reflète parfaitement votre personnalité, vos valeurs et votre esthétique personnelle.
                            </p>

                            <p>
                                Dans mon studio situé au cœur de la Martinique, je vous accueille dans un <span class="highlight-word">environnement professionnel</span> alliant confort et sécurité. Chaque séance se déroule dans le respect des <span class="highlight-word">normes d'hygiène les plus strictes</span>, pour une expérience sereine et mémorable.
                            </p>
                        </div>

                        <!-- Grille des Fonctionnalités -->
                        <div class="features-grid">
                            <div class="feature">
                                <i data-lucide="paintbrush-2" class="feature-icon"></i>
                                <h3 class="feature-title">Créativité Unique</h3>
                                <p class="feature-description">Chaque tatouage est une œuvre d'art personnalisée, créée spécialement pour vous refléter votre personnalité.</p>
                            </div>
                            <div class="feature">
                                <i data-lucide="sparkle" class="feature-icon"></i>
                                <h3 class="feature-title">Passion Authentique</h3>
                                <p class="feature-description">Une passion sincère pour l'art du tatouage qui transparaît dans chaque création et chaque interaction.</p>
                            </div>
                            <div class="feature">
                                <i data-lucide="badge-check" class="feature-icon"></i>
                                <h3 class="feature-title">Hygiène Irréprochable</h3>
                                <p class="feature-description">Respect strict des normes sanitaires les plus élevées pour votre sécurité et votre tranquillité d'esprit.</p>
                            </div>
                            <div class="feature">
                                <i data-lucide="gem" class="feature-icon"></i>
                                <h3 class="feature-title">Excellence Reconnue</h3>
                                <p class="feature-description">Une réputation d'excellence bâtie au fil des années grâce à un savoir-faire exceptionnel et reconnu.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Carte Profil -->
                    <div class="profile-card">
                        <div class="profile-content">
                            <img src="assets/images/logo.png" alt="K'RINE TATTOO Logo" class="profile-logo">
                            <h3 class="profile-name">Karine Gertrude</h3>
                            <p class="profile-title">Artiste Tatoueuse Professionnelle</p>
                            <div class="profile-credentials">
                                <p>• Spécialiste styles Réaliste,Minimaliste & Line-art </p>
                                <p>• Formation Hygiene et Salubrite dans les metiers de l'Esthetique et Tatouage. </p>
                            </div>
                        </div>
                        
                        <div class="profile-quote">
                            <blockquote>
                                Chaque tatouage est une collaboration entre l'artiste et le client pour créer quelque chose d'unique et de personnel.
                            </blockquote>
                            <div class="quote-signature">Karine, Artiste Tatoueur</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Services -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">
                        Nos <span class="title-accent">Services</span>
                    </h2>
                    <div class="title-underline"></div>
                    <p class="section-description">
                        Une gamme complète de services pour donner vie à vos projets artistiques, 
                        de la consultation initiale aux soins post-tatouage.
                    </p>
                </div>

                <!-- Grille Services Principaux -->
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-header">
                            <i data-lucide="pen-tool" class="service-icon"></i>
                            <span class="service-price">À partir de 150€</span>
                        </div>
                        <h3 class="service-title">Tatouage Personnalisé</h3>
                        <p class="service-description">Création sur-mesure de votre tatouage, du croquis initial à la réalisation finale.</p>
                        <ul class="service-features">
                            <li>Consultation gratuite</li>
                            <li>Croquis personnalisé</li>
                            <li>Check-up</li>
                            <li>Cover-up/reprise inclus</li>
                        </ul>
                        <div class="service-duration">
                            <i data-lucide="timer" class="icon-sm"></i>
                            <span>Durée: 2-8h selon complexité</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <i data-lucide="eye" class="service-icon"></i>
                            <span class="service-price">À partir de 100€</span>
                        </div>
                        <h3 class="service-title">Tatouage Réaliste</h3>
                        <p class="service-description">Spécialiste des portraits et paysages d'un réalisme exceptionnel.</p>
                        <ul class="service-features">
                            <li>Reproductions fidèles de photos personnelles</li>
                            <li>Détails précis et travail des ombres et lumières</li>
                        </ul>
                        <div class="service-duration">
                            <i data-lucide="timer" class="icon-sm"></i>
                            <span>Durée: 2-12h selon complexité</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <i data-lucide="compass" class="service-icon"></i>
                            <span class="service-price">À partir de 70€</span>
                        </div>
                        <h3 class="service-title">Tatouage Minimaliste & Line-Art</h3>
                        <p class="service-description">Designs modernes et épurés, alliant précision et esthétique contemporaine.</p>
                        <ul class="service-features">
                            <li>Mandalas</li>
                            <li>Formes géométriques</li>
                            <li>Calligraphie</li>
                        </ul>
                        <div class="service-duration">
                            <i data-lucide="timer" class="icon-sm"></i>
                            <span>Durée: 2-6h selon complexité</span>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <i data-lucide="rotate-cw" class="service-icon"></i>
                            <span class="service-price">À partir de 30€</span>
                        </div>
                        <h3 class="service-title">Retouche</h3>
                        <p class="service-description">Retouche de vos tatouages pour raviver les couleurs et perfectionner les détails.</p>
                        <ul class="service-features">
                            <li>1 mois gratuit (tatouage réalisé par moi)</li>
                            <li>Retouche couleurs et lignes</li>
                            <li>Tarif dégressif selon ancienneté</li>
                            <li>Tatouage externe: à partir de 70€</li>
                        </ul>
                        <div class="service-duration">
                            <i data-lucide="timer" class="icon-sm"></i>
                            <span>Durée: 1-2h selon complexité</span>
                        </div>
                    </div>

                </div>

                <!-- Services Additionnels -->
                <div class="additional-services">
                    <h3 class="additional-title">Services Complémentaires</h3>
                    <div class="additional-grid">
                        <div class="additional-service">
                            <div class="additional-service-header">
                                <i data-lucide="message-circle" class="additional-icon"></i>
                            </div>
                            <h4>Consultation & Devis</h4>
                            <p>Échange personnalisé pour définir votre projet</p>
                            <div class="additional-price price-free">
                                <i data-lucide="gift" class="icon-sm"></i>
                                <span>Gratuit</span>
                            </div>
                        </div>
                        <div class="additional-service">
                            <div class="additional-service-header">
                                <i data-lucide="palette" class="additional-icon"></i>
                            </div>
                            <h4>Croquis Personnalisé</h4>
                            <p>Création d'un design unique selon vos souhaits</p>
                            <div class="additional-price price-paid">
                                <i data-lucide="palette" class="icon-sm"></i>
                                <span>50€</span>
                            </div>
                        </div>
                        <div class="additional-service">
                            <div class="additional-service-header">
                                <i data-lucide="heart" class="additional-icon"></i>
                            </div>
                            <h4>Suivi Post-Tatouage</h4>
                            <p>Accompagnement personnalisé pendant la cicatrisation</p>
                            <div class="additional-price price-free">
                                <i data-lucide="heart-handshake" class="icon-sm"></i>
                                <span>Gratuit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Services -->
                <div class="services-cta">
                    <p>Chaque projet est unique. N'hésitez pas à me contacter pour un devis personnalisé.</p>
                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Demander un Devis</a>
                        <a href="#portfolio" class="btn btn-outline">Voir nos Réalisations</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Portfolio -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title text-white">
                        Notre <span class="title-accent">Portfolio</span>
                    </h2>
                    <div class="title-underline"></div>
                </div>

                <!-- 
                ` -->
                <div class="portfolio-filters">
                    <button class="filter-btn active" data-filter="all"><span>Tous</span></button>
                    <button class="filter-btn" data-filter="realistic"><span>Réaliste</span></button>
                    <button class="filter-btn" data-filter="minimaliste"><span>Minimaliste</span></button>
                    <button class="filter-btn" data-filter="line-art"><span>Line-art</span></button>
                    <button class="filter-btn" data-filter="aquarelle"><span>Couleur</span></button>
                </div>

                <!-- Grille Portfolio -->
                <div class="portfolio-grid">
                    <div class="portfolio-item" data-category="minimaliste">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image1.png" alt="Fleur Minimaliste">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Minimaliste</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Fleur Minimaliste</h3>
                            <p>Tatouage floral line-art délicat</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 3 heures</div>
                                <div><strong>Zone:</strong> Dos</div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-category="minimaliste">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image2.png" alt="Cœurs Brodés">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Minimaliste</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Cœurs Brodés</h3>
                            <p>Tatouages assortis style broderie vintage</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 2 heures</div>
                                <div><strong>Zone:</strong> Avant-bras</div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-category="line-art">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image3.png" alt="Branche Feuillue">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Line-art</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Branche Feuillue</h3>
                            <p>Line-art botanique épuré et délicat</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 4 heures</div>
                                <div><strong>Zone:</strong> Avant-bras</div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-category="aquarelle">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image4.png" alt="Phénix Couleur">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Couleur</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Phénix Couleur</h3>
                            <p>Tatouage coloré avec dégradés vibrants</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 8 heures</div>
                                <div><strong>Zone:</strong> Cuisse</div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-category="line-art">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image5.png" alt="Rose Nuque">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Line-art</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Rose Nuque</h3>
                            <p>Tatouage délicat line-art rouge</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 2 heures</div>
                                <div><strong>Zone:</strong> Nuque</div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-category="realistic">
                        <div class="portfolio-image">
                            <img src="assets/images/portfolio/image6.png" alt="Portrait Féminin">
                            <div class="portfolio-overlay">
                                <i data-lucide="zoom-in" class="view-icon"></i>
                            </div>
                            <span class="portfolio-tag">Réaliste</span>
                        </div>
                        <div class="portfolio-content">
                            <h3>Portrait Féminin</h3>
                            <p>Portrait réaliste avec éléments géométriques</p>
                            <div class="portfolio-details">
                                <div><strong>Durée:</strong> 6 heures</div>
                                <div><strong>Zone:</strong> Bras</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistiques Portfolio -->
                <div class="portfolio-stats">
                    <div class="stat">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Tatouages réalisés</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Années d'expérience</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Clients satisfaits</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5j/7</div>
                        <div class="stat-label">Suivi post-tatouage</div>
                    </div>
                </div>

                <!-- CTA Portfolio -->
                <div class="portfolio-cta">
                    <p>Prêt à créer votre propre œuvre d'art ? Contactez-moi pour discuter de votre projet.</p>
                    <a href="#contact" class="btn btn-primary">Demander une Consultation</a>
                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">
                        Nous <span class="title-accent">Contacter</span>
                    </h2>
                    <div class="title-underline"></div>
                    <p class="section-description">
                        Prêt à donner vie à votre projet ? Contactez-moi pour une consultation personnalisée 
                        et découvrons ensemble comment créer votre tatouage unique.
                    </p>
                </div>

                <div class="contact-content">
                    <!-- Formulaire Contact -->
                    <div class="contact-form-container">
                        <div class="contact-form-card">
                            <h3 class="form-title">
                                <i data-lucide="calendar" class="icon-md"></i>
                                Demande de Rendez-vous
                            </h3>
                            <form class="contact-form" id="contactForm">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Prénom *</label>
                                        <input type="text" placeholder="Votre prénom" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nom *</label>
                                        <input type="text" placeholder="Votre nom" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" placeholder="votre@email.fr" required>
                                </div>

                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="tel" placeholder="+596 696 00 44 21">
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Style souhaité</label>
                                        <select>
                                            <option>Sélectionner un style</option>
                                            <option>Réaliste</option>
                                            <option>Géométrique</option>
                                            <option>Traditionnel</option>
                                            <option>Cover-up</option>
                                            <option>Autre</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Zone du corps</label>
                                        <select>
                                            <option>Sélectionner une zone</option>
                                            <option>Bras</option>
                                            <option>Avant-bras</option>
                                            <option>Épaule</option>
                                            <option>Dos</option>
                                            <option>Poitrine</option>
                                            <option>Jambe</option>
                                            <option>Autre</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Taille du tatouage</label>
                                    <select>
                                        <option>Sélectionner une taille</option>
                                        <option>Petit (moins de 5 cm)</option>
                                        <option>Moyen (5-10 cm)</option>
                                        <option>Grand (10-20 cm)</option>
                                        <option>Très grand (plus de 20 cm)</option>
                                        <option>Pièce sur mesure</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description de votre projet *</label>
                                    <textarea placeholder="Décrivez-moi votre idée de tatouage, vos inspirations, la taille souhaitée..." required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Images de référence (optionnel)</label>
                                    <div class="file-upload-container">
                                        <input type="file" id="fileUpload" name="files" multiple accept="image/*,.pdf" class="file-input">
                                        <label for="fileUpload" class="file-upload-label">
                                            <i data-lucide="upload" class="icon-md"></i>
                                            <span>Cliquez pour ajouter des images</span>
                                            <small>PNG, JPG, PDF - Max 5MB par fichier</small>
                                        </label>
                                        <div class="file-list" id="fileList"></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-full">
                                    Envoyer ma Demande
                                </button>

                                <p class="form-note">
                                    Je vous répondrai dans les 24h pour organiser notre première consultation.
                                </p>
                            </form>
                        </div>
                    </div>

                    <!-- Info Contact & Horaires -->
                    <div class="contact-info-container">
                        <!-- Informations Contact -->
                        <div class="contact-info-card">
                            <h3>Informations de Contact</h3>
                            <div class="contact-details">
                                <div class="contact-detail">
                                    <i data-lucide="map-pin" class="icon-md"></i>
                                    <div>
                                        <h4>Adresse</h4>
                                        <p>K'rine Tattoo<br>2 Rue des Barrières<br>97232 Le Lamentin, Martinique</p>
                                    </div>
                                </div>
                                <div class="contact-detail">
                                    <i data-lucide="smartphone" class="icon-md"></i>
                                    <div>
                                        <h4>Téléphone</h4>
                                        <a href="tel:+59669600442">+596 696 00 44 21</a>
                                    </div>
                                </div>
                                <div class="contact-detail">
                                    <i data-lucide="at-sign" class="icon-md"></i>
                                    <div>
                                        <h4>Email</h4>
                                        <a href="mailto:krinetattoo@gmail.com">krinetattoo@gmail.com</a>
                                    </div>
                                </div>
                                <div class="contact-detail">
                                    <i data-lucide="camera" class="icon-md"></i>
                                    <div>
                                        <h4>Instagram</h4>
                                        <a href="#" target="_blank">@krine_tattoo</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Horaires d'Ouverture -->
                        <div class="hours-card">
                            <h3>
                                <i data-lucide="timer" class="icon-md"></i>
                                Horaires d'Ouverture
                            </h3>
                            <div class="hours-list">
                                <div class="hour-item">
                                    <span>Lundi</span>
                                    <span class="closed">Fermé</span>
                                </div>
                                <div class="hour-item">
                                    <span>Mardi</span>
                                    <span>10h - 17h</span>
                                </div>
                                <div class="hour-item">
                                    <span>Mercredi</span>
                                    <span>10h - 17h</span>
                                </div>
                                <div class="hour-item">
                                    <span>Jeudi</span>
                                    <span>10h - 17h</span>
                                </div>
                                <div class="hour-item">
                                    <span>Vendredi</span>
                                    <span>10h - 17h</span>
                                </div>
                                <div class="hour-item">
                                    <span>Samedi</span>
                                    <span>10h - 17h</span>
                                </div>
                                <div class="hour-item">
                                    <span>Dimanche</span>
                                    <span class="closed">Fermé</span>
                                </div>
                            </div>
                            
                            <div class="hours-note">
                                <p><strong>Tatouages uniquement sur rendez-vous.</strong><br>
                                N'hésitez pas à me contacter pour organiser notre rencontre.</p>
                            </div>
                        </div>

                        <!-- Contact Urgence -->
                        <div class="emergency-contact">
                            <h3>Suivi Post-Tatouage</h3>
                            <p>Besoin de conseils après votre tatouage ?<br>
                            Je suis disponible 5j/7 pour le suivi de cicatrisation.</p>
                        </div>
                    </div>
                </div>

                <!-- Carte Google Maps -->
                <div class="map-container">
                    <h3 class="map-title">
                        <i data-lucide="map-pin" class="icon-md"></i>
                        Localisation du Studio
                    </h3>
                    <div class="map-wrapper">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.1234567890!2d-61.003456!3d14.586789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c14c1234567890%3A0x1234567890abcdef!2s2%20Rue%20des%20Barri%C3%A8res%2C%2097232%20Le%20Lamentin%2C%20Martinique!5e0!3m2!1sfr!2sfr!4v1234567890123!5m2!1sfr!2sfr"
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="map-description">
                        📍 Studio facilement accessible au cœur du Lamentin<br>
                        🚗 Parking disponible à proximité
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Pied de Page -->
    <footer class="footer">
        <div class="container">
            <!-- Contenu Principal Pied de Page -->
            <div class="footer-content">
                <!-- Colonne Marque -->
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="assets/images/logo.png" alt="K'RINE TATTOO">
                        <div>
                            <h3>K'RINE</h3>
                            <p>TATTOO</p>
                        </div>
                    </div>
                    
                    <p class="footer-description">
                        L'art du tatouage redéfini depuis plus de 5 ans. 
                        Chaque création est unique et personnalisée selon vos souhaits.
                    </p>

                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i data-lucide="camera"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i data-lucide="users"></i>
                        </a>
                    </div>
                </div>

                <!-- Liens Rapides -->
                <div class="footer-links">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#about">À Propos</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-links">
                    <h4>Nos Services</h4>
                    <ul>
                        <li>Tatouage Personnalisé</li>
                        <li>Tatouage Réaliste</li>
                        <li>Tatouage Minimaliste & Line-Art</li>
                        <li>Retouche</li>
                        <li>Consultation Gratuite</li>
                    </ul>
                </div>

                <!-- Info Contact -->
                <div class="footer-contact">
                    <h4>Contact</h4>
                    <div class="footer-contact-item">
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <div>
                            <p>2 Rue des Barrières</p>
                            <p>97232 Le Lamentin, Martinique</p>
                        </div>
                    </div>
                    
                    <div class="footer-contact-item">
                        <i data-lucide="smartphone" class="icon-sm"></i>
                        <a href="tel:+59669600442">+596 696 00 44 21</a>
                    </div>
                    
                    <div class="footer-contact-item">
                        <i data-lucide="at-sign" class="icon-sm"></i>
                        <a href="mailto:krinetattoo@gmail.com">krinetattoo@gmail.com</a>
                    </div>

                    <div class="footer-hours">
                        <p><strong>Horaires:</strong><br>
                        Mar-Sam: 10h-17h<br>
                        Sur RDV uniquement</p>
                    </div>
                </div>
            </div>

            <!-- Barre Inférieure -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>© 2025 K'RINE TATTOO. Tous droits réservés.</p>
                    
                    <div class="footer-made-with">
                        <span>Créé par</span>
                        <span>BLACKAM</span>
                    </div>
                </div>

                <div class="footer-legal">
                    <a href="#">Mentions Légales</a>
                    <a href="#">Politique de Confidentialité</a>
                    <a href="#">Conditions d'Utilisation</a>
                    <a href="#">Soins Post-Tatouage</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>