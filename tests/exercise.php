<?php

class Teacher {
    private $school_name;
   
   public function setName($name) {
         $this->school_name = $name;
   }
   public function getName() {
       return $this->school_name;
   }
   public function teaching() {
       echo $this->schoolName . ' ' . $this->actionTeaching();
   }
   public function actionTeaching() {
       return 'dạy học';
   }
}
class Students extends Teacher {
    public function getTuition() {
        echo $this->getName() . 'phải đóng học phí mới được đi học';
    }
}
$student = new Students;
$student->getName('Diệp');
$student->getTuition();
?>