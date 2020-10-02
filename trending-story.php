<?php include 'components/header.php' ?>


<script>
    $(document).ready(function () {

        function getberita() {
            const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            const page = urlParams.get('page')
            console.log(page);
            var pagefix

            if (page == null) {
                pagefix = 1
            } else {
                pagefix = page
            }
            
            $.ajax({
                url: "<?= $link_api3000 ?>?page="+pagefix,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    if (pagefix == 1) {
                        $('#pagination1').attr('class','page-item active')
                        $('#pagination_link1').html(pagefix)
                        $('#pagination_link2').html(parseInt(pagefix)+1)
                        $('#pagination_link2').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)+1))
                        $('#pagination_link3').html(parseInt(pagefix)+2)
                        $('#pagination_link3').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)+2))
                        $('#page_next_link').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)+1))
                        $('#page_prev').css('display','none')
                    } else if(pagefix == data.totalPages){
                        $('#pagination3').attr('class','page-item active')
                        $('#pagination_link3').html(pagefix)
                        $('#pagination_link1').html(parseInt(pagefix)-2)
                        $('#pagination_link1').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)-2))
                        $('#pagination_link2').html(parseInt(pagefix)-1)
                        $('#pagination_link2').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)-1))
                        $('#page_next').css('display','none')
                        $('#page_prev_link').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)-1))
                    } else {
                        $('#pagination2').attr('class','page-item active')
                        $('#pagination_link2').html(pagefix)

                        $('#pagination_link1').html(parseInt(pagefix)-1)
                        $('#pagination_link1').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)-1))
                        $('#pagination_link3').html(parseInt(pagefix)+1)
                        $('#pagination_link3').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)+1))
                        $('#page_next_link').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)+1))
                        $('#page_prev_link').attr('href','<?= $link_api_local ?>babu?page='+Number(parseInt(pagefix)-1))
                    }
                    // console.log(data.length);
                    $('#content').html('')
                    var no = 0;
                    for (let i = 0; i < data.data.length; i++) {
                        no++
                        if (data.data[i].img != '') {
                        gambar = data.data[i].img
                        } else {
                            gambar = 'img/notfound.png'
                        }

                        if (data.data[i].chanel == 'republika') {
                            gc = 'img/logo-chanel/republika.png'
                        }else if (data.data[i].chanel == 'kompas') {
                            gc = 'img/logo-chanel/kompas.jpg'
                        }else if (data.data[i].chanel == 'inilah') {
                            gc = 'img/logo-chanel/inilah.png'
                        } else {
                            gc = 'img/notfound.png'
                        }
                        
                        $('#content').append( '<div class="single-catagory-post d-flex flex-wrap"> <div class="post-thumbnail bg-img"> <a href="detail-news?id='+data.data[i]._id+'"> <img src="'+gambar+'" alt="" style="width: 100%; height:230px; object-fit: cover;"> </a> </div> <div class="post-content"> <div class="post-meta"> <div class="row"> <div class="col-lg-12"> <div class=" d-flex align-items-center"> <div class="post-author-thumb"> <img src="'+gc+'" style="border-radius: 50%;height: 50px;width: 50px;" alt=""> </div> <div class="post-author-desc pl-4"> <p style="margin-bottom: -5px; color: black; font-size: 17px;">'+data.data[i].chanel+'</p> <small>'+data.data[i].tgl_post+'</small> </div> </div> </div> </div> </div> <a href="detail-news?id='+data.data[i]._id+'" class="post-title" style="font-size: 25px;">'+data.data[i].judul+'</a> <a href="detail-news?id='+data.data[i]._id+'" class="post-title" style="font-size: 20px; color: #3bc7ed;">Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> </div> </div> ' )
                    }
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
                            <h5>Trending Story</h5>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="row">
                    
                    <div class="col-12 col-lg-12">
                        <div class="section-heading2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Kota Bekasi</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-trending-post">
                            <img src="img/bg-img/20.jpg" alt="" style="width: 100%; height:455px; object-fit: cover;">
                            <div class="post-content">
                                <a href="#" class="post-cata">Nov 08, 2019 08:00 PM</a>
                                <a href="video-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn mag-btn w-100" style="height:50px; background-color: #005086;">Selengkapnya</button>
                        
                    </div>

                </div>
                
                <br>

                <div class="row">
                    
                    <div class="col-12 col-lg-12">
                        <div class="section-heading2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Kota Bekasi</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-trending-post">
                            <img src="img/bg-img/20.jpg" alt="" style="width: 100%; height:455px; object-fit: cover;">
                            <div class="post-content">
                                <a href="#" class="post-cata">Nov 08, 2019 08:00 PM</a>
                                <a href="video-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/22.jpg" alt="" style="width: 100%; height:120px; object-fit: cover;">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">American Standards And European Culture How To Avoid</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nov 08, 2019 08:00 PM</a>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn mag-btn w-100" style="height:50px; background-color: #005086;">Selengkapnya</button>
                        
                    </div>

                </div>
                
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <?php include 'components/sidebar-right.php' ?>
        
    </section>

<?php include 'components/footer.php' ?>