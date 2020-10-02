<?php include 'components/header.php' ?>
<?php include 'components/nav-media-analysis.php' ?>

<script>
    //PIE CHART
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work', 8],
    ['Friends', 2],
    ['Eat', 2],
    ['TV', 2],
    ['Gym', 2],
    ['Sleep', 8]
    ]);

    // Optional; add a title and set the width and height of the chart
    // var options = {'title':'My Average Day', 'width':550, 'height':400};
    var options = {
            responsive: true, 
            maintainAspectRatio: false, 
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }
</script>
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

        var options = {
            responsive: true, 
            maintainAspectRatio: false, 
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }};

        var chart = new google.visualization.LineChart(document.getElementById('chart'));
        chart.draw(data, options);
    }
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawChart);

</script>
<script>
    //PIE CHART
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work', 8],
    ['Friends', 2],
    ['Eat', 2],
    ['TV', 2],
    ['Gym', 2],
    ['Sleep', 8]
    ]);

    // Optional; add a title and set the width and height of the chart
    // var options = {'title':'My Average Day', 'width':550, 'height':400};
    var options = {
            responsive: true, 
            maintainAspectRatio: false, 
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    chart.draw(data, options);
    }
</script>
<script>
    am4core.ready(function() {

    // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4plugins_wordCloud.WordCloud);
        chart.fontFamily = "Impact";
        var series = chart.series.push(new am4plugins_wordCloud.WordCloudSeries());
        series.randomness = 0.1;
        series.rotationThreshold = 0.5;

        series.data = [ {
            "tag": "javascript",
            "count": "1765836"
        }, {
            "tag": "java",
            "count": "1517355"
        }, {
            "tag": "c#",
            "count": "1287629"
        }, {
            "tag": "php",
            "count": "1263946"
        }, {
            "tag": "android",
            "count": "1174721"
        }, {
            "tag": "python",
            "count": "1116769"
        }, {
            "tag": "jquery",
            "count": "944983"
        }, {
            "tag": "html",
            "count": "805679"
        }, {
            "tag": "c++",
            "count": "606051"
        }, {
            "tag": "ios",
            "count": "591410"
        }, {
            "tag": "css",
            "count": "574684"
        }, {
            "tag": "mysql",
            "count": "550916"
        }, {
            "tag": "sql",
            "count": "479892"
        }, {
            "tag": "asp.net",
            "count": "343092"
        }, {
            "tag": "ruby-on-rails",
            "count": "303311"
        }, {
            "tag": "c",
            "count": "296963"
        }, {
            "tag": "arrays",
            "count": "288445"
        }, {
            "tag": "objective-c",
            "count": "286823"
        }, {
            "tag": ".net",
            "count": "280079"
        }, {
            "tag": "r",
            "count": "277144"
        }, {
            "tag": "node.js",
            "count": "263451"
        }, {
            "tag": "angularjs",
            "count": "257159"
        }, {
            "tag": "json",
            "count": "255661"
        }, {
            "tag": "sql-server",
            "count": "253824"
        }, {
            "tag": "swift",
            "count": "222387"
        }, {
            "tag": "iphone",
            "count": "219827"
        }, {
            "tag": "regex",
            "count": "203121"
        }, {
            "tag": "ruby",
            "count": "202547"
        }, {
            "tag": "ajax",
            "count": "196727"
        }, {
            "tag": "django",
            "count": "191174"
        }, {
            "tag": "excel",
            "count": "188787"
        }, {
            "tag": "xml",
            "count": "180742"
        }, {
            "tag": "asp.net-mvc",
            "count": "178291"
        }, {
            "tag": "linux",
            "count": "173278"
        }, {
            "tag": "angular",
            "count": "154447"
        }, {
            "tag": "database",
            "count": "153581"
        }, {
            "tag": "wpf",
            "count": "147538"
        }, {
            "tag": "spring",
            "count": "147456"
        }, {
            "tag": "wordpress",
            "count": "145801"
        }, {
            "tag": "python-3.x",
            "count": "145685"
        }, {
            "tag": "vba",
            "count": "139940"
        }, {
            "tag": "string",
            "count": "136649"
        }, {
            "tag": "xcode",
            "count": "130591"
        }, {
            "tag": "windows",
            "count": "127680"
        }, {
            "tag": "reactjs",
            "count": "125021"
        }, {
            "tag": "vb.net",
            "count": "122559"
        }, {
            "tag": "html5",
            "count": "118810"
        }, {
            "tag": "eclipse",
            "count": "115802"
        }, {
            "tag": "multithreading",
            "count": "113719"
        }, {
            "tag": "mongodb",
            "count": "110348"
        }, {
            "tag": "laravel",
            "count": "109340"
        }, {
            "tag": "bash",
            "count": "108797"
        }, {
            "tag": "git",
            "count": "108075"
        }, {
            "tag": "oracle",
            "count": "106936"
        }, {
            "tag": "pandas",
            "count": "96225"
        }, {
            "tag": "postgresql",
            "count": "96027"
        }, {
            "tag": "twitter-bootstrap",
            "count": "94348"
        }, {
            "tag": "forms",
            "count": "92995"
        }, {
            "tag": "image",
            "count": "92131"
        }, {
            "tag": "macos",
            "count": "90327"
        }, {
            "tag": "algorithm",
            "count": "89670"
        }, {
            "tag": "python-2.7",
            "count": "88762"
        }, {
            "tag": "scala",
            "count": "86971"
        }, {
            "tag": "visual-studio",
            "count": "85825"
        }, {
            "tag": "list",
            "count": "84392"
        }, {
            "tag": "excel-vba",
            "count": "83948"
        }, {
            "tag": "winforms",
            "count": "83600"
        }, {
            "tag": "apache",
            "count": "83367"
        }, {
            "tag": "facebook",
            "count": "83212"
        }, {
            "tag": "matlab",
            "count": "82452"
        }, {
            "tag": "performance",
            "count": "81443"
        }, {
            "tag": "css3",
            "count": "78250"
        }, {
            "tag": "entity-framework",
            "count": "78243"
        }, {
            "tag": "hibernate",
            "count": "76123"
        }, {
            "tag": "typescript",
            "count": "74867"
        }, {
            "tag": "linq",
            "count": "73128"
        }, {
            "tag": "swing",
            "count": "72333"
        }, {
            "tag": "function",
            "count": "72043"
        }, {
            "tag": "amazon-web-services",
            "count": "71155"
        }, {
            "tag": "qt",
            "count": "69552"
        }, {
            "tag": "rest",
            "count": "69138"
        }, {
            "tag": "shell",
            "count": "68854"
        }, {
            "tag": "azure",
            "count": "67431"
        }, {
            "tag": "firebase",
            "count": "66411"
        }, {
            "tag": "api",
            "count": "66158"
        }, {
            "tag": "maven",
            "count": "66113"
        }, {
            "tag": "powershell",
            "count": "65467"
        }, {
            "tag": ".htaccess",
            "count": "65014"
        }, {
            "tag": "sqlite",
            "count": "64888"
        }, {
            "tag": "file",
            "count": "62783"
        }, {
            "tag": "codeigniter",
            "count": "62393"
        }, {
            "tag": "unit-testing",
            "count": "61909"
        }, {
            "tag": "perl",
            "count": "61752"
        }, {
            "tag": "loops",
            "count": "61015"
        }, {
            "tag": "symfony",
            "count": "60820"
        }, {
            "tag": "selenium",
            "count": "59855"
        }, {
            "tag": "google-maps",
            "count": "59616"
        }, {
            "tag": "csv",
            "count": "59600"
        }, {
            "tag": "uitableview",
            "count": "59011"
        }, {
            "tag": "web-services",
            "count": "58916"
        }, {
            "tag": "cordova",
            "count": "58195"
        }, {
            "tag": "class",
            "count": "58055"
        }, {
            "tag": "numpy",
            "count": "57132"
        }, {
            "tag": "google-chrome",
            "count": "56836"
        }, {
            "tag": "ruby-on-rails-3",
            "count": "55962"
        }, {
            "tag": "android-studio",
            "count": "55801"
        }, {
            "tag": "tsql",
            "count": "55736"
        }, {
            "tag": "validation",
            "count": "55531"
        } ];

        series.dataFields.word = "tag";
        series.dataFields.value = "count";

        series.heatRules.push({
        "target": series.labels.template,
        "property": "fill",
        "min": am4core.color("#2ec1ac"),
        "max": am4core.color("#d92027"),
        "dataField": "value"
        });

        series.labels.template.url = "https://stackoverflow.com/questions/tagged/{word}";
        series.labels.template.urlTarget = "_blank";
        series.labels.template.tooltipText = "{word}: {value}";

        var hoverState = series.labels.template.states.create("hover");
        hoverState.properties.fill = am4core.color("#ffc93c");


    }); // end am4core.ready()
