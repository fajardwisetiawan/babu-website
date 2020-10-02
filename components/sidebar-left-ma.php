<style>
    /* define a fixed width for the entire menu */

    .navigation {
    width: 100%;
    }


    /* reset our lists to remove bullet points and padding */

    .mainmenu,
    .submenu {
    list-style: none;
    padding: 0;
    margin: 0;
    }


    /* make ALL links (main and submenu) have padding and background color */

    .mainmenu a,
    .mainmenu label {
    display: block;
    /* background-color: #CCC; */
    text-decoration: none;
    padding: 10px;
    color: #000;
    }

    .mainmenu input {
    display: none;
    }


    /* add hover behaviour */

    .mainmenu a:hover {
    background-color: #C5C5C5;
    }


    /* when hovering over a .mainmenu item,
    display the submenu inside it.
    we're changing the submenu's max-height from 0 to 200px;
    */

    .mainmenu :checked+.submenu {
    display: block;
    max-height: 200px;
    }


    /*
    we now overwrite the background-color for .submenu links only.
    CSS reads down the page, so code at the bottom will overwrite the code at the top.
    */

    .submenu a {
    /* background-color: #ddd; */
    }


    /* hover behaviour for links inside .submenu */

    .submenu a:hover {
    /* background-color: #993; */
    }


    /* this is the initial state of all submenus.
    we set it to max-height: 0, and hide the overflowed content.
    */

    .submenu {
    overflow: hidden;
    max-height: 0;
    -webkit-transition: all 0.5s ease-out;
    }
</style>
<div class="mt-30 mb-30 bg-white box-shadow">

    <!-- <div class="section-heading2" style="background-color: #005086;">
        <div class="d-flex align-items-center">
            <h5>Other</h5>
        </div>
    </div> -->
    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30" style="flex-grow: 1;">

        <div class="section-heading2" style="background-color: #005086; margin-bottom:3px;">
            <div class="d-flex align-items-center">
                <h5>Media Analysis</h5>
            </div>
        </div>

        <!-- <div class="input-group">
            <label for="">afa</label>
            <select class="custom-select" id="inputGroupSelect04">
                <option selected="">Pilih</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" style="background-color: #005086;" type="button"><span><i class="fa fa-edit" aria-hidden="true" style="color: white;"></i></span></button>
            </div>
        </div> -->

        <!-- Catagory Widget -->
        <ul class="catagory-widgets">
            <div class="section-heading2" style="background-color: #e4e3e3; margin-bottom:3px; padding-left:5px;">
                <div class="d-flex align-items-center">
                    <h5 style="color: grey; font-size:15px;">Project</h5>
                </div>
            </div>
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04">
                    <option selected="">Pilih</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" style="background-color: #005086;" type="button"><span><i class="fa fa-edit" aria-hidden="true" style="color: white;"></i></span></button>
                </div>
            </div>
            <br>
            <label><strong>Project Name</strong></label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Project Name">
            </div>
            <label><strong>Keywoard</strong></label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Keywoard">
            </div>
            <label><strong>Filter Keywoard</strong></label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Filter Keywoard">
            </div>
            <label><strong>Exclude Keywoard</strong></label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Exclude Keywoard">
            </div>
            <div class="form-check form-check-inline">
                <div class="checkbox">
                    <label for="checkbox1">
                        <span style="margin-right: 8px;"><strong>Private:</strong></span>
                    </label>
                    <input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save Project <i class="fa fa-save" aria-hidden="true"></i></button>
            </div>

            <div class="section-heading2" style="background-color: #e4e3e3; margin-bottom:3px; padding-left:5px;">
                <div class="d-flex align-items-center">
                    <h5 style="color: grey; font-size:15px;">Period</h5>
                </div>
            </div>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected="">Pilih</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <br>
            <br>
            <input type="date" class="form-control" value="2018-05-13">
            <input type="date" class="form-control" value="2018-05-13">

            <div class="section-heading2" style="background-color: #e4e3e3; margin-bottom:3px; padding-left:5px;">
                <div class="d-flex align-items-center">
                    <h5 style="color: grey; font-size:15px;">Media</h5>
                </div>
            </div>
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <li>
                            <label for="products">News <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                            <ul class="submenu">
                                <li><a href="" style="font-size:13px;">Kompas</a></li>
                                <li><a href="" style="font-size:13px;">Detik</a></li>
                                <li><a href="" style="font-size:13px;">Okezone</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <li>
                            <label for="products">Sosial Media <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                            <ul class="submenu">
                                <li><a href="" style="font-size:13px;">Kompas</a></li>
                                <li><a href="" style="font-size:13px;">Detik</a></li>
                                <li><a href="" style="font-size:13px;">Okezone</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">

            <div class="section-heading2" style="background-color: #e4e3e3; margin-bottom:3px; padding-left:5px;">
                <div class="d-flex align-items-center">
                    <h5 style="color: grey; font-size:15px;">Sentiment</h5>
                </div>
            </div>
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <label for="products">All <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <label for="products">Positive <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <label for="products">Negative <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">
            <form class="form-inline">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                    </label>
                </div>
                <div class="form-group">
                    <ul class="mainmenu">
                        <label for="products">Neutral <span><i class="fa fa-unsorted" aria-hidden="true"></i></span></label><input type="checkbox" id="products">
                    </ul>
                </div>
            </form>
            <hr style="margin-top:-3px;">
            
        </ul>
        
    </div>
    
</div>