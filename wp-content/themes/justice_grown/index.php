<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section class="uk-slider">
    <div class="uk-slider-caption">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    Providing professional expertise in the <span class="uk-green-selection">medical cannabis</span> industry
                </div>
            </div>
        </div>
    </div>
    <div class="uk-slider-image" style="background-image: url(/wp-content/uploads/2016/08/slide001.jpg);">
        <img src="/wp-content/uploads/2016/08/slide001.jpg" alt="" />
    </div>
</section>
<div class="uk-main container">
	<div class="uk-main-container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<?php 
                    //Параметры для записей
                    $args = array( 'numberposts' => 1, 'posts_per_page' => 0, 'category' => 4 );
                    
				$posts = get_posts( $args );
				foreach( $posts as $post ){ setup_postdata($post);?>
                
					<?php get_template_part('loop-home'); // для отображения каждой записи берем шаблон loop.php ?>
                    
                    <?php break; //для главной страницы нужна только 1 запись?>
                    
				<?php } // конец цикла ?>
				 
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
        <hr class="uk-hr">
        <div class="uk-locations">
            <div class="uk-article-teaser-title">Locations:</div>
            <div class="row">
            
                <div class="col-md-6">
                    <div class="uk-location-block">
                       <img src="/wp-content/uploads/2016/08/location-image1.jpg" alt="" />
                       <div class="uk-location-lable">
                           Illinois state
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="uk-location-block">
                        <img src="/wp-content/uploads/2016/08/location-image2.jpg" alt="" />
                        <div class="uk-location-lable">
                            California state
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
	</div>
</div>
<?php get_footer(); // подключаем footer.php ?>