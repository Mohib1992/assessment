<?php

$menu = new Menu();
return array(

    'Home' => $menu->getMenuNameInGermanByKey(MenuBar::$home),
    'Clients' => $menu->getMenuNameInGermanByKey(MenuBar::$client),
    'Services' => $menu->getMenuNameInGermanByKey(MenuBar::$services),
    'Social' => $menu->getMenuNameInGermanByKey(MenuBar::$social),
    'AboutUs' => $menu->getMenuNameInGermanByKey(MenuBar::$aboutUs),
    'AboutUsSub' => $menu->getMenuNameInGermanByKey(MenuBar::$aboutUsSub),
    'Contact' => $menu->getMenuNameInGermanByKey(MenuBar::$contact),
    'Blog' => $menu->getMenuNameInGermanByKey(MenuBar::$blog),
    'Team' => $menu->getMenuNameInGermanByKey(MenuBar::$team),
    'IT' => $menu->getMenuNameInGermanByKey(MenuBar::$it),
    'Garments' => $menu->getMenuNameInGermanByKey(MenuBar::$germents)


);
?>