
<li class="job-card">
    <div class="job-primary">
        <h1 class="job-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <!-- <?php the_content(); ?> -->
        <div class="job-meta">
            <a class="meta-company" ><?php the_category(); ?></a>
            <span class="meta-date"><?php the_date()?></span>
        </div>
        
    </div>
    <div class="job-logo">
        <div class="job-logo-box">
            <?php
            // оправяме снимките, проверка ако има снимки
            if ( has_post_thumbnail()){
                the_post_thumbnail();
            } else {
                echo '<img src="https://i.imgur.com/ZbILm3F.png" alt="default image thumbnail">';
            }
            ?>
            <!-- <img src="https://i.imgur.com/ZbILm3F.png" alt=""> -->
        </div>
    </div>
</li>