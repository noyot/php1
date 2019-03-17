<!DOCTYPE html>
<?php
    /*5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
    */
    
    $title = "Second Lesson";
    $h1 = "minimalistica";
    $year = date("Y"); // встроенная функция date()
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?php echo $title ?></title>
</head>
<body>
	<div id="content">
		<h1><?php echo $h1 ?></h1>
		
        <?php 
            $menu = [
                ["title" => "Home", "href" => "#", "class" => "active", "submenu" => false],
                ["title" => "Archive", "href" => "#", "class" => " ", "submenu" => true, "items" =>
                    [
                        ["title" => "Archive 1", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Archive 2", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Archive 3", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Archive 4", "href" => "#", "class" => " ", "submenu" => false]
                    ]
                ],
                ["title" => "Contact", "href" => "#", "class" => " ", "submenu" => true, "items" =>
                    [
                        ["title" => "Contact 1", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Contact 2", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Contact 3", "href" => "#", "class" => " ", "submenu" => false],
                        ["title" => "Contact 4", "href" => "#", "class" => " ", "submenu" => false],
                    ]
                ],
            ];

            function menuItem($array){
                echo '<li><a href="' . $array['href'] . '" class="' . $array['class'] . '">' . $array['title'] . '</a>';
            }

            function menuCreate($array, $class, $id){
                echo '<ul class="' . $class . '" id="' . $id . '">';
                foreach ($array as $keyMenu => $itemMenu) {
                menuItem($itemMenu);
                if ($itemMenu['submenu'] == true) {
                    menuCreate($itemMenu['items'], "submenu", "submenu");
                }
                echo '</li>';
                }
                echo '</ul>';
            }
            menuCreate($menu, "topmenu", "menu");
        ?>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <?php echo $year ?> <a href="#">general</a></p> 
			
			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a>
			<?php echo $year ?>
			</p>
		</div>	
	</div>
</body>
</html>