<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Plaza Cosmetics</title>
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <link rel="stylesheet" href="./css/pixi2.css">
  </head>
  <body>
  <div class="pixi-container" id="pixi-container">
    <script type="module">
        import { Application, Assets, Graphics, Sprite, RenderTexture, Point } from 'https://cdn.skypack.dev/pixi.js';

(async () =>
{
    // Create a new application
    const app = new Application();

    // Initialize the application
    await app.init({ resizeTo: window });

    // Append the application canvas to the specific div container
    document.getElementById('pixi-container').appendChild(app.canvas);

    // prepare circle texture, that will be our brush
    const brush = new Graphics().circle(0, 0, 50).fill({ color: 0xffffff });

    // Create a line that will interpolate the drawn points
    const line = new Graphics();

    // Load the textures
    await Assets.load(['https://d3k81ch9hvuctc.cloudfront.net/company/QPvwvM/images/14fa3400-b09f-4df1-aea0-3058fbe466cc.jpeg', 'https://d3k81ch9hvuctc.cloudfront.net/company/QPvwvM/images/83265e49-a013-4e93-a308-8d76e47c7e72.jpeg']);

    const { width, height } = app.screen;
    const stageSize = { width, height };

    const background = Object.assign(Sprite.from('https://d3k81ch9hvuctc.cloudfront.net/company/QPvwvM/images/14fa3400-b09f-4df1-aea0-3058fbe466cc.jpeg'), stageSize);
    const imageToReveal = Object.assign(Sprite.from('https://d3k81ch9hvuctc.cloudfront.net/company/QPvwvM/images/83265e49-a013-4e93-a308-8d76e47c7e72.jpeg'), stageSize);
    const renderTexture = RenderTexture.create(stageSize);
    const renderTextureSprite = new Sprite(renderTexture);

    imageToReveal.mask = renderTextureSprite;

    app.stage.addChild(background, imageToReveal, renderTextureSprite);

    app.stage.eventMode = 'static';
    app.stage.hitArea = app.screen;
    app.stage
        .on('pointerdown', pointerDown)
        .on('pointerup', pointerUp)
        .on('pointerupoutside', pointerUp)
        .on('pointermove', pointerMove);

    let dragging = false;
    let lastDrawnPoint = null;

    function pointerMove({ global: { x, y } })
    {
        if (dragging)
        {
            brush.position.set(x, y);
            app.renderer.render({
                container: brush,
                target: renderTexture,
                clear: false,
                skipUpdateTransform: false,
            });
            // Smooth out the drawing a little bit to make it look nicer
            // this connects the previous drawn point to the current one
            // using a line
            if (lastDrawnPoint)
            {
                line.clear().moveTo(lastDrawnPoint.x, lastDrawnPoint.y).lineTo(x, y).stroke({ width: 100, color: 0xffffff });
                app.renderer.render({
                    container: line,
                    target: renderTexture,
                    clear: false,
                    skipUpdateTransform: false,
                });
            }
            lastDrawnPoint = lastDrawnPoint || new Point();
            lastDrawnPoint.set(x, y);
        }
    }

    function pointerDown(event)
    {
        dragging = true;
        pointerMove(event);
    }

    function pointerUp(event)
    {
        dragging = false;
        lastDrawnPoint = null;
    }
})();
    </script>
    </div>
  </body>
</html>
