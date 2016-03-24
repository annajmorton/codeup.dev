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

    public static function getWordName($key)
    {
       // this function is silly - why do we need it?

        $input = self::get($key);

        if (is_numeric($input)||is_null($input)||is_array($input)) {
            
            throw new Exception("$input is not an alphanumeric word or name");
        }

        return $input;
    }

    public static function getnumber($key)
    {
        $input = self::get($key);
      
        if (!is_numeric($input)||empty($input)||is_array($input)) {
            
            throw new Exception("$input is not a number");
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


