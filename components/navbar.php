<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.recorder:hover {
    background-color: #001E60;
    cursor: pointer;
}

.department:hover {
    outline: 2px solid #001E60;
}

.services:hover {
    outline: 2px solid #001E60;
}

.more:hover {
    outline: 2px solid #001E60;
}

.navbar {
    flex-wrap: wrap;
}

.department-list {
    display: flex;
    flex-direction: column;

    justify-content: center;
    padding: 0;
}

.department-list ul {
    overflow-x: hidden !important;
    width: 100% !important;
}

.department-list li {
    list-style: none;
    white-space: nowrap;
    padding: 8px;
    display: flex;
    cursor: pointer;
    font-size: small;

}

.department-list li:hover {
    background-color: #E9F1FE;

    border-left: 4px solid #0053E2;
}

.signin-btn button {
    font-size: smaller !important;
    background-color: #0053E2 !important;
    font-weight: 700;
}


@media (max-width:1027px) {
    .search-bar {
        display: none;
    }

    .search-bar-2 {
        display: block !important;
    }
}



@media (max-width: 1340px) {
    .below-bar-1 {
        display: none !important;
    }
}

@media (max-width: 1120px) {
    .below-bar-2 {
        display: none !important;
    }
}

@media (max-width: 1020px) {
    .below-bar-3 {
        display: none !important;
    }
}

@media (max-width: 910px) {
    .below-bar-4 {
        display: none !important;
    }
}

@media (max-width:631px) {
    .pickup {
        display: none !important;
    }
}
</style>

