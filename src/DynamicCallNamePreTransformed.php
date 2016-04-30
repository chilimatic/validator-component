<?php

namespace chilimatic\lib\Validator;

use chilimatic\lib\Interfaces\IFlyWeightValidator;

/**
 * Class DynamicCallNamePreTransformed
 * @package chilimatic\lib\Validator
 */
class DynamicCallNamePreTransformed implements IFlyWeightValidator
{
    /**
     * the local Parser
     *
     * @var string
     */
    const PARSE_DELIMITER = '-';

    /**
     * list of invalid characters in a dynamic function call name
     *
     * @var string
     */
    private $invalidCharacters = '/[|,.:;?`!"§\'%&$\/()=*<>]/';

    /**
     * @var string
     */
    private $errorMsg;

    /**
     * @param mixed $content
     *
     * @return string
     */
    public function __invoke($content)
    {
        return $this->validate($content);
    }

    /**
     * @param string $content
     *
     * @return string
     */
    public function validate($content)
    {
        if (!$content) {
            return false;
        }
        if (preg_match('/[A-Z]/', $content)) {
            return false;
        } elseif (mb_strpos($content, self::PARSE_DELIMITER) === 0) {
            $this->errorMsg = self::PARSE_DELIMITER . ' is not allowed to be at the beginning of the callname';

            return false;
        } elseif (mb_strpos($content, self::PARSE_DELIMITER) == (strlen($content) - 1)) {
            $this->errorMsg = self::PARSE_DELIMITER . ' is not allowed to be at the end of the callname';

            return false;
        } elseif (preg_match($this->invalidCharacters, $content)) {
            $this->errorMsg = $this->invalidCharacters . ' are not allowed to be in the callname';

            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * @return string
     */
    public function getInvalidCharacters()
    {
        return $this->invalidCharacters;
    }
}