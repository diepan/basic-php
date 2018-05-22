<?php

const NAME = 'name';
$name = 'University';

function getName($name) {
    return $name;
}
class School {
   public function setName() {
       echo $this->schoolName();
   }
   public function schoolName() {
       return $name;
   }
   public function teaching() {
       echo $this->schoolName . ' ' . $this->actionTeaching();
   }
   public function actionTeaching() {
       return 'dạy học';
   }
}
class Students extends School {
    public function getTuition() {
        echo $this->setName() . 'phải đóng học phí mới được đi học';
    }
}
$student = new Students;
$student = setName();
$student = teaching();
$student = getTuition();
?>