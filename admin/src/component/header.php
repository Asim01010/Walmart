<style>
.each-menu-opt {
    font-size: larger !important;
    color: #7c8089ff !important;
}

.each-menu-opt:hover {
    background: #0053E2 !important;
    cursor: pointer !important;
    transition: all 0.3s;
    color: white !important;
}

.each-menu-opt:active {
    background-color: #2795b0ff !important;
    color: black !important;
}

.sub-menu {
    padding-left: 30px;
    font-size: medium;
}

.sub-menu a {
    color: #6c757d;
    text-decoration: none;
}

.sub-menu a:hover {
    color: #0053E2;
}

.sidebar {
    overflow-y: auto;
    overflow-x: hidden;
    scrollbar-width: none;
    /* Firefox */
    -ms-overflow-style: none;
    /* IE and Edge */
}

.sidebar::-webkit-scrollbar {
    display: inline-block;
    /* Chrome, Safari, Opera */
}
</style>

<div class="sidebar p-2 d-flex flex-column align-items-center shadow-lg min-vh-100" style="z-index: 5;">
    <div class="d-flex p-2 flex-column align-items-center w-100">
        <h2><img src="/public/images/wplus-icon-blue.svg" width="10%" alt="">Walmart+</h2>
        <hr class="w-100">
    </div>

    <div class="d-flex gap-1 flex-column align-items-start w-100 px-4">
        <div class="d-flex align-items-center gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-columns-gap"></i>
            <p class="p-0 m-0">Dashboard</p>
        </div>

        <!-- Users Dropdown -->
        <div class="each-menu-opt p-2 w-100" data-bs-toggle="collapse" data-bs-target="#userMenu" aria-expanded="false">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-fill"></i>
                    <p class="p-0 m-0">Users</p>
                </div>
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <div class="collapse sub-menu w-100" id="userMenu">
            <a href="#" class="d-block py-1">All Users</a>
            <a href="#" class="d-block py-1">Add New</a>
            <a href="#" class="d-block py-1">User Roles</a>
        </div>

        <!-- Categories Dropdown -->
        <div class="each-menu-opt p-2 w-100" data-bs-toggle="collapse" data-bs-target="#catMenu" aria-expanded="false">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-list-columns-reverse"></i>
                    <p class="p-0 m-0">Categories</p>
                </div>
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <div class="collapse sub-menu w-100" id="catMenu">
            <a href="#" class="d-block py-1">All Categories</a>
            <a href="#" class="d-block py-1">Add Category</a>
        </div>

        <!-- Products Dropdown -->
        <div class="each-menu-opt p-2 w-100" data-bs-toggle="collapse" data-bs-target="#prodMenu" aria-expanded="false">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-list-columns"></i>
                    <p class="p-0 m-0">Products</p>
                </div>
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <div class="collapse sub-menu w-100" id="prodMenu">
            <a href="#" class="d-block py-1">All Products</a>
            <a href="#" class="d-block py-1">Add Product</a>
            <a href="#" class="d-block py-1">Product Reviews</a>
        </div>

        <!-- Orders Dropdown -->
        <div class="each-menu-opt p-2 w-100" data-bs-toggle="collapse" data-bs-target="#orderMenu"
            aria-expanded="false">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-bag-fill"></i>
                    <p class="p-0 m-0">Orders</p>
                </div>
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>
        <div class="collapse sub-menu w-100" id="orderMenu">
            <a href="#" class="d-block py-1">All Orders</a>
            <a href="#" class="d-block py-1">Pending Orders</a>
            <a href="#" class="d-block py-1">Shipped Orders</a>
        </div>

        <!-- Other Static Menu Options -->
        <div class="d-flex align-items-center gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-circle-square"></i>
            <p class="p-0 m-0">Icons</p>
        </div>
        <div class="d-flex align-items-center gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-globe-europe-africa"></i>
            <p class="p-0 m-0">Maps</p>
        </div>
        <div class="d-flex align-items-center gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-bell-fill"></i>
            <p class="p-0 m-0">Notification</p>
        </div>
        <div class="d-flex align-items-center gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-globe"></i>
            <p class="p-0 m-0">RTL Support</p>
        </div>

        <div class="d-flex align-items-center mt-5 text-secondary gap-2 each-menu-opt p-2 w-100">
            <i class="bi bi-upload"></i>
            <p class="p-0 m-0 text-nowrap">Return To Website</p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>