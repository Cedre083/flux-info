<?php
if (!function_exists('renderArticleReadingTools')) {
function renderArticleReadingTools(array $config): void {
    $time = $config['time'] ?? '8 min';
    $summary = $config['summary'] ?? '';
    $learn = $config['learn'] ?? [];
    $level = $config['level'] ?? 'Vulgarisation Sourcée';
    ?>
    <aside class="article-reading-tools" aria-label="Résumé et repères de lecture">
        <div class="article-reading-tools__meta">
            <span><?= htmlspecialchars($time, ENT_QUOTES, 'UTF-8') ?> de lecture</span>
            <span><?= htmlspecialchars($level, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
        <div class="article-reading-tools__summary">
            <p class="article-reading-tools__kicker">En Bref</p>
            <p><?= htmlspecialchars($summary, ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <?php if ($learn): ?>
        <div class="article-reading-tools__learn">
            <p class="article-reading-tools__kicker">Trois Repères</p>
            <ul>
                <?php foreach ($learn as $item): ?><li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <details class="article-reading-tools__toc">
            <summary>Sommaire de l’Article</summary>
            <nav data-auto-toc aria-label="Sommaire de l’article"></nav>
        </details>
    </aside>
    <?php
}
}
?>
<style>
.article-reading-tools{max-width:900px;margin:42px auto 66px;padding:30px 32px 26px;border:1px solid color-mix(in srgb,currentColor 14%,transparent);border-radius:26px;background:color-mix(in srgb,currentColor 3%,transparent);color:inherit;text-align:left}
.article-reading-tools__meta{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:30px}
.article-reading-tools__meta span{display:inline-flex;align-items:center;min-height:32px;padding:7px 11px;border:1px solid color-mix(in srgb,currentColor 12%,transparent);border-radius:999px;font-size:.63rem;letter-spacing:.07em;text-transform:uppercase;opacity:.72}
.article-reading-tools__summary,.article-reading-tools__learn{padding:0 4px}
.article-reading-tools__summary{margin-bottom:26px}
.article-reading-tools__learn{margin-bottom:24px}
.article-reading-tools__kicker{margin:0 0 12px!important;font-size:.64rem!important;letter-spacing:.18em!important;text-transform:uppercase!important;opacity:.56!important}
.article-reading-tools__summary>p:last-child{margin:0!important;line-height:1.82!important;opacity:.86!important}
.article-reading-tools__learn ul{margin:0;padding-left:1.35rem}
.article-reading-tools__learn li{margin:.68rem 0;line-height:1.68;opacity:.82;padding-left:.18rem}
.article-reading-tools__toc{margin-top:4px;border-top:1px solid color-mix(in srgb,currentColor 11%,transparent);padding-top:20px}
.article-reading-tools__toc summary{cursor:pointer;list-style:none;font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;opacity:.72}
.article-reading-tools__toc summary::-webkit-details-marker{display:none}
.article-reading-tools__toc summary::after{content:' +';opacity:.6}
.article-reading-tools__toc[open] summary::after{content:' -'}
.article-reading-tools__toc nav{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:8px 14px;margin-top:14px}
.article-reading-tools__toc a{color:inherit;text-decoration:none;font-size:.78rem;line-height:1.4;padding:7px 9px;border-radius:12px;background:color-mix(in srgb,currentColor 3%,transparent);border:1px solid color-mix(in srgb,currentColor 8%,transparent);opacity:.78}
.article-reading-tools__toc a:hover,.article-reading-tools__toc a:focus-visible{opacity:1;border-color:color-mix(in srgb,currentColor 22%,transparent);outline:none}
body.reading-mode .article-reading-tools{background:color-mix(in srgb,currentColor 2%,transparent)}
@media(max-width:640px){.article-reading-tools{margin:34px auto 50px;padding:23px 20px 21px;border-radius:22px}.article-reading-tools__meta{margin-bottom:24px}.article-reading-tools__summary{margin-bottom:22px}.article-reading-tools__learn{margin-bottom:21px}.article-reading-tools__learn li{margin:.58rem 0;line-height:1.62}.article-reading-tools__toc{padding-top:18px}.article-reading-tools__toc nav{grid-template-columns:1fr}}
</style>
<script>
document.addEventListener('DOMContentLoaded',()=>{
  document.querySelectorAll('[data-auto-toc]').forEach(nav=>{
    const root=nav.closest('main')||document;
    const headings=[...root.querySelectorAll('h2')].filter(h=>!h.closest('.article-reading-tools')&&!h.closest('.flux-connections'));
    const used=new Set();
    headings.forEach((h,i)=>{
      if(!h.id){
        let base=(h.textContent||'section').trim().toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g,'').replace(/[^a-z0-9]+/g,'-').replace(/^-|-$/g,'')||`section-${i+1}`;
        let id=base,n=2;while(document.getElementById(id)||used.has(id)){id=`${base}-${n++}`;}h.id=id;used.add(id);
      }
      const a=document.createElement('a');a.href=`#${h.id}`;a.textContent=(h.textContent||'Section').trim();nav.appendChild(a);
    });
  });
});
</script>
