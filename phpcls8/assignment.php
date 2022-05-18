
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Project One</title>
  </head>
  <body>

  <?php
    $questions = [
    ['question' => 'Which is the correct order following below?',
     'options' =>['Elementor is a Theme', 'Elementor is a page builder','Website builder','None of above']
    ],

    ['question' => 'Which options is correct for adding a plugin from WordPress dashboard?',
     'options' =>['Appearance > themes > add new', 'Plugins > add new','Plugins > plugin editor','Don’t know']
    ],

    ['question' => 'Which one is the most popular free slider plugin?',
     'options' =>['Smart Slider 3', 'Mix Slider','Slider Revolution','WordPress Slider']
    ],

    ['question' => 'Find out the most popular premium WordPress plugins purchase platform.',
     'options' =>['wordpress.org', 'wordpress.com','themeforest.net','codecanyon.net']
    ],
    [
      'question' => "array_diff() makes a new array.",
      'options' =>['wordpress.org', 'wordpress.com','themeforest.net','codecanyon.net']
  ],  
  [
    'question' => "array_diff() makes a new array.",
    'options' => ['True', 'False']
],
    ];

shuffle($questions);
// echo "<pre>";
  ?>
<div class="container">
<?php
foreach ($questions as $key => $value) {

?>


<!-- =========================== -->
<div class="form-group">
<div class="form"><br/>
            <label><b style="font-size: 18px"><?php echo "Q".++$key.") ". $value['question'] ?><div></div></b></label>
            
            <?php
            shuffle($value['options']);
              foreach ($value['options'] as $key2 => $value2) {

              ?> 
<div class="radio"> 
                    <label class="" for="ans-4600">
                        <input type="radio" name="answer_1262" id="ans-4600" disabled="" class="styled">
                        <span class=""><?php echo $value2?></span></label>
</div>
</div> 

<?php } ?>
<?php } ?>
<!-- =========================== -->

  <?php
    $tims_members = [
        ['name' => 'Shoaeeb', 'position' => 'owner', 'phone' => '01758355542', 'address' => 'Rajshahi', 'thumliel'    => '3.png'],

        ['name' => 'Rafikul Islam', 'position' => 'CEO', 'phone'   => '01732435589', 'address' => 'Dhaka', 'thumliel'      => '1.png'],

        ['name' => 'Rony', 'position' => 'owner', 'phone' => '01732435508', 'address' => 'Bogora', 'thumliel'     => '4.png'],

        ['name' => 'Shakil', 'position' => 'CEO', 'phone'   => '01732435531', 'address' => 'Khagrasory', 'thumliel' => '5.png']
    ];

    foreach ($tims_members as $key => $name) {
    }

    ?>

    
        <div class="container">
            <h2 class="text-center mb-5" id="team">Our Teams Section</h2>
            <div class="row justify-content-center">

                <?php
                foreach ($tims_members  as $key => $member) {

                ?>

                    <div class="col-md-3 text-center">
                        <div class="bg">
                            <img src="img/<?php echo $member['thumliel']; ?>" alt="">
                            <p class="mb-0"><strong>Name:</strong> <?php echo $member['name']; ?> </p>
                            <p class="mb-0"><strong>Position:</strong> <?php echo $member['position']; ?> </p>
                            <p class="mb-0"><strong>Phone:</strong> <?php echo $member['phone']; ?> </p>
                            <p class="mb-0"><strong>Address:</strong> <?php echo $member['address']; ?> </p>
                            <span><a href="#"><i class="fa-brands fa-facebook-square"></i></a></span>
                            <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fa-brands fa-linkedin"></i></a></span>
                            <span><a href="#"><i class="fa-brands fa-instagram-square"></i></a></span>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    

<!-- =================================== -->

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>