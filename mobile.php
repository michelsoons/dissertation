<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Mobile development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Janis app description - 160 characters">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php 
        include('quizRepomobile.php');
        $object= new QuizRepomobile();
    ?>

    <?php include "./navbar.html" ?>

    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>Mobile development</h1>
            <p class="text-white">Mobile application development is the process of creating software applications that run on a mobile device, and a typical mobile application utilizes a network connection to work with remote computing resources. Hence, the mobile development process involves creating installable software bundles (code, binaries, assets, etc.) , implementing backend services such as data access with an API, and testing the application on target devices.</p>
        </div>
    </header>
    
    <div class="container"><br>
    <p>Right before you dive in to learning mobile application development keep in mind that each of us learn in different ways, some people like to read documentation or books, maybe even articles and learn from them. Some people learn by following YouTube tutorials or interactive tutorials that Codecademy and Freecodecamp offers. Have a look at all the different resources below for each of the languages and see what works the best for you, remember to practice and you will find it easier to learn to program if you have some sort of project in mind that you can work towards completing and learn everything along the way!</p>
        <p>Below are some other great resources to help you out among the way, some of them are large development communities, reference guides and websites that have great content for developers starting from just news articles and going on with tutorials.</p>
        <a href="https://hackernoon.com/a-roadmap-to-application-development-bfa2e32fcd82">Roadmap to mobile application development</a>
        <p>The article above will provide you a more in-depth explanation and guidance on where to start and where to focus on. Check it out before you jump in to learning!</p>
        <a href="https://www.reddit.com/r/learnprogramming/wiki/faq#wiki_getting_started">Large developer community forum on Reddit called Learnprogramming</a><br>
        <a href="https://www.reddit.com/r/javahelp/">Large developer community forum on Reddit called Java help</a><br>
        <a href="https://www.reddit.com/r/Kotlin/">Large Kotlin development community on Reddit</a><br>
        <a href="https://sempercon.com/mobile-app-development-resource-guide/">60 Essential Mobile App Development Resources</a><br>
        <a href="https://buildfire.com/mobile-app-development-tools/">Mobile App Development Tools: A Detailed Comparison</a><br>
        <div class="row mt-5">
            <div class="col-md-10 offset-1">
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
                            <?php $resources = $object->getFrontEndResourcesJava();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
                
              
                <div class="row mb-4">
                    <h2 class="col-12 text-center">Kotlin development tutorials</h2>

                    <div class="col-12">
                        <img src="images/kotlin.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        Kotlin is an open-source, statically-typed programming language that supports both object-oriented and functional programming. Kotlin provides similar syntax and concepts from other languages, including C#, Java, and Scala, among many others. Kotlin does not aim to be unique—instead, it draws inspiration from decades of language development. It exists in variants that target the JVM (Kotlin/JVM), JavaScript (Kotlin/JS), and native code (Kotlin/Native).
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResourcesKotlin();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>

                
                <div class="row mb-4">
                    <h2 class="col-12 text-center">Apache Cordova development tutorials</h2>

                    <div class="col-12">
                        <img src="images/cordova.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        Apache Cordova enables software programmers to build applications for mobile devices using CSS3, HTML5, and JavaScript instead of relying on platform-specific APIs like those in Android, iOS, or Windows Phone. It enables wrapping up of CSS, HTML, and JavaScript code depending upon the platform of the device. It extends the features of HTML and JavaScript to work with the device. The resulting applications are hybrid, meaning that they are neither truly native mobile application (because all layout rendering is done via Web views instead of the platform's native UI framework) nor purely Web-based (because they are not just Web apps, but are packaged as apps for distribution and have access to native device APIs).
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResourcesCordova();?>
                            <ul>
                            <?php foreach($resources as $entry): ?>
                                <li><a href="<?= $entry['link']?>"   target="_blank"><?= $entry['title'];?></a></li> 
                            <?php endforeach; ?>
                            </ul>
                    </div>
                </div>

                "
               <div class="row mb-4">
                    <h2 class="col-12 text-center">Swift programming tutorials</h2>

                    <div class="col-12">
                        <img src="images/swift.png" alt="iphone" class="mx-auto mb-3 d-block">
                    </div>

                    <div class="col-12 col-md-6">
                        <p> 
                        Swift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. for iOS, iPadOS, macOS, watchOS, tvOS, Linux, and z/OS. Swift is designed to work with Apple's Cocoa and Cocoa Touch frameworks and the large body of existing Objective-C code written for Apple products.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                            <?php $resources = $object->getFrontEndResourcesSwift();?>
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