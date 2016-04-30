<?php
use chilimatic\lib\Validator\Generic\NotEmpty;

/**
 *
 * @author j
 * Date: 10/22/15
 * Time: 9:03 PM
 *
 */
class ValidatorIsNotEmptyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function checkIfValidatorImplementsTheInterface() {
        $validator = new NotEmpty();
        self::assertInstanceOf('\chilimatic\lib\interfaces\IFlyweightValidator', $validator);
    }

    /**
     * @test
     */
    public function checkIfEmptyStringIsValid() {
        $validator = new NotEmpty();
        $ret = $validator->validate('');

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyIntIsValid() {
        $validator = new NotEmpty();
        $ret = $validator->validate(0);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyArrayIsValid() {
        $validator = new NotEmpty();
        $ret = $validator->validate([]);

        self::assertFalse($ret);
    }

    /**
     * @test
     */
    public function checkIfEmptyObjectIsValid() {
        $validator = new NotEmpty();
        $ret = $validator->validate(new stdClass());

        self::assertTrue($ret);
    }

    /**
     * @test
     */
    public function checkIfNullIsValid() {
        $validator = new NotEmpty();
        $ret = $validator->validate(null);

        self::assertFalse($ret);
    }
}