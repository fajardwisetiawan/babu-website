<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #3282b8;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #005086;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

/* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }

  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}

</style>

<div class="topnav">
    <!-- Left-aligned links -->
    <a class="active" href="#"><span>Analysis <i class="fa fa-reorder" aria-hidden="true"></i></span></a>
    <!-- Right-aligned links -->
    <div class="topnav-right">
      <a style="color: white; background-color: #3282b8;" href="#" id="tanggalwaktu"></a>
    </div>
</div>

  <script type="text/javascript">

          var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var date = new Date();
          var day = date.getDate();
          var month = date.getMonth();
          var thisDay = date.getDay(),
              thisDay = myDays[thisDay];
          var yy = date.getYear();
          var year = (yy < 1000) ? yy + 1900 : yy;

      function showTime() {
          var today = new Date();
          var curr_hour = today.getHours();
          var curr_minute = today.getMinutes();
          var curr_second = today.getSeconds();
          curr_hour = checkTime(curr_hour);
          curr_minute = checkTime(curr_minute);
          curr_second = checkTime(curr_second);
          document.getElementById('tanggalwaktu').innerHTML= thisDay + ', ' + day + ' ' + months[month] + ' ' + year + ' Pukul ' + curr_hour + ":" + curr_minute + ":" + curr_second + " " + (" WIB ");
      }
  
      function checkTime(i) {
          if (i < 10) {
              i = "0" + i;
          }
          return i;
      }
      setInterval(showTime, 500);

  </script>