<?php 
/**
 * ARTICLE HUMANITÉ - VERSION OPTIMISÉE E-E-A-T & SCHEMA.ORG
 * Design et fonctionnalités interactives préservés à 100%
 */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
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
    <title>La Singularité du Vivant | Corps, Alimentation et Société | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Explorer le corps comme système ouvert, l’alimentation, les dépendances matérielles et les relations entre vivant et sociétés humaines.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* Style: résonance rose, lecture ample et interactions existantes préservées. Les compléments distinguent explicitement métaphore, hypothèse et résultat scientifique. */
/* ============================================= */
/* 1. DESIGN HUMANITÉ - RÉSONANCE & TYPO 23PX    */
/* ============================================= */

body {
    background: radial-gradient(circle at 50% 20%, #1a0015 0%, #050005 60%, #000000 100%);
    overflow-x: hidden;
}

#articleHumanCanvas { 
    position: fixed; inset: 0; z-index: 1; 
    pointer-events: none; opacity: 0.6; 
}

.main { 
    position: relative; 
    z-index: 10; 
    max-width: 950px; 
    margin: 100px auto 100px; 
    padding: 0 24px 80px; 
}

h1 { text-shadow: 0 0 30px rgba(255,100,180,0.5); text-align: center; font-weight: 100; }

