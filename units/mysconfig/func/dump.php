<?php
/***
    The Source Code of mysinstall
    (C) 2021-2022 Joseph Z.
    All rights reserved.
    license: BSD 3-Clause 
***/

/*
    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
    AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
    IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
    FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
    DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
    SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
    CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
    OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
    OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

class VarDump
{
    private static $isInLoop = false;
    private static $buffer = false;
 
    public static function dump()
    {
		global $fp;
        $args = func_get_args();
        $args_num = func_num_args();
        if (self::$buffer && $args_num == 1) {
            $args = func_get_args();
            $args = isset($args[0]) ? $args[0] : [];
            if (!empty($args) && (is_array($args) || is_object($args))) {
                $args_num = count($args);
            }
        }
        self::$buffer = false;
        for ($i = 0; $i < $args_num; ++$i) {
            $param = $args[$i];
            $ptype = gettype($param);
            switch ($ptype) {
                case "NULL":
                    self::dump_null($fp);
                    break;
                case "boolean":
                    self::dump_boolean($fp,$param);
                    break;
                case "integer":
                    self::dump_integer($fp,$param);
                    break;
                case "double":
                    self::dump_double($fp,$param);
                    break;
                case "string":
                    self::dump_string($fp,$param);
                    break;
                case "array":
                    self::dump_array($fp,$param);
                    break;
                case "object":
                    self::dump_object($fp,$param);
                    break;
                case "resource":
                    //fwrite($fp, "resource");
                    break;
                default:
                    fwrite($fp, "unknown type");
            }
        }
    }
 
    public static function dumpx($fp)
    {
        self::$buffer = true;
        ob_start();
        self::dump($fp,func_get_args());
        $var = ob_get_clean();
        return $var;
    }
 
    public static function dump_null($fp)
    {
        fwrite($fp,"NULL,");
        if (!self::$isInLoop) {
            fwrite($fp, "\n");
        }
        self::$isInLoop = false;
    }
 
    public static function dump_boolean($fp,$bool)
    {
        if ($bool) {
            fwrite($fp,"true,");
        } else {
            fwrite($fp,"false,");
        }
        if (!self::$isInLoop) {
            fwrite($fp, "\n");
        }
        self::$isInLoop = false;
    }
 
    public static function dump_integer($fp,$int)
    {
        fwrite($fp,"int($int)");
        if (!self::$isInLoop) {
            fwrite($fp, "\n");
        }
        self::$isInLoop = false;
    }
 
    public static function dump_double($fp,$double)
    {
        fwrite($fp, "float($double)");
        if (!self::$isInLoop) {
            fwrite($fp, "\n");
        }
        self::$isInLoop = false;
    }
 
    public static function dump_string($fp,$str)
    {
        fwrite($fp, '"'.$str.'",');
        if (!self::$isInLoop) {
            fwrite($fp, "\n");
        }
        self::$isInLoop = false;
    }
 
    public static function dump_array($fp,$arr)
    {
        static $pads = [];
        $keys = array_keys($arr);
        $len = count($arr);
        fwrite($fp, "[");
        array_push($pads, "    ");
        for ($i = 0; $i < $len; $i++) {
            if (gettype($keys[$i]) == 'string')
				fwrite($fp, "\n".implode('', $pads)."'".$keys[$i]."' => ");
			else
				fwrite($fp, "\n".implode('', $pads).$keys[$i]." => ");
            $index = $keys[$i];
            self::$isInLoop = true;
            self::dump($arr[$index]);
        }
        array_pop($pads);
        $pad = implode('', $pads);
        fwrite($fp, "\n{$pad}];");
        if ($pad == '') {
            fwrite($fp, "\n");
        }
    }
 
    public static function dump_prop($fp,$obj)
    {
        static $pads = [];
        $reflect = new ReflectionClass($obj);
        $prop = $reflect->getProperties();
        $len = count($prop);
        fwrite($fp, "($len) {");
        array_push($pads, "    ");
        for ($i = 0; $i < $len; $i++) {
            $index = $i;
            if (!$prop[$index]->isPublic()) {
                continue;
            }
            $prop_name = $prop[$index]->getName();
            fwrite($fp, "\n", implode('', $pads), "[\"{$prop_name}\"] => ");
            self::$isInLoop = true;
            self::dump($prop[$index]->getValue($obj));
        }
        array_pop($pads);
        $pad = implode('', $pads);
        fwrite($fp, "\n{$pad}}");
        if ($pad == '') {
            fwrite($fp, "\n");
        }
    }
 
    public static function dump_object($fp,$obj)
    {
        static $objId = 1;
        $className = get_class($obj);
        fwrite($fp, "object($className)#$objId");
        $objId++;
        self::dump_prop($obj);
    }
}
?>
