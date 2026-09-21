<?php 
/** * FOOTER ARCHIPEL - VERSION FINALE STABILISÉE
 * Centrage absolu, Haute Clarté & Typographie Affinée
 */

/* Le footer hérite discrètement du domaine courant ; une page peut aussi fournir $footerThemeRgb explicitement. */
$footerPage = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
$footerThemeMap = [
    'ocean.php' => '0, 212, 255',
    'article-ocean-courants.php' => '0, 212, 255',
    'ciel.php' => '143, 167, 255',
    'article-ciel-vents.php' => '143, 167, 255',
    'terre.php' => '80, 255, 175',
    'article-terre-migrations.php' => '80, 255, 175',
    'humanite.php' => '255, 82, 162',
    'article-humanite-vivant.php' => '255, 82, 162',
    'cosmos.php' => '200, 160, 255',
    'article-cosmos-etoiles.php' => '200, 160, 255',
    'archipel.php' => '200, 160, 255',
    'article-archipel-conscience.php' => '200, 160, 255',
];
$footerThemeRgb = $footerThemeRgb ?? ($footerThemeMap[$footerPage] ?? '200, 160, 255');
if (!preg_match('/^\d{1,3},\s*\d{1,3},\s*\d{1,3}$/', $footerThemeRgb)) {
    $footerThemeRgb = '200, 160, 255';
}
?>
<style>
/* ============================================================ */
/* 1. STRUCTURE & CENTRAGE (Correction alignement)              */
/* ============================================================ */
.archipel-footer {
    position: relative;
    width: 100%;
    margin-top: 0; /* Collé au contenu pour éviter le vide */
    padding: 100px 0 60px;
    background: rgba(5, 0, 15, 0.95);
    border-top: 0;
    backdrop-filter: blur(15px);
    overflow: hidden;
    z-index: 10;
    clear: both;
}

.archipel-footer::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    background:
        linear-gradient(180deg,
            rgba(var(--footer-theme-rgb), 0) 0%,
            rgba(var(--footer-theme-rgb), 0.13) 12%,
            rgba(5, 0, 15, 0.46) 42%,
            rgba(5, 0, 15, 0.88) 74%,
            rgba(5, 0, 15, 0.98) 100%);
    box-shadow: inset 0 1px 0 rgba(var(--footer-theme-rgb), 0.32);
}

.archipel-footer-halo {
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle at 50% 0%, rgba(var(--footer-theme-rgb), 0.22), transparent 68%),
        radial-gradient(circle at 100% 100%, rgba(var(--footer-theme-rgb), 0.07), transparent 75%);
    mix-blend-mode: screen;
    pointer-events: none;
    z-index: 2;
}

#footerCanvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
    pointer-events: none;
    z-index: 3;
    opacity: 0.5;
}

.archipel-footer-content {
    position: relative;
    z-index: 4;
    max-width: 1200px;
    margin: 0 auto; /* Centrage horizontal du bloc */
    padding: 0 24px;
    display: flex;
    flex-direction: column;
    align-items: center; /* CENTRAGE AXIAL DE TOUS LES ENFANTS */
    text-align: center;
}

/* ============================================================ */
/* 2. TYPOGRAPHIE HAUTE CLARTÉ (Standard 23px Affiné)           */
/* ============================================================ */

.archipel-footer-content h3 {
    font-size: clamp(1.6rem, 5vw, 2.2rem);
    font-weight: 100; /* Extra-fin comme le H1 */
    letter-spacing: 8px;
    color: #ffffff;
    text-shadow: 0 0 30px rgba(200, 160, 255, 0.6);
    margin-bottom: 80px;
    text-transform: uppercase;
}

/* GRILLE DES SITES */
.archipel-sites-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 46px 32px;
    width: 100%;
    max-width: 1140px;
    margin: 0 auto 80px;
    align-items: start;
}

