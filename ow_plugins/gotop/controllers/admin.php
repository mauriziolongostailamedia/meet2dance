<?php

class GOTOP_CTRL_Admin extends ADMIN_CTRL_Abstract
{

    public function __construct()
    {
        parent::__construct();

        if ( OW::getRequest()->isAjax() )
        {
            return;
        }

        $lang = OW::getLanguage();

        $this->setPageHeading($lang->text('gotop', 'admin_settings_title'));
        $this->setPageTitle($lang->text('gotop', 'admin_settings_title'));
        $this->setPageHeadingIconClass('ow_ic_gear_wheel');
    }

    public function settings()
    {
        $adminForm = new Form('adminForm');      

        $lang = OW::getLanguage();
        $config = OW::getConfig();
        
        
        $selectField = new Selectbox("Easing");
        $selectField->setLabel($lang->text("gotop", "admin_selectbox_field_label"));
        $selectField->setRequired(true);
        $selectField->setInvitation($lang->text('gotop', 'admin_selectbox_value'));
        $selectField->setValue($config->getValue('gotop', 'Easing'));
        $selectField->setOptions(array(
            "linear" => "linear",
            "swing" => "swing",
            "easeInQuad" => "easeInQuad",
            "easeOutQuad" => "easeOutQuad",
            "easeInOutQuad" => "easeInOutQuad",
            "easeInCubic" => "easeInCubic",
            "easeOutCubic" => "easeOutCubic",
            "easeInOutCubic" => "easeInOutCubic",
            "easeInQuart" => "easeInQuart",
            "easeOutQuart" => "easeOutQuart",
            "easeInOutQuart" => "easeInOutQuart",
            "easeInQuint" => "easeInQuint",
            "easeOutQuint" => "easeOutQuint",
            "easeInOutQuint" => "easeInOutQuint",
            "easeInExpo" => "easeInExpo",
            "easeOutExpo" => "easeOutExpo",
            "easeInOutExpo" => "easeInOutExpo",
            "easeInSine" => "easeInSine",
            "easeOutSine" => "easeOutSine",
            "easeInOutSine" => "easeInOutSine",
            "easeInCirc" => "easeInCirc",
            "easeOutCirc" => "easeOutCirc",
            "easeInOutCirc" => "easeInOutCirc",
            "easeInElastic" => "easeInElastic",
            "easeOutElastic" => "easeOutElastic",
            "easeInOutElastic" => "easeInOutElastic",
            "easeInBack" => "easeInBack",
            "easeOutBack" => "easeOutBack",
            "easeInOutBack" => "easeInOutBack",
            "easeInBounce" => "easeInBounce",
            "easeOutBounce" => "easeOutBounce",
            "easeInOutBounce" => "easeInOutBounce"
            
        ));
        
        $adminForm->addElement($selectField);
        
        $formElements = array('EaseSpeed','InDelay','OutDelay','bottom','right','left');
        foreach ($formElements as $formElement)
        {
			$element = new TextField($formElement);
            $element->setRequired(true);
            if ($formElement != 'left')
            {
                $validator = new IntValidator(1);
                $validator->setErrorMessage($lang->text('gotop', 'admin_invalid_number_error'));
                $element->addValidator($validator);
			}
			if ($formElement !='EaseSpeed' and $formElement != 'InDelay' and $formElement != 'OutDelay')
			{
				$element->setDescription($lang->text('gotop', "admin_desc_".strtolower($formElement)));
			}
            $element->setLabel($lang->text('gotop', "admin_".strtolower($formElement)));
            $element->setValue($config->getValue('gotop', $formElement)); 
            $adminForm->addElement($element);
		}
        
        
        $field = new RadioField('adminarea');
        $field->setLabel($lang->text('gotop','admin_adminarea'));
        $field->setRequired(true);
        $field->setColumnCount(1);
        $field->setOptions(array(
        'enable'=> $lang->text('gotop','admin_adminarea_enable'),
        'disable'=>$lang->text('gotop','admin_adminarea_disable')
                 ));
        $field->setValue($config->getValue('gotop', 'adminarea')); 
        $adminForm->addElement($field);
        


        $element = new Submit('saveEaseSettings');
        $element->setValue($lang->text('gotop', 'admin_save_settings'));
        $adminForm->addElement($element);

        if ( OW::getRequest()->isPost() )
        {
           if ( $adminForm->isValid($_POST) )
           {
              $values = $adminForm->getValues();
              if (!is_numeric($values['left']))
              {
				  OW::getFeedback()->error($lang->text('gotop', 'admin_invalid_number_error'));
			  }
			  else
			  {
                  $config = OW::getConfig();
                  $config->saveConfig('gotop', 'EaseSpeed', $values['EaseSpeed']);
                  $config->saveConfig('gotop', 'Easing', $values['Easing']);
                  $config->saveConfig('gotop', 'InDelay', $values['InDelay']);
                  $config->saveConfig('gotop', 'OutDelay', $values['OutDelay']);
                  $config->saveConfig('gotop', 'bottom', $values['bottom']);
                  $config->saveConfig('gotop', 'right', $values['right']);
                  $config->saveConfig('gotop', 'left', $values['left']);
                  $config->saveConfig('gotop', 'adminarea', $values['adminarea']);


                  OW::getFeedback()->info($lang->text('gotop', 'user_save_success')); 
		     }
           }
        }

       $this->addForm($adminForm);
   } 
}
