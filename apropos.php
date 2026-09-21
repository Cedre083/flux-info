<?php
/**
 * À PROPOS - Flux Info
 * Mission, méthode, transparence éditoriale et collaboration humain / IA
 */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$pageTitle = 'À Propos de Flux Info | Mission, Méthode et IA';
$pageDesc = 'Découvrez la mission, la méthode, les choix éditoriaux, les niveaux de preuve et l’usage encadré des intelligences artificielles sur Flux Info.';
$pageImg = 'https://flux-info.net/images/ChatGPT_archipel.webp';
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
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicon-512.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="theme-color" content="#100019">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
<?= $headerHead ?>

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
.apropos-glow {
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    background:
        radial-gradient(circle at 20% 14%, rgba(88, 176, 255, .10), transparent 34%),
        radial-gradient(circle at 82% 26%, rgba(200, 160, 255, .12), transparent 36%),
        radial-gradient(circle at 50% 72%, rgba(255, 184, 112, .06), transparent 38%);
}

.apropos-main {
    position: relative;
    z-index: 2;
    width: min(1120px, calc(100% - 40px));
    margin: 0 auto;
    padding: 68px 0 120px;
    color: inherit;
}

.apropos-hero {
    max-width: 920px;
    margin: 0 auto 90px;
    text-align: center;
}

.apropos-kicker,
.section-kicker {
    margin: 0 0 18px;
    font-size: .72rem;
    line-height: 1.5;
    letter-spacing: .24em;
    text-transform: uppercase;
    opacity: .62;
}

.apropos-hero h1 {
    margin: 0 auto 24px;
    max-width: 860px;
    font-size: clamp(1.85rem, 4.4vw, 3.45rem);
    line-height: 1.04;
    font-weight: 200;
    letter-spacing: -.035em;
}

.apropos-lead {
    max-width: 820px;
    margin: 0 auto 42px;
    font-size: clamp(1.08rem, 2.1vw, 1.35rem);
    line-height: 1.75;
    opacity: .9;
}

.apropos-hero-visual,
.editorial-figure {
    margin: 0;
    border-radius: 26px;
    overflow: hidden;
    border: 1px solid color-mix(in srgb, currentColor 14%, transparent);
    background: color-mix(in srgb, currentColor 3%, transparent);
    box-shadow: 0 22px 65px rgba(0,0,0,.17);
}

.apropos-hero-visual img {
    display: block;
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
}

.apropos-hero-visual figcaption,
.editorial-figure figcaption {
    padding: 13px 18px 15px;
    font-size: .76rem;
    line-height: 1.5;
    letter-spacing: .05em;
    opacity: .58;
}

.apropos-section {
    max-width: 920px;
    margin: 0 auto 108px;
}

.apropos-section h2 {
    margin: 0 0 32px;
    font-size: clamp(1.7rem, 4vw, 2.65rem);
    line-height: 1.2;
    font-weight: 250;
    letter-spacing: -.02em;
    color: inherit;
}

.apropos-section h3 {
    margin: 0 0 12px;
    font-size: 1.08rem;
    line-height: 1.4;
    font-weight: 500;
    color: inherit;
}

.apropos-section p,
.apropos-section li {
    color: inherit;
    font-weight: 300;
    line-height: 1.82;
}

.apropos-section p {
    margin: 0 0 1.5rem;
}

.apropos-section strong {
    font-weight: 500;
}

.promise {
    margin: 42px 0 0;
    padding: 28px 30px;
    border-left: 2px solid color-mix(in srgb, currentColor 42%, transparent);
    background: color-mix(in srgb, currentColor 3.5%, transparent);
    border-radius: 0 18px 18px 0;
}

.promise p {
    margin: 0;
    font-size: clamp(1.05rem, 2.2vw, 1.28rem);
    line-height: 1.75;
}

.three-pillars,
.ai-grid,
.constellation-grid,
.door-grid {
    display: grid;
    gap: 18px;
}

.three-pillars {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    margin-top: 38px;
}

.pillar,
.ai-card,
.constellation-card,
.door-card {
    border: 1px solid color-mix(in srgb, currentColor 13%, transparent);
    background: color-mix(in srgb, currentColor 3.5%, transparent);
    border-radius: 20px;
}

.pillar {
    padding: 26px;
}

.pillar-index {
    display: inline-flex;
    margin-bottom: 22px;
    font-size: .66rem;
    letter-spacing: .18em;
    opacity: .52;
}

