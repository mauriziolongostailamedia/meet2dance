<?php
//Persian community 
//Mohammad Puyandeh 
OW::getRouter()->addRoute(new OW_Route('gotop-admin', 'admin/gotop/settings', "GOTOP_CTRL_Admin", 'settings'));
function gotop(){
   

   $config = OW::getConfig();
   
   $speed = $config->getValue('gotop', 'EaseSpeed');
   $type = $config->getValue('gotop', 'Easing');
   $indelay = $config->getValue('gotop', 'InDelay');
   $outdelay = $config->getValue('gotop', 'OutDelay');
   $bottom = $config->getValue('gotop', 'bottom');
   $right = $config->getValue('gotop', 'right');
   $left = $config->getValue('gotop', 'left');
   $adminAreaAllowed = $config->getValue('gotop', 'adminarea');//0 is false,1 is true
   $uri = OW::getRouter()->getUri();
   if ($adminAreaAllowed == 'disable' and explode('/', $uri[0] == 'admin'))
   {
	   return FALSE;
   }
   
   
   $script = '<script type="text/javascript">' . 
		"$(document).ready(function() {
		
			
			$().UItoTop({ easingType: '{$type}', scrollSpeed : $speed, inDelay: $indelay, outDelay: $outdelay});
			
		});
	</script>";
	
	
   $css = "<style>#toTop{bottom: {$bottom}px; right: {$right}px;";
       if ((int) $left != 0) { $css.= "left: {$left}px;";}
   $css .= "}</style>";


    OW::getDocument()->addCustomHeadInfo($css);
   
   
    OW::getDocument()->appendBody($script);
}

OW::getEventManager()->bind('core.finalize', 'gotop');
GOTOP_BOL_Easing::getInstance()->bindEvents();
