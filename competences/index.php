<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero--about bg-glass flex">
  <div class="hero-wrapper bg--cover" style="background-image: url(/assets/images/competences/pilot-competences.jpg);">
  </div>
  <div class="container mt-1--lg">
    <div class="row">
      <div class="col-100 hero-text text-center element-animation">
        <p class="hero-subtitle">Компетенции</p>
        <h1 class="h1 accent deco-line--center">Мои <span>компетенции</span></h1>
      </div>
    </div>
  </div>
  <div class="nextText">
    <a href="#next_section" title="Know more">Узнать больше</a>
    <span></span>
  </div>
</section>

<section class="section s-competences bg-dark">
  <div class="next_section" id="next_section"></div>
  <div class="container">
    <div class="row content-block">
      <div class="col-40--md">
        <h2 class="h2 deco-line lh-1">Основные <span>навыки</span></h2>
      </div>
      <div class="col-60--md">
        <p>Знания любого специалиста в данной сфере, на мой взгляд, делятся на некие базовые, необходимость в которых
          абсолютна, и специализированные. Рассмотрим специализированные, так как без базовых хоть как такая работа
          невозможна, а при необходимости я готов ответить на уточняющие вопросы</p>
      </div>
    </div>
    <div class="row justify-center">
      <div class="col-50--md col-40--lg">
        <div class="competences-item mb-2">
          <a href="/competences/bitrix/">
            <div class="competences-banner">
              <div class="inner">
                <img src="/assets/images/competences/bitrix/bitrix-base.jpg" alt="">
              </div>
            </div>
          </a>
          <div class="competences-prev">
            <div class="content mb-05 mb-1--md">
              <h3 class="h3 mb-05 mb-1--md">CMS 1C Bitrix</h3>
              <p>Разработка и доработку сайтов на платформе. Администрирование</p>
            </div>
            <a href="/competences/bitrix/" class="find-btn" title="Know more">Узнать больше</a>
          </div>
        </div>
      </div>
      <div class="col-50--md col-40--lg">
        <div class="competences-item mb-2">
          <a href="/competences/adaptive/">
            <div class="competences-banner">
              <div class="inner" style="padding: 0;">
                <img src="/assets/images/competences/adaptive/adaptive.jpg" alt="">
              </div>
            </div>
          </a>
          <div class="competences-prev">
            <div class="content">
              <h3 class="h3 mb-05 mb-1--md">Адаптивные темы</h3>
              <p>Создание качественной адаптивной и валидной верстки, предназначенной для посадки на CMS</p>
            </div>
            <a href="/competences/adaptive/" class="find-btn" title="Know more">Узнать больше</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="competences col-100">
        <h3 class="h3 mb-05 mb-1--md">Применяемые технологии и инструменты:</h3>
        <ul class="competences-list">
          <li>HTML5 / CSS3, адаптивный дизайн</li>
          <li>Pixel perfect - по требованию</li>
          <li>Работа с макетами Figma, Photoshop</li>
          <li>PHP – базовые практические знания</li>
          <li>Ванильный JS, SASS, NPM-модули</li>
          <li>Сборщики Gulp, Vite</li>
          <li>Фреймворки Bootstrap, Vue</li>
          <li>Composer, PHP-библиотеки</li>
        </ul>
      </div>
      <div class="competences col-100">
        <h3 class="h3 mb-05 mb-1--md">Дополнительные работы и услуги:</h3>
        <ul class="competences-list">
          <li>Рефакторинг и мобильная адаптация вашего сайта</li>
          <li>Оптимизация сайта по Google PageSpeed</li>
          <li>Проверка и исправление валидности кода</li>
          <li>Помощь в решении нестандартных задач</li>
        </ul>
        <p>По результатам изучения вашего технического задания, предоставлю свое подробное предложение по решению вашей
          задачи.</p>
        <div class="button-wrap text-center mt-2 mt-3--lg">
          <a href="/works/" class="view-btn" title="To works">Смотреть работы</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
