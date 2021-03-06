<?php

/*************************
 * Organization: ZSCTF
 * Author: Lechnolocy_LRWF
 * Version: 5.0.0
**************************/

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ZSCTF - 请假详情 - #[title]</title>
    <link
      rel="stylesheet"
      href="../require/css/mdui.min.css"
      integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="mdui-container doc-container">
    <div style="text-align:center;margin: auto; width:auto;background:#FFFFFF">
        <div style="margin: 20px 0;font-size:25px;">#[title]</div>
        <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABE0AAAAzCAYAAABi+PaDAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACFFJREFUeNrs3TFSG0saAGDh0Mlyg5UzZyuHRCsOQD2oIrc4wTMnEJwAvxOgzakyLg6ANiK0NiOzbrBEpLvd77V2ZZ400yON5BnxfVVTwtBM//O3mGn/GrX2OgAANTi9O+iGh+Ow/RK2/oIm47B9DdvtzdHDdM2+4v4/pn66L378NOsr9DMyMgDAqvakAABYx+ndwX54GIbtU4VfG4Xt/Obo4aliX/3wcBW2XuavTFM/t0YKAKhK0QQAWNnp3UEsXnzp/PlujxyxYHJ4c/QwyewrFks+rRjqqLNCkQYAeN0UTQCAlaSCyX3Y9tfc1UnZnSChr+vwMFizn1icOVQ4AQByvZECAKCqtH5JHQWT6DoVYJb1ddFZv2ASxT6ujR4AkEvRBABYRSw+7Ne0r/3OkmJGWsNkWGPcx2GfA8MHAORQNAEAKklFh37Nu+0tKWYMN3AIV2nxWgCAQoomAEBVv25ovz8USNJdJv0N9BMLJseGEQAoo2gCAGRLa5n0NrT77ou1TX7Z4KF8NJoAQBlFEwCgiv4W999v8XEAADtA0QQAqKK74f3/de7r3iY7KvrEHgCASNEEAGiSbRYyLAYLABRSNAEAAABYQNEEAHitnqQAACiiaAIAVDHdlQO5OXqYGE4AoIiiCQBQxdhxAACvhaIJAJDt5uhhGh524Q6Nr0YTACijaAIAVPVby+OPa5mMDCMAUEbRBACo5OboYdRp990ml+EYLAILAJRSNAEAVnHWaeenz4xvjh4+Gz4AIMeb07uDbtj2ixqFn/fKdlTWJvYR+ypp083oZ+02MdaMeLcVy35G/uvqJycvjXku1JSX3ivMS09e5EVeduf80lTpk2fOWhZ2jPmkiYGZdzgvuI7Ii7yYd8jLT7vuHRe1iXeafAvb/bJG4fv92CY8Xhd0cpHaDApi+ZLa9JYdTEY/MZbvRf3MxdIrieW+YbHsbzKW4KqGWLoZsQwyngs5sdzXkJe6YmlTXrrysvTEXhbLJ3lZOS/XNeRlm7F8y4il7PxeVyyFY9SCwsltePjQaccdJ+OwHTbxbTnmHeYd5h2ur/Ji3tGEeUeNecn6v39GHaKu6973klgKny+xaHIett6yRmFyEScZo7ANCpIXb3ONr95cFxzU+WygFgWcJjHnRf3MxVLUT4xlWjKQJ1uO5b5gIGM/3YL81xXLeUYsJyWxxN8/K4lltKVYcvIyeoV5EcviWCYZ57FR5nlMXv7ssuic2sBYyq57k4z8byWWlhROYh7edZq7sOrv14sQ52FT1zEx7zDvcK13fZUX844mzDtqfu7m/H87pw5Rx3WvLJazoljepD+Ss5KAz4qSlzo6LEpeGoDDkoBHGX/UZ0XJa2gs04J+ZrEU/VGLRSxiWT+W3PPYruXlpCHn9zrHqK7ze05eYj9XPzOWlhROnlLO3nX+/0LKz3abcvuuDWuYOHeLRSzmHfJi3tGEeUeD87Lu83LlWPZmX6QgrtPBL3w1JiUtthulA3j587jz+9TZWer8ZZteatNJ/UwWtJnFsrCfF7Es66eJsXQL+pnFMi3I/7ZjiTGcyItYdiyWwvPYjuZlW+f3GMOXTY/RBs7vkzbE0kbp2KsWgp5mOUq35lY1Ta+stjVn5h3mHWIx73j1eTHvEMsGn5eVY9lrQfIUTn5uLPIiFhMYhZMq59QmTaYUTlA4Me9wfRWLecduF07MOxROFj0XztK6a7XEsteS5OX8UV+GNhclsZxkJO/DoleoTGDkRSw7F0s8XwwVTkxgGnbd66dXzaZtLpykY43Hssrbjaaz/D0/Di9WDCHmb/z2/eVU4cS8w/VVLA2JJS6eeSUv5h1tm3e0tHBSWyzh5x/evGww936epebeW7Ts5/Pvc5osaTOZazNd0mYWy9KPRpqL5S8lsYwL+pnMtXkqiaWuvHRKYnkqaDOLZX9LsbQtL9uKZdqgWOSlel4uXmFettVPXXnZ1b+RoljGs/Nu2wom6SP9LsL2784fK+JfpcJk1e3j3G6HK25xovP9+XH4LWyDNhZNzDvMO8w7di4vn+XFvKON846G5uXvNcSSU4eI+ensdQAA1iuYDFKRpI6FbOPE7fcF254fh/+pKcQ46Tl/+/5yYrQAgCreSAEAsKp0q2zcmvzJP/2w3T8/DvtGDACoQtEEAFjJ3HuL2+D39zk/Pw57Rg4AyKVoAgBUlhY1HLQw9Fg42TeCAEAORRMAoJK0OPuwpeHH2K+MIgCQQ9EEAKgqFkzafLfG4Plx2DWMAEAZRRMAoKrBDhzDr4YRACijaAIAZDu9O+h32n2Xycyx0QQAyiiaAABV9HfkOLoWhAUAyiiaAACvlY8fBgAKKZoAAAAALKBoAgAAALCAogkA0CT/3GJfE+kGAIoomgAAVWy60DCd+3q8wX6e3r6/fDKcAEARRRMAoIrxhvd/O/f11y31AwCwkKIJAJDt5ugh3p0x2tDub9P+//fvDR7KP4wmAFBG0QQAqOpyQ/v9bf4fb99fTsPD5w30Mw77HhtGAKCMogkAUMnN0cO0U3/h5HPY73jB92M/da49Evd1bhQBgByKJgBAZTdHDxed+tY3iYvLLizCpMVaD2sM/Tzs06fmAABZFE0AgFWddNb/NJ34+4cv1jL5QSpyxL7WvePkLOxrZNgAgFx7UgAArOP07uAqPHxa4VfjeiWXRQWTec+Pw154uA5br2I/cf8n1jEBAKpSNAEA1nZ6dxALGcOwHWc0H3f+KJaMV+nr+XE4SH11S5rGYklcXPZzepsPAEAliiYAQG1O7w664aEftr91frwjJL7F5l9hG6eFZNeW7jw5Tn3tp28/pX4mb99f3hoRAGAd/xVgAGFaBBVzyMQDAAAAAElFTkSuQmCC" width="300"></div>
        <br><div style="margin: auto 0;">#[desp]</div>
        <br><div class="bottom">- EOF -</div>
    </div>
    </div>
    <script
      src="../require/js/mdui.min.js"
      integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
      crossorigin="anonymous"
    ></script>
</body>
</html>