<?php
$pageTitle = 'Conditions Générales d’Utilisation | Flux Info';
$pageDesc = 'Conditions générales d’utilisation du site Flux Info, accès aux contenus, responsabilités et règles applicables aux visiteurs.'; 
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
        /* CGU - LISIBILITÉ LÉGALE & STANDARD 23PX       */
        /* ============================================= */
        body {
            margin: 0; 
            background: #05000a; 
            color: #ffffff;
            /* L'héritage du header gère la police Inter et les 23px */
            overflow-x: hidden;
        }

        /* ============================================= */
        /* CONTENEUR & TYPOGRAPHIE                       */
        /* ============================================= */
        .container { 
            max-width: 950px; /* Élargi pour le confort des 23px */
            margin: 80px auto; 
            padding: 0 24px 100px; 
            position: relative;
            z-index: 10;
        }

        h1 { 
            /* Le H1 hérite du weight 200 et du gradient via le header */
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
            font-weight: 200; /* Finesse Archipel */
            letter-spacing: 3px;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(200, 160, 255, 0.1); 
            padding-bottom: 15px; 
        }

        p, li { 
            /* Taille héritée du header (23px) */
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
        /* BOUTON RETOUR UNIFORME                        */
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
            color: #ffffff;
            border-color: #ffffff;
            box-shadow: 0 0 40px rgba(200, 160, 255, 0.3); 
            transform: translateY(-5px);
        }

        /* ============================================= */
        /* RESPONSIVE MOBILE                             */
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
    <h1>Conditions Générales d'Utilisation</h1>
    <p class="update-date">Dernière mise à jour: 1er mai 2026</p>
    <br><br>
    <p>Bienvenue sur <strong>flux-info.net</strong>. En accédant à ce site, vous acceptez les présentes conditions. Ce site est un espace d'exploration sensorielle et intellectuelle dédié à la compréhension des liens du Vivant.</p>
    <br>
    <h2>1. Objet du Site</h2>
    <br><br>
    <p>flux-info.net propose des contenus narratifs et interactifs (Canvas, animations) basés sur des thématiques scientifiques, écologiques et systémiques. L'objectif est de rendre perceptibles les interdépendances globales.</p>
    <br>
    <h2>2. Propriété Intellectuelle</h2>
    <br><br>
    <p>L'ensemble des contenus (textes, graphismes, codes sources des animations Canvas, logos) est la propriété exclusive de Flux-Info.net, sauf mention contraire (sources externes citées).</p>
    <p>Toute reproduction, même partielle, à des fins commerciales sans autorisation préalable est strictement interdite. L'usage à des fins pédagogiques ou de partage non lucratif est encouragé, sous réserve de citer la source.</p>
    <br>
    <h2>3. Expérience Utilisateur et Technique</h2>
    <br><br>
    <p>Le site utilise des technologies web avancées. Pour une expérience optimale, l'utilisateur est invité à utiliser un navigateur moderne. flux-info.net ne saurait être tenu responsable des ralentissements ou bugs liés au matériel de l'utilisateur.</p>
    <br>
    <h2>4. Responsabilité</h2>
    <br><br>
    <p>Les informations diffusées sur Flux-Info.net sont issues de recherches documentaires sérieuses. Toutefois, le site ne peut garantir l'exactitude absolue ou l'exhaustivité des données scientifiques en temps réel. Le contenu est proposé à titre indicatif et exploratoire.</p>
    <br>
    <h2>5. Liens vers des Tiers</h2>
    <br><br>
    <p>Flux Info propose des liens vers plusieurs plateformes partenaires de son écosystème (Demain l’Homme, AI Sphera, Archipel de la Conscience, etc.). Ces projets sont distincts de Flux Info, qui n’exerce aucun contrôle sur leur contenu ou leurs pratiques.</p>
    <br>
    <h2>6. Données Personnelles</h2>
    <br><br>
    <p>flux-info.net est un site respectueux de la vie privée. Nous ne collectons aucune donnée personnelle à votre insu. Aucune inscription n’est requise pour explorer Flux Info.</p>
    <br>
    <h2>7. Droit Applicable</h2>
    <br><br>
    <p>Les présentes CGU sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>

    <a href="index.php" class="btn-back">← Retour à l’Accueil</a>
</div>
<?php include 'footer-archipel.php'; ?>
</body>
</html>