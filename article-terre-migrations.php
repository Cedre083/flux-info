<?php ?>
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
    <title>La Terre en Mouvement | Migrations, Sols et Vivant | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Comprendre les migrations animales, les sols, les réseaux mycorhiziens et les flux qui relient eau, vivant et territoires.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* ============================================= */
/* DESIGN TERRE - ATMOSPHÈRE ORGANIQUE 23PX      */
/* ============================================= */

body {
    /* Identité chromatique préservée */
    background: radial-gradient(circle at 40% 20%, #0c1a0c 0%, #071007 45%, #030803 100%);
}

#earthCanvas { position: fixed; inset: 0; z-index: 1; opacity: 0.5; }

.earth-halo {
    position: fixed; inset: 0;
    background: 
        radial-gradient(circle at 50% 80%, rgba(120, 255, 150, 0.15), transparent 70%),
        radial-gradient(circle at 20% 20%, rgba(60, 120, 60, 0.1), transparent 75%);
    mix-blend-mode: screen;
    animation: earthPulse 12s ease-in-out infinite;
    pointer-events: none; z-index: 2;
}
@keyframes earthPulse {
    0%, 100% { opacity: 0.4; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(1.02); }
}

/* On utilise désormais le header.php universel */

.main { 
    position: relative; 
    z-index: 10; 
    max-width: 950px; /* Élargi pour accueillir le texte en 23px */
    margin: 100px auto 80px; 
    padding: 0 24px; 
}

/* Le H1 hérite du weight 200 du header */
h1 { 
    text-shadow: 0 0 25px rgba(120, 255, 150, 0.4); 
    margin-bottom: 10px; 
}

.subtitle {
    margin-bottom: 90px; 
    text-align: center;
    font-size: 0.9rem; /* Plus fin */
    color: #94a3b8;
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
.article-meta a { color: #78ff96; text-decoration: none; border-bottom: 1px solid rgba(120, 255, 150, 0.3); }

/* Le H2 hérite du weight 300 du header */
h2 { 
    margin: 100px 0 40px; 
    color: #a7f3d0; 
    border-bottom: 1px solid rgba(120, 255, 150, 0.2); 
    display: inline-block; 
    padding-bottom: 10px; 
    font-weight: 200;
}

/* Le paragraphe hérite des 23px du header */
p { 
    margin-bottom: 2rem; 
    color: #cbd5e1; 
}

.article-block {
    margin-bottom: 80px; /* Aération entre les sections */
}

.sky-img-block { margin: 80px 0; text-align: center; }
.sky-img-block img {
    max-width: 80%; 
    height: auto; 
    border-radius: 16px;
    border: 1px solid rgba(120, 255, 150, 0.2);
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.sky-img-block img:hover { 
    transform: scale(1.02); 
    box-shadow: 0 0 40px rgba(120, 255, 150, 0.2); 
    border-color: rgba(120, 255, 150, 0.5); 
}

/* SIMULATEUR SERENGETI */
#serengeti-map-sim {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%; /* Ratio 16/9 */
    background: #1a221a;
    border-radius: 24px;
    overflow: hidden;
    margin: 80px 0;
    box-shadow: 0 30px 70px rgba(0,0,0,0.5);
    border: 1px solid rgba(120, 255, 150, 0.1);
}

#map-bg {
    position: absolute;
    inset: 0;
    background: url('images/serengeti-map.webp') center/cover no-repeat !important;
    filter: brightness(0.6) contrast(1.1);
}

.sim-overlay-info {
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: 10;
}

#current-month {
    font-size: 2.5rem; /* Plus massif */
    font-weight: 200; /* Plus élégant */
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 5px;
}

#current-status {
    color: #78ff96;
    font-size: 0.95rem;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.sim-ui {
    position: absolute;
    bottom: 30px;
    width: 100%;
    padding: 0 50px;
    box-sizing: border-box;
    z-index: 10;
}

#playBtn {
    margin-top: 20px;
    background: rgba(120,255,150,0.1);
    border: 1px solid rgba(120,255,150,0.3);
    color: #78ff96;
    padding: 12px 24px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.8rem;
    cursor: pointer;
    transition: 0.3s;
}
#playBtn:hover { background: #78ff96; color: #051005; }
/* Style des particules du troupeau */
#herd-container {
    position: absolute;
    inset: 0;
    pointer-events: none;
}

.herd-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: #ffffff;
    border-radius: 50%;
    filter: blur(1px);
    box-shadow: 0 0 5px #78ff96;
    transition: all 1.2s cubic-bezier(0.23, 1, 0.32, 1);
    opacity: 0.6;
    z-index: 4;
}

#herd-glow {
    position: absolute;
    width: 60px;
    height: 60px;
    background: radial-gradient(circle, rgba(120, 255, 150, 0.4) 0%, transparent 70%);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 1.2s ease-in-out;
    z-index: 3;
}

/* QUIZ */
.sky-quiz { 
    margin-top: 120px; 
    padding: 60px; 
    background: rgba(120, 255, 150, 0.02); 
    border-radius: 24px; 
    border: 1px solid rgba(120, 255, 150, 0.1); 
}

