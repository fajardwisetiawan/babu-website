<?php include 'components/header.php' ?>
<?php include 'components/nav-productive-time.php' ?>

<script>
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'y');
        data.addColumn('number', 'Positif');
        data.addColumn({type: 'string', role: 'tooltip'});
        data.addColumn('number', 'Negatif');
        data.addColumn({type: 'string', role: 'tooltip'});
        data.addColumn('number', 'Netral');
        data.addColumn({type: 'string', role: 'tooltip'});
        
        data.addRow([20, 15,"15", 5, "5", 1, "1"]);
        data.addRow([40, 2,"2", 14, "14", 5, "5"]);
        data.addRow([60, 5,"5", 7, "7", 16, "16"]);
        data.addRow([80, 7,"7", 11, "11", 3, "3"]);
        data.addRow([100, 11,"11", 10, "10", 7, "7"]);

        var options = {width:'100%', 'height':800};

        var chart = new google.visualization.LineChart(document.getElementById('chart2'));
        chart.draw(data, options);
    }
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawChart);

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
                            <h5>Sentiment</h5>
                        </div>
                    <!-- </div> -->
                </div>

                <div id="chart2"></div>
                
            </div>
        </div>
        
    </section>

<?php include 'components/footer.php' ?>
  