<nav class=" w-100  p-3 " style="background-color: #0053E2;">
    <div class="d-flex flex-nowrap align-items-center navbar justify-content-between">
        <div class="d-flex align-items-center justify-content-center recorder rounded-5 p-1">
            <img src="/public/images/5977595.png" width="40px" alt="">
        </div>
        <div id="showOverlayBtn"
            class="d-flex align-items-center justify-content-center pickup  gap-3 rounded-5 px-2 py-1 text-white"
            style="background-color: #012a81ff; width:300px;cursor: pointer;">
            <img src="/public/images/hand-phone.webp" width="30px" alt="">
            <div class="d-flex flex-column" style="white-space: nowrap;">
                <h6 class="p-0 m-0">Pickup or delivery?</h6>
                <p class="m-0 p-0">Sceme39flutteasasdfsdafr</p>
            </div>
            <div id="toggleIcon"><i class="bi bi-chevron-down"></i></div>
            <!-- here the hidden pickup -->
            <?php include __DIR__ . '/Pickup.php';?>
        </div>
        <div class="search-bar  position-relative" style="width: 800px;">
            <input type="text" class="w-100 p-3   rounded-5 border-0 shadow-sm"
                placeholder="Search everything at Walmart Online and inStore">

            <div class="position-absolute text-white rounded-circle d-flex align-items-center justify-content-center"
                style="top: 50%; right: 10px; transform: translateY(-50%); height: 35px; width: 35px; cursor: pointer;background-color: #001E60;">
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div class="nav-icons d-flex align-items-center justify-content-center">
            <div id="recorder"
                class="d-flex align-items-center justify-content-center gap-2 px-3 py-1 rounded-5 text-white recorder">
                <div>
                    <div class="bi bi-heart "></div>
                </div>
                <div>
                    <p class="m-0 p-0">Record</p>
                    <h6 class="p-0 m-0" style="white-space: nowrap;">My Items</h6>
                </div>
            </div>
            <div class="recorder-lay d-none position-fixed z-3 bg-dark bg-opacity-50 start-0 "
                style="height: 190vh;width: 100vw;top:21%;">

                <div class="position-absolute d-flex align-items-center gap-3 justify-content-center flex-column bg-white p-3 rounded-bottom-2"
                    style="top: -47px;left:80%">
                    <a href="" id=""
                        class="text-decoration-none text-dark d-flex gap-3  justify-content-between align align-items-center"><i
                            class="bi bi-arrow-90deg-down"></i><small>Recorder</small></a>
                    <a href="" id="" class="text-decoration-none text-dark d-flex gap-3 justify-content-between"><i
                            class="bi bi-suit-heart-fill"></i><small>List</small></a>
                    <a href="" id="" class="text-decoration-none text-dark d-flex gap-3 justify-content-between"><i
                            class="bi bi-gift"></i><small>Registries</small></a>
                </div>
            </div>
            <div id="signin"
                class="d-flex align-items-center  justify-content-center gap-2 px-3 py-1 rounded-5 text-white recorder">
                <div>
                    <div class="bi bi-person"></div>
                </div>
                <div>
                    <p class="m-0 p-0">Sign in </p>
                    <h6 class="p-0 m-0">Account</h6>
                </div>
                <div class="signin-lay d-none position-fixed z-3 bg-dark bg-opacity-50 start-0 "
                    style="height: 190vh;width: 100vw;top:21%;">

                    <div class="position-absolute  d-flex align-items-center gap-3 justify-content-center flex-column bg-white p-3 px-4 rounded-bottom-2"
                        style="top: -47px;left:84%; width: 14%;">
                        <div class="signin-btn d-flex flex-column justify-content-center">
                            <button class="text-center btn btn-primary rounded-pill text-nowrap ">Sign in
                                or create
                                account</button>
                            <div class=" w-100 mt-4" style="padding: .5px; background-color: lightgray;"></div>
                            <div class="d-flex align-items-center my-2 gap-2"><i
                                    class="bi bi-box-seam-fill text-secondary"></i>
                                <a href="#" class="m-0 p-0 text-sm text-dark">Purchase History</a>
                            </div>
                            <div class="d-flex align-items-center my-2 gap-2">
                                <img src="/public/images/wplus-icon-blue.svg" width="10%" alt="">
                                <a href="#" class="m-0 p-0 text-sm text-dark">Walmart+</a>
                            </div>
                            <div class=" w-100 mt-4" style="padding: .5px; background-color: lightgray;"></div>
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-globe text-secondary"></i> <a
                                    href="#" class="text-decoration-none text-sm text-dark">Language|English</a></div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="recorder px-2 rounded-5">
                <div class="position-relative">
                    <i class="bi bi-cart fs-3 text-white"></i>
                    <div class="rounded-5 d-flex align-items-center justify-content-center m-0 p-0"
                        style="position: absolute;height:15px;width:15px;background-color:#FFC220;transform: translate(140%,-300%);">
                        <p class="m-0 p-0 fw-semibold" style="color: #001b49ff; font-size: 12px">5</p>
                    </div>
                    <p class="m-0 p-0" style="font-size: 12px; color:white">$122</p>
                </div>
            </div>
        </div>



    </div>

</nav>
<nav class="w-100">
    <div class="search-bar-2 d-none  position-relative" style="width: 100%;">
        <input type="text" class="w-100 p-3   rounded-5 border-0 shadow-sm"
            placeholder="Search everything at Walmart Online and inStore">

        <div class="position-absolute text-white rounded-circle d-flex align-items-center justify-content-center"
            style="top: 50%; right: 10px; transform: translateY(-50%); height: 35px; width: 35px; cursor: pointer;background-color: #001E60;">
            <i class="bi bi-search"></i>
        </div>
    </div>
