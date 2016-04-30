<?php
use chilimatic\lib\Validator\Type\Scalar\IsString;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:27 PM
 *
 * File: ValidatorIsString.php
 */
class ValdiatorIsStringTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new IsString();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfStringIsValid() {
        $validator = new IsString();
        $ret = $validator->validate('asdasdasd');

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfIntIsValid() {
        $validator = new IsString();
        $ret = $validator->validate(1230);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfFloatIsValid() {
        $validator = new IsString();
        $ret = $validator->validate(1230.23);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBinaryIntIsValidValid() {
        $validator = new IsString();
        $ret = $validator->validate(0b1100000011101001010);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfArrayIsValid() {
        $validator = new IsString();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfObjectIsValid() {
        $validator = new IsString();
        $ret = $validator->validate(new stdClass());

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfBoolIsValid() {
        $validator = new IsString();
        $ret = $validator->validate(true);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new IsString();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }
}