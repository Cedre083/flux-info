<?php
$pageTitle = 'Mentions Légales | Flux Info';
$pageDesc = 'Éditeur, hébergeur, propriété intellectuelle, responsabilité et informations légales concernant le site Flux Info.'; 
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

    <?= $headerHead ?>

<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
/* ============================================= */
/* FOND & IDENTITÉ FLUX-INFO                     */
/* ============================================= */
body {
    background: #05000a;
    background: radial-gradient(circle at 50% 20%, #1a0020 0%, #05000a 100%);
    overflow-x: hidden;
}

#fluxCanvas {
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    opacity: 0.45;
}

.flux-halo {
    position: fixed;
    inset: 0;
    background: radial-gradient(circle at 50% 40%, rgba(120, 180, 255, 0.08), transparent 70%);
    mix-blend-mode: screen;
    animation: fluxPulse 14s ease-in-out infinite;
    pointer-events: none;
    z-index: 1;
}
@keyframes fluxPulse { 
    0%, 100% { opacity: 0.2; } 
    50% { opacity: 0.4; } 
}

/* ============================================= */
/* CONTENEUR & TYPOGRAPHIE                       */
/* ============================================= */
.container {
    max-width: 950px;
    margin: 0 auto;
    padding: 60px 24px 120px;
    position: relative;
    z-index: 10;
    text-align: center;
}

h1 {
    filter: drop-shadow(0 0 25px rgba(120, 180, 255, 0.3));
    animation: riseIn 1.3s cubic-bezier(0.16, 1, 0.3, 1);
    margin-top: 0;
    letter-spacing: 3px;
}

@keyframes riseIn {
    from { opacity: 0; transform: translateY(40px); filter: blur(10px); }
    to { opacity: 1; transform: translateY(0); filter: blur(0); }
}

.legal-intro {
    font-size: 1.35rem;
    font-weight: 300;
    color: #cfe4ff;
    max-width: 800px;
    margin: 0 auto 60px;
    opacity: 0;
    animation: fadeIn 1s ease forwards 0.5s;
    line-height: 1.8;
}

h2 {
    margin-top: 70px;
    opacity: 0;
    animation: fadeIn 1s ease forwards 0.8s;
    letter-spacing: 3px;
    color: #ffffff;
}

.legal-section {
    font-size: 1.15rem;
    color: #d7e9ff;
    line-height: 1.8;
    max-width: 850px;
    margin: 20px auto 40px;
    opacity: 0;
    animation: fadeIn 1s ease forwards 1s;
}

.legal-section a {
    color: #8fc7ff;
    text-decoration: none;
}
.legal-section a:hover {
    text-decoration: underline;
}

.legal-footer {
    margin-top: 80px;
    font-style: italic;
    color: #9bb8d9;
    opacity: 0;
    animation: fadeIn 1s ease forwards 1.2s;
}

