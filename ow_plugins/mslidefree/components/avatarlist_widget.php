<?php

class MSLIDEFREE_CMP_AvatarlistWidget extends BASE_CLASS_Widget
{

    public function __construct(BASE_CLASS_WidgetParameter $params)
    {
        parent::__construct();
        
		//assign css
        OW::getDocument()->addStyleSheet(OW::getPluginManager()->getPlugin('mslidefree')->getStaticCssUrl() . 'mslide.css');
		
		//assign js
        OW::getDocument()->addScript(OW::getPluginManager()->getPlugin('mslidefree')->getStaticJsUrl() . 'mslide.js');

	   $language = OW::getLanguage();
       $userService = BOL_UserService::getInstance();
	   $avatarService = BOL_AvatarService::getInstance();

	   $resultArray = array();
	   $users= array();
	   
	   $count = $userService->count();
	   $users=$userService->findList(0, $count);
	   
	   foreach ( $users as $user )
            {
				if($avatarService->userHasAvatar($user->getId()))
				{
                 $resultArray[$user->id]['id'] = (int) $user->getId();
				 $resultArray[$user->id]['url'] = $userService->getUserUrl($user->getId());
				 $resultArray[$user->id]['avatar'] = $avatarService->getAvatarUrl($user->getId(),2);
				}
            }

	   $this->assign('ra', $resultArray);

    }//close function
	
	
    public static function getStandardSettingValueList()
    {
        return array(
            self::SETTING_TITLE => OW::getLanguage()->text('mslidefree', 'mslidefree_widget_title'),
            self::SETTING_ICON => self::ICON_USER,
            self::SETTING_SHOW_TITLE => true,
            self::SETTING_WRAP_IN_BOX => true
        );

    }//close function


    public static function getAccess()
    {
        return self::ACCESS_ALL;
    }//close function

}//close class
