<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>Mini Project</title>
</head>

<body>

    <div class="container-fluid py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <nav class="nav">
                        <a class="nav-link active nav_bgs" aria-current="page" href="#" id="team">Team</a>
                        <a class="nav-link nav_bgs" href="#">Quiz</a>
                        <a class="nav-link nav_bgs" href="#">Assignments</a>
                    </nav>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>


    <?php

    $questionSet = [
        [
            'question' => 'Which command should you use to initialize a new git repository?',
            'options' => [
                'git init', 'git bash', 'git install', 'git start'
            ]
        ],
        [
            'question' => 'Git commit -m < ? >, ? is for...',
            'options' => [
                'comment', 'repo url', 'file name to be committed', 'None'
            ]
        ],
        [
            'question' => 'Git is a Version Control System...',
            'options' => [
                'True', 'False'
            ]
        ],
        [
            'question' => 'Who is known as the father of PHP?',
            'options' => [
                'William Makepiece', 'Rasmus Lerdorf ', 'Drek Kolkevi', 'List Barely'
            ]
        ],
        [
            'question' => 'How many types of loops are there in php language?',
            'options' => [
                '1', '2', '3', '4'
            ]
        ],
        [
            'question' => "What is the meaning of this command 'git add . '  ?",
            'options' => [
                'stage individual file of your git project', 'stage All files of your current directory', 'stage all files of your whole project', 'None of these
                '
            ]
        ],
        [
            'question' => "Github is not a Software Development Hosting Platform for Collaboration.",
            'options' => [
                'Ture', 'False'
            ]
        ],
        [
            'question' => "Popping is an act of …",
            'options' => [
                'Adding values', 'Taking off values from stack', 'Transferring values from stack', 'None of them
                '
            ]
        ],
        [
            'question' => "array_diff() makes a new array.",
            'options' => [
                'True', 'False'
            ]
        ],
        [
            'question' => " Which in-built function will add a value to the end of an array?",
            'options' => [
                'array_unshift()', 'into_array()', 'inend_array()', 'array_push()'
            ]
        ],
    ];
 shuffle($questionSet);

    foreach ($questionSet as $key1 => $questions) {

    ?>
        <h6 class="ms-5 mt-5"> Q<?php echo ++$key1 . ') ' . $questions['question']; ?> </h6>

        <?php
        foreach ($questions['options'] as $key2 => $questions_mcq) {

        ?>
            <div class="form-check ms-5 ">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo $questions_mcq ?>
                </label>
            </div>

        <?php } ?>
    <?php } ?>

    <!-- ============================== -->
    <?php
    $tims_members = [
        ['name' => 'Shakil', 'position'        => 'owner', 'phone' => '01732435554', 'address' => 'Tangail', 'thumliel'    => '3.png'],
        ['name' => 'Rafikul Islam', 'position' => 'CEO', 'phone'   => '01732435589', 'address' => 'Dhaka', 'thumliel'      => '1.png'],
        ['name' => 'Rony', 'position'          => 'owner', 'phone' => '01732435508', 'address' => 'Bogora', 'thumliel'     => '4.png'],
        ['name' => 'Kamal', 'position'         => 'CEO', 'phone'   => '01732435531', 'address' => 'Khagrasory', 'thumliel' => '5.png'],
    ];

    foreach ($tims_members as $key => $name) {
    }

    ?>

    <div class="container-fluid py-5 mt-5">
        <div class="container">
            <h4>Question 02:</h4>
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
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>