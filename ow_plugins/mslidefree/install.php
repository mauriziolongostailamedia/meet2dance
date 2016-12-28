<?php
BOL_LanguageService::getInstance()->addPrefix('mslidefree', 'Members Slideshow');
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('mslidefree')->getRootDir() . 'langs.zip', 'mslidefree');