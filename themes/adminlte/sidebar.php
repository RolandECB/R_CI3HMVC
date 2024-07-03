<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Toggle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional CSS for sidebar toggle */
        .main-sidebar {
            transition: margin-left 0.3s;
        }
        .main-sidebar.closed {
            margin-left: -250px;
        }
        .main-content {
            transition: margin-left 0.3s;
        }
        .main-content.expanded {
            margin-left: 250px;
        }
        .toggle-button {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }
    </style>
</head>
<body>
  
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
        <a href="" class="brand-link ">
        <img src="assets/dist/img/kentang.png" alt="Kentang" class="brand-image img-circle " style="opacity: .8">
            <span class="brand-text font-weight-light">Roland</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
                    <!-- Widgets -->
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Customer</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>Kategori Produk</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>Produk</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Orders</p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="main-content">
        <!-- Your main content here -->
    </div>

    <script>
        document.querySelector('.toggle-button').addEventListener('click', function() {
            document.querySelector('.main-sidebar').classList.toggle('closed');
            document.querySelector('.main-content').classList.toggle('expanded');
        });
    </script>
</body>
</html>
