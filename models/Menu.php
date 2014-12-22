<?php


class Menu
{

    private $log;

    function __construct()
    {
        $this->log = new LogController('menubar channel','menubar.log');
    }


    /**
     * @param translation key
     * @return menu name in english
     */
    public function getMenuNameInEnglishByKey($key)
    {
        return Translation::getTranslation($key, Language::english())->content;
    }

    /**
     * @param translation key
     * @return menu name in german
     */
    public function getMenuNameInGermanByKey($key)
    {
        $this->log->printLog('START STACK');
        $menuName =  Translation::getTranslation($key, Language::german())->content;
        if (empty($menuName)) {
            $menuName = Translation::getTranslation($key,Language::english())->content;
        }

        $this->log->printLog($menuName);
        $this->log->printLog('END STACK');
        return $menuName;

    }
}

abstract class MenuBar {

    public static $home = 1;
    public static $client = 2;
    public static $services = 3;
    public static $germents = 4;
    public static $it = 5;
    public static $social = 6;
    public static $blog = 7;
    public static $aboutUs = 8;
    public static $aboutUsSub = 9;
    public static $team = 10;
    public static $contact = 11;
}

?>