<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Docs</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./css/favicon.svg" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="./js/icon.js" crossorigin="anonymous"></script>

    <style>
        .downloader{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <i class="fad fa-user-graduate fa-3x"></i>
                <p>&nbsp;ARMS</p>
            </div>
            <div class="nav">
                <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="downloader">
        <h3>Enter URL</h3><br>
        <input type="text" name="download" id="download" value="">
        <input type="button" value="Download" onclick="download()">
    </div>

    <footer>
      <div class="social">
        <a href="https://www.facebook.com/ChiragChrg" id="f" target="_blank">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://www.instagram.com/chiragchrg/" id="i" target="_blank">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://twitter.com/ChiragChrg1" id="t" target="_blank">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </div>

      <p>&#169; Copyright 2020-2021 ChiragChrg</p>
    </footer>

    <!-- <script>
        // var url = "https://drive.google.com/file/d/1A8bftX6IbOJJIATkTVzfgHM1vu0HW0AI/view?usp=sharing";

        function download(){
            // Converting Gdrive URL to Downloadable link
            var url = document.getElementById("download").value;
            var id = "";
            // url = url.replace("https://drive.google.com/file/d/","https://drive.google.com/uc?id=");

            // if(url.includes("/view?usp=sharing")){
            //   link = url.replace("/view?usp=sharing","&export=download");

            // }
            // else{
            //   link = url.replace("/view?usp=drivesdk","&export=download");
            // }
            // // let link = url.replace("/view?usp=sharing","&export=download");
            // // let link = url.replace("/view?usp=drivesdk","&export=download");

            // let chkA = link.includes("https://drive.google.com/uc?id=");
            // let chkB = link.includes("&export=download");

            // if(chkA && chkB){
            //     window.open(link,'_blank');
            // }

            url = url.replace("https://drive.google.com/file/d/","");

            if(url.includes("/view?usp=sharing"))
              id = url.replace("/view?usp=sharing","");
            else
              id = url.replace("/view?usp=drivesdk","");
            console.log(id);
            var link = "https://drive.google.com/uc?id="+id+"&export=download";
            console.log(link);
            window.open(link,'_blank');
        }
    </script> -->

    <script src="./js/upload.js"></script>
</body>
</html>