.pillar p,
.ai-card p,
.constellation-card p,
.door-card p {
    margin: 0;
    font-size: .94rem;
    line-height: 1.65;
    opacity: .78;
}

.editorial-split {
    display: grid;
    grid-template-columns: minmax(0, .92fr) minmax(0, 1.08fr);
    gap: 50px;
    align-items: center;
}

.editorial-figure img {
    display: block;
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
}

.flow-line {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    margin: 28px 0 0;
}

.flow-line span {
    padding: 9px 13px;
    border: 1px solid color-mix(in srgb, currentColor 15%, transparent);
    border-radius: 999px;
    font-size: .75rem;
    letter-spacing: .04em;
    background: color-mix(in srgb, currentColor 3%, transparent);
}

.flow-line b {
    font-weight: 300;
    opacity: .42;
}

.door-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    margin-top: 34px;
}

.door-card {
    display: block;
    padding: 22px 24px;
    color: inherit;
    text-decoration: none;
    transition: transform .28s ease, border-color .28s ease, background .28s ease;
}

.door-card:hover,
.door-card:focus-visible {
    transform: translateY(-3px);
    border-color: color-mix(in srgb, currentColor 32%, transparent);
    background: color-mix(in srgb, currentColor 6%, transparent);
}

.door-card span {
    display: block;
    margin-bottom: 7px;
    font-size: .73rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    opacity: .62;
}

.ai-section {
    max-width: 1000px;
}

.ai-intro {
    max-width: 840px;
}

.ai-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr));
    margin: 38px 0 30px;
}

.ai-card {
    position: relative;
    min-height: 158px;
    padding: 26px 22px;
    overflow: hidden;
}

.ai-card::before {
    content: '';
    position: absolute;
    width: 120px;
    height: 120px;
    right: -54px;
    top: -58px;
    border-radius: 50%;
    background: radial-gradient(circle, color-mix(in srgb, currentColor 15%, transparent), transparent 70%);
    pointer-events: none;
}

.ai-name {
    display: block;
    margin-bottom: 14px;
    font-size: 1.15rem;
    font-weight: 450;
    letter-spacing: .02em;
}

.transparency-note {
    padding: 26px 28px;
    border: 1px solid color-mix(in srgb, currentColor 15%, transparent);
    border-radius: 20px;
    background: color-mix(in srgb, currentColor 4%, transparent);
}

.transparency-note p:last-child {
    margin-bottom: 0;
}

.constellation-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    margin-top: 34px;
}

.constellation-card {
    display: flex;
    flex-direction: column;
    min-height: 178px;
    padding: 24px;
}

.constellation-card a {
    margin-top: auto;
    padding-top: 20px;
    color: inherit;
    font-size: .78rem;
    letter-spacing: .08em;
    text-decoration-thickness: 1px;
    text-underline-offset: .22em;
    opacity: .78;
}

.signature {
    margin-top: 38px;
    padding-top: 28px;
    border-top: 1px solid color-mix(in srgb, currentColor 12%, transparent);
    font-size: .92rem;
    opacity: .76;
}

.apropos-end {
    max-width: 860px;
    margin: 20px auto 0;
    text-align: center;
}

.apropos-end .closing {
    margin: 0 auto 34px;
    font-size: clamp(1.25rem, 3vw, 1.7rem);
    line-height: 1.6;
    font-weight: 300;
}

.btn-main {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 52px;
    padding: 14px 28px;
    border-radius: 999px;
    border: 1px solid color-mix(in srgb, currentColor 22%, transparent);
    background: color-mix(in srgb, currentColor 4%, transparent);
    color: inherit;
    text-decoration: none;
    font-size: .78rem;
    letter-spacing: .12em;
    text-transform: uppercase;
    transition: transform .25s ease, background .25s ease, border-color .25s ease;
}

.btn-main:hover,
.btn-main:focus-visible {
    transform: translateY(-2px);
    background: color-mix(in srgb, currentColor 8%, transparent);
    border-color: color-mix(in srgb, currentColor 38%, transparent);
}

body.reading-mode .apropos-glow {
    display: none;
}

body.reading-mode .apropos-hero-visual,
body.reading-mode .editorial-figure {
    box-shadow: none;
}

