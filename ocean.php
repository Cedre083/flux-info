<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$pageTitle = 'Comprendre l’Océan | Courants, Chaleur et Vivant | Flux Info';
$pageDesc = 'Explorez les circulations océaniques, la chaleur, le vivant marin et leurs effets sur le climat dans la Porte Océan de Flux Info.';

/* Le composant partagé produit les métadonnées/styles et la navigation: ils sont placés dans les sections HTML appropriées. */
ob_start();
include __DIR__ . '/header.php';
$headerOutput = ob_get_clean();
$headerParts = explode('<header class="archipel-header">', $headerOutput, 2);
$headerHead = $headerParts[0];
$headerNavigation = isset($headerParts[1])
    ? '<header class="archipel-header">' . $headerParts[1]
: $headerOutput;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
    <?php include __DIR__ . '/head-icons.php'; ?>
    <?= $headerHead ?>
<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
        /* ============================================= */
        /* CONFIGURATION GLOBALE (Héritage Header)       */
        /* ============================================= */
        body {
            /* On garde uniquement l'identité chromatique marine */
            background: #000c14;
            background: radial-gradient(circle at 50% 20%, #001f33 0%, #000c14 70%, #000000 100%);
            overflow-x: hidden;
        }

        /* Effet d'immersion marine optimisé */
        #oceanPresentationCanvas {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
            pointer-events: none;
            background: #000810;
        }

        .ocean-light {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 40%, rgba(0, 100, 200, 0.2), transparent 80%);
            z-index: 1;
            pointer-events: none;
            animation: waveLight 15s ease-in-out infinite;
        }

        @keyframes waveLight {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.05); }
        }
        
        /* Contenu au-dessus des effets */
        .container {
            position: relative;
            z-index: 10;
        }

        /* ============================================= */
        /* CONTENU & TYPOGRAPHIE (Standard 23px)         */
        /* ============================================= */
        .container {
            max-width: 950px; /* Élargi pour le confort des 23px */
            margin: 0 auto;
            padding: 54px 24px 100px;
            text-align: center;
        }

        /* Le H1 hérite du weight 200 et du gradient du header */
        h1 {
            filter: drop-shadow(0 0 25px rgba(0, 212, 255, 0.4));
            animation: titleRise 1.2s ease-out;
            margin-top: 0;
        }

        @keyframes titleRise {
            from { opacity: 0; transform: translateY(30px); filter: blur(10px); }
            to { opacity: 1; transform: translateY(0); filter: blur(0); }
        }

        .intro-text {
            /* Aligné sur le standard 23px immersif */
            font-size: 1.45rem;
            font-weight: 300;
            color: #bfeaff;
            max-width: 800px;
            margin: 0 auto 60px;
            opacity: 0;
            animation: fadeIn 1s ease forwards 0.5s;
            line-height: 1.8;
        }

        /* H2 hérite du weight 300 du header */
        h2 {
            margin-top: 80px;
            opacity: 0;
            animation: fadeIn 1s ease forwards 0.8s;
        }

        .explorer-list {
            list-style: none;
            padding: 0;
            margin: 40px 0 80px;
            opacity: 0;
            animation: fadeIn 1s ease forwards 1s;
        }

        .explorer-list li {
            font-size: 1.3rem; /* Finesse abyssale */
            margin: 20px 0;
            color: #7fc7ff;
            font-weight: 300;
        }

        /* ============================================= */
        /* BOUTONS                                       */
        /* ============================================= */
        .btn-main {
            display: inline-block;
            padding: 22px 55px;
            background: rgba(0, 212, 255, 0.05);
            border: 1px solid rgba(0, 212, 255, 0.4);
            border-radius: 60px;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 300; /* Plus fin, plus moderne */
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            backdrop-filter: blur(10px);
            opacity: 0;
            animation: fadeIn 1s ease forwards 1.2s;
        }

        .btn-main:hover {
            background: rgba(0, 212, 255, 0.2);
            color: #ffffff;
            border-color: #ffffff;
            box-shadow: 0 0 50px rgba(0, 212, 255, 0.4);
            transform: translateY(-5px);
        }

        .btn-back {
            display: block;
            margin-top: 40px;
            color: rgba(127, 199, 255, 0.6);
            text-decoration: none;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 300;
            opacity: 0;
            animation: fadeIn 1s ease forwards 1.5s;
            transition: 0.3s;
        }
        
        .btn-back:hover { color: #ffffff; }

        @keyframes fadeIn {
            to { opacity: 1; transform: translateY(0); }
        }

        /* ============================================= */
        /* RESPONSIVE MOBILE                             */
        /* ============================================= */
        @media (max-width: 600px) {
            .container { padding: 36px 20px 60px; }
            h1 { font-size: 1.8rem; }
            .intro-text { font-size: 1.15rem; }
            .explorer-list li { font-size: 1.1rem; }
            .btn-main { padding: 18px 30px; letter-spacing: 2px; font-size: 0.9rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            .ocean-light,
            h1,
            .intro-text,
            h2,
            .explorer-list,
            .btn-main,
            .btn-back {
                animation: none;
                opacity: 1;
            }
        }
    </style>

<style>
/* Invitation éditoriale vers l’article : la Porte reste une Porte, l’approfondissement vient ensuite. */
.article-invitation{
    --door-accent: #7fc7ff;
    width:min(720px,100%);
    margin:34px auto 0;
    padding:24px 26px 26px;
    border:1px solid color-mix(in srgb,var(--door-accent) 35%,transparent);
    border-radius:24px;
    background:linear-gradient(145deg,color-mix(in srgb,var(--door-accent) 8%,transparent),color-mix(in srgb,currentColor 2%,transparent));
    box-shadow:0 18px 55px rgba(0,0,0,.14),inset 0 1px 0 rgba(255,255,255,.035);
    text-align:left;
    position:relative;
    overflow:hidden;
}
.article-invitation::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;background:var(--door-accent);box-shadow:0 0 18px var(--door-accent);opacity:.72}
.article-invitation__meta{display:flex;flex-wrap:wrap;gap:8px 12px;align-items:center;margin:0 0 10px;font-size:.66rem;letter-spacing:.14em;text-transform:uppercase;color:color-mix(in srgb,var(--door-accent) 78%,currentColor);opacity:.9}
.article-invitation__meta span+span::before{content:'·';margin-right:12px;opacity:.55}
.article-invitation h3{margin:0;font-size:clamp(1.2rem,2.8vw,1.72rem);font-weight:400;line-height:1.22;letter-spacing:-.015em;color:inherit}
.article-invitation__question{margin:15px 0 16px;font-size:1rem;line-height:1.65;color:inherit;opacity:.86}
.article-invitation__promise{margin:0;padding:0;list-style:none;display:grid;gap:9px}
.article-invitation__promise li{position:relative;padding-left:18px;font-size:.88rem;line-height:1.52;color:inherit;opacity:.72}
.article-invitation__promise li::before{content:'→';position:absolute;left:0;color:var(--door-accent);opacity:.82}
.article-invitation .btn-main{display:inline-flex;margin:22px 0 0;align-items:center;justify-content:center;text-align:center}
.article-invitation__hint{margin:11px 0 0;font-size:.7rem;line-height:1.45;letter-spacing:.04em;opacity:.52}
body.reading-mode .article-invitation{background:color-mix(in srgb,currentColor 2.5%,transparent);box-shadow:none}
@media(max-width:600px){.article-invitation{margin-top:28px;padding:21px 18px 22px;border-radius:20px}.article-invitation__question{font-size:.95rem}.article-invitation__promise li{font-size:.84rem}.article-invitation .btn-main{width:100%;padding-left:14px;padding-right:14px;letter-spacing:1.4px}}
</style>

</head>

<body>
<?= $headerNavigation ?>
    <canvas id="oceanPresentationCanvas" aria-hidden="true"></canvas>

<div class="ocean-light"></div>

<main class="container">
    <h1>Comprendre l’Océan</h1>

    <p class="intro-text">
        L’océan respire, pulse, transporte chaleur, vie et énergie.<br>
        Sous sa surface, des courants invisibles sculptent le climat et nourrissent le vivant.
    </p>

    <h2>Ce que vous allez Explorer</h2>

    <ul class="explorer-list">
        <li>- Les courants profonds et la circulation thermohaline</li>
        <li>- La mémoire thermique de l’océan</li>
        <li>- Les échanges entre eau, chaleur et vivant</li>
        <li>- La fragilité d’une circulation à l’échelle planétaire</li>
    </ul>

    <section class="article-invitation" aria-labelledby="article-invitation-ocean">
        <p class="article-invitation__meta"><span>Article augmenté</span><span>8 min de lecture</span></p>
        <h3 id="article-invitation-ocean">Les Courants Profonds de l’Océan</h3>
        <p class="article-invitation__question">Comment une eau qui plonge près des pôles peut-elle influencer le climat à des milliers de kilomètres ?</p>
        <ul class="article-invitation__promise">
            <li>Pourquoi température et salinité mettent l’océan profond en mouvement</li>
            <li>Comment ces courants redistribuent chaleur, oxygène et nutriments</li>
            <li>Ce que leur ralentissement peut changer à l’échelle du climat</li>
        </ul>
        <a href="article-ocean-courants.php" class="btn-main">Suivre les Courants Profonds →</a>
        <p class="article-invitation__hint">Comprendre · Relier · Manipuler · Vérifier les sources</p>
    </section>
    
    <a href="index.php" class="btn-back">← Retour à l’Accueil</a>
</main>

<?php include __DIR__ . '/footer-archipel.php'; ?>
<script>
const canvas = document.getElementById('oceanPresentationCanvas');
const ctx = canvas.getContext('2d');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

let w, h;
let particles = [];
const particleCount = 100;

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
}

