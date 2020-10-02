<?php include 'components/header.php' ?>


<script>
    function defaultImage(img)
    {
        img.onerror = "";
        img.src = 'img/notfound.png';
    }

    $(document).ready(function () {

        $('#content').html('<div class="row mb-3"> <div class="col-lg-3 mb-3 mb-lg-3"> <box class="shine"></box> </div> <div class="col-lg-9 mb-9 mb-lg-9"> <lines class="shine"></lines> <lines class="shine"></lines> <lines class="shine"></lines> </div> </div>')

        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);
        const key = urlParams.get('key')
        console.log(key);

        function replaceSpace(text)
        {
            return text.toString().toLowerCase()
                    .replace(/\-/g, ' ')           // Replace spaces with -
        }

        var data = {
        "search":replaceSpace(key)
        }
        $.ajax({
        url: "<?= $link_api3000 ?>search",
        type: "POST",
        data: JSON.stringify(data),
        dataType: "JSON",
        // crossDomain: true,
        contentType: "application/json; charset=utf-8",
        cache: false,
        processData: false,
        success: function(response) {
            $('#content').html('')
            for (let i = 0; i < response.data.length; i++) {
                
                if (response.data[i].img != '') {

                    // $.get(response.data[i].img)
                    // .done(function() { 
                    //     console.log('jadi');
                    //     // Do something now you know the image exists.
                    //     gambar = response.data[i].img

                    // }).fail(function() { 
                    //     console.log('radadi');
                    //     // Image doesn't exist - do something else.
                    //     gambar = 'img/notfound.png'

                    // })

                    gambar = response.data[i].img
                } else {
                    gambar = 'img/notfound.png'
                }

                if (response.data[i].chanel == 'republika') {
                    gc = 'img/logo-chanel/republika.png'
                }else if (response.data[i].chanel == 'kompas') {
                    gc = 'img/logo-chanel/kompas.jpg'
                }else if (response.data[i].chanel == 'inilah') {
                    gc = 'img/logo-chanel/inilah.png'
                } else {
                    gc = 'img/notfound.png'
                }
                
                $('#content').append( '<div class="single-catagory-post d-flex flex-wrap"> <div class="post-thumbnail bg-img"> <img src="'+gambar+'" alt="" style="width: 100%;" onerror="defaultImage(this);"> </div> <div class="post-content"> <div class="post-meta"> <div class="row"> <div class="col-lg-12"> <div class=" d-flex align-items-center"> <div class="post-author-thumb"> <img src="'+gc+'" style="border-radius: 50%;height: 40px;width: 40px;" alt=""> </div> <div class="post-author-desc pl-4"> <p style="margin-bottom: -5px; color: black;">'+response.data[i].chanel+'</p> <small>'+response.data[i].tgl_post+'</small> </div> </div> </div> </div> </div> <a href="detail-news?id='+response.data[i]._id+'" class="post-title" style="font-size: 18px;">'+response.data[i].judul+'</a> <a href="detail-news?id='+response.data[i]._id+'" class="post-title" style="font-size: 15px; color: #005086;">Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> </div> </div> ' )
            }
            console.log(response);




        },
        error: function(e) {
            console.log(e);
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
                <div id="namakategori"></div>

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

                <div id="content">
                    <!-- <img src="img/loading.gif" alt="" style="width:100%;"> -->
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        <?php include 'components/sidebar-right.php' ?>
        
    </section>

<?php include 'components/footer.php' ?>