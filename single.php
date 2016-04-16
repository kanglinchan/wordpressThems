<?php get_header(); ?>

	<div id="container">

		<!-- if(have_posts()) – 检查博客是否有日志。
		while(have_posts()) – 如果有日志，那么当博客有日志的时候，执行下面 the_post() 这个函数。
		the_post() – 调用具体的日志来显示。
		endwhile; – 遵照规则 #1，这里用于关闭 while()
		endif; – 关闭 if()
		注释：并不是所有的代码都需要两部分用来打开和关闭。有些代码能够自我关闭，这就解释了 have_posts() 和 the_post(); 这两个函数。因为 the_post(); 在 if() 和 while() 的外面，只需要分号去结束或者关闭。 -->

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>			
				<div class="post" id="post-<?php the_ID(); ?>" >
					<!-- the_permalink() 是用来调用每篇日志地址的 PHP 函数。 -->
					<h2 >
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
					</a>
					</h2>

					<div class="entry">
						<?php the_content() ?>
						<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
						<p class="postmetadata">
								<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> 
								<?php _e('by'); ?> <?php  the_author(); ?>
								 <?php edit_post_link('Edit', ' &#124; ', ''); ?>
						</p>
					</div>
					<!-- 评论 -->
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
				</div>		
		<?php endwhile; ?>
			<div class="navigation">
			<!-- 文章导航链接 -->
			上一篇：<?php previous_post_link('%link') ?> 
			下一篇：<?php next_post_link('%link') ?>
			</div>

			<!-- 没有文章的处理 -->
			<?php else : ?>
			<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
			</div>
		<?php endif; ?> 
		
	</div>
	

	<!-- 侧边栏 -->
	<?php get_sidebar(); ?>
	 
	 <!-- 底部 -->
	 <?php get_footer(); ?>

</body>

</html>