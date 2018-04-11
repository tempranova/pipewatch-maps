<?php get_header(); ?>

<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

<style>
#mapid {
  bottom:0;
  top:0;
  width: 100%;
  position: absolute;
  z-index:-1;
}
.pipewatch-nav {
  background: none !important;
  position: absolute;
  bottom: 0;
  width: 100%;
  /* background-color: transparent; */
}
.pipewatch-nav .navbar-brand {
  background: #333;
  color: #FFF;
  padding: 5px 10px;
}
.pipewatch-nav #menu-main-menu {
  background: #eee;
  padding: 0px 10px;
  margin-left:-15px;
}
.pipewatch-nav .navbar-toggler {
  background: #eee;
  color: #333;
}
.icons {
  margin: 0 auto;
  width:100%;
  text-align:center;
}
.icons div {
  width: 50px;
  height: 50px;
  margin: 10px 5px;
  box-shadow: 2px 2px 2px #333;
  overflow: hidden;
  /* border-radius: 50%; */
  display:inline-block;
  background: white;
  padding: 5px 10px;
}
.icons div:hover {
  background: #eee;
  cursor: pointer;
}
.icons div img {
  width: 50px;
  height: auto;
}
</style>

<div class="icons">
  <div><img src="<?php echo get_template_directory_uri(); ?>-child/img/project.png" /></div>
  <div><img src="<?php echo get_template_directory_uri(); ?>-child/img/pipeline.png" /></div>
  <div><img src="<?php echo get_template_directory_uri(); ?>-child/img/activist.png" /></div>
  <div><img src="<?php echo get_template_directory_uri(); ?>-child/img/spill.png" /></div>
</div>

<div id="mapid"></div>
<script>

	var mymap = L.map('mapid').setView([51.505, -0.09], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

</script>

<?php get_footer(); ?>