.sky-quiz button { 
    background: #78ff96; 
    color: #051005; 
    border: none; 
    padding: 18px 45px; 
    border-radius: 50px; 
    font-weight: 600; 
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer; 
    transition: 0.4s; 
}
.sky-quiz button:hover { 
    background: #ffffff; 
    box-shadow: 0 10px 25px rgba(120, 255, 150, 0.3); 
    transform: translateY(-3px);
}

@media (max-width: 600px) {
    .main { margin-top: 60px; }
    #current-month { font-size: 1.6rem; letter-spacing: 2px; }
    .sim-overlay-info { top: 15px; left: 15px; }
    .sim-ui { padding: 0 20px; bottom: 20px; }
    .sky-quiz { padding: 40px 20px; }
}

#rain-effect {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: url('https://www.transparenttextures.com/patterns/stardust.png'), 
                repeating-linear-gradient(transparent, transparent 2px, rgba(255,255,255,0.08) 3px);
    opacity: 0;
    transition: opacity 1s;
    animation: rainMove 0.6s linear infinite;
}
@keyframes rainMove { from { background-position: 0 0; } to { background-position: 0 20px; } }

/* ============================================= */
/* DESIGN SOURCES - STANDARD ARCHIPEL TERRE      */
/* ============================================= */
.sources-module { 
    margin-top: 150px; 
    padding-top: 80px; 
    border-top: 1px solid rgba(120, 255, 150, 0.1); 
}

.sources-module h3 { 
    color: #a7f3d0; 
    text-transform: uppercase; 
    margin-bottom: 50px; 
    font-weight: 100; 
    letter-spacing: 6px; 
    font-size: 1.3rem;
    text-align: center;
}

.sources-grid { 
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
    gap: 30px; 
}

.source-card { 
    text-decoration: none !important;
    background: rgba(255, 255, 255, 0.02); 
    padding: 35px; 
    border-radius: 20px; 
    border: 1px solid rgba(120, 255, 150, 0.1);
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    display: flex;
    flex-direction: column;
    color: inherit;
}

