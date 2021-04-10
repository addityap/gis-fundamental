<div class="container-fluid">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Map here! (click wherever you want.)
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 70vh;'></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Map Data
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="longtitude" id="long">Longtitude</label>
                                <input wire:model="long" type="text" class="form-control" name="longtitude"
                                    id="longtitude">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input wire:model="lat" type="text" class="form-control" name="latitude" id="latitude">
                            </div>
                        </div>
                    </div>
                    <label for="current">Current Map</label>

                </div>
            </div>
        </div>
    </div>
</div>

@push('mapjs')
    <script>
        document.addEventListener('livewire:load', () => {
            const defaultMapLocation = [109.30374009446905, -0.061748542034010256]
            mapboxgl.accessToken = '{{ env('MAP_KEY') }}';
            var map = new mapboxgl.Map({
                container: 'map',
                center: defaultMapLocation,
                zoom: 15.15,
            });
            const style = "dark-v10"
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            map.addControl(new mapboxgl.NavigationControl());
            map.on('click', (e) => {
                const longtitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longtitude
                @this.lat = lattitude
            })
        })

    </script>
@endpush
