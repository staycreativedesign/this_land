		<footer>
			<div class="footer-wrapper">
				<ul>
					<li>
						<p>
							Information
						</p>
					</li>
					<li>
						<a href="about">About</a>
					</li>
					<li>
						<a href="about">Advertise</a>
					</li>
					<li>
						<a href="about">Contact</a>
					</li>
					<li>
						Stockists
					</li>
				</ul>
				<ul>
					<li>
						<p>
							Online
						</p>
					</li>
					<li>
						<a href="stories/">Articles</a>
					</li>
					<li>
						<a href="http://thislanddev.myshopify.com/" target="_blank">Shop</a>
					</li>
					<li>
						<a href="<?php echo site_url('/subscriptions'); ?>">Subscribe</a>
					</li>
				</ul>
					<ul>
						<li>
							<p>
								Connect
							</p>
						</li>
						<li>
							<a href="https://www.facebook.com/thislandpress" target="_blank"><?php echo wp_get_attachment_image( 34, array(21,21) ); ?></a>
							<a href="https://twitter.com/thislandpress" target="_blank"><?php echo wp_get_attachment_image( 37, array(21,21) ); ?></a>
							<a href="https://instagram.com/thislandpress/" target="_blank"><?php echo wp_get_attachment_image( 35, array(21,21) ); ?></a>
							<a href="https://www.pinterest.com/thislandpress/" target=""><?php echo wp_get_attachment_image( 36, array(21,21) ); ?></a>
					</li>
					</ul>
					<ul>
						<li>
							<p>
								Sign up for our weekly newsletter
							</p>
						</li>
						<li>
							<input type="text" placeholder="Please enter your email address">
						</li>
						<li>
							<a href="#" class="myButton">Enroll</a>
					</ul>
				</ul>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>