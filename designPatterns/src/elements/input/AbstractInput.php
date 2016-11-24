<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\elements\input;

use src\elements\AbstractElement;
use src\interfaces\InterfaceEmptyElements;
/**
 * Description of AbstractInput
 *
 * @author alex
 */
abstract class AbstractInput extends AbstractElement  implements InterfaceEmptyElements{

    protected $input;
    protected $value;
    protected $type;
    protected $label;

    public function __construct($name, $id, $value, $type, $label) {
        parent::__construct($name, $id);
        $this->value = $value;
        $this->type = $type;
        $this->label = $label;
    }

}
