<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/headerlight.php'; ?>


<section class="s-blog-article">
  <div class="container">
    <div class="row justify-center--lg">
      <div class="col-80--lg">
        <div class="title-article element-animation">
          <span class="subtitle">Блог</span>
          <h1 class="h1 accent deco-line"><span>Образец </span>компоновки детальной записи в блоге</h1>
        </div>
        <div class="article-content">
          <div class="img-wrap mb-1 mb-2--sm mb-3--lg">
            <img class="display-block image-responsive" src="/assets/images/blog/articles/item.jpg" alt="">
          </div>
          <h3 class="h3 mb-1">Lorem ipsum dolor sit amet.</h3>
          <p>Lorem ipsum dolor sit amet consectetur. Aspernatur necessitatibus deleniti amet!</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus porro dolorem vitae corrupti
            consequuntur placeat sed reprehenderit itaque cupiditate blanditiis amet quod ipsam exercitationem
            dolor, soluta doloribus animi laudantium libero corporis repellat.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor labore obcaecati corporis esse,
            doloribus eveniet quia magnam eius. Illum esse non quas ducimus.</p>
          <div class="mt-2 mt-3--lg">
            <a href="/blog/" title="To list posts" class="blog-btn">К списку постов</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
