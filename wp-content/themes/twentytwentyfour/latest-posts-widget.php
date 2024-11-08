<?php
class Latest_Posts_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'latest_posts_widget',
            __('Bài Viết Mới Nhất', 'twentytwentyfour'),
            array('description' => __('Hiển thị bài viết mới nhất.', 'twentytwentyfour'))
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Truy vấn và hiển thị bài viết mới nhất
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 5,
            'post_status' => 'publish'
        ));

        if ($recent_posts->have_posts()) {
            echo '<ul>';
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Bài Viết Mới Nhất', 'twentytwentyfour');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function register_latest_posts_widget()
{
    register_widget('Latest_Posts_Widget');
}
add_action('widgets_init', 'register_latest_posts_widget');
