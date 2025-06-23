<?php include('assets/head.php') ?>

<script type="text/javascript">

    function fitBow() {
        var Image_Id = document.getElementById('mainWeapon');
                Image_Id.src = "mains/vbow-fit.png";
        document.getElementById("mainblurb").innerHTML = '<p><strong>Outfit Name:</strong> Everyday</p> <p>My main and favorite weapon, the <strong>vanilla Tri-Stringer &hearts;</strong> I love the combination of its main weapon and kit, making it a glass cannon of an annoying long range weapon. I love everything from the way it plays to its aesthetic, despite how weak its entire kit is in the competitive scene. It feels like the most "me" weapon, but in a way where I only wanted to learn how to play it because it&apos;s so precise, niche, and difficult. Like any other bow player, I love playing alongside blasters most even though I am not as inclined to play them. I love being the aggressive but anchor-dependable backline, and after choosing to consider this my main even though it took more practice than natural intuition, I feel - and enjoy - that I was always meant to play in this way. This is the weapon I always have the most fun with.</p>';
        var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
    }

    function fitTorrentz() {
        var Image_Id = document.getElementById('mainWeapon');
                Image_Id.src = "mains/torrentz-fit.png";
                document.getElementById("mainblurb").innerHTML = '<p><strong>Outfit Name:</strong> King (Hydro Pump)</p><p>I instantly fell in love with the <strong>Torrentz Hydra Splatling</strong> after the 10.0.0 update that I immediately started reworking this site after I picked it up for a day and realized how similarly it plays to the custom hydra from S2 (but also so <em>different</em>). Not to mention its design and name - this hydra feels like it was <em>literally</em> made for me, especially as I have had this outfit made as my main outfit since Splatoon 2, even though it was never really a weapon fit. That changed on June 12, 2025 - incidentally two days before my birthday - when I looked at this Hydra and knew instantly it was the fit I would use for it. The weapon design also matches my favorite splashtag banner, and its kit being similar to the S2 chydra also means it is the hydra perfectly catered to my playstyle, where I can use sprinklers to be annoying decoys and bubbles to give myself and teammates a safe space and temporary (sort of) invincibility.</p> <p>Though the bow is still my weapon in many ways, the Torrentz Hydra is now undoubtedly also one of my favorite weapons of all time. I will never let her go, and I am immensely happy with her addition to this update.';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
    }

        function fitHedit() {
        var Image_Id = document.getElementById('mainWeapon');
                Image_Id.src = "mains/hedit-fit.png";
                document.getElementById("mainblurb").innerHTML = '<p><strong>Outfit Name:</strong> Writer</p><p>I got into the <strong>Heavy Edit</strong> while playing comp, but since then the Edit has become arguably my most intuitive splatling, despite how many hours I&apos;ve put into the Hydra. The Edit feels like how I wanted to play a splatling the first time I picked up the Heavy Splatling in Hero Mode in Splatoon 2 - fast-paced and team-supportive while also having an escape route to allow for more aggressive moments. This is now my usual more aggressive option, despite being a supportive midliner. Though I&apos;m no longer an active competitive player, the experience gave me this new main under my belt, which was good, because I wanted to use this sweater for an outfit too.</p>';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
    }

    function fitInkline() {
        var Image_Id = document.getElementById('altWeapon');
                Image_Id.src = "mains/inkline-fit.png";
         document.getElementById("altblurb").innerHTML = '<p><strong>Outfit Name:</strong> Hangout</p><p>The <strong>Inkline Tri-Stringer</strong>! I played it mostly during comp when I was on Inkblot Dropouts, because our team had so little paint so I focused on it with this inking-heavy kit. Though I play it more supportively, the kit hardly makes it matter because I like the main weapon the most.</p>';
         var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');
        }

    function fitBulbz() {
        var Image_Id = document.getElementById('altWeapon');
                Image_Id.src = "mains/bulbz-fit.png";
                document.getElementById("altblurb").innerHTML = '<p><strong>Outfit Name:</strong> Developer</p><p>The <strong>Bulbz Tri-Stringer</strong>, which was added during the 10.0.0 update. Its kit isn&apos;t how I&apos;d prefer to play the bow since I prefer playing support, but I do like that its aggression forces me to be more experimental. I don&apos;t have a ton of experience with Angle Shooter - but I will say I think it&apos;s funny that it has Inkjet after I practiced Inkjet for a period of time in Splatoon 2 while it was in the meta, and it&apos;s paying off 6 years later now. Well, at least to the point where I&apos;m not <em>horrible</em> with it.</p>';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');

    }

    function fitVhydra() {
        var Image_Id = document.getElementById('altWeapon');
                Image_Id.src = "mains/hydra-fit.png";
                document.getElementById("altblurb").innerHTML = '<p><strong>Outfit Name:</strong> Problematic Anchor</p><p>My first main for Splatoon 3, technically, was the <strong>Hydra Splatling</strong>, though the outfit came about after some more gear had been added. Though the kit is strong it isn&apos;t really my playstyle when it comes to the Hydra; still, it was the first weapon I five starred in this game anyway, because it&apos;s been my main weapon since November 2018.</p>';
                var elements = document.getElementsByClassName('active');
            while(elements.length > 0){
        elements[0].classList.remove('active');
            }
        event.target.classList.add('active');

    }

    function fitChydra() {
        var Image_Id = document.getElementById('altWeapon');
                Image_Id.src = "mains/chydra-fit.png";
                document.getElementById("altblurb").innerHTML = '<p><strong>Outfit Name:</strong> Splatoon 2</p><p>This outfit for the <strong>Custom Hydra Splatling</strong> is a throwback to my Splatoon 2 outfit for this weapon, which had the same name (Custom Hydra) but slightly different kit, comparatively at least. Still, I always liked this fit both in terms of practicality and design, especially since in S2 you couldn&apos;t change the main ability on gears with chunks yet, so the Golf Visor was the cutest and most accessible headgear with Run Speed Up. It&apos;s hard for me to imagine other outfits with any of these pieces, since I used this fit for so long, so I figure, why fix something that&apos;s not broken? I don&apos;t pull out the S3 chydra very often, but when I do I like that the build will always remind me of Splatoon 2.</p>';
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

    <div id="fits">

        <div class="content">

        <!-- Main Kits/Outfits -->

        <input type="radio" id="faves" name="menu" class="radiobutton" checked>
        <label for="faves" class="selector">Mains</label>

        <div class="option">
            <div id="faves">

                <div class="outfit">
                    <img src="mains/torrentz-fit.png" id="mainWeapon">
                </div>

                <div id="weapons">
                    <ul>
                        <li><a href="#" onclick="fitBow()"><img src="mains/vbow.png"></a></li>
                        <li><a href="#" onclick="fitTorrentz()"><img src="mains/torrentz.png"></a></li>
                        <li><a href="#" onclick="fitHedit()"><img src="mains/hedit.png"></a></li>
                    </ul>
                </div>

                <div id="mainblurb"></div>

            </div>

        </div>

        <!-- Others -->
        <input type="radio" id="others" name="menu" class="radiobutton">
        <label for="others" class="selector">Alternate Kits</label>

        <div class="option">
            <div id="others">

                <div class="outfit">
                    <img src="mains/inkline-fit.png" id="altWeapon">
                </div>

                <div id="weapons">
                    <ul>
                        <li><a href="#" onclick="fitInkline()"><img src="mains/inkline.png"></a></li>
                        <li><a href="#" onclick="fitBulbz()"><img src="mains/bulbz.png"></a></li>
                        <li><a href="#" onclick="fitVhydra()"><img src="mains/hydra.png"></a></li>
                        <li><a href="#" onclick="fitChydra()"><img src="mains/chydra.png"></a></li>
                    </ul>
                </div>

                <div id="altblurb"></div>

            </div>

        </div>

        </div>

    </div>
<?php include('assets/footer.php') ?>