<?php 
/**
 * ARTICLE ARCHIPEL - VERSION OPTIMISÉE E-E-A-T & SCHEMA.ORG
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
    <title>La Conscience Archipélique | Relations, Signaux et Vivant | Flux Info</title>
    
    <?= $headerHead ?>
<?php include_once 'flux-connections.php'; ?>
<?php include_once 'article-reading-tools.php'; ?>

    <!-- AMÉLIORATION: Meta description enrichie -->
    <meta name="description" content="Explorer les interdépendances du vivant, les signaux et les relations entre systèmes sans confondre faits scientifiques, métaphores et réflexion philosophique.">
    
    <!-- AMÉLIORATION: Schema.org Article (Ajouté) -->
    

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* ============================================= */
/* DESIGN ARCHIPEL - CONFLUENCE & LISIBILITÉ 23PX */
/* ============================================= */

body {
    background: radial-gradient(circle at 50% 20%, #1a0033 0%, #05000a 60%, #000000 100%);
    overflow-x: hidden;
}

#articleArchipelCanvas { 
    position: fixed; inset: 0; z-index: 1; 
    pointer-events: none; opacity: 0.6; 
}

.article-archipel-halo {
    position: fixed; inset: 0;
    background: radial-gradient(circle at 50% 50%, rgba(180,100,255,0.15), transparent 70%);
    mix-blend-mode: screen; animation: haloPulse 20s ease-in-out infinite;
    pointer-events: none; z-index: 2;
}
@keyframes haloPulse { 0%, 100% { opacity: 0.2; transform: scale(1); } 50% { opacity: 0.4; transform: scale(1.1); } }

.main { 
    position: relative; 
    z-index: 10; 
    max-width: 950px; 
    margin: 100px auto 100px; 
    padding: 0 24px 80px; 
}

h1 { text-shadow: 0 0 30px rgba(180,100,255,0.6); margin-bottom: 10px; font-weight: 100; text-align: center; }

.subtitle { 
    text-align: center; 
    font-size: 0.95rem; 
    opacity: 0.7; 
    letter-spacing: 0.4em; 
    text-transform: uppercase; 
    margin-bottom: 100px; 
    color: #d4a5ff; 
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
.article-meta a { color: #d4a5ff; text-decoration: none; border-bottom: 1px solid rgba(212, 165, 255, 0.3); }

h2 { 
    font-size: clamp(1.6rem, 5vw, 2.2rem); 
    text-align: center; 
    text-transform: uppercase; 
    letter-spacing: 6px; 
    color: #fff; 
    margin: 120px 0 60px 0;
    text-shadow: 0 0 15px rgba(200,160,255,0.8);
    font-weight: 200;
}
h2::after {
    content: ''; display: block; width: 60px; height: 1px; background: #d4a5ff;
    margin: 30px auto 0; box-shadow: 0 0 15px #d4a5ff;
}

.thought { 
    display: block; 
    margin-bottom: 2rem; 
    color: #f3eaff; 
    transition: 0.5s; 
    opacity: 0.85; 
    cursor: default; 
    font-weight: 300;
    line-height: 1.8;
}
.thought:hover { 
    color: #fff; 
    transform: translateX(10px); 
    opacity: 1; 
    text-shadow: 0 0 15px rgba(200,160,255,0.4); 
}

.archipel-img-container {
    position: relative;
    max-width: 85%;
    margin: 80px auto;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
    transition: 0.5s;
}
.archipel-img-container img { width: 100%; display: block; }

/* SIMULATEUR STABILISÉ */
#archipel-simulator {
    position:relative; width:100%; height:550px; background: #020005; 
    border-radius:24px; overflow:hidden; border: 1px solid rgba(200,160,255,0.3); 
    margin: 120px 0; cursor: crosshair;
}
#tisseurCanvas { width: 100%; height: 100%; display: block; }

#fusion-success {
    position: absolute; inset: 0; display: none; flex-direction: column;
    background: rgba(10, 0, 20, 0.95); backdrop-filter: blur(20px);
    z-index: 100; justify-content:center; align-items:center;
    border: 2px solid #d4a5ff; border-radius: 24px; color: #fff; text-align: center;
}