body.reading-mode .pillar,
body.reading-mode .ai-card,
body.reading-mode .constellation-card,
body.reading-mode .door-card,
body.reading-mode .transparency-note,
body.reading-mode .promise {
    background: rgba(255,255,255,.42);
}

@media (max-width: 860px) {
    .three-pillars,
    .ai-grid,
    .constellation-grid,
    .door-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .editorial-split {
        grid-template-columns: 1fr;
        gap: 34px;
    }

    .editorial-figure {
        max-width: 560px;
        margin-inline: auto;
    }
}

@media (max-width: 600px) {
    .apropos-main {
        width: min(100% - 28px, 1120px);
        padding-top: 44px;
        padding-bottom: 90px;
    }

    .apropos-hero {
        margin-bottom: 72px;
    }

    .apropos-hero-visual,
    .editorial-figure {
        border-radius: 18px;
    }

    .apropos-section {
        margin-bottom: 78px;
    }

    .three-pillars,
    .ai-grid,
    .constellation-grid,
    .door-grid {
        grid-template-columns: 1fr;
    }

    .pillar,
    .ai-card,
    .constellation-card,
    .door-card,
    .transparency-note {
        padding: 22px;
    }

    .promise {
        padding: 22px 22px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .door-card,
    .btn-main {
        transition: none;
    }
}
</style>
</head>
<body>
<?= $headerNavigation ?>
<div class="apropos-glow"></div>

<main class="apropos-main">
    <header class="apropos-hero">
        <p class="apropos-kicker">Mission · Méthode · Transparence</p>
        <h1>Relier ce que l’Information présente Séparément</h1>
        <p class="apropos-lead">Flux Info est un média pédagogique indépendant qui explique les flux de matière, d’énergie, d’information et de vivant reliant la Biosphère, les sociétés humaines et les technologies.</p>

        <figure class="apropos-hero-visual">
            <img src="images/ChatGPT_archipel.webp" alt="Archipel nocturne dont les îles sont reliées par des flux lumineux" width="800" height="450" fetchpriority="high">
            <figcaption>Une image simple du projet: des domaines distincts, reliés par des circulations souvent invisibles</figcaption>
        </figure>
    </header>

    <section class="apropos-section" aria-labelledby="pourquoi">
        <p class="section-kicker">Pourquoi Flux Info</p>
        <h2 id="pourquoi">Le Monde fonctionne par Relations</h2>
        <p>Un événement n’existe presque jamais seul. Une sécheresse modifie l’eau disponible, les sols, l’agriculture, l’alimentation, l’économie et parfois l’équilibre d’une société. Une perturbation atmosphérique agit sur l’océan. Un changement écologique agit sur la santé. Une technologie apparemment immatérielle repose sur de l’énergie, des minerais, des infrastructures et des territoires.</p>
        <p>Pourtant, l’information nous parvient le plus souvent par fragments. Flux Info essaie de reconstruire les continuités entre ces fragments.</p>

        <div class="promise">
            <p><strong>Notre fil directeur:</strong> manipuler les paramètres du réel, observer les interdépendances et laisser l’information redevenir connaissance.</p>
        </div>
    </section>

    <section class="apropos-section" aria-labelledby="methode">
        <p class="section-kicker">Une approche hybride</p>
        <h2 id="methode">Comprendre, Expérimenter, Relier</h2>
        <p>Flux Info ne cherche pas à empiler des contenus. Chaque sujet est abordé comme une porte d’entrée vers un système plus vaste. L’écriture, les sources, les illustrations et les expériences interactives servent le même objectif: rendre une relation perceptible.</p>

        <div class="three-pillars">
            <article class="pillar">
                <span class="pillar-index">01 · Comprendre</span>
                <h3>Une Base Scientifique</h3>
                <p>Les articles replacent les phénomènes dans leurs mécanismes physiques, biologiques, écologiques ou sociaux, avec une attention portée aux sources et aux ordres de grandeur.</p>
            </article>
            <article class="pillar">
                <span class="pillar-index">02 · Expérimenter</span>
                <h3>Une Pédagogie Active</h3>
                <p>Les simulateurs et modules interactifs permettent de faire varier un paramètre pour observer ce qu’il met en mouvement ailleurs dans le système.</p>
            </article>
            <article class="pillar">
                <span class="pillar-index">03 · Relier</span>
                <h3>Une Lecture Transversale</h3>
                <p>Les chaînes de flux et les passages d’un article à l’autre montrent qu’un phénomène climatique, vivant, cosmique ou humain ne s’arrête pas à la frontière d’une rubrique.</p>
            </article>
        </div>
    </section>

    <section class="apropos-section editorial-split" aria-labelledby="reel">
        <figure class="editorial-figure">
            <img src="images/flux_materiels.webp" alt="Infrastructure numérique reliée à un paysage physique dégradé" width="1150" height="1150" loading="lazy">
            <figcaption>Même le numérique possède une matérialité: énergie, équipements, réseaux, territoires</figcaption>
        </figure>

        <div>
            <p class="section-kicker">Revenir au réel</p>
            <h2 id="reel">L’Information a toujours une Matière</h2>
            <p>L’un des fils importants de Flux Info consiste à résister à la dissociation entre ce que nous voyons sur un écran et les systèmes physiques qui rendent cette information possible.</p>
            <p>Un clic, une ville, une récolte, un réseau neuronal, un courant océanique ou une étoile appartiennent à des échelles très différentes. Ils ont pourtant quelque chose en commun: ils existent dans des flux de matière, d’énergie, d’information et de relations.</p>

            <div class="flow-line" aria-label="Exemple de continuité entre le numérique et le monde physique">
                <span>Donnée</span><b>→</b><span>Calcul</span><b>→</b><span>Énergie</span><b>→</b><span>Infrastructure</span><b>→</b><span>Territoire</span>
            </div>
        </div>
    </section>

    <section class="apropos-section" aria-labelledby="portes">
        <p class="section-kicker">Six portes</p>
        <h2 id="portes">Six Domaines pour suivre les Grandes Circulations du Réel</h2>
        <p>Les portes ne sont pas des articles. Elles introduisent chacune un territoire d’exploration et une expérience. Les articles prolongent ensuite le voyage et permettent de passer horizontalement d’un domaine à l’autre.</p>
        <p><strong>Archipel a un rôle particulier :</strong> sur Flux Info, il désigne la couche relationnelle qui rend visibles les passages entre les cinq grands territoires. Il ne faut pas le confondre avec le site partenaire <em>Archipel de la Conscience</em>, qui constitue un projet distinct de la constellation.</p>

        <div class="door-grid">
            <a class="door-card" href="ocean.php"><span>Océan</span><p>Eau, chaleur, courants profonds et vivant marin</p></a>
            <a class="door-card" href="ciel.php"><span>Ciel</span><p>Atmosphère, vents, énergie et cycle de l’eau</p></a>
            <a class="door-card" href="terre.php"><span>Terre</span><p>Sols, espèces, migrations et territoires</p></a>
            <a class="door-card" href="cosmos.php"><span>Cosmos</span><p>Matière, énergie, étoiles et héritage cosmique</p></a>
            <a class="door-card" href="humanite.php"><span>Humanité</span><p>Sociétés, connaissances, technologies et impacts</p></a>
            <a class="door-card" href="archipel.php"><span>Archipel</span><p>Le carrefour où les différents flux se rencontrent</p></a>
        </div>
    </section>

    <section class="apropos-section editorial-split ai-section" aria-labelledby="ia">
        <div>
            <p class="section-kicker">Humains et intelligences artificielles</p>
            <h2 id="ia">Un Travail Augmenté, sous Responsabilité Humaine</h2>
            <p>Flux Info se construit aussi avec des outils d’intelligence artificielle. Plusieurs systèmes ont été mobilisés à différents moments du projet pour dialoguer, structurer des idées, confronter des formulations, relire, explorer des pistes visuelles et accompagner certains développements techniques.</p>
            <p>Parmi les IA ayant participé au processus figurent <strong>ChatGPT</strong>, <strong>Manus</strong>, <strong>Claude</strong> et <strong>Gemini</strong>.</p>
            <p>Cette participation n’efface pas la responsabilité éditoriale humaine. Les choix de sujets, l’orientation du projet, les arbitrages, la sélection des contenus, leur mise en ligne et la responsabilité finale restent humains.</p>
        </div>

        <figure class="editorial-figure">
            <img src="images/human-conscience.webp" alt="Réseau neuronal lumineux évoquant les relations entre intelligence, connaissance et conscience" width="1150" height="1150" loading="lazy">
            <figcaption>L’IA est utilisée comme partenaire de travail, pas comme substitut à la responsabilité éditoriale</figcaption>
        </figure>
    </section>

    <section class="apropos-section ai-section" aria-labelledby="outils-ia">
        <p class="section-kicker">Transparence</p>
        <h2 id="outils-ia">Les IA associées au Processus</h2>
        <div class="ai-grid">
            <article class="ai-card">
                <span class="ai-name">ChatGPT</span>
                <p>Assistant IA consulté dans le travail de dialogue, de structuration, de relecture, de prototypage et d’exploration du projet.</p>
            </article>
            <article class="ai-card">
                <span class="ai-name">Manus</span>
                <p>Assistant IA mobilisé ponctuellement dans le processus de recherche, d’exploration et de développement.</p>
            </article>
            <article class="ai-card">
                <span class="ai-name">Claude</span>
                <p>Assistant IA consulté ponctuellement pour confronter, relire ou développer certaines pistes de travail.</p>
            </article>
            <article class="ai-card">
                <span class="ai-name">Gemini</span>
                <p>Assistant IA consulté ponctuellement dans le processus d’exploration, de comparaison et de formulation.</p>
            </article>
        </div>

        <p style="margin:22px 0 0"><a class="btn-main" href="politique-editoriale.php">Lire la Charte Éditoriale</a></p>

        <div class="transparency-note">
            <p><strong>Principe de transparence:</strong> une réponse produite par une IA n’est pas considérée, à elle seule, comme une source. Lorsqu’un contenu porte sur des faits vérifiables, l’objectif éditorial est de revenir aux données, travaux, organismes ou publications qui permettent de les établir.</p>
            <p>Les IA peuvent accélérer une exploration ou faire apparaître une relation intéressante. Elles peuvent aussi se tromper. Leur présence dans le processus doit donc rester visible, critique et subordonnée à la vérification.</p>
        </div>
    </section>

    <section class="apropos-section" aria-labelledby="constellation">
        <p class="section-kicker">Un projet dans une constellation</p>
        <h2 id="constellation">Des Espaces Distincts, reliés par une même Recherche de Continuité</h2>
        <p>Flux Info appartient à une constellation de sites et d’archives qui explorent, chacun à leur manière, le Vivant, la connaissance, les technologies, la conscience et le devenir des intelligences. Ils ne forment pas un contenu unique: ils constituent plusieurs points de vue reliés.</p>

        <div class="constellation-grid">
            <article class="constellation-card"><h3>Archipel de la Conscience</h3><p>Un espace consacré aux relations entre conscience, culture et mondes partagés.</p><a href="https://archipelconscience.org" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>AGIBIOSPHERIC</h3><p>Une bibliothèque et un espace de réflexion autour de la biosphère et des intelligences.</p><a href="https://agibiospheric.net" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>Demain L'Homme</h3><p>Un ancrage associatif et historique dans l’observation du devenir humain et du Vivant.</p><a href="https://demainlhomme.org" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>Lyrae Sphère</h3><p>Un autre territoire de cette constellation éditoriale et expérimentale.</p><a href="https://lyrae-sphere.net" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>Inner Circles</h3><p>Un espace complémentaire consacré à d’autres formes de relations et de circulation des idées.</p><a href="https://inner-circles.net" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>AI Sphera</h3><p>Un espace tourné vers les intelligences artificielles et leurs relations avec nos futurs.</p><a href="https://aisphera.eu" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
            <article class="constellation-card"><h3>The Seed</h3><p>Un prolongement de la constellation et de sa réflexion sur les traces, les germes et les transmissions.</p><a href="https://the-seed.net" target="_blank" rel="noopener noreferrer">Explorer le site</a></article>
        </div>

        <p class="signature">Cette initiative est portée par Cédric Mercier, président, webmestre et programmeur, ainsi que Michel G. Walter, secrétaire général et webmestre, tous deux fondateurs de l’association Française Terre "sacrée" depuis 1999.</p>
    </section>

    <section class="apropos-section apropos-end" aria-labelledby="invitation">
        <p class="section-kicker">Une invitation</p>
        <h2 id="invitation">Voir ce qui Relie</h2>
        <p class="closing">Flux Info ne prétend pas réduire la complexité du monde. Il propose d’y entrer autrement: ralentir, suivre les circulations, observer les conséquences et retrouver les continuités derrière les fragments.</p>
        <a href="index.php" class="btn-main">Retour aux six portes</a>
    </section>
</main>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
