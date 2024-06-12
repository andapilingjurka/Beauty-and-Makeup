<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Plaza Cosmetics</title>
    <link rel="stylesheet" href="./css/pixi.css">
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
</head>
<script src="js/pixi.min.js"></script>
<body>
    <script type="text/javascript">

      var app = new PIXI.Application(window.innerWidth, window.innerHeight);
        document.body.appendChild(app.view);

        app.stage.interactive = true;
        var posX, displacementSprite, displacementFilter, bg, vx;
        var container = new PIXI.Container();
        app.stage.addChild(container);

       PIXI.loader.add("images/ripple.png").add("images/pixi2.jpg").load(setup);


      function setup() {
            posX = app.renderer.width / 2;
            displacementSprite = new PIXI.Sprite(PIXI.loader.resources["images/ripple.png"].texture);
            displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);
            displacementSprite.anchor.set(0.5);
            displacementSprite.x = app.renderer.width / 2;
            displacementSprite.y = app.renderer.height / 2;
            vx = displacementSprite.x;


            app.stage.addChild(displacementSprite);
            container.filters = [displacementFilter];
            displacementFilter.scale.x = 0;
            displacementFilter.scale.y = 0;
            bg = new PIXI.Sprite(PIXI.loader.resources["images/pixi2.jpg"].texture);
            bg.width = app.renderer.width;
            bg.height = app.renderer.height;
            container.addChild(bg);
            app.stage.on('mousemove', onPointerMove).on('touchmove', onPointerMove);
            loop();
        }


        function onPointerMove(eventData) {
            posX = eventData.data.global.x;
        }


        function loop() {
            requestAnimationFrame(loop);
            vx += (posX - displacementSprite.x) * 0.045;
            displacementSprite.x = vx;
            var disp = Math.floor(posX - displacementSprite.x);
            if (disp < 0) disp = -disp;
            var fs = map(disp, 0, 500, 0, 120);
            disp = map(disp, 0, 500, 0.1, 0.6);
            displacementSprite.scale.x = disp;
            displacementFilter.scale.x = fs;
        }



        map = function(n, start1, stop1, start2, stop2) {
            var newval = (n - start1) / (stop1 - start1) * (stop2 - start2) + start2;
            return newval;
        };

    </script>
</body>
</html>