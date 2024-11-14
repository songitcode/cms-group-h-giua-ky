<style>
    .archive-container {
        padding: 20px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        scale: 0.9;
        width: 100%;
        font-family: 'Times New Roman', Times, serif;
    }

    .section-title::after {
        content: '';
        position: absolute;
        inset: 0;
        border-bottom: 3px solid #D6BEC3;
        right: 75%;
    }

    .section-title {
        position: relative;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        display: inline-block;
        border-bottom: 2px solid #dee2e6;
        width: 100%;
        left: 8px;
    }

    .latest-posts-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .latest-post-item {
        display: flex;
        align-items: center;
        padding: 8px 8px;
        border-bottom: 1px solid #dee2e6;
    }

    .latest-posts-grid>.latest-post-item:nth-child(odd) {
        border-right: 1px solid #dee2e6;
        padding-right: 10px;
    }

    .latest-post-rank {
        font-size: 35px;
        font-weight: bold;
        color: #000;
        margin-right: 10px;
        scale: 1.1;
        font-weight: 700;
    }

    .latest-post-title {
        font-size: 13px;
        color: #333;
        text-decoration: none;
    }

    .latest-post-title:hover {
        color: #007bff;
        text-decoration: underline;
    }

    .latest-post-item:nth-last-child(-n+2) {
        border-bottom: none;
    }
</style>
<div class="archive-container">
    <h2 class="section-title">Xem nhiều</h2>
    <div class="latest-posts">
        <?php
        // Truy vấn 8 bài viết mới nhất
        $args = array(
            'posts_per_page' => 8,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $new_posts = new WP_Query($args);
        ?>

        <?php if ($new_posts->have_posts()): ?>
            <div class="latest-posts-grid">
                <?php
                $posts = [];
                while ($new_posts->have_posts()) {
                    $new_posts->the_post();
                    $posts[] = [
                        'title' => get_the_title(),
                        'permalink' => get_permalink()
                    ];
                }

                // Hiển thị bài viết theo hai cột (1-5, 2-6, ...)
                for ($i = 0; $i < 4; $i++): ?>
                    <div class="latest-post-item">
                        <span class="latest-post-rank"><?php echo $i + 1; ?></span>
                        <a href="<?php echo esc_url($posts[$i]['permalink']); ?>"
                            class="latest-post-title"><?php echo esc_html($posts[$i]['title']); ?></a>
                    </div>
                    <div class="latest-post-item">
                        <span class="latest-post-rank"><?php echo $i + 5; ?></span>
                        <a href="<?php echo esc_url($posts[$i + 4]['permalink']); ?>"
                            class="latest-post-title"><?php echo esc_html($posts[$i + 4]['title']); ?></a>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>