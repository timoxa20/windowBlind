<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " |"; bloginfo('description'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php  
    wp_head();
    ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                        <?php the_custom_logo(); ?>   
                </div>
                <nav class="menu">
                    <div class="menus">
                        <div class="menu__btn"></div>
                        <div class="menu__btn"></div>
                        <div class="menu__btn"></div>
                    </div>
                    <ul class="mobile__menu">
                        <div class="mobile__logo">
                            <img class="mobile__logo-img" src="<?php echo bloginfo('template_url')?>/assets/images/Frame 3.svg" alt="">
                        </div>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-one">
                                Горизонтальные жалюзи
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-two">
                                Вертикальные жалюзи
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-three">
                                Рулонные жалюзи
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-for ">
                                День-ночь
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-five">
                                Римские шторы
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-six">
                                Шторы плиссе
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-seven">
                                Москитные сетки
                            </div>
                        </li>
                        <li class="mobile__menu-list">
                            <div class="mobile__menu-text mobile__icons-eight">
                                Моторизация
                            </div>
                        </li>
                        <div class="mobile__block">
                            <div class="select">
                                <div class="mobile__phone">
                                    <a href="tel:+37377744187">37377744187</a>
                                </div>
                                <div class="mobile__select">
                                    <select name="" id="">
                                        <option value="">ru</option>
                                        <option value="">ro</option>
                                    </select>
                                </div>
                            </div>
                            <div  class="mobile__button ">
                                <button data-modal class="header__button-rul ">Вызвать замерщика</button>
                            </div>
                        </div>
                    </ul>
                    
                    <ul class="header__menu">
                        <li class="header__menu-list header__item">
                            <a href="#">Ассортимент</a>
                            
                            <?php 
                            wp_nav_menu( [
                                'menu'          => 'Main',
                                'container'     => false,
                                'container_class' => 'header__window',
                                'menu_class'    => 'header__subheader',
                                'echo'          => true,
                                'fallback_cd'   => 'wp_page_menu',
                                'items_wrap'    => '<ul class="header__subheader">%3$s</ul>',
                                'depth'         => 1,
                            ] );
                            ?>
                            
                        </li>
                        <li class="header__menu-list">
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__block">
                    <div class="header__phone">
                        <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                    </div>
                    <div class="header__select">
                        <select name="" id="">
                            <option value="">ru</option>
                            <option value="">ro</option>
                        </select>
                    </div>
                    <div class="header__button">
                        <button data-modal class="header__button-rul">Вызвать замерщика</button>
                    </div>
                </div>
            </div>
        </div>
    </header>