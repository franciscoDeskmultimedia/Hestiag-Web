<?php  
/**  
 * @file  
 * Contains Drupal\d8_recaptcha_v3\Form\SettingsForm.  
 */  
namespace Drupal\d8_recaptcha_v3\Form;  
use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  

class SettingsForm extends ConfigFormBase { 
 
  protected function getEditableConfigNames() {  
    return [  
      'd8_recaptcha_v3.settings',  
    ];  
  } 
  
  public function getFormId() {  
    return 'custom_recaptcha_v3_settingsform';  
  }  

  public function buildForm(array $form, FormStateInterface $form_state) {  
    $config = $this->config('d8_recaptcha_v3.settings');
    
    $form['site_key'] = [  
      '#type' => 'textfield',  
      '#title' => $this->t('Site key'),
      '#description' => $this->t('The site key given to you when you <a href=":url">register for reCAPTCHA</a>.', [':url' => 'https://www.google.com/recaptcha/admin']),
      '#default_value' => $config->get('site_key'),
      '#required' => TRUE,
    ];  
    $form['secret_key'] = [  
      '#type' => 'textfield',  
      '#title' => $this->t('Secret key'),
      '#description' => $this->t('The secret key given to you when you <a href=":url">register for reCAPTCHA</a>.', [':url' => 'https://www.google.com/recaptcha/admin']),
      '#default_value' => $config->get('secret_key'),
      '#required' => TRUE,
    ];    
    $form['captcha_selectors'] = [  
      '#type' => 'textfield',
      '#description' => $this->t('Multiple forms could be assigned by comma separated IDs or classes.'),
      '#title' => $this->t('Form selector for reCaptcha'),  
      '#default_value' => $config->get('captcha_selectors'),
      '#required' => TRUE,
    ];  
    $form['badge_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Badge position'),
      '#description' => $this->t('Optional. Reposition the reCAPTCHA badge. \'inline\' lets you position it with CSS.'),
      '#options' => ['bottomright' => 'Bottom right','bottomleft' => 'Bottom left','inline' => 'Inline'],
      '#default_value' => $config->get('badge_position'),
    ];      
    return parent::buildForm($form, $form_state);  
  }  

  public function submitForm(array &$form, FormStateInterface $form_state) {  
    parent::submitForm($form, $form_state);  

    $this->config('d8_recaptcha_v3.settings')  
      ->set('site_key', $form_state->getValue('site_key'))  
      ->set('secret_key', $form_state->getValue('secret_key'))
      ->set('captcha_selectors', $form_state->getValue('captcha_selectors'))
      ->set('badge_position', $form_state->getValue('badge_position'))
      ->save();  
  }  
}