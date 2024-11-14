<style>
    .section-title-comments h2 {
        font-size: 20px;
        font-weight: 400;
    }

    .section-title-comments .line {
        border-top: 2px solid gray;
        width: 30%;
    }

    .hien-thi-bai-viet p {
        border-bottom: 1px solid #0001;
        width: 75%;
    }

    .hien-thi-bai-viet p a:hover {
        color: blue;
    }

    .hien-thi-bai-viet p a {
        text-decoration: none;
        font-size: 13px;
        margin-left: 10px;
        color: #000;
        font-weight: 700;
        color: #72AEDA;
    }
</style>
<div class="comments">
    <div class="section-title-comments">
        <h2>Comments</h2>
        <div class="line"></div>
    </div>
    <div class="hien-thi-bai-viet">
        <?php
        $comments = get_comments();
        foreach ($comments as $comment) {
            $trimmed_content = wp_trim_words($comment->comment_content, 5, '...');
            echo '<p class="m-0"><a href="' . get_comment_link($comment->comment_ID) . '">' . $trimmed_content . '</a></p>';
        }
        ?>
    </div>
</div>