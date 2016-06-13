<?php

namespace chilimatic\lib\Validator\Generic;

use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class NotEmpty
 * @package chilimatic\lib\Validator\Generic
 */
class NotEmpty implements IFlyWeightValidator
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function __invoke($value) : bool
    {
        return $this->validate($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function validate($value) : bool
    {
        return !empty($value);
    }
}