@keyframes fadeIn { 
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ============================================= */
/* RESPONSIVE                                    */
/* ============================================= */
@media (max-width: 600px) {
    .container { padding: 40px 20px; }
    h1 { font-size: 1.8rem; }
    .legal-intro { font-size: 1.15rem; }
    .legal-section { font-size: 1rem; }
}
</style>
</head>

<body>
<?= $headerNavigation ?>

<canvas id="fluxCanvas"></canvas>
<div class="flux-halo"></div>

<main class="container">

    <h1>Mentions Légales</h1>

    <p class="legal-intro">
        flux‑info.net est un site éditorial indépendant, non commercial, dédié à la transmission de données vérifiables, 
        à la compréhension du Vivant et aux explorations pédagogiques.
    </p>

    <h2>1. Éditeur du Site</h2>
    <p class="legal-section">
        <strong>flux‑info.net</strong> est une publication indépendante réalisée par:<br>
        <strong>Cédric Mercier</strong><br>
        France – Provence-Alpes-Côte d’Azur<br>
        Contact: <a href="mailto:contact@flux-info.net">contact@flux-info.net</a>
    </p>

    <h2>2. Hébergement</h2>
    <p class="legal-section">
        Le site est hébergé par:<br>
        <strong>PlanetHoster</strong><br>
        4416 Louis-B.-Mayer, Laval (Québec) H7P 0G1 – Canada<br>
        Infrastructure: France / Suisse<br>
        Site: <a href="https://www.planethoster.com" target="_blank">planethoster.com</a>
    </p>

    <h2>3. Nature du Site</h2>
    <p class="legal-section">
        flux‑info.net est un site gratuit, sans publicité, sans suivi commercial et sans collecte de données à des fins marketing.
        Il propose des contenus éditoriaux, pédagogiques et immersifs autour du Vivant, du climat, des flux naturels et culturels.
    </p>

    <h2>4. Propriété Intellectuelle</h2>
    <p class="legal-section">
        L’ensemble des contenus présents sur le site (textes, images, créations graphiques, modules interactifs, codes, animations) 
        sont protégés par le droit d’auteur. Toute reproduction, modification ou diffusion sans autorisation est interdite.
    </p>
    <p class="legal-section">
        Certaines images sont générées par IA (Gemini, Copilot, Manus AI, etc.) et restent soumises aux licences respectives de ces outils.
    </p>

    <h2>5. Données Personnelles</h2>
    <p class="legal-section">
        flux‑info.net ne collecte aucune donnée personnelle à des fins commerciales. Aucun cookie publicitaire, aucun profilage, 
        aucune analyse comportementale n’est utilisé.
    </p>
    <p class="legal-section">
        Les seules données éventuellement transmises sont celles que vous envoyez volontairement via un formulaire ou par e‑mail. 
        Elles ne sont jamais revendues ni cédées.
    </p>

    <h2>6. Liens Externes</h2>
    <p class="legal-section">
        Le site peut contenir des liens vers d’autres plateformes du réseau Archipel 
        (demainlhomme.org, lyrae-sphere.net, aisphera.eu, inner-circles.net, archipelconscience.org).  
        Chaque site possède ses propres mentions légales et politiques de confidentialité.
    </p>

    <h2>7. Responsabilité</h2>
    <p class="legal-section">
        flux‑info.net propose des contenus informatifs, pédagogiques et immersifs.  
        Les informations publiées sont vérifiées, sourcées et non doctrinaires, mais ne sauraient remplacer l’avis de spécialistes 
        dans les domaines scientifiques, juridiques ou médicaux.
    </p>

    <h2>8. Contact</h2>
    <p class="legal-section">
        Pour toute question concernant le site ou son fonctionnement:<br>
        <a href="mailto:contact@flux-info.net">contact@flux-info.net</a>
    </p>

    <p class="legal-footer">
        © 2026 - flux-info.net - Média pédagogique indépendant.
    </p>

</main>

<script>
/* ============================================= */
/* FOND ANIMÉ - STYLE FLUX-INFO                  */
/* ============================================= */
const canvas = document.getElementById('fluxCanvas');
const ctx = canvas.getContext('2d');
let w, h, particles = [];

function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

class FluxParticle {
    constructor() { this.reset(); }
    reset() {
        this.x = Math.random() * w;
        this.y = Math.random() * h;
        this.size = Math.random() * 2 + 0.5;
        this.speedX = (Math.random() - 0.5) * 0.3;
        this.speedY = (Math.random() - 0.5) * 0.3;
        this.alpha = Math.random() * 0.5 + 0.1;
    }
    update() {
        this.x += this.speedX;
        this.y += this.speedY;
        if (this.x < 0 || this.x > w) this.speedX *= -1;
        if (this.y < 0 || this.y > h) this.speedY *= -1;
    }
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(120, 180, 255, ${this.alpha})`;
        ctx.shadowBlur = 10;
        ctx.shadowColor = 'rgba(120, 180, 255, 0.5)';
        ctx.fill();
    }
}

for (let i = 0; i < 80; i++) particles.push(new FluxParticle());

function animate() {
    ctx.clearRect(0, 0, w, h);
    ctx.fillStyle = 'rgba(5, 0, 10, 0.1)';
    ctx.fillRect(0,0,w,h);

    particles.forEach((p1, i) => {
        p1.update();
        p1.draw();
        for (let j = i + 1; j < particles.length; j++) {
            let p2 = particles[j];
            let d = Math.hypot(p1.x - p2.x, p1.y - p2.y);
            if (d < 150) {
                ctx.strokeStyle = `rgba(120, 180, 255, ${0.1 * (1 - d/150)})`;
                ctx.lineWidth = 0.5;
                ctx.beginPath();
                ctx.moveTo(p1.x, p1.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
            }
        }
    });
    requestAnimationFrame(animate);
}
animate();
</script>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
