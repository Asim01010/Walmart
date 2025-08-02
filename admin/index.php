<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php'?>
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
                <?php include './src/component/header.php'?>

            </div>

            <!-- Main content (Header + Content) -->
            <div class="col-lg-10">
                <!-- Sticky Header/Navbar -->
                <div class="navbar">
                    <?php include './src/component/sidebar.php'?>
                </div>

                <!-- Scrollable content area -->
                <div class="d-flex align-items-center justify-content-center h-75">
                    <h1 class="text-secondary">What you want to do?
                    </h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>