/* SOURCES MODULE */
.sources-module { margin-top: 150px; padding-top: 80px; border-top: 1px solid rgba(200, 160, 255, 0.15); }
.sources-module h3 { color: #d4a5ff; text-transform: uppercase; margin-bottom: 50px; font-weight: 100; letter-spacing: 6px; text-align: center; }
.sources-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
.source-card { text-decoration: none !important; background: rgba(255, 255, 255, 0.02); padding: 35px; border-radius: 20px; border: 1px solid rgba(200, 160, 255, 0.15); transition: 0.5s; display: flex; flex-direction: column; color: inherit; }
.source-card:hover { background: rgba(212, 165, 255, 0.05); transform: translateY(-8px); border-color: #d4a5ff; }
.source-card h4 { margin: 0 0 15px 0; color: #ffffff; font-weight: 400; font-size: 1.1rem; }
.source-card p { font-size: 0.95rem; color: #f3eaff; opacity: 0.7; margin: 0; line-height: 1.6; }

.human-quiz { 
    padding: 60px; background: rgba(40,0,80,0.15); border: 1px solid rgba(200,160,255,0.15); 
    border-radius: 24px; margin-top: 120px; 
}
.quiz-btn { padding: 18px 50px; background: transparent; border: 1px solid #d4a5ff; color: #d4a5ff; border-radius: 50px; cursor: pointer; text-transform: uppercase; letter-spacing: 2px; transition: 0.4s; }
.quiz-btn:hover { background: #d4a5ff; color: #000; box-shadow: 0 0 30px rgba(212,165,255,0.4); }

/* CONTRAINTES & DÉFINITIONS - AJOUTS SOURCÉS */
.constraints-module { margin: 120px 0; padding: 56px; background: rgba(180,100,255,0.06); border: 1px solid rgba(212,165,255,0.28); border-radius: 24px; }
.constraints-module h3 { margin: 0 0 20px; color: #d4a5ff; font-size: 1.35rem; font-weight: 300; letter-spacing: 3px; text-align: center; text-transform: uppercase; }
.constraints-intro { max-width: 720px; margin: 0 auto 34px; color: rgba(243,234,255,0.8); font-size: 1rem; line-height: 1.75; text-align: center; }
.constraints-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
.constraint-card { display: block; padding: 22px; border: 1px solid rgba(212,165,255,0.22); border-radius: 16px; background: rgba(0,0,0,0.18); color: #f3eaff; text-decoration: none; transition: transform .25s ease, border-color .25s ease, background .25s ease; }
.constraint-card:hover, .constraint-card:focus-visible { transform: translateY(-4px); border-color: #d4a5ff; background: rgba(212,165,255,0.12); outline: none; }
.constraint-card strong { display:block; margin-bottom: 8px; color: #fff; font-size: 1rem; letter-spacing: 1px; }
.constraint-card span { display:block; color: rgba(243,234,255,0.75); font-size: .92rem; line-height: 1.55; }
.term-trigger { padding: 0; border: 0; border-bottom: 1px dotted #d4a5ff; background: transparent; color: #f1caff; font: inherit; cursor: pointer; }
.term-trigger:hover, .term-trigger:focus-visible { color: #fff; border-bottom-color: #fff; outline: none; }
.term-dialog { width: min(560px, calc(100% - 32px)); padding: 0; border: 1px solid rgba(212,165,255,0.55); border-radius: 20px; background: #160126; color: #f3eaff; box-shadow: 0 24px 80px rgba(0,0,0,.7); }
.term-dialog::backdrop { background: rgba(0,0,0,.78); backdrop-filter: blur(6px); }
.term-dialog__content { padding: 32px; }
.term-dialog h3 { margin: 0 0 14px; color: #fff; font-size: 1.45rem; font-weight: 300; }
.term-dialog p { margin: 0 0 20px; color: rgba(243,234,255,.84); line-height: 1.7; }
.term-dialog__actions { display:flex; align-items:center; justify-content:space-between; gap: 16px; }
.term-dialog a { color: #f1caff; }
.term-dialog button { padding: 10px 16px; border: 1px solid rgba(212,165,255,.6); border-radius: 999px; background: transparent; color: #f3eaff; cursor: pointer; }

@media (max-width: 768px) {
    .main { margin-top: 60px; }
    h1 { font-size: 1.8rem !important; }
    #archipel-simulator { height: 400px; }
    .human-quiz { padding: 40px 20px; }
    .constraints-module { padding: 32px 20px; margin: 90px 0; }
    .constraints-grid { grid-template-columns: 1fr; }
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


/* Encadré guêpes : rôle écologique souvent sous-estimé */
.wasp-insight{margin:42px 0 22px;padding:24px 26px;border:1px solid color-mix(in srgb,#f3d66f 32%,transparent);border-radius:24px;background:color-mix(in srgb,#f3d66f 4%,transparent);box-shadow:inset 0 1px 0 rgba(255,255,255,.025)}
.wasp-insight__tag{display:inline-flex;align-items:center;gap:8px;margin:0 0 12px;padding:7px 10px;border:1px solid color-mix(in srgb,#f3d66f 35%,transparent);border-radius:999px;font-size:.64rem;letter-spacing:.12em;text-transform:uppercase;opacity:.78}
.wasp-insight__tag::before{content:'';width:6px;height:6px;border-radius:50%;background:#f3d66f;box-shadow:0 0 10px #f3d66f}
.wasp-insight h3{margin:0 0 16px;font-size:clamp(1.25rem,2.4vw,1.75rem);font-weight:400;color:inherit}
.wasp-insight p{margin:0 0 14px;line-height:1.75}
.wasp-insight__roles{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:11px;margin:18px 0}
.wasp-insight__role{padding:13px 14px;border:1px solid color-mix(in srgb,currentColor 13%,transparent);border-radius:16px;background:color-mix(in srgb,currentColor 2.5%,transparent)}
.wasp-insight__role strong{display:block;margin-bottom:5px;font-size:.82rem}
.wasp-insight__role span{display:block;font-size:.78rem;line-height:1.5;opacity:.7}
.wasp-insight details{margin-top:17px;padding-top:14px;border-top:1px solid color-mix(in srgb,currentColor 12%,transparent)}
.wasp-insight summary{cursor:pointer;font-size:.76rem;letter-spacing:.05em;opacity:.72}
.wasp-insight__sources{margin:13px 0 0;padding-left:18px;font-size:.8rem;line-height:1.65;opacity:.75}
.wasp-insight__sources a{color:inherit;text-decoration:none;border-bottom:1px solid color-mix(in srgb,currentColor 28%,transparent)}
body.reading-mode .wasp-insight{background:color-mix(in srgb,currentColor 2%,transparent)}
@media(max-width:760px){.wasp-insight{padding:20px 18px}.wasp-insight__roles{grid-template-columns:1fr}}


/* Encadré vibration végétale : signal mécanique documenté */
.plant-vibration-insight{margin:30px 0 18px;padding:24px 26px;border:1px solid color-mix(in srgb,#78ff9c 30%,transparent);border-radius:24px;background:color-mix(in srgb,#78ff9c 3.5%,transparent);box-shadow:inset 0 1px 0 rgba(255,255,255,.025)}
.plant-vibration-insight__tag{display:inline-flex;align-items:center;gap:8px;margin:0 0 12px;padding:7px 10px;border:1px solid color-mix(in srgb,#78ff9c 34%,transparent);border-radius:999px;font-size:.64rem;letter-spacing:.12em;text-transform:uppercase;opacity:.78}
.plant-vibration-insight__tag::before{content:'';width:6px;height:6px;border-radius:50%;background:#78ff9c;box-shadow:0 0 10px #78ff9c}
.plant-vibration-insight h3{margin:0 0 14px;font-size:clamp(1.2rem,2.3vw,1.7rem);font-weight:400;color:inherit}
.plant-vibration-insight p{margin:0 0 13px;line-height:1.75}
.plant-vibration-insight__chain{display:flex;align-items:center;flex-wrap:wrap;gap:7px;margin:17px 0;padding:12px 14px;border:1px solid color-mix(in srgb,currentColor 12%,transparent);border-radius:16px;background:color-mix(in srgb,currentColor 2.5%,transparent);font-size:.78rem}
.plant-vibration-insight__chain span{opacity:.5}
.plant-vibration-insight__caution{margin-top:16px;padding:13px 15px;border-left:2px solid #f3d66f;background:color-mix(in srgb,#f3d66f 3%,transparent);font-size:.84rem;line-height:1.65}
.plant-vibration-insight details{margin-top:17px;padding-top:14px;border-top:1px solid color-mix(in srgb,currentColor 12%,transparent)}
.plant-vibration-insight summary{cursor:pointer;font-size:.76rem;letter-spacing:.05em;opacity:.72}
.plant-vibration-insight__sources{margin:13px 0 0;padding-left:18px;font-size:.8rem;line-height:1.65;opacity:.75}
.plant-vibration-insight__sources a{color:inherit;text-decoration:none;border-bottom:1px solid color-mix(in srgb,currentColor 28%,transparent)}
body.reading-mode .plant-vibration-insight{background:color-mix(in srgb,currentColor 2%,transparent)}
@media(max-width:760px){.plant-vibration-insight{padding:20px 18px}}

</style>
</head>
<body>
<?= $headerNavigation ?>

<canvas id="articleArchipelCanvas"></canvas>
<div class="article-archipel-halo"></div>

<main class="main">
    <section>
        <h1>La Conscience Archipélique</h1>
        <p class="subtitle">Relier les Mondes, Relier les Vivants</p>

        <!-- AMÉLIORATION: Méta-données visibles pour l'E-E-A-T -->
        <p class="article-meta">Publié par <a href="apropos.php">Flux-Info.net</a> le 22 mai 2026</p>
<?php renderArticleReadingTools([
    'level' => 'Réflexion Éditoriale + Sources',
    'time' => '10 min',
    'summary' => 'Archipel est la couche relationnelle de Flux Info. Il ne cherche pas à remplacer les autres territoires : il montre comment leurs phénomènes se rencontrent, se répondent et produisent des conséquences communes.',
    'learn' => ['Comprendre le rôle relationnel d’Archipel', 'Explorer les dépendances entre signaux, habitats et sociétés', 'Distinguer réflexion philosophique et faits scientifiques']
]); ?>
        <br><br>
        <span class="thought">Penser en Archipel, c’est refuser l'illusion des frontières étanches.</span>
        <span class="thought">C’est voir le monde non comme un bloc monolithique, mais comme un ensemble d’îles précieuses.</span>
        
        <span class="thought">
            Chaque domaine ( 
            <a href="ocean.php" style="color: #00d4ff; text-decoration: none; border-bottom: 1px solid rgba(0,212,255,0.3);"><em>l'océan</a>, 
            <a href="ciel.php" style="color: #fff; text-decoration: none; border-bottom: 1px solid rgba(255,255,255,0.3);">le ciel</a>, 
            <a href="terre.php" style="color: #50ffaf; text-decoration: none; border-bottom: 1px solid rgba(80,255,175,0.3);">la terre</a>, 
            <a href="cosmos.php" style="color: #c8a0ff; text-decoration: none; border-bottom: 1px solid rgba(200,160,255,0.3);">le cosmos</em></a> 
            ) est une île de savoir.
        </span>

        <span class="thought">Mais aucune île n'est isolée: elles sont baignées par les mêmes courants, les mêmes flux d'information.</span>
        <span class="thought">La conscience archipélique est le navire qui nous permet de naviguer entre ces rives.</span>

        <div class="archipel-img-container">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/archipel-global.webp" alt="Visualisation globale de l'interconnexion des mondes et des savoirs">
        </div>

        <h2>I. L'Éthique de la Relation</h2>
        <br><br>
        <span class="thought">Rien n'existe en soi, tout existe en relation.</span>
        <span class="thought">Une décision prise sur la Terre ferme résonne dans les profondeurs de l'océan.</span>
        <span class="thought">Un souffle dans l'atmosphère modifie la trajectoire du Vivant.</span>
        <span class="thought">La Conscience archipélique consiste à percevoir ces fils invisibles qui nous lient.</span>
        <span class="thought">Elle nous apprend qu'une crise locale n'est qu'un symptôme d'un déséquilibre global.</span>
        <span class="thought">Comprendre ce réseau, c'est passer de la domination à la cohabitation.</span>

        <h2>II. La Navigation de la Complexité</h2>
        <br><br>
        <span class="thought">Habiter le monde aujourd'hui demande une nouvelle forme d'intelligence.</span>
        <span class="thought">Il ne suffit plus d'accumuler des données froides.</span>
        <span class="thought">Il faut savoir tisser des liens entre les disciplines.</span>
        <span class="thought">L'astrophysique répond à la biologie ; la sociologie s'éclaire par l'écologie.</span>
        <span class="thought">C'est dans l'espace entre les îles que jaillit la véritable compréhension.</span>

        <div class="archipel-img-container">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/archipel-tissage.webp" alt="Représentation symbolique du tissage des savoirs interdisciplinaires">
        </div>

        <h2>III. L'Unité dans la Diversité</h2>
        <br><br>
        <span class="thought">L'Archipel n'est pas l'uniformité.</span>
        <span class="thought">Chaque île garde sa culture, sa géologie, sa lumière propre.</span>
        <span class="thought">Mais elles partagent toutes le même horizon.</span>
        <span class="thought">Notre responsabilité est de préserver cette diversité tout en cultivant l'unité de l'ensemble.</span>
        <span class="thought">Nous ne sommes pas les maîtres de l'Archipel, nous en sommes les gardiens passagers.</span>
    </section>
    <br><br>
    <section id="pollinisateurs">
        <h2>IV. Intelligence Sacrifiée : l’Effondrement Silencieux des Abeilles Sauvages</h2>
        <br><br>

        <span class="thought">
            La vulnérabilité des <button class="term-trigger" type="button" onclick="showDefinition('pollinisation')">pollinisateurs</button> ne se résume pas aux ruches domestiques:
            elle concerne les relations qui rendent possible la reproduction de nombreuses plantes et l’équilibre de multiples milieux.
        </span>

        <span class="thought">
            Une enquête américaine a estimé à 55,6&nbsp;% les pertes annuelles de colonies d’abeilles mellifères <em>gérées</em> entre avril&nbsp;2024 et avril&nbsp;2025.
            Ce résultat ne décrit pas, à lui seul, l’état de toutes les abeilles sauvages ; il rappelle toutefois que les pressions sur les habitats, les ressources florales et les pratiques agricoles se combinent.
        </span>
        
        <div class="archipel-img-container">
            <!-- AMÉLIORATION: Attribut alt descriptif -->
            <img src="images/abeilles.webp" alt="abeilles sauvages">
        </div>

        <span class="thought">
            De nombreuses espèces sauvages ne bénéficient pas des mêmes formes de suivi que les colonies gérées.
            Elles sont exposées, selon les espèces et les paysages, aux pesticides, à la <button class="term-trigger" type="button" onclick="showDefinition('fragmentation')">fragmentation écologique</button>,
            à l’appauvrissement des ressources florales et aux perturbations de leur <button class="term-trigger" type="button" onclick="showDefinition('microbiote')">microbiote</button>.
        </span>

        <span class="thought">
            Les recherches sur les abeilles documentent des capacités d’apprentissage, de navigation et de mémoire adaptées à leurs tâches écologiques.
            Elles invitent à prendre au sérieux la diversité des formes d’intelligence, sans réduire les comparaisons entre espèces à une seule échelle de performance.
        </span>

        <span class="thought">
            Traitement de signaux complexes, navigation solaire, mémoire spatiale et apprentissage: ces compétences rappellent que l’intelligence du Vivant se déploie toujours dans une relation à un milieu, à une histoire et à d’autres organismes.
        </span>

        <span class="thought">
            La <button class="term-trigger" type="button" onclick="showDefinition('monoculture')">monoculture</button> et les pratiques chimiques intensives peuvent simplifier les réseaux écologiques.
            Restaurer des habitats diversifiés, réduire les expositions évitables et maintenir des continuités paysagères sont des leviers concrets pour soutenir la résilience du Vivant.
        </span>

        <aside class="wasp-insight" aria-labelledby="wasp-insight-title">
            <p class="wasp-insight__tag">Fait Établi</p>
            <h3 id="wasp-insight-title">À quoi servent les Guêpes ?</h3>
            <p>Leur réputation masque une réalité écologique plus riche. Les guêpes, sociales comme solitaires selon les espèces, participent à plusieurs fonctions importantes dans les écosystèmes.</p>
            <div class="wasp-insight__roles">
                <div class="wasp-insight__role"><strong>Réguler</strong><span>Beaucoup chassent ou parasitent d’autres arthropodes, dont certains ravageurs des cultures.</span></div>
                <div class="wasp-insight__role"><strong>Polliniser</strong><span>En visitant les fleurs pour le nectar, elles transportent du pollen. Certaines plantes ont même des relations très spécialisées avec des guêpes.</span></div>
                <div class="wasp-insight__role"><strong>Recycler</strong><span>Certaines consomment aussi des matières animales ou végétales en décomposition et participent ainsi au recyclage de matière.</span></div>
            </div>
            <p>Les espèces qui viennent autour de nos repas ne représentent qu’une petite partie de leur diversité. Beaucoup de guêpes sont discrètes, souvent solitaires, et leur rôle écologique reste moins étudié que celui des abeilles.</p>
            <p><strong>Le bon réflexe n’est donc pas de demander si une espèce est « utile » en soi, mais quelles relations elle entretient dans le réseau vivant.</strong></p>
            <details>
                <summary>Vérifier les sources</summary>
                <ul class="wasp-insight__sources">
                    <li><a href="https://onlinelibrary.wiley.com/doi/10.1111/brv.12719" target="_blank" rel="noopener noreferrer">Brock, Cini &amp; Sumner (2021), <em>Biological Reviews</em></a> : synthèse sur les services écosystémiques des guêpes, notamment prédation, pollinisation et décomposition.</li>
                    <li><a href="https://www.kew.org/read-and-watch/orchid-pollination-tricks" target="_blank" rel="noopener noreferrer">Royal Botanic Gardens, Kew</a> : exemples de pollinisation spécialisée d’orchidées par des guêpes.</li>
                </ul>
            </details>
        </aside>
    </section>

    <section id="signal-habitat">
        <h2>V. Du Signal à l’Habitat</h2>
        <span class="thought">L’alerte portée par les pollinisateurs ne désigne pas un seul coupable ni une seule réparation. Elle invite à regarder ensemble l’alimentation, les sols, l’eau, les usages du territoire et les continuités entre les milieux.</span>
        <span class="thought">C’est ici que la pensée archipélique devient praticable: relier les signaux sans les confondre, puis agir à l’échelle des relations qui les rendent possibles.</span>

        <aside class="plant-vibration-insight" aria-labelledby="plant-vibration-title">
            <p class="plant-vibration-insight__tag">Fait Établi</p>
            <h3 id="plant-vibration-title">Quand une Feuille « Entend » une Chenille</h3>
            <p>Chez <em>Arabidopsis thaliana</em>, les vibrations mécaniques produites par la mastication d’une chenille peuvent modifier la réponse défensive de la plante. Des expériences de lecture vibratoire ont montré qu’une plante préalablement exposée à ces vibrations produit ensuite davantage de certains composés de défense lorsqu’elle subit réellement l’herbivorie.</p>
            <p>La réponse n’est pas déclenchée de la même manière par n’importe quelle perturbation : dans ces expériences, la plante distinguait les vibrations de mastication de celles provoquées par le vent ou par le chant d’un insecte.</p>
            <div class="plant-vibration-insight__chain" aria-label="Chaîne du phénomène">
                <strong>Mastication</strong><span>→</span><strong>vibration de la feuille</strong><span>→</span><strong>perception mécanique</strong><span>→</span><strong>défense renforcée lors de l’attaque</strong>
            </div>
            <p>Les amplitudes utilisées dans l’étude variaient d’environ <strong>0,35 à 3,1 micromètres</strong>. Pour les glucosinolates aliphatiques, l’augmentation mesurée atteignait environ <strong>32&nbsp;% dans la feuille exposée aux vibrations</strong> et <strong>24&nbsp;% dans une autre feuille de la même plante</strong>.</p>
            <div class="plant-vibration-insight__caution"><strong>À ne pas confondre.</strong> Ces résultats démontrent une perception de vibrations au sein d’une plante. Ils ne prouvent pas qu’une plante voisine reçoit une « alerte » par le sol, ni l’existence d’un réseau acoustique qui immuniserait tout un voisinage.</div>
            <p><strong>Une vibration physique peut donc devenir une information biologiquement pertinente sans constituer, à elle seule, un langage entre plantes.</strong></p>
            <details>
                <summary>Vérifier les sources</summary>
                <ul class="plant-vibration-insight__sources">
                    <li><a href="https://doi.org/10.1007/s00442-014-2995-6" target="_blank" rel="noopener noreferrer">Appel &amp; Cocroft (2014), <em>Oecologia</em></a> : démonstration expérimentale de l’effet des vibrations de mastication sur les défenses d’<em>Arabidopsis thaliana</em>.</li>
                    <li><a href="https://pubmed.ncbi.nlm.nih.gov/32533358/" target="_blank" rel="noopener noreferrer">Kollasch et al. (2020)</a> : étude de la constance des vibrations produites par différents herbivores et de leur reconnaissance par la plante.</li>
                    <li><a href="https://pubmed.ncbi.nlm.nih.gov/31297123/" target="_blank" rel="noopener noreferrer">Body et al. (2019), <em>Frontiers in Plant Science</em></a> : effets des vibrations de mastication sur les phytohormones et les composés volatils.</li>
                </ul>
            </details>
        </aside>
    </section>

  <?php renderFluxConnections('archipel'); ?>

    <section class="flux-pathway" aria-labelledby="archipel-flux-title">
        <p class="flux-pathway__eyebrow">Carrefour des Flux</p>
        <h2 id="archipel-flux-title">Relier ce que les Autres Portes ont Révélé</h2>
        <p>L’Archipel n’est pas une catégorie supplémentaire: c’est le lieu où les domaines redeviennent un système. On peut repartir d’ici vers chacun des articles sans repasser par les portes.</p>
        <nav class="flux-pathway__chain" aria-label="Carrefour des articles de Flux Info">
            <a href="article-ocean-courants.php">Océan</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-ciel-vents.php">Ciel</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-terre-migrations.php">Terre</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-cosmos-etoiles.php">Cosmos</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="article-humanite-vivant.php">Humanité</a><span class="flux-pathway__arrow" aria-hidden="true">→</span>
            <a href="#signal-habitat" aria-current="location">Archipel · vous êtes ici</a>
        </nav>
        <a class="flux-pathway__next" href="index.php#portes">Voir à nouveau les six portes →</a>
    </section>

    <section class="constraints-module" aria-labelledby="archipel-constraints-title">
        <h3 id="archipel-constraints-title">Les Contraintes qui relient l’Archipel</h3>
        <p class="constraints-intro">Ces pistes prolongent l’article vers <strong>AGIBIOSPHERIC</strong>, l’un des autres sites de notre Archipel. Chaque lien ouvre une contrainte précise, dans un nouvel onglet.</p>
        <div class="constraints-grid">
            <a class="constraint-card" href="https://www.agibiospheric.net/biodiversite.html" target="_blank" rel="noopener noreferrer"><strong>Biodiversité</strong><span>La diversité des pollinisateurs comme condition de robustesse des milieux.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/sols-vivants.html" target="_blank" rel="noopener noreferrer"><strong>Sols vivants</strong><span>Les habitats, les ressources et les communautés invisibles qui soutiennent les relations.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/eau-douce.html" target="_blank" rel="noopener noreferrer"><strong>Eau douce</strong><span>L’eau et la végétation comme continuités concrètes entre les îles du paysage.</span></a>
            <a class="constraint-card" href="https://www.agibiospheric.net/infrastructures.html" target="_blank" rel="noopener noreferrer"><strong>Infrastructures</strong><span>Les choix agricoles et territoriaux qui organisent ou fragmentent les milieux.</span></a>
        </div>
    </section>


    <section>
        <div class="article-experience-lead">
            <p class="article-experience-lead__kicker">Expérience interactive</p>
            <h3>Le Tisseur de Liens</h3>
            <p>Activez les îles et regardez apparaître le réseau. Ici, la compréhension ne vient pas d’un domaine isolé mais de leurs relations.</p>
            <div class="experience-action"><strong>Geste</strong><span>Cliquer sur les îles pour les relier</span></div>
        </div>
        <div id="archipel-simulator">
            <div style="position:absolute; top:20px; left:20px; color:#d4a5ff; font-size:0.75rem; text-transform:uppercase; letter-spacing:2px; z-index:5;">Le Tisseur de Liens: Cliquez sur les îles pour les relier</div>
            <canvas id="tisseurCanvas"></canvas>
            <div id="fusion-success">
                <span style="font-size: 0.8rem; letter-spacing: 5px; opacity: 0.7; text-transform: uppercase;">Système stabilisé</span>
                <span style="font-size: 2.2rem; font-weight: 100; color: #d4a5ff;">Unité Archipélique</span>
                <span style="margin-top: 15px; font-style: italic; opacity: 0.8;">L'harmonie naît de la connexion</span>
            </div>
        </div>
<aside class="sim-consequences sim-consequences--inline" id="archipel-live-consequences" style="--sim-accent:#d4a5ff" aria-live="polite">
                        <div class="sim-consequences__head">
                            <div>
                                <p class="sim-consequences__kicker">Le réseau prend sens quand les domaines se relient</p>
                                <p class="sim-consequences__status" id="archipel-live-status">Activez une île: elle révèle un domaine du site. Reliez-les pour faire apparaître le système.</p>
                            </div>
                            <div class="sim-consequences__meter" id="archipel-live-meter">0 / 6 domaines reliés</div>
                        </div>
                        <nav class="sim-consequences__chain" aria-label="Domaines reliés par le Tisseur de Liens">
                            <a data-archipel-step="ocean" href="article-ocean-courants.php">Océan</a><span class="sim-consequences__arrow">↔</span>
                            <a data-archipel-step="ciel" href="article-ciel-vents.php">Ciel</a><span class="sim-consequences__arrow">↔</span>
                            <a data-archipel-step="terre" href="article-terre-migrations.php">Terre</a><span class="sim-consequences__arrow">↔</span>
                            <a data-archipel-step="cosmos" href="article-cosmos-etoiles.php">Cosmos</a><span class="sim-consequences__arrow">↔</span>
                            <a data-archipel-step="humanite" href="article-humanite-vivant.php">Humanité</a><span class="sim-consequences__arrow">↔</span>
                            <a class="is-current" data-archipel-step="archipel" href="#archipel-simulator">Archipel</a>
                        </nav>
                    </aside>
</section>

    <div class="article-knowledge-bridge">
        <p class="article-knowledge-bridge__kicker">Après le tissage</p>
        <h3>Vérifier la Pensée en Réseau</h3>
        <p>Quelques questions pour distinguer juxtaposition, interdépendance et compréhension archipélique.</p>
    </div>
    <section class="human-quiz">
        <h3 style="text-align:center; color:#d4a5ff; margin-bottom:50px; text-transform:uppercase; letter-spacing:4px;">Analyse de la Pensée</h3>
        <div id="quiz-container">
            <div class="quiz-item">
                <p>1. Que signifie "Penser en archipel" ?</p>
                <label><input type="radio" name="q1" value="1"> Relier des domaines distincts par leurs interactions</label><br>
                <label><input type="radio" name="q1" value="0"> Séparer chaque domaine pour mieux l'étudier</label>
            </div>
            <div class="quiz-item">
                <p>2. Pourquoi la relation est-elle plus importante que l'île elle-même ?</p>
                <label><input type="radio" name="q2" value="1"> Parce que le monde est un réseau d'influences mutuelles</label><br>
                <label><input type="radio" name="q2" value="0"> Parce que les îles sont géographiquement fixes</label>
            </div>
            <div class="quiz-item">
                <p>3. Quel est l'objectif final de cette Conscience ?</p>
                <label><input type="radio" name="q3" value="1"> Passer de la domination à la cohabitation responsable</label><br>
                <label><input type="radio" name="q3" value="0"> Centraliser le savoir en un point unique</label>
            </div>
            <div class="quiz-item">
                <p>4. D'après le texte, où jaillit la véritable compréhension ?</p>
                <label><input type="radio" name="q4" value="1"> Dans l'espace entre les îles (l'interdisciplinaire)</label><br>
                <label><input type="radio" name="q4" value="0"> Dans l'accumulation de données froides</label>
            </div>
        </div>
        <div style="text-align:center; margin-top:50px;">
            <button class="quiz-btn" onclick="checkQuiz()">Soumettre l'analyse</button>
            <div id="quiz-result" style="margin-top:25px; font-weight:bold; color:#d4a5ff; min-height:24px;"></div>
        </div>
    </section>

    <section class="sources-module">
        <h3>Sources & Fondements</h3>
        <p class="sources-note"><strong>Repères documentaires.</strong> Cette sélection réunit des sources scientifiques, institutionnelles et philosophiques. Elle documente les notions mobilisées, sans transformer les passages narratifs ou les hypothèses du projet en résultats établis. <time datetime="2026-08-28">Liens vérifiés le 28 août 2026.</time></p>
        <div class="sources-grid">
            <a href="https://www.cnrs.fr" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>CNRS</h4>
                <p>Recherches sur les systèmes complexes et l'interdépendance des écosystèmes terrestres.</p>
            </a>
            <a href="https://www.ipcc.ch" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>GIEC</h4>
                <p>Rapports sur les interactions globales entre climat, océans et biosphère.</p>
            </a>
            <a href="https://plato.stanford.edu" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Stanford Encyclopedia</h4>
                <p>Analyse philosophique de la pensée systémique et de l'éthique de la relation.</p>
            </a>
            <!-- 🔵 AJOUT DES SOURCES ABEILLES SAUVAGES -->
            <a href="https://www.nationalgeographic.com" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>National Geographic</h4>
                <p>Études sur l'intelligence des abeilles et le projet LongeviBEES.</p>
            </a>

            <a href="https://www.sciencedirect.com" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>ScienceDirect</h4>
                <p>Cognitive ecology and spatial memory in pollinators.</p>
            </a>

            <a href="https://apiaryinspectors.org/US-beekeeping-survey-24-25" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Apiary Inspectors of America</h4>
                <p>Résultats préliminaires de l’enquête américaine 2024–2025 sur les pertes de colonies gérées.</p>
            </a>

            <a href="https://www.ars.usda.gov/research/project/?accnNo=447960" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>USDA Agricultural Research Service</h4>
                <p>Programme de recherche sur les habitats, les stress cumulés et la santé des pollinisateurs gérés comme sauvages.</p>
            </a>

            <a href="https://onlinelibrary.wiley.com/doi/10.1111/brv.12719" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Biological Reviews</h4>
                <p>Synthèse scientifique sur les services écosystémiques rendus par les guêpes : prédation, pollinisation, décomposition et autres fonctions.</p>
            </a>

            <a href="https://www.kew.org/read-and-watch/orchid-pollination-tricks" target="_blank" rel="noopener noreferrer" class="source-card">
                <h4>Royal Botanic Gardens, Kew</h4>
                <p>Exemples documentés de relations spécialisées entre certaines orchidées et leurs guêpes pollinisatrices.</p>
            </a>

        </div>
    </section>

    <a href="archipel.php" style="display:inline-block; margin-top:60px; color:#d4a5ff; text-decoration:none; font-weight: bold;">← Retourner à l'Archipel</a>
</main>

<dialog id="term-dialog" class="term-dialog" aria-labelledby="term-dialog-title">
    <div class="term-dialog__content">
        <h3 id="term-dialog-title"></h3>
        <p id="term-dialog-description"></p>
        <div class="term-dialog__actions">
            <a id="term-dialog-link" target="_blank" rel="noopener noreferrer">Approfondir sur Wikipédia</a>
            <button type="button" onclick="closeDefinition()">Fermer</button>
        </div>
    </div>
</dialog>

<script>
/* 1. FOND GÉNÉRATIF */
(function() {
    const canvasA = document.getElementById('articleArchipelCanvas');
    const ctxA = canvasA.getContext('2d');
    let w, h, particles = [];
    function resize() { w = canvasA.width = window.innerWidth; h = canvasA.height = window.innerHeight; }
    window.addEventListener('resize', resize); resize();

    class Particle {
        constructor() { this.reset(); }
        reset() {
            this.x = Math.random() * w; this.y = Math.random() * h;
            this.vx = (Math.random() - 0.5) * 0.5; this.vy = (Math.random() - 0.5) * 0.5;
            this.history = []; this.maxLength = 20;
        }
        update() {
            this.x += this.vx; this.y += this.vy;
            this.history.push({x:this.x, y:this.y});
            if(this.history.length > this.maxLength) this.history.shift();
            if(this.x<0 || this.x>w || this.y<0 || this.y>h) this.reset();
        }
        draw() {
            ctxA.strokeStyle = 'rgba(212, 165, 255, 0.2)';
            ctxA.beginPath();
            if(this.history.length>1) {
                ctxA.moveTo(this.history[0].x, this.history[0].y);
                for(let i=1; i<this.history.length; i++) ctxA.lineTo(this.history[i].x, this.history[i].y);
                ctxA.stroke();
            }
        }
    }
    for(let i=0; i<60; i++) particles.push(new Particle());
    function anim() {
        ctxA.clearRect(0,0,w,h);
        particles.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(anim);
    }
    anim();
})();

/* 2. SIMULATEUR RÉPARÉ */
(function() {
    const tCanvas = document.getElementById('tisseurCanvas');
    const tCtx = tCanvas.getContext('2d');
    const sSuccess = document.getElementById('fusion-success');
    let isles = [], connections = [], score = 0;

    function init() {
        tCanvas.width = tCanvas.offsetWidth; tCanvas.height = tCanvas.offsetHeight;
        const domainNames = [
            ['ocean', 'Océan'], ['ciel', 'Ciel'], ['terre', 'Terre'],
            ['cosmos', 'Cosmos'], ['humanite', 'Humanité'], ['archipel', 'Archipel']
        ];
        const marginX = Math.min(100, Math.max(48, tCanvas.width * .12));
        const marginY = Math.min(100, Math.max(55, tCanvas.height * .18));
        isles = domainNames.map(([key, label], index) => ({
            key, label,
            x: marginX + Math.random()*Math.max(40, tCanvas.width-(marginX*2)),
            y: marginY + Math.random()*Math.max(40, tCanvas.height-(marginY*2)),
            active: false
        }));
        connections = []; score = 0;
        const meter = document.getElementById('archipel-live-meter');
        const status = document.getElementById('archipel-live-status');
        if (meter) meter.textContent = `0 / ${isles.length} domaines reliés`;
        if (status) status.textContent = 'Activez une île: elle révèle un domaine du site. Reliez-les pour faire apparaître le système.';
        document.querySelectorAll('[data-archipel-step]').forEach(step => step.classList.remove('is-active'));
    }
    window.addEventListener('resize', init); setTimeout(init, 300);

    tCanvas.addEventListener('pointerdown', (e) => {
        const rect = tCanvas.getBoundingClientRect();
        const mx = e.clientX - rect.left;
        const my = e.clientY - rect.top;
        isles.forEach(isle => {
            if(Math.hypot(isle.x-mx, isle.y-my) < 30 && !isle.active) {
                isle.active = true; score++;
                if(connections.length > 0) connections.push(isle);
                else connections = [isle];
                const step = document.querySelector(`[data-archipel-step="${isle.key}"]`);
                if (step) step.classList.add('is-active');
                const meter = document.getElementById('archipel-live-meter');
                const status = document.getElementById('archipel-live-status');
                if (meter) meter.textContent = `${score} / ${isles.length} domaines reliés`;
                if (status) status.textContent = score === isles.length
                    ? 'Tous les domaines sont reliés: l’Archipel devient une carte des interdépendances plutôt qu’une collection d’îles.'
                    : `${isle.label} rejoint le réseau. Observez comment la compréhension grandit à mesure que les relations apparaissent.`;
            }
        });
    });

    function run() {
        tCtx.fillStyle = '#020005'; tCtx.fillRect(0,0,tCanvas.width, tCanvas.height);
        
        if(connections.length > 1) {
            tCtx.strokeStyle = '#d4a5ff'; tCtx.lineWidth = 1.5;
            tCtx.beginPath();
            tCtx.moveTo(connections[0].x, connections[0].y);
            for(let i=1; i<connections.length; i++) tCtx.lineTo(connections[i].x, connections[i].y);
            tCtx.stroke();
        }

        isles.forEach(isle => {
            tCtx.fillStyle = isle.active ? '#fff': 'rgba(212, 165, 255, 0.2)';
            tCtx.shadowBlur = isle.active ? 15: 0; tCtx.shadowColor = '#d4a5ff';
            tCtx.beginPath(); tCtx.arc(isle.x, isle.y, 10, 0, Math.PI*2); tCtx.fill();
            tCtx.shadowBlur = 0;
            tCtx.font = '12px Inter, sans-serif';
            tCtx.textAlign = 'center';
            tCtx.fillStyle = isle.active ? '#ffffff' : 'rgba(212, 165, 255, 0.62)';
            tCtx.fillText(isle.label, isle.x, isle.y + 28);
        });

        if(score >= isles.length) {
            sSuccess.style.display = 'flex';
            setTimeout(() => { sSuccess.style.display='none'; init(); }, 4000);
        }
        requestAnimationFrame(run);
    }
    run();
})();

function checkQuiz() {
    let s = 0;
    if(document.querySelector('input[name="q1"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q2"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q3"]:checked')?.value === "1") s++;
    if(document.querySelector('input[name="q4"]:checked')?.value === "1") s++;
    const r = document.getElementById('quiz-result');
    r.innerHTML = `Cohérence: ${s} / 4. ${s === 4 ? 'Vision archipélique validée.': 'Certains liens manquent.'}`;
}

const definitions = {
    pollinisation: { title: 'Pollinisation', description: 'Transfert de pollen qui permet la fécondation des plantes à fleurs.', url: 'https://fr.wikipedia.org/wiki/Pollinisation' },
    microbiote: { title: 'Microbiote', description: 'Ensemble de micro-organismes associés à un organisme ou à un milieu.', url: 'https://fr.wikipedia.org/wiki/Microbiote' },
    monoculture: { title: 'Monoculture', description: 'Culture dominante d’une même espèce sur une surface donnée.', url: 'https://fr.wikipedia.org/wiki/Monoculture' },
    fragmentation: { title: 'Fragmentation écologique', description: 'Découpage d’un habitat en fragments plus petits et moins connectés.', url: 'https://fr.wikipedia.org/wiki/Fragmentation_%C3%A9cologique' }
};

function showDefinition(key) {
    const item = definitions[key];
    if (!item) return;
    document.getElementById('term-dialog-title').textContent = item.title;
    document.getElementById('term-dialog-description').textContent = item.description;
    document.getElementById('term-dialog-link').href = item.url;
    document.getElementById('term-dialog').showModal();
}

function closeDefinition() { document.getElementById('term-dialog').close(); }
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