.subtitle { 
    text-align: center; font-size: 0.95rem; opacity: 0.7; letter-spacing: 0.4em; 
    text-transform: uppercase; margin-bottom: 100px; color: #ffb4dc; 
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
    color: #fce4ec;
}
.article-meta a { color: #ffb4dc; text-decoration: none; border-bottom: 1px solid rgba(255, 180, 220, 0.3); }

h2 { 
    font-size: clamp(1.6rem, 5vw, 2.2rem); text-align: center; text-transform: uppercase; 
    letter-spacing: 6px; color: #fff; margin: 120px 0 60px 0; font-weight: 200; 
}

h2::after {
    content: ''; display: block; width: 60px; height: 1px; background: #ffb4dc;
    margin: 30px auto 0; box-shadow: 0 0 15px #ffb4dc;
}

p, .thought { font-size: 1.1rem; line-height: 1.8; color: #fce4ec; font-weight: 300; display: block; margin-bottom: 1.8rem; }

.glossary-term { appearance: none; background: none; border: 0; border-bottom: 1px dashed rgba(255,180,220,.85); color: #ffd3e7; cursor: pointer; font: inherit; padding: 0 1px; transition: color .2s ease, border-color .2s ease; }
.glossary-term:hover, .glossary-term:focus-visible { color: #fff; border-bottom-color: #fff; outline: none; }
.human-constraints { margin: 120px 0 0; padding: 48px; border: 1px solid rgba(255,180,220,.28); border-radius: 24px; background: linear-gradient(135deg, rgba(255,100,180,.10), rgba(60,0,45,.12)); box-shadow: 0 18px 60px rgba(0,0,0,.22); }
.human-constraints__eyebrow { margin: 0 0 12px; color: #ffb4dc; font-size: .76rem; letter-spacing: .18em; text-transform: uppercase; }
.human-constraints h3 { color: #fff; font-weight: 200; font-size: 1.45rem; margin: 0 0 20px; }
.human-constraints > p { max-width: 690px; margin-bottom: 32px; opacity: .9; }
.constraint-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
.constraint-card { display: block; min-height: 100%; padding: 24px; border: 1px solid rgba(255,180,220,.18); border-radius: 16px; background: rgba(12,0,10,.30); color: #fce4ec; text-decoration: none; transition: transform .25s ease, background .25s ease, border-color .25s ease; }
.constraint-card:hover, .constraint-card:focus-visible { transform: translateY(-4px); background: rgba(255,100,180,.12); border-color: rgba(255,210,235,.74); outline: none; }
.constraint-card strong { display: block; color: #fff; font-size: 1rem; font-weight: 500; margin-bottom: 9px; }
.constraint-card span { display: block; font-size: .94rem; line-height: 1.65; opacity: .85; }
.definition-dialog { position: fixed; inset: 0; z-index: 300; display: none; align-items: center; justify-content: center; padding: 24px; background: rgba(5,0,5,.74); backdrop-filter: blur(10px); }
.definition-dialog.is-open { display: flex; }
.definition-dialog__panel { position: relative; width: min(570px, 100%); padding: 36px; border: 1px solid rgba(255,200,230,.46); border-radius: 22px; background: #19000f; box-shadow: 0 28px 90px rgba(0,0,0,.72); }
.definition-dialog__close { position: absolute; top: 14px; right: 16px; width: 34px; height: 34px; border: 1px solid rgba(255,200,230,.46); border-radius: 50%; background: transparent; color: #fff; cursor: pointer; font-size: 1.2rem; }
.definition-dialog h3 { color: #fff; margin: 0 40px 18px 0; font-weight: 300; }
.definition-dialog p { margin-bottom: 20px; }
.definition-dialog a { color: #ffd3e7; text-underline-offset: 4px; }

.thought { transition: 0.5s; opacity: 0.85; cursor: default; }
.thought:hover { color: #fff; transform: translateX(10px); opacity: 1; text-shadow: 0 0 15px rgba(255,180,220,0.4); }

.human-img-block { margin: 100px 0; text-align: center; }
.human-img { 
    max-width: 85%; border-radius: 24px; border: 1px solid rgba(255,100,180,0.2); 
    box-shadow: 0 30px 70px rgba(0,0,0,0.7); transition: 0.5s;
}

/* ============================================= */
/* 2. SIMULATEUR RESONANCIA (Fixé)               */
/* ============================================= */
#human-simulator {
    position:relative; width:100%; height:550px; background: #050005; 
    border-radius:24px; overflow:hidden; border: 1px solid rgba(255,100,180,0.2); 
    margin: 120px 0; cursor: crosshair;
}
#resCanvas { width: 100%; height: 100%; display: block; }

#fusion-success {
    position: absolute; inset: 0; display: none; flex-direction: column;
    background: rgba(15, 0, 10, 0.95); backdrop-filter: blur(20px);
    z-index: 100; justify-content:center; align-items:center;
    border: 2px solid #ffb4dc; border-radius: 24px; color: #fff; text-align: center;
}

/* ============================================= */
/* 3. SOURCES & QUIZ                             */
/* ============================================= */
.sources-module { margin-top: 150px; padding-top: 80px; border-top: 1px solid rgba(255, 180, 220, 0.15); }
.sources-module h3 { color: #ffb4dc; text-transform: uppercase; margin-bottom: 50px; font-weight: 100; letter-spacing: 6px; text-align: center; }
.sources-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
.source-card { text-decoration: none !important; background: rgba(255, 255, 255, 0.02); padding: 35px; border-radius: 20px; border: 1px solid rgba(255, 180, 220, 0.15); transition: 0.5s; display: flex; flex-direction: column; color: inherit; }
.source-card:hover { background: rgba(255, 100, 180, 0.05); transform: translateY(-8px); border-color: rgba(255, 180, 220, 0.5); }
.source-card h4 { margin: 0 0 15px 0; color: #ffffff; font-weight: 400; font-size: 1.1rem; }
.source-card:hover h4 { color: #ffb4dc; }
.source-card p { font-size: 0.95rem; color: #fce4ec; opacity: 0.7; margin: 0; line-height: 1.6; }

.human-quiz { padding: 60px; background: rgba(30,0,20,0.3); border: 1px solid rgba(255,100,180,0.15); border-radius: 24px; margin-top: 120px; }
.quiz-item { margin-bottom: 30px; }
.quiz-btn { padding: 18px 50px; background: transparent; border: 1px solid #ffb4dc; color: #ffb4dc; border-radius: 50px; cursor: pointer; text-transform: uppercase; letter-spacing: 2px; transition: 0.4s; }
.quiz-btn:hover { background: #ffb4dc; color: #000; box-shadow: 0 0 30px rgba(255,180,220,0.4); }

@media (max-width: 768px) {
    .main { margin-top: 60px; }
    h1 { font-size: 1.8rem !important; }
    #human-simulator { height: 400px; }
    .human-quiz { padding: 40px 20px; }
    .human-constraints { margin-top: 80px; padding: 30px 22px; }
    .constraint-grid { grid-template-columns: 1fr; }
    .definition-dialog__panel { padding: 30px 24px; }
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

<canvas id="articleHumanCanvas"></canvas>

<main class="main">
    <section>
        <h1>La Singularité du Vivant</h1>
        <p class="subtitle">L'Alchimie de la Conscience</p>

        <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
        <p class="article-meta">Publié par <a href="apropos.php">flux-info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Science + Réflexion Éditoriale',
    'time' => '10 min',
    'summary' => 'Le corps humain et les sociétés sont des systèmes ouverts. Ils dépendent de flux de matière, d’énergie, d’alimentation, d’information et de relations qui les relient en permanence à leur environnement.',
    'learn' => ['Voir le corps comme un écosystème ouvert', 'Relier alimentation, sols, eau et organisation sociale', 'Distinguer faits biologiques et réflexion sur la conscience']
]); ?>
        <br><br>
        <span class="thought">Nous ne sommes pas seulement des spectateurs de l'Univers.</span>
        <span class="thought">Nous sommes le point précis où l'Univers commence à se raconter lui-même.</span>
        <span class="thought">Chaque cellule de notre corps est une archive vivante de milliards d'années de chaos et d'organisation.</span>
        <span class="thought">L'aventure humaine commence dans le cœur des étoiles moribondes, là où le carbone a été forgé.</span>

        <div class="human-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/human-bio.webp" alt="Représentation artistique de l'alchimie du vivant et de la structure du carbone" class="human-img">
        </div>

        <h2>I. La Cathédrale de Carbone</h2>
        <br><br>
        <span class="thought">Le Vivant n’abolit pas l’<button type="button" class="glossary-term" data-glossary="entropie">entropie</button>: il maintient localement des formes organisées grâce à des échanges continus de matière et d’énergie.</span>
        <span class="thought">Alors que tout dans le Cosmos tend vers le désordre, la vie, elle, concentre l'information.</span>
        <span class="thought">Elle construit des cathédrales moléculaires d'une complexité qui défie l'entendement.</span>
        <span class="thought">Mais ce qui définit l'humain, c'est ce moment où la biologie a engendré la culture.</span>
        <span class="thought">Nos langues, nos arts et nos mythes sont les véritables organes de notre espèce.</span>

        <h2>II. L'Émergence de la Résonance</h2>
        <br><br>
        <span class="thought">La Conscience n'est pas un objet que l'on peut isoler sous un scalpel.</span>
        <span class="thought">La « résonance » est ici une image: les neurosciences étudient un phénomène dynamique impliquant plusieurs réseaux cérébraux distribués.</span>
        <span class="thought">C'est ici que l'inanimé devient sensible.</span>
        <span class="thought">C'est ici que la matière commence à ressentir la douleur, la joie et l'émerveillement.</span>

        <div class="human-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/human-conscience.webp" alt="Visualisation des réseaux de neurones et de l'émergence de la conscience" class="human-img">
        </div>

        <h2>III. L'Archipel des Destins</h2>
        <br><br>
        <span class="thought">Aujourd'hui, l'humanité fait face à son propre miroir.</span>
        <span class="thought">Nous sommes devenus une force géologique capable de modifier le destin de la Biosphère.</span>
        <span class="thought">Comprendre notre place dans l'Archipel, c'est réaliser que chaque individu est une île reliée aux autres par les courants invisibles de la responsabilité.</span>
        <span class="thought">Le futur se dessine dans notre capacité à préserver l'étincelle de la Vie.</span>
    </section>

    <section class="article-block" id="corps-ecosysteme">
        <h2>Le Corps n’est pas une Île</h2>
        <p>Un organisme humain n’existe jamais seul. Il échange continuellement de la matière et de l’énergie avec son milieu: oxygène, eau, aliments, chaleur, molécules, microorganismes. Même les frontières du corps sont actives: peau, poumons et intestin sont des interfaces où l’extérieur devient en permanence une partie de notre fonctionnement intérieur.</p>
        <p>Cette perspective change la question de la santé. Il ne s’agit plus seulement d’un individu séparé de son environnement, mais d’un organisme dépendant de la qualité de l’air, de l’eau, de l’alimentation, des relations biologiques et des conditions sociales. <strong>La singularité du vivant ne supprime pas l’interdépendance; elle en émerge.</strong></p>
    </section>

    <section class="article-block" id="alimentation">
        <h2>De l’Écosystème à l’Alimentation</h2>
        <p>Aucun repas humain n’apparaît isolément dans une assiette. Derrière lui circulent l’eau, les nutriments du sol, l’énergie solaire captée par les plantes, les microorganismes, les pollinisateurs, le travail humain, le transport et les infrastructures.</p>
        <p><strong>L’alimentation est un flux biosphérique devenu flux social.</strong> Lorsqu’un maillon se fragilise <em>( eau, sol, biodiversité, énergie ou accès )</em> les conséquences peuvent se propager jusqu’à la santé, l’économie et la stabilité des sociétés.</p>
        <p>Les sols illustrent cette dépendance concrète. Ils ne servent pas seulement de support aux cultures: leurs organismes participent au recyclage des nutriments, à la structure du sol et à la régulation de l’eau. De même, la biodiversité agricole et les pollinisateurs contribuent à la résilience de nombreux systèmes alimentaires. Ce qui paraît être un produit final est donc l’aboutissement d’un réseau écologique et technique.</p>
        <nav class="flux-pathway__chain" aria-label="Parcours des sols à la société">
            <a href="article-terre-migrations.php#sols">Sols</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-terre-migrations.php#agriculture">Agriculture</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#alimentation" aria-current="location">Alimentation</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#corps-ecosysteme">Santé</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#societe">Économie</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#societe">Société</a>
        </nav>
    </section>

    <section class="article-block" id="societe">
        <h2>IV. L’Organisation n’abolit pas le Réel</h2>
        <p>Une cellule, un organisme ou une société ne sont pas des îlots soustraits aux lois physiques. Ils persistent parce qu’ils échangent, transforment et régulent. Le vivant maintient des équilibres dynamiques - une <button type="button" class="glossary-term" data-glossary="homeostasie">homéostasie</button> - plutôt qu’un ordre immobile.</p>
        <p>Cette organisation est précieuse parce qu’elle dépend de conditions concrètes: énergie disponible, eau, sols, diversité des relations biologiques et qualité des milieux. Comprendre le vivant, ce n’est donc pas le séparer de son environnement, mais suivre les liens qui rendent sa continuité possible.</p>
        <p>Une société possède elle aussi un métabolisme matériel. Elle importe de l’énergie et des ressources, transforme des matières, entretient des réseaux, produit des déchets et redistribue de l’information. Plus ces chaînes deviennent longues et spécialisées, plus leur efficacité peut augmenter - mais certaines dépendances peuvent également devenir moins visibles.</p>
        <p>La technologie change donc la puissance et la vitesse des échanges sans abolir leurs supports physiques. Une ville dépend toujours de bassins versants, de sols agricoles, de réseaux énergétiques, de chaînes de transport et d’écosystèmes situés parfois très loin d’elle.</p>
    </section>

    <section class="article-block">
        <h2>V. Ce que la Science Cherche encore</h2>
        <p>Dire que la conscience <button type="button" class="glossary-term" data-glossary="emergence">émerge</button> de réseaux organisés ne clôt pas la question: cela décrit un problème de recherche plus qu’une explication définitive. Les neurosciences confrontent plusieurs modèles, étudient les relations entre éveil, accès conscient, attention, mémoire et communications entre régions cérébrales.</p>
        <p>Le cerveau n’est pas figé. Sa <button type="button" class="glossary-term" data-glossary="neuroplasticite">neuroplasticité</button> permet à certaines connexions et certains réseaux de se modifier avec le développement, l’apprentissage ou après une lésion. Cette capacité n’autorise pas toutes les promesses ; elle rappelle surtout que l’expérience s’inscrit matériellement dans des organismes vulnérables et relationnels.</p>
    </section>

  <?php renderFluxConnections('humanite'); ?>

    <section class="flux-pathway" aria-labelledby="humanite-flux-title">
        <p class="flux-pathway__eyebrow">Continuer le Flux</p>
        <h2 id="humanite-flux-title">Des Besoins Humains aux Relations</h2>
        <p>Une société transforme les flux du vivant en nourriture, énergie, habitat, connaissances et institutions. L’étape suivante consiste à relier ces conséquences sans les isoler.</p>
        <div class="flux-pathway__chain">
            <a href="article-terre-migrations.php#agriculture">Terre · sols et agriculture</a>
            <span class="flux-pathway__arrow">→</span>
            <a href="#societe" aria-current="location">Humanité · vous êtes ici</a>
            <span class="flux-pathway__arrow">→</span>
            <a href="article-archipel-conscience.php#signal-habitat">Archipel · relier les conséquences</a>
        </div>
        <a class="flux-pathway__next" href="article-archipel-conscience.php#signal-habitat">Continuer vers la pensée archipélique →</a>
    </section>

    <section class="human-constraints" aria-labelledby="human-constraints-title">
        <p class="human-constraints__eyebrow">Prolonger la lecture</p>
        <h3 id="human-constraints-title">Les Contraintes qui rendent le Vivant Possible</h3>
        <p>Ces liens prolongent l’article vers <strong>AGIBIOSPHERIC</strong>, l’un des autres sites de notre Archipel: la même attention aux dépendances matérielles du vivant, de la mémoire et des sociétés humaines.</p>
        <div class="constraint-grid">
            <a class="constraint-card" href="https://www.agibiospheric.net/vivant.html" target="_blank" rel="noopener noreferrer"><strong>Vivant et organisation</strong><span>Les organismes existent par des interactions multiples, non comme des unités isolées.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/energie.html" target="_blank" rel="noopener noreferrer"><strong>Énergie et dissipation</strong><span>Toute organisation biologique dépend de flux énergétiques et de transformations irréversibles.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/information.html" target="_blank" rel="noopener noreferrer"><strong>Information et mémoire</strong><span>Signaux, mémoire et décision s’inscrivent dans des supports matériels et des relations.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/biodiversite.html" target="_blank" rel="noopener noreferrer"><strong>Biodiversité et responsabilité</strong><span>Les sociétés humaines dépendent d’une diversité du vivant qu’elles peuvent aussi fragiliser.</span></a>
        </div>
    </section>

    <div class="article-experience-lead">
        <p class="article-experience-lead__kicker">Expérience interactive</p>
        <h3>Bio-Synchronisation</h3>
        <p>Émettez un signal dans le réseau et observez comment une perturbation locale peut se propager vers un état collectif.</p>
        <div class="experience-action"><strong>Geste</strong><span>Cliquer dans le réseau pour émettre une onde</span></div>
    </div>

    <div id="human-simulator">
        <div class="sim-overlay" style="position: absolute; top: 25px; width: 100%; text-align: center; color: #ffb4dc; letter-spacing: 2px; font-size: 0.8rem; z-index: 5; pointer-events: none;">Bio-Synchronisation: Cliquez pour émettre une onde de Conscience</div>
        <canvas id="resCanvas"></canvas>
        <div id="fusion-success">
            <span style="font-size: 0.8rem; letter-spacing: 5px; opacity: 0.7; text-transform: uppercase;">Résonance établie</span>
            <span style="font-size: 2.2rem; font-weight: 100; color: #ffb4dc; text-shadow: 0 0 20px rgba(255,180,220,0.5);">Harmonie Collective</span>
            <span style="margin-top: 15px; font-style: italic; opacity: 0.8;">La pensée se synchronise</span>
        </div>
    </div>
<aside class="sim-consequences sim-consequences--inline" id="human-live-consequences" style="--sim-accent:#ffb4dc" aria-live="polite">
                <div class="sim-consequences__head">
                    <div>
                        <p class="sim-consequences__kicker">Une onde ne reste jamais isolée</p>
                        <p class="sim-consequences__status" id="human-live-status">Cliquez dans le réseau: un signal local peut toucher plusieurs nœuds et modifier l’état collectif.</p>
                    </div>
                    <div class="sim-consequences__meter" id="human-live-meter">0 / 12 nœuds reliés</div>
                </div>
                <nav class="sim-consequences__chain" aria-label="Propagation d'un signal dans un système humain">
                    <a class="is-active is-current" data-human-step="1" href="#human-simulator">Signal</a><span class="sim-consequences__arrow">→</span>
                    <a data-human-step="2" href="#corps-ecosysteme">Individus</a><span class="sim-consequences__arrow">→</span>
                    <a data-human-step="3" href="#societe">Réseau</a><span class="sim-consequences__arrow">→</span>
                    <a data-human-step="4" href="#societe">Coordination</a><span class="sim-consequences__arrow">→</span>
                    <a data-human-step="5" href="article-archipel-conscience.php#signal-habitat">Archipel</a>
                </nav>
            </aside>
<div class="article-knowledge-bridge">
        <p class="article-knowledge-bridge__kicker">Après la propagation</p>
        <h3>Passer du Signal à la Compréhension</h3>
        <p>Le quiz relie organisation du vivant, langage, conscience et responsabilité collective.</p>
    </div>
<section class="human-quiz">
        <h3 style="text-align:center; color:#ffb4dc; margin-bottom:50px; text-transform:uppercase; letter-spacing:3px;">Test de Résonance</h3>
        <div id="quiz-container">
            <div class="quiz-item">
                <p>1. Comment le vivant maintient-il son organisation ?</p>
                <label><input type="radio" name="q1" value="1"> Par des échanges et des régulations de matière et d'énergie</label><br>
                <label><input type="radio" name="q1" value="0"> Elle accélère le désordre atomique</label>
            </div>
            <div class="quiz-item">
                <p>2. Quel "organe" est considéré comme propre à l'humain dans ce texte ?</p>
                <label><input type="radio" name="q2" value="0"> Le cortex visuel</label><br>
                <label><input type="radio" name="q2" value="1"> Les langues, les arts et les mythes</label>
            </div>
            <div class="quiz-item">
                <p>3. Comment les neurosciences abordent-elles la conscience ?</p>
                <label><input type="radio" name="q3" value="1"> Comme un phénomène dynamique impliquant plusieurs réseaux cérébraux</label><br>
                <label><input type="radio" name="q3" value="0"> Un muscle situé derrière le lobe frontal</label>
            </div>
            <div class="quiz-item">
                <p>4. Que représente la métaphore de l'Archipel ?</p>
                <label><input type="radio" name="q4" value="1"> Des individus reliés par la responsabilité</label><br>
                <label><input type="radio" name="q4" value="0"> Des îles totalement isolées les unes des autres</label>
            </div>
        </div>
        <div style="text-align:center; margin-top:50px;">
            <button class="quiz-btn" onclick="checkQuiz()">Soumettre l'analyse</button>
            <div id="quiz-result" style="margin-top:25px; font-weight:bold; min-height:24px;"></div>
        </div>
    </section>

    <section class="sources-module">
        <h3>Sources & Références</h3>
        <p class="sources-note"><strong>Comment lire ces références.</strong> Les cartes indiquent l’institution ou la publication consultée ; elles servent à distinguer les résultats documentés des interprétations proposées dans le récit. <time datetime="2026-08-28">Vérifiées le 28 août 2026.</time></p>
        <div class="sources-grid">
            <a href="https://www.fao.org/land-water/soils/overview/fr" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>FAO - Sols, Eau et Alimentation</h4>
                <p>Rôle des sols dans la production alimentaire, la régulation de l’eau, la biodiversité et les services écosystémiques.</p>
            </a>
            <a href="https://www.nature.com" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Nature Neuroscience</h4>
                <p>Études sur l'émergence de la Conscience et les réseaux de résonance neuronale.</p>
            </a>
            <a href="https://www.inserm.fr" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>INSERM</h4>
                <p>Recherches sur la complexité biologique et la lutte contre l'entropie cellulaire.</p>
            </a>
            <a href="https://www.college-de-france.fr" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Collège de France</h4>
                <p>Cours sur l'évolution des symboles et la naissance de la culture humaine.</p>
            </a>
            <a href="https://lejournal.cnrs.fr/articles/les-nouvelles-frontieres-du-vivant" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>CNRS - Frontières du Vivant</h4>
                <p>Interactions, systèmes complexes et recherche contemporaine sur les organismes et leurs environnements.</p>
            </a>
            <a href="https://presse.inserm.fr/restaurer-la-conscience-grace-a-une-stimulation-profonde-du-cerveau/44985/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Inserm - Conscience</h4>
                <p>Conscience comme processus dynamique coordonnant différentes régions du cerveau.</p>
            </a>
            <a href="https://parisbraininstitute.org/brain-function-cards/consciousness" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Paris Brain Institute</h4>
                <p>Modèles de la conscience, réseaux distribués et questions toujours ouvertes.</p>
            </a>
        </div>
    </section>

    <a href="humanite.php" style="display:inline-block; margin-top:60px; color:#ffb4dc; text-decoration:none; font-weight: bold;">← Retour au portail Humanité</a>
</main>

<div class="definition-dialog" id="definition-dialog" role="dialog" aria-modal="true" aria-labelledby="definition-title" aria-hidden="true">
    <div class="definition-dialog__panel">
        <button type="button" class="definition-dialog__close" id="definition-close" aria-label="Fermer la définition">×</button>
        <h3 id="definition-title"></h3>
        <p id="definition-text"></p>
        <a id="definition-link" href="#" target="_blank" rel="noopener noreferrer">Approfondir sur Wikipédia <span aria-hidden="true">↗</span></a>
    </div>
</div>

<script>
/* Glossaire au clic: les définitions s’ouvrent sans quitter le récit. */
(function() {
    const definitions = {
        entropie: { title: 'Entropie', text: 'Grandeur de la thermodynamique qui décrit notamment la dispersion de l’énergie et les configurations possibles d’un système.', url: 'https://fr.wikipedia.org/wiki/Entropie' },
        homeostasie: { title: 'Homéostasie', text: 'Ensemble de régulations par lesquelles un organisme maintient des variables internes dans une plage compatible avec sa viabilité.', url: 'https://fr.wikipedia.org/wiki/Hom%C3%A9ostasie' },
        emergence: { title: 'Émergence', text: 'Notion décrivant l’apparition de propriétés d’ensemble qui ne se lisent pas directement dans chaque composant pris isolément.', url: 'https://fr.wikipedia.org/wiki/%C3%89mergence' },
        neuroplasticite: { title: 'Neuroplasticité', text: 'Capacité du cerveau à modifier ou réorganiser certaines connexions et réseaux au cours du développement, de l’apprentissage ou après une lésion.', url: 'https://fr.wikipedia.org/wiki/Neuroplasticit%C3%A9' }
    };
    const dialog = document.getElementById('definition-dialog');
    const title = document.getElementById('definition-title');
    const text = document.getElementById('definition-text');
    const link = document.getElementById('definition-link');
    const close = document.getElementById('definition-close');
    let trigger = null;
    function closeDialog() { dialog.classList.remove('is-open'); dialog.setAttribute('aria-hidden', 'true'); if (trigger) trigger.focus(); }
    document.querySelectorAll('.glossary-term').forEach(button => button.addEventListener('click', () => {
        const definition = definitions[button.dataset.glossary];
        if (!definition) return;
        trigger = button; title.textContent = definition.title; text.textContent = definition.text; link.href = definition.url;
        dialog.classList.add('is-open'); dialog.setAttribute('aria-hidden', 'false'); close.focus();
    }));
    close.addEventListener('click', closeDialog);
    dialog.addEventListener('click', event => { if (event.target === dialog) closeDialog(); });
    document.addEventListener('keydown', event => { if (event.key === 'Escape' && dialog.classList.contains('is-open')) closeDialog(); });
})();

/* 1. PARTICULES DE FOND */
(function() {
    const canvas = document.getElementById('articleHumanCanvas');
    const ctx = canvas.getContext('2d');
    let dots = [];
    function resize() { canvas.width = window.innerWidth; canvas.height = window.innerHeight; }
    window.addEventListener('resize', resize); resize();
    for(let i=0; i<70; i++){ dots.push({ x: Math.random()*canvas.width, y: Math.random()*canvas.height, vx: (Math.random()-0.5)*0.5, vy: (Math.random()-0.5)*0.5, r: Math.random()*1.5 }); }
    function draw() {
        ctx.clearRect(0,0,canvas.width,canvas.height);
        dots.forEach((d, i) => {
            d.x += d.vx; d.y += d.vy;
            if(d.x<0 || d.x>canvas.width) d.vx*=-1; if(d.y<0 || d.y>canvas.height) d.vy*=-1;
            ctx.beginPath(); ctx.arc(d.x, d.y, d.r, 0, Math.PI*2); ctx.fillStyle = "rgba(255, 180, 220, 0.4)"; ctx.fill();
            for(let j=i+1; j<dots.length; j++) {
                let dist = Math.hypot(d.x - dots[j].x, d.y - dots[j].y);
                if(dist < 120) {
                    ctx.strokeStyle = `rgba(255, 180, 220, ${0.1 * (1 - dist/120)})`;
                    ctx.beginPath(); ctx.moveTo(d.x, d.y); ctx.lineTo(dots[j].x, dots[j].y); ctx.stroke();
                }
            }
        });
        requestAnimationFrame(draw);
    }
    draw();
})();

/* 2. SIMULATEUR RESONANCIA */
(function() {
    const rCanvas = document.getElementById('resCanvas');
    const rCtx = rCanvas.getContext('2d');
    const sSuccess = document.getElementById('fusion-success');
    let nodes = [], pulses = [], score = 0;

    function init() {
        rCanvas.width = rCanvas.offsetWidth; rCanvas.height = rCanvas.offsetHeight;
        nodes = Array.from({length: 12}, () => ({
            x: Math.random()*rCanvas.width, y: Math.random()*rCanvas.height, 
            active: false, vx: (Math.random()-0.5)*0.6, vy: (Math.random()-0.5)*0.6
        }));
        score = 0;
        const meter = document.getElementById('human-live-meter');
        const status = document.getElementById('human-live-status');
        if (meter) meter.textContent = `0 / ${nodes.length} nœuds reliés`;
        if (status) status.textContent = 'Cliquez dans le réseau: un signal local peut toucher plusieurs nœuds et modifier l’état collectif.';
        document.querySelectorAll('[data-human-step]').forEach((step, index) => step.classList.toggle('is-active', index === 0));
    }
    window.addEventListener('resize', init); setTimeout(init, 300);

    rCanvas.addEventListener('pointerdown', (e) => {
        const rect = rCanvas.getBoundingClientRect();
        pulses.push({ x: e.clientX - rect.left, y: e.clientY - rect.top, r: 0, alpha: 1 });
    });

    function run() {
        rCtx.fillStyle = 'rgba(5, 0, 5, 0.3)'; rCtx.fillRect(0,0,rCanvas.width, rCanvas.height);
        pulses.forEach((p, pi) => {
            p.r += 4; p.alpha -= 0.01;
            rCtx.strokeStyle = `rgba(255, 180, 220, ${p.alpha})`;
            rCtx.lineWidth = 2;
            rCtx.beginPath(); rCtx.arc(p.x, p.y, p.r, 0, Math.PI*2); rCtx.stroke();
            nodes.forEach(n => {
                let d = Math.hypot(p.x - n.x, p.y - n.y);
                if(Math.abs(d - p.r) < 10 && !n.active) {
                    n.active = true; score++;
                    const meter = document.getElementById('human-live-meter');
                    const status = document.getElementById('human-live-status');
                    const steps = document.querySelectorAll('[data-human-step]');
                    meter.textContent = `${score} / ${nodes.length} nœuds reliés`;
                    const ratio = nodes.length ? score / nodes.length : 0;
                    const level = ratio >= .9 ? 5 : ratio >= .6 ? 4 : ratio >= .3 ? 3 : 2;
                    steps.forEach((step, index) => step.classList.toggle('is-active', index < level));
                    status.textContent = ratio >= .9
                        ? 'Le signal a traversé presque tout le réseau: une dynamique collective émerge des relations entre les nœuds.'
                        : ratio >= .6
                        ? 'Le signal devient collectif: plusieurs nœuds réagissent et la structure du réseau commence à compter autant que chaque individu.'
                        : ratio >= .3
                        ? 'L’onde se propage: une action locale touche déjà plusieurs individus reliés.'
                        : 'Le signal quitte son point d’origine et commence à rencontrer le réseau.';
                }
            });
            if(p.alpha <= 0) pulses.splice(pi, 1);
        });
        nodes.forEach(n => {
            n.x += n.vx; n.y += n.vy;
            if(n.x<0 || n.x>rCanvas.width) n.vx*=-1; if(n.y<0 || n.y>rCanvas.height) n.vy*=-1;
            rCtx.fillStyle = n.active ? '#fff': 'rgba(255, 180, 220, 0.2)';
            rCtx.beginPath(); rCtx.arc(n.x, n.y, 6, 0, Math.PI*2); rCtx.fill();
        });
        if(score >= nodes.length && nodes.length > 0) {
            sSuccess.style.display = 'flex';
            setTimeout(() => { sSuccess.style.display = 'none'; score = 0; init(); }, 4000);
        }
        requestAnimationFrame(run);
    }
    run();
})();

/* 3. LOGIQUE QUIZ */
function checkQuiz() {
    let s = 0;
    if(document.querySelector('input[name="q1"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q2"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q3"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q4"]:checked')?.value === "1") s++;
    const r = document.getElementById('quiz-result');
    r.innerHTML = `Niveau de résonance: ${s} / 4. ${s === 4 ? 'Parfait, votre conscience est alignée.': 'Certaines ondes sont encore divergentes.'}`;
    r.style.color = s === 4 ? '#ffb4dc': '#fff';
}
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
