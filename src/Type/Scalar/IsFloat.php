<?php
/**
 *
 * @author j
 * Date: 9/27/15
 * Time: 5:25 PM
 *
 * File: IsFloat.php
 */

namespace chilimatic\lib\Validator\Type\Scalar;
use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class IsFloat
 *
 * @package chilimatic\lib\Validator\Type\Scalar
 */
class IsFloat implements IFlyWeightValidator
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
        return is_float($value);
    }
}