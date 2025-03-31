<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="mainvisual wrapper">
            <div class="mainvisual-img">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php the_title_attribute(); ?>">
                <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/coffee.jpg')); ?>" alt="コーヒーショップ">
                <?php endif; ?>
            </div>
        </section>

        <section class="work-content wrapper">
            <h2 class="sec-title"><?php the_title(); ?></h2>
            <div class="work-content-details">
                <div class="description">
                    <?php if(get_field('content')): ?>
                        <p>内容：<?php the_field('content'); ?></p>
                    <?php endif; ?>
                    
                    <?php if(get_field('production_period')): ?>
                        <p>制作期間：<?php the_field('production_period'); ?></p>
                    <?php endif; ?>
                    
                    <?php if(get_field('languages')): ?>
                        <p>使用言語：<?php the_field('languages'); ?></p>
                    <?php endif; ?>
                </div>
                
                <?php if(get_field('summary')): ?>
                <div class="description description-sub">
                    <div class="description-heading">概要</div>
                    <p><?php the_field('summary'); ?></p>
                </div>
                <?php endif; ?>
                
                <?php if(get_field('site_url')): ?>
                <div class="work-site">
                    <div class="work-site-link">
                        <a href="https://am250314.github.io/furniture-design.github.io/" target="_blank"><?php the_field('site_url'); ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <section id="contact">
            <div class="contact-content">
                <div class="contact-content-inner wrapper">
                    <h2 class="sec-title contact-title">CONTACT</h2>
                    <div class="contact-area">
                        <p class="contact-text">サービスの詳細やご質問など、お気軽にご連絡ください。</p>
                        <p class="contact-mail"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-btn"></a></p>
                        <div class="img-cicle01">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/circle_deco01.png')); ?>" alt="シェイプ">
                        </div>
                        <div class="img-cicle02">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/circle_deco02.png')); ?>" alt="シェイプ">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>