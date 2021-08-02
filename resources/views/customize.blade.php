<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Pure CSS3 Picture Frame</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Parisienne|Playball');

    body {
        background: url('https://www.subtlepatterns.com/patterns/brickwall.png');
        background-size: 10%;
    }

    .frame {
        margin: 50px auto;
        border: 25px solid #222;
        height: 475px;
        width: 350px;
        -webkit-box-shadow: px 2px 3px 1px rgba(0, 0, 0, .5);
        box-shadow: 0px 3px 10px 4px rgba(0, 0, 0, .3);
    }

    .border {
        background: white;
        height: 100%;
        width: 100%;
        -webkit-box-shadow: inset 10px 10px 10px 4px rgba(0, 0, 0, .4);
        box-shadow: inset 3px 7px 2px 5px rgba(0, 0, 0, .4);
    }

    .image {
        position: absolute;
        height: 350px;
        width: 250px;
        margin-left: 50px;
        margin-top: 50px;
    }

    .text {
        position: absolute;
        margin-top: 380px;
        text-align: center;
        font-family: 'Playball', cursive;
        font-size: 30px;
        margin-left: 85px;
    }
    </style>
</head>

<body>
    <div class="frame">
        <div class="border">
            <div class="image">
                <img src="public/image.png"
                    height="350" width="250" alt="" />
            </div>
            <!--end image-->
            <div class="text">Tagline here</div>
        </div>
        <!--end border-->
    </div>
    <!--end frame-->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>