<?php
$page_title = "Soutenir Flux Info | Média Indépendant et Libre d’Accès";
$pageTitle = $page_title;
$page_description = "Soutenez Flux Info, média pédagogique indépendant et libre d’accès. Découvrez ce que votre contribution aide concrètement à maintenir et à développer.";
$pageDesc = $page_description;
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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
<link rel="stylesheet" href="css/style.css">

<?php include_once __DIR__ . '/seo-head.php'; ?>
<script type="application/ld+json"><?= json_encode([
    '@context'=>'https://schema.org',
    '@type'=>'DonateAction',
    '@id'=>'https://flux-info.net/gardien.php#don',
    'name'=>'Soutenir Flux Info',
    'description'=>'Contribution facultative au maintien technique, éditorial et pédagogique de Flux Info.',
    'recipient'=>['@id'=>'https://flux-info.net/#organization'],
    'target'=>[
        '@type'=>'EntryPoint',
        'urlTemplate'=>'https://www.paypal.com/donate/?hosted_button_id=PJG66F6PDA4EG',
        'actionPlatform'=>[
            'https://schema.org/DesktopWebPlatform',
            'https://schema.org/MobileWebPlatform',
        ],
    ],
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>

<style>
.support-container{max-width:1160px}
.support-header{max-width:960px;margin:0 auto 72px}
.support-header h1{margin-bottom:24px}
.support-header__lead{max-width:880px;margin:0 auto 16px!important;font-size:clamp(1.1rem,1.6vw,1.35rem)!important;line-height:1.75!important}
.support-header__promise{max-width:820px;margin:0 auto!important;line-height:1.72!important;opacity:.78}
.support-hero-actions{display:flex;justify-content:center;align-items:center;gap:13px;flex-wrap:wrap;margin:31px 0 17px}
.support-main-action,.support-secondary-action{display:inline-flex;align-items:center;justify-content:center;min-height:52px;padding:12px 22px;border-radius:999px;font-size:.82rem;font-weight:650;text-decoration:none;transition:transform .2s ease,background .2s ease,border-color .2s ease,box-shadow .2s ease}
.support-main-action{color:#08131f!important;background:#57d4ff;border:1px solid #bff0ff;box-shadow:0 12px 30px rgba(87,212,255,.18)}
.support-main-action:hover,.support-main-action:focus-visible{transform:translateY(-2px);background:#8ee3ff;box-shadow:0 15px 34px rgba(87,212,255,.28);outline:none}
.support-secondary-action{color:inherit;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.045)}
.support-secondary-action:hover,.support-secondary-action:focus-visible{transform:translateY(-2px);border-color:rgba(200,160,255,.55);background:rgba(200,160,255,.09);outline:none}
.support-direct-note{max-width:700px;margin:0 auto;color:inherit;font-size:.75rem;line-height:1.55;opacity:.64}

.support-proof-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:14px;margin:42px 0 30px}
.support-proof{padding:18px;border:1px solid rgba(255,255,255,.10);border-radius:18px;background:rgba(255,255,255,.03)}
.support-proof strong{display:block;margin-bottom:5px;font-size:1.5rem;font-weight:300}
.support-proof span{font-size:.74rem;line-height:1.45;opacity:.72}
.support-transparency{margin:0;padding:20px 22px;border-left:2px solid rgba(200,160,255,.55);background:rgba(200,160,255,.045);font-size:.82rem;line-height:1.72;text-align:left}

.support-section{max-width:1020px;margin:0 auto 56px;padding:34px;border:1px solid rgba(255,255,255,.10);border-radius:24px;background:rgba(255,255,255,.026)}
#utilite-soutien{scroll-margin-top:120px}
.support-section__eyebrow{margin:0 0 8px;font-size:.64rem;letter-spacing:.16em;text-transform:uppercase;opacity:.56}
.support-section h2{margin:0 0 12px;font-size:clamp(1.55rem,3vw,2.3rem);font-weight:350}
.support-section__intro{max-width:800px;margin:0 0 23px;line-height:1.7;opacity:.76}

.support-impact-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:13px}
.support-impact{padding:21px;border:1px solid rgba(255,255,255,.09);border-radius:18px;background:rgba(255,255,255,.022)}
.support-impact small{display:block;margin-bottom:9px;color:#c8a0ff;font-size:.59rem;font-weight:650;letter-spacing:.14em;text-transform:uppercase}
.support-impact h3{margin:0 0 9px;font-size:.98rem;font-weight:550}
.support-impact p{margin:0;font-size:.78rem;line-height:1.62;opacity:.72}

.support-donation{max-width:1020px;margin:0 auto 56px;padding:36px;border:1px solid rgba(87,212,255,.34);border-radius:26px;background:linear-gradient(135deg,rgba(87,212,255,.075),rgba(200,160,255,.055));box-shadow:0 18px 50px rgba(0,0,0,.16)}
.support-donation__layout{display:grid;grid-template-columns:1fr auto;gap:30px;align-items:center}
.support-donation h2{margin:0 0 10px;font-size:clamp(1.6rem,3vw,2.35rem);font-weight:350}
.support-donation p{margin:0;max-width:650px;font-size:.86rem;line-height:1.7;opacity:.78}
.support-amounts{display:flex;gap:8px;flex-wrap:wrap;margin-top:21px}
.support-amount{display:inline-flex;flex-direction:column;min-width:92px;padding:11px 14px;border:1px solid rgba(255,255,255,.12);border-radius:14px;background:rgba(0,0,0,.1)}
.support-amount strong{font-size:1rem;font-weight:500}.support-amount small{font-size:.55rem;letter-spacing:.08em;text-transform:uppercase;opacity:.52}
.support-donation__action{min-width:250px;text-align:center}
.support-donation__action .support-main-action{width:100%}
.support-donation__action small{display:block;margin-top:11px;font-size:.59rem;line-height:1.45;opacity:.56}

.support-done-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
.support-done{padding:18px;border:1px solid rgba(255,255,255,.08);border-radius:17px;background:rgba(255,255,255,.022)}
.support-done b{display:block;margin-bottom:7px;font-size:.88rem;font-weight:550}
.support-done span{font-size:.76rem;line-height:1.58;opacity:.7}

.support-roadmap{max-width:1020px;margin:0 auto 56px;display:grid;grid-template-columns:1fr 1fr;gap:20px}
.support-roadmap__block{padding:27px;border:1px solid rgba(255,255,255,.10);border-radius:24px;background:rgba(255,255,255,.026)}
.support-roadmap__block h2{margin:0 0 14px;font-size:1.45rem;font-weight:350}
.support-roadmap__block p,.support-roadmap__block li{font-size:.8rem;line-height:1.65;opacity:.76}
.support-roadmap__block ul{margin:0;padding-left:1.15rem}.support-roadmap__block li{margin:.6rem 0}.support-roadmap__block li::marker{color:#c8a0ff}

.support-share{max-width:1020px;margin:0 auto 56px;text-align:center}
.support-share h2{margin-bottom:12px}.support-share>p{max-width:820px;margin:0 auto 21px;line-height:1.72;opacity:.78}
.support-share-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;text-align:left}
.support-share-item{padding:19px;border:1px solid rgba(255,255,255,.08);border-radius:17px;background:rgba(255,255,255,.022)}
.support-share-item strong{display:block;margin-bottom:7px;font-size:.84rem}.support-share-item span{display:block;font-size:.73rem;line-height:1.55;opacity:.67}
.support-social-details{margin-top:24px;border-top:1px solid rgba(255,255,255,.1);padding-top:20px}
.support-social-details summary{cursor:pointer;list-style:none;font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;opacity:.7}
.support-social-details summary::-webkit-details-marker{display:none}.support-social-details summary::after{content:' +';color:#c8a0ff}.support-social-details[open] summary::after{content:' −'}
.support-social-details .social-grid{margin:24px 0 0}
.support-visual{max-width:620px;margin:68px auto;padding:0;text-align:center}
.support-visual img{display:block;width:100%;height:auto;aspect-ratio:1;border:1px solid rgba(200,160,255,.22);border-radius:26px;box-shadow:0 26px 70px rgba(0,0,0,.38),0 0 34px rgba(87,212,255,.08);object-fit:cover}
.support-visual figcaption{max-width:570px;margin:17px auto 0;font-size:.69rem;line-height:1.6;letter-spacing:.02em;opacity:.62}
.support-footer{max-width:820px;margin:72px auto 0}
.support-footer p{font-size:clamp(1rem,1.2vw + .65rem,1.25rem)}

body.reading-mode .support-proof,body.reading-mode .support-section,body.reading-mode .support-impact,body.reading-mode .support-donation,body.reading-mode .support-done,body.reading-mode .support-roadmap__block,body.reading-mode .support-share-item,body.reading-mode .support-transparency{background:color-mix(in srgb,currentColor 3%,transparent);color:inherit}
body.reading-mode .support-main-action{color:#fff!important;background:#356b68;border-color:#356b68}

@media(max-width:900px){
    .support-proof-grid{grid-template-columns:repeat(2,1fr)}
    .support-impact-grid,.support-share-grid{grid-template-columns:1fr}
    .support-donation__layout{grid-template-columns:1fr}
    .support-donation__action{min-width:0;max-width:360px}
    .support-roadmap{grid-template-columns:1fr}
}
@media(max-width:600px){
    .support-ecosystem{padding:56px 16px}
    .support-proof-grid{grid-template-columns:1fr 1fr;gap:9px}
    .support-proof{padding:15px 12px}.support-proof strong{font-size:1.25rem}.support-proof span{font-size:.66rem}
    .support-section,.support-donation,.support-roadmap__block{padding:22px 18px;border-radius:20px}
    .support-section,.support-donation,.support-roadmap,.support-share{margin-bottom:44px}
    .support-header{margin-bottom:52px}
    .support-visual{margin:48px auto}
    .support-visual img{border-radius:18px}
    .support-amount{min-width:calc(50% - 4px)}
    .support-done-grid{grid-template-columns:1fr}
    .support-main-action,.support-secondary-action{width:100%}
}
</style>
<?= $headerHead ?>
</head>

<body>

<?= $headerNavigation ?>

<main>

<section class="support-ecosystem">
    <div class="support-container">

        <header class="support-header">
            <p class="support-section__eyebrow">Un média indépendant, accessible à tous</p>
            <h1>Soutenir Flux Info</h1>
            <p class="support-header__lead">Votre contribution aide à maintenir un espace public qui rend visibles les relations entre climat, vivant, sciences, technologies et sociétés humaines.</p>
            <p class="support-header__promise">Aucun contenu n’est réservé aux donateurs. Le soutien sert à préserver ce qui reste librement accessible : articles sourcés, expériences pédagogiques et Carte des Flux.</p>

            <div class="support-hero-actions">
                <a class="support-main-action" href="https://www.paypal.com/donate/?hosted_button_id=PJG66F6PDA4EG" target="_blank" rel="noopener noreferrer">Choisir mon montant sur PayPal <span aria-hidden="true">↗</span></a>
                <a class="support-secondary-action" href="#utilite-soutien">Voir à quoi sert le soutien ↓</a>
            </div>
            <p class="support-direct-note">Don libre et entièrement facultatif. Vous choisissez vous-même le montant sur PayPal.</p>

            <div class="support-proof-grid" aria-label="État actuel de Flux Info">
                <div class="support-proof"><strong>6</strong><span>Portes thématiques</span></div>
                <div class="support-proof"><strong>7</strong><span>Articles et essais principaux</span></div>
                <div class="support-proof"><strong>6</strong><span>Expériences interactives</span></div>
                <div class="support-proof"><strong>1</strong><span>Carte des Flux navigable</span></div>
            </div>

            <div class="support-transparency"><strong>Deux histoires à ne pas confondre.</strong> L’association qui porte l’écosystème existe depuis <strong>1999</strong>. Flux Info, dans sa forme éditoriale actuelle, naît en <strong>2026</strong>. Cette histoire associative ne doit pas être confondue avec l’ancienneté des articles publiés ici.</div>
        </header>

        <section class="support-section" id="utilite-soutien" aria-labelledby="support-impact-title">
            <p class="support-section__eyebrow">À quoi sert votre contribution ?</p>
            <h2 id="support-impact-title">Maintenir un Bien Commun Numérique</h2>
            <p class="support-section__intro">Le soutien répond à trois besoins concrets. Il ne finance ni publicité ni contenu réservé.</p>
            <div class="support-impact-grid">
                <article class="support-impact"><small>Priorité 01</small><h3>Continuité technique</h3><p>Hébergement, domaines, sauvegardes, sécurité, maintenance et correction des régressions.</p></article>
                <article class="support-impact"><small>Priorité 02</small><h3>Rigueur éditoriale</h3><p>Recherche documentaire, vérification des formulations, entretien des sources et mise à jour du corpus.</p></article>
                <article class="support-impact"><small>Priorité 03</small><h3>Expériences et Carte</h3><p>Amélioration des simulateurs, des parcours guidés, de l’accessibilité mobile et de la Carte des Flux.</p></article>
            </div>
        </section>

        <figure class="support-visual">
            <img src="images/flux-relations-vivant.webp" width="1150" height="1150" loading="lazy" decoding="async" alt="Un arbre lumineux relie ses racines aux courants océaniques, aux sols, à l’atmosphère et au cosmos">
            <figcaption>Matière, énergie, information et vivant circulent entre les milieux. Flux Info cherche à rendre ces relations visibles.</figcaption>
        </figure>

        <section class="support-donation" aria-labelledby="support-donation-title">
            <div class="support-donation__layout">
                <div>
                    <p class="support-section__eyebrow">Une contribution libre</p>
                    <h2 id="support-donation-title">Choisissez le Montant qui Vous Convient</h2>
                    <p>Les montants ci-dessous sont uniquement des repères. Ils ne correspondent pas au prix d’une tâche précise et n’ouvrent aucun accès privilégié.</p>
                    <div class="support-amounts" aria-label="Exemples de montants possibles">
                        <span class="support-amount"><strong>15 €</strong><small>Encourager</small></span>
                        <span class="support-amount"><strong>40 €</strong><small>Maintenir</small></span>
                        <span class="support-amount"><strong>80 €</strong><small>Renforcer</small></span>
                        <span class="support-amount"><strong>Libre</strong><small>À votre choix</small></span>
                    </div>
                </div>
                <div class="support-donation__action">
                    <a class="support-main-action" href="https://www.paypal.com/donate/?hosted_button_id=PJG66F6PDA4EG" target="_blank" rel="noopener noreferrer" aria-label="Choisir librement le montant de mon don sur PayPal">Accéder à PayPal <span aria-hidden="true">↗</span></a>
                    <small>La confirmation du don s’effectue sur le site sécurisé de PayPal.</small>
                </div>
            </div>
        </section>

        <section class="support-section" aria-labelledby="support-2026-title">
            <p class="support-section__eyebrow">Un projet déjà public et consultable</p>
            <h2 id="support-2026-title">Ce que Flux Info Offre Déjà</h2>
            <p class="support-section__intro">Le soutien accompagne un travail existant, pas une promesse abstraite.</p>
            <div class="support-done-grid">
                <div class="support-done"><b>Un corpus structuré</b><span>Six Portes, sept articles et essais, résumés, sommaires, niveaux de preuve et sources.</span></div>
                <div class="support-done"><b>Six expériences pédagogiques</b><span>Océan, atmosphère, migrations, fusion stellaire, réseaux humains et tissage de relations.</span></div>
                <div class="support-done"><b>La Carte des Flux</b><span>Une cartographie interactive reliant territoires, phénomènes et parcours de lecture.</span></div>
                <div class="support-done"><b>Une méthode éditoriale</b><span>Charte des niveaux de preuve, FAQ sourcée et distinction entre faits, hypothèses, métaphores et réflexions.</span></div>
            </div>
        </section>

        <figure class="support-visual">
            <img src="images/flux-savoir-vivant.webp" width="1150" height="1150" loading="lazy" decoding="async" alt="Une graine dorée rayonne au centre d’une biosphère protégée par un réseau de lumière">
            <figcaption>Préserver un savoir vivant, c’est maintenir ses sources, ses liens et son accès public dans le temps.</figcaption>
        </figure>

        <div class="support-roadmap">
            <section class="support-roadmap__block" aria-labelledby="support-progress-title">
                <p class="support-section__eyebrow">Ce qui est en cours</p>
                <h2 id="support-progress-title">Le Travail Continue</h2>
                <ul>
                    <li>enrichir la Carte des Flux avec des parcours guidés courts ;</li>
                    <li>poursuivre la vérification scientifique du corpus et de ses sources ;</li>
                    <li>améliorer progressivement mobile, contraste, accessibilité et performances.</li>
                </ul>
            </section>
            <section class="support-roadmap__block" aria-labelledby="support-transparency-title">
                <p class="support-section__eyebrow">Transparence</p>
                <h2 id="support-transparency-title">Des Repères, pas des Promesses Chiffrées</h2>
                <p>Les besoins techniques et éditoriaux varient selon les périodes. Flux Info préfère ne pas publier une ventilation artificielle tant qu’elle ne repose pas sur un suivi comptable consolidé.</p>
                <p>Le partage d’un article reste aussi une forme de soutien importante.</p>
            </section>
        </div>

        <section class="support-section support-share" aria-labelledby="support-share-title">
            <p class="support-section__eyebrow">Sans contribution financière</p>
            <h2 id="support-share-title">Trois Autres Façons de Nous Aider</h2>
            <p>Faire circuler une information solide, citer sa source et signaler une erreur contribuent directement à la qualité d’un média indépendant.</p>
            <div class="support-share-grid">
                <div class="support-share-item"><strong>Partager un article</strong><span>Envoyez un contenu précis à une personne réellement intéressée par le sujet.</span></div>
                <div class="support-share-item"><strong>Citer Flux Info</strong><span>Conservez le lien vers la page lorsque vous reprenez une explication ou une relation.</span></div>
                <div class="support-share-item"><strong>Signaler une correction</strong><span>Une source plus récente ou une formulation à nuancer peut être envoyée à contact@flux-info.net.</span></div>
            </div>

            <details class="support-social-details">
                <summary>Retrouver nos réseaux sociaux</summary>
                <div class="social-grid">
                    <a href="https://www.facebook.com/demainlhomme" target="_blank" rel="noopener noreferrer">Facebook</a>
                    <a href="https://x.com/demainlhomme" target="_blank" rel="noopener noreferrer">X</a>
                    <a href="https://www.instagram.com/demain_l_homme/" target="_blank" rel="noopener noreferrer">Instagram</a>
                    <a href="https://www.threads.net/@demain_l_homme" target="_blank" rel="noopener noreferrer">Threads</a>
                    <a href="https://www.pinterest.fr/demainlhomme/" target="_blank" rel="noopener noreferrer">Pinterest</a>
                    <a href="https://www.reddit.com/r/Demain_l_Homme/" target="_blank" rel="noopener noreferrer">Reddit</a>
                    <a href="https://mastodon.social/@demainlhomme" target="_blank" rel="noopener noreferrer">Mastodon</a>
                    <a href="https://bsky.app/profile/demainlhomme.bsky.social" target="_blank" rel="noopener noreferrer">Bluesky</a>
                    <a href="https://www.tumblr.com/blog/demainlhomme" target="_blank" rel="noopener noreferrer">Tumblr</a>
                    <a href="https://www.youtube.com/@demainlhomme/community" target="_blank" rel="noopener noreferrer">YouTube</a>
                </div>
            </details>
        </section>

        <div class="support-footer">
            <h2>Merci de Faire Vivre cet Espace Public</h2>
            <p>Chaque contribution, chaque partage et chaque correction aide Flux Info à rester indépendant, accessible et tourné vers la compréhension des relations qui façonnent le monde vivant.</p>
            <p class="thank-you">Merci de faire partie de cette aventure.</p>
        </div>

    </div>
</section>

</main>

<?php include 'footer-archipel.php'; ?>

</body>
</html>
