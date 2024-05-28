<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="asset/logo.jpg" />
  <title>Home</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            width: 100%;
            height: 300px; /* Sesuaikan dengan tinggi gambar */
        }
        .carousel-item {
            scroll-snap-align: center;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="Logo">
                    <img src="asset/logo.jpg" alt="" width="150" Weight="75" />
                </div>
                <input type="checkbox" id="click" />
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="Login.php" class="btn_login">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="Bahan">
                <div class="Bahan-text">
                    <h1>sistem Informasi Mobil Listrik</h1>
                    <p> Nikmati Teknologi Yang Canggih Salah satunya Mobil Listrik
                    </p>
                    <button type="button" class="btn_getStarted">Get Started</button>
                </div>
                <div class="Bahan-img">
                  <img src="asset/bg.png" alt="" width="500" Weight="150" />
              </div>
            </div>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="asset/bmwi3.jpg" alt="" width="500" Weight="150" />
                </div>
                <div class="carousel-item">
                    <img src="asset/teslasmodels.jpg" alt=""  width="500" Weight="150" />
                </div>
                <div class="carousel-item">
                    <img src="asset/Mobil-Listrik-Nissan-Leaf-Indonesia.jpg" alt=""  width="500" Weight="150"  />
                </div>
            </div>
            <div class="cards-categories">
                <h2>Kategori Mobil Listrik</h2>
                <div class="card-categories">
                    <div class="card">
                        <div class="card-image">
                            <img src="asset/bmwi3.jpg" alt="gambar tidak ditemukan" />
                        </div>
                        <div class="card-content">
                            <h5>BMW i3</h5>
                            <p class="description">BMW i3 memiliki desain yang futuristik dan inovatif. 
                              Dengan bodi yang terbuat dari serat karbon-reinforced plastic (CFRP), 
                              mobil ini memiliki bobot yang ringan dan tetap kuat.
                            </p>
                            <p class="price"><span>Rp.</span>1,319,000,000</p>
                            <button class="btn_belanja" type="submit">Beli</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="asset/teslasmodels.jpg" alt="gambar tidak ditemukan" />
                        </div>
                        <div class="card-content">
                            <h5>Tesla Model S</h5>
                            <p class="description">Tesla Model S memiliki desain yang futuristik dan aerodinamis. 
                              Dengan siluet yang elegan dan garis-garis yang halus, mobil ini menonjol di jalan.</p>
                            <p class="price"><span>Rp.</span>1,400,000,000</p>
                            <button class="btn_belanja" type="submit">Beli</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="asset/Mobil-Listrik-Nissan-Leaf-Indonesia.jpg" alt="gambar tidak ditemukan" />
                        </div>
                        <div class="card-content">
                            <h5>Nissan Leaf</h5>
                            <p class="description">Nissan Leaf memiliki desain yang modern dan kompak, 
                              ideal untuk penggunaan di perkotaan. Dengan bentuk yang aerodinamis, 
                              mobil ini menawarkan efisiensi energi yang baik.</p>
                            <p class="price"><span>Rp.</span>649,000,000</p>
                            <button class="btn_belanja" type="submit">Beli</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <h4>&copy; Sistem Informasi Mobil Listrik 2024</h4>
        </footer>
    </div>
    <script>
        // Get the carousel
        var carousel = document.querySelector('.carousel');

        // Get all carousel items
        var items = document.querySelectorAll('.carousel-item');

        // Set initial index
        var currentIndex = 0;

        // Next button
        var nextButton = document.createElement('button');
        nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextButton.classList.add('carousel-button', 'next');
        nextButton.addEventListener('click', function () {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });
        carousel.appendChild(nextButton);
        // Previous button
        var prevButton = document.createElement('button');
        prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevButton.classList.add('carousel-button', 'prev');
        prevButton.addEventListener('click', function () {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });
        carousel.appendChild(prevButton);

        function updateCarousel() {
            carousel.style.transform = 'translateX(-' + (currentIndex * items[0].offsetWidth) + 'px)';
        }
        // Update carousel when window resizes
        window.addEventListener('resize', function () {
            updateCarousel();
        });
        // Initial update
        updateCarousel();
    </script>
</body>

</html>
