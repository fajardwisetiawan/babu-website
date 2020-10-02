<?php include 'components/header.php' ?>


<script>
    $(document).ready(function () {

        function getberita() {
            const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            const page = urlParams.get('page')
            const kategori = urlParams.get('kategori')
            console.log(page);
            var pagefix

            if (page == null) {
                pagefix = 1
            } else {
                pagefix = page
            }
            
            $.ajax({
                url: "<?= $link_api3000 ?>app/kategori/"+kategori+"/?page="+pagefix,
                // url: "http://103.112.162.79:3000/app/kategori/"+kategori+"/?page="+pagefix,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    if (pagefix == 1) {
                        $('#pagination1').attr('class','page-item active')
                        $('#pagination_link1').html(pagefix)
                        $('#pagination_link2').html(parseInt(pagefix)+1)
                        $('#pagination_link2').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)+1))
                        $('#pagination_link3').html(parseInt(pagefix)+2)
                        $('#pagination_link3').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)+2))
                        $('#page_next_link').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)+1))
                        $('#page_prev').css('display','none')
                    } else if(pagefix == data.totalPages){
                        $('#pagination3').attr('class','page-item active')
                        $('#pagination_link3').html(pagefix)
                        $('#pagination_link1').html(parseInt(pagefix)-2)
                        $('#pagination_link1').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)-2))
                        $('#pagination_link2').html(parseInt(pagefix)-1)
                        $('#pagination_link2').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)-1))
                        $('#page_next').css('display','none')
                        $('#page_prev_link').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)-1))
                    } else {
                        $('#pagination2').attr('class','page-item active')
                        $('#pagination_link2').html(pagefix)

                        $('#pagination_link1').html(parseInt(pagefix)-1)
                        $('#pagination_link1').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)-1))
                        $('#pagination_link3').html(parseInt(pagefix)+1)
                        $('#pagination_link3').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)+1))
                        $('#page_next_link').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)+1))
                        $('#page_prev_link').attr('href','<?= $link_api_local ?>babu/news-from-category?kategori='+kategori+'&page='+Number(parseInt(pagefix)-1))
                    }
                    // console.log(data.length);
                    $('#namakategori').append( '<div class="section-heading"> <div class="d-flex align-items-center justify-content-between"> <h5>Kategori berita: '+kategori+'</h5> </div> </div>' )
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
                        
                        $('#content').append( '<div class="single-catagory-post d-flex flex-wrap"> <div class="post-thumbnail bg-img"> <img src="'+gambar+'" alt="" style="width: 100%; height:230px; object-fit: cover;"> </div> <div class="post-content"> <div class="post-meta"> <div class="row"> <div class="col-lg-12"> <div class=" d-flex align-items-center"> <div class="post-author-thumb"> <img src="'+gc+'" style="border-radius: 50%;height: 50px;width: 50px;" alt=""> </div> <div class="post-author-desc pl-4"> <p style="margin-bottom: -5px; color: black; font-size: 17px;">'+data.data[i].chanel+'</p> <small>'+data.data[i].tgl_post+'</small> </div> </div> </div> </div> </div> <a href="detail-news?id='+data.data[i]._id+'" class="post-title" style="font-size: 25px;">'+data.data[i].judul+'</a> <a href="detail-news?id='+data.data[i]._id+'" class="post-title" style="font-size: 20px; color: #005086;">Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> </div> </div> ' )
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
                <div id="namakategori"></div>

                <div id="content">
                    <img src="img/loading.gif" alt="" style="width:100%;">
                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination">
                        <li class="page-item" id="page_prev"><a class="page-link" href="" id="page_prev_link"><i class="ti-angle-left"></i></a></li>
                        <li class="page-item" id="pagination1"><a class="page-link" href="" id="pagination_link1">1</a></li>
                        <li class="page-item" id="pagination2"><a class="page-link" href="" id="pagination_link2">2</a></li>
                        <li class="page-item" id="pagination3"><a class="page-link" href="" id="pagination_link3">3</a></li>
                        <li class="page-item" id="page_next"><a class="page-link" href="" id="page_next_link"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </nav>
                
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <?php include 'components/sidebar-right.php' ?>
        
    </section>

<?php include 'components/footer.php' ?>