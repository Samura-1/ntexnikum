<? require_once '../database/connection.php'; ?>
<?php
require_once 'header.php';
?>
<div class="container">
<?php
$page = $_GET['id'];

$blog =$connection->query("SELECT * FROM blog WHERE id='$page' ");
$blog = $blog->FetchAll(PDO::FETCH_ASSOC);
foreach ($blog as $blogs):
  ?>
  <div class="row">
    <div class="col-md-12">
      <div class="new-full">
      </div>
    </div>
    <div class="row text-center">
      <div class="col img-news"><img src="<?php echo $blogs['imge'] ?>" alt=""></div>
      <div class="col img-news"><img src="<?php echo $blogs['imge2'] ?>" alt=""></div>
      <div class="col img-news"><img src="<?php echo $blogs['imge3'] ?>" alt=""></div>
    </div>
    <div class="row full-text-news">
      <div class="col-md-12 text-center">
        <p><?php echo $blogs['fulltext']; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <a href="allnews.php" class="blog-posts-btn">Вернуться назад</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php 
require_once 'footer.php';
?>
