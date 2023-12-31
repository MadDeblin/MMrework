<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Moviemonlthy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="filmny.css">
</head>

<body>
<div class="content">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container">
      <a class="navbar-brand" href="#Header">MovieMonthly 🎥</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#Header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Movies">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Slump">Slumpa filmval</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Quizz">Play Quizz</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Header -->
  <header class="container-fluid" id="Header">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>MovieMonthly</h1>
      </div>
    </div>
  </header>
  
  <div class="Quote" id="Quote">
		<!-- Random quotes från filmer funktion -->
    <h3 id="quote-container">
        <?php
        include 'movie_quotes.php';
        $randomIndex = array_rand($quotes);
        echo $quotes[$randomIndex];
        ?>
    </h3>

    <script>
        function updateQuote() {
            // Ajax hämtar en ny quote from servern
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("quote-container").innerText = this.responseText;
                }
            };
            xhttp.open("GET", "movie_quotes_ajax.php", true);
            xhttp.send();
        }

        // uppdaterar random quote varje 3 sekunder
        setInterval(updateQuote, 3000);
    </script>
		
	</div>
    <!---Titel Div -->
    
    <div class="Titeldiv" id="Title">
		<div>
      <h1>Introducing MovieMonthly </h1>
      <p>Your ultimate destination for discovering the best movies every month! With MovieMonthly, you get access to a handpicked selection of the hottest movies, carefully curated by our team of experts.

Each month, we recommend a variety of movies across genres, ensuring that there's something for everyone. You can check out the latest releases or dive into our collection of timeless classics. And with our comprehensive reviews, you can get an in-depth understanding of each movie before you watch it.

But that's not all - with MovieMonthly, you're not just a passive viewer. You can also share your own recommendations and contribute to our community of movie lovers. Suggest your favorite films and help others discover new gems. It's a win-win for everyone!

Join the MovieMonthly community today and never miss out on the latest and greatest movies. Sign up now to start your monthly movie journey!</p>
    </div>
		<img src="https://www.thepcdoctor.com.au/wp-content/uploads/2020/12/Sci-Fi-Movies.jpg" alt="bild">
	</div>
  
  

 <!-- Carousel -->
<div class="filmdiv">
    <h2>Filmer</h2>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="Movies">
                        <div class="carousel-item active">
                            <video class="d-block w-100" controls poster="https://images.thedirect.com/media/article_full/jlco.jpg">
                                <source src="Zack%20Snyder's%20Justice%20League%20_%20Official%20Trailer%20_%20HBO%20Max.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="carousel-caption">
                                <h5>Zack Snyder's Justice League</h5>
                                <h6>Director - Zack Snyder</h6>
                                <p>Determined to ensure that Superman's ultimate sacrifice wasn't in vain, Bruce Wayne recruits a team of metahumans to protect the world from an approaching threat of catastrophic proportions.</p>
                                <a href="https://www.imdb.com/title/tt12361974/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_zack%2520just">
  <i class="fa fa-imdb" style="font-size:44px"></i>
</a>

                            </div>
                        </div>

                    <div class="carousel-item">
                        <video class="d-block w-100" controls poster="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/87CA5F0ECB5BFEBCAA154BB30975A928460D28335C5530D8C0C17C4E2FA24A67/scale?width=1200&aspectRatio=1.78&format=jpeg">
                            <source src="Avatar_%20The%20Way%20of%20Water%20_%20Official%20Trailer.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="carousel-caption">
                            <h5>Avatar: The Way of Water</h5>
                            <h6>Director - James Cameron</h6>
                            <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
                            <a href="https://www.imdb.com/title/tt1630029/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_way%2520of%2520water">
  <i class="fa fa-imdb" style="font-size:44px"></i>