.site-card {
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 0 1 250px;
    min-height: 330px;
    max-width: 260px;
    padding: 8px 10px 18px;
    box-sizing: border-box;
    transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.site-card img {
    width: 55px;
    height: 55px;
    margin-bottom: 20px;
    filter: drop-shadow(0 0 10px rgba(200, 160, 255, 0.2));
    transition: 0.4s;
}

.site-card span {
    font-weight: 500;
    font-size: 1.3rem;
    color: #ffffff; 
    letter-spacing: 2px;
    text-transform: uppercase;
}

.site-card > span:not(.site-card-mark) {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    min-height: 3.05em;
    line-height: 1.35;
    text-align: center;
}

.site-card-mark {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    margin-bottom: 20px;
    color: #f0e6ff !important;
    background: rgba(200, 160, 255, 0.11);
    border: 1px solid rgba(218, 190, 255, 0.55);
    border-radius: 50%;
    box-shadow: 0 0 18px rgba(200, 160, 255, 0.2);
    font-size: 0.68rem !important;
    font-weight: 600 !important;
    letter-spacing: 1px !important;
}

.site-card p {
    font-size: 1rem;
    font-weight: 300;
    color: #ffffff; 
    opacity: 0.95; /* Clarté maximale */
    line-height: 1.58;
    max-width: 260px;
    margin: 14px 0 0;
    text-align: center;
}

.site-card:hover { transform: translateY(-10px); }
.site-card:hover span { color: #c8a0ff; }
.site-card:hover .site-card-mark { color: #ffffff !important; border-color: #ffffff; }

/* CONTACT & PARTAGE */
.footer-extra {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 28px 48px;
    margin: 60px 0;
    flex-wrap: wrap;
    width: 100%;
}

.footer-contact a {
    color: #ffffff;
    font-size: 1.2rem;
    text-decoration: none;
    border-bottom: 2px solid #c8a0ff;
    padding-bottom: 5px;
    transition: 0.3s;
}

.footer-contact a:hover { color: #c8a0ff; border-bottom-color: #ffffff; }

.footer-share {
    font-size: 1.1rem;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 15px;
}

.footer-share a, .footer-share button {
    background: rgba(200, 160, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #ffffff;
    padding: 12px 25px;
    border-radius: 50px;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: 0.4s;
}

.footer-share a:hover, .footer-share button:hover {
    background: #ffffff;
    color: #050014;
    box-shadow: 0 0 20px #ffffff;
}

.footer-support {
    display: flex;
    align-items: center;
}

.footer-support a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    box-sizing: border-box;
    padding: 0 22px;
    color: #07180e;
    background: linear-gradient(135deg, #b6ffbf 0%, #63e987 52%, #29bd60 100%);
    border: 1px solid rgba(205, 255, 215, 0.85);
    border-radius: 50px;
    box-shadow: 0 0 0 1px rgba(27, 145, 69, 0.2), 0 5px 15px rgba(72, 225, 125, 0.25);
    font-size: 0.82rem;
    font-weight: 500;
    letter-spacing: 1.3px;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
    transition: color 0.2s ease, background 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.footer-support a:hover,
.footer-support a:focus-visible {
    color: #021008;
    background: linear-gradient(135deg, #d7ffdb 0%, #85f7a2 52%, #45d87a 100%);
    border-color: #ffffff;
    box-shadow: 0 0 0 1px rgba(190, 255, 204, 0.45), 0 8px 22px rgba(72, 225, 125, 0.48);
    transform: translateY(-2px);
}

@keyframes footer-support-pulse {
    0%, 100% { box-shadow: 0 0 0 1px rgba(27, 145, 69, 0.2), 0 5px 15px rgba(72, 225, 125, 0.25); }
    50% { box-shadow: 0 0 0 1px rgba(190, 255, 204, 0.45), 0 7px 24px rgba(72, 225, 125, 0.45); }
}

@media (prefers-reduced-motion: no-preference) {
    .footer-support a { animation: footer-support-pulse 2.8s ease-in-out infinite; }
}

/* LÉGAL & CRÉDITS */
.footer-legal {
    margin-top: 60px;
    padding-top: 40px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 30px; /* Espace entre les liens légaux */
    flex-wrap: wrap;
}

.footer-legal a {
    color: #ffffff;
    text-decoration: none;
    font-size: 0.9rem;
    opacity: 0.7;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: 0.3s;
}

.footer-legal a:hover {
    opacity: 1;
    color: #c8a0ff;
}

.archipel-credits {
    opacity: 0.7;
    font-size: 0.95rem;
    color: #ffffff;
    margin-top: 40px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 300;
}

/* MODE LECTURE: contraste renforcé pour les cartes de l'Archipel */
body.reading-mode .archipel-footer {
    background: linear-gradient(180deg, #e9edf1 0%, #e1e7eb 100%) !important;
    color: #263238 !important;
    backdrop-filter: none !important;
}
body.reading-mode .archipel-footer::before {
    background: linear-gradient(180deg, rgba(110, 91, 145, 0.12), rgba(233, 237, 241, 0.1) 45%, rgba(225, 231, 235, 0.42) 100%);
    box-shadow: inset 0 1px 0 rgba(110, 91, 145, 0.24);
}
body.reading-mode .archipel-footer-halo,
body.reading-mode .archipel-footer #footerCanvas { opacity: 0 !important; visibility: hidden; }
body.reading-mode .archipel-footer-content h3 {
    color: #2d3640 !important;
    text-shadow: none !important;
}
body.reading-mode .archipel-footer .site-card {
    color: #263238 !important;
    background: rgba(255, 253, 248, 0.78) !important;
    border: 1px solid rgba(63, 76, 88, 0.14);
    border-radius: 18px;
    box-shadow: 0 8px 22px rgba(54, 63, 72, 0.08);
}
body.reading-mode .archipel-footer .site-card > span:not(.site-card-mark) {
    color: #34495e !important;
    text-shadow: none !important;
}
body.reading-mode .archipel-footer .site-card p {
    color: #43515a !important;
    opacity: 1 !important;
}
body.reading-mode .archipel-footer .site-card-mark {
    color: #59486f !important;
    background: #ebe5f4;
    border-color: rgba(89, 72, 111, 0.36);
    box-shadow: 0 5px 14px rgba(89, 72, 111, 0.12);
}
body.reading-mode .archipel-footer .site-card:hover {
    background: #fffdf8 !important;
    border-color: #a28bc4;
}
body.reading-mode .archipel-footer .site-card:hover > span:not(.site-card-mark) { color: #574079 !important; }
body.reading-mode .archipel-footer .footer-contact a,
body.reading-mode .archipel-footer .footer-share,
body.reading-mode .archipel-footer .footer-legal a,
body.reading-mode .archipel-footer .archipel-credits { color: #405467 !important; }
body.reading-mode .archipel-footer .footer-share a,
body.reading-mode .archipel-footer .footer-share button {
    color: #574079 !important;
    background: rgba(255, 253, 248, 0.72);
    border-color: rgba(89, 72, 111, 0.28);
}
body.reading-mode .archipel-footer .footer-share a:hover,
body.reading-mode .archipel-footer .footer-share button:hover {
    color: #fff !important;
    background: #624b86;
}
body.reading-mode .archipel-footer .footer-legal { border-top-color: rgba(63, 76, 88, 0.16); }

/* RESPONSIVE */

@media (max-width: 980px) {
    .archipel-sites-grid {
        max-width: 760px;
        gap: 42px 30px;
    }
    .site-card { flex-basis: 240px; }
}

@media (max-width: 768px) {
    .archipel-footer { padding-top: 60px; }
    .footer-extra { flex-direction: column; gap: 30px; }
    .footer-share { flex-direction: column; }
    .footer-share > div { display: flex; flex-wrap: wrap; justify-content: center; }
    .site-card p { max-width: 100%; }
    .footer-legal { flex-direction: column; gap: 20px; }
}

@media (max-width: 540px) {
    .archipel-footer { padding: 56px 0 44px; }
    .archipel-footer-content { padding: 0 18px; }
    .archipel-footer-content h3 { letter-spacing: 4px; margin-bottom: 52px; }
    .archipel-sites-grid { gap: 38px; margin-bottom: 56px; }
    .site-card { flex-basis: 100%; min-height: 0; max-width: 320px; }
    .footer-contact a { font-size: 1.05rem; }
    .footer-support a { width: 100%; min-height: 48px; }
}


/* Flux Info reste la destination principale ; l'écosystème devient secondaire. */
.footer-brand{max-width:760px;margin:0 auto 48px;text-align:center}.footer-brand h3{margin:0 0 14px !important}.footer-brand p{margin:0;line-height:1.7;font-size:1rem;opacity:.78}.footer-ecosystem{width:100%;max-width:980px;margin:0 auto 46px;padding:24px;border:1px solid rgba(255,255,255,.09);border-radius:22px;background:rgba(255,255,255,.025)}.footer-ecosystem__label{margin:0 0 8px;font-size:.65rem;letter-spacing:.18em;text-transform:uppercase;opacity:.55}.footer-ecosystem>p:not(.footer-ecosystem__label){margin:0 auto 18px;max-width:720px;font-size:.84rem;line-height:1.62;opacity:.7}.footer-ecosystem-links{display:flex;flex-wrap:wrap;justify-content:center;gap:9px}.footer-ecosystem-links a{display:inline-flex;align-items:center;min-height:38px;padding:8px 12px;border:1px solid rgba(255,255,255,.10);border-radius:999px;color:#fff;text-decoration:none;font-size:.7rem;letter-spacing:.04em;background:rgba(255,255,255,.025);transition:.2s}.footer-ecosystem-links a:hover,.footer-ecosystem-links a:focus-visible{outline:none;border-color:rgba(var(--footer-theme-rgb),.55);background:rgba(var(--footer-theme-rgb),.09);transform:translateY(-1px)}.footer-extra{margin:34px 0}.footer-legal{margin-top:42px}.archipel-credits{margin-top:28px}.archipel-footer{padding-top:72px}.archipel-footer-content h3{margin-bottom:0}
body.reading-mode .footer-ecosystem{background:rgba(255,253,248,.72);border-color:rgba(63,76,88,.14)}body.reading-mode .footer-ecosystem-links a{color:#405467;background:rgba(255,253,248,.74);border-color:rgba(89,72,111,.22)}
@media(max-width:540px){.footer-brand{margin-bottom:34px}.footer-ecosystem{padding:20px 15px;margin-bottom:34px}.footer-ecosystem-links{gap:8px}.footer-ecosystem-links a{font-size:.66rem}}
</style>

<footer class="archipel-footer" style="--footer-theme-rgb: <?= htmlspecialchars($footerThemeRgb, ENT_QUOTES, 'UTF-8') ?>;">
    <div class="archipel-footer-halo"></div>
    <canvas id="footerCanvas"></canvas>

    <div class="archipel-footer-content">
        <div class="footer-brand">
            <h3>Flux Info</h3>
            <p>Flux Info est un média pédagogique indépendant consacré aux flux de matière, d’énergie, d’information et de vivant qui relient la Biosphère, les sociétés humaines et les technologies.</p>
        </div>

        <div class="footer-ecosystem">
            <p class="footer-ecosystem__label">Écosystème partenaire</p>
            <p>Flux Info s’inscrit dans un ensemble de projets complémentaires. Ces sites prolongent d’autres dimensions du travail, mais ne constituent pas les sources scientifiques de Flux Info.</p>
            <div class="footer-ecosystem-links">
                <a href="https://demainlhomme.org" target="_blank" rel="noopener noreferrer">Demain l’Homme</a>
                <a href="https://lyrae-sphere.net" target="_blank" rel="noopener noreferrer">Lyrae Sphere</a>
                <a href="https://aisphera.eu" target="_blank" rel="noopener noreferrer">AI Sphera</a>
                <a href="https://inner-circles.net" target="_blank" rel="noopener noreferrer">Inner Circles</a>
                <a href="https://archipelconscience.org" target="_blank" rel="noopener noreferrer">Archipel de la Conscience</a>
                <a href="https://www.agibiospheric.net" target="_blank" rel="noopener noreferrer">AGIBIOSPHERIC</a>
                <a href="https://the-seed.net" target="_blank" rel="noopener noreferrer">The Seed</a>
            </div>
        </div>

        <div class="footer-extra">
            <div class="footer-contact">
                <a href="mailto:contact@flux-info.net">contact@flux-info.net</a>
            </div>
            
            <div class="footer-share">
                <span>Partager:</span>
                <div style="display:flex; gap:10px;">
                    <a href="https://twitter.com/intent/tweet?url=https://flux-info.net" target="_blank" rel="noopener noreferrer">X</a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://flux-info.net" target="_blank" rel="noopener noreferrer">FB</a>
                    <button onclick="copyLink()" id="copyBtn">Lien</button>
                </div>
            </div>

            <div class="footer-support">
                <a href="gardien.php" aria-label="Soutenir Flux Info">Nous soutenir</a>
            </div>
        </div>

        <div class="footer-legal">
            <a href="faq.php">Foire Aux Questions</a>
            <a href="politique-editoriale.php">Charte Éditoriale</a>
            <a href="sitemap-semantique.php">Carte des Parcours</a>
            <a href="mentions-legales.php">Mentions Légales</a>
            <a href="cgu.php">CGU</a>
            <a href="rgpd.php">RGPD</a>
            <a href="manifeste.txt" target="_blank">Manifeste</a>
            <a href="humans.txt" target="_blank">Humans.txt</a>
        </div>

        <p class="archipel-credits">
            © 2026 Flux Info - Média pédagogique indépendant.
        </p>
    </div>
</footer>

<script>
(function() {
    const footerCanvas = document.getElementById('footerCanvas');
    const fctx = footerCanvas.getContext('2d');

    function resizeFooter() {
        const parent = document.querySelector('.archipel-footer');
        if (parent) {
            footerCanvas.width = parent.offsetWidth;
            footerCanvas.height = parent.offsetHeight;
            initStars();
        }
    }

    let stars = [];
    const COUNT = 130;

    function initStars() {
        stars = [];
        for (let i = 0; i < COUNT; i++) {
            stars.push({
                x: Math.random() * footerCanvas.width,
                y: Math.random() * footerCanvas.height,
                r: 0.6 + Math.random() * 1.4,
                alpha: 0.15 + Math.random() * 0.3,
                speedX: (Math.random() - 0.5) * 0.05,
                speedY: (Math.random() - 0.5) * 0.05,
                pulse: Math.random() * Math.PI * 2
            });
        }
    }

    function drawFooter() {
        fctx.clearRect(0, 0, footerCanvas.width, footerCanvas.height);
        stars.forEach(s => {
            s.pulse += 0.015;
            const pulseAlpha = s.alpha + Math.sin(s.pulse) * 0.1;
            fctx.beginPath();
            fctx.fillStyle = `rgba(220,200,255,${pulseAlpha})`;
            fctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
            fctx.fill();
            s.x += s.speedX; s.y += s.speedY;
            if (s.x < -10) s.x = footerCanvas.width + 10;
            if (s.x > footerCanvas.width + 10) s.x = -10;
            if (s.y < -10) s.y = footerCanvas.height + 10;
            if (s.y > footerCanvas.height + 10) s.y = -10;
        });

        fctx.lineWidth = 0.8;
        for (let i = 0; i < stars.length; i++) {
            for (let j = i + 1; j < stars.length; j++) {
                const dx = stars[i].x - stars[j].x;
                const dy = stars[i].y - stars[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 110) {
                    const opacity = 0.1 * (1 - dist / 110);
                    fctx.strokeStyle = `rgba(200,160,255,${opacity})`;
                    fctx.beginPath();
                    fctx.moveTo(stars[i].x, stars[i].y);
                    fctx.lineTo(stars[j].x, stars[j].y);
                    fctx.stroke();
                }
            }
        }
        requestAnimationFrame(drawFooter);
    }

    window.addEventListener('resize', resizeFooter);
    resizeFooter(); 
    drawFooter();
})();

function copyLink() {
    navigator.clipboard.writeText('https://flux-info.net').then(() => {
        const btn = document.getElementById('copyBtn');
        const originalText = btn.innerText;
        btn.innerText = 'Copié !';
        setTimeout(() => { btn.innerText = originalText; }, 2000);
    });
}
</script>
