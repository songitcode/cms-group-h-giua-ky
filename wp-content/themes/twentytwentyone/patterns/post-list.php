<div class="post-list">
    <?php
    // Cấu hình truy vấn để lấy các bài viết mới nhất
    $args = array(
        'post_type' => 'post', // Lấy bài viết
        'posts_per_page' => -1, // Hiển thị 5 bài viết
        'order' => 'DESC' // Sắp xếp từ mới đến cũ
    );
    $query = new WP_Query($args);

    // Kiểm tra nếu có bài viết
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            ?>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="date">
                        <span class="day"><?php the_time('d'); ?></span>
                        <span class="month">Tháng<?php the_time('m'); ?></span>
                    </div>
                    <div class="content">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php echo wp_trim_words(get_the_content(), 20, '[...]'); ?></p>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset lại dữ liệu sau khi truy vấn xong
    endif;
    ?>
</div>