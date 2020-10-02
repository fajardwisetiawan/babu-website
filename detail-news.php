<?php include 'components/header.php' ?>


<script>
    function defaultImage(img)
    {
        img.onerror = "";
        img.src = 'img/notfound.png';
    }
    $(document).ready(function () {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id')

        $.ajax({
            url: "<?= $link_api3000 ?>berita/"+id,
            // url: "http://103.112.162.79:3000/berita/"+id,            
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#detail').html('')
                console.log(data[0].chanel);

                if (data[0].img != '') {
                    gambar = data[0].img
                } else {
                    gambar = 'img/notfound.png'
                }

                if (data[0].chanel == 'republika') {
                    gc = 'img/logo-chanel/republika.png'
                }else if (data[0].chanel == 'kompas') {
                    gc = 'img/logo-chanel/kompas.jpg'
                }else if (data[0].chanel == 'inilah') {
                    gc = 'img/logo-chanel/inilah.png'
                } else {
                    gc = 'img/notfound.png'
                }
                $('#detail').append(' <div class="blog-thumb mb-30"> <img src="'+gambar+'" style="width:100%; height:500px; object-fit: cover;" alt="" onerror="defaultImage(this);"> </div> <div class="blog-content"> <div class="post-meta"> <div class="row"> <div class="col-lg-12"> <div class=" d-flex align-items-center"> <div class="post-author-thumb"> <img src="'+gc+'" style="border-radius: 50%;height: 40px;width: 40px;" alt=""> </div> <div class="post-author-desc pl-4"> <p style="margin-bottom: -5px; color: black;">'+data[0].chanel+'</p> <small>'+data[0].tgl_post+'</small> </div> </div> </div> </div> </div> <h4 class="post-title">'+data[0].judul+'</h4> <p style="text-align: justify;">'+data[0].readmore+'</p> <br><br> <a href="'+data[0].url+'" target="_blank" style="color:blue; font-style: italic; text-decoration: underline;">Klik di sini untuk mengunjungi halaman asli</a> </div>')
            },
            error: function(e) {
                console.log(e);
                
                alert('gagal4');
            }
        });
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
                            <h5>Detail News</h5>
                        </div>
                    <!-- </div> -->
                </div>

                <div id="detail">
                    <img src="img/loading.gif" alt="" style="width:100%;">
                </div>
                
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <?php include 'components/sidebar-right.php' ?>
        
    </section>

<?php include 'components/footer.php' ?>