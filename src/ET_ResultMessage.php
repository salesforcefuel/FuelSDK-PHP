<?php
// spl_autoload_register( function($class_name) {
//     include_once 'src/'.$class_name.'.php';
// });
namespace FuelSdk;

/**
* Contains information regarding a specific unsubscription action taken by a subscriber.
*/
class ET_ResultMessage extends ET_GetSupport
{

	/** 
	* Initializes a new instance of the class and set the since last batch to true.
	*/	
	function __construct() 
	{
		$this->obj = "ResultMessage";
	}
}
?>