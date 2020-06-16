<?php get_header(); ?>
<div class="main">



<?php if (have_posts()):?>
<!-- 投稿がある場合 -->
  <h2>Latest Articles</h2>
  <ul class="articles">
      <?php while(have_posts()): the_post(); ?>
        <div class="articles-box">
          <li class="img-box" >
          <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()):?>
              <!-- サムネイルがある時 -->
              <?php the_post_thumbnail('thumbnail'); ?>
              <?php else: ?>
                  <!-- サムネイルがない時 -->
                  <img src="https://placehold.jp/150x150.png" alt="">
              <?php endif; ?>
          </a>
          <p><?php the_time("Y/m/d/"); ?></p>
          <p><?php the_excerpt(); ?></p>
          </li>
        </div>
      <?php endwhile; ?>            
  </ul>
<?php else:?>
<!-- 投稿がない場合 -->
  <h2>最近の投稿はありません</h2>
<?php endif; ?>
</div>


<?php get_footer(); ?>  
</body>
</html>