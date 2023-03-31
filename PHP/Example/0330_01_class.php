<?php
    // class : 비슷한 함수들이 모여있는 집합, 동종의 객체들이 모여있는 집합

    class Student  // 클래스 이름 첫 글자는 대문자로
    {
        // 클래스 멤버 변수
        public $std_name; // public : 어디서든 사용 가능
        private $std_id; // private : 지정된 클래스 내에서만 접근 가능
        protected $std_age; // protected : 상속 class 내에서만 접근 가능
        // 접근제어 지시자 : public, private, protected
        
        // 클래스 안에 있는 function을 method라고 부름.
        public function print_student($param_std_name, $param_std_age)
        {
            $result_name = "이름 : ".$param_std_name;
            $result_age = "나이 : ".$param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }

        // private 객체를 사용할 수 있는 방법
        public function set_std_id($param_id)
        {
            // this 포인터 : class 자기 자신을 가르키고 있음
            $this->std_id = $param_id;
        }

        public function get_std_id()
        {
            return $this->std_id;
        }
    }
    
    // class를 선언(초기화)
    $obj_Student = new Student;
    // class의 method 호출
    $obj_Student->print_student("홍길동", 27);
    // class의 멤버변수 사용방법
    $obj_Student->std_name = "갑돌이";
    echo $obj_Student->std_name;

    // 아래처럼 하면 지시자가 private이기 때문에 접근 권한이 없음
    // $obj_Student->std_id = "갑순이";

    // getter, setter로 private 객체에 접근
    $obj_Student->set_std_id("갑순이id");
    echo $obj_Student->get_std_id();
    echo "\n";




    ///////////////////
    // 생성자(constructor)
    class Food
    {
        private $food_name;

        // 생성자
        public function __construct($param_food_name)
        {
            $this->food_name = $param_food_name;
        }

        public function print_food_name()
        {
            echo $this->food_name;
        }
    }

    $obj_food = new Food("탕수육");
    $obj_food->print_food_name();


?>