<?php
/**
 * Examples Controller
 * Multiple examples of how you can use erdiko.  It includes some simple use cases.
 *
 * @category    app
 * @package     controllers
 * @copyright   Copyright (c) 2016, Arroyo Labs, www.arroyolabs.com
 * @author      John Arroyo, john@arroyolabs.com
 */
namespace app\controllers;
use Erdiko;
use erdiko\core\Config;

/**
 * AjaxExample Class
 */
class AjaxExample extends \erdiko\core\AjaxController
{
	
	/**
     * Get
     */
	public function get($var = null)
	{
		if($var != null)
		{
			// load action
			return $this->_autoaction($var);
		}

		$data = array("hello", "world");
		$view = new \erdiko\core\View('examples/helloworld', $data);
		
		$this->setContent($view);
	}

	/**
   	 * Get Example
   	 */
	public function getExample()
	{
		$content = array(
			'hello' => 'world',
			'ajax' => 'rocks'
			);

		$this->setContent($content);
	}

	public function getDice(){
        $response = (object)array(
            'success'   => true,
            'status'    => 200
        );

        $diceModel = new \app\models\Dice;
        $diceResult = $diceModel->roll_dice(1,6,false);
        $response->result = $diceResult;

        $this->setContent($response);
    }

}
