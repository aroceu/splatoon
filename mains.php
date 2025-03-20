<?php include('assets/head.php') ?>

<script type="text/javascript">

    function fitBow() {
        var Image_Id = document.getElementById('outfitImage');
                Image_Id.src = "mains/vbow-fit.png";
        document.getElementById("blurb").innerHTML = '<p>My current main and favorite weapon of all time, the <strong>vanilla Tri-Stringer &hearts;</strong> I love the combination of its main weapon and kit, making it a glass cannon of an annoying long range weapon. I love everything from the way it plays to its aesthetic. It feels like the most "me" weapon, but in a way where I only wanted to learn how to play it because it was so precise and difficult. Like any other bow player, I love playing alongside blasters most even though I am not as inclined to play them. I love playing the aggressive but anchor-dependable backline, and after having chosen to play this weapon, I feel like I was always meant to play in this way.</p>';
        var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
    }

    function fitInkline() {
        var Image_Id = document.getElementById('outfitImage');
                Image_Id.src = "mains/inkline-fit.png";
         document.getElementById("blurb").innerHTML = '<p>The <strong>Inkline Tri-Stringer</strong>! Not my favorite kit for it, but I enjoy it nonetheless. I focus on paint, of course, and when I was on Inkblot Dropouts it was the one I favored for our otherwise paint-lacking team. Though I play it more supportively, the kit hardly makes it matter because I like the main weapon the most.</p>';
         var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
        }

    function fitHydra() {
        var Image_Id = document.getElementById('outfitImage');
                Image_Id.src = "mains/hydra-fit.png";
                document.getElementById("blurb").innerHTML = '<p>My first main for Splatoon 3, technically, was the <strong>Hydra Splatling</strong>, though the outfit came about after some more gear had been added. I also enjoy the Custom Hydra despite its slightly weaker kit, because like the bow, I prefer its main weapon the most. I&apos;ve been playing it long enough that at my level, I only play it on map/modes that I know are good for it.</p>';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');

    }

    function fitHedit() {
        var Image_Id = document.getElementById('outfitImage');
                Image_Id.src = "mains/hedit-fit.png";
                document.getElementById("blurb").innerHTML = '<p>I got into the <strong>Heavy Edit</strong> while playing comp, but since then the Edit has become arguably my favorite splatling, despite the soft spot I have for the Hydra. The Edit feels like how I wanted to play a splatling the first time I picked up the Heavy Splatling in Hero Mode in Splatoon 2 - fast-paced and team-supportive while also having an escape route to allow for more aggressive moments. Though I&apos;m no longer an active competitive player, the experience gave me this new main under my belt - which was good, because I wanted to use this sweater for an outfit too.</p>';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
    }
</script>

<body>

    <main>

    <h1>Arrowika (mains)</h1>

    <div id="mainheader">
        <img src="assets/banner.png">
    </div>

    <div id="mains" class="content">

        <div class="outfit">
            <img src="mains/vbow-fit.png" id="outfitImage">
        </div>

        <div id="weapons">
            <ul>
                <li><a href="#" onclick="fitBow()" class="weaponselect"><img src="mains/vbow.png"></a></li>
                <li><a href="#" onclick="fitInkline()" class="weaponselect"><img src="mains/inkline.png"></a></li>
                <li class="weaponselect"><a href="#" onclick="fitHydra()" class="weaponselect"><img src="mains/hydra.png"></a></li>
                <li class="weaponselect"><a href="#" onclick="fitHedit()" class="weaponselect"><img src="mains/hedit.png"></a></li>
            </ul>
        </div>

        <div id="blurb"></div>

    </div>

<?php include('assets/footer.php') ?>