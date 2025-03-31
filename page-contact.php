<?php
/*
Template Name: お問い合わせページ
*/
get_header(); ?>

<main>

<section id="contact-details">
    <div class="contact-wrap wrapper">
        <h2 class="sec-title"><?php the_title(); // ページタイトルを表示 ?></h2>
        
        <?php if (function_exists('wpcf7')) : ?>
            <div class="contact-form">
                <?php 
                echo do_shortcode('[contact-form-7 id="0151574" title="お問い合わせフォーム"]'); 
                ?>
            </div>
        <?php else : ?>
            <p class="contact-form-error">お問い合わせフォームを表示できません。Contact Form 7プラグインが有効化されているか確認してください。</p>
        <?php endif; ?>
    </div>
</section>

<section id="contact">
    <div class="contact-content">
        <div class="contact-content-inner wrapper">
            <!-- 追加コンテンツがあればここに -->
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>