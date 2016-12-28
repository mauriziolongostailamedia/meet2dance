<?php

class CUSTOMMETATAG_CLASS_EventHandler
{
    
    private static $classInstance;

    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    private function __construct() { }

    

    public function addMetatag( OW_Event $e)
    {
        $Document=OW::getDocument();
        $meta=$Document->getMeta();


        $Document->addMetaInfo('og:image:width',520, 'property');
        $Document->addMetaInfo('og:image:height',280, 'property');
        $Document->addMetaInfo('og:image:type','image/jpeg', 'property');
        $Document->addMetaInfo('og:type','article', 'property');

        $Document->addMetaInfo('twitter:card','summary_large_image', 'name');
        $Document->addMetaInfo('twitter:site','@azBeautifulcars', 'name');
        $Document->addMetaInfo('twitter:creator','@azBeautifulcars', 'name');

        if(is_array($meta) && array_key_exists('name',$meta)){
            foreach($meta['name'] as $key=>$value){
                $Document->addMetaInfo($key,$value, 'property');
            }
        }

    }

    public function init()
    {
        OW::getEventManager()->bind(OW_EventManager::ON_FINALIZE, array($this, 'addMetatag'));
    }
}