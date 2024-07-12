    <?php


echo "<a href =prosolv.php>ProblemSolve</a> <br>";


      echo "1.This is public modifire.<br>";
      echo "<br>";
      class carA{
        public $name;
        public $engine_cc;

        public function __construct($nameparam, $engineparam){
          $this->name = $nameparam;
          $this->engine_cc = $engineparam;
        }

        public function demoCar(){
          echo "The Car Name is:".$this->name."<br>";
          echo "The Engin is:".$this->engine_cc."<br>";
        }
      }
      $carObjec = new carA("BMW", "4000");
      $carObjec-> demoCar();

      // --------------------------------------------
      echo "<br>";
      echo "Without constactor<br>";
      echo "<br>";

      class carAa{
        public $name;
        public $engine_cc;


        public function demoCarAa(){
          echo "The Car Name is:".$this->name."<br>";
          echo "The Engin is:".$this->engine_cc."<br>";
        }
      }
      $carObjec = new carAa();
      $carObjec-> name= 'BMW';
      $carObjec-> engine_cc= '4000';
      $carObjec-> demoCarAa();

      echo "<br>";


// ----------------------------------------------------------------------


        echo "2. This protected modifire. <br>";
        echo "<br>"; 
      class carB{
        public $name;
        public $engine_cc;

        protected function demoCar(){
          echo "The Car Name is:".$this->name."<br>";
          echo "The Engin is:".$this->engine_cc."<br>";
        }
        public function democar2(){
          $this->demoCar();
        }
      }

      class carC extends carB{
        public function show(){
          $this->demoCar();
          $this->democar4();
        }
        private function democar3(){
          echo "This is private car";
        }

        public function democar4(){
        $this->democar3();
        }
      }
      $carObject2 = new carC();
      $carObject2->show();

      echo "<br>";



      echo "3. This protected modifire.<br>";
      echo "<br>";

         
    ?>