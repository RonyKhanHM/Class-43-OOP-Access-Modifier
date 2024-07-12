    
    <?php

    echo "<a href =index.php>Home</a><br>";

    class person{
      public $name;
      protected $age;
      private $password;

      public function __construct($namepram, $passpram){
        $this->name= $namepram;
        $this->password= $passpram;
      }
      public function fbName(){
        echo  "This Facebook ID name is:".$this->name."<br>";
      }
      protected function fbage(){
        echo  "This person age is:".$this->age."<br>";
      }
      private function fbpass(){
        echo  "This Facebook ID Pass is:".$this->password."<br>";
      }
      public function password(){
        $this->fbpass();
      }

    }


    class employe extends person{
      public function show(){
        $this->age=20;
        $this->fbage();
      }
    }
    $employObj = new employe("RonykhanHM","rony1@khan2");
    $employObj->fbName();
    $employObj->show();
    $employObj->password();

    ?>