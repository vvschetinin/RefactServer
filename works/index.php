<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero--work section--inner">
  <div class="container">
    <div class="row">
      <div class="col-100">
        <div class="work-title">
          <h1>Мои работы</h1>
          <div class="work-subtitle">
            <p>Данные образцы работ представлены в виде портфолио, которое может быть доступно онлайн в виде
              демонстрационных проектов, и могут быть доступны для просмотра вживую</p>
          </div>
        </div>
      </div>
      <div class="col-100">
        <div class="workgrid">
          <div class="workgrid-inner">
            <div class="mywork-item mb-05 mb-0--sm">
              <a href="/works/beautyshop/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/beautyshop/prev.jpg);">
                  </div>
                  <div class="work-logo">
                    <span>S-MILLER</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="mywork-item">
              <a href="/works/fred/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/fred/prev.jpg);"></div>
                  <div class="work-logo">
                    <span>FRED</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="mywork-item">
              <a href="/works/tesla/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/tesla/tesla-logo.jpg);"></div>
                  <div class="work-logo">
                    <span></span>
                  </div>
                </div>
              </a>
            </div>
            <div class="mywork-item">
              <a href="/works/cartrans/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/cartrans/track-logo.jpg);">
                  </div>
                  <div class="work-logo">
                    <span>АВТОЛОГИСТИК</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="mywork-item">
              <a href="/works/shoes/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/shoes/prev.jpg);">
                  </div>
                  <div class="work-logo">
                    <span></span>
                  </div>
                </div>
              </a>
            </div>
            <div class="mywork-item">
              <a href="/works/tellus/" title="To my work" class="grid-item work-item">
                <div class="inner">
                  <div class="grid-item-image bg--cover"
                    style="background-image: url(/assets/images/work/tellus/prev.jpg);"></div>
                  <div class="work-logo">
                    <span>TELLUS UTILITIES</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-100 postwork">
        <p>Все образцы представляют собой адаптивные веб-страницы, созданные мной лично. Представленные образцы отлично
          работают на различных устройствах, таких как настольные компьютеры, планшеты и мобильные устройства</p>
        <p>Еще лучшими характеристиками обладает сам сайт, на котором вы сейчас находитесь</p>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
