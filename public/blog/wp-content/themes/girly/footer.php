            <li>
            	<h2>Info</h2>
                <div class="textwidget">
                    	&copy; <a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a> Proudly Powered by <a href="http://wordpress.org"
target="_self" title="WordPress">WordPress</a>. Theme <a href="http://docolours.com/themes/" target="_blank" title="View more themes">Girly</a> from <a href="http://docolours.com" target="_blank">DoColours</a> by <a href="http://docolours.com" title="About the author" target="_self">Ruby</a>. <small>(Released under <a href="http://www.opensource.org/licenses/gpl-license.php" target="_blank">GPL</a>). <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.</small>
                </div>
            </li>
        </ul>
    </div>
<?php include(TEMPLATEPATH.'/sidebar2.php');?>
</div>
<?php wp_footer(); ?>
</body>
</html>