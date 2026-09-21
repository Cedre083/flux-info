<?php 
/**
 * ARTICLE COSMOS - VERSION OPTIMISÉE E-E-A-T & SCHEMA.ORG
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
    <title>Naissance et Mort des Étoiles | Cosmos | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Comprendre la naissance, la fusion et la mort des étoiles, l’origine des éléments et le recyclage cosmique de la matière.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* Style: cosmos nocturne, halo lavande et lecture lente. Les compléments conservent l’univers visuel, le simulateur et le quiz existants. */
/* ============================================================ */
/* 1. DESIGN COSMOS - PROFONDEUR & TYPOGRAPHIE                  */
/* ============================================================ */

body {
    background: radial-gradient(circle at 50% 20%, #0a0018 0%, #050014 50%, #02000a 100%);
    overflow-x: hidden;
}

#cosmosCanvas { 
    position: fixed; 
    inset: 0; 
    z-index: 1; 
    opacity: 0.6; 
    pointer-events: none; 
}

.cosmos-halo {
    position: fixed; inset: 0; z-index: 2; pointer-events: none;
    background: radial-gradient(circle at 50% 50%, rgba(180,140,255,0.15), transparent 70%);
    mix-blend-mode: screen;
    animation: haloPulse 16s ease-in-out infinite;
}

@keyframes haloPulse {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.05); }
}

.main { 
    position: relative; 
    z-index: 10; 
    max-width: 950px; 
    margin: 100px auto 80px; 
    padding: 0 24px 80px; 
}

h1 { text-shadow: 0 0 30px rgba(200,160,255,0.5); text-align: center; font-weight: 100; }

