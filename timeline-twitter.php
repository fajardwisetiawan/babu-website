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

<script type="text/javascript">

    async function asdqwe() {

        var json = []

        await $.ajax({
        url: '<?= $link_api ?>count',
        type: "GET",
        dataType: "JSON",
        success: function(response) {

            var color = [
            'btn-primary',
            'btn-danger',
            'btn-success',
            'btn-warning',
            ]
            // console.log(response);
            // console.log(response.length);
            var colori = 0
            for (let i = 0; i < response.length; i++) {
            $('#looping_input').append(' <a href="timeline-twitter" style="margin-right: 20px;"><span class="btn '+ color[colori] +'" style="margin-right: 5px; padding: 5px; border-radius:50%;"></span>'+response[i].id_user+'</a> ')
            if (i == 0) {
                json.push(['Input Master', 'Keseluruhan'])
            } else {
            }
            var data = [response[i].id_user,parseInt(response[i].count_op)]
            json.push(data)

            if (colori == 3) {
                colori = 0
            } else {
                colori++
            }

            }
        },
        error: function(e) {
            console.log(e);
        }
        });   

    }

    asdqwe()

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
                            <h5>Timeline Twitter</h5>
                        </div>
                    <!-- </div> -->
                </div>

                <div id="chart2"></div>
                <div class="row d-flex justify-content-center" id="looping_input">
                    <!-- <p><span class="btn btn-primary" style="margin-right: 15px; padding: 10px; border-radius:50%;"></span>asgfweg</p> -->
                </div>
                
            </div>
            
        </div>
        
    </section>

<?php include 'components/footer.php' ?>
  