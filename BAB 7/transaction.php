<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="asset/logo.jpg" />
   <link rel="stylesheet" href="style/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Electric Car Admin | Transaction</title>
</head>

<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bx-category"></i>
         <span class="logo_name">Electric Car</span>
      </div>
      <ul class="nav-links">
         <li>
            <a href="admin.php" class="active">
               <i class="bx bx-grid-alt"></i>
               <span class="links_name">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="categories.php">
               <i class="bx bx-box"></i>
               <span class="links_name">Categories</span>
            </a>
         </li>
         <li>
            <a href="transaction.php">
               <i class="bx bx-list-ul"></i>
               <span class="links_name">Transaction</span>
            </a>
         </li>
         <li>
            <a href="#">
               <i class="bx bx-log-out"></i>
               <span class="links_name">Log out</span>
            </a>
         </li>
      </ul>
   </div>
   <section class="home-section">
      <nav>
         <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
         </div>
         <div class="profile-details">
            <span class="admin_name">Electric Car Admin</span>
         </div>
      </nav>
      <div class="home-content">
         <h3>Transaction</h3>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>06-05-2024</td>
                  <td>Darmawansyah</td>
                  <td>BMW i3</td>
                  <td>1.200.000.000,-</td>
                  <td>
                     <p class="success">Success</p>
                  </td>
                  <td>
                     <button class="btn_detail"
                        onclick="showDetails('06-05-2024', 'Darmawansyah', 'BMW i3', '1.200.000.000,-', 'Success')">Detail</button>
                  </td>
               </tr>
               <!-- Add more rows as needed -->
            </tbody>
         </table>
      </div>
   </section>
   <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
         sidebar.classList.toggle("active");
         if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
         } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
      function showDetails(tanggal, nama, kategori, harga, status) {
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nStatus: ${status}`);
      }
   </script>
</body>

</html>
