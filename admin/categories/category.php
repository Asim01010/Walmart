<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . '/../bootstrap.php';?>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>

    <style>
    body {
        margin: 0;
        background-color: #EEEEEE;
    }

    .sidebar {
        position: sticky;
        top: 0;
        height: 100vh;
        background-color: #F2F4F7;
        overflow-y: auto;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 999;
        background-color: #F2F4F7;
        padding: 10px;
    }

    .content-area {
        padding: 20px;
        height: 2000px;
        /* for demo scrolling */
    }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar (Sticky Left) -->
            <div class="col-lg-2 sidebar">
                <?php include __DIR__ . '/../src/component/header.php'?>

            </div>

            <!-- Main content (Header + Content) -->
            <div class="col-lg-10">
                <!-- Sticky Header/Navbar -->
                <div class="navbar">
                    <?php include __DIR__ . '/../src/component/sidebar.php'?>
                </div>

                <!-- Scrollable content area -->
                <div class="d-flex align-items-center justify-content-center h-75">
                    <div class="w-50">
                        <div class="w-100 py-3 rounded-top-2" style="background-color: #0053E2;">
                            <div class="position-relative py-2">
                                <p class="m-0 p-0 text-center text-white fw-bold">Add Categories</p>
                                <i class="bi bi-x position-absolute text-white text-bold fs-4"
                                    style="top:50%;right:0%;transform: translate(-50%,-50%);cursor: pointer;"></i>
                            </div>
                            <div class="bg-white p-2 text-center">
                                <form class="d-flex align-items-center gap-4 flex-column" action="add-category.php"
                                    method="POST" enctype="multipart/form-data">
                                    <div
                                        class="form-control d-flex align-items-center gap-3 justify-content-center w-100">
                                        <label for="">Add Categories</label>
                                        <input type="text" name="name" required class="p-2 w-75 border-0">
                                    </div>
                                    <div class="d-flex align-items-center form-control">
                                        <label for="label-form"></label>
                                        <input type="file" name="image" class="w-100">
                                    </div>
                                    <button class="p-2 rounded-pill btn bg-primary text-white text-center fw-bold">Add
                                        Categories</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>