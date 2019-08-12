@extends('layout/main')


@section('title', 'Home')


@section('container')
<section>
    <div class="container p_50">
        <div id="googleMap" style="width:100%;height:70%;"></div>
    </div>
</section>
@endsection
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC5rIe8cvjzlPetRb87jaLFlLWvPj92r1Q"></script>

@section('scripts')
<script>
    (function() {
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-8.5830695, 116.3202515),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    }())
</script>
@endsection