{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPEMA</title>
    <link href="./output.css" rel="stylesheet">
    <style>
        /* Gaya untuk pemisah */
        .divider {
            border: none;
            border-top: 2px solid black;
            /* Garis hitam dengan tebal sedang */
            margin: 2rem 0;
            /* Jarak di atas dan bawah garis */
        }

        body {
            background-color: #ffffff;
            /* Latar belakang putih untuk body */
        }

        header {
            background-color: rgba(255, 255, 255, 0.9);
            /* Warna latar belakang header putih transparan */
            border-bottom: 2px solid #ddd;
            /* Garis pemisah bawah header */
            z-index: 1000;
            /* Pastikan header berada di atas konten lainnya */
        }

        footer {
            background-color: rgba(248, 248, 248, 0.9);
            /* Latar belakang footer putih keabu-abuan transparan */
        }

        .main-content {
            padding: 2rem 0;
            /* Ruang di sekitar konten utama */
        }

        .hero-image img {
            max-width: 100%;
            /* Mengatur lebar gambar agar responsif */
            height: auto;
        }

        .section-title {
            font-size: 2.5rem;
            /* Ukuran font untuk judul */
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .section-content {
            font-size: 1rem;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <header class="fixed w-full bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <nav class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a class="flex items-center" style="display: flex; align-items: center;">
                <img src="img/PNC.jpg" alt="PNC Logo"
                    style="height: 3rem; width: auto; margin-right: 1rem; /* Ukuran logo lebih besar dan responsif */" />
                <span
                    style="font-size: 1.75rem; font-weight: 700; color: #000000; /* Ukuran teks lebih besar dan tebal */">Politeknik
                    Negeri Cilacap</span>
            </a>
        </nav>
        <!-- Garis pemisah -->

    </header>

    <main class="main-content">
        <!-- Start block -->
        <section
            class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="section-title">SIPEMA <br>Sistem Informasi Pendataan Mahasiswa</h1>
                <p class="section-content">
                    SIPEMA (Sistem Informasi Pendataan Mahasiswa) adalah platform berbasis web yang dirancang untuk
                    mempermudah
                    pengolahan dan manajemen data mahasiswa di Politeknik Negeri Cilacap.
                    Dengan antarmuka yang user-friendly dan teknologi terkini,
                    SIPEMA bertujuan untuk meningkatkan efisiensi dan akurasi
                    dalam pengelolaan data mahasiswa serta menyediakan pengalaman yang lebih
                    baik bagi semua penggunanya di Politeknik Negeri Cilacap.
                </p>
                <div class="flex gap-4 mt-6 space-x-3">
                    <button onclick="window.location='{{ route('login') }}'"
                        style="
                        background-color: #ffffff; 
                        color: #000000; 
                        border: 2px solid #000000; 
                        border-radius: 0.375rem; 
                        padding: 0.5rem 1rem; 
                        font-size: 1rem; 
                        font-weight: 600; 
                        transition: background-color 0.3s, color 0.3s;
                        cursor: pointer;
                    "
                        onmouseover="this.style.backgroundColor='#f0f0f0'; this.style.color='#333333';"
                        onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#000000';">
                        Login
                    </button>
                    <button onclick="window.location='{{ route('register') }}'"
                        style="
                        background-color: #ffffff; 
                        color: #000000; 
                        border: 2px solid #000000; 
                        border-radius: 0.375rem; 
                        padding: 0.5rem 1rem; 
                        font-size: 1rem; 
                        font-weight: 600; 
                        transition: background-color 0.3s, color 0.3s;
                        cursor: pointer;
                    "
                        onmouseover="this.style.backgroundColor='#f0f0f0'; this.style.color='#333333';"
                        onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#000000';">
                        Register
                    </button>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex hero-image">
                <img src="img/home.jpg" alt="hero image">
            </div>
        </section>
        <!-- End block -->
    </main>
    <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10" style="text-align: center;">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="text-center" style="margin: 0 auto;">
            <a href="#"
                class="flex items-center justify-center mb-3 text-lg font-semibold text-gray-900 dark:text-white"
                style="font-style: italic; font-size: 1rem; display: inline-flex; align-items: center;">
                <img src="/img/magangjogja.jpg" class="h-6 mr-2 sm:h-8" alt="Kelompok B" />
                <span>Magang Jogja Project</span>
            </a>
        </div>
    </div>

    </div>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>


</html> --}}


<!DOCTYPE html>
  <html lang="en">

  <head>
      <link rel="canonical" href="https://demo.themesberg.com/landwind/" />
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SIPEMA</title>
      <link href="./output.css" rel="stylesheet">
      <style>
                  /* Gaya untuk pemisah */
            .divider {
                border: none;
                border-top: 2px solid black; /* Garis hitam dengan tebal sedang */
                margin: 2rem 0; /* Jarak di atas dan bawah garis */
            }
            body {
                background-color: #ffffff; /* Latar belakang putih untuk body */
            }

            header {
                background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang header putih transparan */
                border-bottom: 2px solid #ddd; /* Garis pemisah bawah header */
                z-index: 1000; /* Pastikan header berada di atas konten lainnya */
            }

            footer {
                background-color: rgba(248, 248, 248, 0.9); /* Latar belakang footer putih keabu-abuan transparan */
            }

          
            .hero-image img {
                max-width: 100%; /* Mengatur lebar gambar agar responsif */
                height: auto;
            }

            .section-title {
                font-size: 2.5rem; /* Ukuran font untuk judul */
                font-weight: bold;
                margin-bottom: 1rem;
            }

            .section-content {
                font-size: 1rem;
                line-height: 1.6;
            }

      </style>
  </head>

  <body>
    
      <header class="fixed w-full bg-white border-gray-200 py-2.5 dark:bg-gray-900">
          <nav class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a class="flex items-center" style="display: flex; align-items: center;">
                <img src="img/PNC.jpg" alt="PNC Logo" style="height: 3rem; width: auto; margin-right: 1rem; /* Ukuran logo lebih besar dan responsif */" />
                <span style="font-size: 1.75rem; font-weight: 700; color: #000000; /* Ukuran teks lebih besar dan tebal */">Politeknik Negeri Cilacap</span>
            </a>
          </nav>
          <!-- Garis pemisah -->

      </header>
    
      <main class="main-content">
        <!-- Start block -->
        <section class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="section-title">SIPEMA <br>Sistem Informasi Pendataan Mahasiswa</h1>
                <p class="section-content">
                    SIPEMA (Sistem Informasi Pendataan Mahasiswa) adalah platform berbasis web yang dirancang untuk mempermudah 
                    pengolahan dan manajemen data mahasiswa di Politeknik Negeri Cilacap.
                    Dengan antarmuka yang user-friendly dan teknologi terkini, 
                    SIPEMA bertujuan untuk meningkatkan efisiensi dan akurasi 
                    dalam pengelolaan data mahasiswa serta menyediakan pengalaman yang lebih 
                    baik bagi semua penggunanya di Politeknik Negeri Cilacap.
                </p>
                <div class="flex gap-4 mt-6 space-x-3">
                    <button onclick="window.location='{{ route('login') }}'" style="
                        background-color: #ffffff; 
                        color: #000000; 
                        border: 2px solid #000000; 
                        border-radius: 0.375rem; 
                        padding: 0.5rem 1rem; 
                        font-size: 1rem; 
                        font-weight: 600; 
                        transition: background-color 0.3s, color 0.3s;
                        cursor: pointer;
                    " onmouseover="this.style.backgroundColor='#f0f0f0'; this.style.color='#333333';" onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#000000';">
                        Login
                    </button>
                    {{-- <button onclick="window.location='{{ route('register') }}'" style="
                        background-color: #ffffff; 
                        color: #000000; 
                        border: 2px solid #000000; 
                        border-radius: 0.375rem; 
                        padding: 0.5rem 1rem; 
                        font-size: 1rem; 
                        font-weight: 600; 
                        transition: background-color 0.3s, color 0.3s;
                        cursor: pointer;
                    " onmouseover="this.style.backgroundColor='#f0f0f0'; this.style.color='#333333';" onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#000000';">
                        Register
                    </button> --}}
                </div>
            </div>
            <div style="width: 510px; height: 510px; overflow: hidden; border-radius: 50%; border: 2px solid #000;">
              <img src="img/mahasiswa.jpg" alt="hero image" style="width: 200%; height: auto;">
          </div>
          
          
          
        </section>
        <!-- End block -->
      </main>

      <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  </body>


  </html>