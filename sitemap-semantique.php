<?php
$pageTitle = 'Carte des Parcours | Sitemap Sémantique | Flux Info';
$pageDesc = 'Retrouvez les Portes, articles, expériences et principaux parcours de navigation de Flux Info dans une carte sémantique lisible.';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
:root { color-scheme: dark; --ink:#f5efff; --muted:#b9aec9; --line:rgba(212,165,255,.26); --violet:#d4a5ff; --ground:#08000f; --panel:rgba(23,4,38,.76); --green:#9be6b1; }
    * { box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body { margin:0; min-height:100vh; background:radial-gradient(circle at 50% -15%, #371452 0, var(--ground) 47%); color:var(--ink); font-family:Georgia, 'Times New Roman', serif; line-height:1.65; }
    a { color:inherit; }
    .site-map { width:min(1200px, calc(100% - 40px)); margin:0 auto; padding:70px 0 96px; }
    .eyebrow { margin:0 0 16px; color:var(--violet); font:600 .75rem/1.2 Arial, sans-serif; letter-spacing:.22em; text-transform:uppercase; }
    h1 { max-width:800px; margin:0; font-size:clamp(2.5rem, 6vw, 5.5rem); font-weight:300; line-height:1.05; letter-spacing:-.04em; }
    .intro { max-width:720px; margin:28px 0 54px; color:var(--muted); font-size:1.13rem; }
    .jump { display:flex; flex-wrap:wrap; gap:10px; margin-bottom:64px; }
    .jump a { border:1px solid var(--line); border-radius:999px; padding:8px 13px; color:var(--muted); font:600 .72rem/1 Arial,sans-serif; letter-spacing:.08em; text-decoration:none; text-transform:uppercase; transition:background .2s,color .2s,border-color .2s; }
    .jump a:hover,.jump a:focus-visible { border-color:var(--violet); background:rgba(212,165,255,.14); color:#fff; outline:none; }
    section { margin-top:74px; }
    h2 { display:flex; align-items:center; gap:16px; margin:0 0 22px; font-size:clamp(1.45rem,3vw,2.4rem); font-weight:300; }
    h2::after { content:''; flex:1; height:1px; background:linear-gradient(90deg,var(--line),transparent); }
    .section-copy { max-width:760px; margin:0 0 26px; color:var(--muted); }
    .path-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:16px; }
    .path-card { display:flex; flex-direction:column; min-height:240px; padding:25px; border:1px solid var(--line); border-radius:20px; background:var(--panel); text-decoration:none; transition:transform .22s ease,border-color .22s ease,background .22s ease; }
    .path-card:hover,.path-card:focus-visible { transform:translateY(-5px); border-color:var(--violet); background:rgba(49,15,74,.9); outline:none; }
    .path-card__number { margin-bottom:30px; color:var(--violet); font:600 .72rem/1 Arial,sans-serif; letter-spacing:.18em; }
    .path-card h3 { margin:0 0 10px; font-size:1.4rem; font-weight:400; }
    .path-card p { margin:0; color:var(--muted); font-size:.96rem; }
    .path-card small { display:block; margin-top:auto; padding-top:20px; color:#f2d8ff; font:600 .72rem/1.3 Arial,sans-serif; letter-spacing:.08em; text-transform:uppercase; }
    .article-list { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:1px; border:1px solid var(--line); background:var(--line); border-radius:20px; overflow:hidden; }
    .article-list a { display:block; padding:24px 25px; background:#100019; text-decoration:none; transition:background .2s; }
    .article-list a:hover,.article-list a:focus-visible { background:#220633; outline:none; }
    .article-list strong { display:block; margin-bottom:7px; font-size:1.1rem; font-weight:400; }
    .article-list span { display:block; color:var(--muted); font-size:.92rem; }
    .resources { display:grid; grid-template-columns:1.35fr .65fr; gap:22px; }
    .resource-panel { padding:28px; border:1px solid var(--line); border-radius:20px; background:rgba(17,0,27,.75); }
    .resource-panel h3 { margin:0 0 13px; font-size:1.2rem; font-weight:400; }
    .resource-panel p { color:var(--muted); }
    .resource-panel ul { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:10px 20px; margin:22px 0 0; padding:0; list-style:none; }
    .resource-panel li a { color:#f2d8ff; text-decoration-color:rgba(212,165,255,.5); text-underline-offset:4px; }
    .archipel-note { border-color:rgba(155,230,177,.38); background:rgba(21,66,39,.16); }
    .archipel-note h3 { color:var(--green); }
    .archipel-note a { color:#d5ffe0; }
    .footer-note { margin-top:80px; color:#8d809c; font:400 .82rem/1.6 Arial,sans-serif; }
    @media (max-width:800px) { .site-map{width:min(100% - 32px,700px);padding-top:45px}.path-grid{grid-template-columns:1fr}.article-list,.resources{grid-template-columns:1fr}.resource-panel ul{grid-template-columns:1fr}section{margin-top:54px}.path-card{min-height:auto} }
    @media (prefers-reduced-motion:reduce) { html{scroll-behavior:auto}.path-card{transition:none} }
  </style>
</head>
<body>
  <main class="site-map">
    <p class="eyebrow">Flux Info · carte des parcours</p>
    <h1>Relier les Savoirs<br>sans Perdre le Fil</h1>
    <p class="intro">Cette carte sémantique vous aide à choisir un point d’entrée, à comprendre ce que chaque domaine propose et à retrouver les expériences, articles et ressources de l’Archipel.</p>
    <nav class="jump" aria-label="Accès rapides"><a href="carte-des-flux.php">Carte des Flux</a><a href="#domaines">Domaines</a><a href="#articles">Articles</a><a href="#ressources">Ressources</a><a href="index.php">Accueil</a></nav>

    <section id="domaines" aria-labelledby="domaines-title">
      <h2 id="domaines-title">Six Portes, Six Manières d’Explorer</h2>
      <p class="section-copy">Chaque porte introduit un phénomène, puis mène vers un article avec une expérience interactive et un quiz de compréhension.</p>
      <div class="path-grid">
        <a class="path-card" href="ocean.php"><span class="path-card__number">01 · OCÉAN</span><h3>Les Courants et la Mémoire de l’Eau</h3><p>Comprendre les circulations profondes, l’énergie océanique et les seuils qui organisent le climat.</p><small>Explorateur thermohalin · Quiz</small></a>
        <a class="path-card" href="ciel.php"><span class="path-card__number">02 · CIEL</span><h3>Les Souffles de l’Atmosphère</h3><p>Suivre les vents, les rivières aériennes et les relations entre air, eau et vivant.</p><small>Ascension verticale · Quiz</small></a>
        <a class="path-card" href="terre.php"><span class="path-card__number">03 · TERRE</span><h3>Les Migrations et les Sols Vivants</h3><p>Lire les trajectoires animales, les cycles du territoire et les continuités écologiques.</p><small>Cycle Serengeti · Quiz</small></a>
        <a class="path-card" href="cosmos.php"><span class="path-card__number">04 · COSMOS</span><h3>L’Alchimie des Étoiles</h3><p>Explorer l’origine des éléments, la fusion et les récits de notre matière commune.</p><small>Fusion stellaire · Quiz</small></a>
        <a class="path-card" href="humanite.php"><span class="path-card__number">05 · HUMANITÉ</span><h3>La Singularité du Vivant</h3><p>Mettre en relation cerveau, culture, conscience et responsabilités planétaires.</p><small>Résonance · Quiz</small></a>
        <a class="path-card" href="archipel.php"><span class="path-card__number">06 · ARCHIPEL</span><h3>Relier les Mondes et les Vivants</h3><p>Passer de la séparation à une lecture relationnelle des savoirs, des milieux et des choix.</p><small>Tisseur de liens · Quiz</small></a>
      </div>
    </section>

    <section id="articles" aria-labelledby="articles-title">
      <h2 id="articles-title">Articles et Essais</h2>
      <p class="section-copy">Les articles approfondissent les portes avec des sources, des expériences et des définitions accessibles au clic.</p>
      <div class="article-list">
        <a href="article-ocean-courants.php"><strong>Les courants profonds de l’Océan</strong><span>Circulation thermohaline, salinité, albédo et contraintes océaniques.</span></a>
        <a href="article-ciel-vents.php"><strong>Les souffles de l’Atmosphère</strong><span>Aérobiologie, troposphère, rivières atmosphériques et climat.</span></a>
        <a href="article-terre-migrations.php"><strong>La Terre en mouvement</strong><span>Migrations, mycélium, magnétoréception et sols vivants.</span></a>
        <a href="article-cosmos-etoiles.php"><strong>La naissance et la mort des étoiles</strong><span>Fusion, supernovas, expansion et matière cosmique.</span></a>
        <a href="article-humanite-vivant.php"><strong>La singularité du Vivant</strong><span>Entropie, homéostasie, émergence et conscience en recherche.</span></a>
        <a href="article-archipel-conscience.php"><strong>La conscience archipélique</strong><span>Pollinisation, habitats, relations et Tisseur de liens.</span></a>
        <a href="article-dissociation.php"><strong>La Dissociation</strong><span>Un essai transversal sur les seuils, le réel et nos formes d’attention.</span></a>
        <a href="apropos.php"><strong>À propos de Flux Info</strong><span>La mission, l’équipe fondatrice et les continuités de l’Archipel.</span></a>
      </div>
    </section>

    <section id="ressources" aria-labelledby="ressources-title">
      <h2 id="ressources-title">Ressources et Continuités</h2>
      <div class="resources">
        <div class="resource-panel"><h3>Comprendre, Vérifier et Soutenir</h3><p>Retrouvez les repères éditoriaux, les réponses aux questions courantes, les informations de transparence et les moyens de soutenir la continuité du projet.</p><ul><li><a href="faq.php">Foire aux questions</a></li><li><a href="apropos.php">À propos</a></li><li><a href="article-dissociation.php">Essai Dissociation</a></li><li><a href="gardien.php">Devenir Gardien</a></li><li><a href="mentions-legales.php">Mentions légales</a></li><li><a href="cgu.php">Conditions d’utilisation</a></li><li><a href="rgpd.php">Politique RGPD</a></li></ul></div>
        <div class="resource-panel archipel-note"><h3>Un Autre Site de l’Archipel</h3><p><a href="https://www.agibiospheric.net/" target="_blank" rel="noopener noreferrer">AGIBIOSPHERIC</a> rassemble les contraintes physiques, biologiques et systémiques auxquelles les articles renvoient directement.</p><p><a href="https://the-seed.net/" target="_blank" rel="noopener noreferrer">The Seed</a> prolonge la transmission vers les humains présents et les intelligences futures.</p></div>
      </div>
    </section>
    <p class="footer-note">Le sitemap XML est destiné aux moteurs de recherche ; cette page est destinée à la lecture humaine. Dernière mise à jour de la carte: 16 août 2026.</p>
  
<section class="semantic-section"><h2>Méthode Éditoriale</h2><p><a href="politique-editoriale.php">Charte Éditoriale et Niveaux de Preuve</a> : méthode, sources, hypothèses, métaphores et réflexions.</p></section>
</main>
</body>
</html>
