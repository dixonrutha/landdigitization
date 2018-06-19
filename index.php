<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/leaflet.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
              integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
              crossorigin=""/>
        <link rel="stylesheet" type="text/css" href="assets/css/leaflet-gps.css">
    </head>
    <body>
       <div class="container-fluid">
           <div class="input-group">
               <input type="text" class="form-control">
               <span class="input-group-btn">
                  <button class="btn btn-info" type="button">Go!</button>
               </span>
           </div>
       </div>
       <div id="map"></div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="assets/js/leaflet.js"></script>
       <script type="text/javascript">
           var layer;
       </script>
       <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
               integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
               crossorigin=""></script>
    <script type="text/javascript" src="assets/js/mapdata.js"></script>
       <script type="text/javascript" src="assets/js/leaflet-gps.js"></script>

    </body>
</html>