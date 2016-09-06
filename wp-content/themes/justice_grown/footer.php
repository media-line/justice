<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php
    //Настройки футера
    $copyrate = get_theme_mod('copyrate', '');
    $socialText = get_theme_mod('social_text', '');
    $google = get_theme_mod('google', '');
    $facebook = get_theme_mod('facebook', '');
    $twitter = get_theme_mod('twitter', '');
    
    //Если есть или нету соц сетей
    if (($google == '') || ($facebook == '') || ($twitter == '')){
        $isSocial = false;
    } else {
        $isSocial = true;
    }
?>
	<footer>
		<div class="container">
			<div class="row">
                <div class="uk-menu-footer-wrapper col-md-6 col-sm-12 col-xs-12">
                    <div class="uk-menu-footer">
                        <?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
                            'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
                            'container'=> false, // обертка списка, false - это ничего
                            'menu_class' => 'nav nav-pills uk-menu-footer-list', // класс для ul
                            'menu_id' => 'footer-nav', // id для ul
                            'fallback_cb' => false
                        );
                        wp_nav_menu($args); // выводим нижние меню
                        ?>
                    </div>
				</div>
				
                <div class="uk-footer-social-wrapper col-md-3 col-sm-12 col-xs-12">
                    <?php if ($isSocial){ ?>
                    <div class="uk-social uk-social-footer">
                    
                        <?php if ($socialText != ''){ ?>
                        <div class="uk-social-text">
                            <?php echo $socialText; ?>
                        </div>
                        <?php } ?>
                        
                        <div class="uk-social-icons">
                        
                            <?php if ($google != ''){ ?>
                                <a class="uk-social-google icon-google-plus-symbol" href="<?php echo $google; ?>"></a>
                            <?php } ?>
                            
                            <?php if ($facebook != ''){ ?>
                                <a class="uk-social-facebook icon-facebook" href="<?php echo $facebook; ?>"></a>
                            <?php } ?>
                            
                            <?php if ($twitter != ''){ ?>
                                <a class="uk-social-twitter icon-twitter" href="<?php echo $twitter; ?>"></a>
                            <?php } ?>
                        
                        </div>
                    </div>
                    <?php } ?>
				</div>
				
                <div class="uk-footer-copyrate-wrapper col-md-3 col-sm-12 col-xs-12">
                    <?php if ($copyrate != ''){ ?>
                        <div class="uk-footer-copyrate">
                            <?php echo $copyrate; ?>
                        </div>
                    <?php } ?>
				</div>
			</div>
		</div>
	</footer>
<?php if (is_active_sidebar('modal')) { // если в сайдбаре есть что выводить ?>
    <!-- Modal -->
    <div class="modal uk-modal-form fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">
                    <?php dynamic_sidebar('modal'); // выводим сайдбар, имя определено в functions.php ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>    
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>