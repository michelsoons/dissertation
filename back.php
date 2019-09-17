<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Back-end development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janis app description - 160 characters">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php
    include('quizRepoback.php');
    $object = new QuizRepoBack();
    ?>

    <?php include "./navbar.html" ?>

    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>Back-End development</h1>
            <p class="text-white">Back end Development refers to the server side of development where you are primarily focused on how the site works. Making updates and changes in addition to monitoring functionality of the site will be your primary responsibility. This type of web development usually consists of three parts: a server, an application, and a database. Code written by back end developers is what communicates the database information to the browser. Anything you can’t see easily with the eye such as databases and servers is the work of a back end developer. Back end developer positions are often called programmers or web developers.</p>
        </div>
    </header>

    <div class="container"><br>
        <p>Right before you dive in to learning the back-end web development keep in mind that each of us learn in different ways, some people like to read documentation or books, maybe even articles and learn from them. Some people learn by following YouTube tutorials or interactive tutorials that Codecademy and Freecodecamp offers. Have a look at all the different resources below for each of the languages and see what works the best for you, remember to practice and you will find it easier to learn to program if you have some sort of project in mind that you can work towards completing and learn everything along the way!</p>
        <p>Below are some other great resources to help you out among the way, some of them are large development communities, reference guides and websites that have great content for developers starting from just news articles and going on with tutorials.</p>
        <a href="https://github.com/kamranahmedse/developer-roadmap">Developer roadmap 2019</a>
        <p>The link above is something that we encourage you to have a look first, It is called a roadmap, it is visual representation on where to start and where to move on to once you have grasped the basics. Don't get too scared whilst looking at it, once you start learning all the rest of the languages that are mentioned there will become easier to learn and you'll already have enough knowledge to know what you want to pick up next. </p>
        <a href="https://www.reddit.com/r/learnprogramming/wiki/faq#wiki_getting_started">Large developer community forum on Reddit called Learnprogramming</a><br>
        <a href="https://www.reddit.com/r/webdev/">Large developer community forum on Reddit called WebDev</a><br>
        <a href="https://www.reddit.com/r/PHP/">Large developer community forum on Reddit called PHP.</a><br>
        <a href="https://www.monitis.com/blog/complete-megalist-25-helpful-tools-for-back-end-developers/">Complete Megalist: 25 Helpful Tools For Back-End Developers.</a><br>
        <a href="https://www.codecademy.com/articles/back-end-architecture">Back-End Web Architecture. Article by Codecademy</a><br>
        <a href="https://learntocodewith.me/tools/">RECOMMENDED RESOURCES AND TOOLS FOR BEGINNERS.</a><br>
        <a href="https://scrimba.com/">Scrimba. Scrimba lets you play around with the instructor's code directly inside the screencast. As a result, you'll learn faster and have more fun.</a><br><br>
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
                <div class="row mb-4">
                    <h2 class="col-12 text-center">PHP development tutorials</h2>

                    <div class="col-12">
                        <img src="images/php.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            PHP is a general-purpose scripting language that is especially suited to server-side web development, in which case PHP generally runs on a web server. Any PHP code in a requested file is executed by the PHP runtime, usually to create dynamic web page content or dynamic images used on websites or elsewhere.
                        </p>
                    </div>                   

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesPHP(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>


                <div class="row mb-4">
                    <h2 class="col-12 text-center">SQL development tutorials</h2>

                    <div class="col-12">
                        <img src="images/sql.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            Structured Query Language (SQL) is a standard computer language for relational database management and data manipulation. SQL is used to query, insert, update and modify data. Most relational databases support SQL, which is an added benefit for database administrators (DBAs), as they are often required to support databases across several different platforms.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesSQL(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>


                <div class="row mb-4">
                    <h2 class="col-12 text-center">Node.js development tutorials</h2>

                    <div class="col-12">
                        <img src="images/node.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            Node.js (Node) is an open source development platform for executing JavaScript code server-side. Node is useful for developing applications that require a persistent connection from the browser to the server and is often used for real-time applications such as chat, news feeds and web push notifications.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesNODE(); ?>
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
                        <?php $resources = $object->getFrontEndResourcesPYTHON(); ?>
                        <ul>
                            <?php foreach ($resources as $entry) : ?>
                                <li><a href="<?= $entry['link'] ?>" target="_blank"><?= $entry['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="row mb-4">
                    <h2 class="col-12 text-center">Ruby development tutorials</h2>

                    <div class="col-12">
                        <img src="images/ruby.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p>
                            Ruby is an open source, interpreted, object-oriented programming language created by Yukihiro Matsumoto, who chose the gemstone's name to suggest "a jewel of a language." Ruby is designed to be simple, complete, extensible, and portable. Developed mostly on Linux, Ruby works across most platforms, such as most UNIX-based platforms, DOS, Windows, Macintosh, BeOS and OS/2, for example. According to proponents, Ruby's simple syntax (partially inspired by Ada and Eiffel), makes it readable by anyone who is familiar with any modern programming language.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <?php $resources = $object->getFrontEndResourcesRUBY(); ?>
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