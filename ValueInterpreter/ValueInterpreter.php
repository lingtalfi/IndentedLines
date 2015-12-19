<?php

namespace IndentedLines\ValueInterpreter;

use Bat\StringTool;


/**
 * ValueInterpreter
 * @author Lingtalfi
 * 2015-12-14
 *
 */
class ValueInterpreter implements ValueInterpreterInterface
{


    public static function create()
    {
        return new static();
    }
    

    //------------------------------------------------------------------------------/
    // IMPLEMENTS ValueInterpreterInterface
    //------------------------------------------------------------------------------/
    /**
     * @return mixed
     */
    public function getValue($line)
    {
        return StringTool::autoCast($line);
    }

}
