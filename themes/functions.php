<?php
/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ra = CRamen::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ra->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ra->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ra->request, true)) . "</pre>";
  return $html;
}


/**
* Prepend the base_url.
*/
function base_url($url) {
  return $ra->request->base_url . trim($url, '/');
}


/**
* Return the current url.
*/
function current_url() {
  return $ra->request->current_url;
}