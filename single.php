<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail</title>
    <meta name="description" content="fundza.lite is an offline mobile library.">
    <meta name="author" content="FunDza Literacy Trust">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="pageHeader">
        <div id="topBar">
            <div id="logo"><a href="index.html"><img src="images/top.png"></a></div>

            <!-- Hamberger Menu -->
            <input id="menu-cb" type="checkbox" value="off">
            <label id="menu-icon" for="menu-cb">≡</label>
            <label id="menu-background" for="menu-cb"></label>
            <div id="ham-menu">
                <div class="hamElements"><a href="">TOP</a></div>
                <div class="hamElements"><a href="">COLLECTIONS</a></div>
                <div class="hamElements"><a href="">ABOUT</a></div>
            </div>

        </div>
    </header>

    <div id="pageBody">
        <div id="welcomeMessage">
            <!-- Random Message -->
            <div id="message">
            <script type="text/javascript">
                //Message can be added to the array. Like "How do you do?". Don't forget conma(,) after each messages except for last one.
                var mbox = ["Welcome to our Offline Library!",
                            "How's it going?",
                            "Hello :)"];
                var mssg = mbox[Math.floor(Math.random() * mbox.length)];
                document.write(mssg);
            </script>
            </div>
        </div>

        <div id="newCollections">
            <div class="collections">New Collections</div>
                <div class="collectionArray">
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                </div>
            <div class="seeMore"><a href="">See more</a></div>
        </div>
        
        <div id="ourVision">
            <div id="fundzaPolicy">Reading Changes Lives :&#041;</div>
        </div>

        <div id="popularCollections">
            <div class="collections">Popular</div>
                <div class="collectionArray">
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                    <span class="pdf"><a href=""><img src="images/sample.png"></a></span>
                </div>
            <div class="seeMore"><a href="">See more</a></div>
        </div>
    </div>

    <div id="pageTopLink"><a href="#">▲ Back to top</a></div>

    <footer id="pageFooter">
        <p id="copyright"><small>&copy;FunDza Literacy Trust 2017</small></p>
    </footer>
</body>

</html>
