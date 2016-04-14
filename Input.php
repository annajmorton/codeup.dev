<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
            
            return $_REQUEST[$key];

        } else {

            return $default;
        }
    }

    public static function escape($value)
    {
        
        $outString = htmlspecialchars(strip_tags($value));
        return $outString;
    }

    protected static function argCheck($key, $min, $max) {


        if (!is_string($key)) {
            
            throw new InvalidArgumentException("$key used as the function argument is not a string");
            
        }

        if (!is_numeric($min)|| $min>$max) {
            
            throw new InvalidArgumentException("the function argument $min must be numeric and less than $max");
            
        }

        if (!is_numeric($max)|| $max<$min) {
            
            throw new InvalidArgumentException("the function argument $max must be numeric and greater than $min");
            
        }
        
    }

    protected static function isNull($input) {

        if (empty($input)) {
            
            throw new OutOfRangeException("$input is not defined");
        }
        
    }

    public static function getWordName($key, $min = 0, $max = 1000)
    {

        self::argCheck($key, $min, $max);

        $input = self::get($key);

        self::isNUll($input);

        if (is_numeric($input)||is_array($input)) {
            
            throw new DomainException("$input is not an alphanumeric word or name");
        }

        if ($input > $max || $input < $min) {

            throw new LengthException("$input does not fit $min-$max length");
        
        }

        return $input;
    }

    public static function getnumber($key, $min = -2147483647, $max = 2147483647)
    {
        self::argCheck($key, $min, $max);       

        $input = self::get($key);
      
        self::isNUll($input);


        if (!is_numeric($input)||is_array($input)) {
            
            throw new DomainException("$input is not a number");
        }

        if ($input > $max || $input < $min) {

            throw new RangeException("$input is out of $min - $max range");
        
        }

        return $input;
    }

    public static function getdate($key)
    {

        $input = self::get($key);
        
        $bigdate = date_create($input); 


        if (!$bigdate||empty($input)) {
                
            throw new Exception("$input is not in a valid date format");
        }


        return $bigdate;
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    
    private function __construct() {}
}

