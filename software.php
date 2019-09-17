<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Software development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janis app description - 160 characters">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php
    include('quizReposoftware.php');
    $object = new QuizReposoftware();
    ?>

    <?php include "./navbar.html" ?>

    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>Software development</h1>
            <p class="text-white">Software development is a process by which standalone or individual software is created using a specific programming language. It involves writing a series of interrelated programming code, which provides the functionality of the developed software. Software development may also be called application development and software design.!</p>
        </div>
    </header>

    <div class="container"><br>
        <p>Right before you dive in to learning software development keep in mind that each of us learn in different ways, some people like to read documentation or books, maybe even articles and learn from them. Some people learn by following YouTube tutorials or interactive tutorials that Codecademy and Freecodecamp offers. Have a look at all the different resources below for each of the languages and see what works the best for you, remember to practice and you will find it easier to learn to program if you have some sort of project in mind that you can work towards completing and learn everything along the way!</p>
        <p>Below are some other great resources to help you out among the way, some of them are large development communities, reference guides and websites that have great content for developers starting from just news articles and going on with tutorials.</p>
        <a href="https://www.reddit.com/r/learnprogramming/wiki/faq#wiki_getting_started">Large developer community forum on Reddit called Learnprogramming</a><br>
        <a href="https://www.reddit.com/r/javahelp/">Large developer community forum on Reddit called Java help</a><br>
        <a href="https://www.reddit.com/r/javahelp/">Large developer community forum on Reddit called Learn Python</a><br>
        <a href="https://github.com/ossu/computer-science">Open Source Society University. Path to a free self-taught education in Computer Science!</a><br>
        <a href="https://www.reddit.com/r/csharp/">Large C-sharp developer community on Reddit</a><br>
        <div class="row mt-5">
            <div class="col-md-10 offset-1">
                <div class="row mb-4">
                    <h2 class="col-12 text-center">C# development tutorials</h2>

                    <div class="col-12">
                        <img src="images/csharp.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            C# is a hybrid of C and C++, it is a Microsoft programming language developed to compete with Sun's Java language. C# is an object-oriented programming language used with XML-based Web services on the .NET platform and designed for improving productivity in the development of Web applications.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesC(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>


                <div class="row mb-4">
                    <h2 class="col-12 text-center">C++ development tutorials</h2>

                    <div class="col-12">
                        <img src="images/cplus.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            C++ is a high-level programming language developed by Bjarne Stroustrup at Bell Labs. C++ adds object-oriented features to its predecessor, C. C++ is one of the most popular programming language for graphical applications, such as those that run in Windows and Macintosh environments.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesCplus(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="row mb-4">
                    <h2 class="col-12 text-center">Java programming tutorials</h2>

                    <div class="col-12">
                        <img src="images/java.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            Java is a programming language that produces software for multiple platforms. When a programmer writes a Java application, the compiled code (known as bytecode) runs on most operating systems (OS), including Windows, Linux and Mac OS. Java derives much of its syntax from the C and C++ programming languages.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesSjava(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="row mb-4">
                    <h2 class="col-12 text-center">Python development tutorials</h2>

                    <div class="col-12">
                        <img src="images/python.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            Python is a multiparadigm, general-purpose, interpreted, high-level programming language. Python allows programmers to use different programming styles to create simple or complex programs, get quicker results and write code almost as if speaking in a human language. Some of the popular systems and applications that have employed Python during development include Google Search, YouTube, BitTorrent, Google App Engine, Eve Online, Maya and iRobot machines.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesSpython(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <p>All the resources provided on this page are absolutely free of charge however you can imagine how many resources are there, take this as a compilation of what other developers advise to get started, but refer to the r/learnprogramming on Reddit if you have any further questions, they have a whole Wiki page dedicated to answer the most asked questions by beginners</p>
                <p>Remeber that there are great sources for learning that require payments as well, Udemy is one of them with thousands of students enrolling to courses made by other developers, some of them are free and some of them require small one-time payment. Lynda.com is a great platform for learning as well as Coursera, however have a look at the selection we've provided first</p><br>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <div class="col-lg-12 text-center text-lg-center">
                <p>
                    Janis Mikelsons
                </p>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>