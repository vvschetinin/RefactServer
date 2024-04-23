<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero--contacts bg-glass flex">
  <div class="video-wrapper bg--cover" style="background-image: url(/assets/images/contacts/bg-contacts.jpg);">
    <video class="bg--cover" preload="auto" loop muted autoplay poster="/assets/images/contacts/bg-contacts.jpg">
      <source src="/assets/video/contacts/contact.mp4" type="video/mp4">
    </video>
  </div>
  <div class="container mt-1--lg">
    <div class="row">
      <div class="col-100 hero-text text-center element-animation">
        <p class="hero-subtitle">Контакты</p>
        <h1 class="h1 accent deco-line--center">Почему бы не попить кофе и <span class="display-block">начать
            проект?</span></h1>
      </div>
    </div>
  </div>
  <div class="nextText">
    <a href="#next_section" title="Know more">Узнать больше</a>
    <span></span>
  </div>
</section>

<section class="section s-contacts bg-dark">
  <div class="next_section" id="next_section"></div>
  <div class="container">
    <div class="row">
      <div class="mb-05 mb-0--lg col-100 col-40--md">
        <div class="title-contact deco-line">
          <h2 class="h2 lh-125">Закажите <span>проект</span></h2>
          <p>или выполнение работ</p>
        </div>
        <div class="contact-detail">
          <p><span>Phone:</span><a href="tel:+79260522029">+7 (926) 052 20 29</a></p>
          <p><span>Email:</span><a href="mailto:info@vschetinin.ru">info@vschetinin.ru</a></p>
          <p><span>Follow:</span></p>
          <div class="follow-wrap flex mt-05">
            <a href="https://t.me/+79260522029" target="_blank" rel="nofollow">
              <img src="/assets/images/general/telegramicon.png" class="icon" alt="Telegram">
            </a>
          </div>
        </div>
      </div>
      <div class="col-100 col-60--md">
        <div class="contact-description mt-1 mt-05--md">
          <p>Прошу предоставить краткое описание проекта / работ, которые вы задумали. Уточните масштаб проекта, сроки и
            другие детали, которые считаете важными</p>
          <p>Укажите свою контактную информацию, включая адрес электронной почты и номер телефона, а также другие
            удобные для вас способы связи. Это можно сделать через контактную форму, вызвав ее кнопкой "Свяжитесь со
            мной". Для пересылки файлов различных форматов и изображений - прошу воспользоваться
            электронной почтой</p>
          <p>Я внимательно изучу предлагаемую задачу и свяжусь с вами в самые короткие сроки</p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
