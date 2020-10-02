<?php include 'components/header.php' ?>


<script>
    $(document).ready(function () {

        $('#person').html('<div class="col-12 col-lg-12"> <div class="single-blog-post d-flex style-3 mb-30"> <div class="col-lg-12 mb-9 mb-lg-9"> <lines class="shine"></lines> <lines class="shine"></lines> <lines class="shine"></lines> </div> </div> </div>')

        function getberita() {
            
            $.ajax({
                url: "http://192.168.0.144:5000/trending/orang/3bulan",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                $('#person').html('');
                // console.log('coba',data);
                var no = 1;
                data.map((datas,index)=>{
                    var berita = datas.data;
                    var id_berita = [];
                    var jumlah = berita.length
                    var mention = 0;

                    berita.map(acc=>{
                        mention += acc.count
                        id_berita.push(acc.id_berita)
                    })
                    var nama = datas.nama
                    
                    console.log(mention, nama, jumlah);
                    $('#person').append( '<div class="col-12 col-lg-4"> <div class="single-blog-post d-flex style-3 mb-30"> <div class="post-content"> <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">'+no+'</span> </div> <div class="post-thumbnail"> <img src="" alt=""> <a href="single-post.html" class="post-title">'+nama+'</a> <ul class="catagory-widgets"> <li><span class="badge badge-danger">'+jumlah+' Berita</span></li> <li><span class="badge badge-danger">'+mention+' Mention</span></li> <li><span class="badge badge-danger">304 Statment</span></li> </ul> </div> </div> </div> ' )
                no++
                })
                
                
                },
                
                error: function(e) {
                    console.log(e);
                    
                    alert('gagal2');
                }
            });
        }

        getberita()

    });
</script>

    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <?php include 'components/sidebar-left.php' ?>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-40">
                <!-- Section Title -->
                <div class="section-heading">
                    <!-- <div class="d-flex justify-content-between"> -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Person & Event</h5>
                            <!-- <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #005086; color: white;">
                                    Pilih
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Pilih</a>
                                    <a class="dropdown-item" href="#">Person</a>
                                    <a class="dropdown-item" href="#">One Week</a>
                                    <a class="dropdown-item" href="#">One Month</a>
                                    <a class="dropdown-item" href="#">One Year</a>
                                </div>
                            </div> -->
                        </div>
                    <!-- </div> -->
                </div>

                <style>
                    .shine {
                      background: #f6f7f8;
                      background-image: linear-gradient(to right, #f6f7f8 0%, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
                      background-repeat: no-repeat;
                      background-size: 800px 220px; 
                      display: inline-block;
                      position: relative; 
                      
                      -webkit-animation-duration: 1s;
                      -webkit-animation-fill-mode: forwards; 
                      -webkit-animation-iteration-count: infinite;
                      -webkit-animation-name: placeholderShimmer;
                      -webkit-animation-timing-function: linear;
                      }

                    box {
                      height: 220px;
                      width: 100%;
                    }

                    .shimmer {
                      display: inline-flex;
                      flex-direction: column; 
                      margin-left: 25px;
                      margin-top: 15px;
                      vertical-align: top; 
                    }

                    lines {
                      height: 40px;
                      width: 100%;
                      margin-top:20px;
                      /* background:red;
                      height: 10px;
                      margin-top: 10px;
                      width: 100%;  */
                    }

                    photo {
                      display: block!important;
                      width: 325px; 
                      height: 100px; 
                      margin-top: 15px;
                    }

                    @-webkit-keyframes placeholderShimmer {
                      0% {
                        background-position: -468px 0;
                      }
                      
                      100% {
                        background-position: 468px 0; 
                      }
                    }

                </style>

                <div id="person" class="row">
                    <!-- <div ></div> -->
                    
                    <!-- <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">1</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">2</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">3</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">4</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">5</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">6</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-content">
                                <span class="badge" style="background-color: #005086; color: white; margin-right: 15px; margin-top: 5px; padding: 10px;">7</span>
                            </div>
                            <div class="post-thumbnail">
                                <img src="img/jokowi.jpg" alt="">
                                <a href="single-post.html" class="post-title">Joko Widodo</a>
                                <ul class="catagory-widgets">
                                    <li><span class="badge badge-danger">2.015 Berita</span></li>
                                    <li><span class="badge badge-danger">15.148 Mention</span></li>
                                    <li><span class="badge badge-danger">304 Statment</span></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>
                
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <?php include 'components/sidebar-right.php' ?>
        
    </section>

<?php include 'components/footer.php' ?>