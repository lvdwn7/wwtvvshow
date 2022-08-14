<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link href="include/css/bootstrap.min.css" rel="stylesheet">
    <link href="include/css/inctest.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <title>IMDB-Movie</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="include/css/main.css?v=3" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="include/css/home.css">

<body>
    <style type="text/css">
        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #4285F4;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        nav.navbar.fixed-top.navbar-expand-lg.navbar-dark.scrolling-navbar.z-depth-5 {
            position: inherit;
        }
    </style>
    <div class="Parant">
        <header class="IMDB-header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar z-depth-5">
                <a class="navbar-brand mainHead" href="#"><strong>Zfli<span class="x">x</spnan></strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto IMDB-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 form-btn">
                        <button class="btn btn btn-warning my-2 my-sm-0 zflix-btn" type="submit">Android</button>
                        <button class="btn btn btn-warning my-2 my-sm-0 zflix-btn" type="submit">ios</button>
                      </form>
                </div>
            </nav>
        </header>
    
    
        <div class="s006">
            <div id="dontfuck" class="switchform">
                <fieldset>
                    <legend>Watch with Zflix!</legend>
                    <p class="sub-para">Free movie streaming and TV shows. No cost, no catch.</p>
                    <div class="inner-form">
                        <div class="input-field">
                            <input name="search" id="search" type="text" onkeyup="showResult(this.value)"
                            placeholder="Type the name of the movie or the link" />
                            <button class="btn-search" id="btn-search" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                    </path>
                                </svg>
                            </button>

                        </div>
                    </div>
    
                    <div id="livesearch" style="z-index: 1001;"></div>
    
                </fieldset>
            </div>
        </div>
    </div>


    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script>

        function showResult(str) {
            if (str.length == 0) {
                //document.getElementById("livesearch").innerHTML="";
                //document.getElementById("livesearch").style.border="0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("btn-search").style.top = "-47%";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</body>

</html>