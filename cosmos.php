<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$pageTitle = 'Comprendre le Cosmos | Matière, Étoiles et Énergie | Flux Info';
$pageDesc = 'Explorez l’origine de la matière, la vie des étoiles et le recyclage cosmique dans la Porte Cosmos de Flux Info.';

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
            /* Identité chromatique Cosmos préservée */
            background: #020008;
            overflow-x: hidden;
        }

        #cosmosCanvas {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        /* Respiration cosmique subtile */
        .cosmic-overlay {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 50%, rgba(120, 0, 255, 0.1), transparent 80%);
            mix-blend-mode: screen;
            animation: cosmicBreath 15s ease-in-out infinite;
            z-index: 1;
            pointer-events: none;
        }
        @keyframes cosmicBreath { 
            0%, 100% { opacity: 0.15; transform: scale(1); } 
            50% { opacity: 0.35; transform: scale(1.05); } 
        }

        /* ============================================= */
        /* CONTENU & TYPOGRAPHIE (Standard 23px)         */
        /* ============================================= */
        .container {
            max-width: 1000px; /* Plus large pour l'immensité du Cosmos */
            margin: 0 auto;
            padding: 54px 24px 100px;
            position: relative;
            z-index: 10;
            text-align: center;
        }

        /* Le H1 hérite du weight 200 et du gradient du header */
        h1 {
            filter: drop-shadow(0 0 30px rgba(200, 160, 255, 0.35));
            animation: cosmicRise 1.6s cubic-bezier(0.22, 1, 0.36, 1);
            margin-top: 0;
        }

        @keyframes cosmicRise {
            from { opacity: 0; transform: translateY(50px) scale(0.98); filter: blur(20px); }
            to { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
        }

        .intro-text {
            /* Aligné sur le standard 23px immersif */
            font-size: 1.45rem;
            font-weight: 300;
            color: #e8d9ff;
            max-width: 850px;
            margin: 0 auto 60px;
            opacity: 0;
            animation: fadeIn 1.2s ease forwards 0.6s;
            line-height: 1.8;
        }

        /* H2 hérite du weight 300 du header */
        h2 {
            margin-top: 100px;
            opacity: 0;
            animation: fadeIn 1.2s ease forwards 0.9s;
            letter-spacing: 5px;
        }

        .explorer-list {
            list-style: none;
            padding: 0;
            margin: 40px 0 80px;
            opacity: 0;
            animation: fadeIn 1.2s ease forwards 1.2s;
        }

        .explorer-list li {
            font-size: 1.35rem;
            margin: 25px 0;
            color: #c8a0ff;
            font-weight: 300;
            letter-spacing: 2px;
        }

        /* ============================================= */
        /* BOUTONS                                       */
        /* ============================================= */
        .btn-main {
            display: inline-block;
            padding: 22px 60px;
            background: rgba(200, 160, 255, 0.05);
            border: 1px solid rgba(200, 160, 255, 0.4);
            border-radius: 60px;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-weight: 300; /* Finesse technologique */
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            backdrop-filter: blur(10px);
            opacity: 0;
            animation: fadeIn 1.2s ease forwards 1.5s;
        }

        .btn-main:hover {
            background: rgba(200, 160, 255, 0.2);
            color: #ffffff;
            border-color: #ffffff;
            box-shadow: 0 0 60px rgba(200, 160, 255, 0.4);
            transform: translateY(-5px);
        }

        @keyframes fadeIn {
            to { opacity: 1; transform: translateY(0); }
        }

        /* ============================================= */
        /* RESPONSIVE MOBILE                             */
        /* ============================================= */
        @media (max-width: 600px) {
            .container { padding: 36px 20px 60px; }
            h1 { font-size: 1.8rem; letter-spacing: 3px; }
            .intro-text { font-size: 1.15rem; }
            .explorer-list li { font-size: 1.1rem; }
            .btn-main { padding: 18px 30px; letter-spacing: 3px; font-size: 0.85rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            .cosmic-overlay,
            h1,
            .intro-text,
            h2,
            .explorer-list,
            .btn-main {
                animation: none;
                opacity: 1;
            }
        }
    </style>

<style>
/* Invitation éditoriale vers l’article : la Porte reste une Porte, l’approfondissement vient ensuite. */
.article-invitation{
    --door-accent: #c8a0ff;
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
<canvas id="cosmosCanvas" aria-hidden="true"></canvas>
<div class="cosmic-overlay"></div>

<main class="container">
    <h1>Comprendre le Cosmos</h1>

    <p class="intro-text">
        L'Univers est notre origine et notre horizon.<br>
        Une danse éternelle d'énergie et de matière où chaque atome de notre corps trouve sa source.
    </p>

    <h2>Ce que vous allez Explorer</h2>

    <ul class="explorer-list">
        <li>- La naissance des étoiles et l’allumage de la fusion</li>
        <li>- La fabrication progressive des éléments</li>
        <li>- La mort des étoiles et le recyclage cosmique</li>
        <li>- Le lien matériel entre cosmos, planètes et vivant</li>
    </ul>

    <section class="article-invitation" aria-labelledby="article-invitation-cosmos">
        <p class="article-invitation__meta"><span>Article augmenté</span><span>10 min de lecture</span></p>
        <h3 id="article-invitation-cosmos">La Naissance et la Mort des Étoiles</h3>
        <p class="article-invitation__question">Comment la matière fabriquée au cœur des étoiles finit-elle par participer à des planètes, des océans et des organismes vivants ?</p>
        <ul class="article-invitation__promise">
            <li>Comment les étoiles transforment progressivement les éléments</li>
            <li>Pourquoi supernovas et collisions d’astres recyclent la matière cosmique</li>
            <li>Comment notre propre matière s’inscrit dans une histoire vieille de milliards d’années</li>
        </ul>
        <a href="article-cosmos-etoiles.php" class="btn-main">Remonter jusqu’à l’Origine des Éléments →</a>
        <p class="article-invitation__hint">Comprendre · Relier · Manipuler · Vérifier les sources</p>
    </section>
    
    <a href="index.php" style="display:block; margin-top:40px; color:#c8a0ff; text-decoration:none; font-size:0.85rem; text-transform:uppercase; opacity:0.5; letter-spacing:2px;">← Retour à l’Accueil</a>
</main>

<script>
/* ============================================= */
/* FOND GÉNÉRATIF: POUSSIÈRE D'ÉTOILES          */
/* ============================================= */
const canvas = document.getElementById('cosmosCanvas');
const ctx = canvas.getContext('2d');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let w, h, stars = [];

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

class Star {
    constructor() { this.reset(); }
    reset() {
        this.x = Math.random() * w;
        this.y = Math.random() * h;
        this.size = Math.random() * 1.5;
        this.speed = Math.random() * 0.2;
        this.opacity = Math.random();
        this.fade = Math.random() * 0.02;
    }
    update() {
        this.y -= this.speed;
        this.opacity += this.fade;
        if (this.opacity > 1 || this.opacity < 0) this.fade *= -1;
        if (this.y < -10) this.reset();
    }
    draw() {
        ctx.fillStyle = `rgba(220, 200, 255, ${this.opacity})`;
        ctx.shadowBlur = this.size * 5;
        ctx.shadowColor = '#c8a0ff';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

for (let i = 0; i < 150; i++) stars.push(new Star());

function animate() {
    // Fond noir pur avec un léger effet de traîne
    ctx.fillStyle = '#020008';
    ctx.fillRect(0, 0, w, h);

    stars.forEach(s => {
        s.update();
        s.draw();
    });
    if (!prefersReducedMotion) requestAnimationFrame(animate);
}
animate();
</script>

<?php include __DIR__ . '/footer-archipel.php'; ?>
</body>
</html>
