<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Listt | Animated List jQuery Plugin</title>

        <meta property="og:url" content="http://www.listt.trevorfincher.com/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Listt | Animated List jQuery Plugin" />
        <meta property="og:description" content="Listt is a jQuery plugin for animating a list in a way that resembles an iOS select animation. Download the source for free today! Making the world a better place through preprocessed list styling and minified scripts." />
        <meta property="og:image" content="http://listt.trevorfincher.com/images/social-card.jpg" />

        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="http://www.listt.trevorfincher.com/">
        <meta name="twitter:description" content="Listt is a jQuery plugin for animating a list in a way that resembles an iOS select animation. Download the source for free today! Making the world a better place through preprocessed list styling and minified scripts.">
        <meta name="twitter:image" content="http://listt.trevorfincher.com/images/social-card.jpg">

        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Ubuntu:700" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- Bootstrap's JavaScript plugins -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    	<link rel="stylesheet" href="css/base.css" type="text/css" media="screen" />

    </head>

    <body>
        <div class="yellow-box"></div>

        <div id="wrap">
            <div class="top-text">
                <h5>Introducing</h5>
                <h1>Listt</h1>
            </div>

            <div class="main-box">

                <div class="list-container">
                    <div class="list-sort">
                        <ul class="list">
                            <li data-img-bg="jquery">04</li>
                            <li data-img-bg="download">05</li>
                            <li class="current" data-img-bg="donation">01</li>
                            <li data-img-bg="easy">02</li>
                            <li data-img-bg="keyboard">03</li>
                        </ul>
                    </div>
                </div>


                <div class="image-box">
                    <div class="bg active donation">
                        <img src="images/no-donation.svg">
                        <h2>No Donation<br>Required</h2>
                    </div>
                    <div class="bg easy">
                        <img src="images/content.svg">
                        <h2>Easy Content<br>Connect</h2>
                    </div>
                    <div class="bg keyboard">
                        <img src="images/keyboard.svg">
                        <h2>Keyboard<br>Enabled</h2>
                    </div>
                    <div class="bg jquery">
                        <img src="images/jquery.svg">
                        <h2>Runs on<br>jQuery</h2>
                    </div>
                    <div class="bg download">
                        <img src="images/download.svg">
                        <h2>Download<br>Today</h2>
                    </div>
                </div>


                <div class="arrow-left-box">
                    <i class="icon icon-caret-left"></i>&nbsp;&nbsp;Prev
                </div>
                <img src="images/keypad-icon.svg" class="keys">
                <div class="arrow-right-box">
                    Next&nbsp;&nbsp;<i class="icon icon-caret-right"></i>
                </div>
            </div>

            <div class="bottom-box text-center">
                <div class="v-align">
                    <h5>Like what you see?</h5>
                    <a href="listt-source.zip" class="btn btn-primary">Download Source</a>
                </div>
            </div>
            
        </div>


        <script src="js/index.js"></script>
    </body>
</html>
