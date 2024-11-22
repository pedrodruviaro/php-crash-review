<?php

use FTP\Connection as FTPConnection;

class Person { 
    function __construct(public string $name, public int $age){}

    function introduce () {
        echo "Hello i'm $this->name.";
    }
}



class Employee extends Person {
    function __construct(public string $name, public int $age, public string $jobtitle)
    {
        
    }

    public function introduce()
    {
        echo parent::introduce() . " I work as $this->jobtitle.";
    }
}


$peter = new Employee("Pedro", 28, "Sr DA");

$peter->introduce();



class MathUtils { 
    public static $pi = 3.13;

    public static function square(float $n) {
        return $n * $n;
    }
}

echo MathUtils::$pi;
echo "\n";
echo MathUtils::square(2);

// Singleton
class Connection {
    private static $instance = null;

    private function __construct()
    {
        
    }

    public static function singleton() {
        if (Connection::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}

$connection = Connection::singleton();