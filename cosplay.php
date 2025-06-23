<?php include('assets/head.php') ?>

<style type="text/css">

.cos{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.play{
    max-width: 50%;
    flex: 50%;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 1.5em;
}

.cos .play:nth-child(odd) {
    text-align: right;
}

.play img{
    height: 250px;
}

.play img.short{
    height: 200px;
    vertical-align: bottom;
}

img.hinata{
    height: 330px
}

</style>

<body>

    <main>

    <h1>Arrowika (Cosplay)</h1>

     <div id="cosplay">

        <div class="content">

        <input type="radio" id="bbs" name="menu" class="radiobutton" checked>
        <label for="bbs" class="selector">Bad Buddy</label>

        <div class="option">

            <div id="bbs" class="cos">

                <div class="play">
                <img src="cosplay/pat-1.png">
                </div>

                <div class="play">
                <img src="cosplay/pran-1.png">
                </div>

                <div class="play">
                <img src="cosplay/pat-2.png">
                </div>

                <div class="play">
                <img src="cosplay/pran-2.png">
                </div>

                <div class="play">
                <img src="cosplay/pat-3.png" class="short">
                </div>

                <div class="play">
                <img src="cosplay/pran-3.png">
                </div> 

                <div class="play">
                <img src="cosplay/pat-4.png">
                </div>

                <div class="play">
                <img src="cosplay/pran-4.png">
                </div>
                
            </div>

        </div>

        <input type="radio" id="smohas" name="menu" class="radiobutton">
        <label for="smohas" class="selector">SMOHAS</label>

        <div class="option">

            <div id="smohas" class="cos">

                <div class="play">
                <img src="cosplay/sma.png">
                </div>

                <div class="play">
                <img src="cosplay/fi.png">
                </div>

                <div class="play">
                <img src="cosplay/cj.png">
                </div>

                <div class="play">
                <img src="cosplay/cra.png">
                </div>

            </div>

        </div>

        <input type="radio" id="mdzs" name="menu" class="radiobutton">

        <label for="mdzs" class="selector">MDZS</label>

        <div class="option">

            <div id="mdzs" class="cos">

                <div class="play">
                <img src="cosplay/wwx-1.png" class="short">
                </div>

                <div class="play">
                <img src="cosplay/jc-1.png" class="short">
                </div>

                <div class="play">
                <img src="cosplay/wwx-2.png">
                </div>

                <div class="play">
                <img src="cosplay/jc-2.png" class="short">
                </div>

                <div class="play">
                <img src="cosplay/lwj.png">
                </div>

                <div class="play">
                <img src="cosplay/wn.png">
                </div>

                <div class="play">
                <img src="cosplay/nhs.png">
                </div>

                <div class="play">
                <img src="cosplay/nmj.png">
                </div>


            </div>

       

        </div>

        <input type="radio" id="haikyuu" name="menu" class="radiobutton">
        <label for="haikyuu" class="selector">HQ!!</label>

        <div class="option">

            <div id="haikyuu" class="cos">

                <div class="play">
                <img src="cosplay/kageyama.png">
                </div>

                <div class="play">
                <img src="cosplay/hinata.png" class="hinata">
                </div>

                <div class="play">
                <img src="cosplay/oikawa.png">
                </div>

                <div class="play">
                <img src="cosplay/suga.png">
                </div>

            </div>

        </div>



        

    </div>

<?php include('assets/footer.php') ?>