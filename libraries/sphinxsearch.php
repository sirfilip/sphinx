<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

define('SPHINXSEARCH_SPARK_HOME', dirname(dirname(__FILE__)));

class Sphinxsearch {

  private $CI;
  private $client;
  
  function __construct($config = array())
  {
    $this->CI =& get_instance();
    $this->config = $config;
  }
  
  function initialize($config = array())
  {
    $this->config = array_merge($this->config, $config);
  }

}
