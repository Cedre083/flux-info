<?php
// Force la désactivation du cache au niveau PHP
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Courants Profonds de l’Océan | Circulation Thermohaline | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Comprendre la circulation thermohaline, les courants profonds, leur rôle climatique et leurs liens avec le vivant marin.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* ============================================= */
/* DESIGN OCÉAN - IMMERSION & LISIBILITÉ 23PX    */
/* ============================================= */

body {
    /* Identité visuelle préservée */
    background: radial-gradient(circle at 20% 0%, #06253a 0, #020b12 45%, #00060b 100%);
}

/* On laisse le header.php universel gérer la navigation haute */

#oceanCanvas, #oceanCurrents, #ocean-waves { position: fixed; inset: 0; pointer-events: none; }
#oceanCanvas { z-index: 1; pointer-events: auto; }
#oceanCurrents { z-index: 2; }
#ocean-waves { z-index: 3; opacity: 0.35; }

.ocean-halo {
    position: fixed; inset: 0; z-index: 4; pointer-events: none;
    background: radial-gradient(circle at 50% 15%, rgba(90,160,210,0.35), transparent 65%),
                radial-gradient(circle at 10% 80%, rgba(20,80,120,0.25), transparent 70%);
    mix-blend-mode: screen; animation: haloDrift 18s ease-in-out infinite;
}
@keyframes haloDrift { 0%, 100% { transform: scale(1); opacity: 0.45; } 50% { transform: scale(1.04); opacity: 0.7; } }

.ocean-depth { position: fixed; inset: 40% 0 0 0; background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.75)); z-index: 5; pointer-events: none; }

/* ============================================= */
/* CONTENU ET TYPOGRAPHIE (Héritage 23px)        */
/* ============================================= */
.main { 
    position: relative; 
    z-index: 10; 
    max-width: 950px; /* Élargi pour le confort des 23px */
    margin: 100px auto; 
    padding: 0 24px 80px; 
}

/* Le H1 hérite du weight 200 du header */
h1 {
    text-shadow: 0 0 18px rgba(120,180,255,0.6);
    animation: titleIn 1.2s ease forwards 0.2s;
    margin-bottom: 10px;
}
@keyframes titleIn { 
    from { opacity: 0; transform: translateY(12px); filter: blur(6px); }
    to { opacity: 1; transform: translateY(0); filter: blur(0); } 
}

.subtitle { 
    text-align: center; 
    font-size: 0.9rem; /* Plus fin */
    opacity: 0.6; 
    margin-bottom: 80px; 
    letter-spacing: 0.3em; 
    text-transform: uppercase; 
    animation: titleIn 1.1s ease forwards 0.4s; 
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
}
.article-meta a { color: inherit; text-decoration: underline; }

.article-block { 
    margin: 0;
    animation: titleIn 1.1s ease forwards; 
}
.article-block:nth-of-type(1) { animation-delay: 0.6s; }
.article-block:nth-of-type(2) { animation-delay: 0.85s; }

/* Le H2 hérite du weight 300 du header */
h2 { 
    margin: 120px 0 60px; 
    color: #bfeaff; 
    text-shadow: 0 0 10px rgba(120,180,255,0.4); 
}

/* Le P hérite des 23px du header */
p { 
    margin-bottom: 2rem; 
    line-height: 1.8;
    white-space: pre-line; 
}

/* IMAGES: 80% (mieux équilibré avec le texte large) */
.ocean-img-block { margin: 80px 0; text-align: center; }
.ocean-img-block img {
    max-width: 80%; 
    height: auto; 
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    filter: brightness(0.9) saturate(1.1);
}
.ocean-img-block img:hover { 
    transform: scale(1.02); 
    filter: brightness(1.05) saturate(1.2); 
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
}

.highlight { 
    border-left: 1px solid rgba(120,180,255,0.6); 
    padding-left: 25px; 
    margin: 60px 0; 
    font-size: 1.4rem; /* Un peu plus grand que le texte de base */
    font-weight: 300;
    opacity: 0.85; 
    font-style: italic;
}

/* MODULES INTERACTIFS */
.ocean-sim, .ocean-quiz, #thermo-module { 
    background: rgba(0, 40, 70, 0.2); 
    padding: 50px; 
    border-radius: 20px; 
    margin: 120px 0; 
    backdrop-filter: blur(10px); 
    border: 1px solid rgba(255,255,255,0.08); 
}

.quiz-question { margin-bottom: 30px; padding-bottom: 25px; border-bottom: 1px solid rgba(255,255,255,0.05); }

.ocean-sim label { 
    display: block; 
    margin-bottom: 15px; 
    font-weight: 300; 
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 0.9rem;
}

.ocean-sim input[type="range"] { 
    width: 100%; 
    accent-color: #7ecbff;
    cursor: pointer;
}

