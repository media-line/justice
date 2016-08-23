<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php
    //Настройки шапки
    $favicon = get_theme_mod('favicon', '/wp-content/themes/justice_grown/favicon.ico');
    $logo = get_theme_mod('logo', '');
    $slogan = get_theme_mod('slogan', '');
    $socialText = get_theme_mod('social_text', '');
    $google = get_theme_mod('google', '');
    $facebook = get_theme_mod('facebook', '');
    $twitter = get_theme_mod('twitter', '');
    
    //Если или нету соц сетей
    if (($google == '') || ($facebook == '') || ($twitter == '')){
        $isSocial = false;
    } else {
        $isSocial = true;
    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header>
		<div class="uk-container">
			<div class="clearfix">
            
                <?php if ($logo != ''){ ?>
                <div class="uk-logo">
                    <a href="/"><img src="<?php echo $logo; ?>" /></a>
				</div>
                <?php } ?>
                
                <?php if ($slogan != ''){ ?>
                <div class="uk-slogan">
                    <?php echo $slogan; ?>
				</div>
                <?php } ?>
                
                <?php if ($isSocial){ ?>
                <div class="uk-social uk-social-header">
                
                    <?php if ($socialText != ''){ ?>
                    <div class="uk-social-text">
                        <?php echo $socialText; ?>
                    </div>
                    <?php } ?>
                    
                    <?php if ($google != ''){ ?>
                        <a class="uk-social-google" href="<?php echo $google; ?>"></a>
                    <?php } ?>
                    
                    <?php if ($facebook != ''){ ?>
                        <a class="uk-social-facebook" href="<?php echo $facebook; ?>"></a>
                    <?php } ?>
                    
                    <?php if ($twitter != ''){ ?>
                        <a class="uk-social-twitter" href="<?php echo $twitter; ?>"></a>
                    <?php } ?>
                    
				</div>
                <?php } ?>
                
				<div class="">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>