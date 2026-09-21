<?php
$pageTitle = 'Flux Info | Comprendre les Flux qui relient notre Monde';
$pageDesc = 'Explorez les liens entre climat, océans, atmosphère, biodiversité, cosmos, technologies et sociétés. Suivez les flux qui relient les phénomènes.';
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



<title>Flux Info | Comprendre les Flux qui relient notre Monde</title>

<meta name="description" content="Explorez les liens entre climat, océans, atmosphère, biodiversité, cosmos, technologies et sociétés. Suivez les flux qui relient les phénomènes.">

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
    /* ========================= */
    /* STRUCTURE DE L'INDEX      */
    /* ========================= */
    
    /* On ne redéfinit plus body ni h1 ici, 
       ils héritent de la finesse du header.php */

    .index-halo {
        position: fixed;
        inset: 0;
        background:
            radial-gradient(circle at 50% 30%, rgba(180,140,255,0.35), transparent 70%),
            radial-gradient(circle at 80% 80%, rgba(120,80,200,0.25), transparent 75%);
        mix-blend-mode: screen;
        animation: haloPulse 16s ease-in-out infinite;
        pointer-events: none;
        z-index: 1;
        will-change: opacity, transform;
    }

    @keyframes haloPulse {
        0% { opacity: 0.35; transform: scale(1); }
        50% { opacity: 0.65; transform: scale(1.06); }
        100% { opacity: 0.35; transform: scale(1); }
    }

    #indexCanvas {
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background: transparent;
    }

    /* Ajustement de la position du titre principal */
    h1 {
        margin-top: 100px;
        position: relative;
        z-index: 5;
    }

    /* AMÉLIORATION: Adaptation du style pour la balise h2 */
    .subtitle, h2.subtitle {
        text-align: center;
        margin-top: -20px;
        font-size: 0.85rem;
        color: #f3eaff;
        opacity: 0.5;
        letter-spacing: 0.4em;
        text-transform: uppercase;
        position: relative;
        z-index: 5;
        font-weight: 300;
        border: none;
        padding: 0;
    }

    /* Titre de section invisible mais présent pour la sémantique IA */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    /* --- STYLE DU MANIFESTE (AÉRE ET FIN) --- */
    .manifesto {
        position: relative;
        z-index: 5;
        max-width: 850px;
        margin: 100px auto; /* Plus d'espace haut/bas */
        padding: 10px 0 10px 40px; 
        text-align: left;
        border-left: 1px solid rgba(200, 160, 255, 0.2); /* Ligne plus fine */
    }

    /* On laisse la taille de police et l'interligne hérités du header */
    .manifesto p {
        margin-bottom: 2rem;
        font-weight: 300; /* Assure la finesse du texte */
    }

    .manifesto p:last-child {
        margin-bottom: 0;
    }

    /* --- GRILLE DES PORTES --- */
    .doors {
        position: relative;
        z-index: 5;
        max-width: 1100px;
        margin: 60px auto 120px;
        padding: 0 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .door {
        position: relative;
        padding: 50px 30px;
        border-radius: 20px;
        text-align: center;
        text-decoration: none;
        color: #f3eaff;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        overflow: hidden;
    }

    .door span {
        display: block;
        font-size: 1.2rem; /* Légèrement réduit pour plus de finesse */
        font-weight: 300; /* Moins gras pour coller au nouveau style */
        letter-spacing: 3px;
        text-transform: uppercase;
        z-index: 2;
        position: relative;
        transition: transform 0.5s ease;
    }

    .door::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, var(--glow-color, #c8a0ff), transparent 70%);
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: 1;
    }

    .door:hover {
        transform: translateY(-10px);
        border-color: rgba(200, 160, 255, 0.4);
        background: rgba(255, 255, 255, 0.06);
    }

    .door:hover span { transform: scale(1.05); text-shadow: 0 0 15px rgba(255,255,255,0.5); }

    .door-portal {
        display: block;
        color: inherit;
        text-decoration: none;
        position: relative;
        z-index: 2;
    }

    .door-experience {
        position: relative;
        z-index: 2;
        margin: 1.4rem 0 0.9rem;
        color: #f3eaff;
        opacity: 0.68;
        font-size: 0.7rem;
        font-weight: 300;
        letter-spacing: 0.16em;
        line-height: 1.6;
        text-transform: uppercase;
    }

    .door-article {
        position: relative;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.55rem;
        color: #f3eaff;
        font-size: 0.8rem;
        font-weight: 300;
        line-height: 1.45;
        text-decoration: none;
        transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .door-article::after { content: '→'; color: var(--glow-color, #c8a0ff); }
    .door-article:hover, .door-article:focus-visible { color: #ffffff; text-shadow: 0 0 12px rgba(255,255,255,0.45); }
    .door-portal:focus-visible, .door-article:focus-visible { outline: 1px solid var(--glow-color, #c8a0ff); outline-offset: 7px; }

    .door-ocean  { --glow-color: #00d4ff; }
    .door-ciel   { --glow-color: #ffffff; }
    .door-terre  { --glow-color: #50ffaf; }
    .door-cosmos { --glow-color: #c8a0ff; }
    .door-human  { --glow-color: #ff9d6e; }
    .door-archi  { --glow-color: #ffde59; }

    /* --- RESPONSIVE --- */
    @media (max-width: 900px) { .doors { grid-template-columns: repeat(2, 1fr); } }

    @media (max-width: 600px) {

        .hero-banner {
            margin: -8px auto 36px;
            border-radius: 16px;
        }

        .hero-banner img {
            height: clamp(145px, 42vw, 195px);
        }
        h1 { margin-top: 50px; }
        .subtitle, h2.subtitle { letter-spacing: 0.2em; font-size: 0.7rem; }
        .manifesto { 
            margin: 60px 25px; 
            padding-left: 20px; 
            border-left: 1px solid rgba(200, 160, 255, 0.3);
        }
        .doors { margin-top: 40px; grid-template-columns: 1fr; gap: 20px; }
        .door { padding: 30px 20px; }
        .door span { font-size: 1rem; letter-spacing: 2px; }
        .door-experience { margin-top: 1rem; font-size: 0.64rem; }
        .door-article { font-size: 0.75rem; }
    }
    

    /* ========================================================= */
    /* INDEX V2 - CLARTÉ + COMPATIBILITÉ MODE LECTURE            */
    /* Les couleurs de texte héritent du thème global.           */
    /* ========================================================= */

    .hero-intro {
        position: relative;
        z-index: 5;
        max-width: 1050px;
        min-height: 66vh;
        margin: 0 auto;
        padding: 58px 30px 65px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: inherit;
    }


    .hero-banner {
        width: min(100%, 1050px);
        margin: -24px auto 52px;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid rgba(200,160,255,0.18);
        background: rgba(255,255,255,0.025);
        box-shadow: 0 20px 55px rgba(0,0,0,0.18);
        position: relative;
    }

    .hero-banner::after {
        content: '';
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(180deg, transparent 55%, rgba(5,0,20,0.16));
    }

    .hero-banner img {
        display: block;
        width: 100%;
        height: clamp(205px, 22vw, 275px);
        object-fit: cover;
        object-position: center;
        transition: transform .7s cubic-bezier(.2,.7,.2,1), filter .7s ease;
    }

    .hero-banner:hover img {
        transform: scale(1.018);
        filter: saturate(1.05) brightness(1.03);
    }

    body.reading-mode .hero-banner {
        border-color: color-mix(in srgb, currentColor 14%, transparent);
        box-shadow: none;
    }

    body.reading-mode .hero-banner::after {
        opacity: .25;
    }

    .hero-kicker,
    .section-kicker,
    .manifesto-label {
        margin: 0 0 22px;
        font-size: 0.72rem;
        font-weight: 300;
        letter-spacing: 0.24em;
        text-transform: uppercase;
        color: inherit;
        opacity: 0.62;
    }

    .hero-intro h1 {
        max-width: 900px;
        margin: 0;
        font-size: clamp(1.85rem, 4.2vw, 3.45rem);
        font-weight: 200;
        line-height: 1.14;
        letter-spacing: -0.015em;
        color: inherit;
    }

    .hero-lead {
        max-width: 790px;
        margin: 30px auto 0;
        font-size: clamp(1rem, 2vw, 1.16rem);
        font-weight: 300;
        line-height: 1.8;
        color: inherit;
        opacity: 0.82;
    }

    .hero-example {
        max-width: 1000px;
        margin: 48px auto 27px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 9px;
    }

    .hero-example a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 9px 14px;
        border: 1px solid rgba(200,160,255,0.28);
        border-radius: 999px;
        background: rgba(200,160,255,0.06);
        color: inherit;
        font-size: 0.74rem;
        font-weight: 300;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        text-decoration: none;
        transition: transform .25s ease, background .25s ease, border-color .25s ease;
    }

    .hero-example a:hover,
    .hero-example a:focus-visible {
        transform: translateY(-2px);
        background: rgba(200,160,255,0.12);
        border-color: rgba(200,160,255,0.58);
    }

    .hero-example i {
        color: inherit;
        opacity: 0.45;
        font-style: normal;
    }

    .hero-conclusion {
        max-width: 720px;
        margin: 5px auto 34px;
        color: inherit;
        font-size: 0.94rem;
        line-height: 1.7;
        opacity: 0.78;
    }

    .hero-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 21px;
        border: 1px solid rgba(200,160,255,0.32);
        border-radius: 999px;
        color: inherit;
        background: rgba(200,160,255,0.05);
        text-decoration: none;
        font-size: 0.72rem;
        font-weight: 300;
        letter-spacing: 0.13em;
        text-transform: uppercase;
    }

    .domains-intro {
        position: relative;
        z-index: 5;
        max-width: 780px;
        margin: 65px auto 10px;
        padding: 0 30px;
        text-align: center;
        color: inherit;
        scroll-margin-top: 80px;
    }

    .domains-intro h2 {
        margin: 0 0 22px;
        padding: 0;
        border: 0;
        font-size: clamp(1.65rem, 3.6vw, 2.6rem);
        font-weight: 300;
        line-height: 1.25;
        color: inherit;
    }

    .domains-intro > p:last-child {
        max-width: 690px;
        margin: 0 auto;
        font-weight: 300;
        line-height: 1.8;
        color: inherit;
        opacity: 0.72;
    }

    /* Les cartes suivent le thème global au lieu d'imposer du texte clair. */
    .door,
    .door-portal,
    .door-description,
    .door-experience,
    .door-article,
    .manifesto,
    .manifesto p {
        color: inherit;
    }

    .door-description {
        position: relative;
        z-index: 2;
        max-width: 285px;
        min-height: 3.5em;
        margin: 18px auto 0;
        opacity: 0.74;
        font-size: 0.88rem;
        font-weight: 300;
        line-height: 1.7;
        letter-spacing: normal;
        text-transform: none;
    }

    .manifesto {
        margin-top: 135px;
        margin-bottom: 135px;
    }

    .manifesto-ending { line-height: 2; }

    /* En mode lecture, les décors ne doivent jamais gêner. Les sélecteurs
       couvrent les noms de classes les plus courants; l'héritage des couleurs
       fonctionne même si le thème emploie un autre nom. */
    body.reading-mode .index-halo,
    body.read-mode .index-halo,
    body.mode-lecture .index-halo,
    body.lecture-mode .index-halo,
    body.reader-mode .index-halo,
    body.reading .index-halo {
        display: none !important;
    }

    body.reading-mode #indexCanvas,
    body.read-mode #indexCanvas,
    body.mode-lecture #indexCanvas,
    body.lecture-mode #indexCanvas,
    body.reader-mode #indexCanvas,
    body.reading #indexCanvas {
        display: none !important;
    }

    body.reading-mode .door,
    body.read-mode .door,
    body.mode-lecture .door,
    body.lecture-mode .door,
    body.reader-mode .door,
    body.reading .door {
        backdrop-filter: none;
        -webkit-backdrop-filter: none;
        background: transparent;
        border-color: currentColor;
        border-color: color-mix(in srgb, currentColor 18%, transparent);
    }

    @media (max-width: 600px) {
        .hero-intro {
            min-height: auto;
            padding: 46px 22px 50px;
        }
        .hero-intro h1 {
            font-size: clamp(1.7rem, 8vw, 2.5rem);
        }
        .hero-lead { font-size: .98rem; }
        .hero-example { margin-top: 36px; gap: 7px; }
        .hero-example a { padding: 8px 10px; font-size: .62rem; }
        .domains-intro { margin-top: 45px; padding: 0 22px; }
        .door-description { min-height: auto; font-size: .83rem; }
    }


    /* Illustrations 16:9 des six portes */
    .door-visual {
        position: relative;
        z-index: 2;
        width: 100%;
        aspect-ratio: 16 / 9;
        margin: 0 0 24px;
        overflow: hidden;
        border-radius: 14px;
        border: 1px solid color-mix(in srgb, var(--glow-color, currentColor) 28%, transparent);
        background: color-mix(in srgb, currentColor 4%, transparent);
        box-shadow: 0 14px 36px rgba(0,0,0,.18);
    }

    .door-visual img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.001);
        transition: transform .65s cubic-bezier(.23,1,.32,1), filter .45s ease;
    }

    .door:hover .door-visual img,
    .door:focus-within .door-visual img {
        transform: scale(1.045);
        filter: saturate(1.08) brightness(1.04);
    }

    .door-visual::after {
        content: '';
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(to top, rgba(5,0,20,.18), transparent 48%);
    }

    body.reading-mode .door-visual,
    body.read-mode .door-visual,
    body.mode-lecture .door-visual,
    body.lecture-mode .door-visual,
    body.reader-mode .door-visual,
    body.reading .door-visual {
        box-shadow: none;
        border-color: color-mix(in srgb, currentColor 18%, transparent);
    }

    @media (prefers-reduced-motion: reduce) {
        .door-visual img { transition: none; }
        .door:hover .door-visual img,
        .door:focus-within .door-visual img { transform: none; }
    }

    /* --- PAR OÙ COMMENCER --- */
    .start-here {
        position: relative;
        z-index: 5;
        max-width: 1100px;
        margin: 18px auto 70px;
        padding: 0 20px;
    }
    .start-here__head {
        max-width: 760px;
        margin: 0 auto 24px;
        text-align: center;
    }
    .start-here__head h2 {
        margin: 0 0 12px;
        border: 0;
        padding: 0;
        color: inherit;
        font-size: clamp(1.35rem, 3vw, 2rem);
        font-weight: 300;
        line-height: 1.3;
    }
    .start-here__head p { margin:0; line-height:1.7; opacity:.7; }
    .start-here__grid {
        display:grid;
        grid-template-columns:repeat(4,minmax(0,1fr));
        gap:14px;
    }
    .start-card {
        display:flex;
        flex-direction:column;
        min-height:170px;
        padding:20px;
        border:1px solid color-mix(in srgb,currentColor 14%,transparent);
        border-radius:20px;
        background:color-mix(in srgb,currentColor 3%,transparent);
        color:inherit;
        text-decoration:none;
        transition:transform .25s ease,border-color .25s ease,background .25s ease;
    }
    .start-card:hover,.start-card:focus-visible {
        transform:translateY(-3px);
        border-color:color-mix(in srgb,#c8a0ff 50%,transparent);
        background:color-mix(in srgb,#c8a0ff 7%,transparent);
        outline:none;
    }
    .start-card__meta {
        margin-bottom:12px;
        font-size:.64rem;
        letter-spacing:.14em;
        text-transform:uppercase;
        opacity:.55;
    }
    .start-card strong { font-size:1rem; font-weight:400; line-height:1.35; }
    .start-card p { margin:10px 0 0; font-size:.84rem; line-height:1.58; opacity:.68; }
    .start-card__arrow { margin-top:auto; padding-top:14px; font-size:.72rem; letter-spacing:.08em; opacity:.7; }

    /* --- EXPÉRIENCES MISES EN AVANT DANS LES PORTES --- */
    .door-experience-link {
        position:relative;
        z-index:2;
        display:block;
        margin:1.35rem 0 .95rem;
        padding:12px 13px;
        border:1px solid color-mix(in srgb,var(--glow-color,currentColor) 22%,transparent);
        border-radius:14px;
        background:color-mix(in srgb,var(--glow-color,currentColor) 5%,transparent);
        color:inherit;
        text-decoration:none;
        text-align:left;
        transition:background .25s ease,border-color .25s ease,transform .25s ease;
    }
    .door-experience-link:hover,.door-experience-link:focus-visible {
        transform:translateY(-2px);
        border-color:color-mix(in srgb,var(--glow-color,currentColor) 50%,transparent);
        background:color-mix(in srgb,var(--glow-color,currentColor) 9%,transparent);
        outline:none;
    }
    .door-experience-link b {
        display:block;
        margin-bottom:5px;
        font-size:.64rem;
        letter-spacing:.14em;
        text-transform:uppercase;
        font-weight:400;
        opacity:.72;
    }
    .door-experience-link span {
        display:block;
        font-size:.8rem;
        line-height:1.5;
        letter-spacing:normal;
        text-transform:none;
        font-weight:300;
        opacity:.8;
        transform:none !important;
        text-shadow:none !important;
    }
    @media(max-width:900px){.start-here__grid{grid-template-columns:repeat(2,minmax(0,1fr));}}
    @media(max-width:600px){
        .start-here{margin:6px auto 52px;padding:0 16px}
        .start-here__grid{grid-template-columns:1fr}
        .start-card{min-height:auto}
    }



    /* Derniers enrichissements : une raison concrète de revenir */
    .new-fluxes {
        width:min(1120px,calc(100% - 32px));
        margin:0 auto 64px;
        padding:30px 32px;
        border:1px solid color-mix(in srgb,currentColor 10%,transparent);
        border-radius:28px;
        background:color-mix(in srgb,currentColor 2.7%,transparent);
    }
    .new-fluxes__head{display:flex;align-items:end;justify-content:space-between;gap:22px;margin-bottom:22px}
    .new-fluxes__head h2{margin:4px 0 0;font-size:clamp(1.45rem,3vw,2.15rem);font-weight:300;letter-spacing:-.025em;color:inherit}
    .new-fluxes__head p:last-child{max-width:520px;margin:0;line-height:1.65;opacity:.68;text-align:right}
    .new-fluxes__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:14px}
    .new-flux-card{display:flex;flex-direction:column;min-height:205px;padding:20px;border:1px solid color-mix(in srgb,currentColor 10%,transparent);border-radius:20px;color:inherit;text-decoration:none;background:color-mix(in srgb,currentColor 2%,transparent);transition:transform .2s ease,border-color .2s ease,background .2s ease}
    .new-flux-card:hover,.new-flux-card:focus-visible{outline:none;transform:translateY(-2px);border-color:color-mix(in srgb,#c8a0ff 46%,transparent);background:color-mix(in srgb,#c8a0ff 5%,transparent)}
    .new-flux-card__meta{display:block;margin-bottom:13px;font-size:.64rem;letter-spacing:.13em;text-transform:uppercase;opacity:.55}
    .new-flux-card strong{font-size:1.02rem;font-weight:450;line-height:1.35}
    .new-flux-card p{margin:11px 0 0;font-size:.86rem;line-height:1.62;opacity:.7}
    .new-flux-card__arrow{margin-top:auto;padding-top:16px;font-size:.7rem;letter-spacing:.07em;opacity:.72}
    body.reading-mode .new-fluxes,.reading-mode .new-flux-card{background:color-mix(in srgb,currentColor 3%,transparent)}
    @media(max-width:900px){.new-fluxes__grid{grid-template-columns:1fr}.new-flux-card{min-height:auto}.new-fluxes__head{align-items:flex-start;flex-direction:column}.new-fluxes__head p:last-child{text-align:left}}
    @media(max-width:600px){.new-fluxes{width:calc(100% - 22px);padding:24px 18px;margin-bottom:48px}}


    /* =========================================================
       FILM — LE TESTAMENT DU VIVANT
       Ajout autonome : la vidéo ne se télécharge qu’au clic.
       ========================================================= */
    .flux-film {
        position: relative;
        z-index: 5;
        width: min(100% - 40px, 980px);
        margin: 46px auto 38px;
        color: #eaf7ff;
    }

    .flux-film__intro {
        position: relative;
        margin: 0 0 26px;
        padding: 18px 22px 19px 25px;
        border: 1px solid rgba(103, 202, 255, .26);
        border-radius: 16px;
        background: linear-gradient(115deg, rgba(45, 153, 220, .16), rgba(13, 22, 55, .45));
        box-shadow: 0 12px 30px rgba(0, 0, 0, .19);
    }

    .flux-film__intro::before {
        position: absolute;
        top: 16px;
        bottom: 16px;
        left: 0;
        width: 3px;
        border-radius: 0 4px 4px 0;
        background: #67caff;
        box-shadow: 0 0 14px rgba(103, 202, 255, .75);
        content: '';
    }

    .flux-film__intro p {
        margin: 0 !important;
        color: #eaf7ff !important;
        font-size: clamp(1rem, 1.6vw, 1.16rem) !important;
        line-height: 1.65 !important;
    }

    .flux-film__duration {
        display: inline-block;
        margin-top: 13px;
        padding: 6px 11px;
        border: 1px solid rgba(139, 235, 191, .56);
        border-radius: 999px;
        background: rgba(89, 203, 145, .12);
        color: #c9f9dc;
        font-size: .82rem;
        font-weight: 700;
        letter-spacing: .035em;
    }

    .flux-film h2 {
        margin: 0 0 20px !important;
        color: #a6e9ff !important;
        font-size: clamp(1.45rem, 3vw, 2.2rem) !important;
        font-weight: 300;
        line-height: 1.25 !important;
        text-align: center;
    }

    .flux-film__player {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 9;
        border: 1px solid rgba(103, 202, 255, .28);
        border-radius: 16px;
        background: #04101e;
        box-shadow: 0 18px 45px rgba(0, 0, 0, .34);
    }

    .flux-film__cover[hidden],
    .flux-film__video[hidden] {
        display: none !important;
    }

    .flux-film__cover,
    .flux-film__video {
        display: block;
        width: 100%;
        height: 100%;
    }

    .flux-film__cover {
        position: relative;
        padding: 0;
        border: 0;
        background-color: #04101e;
        background-image: linear-gradient(rgba(2, 10, 27, .04), rgba(2, 10, 27, .32)), url('/images/Vignette_Le_Testament_du_Vivant.webp');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        cursor: pointer;
    }

    .flux-film__cover:hover,
    .flux-film__cover:focus-visible {
        filter: brightness(.86);
    }

    .flux-film__cover:focus-visible {
        outline: 3px solid #a6e9ff;
        outline-offset: -3px;
    }

    .flux-film__play {
        position: absolute;
        top: 50%;
        left: 50%;
        display: grid;
        width: 74px;
        height: 74px;
        place-items: center;
        padding-left: 5px;
        border: 2px solid rgba(255, 255, 255, .9);
        border-radius: 50%;
        background: rgba(3, 18, 36, .78);
        color: #fff;
        font-size: 29px;
        line-height: 1;
        transform: translate(-50%, -50%);
    }

    .flux-film__cover:hover .flux-film__play,
    .flux-film__cover:focus-visible .flux-film__play {
        background: #187ead;
    }

    .flux-film__label {
        position: absolute;
        right: 16px;
        bottom: 16px;
        padding: 9px 13px;
        border-radius: 999px;
        background: rgba(3, 18, 36, .82);
        color: #fff;
        font: 700 .86rem/1.1 Inter, sans-serif;
    }

    .flux-film__credit {
        margin: 34px 0 0 !important;
        color: #89a9b8 !important;
        font-size: .8rem !important;
        font-style: italic;
        letter-spacing: .025em;
        line-height: 1.55 !important;
        text-align: center;
    }

    .flux-film__sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    @media (max-width: 600px) {
        .flux-film { width: min(100% - 28px, 980px); margin-top: 34px; }
        .flux-film__intro { padding: 16px 18px 17px 22px; }
        .flux-film__play { width: 60px; height: 60px; font-size: 23px; }
        .flux-film__label { right: 11px; bottom: 11px; font-size: .77rem; }
    }


    /* =========================================================
       AÉRATION ÉDITORIALE — ACCUEIL FLUX INFO
       Ajout uniquement visuel : contenu et fonctionnalités inchangés.
       ========================================================= */
    main > section {
        scroll-margin-top: 110px;
    }

    /* Ouverture : plus d’espace avant les parcours proposés. */
    .hero-intro {
        padding-bottom: 92px;
    }

    .hero-lead {
        margin-bottom: 8px;
    }

    .hero-conclusion {
        margin-top: 14px;
        margin-bottom: 42px;
    }

    /* Film : sépare clairement le manifeste d’ouverture et l’exploration. */
    .flux-film {
        margin-top: 58px;
        margin-bottom: 88px;
    }

    /* Première zone de découverte. */
    .start-here {
        margin-top: 22px;
        margin-bottom: 108px;
    }

    .start-here__head {
        margin-bottom: 34px;
    }

    .start-here__head h2 {
        margin-bottom: 20px;
    }

    .start-here__grid {
        gap: 18px;
    }

    .start-card {
        padding: 24px;
    }

    /* Nouveautés : respiration avant et après le bloc. */
    .new-fluxes {
        margin-bottom: 110px;
        padding: 38px 40px;
    }

    .new-fluxes__head {
        margin-bottom: 30px;
    }

    .new-fluxes__grid {
        gap: 18px;
    }

    .new-flux-card {
        padding: 24px;
    }

    /* Portes : transition plus nette entre la présentation et les six domaines. */
    .domains-intro {
        margin-top: 94px;
        margin-bottom: 26px;
    }

    .domains-intro h2 {
        margin-bottom: 28px;
    }

    .doors {
        margin-top: 52px;
        margin-bottom: 148px;
        gap: 36px;
    }

    .door {
        padding: 38px 30px 42px;
    }

    .door-visual {
        margin-bottom: 30px;
    }

    .door-description {
        margin-top: 22px;
    }

    .door-experience-link {
        margin-top: 1.7rem;
        margin-bottom: 1.15rem;
    }

    /* Conclusion éditoriale. */
    .manifesto {
        margin-top: 154px;
        margin-bottom: 158px;
    }

    .manifesto p {
        margin-bottom: 2.5rem;
    }

    @media (max-width: 900px) {
        .hero-intro { padding-bottom: 76px; }
        .flux-film { margin-bottom: 72px; }
        .start-here { margin-bottom: 86px; }
        .new-fluxes { margin-bottom: 88px; }
        .domains-intro { margin-top: 76px; }
        .doors { margin-bottom: 112px; gap: 24px; }
        .manifesto { margin-top: 116px; margin-bottom: 122px; }
    }

    @media (max-width: 600px) {
        .hero-intro { padding-bottom: 62px; }
        .flux-film { margin-top: 44px; margin-bottom: 62px; }
        .start-here { margin-bottom: 72px; }
        .start-here__head { margin-bottom: 26px; }
        .start-here__grid { gap: 16px; }
        .start-card { padding: 22px; }
        .new-fluxes { margin-bottom: 76px; padding: 28px 22px; }
        .new-fluxes__grid { gap: 16px; }
        .new-flux-card { padding: 22px; }
        .domains-intro { margin-top: 66px; margin-bottom: 20px; }
        .doors { margin-top: 38px; margin-bottom: 90px; gap: 20px; }
        .door { padding: 30px 22px 34px; }
        .door-visual { margin-bottom: 24px; }
        .manifesto { margin: 98px 25px 106px; }
        .manifesto p { margin-bottom: 2rem; }
    }

</style>


<meta name="lkp-version" content="1.0.0">
<meta name="lkp-status" content="Public Draft">
<meta name="lkp-living-site" content="true">
<meta name="lkp-modified" content="2026-09-20">


<script type="application/ld+json">
{
  "@context": "https://livingknowledgeprotocol.org/ns/1.0.0",
  "@type": "WebPage",
  "name": "Flux-Info",
  "url": "https://flux-info.net/",
  "lkp": {
    "@type": "LivingDocument",
    "version": "1.0.0",
    "status": "Public Draft",
    "datePublished": "2026-08-17",
    "dateModified": "2026-09-20T00:00:00Z",
    "complianceLevel": 1,
    "isLiving": true,
    "verificationSource": "https://flux-info.net/"
  }
}
</script>



<?= $headerHead ?>
</head>

<body>
    
    <?= $headerNavigation ?>

<div class="index-halo"></div>
<canvas id="indexCanvas"></canvas>

<main>

<section class="hero-intro">

    <figure class="hero-banner">
        <img
            src="images/ChatGPT_bandeau.webp"
            alt="Panorama des flux reliant océans, atmosphère, vivant, cosmos et humanité"
            width="1600"
            height="533"
            fetchpriority="high"
            decoding="async">
    </figure>

    <p class="hero-kicker">Climat · Vivant · Sciences · Technologies · Humanité</p>

    <h1>Comprendre les Flux qui relient notre Monde</h1>

    <p class="hero-lead">
        Flux Info est un média pédagogique indépendant qui explique les flux de matière,
        d’énergie, d’information et de vivant reliant la Biosphère, les sociétés humaines
        et les technologies. Rien n’arrive isolément.
    </p>

    <!--
        Parcours transversal : chaque capsule pointe directement vers un ARTICLE,
        jamais vers une page-porte.
    -->
    <nav class="hero-example" aria-label="Suivre un exemple d'interdépendance">

        <a href="article-ciel-vents.php#secheresse"
           title="Quand le flux d’humidité se rompt : précipitations et sécheresse">
            Sécheresse
        </a>

        <i aria-hidden="true">→</i>

        <a href="article-ciel-vents.php#rivieres-volantes"
           title="Rivières atmosphériques : transport de vapeur d’eau et précipitations">
            Eau
        </a>

        <i aria-hidden="true">→</i>

        <a href="article-terre-migrations.php#sols"
           title="Sols vivants : eau, racines, mycélium et nutriments">
            Sols
        </a>

        <i aria-hidden="true">→</i>

        <a href="article-terre-migrations.php#agriculture"
           title="De la pluie et des sols aux conditions de l’agriculture">
            Agriculture
        </a>

        <i aria-hidden="true">→</i>

        <a href="article-humanite-vivant.php#alimentation"
           title="L’alimentation comme flux biosphérique devenu flux social">
            Alimentation
        </a>

        <i aria-hidden="true">→</i>

        <a href="article-humanite-vivant.php#societe"
           title="Sociétés humaines : dépendances à l’eau, aux sols, à l’énergie et au vivant">
            Société
        </a>

    </nav>

    <p class="hero-conclusion">
        <strong>Suivre un flux, c’est comprendre ce qu’un événement met en mouvement.</strong>
    </p>

    <section class="flux-film" aria-labelledby="flux-film-title">
        <div class="flux-film__intro">
            <p>Découvrez un voyage au cœur des flux qui relient le Vivant, nos sociétés et les technologies. Cliquez sur la vignette pour lancer la vidéo.</p>
            <span class="flux-film__duration">Durée de la vidéo : 3 min 50</span>
        </div>

        <h2 id="flux-film-title">Le Testament du Vivant : Entrer dans les flux</h2>

        <div class="flux-film__player" data-flux-film-player>
            <button
                class="flux-film__cover"
                type="button"
                aria-label="Lire le film Le Testament du Vivant"
                aria-describedby="flux-film-visual-description"
            >
                <span class="flux-film__play" aria-hidden="true">▶</span>
                <span class="flux-film__label">Regarder la vidéo</span>
            </button>

            <span id="flux-film-visual-description" class="flux-film__sr-only">
                Vignette du film : la Terre vue depuis l’espace, parcourue de flux lumineux bleus et dorés qui relient les océans, les terres et les villes.
            </span>

            <video class="flux-film__video" controls playsinline hidden aria-label="Le Testament du Vivant — Entrer dans les flux">
                <source data-src="https://flux-info.net/videos/Le_Testament_du_Vivant_Flux_Info.mp4" type="video/mp4">
                Votre navigateur ne permet pas la lecture de cette vidéo.
            </video>
        </div>

        <p class="flux-film__credit">Vidéo réalisée par Cédric M. avec l’IA indépendante Manus.</p>
    </section>


    <a class="hero-cta" href="#portes">Explorer les six portes ↓</a>

</section>



<section class="start-here" aria-labelledby="start-here-title">
    <div class="start-here__head">
        <p class="section-kicker">Par où commencer ?</p>
        <h2 id="start-here-title">Choisissez votre façon d’entrer dans les Flux</h2>
        <p>Quelques minutes suffisent pour comprendre un phénomène, manipuler une expérience ou suivre une relation entre plusieurs domaines.</p>
    </div>
    <div class="start-here__grid">
        <a class="start-card" href="article-ciel-vents.php#secheresse">
            <span class="start-card__meta">5 min · Comprendre</span>
            <strong>Partir d’un Phénomène</strong>
            <p>Commencez par la sécheresse et suivez ses effets vers l’eau, les sols, l’agriculture et la société.</p>
            <span class="start-card__arrow">Suivre le Flux →</span>
        </a>
        <a class="start-card" href="article-ocean-courants.php#thermo-module">
            <span class="start-card__meta">3 min · Manipuler</span>
            <strong>Tester une Expérience</strong>
            <p>Ajustez température et salinité pour voir comment la densité met l’océan profond en mouvement.</p>
            <span class="start-card__arrow">Manipuler →</span>
        </a>
        <a class="start-card" href="carte-des-flux.php">
            <span class="start-card__meta">10 min · Explorer</span>
            <strong>Ouvrir la Carte des Flux</strong>
            <p>Choisissez un territoire, révélez ses phénomènes puis traversez vers ce qu’ils mettent en mouvement.</p>
            <span class="start-card__arrow">Explorer la Carte →</span>
        </a>
        <a class="start-card" href="politique-editoriale.php">
            <span class="start-card__meta">Vérifier · Méthode</span>
            <strong>Comprendre nos Niveaux de Preuve</strong>
            <p>Voyez comment Flux Info distingue fait établi, hypothèse discutée, métaphore pédagogique et réflexion.</p>
            <span class="start-card__arrow">Voir la Charte →</span>
        </a>
    </div>
</section>



<section class="new-fluxes" aria-labelledby="new-fluxes-title">
    <div class="new-fluxes__head">
        <div>
            <p class="section-kicker">Nouveaux Flux</p>
            <h2 id="new-fluxes-title">Le site continue de s’enrichir</h2>
        </div>
        <p>De nouveaux phénomènes, vérifications et passerelles sont ajoutés au fil du travail éditorial. Voici trois enrichissements récents.</p>
    </div>
    <div class="new-fluxes__grid">
        <a class="new-flux-card" href="article-terre-migrations.php#ultrasons-plantes">
            <span class="new-flux-card__meta">Terre · Fait Établi</span>
            <strong>Les plantes sous stress émettent des ultrasons</strong>
            <p>Sécheresse, xylème et cavitation : écouter certains flux physiques du végétal peut renseigner sur son état hydrique.</p>
            <span class="new-flux-card__arrow">Découvrir ce Flux →</span>
        </a>
        <a class="new-flux-card" href="article-archipel-conscience.php#plant-vibration-title">
            <span class="new-flux-card__meta">Archipel · Fait Établi</span>
            <strong>Quand une feuille perçoit la mastication</strong>
            <p>Chez Arabidopsis, certaines vibrations mécaniques produites par un herbivore peuvent modifier la réponse défensive de la plante.</p>
            <span class="new-flux-card__arrow">Suivre le Signal →</span>
        </a>
        <a class="new-flux-card" href="article-cosmos-etoiles.php#vertige-cosmique">
            <span class="new-flux-card__meta">Cosmos · Ordre de Grandeur</span>
            <strong>Le vertige des échelles cosmiques</strong>
            <p>Univers observable, milliards d’années-lumière et nombre d’étoiles : quelques ordres de grandeur pour retrouver notre échelle.</p>
            <span class="new-flux-card__arrow">Prendre la Mesure →</span>
        </a>
    </div>
</section>

<section class="domains-intro" id="portes">
    <p class="section-kicker">Six portes</p>
    <h2>Explorer les Grandes Circulations du Réel</h2>
    <p>
        Chaque porte révèle une partie du système. Ensemble, elles montrent les
        interdépendances qui façonnent la Biosphère.
    </p>
</section>


<h2 class="sr-only">Nos Domaines d'Exploration</h2>

<div class="doors">

    <article class="door door-ocean">
        <a class="door-portal" href="ocean.php">
            <span class="door-visual"><img src="images/ChatGPT_ocean.webp" alt="Circulations profondes de l’Océan" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Océan</span>
            <p class="door-description">Les circulations de l’eau, de la chaleur et du vivant.</p>
        </a>
        <a class="door-experience-link" href="article-ocean-courants.php#thermo-module"><b>Expérience · 3 min</b><span>Ajuster température et salinité → observer la densité et la circulation</span></a>
        <a class="door-article" href="article-ocean-courants.php">Les courants profonds de l’Océan</a>
    </article>

    <article class="door door-ciel">
        <a class="door-portal" href="ciel.php">
            <span class="door-visual"><img src="images/ChatGPT-ciel.webp" alt="Circulations et mouvements de l’Atmosphère" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Ciel</span>
            <p class="door-description">Les mouvements de l’atmosphère, des vents et de l’énergie.</p>
        </a>
        <a class="door-experience-link" href="article-ciel-vents.php#sky-simulator"><b>Expérience · 3 min</b><span>Monter dans l’atmosphère → observer pression, altitude et couches</span></a>
        <a class="door-article" href="article-ciel-vents.php">Les Souffles de l’Atmosphère</a>
    </article>

    <article class="door door-terre">
        <a class="door-portal" href="terre.php">
            <span class="door-visual"><img src="images/ChatGPT_terre.webp" alt="Réseaux du vivant, des sols et des écosystèmes" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Terre</span>
            <p class="door-description">Les sols, les écosystèmes, les espèces et les territoires.</p>
        </a>
        <a class="door-experience-link" href="article-terre-migrations.php#serengeti-map-sim"><b>Expérience · 3 min</b><span>Faire varier la saison → suivre pluie, herbe et migration</span></a>
        <a class="door-article" href="article-terre-migrations.php">La Terre en mouvement</a>
    </article>

    <article class="door door-cosmos">
        <a class="door-portal" href="cosmos.php">
            <span class="door-visual"><img src="images/ChatGPT_cosmos.webp" alt="Flux de matière et d’énergie dans le Cosmos" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Cosmos</span>
            <p class="door-description">Les flux de matière et d’énergie qui relient l’Univers au vivant.</p>
        </a>
        <a class="door-experience-link" href="article-cosmos-etoiles.php#fusion-simulator"><b>Expérience · 3 min</b><span>Condenser le gaz → atteindre le seuil de fusion</span></a>
        <a class="door-article" href="article-cosmos-etoiles.php">La naissance et la mort des étoiles</a>
    </article>

    <article class="door door-human">
        <a class="door-portal" href="humanite.php">
            <span class="door-visual"><img src="images/ChatGPT_humanite.webp" alt="Flux humains, sociétés, technologies et vivant" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Humanité</span>
            <p class="door-description">Les sociétés, les connaissances, les technologies et leurs impacts.</p>
        </a>
        <a class="door-experience-link" href="article-humanite-vivant.php#human-simulator"><b>Expérience · 3 min</b><span>Émettre un signal → observer sa propagation dans le réseau</span></a>
        <a class="door-article" href="article-humanite-vivant.php">La Singularité du Vivant</a>
    </article>

    <article class="door door-archi">
        <a class="door-portal" href="archipel.php">
            <span class="door-visual"><img src="images/ChatGPT_archipel.webp" alt="Archipel de connexions entre les grands domaines du réel" width="800" height="450" loading="lazy" decoding="async" data-no-lightbox></span>
            <span>Archipel</span>
            <p class="door-description">Les connexions qui émergent entre tous ces domaines.</p>
        </a>
        <a class="door-experience-link" href="article-archipel-conscience.php#archipel-simulator"><b>Expérience · 3 min</b><span>Relier les îles → faire apparaître les interdépendances</span></a>
        <a class="door-article" href="article-archipel-conscience.php">La Conscience archipélique</a>
    </article>

</div>


<section class="manifesto">

    <p class="manifesto-label">Pourquoi Flux Info ?</p>

    <p>
        Le monde n’est pas un agrégat d’objets isolés,
        mais un déploiement de <strong>flux invisibles</strong>.
    </p>

    <p>
        Ici, nous ne collectionnons pas les données.
        Nous traçons les lignes de force qui relient le Vivant,
        du battement de cœur des abysses <strong>thermohalins</strong>
        aux silences géométriques du <strong>cosmos</strong>.
    </p>

    <p>
        Dans le tumulte d’une ère fragmentée,
        l’urgence est de restaurer la cohérence entre les échelles qui nous constituent.
    </p>

    <p>
        Manipuler les paramètres du réel, observer les interdépendances
        et laisser l’information redevenir connaissance.
    </p>

    <p class="manifesto-ending">
        Anticiper l’avenir de la Biosphère.<br>
        Éveiller la Conscience.<br>
        <strong>Entrer dans les Flux.</strong>
    </p>

</section>

</main>

<?php 
if (file_exists('footer-archipel.php')) {
    include 'footer-archipel.php'; 
}
?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('indexCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d', { alpha: true });
    const stars = [];
    const COUNT = 150;

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        init(); 
    }

    function init() {
        stars.length = 0;
        for (let i = 0; i < COUNT; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: 0.6 + Math.random() * 1.8,
                alpha: 0.2 + Math.random() * 0.5,
                speedY: -0.05 - Math.random() * 0.15
            });
        }
    }

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        stars.forEach(s => {
            ctx.beginPath();
            ctx.fillStyle = `rgba(220,200,255,${s.alpha})`;
            ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
            ctx.fill();

            s.y += s.speedY + Math.sin(s.x * 0.002) * 0.1;

            if (s.y < -10) {
                s.y = canvas.height + 10;
                s.x = Math.random() * canvas.width;
            }
        });
        requestAnimationFrame(draw);
    }

    window.addEventListener('resize', resize);
    resize(); 
    requestAnimationFrame(draw);
});
</script>



<script>
(function () {
    function initFluxFilm() {
        document.querySelectorAll('[data-flux-film-player]').forEach(function (player) {
            if (player.dataset.ready === 'true') return;

            var cover = player.querySelector('.flux-film__cover');
            var video = player.querySelector('.flux-film__video');
            var source = video ? video.querySelector('source[data-src]') : null;

            if (!cover || !video || !source) return;
            player.dataset.ready = 'true';

            cover.addEventListener('click', function () {
                /* Le fichier vidéo n’est demandé au serveur qu’après ce clic. */
                source.src = source.dataset.src;
                cover.setAttribute('hidden', '');
                video.removeAttribute('hidden');
                video.load();
                video.play().catch(function () {});
            }, { once: true });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFluxFilm);
    } else {
        initFluxFilm();
    }
}());
</script>

</body>
</html>
