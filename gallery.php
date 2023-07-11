<!DOCTYPE html>
<html>
<head>
    <title>Web gallery</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        @font-face {
            font-family: 'IMB VGA8';
            src: url('font.ttf');
        }

        body {
            background-color: #212121;
            color: #fff;
            font-family: 'IMB VGA8', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
        }
        
        .gallery {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            flex-wrap: wrap;
        }


        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 5px;
            cursor: pointer;
        }

        .caption {
            font-size: 14px;
            margin-top: 5px;
        }

        .footer {
            margin-top: 40px;
            font-size: 14px;
            text-align: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Screenshots gallery</h1>
        <h3>Click on image to enlarge (opens in new tab)</h3>
        <h4>Screenshots for <a href="https://github.com/valeowoia/dotfiles target="_blank" style="color: #fff; font-weight: bold;"> valeowoia/dotfiles</a></h4>
        <div class="gallery">
            <?php
            // Getting images from folder
            $files = glob("*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            // Showing every image in gallery
            foreach ($files as $file) {
                echo '<div>
                        <a href="'.$file.'" target="_blank">
                            <img src="'.$file.'" alt="Image error">
                        </a>
                        <div class="caption">'.basename($file).'</div>
                      </div>';
            }
            ?>
        </div>
        <div class="footer">
            Powered by <a href="https://uwu.waw.pl/" target="_blank" style="color: #fff; font-weight: bold;">Mifuru 2.0</a>
        </div>
    </div>
</body>
</html>
