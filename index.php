<?php get_header(); ?>

<main>
        <section id="about" class="wrapper">
            <h2 class="sec-title">ABOUT</h2>
            <div class="profile-content">
                <div class="profile-item-img">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/flower.png')); ?>" alt="お花">
                </div>
                <div class="profile-item-text">
                    <p class="profile-name">森谷 愛</p>
                    <p class="profile-text">安心して仕事を任せていただけるように、お客様とコミュニケーションをしっかりと取りながら制作を進めさせていただきます。<br>
                    些細なことでも構いませんので、お気軽にご相談ください。<br>
                    どうぞ、よろしくお願いいたします。</p>
                </div>
            </div>
        </section>



        <section id="works" class="wrapper">
    <h2 class="sec-title">WORKS</h2>
    <div class="slider">
        <?php
        // "works" カテゴリーの記事を取得するための条件設定
        $args = array(
            'category_name'  => 'works',  // カテゴリー名 "works" の記事を取得
            'posts_per_page' => -1,       // すべての投稿を取得（-1 で全件）
            'orderby'        => 'date',   // 日付順に並べる
            'order'          => 'DESC'    // 新しい順
        );

        $works_query = new WP_Query($args); // 設定を元にデータ取得

        // 記事があるかチェック
        if ($works_query->have_posts()) :
            // 記事がある間はループ
            while ($works_query->have_posts()) : $works_query->the_post();
        ?>
                <div class="works-item">
                    <a href="<?php the_permalink(); ?>"> <!-- 投稿のリンク -->
                        <div class="works-item-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('img/default.jpg')); ?>" alt="No Image">
                            <?php endif; ?>
                        </div>
                        <div class="works-item-text">
                            <p class="works-item-text-title"><span class="works-item-text-lead">仮想</span>Coding</p>
                            <p class="works-item-text-site"><?php the_title(); ?></p>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // クエリのリセット（次のクエリへ影響を防ぐ）
        else :
        ?>
            <p>現在、WORKSカテゴリーの記事はありません。</p>
        <?php endif; ?>
    </div>
</section>





        <section id="service" class="wrapper">
            <h2 class="sec-title">SERVICE</h2>
            <ul class="service-list">
                <li>
                    <div class="service">
                        <div class="service-img service-img01">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/icon_web.png')); ?>" alt="web制作">
                        </div>
                        <div class="service-body">
                            <h3 class="service-title">WEBサイト制作</h3>
                            <p class="service-text">1ページで完結するランディングページから、複数ページのサイトまで、レスポンシブ対応で制作いたします。お客様のご希望に沿ったデザインを、提案・制作いたします。</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <div class="service-img service-img02">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/icon_coding.png')); ?>" alt="コーディング">
                        </div>
                        <div class="service-body">
                            <h3 class="service-title">コーディング</h3>
                            <p class="service-text">お客様よりいただいたデザインを正確に実装いたします。レスポンシブ対応やJavaScriptによるアニメーションの実装が可能です。</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <div class="service-img service-img03">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/icon_design.png')); ?>" alt="webデザイン">
                        </div>
                        <div class="service-body">
                            <h3 class="service-title">WEBデザイン</h3>
                            <p class="service-text">ホームページのデザインを作成いたします。
                                お客様のご要望をできる限り形にできるよう、密にコミュニケーションをとり、ご希望のサイトを作るお手伝いをいたします。</p>
                        </div>
                    </div>
                </li>
            </ul>
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
    </main>

    <?php get_footer(); ?>

