<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$pageTitle = 'Comprendre le Ciel | Atmosphère, Vents et Eau | Flux Info';
$pageDesc = 'Explorez l’atmosphère, les vents, l’humidité et les grands transferts d’énergie dans la Porte Ciel de Flux Info.';

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
        /* CONFIGURATION GLOBALE (Héritage du Header)    */
        /* ============================================= */
        body {
            /* On garde uniquement les spécificités visuelles de la page Ciel */
            background: #0a0f1e;
            background: radial-gradient(circle at 50% 100%, #1a2a4a 0%, #0a0f1e 100%);
            overflow-x: hidden;
        }

        #skyCanvas {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        .sky-halo {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 30%, rgba(200, 220, 255, 0.1), transparent 70%);
            mix-blend-mode: screen;
            animation: skyPulse 12s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }
        @keyframes skyPulse { 0%, 100% { opacity: 0.3; } 50% { opacity: 0.6; } }

        /* ============================================= */
        /* CONTENU & TYPOGRAPHIE (Standard 23px)         */
        /* ============================================= */
        .container {
            max-width: 900px; /* Élargi pour accueillir le texte en 23px */
            margin: 0 auto; 
            padding: 54px 24px 100px;
            position: relative; 
            z-index: 10; 
            text-align: center;
        }

        /* Le H1 hérite maintenant de la finesse (weight 200) du header */
        h1 {
            filter: drop-shadow(0 0 20px rgba(143, 167, 255, 0.3));
            animation: riseBlur 1.2s ease-out;
            margin-top: 0; /* Aligné avec le padding du container */
        }

        @keyframes riseBlur {
            from { opacity: 0; transform: translateY(40px); filter: blur(15px); }
            to { opacity: 1; transform: translateY(0); filter: blur(0); }
        }

        .intro-text {
            /* Aligné sur le standard 23px du site */
            font-size: 1.45rem; 
            font-weight: 300;
            color: #cfd9ff; 
            max-width: 800px;
            margin: 0 auto 60px; 
            opacity: 0; 
            animation: fadeIn 1s ease forwards 0.5s;
            line-height: 1.8;
        }

        /* H2 hérite de la finesse du header (weight 300) */
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
            margin: 20px 0; 
            font-size: 1.3rem; /* Grand et fin */
            font-weight: 300;
            color: #8fa7ff; 
        }

        /* ============================================= */
        /* BOUTONS                                       */
        /* ============================================= */
        .btn-main {
            display: inline-block; 
            padding: 20px 50px;
            background: rgba(143, 167, 255, 0.05); 
            border: 1px solid rgba(143, 167, 255, 0.4);
            border-radius: 60px; 
            color: #ffffff; 
            text-decoration: none;
            text-transform: uppercase; 
            letter-spacing: 4px; 
            font-weight: 300; /* Bouton plus fin */
            transition: 0.5s cubic-bezier(0.23, 1, 0.32, 1); 
            backdrop-filter: blur(10px);
            opacity: 0; 
            animation: fadeIn 1s ease forwards 1.2s;
        }
        
        .btn-main:hover {
            background: rgba(143, 167, 255, 0.2); 
            color: #ffffff;
            border-color: #ffffff;
            box-shadow: 0 0 50px rgba(143, 167, 255, 0.3); 
            transform: translateY(-5px);
        }

        @keyframes fadeIn { to { opacity: 1; transform: translateY(0); } }

        /* ============================================= */
        /* MOBILE                                        */
        /* ============================================= */
        @media (max-width: 600px) {
            .container { padding: 36px 20px 60px; }
            .intro-text { font-size: 1.15rem; }
            .explorer-list li { font-size: 1.1rem; }
            .btn-main { padding: 15px 30px; letter-spacing: 2px; font-size: 0.9rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            .sky-halo,
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
    --door-accent: #8fa7ff;
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
<canvas id="skyCanvas" aria-hidden="true"></canvas>
<div class="sky-halo"></div>

<main class="container">
    <h1>Comprendre le Ciel</h1>

    <p class="intro-text">
        Le ciel est un immense moteur thermique.<br>
        L’air s’élève, descend et circule en flux invisibles qui sculptent notre destin climatique.
    </p>

    <h2>Ce que vous allez Explorer</h2>

    <ul class="explorer-list">
        <li>- Les grandes cellules de circulation atmosphérique</li>
        <li>- Les courants-jets et les vents d’altitude</li>
        <li>- Le transport de chaleur et d’humidité</li>
        <li>- Les rivières atmosphériques et le cycle de l’eau</li>
    </ul>

    <section class="article-invitation" aria-labelledby="article-invitation-ciel">
        <p class="article-invitation__meta"><span>Article augmenté</span><span>9 min de lecture</span></p>
        <h3 id="article-invitation-ciel">Les Souffles de l’Atmosphère</h3>
        <p class="article-invitation__question">Pourquoi l’air ne reste-t-il jamais immobile, et comment ses mouvements finissent-ils par déplacer chaleur, eau et sécheresse ?</p>
        <ul class="article-invitation__promise">
            <li>Comment les contrastes de température mettent l’atmosphère en mouvement</li>
            <li>Pourquoi les courants-jets structurent une partie de notre météo</li>
            <li>Comment l’eau voyage dans le ciel avant de revenir vers les sols</li>
        </ul>
        <a href="article-ciel-vents.php" class="btn-main">Entrer dans les Souffles de l’Atmosphère →</a>
        <p class="article-invitation__hint">Comprendre · Relier · Manipuler · Vérifier les sources</p>
    </section>
    
    <a href="index.php" style="display:block; margin-top:30px; color:#8fa7ff; text-decoration:none; font-size:0.8rem; text-transform:uppercase; opacity:0.6;">← Retour à l’Accueil</a>
</main>

<script>
/* ============================================= */
/* FOND GÉNÉRATIF: COURANTS D'AIR ASCENDANTS    */
/* ============================================= */
const canvas = document.getElementById('skyCanvas');
const ctx = canvas.getContext('2d');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let w, h, particles = [];

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

class WindParticle {
    constructor() { this.reset(); }
    reset() {
        this.x = Math.random() * w;
        this.y = h + Math.random() * 100;
        this.vx = (Math.random() - 0.5) * 0.5;
        this.vy = -Math.random() * 1.5 - 0.5; // Monte vers le haut
        this.len = Math.random() * 80 + 20;
        this.opacity = Math.random() * 0.3;
    }
    update() {
        this.y += this.vy;
        this.x += this.vx + Math.sin(this.y * 0.01) * 0.5; // Oscillation légère
        if (this.y < -this.len) this.reset();
    }
    draw() {
        ctx.strokeStyle = `rgba(200, 220, 255, ${this.opacity})`;
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.moveTo(this.x, this.y);
        ctx.lineTo(this.x + this.vx * 10, this.y + this.len);
        ctx.stroke();
    }
}

for (let i = 0; i < 60; i++) particles.push(new WindParticle());

function animate() {
    ctx.clearRect(0, 0, w, h);
    // Gradient de fond subtil
    let grad = ctx.createLinearGradient(0, 0, 0, h);
    grad.addColorStop(0, '#0a0f1e');
    grad.addColorStop(1, '#1a2a4a');
    ctx.fillStyle = grad;
    ctx.fillRect(0,0,w,h);

    particles.forEach(p => { p.update(); p.draw(); });
    if (!prefersReducedMotion) requestAnimationFrame(animate);
}
animate();
</script>

<?php include __DIR__ . '/footer-archipel.php'; ?>
</body>
</html>
