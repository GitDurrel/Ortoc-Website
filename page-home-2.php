<?php
/**
 * Template Name: Page d'accueil
 * Description: Page d'accueil de l'Office Régional du Tourisme de l'Ouest Cameroun
 */

get_header();
?>  
    <style>
        :root {
            --primary-color: #0c4178;
            --secondary-color: #FFD700;
            --dark-color: #263238;
            --light-color: #f5f5f5;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        /* Section Header avec Parallax */
        .parallax-header {
            position: relative;
            height: 150vh;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Mont-Mbapit-bon-AI-scaled.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        
        /*.parallax-overlay {*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(0, 0, 0, 0.3);*/
        /*}*/
        
        .logo-animation {
            position: absolute;
            bottom: 50px;
            left: 100px;
            width: 400px;
            height: 400px;
            z-index: 10;
            animation: pulse 2s infinite;
            object-fit: cover;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Section Description */
        .description-section {
            padding: 80px 0;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
    
        
        .description-section .container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            font-size: 61px;
            font-weight: 400;
            font-family: Fredoka;
            text-transform: normal;
            margin-bottom: 30px; /* Réduit de 50px à 30px */
            color: black;
            position: relative;
            line-height: 61px;
        }
        .title_bold{
            position: relative;
            display: inline-block;
            font-weight: 700 !important;
        }

        .title_bold:after{
            content: "";
            height: 28px;
            background: linear-gradient(90deg, #0c4178 0%, #0c5a9d 100%);
            display: block;
            margin: -20px -20px 0;
        }

        .text_outline_white {
            text-shadow: 
                -1px -1px 0 #fff,
                 1px -1px 0 #fff,
                -1px  1px 0 #fff,
                 1px  1px 0 #fff;
        }
        
        .description-column {
            flex: 1;
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            height: auto;
            overflow: visible;
            word-wrap: break-word;
            overflow-wrap: break-word;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 150%;
            color: #000000;
        }

        /* Barre décorative */
        .description-column::after {
            content: '';
            position: absolute;
            top: 0;
            right: -8px;
            width: 8px;
            height: 100%;
            background: #0c4178;
            border-radius: 4px;
        }

        /* Ajustement du conteneur pour la marge */
        .col-md-6.mb-4.d-flex {
            padding-right: 20px;
        }

        .description-column h3 {
            margin-bottom: 20px;
            color: #0c4178;
            font-size: 1.5rem;
            font-family: 'Fredoka', sans-serif;
            font-weight: 400;
        }

        .description-column .lead {
            font-size: 1.2rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .description-column p {
            margin-bottom: 10px;
            text-align: justify;
            line-height: 1.5;
            font-size: 0.95rem;
        }
        
        /* Section Richesses */
        .richesses-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
        }
        
        /*.richesses-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .richesse-card {
            background-color: white;
            border-radius: 40px;
            overflow: hidden;
            position: relative;
            border: 2px solid var(--primary-color);
            margin-bottom: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .richesse-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }
        
        .richesse-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .richesse-content {
            padding: 20px;
            text-align: center;
        }
        
        .richesse-content h4 {
            font-size: 1.5rem;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .richesse-link {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            color: var(--primary-color);
            text-align: center;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .richesse-link:hover {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            transform: scale(1.1);
        }
        
        /* Video Section */
        .video-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
        
        /*.video-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .video-section .container {
            position: relative;
            z-index: 2;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border: 5px solid var(--primary-color);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        /* Team Section */
        .team-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
        
        /*.team-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .team-section .container {
            position: relative;
            z-index: 2;
        }
        
        .team-card {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            background-color: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .team-card:hover {
            transform: translateY(-10px);
        }
        
        .team-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--primary-color);
            margin: 0 auto 20px;
        }
        
        .team-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .team-position {
            font-size: 1rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        .view-all-container {
            text-align: center;
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            background-color: #FBBC04;
            color: #000;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(251, 188, 4, 0.3);
            margin: 0 auto;
        }

        .view-all-btn:hover {
            background-color: #f0b500;
            transform: translateY(-2px);
        }

        .view-all-btn svg {
            transition: transform 0.3s ease;
        }

        .view-all-btn:hover svg {
            transform: translateX(5px);
        }
        
        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            position: relative;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-bleue-scaled.jpg');
            background-attachment: fixed;
            opacity: 0.8;
        }
        
        .contact-content {
            position: relative;
            z-index: 2;
        }

        .contact-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: white;
            line-height: 1.2;
        }

        .contact-title .small_title {
            font-weight: 300;
            display: block;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .contact-title .bold_title {
            font-weight: 900;
            font-size: 3.5rem;
            display: block;
        }
        
        /* Style amélioré des cartes de contact */
        .contact-info {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            min-height: 100px;
            width: 100%;
        }

        .contact-icon {
            min-width: 45px;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-info-content {
            flex: 1;
            min-width: 0; /* Permet la troncature du texte */
            overflow: hidden; /* Cache le débordement */
        }

        .contact-info h4 {
            color: white;
            margin: 0 0 5px 0;
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .contact-text {
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            font-size: 0.9rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        /* Ajustement du conteneur des cartes */
        .contact-cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .contact-card-wrapper {
            flex: 1;
            min-width: 200px; /* Largeur minimale pour éviter des cartes trop étroites */
        }

        .contact-lead {
            color: white;
            background-color: rgba(12, 65, 120, 0.7);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .section-title {
                font-size: 45px;
                line-height: 50px;
            }
            
            .logo-animation {
                width: 50vw;      /* 40% de la largeur de l'écran */
                height: 50vw;     /* carré, donc même valeur */
                max-width: 360px; /* limite max pour éviter trop grand sur tablette */
                max-height: 360px;
                min-width: 250px; /* limite min pour éviter trop petit */
                min-height: 250px;
                bottom: 20px;
                left: 20px;
            }
            
            .contact-title {
                font-size: 2rem;
            }
            
            .contact-subtitle {
                font-size: 1.5rem;
            }
            
            .contact-info {
                min-height: 80px;
            }
            
            .contact-icon {
                min-width: 35px;
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }

        /* Formulaire de contact */
        .contact-form {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 40px;
        }

        .contact-form h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-family: Fredoka;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9) !important;
            border: 1px solid #ddd !important;
            border-radius: 25px !important;
            padding: 12px 15px !important;
            font-size: 1rem !important;
            transition: all 0.3s ease !important;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(12, 65, 120, 0.25);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .contact-submit-btn {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: block;
            width: auto;
            margin: 0 auto;
        }

        .contact-submit-btn:hover {
            background-color: #0c5a9d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(12, 65, 120, 0.3);
        }

        /* Styles pour le titre principal */
        .title_width_gradient {
            position: relative;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            z-index: 2;
        }

        .title_width_gradient .title_h2 {
            font-style: normal;
            font-weight: 400;
            font-size: 61px;
            line-height: 100%;
            text-align: center;
            color: white;
            font-family: 'Fredoka', sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .title_width_gradient .title_bold {
            position: relative;
            display: inline-block;
            font-weight: 700 !important;
        }

        .title_width_gradient .title_bold:after {
            content: "";
            height: 28px;
            background: linear-gradient(90deg, #0c4178 0%, #0c5a9d 100%);
            display: block;
            margin: -20px -20px 0;
        }

        .cta-catalogue-btn {
            background: #FFD700;
            color: #0c4178;
            font-weight: 700;
            font-size: 1.25rem;
            padding: 18px 38px;
            border-radius: 32px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(12,65,120,0.10);
            display: inline-block;
            margin-top: 10px;
            transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
            animation: ctaPulse 1.5s infinite;
            letter-spacing: 0.5px;
            border: none;
        }
        .cta-catalogue-btn:hover {
            background: #ffe066;
            color: #0c4178;
            transform: scale(1.06);
            box-shadow: 0 8px 32px rgba(12,65,120,0.13);
        }
        @keyframes ctaPulse {
            0% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
            70% { box-shadow: 0 0 0 16px rgba(255,215,0,0); }
            100% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
        }

        .newsletter-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
        }

        @keyframes defilePartenaires {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .partenaires-marquee-section:hover .partenaires-marquee {
            animation-play-state: paused;
        }
        .partenaires-marquee-section{
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
            border: none !important;
        }
        .partenaires-marquee-section .container {
            max-width: 1400px;
            margin: 0 auto;
        }
        .partenaires-marquee-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Header avec Parallax -->
    <header class="parallax-header">
        <div class="title_width_gradient">
            <h2 class="title_h2">
                Voyage sur les<br>
                <span class="title_bold">Hautes terres de l'Ouest Cameroun</span>
            </h2>
        </div>
        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Animation-logo-ORTOC-Bon.gif " alt="Logo Office Régional du Tourisme" class="logo-animation">
    </header>

    <!-- Section Description -->
    <section class="description-section" id="about">
        <div class="container">
            <div>
                <h2 class="section-title">Destination <br> <span class="title_bold text_outline_white">Ouest Cameroun</span></h2>
            </div>
            <div class="row align-items-stretch">
                <!-- Version française -->
                <div class="col-md-6 mb-4 d-flex">
                    <div class="description-column">
                        <h3 class="mb-4">À LA DÉCOUVERTE DE LA RÉGION DE L'OUEST DU CAMEROUN</h3>
                        <p class="lead mb-4">LE TRÉSOR CACHÉ À EXPLORER</p>
                        <p>La région de l'Ouest, située au Cameroun est un véritable joyau à découvrir. C'est une terre d'histoire, de culture et de beauté naturelle qui fascine tous ceux qui s'y aventurent. Ses chefferies traditionnelles majestueuses, où se trouvent de véritables gardiens de rites ancestraux, ainsi que ses musées captivants, plongent les visiteurs dans un patrimoine riche, préservant toute son originalité.</p>
                        <p>L'Ouest Cameroun est aussi un tableau naturel d'une rare splendeur. Ses paysages vallonnés offrent des panoramas à couper le souffle, et son climat doux est une invitation permanente à la détente. Les amateurs de nature seront séduits par cette harmonie entre montagnes verdoyantes, plaines fertiles et cours d'eau vivifiants, qui en font une terre propice à l'évasion et à la sérénité.</p>
                        <p>À cela s'ajoute une mosaïque culturelle d'une richesse inégalée. Les cinq grands groupes ethniques de la région (Bamiléké, Bamoun, Mbo, Mbororo et Tikar) se distinguent par leurs langues, traditions, danses et festivités vibrantes. Cette diversité culturelle est une célébration permanente de l'identité locale, où chaque village, chaque fête vous invite à partager l'âme de ses habitants.</p>
                        <p>Et que dire du savoir-faire artisanal de l'Ouest Cameroun, véritable marque de prestige. De la sculpture sur bois à la poterie en passant par les textiles avec son précieux tissus Ndop qui agrémente tous styles de couture et bijoux traditionnels, la créativité des artisans locaux sublime chaque objet. Ces chefs-d'œuvre, fruits d'un héritage transmis de génération en génération font de la région des Grassfields une terre infinie de richesse culturelle.</p>
                        <p>La région de l'Ouest est, sans aucun doute, the place to be pour tout voyageur curieux et passionné en quête d'authenticité et de découvertes inoubliables. Venez explorer et laissez-vous envoûter par cet écrin d'histoire, de culture et de nature, qui fera de votre séjour une aventure mémorable.</p>
                    </div>
                </div>
                <!-- Version anglaise -->
                <div class="col-md-6 mb-4 d-flex">
                    <div class="description-column">
                        <h3 class="mb-4">DISCOVERING THE WEST REGION OF CAMEROON</h3>
                        <p class="lead mb-4">THE HIDDEN TREASURE TO EXPLORE</p>
                        <p>The West Region, located in Cameroon, is a true gem waiting to be discovered. It is a land of history, culture, and natural beauty that fascinates all who venture there. Its majestic traditional chiefdoms, where true guardians of ancestral rites reside, along with its captivating museums, immerse visitors in a rich heritage, preserving all its originality.</p>
                        <p>West Cameroon is also a natural canvas of rare splendor. Its rolling landscapes offer breathtaking panoramas, and its mild climate is a permanent invitation to relaxation. Nature enthusiasts will be seduced by this harmony between verdant mountains, fertile plains, and invigorating waterways, making it a land conducive to escape and serenity.</p>
                        <p>Added to this is an unparalleled cultural mosaic. The five major ethnic groups of the region (Bamiléké, Bamoun, Mbo, Mbororo, and Tikar) are distinguished by their languages, traditions, dances, and vibrant festivities. This cultural diversity is a permanent celebration of local identity, where each village and every festival invites you to share in the soul of its inhabitants.</p>
                        <p>And what about the artisanal expertise of West Cameroon, a true mark of prestige. From woodcarving to pottery, including textiles with its precious Ndop fabric that enhances all styles of clothing and traditional jewelry, local artisans' creativity sublimes each object. These masterpieces, fruits of a heritage passed down from generation to generation, make the Grassfields region an infinite land of cultural richness.</p>
                        <p>The West Region is, without a doubt, the place to be for any curious and passionate traveler in search of authenticity and unforgettable discoveries. Come explore and let yourself be enchanted by this treasure trove of history, culture, and nature, which will make your stay a memorable adventure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Section Vidéo -->
    <section class="video-section" id="video">
        <div class="container">
            <div>
                <h2 class="section-title">L'ouest <br> <span class="title_bold text_outline_white">en vidéo</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/lwJ7AUpsJsY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Richesses -->
    <section class="richesses-section" id="discover">
        <div class="container">
            <div class="richesses-title">
                <h2 class="section-title">Decouvrez <br> <span class="title_bold text_outline_white">nos richesses</span></h2>
            </div>
            <div class="row">
                <!-- Chefferie et Musées -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-05-07-a-08.21.54_d9620f1c.jpg" alt="Chefferie et Musées" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Chefferie et Musées</h4>
                            <a href="https://tourismeouestcameroun.com/chefferies-et-musees/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Festivals -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/festival-du-ngou-ngoung.jpg" alt="Festivals" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Festivals</h4>
                            <a href="https://tourismeouestcameroun.com/festivals/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Natures et paysages -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Chuttes-Ekom-Kam2-scaled.jpg" alt="Natures et paysages" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Natures et paysages</h4>
                            <a href="https://tourismeouestcameroun.com/natures-et-paysages/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Artisanat -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/sculpteur-tato-Dschang-scaled.jpg" alt="Artisanat" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Artisanat</h4>
                            <a href="https://tourismeouestcameroun.com/artisanat/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Gastronomie -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Ndole.png" alt="Gastronomie" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Spécialités culinaires</h4>
                            <a href="https://tourismeouestcameroun.com/specialites-culinaires/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Agenda culturel -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/IMG_20210522_164736_271-scaled.jpg" alt="Festivals" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Agenda culturel</h4>
                            <a href="https://tourismeouestcameroun.com/agenda-culturel/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section Notre Équipe -->
    <section class="team-section" id="team">
        <div class="container">
            <div>
                <h2 class="section-title">Notre <br> <span class="title_bold text_outline_white">équipe</span></h2>
            </div>
            <div class="row">
                <!-- Membre d'équipe 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/DIOR.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Bernard ZEUTIBEU</h4>
                        <p class="team-position">Directeur</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/RAF.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Abdelazize ISMAILA</h4>
                        <p class="team-position">Responsable Administratif et Financier</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Serge.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Serge TIOGON</h4>
                        <p class="team-position">Chargé de l'animation du secteur prive touristique </p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/IMG_6541-scaled.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Armand FONKOU</h4>
                        <p class="team-position">Chargé de la promotion numérique</p>
                    </div>
                </div>
                <!-- Membre d'équipe 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Andre.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name"> André Pascal NGOUBENE</h4>
                        <p class="team-position">Chargé des projets</p>
                    </div>
                </div>
                <!-- Membre d'équipe 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Sylvie.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Sylvie KAMENI</h4>
                        <p class="team-position">Chargée des acceuils et des ventes </p>
                    </div>
                </div>
                <!-- Membre d'équipe 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Mme-Viviane.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Viviane MAFANG</h4>
                        <p class="team-position">Agent d'accueil</p>
                    </div>
                </div>
                <!-- Membre d'équipe 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Helene.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Hélène NGO YETNA</h4>
                        <p class="team-position">Agent d'entretien</p>
                    </div>
                </div>
            </div>
            <div class="view-all-container">
                <a href="<?php echo get_post_type_archive_link('artisanat'); ?>" class="view-all-btn">
                    Voir toute l'equipe
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Baniere Catalogue Tourisme -->
    <section class="newsletter-section">
      <div class="container" style="text-align: center;">
        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Plan-de-travail-1.jpg" alt="Catalogue Tourisme" style="max-width: 1000px; width: 100%; height: auto; display: inline-block; border-radius: 18px; box-shadow: 0 8px 32px rgba(12,65,120,0.13);">
        <br><br>
        <a href="mailto:ot.ouestcameroun@yahoo.com?subject=Commande%20Catalogue%20Tourisme%20Ouest%20Cameroun&body=Bonjour%2C%0D%0AJe souhaite commander le catalogue Tourisme Ouest Cameroun.%0D%0AMerci de me recontacter pour finaliser la commande." class="cta-catalogue-btn">Commander le vôtre maintenant</a>
      </div>
    </section>

    <!-- PARTENAIRES défilants -->
    <section class="partenaires-marquee-section">
      <div class="container">
        <h2 class="section-title">Nos <br><span class="title_bold text_outline_white">partenaires</span></h2>
        <div class="partenaires-marquee-container" style="overflow: hidden; white-space: nowrap;">
          <div class="partenaires-marquee" style="display: inline-block; animation: defilePartenaires 12s linear infinite;">
            <!-- Logos partenaires (dupliqués pour boucle infinie) -->
            <a href="https://www.minmidt.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Logo_Minmidt_Cameroun.png" alt="MINMIDT" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.camair-co.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.camair-co.cm/wp-content/uploads/2021/09/logo-camairco.png" alt="Camair-Co" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.cr-o-cameroun.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://cr-o-cameroun.cm/wp-content/uploads/2022/09/logo-cro.png" alt="Conseil Régional Ouest" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.minjec.gov.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.minjec.gov.cm/images/logo_minjec.png" alt="MINJEC" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.camtel.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.camtel.cm/wp-content/uploads/2021/09/logo-camtel.png" alt="Camtel" style="height: 48px; vertical-align: middle;"></a>
            <!-- Dupliquer pour effet infini -->
            <a href="https://www.minmidt.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Logo_Minmidt_Cameroun.png" alt="MINMIDT" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.camair-co.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.camair-co.cm/wp-content/uploads/2021/09/logo-camairco.png" alt="Camair-Co" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.cr-o-cameroun.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://cr-o-cameroun.cm/wp-content/uploads/2022/09/logo-cro.png" alt="Conseil Régional Ouest" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.minjec.gov.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.minjec.gov.cm/images/logo_minjec.png" alt="MINJEC" style="height: 48px; vertical-align: middle;"></a>
            <a href="https://www.camtel.cm/" target="_blank" style="display:inline-block; margin: 0 40px;"><img src="https://www.camtel.cm/wp-content/uploads/2021/09/logo-camtel.png" alt="Camtel" style="height: 48px; vertical-align: middle;"></a>
            <!-- Ajoute d'autres partenaires ici -->
          </div>
        </div>
      </div>
    </section>

    <!-- Section Contact/Visitez-nous -->
    <section class="contact-section" id="contact">
        <div class="container contact-content">
            <h2 class="contact-title">
                <span class="small_title">Visitez nous quand</span>
                <span class="bold_title">vous voulez</span>
            </h2>
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <p class="lead contact-lead">L'Office Régional du Tourisme de l'Ouest Cameroun est situé à Bafoussam près du stade omnisport Tocket entre le carrefour saint Thomas et le carrefour Socada.</p>
                    <div class="contact-cards-row">
                        <!-- Retrouvez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Retrouvez-nous</h4>
                                <p class="contact-text">Bafoussam, Cameroun</p>
                            </div>
                        </div>
                        
                        <!-- Appelez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4>Appelez-nous</h4>
                                <p class="contact-text"><a href="tel:+237697687441">Appelez-nous maintenant</a></p>
                            </div>
                        </div>
                        
                        <!-- Écrivez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Écrivez-nous</h4>
                                <p class="contact-text">ot.ouestcameroun@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <h2>Contactez-nous</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre Nom">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Entrez votre Prénom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Entrez votre Email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="telephone">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" placeholder="Entrez votre Téléphone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="En quoi pouvons nous aider?"></textarea>
                            </div>
                            <button type="button" class="contact-submit-btn" onclick="sendEmail()">Envoyer <i class="fas fa-arrow-right ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Animation des liens de navigation (smooth scroll)
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top,
                },
                500,
                'linear'
            );
        });

        function sendEmail() {
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            var email = document.getElementById('email').value;
            var telephone = document.getElementById('telephone').value;
            var message = document.getElementById('message').value;

            var subject = "Demande d'information";
            var body = `Nom: ${nom}\nPrénom: ${prenom}\nEmail: ${email}\nTéléphone: ${telephone}\n\nMessage:\n${message}`;

            var mailtoLink = `mailto:ot.ouestcameroun@yahoo.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            window.location.href = mailtoLink;
        }
    </script>
<?php
get_footer();
?>