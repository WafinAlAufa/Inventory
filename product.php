<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- my css -->
    <link rel="stylesheet" href="product.css">
    <!-- font and icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <header class="navbar">
        <div class="logo">
            <div class="logo-img">
                <img src="img/logo (1).png" alt="" class="img-logo-top">
            </div>
            <div class="logo text">
                <h1 class="text-logo-h1">Inventory</h1>
            </div>
        </div>
        <div class="search-engine-top-bar">
            <input type="text" placeholder="Search... " class="input-img-egine-1" maxlength="40">
        </div>
        <div class="user-and-profile">
            <div class="name-username">
                <h2 class="welcome-home">
                    Welcome
                </h2>
                <div class="name-user-box">
                    <h2 class="name-user-1">Joko Anwar</h2>
                    <div class="toggle-btn">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="prifile-human">
                <img src="img/person.png" alt="person" class="img-profile-human">
            </div>
        </div>
        <div class="user-dropdown " id="user-dropdown">
            <li><a href=""></a>Profile</li>
            <li><a href=""></a>Help & Support</li>
            <li><a href=""></a>Display & accessibility</li>
            <li><a href=""></a>Log Out</li>
        </div>
    </header>
    <div class="container-main">
        <div class="side-bar">
            <div class="admin_menu_or_user">
                <h1 class="admin-or-user-inside">Admin tools</h1>
            </div>
            <div class="box-side-bar-1">
                <div class="logo-side-bar-1" id="logo-side-bar-1">
                    <div class="img-s-1">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="text-s-1">
                        <h1 class="text-side-bar-1"><a href="main.php" class="s_1_t">Overview</a></h1>
                    </div>
                </div>
                <div class="logo-side-bar-2" id="logo-side-bar-2">
                    <div class="img-s-2">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="text-s-2">
                        <h1 class="text-side-bar-2"><a href="product.php" class="s_2_t">Products</a></h1>
                    </div>
                </div>
                <div class="logo-side-bar-3" id="logo-side-bar-3">
                    <div class="img-s-3">
                        <i class="fa-solid fa-folder"></i>
                    </div>
                    <div class="text-s-3">
                        <h1 class="text-side-bar-3"><a href="data_master.php" class="s_3_t"> Data Master </a></h1>
                    </div>
                </div>
                <div class="logo-side-bar-4" id="logo-side-bar-4">
                    <div class="img-s-4">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="text-s-4">
                        <h1 class="text-side-bar-4"><a href="setting.php" class="s_4_t"> Settings </a></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content">
            <div class="header_p">
                <div class="product_header_text">
                    <div class="product_text_box">
                        <h1 class="product_header_t">
                            Product List
                        </h1>
                    </div>
                    <div class="product_text_box-2">
                        <h1 class="product_header_t-2">
                            (4)
                        </h1>
                    </div>
                </div>
                <div class="header_fd">
                    <div class="batch_h">
                        <div class="batch_h_b">
                            <select name="batch" id="batch_s" class="batch_s">
                                <option value="batch" disabled selected>Batch</option>
                            </select>
                        </div>
                    </div>
                    <div class="product_h">
                        <div class="product_h_b">
                            <select name="product" id="product_s" class="product_s">
                                <option value="product" disabled selected>All Product</option>
                            </select>
                        </div>
                    </div>
                    <div class="type_h">
                        <div class="type_h_b">
                            <select name="type" id="type_s" class="type_s">
                                <option value="type" disabled selected>All Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="box_export_add-h">
                        <div class="add_menu">
                            <button type="button" class="btn btn-primary"> <i class="fa-regular fa-square-plus"></i> Add</button>
                        </div>
                        <div class="export_menu">
                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-export"></i> Export</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttom_box_content">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" name="check_all" id="check_all" class="check_all"></th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">STOCK</th>
                            <th scope="col">EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><input type="checkbox" name="check_1" id="check_1" class="check_1"></th>
                            <td>
                                <h6>Backpack</h6>
                            </td>
                            <td>
                                <div class="box_img_i">
                                    <img src="img/backpack.png" alt="..." class="img-thumbnail">
                                </div>
                            </td>
                            <td>
                                <h6>Rp.100.000</h6>
                            </td>
                            <td>
                                <h6>100</h6>
                            </td>
                            <td>
                                <div class="box_all_crud">
                                    <div class="edit_menu">
                                        <button type="button" class="btn btn-success">EDIT</button>
                                    </div>
                                    <div class="delete_menu">
                                        <button type="button" class="btn btn-danger">DELETE</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><input type="checkbox" name="check_1" id="check_1" class="check_1"></th>
                            <td>
                                <h6>Backpack</h6>
                            </td>
                            <td>
                                <div class="box_img_i">
                                    <img src="img/backpack.png" alt="..." class="img-thumbnail">
                                </div>
                            </td>
                            <td>
                                <h6>Rp.100.000</h6>
                            </td>
                            <td>
                                <h6>100</h6>
                            </td>
                            <td>
                                <div class="box_all_crud">
                                    <div class="edit_menu">
                                        <button type="button" class="btn btn-success">EDIT</button>
                                    </div>
                                    <div class="delete_menu">
                                        <button type="button" class="btn btn-danger">DELETE</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- add menu pop up -->

    <section class="menu_pop_up_sec">
        <div class="container_pop_up_box">
            <div class="box_popup">
                <div class="add_new_produck">
                    <h1 class="h_t_produck">
                        Add New Data Product
                    </h1>
                </div>
                <div class="below_add_menu">

                </div>
                <div class="below_add_menu">
                    <select name="" id="" class="select_category">
                        <option value="" disabled selected>Select Category</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <script>
        // membuat variabel toggleBtnIcon untuk menangkap tag i yang berada pada user-name > toggle-btn 
        const toggleBtnIcon = document.querySelector(".name-username .toggle-btn i");
        // membuat variabel userDropdown untuk menangkap class user-dropdown 
        const userDropDown = document.querySelector(".user-dropdown");
        // function untuk merubah div yang tadinya opacity 0 menjadi 1 dan menambah class open pada div dropdown 
        function changeDiv() {
            // jika userDropdown di klik tambahkan class open
            userDropDown.classList.toggle("open");
            // membuat variabel isOpen yang mempunyai isi userDropdown yang sudah ditambahkan class open
            const isOpen = userDropDown.classList.contains("open");
            // jika toggleBtn terdapat variabel isOpen maka ubah icon panah menjadi silang
            toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-chevron-down";
            // merubah opacity class user-dropdown yang awal nya 0 menjadi 1( menampilkan gambar )
            document.getElementById("user-dropdown").style.opacity = (isOpen == false) ? 0 : 1;
        };
        //semua halaman web jika di klik maka ditambahkan function e atau event 
        window.addEventListener('click', function(e) {
            // membuat variabel element yang menangkap id dari user-dropdown
            var element = document.getElementById("user-dropdown");
            // membuat kondisi if else pada user and profile
            if (document.querySelector('.user-and-profile').contains(e.target)) {
                changeDiv();
                // jika class user-and-profile menargetkan didalam maka panggil function changeDiv
            } else {
                // jika diluar maka class user-dropdown menghapus class open kemudian merubah tag i menjadi panah kembali
                document.querySelector(".user-dropdown").classList.remove("open");
                toggleBtnIcon.classList = "fa-solid fa-chevron-down";
            }
        });
    </script>
</body>

</html>