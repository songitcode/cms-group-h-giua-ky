<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

// Add the news container code above the search results loop
?>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .news-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
    }

    .news-item {
        flex: 1 0 32%;
        margin-bottom: 20px;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 991px) {
        .news-item {
            flex: 1 0 100%;
        }
    }

    @media (max-width: 1200px) and (min-width: 992px) {
        .news-item {
            flex: 1 0 48%;
        }
    }

    .card {
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
        border: 1px solid #ddd; /* Thêm khung xung quanh */
        border-radius: 8px; /* Tạo bo góc cho khung */
        background-color: #fff; /* Màu nền trắng */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Thêm bóng mờ */
        overflow: hidden; /* Đảm bảo ảnh không tràn ra ngoài */
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 15px; /* Thêm khoảng cách bên trong card */
    }

    .card-img-top {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ddd; /* Thêm đường viền dưới ảnh */
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
        color: #666;
    }

    .card-body a {
        color: #007bff;
        text-decoration: none;
    }

    .card-body a:hover {
        text-decoration: underline;
    }
</style>


<?php
if ( have_posts() ) :
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Trang mới nhất</h1>
            <div class="news-container">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4, 
                    'offset' => 1,
                    'order' => 'DESC',
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    $counter = 0;
                    while ($query->have_posts()) : $query->the_post();
                    if ($counter == 0) {
                        $counter++;
                        continue;
                    }
                ?>
                    <div class="news-item">
                        <div class="card">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
else:
    get_template_part( 'template-parts/content/content-none' );
endif;

// Search result header
?>
<header class="page-header alignwide">
    <h1 class="page-title">
        <?php
        printf(
            /* translators: %s: Search term. */
            esc_html__( 'Results for "%s"', 'twentytwentyone' ),
            '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
        );
        ?>
    </h1>
</header><!-- .page-header -->

<div class="search-result-count default-max-width">
    <?php
    printf(
        esc_html(
            /* translators: %d: The number of search results. */
            _n(
                'We found %d result for your search.',
                'We found %d results for your search.',
                (int) $wp_query->found_posts,
                'twentytwentyone'
            )
        ),
        (int) $wp_query->found_posts
    );
    ?>
</div><!-- .search-result-count -->
<?php

// Start the Loop for search results
while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
} // End the loop.

// Previous/next page navigation.
twenty_twenty_one_the_posts_navigation();

get_footer();
