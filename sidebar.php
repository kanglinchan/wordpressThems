<div class="sidebar">
		<ul>
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

				<!-- 搜索 -->
				<li id="search">
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
				</li>
					
				
				<li id="calendar">
					<!-- 日历 -->
					<h2><?php _e("Calendar"); ?></h2>
					<?php get_calendar(); ?>
				</li>

					<!-- 页面 -->
				<?php wp_list_pages("depth=3&title_li=<h2>页面</h2>"); ?>


					<!-- 标签列表 -->
				<li>
					<h2><?php _e('Categories'); ?></h2>
					<ul>
						<?php wp_list_cats("optioncount=1&order=DESC"); ?> 
					</ul>
				</li>

					<!-- 归档列表 -->
				<li>
					<h2><?php _e("Archives"); ?></h2>
					<ul>
						<?php wp_get_archives("type=monthly"); ?>
					</ul>
				</li>
				
					<!-- 功能管理 -->
				<li>
					<h2><?php _e('Meta'); ?></h2>
					<ul>
						<!-- wp_register() 这个函数能产生一组 <li> 和 </li> 标签，如果你没有登陆，它显示注册（Register）链接，如果登录了，它显示的是 站点管理（Site Admin）的链接。 -->
						<?php wp_register(); ?>
						<li>
							<!-- wp_loginout() 不会产生列表元素标签，所以需要我们手工输入列表元素标签，当你没有登录的时候，得到的是 登录（Login） 的链接，当已经登录的时候，得到的是登出（Logout）链接。 -->
							<?php wp_loginout(); ?>
						</li>
						<!-- wp_meta() 没有做任何事情，他在网页上和源代码中都不会产生东西，现在不要考虑 wp_meta()，实际上你已经在使用它了 -->
						<?php wp_meta(); ?>
					</ul>
				</li>

					<!-- 友情链接 -->
				<?php wp_list_bookmarks( $args ); ?>
			</ul>

		<?php endif; ?>
		
	</div>