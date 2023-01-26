(function(){
    
    //new counter
    new PureCounter();

    // Glightbox
    const lightbox = GLightbox({
        selector:'.glightbox'
    })
    
    $('.owl-carousel').owlCarousel(
        {
            autoplay: true,
            autoplayHoverPause:true,
            autoplayTimeout:2000,
            items: 2,
            nav:true,
            lazyLoad: true,
            loop: true,
            dots: false,
        }
    );

    // maps
    // mapboxgl.accessToken = 'pk.eyJ1Ijoicm9uaW5ncnVtIiwiYSI6ImNsODlwdGd1ZjAzYmgzb2xmc2phd2hvdWMifQ.DPSlo2KGxIkxeh9JThpSlw';
    // const map = new mapboxgl.Map({
    // container: 'map', // container ID
    // style: 'mapbox://styles/mapbox/streets-v11', // style URL
    // center:[110.4146236, -6.9870703], // starting position [lng, lat]
    // zoom: 10, // starting zoom// starting zoom
    // projection: 'globe' // display the map as a 3D globe
    // });
    // map.on('style.load', () => {
    // map.setFog({}); // Set the default atmosphere style
    // });

    // var locations = $("#map").val();
    // console.log(locations);

    // for (let i = 0; i < locations.length; i++) {
    //     $lng = parseFloat(locations[i]['longitude'])
    //     $lat = parseFloat(locations[i]['latitude'])
    //     const media = locations[i]['profile_picture']
    //     const name = locations[i]['nama_tim']
    //     const status = locations[i]['status']
    
    //     const el = document.createElement('div')
    //     el.style.backgroundImage = `url(http://119.2.50.173:6006/media/${media})`
    //     el.style.width = `80px`;
    //     el.style.height = `80px`;
    //     el.style.backgroundSize = '100%';
    
    //     const popup = new mapboxgl.Popup({offset: 25}).setText("Tim Ambulance Hebat " +name);
    
    //     new mapboxgl.Marker(el).setLngLat([$lng, $lat]).setPopup(popup).addTo(map);
       
    // }
    
})()