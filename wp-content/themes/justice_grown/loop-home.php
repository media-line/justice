<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<h1 class="uk-article-teaser-title">
        <?php the_title(); ?>
    </h1>
	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php } ?>
		<div class="uk-article-teaser-body <?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } // разные классы в зависимости есть ли миниатюра ?>">
			<?php the_content(''); // пост превью, до more ?>
		</div>
	</div>
    <a href="<?php echo '#';//the_permalink(); ?>" class="uk-button uk-button-teaser">
		Learn more about us
	</a>
</article>