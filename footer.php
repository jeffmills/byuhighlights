<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	<div class="clear"></div>
	</div><!-- #main -->

	<div id="footer_container" role="contentinfo">
		
        <div id="footer">
        
        	<div id="headers">
        
        		<ul id="footer_headings">
            
            		<li>BYUhighlights.com</li>
                	<li>Categories</li>
                	<li>Follow Us</li>
                	<li>Cougar Network</li>
            		<div class="clear"></div>
            	</ul>
        
        	</div>
            
            <div id="footer_links">
            
            	<ul id="site_links">
            
            		<li><a href="http://byuhighlights.com/about">About</a></li>
                	<li><a href="http://byuhighlights.com/contact">Contact</a></li>
            
            	</ul>
                
                <ul id="footer_cats">
                
                	<li><a href="http://byuhighlights.com/archives/category/football">Football</a></li>
                    <li><a href="http://byuhighlights.com/archives/category/basketball">Basketball</a></li>
                    <li><a href="http://byuhighlights.com/archives/category/recruits">Recruits</a></li>
                    
             	</ul>
                
                <ul id="footer_social">
                
                	<li><a href="http://feeds.feedburner.com/Byuhighlightscom"><img src="<?php bloginfo('template_directory'); ?>/images/footer_rss.png" alt="rss feed" />RSS</a></li>
                    <li><a href="http://www.twitter.com/byuhighlights"><img src="<?php bloginfo('template_directory'); ?>/images/footer_twitter.png" alt="twitter feed" />Twitter</a></li>
                    <li><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/images/footer_stumble.png" alt="Stumble Upon" />StumbleUpon</a></li>
                
                </ul>
                
                <ul id="footer_network">
                
                	<?php include('links.php'); ?>
                
                
                </ul>
                
          	</div>
            
     	</div>       
        
	</div><!-- #footer -->
    
    <div id="copywrite_bar">
    
    	<div id="copy_container">
        
        	<span id="copywrite">&copy; Copyright 2010 Jeff Mills. All rights reserved.</span>
        
        </div>
    
    </div>
    <!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
