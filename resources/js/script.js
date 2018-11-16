// Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 52.5698657, lng: -2.172433 },
                scrollwheel: false,
                zoom: 10
            });
        } // close function here

       