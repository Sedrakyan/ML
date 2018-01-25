<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ml
 */
$link = defined('FW')?fw_get_db_settings_option('link'):'#';
$link_text = defined('FW')?fw_get_db_settings_option('link_text'):'';
$copyright = defined('FW')?fw_get_db_settings_option('copyright'):'';
?>

	</div><!-- #content -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <div class="footer-social">
                            <?php if (defined('FW')):
                            foreach (fw_get_db_settings_option('social_links') as $social) :
                            ?>
                            <a href="<?=$social['link']?>"
                               onmouseover="this.style.background='<?=$social['color']?>';this.style.border='<?=$social['color']?> 1px solid';this.style.color='#fff'"
                               onmouseout="this.removeAttribute('style')">
                                <span class="<?=$social['icon']?>"></span></a>
                            <?php
                            endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div>
            <p>© <?=date('Y', time())?> <?php if ($copyright || $link_text):?>- <?php endif; echo $copyright?>  <a href="<?=$link?>"><?=$link_text?></a></p>
        </div>
    </div>
</footer>
</div><!-- #page -->
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>

</body>
</html>