</a>


                        </div>
                    </div>


          <div class="carousel-item">
            <video class="d-block w-100" controls poster="https://thumbnails.cbsig.net/_x/w1200/CBS_Production_Entertainment_VMS/2021/07/07/1918966851527/INST_SAlone_16_9_1920x1080_NB_731120_1920x1080.jpg">
              <source src="Interstellar%20-%20Trailer%20-%20Official%20Warner%20Bros.%20UK.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="carousel-caption">
              <h5>Interstellar</h5>
              <h6>Director - Christopher Nolan</h6>
              <p>A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.</p>
                <a href="https://www.imdb.com/title/tt0816692/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_inter">
  <i class="fa fa-imdb" style="font-size:44px"></i>
                </a>
            </div>
          </div>

          
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
        </div>
      <h3>Share your thoughts on this months movies! </h3>
         <form action="add_comment.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          
          <label for="comment">Comment:</label>
          <textarea id="comment" name="comment" required></textarea>
          <button type="submit" name="submit">Submit</button>
      <div id="comments">
          <div><p><strong>aaaa:</strong></p><p>aaa</p><p>2023-05-16 21:07:34</p></div><div><p><strong>asdasd:</strong></p><p>asdasd</p><p>2023-05-16 21:14:24</p></div><div><p><strong>asdasd:</strong></p><p>asdasd</p><p>2023-05-16 21:14:56</p></div><div><p><strong>aaasda:</strong></p><p>asdasd</p><p>2023-05-16 21:20:16</p></div><div><p><strong>test1:</strong></p><p>ada</p><p>2023-05-16 21:27:17</p></div><div><p><strong>test2:</strong></p><p>test med .php i slutet istället för .html för html filen</p><p>2023-05-16 21:33:19</p></div><div><p><strong>test2:</strong></p><p>test med .php i slutet istället för .html för html filen</p><p>2023-05-16 21:33:26</p></div><div><p><strong>test3:</strong></p><p>sda</p><p>2023-05-16 21:37:06</p></div><div><p><strong>test5:</strong></p><p>ändrade i php_comment filen</p><p>2023-05-16 21:38:28</p></div><div><p><strong>test6:</strong></p><p>asdasdas</p><p>2023-05-16 21:41:52</p></div><div><p><strong>test56:</strong></p><p>hjvgjkghkjh</p><p>2023-05-16 22:09:03</p></div>      </div>

      </form>


  <!-- Contact form -->
  
<div class="Contact" id="Contact">
     <h3>Contact Form</h3>
     <h3> Feel free to recommend a movie </h3>
  <form action="yehya59@gmail.com">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Subject</label>
    <select id="country" name="country">
      <option value="australia">Contact us</option>
      <option value="canada">Movie Recommendations</option>
      
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<div class="Slump" id="Slump">
<h3>Har du svårt att välja ett nummer?</h3>
    <h3>Tryck på knappen så slumpas ett nummer mellan 1 och 5.</h3>
    <form method="POST">
        <input type="submit" name="slumpa" value="Slumpa film">
    </form>
    <h3>
        <?php
        if (isset($_POST['slumpa'])) {
            // Inkluderar funktionen för slumpat nummer mellan 1 och 5
            include 'slump.php';

            // Anropar funktionen för att generera ett slumpmässigt nummer
            $slumpat_nummer = rand(1, 5);
            echo "Kolla film nr:" . $slumpat_nummer;
        }
        ?>
    </h3>
</div>

<br>
<!-- Quizz funktionen -->
<div class="Quizz" id="Quizz">
    
    < <h3>Movie Quizz</h3>
    
    <button id="startButton">Start Quizz</button>
    
    <div id="questionContainer" style="display: none;">
        <h3 id="questionText"></h3>
        <div id="options"></div>
        <button id="submitAnswerButton">Submit Answer</button>
    </div>
    
    <div id="resultContainer" style="display: none;">
        <h3>Quiz Results</h3>
        <p id="score"></p>
    </div>

    <script src="quizz.js"></script>

</div>



<!-- Footer -->
  <footer class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 MovieMonthly. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

</html>
                
            
