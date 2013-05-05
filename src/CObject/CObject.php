<?php
/**
 * Holding a instance of CBagdad to enable use of $this in subclasses and provide some helpers.
 *
 * @package BagdadCore
 */
class CObject {

/**
 * Members
 */
protected $ba;
protected $config;
protected $request;
protected $data;
protected $db;
protected $views;
protected $session;
protected $user;


/**
 * Constructor, can be instantiated by sending in the $ba reference.
 */
protected function __construct($ba=null) {
if(!$ba) {
$ba = CBagdad::Instance();
}
$this->ba = &$ba;
    $this->config = &$ba->config;
    $this->request = &$ba->request;
    $this->data = &$ba->data;
    $this->db = &$ba->db;
    $this->views = &$ba->views;
    $this->session = &$ba->session;
    $this->user = &$ba->user;
}


/**
 * Wrapper for same method in CBagdad. See there for documentation.
 */
protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->ba->RedirectTo($urlOrController, $method, $arguments);
  }


/**
 * Wrapper for same method in CBagdad. See there for documentation.
 */
protected function RedirectToController($method=null, $arguments=null) {
    $this->ba->RedirectToController($method, $arguments);
  }


/**
 * Wrapper for same method in CBagdad. See there for documentation.
 */
protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->ba->RedirectToControllerMethod($controller, $method, $arguments);
  }


/**
 * Wrapper for same method in CBagdad. See there for documentation.
 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->ba->AddMessage($type, $message, $alternative);
  }


/**
 * Wrapper for same method in CBagdad. See there for documentation.
 */
protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->ba->CreateUrl($urlOrController, $method, $arguments);
  }


}