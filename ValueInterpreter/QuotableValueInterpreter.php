<?php

namespace IndentedLines\ValueInterpreter;

use Quoter\QuoteTool;


/**
 * QuotableValueInterpreter
 * @author Lingtalfi
 * 2015-12-19
 *
 */
class QuotableValueInterpreter extends ValueInterpreter
{


    //------------------------------------------------------------------------------/
    // IMPLEMENTS ValueInterpreterInterface
    //------------------------------------------------------------------------------/
    /**
     * @return mixed
     */
    public function getValue($line)
    {
        if (false !== $line2 = QuoteTool::unquote($line)) {
            $line = $line2;
        }
        return parent::getValue($line);
    }

}