</script>

        <div class="row p-3">
            <div class="col-lg-2">
                <?php include 'components/sidebar-left-ma.php' ?>
            </div>
            <div class="col-lg-10">
                <div class="mt-30 mb-30 p-30 bg-white box-shadow">

                    <!-- Most Viewed Videos -->
                    <div class="most-viewed-videos mb-40">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <!-- <div class="d-flex justify-content-between"> -->
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Media Analysis</h5>
                                </div>
                            <!-- </div> -->
                        </div>

                        <div class="row justify-content-center p-3">
                            
                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-right: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>What's Up?</h5>
                                </div>
                                
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="post-content" style="margin-top: -10px;">
                                        <h6>TOP PERSON</h6>
                                        <h6 style="margin-top: -10px;"><strong>Dedi Presetyo (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="post-content" style="margin-top: -25px;">
                                        <h6>TOP ORGANIZATION</h6>
                                        <h6 style="margin-top: -10px;"><strong>Organisasi Papua Merdeka (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="post-content" style="margin-top: -25px;">
                                        <h6>TOP LOCATION</h6>
                                        <h6 style="margin-top: -10px;"><strong>Papua (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="post-content" style="margin-top: -25px;">
                                        <h6>TOP TERM</h6>
                                        <h6 style="margin-top: -10px;"><strong>Rasisme (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="post-content" style="margin-top: -25px;">
                                        <h6>TOP TIME</h6>
                                        <h6 style="margin-top: -10px;"><strong>Kamis (165)</strong></h6>
                                    </div>
                                </div>
                                <a href="word-ontology" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-left: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>Where's The Crowd?</h5>
                                </div>
                                
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div id="piechart"></div>
                                </div>
                                <a href="#" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-right: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>Productive Time</h5>
                                </div>
                                
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div id="chart"></div>
                                </div>
                                <a href="sentiment" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-left: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>People</h5>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="d-flex justify-content-between" style="width: 100%; margin-left:10px; margin-right:10px; margin-top: -10px;">
                                        <h6><strong>TOP PERSON</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="d-flex justify-content-between" style="width: 100%; margin-left:10px; margin-right:10px; margin-top: -25px;">
                                        <h6>DEDY PRASETYO</h6>
                                        <h6><strong>Kamis (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="d-flex justify-content-between" style="width: 100%; margin-left:10px; margin-right:10px; margin-top: -25px;">
                                        <h6>DEDY PRASETYO</h6>
                                        <h6><strong>Kamis (165)</strong></h6>
                                    </div>
                                </div>
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div class="d-flex justify-content-between" style="width: 100%; margin-left:10px; margin-right:10px; margin-top: -25px;">
                                        <h6>DEDY PRASETYO</h6>
                                        <h6><strong>Kamis (165)</strong></h6>
                                    </div>
                                </div>
                                <a href="user-ontology" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-right: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>Mood Board</h5>
                                </div>
                                
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div id="piechart2"></div>
                                </div>
                                <a href="#" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                            <div class="col-xl-5 p-2" style="box-sizing:border-box; border-style: solid; border-width: 1px; border-color: #3282b8; margin-left: 15px; margin-top: 3px; margin-bottom: 3px; height:400px;">
                                <div class="section-heading2" style="margin-right:-9px; margin-left:-9px; margin-top:-9px">
                                    <h5>The Talks</h5>
                                </div>
                                
                                <div class="single-blog-post d-flex style-3 mb-30">
                                    <div id="chartdiv"></div>
                                </div>
                                <a href="#" style="text-align:center; position:absolute; bottom:0; width:100%; text-decoration: underline;  font-size: 12px; margin-bottom:15px; color: #3282B8;">VIEW DETAILS ></a>
                            </div>

                        </div>

                        
                    </div>
                </div>
            </div>
        </div>


<?php include 'components/footer.php' ?>
  