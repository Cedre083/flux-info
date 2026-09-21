<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

<style>
:root {
        --accent-color: #c8a0ff;
        --bg-header: rgba(10, 2, 20, 0.85);
        --glass-blur: blur(20px) saturate(160%);
    }

    /* MODE LECTURE: variante claire, élégante et mémorisée par le navigateur.
       Le thème original reste inchangé lorsque body ne porte pas .reading-mode. */
    body.reading-mode {
        background: #f4f1eb !important;
        color: #263238 !important;
        font-family: 'Inter', system-ui, sans-serif !important;
        font-size: 21px !important;
        line-height: 1.75 !important;
    }

    body.reading-mode::selection { background: #c9b8e8; color: #1d2530; }
    body.reading-mode .archipel-header {
        background: rgba(255, 253, 248, 0.94);
        border-color: rgba(53, 65, 75, 0.18);
        box-shadow: 0 12px 28px rgba(54, 49, 42, 0.16);
    }
    body.reading-mode .nav-item > a,
    body.reading-mode .dropbtn,
    body.reading-mode .mobile-wordmark { color: #405467; }
    body.reading-mode .nav-item:hover > a,
    body.reading-mode .dropdown:hover .dropbtn,
    body.reading-mode .nav-item > a:focus-visible,
    body.reading-mode .dropbtn:focus-visible { color: #172534; text-shadow: none; }
    body.reading-mode .dropdown-content {
        background: rgba(255, 253, 248, 0.98);
        border-color: rgba(53, 65, 75, 0.16);
        box-shadow: 0 18px 34px rgba(54, 49, 42, 0.16);
    }
    body.reading-mode .dropdown-content a { color: #405467; border-color: rgba(53, 65, 75, 0.08); }
    body.reading-mode .dropdown-content a:hover { background: #ece7f5; color: #513b78; }
    body.reading-mode .mobile-menu-toggle { color: #405467; }
    body.reading-mode .theme-toggle {
        color: #405467;
        background: #ebe5f4;
        border-color: rgba(81, 59, 120, 0.22);
    }
    body.reading-mode .theme-toggle:hover,
    body.reading-mode .theme-toggle:focus-visible { color: #fff; background: #624b86; border-color: #624b86; }
    body.reading-mode .index-halo,
    body.reading-mode .flux-halo,
    body.reading-mode .ocean-halo,
    body.reading-mode .sky-halo,
    body.reading-mode .earth-halo,
    body.reading-mode .cosmos-halo,
    body.reading-mode .human-halo,
    body.reading-mode .archipel-halo,
    body.reading-mode .article-archipel-halo,
    body.reading-mode .ocean-depth,
    body.reading-mode .cosmic-overlay,
    body.reading-mode .sim-overlay,
    body.reading-mode #indexCanvas,
    body.reading-mode #footerCanvas,
    body.reading-mode #fluxCanvas,
    body.reading-mode #starCanvas,
    body.reading-mode #windCanvas,
    body.reading-mode #oceanCanvas,
    body.reading-mode #oceanCurrents,
    body.reading-mode #ocean-waves,
    body.reading-mode #skyCanvas,
    body.reading-mode #earthCanvas,
    body.reading-mode #cosmosCanvas,
    body.reading-mode #humanCanvas,
    body.reading-mode #archipelCanvas,
    body.reading-mode #articleArchipelCanvas,
    body.reading-mode #articleHumanCanvas,
    body.reading-mode #fusionCanvas,
    body.reading-mode #serengeti-map-sim,
    body.reading-mode #tisseurCanvas { opacity: 0 !important; visibility: hidden; }
    body.reading-mode .main p,
    body.reading-mode .main li,
    body.reading-mode .main dd,
    body.reading-mode .main dt,
    body.reading-mode .main td,
    body.reading-mode .main th,
    body.reading-mode .container p,
    body.reading-mode .container li,
    body.reading-mode .container dd,
    body.reading-mode .container dt { color: #263238 !important; }
    body.reading-mode .main h1,
    body.reading-mode .main h2,
    body.reading-mode .main h3,
    body.reading-mode .main h4,
    body.reading-mode .container h1,
    body.reading-mode .container h2,
    body.reading-mode .container h3,
    body.reading-mode .container h4 { color: #263238 !important; }
    body.reading-mode .article-meta,
    body.reading-mode .highlight { color: #52616d !important; opacity: 1 !important; }
    body.reading-mode .ocean-sim,
    body.reading-mode .ocean-quiz,
    body.reading-mode #thermo-module,
    body.reading-mode .sky-simulator,
    body.reading-mode .sky-quiz,
    body.reading-mode .earth-quiz,
    body.reading-mode .earth-constraints,
    body.reading-mode .cosmos-constraints,
    body.reading-mode .fusion-simulator,
    body.reading-mode .human-simulator,
    body.reading-mode .human-quiz,
    body.reading-mode .archipel-simulator,
    body.reading-mode .constraints-module,
    .sources-note {
        max-width: 760px;
        margin: -18px auto 34px;
        padding: 15px 19px;
        color: color-mix(in srgb, currentColor 78%, transparent);
        background: color-mix(in srgb, currentColor 4.5%, transparent);
        border: 1px solid color-mix(in srgb, currentColor 11%, transparent);
        border-left: 3px solid color-mix(in srgb, currentColor 34%, transparent);
        border-radius: 0 12px 12px 0;
        box-shadow: inset 0 1px 0 color-mix(in srgb, currentColor 4%, transparent);
        font-size: 0.9rem;
        line-height: 1.7;
        text-align: left;
    }
    .sources-note strong { color: inherit; font-weight: 650; }
    .sources-note time { white-space: nowrap; }
    .source-citation {
        display: inline-block;
        margin-left: 0.18em;
        color: #356b68 !important;
        font-size: 0.68em;
        font-weight: 700;
        line-height: 1;
        text-decoration: none !important;
        vertical-align: super;
        border-bottom: 0 !important;
    }
    .source-citation:hover,
    .source-citation:focus-visible { color: #204d4a !important; text-decoration: underline !important; }
    .source-card:target { outline: 3px solid rgba(53, 107, 104, 0.38); outline-offset: 5px; }
    body.reading-mode .source-citation { color: #356b68 !important; }
    .source-preview[hidden] { display: none; }
    .source-preview {
        position: fixed; z-index: 100000; left: 50%; bottom: 24px;
        width: min(460px, calc(100vw - 32px)); transform: translate(-50%, 14px);
        opacity: 0; pointer-events: none; transition: opacity .2s ease, transform .2s ease;
    }
    .source-preview.is-visible { transform: translate(-50%, 0); opacity: 1; pointer-events: auto; }
    .source-preview__panel { padding: 18px 20px; color: #263238; background: rgba(255,253,248,.98); border: 1px solid rgba(53,107,104,.28); border-radius: 16px; box-shadow: 0 18px 42px rgba(30,45,50,.24); backdrop-filter: blur(16px); }
    .source-preview__eyebrow { margin: 0 0 5px; color: #356b68; font-size: .72rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; }
    .source-preview h3 { margin: 0 0 7px; color: #263238; font-size: 1rem; font-weight: 650; }
    .source-preview p:not(.source-preview__eyebrow) { margin: 0 0 14px; color: #52616d; font-size: .86rem; line-height: 1.5; }
    .source-preview__actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
    .source-preview__actions a, .source-preview__actions button { padding: 8px 12px; border-radius: 999px; font: inherit; font-size: .78rem; cursor: pointer; text-decoration: none; }
    .source-preview__actions a { color: #fff !important; background: #356b68; }
    .source-preview__actions button { color: #2f3d45; background: #e8eef0; border: 1px solid rgba(53,65,75,.22); }
    @media (max-width: 600px) { .source-preview { bottom: 14px; } .source-preview__panel { padding: 15px 16px; } }
    body.reading-mode .sources-note {
        color: #52616d !important;
        background: #edf2f1 !important;
        border-left-color: #356b68 !important;
    }
    body.reading-mode .sources-note strong { color: #263238 !important; }

    body.reading-mode .sources-module,
    body.reading-mode .source-card {
        color: #263238 !important;
        background: #fffdf8 !important;
        border-color: rgba(53, 65, 75, 0.18) !important;
        box-shadow: 0 10px 28px rgba(54, 49, 42, 0.08) !important;
        backdrop-filter: none !important;
    }
    body.reading-mode .source-card,
    body.reading-mode .ocean-constraint-card,
    body.reading-mode .constraint-card,
    body.reading-mode .earth-constraint-card,
    body.reading-mode .path-card,
    body.reading-mode .site-card,
    body.reading-mode .resource-panel,
    body.reading-mode .definition-dialog__panel {
        color: #263238 !important;
        background: #f8f5ef !important;
        border-color: rgba(53, 65, 75, 0.16) !important;
        box-shadow: 0 6px 18px rgba(54, 49, 42, 0.06) !important;
    }
    body.reading-mode .source-card h4,
    body.reading-mode .source-card p,
    body.reading-mode .ocean-constraint-card h3,
    body.reading-mode .ocean-constraint-card p,
    body.reading-mode .constraint-card h3,
    body.reading-mode .constraint-card p,
    body.reading-mode .earth-constraint-card h3,
    body.reading-mode .earth-constraint-card p { color: #263238 !important; opacity: 1 !important; }
    body.reading-mode button:not(.theme-toggle),
    body.reading-mode input,
    body.reading-mode select,
    body.reading-mode textarea { color-scheme: light; }
    body.reading-mode input[type="range"] {
        accent-color: #356b68 !important;
        color: #2f3d45 !important;
    }
    body.reading-mode input[type="radio"],
    body.reading-mode input[type="checkbox"] {
        accent-color: #356b68 !important;
    }
    body.reading-mode input:not([type="radio"]):not([type="checkbox"]):not([type="range"]),
    body.reading-mode select,
    body.reading-mode textarea {
        color: #2f3d45 !important;
        background: #fffdf8 !important;
        border-color: rgba(53, 65, 75, 0.32) !important;
    }
    body.reading-mode input::placeholder,
    body.reading-mode textarea::placeholder { color: #687781 !important; opacity: 1 !important; }
    body.reading-mode label { color: #2f3d45 !important; opacity: 1 !important; }
    body.reading-mode .main .quiz-btn,
    body.reading-mode .main .sky-quiz button,
    body.reading-mode .main .ocean-quiz button,
    body.reading-mode .main #playBtn,
    body.reading-mode .main .zone-btn,
    body.reading-mode .main button[type="submit"] {
        color: #fff !important;
        background: #356b68 !important;
        border-color: #356b68 !important;
        box-shadow: 0 6px 16px rgba(53, 107, 104, 0.18) !important;
        text-shadow: none !important;
    }
    body.reading-mode .main .quiz-btn:hover,
    body.reading-mode .main .sky-quiz button:hover,
    body.reading-mode .main .ocean-quiz button:hover,
    body.reading-mode .main #playBtn:hover,
    body.reading-mode .main .zone-btn:hover,
    body.reading-mode .main button[type="submit"]:hover {
        color: #fff !important;
        background: #204d4a !important;
        border-color: #204d4a !important;
    }
    body.reading-mode .main .glossary-dialog-actions button,
    body.reading-mode .main .ocean-glossary-dialog-actions button,
    body.reading-mode .main .earth-glossary-dialog-actions button,
    body.reading-mode .main .term-dialog button,
    body.reading-mode .main .definition-dialog__close {
        color: #2f3d45 !important;
        background: #e8eef0 !important;
        border-color: rgba(53, 65, 75, 0.28) !important;
    }
    body.reading-mode .ocean-glossary-dialog,
    body.reading-mode .definition-dialog__panel {
        color: #263238 !important;
        background: #fffdf8 !important;
        border-color: #a28bc4 !important;
    }
    body.reading-mode .ocean-glossary-dialog h3,
    body.reading-mode .ocean-glossary-dialog p,
    body.reading-mode .definition-dialog__panel h3,
    body.reading-mode .definition-dialog__panel p { color: #263238 !important; }
    body.reading-mode .glossary-term,
    body.reading-mode .ocean-glossary-term,
    body.reading-mode .earth-glossary-term {
        color: #356b68 !important;
        background: transparent !important;
        border-bottom-color: #4f8c86 !important;
        text-shadow: none !important;
    }
    body.reading-mode .glossary-term:hover,
    body.reading-mode .glossary-term:focus-visible,
    body.reading-mode .ocean-glossary-term:hover,
    body.reading-mode .ocean-glossary-term:focus-visible,
    body.reading-mode .earth-glossary-term:hover,
    body.reading-mode .earth-glossary-term:focus-visible {
        color: #204d4a !important;
        border-bottom-color: #204d4a !important;
    }
    body.reading-mode .glossary-dialog,
    body.reading-mode .earth-glossary-dialog {
        color: #263238 !important;
        background: #fffdf8 !important;
        border-color: #5b948e !important;
    }
    body.reading-mode .glossary-dialog h3,
    body.reading-mode .glossary-dialog p,
    body.reading-mode .earth-glossary-dialog h3,
    body.reading-mode .earth-glossary-dialog p { color: #263238 !important; }
    body.reading-mode h1,
    body.reading-mode h2,
    body.reading-mode h3,
    body.reading-mode .subtitle { color: #263238 !important; text-shadow: none !important; }
    body.reading-mode .subtitle { opacity: 0.78 !important; }
    body.reading-mode .manifesto,
    body.reading-mode .main,
    body.reading-mode .container { color: #263238 !important; }
    body.reading-mode .manifesto { border-left-color: #b7a5d3 !important; }
    body.reading-mode .door,
    body.reading-mode .card,
    body.reading-mode .panel,
    body.reading-mode .content-card {
        color: #263238 !important;
        background: rgba(255, 253, 248, 0.82) !important;
        border-color: rgba(53, 65, 75, 0.16) !important;
        box-shadow: 0 8px 24px rgba(54, 49, 42, 0.07) !important;
        backdrop-filter: none !important;
    }
    body.reading-mode .door:hover { background: #fffdf8 !important; border-color: #a28bc4 !important; }
    body.reading-mode .door-experience { color: #52616d !important; opacity: 1 !important; }
    body.reading-mode .door-portal,
    body.reading-mode .door-article,
    body.reading-mode a { color: #574079; }
    body.reading-mode .door-article:hover,
    body.reading-mode .door-article:focus-visible,
    body.reading-mode a:hover { color: #2d5f67; text-shadow: none; }
    body.reading-mode img { filter: saturate(0.9); }
    body.reading-mode .support-ecosystem { background: #e8edf0 !important; color: #263238 !important; }
    body.reading-mode footer { background: #e8edf0 !important; color: #263238 !important; }

    /* COUCHE GLOBALE DE CONTRASTE
       Certaines pages contiennent encore des couleurs définies directement dans
       leur HTML. Ces règles, limitées à .reading-mode, les rendent lisibles sans
       toucher au thème original. */
    body.reading-mode .main,
    body.reading-mode .container {
        --reading-ink: #2f3d45;
        --reading-muted: #52616d;
        --reading-link: #3f5d78;
        --reading-accent: #356b68;
        color: var(--reading-ink) !important;
    }
    body.reading-mode .main p,
    body.reading-mode .main li,
    body.reading-mode .main small,
    body.reading-mode .main label,
    body.reading-mode .main dt,
    body.reading-mode .main dd,
    body.reading-mode .main blockquote,
    body.reading-mode .container p,
    body.reading-mode .container li,
    body.reading-mode .container small,
    body.reading-mode .container label,
    body.reading-mode .container dt,
    body.reading-mode .container dd,
    body.reading-mode .container blockquote {
        color: var(--reading-ink) !important;
        opacity: 1 !important;
        text-shadow: none !important;
    }
    body.reading-mode .main h1,
    body.reading-mode .main h2,
    body.reading-mode .main h3,
    body.reading-mode .main h4,
    body.reading-mode .container h1,
    body.reading-mode .container h2,
    body.reading-mode .container h3,
    body.reading-mode .container h4 {
        color: #2c3d49 !important;
        opacity: 1 !important;
        text-shadow: none !important;
    }
    body.reading-mode .main a,
    body.reading-mode .container a {
        color: var(--reading-link) !important;
        opacity: 1 !important;
        text-shadow: none !important;
    }
    body.reading-mode .main button:not(.theme-toggle),
    body.reading-mode .container button:not(.theme-toggle) {
        color: var(--reading-accent) !important;
        text-shadow: none !important;
    }
    /* Priorité aux styles inline trop pâles: le sélecteur reste limité au contenu. */
    body.reading-mode .main [style*="color"],
    body.reading-mode .container [style*="color"] {
        color: var(--reading-ink) !important;
        opacity: 1 !important;
        text-shadow: none !important;
    }
    body.reading-mode .main a[style*="color"],
    body.reading-mode .container a[style*="color"] { color: var(--reading-link) !important; }
    body.reading-mode .main h1[style*="color"],
    body.reading-mode .main h2[style*="color"],
    body.reading-mode .main h3[style*="color"],
    body.reading-mode .main h4[style*="color"],
    body.reading-mode .container h1[style*="color"],
    body.reading-mode .container h2[style*="color"],
    body.reading-mode .container h3[style*="color"],
    body.reading-mode .container h4[style*="color"] { color: #2c3d49 !important; }
    body.reading-mode .main [style*="opacity"],
    body.reading-mode .container [style*="opacity"] { opacity: 1 !important; }
    body.reading-mode .main .term-trigger,
    body.reading-mode .main .glossary-term,
    body.reading-mode .main .ocean-glossary-term,
    body.reading-mode .main .earth-glossary-term { color: var(--reading-accent) !important; }

    /* Ces boutons ont un fond vert: leur texte doit rester blanc, malgré la règle générique des boutons. */
    body.reading-mode .main .quiz-btn,
    body.reading-mode .main .sky-quiz button,
    body.reading-mode .main .ocean-quiz button,
    body.reading-mode .main #playBtn,
    body.reading-mode .main .zone-btn,
    body.reading-mode .main button[type="submit"] { color: #fff !important; }
    body.reading-mode .main button.zone-btn,
    body.reading-mode .main button.quiz-btn,
    body.reading-mode .main button#playBtn { color: #fff !important; }

    /* Page de soutien: ses composants ne sont pas contenus dans .main/.container. */
    body.reading-mode .support-ecosystem,
    body.reading-mode .support-container { color: #2f3d45 !important; }
    body.reading-mode .support-ecosystem h1,
    body.reading-mode .support-ecosystem h2,
    body.reading-mode .support-ecosystem h3,
    body.reading-mode .support-ecosystem p,
    body.reading-mode .support-ecosystem li,
    body.reading-mode .support-ecosystem .sharing-highlight,
    body.reading-mode .support-ecosystem .thank-you {
        color: #2f3d45 !important;
        opacity: 1 !important;
        text-shadow: none !important;
    }
    body.reading-mode .support-ecosystem .support-card {
        color: #2f3d45 !important;
        background: rgba(255, 253, 248, 0.86) !important;
        border-color: rgba(63, 76, 88, 0.16) !important;
        box-shadow: 0 8px 22px rgba(54, 63, 72, 0.08) !important;
        backdrop-filter: none !important;
    }
    body.reading-mode .support-ecosystem .support-price { color: #356b68 !important; }
    body.reading-mode .support-ecosystem .support-paypal-button {
        color: #29444c !important;
        background: #dceeea !important;
        border-color: #7eaaa1 !important;
        box-shadow: none !important;
    }
    body.reading-mode .support-ecosystem .support-paypal-button:hover,
    body.reading-mode .support-ecosystem .support-paypal-button:focus-visible {
        color: #fff !important;
        background: #356b68 !important;
        border-color: #356b68 !important;
    }
    body.reading-mode .support-ecosystem .support-payment-note {
        color: #405467 !important;
        background: #e6eef0 !important;
        border-color: rgba(63, 76, 88, 0.18) !important;
    }
    body.reading-mode .support-ecosystem .social-grid a {
        color: #574079 !important;
        background: #eee9f4 !important;
        border: 1px solid rgba(89, 72, 111, 0.2);
    }
    body.reading-mode .support-ecosystem .social-grid a:hover { color: #fff !important; background: #624b86 !important; }
    body.reading-mode .support-ecosystem .separator-line { background: rgba(63, 76, 88, 0.18) !important; }

    .theme-toggle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        min-height: 34px;
        margin: 0 5px 0 2px;
        padding: 0 12px;
        color: #d8c9ef;
        background: rgba(200, 160, 255, 0.10);
        border: 1px solid rgba(200, 160, 255, 0.28);
        border-radius: 30px;
        font: inherit;
        font-size: 0.68rem;
        letter-spacing: 0.8px;
        cursor: pointer;
        white-space: nowrap;
        transition: color .25s ease, background .25s ease, border-color .25s ease, transform .25s ease;
    }
    .theme-toggle:hover,
    .theme-toggle:focus-visible { color: #fff; background: rgba(200, 160, 255, 0.24); border-color: #c8a0ff; transform: translateY(-1px); outline: none; }
    .theme-toggle .theme-icon { font-size: 0.9rem; line-height: 1; }
    @media (max-width: 850px) {
        .theme-toggle { width: 100%; min-height: 46px; margin: 4px 0; font-size: 0.76rem; }
    }

    html, body {
        margin: 0; padding: 0; width: 100%;
        font-family: 'Inter', sans-serif;
        background: #050014; color: #f3eaff;
        font-size: 23px; line-height: 1.8;
        -webkit-font-smoothing: antialiased;
    }

    body { padding-top: 100px; }

    h1 { font-weight: 100; letter-spacing: 2px; text-align: center; margin-bottom: 1.2em; }
    h2 { font-weight: 200; letter-spacing: 1px; text-align: center; margin-top: 3em; }

    /* MENU FLOTTANT */
    .archipel-header {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--bg-header);
        backdrop-filter: var(--glass-blur);
        -webkit-backdrop-filter: var(--glass-blur);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 50px;
        z-index: 99999;
        box-shadow: 0 15px 35px rgba(0,0,0,0.6);
    }

    .nav-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 55px;
        padding: 0 10px;
        position: relative;
    }

    .nav-menu { display: flex; align-items: stretch; list-style: none; margin: 0; padding: 0; flex-wrap: nowrap; }
    .nav-menu > .nav-item,
    .nav-menu > .dropdown { flex: 0 0 auto; }

    .mobile-menu-toggle {
        display: none;
        width: 44px;
        height: 40px;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 5px;
        color: var(--accent-color);
        background: transparent;
        border: 0;
        cursor: pointer;
    }

    .mobile-menu-toggle span {
        display: block;
        width: 22px;
        height: 1px;
        background: currentColor;
        transition: transform 0.2s ease, opacity 0.2s ease;
    }

    .mobile-wordmark {
        display: none;
        color: var(--accent-color);
        font-size: 0.78rem;
        font-weight: 400;
        letter-spacing: 0.22em;
        text-decoration: none;
        text-transform: uppercase;
    }

    .nav-item > a, .dropbtn {
        display: flex;
        align-items: center;
        height: 100%;
        color: var(--accent-color);
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.8rem;
        font-weight: 400;
        letter-spacing: 2px;
        padding: 0 25px;
        transition: 0.3s;
        background: none; border: none; cursor: pointer;
        white-space: nowrap;
        min-width: max-content;
    }

    .nav-item:hover > a, .dropdown:hover .dropbtn { 
        color: #fff; 
        text-shadow: 0 0 10px var(--accent-color); 
    }

    .nav-item > a:focus-visible,
    .dropbtn:focus-visible,
    .mobile-menu-toggle:focus-visible {
        outline: 1px solid #ffffff;
        outline-offset: -3px;
        color: #ffffff;
    }

    .theme-item { display: flex; align-items: center; }

    .support-item {
        display: flex;
        align-items: center;
        padding: 0 7px 0 2px;
    }

    .support-item > a {
        align-self: center;
        justify-content: center;
        box-sizing: border-box;
        min-width: 132px;
        min-height: 36px;
        height: 36px;
        padding: 0 14px;
        color: #07180e;
        background: linear-gradient(135deg, #b6ffbf 0%, #63e987 52%, #29bd60 100%);
        border: 1px solid rgba(205, 255, 215, 0.85);
        border-radius: 40px;
        box-shadow: 0 0 0 1px rgba(27, 145, 69, 0.2), 0 5px 15px rgba(72, 225, 125, 0.25);
        font-size: 0.64rem;
        letter-spacing: 1.1px;
        white-space: nowrap;
        text-shadow: none;
        transition: color 0.2s ease, background 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
    }

    .support-item > a:hover,
    .support-item > a:focus-visible {
        color: #021008;
        background: linear-gradient(135deg, #d7ffdb 0%, #85f7a2 52%, #45d87a 100%);
        border-color: #ffffff;
        box-shadow: 0 0 0 1px rgba(190, 255, 204, 0.45), 0 8px 22px rgba(72, 225, 125, 0.48);
        text-shadow: none;
        transform: translateY(-1px);
    }

    @keyframes support-pulse {
        0%, 100% { box-shadow: 0 0 0 1px rgba(27, 145, 69, 0.2), 0 5px 15px rgba(72, 225, 125, 0.25); }
        50% { box-shadow: 0 0 0 1px rgba(190, 255, 204, 0.45), 0 7px 24px rgba(72, 225, 125, 0.45); }
    }

    @media (prefers-reduced-motion: no-preference) {
        .support-item > a { animation: support-pulse 2.8s ease-in-out infinite; }
    }

    /* DROPDOWN */
    .dropdown { position: relative; display: flex; align-items: center; }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%; left: 50%;
        transform: translateX(-50%);
        background: var(--bg-header);
        backdrop-filter: var(--glass-blur);
        min-width: 240px;
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 20px 40px rgba(0,0,0,0.8);
        padding: 10px 0;
        margin-top: 5px;
        flex-direction: column;
    }

    .dropdown-content::before {
        content: "";
        position: absolute;
        top: -15px; left: 0; right: 0;
        height: 20px;
    }

    .dropdown-content a {
        color: #ffffff;
        padding: 12px 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 300;
        letter-spacing: 1px;
        transition: 0.3s;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .dropdown-content a:last-child { border-bottom: none; }

    .dropdown-content a:hover {
        background: rgba(200, 160, 255, 0.1);
        color: var(--accent-color);
    }

    @media (min-width: 851px) {
        .dropdown:hover .dropdown-content { display: flex; }
    }

    /* MOBILE - menu déclenché, sans compression des libellés */
    @media (max-width: 850px) {
        body { padding-top: 82px; }
        .archipel-header {
            top: 12px;
            width: calc(100% - 28px);
            max-width: 560px;
            border-radius: 22px;
        }
        .nav-container {
            height: 54px;
            padding: 0 8px 0 14px;
        }
        .mobile-wordmark { display: inline-flex; align-items: center; min-height: 44px; }
        .mobile-menu-toggle { display: inline-flex; }
        .nav-menu {
            display: none;
            position: absolute;
            top: calc(100% + 9px);
            left: 0;
            right: 0;
            max-height: min(72vh, 560px);
            overflow-y: auto;
            flex-direction: column;
            align-items: stretch;
            padding: 8px;
            background: rgba(10, 2, 20, 0.97);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.65);
        }
        .archipel-header.menu-open .nav-menu { display: flex; }
        .nav-item,
        .dropdown { width: 100%; display: block; }
        .nav-item > a,
        .dropbtn {
            justify-content: space-between;
            width: 100%;
            min-width: 0;
            min-height: 50px;
            height: auto;
            padding: 0 16px;
            font-size: 0.78rem;
            letter-spacing: 1.6px;
        }
        .support-item { display: block; padding: 0; }
        .support-item > a {
            justify-content: center;
            min-width: 0;
            min-height: 48px;
            height: 48px;
            margin-top: 4px;
            padding: 0 16px;
            font-size: 0.78rem;
            letter-spacing: 1.6px;
        }
        .dropdown-content {
            display: none;
            position: static;
            width: auto;
            min-width: 0;
            margin: 0 8px 6px;
            padding: 0;
            transform: none;
            background: rgba(200, 160, 255, 0.08);
            border-radius: 12px;
            box-shadow: none;
        }
        .dropdown.mobile-open .dropdown-content { display: flex; }
        .dropdown-content::before { display: none; }
        .dropdown-content a {
            padding: 12px 16px;
            font-size: 0.72rem;
        }
        .archipel-header.menu-open .mobile-menu-toggle span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
        .archipel-header.menu-open .mobile-menu-toggle span:nth-child(2) { opacity: 0; }
        .archipel-header.menu-open .mobile-menu-toggle span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }
    }


/* ========================= */
/* LIGHTBOX IMAGES DE CONTENU */
/* ========================= */
.main img.flux-zoomable,
main img.flux-zoomable,
.container img.flux-zoomable {
    cursor: zoom-in;
    transition: transform .28s ease, filter .28s ease, box-shadow .28s ease;
}
.main img.flux-zoomable:hover,
main img.flux-zoomable:hover,
.container img.flux-zoomable:hover {
    transform: translateY(-2px) scale(1.012);
    filter: brightness(1.035);
    box-shadow: 0 16px 38px rgba(0,0,0,.24);
}
.flux-lightbox {
    position: fixed;
    inset: 0;
    z-index: 250000;
    display: grid;
    place-items: center;
    padding: clamp(18px, 4vw, 54px);
    background: rgba(4, 2, 12, .88);
    backdrop-filter: blur(14px) saturate(115%);
    -webkit-backdrop-filter: blur(14px) saturate(115%);
    opacity: 0;
    visibility: hidden;
    transition: opacity .28s ease, visibility .28s ease;
}
.flux-lightbox.is-open { opacity: 1; visibility: visible; }
.flux-lightbox__figure {
    position: relative;
    width: min(1180px, 96vw);
    max-height: 91vh;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    transform: scale(.955) translateY(10px);
    opacity: 0;
    transition: transform .34s cubic-bezier(.2,.75,.25,1), opacity .28s ease;
}
.flux-lightbox.is-open .flux-lightbox__figure { transform: scale(1) translateY(0); opacity: 1; }
.flux-lightbox__image {
    display: block;
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: calc(91vh - 76px);
    object-fit: contain;
    border-radius: 16px;
    box-shadow: 0 28px 90px rgba(0,0,0,.55), 0 0 0 1px rgba(255,255,255,.12);
}
.flux-lightbox__caption {
    max-width: 900px;
    margin: 0;
    color: rgba(255,255,255,.86);
    font-size: clamp(.78rem, 1.4vw, .96rem);
    line-height: 1.45;
    text-align: center;
}
.flux-lightbox__close {
    position: fixed;
    top: 18px;
    right: 20px;
    width: 46px;
    height: 46px;
    border: 1px solid rgba(255,255,255,.24);
    border-radius: 999px;
    color: #fff;
    background: rgba(10,6,22,.56);
    font: inherit;
    font-size: 1.45rem;
    line-height: 1;
    cursor: pointer;
    backdrop-filter: blur(10px);
    transition: transform .2s ease, background .2s ease;
}
.flux-lightbox__close:hover, .flux-lightbox__close:focus-visible {
    transform: scale(1.07);
    background: rgba(90,55,125,.74);
    outline: none;
}
body.flux-lightbox-open { overflow: hidden; }
body.reading-mode .flux-lightbox { background: rgba(24, 22, 28, .88); }
@media (prefers-reduced-motion: reduce) {
    .main img.flux-zoomable, main img.flux-zoomable, .container img.flux-zoomable,
    .flux-lightbox, .flux-lightbox__figure, .flux-lightbox__close { transition: none !important; }
}



/* ==========================================================
   FINITIONS ÉDITORIALES COMMUNES AUX EXPÉRIENCES
   Comprendre -> manipuler -> observer -> vérifier
   ========================================================== */
.article-experience-lead {
    max-width: 820px;
    margin: 88px auto 26px;
    text-align: center;
    color: inherit;
}
.article-experience-lead__kicker,
.article-knowledge-bridge__kicker {
    margin: 0 0 10px;
    font-size: .68rem;
    line-height: 1.4;
    letter-spacing: .22em;
    text-transform: uppercase;
    color: inherit;
    opacity: .58;
}
.article-experience-lead h2,
.article-experience-lead h3 {
    margin: 0 0 14px;
    color: inherit;
}
.article-experience-lead > p:not(.article-experience-lead__kicker) {
    max-width: 680px;
    margin: 0 auto;
    color: inherit;
    opacity: .78;
}
.experience-action {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 18px;
    padding: 9px 14px;
    border-radius: 999px;
    border: 1px solid color-mix(in srgb, currentColor 15%, transparent);
    background: color-mix(in srgb, currentColor 4%, transparent);
    color: inherit;
    font-size: .78rem;
    line-height: 1.45;
}
.experience-action strong {
    font-weight: 500;
    letter-spacing: .08em;
    text-transform: uppercase;
}
.article-knowledge-bridge {
    max-width: 760px;
    margin: 72px auto 20px;
    padding-top: 24px;
    text-align: center;
    border-top: 1px solid color-mix(in srgb, currentColor 11%, transparent);
    color: inherit;
}
.article-knowledge-bridge h3 {
    margin: 0 0 9px;
    color: inherit;
}
.article-knowledge-bridge p:last-child {
    margin: 0 auto;
    max-width: 650px;
    opacity: .72;
}
/* Les retours pédagogiques doivent rester sous les commandes, jamais au-dessus. */
.sim-consequences--inline {
    position: relative !important;
    inset: auto !important;
    z-index: 2;
}
/* Contrôles confortables sur écran tactile. */
input[type="range"] { touch-action: pan-y; }
@media (max-width: 700px) {
    .article-experience-lead { margin: 62px auto 20px; padding: 0 12px; }
    .experience-action { display: flex; width: fit-content; max-width: 100%; margin-left: auto; margin-right: auto; border-radius: 16px; }
    .article-knowledge-bridge { margin: 52px 14px 16px; padding-top: 20px; }
    .sim-consequences__chain { gap: 6px; }
    .sim-consequences__chain a { min-height: 38px; display: inline-flex; align-items: center; }
}
body.reading-mode .article-experience-lead,
body.reading-mode .article-knowledge-bridge,
body.reading-mode .experience-action { color: inherit; }
body.reading-mode .experience-action { background: color-mix(in srgb, currentColor 3%, transparent); }


    /* LIENS GLOBAUX : visibles sans dépendre du survol, sur ordinateur comme sur mobile. */
    body a[href],
    body a[href]:visited {
        text-decoration-line: underline !important;
        text-decoration-style: solid !important;
        text-decoration-thickness: max(1.5px, 0.08em) !important;
        text-underline-offset: 0.2em !important;
        text-decoration-skip-ink: auto;
        text-decoration-color: currentColor !important;
        opacity: 1 !important;
    }

    body a[href]:hover,
    body a[href]:focus-visible {
        text-decoration-thickness: max(2px, 0.11em) !important;
        text-underline-offset: 0.22em !important;
    }

    body a[href]:focus-visible {
        outline: 3px solid color-mix(in srgb, currentColor 58%, transparent) !important;
        outline-offset: 4px !important;
        border-radius: 4px;
    }

    body.reading-mode a[href],
    body.reading-mode a[href]:visited {
        color: #315f77 !important;
        text-decoration-color: #315f77 !important;
    }

    body.reading-mode a[href]:hover,
    body.reading-mode a[href]:focus-visible {
        color: #173f55 !important;
        text-decoration-color: #173f55 !important;
    }

    @media (max-width: 760px) {
        body a[href],
        body a[href]:visited {
            text-decoration-thickness: max(1.6px, 0.085em) !important;
            text-underline-offset: 0.22em !important;
        }
    }

    /* CARTES CLIQUABLES : une seule invitation soulignée pour éviter la surcharge visuelle. */
    body a.start-card[href],
    body a.start-card[href]:visited,
    body a.new-flux-card[href],
    body a.new-flux-card[href]:visited,
    body a.door-portal[href],
    body a.door-portal[href]:visited,
    body a.door-experience-link[href],
    body a.door-experience-link[href]:visited {
        text-decoration: none !important;
    }

    /* Six Portes de l'accueil : seul le lien final vers l'article reste souligné. */
    body a.door-article[href],
    body a.door-article[href]:visited {
        text-decoration-line: underline !important;
        text-decoration-style: solid !important;
        text-decoration-thickness: max(1.5px, 0.08em) !important;
        text-underline-offset: 0.22em !important;
        text-decoration-color: currentColor !important;
    }

    body a.door-article[href]:hover,
    body a.door-article[href]:focus-visible {
        text-decoration-thickness: max(2px, 0.11em) !important;
    }

    body a.start-card[href] .start-card__arrow,
    body a.new-flux-card[href] .new-flux-card__arrow {
        text-decoration-line: underline !important;
        text-decoration-style: solid !important;
        text-decoration-thickness: max(1.5px, 0.08em) !important;
        text-underline-offset: 0.22em !important;
        text-decoration-color: currentColor !important;
        opacity: .88 !important;
    }

    body a.start-card[href]:hover .start-card__arrow,
    body a.start-card[href]:focus-visible .start-card__arrow,
    body a.new-flux-card[href]:hover .new-flux-card__arrow,
    body a.new-flux-card[href]:focus-visible .new-flux-card__arrow {
        text-decoration-thickness: max(2px, 0.11em) !important;
        opacity: 1 !important;
    }

</style>

<header class="archipel-header">
    <nav class="nav-container">
        <a class="mobile-wordmark" href="index.php" aria-label="Retour à l’accueil Flux Info">Flux Info</a>
        <button class="mobile-menu-toggle" type="button" aria-label="Ouvrir le menu" aria-controls="primaryNavigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <ul class="nav-menu" id="primaryNavigation">

            <li class="nav-item"><a href="index.php">Accueil</a></li>

            <li class="dropdown" id="portesDropdown">
                <button class="dropbtn" aria-haspopup="true" aria-expanded="false">Les Portes ▾</button>
                <div class="dropdown-content" role="menu">
                    <a href="ocean.php" role="menuitem">Océan</a>
                    <a href="ciel.php" role="menuitem">Ciel</a>
                    <a href="terre.php" role="menuitem">Terre</a>
                    <a href="cosmos.php" role="menuitem">Cosmos</a>
                    <a href="humanite.php" role="menuitem">Humanité</a>
                    <a href="archipel.php" role="menuitem">Archipel</a>
                </div>
            </li>

            <li class="nav-item"><a href="carte-des-flux.php">Carte des Flux</a></li>

            <li class="nav-item"><a href="article-dissociation.php">Dissociation</a></li>

            <li class="nav-item"><a href="apropos.php">À Propos</a></li>

            <li class="nav-item theme-item"><button class="theme-toggle" type="button" aria-pressed="false" aria-label="Activer le mode lecture"><span class="theme-icon" aria-hidden="true">◐</span><span class="theme-label">Mode lecture</span></button></li>

            <li class="nav-item support-item"><a href="gardien.php">Nous soutenir</a></li>

        </ul>
    </nav>
</header>

<script>
(function() {
    const applyTheme = (reading) => {
        document.body.classList.toggle('reading-mode', reading);
        const themeButton = document.querySelector('.theme-toggle');
        if (themeButton) {
            themeButton.setAttribute('aria-pressed', String(reading));
            themeButton.setAttribute('aria-label', reading ? 'Désactiver le mode lecture': 'Activer le mode lecture');
            const label = themeButton.querySelector('.theme-label');
            const icon = themeButton.querySelector('.theme-icon');
            if (label) label.textContent = reading ? 'Thème original': 'Mode lecture';
            if (icon) icon.textContent = reading ? '✦': '◐';
        }
    };

    const initTheme = () => {
        const savedTheme = localStorage.getItem('flux-info-theme');
        const preferredTheme = window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches;
        applyTheme(savedTheme ? savedTheme === 'reading': false);
        const themeButton = document.querySelector('.theme-toggle');
        if (themeButton) {
            themeButton.addEventListener('click', () => {
                const reading = !document.body.classList.contains('reading-mode');
                applyTheme(reading);
                localStorage.setItem('flux-info-theme', reading ? 'reading': 'original');
            });
        }
    };

    const header = document.querySelector('.archipel-header');
    if (!header) {
        document.addEventListener('DOMContentLoaded', initTheme, { once: true });
        return;
    }
    initTheme();

    const menuToggle = header.querySelector('.mobile-menu-toggle');
    const menu = header.querySelector('.nav-menu');
    const dropdown = document.getElementById('portesDropdown');
    const btn = dropdown.querySelector('.dropbtn');
    const content = dropdown.querySelector('.dropdown-content');

    const closeMobileMenu = () => {
        header.classList.remove('menu-open');
        dropdown.classList.remove('mobile-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Ouvrir le menu');
        btn.setAttribute('aria-expanded', 'false');
    };

    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = header.classList.toggle('menu-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu': 'Ouvrir le menu');
        if (!isOpen) {
            dropdown.classList.remove('mobile-open');
            btn.setAttribute('aria-expanded', 'false');
        }
    });

    btn.addEventListener('click', (e) => {
        if (window.innerWidth <= 850) {
            e.preventDefault();
            e.stopPropagation();
            const isOpen = dropdown.classList.toggle('mobile-open');
            btn.setAttribute('aria-expanded', String(isOpen));
        }
    });

    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 850 && !header.contains(e.target)) {
            closeMobileMenu();
        }
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 850) closeMobileMenu();
        });
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 850) closeMobileMenu();
    });
})();
</script>

<script>
(function() {
    function initSourcePreview() {
        if (document.querySelector('.source-preview')) return;
        const citations = document.querySelectorAll('.source-citation');
        if (!citations.length || !document.body) return;

        const preview = document.createElement('div');
        preview.className = 'source-preview';
        preview.hidden = true;
        preview.setAttribute('role', 'dialog');
        preview.setAttribute('aria-label', 'Aperçu de la source');
        preview.innerHTML = '<div class="source-preview__panel"><p class="source-preview__eyebrow">Référence</p><h3></h3><p class="source-preview__description"></p><div class="source-preview__actions"><a target="_blank" rel="noopener noreferrer">Ouvrir la source ↗</a><button type="button">Fermer</button></div></div>';
        document.body.appendChild(preview);
        const eyebrow = preview.querySelector('.source-preview__eyebrow');
        const title = preview.querySelector('h3');
        const description = preview.querySelector('.source-preview__description');
        const externalLink = preview.querySelector('a');
        const close = preview.querySelector('button');
        let trigger = null;
        let closeTimer = null;

        function closePreview() {
            preview.classList.remove('is-visible');
            clearTimeout(closeTimer);
            closeTimer = setTimeout(() => { preview.hidden = true; }, 200);
            if (trigger) trigger.focus();
        }
        function openPreview(event) {
            event.preventDefault();
            const citation = event.currentTarget;
            const target = document.querySelector(citation.getAttribute('href'));
            if (!target) return;
            trigger = citation;
            const heading = target.querySelector('h4, h3');
            const text = target.querySelector('p');
            eyebrow.textContent = 'Référence ' + citation.textContent.trim();
            title.textContent = heading ? heading.textContent.trim(): 'Source documentaire';
            description.textContent = text ? text.textContent.trim(): 'Consulter la référence complète.';
            externalLink.href = target.getAttribute('href') || '#';
            clearTimeout(closeTimer);
            preview.hidden = false;
            requestAnimationFrame(() => preview.classList.add('is-visible'));
        }
        citations.forEach(citation => citation.addEventListener('click', openPreview));
        close.addEventListener('click', closePreview);
        document.addEventListener('keydown', event => { if (event.key === 'Escape' && !preview.hidden) closePreview(); });
        document.addEventListener('click', event => { if (!preview.hidden && !preview.contains(event.target) && !event.target.closest('.source-citation')) closePreview(); });
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initSourcePreview, { once: true });
    else initSourcePreview();
})();
</script>

<script>
(function() {
    function initImageLightbox() {
        if (!document.body || document.querySelector('.flux-lightbox')) return;

        const images = Array.from(document.querySelectorAll('main img, .main img, .container img')).filter((img) => {
            if (img.closest('header, footer, nav, .archipel-header, .footer-archipel')) return false;
            if (img.dataset.noLightbox !== undefined) return false;
            if (img.closest('a')) return false;
            const src = (img.currentSrc || img.src || '').toLowerCase();
            if (src.endsWith('.svg')) return false;
            return true;
        });

        if (!images.length) return;

        const lightbox = document.createElement('div');
        lightbox.className = 'flux-lightbox';
        lightbox.setAttribute('role', 'dialog');
        lightbox.setAttribute('aria-modal', 'true');
        lightbox.setAttribute('aria-label', 'Image agrandie');
        lightbox.innerHTML = '<button class="flux-lightbox__close" type="button" aria-label="Fermer l’image agrandie">×</button><figure class="flux-lightbox__figure"><img class="flux-lightbox__image" alt=""><figcaption class="flux-lightbox__caption"></figcaption></figure>';
        document.body.appendChild(lightbox);

        const enlarged = lightbox.querySelector('.flux-lightbox__image');
        const caption = lightbox.querySelector('.flux-lightbox__caption');
        const closeButton = lightbox.querySelector('.flux-lightbox__close');
        let trigger = null;

        function closeLightbox() {
            if (!lightbox.classList.contains('is-open')) return;
            lightbox.classList.remove('is-open');
            document.body.classList.remove('flux-lightbox-open');
            window.setTimeout(() => {
                enlarged.removeAttribute('src');
                if (trigger) trigger.focus({ preventScroll: true });
            }, 300);
        }

        function openLightbox(img) {
            trigger = img;
            const source = img.currentSrc || img.src;
            enlarged.src = source;
            enlarged.alt = img.alt || '';
            const text = (img.getAttribute('data-caption') || img.alt || '').trim();
            caption.textContent = text;
            caption.hidden = !text;
            document.body.classList.add('flux-lightbox-open');
            lightbox.classList.add('is-open');
            requestAnimationFrame(() => closeButton.focus({ preventScroll: true }));
        }

        images.forEach((img) => {
            img.classList.add('flux-zoomable');
            img.setAttribute('tabindex', '0');
            img.setAttribute('role', 'button');
            img.setAttribute('aria-label', (img.alt ? 'Agrandir l’image : ' + img.alt : 'Agrandir l’image'));
            img.addEventListener('click', () => openLightbox(img));
            img.addEventListener('keydown', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    openLightbox(img);
                }
            });
        });

        closeButton.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) closeLightbox();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && lightbox.classList.contains('is-open')) closeLightbox();
        });
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initImageLightbox, { once: true });
    else initImageLightbox();
})();
</script>

