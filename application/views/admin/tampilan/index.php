<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
    <link id="pagestyle" href="<?= base_url('assets') ?>../admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li  class="active">
                <a <?php if ($title == 'Home') {
                              echo 'active';
                            } ?>" href="<?= base_url('admin/admin') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a <?php if ($title == 'iklan') {
                              echo 'active';
                            } ?>" href="<?= base_url('admin/iklan') ?>">
                    <i class="fas fa-user"></i>
                    <span>Iklan</span>
                </a>
            </li>

            <li>
                <a <?php if ($title == 'kategori') {
                              echo 'active';
                            } ?>" href="<?= base_url('admin/iklan/kategori') ?>">
                    <i class="fas fa-stream"></i>
                    <span>kategori</span>
                </a>
            </li>

            <li>
                <a <?php if ($title == 'pelamar') {
                              echo 'active';
                            } ?>" href="<?= base_url('admin/iklan/pelamar') ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span>Pelamar</span>
                </a>
            </li>

            <li class="logout">
                <a href="<?= base_url('admin/login_admin/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- konten dashboard -->
    <!-- <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span><img src="#" alt="Apeloka"></span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search" />
                </div>
               <span style="margin-left: 20px;"><i class="fas fa-user"></i></span>
            </div>
        </div>
        <h1 class="main--title" style="font-size: 40px;">Selamat Datang di Dashboard Admin</h1>
        <div class="card--container">
            <span><h2>Aplikasi Penyedia Lowongan Kerja</h2></span><br>
            <p>Karier yang cemerlang, dimulai dari apeloka</p>
        </div> -->

        <!-- <div class="tabular--wrapper">
        <h3 class="main--title">Finance data</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Transaction Type</th>
                        <th>Desription</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>
                                2023-05-01
                            </td>
                            <td>Expenses</td>
                            <td>Office Supplies</td>
                            <td>$250</td>
                            <td>Office Expenses</td>
                            <td>Pending</td>
                            <td><button>Edit</button></td>
                        </tr>
                        <tr>
                            <td>
                                2023-05-01
                            </td>
                            <td>Expenses</td>
                            <td>Office Supplies</td>
                            <td>$250</td>
                            <td>Office Expenses</td>
                            <td>Pending</td>
                            <td><button>Edit</button></td>
                        </tr>
                        <tr>
                            <td>
                                2023-05-01
                            </td>
                            <td>Expenses</td>
                            <td>Office Supplies</td>
                            <td>$250</td>
                            <td>Office Expenses</td>
                            <td>Pending</td>
                            <td><button>Edit</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total: $1,000</td>
                        </tr>
                    </tfoot>
            </table>
        </div>
    </div> -->
    </div>
</body>
</html>