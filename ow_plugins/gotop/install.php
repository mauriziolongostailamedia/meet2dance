<?php
//Persian community 
//Mohammad Puyandeh 

BOL_LanguageService::getInstance()->addPrefix('gotop', 'Go Top');
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('gotop')->getRootDir().'langs.zip', 'gotop');
OW::getPluginManager()->addPluginSettingsRouteName('gotop', 'gotop-admin');
if ( !OW::getConfig()->configExists('gotop', 'EaseSpeed') ) 
    OW::getConfig()->addConfig('gotop', 'EaseSpeed', '400', '');
    
if ( !OW::getConfig()->configExists('gotop', 'Easing') ) 
    OW::getConfig()->addConfig('gotop', 'Easing', 'linear', '');
    
if ( !OW::getConfig()->configExists('gotop', 'InDelay') ) 
    OW::getConfig()->addConfig('gotop', 'InDelay', '600', '');
    
if ( !OW::getConfig()->configExists('gotop', 'OutDelay') ) 
    OW::getConfig()->addConfig('gotop', 'OutDelay', '400', '');
    
if ( !OW::getConfig()->configExists('gotop', 'bottom') ) 
    OW::getConfig()->addConfig('gotop', 'bottom', '35', '');
    
if ( !OW::getConfig()->configExists('gotop', 'right') ) 
    OW::getConfig()->addConfig('gotop', 'right', '10', '');
    
if ( !OW::getConfig()->configExists('gotop', 'left') ) 
    OW::getConfig()->addConfig('gotop', 'left', '0', '');
    
if ( !OW::getConfig()->configExists('gotop', 'adminarea') ) 
    OW::getConfig()->addConfig('gotop', 'adminarea', 'enable', '');
