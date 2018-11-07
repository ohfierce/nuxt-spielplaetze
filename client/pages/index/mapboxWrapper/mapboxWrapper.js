
export default {
  name: 'mapboxWrapper',
  data () {
    return {
      markers: [],
      map: null,
      mapboxgl: null
    }
  },
  mounted () {
    this.fetchMarkers()
    this.createMap()
  },
  methods: {
    toggleState () {
      this.$store.commit('loading/toggle')
    },
    async fetchMarkers () {
      this.markers = await this.$axios.$get('api/test')
    },
    createMap () {
      this.mapboxgl = require('mapbox-gl/dist/mapbox-gl.js')
      this.mapboxgl.accessToken = 'pk.eyJ1IjoibWFwLW1pbyIsImEiOiJjam51aXI4bW0xNTMyM3Fta3I3aDN2NjZiIn0.cNRr1OVw37grzf_JUw_cCg'
      // init the map
      this.map = new this.mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/map-mio/cjo6vx8qn1w982sr0vhilddtc',
        center: [13.394389, 52.529889],
        zoom: 15,
        pitch: 45,
        bearing: -30,
        attributionControl: false
      })
      let _this = this
      this.map.on('load', function () {
        setTimeout(() => {
          // _this.addBuildings()
          _this.map.addControl(new _this.mapboxgl.NavigationControl());
          _this.addMarkers()
          _this.$store.commit('loading/toggle')
        }, 250)
        setTimeout(() => {
          _this.map.flyTo({
            center: [13.395583, 52.530444],
            zoom: 17,
            bearing: 0,
            speed: 0.3,
            curve: 2,
            easing: function (t) {
              return t
            }
          })
        },500)
      })
    },
    addBuildings () {
      // Insert the layer beneath any symbol layer.
      var layers = this.map.getStyle().layers

      var labelLayerId
      for (var i = 0; i < layers.length; i++) {
        if (layers[i].type === 'symbol' && layers[i].layout['text-field']) {
          labelLayerId = layers[i].id
          break
        }
      }

      this.map.addLayer({
        'id': '3d-buildings',
        'source': 'composite',
        'source-layer': 'building',
        'filter': ['==', 'extrude', 'true'],
        'type': 'fill-extrusion',
        'minzoom': 13,
        'paint': {
          'fill-extrusion-color': '#bbb',

          // use an 'interpolate' expression to add a smooth transition effect to the
          // buildings as the user zooms in
          'fill-extrusion-height': [
            'interpolate', ['linear'], ['zoom'],
            15, 0,
            15.05, ['get', 'height']
          ],
          'fill-extrusion-base': [
            'interpolate', ['linear'], ['zoom'],
            15, 0,
            15.05, ['get', 'min_height']
          ],
          'fill-extrusion-opacity': 0.6
        }
      }, labelLayerId)
    },
    addMarkers () {
      let _this = this
      this.map.addSource('markers', { type: 'geojson', data: this.markers })
      this.map.addLayer({
        id: 'myPoint',
        type: 'circle',
        source: 'markers',
        paint: {
          'circle-radius': {
            'base': 2,
            'stops': [
              [4, 2],
              [6, 4],
              [8, 6],
              [22, 180]
            ]
          },
          'circle-color': ['case',
            ['boolean', ['feature-state', 'hover'], false],
            'red',
            'blue'
          ],
          'circle-stroke-width': {
            'base': 20,
            'stops': [
              [4, 2],
              [6, 4],
              [8, 6],
              [22, 180]
            ]
          },
          'circle-stroke-color': '#333333'
        }
      })
      this.map.on('click', 'myPoint', function (e) {
        _this.markerClick(e)
      })
      let hoveredStateId = null
      _this.map.on('mousemove', 'myPoint', function (e) {
        if (e.features.length > 0) {
          if (hoveredStateId) {
            _this.map.setFeatureState({ source: 'markers', id: hoveredStateId }, { hover: false })
          }
          hoveredStateId = e.features[0].id
          _this.map.setFeatureState({ source: 'markers', id: hoveredStateId }, { hover: true })
        }
      });

      // When the mouse leaves the state-fill layer, update the feature state of the
      // previously hovered feature.
      _this.map.on('mouseleave', 'myPoint', function () {
        if (hoveredStateId) {
          _this.map.setFeatureState({source: 'markers', id: hoveredStateId}, { hover: false})
        }
        hoveredStateId =  null;
      });
    },
    markerClick (e) {
      let currentZoom = this.map.getZoom()
      let marker = e.features[0]
      let props = marker.properties
      props.options = JSON.parse(props.options)
      console.log(props)
      let geo = marker.geometry
      this.$store.commit('playground/insertContent', props)
      this.map.flyTo({
        center: [geo.coordinates[0],geo.coordinates[1]],
        zoom: currentZoom,
        bearing: 0,
        speed: 1,
        curve: 1,
        easing: function (t) {
          return t
        }
      })
    }
  }
}