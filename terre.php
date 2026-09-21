<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$pageTitle = 'Comprendre la Terre | Sols, Vivant et Migrations | Flux Info';
$pageDesc = 'Explorez les sols, les migrations, les écosystèmes et les relations du vivant dans la Porte Terre de Flux Info.';

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
            /* Identité chromatique Terre préservée */
            background: #050a04;
            background: radial-gradient(circle at 50% 80%, #0a1a08 0%, #050a04 100%);
            overflow-x: hidden;
        }

        #earthCanvas {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            opacity: 0.6;
        }

        /* Pulsation tellurique subtile */
        .earth-pulse {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 60%, rgba(80, 255, 120, 0.08), transparent 70%);
            mix-blend-mode: screen;
            animation: pulseEarth 12s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }
        @keyframes pulseEarth { 0%, 100% { opacity: 0.2; } 50% { opacity: 0.4; } }

        /* ============================================= */
        /* CONTENU & TYPOGRAPHIE (Standard 23px)         */
        /* ============================================= */
        .container {
            max-width: 950px; /* Élargi pour le confort des 23px */
            margin: 0 auto;
            padding: 54px 24px 100px;
            position: relative;
            z-index: 10;
            text-align: center;
        }

        /* Le H1 hérite du weight 200 et du gradient du header */
        h1 {
            filter: drop-shadow(0 0 25px rgba(80, 255, 175, 0.3));
            animation: growIn 1.4s cubic-bezier(0.17, 0.67, 0.83, 0.67);
            margin-top: 0;
        }

        @keyframes growIn {
            from { opacity: 0; transform: scale(0.95); filter: blur(10px); }
            to { opacity: 1; transform: scale(1); filter: blur(0); }
        }

        .intro-text {
            /* Aligné sur le standard 23px immersif */
            font-size: 1.45rem;
            font-weight: 300;
            color: #c8ffcf;
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
            font-size: 1.3rem;
            margin: 20px 0;
            color: #7fc77f;
            font-weight: 300; /* Finesse organique */
        }

        /* ============================================= */
        /* BOUTONS                                       */
        /* ============================================= */
        .btn-main {
            display: inline-block;
            padding: 22px 55px;
            background: rgba(80, 255, 175, 0.05);
            border: 1px solid rgba(80, 255, 175, 0.4);
            border-radius: 60px;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 300; /* Plus fin */
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            backdrop-filter: blur(10px);
            opacity: 0;
            animation: fadeIn 1s ease forwards 1.2s;
        }

        .btn-main:hover {
            background: rgba(80, 255, 175, 0.2);
            color: #ffffff;
            border-color: #ffffff;
            box-shadow: 0 0 50px rgba(80, 255, 175, 0.4);
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
            h1 { font-size: 1.8rem; letter-spacing: 2px; }
            .intro-text { font-size: 1.15rem; }
            .explorer-list li { font-size: 1.1rem; }
            .btn-main { padding: 18px 30px; letter-spacing: 2px; font-size: 0.9rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            .earth-pulse,
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
    --door-accent: #50ffaf;
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
<canvas id="earthCanvas" aria-hidden="true"></canvas>
<div class="earth-pulse"></div>

<main class="container">
    <h1>Comprendre la Terre</h1>

    <p class="intro-text">
        La Terre est un réseau vivant en perpétuelle mutation.<br>
        Sous nos pieds et dans nos paysages, des flux millénaires guident le destin du vivant.
    </p>

    <h2>Ce que vous allez Explorer</h2>

    <ul class="explorer-list">
        <li>- Les migrations comme réponse aux saisons et aux ressources</li>
        <li>- Les sols comme interfaces vivantes</li>
        <li>- Les continuités écologiques qui relient les territoires</li>
        <li>- L’effet des barrières humaines sur les déplacements du vivant</li>
    </ul>

    <section class="article-invitation" aria-labelledby="article-invitation-terre">
        <p class="article-invitation__meta"><span>Article augmenté</span><span>10 min de lecture</span></p>
        <h3 id="article-invitation-terre">La Terre en Mouvement : Le Grand Théâtre des Migrations</h3>
        <p class="article-invitation__question">Que faut-il relier pour comprendre une migration : la pluie, les sols, la nourriture, les saisons ou les obstacles humains ?</p>
        <ul class="article-invitation__promise">
            <li>Comment climat, végétation et ressources déclenchent de grands déplacements</li>
            <li>Pourquoi un sol ou un corridor écologique peut devenir une infrastructure du vivant</li>
            <li>Comment nos routes et nos frontières modifient des trajectoires anciennes</li>
        </ul>
        <a href="article-terre-migrations.php" class="btn-main">Suivre les Grandes Migrations →</a>
        <p class="article-invitation__hint">Comprendre · Relier · Manipuler · Vérifier les sources</p>
    </section>
    
    <a href="index.php" style="display:block; margin-top:30px; color:#50ffaf; text-decoration:none; font-size:0.8rem; text-transform:uppercase; opacity:0.6;">← Retour à l’Accueil</a>
</main>

<script>
/* ============================================= */
/* FOND GÉNÉRATIF: RÉSEAU ORGANIQUE (BIO-FLUX)  */
/* ============================================= */
const canvas = document.getElementById('earthCanvas');
const ctx = canvas.getContext('2d');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let w, h, points = [];

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

class BioPoint {
    constructor() { this.reset(); }
    reset() {
        this.x = Math.random() * w;
        this.y = Math.random() * h;
        this.vx = (Math.random() - 0.5) * 0.3;
        this.vy = (Math.random() - 0.5) * 0.3;
        this.radius = Math.random() * 2 + 1;
    }
    update() {
        this.x += this.vx;
        this.y += this.vy;
        if (this.x < 0 || this.x > w) this.vx *= -1;
        if (this.y < 0 || this.y > h) this.vy *= -1;
    }
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(80, 255, 175, 0.4)';
        ctx.fill();
    }
}

for (let i = 0; i < 50; i++) points.push(new BioPoint());

function animate() {
    ctx.clearRect(0, 0, w, h);
    
    // On dessine les connexions (le réseau)
    points.forEach((p1, i) => {
        p1.update();
        p1.draw();
        for (let j = i + 1; j < points.length; j++) {
            let p2 = points[j];
            let dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);
            if (dist < 200) {
                ctx.beginPath();
                ctx.strokeStyle = `rgba(80, 255, 175, ${0.15 * (1 - dist / 200)})`;
                ctx.lineWidth = 0.5;
                ctx.moveTo(p1.x, p1.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
            }
        }
    });
    if (!prefersReducedMotion) requestAnimationFrame(animate);
}
animate();
</script>

<?php include __DIR__ . '/footer-archipel.php'; ?>
</body>
</html>
