/*===========================================================================*/
// Vector Tiles
// Sample map by ThinkGeo
// 
//   1. ThinkGeo Cloud API Key
//   2. Map Control Setup
//   3. Changing the Map Style
//   4. ThinkGeo Map Icon Fonts
//   5. Tile Loading Event Handlers
/*===========================================================================*/


/*---------------------------------------------*/
// 1. ThinkGeo Cloud API Key
/*---------------------------------------------*/

// First, let's define our ThinkGeo Cloud API key, which we'll use to
// authenticate our requests to the ThinkGeo Cloud API.  Each API key can be
// restricted for use only from a given web domain or IP address.  To create your
// own API key, you'll need to sign up for a ThinkGeo Cloud account at
// https://cloud.thinkgeo.com.
const apiKey = 'NFt2bSsCWznMluTn2AkVgYRBUIjILtf34mFEbuDXMnY~';


/*---------------------------------------------*/
// 2. Map Control Setup
/*---------------------------------------------*/

// Now, we'll create the two different styles of layers for our map. 
// The two styles of layers use ThinkGeo Cloud Maps Vector Tile service to 
// display the detailed light style street map and dark style street map.
// For more info, see our wiki: 
// https://wiki.thinkgeo.com/wiki/thinkgeo_cloud_maps_vector_tiles
let light = new ol.mapsuite.VectorTileLayer('https://cdn.thinkgeo.com/worldstreets-styles/3.0.0/light.json', {
    apiKey: apiKey,
    layerName: 'light'
});

let dark = new ol.mapsuite.VectorTileLayer('https://cdn.thinkgeo.com/worldstreets-styles/3.0.0/dark.json', {
    apiKey: apiKey,
    visible: false,
    layerName: 'dark'
});

// This function will create and initialize our interactive map.
// We'll call it later when our POI icon font has been fully downloaded,
// which ensures that the POI icons display as intended.
let map;
let initializeMap = () => {
    map = new ol.Map({
        renderer:'webgl',
        loadTilesWhileAnimating: true,
        loadTilesWhileInteracting: true,

        // Add our two previously-defined ThinkGeo Cloud Vector Tile layers to the map.
        layers: [light, dark],
        // States that the HTML tag with id="map" should serve as the container for our map.
        target: 'map',
        // Create a default view for the map when it starts up.
        view: new ol.View({

            // Center the map on the United States and start at zoom level 3.
            center: ol.proj.fromLonLat([-96.79620, 32.79423]),
            maxResolution: 40075016.68557849 / 512,
            zoom: 3,
            minZoom: 2,
            maxZoom: 19
        })
    });

    // Add a button to the map that lets us toggle full-screen display mode.
    map.addControl(new ol.control.FullScreen());
}


/*---------------------------------------------*/
// 3. Changing the Map Style
/*---------------------------------------------*/

const changeLayer = (e) => {
    let layers = map.getLayers().getArray();
    for (let i = 0; i < layers.length; i++) {
        if (layers[i].get("layerName") == e.target.getAttribute("value")) {
            layers[i].setVisible(true);
        } else {
            layers[i].setVisible(false);
        }
    }
}

// When click the different styles button, render the relevant style map.
document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('wrap').addEventListener('click', (e) => {
        const nodeList = document.querySelectorAll(".thumb");    
        for (let node of nodeList) {
            node.style.borderColor = 'transparent';
        }
        if (e.target.nodeName == 'DIV') {
            e.target.style.borderColor = '#ffffff';
            changeLayer(e);
        }
        switch(e.target.getAttribute("value")) {
          case 'dark':
            document.body.style.backgroundColor = '#3a3a3a';
            break;
          default:
            document.body.style.backgroundColor = '#f0f0f0';
            break;
        }
    })
})


/*---------------------------------------------*/
// 4. ThinkGeo Map Icon Fonts
/*---------------------------------------------*/

// Finally, we'll load the Map Icon Fonts using ThinkGeo's WebFont loader. 
// The loaded Icon Fonts will be used to render POI icons on top of the map's 
// background layer.  We'll initalize the map only once the font has been 
// downloaded.  For more info, see our wiki: 
// https://wiki.thinkgeo.com/wiki/thinkgeo_iconfonts 
WebFont.load({
    custom: {
        families: ["vectormap-icons"],
        urls: ["https://cdn.thinkgeo.com/vectormap-icons/2.0.0/vectormap-icons.css"],
        testStrings: {
          'vectormap-icons': '\ue001'
        }
    },
    // The "active" property defines a function to call when the font has
    // finished downloading.  Here, we'll call our initializeMap method.
    active: initializeMap
});


/*---------------------------------------------*/
// 5. Tile Loading Event Handlers
/*---------------------------------------------*/

// These events allow you to perform custom actions when 
// a map tile encounters an error while loading.
const errorLoadingTile = () => {
    const errorModal = document.querySelector('#error-modal');
    if (errorModal.classList.contains('hide')) {
        // Show the error tips when Tile loaded error.
        errorModal.classList.remove('hide');
    }
}

const setLayerSourceEventHandlers = (layer) => {
    let layerSource = layer.getSource();
    layerSource.on('tileloaderror', function () {
        errorLoadingTile();
    });
}

setLayerSourceEventHandlers(light);
setLayerSourceEventHandlers(dark);

document.querySelector('#error-modal button').addEventListener('click', () => {
    document.querySelector('#error-modal').classList.add('hide');
})