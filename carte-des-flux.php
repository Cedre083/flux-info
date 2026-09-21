<?php
$pageTitle = 'La Carte des Flux | Explorer les Interdépendances | Flux Info';
$pageDesc = 'Explorez les relations entre Océan, Ciel, Terre, Cosmos, Humanité et Archipel dans une carte interactive des phénomènes et de leurs conséquences.';
$pageImg = 'https://flux-info.net/images/ChatGPT_bandeau.webp';
$dataPath = __DIR__ . '/flux-map-data.json';
$fluxMapJson = is_file($dataPath) ? file_get_contents($dataPath) : '{"territories":[]}';
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
<link rel="preload" as="image" href="/logo-1024.png" fetchpriority="high">
<meta name="theme-color" content="#100019">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>">

<?php include_once __DIR__ . '/seo-head.php'; ?>
<style>
:root{
    --map-line:color-mix(in srgb,currentColor 14%,transparent);
    --map-soft:color-mix(in srgb,currentColor 4%,transparent);
    --map-panel:color-mix(in srgb,currentColor 3%,transparent);
    --map-muted:color-mix(in srgb,currentColor 60%,transparent);
    --map-glow:rgba(120,190,255,.16);
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
.flux-map-page{position:relative;z-index:4;width:min(1280px,calc(100% - 32px));margin:0 auto;padding:66px 0 110px;color:inherit}
.flux-map-hero{text-align:center;max-width:920px;margin:0 auto 46px}
.flux-map-kicker{margin:0 0 18px;font-size:.72rem;letter-spacing:.23em;text-transform:uppercase;opacity:.56}
.flux-map-hero h1{margin:0;font-size:clamp(2.15rem,5.6vw,4.45rem);font-weight:300;line-height:1.04;letter-spacing:-.04em;color:inherit}
.flux-map-lead{max-width:780px;margin:22px auto 0;font-size:clamp(1rem,1.9vw,1.17rem);line-height:1.75;opacity:.78}
.flux-map-principle{display:inline-flex;align-items:center;gap:10px;margin-top:24px;padding:9px 14px;border:1px solid var(--map-line);border-radius:999px;font-size:.69rem;letter-spacing:.08em;opacity:.66}
.flux-map-principle::before{content:'';width:6px;height:6px;border-radius:50%;background:currentColor;box-shadow:0 0 12px currentColor}

.flux-map-entries{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:14px;margin:0 auto 24px;max-width:1120px}
.flux-map-entry{padding:17px 18px;border:1px solid var(--map-line);border-radius:22px;background:color-mix(in srgb,currentColor 2.8%,transparent)}
.flux-map-entry__kicker{display:block;margin-bottom:8px;font-size:.6rem;letter-spacing:.16em;text-transform:uppercase;opacity:.46}
.flux-map-entry strong{display:block;margin-bottom:7px;font-size:.95rem;font-weight:450}
.flux-map-entry p{margin:0 0 12px;font-size:.8rem;line-height:1.55;opacity:.68}
.flux-map-entry__actions{display:flex;flex-wrap:wrap;gap:7px}
.flux-map-entry button{appearance:none;min-height:38px;border:1px solid color-mix(in srgb,currentColor 12%,transparent);border-radius:999px;background:transparent;color:inherit;padding:7px 10px;font:inherit;font-size:.62rem;cursor:pointer;opacity:.75;transition:opacity .2s ease,background .2s ease,border-color .2s ease}
.flux-map-entry button:hover,.flux-map-entry button:focus-visible{opacity:1;outline:none;background:color-mix(in srgb,currentColor 4%,transparent);border-color:color-mix(in srgb,#f3d66f 42%,transparent)}

.flux-map-shell{position:relative;display:grid;grid-template-columns:minmax(0,1.15fr) minmax(340px,.85fr);gap:0;align-items:stretch;border:1px solid var(--map-line);border-radius:34px;background:linear-gradient(145deg,color-mix(in srgb,currentColor 2.6%,transparent),color-mix(in srgb,currentColor 1.2%,transparent));overflow:hidden;box-shadow:0 30px 95px rgba(0,0,0,.18),inset 0 1px 0 rgba(255,255,255,.035)}
.flux-map-shell::before{content:'';position:absolute;inset:0;pointer-events:none;background:radial-gradient(circle at 32% 20%,rgba(110,215,255,.1),transparent 24%),radial-gradient(circle at 72% 18%,rgba(135,110,255,.08),transparent 25%),radial-gradient(circle at 60% 72%,rgba(120,255,170,.08),transparent 24%),linear-gradient(to bottom,rgba(255,255,255,.015),transparent 20%)}
.flux-map-shell::after{content:'';position:absolute;inset:0;pointer-events:none;opacity:.22;background-image:radial-gradient(circle,rgba(255,255,255,.22) 0 1px,transparent 1.4px);background-size:42px 42px;mask-image:linear-gradient(to right,#000 0 70%,transparent 100%)}

.flux-map-visual{position:relative;min-width:0;padding:28px 28px 30px;border-right:1px solid var(--map-line);min-height:760px;display:flex;flex-direction:column;justify-content:center}
.flux-map-stage{position:relative;aspect-ratio:1/1;width:min(100%,760px);margin:0 auto;border-radius:50%;display:grid;place-items:center;overflow:visible;isolation:isolate}
.flux-map-stage::before{content:'';position:absolute;inset:11%;border-radius:50%;background:radial-gradient(circle at 50% 50%,rgba(85,175,255,.16),rgba(58,102,215,.11) 30%,rgba(18,33,72,.08) 53%,transparent 70%);filter:blur(1px);box-shadow:0 0 85px rgba(75,160,255,.16),0 0 140px rgba(70,110,255,.08)}
.flux-map-stage::after{content:'';position:absolute;inset:18%;border-radius:50%;border:1px solid color-mix(in srgb,currentColor 10%,transparent);opacity:.45;pointer-events:none}

.flux-map-svg{position:absolute;inset:0;width:100%;height:100%;overflow:visible;pointer-events:none}
.flux-map-svg .outer-arc{fill:none;stroke:var(--arc-color,rgba(255,255,255,.3));stroke-width:7;stroke-linecap:round;opacity:.92;filter:drop-shadow(0 0 8px color-mix(in srgb,var(--arc-color) 35%,transparent))}
.flux-map-svg .label-path{fill:none;stroke:none}
.flux-map-svg text{font-size:11px;letter-spacing:8px;text-transform:uppercase;fill:color-mix(in srgb,currentColor 92%,transparent);opacity:.82}
.flux-map-svg .sector-guide{fill:none;stroke:color-mix(in srgb,currentColor 11%,transparent);stroke-width:1.1;stroke-dasharray:2 9}
.flux-map-svg .sector-beam{stroke:var(--beam-color,rgba(255,255,255,.3));stroke-width:2;opacity:.3;filter:drop-shadow(0 0 6px var(--beam-color,rgba(255,255,255,.3)))}

.flux-map-globe{position:absolute;inset:17.5%;border-radius:50%;background:
    radial-gradient(circle at 52% 46%,rgba(168,216,255,.38),rgba(75,125,240,.18) 28%,rgba(26,43,95,.18) 52%,rgba(8,12,32,.32) 68%,transparent 82%),
    conic-gradient(from -90deg,
        rgba(89,200,255,.25) 0 72deg,
        rgba(119,244,220,.24) 72deg 144deg,
        rgba(255,173,135,.23) 144deg 216deg,
        rgba(120,255,156,.22) 216deg 288deg,
        rgba(201,165,255,.23) 288deg 360deg);
    border:1px solid color-mix(in srgb,currentColor 10%,transparent);
    box-shadow:0 0 30px rgba(95,155,255,.14),inset 0 0 45px rgba(255,255,255,.06),inset 0 -35px 60px rgba(0,0,0,.18);
    overflow:hidden;
}
.flux-map-globe::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 50% 44%,transparent 0 46%,rgba(255,255,255,.055) 46.3% 46.8%,transparent 47%),linear-gradient(180deg,rgba(255,255,255,.06),transparent 30%,transparent 70%,rgba(255,255,255,.02));mix-blend-mode:screen;pointer-events:none}
.flux-map-globe::after{content:'';position:absolute;inset:0;opacity:.34;background:conic-gradient(from -110deg,transparent 0 9%,rgba(255,255,255,.18) 10%,transparent 12%,transparent 25%,rgba(255,255,255,.12) 26%,transparent 29%,transparent 40%,rgba(255,255,255,.15) 41%,transparent 44%,transparent 59%,rgba(255,255,255,.12) 60%,transparent 63%,transparent 75%,rgba(255,255,255,.14) 76%,transparent 79%,transparent 89%,rgba(255,255,255,.14) 90%,transparent 93%);filter:blur(1.8px);pointer-events:none}

.flux-sector-zone{position:absolute;inset:0;pointer-events:none}
.flux-sector-trigger{--accent:#d4a5ff;position:absolute;transform:translate(-50%,-50%);display:flex;touch-action:manipulation;flex-direction:column;align-items:center;gap:7px;padding:0;background:transparent;border:0;color:inherit;cursor:pointer;pointer-events:auto;text-align:center;font:inherit;transition:transform .25s ease}
.flux-sector-trigger:hover,.flux-sector-trigger:focus-visible,.flux-sector-trigger.is-active{transform:translate(-50%,-50%) scale(1.04)}
.flux-sector-trigger:focus-visible{outline:none}
.flux-sector-trigger__halo{position:relative;min-width:106px;min-height:54px;padding:14px 16px;border-radius:999px;border:1px solid color-mix(in srgb,var(--accent) 48%,transparent);background:radial-gradient(circle at 50% 35%,color-mix(in srgb,var(--accent) 18%,transparent),color-mix(in srgb,var(--accent) 7%,rgba(8,10,25,.82)) 70%);box-shadow:0 0 26px color-mix(in srgb,var(--accent) 10%,transparent),inset 0 0 20px color-mix(in srgb,var(--accent) 7%,transparent);display:grid;place-items:center;backdrop-filter:blur(12px);transition:border-color .25s ease,box-shadow .25s ease,background .25s ease}
.flux-sector-trigger__halo::before{content:'';position:absolute;inset:-10px;border-radius:inherit;border:1px solid color-mix(in srgb,var(--accent) 18%,transparent);opacity:.45}
.flux-sector-trigger__name{font-size:.73rem;letter-spacing:.16em;text-transform:uppercase;font-weight:500}
.flux-sector-trigger__type{font-size:.58rem;letter-spacing:.08em;opacity:.44}
.flux-sector-trigger:hover .flux-sector-trigger__halo,.flux-sector-trigger:focus-visible .flux-sector-trigger__halo,.flux-sector-trigger.is-active .flux-sector-trigger__halo{border-color:var(--accent);box-shadow:0 0 32px color-mix(in srgb,var(--accent) 16%,transparent),inset 0 0 24px color-mix(in srgb,var(--accent) 10%,transparent);background:radial-gradient(circle at 50% 35%,color-mix(in srgb,var(--accent) 24%,transparent),color-mix(in srgb,var(--accent) 9%,rgba(8,10,25,.84)) 70%)}

.flux-archipel-trigger{position:absolute;left:50%;top:50%;transform:translate(-50%,32%);z-index:8}
.flux-archipel-trigger .flux-sector-trigger__halo{min-width:124px;min-height:46px;border-style:dashed}

.flux-map-core{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:155px;height:155px;border-radius:50%;display:grid;place-items:center;text-align:center;border:1px solid color-mix(in srgb,#9bd2ff 28%,transparent);background:radial-gradient(circle at 50% 42%,rgba(160,220,255,.18),rgba(70,116,245,.08) 52%,transparent 72%);box-shadow:0 0 46px rgba(110,165,255,.16),inset 0 0 30px rgba(255,255,255,.04);z-index:5}
.flux-map-core::before{content:'';position:absolute;inset:-20px;border:1px solid color-mix(in srgb,#f3d66f 18%,transparent);border-radius:50%;opacity:.52}
.flux-map-core::after{content:'';position:absolute;inset:-42px;border:1px dashed color-mix(in srgb,#f3d66f 25%,transparent);border-radius:50%;opacity:.52;animation:fluxOrbit 34s linear infinite}
@keyframes fluxOrbit{to{transform:rotate(360deg)}}
.flux-map-core span{display:block;font-size:.6rem;letter-spacing:.18em;text-transform:uppercase;opacity:.52;margin-bottom:6px}
.flux-map-core strong{display:block;font-size:1.02rem;letter-spacing:.1em;text-transform:uppercase;font-weight:400}
.flux-map-core em{display:block;margin-top:6px;font-size:.62rem;letter-spacing:.09em;opacity:.48;font-style:normal}

.flux-phenomena-layer{position:absolute;inset:0;z-index:7;pointer-events:none}
.flux-phenomenon{--accent:#d4a5ff;position:absolute;transform:translate(-50%,-50%) scale(.72);width:46px;height:46px;min-width:44px;min-height:44px;padding:0;border-radius:50%;border:1px solid color-mix(in srgb,var(--accent) 48%,transparent);background:radial-gradient(circle at 38% 32%,color-mix(in srgb,var(--accent) 24%,transparent),color-mix(in srgb,var(--accent) 10%,rgba(7,10,24,.9)) 68%);backdrop-filter:blur(8px);box-shadow:0 8px 22px rgba(0,0,0,.18),0 0 18px color-mix(in srgb,var(--accent) 12%,transparent);font:inherit;color:inherit;text-align:center;cursor:pointer;pointer-events:none;opacity:0;transition:opacity .25s ease,transform .25s ease,border-color .2s ease,box-shadow .2s ease,background .2s ease;display:grid;place-items:center;z-index:8}
.flux-phenomenon::before{content:'';position:absolute;inset:-7px;border-radius:50%;border:1px solid color-mix(in srgb,var(--accent) 15%,transparent);opacity:.5}
.flux-phenomenon.is-visible{opacity:1;pointer-events:auto;transform:translate(-50%,-50%) scale(1)}
.flux-phenomenon:hover,.flux-phenomenon:focus-visible,.flux-phenomenon.is-selected{outline:none;border-color:var(--accent);background:color-mix(in srgb,var(--accent) 22%,rgba(7,10,24,.9));box-shadow:0 10px 28px rgba(0,0,0,.2),0 0 28px color-mix(in srgb,var(--accent) 22%,transparent);transform:translate(-50%,-50%) scale(1.1)}
.flux-phenomenon__index{font-size:.62rem;letter-spacing:.08em;font-weight:600}
.flux-phenomenon__label{position:absolute;z-index:31;left:50%;top:calc(100% + 10px);transform:translateX(-50%);width:max-content;max-width:150px;padding:6px 9px;border-radius:999px;background:rgba(7,10,24,.96);border:1px solid color-mix(in srgb,var(--accent) 38%,transparent);box-shadow:0 8px 24px rgba(0,0,0,.38),0 0 18px color-mix(in srgb,var(--accent) 12%,transparent);font-size:.59rem;line-height:1.2;letter-spacing:.03em;opacity:0;pointer-events:none;transition:opacity .18s ease;white-space:nowrap}
.flux-phenomenon:hover,.flux-phenomenon:focus-visible,.flux-phenomenon.is-selected{z-index:30}
.flux-phenomenon:hover .flux-phenomenon__label,.flux-phenomenon:focus-visible .flux-phenomenon__label,.flux-phenomenon.is-selected .flux-phenomenon__label{opacity:1}
/* Les étiquettes s'ouvrent vers l'espace libre propre à chaque secteur. */
.flux-phenomenon[data-territory="ocean"] .flux-phenomenon__label{left:calc(100% + 11px);right:auto;top:50%;transform:translateY(-50%)}
.flux-phenomenon[data-territory="humanite"] .flux-phenomenon__label{left:auto;right:calc(100% + 11px);top:50%;transform:translateY(-50%)}
.flux-phenomenon[data-territory="terre"] .flux-phenomenon__label,.flux-phenomenon[data-territory="cosmos"] .flux-phenomenon__label{left:50%;top:auto;bottom:calc(100% + 11px);transform:translateX(-50%)}
.flux-phenomenon[data-territory="ciel"] .flux-phenomenon__label{left:50%;top:calc(100% + 10px);bottom:auto;transform:translateX(-50%)}
.flux-phenomenon[data-territory="archipel"] .flux-phenomenon__label{left:calc(100% + 11px);right:auto;top:50%;transform:translateY(-50%)}
.flux-territory-node-list{display:grid;grid-template-columns:1fr 1fr;gap:9px;margin-top:18px}
.flux-territory-node-list button{--accent:#d4a5ff;appearance:none;display:flex;align-items:center;gap:9px;width:100%;padding:10px 11px;border:1px solid var(--map-line);border-radius:14px;background:transparent;color:inherit;font:inherit;text-align:left;cursor:pointer;transition:border-color .2s ease,background .2s ease,transform .2s ease}
.flux-territory-node-list button:hover,.flux-territory-node-list button:focus-visible{outline:none;border-color:color-mix(in srgb,var(--accent) 42%,transparent);background:color-mix(in srgb,var(--accent) 7%,transparent);transform:translateY(-1px)}
.flux-territory-node-list b{display:grid;place-items:center;flex:0 0 27px;width:27px;height:27px;border-radius:50%;border:1px solid color-mix(in srgb,var(--accent) 42%,transparent);font-size:.55rem;letter-spacing:.04em;font-weight:600}
.flux-territory-node-list span{font-size:.67rem;line-height:1.25;opacity:.82}

.flux-map-instruction{margin:28px auto 0;max-width:560px;text-align:center;font-size:.69rem;letter-spacing:.09em;opacity:.5;text-transform:uppercase}
.flux-map-caption{margin:12px auto 0;max-width:610px;text-align:center;font-size:.95rem;line-height:1.7;opacity:.74}

.flux-map-detail{position:relative;z-index:4;padding:28px 24px 26px;display:flex;flex-direction:column;gap:18px;background:linear-gradient(180deg,color-mix(in srgb,currentColor 3.4%,transparent),transparent)}
.flux-map-detail::before{content:'Lecture du Flux';display:block;font-size:.6rem;letter-spacing:.22em;text-transform:uppercase;opacity:.4;margin-bottom:-3px}
.flux-detail-card{position:relative;padding:22px;border:1px solid var(--map-line);border-radius:24px;background:color-mix(in srgb,currentColor 3%,transparent);overflow:hidden;transition:border-color .25s ease,background .25s ease,transform .25s ease}
.flux-detail-card::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;background:var(--accent,transparent);opacity:.82;box-shadow:0 0 18px var(--accent,transparent)}
.flux-detail-card.is-awake{border-color:color-mix(in srgb,var(--accent,#d4a5ff) 28%,transparent);background:color-mix(in srgb,var(--accent,#d4a5ff) 5%,transparent)}
.flux-detail-eyebrow{margin:0 0 11px;font-size:.61rem;letter-spacing:.18em;text-transform:uppercase;opacity:.48}
.flux-detail-card h2{margin:0 0 12px;font-size:clamp(1.28rem,2vw,1.84rem);font-weight:400;line-height:1.16}
.flux-detail-card p{margin:0;line-height:1.72;font-size:.92rem;opacity:.78}
.flux-detail-actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:18px}
.flux-detail-action,.flux-link-pill{display:inline-flex;align-items:center;justify-content:center;min-height:44px;padding:9px 13px;border-radius:999px;border:1px solid var(--map-line);color:inherit;text-decoration:none;background:transparent;font-size:.65rem;letter-spacing:.06em;transition:border-color .2s ease,background .2s ease,transform .2s ease}
.flux-detail-action:hover,.flux-detail-action:focus-visible,.flux-link-pill:hover,.flux-link-pill:focus-visible{outline:none;border-color:color-mix(in srgb,var(--accent,#d4a5ff) 42%,transparent);background:color-mix(in srgb,var(--accent,#d4a5ff) 8%,transparent);transform:translateY(-1px)}
.flux-detail-meta{display:flex;flex-wrap:wrap;gap:10px;margin-top:14px}
.flux-detail-meta span{display:inline-flex;align-items:center;gap:7px;padding:8px 11px;border-radius:999px;background:color-mix(in srgb,currentColor 4.5%,transparent);border:1px solid var(--map-line);font-size:.63rem;letter-spacing:.05em;opacity:.72}
.flux-detail-meta span::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--accent,currentColor);box-shadow:0 0 10px var(--accent,currentColor)}
.flux-related{display:flex;flex-wrap:wrap;gap:10px;margin-top:20px}
.flux-related button{appearance:none;border:1px solid var(--map-line);border-radius:999px;background:transparent;color:inherit;padding:9px 12px;font:inherit;font-size:.64rem;letter-spacing:.06em;cursor:pointer;transition:border-color .2s ease,background .2s ease,transform .2s ease}
.flux-related button:hover,.flux-related button:focus-visible{outline:none;border-color:color-mix(in srgb,var(--accent,#d4a5ff) 42%,transparent);background:color-mix(in srgb,var(--accent,#d4a5ff) 8%,transparent);transform:translateY(-1px)}
.flux-empty strong{display:block;font-size:1rem;font-weight:400;margin-bottom:10px}
.flux-empty p{margin:0;line-height:1.7;opacity:.72}

.flux-map-footer-note{margin-top:26px;padding:18px 20px;border:1px dashed var(--map-line);border-radius:22px;background:color-mix(in srgb,currentColor 2.5%,transparent);font-size:.84rem;line-height:1.66;opacity:.72}
.flux-map-guide{margin:46px auto 0;max-width:1100px}
.flux-map-guide h2{margin:0 0 14px;font-size:clamp(1.5rem,3vw,2.3rem);font-weight:300;letter-spacing:-.03em}
.flux-map-guide > p{max-width:770px;margin:0 0 24px;font-size:1rem;line-height:1.75;opacity:.74}
.flux-map-guide__steps{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
.flux-map-guide__step{padding:20px;border:1px solid var(--map-line);border-radius:24px;background:color-mix(in srgb,currentColor 2.8%,transparent)}
.flux-map-guide__step span{display:block;margin:0 0 10px;font-size:.65rem;letter-spacing:.17em;text-transform:uppercase;opacity:.48}
.flux-map-guide__step strong{display:block;margin:0 0 10px;font-size:1rem;font-weight:500}
.flux-map-guide__step p{margin:0;font-size:.92rem;line-height:1.68;opacity:.72}

body.reading-mode .flux-map-shell,
body.reading-mode .flux-map-guide__step,
body.reading-mode .flux-detail-card,
body.reading-mode .flux-map-footer-note{background:color-mix(in srgb,currentColor 2.5%,transparent)}
body.reading-mode .flux-map-globe{box-shadow:none}
body.reading-mode .flux-map-stage::before{box-shadow:none}

.flux-map-toolbar{display:flex;align-items:center;justify-content:space-between;gap:12px;width:min(100%,760px);margin:0 auto 12px;padding:0 2px}
.flux-map-toolbar__status{margin:0;font-size:.72rem;line-height:1.4;opacity:.62}
.flux-map-reset{appearance:none;min-height:40px;padding:8px 12px;border:1px solid var(--map-line);border-radius:999px;background:transparent;color:inherit;font:inherit;font-size:.64rem;letter-spacing:.06em;cursor:pointer;touch-action:manipulation;transition:border-color .2s ease,background .2s ease,transform .2s ease}
.flux-map-reset:hover,.flux-map-reset:focus-visible{outline:none;border-color:color-mix(in srgb,#f3d66f 55%,transparent);background:color-mix(in srgb,#f3d66f 8%,transparent);transform:translateY(-1px)}
.flux-sector-trigger:focus-visible,.flux-phenomenon:focus-visible,.flux-territory-node-list button:focus-visible,.flux-related button:focus-visible,.flux-detail-action:focus-visible{outline:3px solid color-mix(in srgb,#f3d66f 72%,transparent);outline-offset:4px}
@media (max-width:760px){.flux-map-toolbar{align-items:flex-start;margin-bottom:10px}.flux-map-toolbar__status{max-width:62%;font-size:.68rem}.flux-map-reset{min-height:44px}}
@media (max-width:520px){
    .flux-map-shell{border-radius:24px}.flux-map-visual{padding:14px 8px 22px}.flux-map-stage{width:min(100%,520px)}
    .flux-map-svg text{font-size:10px;letter-spacing:5px}.flux-map-core{width:112px;height:112px}.flux-map-core strong{font-size:.88rem}.flux-map-core em{font-size:.54rem}
    .flux-sector-trigger__halo{min-width:78px;min-height:48px;padding:11px 8px}.flux-sector-trigger__name{font-size:.61rem;letter-spacing:.09em}
    .flux-phenomenon{width:44px;height:44px}.flux-phenomenon__label{font-size:.57rem;max-width:132px;white-space:normal;text-align:center}
}
@media (prefers-reduced-motion: reduce){
    html{scroll-behavior:auto}
    .flux-map-core::after,
    .flux-map-svg .sector-beam,
    .flux-sector-trigger,
    .flux-phenomenon,
    .flux-detail-card,
    .flux-detail-action,
    .flux-link-pill,
    .flux-related button{animation:none !important;transition:none !important}
}
@media (max-width: 1080px){
    .flux-map-shell{grid-template-columns:minmax(0,1fr)}
    .flux-map-visual{border-right:0;border-bottom:1px solid var(--map-line);min-height:auto}
    .flux-map-detail{padding-top:22px}
}
@media (max-width: 900px){.flux-map-entries{grid-template-columns:1fr}}
@media (max-width: 760px){
    .flux-map-page{width:min(100% - 22px,1120px);padding:56px 0 90px}
    .flux-map-visual{padding:18px 12px 24px}
    .flux-map-stage{width:min(100%,640px)}
    .flux-map-detail{padding:20px 14px 18px}
    .flux-map-guide__steps{grid-template-columns:1fr}
    .flux-sector-trigger__halo{min-width:88px;min-height:48px;padding:12px 11px}
    .flux-sector-trigger__name{font-size:.67rem;letter-spacing:.11em}
    .flux-sector-trigger__type{display:none}
    .flux-map-core{width:132px;height:132px}
    .flux-phenomenon{width:40px;height:40px}
    .flux-territory-node-list{grid-template-columns:1fr}
    .flux-map-caption{font-size:.9rem}
}
</style>
<?= $headerHead ?>
</head>
<body>
<?= $headerNavigation ?>
<main class="flux-map-page">
    <header class="flux-map-hero">
        <p class="flux-map-kicker">Cartographie des Interdépendances</p>
        <h1>La Carte des Flux</h1>
        <p class="flux-map-lead">La carte ne montre pas des rubriques isolées. Elle donne à voir un système. Commencez par un territoire, ouvrez un phénomène, puis traversez vers ce qu’il met en mouvement.</p>
        <p class="flux-map-principle">Comprendre d’abord le phénomène, puis élargir la relation</p>
    </header>

    <nav class="flux-map-entries" aria-label="Entrées rapides dans la Carte des Flux">
        <div class="flux-map-entry"><span class="flux-map-entry__kicker">Par Phénomène</span><strong>Je cherche une Question Concrète</strong><p>Entrer directement par un phénomène déjà documenté.</p><div class="flux-map-entry__actions"><button type="button" data-map-node="secheresse">Sécheresse</button><button type="button" data-map-node="sols">Sols</button><button type="button" data-map-node="alimentation">Alimentation</button></div></div>
        <div class="flux-map-entry"><span class="flux-map-entry__kicker">Parcours · 5 min</span><strong>Suivre une Goutte d’Eau</strong><p>Océan → Atmosphère → Précipitations → Sols → Vivant.</p><div class="flux-map-entry__actions"><button type="button" data-map-node="eau-ocean">Commencer le Parcours</button></div></div>
        <div class="flux-map-entry"><span class="flux-map-entry__kicker">Exploration Libre · 10 min</span><strong>Je veux Comprendre le Système</strong><p>Choisir un territoire, ouvrir un phénomène puis suivre ses implications.</p><div class="flux-map-entry__actions"><button type="button" data-map-territory="ocean">Océan</button><button type="button" data-map-territory="humanite">Humanité</button><button type="button" data-map-territory="archipel">Archipel</button></div></div>
    </nav>

    <section class="flux-map-shell" aria-labelledby="flux-map-title">
        <h2 id="flux-map-title" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap">Carte interactive des Flux</h2>
        <div class="flux-map-visual">
            <div class="flux-map-toolbar" aria-label="Commandes de la carte">
                <p class="flux-map-toolbar__status" id="fluxMapStatus">Vue d’ensemble · choisissez un territoire</p>
                <button type="button" class="flux-map-reset" id="fluxMapReset">Réinitialiser</button>
            </div>
            <div class="flux-map-stage" id="fluxMapStage">
                <svg class="flux-map-svg" id="fluxMapSvg" viewBox="0 0 1000 1000" aria-hidden="true"></svg>
                <div class="flux-map-globe"></div>
                <div class="flux-sector-zone" id="fluxTerritoryLayer"></div>
                <div class="flux-map-core"><div><span>Point Commun</span><strong>Le Réel</strong><em>Biosphère · Matière · Relations</em></div></div>
                <button type="button" class="flux-sector-trigger flux-archipel-trigger" id="fluxArchipelTrigger" style="--accent:#f3d66f">
                    <span class="flux-sector-trigger__halo"><span class="flux-sector-trigger__name">Archipel</span></span>
                    <span class="flux-sector-trigger__type">Couche Relationnelle</span>
                </button>
                <div class="flux-phenomena-layer" id="fluxPhenomenaLayer"></div>
            </div>
            <p class="flux-map-instruction" id="fluxMapInstruction">Choisissez un Territoire pour révéler ses Phénomènes</p>
            <p class="flux-map-caption">Océan, Ciel, Terre, Cosmos et Humanité dessinent les grands territoires. Archipel ne les remplace pas : il rend visibles leurs relations.</p>
        </div>

        <aside class="flux-map-detail" id="fluxMapDetail" aria-live="polite">
            <section class="flux-detail-card" id="territoryDetail">
                <div class="flux-empty">
                    <p class="flux-detail-eyebrow">Territoire</p>
                    <strong>Commencez par une Porte</strong>
                    <p>Choisissez un territoire sur la carte circulaire. Vous ouvrirez son rôle, ses phénomènes majeurs et l’accès direct à la Porte comme à l’Article correspondant.</p>
                </div>
            </section>

            <section class="flux-detail-card" id="phenomenonDetail">
                <div class="flux-empty">
                    <p class="flux-detail-eyebrow">Phénomène</p>
                    <strong>Puis ouvrez un Flux</strong>
                    <p>Chaque phénomène donne accès à une explication, à la section exacte du corpus et à quelques passages vers d’autres territoires.</p>
                </div>
            </section>

            <div class="flux-map-footer-note">Cette V3 privilégie une lecture systémique. La carte montre d’abord une vision d’ensemble, puis révèle seulement quelques nœuds essentiels pour éviter l’effet « toile d’araignée ».</div>
        </aside>
    </section>

    <section class="flux-map-guide">
        <h2>Une Carte qui s’ouvre en Trois Gestes</h2>
        <p>La Carte des Flux n’est pas un menu déguisé. Elle cherche à faire sentir qu’un phénomène appartient toujours à un système plus vaste.</p>
        <div class="flux-map-guide__steps">
            <div class="flux-map-guide__step"><span>01 · Voir</span><strong>Choisir un Territoire</strong><p>Entrer par une zone familière du réel : Océan, Ciel, Terre, Cosmos, Humanité ou Archipel.</p></div>
            <div class="flux-map-guide__step"><span>02 · Comprendre</span><strong>Ouvrir un Phénomène</strong><p>Faire apparaître un flux concret, lire son rôle et rejoindre la section précise de l’article qui l’explique.</p></div>
            <div class="flux-map-guide__step"><span>03 · Traverser</span><strong>Suivre ce qu’il met en Mouvement</strong><p>Passer d’un territoire à l’autre par les causes, conséquences et implications plutôt que par des catégories isolées.</p></div>
        </div>
    </section>
</main>
<?php if (file_exists('footer-archipel.php')) include 'footer-archipel.php'; ?>
<script>
(() => {
    const DATA = <?= $fluxMapJson ?>;
    const stage = document.getElementById('fluxMapStage');
    const svg = document.getElementById('fluxMapSvg');
    const territoryLayer = document.getElementById('fluxTerritoryLayer');
    const phenomenaLayer = document.getElementById('fluxPhenomenaLayer');
    const territoryDetail = document.getElementById('territoryDetail');
    const phenomenonDetail = document.getElementById('phenomenonDetail');
    const instruction = document.getElementById('fluxMapInstruction');
    const archipelTrigger = document.getElementById('fluxArchipelTrigger');
    const mapStatus = document.getElementById('fluxMapStatus');
    const resetButton = document.getElementById('fluxMapReset');
    if (!stage || !svg || !territoryLayer || !phenomenaLayer || !territoryDetail || !phenomenonDetail || !instruction || !archipelTrigger || !resetButton || !DATA.territories) return;

    const order = ['ocean','ciel','humanite','terre','cosmos'];
    const extra = 'archipel';
    const territories = DATA.territories.slice();
    const territoryById = Object.fromEntries(territories.map(t => [t.id, t]));
    const nodeIndex = new Map();
    territories.forEach(t => (t.nodes || []).forEach(n => nodeIndex.set(n.id, {...n, territory: t} )));

    const config = {
        ocean:    { start: 252, end: 324, angle: 288 },
        ciel:     { start: 324, end: 396, angle: 360 },
        humanite: { start:  36, end: 108, angle: 72 },
        terre:    { start: 108, end: 180, angle: 144 },
        cosmos:   { start: 180, end: 252, angle: 216 }
    };

    const state = {
        activeTerritory: null,
        activeNode: null
    };

    function esc(value){
        return String(value ?? '').replace(/[&<>'"]/g, ch => ({'&':'&amp;','<':'&lt;','>':'&gt;',"'":'&#039;','"':'&quot;'}[ch]));
    }

    function normAngle(deg){ return ((deg % 360) + 360) % 360; }

    function polar(cx, cy, radius, angleDeg){
        const rad = (angleDeg - 90) * Math.PI / 180;
        return { x: cx + Math.cos(rad) * radius, y: cy + Math.sin(rad) * radius };
    }

    function arcPath(cx, cy, radius, startDeg, endDeg){
        const start = polar(cx, cy, radius, startDeg);
        const end = polar(cx, cy, radius, endDeg);
        const delta = ((endDeg - startDeg) % 360 + 360) % 360;
        const large = delta > 180 ? 1 : 0;
        return `M ${start.x.toFixed(2)} ${start.y.toFixed(2)} A ${radius} ${radius} 0 ${large} 1 ${end.x.toFixed(2)} ${end.y.toFixed(2)}`;
    }

    function lineToCenterPath(cx, cy, radius, angle){
        const point = polar(cx, cy, radius, angle);
        return `M ${cx} ${cy} L ${point.x.toFixed(2)} ${point.y.toFixed(2)}`;
    }

    function drawStaticMap(){
        const cx = 500, cy = 500;
        const outerR = 452;
        const labelR = 438;
        const guideR = 306;
        const beamR = 308;
        const frag = [];
        frag.push(`<defs>
            <filter id="softGlow" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stdDeviation="5" result="blur"></feGaussianBlur>
                <feMerge><feMergeNode in="blur"></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge>
            </filter>
        </defs>`);
        order.forEach((id, idx) => {
            const territory = territoryById[id];
            const c = config[id];
            const pathId = `fluxArcLabel${idx}`;
            const arc = arcPath(cx, cy, outerR, c.start, c.end);
            const labelArc = arcPath(cx, cy, labelR, c.start + 4, c.end - 4);
            const beam = lineToCenterPath(cx, cy, beamR, normAngle(c.angle));
            frag.push(`<path class="outer-arc" d="${arc}" style="--arc-color:${territory.accent}"></path>`);
            frag.push(`<path id="${pathId}" class="label-path" d="${labelArc}"></path>`);
            frag.push(`<text><textPath href="#${pathId}" startOffset="50%" text-anchor="middle">${esc(territory.label).toUpperCase()}</textPath></text>`);
            frag.push(`<path class="sector-guide" d="${arcPath(cx, cy, guideR, c.start + 6, c.end - 6)}"></path>`);
            frag.push(`<path class="sector-beam" d="${beam}" style="--beam-color:${territory.accent}"></path>`);
        });
        // Archipel inner orbit
        frag.push(`<path class="outer-arc" d="${arcPath(cx, cy, 190, 205, 335)}" style="--arc-color:#f3d66f;stroke-width:4;stroke-dasharray:5 12;opacity:.6"></path>`);
        const ap = arcPath(cx, cy, 175, 208, 332);
        frag.push(`<path id="fluxArchipelLabel" class="label-path" d="${ap}"></path>`);
        frag.push(`<text style="font-size:10px;letter-spacing:5px;opacity:.6"><textPath href="#fluxArchipelLabel" startOffset="50%" text-anchor="middle">ARCHIPEL</textPath></text>`);
        svg.innerHTML = frag.join('');
    }

    function drawTerritoryTriggers(){
        territoryLayer.innerHTML = '';
        order.forEach(id => {
            const territory = territoryById[id];
            if (!territory) return;
            const angle = config[id].angle;
            const pos = polar(50, 50, 31.5, angle); // percentages
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'flux-sector-trigger';
            button.dataset.id = id;
            button.style.left = `${pos.x}%`;
            button.style.top = `${pos.y}%`;
            button.style.setProperty('--accent', territory.accent);
            button.setAttribute('aria-pressed', 'false');
            button.innerHTML = `<span class="flux-sector-trigger__halo"><span class="flux-sector-trigger__name">${esc(territory.label)}</span></span><span class="flux-sector-trigger__type">${(territory.nodes || []).length} phénomènes</span>`;
            button.addEventListener('click', () => selectTerritory(id, button));
            territoryLayer.appendChild(button);
        });
        archipelTrigger.addEventListener('click', () => selectTerritory(extra, archipelTrigger));
    }

    function wake(panel, accent){
        panel.style.setProperty('--accent', accent || 'currentColor');
        panel.classList.remove('is-awake');
        requestAnimationFrame(() => panel.classList.add('is-awake'));
    }

    function clearSelectionUI(){
        territoryLayer.querySelectorAll('.flux-sector-trigger').forEach(btn => {
            btn.classList.remove('is-active');
            btn.setAttribute('aria-pressed','false');
        });
        archipelTrigger.classList.remove('is-active');
        archipelTrigger.setAttribute('aria-pressed','false');
        phenomenaLayer.innerHTML = '';
    }

    function getPhenomenonPositions(territoryId, count){
        /*
         * Petits marqueurs numérotés : positions fixes et aérées par secteur.
         * Le nom complet est dans le panneau de lecture, donc aucun texte long
         * ne peut désormais entrer en collision dans la carte.
         */
        const layouts = {
            ocean: [
                {x:30,y:34},{x:27,y:44},{x:27,y:56},{x:31,y:66}
            ],
            ciel: [
                {x:38,y:31},{x:46,y:28},{x:54,y:28},{x:62,y:31}
            ],
            humanite: [
                {x:70,y:34},{x:73,y:44},{x:73,y:56},{x:69,y:66}
            ],
            terre: [
                {x:67,y:68},{x:61,y:74},{x:54,y:77},{x:70,y:78}
            ],
            cosmos: [
                {x:33,y:68},{x:39,y:74},{x:46,y:77},{x:30,y:78}
            ],
            archipel: [
                {x:38,y:55},{x:50,y:67},{x:62,y:55},{x:50,y:34}
            ]
        };
        return (layouts[territoryId] || []).slice(0,count);
    }

    function renderPhenomena(territory){
        phenomenaLayer.innerHTML = '';
        const positions = getPhenomenonPositions(territory.id, (territory.nodes || []).length);
        (territory.nodes || []).forEach((node, index) => {
            const pos = positions[index] || {x:50, y:50};
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'flux-phenomenon';
            button.dataset.id = node.id;
            button.dataset.territory = territory.id;
            button.style.left = `${pos.x}%`;
            button.style.top = `${pos.y}%`;
            button.style.setProperty('--accent', territory.accent);
            button.setAttribute('aria-label', `${node.label} - ${node.kind}`);
            button.innerHTML = `<span class="flux-phenomenon__index">${String(index + 1).padStart(2,'0')}</span><span class="flux-phenomenon__label">${esc(node.label)}</span>`;
            button.addEventListener('click', () => selectNode(node.id));
            phenomenaLayer.appendChild(button);
            requestAnimationFrame(() => requestAnimationFrame(() => button.classList.add('is-visible')));
        });
    }

    function selectTerritory(id, sourceButton){
        const territory = territoryById[id];
        if (!territory) return;
        state.activeTerritory = id;
        state.activeNode = null;
        clearSelectionUI();
        if (sourceButton) {
            sourceButton.classList.add('is-active');
            sourceButton.setAttribute('aria-pressed','true');
        }
        renderPhenomena(territory);
        const nodeList = (territory.nodes || []).map((node,index) => `<button type="button" data-territory-node="${esc(node.id)}" style="--accent:${territory.accent}"><b>${String(index + 1).padStart(2,'0')}</b><span>${esc(node.label)}</span></button>`).join('');
        territoryDetail.innerHTML = `<p class="flux-detail-eyebrow">Territoire</p><h2>${esc(territory.label)}</h2><p>${esc(territory.summary)}</p><div class="flux-detail-meta"><span>${(territory.nodes || []).length} phénomènes essentiels</span>${territory.id === 'archipel' ? '<span>Couche relationnelle</span>' : '<span>Porte + Article</span>'}</div><div class="flux-territory-node-list" aria-label="Phénomènes de ${esc(territory.label)}">${nodeList}</div><div class="flux-detail-actions"><a class="flux-detail-action" href="${esc(territory.portal)}">Franchir la Porte</a><a class="flux-detail-action" href="${esc(territory.article)}">Lire l’Article</a></div>`;
        territoryDetail.querySelectorAll('[data-territory-node]').forEach(btn => btn.addEventListener('click', () => selectNode(btn.dataset.territoryNode)));
        phenomenonDetail.innerHTML = `<div class="flux-empty"><p class="flux-detail-eyebrow">Phénomène</p><strong>${esc(territory.label)} est ouvert</strong><p>Choisissez maintenant l’un des phénomènes révélés sur la carte pour voir son rôle, sa section d’article et les flux qu’il met en mouvement.</p></div>`;
        wake(territoryDetail, territory.accent);
        wake(phenomenonDetail, territory.accent);
        instruction.textContent = `${territory.label} est ouvert : choisissez maintenant un Phénomène`;
        if (mapStatus) mapStatus.textContent = `${territory.label} · ${(territory.nodes || []).length} phénomènes révélés`;
    }

    function selectNode(nodeId){
        const entry = nodeIndex.get(nodeId);
        if (!entry) return;
        const territory = entry.territory;
        if (state.activeTerritory !== territory.id) {
            const button = territory.id === extra ? archipelTrigger : territoryLayer.querySelector(`[data-id="${territory.id}"]`);
            selectTerritory(territory.id, button);
        }
        state.activeNode = nodeId;
        phenomenaLayer.querySelectorAll('.flux-phenomenon').forEach(btn => btn.classList.toggle('is-selected', btn.dataset.id === nodeId));
        const related = (entry.links || []).map(id => nodeIndex.get(id)).filter(Boolean);
        const relatedHtml = related.length ? `<div class="flux-related">${related.map(r => `<button type="button" data-node="${esc(r.id)}">${esc(r.label)}</button>`).join('')}</div>` : '';
        const linkTerritories = [...new Set(related.map(r => r.territory.label))];
        phenomenonDetail.innerHTML = `<p class="flux-detail-eyebrow">${esc(entry.kind)} · ${esc(territory.label)}</p><h2>${esc(entry.label)}</h2><p>${esc(entry.description)}</p><div class="flux-detail-meta"><span>${linkTerritories.length || 1} territoire${(linkTerritories.length || 1) > 1 ? 's' : ''} relié${(linkTerritories.length || 1) > 1 ? 's' : ''}</span><span>Section ciblée du corpus</span></div><div class="flux-detail-actions"><a class="flux-detail-action" href="${esc(entry.href)}">Voir le Phénomène</a></div>${relatedHtml}`;
        phenomenonDetail.querySelectorAll('[data-node]').forEach(btn => btn.addEventListener('click', () => selectNode(btn.dataset.node)));
        wake(phenomenonDetail, territory.accent);
        instruction.textContent = `${entry.label} : suivez maintenant ce qu’il met en mouvement`;
        if (mapStatus) mapStatus.textContent = `${territory.label} · phénomène ${String((territory.nodes || []).findIndex(n => n.id === nodeId) + 1).padStart(2,'0')} sélectionné`;
    }


    function resetMap(){
        state.activeTerritory = null;
        state.activeNode = null;
        clearSelectionUI();
        territoryDetail.innerHTML = `<div class="flux-empty"><p class="flux-detail-eyebrow">Territoire</p><strong>Commencez par une Porte</strong><p>Choisissez un territoire sur la carte circulaire. Vous ouvrirez son rôle, ses phénomènes majeurs et l’accès direct à la Porte comme à l’Article correspondant.</p></div>`;
        phenomenonDetail.innerHTML = `<div class="flux-empty"><p class="flux-detail-eyebrow">Phénomène</p><strong>Puis ouvrez un Flux</strong><p>Chaque phénomène donne accès à une explication, à la section exacte du corpus et à quelques passages vers d’autres territoires.</p></div>`;
        instruction.textContent = 'Choisissez un Territoire pour révéler ses Phénomènes';
        if (mapStatus) mapStatus.textContent = 'Vue d’ensemble · choisissez un territoire';
    }

    document.querySelectorAll('[data-map-node]').forEach(btn => btn.addEventListener('click', () => selectNode(btn.dataset.mapNode)));
    document.querySelectorAll('[data-map-territory]').forEach(btn => btn.addEventListener('click', () => {
        const id = btn.dataset.mapTerritory;
        const source = id === extra ? archipelTrigger : territoryLayer.querySelector(`[data-id="${id}"]`);
        selectTerritory(id, source);
    }));

    resetButton.addEventListener('click', resetMap);
    drawStaticMap();
    drawTerritoryTriggers();
})();
</script>
</body>
</html>
