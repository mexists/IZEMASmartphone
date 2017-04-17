<?php

class RequireLogin extends CBehavior
{

    private static $allow_guest_urls = array(
        '/^site\/index(.*)?$/i',
        '/^site\/login(.*)?$/i',
        '/^site\/register(.*)?$/i',
    );

    public function attach($owner)
    {
        $owner->attachEventHandler('onBeginRequest', array($this, 'handleBeginRequest'));
    }

    public function handleBeginRequest($event)
    {
        $basefile = preg_quote(basename($_SERVER["SCRIPT_FILENAME"]));
        $curr_url = preg_replace("/(^.+($basefile)(\/)?)|^.+($basefile)?(\/)?/", "", Yii::app()->request->hostInfo . Yii::app()->request->url);
//        CVarDumper::dump($event);die;

        if (Yii::app()->user->isGuest && !(preg_replace(self::$allow_guest_urls, true, $curr_url) == 1)) {
            Yii::app()->user->loginRequired();
        } else
            ;
    }

}
