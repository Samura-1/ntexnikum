<?php
require_once 'header.php';
?>
      <div class="blog-post allnews">
        <?php
          require '../database/connection.php';
            $blog =$connection->query("SELECT * FROM blog ORDER BY id DESC");
            $blog = $blog->FetchAll(PDO::FETCH_ASSOC);
            foreach ($blog as $blogs) : 
            ?> 
        <div class="row blog-item__alnews">
          <div class="col-md-3">
             <a href=""><img src="<?php echo $blogs['imge'] ?>" class="blog-posts-thumbnail" alt="" width="100%"></a>
          </div>
          <div class="col-md-8">
            <div class="blog-posts-date"><?php echo $blogs['datetime']; ?></div>
            <h3 class="blog-posts-title-news"><?php echo '<a href=News.php?id='.$blogs['id'].'>'.$blogs['title'].'...</a>'?></h3>
            <p class="blog-posts-intro-news"><?php echo $blogs['introtext']; ?>...</p>
            <?php
            echo ' <a class="blog-posts-btn" href=News.php?id='.$blogs['id'].'>Читать Далее</a>'
             ?>
          </div>
          <div class="col-md-1"></div>
        </div> 
        <hr>
      </div>
      <?php endforeach; ?>
<?php
require_once 'footer.php';
?>
