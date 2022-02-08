<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP In Generale</a></h1>
  </header>

  <div id="content">

    <p><?php echo "// THIs is a single line comment  comment" ; ?></p>
    <p><?php echo "# THIs is a also another way to write single line comment " ; ?></p>

    <p>Wordpress Was Released in the year
       "<?php $year = 2003; echo $year; ?>"
    </p>


    <?php
        // THIs is a single line comment  comment
        # THIs is a also another way to write single line comment
        $x = 40 ;
      // Create an array of post objects using the display_post function

        function test(){
          $x = 5 ;
          print " this x= $x is inside function test()" ;
          print  "<p> Accessing value of  global variable x = " . $GLOBALS['x'] ."</p>";
        }

        test();
        echo "<br>global variable x = $x" ;
      // Loop through array of posts and display each one on the page

        // Call the display_title function and pass it the $post


      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $title ) {

        // Echo an <h3> tag with the $title inside

      }

    ?>

  </div>

  <div class="content2">
  <p>
      <?php
      $x = 5985;
      var_dump($x);


      $cars = array('bmw', 'audi' ,'tesla' , 'vw' , 'jaguar' ,'maserati')
       ?>
    </p>

  </div>
  <?php
    echo "<p class=\"justaclass\"> Accessing cars array from some other php block <br>" ;
    $i = 0;
         while($i < 6){
           echo "$cars[$i] <br>" ;
           $i++ ;
         }
   ?>

          <h3>Arrays as Objects in PHP </h3>
<?php
 $myString = "Hello Peter";
  var_dump($myString);

  echo "<p>this is an assocciative array with key:value pairs </p>" ;
 $arrayAnimals = array("dog" =>"rover" , "cat" =>"snow" , "hamster" => "fluffbaff" ,) ;
  print_r($arrayAnimals ) ;

  echo "<p>Array flipping method value:key pairs array_flip </p>";
  print_r(array_flip($arrayAnimals) ) ;

  echo "<p><br> Foreach method <br></p>" ;

  foreach( $arrayAnimals as $chars){
    echo "$chars ";
  }

  echo "<p><br> Classes and OOP's concepts <br></p>" ;
   class Employee {
      public $name;
      public  $empId ;
      private $salary ;

    function __construct($name , $empId){
      $this->name = $name ;
      $this->empId = $empId ;
     }

    function __destruct(){
       echo "<p>Employee $this->name id: $this->empId data was dropped <p>" ;
    }

    function printDetails(){
      echo "<br><h3>Employee Name: $this->name </h3><br>" ; // 'this' is important
      echo "<p>Employee Id: $this->empId </p><br>" ;
    }
   }

   $john = new Employee("John" ,"13") ;

   $john->printDetails();

   $jophin = new Employee("jophin" , "24");
   $jophin->printDetails();

  ?>
</body>
</html>
