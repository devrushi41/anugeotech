<footer class="page-footer teal lighten-2">
    <div class="container">
        <div class="row">
            <div class="center">
                <div class="col s12 m6">
                    <h5 class="white-text">Anu GeoTechnical Investigation</h5>
                    <p class="lighten-2">Estd, 1994</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Go Back ?</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#home">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="#about">About</a></li>
                        <li><a class="grey-text text-lighten-3" href="#services">Services</a></li>
                        <li><a class="grey-text text-lighten-3" href="#gallery">Gallery</a></li>
                        <li><a class="grey-text text-lighten-3" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Anu GeoTechnical Investigation © 2019 Copyright
            <span class="right">Powered By <a class="grey-text text-lighten-4 right" href="https://www.devrushi.com"> DevRushi</a> </span>
        </div>
    </div>
</footer>




<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js\jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOmmY_IkuGTlrrf_tB6YM78ujzQVeWX-k&callback=initMap">
</script>
<script>
    const sidenav = document.querySelector('.sidenav');
    M.Sidenav.init(sidenav, {});
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
        indicators: false,
        transition: 500,
        height: 500,
        interval: 4000

    });
</script>
<script>
    require('waypoints/lib/noframework.waypoints.js')
    const el = document.querySelector('.counter')
    new Waypoint({
        element: el,
        handler: function() {
            counterUp(el)
            this.destroy()
        },
        offset: 'bottom-in-view',
    })
</script>
</body>

</html>