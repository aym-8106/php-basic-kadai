<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_015</title>
 </head>
 
 <body>
     <p>
         <?php
          class Food {
            private $name;
            private $price;

            public function __construct(String $name, int $price) {
              $this->name = $name;
              $this->price = $price;
            }

            public function show_price() {
              echo $this->price;
            }
          }

          class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(String $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight; 
            }

            function show_height() {
              echo $this->height;
            }
          }

          $carry = new Food('carry', 500);

          $shark = new Animal('shark', 60, 1000);

          print_r($carry);
          echo '</br>';

          print_r($shark);
          echo '</br>';

          $carry->show_price();
          echo '</br>';

          $shark->show_height();
          echo '</br>';
         ?>
     </p>
 </body>
 
</html>