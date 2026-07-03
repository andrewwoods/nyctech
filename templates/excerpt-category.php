
<div class="h-entry">
    <h2 class="p-name"><a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="publishing-info">
        <div class="date-info">
            <time class="dt-published" datetime="<?php echo nyctech_the_date('c'); ?>"><?php nyctech_the_date(); ?></time>
        </div>
        <div class="p-summary">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>


