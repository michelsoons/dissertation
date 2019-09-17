<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janis app description - 160 characters">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <title>devPath Quiz</title>
</head>
<body id="page-top" data-spy="scroll" data-target="#navbar" data-offset="30">

    <?php include "./navbar.html" ?>

    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>DevPath{} quiz</h1>
            <p class="tagline">Please complete the quiz below to start learning. The quiz will take you through set of 5 different questions and based on your answers it will determine which of the development paths are you are more interested in and will provide with different alternative resources for different development languages.</p>
        </div>
    </header>
    <div class="container">
        <br><br>
        <p>Before you take the quiz we strongly advise to have a look at the introduction page and read through the brief descriptions on different development paths. Haven't read through it yet ? here's the link:</p><a href="intro.html">Devpath{} Introduction page</a><br>
        <p>Ready to take the quiz and start your new journey ? Click the button below!</p>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div id="question-wrap">

                </div>
                <br>
                <div class="mt-3 text-center">
                    <a id="question-btn" class="btn btn-primary mx-64 text-white" onclick="nextQuestion()">Start the quiz</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>