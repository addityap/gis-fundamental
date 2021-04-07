<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <h1>Map Locations</h1>
    <div id='map' style='width: 400px; height: 300px;'></div>
</div>

@push('mapjs')
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiYWRkaXR5YXAiLCJhIjoiY2tuNG1mazg5MTJwbjMwdGU3a3JicWN0aiJ9.fCC-K01qIq8Cq99uQ6w0KQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });

    </script>
@endpush