</nav>
<nav class="subnav w-100 d-flex align-items-center justify-content-between p-2" style="background-color: #C9DCFD;">
    <div class="d-flex align-items-center gap-2">
        <div id="department" class="depart">
            <div class="department d-flex align-items-center p-1 rounded-5 gap-2"
                style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 14px;font-weight: 600;cursor:pointer;">
                    Departments</div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
        <div class="department-lay d-none position-fixed z-3 bg-dark bg-opacity-50 start-0 "
            style="height: 190vh;width: 100vw;top:21%;">
            <div class="d-flex align-items-center flex-column  bg-white ms-3 rounded-bottom-2 overflow-y-scroll"
                style="height:550px;width: 18%;">
                <ul class="department-list w-100 p-0  m-0 ">
                    <h6 class="px-2 py-1 m-0">All Departments</h6>
                    <li>Rollbacks & more</li>
                    <li>Pharmacy health & wellness</li>
                    <li>Clothing Shoes & Accessories</li>
                    <li>Baby & Kids</li>
                    <li>Beauty</li>
                    <li>Home, Garden & Tools</li>
                    <li>Electronics</li>
                    <li>Gaming and Entertainment</li>
                    <li>Toys & Outdoor Play</li>
                    <li>Paper & Cleaning</li>
                    <li>Greocery</li>
                    <li>Pets</li>
                    <li>Personal Care</li>
                    <li>Auto & Tires</li>
                    <li>Party Supplies</li>
                    <li>Sport & Outdoors</li>
                    <li>School, Office & Art Supplies</li>
                </ul>
            </div>
        </div>

        <div id="service" class="service">
            <div class="d-flex align-items-center p-1 rounded-5 gap-2 services"
                style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 14px;font-weight: 600;">Services</div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
        <!-- services lay -->
        <div class="service-lay d-none position-fixed z-3 bg-dark bg-opacity-50 start-0 "
            style="height: 190vh;width: 100vw;top:21%;">
            <div class="d-flex align-items-center flex-column  bg-white  rounded-bottom-2 overflow-y-scroll"
                style="height:550px;width: 18%; margin-left: 130px;">
                <ul class="department-list w-100 p-0  m-0 ">
                    <h6 class="px-2 py-1 m-0">All Services</h6>
                    <li>Rollbacks & more</li>
                    <li>Pharmacy health & wellness</li>
                    <li>Clothing Shoes & Accessories</li>
                    <li>Baby & Kids</li>
                    <li>Beauty</li>
                    <li>Home, Garden & Tools</li>
                    <li>Electronics</li>
                    <li>Gaming and Entertainment</li>
                    <li>Toys & Outdoor Play</li>
                    <li>Paper & Cleaning</li>
                    <li>Greocery</li>
                    <li>Pets</li>
                    <li>Personal Care</li>
                    <li>Auto & Tires</li>
                    <li>Party Supplies</li>
                    <li>Sport & Outdoors</li>
                    <li>School, Office & Art Supplies</li>
                </ul>
            </div>
        </div>




        <div class="below-bar-1 d-flex gap-2">
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Get it Fast</div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">New Arrivals</div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Back to School</div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
        <div class="below-bar-2 d-flex gap-2">
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Rollbacks & More
                </div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Dinner Made Easy
                </div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Pharmacy Delivery
                </div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
        <div class="below-bar-3 d-flex gap-2">
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">Collage Shop</div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400; white-space: nowrap;">My Items</div>
                <div class="bi bi-chevron-down"></div>
            </div>
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400;white-space: nowrap;">Auto Service</div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
        <div class="below-bar-4 d-flex gap-2">
            <div class="d-flex align-items-center p-1 rounded-5 gap-2" style="color: #001E60; background-color: white;">
                <div class="p-0 m-0" style="font-size: 12px;font-weight: 400;white-space: nowrap;">Walmart+</div>
                <div class="bi bi-chevron-down"></div>
            </div>
        </div>
    </div>





    <div id="more" class="More">
        <div class="d-flex align-items-center p-1 rounded-5 gap-2 more"
            style="color: #001E60; background-color: white; cursor: pointer;">
            <div class="p-0 m-0" style="font-size: 14px;font-weight: 600;">More</div>
            <div class="bi bi-chevron-down"></div>
        </div>
    </div>
    <div class="more-lay d-none  position-fixed z-3 bg-dark bg-opacity-50 start-0 "
        style="height: 190vh;width: 100vw;top:21%;">
        <div class="d-flex align-items-center flex-column  bg-white ms-3 rounded-bottom-2 "
            style="height:100px;width: 10%;transform: translate(875%,0%);;">
            <div class="department-list w-100 p-0 text-sm px-4 m-0 ">
                <a class="my-4 text-decoration-none text-dark">Only at Walmart</a>
                <a class=" text-decoration-none text-dark">Registery</a>
            </div>
        </div>
    </div>
</nav>