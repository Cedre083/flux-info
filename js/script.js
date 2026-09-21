/*
  À ajouter à la fin de /js/script.js.
  Le MP4 est chargé uniquement après le clic sur la vignette.
*/

(function () {
  function initialiseFilmPlayers() {
    document.querySelectorAll('[data-video-player]').forEach((player) => {
      if (player.dataset.initialised === 'true') return;

      const trigger = player.querySelector('.film-flux__vignette');
      const video = player.querySelector('.film-flux__video');
      const source = video ? video.querySelector('source[data-src]') : null;

      if (!trigger || !video || !source) return;
      player.dataset.initialised = 'true';

      trigger.addEventListener('click', () => {
        // Le lien du MP4 est affecté ici, jamais avant le clic.
        source.src = source.dataset.src;

        // Le bouton est retiré du rendu ; le lecteur occupe alors sa place.
        trigger.setAttribute('hidden', '');
        video.removeAttribute('hidden');
        video.load();

        // Cette action provient d'un clic utilisateur : la lecture peut démarrer.
        video.play().catch(() => {
          // Les contrôles restent visibles si le navigateur attend une nouvelle action.
        });
      }, { once: true });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialiseFilmPlayers);
  } else {
    initialiseFilmPlayers();
  }
}());
