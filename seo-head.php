<?php
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$requestPath = '/' . ltrim($requestPath, '/');
$canonicalPath = ($requestPath === '/' || $requestPath === '/index.php') ? '/' : $requestPath;
$canonicalUrl = 'https://flux-info.net' . ($canonicalPath === '/' ? '/' : $canonicalPath);

$seo = [
'/' => ['title'=>'Flux Info | Comprendre les Flux qui relient notre Monde','desc'=>'Explorez les liens entre climat, océans, atmosphère, biodiversité, cosmos, technologies et sociétés. Suivez les flux qui relient les phénomènes.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/ocean.php'=>['title'=>'Comprendre l’Océan | Courants, Chaleur et Vivant | Flux Info','desc'=>'Explorez les circulations océaniques, la chaleur, le vivant marin et leurs effets sur le climat dans la Porte Océan de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_ocean.webp','type'=>'website'],
'/ciel.php'=>['title'=>'Comprendre le Ciel | Atmosphère, Vents et Eau | Flux Info','desc'=>'Explorez l’atmosphère, les vents, l’humidité et les grands transferts d’énergie dans la Porte Ciel de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT-ciel.webp','type'=>'website'],
'/terre.php'=>['title'=>'Comprendre la Terre | Sols, Vivant et Migrations | Flux Info','desc'=>'Explorez les sols, les migrations, les écosystèmes et les relations du vivant dans la Porte Terre de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_terre.webp','type'=>'website'],
'/cosmos.php'=>['title'=>'Comprendre le Cosmos | Matière, Étoiles et Énergie | Flux Info','desc'=>'Explorez l’origine de la matière, la vie des étoiles et le recyclage cosmique dans la Porte Cosmos de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_cosmos.webp','type'=>'website'],
'/humanite.php'=>['title'=>'Comprendre l’Humanité | Corps, Sociétés et Technologies | Flux Info','desc'=>'Explorez les flux biologiques, alimentaires, sociaux et technologiques qui relient l’être humain à son environnement.','image'=>'https://flux-info.net/images/ChatGPT_humanite.webp','type'=>'website'],
'/archipel.php'=>['title'=>'Comprendre l’Archipel | Relations et Interdépendances | Flux Info','desc'=>'Archipel révèle les relations entre les grands territoires de Flux Info et aide à penser les interdépendances du réel.','image'=>'https://flux-info.net/images/ChatGPT_archipel.webp','type'=>'website'],
'/carte-des-flux.php'=>['title'=>'La Carte des Flux | Explorer les Interdépendances | Flux Info','desc'=>'Explorez les relations entre Océan, Ciel, Terre, Cosmos, Humanité et Archipel dans une carte interactive des phénomènes et de leurs conséquences.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/article-ocean-courants.php'=>['title'=>'Courants Profonds de l’Océan | Circulation Thermohaline | Flux Info','desc'=>'Comprendre la circulation thermohaline, les courants profonds, leur rôle climatique et leurs liens avec le vivant marin.','image'=>'https://flux-info.net/images/courants-profonds.webp','headline'=>'Les Courants Profonds de l’Océan','type'=>'article','published'=>'2026-05-22T10:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-ciel-vents.php'=>['title'=>'Souffles de l’Atmosphère | Vents et Eau | Flux Info','desc'=>'Comprendre les vents, les cellules atmosphériques, les rivières de vapeur, la sécheresse et les échanges entre ciel, océans et continents.','image'=>'https://flux-info.net/images/rivieres-volantes.webp','headline'=>'Les Souffles de l’Atmosphère','type'=>'article','published'=>'2026-05-22T11:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-terre-migrations.php'=>['title'=>'La Terre en Mouvement | Migrations, Sols et Vivant | Flux Info','desc'=>'Comprendre les migrations animales, les sols, les réseaux mycorhiziens et les flux qui relient eau, vivant et territoires.','image'=>'https://flux-info.net/images/serengeti-mara.webp','headline'=>'La Terre en Mouvement : Le Grand Théâtre des Migrations','type'=>'article','published'=>'2026-05-22T12:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-cosmos-etoiles.php'=>['title'=>'Naissance et Mort des Étoiles | Cosmos | Flux Info','desc'=>'Comprendre la naissance, la fusion et la mort des étoiles, l’origine des éléments et le recyclage cosmique de la matière.','image'=>'https://flux-info.net/images/nebuleuse-naissance.webp','headline'=>'La Naissance et la Mort des Étoiles','type'=>'article','published'=>'2026-05-22T13:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-humanite-vivant.php'=>['title'=>'La Singularité du Vivant | Corps, Alimentation et Société | Flux Info','desc'=>'Explorer le corps comme système ouvert, l’alimentation, les dépendances matérielles et les relations entre vivant et sociétés humaines.','image'=>'https://flux-info.net/images/human-bio.webp','headline'=>'La Singularité du Vivant','type'=>'article','published'=>'2026-05-22T14:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-archipel-conscience.php'=>['title'=>'La Conscience Archipélique | Relations, Signaux et Vivant | Flux Info','desc'=>'Explorer les interdépendances du vivant, les signaux et les relations entre systèmes sans confondre faits scientifiques, métaphores et réflexion philosophique.','image'=>'https://flux-info.net/images/archipel-global.webp','headline'=>'La Conscience Archipélique','type'=>'article','published'=>'2026-05-22T15:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/article-dissociation.php'=>['title'=>'Dissociation Numérique | Limites du Réel | Flux Info','desc'=>'Un essai sur la dissociation entre systèmes numériques, infrastructures matérielles, ressources physiques et limites du vivant.','image'=>'https://flux-info.net/images/dissociation.webp','headline'=>'Dissociation : Le Numérique Face aux Limites du Réel','type'=>'article','published'=>'2026-06-12T10:00:00+02:00','modified'=>'2026-09-04T00:00:00+02:00'],
'/faq.php'=>['title'=>'FAQ Sourcée | Sciences, Vivant et Méthode | Flux Info','desc'=>'Questions fréquentes et réponses sourcées sur le cosmos, l’atmosphère, les sols, les océans, le vivant et la méthode éditoriale de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/apropos.php'=>['title'=>'À Propos de Flux Info | Mission, Méthode et IA','desc'=>'Découvrez la mission, la méthode, les choix éditoriaux, les niveaux de preuve et l’usage encadré des intelligences artificielles sur Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_archipel.webp','type'=>'website'],
'/politique-editoriale.php'=>['title'=>'Charte Éditoriale et Niveaux de Preuve | Flux Info','desc'=>'Découvrez comment Flux Info distingue faits établis, ordres de grandeur, hypothèses discutées, métaphores pédagogiques et réflexions philosophiques.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/gardien.php'=>['title'=>'Soutenir Flux Info | Un Média Indépendant et Libre d’Accès','desc'=>'Découvrez ce que Flux Info a produit en 2026, ses priorités et comment un soutien contribue à la continuité technique, éditoriale et pédagogique du projet.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/sitemap-semantique.php'=>['title'=>'Carte des Parcours | Sitemap Sémantique | Flux Info','desc'=>'Retrouvez les Portes, articles, expériences et principaux parcours de navigation de Flux Info dans une carte sémantique lisible.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/mentions-legales.php'=>['title'=>'Mentions Légales | Flux Info','desc'=>'Éditeur, hébergeur, propriété intellectuelle, responsabilité et informations légales concernant le site Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/cgu.php'=>['title'=>'Conditions Générales d’Utilisation | Flux Info','desc'=>'Conditions générales d’utilisation du site Flux Info, accès aux contenus, responsabilités et règles applicables aux visiteurs.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
'/rgpd.php'=>['title'=>'Politique de Confidentialité et RGPD | Flux Info','desc'=>'Politique de confidentialité, données personnelles, cookies et droits RGPD applicables aux visiteurs de Flux Info.','image'=>'https://flux-info.net/images/ChatGPT_bandeau.webp','type'=>'website'],
];
$meta = $seo[$canonicalPath] ?? [];
$seoTitle = $pageTitle ?? $page_title ?? ($meta['title'] ?? 'Flux Info | Comprendre les Interdépendances du Réel');
$seoDesc = $pageDesc ?? $page_description ?? ($meta['desc'] ?? 'Flux Info explore les relations entre climat, vivant, sciences, technologies et sociétés humaines.');
$seoImage = $pageImg ?? ($meta['image'] ?? 'https://flux-info.net/images/ChatGPT_bandeau.webp');
$seoType = $meta['type'] ?? 'website';
$seoPublished = $meta['published'] ?? null;
$seoModified = $meta['modified'] ?? null;
$fluxInfoDefinition = 'Flux Info est un média pédagogique indépendant qui explique les flux de matière, d’énergie, d’information et de vivant reliant la Biosphère, les sociétés humaines et les technologies.';
$pageTopics = [
    '/'=>['flux de matière','flux d’énergie','flux d’information','flux du vivant','Biosphère','interdépendances'],
    '/ocean.php'=>['océan','circulation océanique','chaleur','vivant marin'],
    '/ciel.php'=>['atmosphère','vents','cycle de l’eau','énergie'],
    '/terre.php'=>['sols vivants','écosystèmes','biodiversité','migrations animales'],
    '/cosmos.php'=>['cosmos','matière','énergie','évolution stellaire'],
    '/humanite.php'=>['sociétés humaines','corps humain','technologies','flux d’information'],
    '/archipel.php'=>['interdépendances','pensée systémique','relations entre systèmes'],
    '/carte-des-flux.php'=>['cartographie des interdépendances','relations causales','systèmes complexes'],
    '/article-ocean-courants.php'=>['circulation thermohaline','courants profonds','climat','océan'],
    '/article-ciel-vents.php'=>['circulation atmosphérique','vents','rivières atmosphériques','cycle de l’eau'],
    '/article-terre-migrations.php'=>['migrations animales','sols vivants','réseaux mycorhiziens','biodiversité'],
    '/article-cosmos-etoiles.php'=>['nucléosynthèse','évolution stellaire','éléments chimiques','cosmos'],
    '/article-humanite-vivant.php'=>['systèmes vivants','alimentation','sociétés humaines','limites biophysiques'],
    '/article-archipel-conscience.php'=>['interdépendances','signaux du vivant','pensée systémique','conscience'],
    '/article-dissociation.php'=>['numérique','infrastructures matérielles','limites planétaires','dissociation'],
];
$topics = $pageTopics[$canonicalPath] ?? ['interdépendances','Biosphère','sciences','sociétés humaines'];
$articleSections = [
    '/article-ocean-courants.php'=>'Océan',
    '/article-ciel-vents.php'=>'Ciel',
    '/article-terre-migrations.php'=>'Terre',
    '/article-cosmos-etoiles.php'=>'Cosmos',
    '/article-humanite-vivant.php'=>'Humanité',
    '/article-archipel-conscience.php'=>'Archipel',
    '/article-dissociation.php'=>'Humanité et Technologies',
];

/*
 * Registre sémantique commun au site.
 * Ces entités donnent aux moteurs des identifiants stables sans modifier
 * le contenu visible, la navigation ni la présentation des pages.
 */
$definedTermSetId = 'https://flux-info.net/#defined-terms';
$definedTerms = [
    'flux-matiere'=>[
        'name'=>'Flux de matière',
        'description'=>'Circulation ou transfert de substances physiques au sein d’un système ou entre plusieurs systèmes.',
    ],
    'flux-energie'=>[
        'name'=>'Flux d’énergie',
        'description'=>'Transfert, transformation et dissipation de l’énergie entre les éléments d’un système.',
    ],
    'flux-information'=>[
        'name'=>'Flux d’information',
        'description'=>'Transmission de signaux, de données ou de connaissances susceptible de modifier l’état ou le comportement d’un système.',
    ],
    'flux-vivant'=>[
        'name'=>'Flux du vivant',
        'description'=>'Déplacements, échanges et interactions des organismes et des communautés vivantes avec leurs milieux.',
    ],
    'biosphere'=>[
        'name'=>'Biosphère',
        'description'=>'Ensemble des êtres vivants et des parties de la Terre avec lesquelles ils interagissent.',
    ],
    'interdependances'=>[
        'name'=>'Interdépendances',
        'description'=>'Relations dans lesquelles l’état ou l’évolution d’un élément dépend aussi d’autres éléments du système.',
    ],
    'systemes-complexes'=>[
        'name'=>'Systèmes complexes',
        'description'=>'Ensembles d’éléments en interaction dont le comportement collectif dépend de relations, de rétroactions et de plusieurs échelles.',
    ],
    'pensee-systemique'=>[
        'name'=>'Pensée systémique',
        'description'=>'Approche qui étudie les relations, les rétroactions et les niveaux d’organisation plutôt que les éléments isolés.',
    ],
    'limites-biophysiques'=>[
        'name'=>'Limites biophysiques',
        'description'=>'Contraintes matérielles, énergétiques et écologiques qui encadrent le fonctionnement des organismes, des sociétés et des technologies.',
    ],
];
$termSlugsByTopic = [
    'flux de matière'=>'flux-matiere',
    'flux d’énergie'=>'flux-energie',
    'flux d’information'=>'flux-information',
    'flux du vivant'=>'flux-vivant',
    'Biosphère'=>'biosphere',
    'interdépendances'=>'interdependances',
    'relations entre systèmes'=>'interdependances',
    'systèmes complexes'=>'systemes-complexes',
    'pensée systémique'=>'pensee-systemique',
    'limites biophysiques'=>'limites-biophysiques',
];
$topicEntity = static function (string $topic) use ($termSlugsByTopic, $definedTerms, $definedTermSetId): array {
    $slug = $termSlugsByTopic[$topic] ?? null;
    if ($slug !== null) {
        return [
            '@type'=>'DefinedTerm',
            '@id'=>'https://flux-info.net/#term-' . $slug,
            'name'=>$definedTerms[$slug]['name'],
            'inDefinedTermSet'=>['@id'=>$definedTermSetId],
        ];
    }
    return ['@type'=>'Thing','name'=>$topic];
};
$pageAbout = array_map($topicEntity, $topics);
$siteAbout = array_map($topicEntity, $pageTopics['/']);
$definedTermItems = [];
foreach ($definedTerms as $slug => $term) {
    $definedTermItems[] = [
        '@type'=>'DefinedTerm',
        '@id'=>'https://flux-info.net/#term-' . $slug,
        'name'=>$term['name'],
        'description'=>$term['description'],
        'inDefinedTermSet'=>['@id'=>$definedTermSetId],
    ];
}
$definedTermSet = [
    '@type'=>'DefinedTermSet',
    '@id'=>$definedTermSetId,
    'name'=>'Notions fondamentales de Flux Info',
    'description'=>'Concepts employés par Flux Info pour décrire les circulations et les interdépendances de la Biosphère, des sociétés et des technologies.',
    'inLanguage'=>'fr-FR',
    'hasDefinedTerm'=>$definedTermItems,
];
$pageSchemaTypes = [
    '/'=>['WebPage','CollectionPage'],
    '/apropos.php'=>['WebPage','AboutPage'],
    '/carte-des-flux.php'=>['WebPage','CollectionPage'],
];
$pageSchemaType = $pageSchemaTypes[$canonicalPath] ?? 'WebPage';
$labels = ['/ocean.php'=>'Océan','/ciel.php'=>'Ciel','/terre.php'=>'Terre','/cosmos.php'=>'Cosmos','/humanite.php'=>'Humanité','/archipel.php'=>'Archipel','/carte-des-flux.php'=>'Carte des Flux','/article-ocean-courants.php'=>'Courants Profonds de l’Océan','/article-ciel-vents.php'=>'Souffles de l’Atmosphère','/article-terre-migrations.php'=>'Terre en Mouvement','/article-cosmos-etoiles.php'=>'Naissance et Mort des Étoiles','/article-humanite-vivant.php'=>'Singularité du Vivant','/article-archipel-conscience.php'=>'Conscience Archipélique','/article-dissociation.php'=>'Dissociation','/faq.php'=>'FAQ','/apropos.php'=>'À propos','/politique-editoriale.php'=>'Charte Éditoriale','/gardien.php'=>'Soutenir Flux Info'];
$crumbs=[['@type'=>'ListItem','position'=>1,'name'=>'Accueil','item'=>'https://flux-info.net/']];
if($canonicalPath!=='/') $crumbs[]=['@type'=>'ListItem','position'=>2,'name'=>$labels[$canonicalPath] ?? preg_replace('/\s*\|.*$/u','',$seoTitle),'item'=>$canonicalUrl];
$webPage = [
    '@type'=>$pageSchemaType,
    '@id'=>$canonicalUrl.'#webpage',
    'url'=>$canonicalUrl,
    'name'=>$seoTitle,
    'description'=>$seoDesc,
    'inLanguage'=>'fr-FR',
    'isPartOf'=>['@id'=>'https://flux-info.net/#website'],
    'publisher'=>['@id'=>'https://flux-info.net/#organization'],
    'primaryImageOfPage'=>['@type'=>'ImageObject','url'=>$seoImage],
    'about'=>$pageAbout,
];
if ($seoType === 'article') {
    $webPage['mainEntity'] = ['@id'=>$canonicalUrl.'#article'];
} elseif ($canonicalPath === '/faq.php') {
    $webPage['mainEntity'] = ['@id'=>'https://flux-info.net/faq.php#faq'];
}
$graph=[
 ['@type'=>'Organization','@id'=>'https://flux-info.net/#organization','name'=>'Flux Info','alternateName'=>'Flux-Info.net','url'=>'https://flux-info.net/','description'=>$fluxInfoDefinition,'foundingDate'=>'2026','logo'=>['@type'=>'ImageObject','url'=>'https://flux-info.net/logo-1024.png'],'publishingPrinciples'=>'https://flux-info.net/politique-editoriale.php','knowsAbout'=>$siteAbout],
 ['@type'=>'WebSite','@id'=>'https://flux-info.net/#website','url'=>'https://flux-info.net/','name'=>'Flux Info','alternateName'=>'Flux-Info.net','description'=>$fluxInfoDefinition,'inLanguage'=>'fr-FR','publisher'=>['@id'=>'https://flux-info.net/#organization'],'about'=>$siteAbout],
 $webPage,
 ['@type'=>'BreadcrumbList','itemListElement'=>$crumbs]
];

$graph[] = $definedTermSet;

if ($seoType === 'article') {
    $graph[] = [
        '@type'=>'Article',
        '@id'=>$canonicalUrl.'#article',
        'mainEntityOfPage'=>['@id'=>$canonicalUrl.'#webpage'],
        'url'=>$canonicalUrl,
        'headline'=>$meta['headline'] ?? preg_replace('/\s*\|.*$/u','',$seoTitle),
        'description'=>$seoDesc,
        'image'=>[$seoImage],
        'datePublished'=>$seoPublished,
        'dateModified'=>$seoModified,
        'inLanguage'=>'fr-FR',
        'isAccessibleForFree'=>true,
        'author'=>['@id'=>'https://flux-info.net/#organization'],
        'publisher'=>['@id'=>'https://flux-info.net/#organization'],
        'articleSection'=>$articleSections[$canonicalPath] ?? 'Vulgarisation',
        'keywords'=>$topics,
        'about'=>$pageAbout
    ];
}
?>
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
<meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
<meta property="og:locale" content="fr_FR">
<meta property="og:type" content="<?= $seoType === 'article' ? 'article' : 'website' ?>">
<meta property="og:site_name" content="Flux Info">
<meta property="og:title" content="<?= htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($seoDesc, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($seoImage, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image:alt" content="Illustration de <?= htmlspecialchars(preg_replace('/\s*\|.*$/u','',$seoTitle), ENT_QUOTES, 'UTF-8') ?>">
<?php if($seoType==='article' && $seoPublished): ?><meta property="article:published_time" content="<?= $seoPublished ?>"><?php endif; ?>
<?php if($seoType==='article' && $seoModified): ?><meta property="article:modified_time" content="<?= $seoModified ?>"><?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($seoDesc, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($seoImage, ENT_QUOTES, 'UTF-8') ?>">
<script type="application/ld+json"><?= json_encode(['@context'=>'https://schema.org','@graph'=>$graph], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
