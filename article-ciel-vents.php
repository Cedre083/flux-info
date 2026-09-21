<?php 
/**
 * ARTICLE CIEL - VERSION OPTIMISÉE E-E-A-T & SCHEMA.ORG
 * Design et fonctionnalités interactives préservés à 100%
 */
?>
<?php
ob_start();
include __DIR__ . '/header.php';
$headerOutput = ob_get_clean();
$headerParts = explode('<header class="archipel-header">', $headerOutput, 2);
$headerHead = $headerParts[0];
$headerNavigation = isset($headerParts[1]) ? '<header class="archipel-header">' . $headerParts[1] : $headerOutput;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Icônes Flux Info: à inclure une seule fois dans le <head> commun -->
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicon-512.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="preload" as="image" href="/logo-1024.png" fetchpriority="high">
<meta name="theme-color" content="#100019">

    
    <!-- AMÉLIORATION: Titre optimisé pour le SEO et l'E-E-A-T -->
    <title>Souffles de l’Atmosphère | Vents et Eau | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Comprendre les vents, les cellules atmosphériques, les rivières de vapeur, la sécheresse et les échanges entre ciel, océans et continents.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* ============================================= */
/* 1. DESIGN GLOBAL & TYPOGRAPHIE (23px)         */
/* ============================================= */
body {
    background: #050c18;
    margin: 0; padding: 0;
    overflow-x: hidden;
}

#windCanvas { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.6; }

.main {
    position: relative; 
    z-index: 10; 
    max-width: 950px;
    margin: 100px auto;
    padding: 0 24px 80px;
}

h1 {
    text-shadow: 0 0 20px rgba(100, 255, 218, 0.4); 
    text-align: center;
    font-weight: 100;
    letter-spacing: 5px;
}

.subtitle {
    text-align: center; 
    font-size: 0.95rem;
    color: #94a3b8;
    margin-bottom: 80px; 
    text-transform: uppercase; 
    letter-spacing: 0.3em;
    opacity: 0.6;
}

/* AMÉLIORATION: Style pour les méta-données de l'article */
.article-meta {
    text-align: center;
    font-size: 0.85rem;
    opacity: 0.5;
    margin-top: -60px;
    margin-bottom: 60px;
    letter-spacing: 1px;
    font-weight: 300;
    color: #cbd5e1;
}
.article-meta a { color: #64ffda; text-decoration: none; border-bottom: 1px solid rgba(100, 255, 218, 0.3); }

h2 {
    margin: 120px 0 60px; 
    color: #a7f3d0; 
    border-bottom: 1px solid rgba(100, 255, 218, 0.2);
    display: inline-block; 
    padding-bottom: 10px;
    font-weight: 200;
}

p { margin-bottom: 2rem; color: #cbd5e1; font-weight: 300; line-height: 1.8; }

.key-idea {
    background: rgba(100, 255, 218, 0.05);
    border: 1px solid rgba(100, 255, 218, 0.3);
    padding: 50px; 
    border-radius: 20px;
    margin: 100px 0; 
    text-align: center;
    font-style: italic;
}

.sky-img-block { margin: 80px 0; text-align: center; }
.sky-img-block img {
    max-width: 85%; height: auto; border-radius: 16px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
}

/* ============================================= */
/* 2. SIMULATEUR D'ASCENSION (Réparé)            */
/* ============================================= */
#sky-simulator {
    position: relative; 
    background: linear-gradient(180deg, #4facfe 0%, #00f2fe 100%);
    border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.2); 
    margin: 120px 0; overflow: hidden; height: 600px;
    box-shadow: 0 30px 70px rgba(0,0,0,0.5);
}

#starCanvas { position: absolute; inset: 0; opacity: 0; transition: opacity 1s; }

#earth-curve {
    position: absolute;
    left: 50%;
    bottom: -900px;
    transform: translateX(-50%);
    width: min(1050px, 145vw);
    aspect-ratio: 1 / 1;
    background: url('images/terre-atmosphere.webp') center center / cover no-repeat;
    border-radius: 50%;
    z-index: 2;
    opacity: 0;
    pointer-events: none;
    filter: drop-shadow(0 0 28px rgba(73, 176, 255, 0.28));
    transition: bottom 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease;
}

#aurora {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(45deg, transparent, rgba(100, 255, 218, 0.15), transparent);
    filter: blur(60px); z-index: 1; opacity: 0; transition: opacity 2s;
}

.sim-controls { 
    position: absolute; bottom: 0; left: 0; right: 0; 
    background: rgba(10, 25, 47, 0.9); backdrop-filter: blur(15px); 
    padding: 30px; z-index: 10; border-top: 1px solid rgba(255,255,255,0.1); 
}

/* ============================================= */
/* 3. SOURCES & QUIZ (Complets)                  */
/* ============================================= */
.sky-quiz { 
    margin-top: 120px; padding: 60px; background: rgba(255, 255, 255, 0.02); 
    border-radius: 24px; border: 1px solid rgba(100, 255, 218, 0.15); 
}
.quiz-question { margin-bottom: 35px; }
.sky-quiz button { 
    background: #64ffda; color: #0a192f; border: none; padding: 18px 45px; 
    border-radius: 50px; font-weight: 600; text-transform: uppercase; cursor: pointer;
}

