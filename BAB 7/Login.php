<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="icon" href="asset/logo.jpg" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="Logo">
                    <img src="asset/logo.jpg" alt="" width="150" weight="75" />
                </div>
                <input type="checkbox" id="click" />
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="login.php" class="btn_login">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="center">
                <div class="form-login">
                    <h3>Login</h3>
                    <form action="login-proses.php" method="post">
                    <input class="input" type="text" name="username" placeholder="Username" />
                    <input class="input" type="password" name="password" placeholder="Password" />
                    <button type="submit" class="btn_login" name="login" id="login">Login</button>
                    </form>
                    <a href="register.php" class="link-register">Register Disini</a>
                </div>
            </div>
        </main>
        <footer>
            <h4>&copy; SI Mobil Listrik 2024</h4>
        </footer>
    </div>

    <script>
        
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var username = document.getElementById("username").value.trim(); 
            if (username === "") {
                alert("Username atau password anda salah.");
                return; 
            }
            sessionStorage.setItem("username", username);
            window.location.href = "admin.php";
        });
    </script>
</body>

</html>
