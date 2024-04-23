<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero--home bg-glass flex">
  <div class="video-wrapper bg--cover" style="background-image: url(/assets/images/home/pilot.jpg);">
    <video class="bg--cover" preload="auto" loop muted autoplay poster="/assets/images/home/pilot.jpg">
      <source src="/assets/video/creative/creative.mp4" type="video/mp4">
    </video>
  </div>
  <div class="container mt-1--lg">
    <div class="row">
      <div class="col-100 relative">
        <p class="fs-14 font-bold color-green text-uppercase">Опыт веб-разработки с 2013 года</p>
        <div class="tiped-wrap">
          Помогаю заказчикам в:
          <h1 class="h1"><span style="display: none;">Помогаю заказчикам в:</span><span class="js-example"></span></h1>
        </div>
        <a href="/about/" title="Meet" class="view-btn mt-2">Продолжить знакомство</a>
        <div class="arrow-wrap relative">
          <a href="#next_section" class="nextArrow">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 55.8 92.6">
              <rect x="23.8" width="8.3" height="82.6" />
              <polygon points="0,64.7 5.8,58.8 27.9,80.9 50,58.8 55.8,64.7 27.9,92.6 " />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="s_home-section section--inner bg-dark">
  <div class="next_section" id="next_section"></div>
  <?php if (!empty($slogan)) : ?>
  <div class="home-quotes waypoints js-waypoints-animate"><?php echo $slogan; ?></div>
  <?php endif; ?>
  <div class="container">
    <div class="row content-block">
      <div class="col-100 col-40--md">
        <h2 class="h2 deco-line">Для чего вам нужен <span>сайт?</span></h2>
      </div>
      <div class="col-100 col-60--md text-block">
        <p>Создание веб-сайта — важная задача для продвижения бизнеса в сети Интернет. Наличие у организации
          собственной
          веб-странички с привлекательным дизайном, четкой и понятной структурой, возможностью быстро и легко
          заказать товары или
          услуги позволит привлекать потенциальных клиентов и партнеров, создаст положительный имидж и повысит
          кредит доверия к
          компании</p>
        <p>Веб-технологии постоянно развиваются. В ногу с ними должны развиваться и ваши возможности. Я предлагаю
          широкий спектр
          услуг от помощи в формулирования задачи до размещения вашего сайта на хостинге</p>
      </div>
    </div>
    <div class="row justify-center content-block">
      <div class="col-100 col-80--lg">
        <div class="home-bunner bg--cover" style="background-image: url(/assets/images/home/home-banner.jpeg);">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-100 text-block">
        <p>Давайте вместе отойдем от обычных способов продвижения своего "Я", и больше сосредоточиться на цифровом
          присутствии в
          Интернете. Вы готовы к созданию совершенно нового веб-сайта, отражающего основное предложение,
          обновленный бренд, и
          который представлял бы чем является сегодня ваш бизнес? Сделать информацию о себе всегда актуальной?
          Обращайтесь!</p>
        <!-- <div class="button-wrap text-center mt-2 mt-3--lg">
          <a href="/about/" title="Know more" class="view-btn">Узнать больше</a>
        </div> -->
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
