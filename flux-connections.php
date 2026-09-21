<?php
/**
 * Flux Info - Connexions V1
 * Graphe éditorial léger, rendu côté serveur et utilisable sans JavaScript.
 */

function renderFluxConnections(string $context): void
{
    static $stylesPrinted = false;

    $graphs = [
        'ocean' => [
            'accent' => '#7ecbff',
            'current' => 'Courants océaniques',
            'intro' => 'La circulation profonde ne reste pas confinée à l’océan : elle participe aux échanges de chaleur et d’eau qui se prolongent dans l’atmosphère, les sols et le vivant.',
            'relations' => [
                ['label' => 'Rivières atmosphériques', 'meta' => 'échange d’eau', 'href' => 'article-ciel-vents.php#rivieres-volantes'],
                ['label' => 'Sécheresse', 'meta' => 'déséquilibre climatique', 'href' => 'article-ciel-vents.php#secheresse'],
                ['label' => 'Sols', 'meta' => 'eau disponible', 'href' => 'article-terre-migrations.php#sols'],
                ['label' => 'Alimentation', 'meta' => 'dépendance du vivant', 'href' => 'article-humanite-vivant.php#alimentation'],
            ],
        ],
        'ciel' => [
            'accent' => '#64ffda',
            'current' => 'Atmosphère',
            'intro' => 'L’atmosphère redistribue chaleur et humidité. Ses mouvements relient directement l’océan aux précipitations, aux sols et aux activités humaines.',
            'relations' => [
                ['label' => 'Océan', 'meta' => 'source de chaleur et d’eau', 'href' => 'article-ocean-courants.php'],
                ['label' => 'Sols', 'meta' => 'réception des précipitations', 'href' => 'article-terre-migrations.php#sols'],
                ['label' => 'Agriculture', 'meta' => 'eau et saisonnalité', 'href' => 'article-terre-migrations.php#agriculture'],
                ['label' => 'Alimentation', 'meta' => 'conséquence humaine', 'href' => 'article-humanite-vivant.php#alimentation'],
            ],
        ],
        'terre' => [
            'accent' => '#78ff96',
            'current' => 'Sols et vivant',
            'intro' => 'Les sols transforment l’eau, la matière organique et les cycles biologiques en fertilité. Ce qui s’y produit remonte ensuite vers l’alimentation et les sociétés.',
            'relations' => [
                ['label' => 'Sécheresse', 'meta' => 'pression atmosphérique', 'href' => 'article-ciel-vents.php#secheresse'],
                ['label' => 'Agriculture', 'meta' => 'usage des cycles du vivant', 'href' => '#agriculture'],
                ['label' => 'Alimentation', 'meta' => 'flux vers l’humain', 'href' => 'article-humanite-vivant.php#alimentation'],
                ['label' => 'Société', 'meta' => 'dépendances systémiques', 'href' => 'article-humanite-vivant.php#societe'],
            ],
        ],
        'cosmos' => [
            'accent' => '#c8a0ff',
            'current' => 'Matière stellaire',
            'intro' => 'La matière observée sur Terre possède une histoire cosmique. Les éléments formés et recyclés dans l’Univers deviennent ensuite matière planétaire et matière du vivant.',
            'relations' => [
                ['label' => 'Premiers éléments', 'meta' => 'origine cosmique', 'href' => '#premiers-elements'],
                ['label' => 'Recyclage cosmique', 'meta' => 'dispersion de matière', 'href' => '#recyclage-cosmique'],
                ['label' => 'Sols', 'meta' => 'matière terrestre', 'href' => 'article-terre-migrations.php#sols'],
                ['label' => 'Corps vivant', 'meta' => 'chimie organisée', 'href' => 'article-humanite-vivant.php#corps-ecosysteme'],
            ],
        ],
        'humanite' => [
            'accent' => '#ffb4dc',
            'current' => 'Humanité',
            'intro' => 'Les sociétés humaines transforment des flux déjà présents dans le vivant : eau, nourriture, énergie, matière et information. Leurs effets repartent ensuite vers les milieux dont elles dépendent.',
            'relations' => [
                ['label' => 'Agriculture', 'meta' => 'origine matérielle', 'href' => 'article-terre-migrations.php#agriculture'],
                ['label' => 'Alimentation', 'meta' => 'flux biosphérique et social', 'href' => '#alimentation'],
                ['label' => 'Société', 'meta' => 'organisation des dépendances', 'href' => '#societe'],
                ['label' => 'Archipel', 'meta' => 'relier les conséquences', 'href' => 'article-archipel-conscience.php#signal-habitat'],
                ['label' => 'Dissociation', 'meta' => 'numérique et réel physique', 'href' => 'article-dissociation.php'],
            ],
        ],
        'archipel' => [
            'accent' => '#d4a5ff',
            'current' => 'Archipel',
            'intro' => 'Ici, la connexion elle-même devient le sujet. L’Archipel permet de repartir vers les cinq territoires sans les réduire à une seule chaîne linéaire.',
            'relations' => [
                ['label' => 'Océan', 'meta' => 'circulations profondes', 'href' => 'article-ocean-courants.php'],
                ['label' => 'Ciel', 'meta' => 'atmosphère et eau', 'href' => 'article-ciel-vents.php'],
                ['label' => 'Terre', 'meta' => 'sols et vivant', 'href' => 'article-terre-migrations.php'],
                ['label' => 'Cosmos', 'meta' => 'matière et énergie', 'href' => 'article-cosmos-etoiles.php'],
                ['label' => 'Humanité', 'meta' => 'sociétés et conscience', 'href' => 'article-humanite-vivant.php'],
            ],
        ],
    ];

    if (!isset($graphs[$context])) {
        return;
    }

    $graph = $graphs[$context];
    $accent = htmlspecialchars($graph['accent'], ENT_QUOTES, 'UTF-8');

    if (!$stylesPrinted) {
        $stylesPrinted = true;
        echo <<<'HTML'
<style>
.flux-connections{--fc-accent:currentColor;position:relative;margin:70px 0 82px;border-top:1px solid color-mix(in srgb,var(--fc-accent) 30%,transparent);border-bottom:1px solid color-mix(in srgb,var(--fc-accent) 18%,transparent);background:color-mix(in srgb,var(--fc-accent) 3.5%,transparent);color:inherit}
.flux-connections>summary{list-style:none;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:18px;padding:22px 6px;color:inherit;user-select:none}
.flux-connections__summary-copy{display:flex;flex-direction:column;gap:5px;min-width:0}
.flux-connections__summary-title{font-size:.78rem;letter-spacing:.16em;text-transform:uppercase;font-weight:500}
.flux-connections__summary-subtitle{font-size:.68rem;letter-spacing:.035em;text-transform:none;font-weight:300;opacity:.58}
.flux-connections>summary::-webkit-details-marker{display:none}
.flux-connections>summary::after{content:'+';display:grid;place-items:center;width:30px;height:30px;flex:0 0 30px;border:1px solid color-mix(in srgb,var(--fc-accent) 48%,transparent);border-radius:50%;font-size:1rem;line-height:1;color:var(--fc-accent);transition:transform .25s ease,background .25s ease}
.flux-connections[open]>summary::after{content:'−';transform:rotate(180deg);background:color-mix(in srgb,var(--fc-accent) 9%,transparent)}
.flux-connections>summary:hover,.flux-connections>summary:focus-visible{color:var(--fc-accent)}
.flux-connections>summary:focus-visible{outline:2px solid color-mix(in srgb,var(--fc-accent) 60%,transparent);outline-offset:5px;border-radius:8px}
.flux-connections__body{padding:0 6px 28px;animation:fcReveal .28s ease both}
.flux-connections__intro{max-width:760px;margin:0 auto 28px;text-align:center;opacity:.8;line-height:1.75}
.flux-connections__map{position:relative;display:grid;grid-template-columns:minmax(170px,230px) minmax(0,1fr);gap:28px;align-items:stretch;max-width:920px;margin:0 auto}
.flux-connections__current{display:flex;flex-direction:column;justify-content:center;align-items:center;min-height:150px;padding:22px;text-align:center;border:1px solid color-mix(in srgb,var(--fc-accent) 50%,transparent);border-radius:999px;background:color-mix(in srgb,var(--fc-accent) 8%,transparent);box-shadow:0 0 35px color-mix(in srgb,var(--fc-accent) 10%,transparent)}
.flux-connections__current small{display:block;margin-bottom:7px;font-size:.62rem;letter-spacing:.18em;text-transform:uppercase;opacity:.55}
.flux-connections__current strong{font-size:1rem;letter-spacing:.04em;color:var(--fc-accent);font-weight:500}
.flux-connections__links{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}
.flux-connections__link{position:relative;display:flex;flex-direction:column;justify-content:center;min-height:72px;padding:12px 16px 12px 22px;border:1px solid color-mix(in srgb,currentColor 13%,transparent);border-radius:13px;color:inherit;text-decoration:none;background:color-mix(in srgb,currentColor 2%,transparent);transition:transform .22s ease,border-color .22s ease,background .22s ease}
.flux-connections__link::before{content:'';position:absolute;left:9px;top:50%;width:5px;height:5px;border-radius:50%;background:var(--fc-accent);box-shadow:0 0 10px var(--fc-accent);transform:translateY(-50%)}
.flux-connections__link strong{font-size:.82rem;font-weight:500;letter-spacing:.02em}
.flux-connections__link span{margin-top:4px;font-size:.67rem;opacity:.56;line-height:1.35}
.flux-connections__link:hover,.flux-connections__link:focus-visible{transform:translateX(3px);border-color:color-mix(in srgb,var(--fc-accent) 45%,transparent);background:color-mix(in srgb,var(--fc-accent) 7%,transparent)}
.flux-connections__hint{margin:22px auto 0;text-align:center;font-size:.65rem;letter-spacing:.09em;opacity:.45}
body.reading-mode .flux-connections{background:transparent}
body.reading-mode .flux-connections__current,body.reading-mode .flux-connections__link{background:transparent;box-shadow:none}
@keyframes fcReveal{from{opacity:0;transform:translateY(-6px)}to{opacity:1;transform:none}}
@media(max-width:680px){.flux-connections{margin:55px 0 65px}.flux-connections>summary{padding:18px 2px}.flux-connections__summary-title{font-size:.7rem;letter-spacing:.12em}.flux-connections__summary-subtitle{font-size:.64rem}.flux-connections__body{padding:0 2px 22px}.flux-connections__map{grid-template-columns:1fr;gap:16px}.flux-connections__current{min-height:96px;border-radius:18px}.flux-connections__links{grid-template-columns:1fr}.flux-connections__link{min-height:64px}.flux-connections__intro{text-align:left;font-size:.94rem}}
@media(prefers-reduced-motion:reduce){.flux-connections__body,.flux-connections>summary::after,.flux-connections__link{animation:none!important;transition:none!important}}
</style>
HTML;
    }

    echo '<details class="flux-connections" style="--fc-accent:' . $accent . '">';
    echo '<summary><span class="flux-connections__summary-copy"><span class="flux-connections__summary-title">Suivre ce que cela met en Mouvement</span><span class="flux-connections__summary-subtitle">Causes, Conséquences et Implications</span></span></summary>';
    echo '<div class="flux-connections__body">';
    echo '<p class="flux-connections__intro">' . htmlspecialchars($graph['intro'], ENT_QUOTES, 'UTF-8') . '</p>';
    echo '<div class="flux-connections__map">';
    echo '<div class="flux-connections__current"><small>Phénomène actuel</small><strong>' . htmlspecialchars($graph['current'], ENT_QUOTES, 'UTF-8') . '</strong></div>';
    echo '<nav class="flux-connections__links" aria-label="Connexions liées à ' . htmlspecialchars($graph['current'], ENT_QUOTES, 'UTF-8') . '">';
    foreach ($graph['relations'] as $relation) {
        echo '<a class="flux-connections__link" href="' . htmlspecialchars($relation['href'], ENT_QUOTES, 'UTF-8') . '"><strong>' . htmlspecialchars($relation['label'], ENT_QUOTES, 'UTF-8') . '</strong><span>' . htmlspecialchars($relation['meta'], ENT_QUOTES, 'UTF-8') . '</span></a>';
    }
    echo '</nav></div>';
    echo '<p class="flux-connections__hint">Ouvrir une relation pour poursuivre le même flux dans un autre contexte</p>';
    echo '</div></details>';
}