window.addEventListener('resize', resize);
resize();

class Particle {
    constructor() {
        this.reset();
    }
    reset() {
        this.x = Math.random() * w;
        this.y = Math.random() * h;
        this.size = Math.random() * 2 + 0.5;
        this.speedX = Math.random() * 1.5 + 0.5; // Courant vers la droite
        this.speedY = (Math.random() - 0.5) * 0.5;
        this.alpha = Math.random() * 0.5 + 0.2;
        this.angle = Math.random() * Math.PI * 2;
    }
    update() {
        // Mouvement ondulatoire (vagues)
        this.angle += 0.02;
        this.x += this.speedX;
        this.y += this.speedY + Math.sin(this.angle) * 0.5;

        // Reset si sort de l'écran
        if (this.x > w) {
            this.x = -10;
            this.y = Math.random() * h;
        }
    }
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        // Couleur cyan électrique typique de tes pages Océan
        ctx.fillStyle = `rgba(0, 212, 255, ${this.alpha})`;
        ctx.shadowBlur = 10;
        ctx.shadowColor = 'rgba(0, 212, 255, 0.5)';
        ctx.fill();
    }
}

function init() {
    for (let i = 0; i < particleCount; i++) {
        particles.push(new Particle());
    }
}

function animate() {
    // Effet de traîne subtil pour simuler l'eau
    ctx.fillStyle = 'rgba(0, 8, 16, 0.15)';
    ctx.fillRect(0, 0, w, h);

    particles.forEach(p => {
        p.update();
        p.draw();
    });
    if (!prefersReducedMotion) requestAnimationFrame(animate);
}

init();
animate();
</script>
</body>
</html>
