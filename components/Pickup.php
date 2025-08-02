<!-- UNDERLAY -->
<div class="underlay d-none position-fixed  start-0 z-3 bg-dark bg-opacity-50"
    style="height: 100vh; width: 100vw; top: 108px;">

    <!-- PICK-UP OVERLAY -->
    <div id="pick-up" class="position-absolute p-3 rounded-2 z-4"
        style="background-color: #0053E2; width: 350px; top: -20px; left: 15%; transform: translateX(-50%);">

        <!-- Your pickup content -->
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column align-items-center">
                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-486e/k2-_4be6f532-b0b2-4480-bb65-d53586e87193.v1.png"
                    alt="" width="50%" class="rounded-5">
                <small class="mt-2 fw-bold">Shipping</small>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-944a/k2-_333618e2-7327-4081-990e-7870dd062248.v1.png"
                    alt="" width="50%" class="rounded-5">
                <small class="mt-2 fw-bold">Pickup</small>
            </div>
            <div class="d-flex flex-column align-items-center">
                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-4637/k2-_c8d39665-dac4-474a-9fb7-ab5feeb647b5.v1.png"
                    alt="" width="50%" class="rounded-5">
                <small class="mt-2 fw-bold">Delivery</small>
            </div>
        </div>

        <div class="bg-white p-3 rounded-2 w-100 mt-2 text-dark">
            <div class="d-flex align-items-start gap-1">
                <i class="bi bi-geo-alt" style="font-size: smaller;"></i>
                <div style="font-size: smaller;">
                    <small class="fw-semibold">Add an address for shipping and delivery</small><br>
                    <small>Sacramento, CA 95829</small>
                </div>
            </div>
            <button id="add-address" class="btn btn-primary rounded-5 w-100 p-1 mt-2 fw-semibold">Add address</button>
        </div>

        <div id="store-btn" class="bg-white d-flex justify-content-between p-3 rounded-2 w-100 mt-2 text-dark">
            <div class="d-flex align-items-start gap-1">
                <i class="bi bi-house" style="font-size: smaller;"></i>
                <div style="font-size: smaller;">
                    <small class="fw-semibold">Sacramento Supercenter</small><br>
                    <small>8915 GERBER ROAD, Sacramento, CA 95829</small>
                </div>
            </div>
            <i class="bi bi-chevron-right align-self-end"></i>
        </div>

    </div>


    <div class="underlay-2 d-none position-fixed  start-0 z-3 bg-dark bg-opacity-50"
        style="height: 100vh; width: 100vw; top: 0px;">
        <div id="address" class="position-absolute h-100 d-none z-4  bg-white" style="top: 0px; right:0;width:30%;">
            <div class="d-flex justify-content-center">
                <div class=" p-3 w-100 d-flex justify-content-between align-items-center"
                    style="background-color:#0053E2">
                    <p class="fs-4 fw-bold">Add Address</p>
                    <i class="bi bi-x-lg address-x"></i>
                </div>
            </div>
            <div class="form  text-dark">

                <form action="" method="POST">
                    <div class="overflow-y-auto p-4" style="max-height: 570px;">
                        <small class="text-sm">* Required Fiels</small>
                        <div class="form-control border-0 w-100 mb-2">
                            <label class="fw-semibold text-sm-start">First name*</label>
                            <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                        </div>
                        <div class="form-control border-0 w-100 mb-2">
                            <label class="fw-semibold text-sm-start">Last name*</label>
                            <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                        </div>
                        <div class="form-control border-0 w-100 mb-2">
                            <label class="fw-semibold text-sm-start">Street Address*</label>
                            <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                        </div>
                        <div class="form-control border-0 w-100 mb-2">
                            <label class="fw-semibold text-sm-start">City*</label>
                            <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                        </div>
                        <div class="d-flex">
                            <div class="form-control  border-0 w-100 mb-2">
                                <label for="" class="d-block fw-semibold">State*</label>
                                <select name="state" id=""
                                    style="height: 60px;width: 170px;border:2px solid black;border-radius: 4px;">

                                    <option value="">Punjab</option>
                                    <option value="">Sindh</option>
                                    <option value="">KPK</option>
                                    <option value="">Blochistan</option>
                                    <option value="">Kashmir</option>
                                </select>
                            </div>
                            <div class="form-control border-0 w-100 mb-2">
                                <label class="fw-semibold text-sm-start">Zip Code*</label>
                                <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                            </div>
                        </div>
                        <div class="form-control border-0 w-100 mb-2">
                            <label class="fw-semibold text-sm-start">Phone Number</label>
                            <input type="text" class="w-100 p-3 rounded-1 border-opacity-100">
                        </div>
                        <small class="text-sm">We'll contact you in case anything comes up with your order.</small>
                    </div>

                    <hr class="p-0 m-0">
                    <div class="w-100 bg-white text-center border p-4 border-top-1">
                        <button class="btn btn-primary fw-semibold w-75 rounded-5">Save</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- here we start underlay-3 and its form -->
<div class="underlay-3 d-none  position-fixed start-0 z-3 bg-dark bg-opacity-50"
    style="height: 100vh; width: 100vw; top: 0px;">
    <div id="underlay-3-foam" class="position-absolute h-100  z-4  bg-white" style="top: 0px; right:0;width:30%;">
        <div class="d-flex justify-content-center">
            <div class=" p-3 w-100 d-flex justify-content-between align-items-center" style="background-color:#0053E2">
                <p class="fs-4 fw-bold">Add Address</p>
                <i class="bi bi-x-lg address-x-2"></i>
            </div>
        </div>
        <div class="form  text-dark" style="height: 570px;">
            <div class="d-flex flex-column gap-2 p-4">
                <small class="fw-bold">Enter zip code or city, state</small>
                <div class="d-flex justify-content-between align-items-center w-100 ">
                    <div class="d-flex   w-75">
                        <input type="text" class="p-2 w-100 rounded-5 custom-placeholder"
                            placeholder="Enter Zip Code or City State">
                        <i class="bi bi-search position-absolute fs-5" style="top: 20%;left: 8%;"></i>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-1 pe-3 align-self-end">
                        <i class="bi bi-stack "></i>
                        <small class="m-0 p-0">Map View</small>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2"><i class="bi bi-geo-alt"></i><a href="#"
                        class="text-sm text-dark">Use my
                        current location</a> </div>
            </div>

            <div class="h-75 gap-3 w-100  d-flex flex-column justify-content-center align-items-center">
                <img src="https://i5.walmartimages.com/dfw/63fd9f59-da17/f5fbb0f4-dab3-4fee-b441-26c9ae7aefd0/v1/error-select-store.svg"
                    alt="">
                <p class="fw-bold">What store are you shopping at?</p>
            </div>
        </div>
        <hr class="p-0 m-0">
        <div class="w-100 bg-white text-center border p-2 border-top-1">
            <small class="text-dark text-sm">We’d love to hear what you think! Give feedback</small>
            <button class="btn btn-secondary fw-semibold w-75 rounded-5">Save</button>
        </div>

    </div>
</div>