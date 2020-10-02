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
    <a class="active" href="#"><span>Analysis <i class="fa fa-reorder" aria-hidden="true"></i></span></a>
    <a class="active" href="#" style="color: red;">People</a>
    <a href="sentiment">Top Person</a>
    <a href="timeline">Media Share</a>
    <a href="sentiment">Related Organization</a>
    <a href="user-ontology">User Ontology</a>
    <a href="sentiment">Media Ontology</a>
    <a href="timeline">Organization Ontology</a>

    <div class="topnav-right">
      <a style="color: white; background-color: #3282b8;" href="#">28-September-2020, 17:25</a>
    </div>
</div>