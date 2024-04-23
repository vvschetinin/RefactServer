<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="work-herodetail bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-100 col-40--lg">
        <h1>Мои работы<span>Tesla Motors</span></h1>
        <p class="subtitle">Премиальный автосалон</p>
        <div class="subcontent mt-3">
          <h3>Раздел <span class="fs-20 fs-22--md fs-24--lg">Инженеринг</span></h3>
          <a class="find-btn" href="/assets/demo/tesla/" title="Browsing in the browser" target="_blank">Просмотр в браузере</a>
        </div>
      </div>
      <div class="col-100 col-60--lg ">
        <p>Сайт создан по макету в формате Figma. Работа заключалась в верстке с подключением JS</p>
        <h3 class="skill-title">Примененные технологии:</h3>
        <ul class="competences-list">
          <li>HTML5, CSS3, JS, PHP</li>
          <li>Node, SASS, Vite</li>
          <li>Ускорение загрузки сайта</li>
        </ul>
        <p>В настоящее время по неизвестным мне причинам сайт не используется</p>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
