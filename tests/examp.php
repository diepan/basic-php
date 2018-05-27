<?php

const NAME = 'name';
$name = 'name';
$fullName = 'fullName';

/**
 * Get name
 * @paran string $name
 * @return string
 */
function getName($name) {
    return $name;
}

class Personal {
    protected $name;
    /**
     * set name
     * @param string
     */

    public function setName($myName) {
        $this->name = $myName;
    /**
     * action eat
     */
         
    }
    public function getName(){
        return $this->name;
    }
    public function eat(){
        echo $this->name . ' ' . $this->generateActionEat();
    }

    private generateActionEat(){
        return 'ăn cơm';
    }
}

class Woman extends Personal {
    public function getMarried(){
        echo $this->getName() . 'happy wedding';
    }
}

$an = new Woman;
$an->setName('an')();
$an->eat();
$an->getMarried();

