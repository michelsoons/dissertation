<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <title>devPath Quiz</title>
</head>

<body id="page-top">
    <?php include('quizRepo.php');
    $object= new QuizRepo();
    //echo $object->getFrontEndResources();
    ?>
    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <span class="text-white">Janis app</span>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"> <a class="nav-link" href="index.html#features">Get started</a></li>
                                <li class="nav-item"> <a class="btn btn-light m-0 py-1 px-3" href="quiz.html">Quiz</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <header class="bg-gradient" id="home">
        <div class="container mt-5 pb-5">
            <h1>Front-End development</h1>
            <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat id ab quam explicabo veritatis provident cum molestias maxime iure, nesciunt eius cumque amet commodi laboriosam vero facere asperiores. At hic quos reiciendis autem, voluptas cupiditate sequi rem perspiciatis dicta? Laudantium reiciendis, temporibus asperiores esse excepturi eos libero ab ipsum voluptatem error delectus? Incidunt sapiente in ut adipisci nobis vel alias!</p>
        </div>
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <h2>HTML development tutorials</h2>
               <table class="table">
                   <tr>
                       <th>Language</th>
                       <th>Link</th>
                   </tr>
                   <tr>
                       <td>HTML</td>
                       <td><?php $resources = $object->getFrontEndResources();?>
                       <?php foreach($resources as $entry): ?>
                           <?php echo $entry['link'];?> 
                            
                   <?php endforeach; ?>
                       </td>
                   </tr>
               </table>
               <h2>CSS development tutorials</h2>
               <table class="table">
                   <tr>
                       <th>Language</th>
                       <th>Link</th>
                   </tr>
                   <tr>
                       <td>CSS</td>
                       <td><?php $resources = $object->getFrontEndResources1();?>
                       <?php foreach($resources as $entry): ?>
                           <?php echo $entry['link']?> 
                            
                   <?php endforeach; ?>
                       </td>
                   </tr>
               </table>
               <h2>Javascript development tutorials</h2>
               <table class="table">
                   <tr>
                       <th>Language</th>
                       <th>Link</th>
                   </tr>
                   <tr>
                       <td>Javascript</td>
                       <td><?php $resources = $object->getFrontEndResources();?>
                       <?php foreach($resources as $entry): ?>
                           <?php echo $entry['link']?> 
                            
                   <?php endforeach; ?>
                       </td>
                   </tr>
               </table>
               <h2>React.js development tutorials</h2>
               <table class="table">
                   <tr>
                       <th>Language</th>
                       <th>Link</th>
                   </tr>
                   <tr>
                       <td>React.js</td>
                       <td><?php $resources = $object->getFrontEndResources();?>
                       <?php foreach($resources as $entry): ?>
                           <?php echo $entry['link']?> 
                            
                   <?php endforeach; ?>
                       </td>
                   </tr>
               </table>
               <h2>Vue.js development tutorials</h2>
               <table class="table">
                   <tr>
                       <th>Language</th>
                       <th>Link</th>
                   </tr>
                   <tr>
                       <td>Vue.js</td>
                       <td><?php $resources = $object->getFrontEndResources();?>
                       <?php foreach($resources as $entry): ?>
                           <?php echo $entry['link']?> 
                            
                   <?php endforeach; ?>
                       </td>
                   </tr>
               </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/quiz.js"></script>
</body>

</html>