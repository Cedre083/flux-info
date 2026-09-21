<?php
$pageTitle = 'Politique de Confidentialité et RGPD | Flux Info';
$pageDesc = 'Politique de confidentialité, données personnelles, cookies et droits RGPD applicables aux visiteurs de Flux Info.'; 
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
/* RGPD - STYLE IDENTIQUE AUX CGU                */
/* ============================================= */

body {
    margin: 0;
    background: #05000a;
    color: #ffffff;
    overflow-x: hidden;
}

.container { 
    max-width: 950px;
    margin: 80px auto;
    padding: 0 24px 100px;
    position: relative;
    z-index: 10;
}

h1 {
    filter: drop-shadow(0 0 15px rgba(200, 160, 255, 0.3));
    margin-bottom: 20px;
}

.update-date {
    text-align: center;
    font-style: italic;
    opacity: 0.5;
    margin-bottom: 60px;
    font-size: 0.9rem;
    letter-spacing: 1px;
}

h2 {
    color: #c8a0ff;
    margin: 80px 0 30px;
    font-size: clamp(1.4rem, 4vw, 2rem);
    font-weight: 200;
    letter-spacing: 3px;
    text-transform: uppercase;
    border-bottom: 1px solid rgba(200, 160, 255, 0.1);
    padding-bottom: 15px;
}

p, li {
    margin-bottom: 1.8rem;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 300;
}

ul {
    padding-left: 30px;
    margin-bottom: 2rem;
}

li {
    margin-bottom: 1rem;
}

/* ============================================= */
/* BOUTON RETOUR                                 */
/* ============================================= */
.btn-back { 
    display: block;
    width: fit-content;
    margin: 60px auto;
    padding: 18px 45px;
    border: 1px solid rgba(200, 160, 255, 0.4);
    border-radius: 60px;
    color: #ffffff;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    transition: all 0.5s ease;
    background: rgba(200, 160, 255, 0.05);
    backdrop-filter: blur(10px);
}

.btn-back:hover { 
    background: rgba(200, 160, 255, 0.2);
    border-color: #ffffff;
    box-shadow: 0 0 40px rgba(200, 160, 255, 0.3);
    transform: translateY(-5px);
}

/* ============================================= */
/* RESPONSIVE                                    */
/* ============================================= */
@media (max-width: 600px) {
    .container { margin: 40px auto; }
    h1 { font-size: 1.8rem; letter-spacing: 2px; }
    h2 { font-size: 1.3rem; margin-top: 60px; }
    .btn-back { padding: 15px 30px; font-size: 0.85rem; letter-spacing: 2px; }
}
</style>
</head>

<body>
<?= $headerNavigation ?>

<div class="container">

    <h1>Politique RGPD</h1>
    <p class="update-date">Dernière mise à jour: 25 mai 2026</p>

    <p>
        La présente politique décrit la manière dont <strong>flux‑info.net</strong> respecte le 
        <strong>Règlement Général sur la Protection des Données (RGPD – UE 2016/679)</strong>.
        Ce site est conçu pour fonctionner sans collecte intrusive, sans publicité, sans cookies de suivi et sans profilage.
    </p>

    <h2>1. Responsable du Traitement</h2>
    <p>
        Le responsable du traitement des données est:<br>
        <strong>Cédric Mercier</strong><br>
        France – Provence-Alpes-Côte d’Azur<br>
        Contact: <a href="mailto:contact@flux-info.net">contact@flux-info.net</a>
    </p>

    <h2>2. Données Collectées</h2>
    <p>
        flux‑info.net ne collecte aucune donnée personnelle automatiquement.
        Aucun cookie publicitaire, aucun tracker, aucun outil d’analyse comportementale n’est utilisé.
    </p>

    <p>Les seules données susceptibles d’être collectées sont:</p>

    <ul>
        <li>les messages envoyés volontairement via un formulaire ou par e‑mail ;</li>
        <li>les informations techniques minimales nécessaires au fonctionnement du serveur (logs standards, non exploités à des fins marketing).</li>
    </ul>

    <p>
        Aucune donnée sensible n’est demandée ni stockée.
    </p>

    <h2>3. Finalité du Traitement</h2>
    <p>
        Les données transmises volontairement sont utilisées uniquement pour répondre à vos messages ou améliorer le site.
        Elles ne sont jamais revendues, cédées ou utilisées à des fins commerciales.
    </p>

    <h2>4. Base Légale</h2>
    <p>
        Le traitement repose sur:<br>
        – <strong>votre consentement explicite</strong> lorsque vous envoyez un message ;<br>
        – <strong>l’intérêt légitime</strong> pour assurer la sécurité technique du site.
    </p>

    <h2>5. Durée de Conservation</h2>
    <p>
        Les e‑mails ou messages envoyés sont conservés uniquement le temps nécessaire pour traiter votre demande.
        Les logs techniques sont conservés quelques jours, conformément aux obligations de sécurité.
    </p>

    <h2>6. Vos Droits</h2>
    <p>Conformément au RGPD, vous disposez des droits suivants:</p>

    <ul>
        <li>Droit d’accès</li>
        <li>Droit de rectification</li>
        <li>Droit d’effacement</li>
        <li>Droit d’opposition</li>
        <li>Droit à la limitation du traitement</li>
        <li>Droit à la portabilité</li>
    </ul>

    <p>
        Pour exercer vos droits:  
        <a href="mailto:contact@flux-info.net">contact@flux-info.net</a>
    </p>

    <h2>7. Sécurité</h2>
    <p>
        Le site est hébergé chez <strong>PlanetHoster</strong> (infrastructures France / Suisse), 
        garantissant un haut niveau de sécurité physique et logicielle.
    </p>

    <h2>8. Absence de Transfert Hors UE</h2>
    <p>
        Aucune donnée personnelle n’est transférée en dehors de l’Union Européenne.
    </p>

    <h2>9. Cookies</h2>
    <p>
        flux‑info.net n’utilise <strong>aucun cookie de suivi</strong>, aucun cookie publicitaire, 
        aucun traceur tiers (Google Analytics, Meta Pixel, etc.).
    </p>

    <p>
        Seuls des cookies techniques strictement nécessaires au fonctionnement du site peuvent être utilisés.
    </p>

    <a href="index.php" class="btn-back">← Retour à l’Accueil</a>

</div>

<?php include 'footer-archipel.php'; ?>
</body>
</html>
