<?php

namespace Drupal\d8_recaptcha_v3\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Drupal\Core\Controller\ControllerBase;

class customRCController extends ControllerBase {

  public function captchaRequest() {
    
    $config = $this->config('d8_recaptcha_v3.settings');
    $secret = $config->get('secret_key');    
    $token = \Drupal::request()->request->get('token');
    $url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret) .  '&response=' . urlencode($token);
    
    $req = file_get_contents($url);
    
    $response['data'] = json_decode($req,true);
        
    $response['method'] = 'GET';

    return new JsonResponse( $response );
  }
}