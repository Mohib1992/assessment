<?php

$menu = new Menu();
return array(

    'Home' => $menu->getMenuNameInEnglishByKey(MenuBar::$home),
    'Clients' => $menu->getMenuNameInEnglishByKey(MenuBar::$client),
    'Services' => $menu->getMenuNameInEnglishByKey(MenuBar::$services),
    'Social' => $menu->getMenuNameInEnglishByKey(MenuBar::$social),
    'AboutUs' => $menu->getMenuNameInEnglishByKey(MenuBar::$aboutUs),
    'AboutUsSub' => $menu->getMenuNameInEnglishByKey(MenuBar::$aboutUsSub),
    'Contact' => $menu->getMenuNameInEnglishByKey(MenuBar::$contact),
    'Blog' => $menu->getMenuNameInEnglishByKey(MenuBar::$blog),
    'Team' => $menu->getMenuNameInEnglishByKey(MenuBar::$team),
    'IT' => $menu->getMenuNameInEnglishByKey(MenuBar::$it),
    'Garments' => $menu->getMenuNameInEnglishByKey(MenuBar::$germents)


);
?>