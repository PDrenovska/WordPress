      </div>
    </div>	
	</div>
	<div class="5grid-layout">
		<div class="row" id="footer-content">
			<div class="6u" id="box1">
				<section>
					<div class="post">
						<!-- Recent post -->
						<?php query_posts('showposts=1');
							while (have_posts()) : the_post(); ?>
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			                  <p>
			                    <a href="<?php the_permalink() ?>">
			                      <?php
			                      if ( has_post_thumbnail() ) { ?>
			                      <?php the_post_thumbnail(); ?>
			                      <?php } ?>
			                    </a>
			                    <?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
			                    <?php the_tags('<br/>Tags ',' • ','<br />'); ?>
			                  </p>
			                  <p class="button-style"><a href="<?php the_permalink() ?>">Read Full Article</a></p>
							<?php endwhile; 
						wp_reset_query();
					?>
					</div>
				</section>
			</div>
			<div class="3u" id="box2">
				<section>
					<h2>MONTHLY ARCHIVES</h2>
					<ul class="style4">
						<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6 ) ); ?>
					</ul>
				</section>
			</div>
			<div class="3u" id="box3">
				<section>
					<h2>USEFUL LINKS</h2>
					<ul class="style4">
						<li>
							<?php 
				              $linkurl = get_option('telerik_linkurl1'); 
				              $linktext = get_option('telerik_linktext1'); 
				              $linktitle = get_option('telerik_linktitle1');
				            ?>
				            <a href="<?php echo ($linkurl); ?>" target="_blank" title="<?php echo ($linktitle); ?>"><?php echo ($linktext); ?></a>
						</li>
						<li>
							<?php 
				              $linkurl2 = get_option('telerik_linkurl2'); 
				              $linktext2 = get_option('telerik_linktext2'); 
				              $linktitle2 = get_option('telerik_linktitle2');
				            ?>
				            <a href="<?php echo ($linkurl2); ?>" target="_blank" title="<?php echo ($linktitle2); ?>"><?php echo ($linktext2); ?></a>
						</li>
						<li>
							<?php 
				              $linkurl3 = get_option('telerik_linkurl3'); 
				              $linktext3 = get_option('telerik_linktext3'); 
				              $linktitle3 = get_option('telerik_linktitle3');
				            ?>
				            <a href="<?php echo ($linkurl3); ?>" target="_blank" title="<?php echo ($linktitle3); ?>"><?php echo ($linktext3); ?></a>
						</li>
						<li>
							<?php 
				              $linkurl4 = get_option('telerik_linkurl4'); 
				              $linktext4 = get_option('telerik_linktext4'); 
				              $linktitle4 = get_option('telerik_linktitle4');
				            ?>
				            <a href="<?php echo ($linkurl4); ?>" target="_blank" title="<?php echo ($linktitle4); ?>"><?php echo ($linktext4); ?></a>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="5grid-layout">
	<section>
		<p>
			<?php 
              $copyright = get_option('telerik_copyright'); 
              $copylink = get_option('telerik_copylink'); 
              $linktext = get_option('telerik_linktext');
            ?>
            <?php echo ($copyright); ?><a href="<?php echo ($copylink); ?> "><?php echo ($linktext); ?></a>
          
		</p>
	</section>
</div>
</body>
</html>