var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 51.882289,
        lng: -8.510757,
    });
    map.addMarker({
        lat: 51.882289,
        lng: -8.510757,
        title: 'PND Ireland',      
        infoWindow: {
            content: '<h5 class="title">PND Ireland</h5><p><span class="region">Cork Maternity Hospital,Wilton,Cork</span><br><span class="postal-code">Postcode</span><br><span class="country-name">Ireland</span></p>'
        }
        
    });

});