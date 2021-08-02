<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album | Farhana</title>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Architects+Daughter");

    body {
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body,
    html {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .background {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url(https://images.unsplash.com/photo-1545810300-732e4b9e06b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80) no-repeat 50% 50%;
        background-size: cover;
    }

    .wrapper {
        width: 300px;
        height: 280px;
        background: white;
        margin: auto;
        box-shadow: 2px 2px 15px #404040;
        transform: rotate(-5deg);
        z-index: 0;
        position: relative;
        padding: 10px;
        font-size: 5em;
    }


    .image-wrapper {
        display: flex;
        flex-direction: column;
    }

    .caption {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: "Architects Daughter", cursive;
        font-size: 16px;
        height: 55px;
        color: #444;
    }

    .detail {
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        font-size: 1em;
        margin: 0;
        padding: 0;
    }

    .title {
        font-size: 1em;
        display: inline-block;
    }

    .title--little {
        font-size: 0.6em;
    }

    .title--miss {
        font-size: 0.8em;
    }

    .author {
        display: block;
        font-size: 0.7em;
        margin: 0;
        padding: 0;
    }

    .wheel {
        will-change: transform;
        transform-origin: center;
        transform-box: fill-box;
    }


    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="background">
        <div class="wrapper">
            <div class="image-wrapper">
                <img src="public/image1.jpg" alt="">
                <div class="caption">
                    <div class="caption-content">
                        <h1 class="detail"><span class="title title--little">Little</span> <span
                                class="title title--miss">Miss</span> <span
                                class="title title--sunshine">Sunshine</span></h1>
                        <h2 class="author">21/12/2021 ❤️ </h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- partial -->

</body>

</html>