<?php
use chilimatic\lib\Validator\Type\Scalar\IsFloat;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:26 PM
 *
 * File: ValidatorIsFloatTest.php
 */

class ValdiatorIsFloatTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsFloat();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate('');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(1230);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(1230.23);

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(true);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsFloat();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }
}