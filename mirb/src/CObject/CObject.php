<?php
/**
 * Holding a instance of CMirb to enable use of $this in subclasses and provide some helpers.
 *
 * @package MirbCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $ly;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $mi reference.
	 */
	protected function __construct($mi=null) {
	  if(!$mi) {
	    $mi = CMirb::Instance();
	  }
	  $this->mi       = &$mi;
    $this->config   = &$mi->config;
    $this->request  = &$mi->request;
    $this->data     = &$mi->data;
    $this->db       = &$mi->db;
    $this->views    = &$mi->views;
    $this->session  = &$mi->session;
    $this->user     = &$mi->user;
	}


	/**
	 * Wrapper for same method in CMirb. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->mi->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CMirb. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->mi->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CMirb. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->mi->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CMirb. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->mi->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CMirb. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->mi->CreateUrl($urlOrController, $method, $arguments);
  }


}
  
?>
