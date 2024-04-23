<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Сайт Владлена Щетинина | Страница 404</title>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="Page 404" />
  <meta name="description" content="Страница ошибки url-адреса 404" >
  <link rel="shortcut icon" href="/assets/images/general/favicon.ico" type="image/ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" >
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FMNNPJENX7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FMNNPJENX7');
  </script>
  <!-- Google tag (gtag.js) -->
  <!-- Yandex.Metrika counter -->
  <script>
  (function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
      (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
  })
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(65009764, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true
  });
  </script>
  <!-- /Yandex.Metrika counter -->
</head>

<body>
  <div class="page-wrap">

    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-100 static--xl">
            <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
            <p class="header-logo lh-1">Личный сайт<span class="mt-05">Владлена Щетинина</span></p>
            <?php else : ?>
            <a href="/" class="header-logo lh-1">Личный сайт<span class="mt-05">Владлена Щетинина</span></a>
            <?php endif; ?>
            <nav class="desktop-nav display-none display-table--lg">
              <?php if (file_exists($root . "/interface/include/decstop-menu.php")) : ?>
              <?php require_once $root . '/interface/include/decstop-menu.php'; ?>
              <?php endif; ?>
            </nav>
            <button class="start-project-btn display-none display-inline-block--sm js-startproject" title="Contact me">Свяжитесь со
              мной</button>
            <button class="nav-toggle display-block display-none--lg">
              <span class="nav-toggle__line"></span>
              <span class="nav-toggle__line"></span>
              <span class="nav-toggle__line"></span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <nav class="header-nav">
      <div class="header-nav--inner font-light">
        <?php if (file_exists($root . "/interface/include/mobil-menu.php")) : ?>
        <?php require_once $root . '/interface/include/mobil-menu.php'; ?>
        <?php endif; ?>
      </div>
    </nav>

    <div class="content-wrap">
