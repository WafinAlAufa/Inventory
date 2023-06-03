<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <h2 class="name-user-1">Hana</h2>
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
                        <h1 class="text-side-bar-4"><a href="Setting.php" class="s_4_t"> Settings </a></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="main-content-top">
                <div class="box-priceses">
                    <div class="filter-earning">
                        <div class="earn-report">
                            <h1 class="earn-text">Earnings Report</h1>
                        </div>
                        <div class="filter-earn">
                            <select class="filter" name="filter" id="filter">
                                <option value="filter">Filter</option>
                                <option value="filter">Weekly</option>
                                <option value="filter">Monthly</option>
                                <option value="filter">Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-graph-all">
                        <div class="earning-total">
                            <h1 class="text-earning">
                                Rp.1.000.000
                            </h1>
                            <div class="garp-money">
                                <img src="img/garp-money.png" alt="img-graph" class="img-graph">
                                <div class="text-total-graph">
                                    <h1 class="text-1-total-graph">Your total</h1>
                                    <h1 class="text-2-total-graph">Earnings</h1>
                                </div>
                            </div>
                            <div class="graph-bagan-1">
                                <img src="img/line-chart-zero-axis.png" alt="" class="img-graph">
                            </div>
                            <div class="text-update-graph">
                                <h1 class="update-text-1">
                                    Update your payout
                                </h1>
                                <h1 class="update-text-2">
                                    method in Settings
                                </h1>
                            </div>
                        </div>
                        <div class="graph-2-earn-money">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="earing-by-items">
                    <div class="garp-circle-1">
                        <canvas id="myCircle"></canvas>
                    </div>
                    <div class="text-circle-inside">
                        <h1 class="text-1-circle-inside">
                            Earnings By Items
                        </h1>
                        <h1 class="text-2-circle-inside">
                            479.4
                        </h1>
                        <h1 class="text-3-circle-inside">
                            Update your payout
                        </h1>
                        <h1 class="text-4-circle-inside">
                            method in Settings
                        </h1>
                    </div>
                    <div class="circle-color-picker">
                        <div class="color-1-circle">
                            <div class="img-1-circle"></div>
                            <h1 class="text-circle-1">Templates</h1>
                        </div>
                        <div class="color-2-circle">
                            <div class="img-2-circle"></div>
                            <h1 class="text-circle-2">Themes</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-buttom">
                <div class="box-left-buttom">
                    <div class="box-inside-cash">
                        <div class="users-boxs">
                            <div class="img-user-box">
                                <span class="material-symbols-outlined">
                                    group
                                </span>
                                <h1 class="users-groups">Users</h1>
                            </div>
                            <div class="numbers-of-players">
                                <h1 class="player-numbers">
                                    36K
                                </h1>
                            </div>
                            <div class="vector-users">
                                <div class="progress " style="height: 2px;">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="click-boxs">
                            <div class="img-click-box">
                                <span class="material-symbols-outlined">
                                    left_click
                                </span>
                                <h1 class="click-groups">Clicks</h1>
                            </div>
                            <div class="click-of-players">
                                <h1 class="player-click">
                                    1m
                                </h1>
                            </div>
                            <div class="vector-click">
                                <div class="progress " style="height: 2px;">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-boxs">
                            <div class="img-sales-box">
                                <span class="material-symbols-outlined">
                                    sell
                                </span>
                                <h1 class="sales-groups">Sales</h1>
                            </div>
                            <div class="sales-of-players">
                                <h1 class="player-sales">
                                    327$
                                </h1>
                            </div>
                            <div class="vector-sales">
                                <div class="progress " style="height: 2px;">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="items-boxs">
                            <div class="img-items-box">
                                <span class="material-symbols-outlined">
                                    inventory_2
                                </span>
                                <h1 class="items-groups">items</h1>
                            </div>
                            <div class="items-of-players">
                                <h1 class="player-items">
                                    68
                                </h1>
                            </div>
                            <div class="vector-items">
                                <div class="progress " style="height: 2px;">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-input-cash-box">
                        <div class="select-days-box">
                            <select name="days" id="days" class="days">
                                <option value="" disabled selected>Last 30 days</option>
                                <option value="days"></option>
                            </select>
                        </div>
                        <div class="select-month-box">
                            <select name="month" id="month" class="month">
                                <option value="" disabled selected>Last month in year</option>
                                <option value="month"> January</option>
                                <option value="month"> February</option>
                                <option value="month"> March</option>
                                <option value="month"> April</option>
                                <option value="month"> May </option>
                                <option value="month"> June</option>
                                <option value="month"> July</option>
                                <option value="month"> August</option>
                                <option value="month"> September</option>
                                <option value="month"> October</option>
                                <option value="month"> November</option>
                                <option value="month"> December</option>
                            </select>
                        </div>
                        <div class="input-button-cash">
                            <input type="text" placeholder="Input here" class="input-have-button">
                            <div class="button-in-input-1"><button class="button-cash">Search</button></div>
                        </div>
                    </div>
                    <div class="cash-display-1">
                        <div class="check"> <input type="checkbox" name="" id="">
                        </div>
                        <div class="cash-transaction-1">
                            <h1 class="price-x-1">
                                $2,932.9
                            </h1>
                            <p class="price-y-1">
                                $25.00 transaction fee
                            </p>
                        </div>
                        <div class="paypal-1-x">
                            <h1 class="paypal-p-1">
                                Paypal
                            </h1>
                        </div>
                        <div class="paid-or-not-1">
                            <h1 class="t-paid-1">
                                Paid
                            </h1>
                        </div>
                        <div class="date-x-1">
                            <h1 class="date-y-1">
                                17 Aug 2020
                            </h1>
                        </div>
                    </div>
                    <div class="cash-display-2">
                        <div class="check-x"> <input type="checkbox" name="" id="">
                        </div>
                        <div class="cash-transaction-2">
                            <h1 class="price-x-2">
                                $2,932.9
                            </h1>
                            <p class="price-y-2">
                                $25.00 transaction fee
                            </p>
                        </div>
                        <div class="paypal-2-x">
                            <h1 class="paypal-p-2">
                                Paypal
                            </h1>
                        </div>
                        <div class="paid-or-not-2">
                            <h1 class="t-paid-2">
                                Paid
                            </h1>
                        </div>
                        <div class="date-x-2">
                            <h1 class="date-y-2">
                                17 Aug 2020
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="box-right-button">
                    <div class="box-income-r">
                        <div class="b-come-box">
                            <div class="h-t-income">
                                <h1 class="t-i-income">Income</h1>
                            </div>
                        </div>
                        <div class="garp-i-x">
                            <canvas id="myThree"></canvas>
                        </div>
                        <div class="withdraw-button">
                            <button class="w-b-1">
                                Withdraw Earning
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="chart.umd.min.js"></script>
    <script src="jquery-3.7.0.min.js"></script>
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

        //Catatan Pak Diar dukumen ready Wajib untuk eksekusi 

        $(document).ready(function() {
            console.log('Ready');
            // get_quran();
            chart_satu();
            chart_dua();
            chart_tiga();

        });

        // contoh pemanggilan API dan di looping

        function get_quran() {
            $.get("http://api.alquran.cloud/v1/quran/en.asad",
                function(data, status) {
                    var surat = data.data.surahs;
                    console.log('disini');
                    // looping jika i kurang dari panjang variable surat lakukan looping dan i ditambah 1
                    // maka dari itu jika i hasil penambahan tersebut sudah sama dengan variabel surat looping akan berhenti
                    for (let i = 0; i < surat.length; i++) {
                        const e = surat[i];
                        console.log('Surat :', e.name);
                        console.log('Ayat :', e.ayahs);
                        console.log('-----------------------');
                    }
                }
            );
        }

        //    chart bagus nya dimasukan kedalam function agar variable nya tidak mengalami bentrok jika ada variabel yang sama

        function chart_satu() {
            console.log('Satu');
            const ctx = document.getElementById("myChart");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Red", "Blue", "Yellow"],
                    datasets: [{
                            label: "Sub-1",
                            data: [0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-2",
                            data: [100, 100, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-3",
                            data: [100, 0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-4",
                            data: [0, 0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                            labels: {
                                color: "#fff",
                                font: {
                                    size: 16,
                                },
                            },
                        },
                    },
                    scales: {
                        y: {
                            grid: {
                                display: false
                            },
                            beginAtZero: true,
                            ticks: {
                                color: "white",
                                font: 15,
                            },
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                display: false,
                                color: "white",
                                font: {
                                    size: 10,
                                },
                                stepSize: 1,
                                beginAtZero: true,
                            },
                        },
                    },
                },
            });
        }

        function chart_dua() {
            console.log('Dua');
            const data = {
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                }, ],
                options: {
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
                            },
                        },
                    },
                },
            };

            const config = {
                type: "doughnut",
                data,
            };
            const myCircle = new Chart(document.getElementById("myCircle"), config);
        }

        function chart_tiga() {
            console.log('Tiga');
            const ctx = document.getElementById("myThree");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Oct", "Mar", "Aug"],
                    datasets: [{
                            label: "Sub-1",
                            data: [600, 490, 90],
                            borderWidth: 1,
                            backgroundColor: "#0052cc",
                        },
                        {
                            label: "Sub-2",
                            data: [600, 490, 90],
                            borderWidth: 1,
                            backgroundColor: "#def0ff",
                        }
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        y: {
                            grid: {
                                display: false
                            },
                            beginAtZero: true,
                            ticks: {
                                color: "grey",
                                font: 15,
                            },
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: "grey",
                                font: {
                                    size: 10,
                                },
                                stepSize: 1,
                                beginAtZero: true,
                            },
                        },
                    },
                },
            });
        }
    </script>
</body>

</html>