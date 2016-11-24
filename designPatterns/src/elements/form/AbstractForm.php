<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace elements\form;

use elements\form\validators\Validator;
use interfaces\InterfaceFullElements;
/**
 * Description of AbstractForm
 *
 * @author alex.bertolla
 */
abstract class AbstractForm extends Validator{
    public function __construct() {
        parent::__construct();
    }
}