/* ============================================= */
    /* MODULE SOURCES - NETTOYAGE & ÉLÉGANCE         */
    /* ============================================= */
    
    .sources-module { 
        margin-top: 150px;
        padding-top: 60px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .sources-module h3 { 
        color: #ffffff; 
        text-transform: uppercase; 
        margin-bottom: 50px; 
        font-weight: 100; /* Extra fin */
        letter-spacing: 6px; 
        font-size: 1.3rem;
        text-align: center;
        opacity: 0.8;
    }

    .sources-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 30px; 
    }

    /* La carte devient un lien sans décoration */
    .source-card { 
        text-decoration: none !important; /* SUPPRIME LE SOULIGNEMENT */
        background: rgba(255, 255, 255, 0.02); 
        padding: 35px; 
        border-radius: 20px; 
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        display: flex;
        flex-direction: column;
        color: inherit; /* Empêche le bleu par défaut sur les liens */
    }

    /* Effet d'illumination au survol */
    .source-card:hover { 
        background: rgba(200, 160, 255, 0.04); 
        transform: translateY(-8px); 
        border-color: rgba(200, 160, 255, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    }

    .source-card h4 { 
        margin: 0 0 15px 0; 
        color: #ffffff; 
        font-weight: 400; 
        font-size: 1.1rem;
        letter-spacing: 1px;
        text-decoration: none !important; /* Sécurité anti-soulignement */
    }

    /* Le titre s'illumine au survol de la carte */
    .source-card:hover h4 {
        color: #c8a0ff;
        text-shadow: 0 0 15px rgba(200, 160, 255, 0.5);
    }

    .source-card p { 
        font-size: 0.95rem; 
        font-weight: 300;
        color: #f3eaff;
        opacity: 0.6; 
        margin: 0; 
        line-height: 1.6; 
        text-decoration: none !important;
    }

    /* Petit indicateur de lien sortant */
    .source-card::after {
        content: "→";
        margin-top: 20px;
        font-size: 1.2rem;
        color: #c8a0ff;
        opacity: 0;
        transition: 0.4s;
        transform: translateX(-10px);
    }

    .source-card:hover::after {
        opacity: 1;
        transform: translateX(0);
    }

    /* CONTRAINTES AGIBIOSPHERIC & DEFINITIONS AU CLIC */
    .ocean-glossary-term {
        appearance: none;
        display: inline;
        padding: 0;
        color: #bfeaff;
        background: transparent;
        border: 0;
        border-bottom: 1px dashed rgba(126, 203, 255, 0.75);
        font: inherit;
        cursor: pointer;
        transition: color 0.2s ease, border-color 0.2s ease;
    }
    .ocean-glossary-term:hover, .ocean-glossary-term:focus-visible { color: #ffffff; border-bottom-color: #ffffff; outline: none; }
    .ocean-constraints {
        margin: 120px 0 86px;
        padding: 48px;
        background: linear-gradient(145deg, rgba(126, 203, 255, 0.1), rgba(12, 78, 116, 0.12));
        border: 1px solid rgba(126, 203, 255, 0.3);
        border-radius: 24px;
    }
    .ocean-constraints h2 { margin: 0 0 18px; }
    .ocean-constraints > p { max-width: 720px; margin: 0 0 34px; color: #dcecf6; }
    .ocean-constraints-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
    .ocean-constraint-card {
        display: block;
        min-height: 145px;
        padding: 26px;
        color: #dcecf6;
        text-decoration: none;
        background: rgba(1, 18, 31, 0.48);
        border: 1px solid rgba(255, 255, 255, 0.09);
        border-radius: 16px;
        transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }
    .ocean-constraint-card:hover, .ocean-constraint-card:focus-visible {
        transform: translateY(-4px);
        background: rgba(126, 203, 255, 0.12);
        border-color: rgba(126, 203, 255, 0.7);
        outline: none;
    }
    .ocean-constraint-card span { color: #7ecbff; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.18em; }
    .ocean-constraint-card h3 { margin: 10px 0 9px; color: #ffffff; font-size: 1.12rem; font-weight: 400; }
    .ocean-constraint-card p { margin: 0; color: #cbd5e1; font-size: 0.92rem; line-height: 1.55; }
    .ocean-glossary-dialog {
        width: min(500px, calc(100vw - 44px));
        padding: 0;
        color: #e7f5ff;
        background: #041624;
        border: 1px solid rgba(126, 203, 255, 0.55);
        border-radius: 18px;
        box-shadow: 0 28px 90px rgba(0, 0, 0, 0.72);
    }
    .ocean-glossary-dialog::backdrop { background: rgba(0, 4, 12, 0.72); backdrop-filter: blur(4px); }
    .ocean-glossary-dialog-content { padding: 32px; }
    .ocean-glossary-dialog h3 { margin: 0 0 16px; color: #bfeaff; font-size: 1.35rem; font-weight: 400; }
    .ocean-glossary-dialog p { margin: 0 0 22px; color: #d5e1ed; font-size: 1rem; line-height: 1.65; }
    .ocean-glossary-dialog-actions { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; }
    .ocean-glossary-dialog-actions a, .ocean-glossary-dialog-actions button {
        padding: 10px 16px;
        color: #041624;
        background: #7ecbff;
        border: 0;
        border-radius: 999px;
        font: inherit;
        font-size: 0.84rem;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
    }
    .ocean-glossary-dialog-actions button { color: #d8ebf6; background: rgba(255, 255, 255, 0.1); }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .sources-module { margin-top: 100px; }
        .sources-grid { grid-template-columns: 1fr; }
        .source-card { padding: 25px; }
        .ocean-constraints { margin: 68px 0; padding: 30px 22px; }
        .ocean-constraints-grid { grid-template-columns: 1fr; }
        .ocean-constraint-card { min-height: 0; }
        .ocean-glossary-dialog-content { padding: 25px; }
    }

/* MOBILE */
@media (max-width: 600px) {
    .main { margin-top: 60px; padding-bottom: 40px; }
    h1 { font-size: 1.8rem; }
    .ocean-img-block img { max-width: 100%; }
    .ocean-sim, .ocean-quiz, #thermo-module { padding: 30px 20px; }
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


#simu-output .ocean-sim-explain{opacity:.76;font-size:.86rem;margin-top:10px}
#simu-output .ocean-output-flow{margin-top:14px;gap:5px}
#simu-output .ocean-output-flow a{min-height:29px;padding:4px 9px;font-size:.68rem}
</style>
</head>

<body>
<?= $headerNavigation ?>

<canvas id="oceanCanvas"></canvas>
<canvas id="oceanCurrents"></canvas>
<canvas id="ocean-waves"></canvas>
<div class="ocean-halo"></div>
<div class="ocean-depth"></div>

<main class="main">

  <h1>Les Courants Profonds de l’Océan</h1>
  <p class="subtitle">Circulation Thermohaline, Mémoire du Climat, Respiration du Vivant</p>
  
  <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
  <p class="article-meta">Publié par <a href="apropos.php">flux-info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Vulgarisation Sourcée',
    'time' => '8 min',
    'summary' => 'Les courants profonds déplacent chaleur, sel et nutriments à l’échelle planétaire. Leur fonctionnement dépend notamment des contrastes de température et de salinité, et leurs variations relient directement l’océan au climat et au vivant.',
    'learn' => ['Comprendre le rôle de la circulation thermohaline', 'Relier chaleur océanique, atmosphère et écosystèmes', 'Manipuler des paramètres puis suivre leurs conséquences']
]); ?>
  <br>

  <section class="article-block">
    <p class="pre-img-text">Sous la surface, loin des vagues et de la lumière, l’océan respire.</p> 
    <p>Des fleuves invisibles transportent chaleur, sel, nutriments et énergie à travers le globe.</p> 
    <p>Ces courants profonds ne se voient pas, mais ils façonnent le climat et nourrissent le Vivant.</p><br>
    <div class="ocean-img-block"><img src="images/courants-profonds.webp" alt="Courants profonds de l'océan - Circulation mondiale"></div><br>
    <p class="highlight">Ce qui semble immobile, vu d’un rivage, est en réalité un immense système de circulation lente, patient, millénaire.</p><br>
  </section>

  <section class="article-block">
    <h2>La Circulation <button type="button" class="ocean-glossary-term" data-ocean-glossary="thermohaline">Thermohaline</button></h2>
    <br><br>
    <p class="pre-img-text">On l’appelle parfois le « tapis roulant » de l’océan.</p>  
    <p>Elle naît d’un équilibre subtil entre la température et la <button type="button" class="ocean-glossary-term" data-ocean-glossary="salinite">salinité</button> de l’eau <a class="source-citation" href="#ref-noaa-ocean" aria-label="Voir la référence NOAA">[1]</a>.</p>  
    <p>L’eau froide et salée devient plus dense, plonge vers les profondeurs <a class="source-citation" href="#ref-noaa-ocean" aria-label="Voir la référence NOAA">[1]</a>.</p> 
    <p>L’eau plus chaude, plus légère, remonte ailleurs <a class="source-citation" href="#ref-noaa-ocean" aria-label="Voir la référence NOAA">[1]</a>.</p><br>
    <div class="ocean-img-block"><img src="images/circulation-thermohaline.webp" alt="Mécanisme de la circulation thermohaline"></div><br>
    <p>Ce mouvement n’est pas uniforme:</p>
    <p>Il pulse, il ondule, il se déforme au gré des saisons, des vents, des glaces qui fondent ou se reforment.</p> 
    <p>C’est une respiration lente, presque organique.</p><br>
    <p class="highlight">Ce mouvement relie les pôles et l’équateur, les surfaces et les abysses, dans une boucle continue qui peut mettre des siècles à se refermer.</p><br>
  </section>

  <!-- SECTION: Assombrissement biologique des océans -->
  <section class="article-block">
    <h2>L’Océan qui s’Assombrit : quand le Phytoplancton change la Couleur des Mers</h2>
    <br><br><br>
    <p class="pre-img-text">Depuis 2025, plusieurs équipes documentent un assombrissement progressif d’une partie des océans <a class="source-citation" href="#ref-darkening" aria-label="Voir la référence Global Change Biology">[2]</a>.</p>
    <p>La turbidité a augmenté sur environ un cinquième des surfaces marines en vingt ans, réduisant la profondeur à laquelle la lumière pénètre <a class="source-citation" href="#ref-darkening" aria-label="Voir la référence Global Change Biology">[2]</a>.</p>
    <p>Dans certaines régions, ce changement est lié à des <button type="button" class="ocean-glossary-term" data-ocean-glossary="upwelling">remontées d’eau (upwellings)</button> enrichies en nutriments, qui favorisent des floraisons de phytoplancton à forte densité pigmentaire ; ailleurs, c’est l’inverse qui s’observe, avec un déclin du phytoplancton lié au réchauffement et à la stratification des eaux <a class="source-citation" href="#ref-decline" aria-label="Voir la référence Science Advances">[3]</a>.</p><br>
    <p>Là où les floraisons dominent, le mécanisme est mieux compris: en modifiant le spectre lumineux sous-marin, le phytoplancton réduit l’<button type="button" class="ocean-glossary-term" data-ocean-glossary="albedo">albédo</button> de la surface.</p>
    <p class="highlight">Moins réfléchissante, l’eau absorbe davantage de rayonnement solaire, un phénomène de « réchauffement biologique » déjà documenté en Arctique <a class="source-citation" href="#ref-albedo" aria-label="Voir la référence PNAS">[4]</a>.</p>
    <p>Certains chercheurs avancent l’hypothèse d’une interaction entre ce mécanisme et les changements de circulation océanique, sans trancher encore sur son ampleur globale <a class="source-citation" href="#ref-darkening" aria-label="Voir la référence Global Change Biology">[2]</a>.</p><br>
    <p>Ce que ces travaux suggèrent, c’est une rétroaction encore mal cartographiée entre matière vivante et énergie: la couleur de l’océan n’est peut-être plus seulement le reflet du climat, elle pourrait aussi commencer à le façonner en retour.</p>
  </section>

  <section class="article-block">
    <h2>Un Équilibre Fragile</h2>
    <br><br>
    <p class="pre-img-text">Le réchauffement climatique, la fonte des glaces, les apports d’eau douce perturbent ces mécanismes anciens.</p>  
    <p>Si la circulation ralentit ou se dérègle, c’est la répartition de la chaleur sur Terre qui change, avec des conséquences profondes sur les saisons, les écosystèmes, les sociétés Humaines.</p><br>
    <div class="ocean-img-block"><img src="images/fonte-des-glaces.webp" alt="Impact de la fonte des glaces sur les courants marins"></div><br>
    <p>Les scientifiques observent déjà des signaux faibles:</p>
    <p>Des ralentissements régionaux, des anomalies thermiques, des modifications dans la densité des masses d'eau.</p><br>
    <p class="highlight">Comprendre ces courants, c’est lire une partie de la mémoire du climat et entrevoir l’avenir de nos océans.</p><br>
  </section>

  <section class="article-block">
    <h2>Un Océan Vivant, Vibrant, Connecté</h2>
    <br><br>
    <p class="pre-img-text">Les courants profonds ne sont pas seulement des flux physiques.</p>
    <p>Ils transportent des nutriments, des micro-organismes, des traces chimiques, des signatures du passé.</p>
    <p>Ils relient les écosystèmes entre eux, nourrissent les abysses, influencent la vie jusque dans les zones les plus reculées.</p><br>
    <div class="ocean-img-block"><img src="images/ocean-vivant.webp" alt="Plancton lumineux et vie dans les abysses"></div><br>
    <p>Dans les profondeurs, le plancton lumineux dérive lentement, porté par ces fleuves invisibles.</p>
    <p>Chaque particule raconte une story:</p>
    <p>Celle d’un océan qui respire, qui se souvient, qui change.</p><br>
    <p class="highlight">Suivre les courants profonds, c’est suivre le fil d’une mémoire planétaire.</p><br>

  </section>

  <?php renderFluxConnections('ocean'); ?>

  <section class="flux-pathway" aria-labelledby="ocean-flux-title">
    <p class="flux-pathway__eyebrow">Continuer le Flux</p>
    <h2 id="ocean-flux-title">De l’Océan vers l’Atmosphère</h2>
    <p>L’océan stocke et redistribue chaleur et eau. Une partie de cette eau rejoint l’atmosphère par évaporation, puis voyage sous forme de vapeur avant de retomber sur les continents.</p>
    <div class="flux-pathway__chain">
      <a href="#ocean-flux-title" aria-current="location">Océan · vous êtes ici</a><span class="flux-pathway__arrow">→</span>
      <a href="article-ciel-vents.php#rivieres-volantes">Ciel · vapeur et précipitations</a><span class="flux-pathway__arrow">→</span>
      <a href="article-terre-migrations.php#sols">Terre · sols et vivant</a>
    </div>
    <a class="flux-pathway__next" href="article-ciel-vents.php#rivieres-volantes">Continuer vers les rivières atmosphériques →</a>
  </section>

  <section class="ocean-constraints" aria-labelledby="ocean-constraints-title">
    <h2 id="ocean-constraints-title">Les Contraintes qui traversent l’Océan</h2>
    <p>Les courants relient l’eau, le climat, le Vivant et les systèmes dont dépendent les sociétés. Ces repères prolongent l’article vers <strong>AGIBIOSPHERIC, l’un des autres sites de notre Archipel</strong>, et ses contraintes du Réel.</p>
    <div class="ocean-constraints-grid">
      <a class="ocean-constraint-card" href="https://www.agibiospheric.net/climat.html" target="_blank" rel="noopener noreferrer"><span>CLIMAT</span><h3>Inertie et Redistribution</h3><p>Les courants transportent la chaleur et inscrivent les changements dans des rythmes souvent lents.</p></a>
      <a class="ocean-constraint-card" href="https://www.agibiospheric.net/eau-douce.html" target="_blank" rel="noopener noreferrer"><span>EAU</span><h3>Fonte, Densité et Seuils</h3><p>Les apports d’eau douce peuvent modifier la densité des masses d’eau et leurs circulations.</p></a>
      <a class="ocean-constraint-card" href="https://www.agibiospheric.net/biodiversite.html" target="_blank" rel="noopener noreferrer"><span>VIVANT</span><h3>Nutriments et Continuités</h3><p>Le plancton et les nutriments font des profondeurs un milieu vivant, relié aux surfaces.</p></a>
      <a class="ocean-constraint-card" href="https://www.agibiospheric.net/infrastructures.html" target="_blank" rel="noopener noreferrer"><span>SYSTÈMES</span><h3>Dépendances et Ruptures</h3><p>Comprendre un courant, c’est aussi suivre des relations matérielles susceptibles de se transformer.</p></a>
    </div>
  </section>

  <div id="thermo-module">
    <div class="article-experience-lead" style="margin-top:0;">
      <p class="article-experience-lead__kicker">Expérience interactive</p>
      <h2 style="text-align:center; margin-top:0; margin-bottom:12px;">Explorer la Circulation</h2>
      <p>Choisissez une zone de l’océan, puis faites varier température, salinité et fonte du Groenland. Le résultat traduit immédiatement l’effet sur la densité et la circulation profonde.</p>
      <div class="experience-action"><strong>Geste</strong><span>Sélectionner une zone, puis déplacer les curseurs</span></div>
    </div>
    <div style="display:flex; justify-content:center; margin-bottom:25px;">
      <canvas id="miniGlobe" width="260" height="260" style="border-radius:50%; background:#02101c; border:1px solid rgba(120,180,255,0.3); box-shadow:0 0 25px rgba(120,180,255,0.35);"></canvas>
    </div>
    <div style="display:flex; gap:20px; flex-wrap:wrap; justify-content:center;">
      <button class="zone-btn" data-zone="atlantique" style="padding:12px 20px; border-radius:8px; border:1px solid rgba(120,180,255,0.4); background:rgba(0,60,100,0.35); color:#d7f1ff; cursor:pointer;">Atlantique Nord</button>
      <button class="zone-btn" data-zone="austral" style="padding:12px 20px; border-radius:8px; border:1px solid rgba(120,180,255,0.4); background:rgba(0,60,100,0.35); color:#d7f1ff; cursor:pointer;">Océan Austral</button>
      <button class="zone-btn" data-zone="pacifique" style="padding:12px 20px; border-radius:8px; border:1px solid rgba(120,180,255,0.4); background:rgba(0,60,100,0.35); color:#d7f1ff; cursor:pointer;">Pacifique profond</button>
    </div>
    <div id="zone-info" style="margin-top:30px; padding:20px; border-radius:10px; background:rgba(0,20,40,0.45); border:1px solid rgba(120,180,255,0.25); min-height:100px;">
      <p style="opacity:0.7;">Sélectionnez une zone pour afficher les courants profonds.</p>
    </div>

    <h3 style="margin-top:40px; text-align:center;">Simulateur : Que se Passe‑t‑il si… ?</h3>
    <div style="margin-top:20px;">
      <label>Température: <span id="val-temp">-2</span>°C</label>
      <input id="tempRange" type="range" min="-2" max="30" value="-2" oninput="updateSimu()">
      <label>Salinité: <span id="val-salt">35</span> g/L</label>
      <input id="saltRange" type="range" min="28" max="40" value="35" oninput="updateSimu()">
      <label style="display:flex; align-items:center; gap:10px; margin-top:10px;"><input id="meltCheck" type="checkbox" onchange="updateSimu()"> Fonte du Groenland</label>
    </div>
    <div id="simu-output" style="margin-top:25px; padding:15px; border-radius:8px; background:rgba(0,20,40,0.45); border:1px solid rgba(120,180,255,0.25);">Ajustez les paramètres.</div>
  </div>

  <div class="article-knowledge-bridge">
    <p class="article-knowledge-bridge__kicker">Après l’expérience</p>
    <h3>Vérifier ce que vous venez d’Observer</h3>
    <p>Le quiz reprend les mécanismes essentiels: densité de l’eau, transport vers les profondeurs et lenteur de la grande circulation.</p>
  </div>
    <div class="ocean-quiz">
      <h3 style="margin-top:0;">Testez vos Connaissances</h3>
      
      <div class="quiz-question">
        <p>1. Qu’est-ce qui fait plonger l’eau vers les profondeurs ?</p>
        <label><input type="radio" name="q1" value="a"> Une eau chaude et peu salée</label><br>
        <label><input type="radio" name="q1" value="b"> Une eau froide et très salée</label>
      </div>

      <div class="quiz-question">
        <p>2. Que transportent principalement ces courants vers les abysses ?</p>
        <label><input type="radio" name="q2" value="a"> De l'oxygène et des nutriments</label><br>
        <label><input type="radio" name="q2" value="b"> Uniquement du sable et des sédiments</label>
      </div>

      <div class="quiz-question">
        <p>3. Combien de temps peut mettre une "boucle" complète du tapis roulant ?</p>
        <label><input type="radio" name="q3" value="a"> Quelques semaines</label><br>
        <label><input type="radio" name="q3" value="b"> Jusqu'à 1 000 ans</label>
      </div>

      <button type="button" onclick="checkOceanQuiz()">Valider mes réponses</button>
      <div id="quiz-result" class="ocean-quiz-result"></div>
    </div>

<div class="sources-module">
      <h3>Sources Scientifiques</h3>
      <p class="sources-note"><strong>Comment lire ces références.</strong> Les publications et rapports sont indiqués lorsqu’ils étayent une affirmation précise ; les organismes publics servent de repères institutionnels et de portails de données. <time datetime="2026-08-28">Liens vérifiés le 28 août 2026.</time></p>
      <div class="sources-grid">
        <a class="source-card" href="https://bg.copernicus.org/articles/23/1859/2026/" target="_blank" rel="noopener noreferrer"><h4>Biogeosciences</h4><p>Lumière et mélange vertical (Atlantique Sud-Ouest, 2026).</p></a>
        <a class="source-card" href="https://pure.iiasa.ac.at/id/eprint/21267/1/ten-new-insights-in-climate-science-2025.pdf" target="_blank" rel="noopener noreferrer"><h4>IIASA</h4><p>10 New Insights in Climate Science 2025.</p></a>
        <a class="source-card" href="https://pmc.ncbi.nlm.nih.gov/articles/PMC12789851/" target="_blank" rel="noopener noreferrer"><h4>PMC / Nature</h4><p>Phytoplancton et variabilité du spectre lumineux.</p></a>
        <a class="source-card" href="https://pmc.ncbi.nlm.nih.gov/articles/PMC12796512/" target="_blank" rel="noopener noreferrer"><h4>PMC / Science</h4><p>Plancton protiste et remontées d'eau (Humboldt).</p></a>
        <a class="source-card" href="https://www.ifremer.fr" target="_blank" rel="noopener noreferrer"><h4>IFREMER</h4><p>Données sur la thermohaline.</p></a>
        <a id="ref-noaa-ocean" class="source-card" href="https://oceanservice.noaa.gov/education/tutorial_currents/05conveyor1.html" target="_blank" rel="noopener noreferrer"><h4>NOAA - Thermohaline Circulation</h4><p>Explication institutionnelle du rôle de la température et de la salinité dans les courants profonds.</p></a>
        <a id="ref-darkening" class="source-card" href="https://pmc.ncbi.nlm.nih.gov/articles/PMC12107402/" target="_blank" rel="noopener noreferrer"><h4>Global Change Biology / PMC</h4><p>Davies & Smyth (2025), assombrissement de 21% des océans en 20 ans.</p></a>
        <a id="ref-decline" class="source-card" href="https://www.science.org/doi/10.1126/sciadv.adx4857" target="_blank" rel="noopener noreferrer"><h4>Science Advances</h4><p>Déclin du phytoplancton dans les basses et moyennes latitudes.</p></a>
        <a id="ref-albedo" class="source-card" href="https://www.pnas.org/doi/10.1073/pnas.1416884112" target="_blank" rel="noopener noreferrer"><h4>PNAS</h4><p>Mécanisme albédo-phytoplancton-réchauffement, documenté en Arctique.</p></a>
      </div>
  </div>

  <a href="ocean.php" style="display:inline-block; margin-top:40px; color:#7ecbff; text-decoration:none;">← Retour à “Comprendre l’Océan”</a>

</main>

<dialog class="ocean-glossary-dialog" id="ocean-glossary-dialog" aria-labelledby="ocean-glossary-title">
  <div class="ocean-glossary-dialog-content">
    <h3 id="ocean-glossary-title"></h3>
    <p id="ocean-glossary-definition"></p>
    <div class="ocean-glossary-dialog-actions">
      <a id="ocean-glossary-link" href="#" target="_blank" rel="noopener noreferrer">Approfondir sur Wikipédia</a>
      <button type="button" id="ocean-glossary-close">Fermer</button>
    </div>
  </div>
</dialog>

<script>
/* PARTICULES ET COURANTS (Identique) */
const canvas = document.getElementById('oceanCanvas');
const ctx = canvas.getContext('2d');
let w, h;
function resize() { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; }
resize(); window.onresize = resize;
const parts = Array.from({length:140}, () => ({ x: Math.random()*w, y: Math.random()*h, r: 0.6+Math.random()*2.2, sx: 0.1+Math.random()*0.4, sy: -0.05+Math.random()*0.1, a: 0.15+Math.random()*0.4 }));
function draw() {
  ctx.clearRect(0,0,w,h);
  ctx.fillStyle='rgba(0,10,20,0.9)'; ctx.fillRect(0,0,w,h);
  parts.forEach(p => {
    ctx.fillStyle=`rgba(170,210,255,${p.a})`; ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,7); ctx.fill();
    p.x+=p.sx; p.y+=p.sy;
    if(p.x>w) p.x=0; if(p.y<0) p.y=h;
  });
  requestAnimationFrame(draw);
}
draw();

const currents = document.getElementById("oceanCurrents");
const cctx = currents.getContext("2d");
let t_val = 0;
function drawCur() {
  cctx.clearRect(0,0,w,h);
  for(let i=0; i<6; i++){
    let y = (i/6)*h + Math.sin(t_val+i)*20;
    cctx.beginPath(); cctx.moveTo(0, y);
    for(let x=0; x<w; x+=20) cctx.lineTo(x, y+Math.sin(x*0.01+t_val+i)*12);
    cctx.strokeStyle="rgba(120,180,255,0.25)"; cctx.stroke();
  }
  t_val+=0.01; requestAnimationFrame(drawCur);
}
drawCur();

const globe = document.getElementById("miniGlobe");
const gg = globe.getContext("2d");
let rot = 0;
function drawGlobe() {
  gg.clearRect(0,0,260,260);
  gg.fillStyle="#032033"; gg.beginPath(); gg.arc(130,130,120,0,7); gg.fill();
  gg.strokeStyle="rgba(120,180,255,0.8)"; gg.lineWidth=2;
  for(let i=0;i<7;i+=0.5){
    gg.beginPath(); for(let a=0;a<7;a+=0.1) gg.lineTo(130+Math.cos(a+rot+i)*80, 130+Math.sin(a*2+rot+i)*30);
    gg.stroke();
  }
  rot+=0.005; requestAnimationFrame(drawGlobe);
}
drawGlobe();

const oceanGlossary = {
  thermohaline: {
    title: 'Circulation thermohaline',
    definition: 'Circulation profonde de l’océan liée aux différences de densité provoquées notamment par la température et la salinité.',
    url: 'https://fr.wikipedia.org/wiki/Circulation_thermohaline'
  },
  salinite: {
    title: 'Salinité',
    definition: 'Quantité de sels dissous dans l’eau ; elle contribue à déterminer sa densité.',
    url: 'https://fr.wikipedia.org/wiki/Salinit%C3%A9'
  },
  upwelling: {
    title: 'Upwelling',
    definition: 'Remontée vers la surface d’eaux profondes, souvent riches en nutriments.',
    url: 'https://fr.wikipedia.org/wiki/Upwelling'
  },
  albedo: {
    title: 'Albédo',
    definition: 'Part du rayonnement reçu qu’une surface renvoie plutôt qu’elle n’absorbe.',
    url: 'https://fr.wikipedia.org/wiki/Alb%C3%A9do'
  }
};
const oceanGlossaryDialog = document.getElementById('ocean-glossary-dialog');
document.querySelectorAll('[data-ocean-glossary]').forEach((term) => {
  term.addEventListener('click', () => {
    const item = oceanGlossary[term.dataset.oceanGlossary];
    document.getElementById('ocean-glossary-title').textContent = item.title;
    document.getElementById('ocean-glossary-definition').textContent = item.definition;
    document.getElementById('ocean-glossary-link').href = item.url;
    oceanGlossaryDialog.showModal();
  });
});
document.getElementById('ocean-glossary-close').addEventListener('click', () => oceanGlossaryDialog.close());
oceanGlossaryDialog.addEventListener('click', (event) => {
  if (event.target === oceanGlossaryDialog) oceanGlossaryDialog.close();
});

/* CORRECTION DU SIMULATEUR */
function updateSimu() {
  const t = parseFloat(document.getElementById('tempRange').value);
  const s = parseFloat(document.getElementById('saltRange').value);
  const m = document.getElementById('meltCheck').checked;
  
  // Mise à jour de l'affichage des valeurs
  document.getElementById('val-temp').innerText = t;
  document.getElementById('val-salt').innerText = s;
  
  // Calcul de la vitesse (logique de densité)
  // Base 100%. -3% par degré au dessus de -2. -5% par g/L en dessous de 35. -30% si fonte.
  let speed = 100 - ((t + 2) * 2) - ((40 - s) * 4) - (m ? 35: 0);
  
  // Borne entre 0 et 100
  speed = Math.max(0, Math.min(100, speed));
  
  const output = document.getElementById('simu-output');
  const stateText = speed < 40
      ? "⚠ Ralentissement critique du tapis roulant."
      : speed < 75
      ? "Ralentissement notable, équilibre perturbé."
      : "Circulation stable et vigoureuse.";
  const consequenceText = speed < 40
      ? "La redistribution de chaleur et les échanges avec l’atmosphère et les écosystèmes sont fortement perturbés."
      : speed < 75
      ? "Le changement ne reste pas local: il se propage vers le climat et le vivant."
      : "La différence de densité entretient la plongée des eaux et la circulation profonde.";
  output.innerHTML = `<p><strong>Vitesse du courant: ${speed.toFixed(0)}%</strong></p>
                      <p>${stateText}</p>
                      <p class="ocean-sim-explain">${consequenceText}</p>
                      <nav class="sim-consequences__chain ocean-output-flow" aria-label="Conséquences de la circulation thermohaline">
                        <a class="is-active is-current" data-ocean-step="1" href="#thermo-module">Température &amp; Salinité</a><span class="sim-consequences__arrow">→</span>
                        <a class="is-active" data-ocean-step="2" href="#ocean-flux-title">Courants Profonds</a><span class="sim-consequences__arrow">→</span>
                        <a data-ocean-step="3" href="article-ciel-vents.php#circulation-atmospherique">Chaleur</a><span class="sim-consequences__arrow">→</span>
                        <a data-ocean-step="4" href="article-ciel-vents.php#rivieres-volantes">Atmosphère</a><span class="sim-consequences__arrow">→</span>
                        <a data-ocean-step="5" href="article-terre-migrations.php#sols">Écosystèmes</a>
                      </nav>`;
  const liveSteps = output.querySelectorAll('[data-ocean-step]');
  liveSteps.forEach((step, index) => {
      const threshold = [0, 15, 30, 50, 70][index];
      const perturbation = 100 - speed;
      step.classList.toggle('is-active', index < 2 || perturbation >= threshold || speed >= 75);
  });

  // Feedback visuel sur le globe
  globe.style.filter = `hue-rotate(${(100-speed)*1.2}deg) saturate(${speed/100 + 0.5})`;
}
// Initialiser au chargement
updateSimu();

const zoneData = { atlantique: "<h3>Atlantique Nord</h3><p>Plongée des eaux froides.</p>", austral: "<h3>Océan Austral</h3><p>Mélange des courants.</p>", pacifique: "<h3>Pacifique</h3><p>Remontée lente des eaux profondes.</p>" };
document.querySelectorAll('.zone-btn').forEach(btn => btn.onclick = () => document.getElementById('zone-info').innerHTML = zoneData[btn.dataset.zone]);

function checkOceanQuiz() {
  const q1 = document.querySelector('input[name="q1"]:checked');
  const q2 = document.querySelector('input[name="q2"]:checked');
  const q3 = document.querySelector('input[name="q3"]:checked');
  const res = document.getElementById('quiz-result');
  
  if(!q1 || !q2 || !q3) {
    res.innerText = "Veuillez répondre à toutes les questions.";
    res.style.color = "#ffb347";
    return;
  }

  let score = 0;
  if(q1.value === 'b') score++;
  if(q2.value === 'a') score++;
  if(q3.value === 'b') score++;

  res.innerText = `Votre score: ${score}/3. ${score === 3 ? "Parfait ! Vous maîtrisez le sujet.": "Pas mal ! Relisez l'article pour le sans-faute."}`;
  res.style.color = score === 3 ? "#7effa1": "#d7f1ff";
}
</script>

<?php include 'footer-archipel.php'; ?>

</body>
</html>