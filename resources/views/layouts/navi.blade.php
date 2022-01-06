<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Otorideandcare.com</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                .navbar-light .navbar-nav .nav-link {
                  color: #092a33;
                }
                .navbar-light .navbar-nav .nav-link.active {
                  font-weight: 500;
                }
                .btn-get-started {
                  border-radius: 20px;
                  padding-top: 12px;
                  padding-bottom: 12px;
                  padding-left: 30px;
                  padding-right: 30px;
                  font-weight: 500;
                }
          
                .btn-get-started-blue {
                  background-color: #0ec8f8;
                  color: #fff;
                }
                .btn-get-started-blue:hover {
                  background-color: #3ad8ff;
                  color: #fff;
                }
              }
              </style>
            <nav
            class="navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body border-bottom"
            style="font-family: Poppins, sans-serif;">
            <div class="container">
                <a class="navbar-brand" href="">
                <svg
                    width="42"
                    height="42"
                    viewBox="0 0 42 42"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                    fill="#0EC8F8"
                    />
                    <path
                    d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                    fill="#0EC8F8"
                    />
                </svg>
                </a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link px-md-4 " aria-current="page" href="/"
                        >Home</a
                    >
                    </li>
                    <li class="nav-item">
                    <a class="nav-link px-md-4" href="/layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link px-md-4" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link px-md-4" href="/tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link px-md-4" href="/testimoni">Testimoni</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-get-started btn-get-started-blue" href="/order-now"
                    >Pesan Sekarang</a
                    >
                </div>
                </div>
            </div>
            </nav>
        </section> 
    
        <main>  
        @yield('content')
        </main>

        <div class="margin-foot"> 

        </div>


       
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>