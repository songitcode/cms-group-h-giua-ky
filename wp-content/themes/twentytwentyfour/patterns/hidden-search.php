<?php
/**
 * Title: Search
 * Slug: twentytwentyfour/hidden-search
 * Inserter: no
 */
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<form role="search tim-duoc-roi" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="wp-block-search">
    <div class="search-row">
        <div class="search-col">
            <form class="search-card">
                <div class="search-card-body">
                    <div class="search-icon">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <div class="search-input-col">
                        <input type="search" id="search-field" class="search-input"
                            placeholder="<?php echo esc_attr_x('Search topics or keywords', 'placeholder', 'twentytwentyfour'); ?>"
                            value="<?php echo get_search_query(); ?>" name="s" />
                    </div>
                    <div class="search-btn-col">
                        <button type="submit"
                            class="search-btn"><?php echo esc_html_x('Search', 'submit button', 'twentytwentyfour'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>

<style>
    .has-global-padding {
        text-align: center;
    }

    .wp-block-heading {
        color: #cf194a;
    }

    .search-row {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .search-col {
        width: 100%;
        max-width: 800px;
        padding: 0 15px;
    }

    .search-card {
        display: flex;
        flex-direction: row;

        overflow: hidden;
    }

    .search-card-body {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .search-icon {
        font-size: 1.5rem;
        color: #6c757d;
    }

    .search-input-col {
        flex-grow: 1;
    }

    .search-input {
        width: 100%;
        padding: 12px;
        border: none;
        outline: none;
        font-size: 1rem;
        border-radius: 4px;

    }

    .search-input:focus {
        border-color: #28a745;
        border: 1px solid #ccc;
    }

    .search-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 4px;
    }

    .search-btn:hover {
        background-color: #218838;
    }
</style>