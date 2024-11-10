<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
<div class="container-fuild mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <h4>Latest News</h4>
            <ul class="timeline tim-thay" style="margin-left: 0px !important">
                <?php
                // Tạo đối tượng WP_Query để truy vấn các bài viết mới nhất
                $latest_posts = new WP_Query(array(
                    'posts_per_page' => 3, // Số lượng bài viết muốn hiển thị
                    'post_status' => 'publish' // Chỉ lấy bài viết đã được xuất bản
                ));

                // Kiểm tra nếu có bài viết
                if ($latest_posts->have_posts()):
                    while ($latest_posts->have_posts()):
                        $latest_posts->the_post(); ?>
                        <li>
                            <a target="_blank" href="<?php the_permalink(); ?>">
                                <?php the_title(); // Hiển thị tiêu đề bài viết ?>
                            </a>
                            <a href="#" class="float-right mt-0"><?php echo get_the_date(); // Hiển thị ngày đăng ?></a>
                            <p><?php the_excerpt(); // Hiển thị đoạn trích ngắn ?></p>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); // Đặt lại dữ liệu bài viết
                else: ?>
                    <li><?php _e('No posts found.', 'textdomain'); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>