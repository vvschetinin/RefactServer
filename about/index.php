<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero--about bg-glass flex">
  <div class="hero-wrapper bg--cover" style="background-image: url(/assets/images/about/pilot-about.jpg);"></div>
  <div class="container mt-1--lg">
    <div class="row">
      <div class="col-100 hero-text text-center element-animation">
        <p class="hero-subtitle">Обо мне</p>
        <h1 class="h1 accent deco-line--center">Увлечение, ставшее <span>профессией</span></h1>
      </div>
    </div>
  </div>
  <div class="nextText">
    <a href="#next_section" title="Know more">Узнать больше</a>
    <span></span>
  </div>
</section>

<section class="section s-about bg-dark">
  <div class="next_section" id="next_section"></div>
  <div class="container">
    <div class="row content-block">
      <div class="col-40--md">
        <h2 class="h2 deco-line lh-1">Немного <span>о себе</span></h2>
      </div>
      <div class="col-60--md">
        <p><?php echo $greeting; ?></p>
        <p>Меня зовут Владлен Щетинин.<br>Я веб-разработчик из города Ивантеевка, имею опыт создания сайтов
          различной тематики и сложности. К работе в веб пришел сначала как к интересному времяпровождению,
          соответствующему складу моего ума. Но это затягивает, и поражает бесконечностью возможностей, которую
          виртуальный мир способен дать любому из нас</p>
        <p>В сфере веб-разработки работаю уже более 5 лет. За это время участвовал в 30+ проектах, часть из
          которых создавалась под ключ</p>
        <p>Значительную часть своего свободного времени трачу на изучение новых направлений в веб-разработке,
          инструментов и методов для улучшения своих навыков</p>
      </div>
    </div>
    <div class="row justify-center">
      <div class="about-grid content-block col-100 col-75--lg">
        <div class="card order-1 bg--cover" style="background-image: url(/assets/images/about/myfoto/myfoto-1.jpg);">
          <div class="textcard mb-05 mb-1--sm">
            <p class="fs-18 fs-16--md">Прыжок под парашютом</p>
          </div>
        </div>
        <div class="flexwrap">
          <div class="card bg--cover" style="background-image: url(/assets/images/about/myfoto/myfoto-2.jpg);">
            <div class="textcard mb-05 mb-1--sm">
              <p class="fs-18 fs-16--md">Это я</p>
            </div>
          </div>
          <div class="card bg--cover" style="background-image: url(/assets/images/about/myfoto/myfoto-3.jpg);">
            <div class="textcard mb-05 mb-1--sm">
              <p class="fs-18 fs-16--md">Мне нравится</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-100">
        <p>Хотя веб-разработка является моей основной деятельностью, я стараюсь поддерживать разумный баланс между
          работой и другими своими интересами, уделять время общению с друзьями</p>
        <p>В качестве разработчика, я хотел бы предложить помощь в реализации ваших проектов. Я уверен, что смогу
          внести значимый вклад в их создание и улучшение. Работаю как с организациями, так и с
          частными лицами. Заинтересован в сотрудничестве с веб-студиями, как по отдельным проетам, так и на постоянной
          основе</p>
        <div class="button-wrap text-center mt-2 mt-3--lg">
          <a href="/competences/" title="My competences" class="view-btn">Мои компетенции</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
