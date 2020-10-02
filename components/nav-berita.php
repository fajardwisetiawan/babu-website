  <header class="header-area">

<script>
$(document).ready(function () {
    $("#form_search").on('submit',(function(e) {
        e.preventDefault();

        var search = $('#topsearch').val();

        function slugify(text)
        {
            return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Replace spaces with -
                    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                    .replace(/^-+/, '')             // Trim - from start of text
                    .replace(/-+$/, '');            // Trim - from end of text
        }
        window.location.href = '<?= $link_api_local ?>babu/search?key='+slugify(search);

    
    }))
});
</script>

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="./" class="nav-brand">
                    SISFORBERITA AND MEDSOS
                    <!-- <img src="img/core-img/logo.png" alt=""> -->
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="./">Media Monitoring</a></li>
                                <li><a href="media-analysis">Media Analysis</a></li>
                                <li><a href="#">Entities</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="archive.html">Archive</a></li>
                                        <li><a href="video-post.html">Single Video Post</a></li>
                                        <li><a href="detail-news.php">Single Post</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="submit-video.html">Submit Video</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Administrator</a>
                                    <!-- <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </div> -->
                                </li>
                                <li><a href="#">Administration</a>
                                    <!-- <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </div> -->
                                </li>
                                <li><a href="#">Language</a>
                                    <!-- <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="video-post.html">Single Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </div> -->
                                </li>
                            </ul>
                            <div class="top-meta-data d-flex align-items-center">
                                <!-- Top Search Area -->
                                <div class="top-search-area">
                                    <form id="form_search" method="post">
                                        <input type="search" name="topsearch" id="topsearch" placeholder="Search and hit enter...">
                                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>