.sources-module { margin-top: 150px; padding-top: 80px; border-top: 1px solid rgba(100, 255, 218, 0.1); }
.sources-module h3 { color: #64ffda; text-transform: uppercase; margin-bottom: 50px; font-weight: 100; letter-spacing: 6px; text-align: center; }
.sources-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
.source-card { text-decoration: none !important; background: rgba(255, 255, 255, 0.02); padding: 35px; border-radius: 20px; border: 1px solid rgba(100, 255, 218, 0.1); transition: 0.5s; display: flex; flex-direction: column; color: inherit; }
.source-card:hover { background: rgba(100, 255, 218, 0.05); transform: translateY(-8px); border-color: rgba(100, 255, 218, 0.4); }
.source-card h4 { margin: 0 0 15px 0; color: #ffffff; font-weight: 400; font-size: 1.1rem; }
.source-card:hover h4 { color: #64ffda; }
.source-card p { font-size: 0.95rem; color: #cbd5e1; opacity: 0.7; margin: 0; line-height: 1.6; }

/* 4. CONTRAINTES & DEFINITIONS AU CLIC */
.glossary-term {
    appearance: none;
    display: inline;
    padding: 0;
    color: #a7f3d0;
    background: transparent;
    border: 0;
    border-bottom: 1px dashed rgba(100, 255, 218, 0.72);
    font: inherit;
    cursor: pointer;
    transition: color 0.2s ease, border-color 0.2s ease;
}
.glossary-term:hover, .glossary-term:focus-visible { color: #ffffff; border-bottom-color: #ffffff; outline: none; }
.constraints-module {
    margin: 120px 0 86px;
    padding: 48px;
    background: linear-gradient(145deg, rgba(100, 255, 218, 0.08), rgba(86, 117, 255, 0.06));
    border: 1px solid rgba(100, 255, 218, 0.25);
    border-radius: 24px;
}
.constraints-module h2 { margin: 0 0 18px; }
.constraints-module > p { max-width: 720px; margin: 0 0 34px; color: #d8e7ea; }
.constraints-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
.constraint-card {
    display: block;
    min-height: 145px;
    padding: 26px;
    color: #d8e7ea;
    text-decoration: none;
    background: rgba(4, 14, 27, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 16px;
    transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
}
.constraint-card:hover, .constraint-card:focus-visible {
    transform: translateY(-4px);
    background: rgba(100, 255, 218, 0.1);
    border-color: rgba(100, 255, 218, 0.6);
    outline: none;
}
.constraint-card span { color: #64ffda; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.18em; }
.constraint-card h3 { margin: 10px 0 9px; color: #ffffff; font-size: 1.12rem; font-weight: 400; }
.constraint-card p { margin: 0; color: #cbd5e1; font-size: 0.92rem; line-height: 1.55; }
.glossary-dialog {
    width: min(500px, calc(100vw - 44px));
    padding: 0;
    color: #e7f7f4;
    background: #071525;
    border: 1px solid rgba(100, 255, 218, 0.5);
    border-radius: 18px;
    box-shadow: 0 28px 90px rgba(0, 0, 0, 0.7);
}
.glossary-dialog::backdrop { background: rgba(0, 4, 12, 0.72); backdrop-filter: blur(4px); }
.glossary-dialog-content { padding: 32px; }
.glossary-dialog h3 { margin: 0 0 16px; color: #a7f3d0; font-size: 1.35rem; font-weight: 400; }
.glossary-dialog p { margin: 0 0 22px; color: #d5e1ed; font-size: 1rem; line-height: 1.65; }
.glossary-dialog-actions { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; }
.glossary-dialog-actions a, .glossary-dialog-actions button {
    padding: 10px 16px;
    color: #061322;
    background: #64ffda;
    border: 0;
    border-radius: 999px;
    font: inherit;
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
}
.glossary-dialog-actions button { color: #cbd5e1; background: rgba(255, 255, 255, 0.1); }

@media (max-width: 768px) {
    .main { margin-top: 60px; }
    h1 { font-size: 1.8rem !important; }
    .constraints-module { margin: 68px 0; padding: 30px 22px; }
    .constraints-grid { grid-template-columns: 1fr; }
    .constraint-card { min-height: 0; }
    .glossary-dialog-content { padding: 25px; }
}


/* ==========================================================
   PARCOURS TRANSVERSAUX FLUX INFO
   Relie les ARTICLES entre eux sans transformer les PORTES.
   ========================================================== */
.flux-pathway {
    margin: 72px 0;
    padding: 34px;
    border: 1px solid color-mix(in srgb, currentColor 18%, transparent);
    border-radius: 22px;
    background: color-mix(in srgb, currentColor 4%, transparent);
    color: inherit;
}
.flux-pathway__eyebrow {
    margin: 0 0 10px;
    font-size: .72rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    opacity: .62;
}
.flux-pathway h2,
.flux-pathway h3 { color: inherit; margin-top: 0; }
.flux-pathway > p { color: inherit; opacity: .82; }
.flux-pathway__chain {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 9px;
    margin: 26px 0;
}
.flux-pathway__chain a,
.flux-pathway__chain span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.flux-pathway__chain a {
    padding: 8px 13px;
    border-radius: 999px;
    color: inherit;
    text-decoration: none;
    border: 1px solid color-mix(in srgb, currentColor 24%, transparent);
    background: color-mix(in srgb, currentColor 5%, transparent);
}
.flux-pathway__chain a:hover,
.flux-pathway__chain a:focus-visible {
    background: color-mix(in srgb, currentColor 10%, transparent);
}
.flux-pathway__arrow { opacity: .42; }
.flux-pathway__next {
    display: inline-flex;
    margin-top: 8px;
    color: inherit;
    font-weight: 500;
    text-decoration: none;
    border-bottom: 1px solid color-mix(in srgb, currentColor 35%, transparent);
}
.flux-pathway__next:hover { border-bottom-color: currentColor; }
.flux-loop {
    display: grid;
    grid-template-columns: repeat(6, minmax(0,1fr));
    gap: 8px;
    margin: 28px 0;
}
.flux-loop span {
    padding: 10px 8px;
    border-radius: 12px;
    text-align: center;
    font-size: .78rem;
    border: 1px solid color-mix(in srgb, currentColor 18%, transparent);
    background: color-mix(in srgb, currentColor 4%, transparent);
}
body.reading-mode .flux-pathway,
body.reading-mode .flux-pathway p,
body.reading-mode .flux-pathway h2,
body.reading-mode .flux-pathway h3,
body.reading-mode .flux-pathway a,
body.reading-mode .flux-loop span { color: #263238 !important; }
body.reading-mode .flux-pathway {
    background: #fff !important;
    border-color: rgba(52,65,75,.18) !important;
    box-shadow: 0 12px 30px rgba(35,45,55,.06);
}
body.reading-mode .flux-pathway__chain a,
body.reading-mode .flux-loop span {
    background: #f4f1f8 !important;
    border-color: rgba(82,64,121,.18) !important;
}
@media (max-width: 760px) {
    .flux-pathway { padding: 26px 20px; margin: 54px 0; }
    .flux-loop { grid-template-columns: repeat(2, minmax(0,1fr)); }
}



/* ==========================================================
   CONSÉQUENCES VISUELLES DES EXPÉRIENCES
   La simulation reste au premier plan ; ce module traduit
   le geste en interdépendances navigables
   ========================================================== */
.sim-consequences {
    --sim-accent: currentColor;
    position: relative;
    margin: 24px 0 72px;
    padding: 24px;
    border: 1px solid color-mix(in srgb, var(--sim-accent) 22%, transparent);
    border-radius: 22px;
    background: color-mix(in srgb, var(--sim-accent) 5%, transparent);
    overflow: hidden;
}
.sim-consequences::before {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: radial-gradient(circle at 15% 0%, color-mix(in srgb, var(--sim-accent) 12%, transparent), transparent 48%);
}
.sim-consequences__head,
.sim-consequences__chain { position: relative; z-index: 1; }
.sim-consequences__head {
    display: flex;
    justify-content: space-between;
    gap: 18px;
    align-items: end;
    flex-wrap: wrap;
    margin-bottom: 18px;
}
.sim-consequences__kicker {
    margin: 0 0 5px;
    font-size: .68rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    opacity: .62;
}
.sim-consequences__status {
    margin: 0;
    max-width: 650px;
    font-size: .92rem;
    line-height: 1.55;
    opacity: .82;
}
.sim-consequences__meter {
    min-width: 150px;
    text-align: right;
    font-size: .78rem;
    letter-spacing: .08em;
    opacity: .72;
}
.sim-consequences__chain {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
}
.sim-consequences__chain a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 38px;
    padding: 7px 13px;
    border-radius: 999px;
    border: 1px solid color-mix(in srgb, currentColor 16%, transparent);
    background: color-mix(in srgb, currentColor 3%, transparent);
    color: inherit;
    text-decoration: none;
    opacity: .42;
    transform: translateY(0) scale(.98);
    transition: opacity .28s ease, transform .28s ease, box-shadow .28s ease, background .28s ease, border-color .28s ease;
}
.sim-consequences__chain a.is-active {
    opacity: 1;
    transform: translateY(-1px) scale(1);
    border-color: color-mix(in srgb, var(--sim-accent) 58%, currentColor 16%);
    background: color-mix(in srgb, var(--sim-accent) 12%, transparent);
    box-shadow: 0 0 24px color-mix(in srgb, var(--sim-accent) 18%, transparent);
}
.sim-consequences__chain a.is-current {
    box-shadow: 0 0 30px color-mix(in srgb, var(--sim-accent) 28%, transparent);
}
.sim-consequences__arrow {
    opacity: .28;
    user-select: none;
}
body.reading-mode .sim-consequences {
    background: color-mix(in srgb, currentColor 3%, transparent);
    border-color: color-mix(in srgb, currentColor 17%, transparent);
}
body.reading-mode .sim-consequences__chain a {
    color: inherit;
    background: color-mix(in srgb, currentColor 2%, transparent);
}
body.reading-mode .sim-consequences__chain a.is-active {
    background: color-mix(in srgb, currentColor 7%, transparent);
    border-color: color-mix(in srgb, currentColor 32%, transparent);
    box-shadow: none;
}
@media (max-width: 640px) {
    .sim-consequences { padding: 20px 16px; margin-bottom: 56px; }
    .sim-consequences__meter { text-align: left; min-width: 0; }
    .sim-consequences__chain { gap: 6px; }
    .sim-consequences__chain a { padding: 6px 10px; font-size: .78rem; }
    .sim-consequences__arrow { font-size: .75rem; }
}
@media (prefers-reduced-motion: reduce) {
    .sim-consequences__chain a { transition: none; }
}

/* Intégration des conséquences dans les expériences existantes */
.sim-consequences--inside {
    margin: 14px 0 0;
    padding: 14px 16px;
    border-radius: 14px;
    background: rgba(2, 8, 18, .62);
    border-color: color-mix(in srgb, var(--sim-accent) 28%, transparent);
    backdrop-filter: blur(12px) saturate(120%);
    -webkit-backdrop-filter: blur(12px) saturate(120%);
}
.sim-consequences--inside::before { opacity: .55; }
.sim-consequences--inside .sim-consequences__head { margin-bottom: 10px; gap: 10px; }
.sim-consequences--inside .sim-consequences__kicker { font-size: .60rem; margin-bottom: 3px; }
.sim-consequences--inside .sim-consequences__status { font-size: .80rem; line-height: 1.42; max-width: 720px; }
.sim-consequences--inside .sim-consequences__meter { font-size: .68rem; min-width: 110px; }
.sim-consequences--inside .sim-consequences__chain { gap: 5px; }
.sim-consequences--inside .sim-consequences__chain a { min-height: 30px; padding: 4px 9px; font-size: .70rem; }
.sim-consequences--inside .sim-consequences__arrow { font-size: .68rem; }
#fusion-simulator > .sim-consequences--inside,
#human-simulator > .sim-consequences--inside,
#archipel-simulator > .sim-consequences--inside {
    position: absolute;
    left: 16px;
    right: 16px;
    bottom: 16px;
    z-index: 30;
    margin: 0;
}
#serengeti-map-sim > .sim-consequences--inside {
    position: absolute;
    left: 16px;
    right: 16px;
    top: 82px;
    z-index: 20;
    margin: 0;
}
body.reading-mode .sim-consequences--inside {
    background: rgba(255,255,255,.88);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
@media (max-width: 700px) {
    .sim-consequences--inside { padding: 11px 12px; }
    .sim-consequences--inside .sim-consequences__status { font-size: .73rem; }
    .sim-consequences--inside .sim-consequences__chain a { min-height: 27px; padding: 3px 7px; font-size: .63rem; }
    #fusion-simulator > .sim-consequences--inside,
    #human-simulator > .sim-consequences--inside,
    #archipel-simulator > .sim-consequences--inside { left: 8px; right: 8px; bottom: 8px; }
    #serengeti-map-sim > .sim-consequences--inside { left: 8px; right: 8px; top: 68px; }
}

/* Retour pédagogique attaché à l'expérience, jamais superposé aux commandes */
.sim-consequences--inline {
    position: relative !important; inset:auto !important;
    margin: 10px 0 42px !important; padding: 10px 4px 0 !important;
    border:0 !important; border-radius:0 !important; background:transparent !important;
    backdrop-filter:none !important; -webkit-backdrop-filter:none !important; overflow:visible !important;
}
.sim-consequences--inline::before { display:none !important; }
.sim-consequences--inline .sim-consequences__head { margin-bottom:8px; }
.sim-consequences--inline .sim-consequences__status { font-size:.78rem; line-height:1.45; opacity:.76; }
.sim-consequences--inline .sim-consequences__meter { font-size:.68rem; min-width:0; }
.sim-consequences--inline .sim-consequences__chain { gap:5px; }
.sim-consequences--inline .sim-consequences__chain a { min-height:29px; padding:4px 9px; font-size:.68rem; }
@media(max-width:700px){.sim-consequences--inline{margin-bottom:32px!important}}

</style>
</head>
<body>
<?= $headerNavigation ?>

<canvas id="windCanvas"></canvas>

<main class="main">
    <h1>Les Souffles de l’Atmosphère</h1>
    <p class="subtitle">Rivières Volantes, Plancton Aérien et Respiration du Monde</p>

    <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
    <p class="article-meta">Publié par <a href="apropos.php">Flux-Info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Vulgarisation Sourcée',
    'time' => '9 min',
    'summary' => 'L’atmosphère redistribue en permanence chaleur et humidité. Vents, rivières atmosphériques, nuages et sécheresses sont des expressions différentes d’un même système de circulation.',
    'learn' => ['Voir comment l’atmosphère transporte énergie et eau', 'Comprendre le lien entre circulation, pluie et sécheresse', 'Relier le Ciel à l’Océan, aux sols et aux sociétés']
]); ?>

    <section class="article-block">
        <h2>L’Océan dans lequel nous Marchons</h2>
        <br>
        <p>Nous avons tendance à percevoir le ciel comme un vide immense. Pourtant, nous vivons littéralement au fond d'un océan de gaz. Cet air possède une masse, une pression et une dynamique complexe qui conditionne chaque seconde de notre existence.</p>
        <p>L’atmosphère est notre bouclier ultime. Elle filtre les rayons mortels du soleil et nous isole du vide absolu et glacial de l'espace. Sans cette enveloppe, la Terre serait aussi stérile que la Lune.</p>

        <div class="sky-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/pelure-pomme.webp" alt="L'atmosphère terrestre comparée à une fine pelure de pomme">
        </div>
        <p>Le saviez-vous ? Si la Terre avait la taille d'une pomme, l'épaisseur de l'air respirable ne dépasserait pas celle de sa pelure. C’est dans cet espace incroyablement restreint que se concentre la totalité des phénomènes météorologiques et de la vie terrestre.</p>
    </section>

    <section class="article-block" id="circulation-atmospherique">
        <h2>Les Grandes Circulations : Une Machine à Redistribuer la Chaleur</h2>
        <p>Le Soleil chauffe davantage les régions équatoriales que les pôles. Cette différence met l’atmosphère en mouvement. L’air chaud s’élève, l’air plus froid descend, et la rotation de la Terre dévie ces déplacements: de grandes cellules de circulation organisent ainsi une partie des vents dominants et des zones de pluie ou de sécheresse.</p>
        <p>Dans chaque hémisphère, les cellules de Hadley, de Ferrel et polaires ne sont pas des tuyaux immobiles, mais une manière de décrire la circulation moyenne. Aux frontières de ces régimes, de puissants courants d’altitude - les <strong>jet-streams</strong> - participent au déplacement des perturbations météorologiques.</p>
        <p>Cette redistribution explique pourquoi une anomalie thermique dans un océan ou une région peut influencer des territoires très éloignés. L’atmosphère transporte de la chaleur, de l’humidité et de l’énergie: elle relie en permanence les lieux plutôt qu’elle ne les isole.</p>
        <div class="key-idea"><strong>L’IDÉE CLÉ:</strong> le vent est la forme visible d’un rééquilibrage permanent entre des régions qui ne reçoivent ni ne stockent l’énergie de la même manière.</div>
    </section>

    <section class="article-block">
        <h2>Le Plancton du Ciel : Un Écosystème Invisible</h2>
        <br><br>
        <p>On a longtemps cru que le ciel n'était qu'un lieu de passage. L'<button type="button" class="glossary-term" data-glossary="aerobiologie">aérobiologie</button> moderne nous aide à documenter la présence et la dispersion de microorganismes dans l’atmosphère <a class="source-citation" href="#ref-pnas" aria-label="Voir la référence PNAS">[1]</a>.</p>
        <p>Des microorganismes <em>( bactéries, champignons, virus et pollens )</em> peuvent être transportés dans les courants de la <button type="button" class="glossary-term" data-glossary="troposphere">troposphère</button>. Des travaux ont notamment étudié le microbiome de la haute troposphère et ses liens avec les circulations atmosphériques <a class="source-citation" href="#ref-pnas" aria-label="Voir la référence PNAS">[1]</a>.</p>
        <div class="sky-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/plancton-aerien.webp" alt="Visualisation du plancton aérien et des micro-organismes en suspension">
        </div>
        <div class="key-idea">
            <strong>L’IDÉE CLÉ:</strong> Le ciel n'est pas un désert gazeux. C'est une extension de la biosphère où la biologie influence directement la météorologie.
        </div>
    </section>

    <section class="article-block" id="rivieres-volantes">
        <h2>Les Rivières Volantes : l’Amazone de Vapeur</h2>
        <br><br>
        <p>Parmi les phénomènes les plus spectaculaires mais invisibles, on trouve les <button type="button" class="glossary-term" data-glossary="riviere-atmospherique">« rivières atmosphériques »</button>. Ce sont d'immenses couloirs de vapeur d'eau qui parcourent des milliers de kilomètres au-dessus de nos têtes <a class="source-citation" href="#ref-noaa" aria-label="Voir la référence NOAA">[2]</a>.</p>
        <div class="sky-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/rivieres-volantes.webp" alt="Schéma des rivières atmosphériques transportant la vapeur d'eau">
        </div>
        <p>Ces couloirs transportent de grandes quantités de vapeur d’eau et peuvent contribuer fortement aux précipitations de certaines régions <a class="source-citation" href="#ref-noaa" aria-label="Voir la référence NOAA">[2]</a>. Le récit conserve ici une formulation volontairement imagée.</p>
    </section>

    <section class="article-block" id="secheresse">
        <h2>Quand le Flux se Rompt : de la Pluie à la Sécheresse</h2>
        <br><br>
        <p>Une sécheresse n’est pas seulement une absence locale de pluie. Elle peut apparaître lorsque les régimes de précipitations se déplacent, que l’évaporation augmente avec la chaleur ou que les circulations qui transportent l’humidité alimentent moins durablement un territoire.</p>
        <p>Le manque d’eau se propage alors dans le système: il modifie l’humidité des sols, la végétation, les rendements agricoles, les habitats et, finalement, les conditions matérielles des sociétés.</p>
        <nav class="flux-pathway__chain" aria-label="Propagation d'une sécheresse">
            <a href="#circulation-atmospherique">Atmosphère</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#rivieres-volantes">Pluie</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#secheresse" aria-current="location">Eau disponible</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-terre-migrations.php#sols">Sols</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-terre-migrations.php#agriculture">Agriculture</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-humanite-vivant.php#societe">Sociétés</a>
        </nav>
        <div class="key-idea"><strong>L’IDÉE CLÉ:</strong> suivre une sécheresse, c’est suivre un déséquilibre atmosphérique jusqu’à ses conséquences terrestres et humaines.</div>
    </section>

    <section class="article-block">
        <h2>La Respiration Globale</h2>
        <br><br>
        <p>L'atmosphère est le grand médiateur de la Terre. Elle assure le dialogue constant entre les océans, les forêts et les calottes glaciaires. Une part majeure de l’oxygène produit par photosynthèse provient des organismes marins, notamment du <button type="button" class="glossary-term" data-glossary="phytoplancton">phytoplancton</button>, tandis que les végétaux terrestres participent eux aussi à ce cycle global. L’atmosphère relie ainsi directement océans et continents.</p>
        <div class="sky-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/respiration-globale.webp" alt="Cycle de respiration globale entre la biosphère et l'atmosphère">
        </div>
    </section>

  <?php renderFluxConnections('ciel'); ?>

    <section class="flux-pathway" aria-labelledby="ciel-flux-title">
        <p class="flux-pathway__eyebrow">Continuer le Flux</p>
        <h2 id="ciel-flux-title">Du Ciel vers la Terre</h2>
        <p>La vapeur devient précipitation; la précipitation devient eau disponible; cette eau rencontre ensuite les sols, les végétaux et les organismes.</p>
        <div class="flux-pathway__chain">
            <a href="article-ocean-courants.php">Océan · source et redistribution de l’eau</a>
            <span class="flux-pathway__arrow">→</span>
            <a href="#circulation-atmospherique" aria-current="location">Atmosphère · vous êtes ici</a>
            <span class="flux-pathway__arrow">→</span>
            <a href="article-terre-migrations.php#sols">Terre · sols et vivant</a>
        </div>
        <a class="flux-pathway__next" href="article-terre-migrations.php#sols">Continuer vers les sols et le vivant →</a>
    </section>

    <section class="constraints-module" aria-labelledby="constraints-title">
        <h2 id="constraints-title">Les Contraintes qui portent le Ciel</h2>
        <p>L’air n’est pas un décor: il relie l’eau, le vivant, les températures et les sociétés. Ces quatre repères prolongent l’article vers <strong>AGIBIOSPHERIC, l’un des autres sites de notre Archipel</strong>, et ses contraintes du Réel.</p>
        <div class="constraints-grid">
            <a class="constraint-card" href="https://www.agibiospheric.net/climat.html" target="_blank" rel="noopener noreferrer">
                <span>CLIMAT</span>
                <h3>Flux, Inertie et Extrêmes</h3>
                <p>Les mouvements de l’air redistribuent chaleur et humidité dans un système matériel qui n’est jamais abstrait.</p>
            </a>
            <a class="constraint-card" href="https://www.agibiospheric.net/biodiversite.html" target="_blank" rel="noopener noreferrer">
                <span>VIVANT</span>
                <h3>Une Biosphère en Mouvement</h3>
                <p>Le plancton aérien rappelle que le Vivant participe aux cycles qui façonnent la météorologie.</p>
            </a>
            <a class="constraint-card" href="https://www.agibiospheric.net/eau-douce.html" target="_blank" rel="noopener noreferrer">
                <span>EAU</span>
                <h3>Vapeur, Forêts et Territoires</h3>
                <p>Suivre l’eau dans l’atmosphère rend visibles les dépendances entre océans, végétation et régimes de pluie.</p>
            </a>
            <a class="constraint-card" href="https://www.agibiospheric.net/vivant.html" target="_blank" rel="noopener noreferrer">
                <span>INTERDÉPENDANCE</span>
                <h3>Un Support Physique Fini</h3>
                <p>Observer l’altitude, c’est aussi mesurer le support matériel dont dépendent les civilisations et leurs techniques.</p>
            </a>
        </div>
    </section>

    <div class="article-experience-lead">
        <p class="article-experience-lead__kicker">Expérience interactive</p>
        <h3>L’Ascension Verticale</h3>
        <p>Quittez progressivement le sol et observez comment la pression, la densité de l’air et le paysage atmosphérique changent avec l’altitude.</p>
        <div class="experience-action"><strong>Geste</strong><span>Déplacer le curseur d’altitude</span></div>
    </div>

    <div id="sky-simulator">
        <canvas id="starCanvas"></canvas>
        <div id="aurora"></div>
        <div id="earth-curve"></div>
        <div class="sim-controls">
            <div style="text-align: center; margin-bottom: 15px;">
                <p id="alt-display" style="font-size: 2.2rem; font-weight: bold; color: #fff; margin: 0;">0 m</p>
                <p id="zone-name" style="color: #64ffda; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Plancher des vaches</p>
            </div>
            <label class="sr-only" for="altRange">Altitude de l’ascension</label>
            <input type="range" id="altRange" min="0" max="35000" value="0" step="100" style="width: 100%;" aria-describedby="sky-visual-feedback">
            <div id="sky-visual-feedback" style="margin-top: 15px; font-style: italic; text-align: center; font-size: 0.9rem; color: #cbd5e1;">L'air est dense et protecteur.</div>
        </div>
    </div>
<aside class="sim-consequences sim-consequences--inline" id="ciel-live-consequences" style="--sim-accent:#64ffda" aria-live="polite">
                    <div class="sim-consequences__head">
                        <div>
                            <p class="sim-consequences__kicker">Ce que l’ascension révèle</p>
                            <p class="sim-consequences__status" id="ciel-live-status">Au niveau du sol, l’atmosphère est dense et porte l’essentiel de notre météo.</p>
                        </div>
                        <div class="sim-consequences__meter" id="ciel-live-meter">Couche basse</div>
                    </div>
                    <nav class="sim-consequences__chain" aria-label="Ce que révèle l'altitude dans l'atmosphère">
                        <a class="is-active is-current" data-ciel-step="1" href="#sky-simulator">Altitude</a><span class="sim-consequences__arrow">→</span>
                        <a class="is-active" data-ciel-step="2" href="#circulation-atmospherique">Air &amp; Pression</a><span class="sim-consequences__arrow">→</span>
                        <a data-ciel-step="3" href="#circulation-atmospherique">Circulation</a><span class="sim-consequences__arrow">→</span>
                        <a data-ciel-step="4" href="#rivieres-volantes">Vapeur &amp; Pluie</a><span class="sim-consequences__arrow">→</span>
                        <a data-ciel-step="5" href="#secheresse">Sécheresse</a>
                    </nav>
                </aside>
<div class="article-knowledge-bridge">
        <p class="article-knowledge-bridge__kicker">Après l’ascension</p>
        <h3>Relier l’Altitude aux Flux Atmosphériques</h3>
        <p>Quelques questions pour vérifier ce qui relie épaisseur de l’atmosphère, plancton aérien et transport de vapeur d’eau.</p>
    </div>
<section class="sky-quiz">
        <h3 style="text-align:center; color:#64ffda; margin-bottom:30px;">Testez vos Connaissances</h3>
        <div class="quiz-question">
            <p>1. À quelle épaisseur peut-on comparer l'atmosphère respirable par rapport à la Terre ?</p>
            <label><input type="radio" name="sq1" value="b"> La pelure d'une pomme</label><br>
            <label><input type="radio" name="sq1" value="a"> La chair d'une pomme</label>
        </div>
        <div class="quiz-question">
            <p>2. Quel rôle inattendu joue le "plancton aérien" ?</p>
            <label><input type="radio" name="sq2" value="a"> Il aide les gouttes de pluie à se former</label><br>
            <label><input type="radio" name="sq2" value="b"> Il bloque les rayons UV</label>
        </div>
        <div class="quiz-question">
            <p>3. Qu'est-ce qu'une "rivière volante" ?</p>
            <label><input type="radio" name="sq3" value="a"> Un immense couloir de vapeur d'eau invisible</label><br>
            <label><input type="radio" name="sq3" value="b"> Un courant d'air transportant des oiseaux</label>
        </div>
        <div style="text-align:center; margin-top:40px;">
            <button type="button" onclick="checkSkyQuiz()">Valider mes réponses</button>
            <div id="sky-quiz-result" style="margin-top:25px; font-weight:bold;"></div>
        </div>
    </section>

    <section class="sources-module">
        <h3>Sources & Références</h3>
        <p class="sources-note"><strong>Comment lire ces références.</strong> Cette sélection distingue une page institutionnelle, une publication évaluée par les pairs et un rapport de synthèse. Les cartes ouvrent directement la ressource consultée. <time datetime="2026-08-28">Vérifiées le 28 août 2026.</time></p>
        <div class="sources-grid">
<a id="ref-noaa" href="https://www.noaa.gov/stories/what-are-atmospheric-rivers" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>NOAA - Atmospheric Rivers</h4>
                <p>Présentation institutionnelle des rivières atmosphériques et de leur rôle dans le cycle mondial de l’eau.</p>
            </a>
<a id="ref-pnas" href="https://pubmed.ncbi.nlm.nih.gov/30420511/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>PNAS - Cáliz et Al. (2018)</h4>
                <p>Étude sur les variations saisonnières du microbiome aérien et les circulations atmosphériques. DOI: 10.1073/pnas.1812826115.</p>
            </a>
<a id="ref-ipcc" href="https://www.ipcc.ch/report/ar6/wg1/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>GIEC - Rapport AR6, Groupe I</h4>
                <p>Évaluation scientifique du climat physique, du cycle de l’eau et des changements observés.</p>
            </a>
        </div>
    </section>

    <a href="ciel.php" style="display:inline-block; margin-top:40px; color:#64ffda; text-decoration:none; font-weight: bold;">← Retour au portail Ciel</a>
</main>

<dialog id="glossaryDialog" class="glossary-dialog" aria-labelledby="glossaryTitle">
    <div class="glossary-dialog-content">
        <h3 id="glossaryTitle"></h3>
        <p id="glossaryDefinition"></p>
        <div class="glossary-dialog-actions">
            <a id="glossarySource" href="#" target="_blank" rel="noopener noreferrer">Approfondir sur Wikipédia ↗</a>
            <form method="dialog"><button type="submit">Fermer</button></form>
        </div>
    </div>
</dialog>

<script>
/* 1. VENT */
const canvas = document.getElementById('windCanvas');
const ctx = canvas.getContext('2d');
let w, h;
function resize() { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; }
window.onresize = resize; resize();
const windLines = Array.from({length: 35}, () => ({ x: Math.random() * w, y: Math.random() * h, length: Math.random() * 150 + 50, speed: Math.random() * 1.5 + 0.5 }));
function drawWind() { ctx.clearRect(0, 0, w, h); ctx.strokeStyle = 'rgba(100, 255, 218, 0.15)'; ctx.lineWidth = 1; windLines.forEach(l => { ctx.beginPath(); ctx.moveTo(l.x, l.y); ctx.lineTo(l.x + l.length, l.y); ctx.stroke(); l.x += l.speed; if (l.x > w) l.x = -l.length; }); requestAnimationFrame(drawWind); }
drawWind();

/* 2. ETOILES */
const starCanvas = document.getElementById('starCanvas');
const sctx = starCanvas.getContext('2d');
starCanvas.width = 800; starCanvas.height = 600;
const stars = Array.from({length: 150}, () => ({ x: Math.random()*800, y: Math.random()*600, r: Math.random()*1.2 }));
function drawStars() { sctx.clearRect(0,0,800,600); sctx.fillStyle="#fff"; stars.forEach(s => { sctx.beginPath(); sctx.arc(s.x, s.y, s.r, 0, Math.PI*2); sctx.fill(); }); requestAnimationFrame(drawStars); }
drawStars();

/* 3. ASCENSION */
const altRange = document.getElementById('altRange');
const altDisplay = document.getElementById('alt-display');
const zoneName = document.getElementById('zone-name');
const simBox = document.getElementById('sky-simulator');
const earthCurve = document.getElementById('earth-curve');
const auroraLayer = document.getElementById('aurora');

altRange.addEventListener('input', function() {
    const alt = parseInt(this.value);
    altDisplay.innerText = alt.toLocaleString() + " m";
    
    if (alt < 15000) {
        let r = alt / 15000;
        simBox.style.background = `linear-gradient(180deg, hsl(208, 98%, ${75 - r*60}%) 0%, hsl(183, 98%, ${85 - r*70}%) 100%)`;
        starCanvas.style.opacity = 0; earthCurve.style.opacity = 0; auroraLayer.style.opacity = 0;
    } else {
        let r = (alt - 15000) / 20000;
        simBox.style.background = `linear-gradient(180deg, #050c18 0%, #000 100%)`;
        starCanvas.style.opacity = r;
        earthCurve.style.opacity = 1;
        const earthSize = earthCurve.offsetWidth || 1050;
        const earthBase = -0.86 * earthSize;
        const earthLift = 0.38 * earthSize;
        earthCurve.style.bottom = `${earthBase + (r * earthLift)}px`;
        auroraLayer.style.opacity = r * 0.5;
    }

    if (alt < 5000) { zoneName.innerText = "Plancher des vaches"; zoneName.style.color="#64ffda"; }
    else if (alt < 15000) { zoneName.innerText = "Troposphère"; zoneName.style.color="#a7f3d0"; }
    else { zoneName.innerText = "Espace Proche"; zoneName.style.color="#ffeb3b"; }

    const liveStatus = document.getElementById('ciel-live-status');
    const liveMeter = document.getElementById('ciel-live-meter');
    const steps = document.querySelectorAll('[data-ciel-step]');
    const pressureRatio = Math.exp(-alt / 8400);
    const approxPressure = Math.max(1, 1013 * pressureRatio);
    liveMeter.textContent = `Pression ≈ ${approxPressure.toFixed(0)} hPa`;
    if (alt < 3000) {
        liveStatus.textContent = 'Dans les basses couches, l’air est dense et la vapeur d’eau participe directement aux nuages, aux pluies et au temps que nous vivons.';
    } else if (alt < 12000) {
        liveStatus.textContent = 'En montant dans la troposphère, la pression chute. C’est dans cette couche que circulent l’essentiel de la vapeur d’eau et des perturbations météorologiques.';
    } else {
        liveStatus.textContent = 'Au-dessus de la troposphère, l’air devient très ténu. Vue d’ici, la minceur de la couche qui porte eau, météo et vie devient visible.';
    }
    const level = alt < 3000 ? 2 : alt < 12000 ? 4 : 5;
    steps.forEach((step, index) => step.classList.toggle('is-active', index < level));
});
altRange.dispatchEvent(new Event('input'));

/* 4. QUIZ */
function checkSkyQuiz() {
    const q1 = document.querySelector('input[name="sq1"]:checked');
    const q2 = document.querySelector('input[name="sq2"]:checked');
    const q3 = document.querySelector('input[name="sq3"]:checked');
    const res = document.getElementById('sky-quiz-result');
    if(!q1 || !q2 || !q3) { res.innerText = "Répondez à toutes les questions !"; return; }
    let score = (q1.value==='b'?1:0) + (q2.value==='a'?1:0) + (q3.value==='a'?1:0);
    res.innerText = score===3 ? "Parfait ! 3/3": "Score: "+score+"/3";
    res.style.color = score===3 ? "#64ffda": "#ffb347";
}

/* 5. DEFINITIONS AU CLIC */
const glossaryEntries = {
    'troposphere': {
        title: 'Troposphère',
        definition: 'La couche la plus basse de l’atmosphère, où se produisent l’essentiel des phénomènes météorologiques et du cycle de l’eau.',
        url: 'https://fr.wikipedia.org/wiki/Troposph%C3%A8re'
    },
    'aerobiologie': {
        title: 'Aérobiologie',
        definition: 'L’étude des particules biologiques en suspension dans l’air, comme les pollens, spores, bactéries ou fragments d’organismes.',
        url: 'https://fr.wikipedia.org/wiki/A%C3%A9robiologie'
    },
    'riviere-atmospherique': {
        title: 'Rivière atmosphérique',
        definition: 'Un long corridor d’air chargé en vapeur d’eau qui transporte l’humidité sur de très grandes distances.',
        url: 'https://fr.wikipedia.org/wiki/Rivi%C3%A8re_atmosph%C3%A9rique'
    },
    'phytoplancton': {
        title: 'Phytoplancton',
        definition: 'Des organismes microscopiques aquatiques qui utilisent la lumière pour produire leur matière organique par photosynthèse.',
        url: 'https://fr.wikipedia.org/wiki/Phytoplancton'
    }
};
const glossaryDialog = document.getElementById('glossaryDialog');
const glossaryTitle = document.getElementById('glossaryTitle');
const glossaryDefinition = document.getElementById('glossaryDefinition');
const glossarySource = document.getElementById('glossarySource');
document.querySelectorAll('[data-glossary]').forEach((term) => {
    term.addEventListener('click', () => {
        const entry = glossaryEntries[term.dataset.glossary];
        if (!entry) return;
        glossaryTitle.textContent = entry.title;
        glossaryDefinition.textContent = entry.definition;
        glossarySource.href = entry.url;
        glossaryDialog.showModal();
    });
});
glossaryDialog.addEventListener('click', (event) => {
    const bounds = glossaryDialog.getBoundingClientRect();
    const outside = event.clientX < bounds.left || event.clientX > bounds.right || event.clientY < bounds.top || event.clientY > bounds.bottom;
    if (outside) glossaryDialog.close();
});
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
