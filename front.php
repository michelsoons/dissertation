<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Front-end development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janis app description - 160 characters">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php 
        include('quizRepofront.php');
        $object= new QuizRepofront();
    ?>

    <?php include "./navbar.html" ?>

    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>Front-End development</h1>
            <p class="text-white">A front-end developer is a programmer that codes the front end of a website. Typically, the front-end developer's job is to convert website design files into raw HTML, JavaScript (JS) and/or CSS code. This includes the basic website design/layout, images, content, buttons, navigation and internal links. The end result is code that serves as the website's front-end structure, which is used by a back-end developer to add business logics and connect databases and processes, among other processes.</p>
        </div>
    </header>
    
    <div class="container"><br>
        <p>Right before you dive in to learning the front end web development keep in mind that each of us learn in different ways, some people like to read documentation or books, maybe even articles and learn from them. Some people learn by following YouTube tutorials or interactive tutorials that Codecademy and Freecodecamp offers. Have a look at all the different resources below for each of the languages and see what works the best for you, remember to practice and you will find it easier to learn to program if you have some sort of project in mind that you can work towards completing and learn everything along the way!</p>
        <p>Below are some other great resources to help you out among the way, some of them are large development communities, reference guides and websites that have great content for developers starting from just news articles and going on with tutorials.</p>
        <a href="https://github.com/kamranahmedse/developer-roadmap">Developer roadmap 2019</a>
        <p>The link above is something that we encourage you to have a look first, It is called a roadmap, it is visual representation on where to start and where to move on to once you have grasped the basics. Don't get too scared whilst looking at it, once you start learning all the rest of the languages that are mentioned there will become easier to learn and you'll already have enough knowledge to know what you want to pick up next. </p>
        <a href="https://www.reddit.com/r/learnprogramming/wiki/faq#wiki_getting_started">Large developer community forum on Reddit called Learnprogramming</a><br>
        <a href="https://www.reddit.com/r/webdev/">Large developer community forum on Reddit called WebDev</a><br>
        <a href="https://www.30secondsofcode.org/">30 seconds of code. Curated collection of useful JavaScript snippets that you can understand in 30 seconds or less.</a><br>
        <a href="https://cssreference.io/">A free visual guide to CSS</a><br>
        <a href="https://developer.mozilla.org/en-US/">MDN web docs. Resources for developers, by developers.</a><br>
        <a href="https://learntocodewith.me/tools/">RECOMMENDED RESOURCES AND TOOLS FOR BEGINNERS.</a><br>
        <a href="https://enboard.co/frontend/">Organized resources about front end development.</a><br>
        <a href="https://scrimba.com/">Scrimba. Scrimba lets you play around with the instructor's code directly inside the screencast. As a result, you'll learn faster and have more fun.</a><br><br>
        <div class="row mt-5">
            <div class="col-md-10 offset-1">
                <div class="row">
                    <h2 class="col-12 text-center">HTML development tutorials</h2>

                    <div class="col-12">
                        <img src="images/htmllogosml.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                            HTML5 is the latest version of Hypertext Markup Language, the code that describes web pages. It's actually three kinds of code: HTML, which provides the structure; Cascading Style Sheets (CSS), which take care of presentation; and JavaScript, which makes things happen.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResources();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
                
              
                <div class="row mb-4">
                    <h2 class="col-12 text-center">CSS development tutorials</h2>

                    <div class="col-12">
                        <img src="images/csslogo.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        CSS. Stands for "Cascading Style Sheet." Cascading style sheets are used to format the layout of Web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a page's HTML.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResources1();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>

                
                <div class="row mb-4">
                    <h2 class="col-12 text-center">JavaScript development tutorials</h2>

                    <div class="col-12">
                        <img src="images/jslogo.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        JavaScript is a dynamic computer programming language. It is lightweight and most commonly used as a part of web pages, whose implementations allow client-side script to interact with the user and make dynamic pages. It is an interpreted programming language with object-oriented capabilities.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResources2();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>


               <div class="row mb-4">
                    <h2 class="col-12 text-center">React.js development tutorials</h2>

                    <div class="col-12">
                        <img src="images/react.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        ReactJS is JavaScript library used for building reusable UI components. According to React official documentation, following is the definition − React is a library for building composable user interfaces. It encourages the creation of reusable UI components, which present data that changes over time.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResources3();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
                <div class="row mb-4">
                    <h2 class="col-12 text-center">Vue.js development tutorials</h2>

                    <div class="col-12">
                        <img src="images/vue.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        Vue.js (pronounced /vjuː/, like view) is a library for building interactive web interfaces. The goal of Vue.js is to provide the benefits of reactive data binding and composable view components with an API that is as simple as possible. Vue.js itself is not a full-blown framework - it is focused on the view layer only.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResources4();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
                <p>All the resources provided on this page are absolutely free of charge however you can imagine how many resources are there, take this as a compilation of what other developers advise to get started, but refer to the r/learnprogramming on Reddit if you have any further questions, they have a whole Wiki page dedicated to answer the most asked questions by beginners</p>
                <p>Remeber that there are great sources for learning that require payments as well, Udemy is one of them with thousands of students enrolling to courses made by other developers, some of them are free and some of them require small one-time payment. Lynda.com is a great platform for learning as well as Coursera, however have a look at the selection we've provided first</p><br>
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
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>