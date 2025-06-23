<?php include('assets/head.php') ?>

<script type="text/javascript">
    function lockerOpen() {
        var Image_Id = document.getElementById('lockerImage');
            if (Image_Id.src.match("locker-outside.png")) {
                Image_Id.src = "locker-inside.png";
            }
            else {
                Image_Id.src = "locker-outside.png";
            }
}
</script>

<body>

    <main>

    <h1>Arrowika</h1>

    <div id="locker">

        <img src="locker-outside.png" id="lockerImage" onclick="lockerOpen()">

    </div>


    <div id="index">

        <div id="random-image">
        <?php include('assets/randomimg.php') ?>
        <?php
            echo getRandomImage("assets/random/");
        ?>
        </div>

        <div id="bio">

            <div class="content">
            <p><strong>Name:</strong> &darr;&times;Arrow.iKA</p>
            <p><strong>Mains:</strong>
            <img src="assets/weapons/tristringer.png" alt="tri-stringer"> 
            <img src="assets/weapons/torrentz.png" alt="torrentz hydra splatling"> 
            <img src="assets/weapons/hedit.png" alt="heavy edit splatling"></p>
            <p><strong>Favorites:</strong>
            <img src="assets/weapons/heavy.png" alt="heavy splatling"> 
            <img src="assets/weapons/heavydeco.png" alt="heavy splatling deco">
            <img src="assets/weapons/explosher.png" alt="explosher">
            <img src="assets/weapons/blobber.png" alt="bloblobber">
            <img src="assets/weapons/slosher.png" alt="slosher">
            <img src="assets/weapons/52gal.png" alt="52 gal">
            <img src="assets/weapons/nzap85.png" alt="nzap 85">
            <img src="assets/weapons/squiffer.png" alt="squiffer"></p>
            <p><strong>Modes:</strong>
            <img src="assets/modes/rm.png" alt="rainmaker" class="modes">
            <img src="assets/modes/tc.png" alt="tower control" class="modes">
            <img src="assets/salmon/br.png" alt="big run/salmon run" class="modes">
            </p>
            <p><strong>Teams:</strong> Inkblot Dropouts (former), <em>.iKA</em> (casual SR)</p>
            <p><strong>Multiplayer Rank:</strong> X<em>2087.00</em> (S3) / X<em>2330.5</em> (S2)</p>
            <p><strong>Salmon Run:</strong> EVP999 (S3) / Pro800 (S2)</p>
            <p><strong>Idols:</strong>
            <img src="assets/idols/oth.png" alt="off the hook">
            <img src="assets/idols/callie.png" alt="callie (squid sisters)">
            <img src="assets/idols/shiver.png" alt="shiver (deep cut)">
            </p>
            <p><strong>Since:</strong> June 2018 (S2), Oct 2023 - Sept 2024 (comp)</p>
            </div>

            <div id="badges">
            <!-- img src="assets/badges/rockenberg.png" alt="rockenberg" -->
            <img src="assets/badges/szgold.png" alt="splat zones gold">
            <img src="assets/badges/tcg.png" alt="tower control gold">
            <img src="assets/badges/rmg.png" alt="rainmaker gold">
            <img src="assets/badges/slv.png" alt="silver challenges">
            <img src="assets/badges/kw.png" alt="killer wail">
            <img src="assets/badges/grizzco.png" alt="lifetime grizzco points">
            <img src="assets/salmon/trium.png" alt="triumvirate defeat">
            <img src="assets/salmon/br.png" alt="big run (gold)">
            <img src="assets/salmon/hlm.png" alt="hazard level max">
            <img src="assets/badges/jackpot.png" alt="jackpot">
            </div>

        </div>    

    </div>

<?php include('assets/footer.php') ?>