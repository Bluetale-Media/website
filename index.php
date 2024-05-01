<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluetale Media</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
  body {font-family: "Lato", sans-serif}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="navBar()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About</a>
    <a href="#showcase" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Showcase</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navBar" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="navBar()">About</a>
  <a href="#showcase" class="w3-bar-item w3-button w3-padding-large" onclick="navBar()">Showcase</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- About -->
  <div class="w3-blue-grey" id="about">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <h1 class="w3-wide">Bluetale Media</h1>
      <h2 class="w3-wide">About</h2>
      <p class="w3-justify">Bluetale Media is the manifestation of an idea: how will we manage multiple media productions and publications under one brand? We already had an established brand with the Burridge and Tom podcast, and we wanted to expand our horizons without necessarily tying us into being permanent hosts for all of our productions. Thus, Bluetale Media was born.</p>
      <h3 class="w3-wide">Media Production. Plain and Simple.</h3>
      <p class="w3-justify">Bluetale Media aims to develop exciting and entertaining content, with our current primary focus being on the <a href="https://burridgeandtom.com" target="_blank">Burridge and Tom</a> brand of content. Whether that be live streams, videos on YouTube, or even our flagship Rambling On Podcast.</p>
      <p class="w3-justify">We have other plans in the pipeline and will announce them when we have news to share. Keep an eye on this site and our Social Media pages for those announcements. You can also join our <a href="https://discord.com/invite/wg3XaQgttx" target="_blank">Burridge and Tom Discord</a> server where we interact with our viewers and supporters often, we also plan game nights occasionally, as part of our gaming streams.</p>
    </div>
  </div>

  <!-- The Duo -->
  <div class="w3-teal" id="showcase">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Showcase</h2>
      <div class="w3-row-padding">
        <div class="w3-col s4">
            <iframe width="200" height="200"
              src="https://www.youtube.com/embed/ZNH6EtJNkDo">
            </iframe>
        </div>
        <div class="w3-col s4">
            <iframe width="200" height="200"
              src="https://www.youtube.com/embed/ufT4lXnQogE">
            </iframe>
        </div>
        <div class="w3-col s4">
            <iframe width="200" height="200"
              src="https://www.youtube.com/embed/zcZLCCSN2sM">
            </iframe>
        </div>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://twitter.com/BlueTaleMedia" target="_blank"><i class="fa-brands fa-x-twitter w3-hover-opacity"></i></a>
  <a href="https://discord.com/invite/wg3XaQgttx" target="_blank"><i class="fa-brands fa-discord w3-hover-opacity"></i></a>
  <p class="w3-medium">Copyright &copy; 2022 - <?php echo date("Y"); ?> <a href="https://bluetale.media" target="_blank">Bluetale Media</a></p>
</footer>

<!-- Page Scripts -->
<script src="/functions.js" ></script>
</body>
</html>