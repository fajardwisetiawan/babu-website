<?php include 'config/url.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <html class="no-js" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SISFORBERITA AND MEDSOS - Erendi Digital Labs</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.awesomeCloud-0.2.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://visjs.github.io/vis-network/standalone/umd/vis-network.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/plugins/wordCloud.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<style>
    #chartdiv {
    width: 100%;
    height: 290px;
    }
    #chart {
    width: 100%;
    height: 290px;
    }
    #chartdivv {
    width: 100%;
    height: 800px;
    }
</style>
<style type="text/css">
    body {
    font: 10pt arial;
    }
    :focus {
    outline: 0;
    }
    #ontology {
    width: 800px;
    height: 800px;
    border: none;
    background-color: #FFFFFF;
    }
</style>
</head>

<body onload="draw()">
<script>
    $(document).ready(function () {
        // function getSidebar() {
        //     $.ajax({
        //         url: "http://103.112.162.79:3000/berita",
        //         type: "GET",
        //         dataType: "JSON",
        //         success: function(data) {
        //             var no = 0;
        //             for (let i = 0; i < 5; i++) {
        //             no++
        //             $('#oi2').append("<div class='single-blog-post d-flex'> <div class='post-thumbnail'> <img src='"+data[i].img+"' alt=''> </div> <div class='post-content'> <a href='detail?id="+data[i]._id+"' class='post-title'>"+data[i].judul+"</a> </div> </div>")
        //             }
        //         },
        //         error: function(e) {
        //             console.log(e);
                    
        //             alert('gagal3');
        //         }
        //     });
        // }

        // getSidebar()


        function formatangka(nominal) {
            var	number_string = nominal.toString(),
                sisa 	= number_string.length % 3,
                rupiah 	= number_string.substr(0, sisa),
                ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                    
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            // Cetak hasil
            // console.log(rupiah);
            return rupiah
        }

        $.ajax({
            url: "<?= $link_api3000 ?>count",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                // console.log(formatRupiah(data.data, 'Rp. '));
                $('#jumlahdata').html(formatangka(data.data))
            },
            error: function(e) {
                console.log(e);
                
                alert('gagal');
            }
        });

        $.ajax({
            url: "<?= $link_api3000 ?>countperchanel",
            // url: "http://103.112.162.79:3000/countperchanel",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log("asd : "+data.data.length);
                
                for (let i = 0; i < data.data.length; i++) {
                    console.log("woi : "+i);

                    $('#chanel').append("<div class='single-sidebar-widget' style='padding:0px 0px 20px 0px;'> <div class='section-heading'> <h5>"+data.data[i]._id+"</h5> </div> <div id='qwe"+i+"'></div> </div>")
                    
                    for (let a = 0; a < data.data[i].STATUS_GROUP.length ; a++) {
                        console.log(data.data[i].STATUS_GROUP[a].STATUS);
                        var kategori = data.data[i].STATUS_GROUP[a].STATUS.replace(/ /g,"")
                        $('#qwe'+i).append("<ul class='catagory-widgets'> <li><a href='news-from-category?kategori="+data.data[i].STATUS_GROUP[a].STATUS+"'><span><i class='fa fa-angle-double-right' aria-hidden='true'></i> "+data.data[i].STATUS_GROUP[a].STATUS+"</span> <span>"+formatangka(data.data[i].STATUS_GROUP[a].count)+"</span></a></li> </ul>")
                    }
                    // $('#chanel').append("<div class='section-heading'> <h5>"+data.data[i]._id+"</h5> </div>")
                    
                }
            },
            error: function(e) {
                console.log(e);
                
                alert('gagal');
            }
        });

    });
    
</script>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include 'nav.php' ?>