<?php
/**
 * Dice Model
 *
 * @category    app
 * @package     models
 * @copyright   Copyright (c) 2014, Arroyo Labs, http://www.arroyolabs.com
 * @author      John Arroyo, john@arroyolabs.com
 */
namespace app\models;

class Dice extends \erdiko\core\ModelAbstract
{
    public function roll_dice($number, $sides, $values = false) {
        $dice = array();
        for ($i = 0; $i < $number; $i++) {
            $dice[] = rand(1, $sides);
        }

        if ($values) {
            return $dice;
        } else {
            return array_sum($dice);
        }
    }

}
