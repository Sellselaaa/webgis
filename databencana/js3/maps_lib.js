// Enable the visual refresh
google.maps.visualRefresh = true;

var MapsLib = MapsLib || {};
var MapsLib = {

  fusionTableId:      "1iZEYec-E-21GSvroNzSQxRq6_lQBz78-VfKzRaFW", //Point data layer
  

  googleApiKey:       "AIzaSyDIevSvpV-ONb4Pf15VUtwyr_zZa7ccwq4",

  //MODIFY name of the location column in your Fusion Table.
  //NOTE: if your location column name has spaces in it, surround it with single quotes
  //example: locationColumn:     "'my location'",
  //if your Fusion Table has two-column lat/lng data, see https://support.google.com/fusiontables/answer/175922
  locationColumn:     "Latitude",

  map_centroid:       new google.maps.LatLng(-7.528853, 109.2364087), //center that your map defaults to
  locationScope:      "Banyumas",      //geographical area appended to all address searches
  recordName:         "result",       //for showing number of results
  recordNamePlural:   "results",

  searchRadius:       500,            //in meters ~ 1/2 kilometer
  defaultZoom:        10,             //zoom level when map is loaded (bigger is more zoomed in)
  addrMarkerImage:    'images/blue-pushpin.png',
  currentPinpoint:    null,

  initialize: function() {
    $( "#result_count" ).html("");

    geocoder = new google.maps.Geocoder();
    var myOptions = {
      zoom: MapsLib.defaultZoom,
      center: MapsLib.map_centroid,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#242f3e"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#263c3f"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6b9a76"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#38414e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#212a37"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9ca5b3"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#746855"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#1f2835"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#f3d19c"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2f3948"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#d59563"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#515c6d"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#17263c"
      }
    ]
  }
]
    };
    map = new google.maps.Map($("#map_canvas")[0],myOptions);

    // maintains map centerpoint for responsive design
    google.maps.event.addDomListener(map, 'idle', function() {
        MapsLib.calculateCenter();
    });

    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(MapsLib.map_centroid);
    });

    MapsLib.searchrecords = null;

    // MODIFY if needed: defines background polygon1 and polygon2 layers
    MapsLib.polygon1 = new google.maps.FusionTablesLayer({
      query: {
        from:   MapsLib.polygon1TableID,
        select: "geometry"
      },
      styleId: 2,
      templateId: 2
    });

    MapsLib.polygon2 = new google.maps.FusionTablesLayer({
      query: {
        from:   MapsLib.polygon2TableID,
        select: "geometry"
      },
      styleId: 2,
      templateId: 2
    });

    //reset filters
    $("#search_address").val(MapsLib.convertToPlainString($.address.parameter('address')));
    var loadRadius = MapsLib.convertToPlainString($.address.parameter('radius'));
    if (loadRadius != "") $("#search_radius").val(loadRadius);
    else $("#search_radius").val(MapsLib.searchRadius);
    $(":checkbox").prop("checked", "checked");
    $("#result_box").hide();
    
    if ($.address.parameter('Banjir') == "1")
      $("#cbType2").attr("checked", true);
    else
      $("#cbType2").attr("checked", false);

    if ($.address.parameter('Angin Puting') == "1")
      $("#cbType3").attr("checked", true);
    else
      $("#cbType3").attr("checked", false);


     if ($.address.parameter('Laka) == "1")
      $("#cbType5").attr("checked", true);
    else
      $("#cbType5").attr("checked", false);

    if ($.address.parameter('Gempa Bumi') == "1")
      $("#cbType6").attr("checked", true);
    else
      $("#cbType6").attr("checked", false);



    //-----custom initializers -- default setting to display Polygon1 layer
    
    $("#rbPolygon1").attr("checked", "checked"); 
    
    //-----end of custom initializers-------

    //run the default search
    MapsLib.doSearch();
  },

  doSearch: function(location) {
    MapsLib.clearSearch();

    var address = $("#search_address").val();
    MapsLib.searchRadius = $("#search_radius").val();

    var whereClause = MapsLib.locationColumn + " not equal to ''";

  //-----custom filters for point data layer
    //---MODIFY column header and values below to match your Google Fusion Table AND index.php
    //-- TEXTUAL OPTION to display legend and filter by non-numerical data in your table
    var type_column = "'Kategori Bencana Sering Terjadi'";  // -- note use of single & double quotes for two-word column header
    var tempWhereClause = [];
    if ( $("#cbType1").is(':checked')) tempWhereClause.push("Longsor");
    if ( $("#cbType2").is(':checked')) tempWhereClause.push("Banjir");
    if ( $("#cbType3").is(':checked')) tempWhereClause.push("Angin Puting");
    whereClause += " AND " + type_column + " IN ('" + tempWhereClause.join("','") + "')";

    var type_column = "'Kategori Bencana Tidak Banyak Terjadi'"; 
    var tempWhereClause = [];
    if ( $("#cbType4").is(':checked')) tempWhereClause.push("Kebakaran");
    if ( $("#cbType5").is(':checked')) tempWhereClause.push("Laka");
    if ( $("#cbType6").is(':checked')) tempWhereClause.push("Gempa Bumi");
    if ( $("#cbType7").is(':checked')) tempWhereClause.push("Kekeringan");
    whereClause += " AND " + type_column + " IN ('" + tempWhereClause.join("','") + "')";

  

    
    //-------end of custom filters--------
   
    if (address != "") {
      if (address.toLowerCase().indexOf(MapsLib.locationScope) == -1)
        address = address + " " + MapsLib.locationScope;

      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          MapsLib.currentPinpoint = results[0].geometry.location;


          $.address.parameter('address', encodeURIComponent(address));
          $.address.parameter('radius', encodeURIComponent(MapsLib.searchRadius));
          map.setCenter(MapsLib.currentPinpoint);
          map.setZoom(14);

          MapsLib.addrMarker = new google.maps.Marker({
            position: MapsLib.currentPinpoint,
            map: map,
            icon: MapsLib.addrMarkerImage,
            animation: google.maps.Animation.DROP,
            title:address
          });

          whereClause += " AND ST_INTERSECTS(" + MapsLib.locationColumn + ", CIRCLE(LATLNG" + MapsLib.currentPinpoint.toString() + "," + MapsLib.searchRadius + "))";

          MapsLib.drawSearchRadiusCircle(MapsLib.currentPinpoint);
          MapsLib.submitSearch(whereClause, map, MapsLib.currentPinpoint);
        }
        else {
          alert("We could not find your address: " + status);
        }
      });
    }
    else { //search without geocoding callback
      MapsLib.submitSearch(whereClause, map);
    }
  },

  submitSearch: function(whereClause, map, location) {
    //get using all filters
    //NOTE: styleId and templateId are recently added attributes to load custom marker styles and info windows
    //you can find your Ids inside the link generated by the 'Publish' option in Fusion Tables
    //for more details, see https://developers.google.com/fusiontables/docs/v1/using#WorkingStyles

    MapsLib.searchrecords = new google.maps.FusionTablesLayer({
      query: {
        from:   MapsLib.fusionTableId,
        select: MapsLib.locationColumn,
        where:  whereClause
      },
      styleId: 2,
      templateId: 2
    });
    MapsLib.searchrecords.setMap(map);
    MapsLib.getCount(whereClause);
    MapsLib.getList(whereClause);
  },
  // MODIFY if you change the number of Polygon layers
  clearSearch: function() {
    if (MapsLib.searchrecords != null)
      MapsLib.searchrecords.setMap(null);
    if (MapsLib.polygon1 != null)
      MapsLib.polygon1.setMap(null);
    if (MapsLib.polygon2 != null)
      MapsLib.polygon2.setMap(null);
    if (MapsLib.addrMarker != null)
      MapsLib.addrMarker.setMap(null);
    if (MapsLib.searchRadiusCircle != null)
      MapsLib.searchRadiusCircle.setMap(null);
  },

  findMe: function() {
    // Try W3C Geolocation (Preferred)
    var foundLocation;

    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        foundLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
        MapsLib.addrFromLatLng(foundLocation);
      }, null);
    }
    else {
      alert("Maaf, lokasi tidak ditemukan.");
    }
  },

  addrFromLatLng: function(latLngPoint) {
    geocoder.geocode({'latLng': latLngPoint}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {
          $('#search_address').val(results[1].formatted_address);
          $('.hint').focus();
          MapsLib.doSearch();
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  },

  drawSearchRadiusCircle: function(point) {
      var circleOptions = {
        strokeColor: "#4b58a6",
        strokeOpacity: 0.3,
        strokeWeight: 1,
        fillColor: "#4b58a6",
        fillOpacity: 0.05,
        map: map,
        center: point,
        clickable: false,
        zIndex: -1,
        radius: parseInt(MapsLib.searchRadius)
      };
      MapsLib.searchRadiusCircle = new google.maps.Circle(circleOptions);
  },

  query: function(selectColumns, whereClause, groupBY, orderBY, limit, callback) {
    var queryStr = [];
    queryStr.push("SELECT " + selectColumns);
    queryStr.push(" FROM " + MapsLib.fusionTableId);

    if (whereClause != "")
      queryStr.push(" WHERE " + whereClause);

    if (groupBY != "")
      queryStr.push(" GROUP BY " + groupBY);

    if (orderBY != "")
      queryStr.push(" ORDER BY " + orderBY);

     if (limit != "")
      queryStr.push(" LIMIT " + limit);

    var sql = encodeURIComponent(queryStr.join(" "));
    // console.log(sql)
    $.ajax({url: "https://www.googleapis.com/fusiontables/v1/query?sql="+sql+"&callback="+callback+"&key="+MapsLib.googleApiKey, dataType: "jsonp"});
  },

  handleError: function(json) {
    if (json["error"] != undefined) {
      var error = json["error"]["errors"]
      console.log("Error in Fusion Table call!");
      for (var row in error) {
        console.log(" Domain: " + error[row]["domain"]);
        console.log(" Reason: " + error[row]["reason"]);
        console.log(" Message: " + error[row]["message"]);
      }
    }
  },

  getCount: function(whereClause) {
    var selectColumns = "Count()";
    MapsLib.query(selectColumns, whereClause,"", "", "", "MapsLib.displaySearchCount");
  },

  displaySearchCount: function(json) {
    MapsLib.handleError(json);
    var numRows = 0;
    if (json["rows"] != null)
      numRows = json["rows"][0];

    var name = MapsLib.recordNamePlural;
    if (numRows == 1)
    name = MapsLib.recordName;
    $( "#result_box" ).fadeOut(function() {
        $( "#result_count" ).html(MapsLib.addCommas(numRows) + " Bencana" + " ditemukan");
      });
    $( "#result_box" ).fadeIn();
  },

  getList: function(whereClause) {
    // select specific columns from the fusion table to display in th list
    // NOTE: we'll be referencing these by their index (0 = Name, 1 = Address, etc), so order matters!
    var selectColumns = "Nama_Bencana, Tanggal, Alamat, Meninggal, Website";
    MapsLib.query(selectColumns, whereClause,"", "", 500, "MapsLib.displayList");
  },

  displayList: function(json) {
    MapsLib.handleError(json);
    var columns = json["columns"];
    var rows = json["rows"];
    var template = "";

    var results = $("#listview");
    results.empty(); //hide the existing list and empty it out first

    if (rows == null) {
      //clear results list
      results.append("<span class='lead'>No results found</span>");
      }
    else {

      //set table headers
      var list_table = "\
      <table class='table' id ='list_table'>\
        <thead>\
          <tr>\
            <th>Nama Bencana</th>\
            <th>Tanggal&nbsp;&nbsp;</th>\
            <th>Alamat</th>\
            <th>Meninggal</th>\
          </tr>\
        </thead>\
        <tbody>";

      // based on the columns we selected in getList()
      // rows[row][0] = Nama_Bencana
      // rows[row][1] = Tanggal
      // rows[row][2] = Alamat
      // rows[row][3] = Meninggal
      // rows[row][4] = Website
      // rows[row][5] = Luka
      // rows[row][6] = Latitude
      // rows[row][7] = Longitude
      // rows[row][8] = Wilayah
      // rows[row][9] = Website

      for (var row in rows) {

        var name = "<a href='" + rows[row][4] + "'>" + rows[row][0] + "</a>";
        var address = rows[row][2];

        list_table += "\
          <tr>\
            <td>" + name + "</td>\
            <td>" + rows[row][1] + "</td>\
            <td>" + address + "</td>\
            <td>" + rows[row][3] + "</td>\
            <td><span data-value='" + rows[row][7] + "' /></span></td>\
          </tr>";
      }

      list_table += "\
          </tbody>\
        </table>";

      // add the table to the page
      results.append(list_table);
      
      // init datatable
      // once we have our table put together and added to the page, we need to initialize DataTables
      // reference: http://datatables.net/examples/index

      // custom sorting functions defined in js/jquery.dataTables.sorting.js
      // custom Bootstrap styles for pagination defined in css/dataTables.bootstrap.css

      $("#list_table").dataTable({
          "aaSorting": [[0, "asc"]], //default column to sort by (School)
          "aoColumns": [ // tells DataTables how to perform sorting for each column
              { "sType": "html-string" }, //School name with HTML for the link, which we want to ignore
              null, // Grades - default text sorting
              null, // Address - default text sorting
              null, // Manager - default text sorting
              { "sType": "data-value-num" } // Gain - sort by a hidden data-value attribute
          ],
          "bFilter": false, // disable search box since we already have our own
          "bInfo": false, // disables results count - we already do this too
          "bPaginate": true, // enables pagination
          "sPaginationType": "bootstrap", // custom CSS for pagination in Bootstrap
          "bAutoWidth": false
      });
    }
   },


  addCommas: function(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
  },

  // maintains map centerpoint for responsive design
  calculateCenter: function() {
    center = map.getCenter();
  },

  //converts a slug or query string in to readable text
  convertToPlainString: function(text) {
    if (text == undefined) return '';
  	return decodeURIComponent(text);
  }
  
  //-----custom functions-------
  // NOTE: if you add custom functions, make sure to append each one with a comma, except for the last one.
  // This also applies to the convertToPlainString function above
  
  //-----end of custom functions-------
}
