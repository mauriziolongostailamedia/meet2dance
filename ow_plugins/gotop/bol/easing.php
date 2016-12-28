<?php

class GOTOP_BOL_Easing
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



    public function bindEvents()
    {
    	OW::getEventManager()->bind(OW_EventManager::ON_BEFORE_DOCUMENT_RENDER, array($this, 'index'));
    }




    public function index()
    {
         $CSS = OW::getPluginManager()->getPlugin('gotop')->getRootDir() . 'static/css/ui.totop.css';
         $toTop = OW::getPluginManager()->getPlugin('gotop')->getRootDir() . 'static/js/jquery.ui.totop.js';
         $easing = OW::getPluginManager()->getPlugin('gotop')->getRootDir() . 'static/js/easing.js';
         $toTopMin = OW::getPluginManager()->getPlugin('gotop')->getRootDir() . 'static/js/jquery.ui.totop.min.js';
         $CSSUrl = OW::getPluginManager()->getPlugin('gotop')->getStaticCssUrl() . 'ui.totop.css';
         $toTopUrl = OW::getPluginManager()->getPlugin('gotop')->getStaticJsUrl() . 'jquery.ui.totop.js';
         $toTopMinUrl = OW::getPluginManager()->getPlugin('gotop')->getStaticJsUrl() . 'jquery.ui.totop.min.js';
         $easingUrl = OW::getPluginManager()->getPlugin('gotop')->getStaticJsUrl() . 'easing.js';

         if ( file_exists($CSS) && file_exists($toTop) && file_exists($easing) && file_exists($toTopMin) )
         {
         
             $document = OW::getDocument();
             $document->addScript($toTopUrl, "text/javascript");
             $document->addScript($easingUrl, "text/javascript");
             $document->addScript($toTopMinUrl, "text/javascript");
             $document->addStyleSheet($CSSUrl. '?' . OW::getConfig()->getValue('base', 'cachedEntitiesPostfix'), 'all', (-80));
             
             
         }

         else
         {
            return;
         }
    }
}

