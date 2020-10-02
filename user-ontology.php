<?php include 'components/header.php' ?>
<?php include 'components/nav-people.php' ?>

<script type="text/javascript">
      var DIR = "img/soft-scraps-icons/";

      var nodes = null;
      var edges = null;
      var network = null;

      // Called when the Visualization API is loaded.
      function draw() {
        // create people.
        // value corresponds with the age of the person
        var DIR = "img/";
        nodes = [
          { id: 1, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 2, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 3, shape: "circularImage", image: DIR + "jokowi.jpg" },
          {
            id: 4,
            shape: "circularImage",
            image: DIR + "jokowi.png",
            label: "pictures by this guy!",
          },
          { id: 5, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 6, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 7, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 8, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 9, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 10, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 11, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 12, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 13, shape: "circularImage", image: DIR + "jokowi.jpg" },
          { id: 14, shape: "circularImage", image: DIR + "jokowi.jpg" },
          {
            id: 15,
            shape: "circularImage",
            image: DIR + "missing.png",
            brokenImage: DIR + "missingBrokenImage.png",
            label: "when images\nfail\nto load",
          },
          {
            id: 16,
            shape: "circularImage",
            image: DIR + "anotherMissing.png",
            brokenImage: DIR + "9.png",
            label: "fallback image in action",
          },
        ];

        // create connections between people
        // value corresponds with the amount of contact between two people
        edges = [
          { from: 1, to: 2 },
          { from: 2, to: 3 },
          { from: 2, to: 4 },
          { from: 4, to: 5 },
          { from: 4, to: 10 },
          { from: 4, to: 6 },
          { from: 6, to: 7 },
          { from: 7, to: 8 },
          { from: 8, to: 9 },
          { from: 8, to: 10 },
          { from: 10, to: 11 },
          { from: 11, to: 12 },
          { from: 12, to: 13 },
          { from: 13, to: 14 },
          { from: 9, to: 16 },
        ];

        // create a network
        var container = document.getElementById("ontology");
        var data = {
          nodes: nodes,
          edges: edges,
        };
        var options = {
          nodes: {
            // borderWidth: 4,
            size: 30,
            color: {
              border: "#838383",
              background: "#e8e8e8",
            },
            font: { color: "#1a1c20" },
          },
          edges: {
            color: "#3282b8",
          },
        };
        network = new vis.Network(container, data, options);
      }
    </script>


    <section class="mag-posts-area d-flex flex-container">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <?php include 'components/sidebar-left.php' ?>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mt-30 mb-30 p-30 bg-white box-shadow" style="flex-grow: 9">

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-40">
                <!-- Section Title -->
                <div class="section-heading">
                    <!-- <div class="d-flex justify-content-between"> -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>User Ontology</h5>
                        </div>
                    <!-- </div> -->
                </div>

                <div id="ontology" style="width:100%;"></div>
                
            </div>
        </div>
        
    </section>

<?php include 'components/footer.php' ?>
  