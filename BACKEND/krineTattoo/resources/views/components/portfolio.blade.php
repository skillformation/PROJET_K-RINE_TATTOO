<!-- Section Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            @isset($sectionHeader)
                {!! $sectionHeader !!}
            @else
                <h2 class="section-title text-white">
                    Notre <span class="title-accent">Portfolio</span>
                </h2>
                <div class="title-underline"></div>
            @endisset
        </div>

        <!-- Filtres Portfolio -->
        <div class="portfolio-filters">
            @isset($filters)
                {!! $filters !!}
            @else
                <button class="filter-btn active" data-filter="all"><span>Tous</span></button>
                <button class="filter-btn" data-filter="realistic"><span>Réaliste</span></button>
                <button class="filter-btn" data-filter="minimaliste"><span>Minimaliste</span></button>
                <button class="filter-btn" data-filter="line-art"><span>Line-art</span></button>
                <button class="filter-btn" data-filter="aquarelle"><span>Couleur</span></button>
            @endisset
        </div>

        <!-- Grille Portfolio -->
        <div class="portfolio-grid">
            @isset($portfolioItems)
                {!! $portfolioItems !!}
            @else
                <div class="portfolio-item" data-category="minimaliste">
                    <div class="portfolio-image">
                        <img src="{{ asset('storage/assets/images/portfolio/image1.png') }}" alt="Fleur Minimaliste">
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
                        <img src="{{ asset('storage/assets/images/portfolio/image2.png') }}" alt="Cœurs Brodés">
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
                        <img src="{{ asset('storage/assets/images/portfolio/image3.png') }}" alt="Branche Feuillue">
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
                        <img src="{{ asset('storage/assets/images/portfolio/image4.png') }}" alt="Phénix Couleur">
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
                        <img src="{{ asset('storage/assets/images/portfolio/image5.png') }}" alt="Rose Nuque">
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
                        <img src="{{ asset('storage/assets/images/portfolio/image6.png') }}" alt="Portrait Féminin">
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
            @endisset
        </div>

        <!-- Statistiques Portfolio -->
        <div class="portfolio-stats">
            @isset($stats)
                {!! $stats !!}
            @else
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
            @endisset
        </div>

        <!-- CTA Portfolio -->
        <div class="portfolio-cta">
            @isset($portfolioCta)
                {!! $portfolioCta !!}
            @else
                <p>Prêt à créer votre propre œuvre d'art ? Contactez-moi pour discuter de votre projet.</p>
                <a href="#contact" class="btn btn-primary">Demander une Consultation</a>
            @endisset
        </div>
        
        <!-- Additional Content Slot -->
        {!! $slot ?? '' !!}
    </div>
</section>