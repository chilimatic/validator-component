<?php
use chilimatic\lib\Validator\Type\Scalar\IsNull;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:35 PM
 *
 * File: ValidatorIsNullTest.php
 */

class ValdiatorIsNullTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsNull();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate('asdasdasd');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate(1230);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate(1230.23);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsNull();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate(true);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsNull();
        $ret = $validator->validate(null);

        self::assertTrue($ret);
    }
}