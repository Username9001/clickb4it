<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>clickb4it warez</title>

    </head>
    <body>
        <div class="welcome-video">
            <a href="/shop">
                <video width="100%" height="100%" playsinline muted autoplay loop>
                    <source src="files/landing page 10mb.mp4" type="video/mp4">
                </video>
            </a>
        </div>
    </body>

    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        video {
            width: 100vw; /* Could also use width: 100%; */
            height: 100vh;
            object-fit: cover;
            position: fixed; /* Change position to absolute if you don't want it to take up the whole page */
            left: 0px;
            top: 0px;
            z-index: -1;
        }
    </style>
    <script>
    function drawingLoop() {
        requestId = window.requestAnimationFrame(drawingLoop)
        ctx.drawImage(vid, 0, 0, vidWidth, vidHeight, 0, 0, canvas.width, canvas.height);
    }

    function setVideoBgColor(vid, backgroundElement) {
        // draw first four pixel of video to a canvas
        // then get pixel color from that canvas
        var canvas = document.createElement("canvas");
        canvas.width = 8;
        canvas.height = 8;

        var ctx = canvas.getContext("2d");
        ctx.drawImage(vid, 0, 0, 8, 8);

        var p = ctx.getImageData(0, 0, 8, 8).data;
        //dont take the first but fourth pixel [r g b a]
        backgroundElement.style.backgroundColor = "rgb(" + p[60] + "," + p[61] + "," + p[62] + ")";
    }
    </script>
</html>