.subtitle { 
    text-align: center; 
    font-size: 0.95rem; 
    color: #c8a0ff; 
    margin-bottom: 90px; 
    text-transform: uppercase; 
    letter-spacing: 0.4em; 
    opacity: 0.7; 
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
    color: #f3eaff;
}
.article-meta a { color: #c8a0ff; text-decoration: none; border-bottom: 1px solid rgba(200, 160, 255, 0.3); }

h2 { 
    margin: 120px 0 60px; 
    color: #e8d9ff; 
    border-bottom: 1px solid rgba(200,160,255,0.2); 
    display: inline-block; 
    padding-bottom: 10px; 
    font-weight: 200;
}

p { margin-bottom: 2.2rem; color: #f3eaff; font-weight: 300; line-height: 1.8; }

.glossary-term {
    appearance: none; background: none; border: 0; border-bottom: 1px dashed rgba(200,160,255,.8);
    color: #dfc8ff; cursor: pointer; font: inherit; padding: 0 1px; transition: color .2s ease, border-color .2s ease;
}
.glossary-term:hover, .glossary-term:focus-visible { color: #fff; border-bottom-color: #fff; outline: none; }
.cosmos-constraints {
    margin: 120px 0 0; padding: 48px; border: 1px solid rgba(200,160,255,.24); border-radius: 24px;
    background: linear-gradient(135deg, rgba(200,160,255,.10), rgba(40,20,80,.10)); box-shadow: 0 18px 60px rgba(0,0,0,.22);
}
.cosmos-constraints__eyebrow { margin: 0 0 12px; color: #c8a0ff; font-size: .76rem; letter-spacing: .18em; text-transform: uppercase; }
.cosmos-constraints h3 { color: #fff; font-weight: 200; font-size: 1.45rem; margin: 0 0 20px; }
.cosmos-constraints > p { max-width: 690px; margin-bottom: 32px; opacity: .88; }
.constraint-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
.constraint-card { display: block; min-height: 100%; padding: 24px; border: 1px solid rgba(200,160,255,.18); border-radius: 16px; background: rgba(2,0,10,.28); color: #f3eaff; text-decoration: none; transition: transform .25s ease, background .25s ease, border-color .25s ease; }
.constraint-card:hover, .constraint-card:focus-visible { transform: translateY(-4px); background: rgba(200,160,255,.12); border-color: rgba(220,200,255,.7); outline: none; }
.constraint-card strong { display: block; color: #fff; font-size: 1rem; font-weight: 500; margin-bottom: 9px; }
.constraint-card span { display: block; font-size: .94rem; line-height: 1.65; opacity: .8; }
.definition-dialog { position: fixed; inset: 0; z-index: 300; display: none; align-items: center; justify-content: center; padding: 24px; background: rgba(1,0,8,.72); backdrop-filter: blur(10px); }
.definition-dialog.is-open { display: flex; }
.definition-dialog__panel { position: relative; width: min(570px, 100%); padding: 36px; border: 1px solid rgba(220,200,255,.45); border-radius: 22px; background: #100422; box-shadow: 0 28px 90px rgba(0,0,0,.72); }
.definition-dialog__close { position: absolute; top: 14px; right: 16px; width: 34px; height: 34px; border: 1px solid rgba(220,200,255,.45); border-radius: 50%; background: transparent; color: #fff; cursor: pointer; font-size: 1.2rem; }
.definition-dialog h3 { color: #fff; margin: 0 40px 18px 0; font-weight: 300; }
.definition-dialog p { margin-bottom: 20px; }
.definition-dialog a { color: #dfc8ff; text-underline-offset: 4px; }

.highlight { 
    color: #c8a0ff; 
    font-style: italic; 
    padding: 20px;
    border-left: 2px solid #c8a0ff;
    background: rgba(200, 160, 255, 0.05);
    margin: 40px 0;
}

/* ============================================================ */
/* 2. IMAGES & SIMULATEUR                                       */
/* ============================================================ */

.cosmos-img-block { margin: 80px 0; text-align: center; perspective: 1200px; }
.cosmos-img {
    max-width: 80%;
    height: auto;
    border-radius: 16px;
    border: 1px solid rgba(200,160,255,0.15);
    box-shadow: 0 10px 40px rgba(0,0,0,0.6);
    transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
}
.cosmos-img:hover {
    transform: scale(1.02) translateY(-10px);
    box-shadow: 0 30px 100px rgba(200, 160, 255, 0.4);
    border-color: rgba(255, 255, 255, 0.6);
}

#fusion-simulator {
    position: relative; width: 100%; height: 500px; background: #050014; 
    border-radius: 24px; overflow: hidden; border: 1px solid rgba(200,160,255,0.2); 
    margin: 120px 0; touch-action: none; cursor: crosshair;
}
#fusionCanvas { width: 100%; height: 100%; display: block; }

#fusion-success {
    position: absolute; inset: 0; display: none; flex-direction: column;
    background: rgba(10, 0, 30, 0.95); backdrop-filter: blur(20px);
    z-index: 100; justify-content: center; align-items: center;
    border: 2px solid #c8a0ff; border-radius: 24px; color: #fff; text-align: center;
}

/* ============================================================ */
/* 3. SOURCES & QUIZ                                            */
/* ============================================================ */

.sources-module { margin-top: 150px; padding-top: 80px; border-top: 1px solid rgba(200, 160, 255, 0.1); }
.sources-module h3 { color: #ffffff; text-transform: uppercase; margin-bottom: 50px; font-weight: 100; letter-spacing: 7px; font-size: 1.3rem; text-align: center; }

.sources-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
.source-card { text-decoration: none !important; background: rgba(255, 255, 255, 0.02); padding: 35px; border-radius: 20px; border: 1px solid rgba(200, 160, 255, 0.15); transition: 0.5s; display: flex; flex-direction: column; color: inherit; }
.source-card:hover { background: rgba(200, 160, 255, 0.05); transform: translateY(-8px); border-color: rgba(200, 160, 255, 0.5); }
.source-card h4 { margin: 0 0 15px 0; color: #ffffff; font-weight: 400; font-size: 1.1rem; }
.source-card:hover h4 { color: #c8a0ff; }
.source-card p { font-size: 0.95rem; font-weight: 300; color: #f3eaff; opacity: 0.7; margin: 0; line-height: 1.6; }

.sky-quiz { margin-top: 120px; padding: 60px; background: rgba(255, 255, 255, 0.02); border-radius: 24px; border: 1px solid rgba(200,160,255,0.15); }
.quiz-item { margin-bottom: 30px; }
.quiz-btn { background: rgba(200, 160, 255, 0.2); border: 1px solid #c8a0ff; color: #fff; padding: 15px 40px; border-radius: 50px; cursor: pointer; transition: 0.3s; text-transform: uppercase; letter-spacing: 2px; }
.quiz-btn:hover { background: #c8a0ff; color: #050014; }

@media (max-width: 768px) {
    .main { margin-top: 60px; }
    h1 { font-size: 1.8rem !important; }
    #fusion-simulator { height: 400px; }
    h2 { margin: 85px 0 38px; }
    .cosmos-constraints { margin-top: 80px; padding: 30px 22px; }
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



/* ==========================================================
   ORDRES DE GRANDEUR COSMIQUES - SOURCES REPLIABLES
   ========================================================== */
.cosmic-scale {
    margin: 110px 0 70px;
    padding: 42px 44px;
    border: 1px solid rgba(200,160,255,.22);
    border-radius: 24px;
    background: linear-gradient(145deg, rgba(200,160,255,.085), rgba(30,12,62,.08));
    box-shadow: 0 18px 60px rgba(0,0,0,.18);
}
.cosmic-scale__eyebrow {
    margin: 0 0 12px;
    color: #c8a0ff;
    font-size: .72rem;
    letter-spacing: .18em;
    text-transform: uppercase;
}
.cosmic-scale h2 { margin: 0 0 30px; }
.cosmic-scale__number {
    display: block;
    margin: 26px 0 8px;
    color: #fff;
    font-size: clamp(1.65rem,4vw,2.65rem);
    font-weight: 200;
    letter-spacing: -.02em;
}
.cosmic-scale__note {
    margin-top: 30px;
    padding: 16px 18px;
    border-left: 2px solid rgba(200,160,255,.7);
    background: rgba(200,160,255,.05);
    font-size: .92rem;
    opacity: .82;
}
.cosmic-proof {
    margin-top: 34px;
    border-top: 1px solid rgba(200,160,255,.16);
    padding-top: 20px;
}
.cosmic-proof summary {
    position: relative;
    display: flex;
    align-items: center;
    gap: 11px;
    cursor: pointer;
    list-style: none;
    color: #d9c8f5;
    font-size: .86rem;
    line-height: 1.5;
}
.cosmic-proof summary::-webkit-details-marker { display: none; }
.cosmic-proof summary::before {
    content: '▸';
    display: inline-block;
    color: #c8a0ff;
    font-size: 1rem;
    transition: transform .2s ease;
}
.cosmic-proof[open] summary::before { transform: rotate(90deg); }
.cosmic-proof__list {
    display: grid;
    gap: 24px;
    margin-top: 26px;
}
.cosmic-proof__source {
    padding: 0 0 22px;
    border-bottom: 1px solid rgba(200,160,255,.11);
}
.cosmic-proof__source:last-child { border-bottom: 0; padding-bottom: 0; }
.cosmic-proof__source h3 {
    margin: 0 0 8px;
    color: inherit;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.45;
}
.cosmic-proof__source h3 em { font-weight: 300; opacity: .68; }
.cosmic-proof__source h3 a {
    color: #92929b;
    font-size: 1.125rem;
    line-height: 1.55;
    text-decoration: underline;
    text-decoration-thickness: 1px;
    text-decoration-color: rgba(146,146,155,.68);
    text-underline-offset: 4px;
    text-decoration-skip-ink: auto;
}
.cosmic-proof__source h3 a:hover,
.cosmic-proof__source h3 a:focus-visible {
    color: #b7b7c0;
    text-decoration-color: currentColor;
    outline: none;
}
.cosmic-proof__source p {
    margin: 10px 0 0;
    font-size: .9rem;
    line-height: 1.65;
    opacity: .72;
}
body.reading-mode .cosmic-scale {
    background: #fff !important;
    border-color: rgba(52,65,75,.16) !important;
    box-shadow: 0 12px 30px rgba(35,45,55,.05);
}
body.reading-mode .cosmic-scale__number,
body.reading-mode .cosmic-scale h2,
body.reading-mode .cosmic-proof summary,
body.reading-mode .cosmic-proof__source h3 { color: #263238 !important; }
body.reading-mode .cosmic-proof__source h3 a { color: #5d6268 !important; text-decoration-color: currentColor; }
@media (max-width: 700px) {
    .cosmic-scale { margin-top: 80px; padding: 30px 22px; }
}

</style>
</head>
<body>
<?= $headerNavigation ?>

<canvas id="cosmosCanvas"></canvas>
<div class="cosmos-halo"></div>

<main class="main">
    <h1>La Naissance et la Mort des Étoiles</h1>
    <p class="subtitle">Fusion, Supernovas, Poussière d’Étoiles, Expansion du Cosmos</p>

    <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
    <p class="article-meta">Publié par <a href="apropos.php">Flux-Info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Vulgarisation Sourcée',
    'time' => '10 min',
    'summary' => 'Les étoiles transforment la matière au cours de leur vie et participent au recyclage cosmique qui rend possibles les planètes et la chimie du vivant. Tous les éléments ne sont cependant pas produits par un mécanisme unique.',
    'learn' => ['Distinguer nucléosynthèse primordiale et stellaire', 'Comprendre pourquoi le fer marque une limite énergétique', 'Suivre la matière des étoiles jusqu’aux planètes et au vivant']
]); ?>

    <section class="article-block">
        <h2>L'Étincelle Initiale : Notre Big Bang</h2>
        <br><br>
        <p>Tout commence pour <strong>nous</strong> il y a 13,8 milliards d'années. Le <button type="button" class="glossary-term" data-glossary="big-bang">Big Bang</button> n'est pas une explosion dans l'espace, mais une expansion de l'espace lui-même. Dans ses premiers instants accessibles à nos modèles, l’Univers est extrêmement chaud et dense. À mesure que l’espace se dilate, il se refroidit et permet progressivement l’apparition des particules, puis des premiers noyaux atomiques.</p>
        
        <div class="cosmos-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/big-bang.webp" alt="Visualisation artistique du Big Bang et de l'expansion de l'univers" class="cosmos-img">
        </div>

        <p>Dans cette soupe primitive, la lumière est encore prisonnière. Nous devons attendre 380 000 ans pour que l'Univers se refroidisse assez pour laisser passer les premiers rayons: notre première lueur.</p>
    </section>

    <section class="article-block" id="premiers-elements">
        <h2>Les Premières Briques : Hydrogène, Hélium et Lithium</h2>
        <p>Les premières minutes de l’Univers ne fabriquent pas encore toute la diversité chimique que nous connaissons. La nucléosynthèse primordiale produit surtout de l’hydrogène et de l’hélium, avec de petites quantités de lithium. Le carbone de nos cellules, l’oxygène que nous respirons ou le fer de notre sang apparaîtront plus tard.</p>
        <p>Cette distinction est essentielle: <strong>le Big Bang fournit les premières briques, les étoiles transforment ensuite la matière</strong>. L’histoire chimique de l’Univers est donc cumulative. Chaque génération d’astres hérite d’un milieu déjà enrichi par celles qui l’ont précédée.</p>
    </section>

    <section class="article-block">
        <h2>La Forge des Géants : Allumer nos Étoiles</h2>
        <br><br>
        <p>Une étoile naît dans un nuage de gaz et de poussières. La gravité rassemble la matière, la comprime, l’échauffe. Quand la température devient extrême, la <button type="button" class="glossary-term" data-glossary="fusion-nucleaire">fusion nucléaire</button> s’allume: une étoile apparaît <a class="source-citation" href="#ref-nasa-stars" aria-label="Voir la référence NASA sur les étoiles">[1]</a>.</p>
        
        <div class="cosmos-img-block">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/nebuleuse-naissance.webp" alt="Nébuleuse gazeuse, berceau de formation de nouvelles étoiles" class="cosmos-img">
        </div>

        <p class="highlight">Chaque étoile est un équilibre fragile entre effondrement et explosion.</p>
        
        <p>Notre Soleil est né ainsi, il y a 4,6 milliards d'années. Chaque seconde, il transforme 600 millions de tonnes d'hydrogène en hélium pour nous réchauffer.</p>
    </section>

    <section class="article-block">
        <h2>La Vie des Étoiles</h2>
        <br><br>
        <p>Les grandes étoiles vivent vite, brillent fort et meurent jeunes. Au cours de leur évolution, les réactions nucléaires construisent progressivement des éléments plus lourds: carbone, oxygène, silicium et, dans les étoiles massives, jusqu’à des noyaux proches du fer.</p>
        <p class="highlight">Nous sommes faits d’une matière qui possède une histoire cosmique.</p>
        <p>Le calcium de nos os, l’oxygène de nos tissus ou le fer de notre sang ne proviennent pas d’une seule « forge ». Les étoiles, différents types de supernovas et d’autres événements extrêmes contribuent à fabriquer puis disperser les éléments. Pour certains éléments très lourds, comme l’or ou le platine, les collisions d’étoiles à neutrons constituent notamment un site de production observé.</p>
    </section>

    <section class="article-block">
        <h2>Quand l’Équilibre Cède</h2>
        <p>Une étoile ne meurt pas toutes de la même manière. Lorsque son carburant s’épuise, l’équilibre entre la pression créée par la fusion et la gravité se défait. Les étoiles comparables au Soleil expulsent leurs couches externes et laissent un cœur qui refroidit lentement ; les plus massives peuvent s’effondrer puis exploser en <button type="button" class="glossary-term" data-glossary="supernova">supernova</button>.</p>
        <p>Cette fin n’est pas un effacement. La matière projetée dans l’espace enrichit de futurs nuages de gaz et de poussières. D’autres étoiles, puis d’autres mondes, pourront se former à partir de cette mémoire matérielle des astres disparus.</p>
        <p class="highlight">Une supernova n’est pas seulement une fin: elle disperse les conditions de nouveaux commencements.</p>
    </section>

    <section class="article-block" id="recyclage-cosmique">
        <h2>Le Recyclage Cosmique : de la Supernova aux Planètes</h2>
        <p>Lorsque des étoiles expulsent leurs couches externes ou explosent, elles renvoient dans le milieu interstellaire une matière chimiquement enrichie. Des grains de poussière et des gaz contenant ces éléments se mélangent ensuite aux nuages moléculaires où pourront naître de nouvelles étoiles.</p>
        <p>Autour de jeunes étoiles, une partie de cette matière s’organise en disques. Les collisions et l’accrétion y construisent progressivement des corps plus grands: poussières, planétésimaux, embryons planétaires, puis planètes. La matière du vivant terrestre appartient ainsi à une chaîne qui traverse plusieurs générations stellaires avant d’entrer dans les océans, les roches et les organismes.</p>
        <nav class="flux-pathway__chain" aria-label="Parcours de la matière stellaire au vivant">
            <a href="#premiers-elements">Étoiles</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#premiers-elements">Éléments</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#recyclage-cosmique">Milieu interstellaire</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#recyclage-cosmique">Nouvelles étoiles</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#recyclage-cosmique">Planètes</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-humanite-vivant.php#corps-ecosysteme">Chimie du vivant</a>
        </nav>
    </section>

    <section class="article-block">
        <h2>Un Univers qui s’Étire</h2>
        <p>Regarder loin, c’est regarder tôt. La lumière des galaxies lointaines nous parvient étirée: ce <button type="button" class="glossary-term" data-glossary="decalage-rouge">décalage vers le rouge</button> aide les astronomes à lire l’expansion cosmique. Les supernovas lointaines, parce que leur éclat peut être comparé, ont aussi contribué à établir que cette expansion accélère <a class="source-citation" href="#ref-nasa-dark-energy" aria-label="Voir la référence NASA sur l’énergie sombre">[2]</a>.</p>
        <p>Ce que nous appelons le cosmos n’est donc pas un décor fixe. C’est une histoire de matière, d’énergie et de lumière en transformation, dont chaque observation porte un message ancien.</p>
    </section>


    <section class="article-block cosmic-scale" id="vertige-cosmique">
        <p class="cosmic-scale__eyebrow">Ordres de Grandeur · Données Estimées</p>
        <h2>Le Vertige des Échelles Cosmiques</h2>
        <p>Des chiffres astronomiques, qui donnent le vertige et nous rappellent notre vraie place.</p>

        <span class="cosmic-scale__number">Environ 92 à 93 milliards d’années-lumière</span>
        <p>C’est le diamètre actuel estimé de l’<strong>Univers observable</strong>. Son âge est pourtant d’environ 13,8 milliards d’années. Il n’y a pas contradiction : pendant que la lumière voyageait jusqu’à nous, l’espace lui-même a continué de s’étendre. Les régions qui ont émis les photons les plus anciens observables sont donc aujourd’hui beaucoup plus éloignées que 13,8 milliards d’années-lumière.</p>

        <span class="cosmic-scale__number">De 10<sup>22</sup> à 10<sup>24</sup> étoiles</span>
        <p>L’Univers observable pourrait contenir, selon les méthodes d’estimation, de l’ordre de <strong>dix mille milliards de milliards</strong> à <strong>un million de milliards de milliards d’étoiles</strong>. Cette fourchette reste très approximative : elle dépend notamment du nombre de galaxies retenu et de leur population stellaire.</p>

        <p>Pour donner une idée de cette échelle, une estimation classique place le nombre de grains de sable des plages terrestres autour de 7,5 × 10<sup>18</sup>. Comparées à cet ordre de grandeur, les estimations stellaires représentent donc environ <strong>1 300 à 130 000 fois plus d’étoiles</strong> que de grains de sable estimés sur les plages de la Terre.</p>

        <p>Et ce vertige ne concerne encore que ce que nous pouvons observer. L’Univers entier pourrait être immensément plus vaste. Nous ne savons pas aujourd’hui s’il est fini ou infini, ni quelle serait sa taille totale.</p>

        <p class="cosmic-scale__note"><em>Ces nombres ne sont pas des comptages exacts. Ils sont présentés comme des ordres de grandeur issus de modèles, d’observations et d’extrapolations.</em></p>

        <details class="cosmic-proof">
            <summary>Pour vérifier la solidité de nos sources, cliquez sur la flèche</summary>
            <div class="cosmic-proof__list">
                <article class="cosmic-proof__source">
                    <h3><a href="https://www.nasa.gov/science-research/astrophysics/how-big-is-space-we-asked-a-nasa-expert-episode-61/" target="_blank" rel="noopener noreferrer">NASA · Quelle est la taille de l’espace ?</a> <em>(21 mai 2025)</em></h3>
                    <p>La NASA estime l’Univers observable à environ 92 milliards d’années-lumière de diamètre et rappelle que la taille de l’Univers entier demeure inconnue.</p>
                </article>

                <article class="cosmic-proof__source">
                    <h3><a href="https://www.esa.int/Science_Exploration/Space_Science/How_many_stars_are_there_in_the_Universe" target="_blank" rel="noopener noreferrer">ESA · Combien y a-t-il d’étoiles dans l’Univers ?</a></h3>
                    <p>L’ESA donne une fourchette très approximative de 10<sup>22</sup> à 10<sup>24</sup> étoiles, obtenue par extrapolation à partir du nombre d’étoiles par galaxie et du nombre de galaxies.</p>
                </article>

                <article class="cosmic-proof__source">
                    <h3><a href="https://science.nasa.gov/exoplanets/what-is-the-universe/" target="_blank" rel="noopener noreferrer">NASA Science · Qu’est-ce que l’Univers ?</a></h3>
                    <p>NASA Science rappelle l’âge d’environ 13,8 milliards d’années et donne, dans une hypothèse simplifiée, au moins 10<sup>22</sup> étoiles pour l’Univers observable.</p>
                </article>

                <article class="cosmic-proof__source">
                    <h3><a href="https://science.nasa.gov/universe/stars/" target="_blank" rel="noopener noreferrer">NASA Science · Les Étoiles</a></h3>
                    <p>Cette synthèse institutionnelle indique que l’Univers pourrait contenir jusqu’à un septillion d’étoiles, soit 10<sup>24</sup>.</p>
                </article>

                <article class="cosmic-proof__source">
                    <h3><a href="https://www.lemonde.fr/les-decodeurs/article/2015/07/25/plage-et-sable-les-reponses-a-vos-petites-et-grandes-interrogations_4698399_4355770.html" target="_blank" rel="noopener noreferrer">Le Monde · Plage et sable : les réponses à vos petites et grandes interrogations</a> <em>(juillet 2015)</em></h3>
                    <p>Cette référence reprend une estimation d’environ 7,5 × 10<sup>18</sup> grains de sable sur les plages terrestres et insiste sur le caractère très approximatif des hypothèses utilisées.</p>
                </article>

                <article class="cosmic-proof__source">
                    <h3><a href="https://scienceworld.scholastic.com/issues/2025-26/051126/numbers-in-the-news.html" target="_blank" rel="noopener noreferrer">Scholastic Science World · Les chiffres de l’actualité : le sable</a> <em>(11 mai 2026)</em></h3>
                    <p>Source pédagogique récente proposée en complément pour replacer l’ordre de grandeur du nombre de grains de sable dans un contexte accessible.</p>
                </article>
            </div>
        </details>
    </section>

  <?php renderFluxConnections('cosmos'); ?>

    <section class="flux-pathway" aria-labelledby="cosmos-flux-title">
        <p class="flux-pathway__eyebrow">Continuer le Flux</p>
        <h2 id="cosmos-flux-title">De la Matière Stellaire au Vivant</h2>
        <p>Les étoiles forgent et dispersent une partie des éléments chimiques qui composent ensuite les planètes et les organismes. Le parcours peut donc quitter le ciel profond pour rejoindre la Terre puis l’Humanité.</p>
        <div class="flux-pathway__chain">
            <a href="#recyclage-cosmique" aria-current="location">Cosmos · vous êtes ici</a><span class="flux-pathway__arrow">→</span>
            <a href="article-terre-migrations.php#sols">Terre · matière et cycles du vivant</a><span class="flux-pathway__arrow">→</span>
            <a href="article-humanite-vivant.php">Humanité · organisation du vivant</a>
        </div>
        <a class="flux-pathway__next" href="article-terre-migrations.php#sols">Continuer vers la Terre vivante →</a>
    </section>

    <section class="cosmos-constraints" aria-labelledby="cosmos-constraints-title">
        <p class="cosmos-constraints__eyebrow">Prolonger la lecture</p>
        <h3 id="cosmos-constraints-title">Les Contraintes qui éclairent le Cosmos</h3>
        <p>Ces liens prolongent l’article vers <strong>AGIBIOSPHERIC</strong>, l’un des autres sites de notre Archipel: la même attention aux conditions matérielles, énergétiques et informationnelles du Réel, depuis la Terre jusqu’aux étoiles.</p>
        <div class="constraint-grid">
            <a class="constraint-card" href="https://www.agibiospheric.net/energie.html" target="_blank" rel="noopener noreferrer"><strong>Énergie et fusion</strong><span>La fusion rend visible que toute transformation dépend d’un flux d’énergie et de ses limites physiques.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/matiere.html" target="_blank" rel="noopener noreferrer"><strong>Matière et éléments</strong><span>La naissance des éléments rappelle que toute matière possède une histoire de transformation et de seuils.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/information.html" target="_blank" rel="noopener noreferrer"><strong>Information et lumière</strong><span>Spectres, rayonnements et observations transportent les signaux qui nous permettent de lire l’histoire cosmique.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/climat.html" target="_blank" rel="noopener noreferrer"><strong>Climat et rayonnement</strong><span>Les étoiles replacent les flux de rayonnement et l’équilibre énergétique terrestre dans un cadre physique plus vaste.</span></a>
        </div>
    </section>

    <section class="article-block">
        <div class="article-experience-lead" style="margin-top:0;">
            <p class="article-experience-lead__kicker">Expérience interactive</p>
            <h2>L'Étincelle Stellaire</h2>
            <p>Concentrez le nuage de gaz jusqu’au seuil où pression et température rendent la fusion possible.</p>
            <div class="experience-action"><strong>Geste</strong><span>Maintenir le clic au centre pour condenser le gaz</span></div>
        </div>
        
        <div id="fusion-simulator">
            <canvas id="fusionCanvas"></canvas>
            <div id="fusion-instruction" style="position: absolute; top: 25px; width: 100%; text-align: center; color: #c8a0ff; font-weight: 200; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px; pointer-events:none;">Maintenez le clic pour condenser le gaz</div>
            <div id="fusion-success">
                <span style="font-size: 0.8rem; letter-spacing: 5px; opacity: 0.7; margin-bottom: 10px; text-transform: uppercase;">Équilibre atteint</span>
                <span style="font-size: 2.2rem; font-weight: 100; text-transform: uppercase;">Fusion amorcée</span>
                <span style="margin-top: 15px; font-style: italic; opacity: 0.9;">Une étoile est née</span>
            </div>
        </div>
<aside class="sim-consequences sim-consequences--inline" id="cosmos-live-consequences" style="--sim-accent:#c8a0ff" aria-live="polite">
                        <div class="sim-consequences__head"><div><p class="sim-consequences__kicker">Du geste à la matière</p><p class="sim-consequences__status" id="cosmos-live-status">Maintenez la pression: le gaz se concentre et le cœur se contracte.</p></div><div class="sim-consequences__meter" id="cosmos-live-meter">Contraction 0 %</div></div>
                        <nav class="sim-consequences__chain" aria-label="Du nuage de gaz au vivant"><a class="is-active is-current" data-cosmos-step="1" href="#fusion-simulator">Contraction</a><span class="sim-consequences__arrow">→</span><a data-cosmos-step="2" href="#fusion-simulator">Fusion</a><span class="sim-consequences__arrow">→</span><a data-cosmos-step="3" href="#premiers-elements">Éléments</a><span class="sim-consequences__arrow">→</span><a data-cosmos-step="4" href="#recyclage-cosmique">Milieu Interstellaire</a><span class="sim-consequences__arrow">→</span><a data-cosmos-step="5" href="article-terre-migrations.php#sols">Planètes &amp; Vivant</a></nav>
                    </aside>
</section>

    <div class="article-knowledge-bridge">
        <p class="article-knowledge-bridge__kicker">Après la fusion</p>
        <h3>Du Geste à l’Histoire des Éléments</h3>
        <p>Vérifiez maintenant les étapes qui relient expansion cosmique, fusion stellaire et matière dont nous sommes faits.</p>
    </div>
    <section class="sky-quiz">
        <h3 style="text-align:center; color:#e8d9ff; margin-bottom:30px;">Vérifier mes Connaissances</h3>
        <div id="quiz-container">
            <div class="quiz-item">
                <p>1. Qu'est-ce que le Big Bang exactement ?</p>
                <label><input type="radio" name="q1" value="0"> Une explosion de matière</label><br>
                <label><input type="radio" name="q1" value="1"> Une expansion de l'espace lui-même</label>
            </div>
            <div class="quiz-item">
                <p>2. Quel est le carburant du Soleil ?</p>
                <label><input type="radio" name="q2" value="1"> L'hydrogène</label><br>
                <label><input type="radio" name="q2" value="0"> L'oxygène</label>
            </div>
            <div class="quiz-item">
                <p>3. D'où vient le fer de notre sang ?</p>
                <label><input type="radio" name="q3" value="1"> Du cœur d'étoiles mortes</label><br>
                <label><input type="radio" name="q3" value="0"> Directement du Big Bang</label>
            </div>
        </div>
        <div style="text-align:center; margin-top:30px;">
            <button class="quiz-btn" onclick="checkQuiz()">Vérifier l'analyse</button>
            <div id="quiz-result" style="margin-top:20px; font-weight:bold; min-height: 24px;"></div>
        </div>
    </section>

    <section class="sources-module">
        <h3>Sources & Références</h3>
        <p class="sources-note"><strong>Comment lire ces références.</strong> Les pages institutionnelles présentent les notions établies ; les dossiers et publications associés précisent les observations et les limites d’interprétation. <time datetime="2026-08-28">Vérifiées le 28 août 2026.</time></p>
        <div class="sources-grid">
<a id="ref-nasa-stars" href="https://science.nasa.gov/universe/stars/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>NASA Science - Star Basics</h4>
                <p>Naissance, fusion nucléaire, évolution et fin de vie des étoiles.</p>
            </a>
<a href="https://esahubble.org/science/stellar_evolution/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>ESA/Hubble - Stellar Evolution</h4>
                <p>Ressource d’observation sur les étapes de la vie des étoiles.</p>
            </a>
<a href="https://cnes.fr" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>CNES - Portail Spatial</h4>
                <p>Ressources institutionnelles françaises sur l’espace, l’astronomie et les missions scientifiques.</p>
            </a>
            <a href="https://science.nasa.gov/universe/stars/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>NASA - Star Basics</h4>
                <p>Cycle de vie stellaire, supernovas et enrichissement des futurs nuages moléculaires.</p>
            </a>
<a id="ref-nasa-dark-energy" href="https://science.nasa.gov/dark-energy/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>NASA - Dark Energy</h4>
                <p>Expansion cosmique, décalage vers le rouge et accélération observée avec les supernovas lointaines.</p>
            </a>
            <a href="https://esahubble.org/science/stellar_evolution/" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>ESA/Hubble - The Lives of Stars</h4>
                <p>Observations de la naissance, de la vie et de la mort des étoiles.</p>
            </a>
        </div>
    </section>

    <a href="cosmos.php" style="display:inline-block; margin-top:60px; color:#c8a0ff; text-decoration:none; font-weight: bold;">← Retour au Cosmos</a>
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
            'big-bang': { title: 'Big Bang', text: 'Modèle cosmologique qui décrit l’Univers observable comme issu d’une phase initiale dense, chaude et en expansion.', url: 'https://fr.wikipedia.org/wiki/Big_Bang' },
            'fusion-nucleaire': { title: 'Fusion nucléaire', text: 'Réaction dans laquelle des noyaux atomiques s’assemblent pour former un noyau plus lourd, en libérant de l’énergie.', url: 'https://fr.wikipedia.org/wiki/Fusion_nucl%C3%A9aire' },
            'supernova': { title: 'Supernova', text: 'Phénomène lumineux associé à l’explosion ou à l’effondrement d’une étoile en fin de vie.', url: 'https://fr.wikipedia.org/wiki/Supernova' },
            'decalage-rouge': { title: 'Décalage vers le rouge', text: 'Allongement des longueurs d’onde observé pour la lumière d’objets lointains, interprété à grande échelle comme un effet de l’expansion cosmique.', url: 'https://fr.wikipedia.org/wiki/D%C3%A9calage_vers_le_rouge' }
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

    /* 1. FOND ÉTOILÉ */
    (function() {
        const canvas = document.getElementById('cosmosCanvas');
        const ctx = canvas.getContext('2d');
        let w, h;
        function resize() { w = canvas.width = window.innerWidth; h = canvas.height = window.innerHeight; }
        window.addEventListener('resize', resize); resize();
        const stars = Array.from({length: 100}, () => ({ x: Math.random()*w, y: Math.random()*h, r: Math.random()*1.2, s: 0.05, a: Math.random() }));
        function draw() {
            ctx.clearRect(0, 0, w, h);
            stars.forEach(s => {
                ctx.fillStyle = `rgba(220,200,255,${s.a})`;
                ctx.beginPath(); ctx.arc(s.x, s.y, s.r, 0, Math.PI*2); ctx.fill();
                s.y -= s.s; if (s.y < 0) s.y = h;
            });
            requestAnimationFrame(draw);
        }
        draw();
    })();

    /* 2. SIMULATEUR DE FUSION */
    (function() {
        const fCanvas = document.getElementById('fusionCanvas');
        const fCtx = fCanvas.getContext('2d');
        const fSuccess = document.getElementById('fusion-success');
        let fPressing = false, fProgress = 0; 

        function resizeSim() {
            fCanvas.width = fCanvas.offsetWidth;
            fCanvas.height = fCanvas.offsetHeight;
        }
        window.addEventListener("resize", resizeSim);
        setTimeout(resizeSim, 200);

        function run() {
            const w = fCanvas.width, h = fCanvas.height;
            if(w === 0) { requestAnimationFrame(run); return; }
            fCtx.fillStyle = 'rgba(5, 0, 20, 0.2)'; fCtx.fillRect(0, 0, w, h);

            if (fPressing) { if (fProgress < 1) fProgress += 0.007; } 
            else { if (fProgress > 0) fProgress -= 0.015; }

            const liveStatus = document.getElementById('cosmos-live-status');
            const liveMeter = document.getElementById('cosmos-live-meter');
            const liveSteps = document.querySelectorAll('[data-cosmos-step]');
            const pct = Math.round(fProgress * 100);
            liveMeter.textContent = `Contraction ${pct} %`;
            const level = pct >= 100 ? 5 : pct >= 70 ? 3 : pct >= 30 ? 2 : 1;
            liveSteps.forEach((step, index) => step.classList.toggle('is-active', index < level));
            liveStatus.textContent = pct >= 100
                ? 'La fusion est amorcée: l’histoire ne s’arrête pas à l’étoile, car la matière sera transformée, dispersée puis recyclée dans de nouveaux mondes.'
                : pct >= 70
                ? 'La température et la pression du cœur montent: le seuil de la fusion approche.'
                : pct >= 30
                ? 'Le gaz se concentre: la gravité convertit progressivement la contraction en chaleur.'
                : 'Maintenez la pression: le gaz se concentre et le cœur se contracte.';

            if (fProgress > 0) {
                const cX = w / 2, cY = h / 2;
                let glowR = 20 + (fProgress * (w/2.5));
                let grad = fCtx.createRadialGradient(cX, cY, 0, cX, cY, glowR);
                grad.addColorStop(0, `rgba(200, 160, 255, ${0.3 + fProgress * 0.5})`);
                grad.addColorStop(1, 'transparent');
                fCtx.fillStyle = grad;
                fCtx.beginPath(); fCtx.arc(cX, cY, glowR, 0, Math.PI*2); fCtx.fill();

                let coreR = 50 - (fProgress * 45); 
                fCtx.fillStyle = `rgba(255, 255, 255, ${0.5 + fProgress * 0.5})`;
                fCtx.shadowBlur = 15 + (fProgress * 25); fCtx.shadowColor = "#fff";
                fCtx.beginPath(); fCtx.arc(cX, cY, Math.max(coreR, 5), 0, Math.PI*2); fCtx.fill();
                fCtx.shadowBlur = 0;

                if (fProgress >= 1 && fSuccess.style.display !== 'flex') {
                    fSuccess.style.display = 'flex';
                    if (window.navigator.vibrate) window.navigator.vibrate([100, 50, 100]);
                    setTimeout(() => { fSuccess.style.display = 'none'; fProgress = 0; fPressing = false; }, 4000);
                }
            }
            requestAnimationFrame(run);
        }

        fCanvas.addEventListener('mousedown', () => fPressing = true);
        window.addEventListener('mouseup', () => fPressing = false);
        fCanvas.addEventListener('touchstart', (e) => { e.preventDefault(); fPressing = true; }, { passive: false });
        window.addEventListener('touchend', () => fPressing = false);
        run();
    })();

    /* 3. LOGIQUE QUIZ */
    function checkQuiz() {
        let score = 0;
        for(let i=1; i<=3; i++) {
            const r = document.querySelector(`input[name="q${i}"]:checked`);
            if(r && r.value === "1") score++;
        }
        const res = document.getElementById('quiz-result');
        res.innerHTML = `Analyse terminée: ${score} / 3 <br> ${score === 3 ? 'Parfait !': 'Réessayez.'}`;
        res.style.color = score === 3 ? '#c8a0ff': '#fff';
    }
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
