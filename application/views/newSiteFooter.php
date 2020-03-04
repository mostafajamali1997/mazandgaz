

        <!--footer -->
<!-- Contact Footer Section Begins -->
<div class="contact-footer">
    <div class="go-up up-open-1-icon"></div>

    <!-- Curvy shape of contact footer -->
    <img src="images/contact-footer-curvy.png" class="curvy-contact-footer" alt="">

    <!-- Circle Box -->
    <div class="circle-box">
        <!-- INFO: Image Size = 105x105 -->
        <div class="logo">
            <img src="images/site-logo.png" alt="">
        </div>

        <ul class="info-list">
            <li class="address">
                <i class="location-icon"></i>
                <p>آدرس: مازندران،نکا،کیلومتر2 جاده گلستان</p>
            </li>
            <li class="phone">
                <i class="phone-icon"></i>
                <p>011347469613</p>
            </li>
            <li class="email">
                <i class="email-icon"></i>
                <p>INFO@SAADCO.CO</p>
            </li>
        </ul>

        <ul class="social-network">

            <li><a href='../www.instagram.com/oxinadeparvan/index.htm' target='_blank'>
                <img src="uploads/socialnetwork/contact-footer-instagram-icon.png"
                     alt="Instagram"></a></li>

            <li><a href='../t.me/parvangroupcompany/index.htm' target='_blank'>
                <img src="uploads/socialnetwork/contact-footer-telegram-icon.png"
                     alt="Telegram"></a></li>

            <li><a href='../twitter.com/index.htm' target='_blank'>
                <img src="uploads/socialnetwork/contact-footer-twitter-icon.png"
                     alt="Twitter"></a></li>

            <li><a href='../www.linkedin.com/feed/-trk=onboarding-landing.htm' target='_blank'>
                <img src="uploads/socialnetwork/contact-footer-linkedin-icon.png"
                     alt="Linkedin"></a></li>

        </ul>

    </div>

    <!-- Map Area -->
    <div class="right-sec">
        <div class="map" id="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1848.7169303510218!2d53.37356974355923!3d36.66814904248546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8520179fc33e95%3A0x996c2bc4033bc403!2z2LTZh9ix2qkg2LXZhti52KrbjCDZhtqp2Kc!5e0!3m2!1sfa!2s!4v1578218520015!5m2!1sfa!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>
    </div>

    <!-- Image Area -->
    <div class="left-sec">
        <!-- INFO: Image Size = 800x460 -->
        <img src="first-slide.jpg" alt="تماس">
    </div>
</div>
<!-- Contact Footer Section Ends -->



<!-- Footer Section Begins -->
<footer>
    <div class="main">
        <!-- Links Area -->
        <ul class="links">
            <li><a href="news/index.htm">اخبار صنایع گرمایشی</a></li>
            <li><a href="links/index.htm">لینکهای مرتبط</a></li>
            <li><a href="gallery/index.htm">گالری فیلم و عکس</a></li>
            <li><a href="sitemap/index.htm">نقشه سایت</a></li>
        </ul>
        <!-- Designed By Kaspid -->
        <div class="kaspid">
            <a href="../www.kaspid.com/index.htm" target="_blank">طراحی </a>
            و
            <a href="../www.kaspid.com/seo/index.htm" target="_blank">برنامه نویسی وب اپلیکیشن</a>
            توسط هونام هوشمند
        </div>
    </div>
</footer>
<!-- Footer Section Ends -->

<!-- <script src="WebResource.axd-d=JMSzHF12Qo0asNLBY9gx3BGVZ81eZ4zF-P29lgSq54foy9GJvEb3tr_4qOiqJJzl4YVAvuIm-yJPiij5AoeT7bJdaD81-amp-t=636776850783889403.htm" type="text/javascript"></script>-->
</form>


<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/EasePack.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/animation.gsap.min.js"></script>
<script src="js/public.js"></script>


<script src="js/default.js"></script>
<script>
    var map = L.map('gmap').setView([35.504441, 51.301151], 14);
    L.tileLayer('../{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="../www.openstreetmap.org/copyright/index.htm">OpenStreetMap</a> contributors'
    }).addTo(map);
    var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: '/images/icons/pin-shadow.png',
            iconSize: [64, 64],
            shadowSize: [64, 64],
            iconAnchor: [32, 60],
            shadowAnchor: [32, 60],
            popupAnchor: [32, 0]
        }
    });
    var mapPin = new LeafIcon({
        iconUrl: '/images/icons/pin.png'
    })
    L.marker([35.504441, 51.301151], {
        icon: mapPin
    }).addTo(map);
</script>

</body>
</html>

        <!-- /footer -->