.source-card:hover { 
    background: rgba(120, 255, 150, 0.05); 
    transform: translateY(-8px); 
    border-color: rgba(120, 255, 150, 0.4);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.source-card h4 { 
    margin: 0 0 15px 0; 
    color: #ffffff; 
    font-weight: 400; 
    font-size: 1.1rem;
    letter-spacing: 1px;
}

.source-card:hover h4 {
    color: #78ff96; /* Lueur verte organique */
}

.source-card p { 
    font-size: 0.95rem; 
    font-weight: 300;
    color: #cbd5e1;
    opacity: 0.7; 
    margin: 0; 
    line-height: 1.6; 
}

/* Indicateur flèche */
.source-card::after {
    content: "→";
    margin-top: 20px;
    font-size: 1.2rem;
    color: #78ff96;
    opacity: 0;
    transition: 0.4s;
    transform: translateX(-10px);
}

.source-card:hover::after {
    opacity: 1;
    transform: translateX(0);
}

/* CONTRAINTES AGIBIOSPHERIC & DEFINITIONS AU CLIC */
.earth-glossary-term {
    appearance: none;
    display: inline;
    padding: 0;
    color: #b9ffc7;
    background: transparent;
    border: 0;
    border-bottom: 1px dashed rgba(120, 255, 150, 0.75);
    font: inherit;
    cursor: pointer;
    transition: color 0.2s ease, border-color 0.2s ease;
}
.earth-glossary-term:hover, .earth-glossary-term:focus-visible { color: #ffffff; border-bottom-color: #ffffff; outline: none; }
.earth-constraints {
    margin: 120px 0 86px;
    padding: 48px;
    background: linear-gradient(145deg, rgba(120, 255, 150, 0.1), rgba(30, 80, 42, 0.14));
    border: 1px solid rgba(120, 255, 150, 0.3);
    border-radius: 24px;
}
.earth-constraints h2 { margin: 0 0 18px; }
.earth-constraints > p { max-width: 720px; margin: 0 0 34px; color: #dcecf6; }
.earth-constraints-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
.earth-constraint-card {
    display: block;
    min-height: 145px;
    padding: 26px;
    color: #dcecf6;
    text-decoration: none;
    background: rgba(5, 24, 10, 0.48);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 16px;
    transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
}
.earth-constraint-card:hover, .earth-constraint-card:focus-visible {
    transform: translateY(-4px);
    background: rgba(120, 255, 150, 0.12);
    border-color: rgba(120, 255, 150, 0.7);
    outline: none;
}
.earth-constraint-card span { color: #78ff96; font-size: 0.72rem; font-weight: 600; letter-spacing: 0.18em; }
.earth-constraint-card h3 { margin: 10px 0 9px; color: #ffffff; font-size: 1.12rem; font-weight: 400; }
.earth-constraint-card p { margin: 0; color: #cbd5e1; font-size: 0.92rem; line-height: 1.55; }
.earth-glossary-dialog {
    width: min(500px, calc(100vw - 44px));
    padding: 0;
    color: #e7f5ff;
    background: #06160a;
    border: 1px solid rgba(120, 255, 150, 0.55);
    border-radius: 18px;
    box-shadow: 0 28px 90px rgba(0, 0, 0, 0.72);
}
.earth-glossary-dialog::backdrop { background: rgba(0, 8, 2, 0.74); backdrop-filter: blur(4px); }
.earth-glossary-dialog-content { padding: 32px; }
.earth-glossary-dialog h3 { margin: 0 0 16px; color: #b9ffc7; font-size: 1.35rem; font-weight: 400; }
.earth-glossary-dialog p { margin: 0 0 22px; color: #d5e1ed; font-size: 1rem; line-height: 1.65; }
.earth-glossary-dialog-actions { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; }
.earth-glossary-dialog-actions a, .earth-glossary-dialog-actions button {
    padding: 10px 16px;
    color: #051005;
    background: #78ff96;
    border: 0;
    border-radius: 999px;
    font: inherit;
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
}
.earth-glossary-dialog-actions button { color: #d8ebf6; background: rgba(255, 255, 255, 0.1); }

@media (max-width: 768px) {
    .earth-constraints { margin: 68px 0; padding: 30px 22px; }
    .earth-constraints-grid { grid-template-columns: 1fr; }
    .earth-constraint-card { min-height: 0; }
    .earth-glossary-dialog-content { padding: 25px; }
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



/* Encadré bioacoustique végétale */
.plant-acoustics{
    margin:34px 0 42px;
    padding:clamp(20px,3vw,30px);
    border:1px solid color-mix(in srgb,currentColor 14%,transparent);
    border-radius:24px;
    background:linear-gradient(145deg,color-mix(in srgb,#78ff9c 5%,transparent),color-mix(in srgb,currentColor 2%,transparent));
    box-shadow:0 18px 48px rgba(0,0,0,.10);
}
.plant-acoustics__kicker{margin:0 0 8px;font-size:.68rem;letter-spacing:.16em;text-transform:uppercase;opacity:.54}
.plant-acoustics h2{margin:0 0 16px;font-size:clamp(1.45rem,3vw,2.15rem);font-weight:400;line-height:1.15}
.plant-acoustics p{margin:0 0 14px;line-height:1.72}
.plant-acoustics__proof{display:inline-flex;align-items:center;gap:8px;margin:4px 0 14px;padding:7px 11px;border:1px solid color-mix(in srgb,#78ff9c 34%,transparent);border-radius:999px;font-size:.67rem;letter-spacing:.08em;text-transform:uppercase}
.plant-acoustics__proof::before{content:'';width:7px;height:7px;border-radius:50%;background:#78ff9c;box-shadow:0 0 10px #78ff9c}
.plant-acoustics__proof--discussion{border-color:color-mix(in srgb,#f3d66f 40%,transparent)}
.plant-acoustics__proof--discussion::before{background:#f3d66f;box-shadow:0 0 10px #f3d66f}
.plant-acoustics__chain{display:flex;flex-wrap:wrap;align-items:center;gap:7px;margin:18px 0;padding:13px 15px;border-radius:16px;background:color-mix(in srgb,currentColor 3.5%,transparent);border:1px solid color-mix(in srgb,currentColor 10%,transparent)}
.plant-acoustics__chain span{font-size:.75rem;letter-spacing:.035em}
.plant-acoustics__chain b{opacity:.45;font-weight:400}
.plant-acoustics__note{margin:18px 0 0;padding:14px 16px;border-left:2px solid color-mix(in srgb,#78ff9c 60%,transparent);background:color-mix(in srgb,#78ff9c 4%,transparent);font-size:.92rem;line-height:1.65}
.plant-acoustics__links{display:flex;flex-wrap:wrap;gap:9px;margin-top:18px}
.plant-acoustics__links a{display:inline-flex;align-items:center;min-height:38px;padding:8px 12px;border:1px solid color-mix(in srgb,currentColor 13%,transparent);border-radius:999px;color:inherit;text-decoration:none;font-size:.67rem;letter-spacing:.045em}
.plant-acoustics__links a:hover,.plant-acoustics__links a:focus-visible{border-color:color-mix(in srgb,#78ff9c 45%,transparent);background:color-mix(in srgb,#78ff9c 6%,transparent);outline:none}
.plant-acoustics details{margin-top:18px;padding-top:15px;border-top:1px solid color-mix(in srgb,currentColor 11%,transparent)}
.plant-acoustics summary{cursor:pointer;font-size:.78rem;letter-spacing:.06em;opacity:.72}
.plant-acoustics__sources{margin:14px 0 0;padding-left:18px}
.plant-acoustics__sources li{margin:0 0 12px;line-height:1.55;font-size:.82rem;opacity:.78}
.plant-acoustics__sources a{color:inherit;text-underline-offset:3px;text-decoration-color:color-mix(in srgb,currentColor 34%,transparent)}
body.reading-mode .plant-acoustics{background:color-mix(in srgb,currentColor 2.5%,transparent);box-shadow:none}
@media(max-width:700px){.plant-acoustics{border-radius:20px;margin:28px 0 34px}.plant-acoustics__chain{align-items:flex-start}.plant-acoustics__chain b{display:none}}

</style>
</head>
<body>
<?= $headerNavigation ?>

<canvas id="earthCanvas"></canvas>
<div class="earth-halo"></div>

<main class="main">
  <h1>La Terre en Mouvement : Le Grand Théâtre des Migrations</h1>
  <p class="subtitle">Routes Millénaires, Cycles du Vivant, Mémoire des Sols</p>

  <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
  <p class="article-meta">Publié par <a href="apropos.php">Flux-Info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Vulgarisation Sourcée',
    'time' => '10 min',
    'summary' => 'La Terre vivante est traversée par des migrations, des cycles de fertilité et des échanges entre eau, sols, végétation et espèces. Ces mouvements transforment les territoires autant qu’ils en dépendent.',
    'learn' => ['Comprendre pourquoi les migrations suivent les ressources', 'Voir les sols comme interfaces entre eau, matière et vivant', 'Relier fertilité, agriculture, alimentation et société']
]); ?>
  <br><br>
  <section class="article-block">
    <p>La Terre n'est pas un socle immobile sous nos pieds.</p>
    <p>C'est une machine de transport colossale, un réseau de routes invisibles où rien ne reste jamais en place.</p>
    <p>Chaque minute, des milliards d'êtres vivants se déplacent, poussés par un instinct plus vieux que les montagnes.</p>
    <p>Marcher, nager ou ramper n'est pas seulement un besoin: c'est la manière dont la planète respire et redistribue la vie.</p>
  </section>

  <section class="article-block">
    <h2>Le Serengeti : Le Fracas de la Survie</h2>
    <br><br>
    <p>Imaginez une armée de deux millions d'herbivores, un tapis mouvant de gnous et de zèbres qui déchire le silence de la savane.</p>
    <p>Ce n'est pas une simple promenade, c'est une traque désespérée de la pluie.</p>
    <p>Dans le Serengeti, entre la Tanzanie et le Kenya, la vie suit une boucle de fer et de sang de trois mille kilomètres.</p>

    <div class="sky-img-block">
      <!-- AMÉLIORATION: Attribut alt descriptif -->
      <img src="images/serengeti-mara.webp" alt="La grande migration du Serengeti traversant la rivière Mara">
    </div>

    <p>Les troupeaux "écoutent" littéralement les orages à des distances impossibles.</p>
    <p>Quand l'herbe meurt au Sud, ils chargent vers le Nord, là où les nuages promettent de l'eau.</p>
    <p>Le passage est payé au prix fort: la rivière Mara les attend avec ses courants mortels et ses crocodiles tapis dans l'ombre.</p>
    <p>Mais ce chaos est nécessaire.</p>
    <p>En piétinant et en fertilisant le sol, ces millions de jardiniers préparent la terre pour les générations à venir.</p>
  </section>

  <section class="article-block">
    <h2>L’Odyssée de Soie : L'Exploit du Monarque</h2>
    <br><br>
    <p>À l'autre extrême, la <button type="button" class="earth-glossary-term" data-earth-glossary="migration">migration animale</button> se fait silencieuse et fragile.</p>
    <p>Un insecte de moins d'un gramme, le papillon Monarque, réalise l'impensable.</p>
    <p>Chaque année, il s'élance dans un périple de quatre mille kilomètres à travers le continent américain.</p>

    <div class="sky-img-block">
      <!-- AMÉLIORATION: Attribut alt descriptif -->
      <img src="images/monarque-foret.webp" alt="Nuée de papillons monarques dans les forêts de sapins du Mexique">
    </div>

    <p>Son objectif ? Une poignée d'arbres précis dans les montagnes du Mexique, une forêt de sapins sacrés qu'il n'a pourtant jamais vue.</p>
    <p>Le papillon qui termine le voyage est l'arrière-petit-fils de celui qui l'a commencé.</p>
    <p>En utilisant la <button type="button" class="earth-glossary-term" data-earth-glossary="magnetoreception">magnétoréception</button> (le champ magnétique de la Terre comme boussole) et le soleil comme sextant, ils traversent des tempêtes qui devraient les broyer.</p>
  </section>

  <section class="article-block" id="sols">
    <h2>La Migration Invisible : Le Web des Profondeurs</h2>
    <br><br>
    <p>Mais le mouvement le plus spectaculaire est peut-être celui que vous ne verrez jamais.</p>
    <p>Sous vos chaussures, dans l'obscurité totale du sol, une migration de ressources fait rage.</p>
    <p>Les racines des arbres ne sont pas isolées ; elles sont reliées par un réseau complexe de champignons appelé <button type="button" class="earth-glossary-term" data-earth-glossary="mycelium">mycélium</button>.</p>

    <div class="sky-img-block">
      <!-- AMÉLIORATION: Attribut alt descriptif -->
      <img src="images/mycelium-web.webp" alt="Visualisation du réseau mycorhizien souterrain reliant les racines des arbres">
    </div>

    <p>C’est l'Internet de la forêt.</p>
    <p>À travers ces filaments, les nutriments, le <button type="button" class="earth-glossary-term" data-earth-glossary="phosphore">phosphore</button> et même des signaux d'alerte migrent d'un arbre à l'autre.</p>
    <p>Un vieux chêne peut choisir d'envoyer son surplus de sucre à un jeune sapin qui meurt dans l'ombre.</p>
    <p>Le sol n'est pas une tombe, c'est une autoroute biologique où l'énergie circule sans relâche pour maintenir l'équilibre du monde vert.</p>
	</section>
	<br>

  <aside class="plant-acoustics" id="ultrasons-plantes" aria-labelledby="plant-acoustics-title">
    <p class="plant-acoustics__kicker">Bioacoustique Végétale</p>
    <h2 id="plant-acoustics-title">Les Plantes ne sont pas Silencieuses</h2>

    <div class="plant-acoustics__proof">Fait Établi</div>
    <p>Certaines plantes soumises à un stress produisent de brèves émissions <strong>ultrasoniques</strong> qui se propagent dans l’air. En 2023, des chercheurs ont notamment enregistré des plants de tomate et de tabac : les plantes privées d’eau ou dont la tige avait été coupée émettaient davantage de sons que les plantes témoins.</p>
    <p>Dans le cas du stress hydrique, ces émissions sont notamment associées aux tensions qui apparaissent dans le <strong>xylème</strong>, le réseau qui transporte l’eau depuis les racines. La rupture de la colonne d’eau et la formation de bulles, un phénomène appelé <strong>cavitation</strong>, peuvent produire des émissions acoustiques.</p>

    <div class="plant-acoustics__chain" aria-label="Chaîne du stress hydrique aux ultrasons">
      <span>Sécheresse</span><b>→</b><span>Tension dans le xylème</span><b>→</b><span>Cavitation</span><b>→</b><span>Émission ultrasonique</span>
    </div>

    <p>L’analyse de ces sons peut aussi renseigner sur l’état physiologique de la plante : des modèles d’apprentissage automatique ont distingué certains niveaux de déshydratation ou de blessure à partir des enregistrements.</p>

    <div class="plant-acoustics__proof plant-acoustics__proof--discussion">Hypothèse Discutée</div>
    <p>Cela ne signifie pas que les plantes « crient » ni qu’elles utilisent ces sons pour communiquer. À ce jour, aucune preuve ne démontre l’existence d’un véritable système de communication acoustique entre végétaux.</p>
    <p class="plant-acoustics__note"><strong>Une émission peut contenir de l’information sans avoir évolué pour transmettre un message.</strong> Ces ultrasons intéressent néanmoins la recherche comme indicateurs non invasifs du stress hydrique, notamment pour l’agriculture de précision.</p>

    <div class="plant-acoustics__links" aria-label="Continuer le flux">
      <a href="article-ciel-vents.php#secheresse">Ciel · suivre la sécheresse</a>
      <a href="article-archipel-conscience.php#signal-habitat">Archipel · signal et information</a>
    </div>

    <details>
      <summary>Vérifier les Sources Scientifiques</summary>
      <ul class="plant-acoustics__sources">
        <li><strong>Khait I. et al. (2023)</strong>, <em>Sounds emitted by plants under stress are airborne and informative</em>, <em>Cell</em>, 186(7), 1328–1336.e10. <a href="https://www.sciencedirect.com/science/article/pii/S0092867423002623" target="_blank" rel="noopener noreferrer">Consulter l’étude</a>.</li>
        <li><strong>Son J.-S. et al. (2024)</strong>, <em>Is plant acoustic communication fact or fiction?</em>, <em>New Phytologist</em>. DOI : 10.1111/nph.19648. <a href="https://nph.onlinelibrary.wiley.com/doi/10.1111/nph.19648" target="_blank" rel="noopener noreferrer">Consulter l’analyse critique</a>.</li>
        <li><strong>Font Bordera P. et al. (2026)</strong>, <em>Plant bioacoustics: decoding ultrasonic emissions</em>, <em>Journal of Experimental Botany</em>, erag398. <a href="https://academic.oup.com/jxb/advance-article-abstract/doi/10.1093/jxb/erag398/8762407" target="_blank" rel="noopener noreferrer">Consulter la revue</a>.</li>
      </ul>
    </details>
  </aside>

  <section class="article-block" id="agriculture">
    <h2>De la Fertilité des Sols à l’Agriculture</h2>
    <p>L’agriculture s’inscrit dans les mêmes flux que ceux observés dans les écosystèmes: eau, matière organique, nutriments, microorganismes, pollinisateurs et énergie solaire. Elle ne se situe pas à côté de la biosphère; elle en mobilise directement les cycles.</p>
    <p>Lorsque l’eau manque ou que les sols perdent leur structure et leur diversité biologique, les conséquences dépassent la parcelle: elles touchent les rendements, l’alimentation et les sociétés qui en dépendent.</p>
    <div class="flux-loop" aria-label="Boucle pluie sols agriculture vivant">
        <span>Pluie</span><span>Sols</span><span>Végétation</span><span>Herbivores</span><span>Fertilisation</span><span>Nouvelle végétation ↺</span>
    </div>
    <div class="key-idea"><strong>Vous venez d’observer une boucle de flux:</strong> ce qui nourrit le vivant revient modifier les conditions de sa propre continuité.</div>
  </section>

  <?php renderFluxConnections('terre'); ?>

  <section class="flux-pathway" aria-labelledby="terre-flux-title">
    <p class="flux-pathway__eyebrow">Continuer le Flux</p>
    <h2 id="terre-flux-title">De la Pluie aux Sociétés</h2>
    <p>Sur Terre, les flux atmosphériques deviennent eau, sols, biomasse et nourriture. À partir d’ici, le parcours devient directement humain.</p>
    <div class="flux-pathway__chain">
        <a href="article-ciel-vents.php#secheresse">Ciel · pluie et sécheresse</a>
        <span class="flux-pathway__arrow">→</span>
        <a href="#agriculture" aria-current="location">Terre · vous êtes ici</a>
        <span class="flux-pathway__arrow">→</span>
        <a href="article-humanite-vivant.php#alimentation">Humanité · alimentation et société</a>
    </div>
    <a class="flux-pathway__next" href="article-humanite-vivant.php#alimentation">Continuer vers l’alimentation et les sociétés →</a>
  </section>

  <section class="earth-constraints" aria-labelledby="earth-constraints-title">
    <h2 id="earth-constraints-title">Les Contraintes qui animent la Terre</h2>
    <p>Les migrations, la pluie, les sols et les symbioses relient les espèces à des conditions matérielles précises. Ces repères prolongent l’article vers <strong>AGIBIOSPHERIC, l’un des autres sites de notre Archipel</strong>, et ses contraintes du Réel.</p>
    <div class="earth-constraints-grid">
      <a class="earth-constraint-card" href="https://www.agibiospheric.net/biodiversite.html" target="_blank" rel="noopener noreferrer"><span>BIODIVERSITÉ</span><h3>Migrations et Corridors</h3><p>Les déplacements d’espèces dépendent de réseaux écologiques continus et de leur diversité fonctionnelle.</p></a>
      <a class="earth-constraint-card" href="https://www.agibiospheric.net/eau-douce.html" target="_blank" rel="noopener noreferrer"><span>EAU</span><h3>Pluie, Ressources et Saisonnalité</h3><p>Les précipitations et la disponibilité de l’eau structurent les boucles du Serengeti.</p></a>
      <a class="earth-constraint-card" href="https://www.agibiospheric.net/sols-vivants.html" target="_blank" rel="noopener noreferrer"><span>SOLS VIVANTS</span><h3>Racines et Symbioses</h3><p>Les sols rassemblent micro-organismes, champignons, eau et racines dans une infrastructure vivante.</p></a>
      <a class="earth-constraint-card" href="https://www.agibiospheric.net/vivant.html" target="_blank" rel="noopener noreferrer"><span>VIVANT</span><h3>Relations et Interdépendances</h3><p>Une migration ou un réseau souterrain n’existe jamais seul: il dépend d’autres formes de vie et de leurs conditions.</p></a>
    </div>
  </section>

<div class="article-experience-lead">
    <p class="article-experience-lead__kicker">Expérience interactive</p>
    <h3>Le Cycle du Serengeti</h3>
    <p>Faites défiler les mois pour suivre ensemble pluie, croissance de l’herbe et déplacement du troupeau. La migration devient une réponse visible à la saisonnalité.</p>
    <div class="experience-action"><strong>Geste</strong><span>Déplacer le curseur ou lancer la lecture</span></div>
</div>

<div id="serengeti-map-sim">
    <div id="map-bg"></div>

    <svg id="migration-path" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path d="M50,80 Q20,60 20,50 Q30,35 50,20 Q60,15 60,15 Q55,25 50,40 Q45,65 50,80"
            stroke="#78ff96"
            fill="none"
            stroke-width="0.5"
            opacity="0.25"/>
    </svg>

    <div id="herd-glow"></div>
    <div id="rain-effect"></div>

    <div class="sim-overlay-info">
      <div id="current-month">Janvier</div>
      <div id="current-status">Plaines du Sud: Naissances</div>
    </div>

    <div class="sim-ui">
      <label class="sr-only" for="migrationSlider">Mois du cycle migratoire</label>
      <input type="range" id="migrationSlider" min="1" max="12" value="1" step="1" aria-describedby="current-status">
      <button id="playBtn">▶ Lecture</button>
    </div>
</div>
<aside class="sim-consequences sim-consequences--inline" id="terre-live-consequences" style="--sim-accent:#78ff96" aria-live="polite">
        <div class="sim-consequences__head">
          <div>
            <p class="sim-consequences__kicker">La boucle que vous êtes en train d’observer</p>
            <p class="sim-consequences__status" id="terre-live-status">Les pluies nourrissent l’herbe, et l’herbe met le troupeau en mouvement.</p>
          </div>
          <div class="sim-consequences__meter" id="terre-live-meter">Pluie modérée</div>
        </div>
        <nav class="sim-consequences__chain" aria-label="Boucle écologique du Serengeti">
          <a class="is-active is-current" data-terre-step="1" href="article-ciel-vents.php#rivieres-volantes">Pluie</a><span class="sim-consequences__arrow">→</span>
          <a class="is-active" data-terre-step="2" href="#agriculture">Herbe</a><span class="sim-consequences__arrow">→</span>
          <a class="is-active" data-terre-step="3" href="#sols">Migration</a><span class="sim-consequences__arrow">→</span>
          <a data-terre-step="4" href="#sols">Fertilisation</a><span class="sim-consequences__arrow">→</span>
          <a data-terre-step="5" href="#agriculture">Sols &amp; Agriculture</a>
        </nav>
      </aside>
<div class="article-knowledge-bridge">
    <p class="article-knowledge-bridge__kicker">Après le cycle</p>
    <h3>Vérifier la Boucle du Vivant</h3>
    <p>Le quiz revient sur les signaux qui guident migrations, orientation et réseaux souterrains.</p>
</div>
<section class="sky-quiz">
    <h3 style="text-align:center; color:#a7f3d0; margin-bottom:30px;">Le Quiz du Vivant</h3>
    <div class="quiz-question">
      <p>1. Quel est le moteur principal de la migration dans le Serengeti ?</p>
      <label><input type="radio" name="tq1" value="a"> La fuite des prédateurs</label><br>
      <label><input type="radio" name="tq1" value="b"> La quête de l'herbe verte et des pluies</label>
    </div>
    <div class="quiz-question">
      <p>2. Comment le Monarque retrouve-t-il sa route sur 4000 km ?</p>
      <label><input type="radio" name="tq2" value="a"> Grâce au champ magnétique et au soleil</label><br>
      <label><input type="radio" name="tq2" value="b"> En suivant les parents du groupe</label>
    </div>
    <div class="quiz-question">
      <p>3. Qu'est-ce que le mycélium transporte entre les arbres ?</p>
      <label><input type="radio" name="tq3" value="a"> Uniquement de l'eau</label><br>
      <label><input type="radio" name="tq3" value="b"> Des nutriments et des signaux d'alerte</label>
    </div>
    <div style="text-align:center; margin-top:30px;">
      <button type="button" onclick="checkEarthQuiz()">Vérifier mes connaissances</button>
      <div id="earth-quiz-result" style="margin-top:20px; font-weight:bold;"></div>
    </div>
  </section>

<section class="sources-module">
    <h3>Sources & Références</h3>
    <p class="sources-note"><strong>Comment lire ces références.</strong> Cette sélection associe une plateforme scientifique intergouvernementale, une publication académique et un article de vulgarisation. Les cartes ouvrent les ressources consultées. <time datetime="2026-08-28">Vérifiées le 28 août 2026.</time></p>
    <div class="sources-grid">
        <a href="https://ipbes.net" target="_blank" rel="noopener noreferrer" class="source-card">
            <h4>IPBES</h4>
            <p>Rapports mondiaux sur la biodiversité et les services écosystémiques essentiels à la vie terrestre.</p>
        </a>

        <a href="https://www.nationalgeographic.com/animals/article/monarch-butterfly-migration" target="_blank" rel="noopener noreferrer" class="source-card">
            <h4>National Geographic</h4>
            <p>Analyse détaillée de l'odyssée migratoire des papillons Monarques à travers le continent américain.</p>
        </a>

        <a href="https://www.nature.com/articles/nature.2014.15251" target="_blank" rel="noopener noreferrer" class="source-card">
            <h4>Revue Nature</h4>
            <p>Étude sur le Wood Wide Web: le réseau mycorhizien souterrain et la communication entre les arbres.</p>
        </a>
    </div>
</section>

	  <a href="terre.php" style="display:inline-block; margin-top:40px; color:#78ff96; text-decoration:none; font-weight: bold;">← Retour au portail Terre</a>
	</main>

<dialog class="earth-glossary-dialog" id="earth-glossary-dialog" aria-labelledby="earth-glossary-title">
  <div class="earth-glossary-dialog-content">
    <h3 id="earth-glossary-title"></h3>
    <p id="earth-glossary-definition"></p>
    <div class="earth-glossary-dialog-actions">
      <a id="earth-glossary-link" href="#" target="_blank" rel="noopener noreferrer">Approfondir sur Wikipédia</a>
      <button type="button" id="earth-glossary-close">Fermer</button>
    </div>
  </div>
</dialog>
	
<script>
/* 1. PARTICULES ORGANIQUES */
const canvas = document.getElementById('earthCanvas');
const ctx = canvas.getContext('2d');
let w, h;
function resize() { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; }
window.onresize = resize; resize();

const particles = Array.from({length: 50}, () => ({
    x: Math.random() * w, y: Math.random() * h,
    r: Math.random() * 2 + 0.5, vx: Math.random() * 0.4 - 0.2, vy: Math.random() * 0.4 - 0.2, alpha: Math.random() * 0.5 + 0.1
}));

function draw() {
    ctx.clearRect(0, 0, w, h);
    particles.forEach(p => {
        ctx.beginPath(); ctx.fillStyle = `rgba(120, 255, 150, ${p.alpha})`;
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2); ctx.fill();
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0) p.x = w; if (p.x > w) p.x = 0;
        if (p.y < 0) p.y = h; if (p.y > h) p.y = 0;
    });
    requestAnimationFrame(draw);
}
draw();

const earthGlossary = {
  migration: {
    title: 'Migration animale',
    definition: 'Déplacement souvent périodique d’animaux sur de longues distances, associé à des trajets et des retours réguliers.',
    url: 'https://fr.wikipedia.org/wiki/Migration_animale'
  },
  magnetoreception: {
    title: 'Magnétoréception',
    definition: 'Sens qui permet à certains êtres vivants de détecter l’orientation ou l’intensité d’un champ magnétique.',
    url: 'https://fr.wikipedia.org/wiki/Magn%C3%A9tor%C3%A9ception'
  },
  mycelium: {
    title: 'Mycélium',
    definition: 'Ensemble de filaments ramifiés qui constitue la partie végétative d’un champignon.',
    url: 'https://fr.wikipedia.org/wiki/Myc%C3%A9lium'
  },
  phosphore: {
    title: 'Phosphore',
    definition: 'Élément chimique indispensable à de nombreux processus biologiques et nutritifs.',
    url: 'https://fr.wikipedia.org/wiki/Phosphore'
  }
};
const earthGlossaryDialog = document.getElementById('earth-glossary-dialog');
document.querySelectorAll('[data-earth-glossary]').forEach((term) => {
  term.addEventListener('click', () => {
    const item = earthGlossary[term.dataset.earthGlossary];
    document.getElementById('earth-glossary-title').textContent = item.title;
    document.getElementById('earth-glossary-definition').textContent = item.definition;
    document.getElementById('earth-glossary-link').href = item.url;
    earthGlossaryDialog.showModal();
  });
});
document.getElementById('earth-glossary-close').addEventListener('click', () => earthGlossaryDialog.close());
earthGlossaryDialog.addEventListener('click', (event) => {
  if (event.target === earthGlossaryDialog) earthGlossaryDialog.close();
});
	
/* 2. SIMULATEUR SERENGETI */
const slider = document.getElementById('migrationSlider');
const herd = document.getElementById('herd-glow');
const map = document.getElementById('map-bg');
const monthTxt = document.getElementById('current-month');
const statusTxt = document.getElementById('current-status');
const rain = document.getElementById('rain-effect');

const migrationPath = {
    1:{x:50,y:80,month:"Janvier",status:"Naissances au Sud",rain:0.4},
    2:{x:60,y:75,month:"Février",status:"Herbe riche",rain:0.3},
    3:{x:40,y:70,month:"Mars",status:"Départ",rain:0.5},
    4:{x:25,y:60,month:"Avril",status:"Pluies",rain:1},
    5:{x:20,y:50,month:"Mai",status:"Grumeti",rain:0.8},
    6:{x:30,y:35,month:"Juin",status:"Nord",rain:0.2},
    7:{x:50,y:20,month:"Juillet",status:"Mara",rain:0.1},
    8:{x:60,y:15,month:"Août",status:"Kenya",rain:0},
    9:{x:55,y:25,month:"Septembre",status:"Sécheresse",rain:0},
    10:{x:50,y:40,month:"Octobre",status:"Retour",rain:0.2},
    11:{x:45,y:65,month:"Novembre",status:"Pluies retour",rain:0.6},
    12:{x:50,y:80,month:"Décembre",status:"Boucle",rain:0.4}
};

const herdParticles = [];
for (let i = 0; i < 35; i++) {
    const p = document.createElement('div');
    p.className = 'herd-particle';
    document.getElementById('serengeti-map-sim').appendChild(p);
    herdParticles.push(p);
}

function updateSim(val) {
    const data = migrationPath[val];

    const liveStatus = document.getElementById('terre-live-status');
    const liveMeter = document.getElementById('terre-live-meter');
    const steps = document.querySelectorAll('[data-terre-step]');
    const rainPct = Math.round(data.rain * 100);
    liveMeter.textContent = rainPct === 0 ? 'Saison sèche' : `Pluie ${rainPct} %`;
    if (data.rain >= 0.6) {
        liveStatus.textContent = 'Les pluies relancent la végétation: nourriture, déplacements et retour de matière vers les sols reforment une boucle vivante.';
    } else if (data.rain <= 0.1) {
        liveStatus.textContent = 'La sécheresse raréfie l’herbe et l’eau: la migration devient une réponse vitale, avec des conséquences sur les sols et les territoires.';
    } else {
        liveStatus.textContent = 'La disponibilité de l’eau change, le troupeau se déplace et redistribue à son tour matière et nutriments dans le paysage.';
    }
    const level = data.rain >= .6 ? 5 : data.rain <= .1 ? 3 : 4;
    steps.forEach((step, index) => step.classList.toggle('is-active', index < level));

    herd.style.left = data.x + "%";
    herd.style.top = data.y + "%";

    monthTxt.innerText = data.month;
    statusTxt.innerText = data.status;
    rain.style.opacity = data.rain;

    herdParticles.forEach(p => {
        p.style.left = (data.x + (Math.random()*10-5)) + "%";
        p.style.top = (data.y + (Math.random()*10-5)) + "%";
    });
}

slider.addEventListener('input', e => updateSim(e.target.value));

let playing = false;
let interval;

document.getElementById('playBtn').addEventListener('click', () => {
    playing = !playing;
    const btn = document.getElementById('playBtn');
    btn.innerText = playing ? "❚❚ Pause": "▶ Lecture";

    if (playing) {
        interval = setInterval(() => {
            let val = parseInt(slider.value);
            val = val >= 12 ? 1: val + 1;
            slider.value = val;
            updateSim(val);
        }, 1400);
    } else {
        clearInterval(interval);
    }
});

updateSim(1);

/* 3. QUIZ */
function checkEarthQuiz() {
    const q1 = document.querySelector('input[name="tq1"]:checked');
    const q2 = document.querySelector('input[name="tq2"]:checked');
    const q3 = document.querySelector('input[name="tq3"]:checked');
    const res = document.getElementById('earth-quiz-result');
    if(!q1 || !q2 || !q3) { res.innerText = "Répondez à tout !"; res.style.color="#ffb347"; return; }
    let score = (q1.value==='b'?1:0) + (q2.value==='a'?1:0) + (q3.value==='b'?1:0);
    res.innerText = score === 3 ? "Parfait ! 3/3": `Score: ${score}/3.`;
    res.style.color = score === 3 ? "#78ff96": "#fff";
}
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
