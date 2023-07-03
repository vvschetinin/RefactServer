<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/headercomplite.php'; ?>

<section class="hero hero--about bg-glass flex">
  <div class="hero-wrapper bg--cover" style="background-image: url(/assets/images/general/complit.jpg);"></div>
  <div class="container mt-1--lg">
    <div class="row">
      <div class="col-100 hero-text text-center element-animation">
        <h1 class="h1 accent err404">К сожалению, мы не смогли найти <span>нужную вам страницу</span></h1>
        <div class="button-wrap mt-2">
          <a href="/" class="view-btn" title="To main page">Перейти на главную</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footercomplit.php'; ?>
