<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpg" />
    <link rel="stylesheet" href="Admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric Car Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">Electric Car</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
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
                <a href="#" id="logout">
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
                <span class="admin_name" id="adminName"></span>
                <span class="admin_time" id="adminTime"></span>
            </div>
        </nav>
        <div class="home-content">
            <h1>Selamat Datang <span id="dynamicName"></span></h1>
            <p id="greeting"></p>
        </div>
    </section>

    <script>
        var username = sessionStorage.getItem("username");

        
        document.getElementById("adminName").innerText = username;
        document.getElementById("dynamicName").innerText = username;

        
        var today = new Date();
        var day = today.toLocaleDateString('id-ID', { weekday: 'long' });
        var time = today.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
        document.getElementById("greeting").innerText = "Hari ini adalah " + day + ", jam " + time;

        let logoutLink = document.getElementById("logout");

        logoutLink.addEventListener("click", function(event) {
            event.preventDefault();

            let confirmation = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmation) {
                sessionStorage.removeItem("username");
                window.location.href = "Login.php";
            } else {
                alert("Anda membatalkan logout.");
            }
        });
    </script>
</body>

</html>
