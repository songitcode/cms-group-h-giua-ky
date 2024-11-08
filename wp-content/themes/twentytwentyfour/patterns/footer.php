<section id="footer-f">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Recent Posts</h5>
				<ul class="list-unstyled quick-links-f">
					<?php
					// Query các bài viết gần đây
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => 5,
						'post_status' => 'publish'
					));
					foreach ($recent_posts as $post) {
						echo '<li><a href="' . get_permalink($post['ID']) . '"><i class="fa fa-angle-double-right"></i> ' . $post['post_title'] . '</a></li>';
					}
					?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Categories</h5>
				<ul class="list-unstyled quick-links-f">
					<?php
					// Lấy danh sách các danh mục
					$categories = get_categories();
					foreach ($categories as $category) {
						echo '<li><a href="' . get_category_link($category->term_id) . '"><i class="fa fa-angle-double-right"></i> ' . $category->name . '</a></li>';
					}
					?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Quick links</h5>
				<ul class="list-unstyled quick-links-f">
					<?php
					// Query các bài viết gần đây
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => 5,
						'post_status' => 'publish'
					));
					foreach ($recent_posts as $post) {
						echo '<li><a href="' . get_permalink($post['ID']) . '"><i class="fa fa-angle-double-right"></i> ' . $post['post_title'] . '</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social-f text-center">
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
								class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
								class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
								class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
								class="fa fa-google-plus"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
								class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
					Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis,
					MN]</p>
				<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
						target="_blank">Sunlimetech</a></p>
			</div>
			<hr>
		</div>
	</div>
</section>