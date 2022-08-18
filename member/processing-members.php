<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÀNH VIÊN ĐANG XÉT DUYỆT | STEAM BINH LONG</title>
    <link rel="icon" href="img/icon-sblc.png">
    <!-- Bootstrap 5 CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- HTML & CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- JQuery 3.6.0 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container">
            <a href="index.html" class="nav-brand"><img src="img/icon-sblc.png" width="50" alt=""><span class="text-brand">SBLC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-layout-split"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active" aria-current="page">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                      <a href="/update/updating.html" class="nav-link" aria-current="page">Dự án</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" id="memberMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Thành viên</a>
                      <ul class="dropdown-menu" id="datasheets" aria-labelledby="memberMenu">
                          <li class="dropdown-item"><a href="/member/official-members.php" style="text-decoration: none; color: blue; font-weight: 600;">Thành viên CLB</a></li>
                          <li class="dropdown-item"><a href="/member/processing-members.php" style="text-decoration: none; color: blue;font-weight: 600">Đang chờ xét duyệt</a></li>
                      </ul>
                  </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" id="firmwaresMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Phần mềm</a>
                      <ul class="dropdown-menu" id="datasheets" aria-labelledby="firmwaresMenu">
                          <li class="dropdown-item"><a href="/update/updating.html" style="text-decoration: none; color: blue; font-weight: 600;">Arduino IDE</a></li>
                          <li class="dropdown-item"><a href="/update/updating.html" style="text-decoration: none; color: blue;font-weight: 600">Arduino ESP32</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="hardwaresMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Phần cứng</a>
                    <ul class="dropdown-menu" id="datasheets" aria-labelledby="hardwaresMenu">
                        <li class="dropdown-item"><a href="/update/updating.html" style="text-decoration: none; color: blue; font-weight: 600;">Driver</a></li>
                        <li class="dropdown-item"><a href="/update/updating.html" style="text-decoration: none; color: blue;font-weight: 600">Chip</a></li>
                        <li class="dropdown-item"><a href="/update/updating.html" style="text-decoration: none; color: blue; font-weight: 600;">Linh kiện</a></li>
                    </ul>
                </li>
                    <li class="nav-item">
                        <a href="/about/about.html" class="nav-link">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a href="/join/contact.php" class="nav-link">Liên hệ</a>
                    </li>
    
                    
                </ul>
            </div>
        </div>
    </nav>
  
    <div class="main-carousel">
        <div class="col">
        <div class="container-fluid d-flex">
                <div class="footer-carousel active">
                    <div class="wrapper">
                        <h2 class="header-title">Thành viên chờ xét duyệt STEAM BINH LONG</h2>
                        <div id="load_processing_member" style= "display: flex;flex-flow: column;height: 100%;padding: 20px;border-radius: 10px;">

                        </div>
                        <div class="footer">
                            <button class="btn btn-success"><a href="/SBLC/join/contact.php">Đăng ký</a></button>
                            <button class="btn btn-primary"><a href="/SBLC/member/official-members.php">Thành viên chính thức</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div id = "footer">
                <div class="footer-title">
                    <p>Designed by <h6>Steam Binh Long Club</h6></p>
                </div>
                <center>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsteambinhlong.vn%2F&tabs&width=250&height=70&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=213784587347898" width="250" height="70" style="border:none;overflow:hidden; text-align: center;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </center>
            </div>
        </div>
    </div>
    <script src="js/processing.js"></script>
    <script>
        var nav = document.querySelector('nav'); 
        var dropdown = document.querySelector('ul#datasheets');
        window.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                nav.classList.add('bg-dark', 'shadow');
                $('ul#datasheets').addClass('bg-dark');
                $('.text-brand').addClass('orange');
            }else{
                nav.classList.remove('bg-dark', 'shadow'); 
                $('ul#datasheets').removeClass('bg-dark');
                $('.text-brand').removeClass('orange');
            }
        })
        
        </script>
    <!-- Bootstrap 5 Buddle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <!-- Bootstrap 5 Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f64ae307e0.js" crossorigin="anonymous"></script>
</body>

</html>
