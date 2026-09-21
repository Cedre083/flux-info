<?php
$pageTitle = 'Charte Éditoriale et Niveaux de Preuve | Flux Info';
$pageDesc = 'Comment Flux Info distingue faits établis, ordres de grandeur, hypothèses discutées, métaphores pédagogiques et réflexions philosophiques.';

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
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">
<?= $headerHead ?>
<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
.editorial-main{position:relative;z-index:4;width:min(1040px,calc(100% - 36px));margin:0 auto;padding:70px 0 120px;color:inherit}
.editorial-hero{max-width:860px;margin:0 auto 72px;text-align:center}
.editorial-kicker{margin:0 0 16px;font-size:.7rem;letter-spacing:.22em;text-transform:uppercase;opacity:.58}
.editorial-hero h1{margin:0;font-size:clamp(2rem,5vw,3.8rem);font-weight:250;line-height:1.08;letter-spacing:-.035em}
.editorial-lead{margin:22px auto 0;max-width:760px;line-height:1.75;font-size:1.05rem;opacity:.78}
.editorial-principle{margin:32px auto 0;max-width:760px;padding:20px 24px;border:1px solid color-mix(in srgb,currentColor 14%,transparent);border-radius:22px;background:color-mix(in srgb,currentColor 3%,transparent);line-height:1.7}
.proof-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;margin:36px 0 72px}
.proof-card{--proof:#c8a0ff;padding:24px;border:1px solid color-mix(in srgb,var(--proof) 30%,transparent);border-radius:24px;background:color-mix(in srgb,var(--proof) 5%,transparent)}
.proof-card:last-child{grid-column:1/-1}
.proof-label{display:inline-flex;align-items:center;gap:8px;margin-bottom:14px;padding:7px 10px;border:1px solid color-mix(in srgb,var(--proof) 38%,transparent);border-radius:999px;font-size:.65rem;letter-spacing:.08em;text-transform:uppercase}
.proof-label::before{content:'';width:7px;height:7px;border-radius:50%;background:var(--proof);box-shadow:0 0 10px var(--proof)}
.proof-card h2{margin:0 0 10px;font-size:1.18rem;font-weight:450}
.proof-card p{margin:0;line-height:1.72;opacity:.78}
.editorial-section{max-width:840px;margin:0 auto 64px}
.editorial-section h2{margin:0 0 18px;font-size:clamp(1.45rem,3vw,2.15rem);font-weight:300}
.editorial-section p,.editorial-section li{line-height:1.75;opacity:.8}
.editorial-section li+li{margin-top:8px}
.editorial-actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:26px}
.editorial-actions a{display:inline-flex;padding:10px 14px;border:1px solid color-mix(in srgb,currentColor 16%,transparent);border-radius:999px;color:inherit;text-decoration:none;font-size:.7rem;letter-spacing:.05em}
body.reading-mode .proof-card,body.reading-mode .editorial-principle{background:color-mix(in srgb,currentColor 2.5%,transparent)}
@media(max-width:700px){.proof-grid{grid-template-columns:1fr}.proof-card:last-child{grid-column:auto}.editorial-main{padding-top:52px}}
</style>
</head>
<body>
<?= $headerNavigation ?>
<main class="editorial-main">
<header class="editorial-hero">
<p class="editorial-kicker">Méthode · Sources · Transparence</p>
<h1>Charte Éditoriale et Niveaux de Preuve</h1>
<p class="editorial-lead">Flux Info mêle vulgarisation, narration, expériences interactives et réflexion systémique. Pour que ces registres restent lisibles, nous indiquons leur statut au lieu de les présenter comme s’ils avaient tous le même niveau de preuve.</p>
<div class="editorial-principle"><strong>Principe :</strong> garder la beauté et la poésie, mais rendre explicite ce qui relève d’un résultat scientifique, d’un ordre de grandeur, d’une hypothèse, d’une métaphore ou d’une réflexion.</div>
</header>
<section class="proof-grid" aria-label="Niveaux éditoriaux">
<article class="proof-card" style="--proof:#66d6ff"><span class="proof-label">Fait Établi</span><h2>Résultat solidement étayé</h2><p>Énoncé soutenu par un ensemble robuste de travaux, une institution scientifique de référence ou un consensus bien établi. Une source doit permettre de remonter au résultat.</p></article>
<article class="proof-card" style="--proof:#78ff9c"><span class="proof-label">Ordre de Grandeur</span><h2>Valeur utile mais dépendante du contexte</h2><p>Nombre, proportion ou échelle donnée pour se repérer. Lorsque la valeur varie selon les méthodes, les régions ou les périodes, cette incertitude est signalée.</p></article>
<article class="proof-card" style="--proof:#f3d66f"><span class="proof-label">Hypothèse Discutée</span><h2>Interprétation encore débattue</h2><p>Proposition soutenue par certains résultats mais qui ne constitue pas un consensus. Les alternatives et limites doivent rester visibles.</p></article>
<article class="proof-card" style="--proof:#ffad87"><span class="proof-label">Métaphore Pédagogique</span><h2>Image pour comprendre, pas description littérale</h2><p>Formulation volontairement imagée utilisée pour rendre une relation perceptible. Elle ne doit pas être prise comme un mécanisme scientifique exact.</p></article>
<article class="proof-card" style="--proof:#c9a5ff"><span class="proof-label">Réflexion Philosophique</span><h2>Question de sens ou proposition éditoriale</h2><p>Idée interprétative assumée comme telle. Elle peut ouvrir une réflexion sur la conscience, la relation ou la responsabilité, sans être présentée comme un fait scientifique démontré.</p></article>
</section>
<section class="editorial-section"><h2>Comment nous travaillons</h2><p>Pour les contenus factuels, nous privilégions les organismes publics, rapports de référence, publications académiques et revues de synthèse. Une réponse produite par une intelligence artificielle n’est pas considérée, à elle seule, comme une source.</p><p>Lorsqu’une formulation est simplifiée pour la pédagogie, nous cherchons à conserver le mécanisme essentiel et à signaler les limites lorsque la simplification pourrait induire une conclusion excessive.</p></section>
<section class="editorial-section"><h2>Ce que cette Charte change sur le Site</h2><ul><li>La FAQ distingue désormais explicitement les niveaux de preuve et relie les réponses factuelles à des sources identifiables.</li><li>Les articles proposent une synthèse initiale et un sommaire pour séparer plus clairement thèse, développement, expérience et documentation.</li><li>Les passages philosophiques conservent leur place, mais leur statut ne doit pas pouvoir être confondu avec celui d’une donnée scientifique.</li></ul><div class="editorial-actions"><a href="faq.php">Lire la FAQ Sourcée</a><a href="apropos.php">Voir la Méthode de Flux Info</a><a href="carte-des-flux.php">Explorer la Carte des Flux</a></div></section>
</main>
<?php if(file_exists('footer-archipel.php')) include 'footer-archipel.php'; ?>
</body>
</html>
