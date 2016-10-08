<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Represents a basic API model.
 * File: PodelAPI/BaseModel.object.php
 * Depends: [NONE]
 */

namespace PodelAPI\Models;

class BaseModel
{
    /**
     * BaseModel constructor - Map a key => value array to a class
     * @param array $keyValueArray
     */
    function __construct($keyValueArray = array()) {
        foreach ($keyValueArray as $key => $value) {
            foreach (get_class_vars(get_class($this)) as $varKey => $varValue) {
                if($varKey === $key) {
                    $this->$varKey = $value;
                }
            }
        }
    }

}