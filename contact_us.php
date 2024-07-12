<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="صفحة تواصل معنا لموقع ديتلي">
    <meta name="keywords" content="ديتلي, تواصل, اتصل, بنا, هدايا, شركات">
    <title>ديتلي</title>
    <link rel="icon" href="./images/nav_logo.svg">
    <!-- استدعاء Bootstrap CSS من CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- استدعاء ملف CSS الخاص بك -->
    <link rel="stylesheet" href="./css/contact_us_style.css">
</head>

<body>
    <header class="header">
        <nav class="container navbar navbar-expand-lg   sticky">
            <a class="navbar-brand" href="#">
                <img src="./images/nav_logo.svg" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gifts.php">هدايا الشركات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="contact mb-5">
        <div class="container">
            <?php if (isset($_GET['status'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> نجاح :</strong> تم ارسال الرسالة بنجاح
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>
            
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-12 col-sm-12 right_contact_us p-3 ">
                    <div class="container text-center">
                        <h5 class="h51">تواصل معنا</h5>
                        <h5 class="h52">نحن جاهزين دائما لمساعدتك</h5>
                        <div class="container text-center mt-5">
                            <div class="row align-items-center  justify-content-center">
                                <div class="col-4 align-items-center  justify-content-center">
                                    <div>
                                        <a href="mailto:marketing@datelly.sa">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                                <g clip-path="url(#clip0_50_897)">
                                                    <path d="M37.4931 4.98441C37.4867 4.98433 37.4804 4.98384 37.4739 4.98392C37.4708 4.98392 37.4677 4.98368 37.4646 4.98368H4.28533L4.27671 4.98384C4.27091 4.98384 4.26503 4.98416 4.25923 4.98433C2.04623 4.9985 0.25 6.80263 0.25 9.01901V33.231C0.25 35.4561 2.06025 37.2663 4.28533 37.2663H37.4647C39.6898 37.2663 41.5 35.4561 41.5 33.231V9.01901C41.5 6.80343 39.7051 4.99987 37.4931 4.98441ZM34.231 7.67387L20.875 21.029L7.51999 7.67387H34.231ZM5.63047 34.5761H4.28533C3.54364 34.5761 2.94019 33.9727 2.94019 33.231V14.5082L5.63039 17.1984L5.63047 34.5761ZM33.4293 34.5761H8.32066V19.8886L18.0216 29.5895C18.8082 30.3763 19.8416 30.7695 20.875 30.7695C21.9084 30.7695 22.9417 30.3762 23.7284 29.5895L33.4293 19.8886V34.5761ZM38.8098 33.231C38.8098 33.9727 38.2064 34.5761 37.4647 34.5761H36.1195V17.1984L38.8097 14.5082V33.231H38.8098ZM38.8098 10.7037L33.8236 15.69L33.8231 15.6905L21.8262 27.6873C21.7016 27.8126 21.5533 27.912 21.3901 27.9796C21.2268 28.0472 21.0517 28.0818 20.875 28.0813C20.5157 28.0813 20.1779 27.9414 19.9238 27.6873L7.92693 15.6904L7.92645 15.6899L2.94019 10.7037V9.01893C2.94019 8.44642 3.30032 7.95763 3.80548 7.76387L19.9238 23.8822C20.0486 24.0073 20.1968 24.1065 20.3601 24.1742C20.5233 24.2418 20.6982 24.2765 20.8749 24.2763C21.2191 24.2763 21.5634 24.1449 21.826 23.8823L37.9453 7.76419C38.45 7.95827 38.8098 8.44683 38.8098 9.01901V10.7037Z" fill="#2C3444" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_50_897">
                                                        <rect width="41.25" height="41.25" fill="white" transform="translate(0.25 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 align-items-center  justify-content-center">
                                    <div class="align-items-center text-center  justify-content-center">
                                        <a href="https://www.instagram.com/datelly_sa?igsh=Mnh5bDBkZ3IydGJ4&utm_source=qr">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                                <g clip-path="url(#clip0_50_841)">
                                                    <path d="M30.3333 0.666664H10.3337C4.83436 0.666664 0.333984 5.16704 0.333984 10.6664V30.6669C0.333984 36.1648 4.83436 40.6667 10.3337 40.6667H30.3333C35.8326 40.6667 40.333 36.1648 40.333 30.6669V10.6664C40.333 5.16704 35.8326 0.666664 30.3333 0.666664ZM36.9996 30.6669C36.9996 34.3418 34.0102 37.3332 30.3333 37.3332H10.3337C6.65834 37.3332 3.6674 34.3418 3.6674 30.6669V10.6664C3.6674 6.99053 6.65834 4.00008 10.3337 4.00008H30.3333C34.0102 4.00008 36.9996 6.99053 36.9996 10.6664V30.6669Z" fill="#2C3444" />
                                                    <path d="M31.1679 12.3329C32.5486 12.3329 33.6678 11.2136 33.6678 9.83295C33.6678 8.45227 32.5486 7.33301 31.1679 7.33301C29.7872 7.33301 28.668 8.45227 28.668 9.83295C28.668 11.2136 29.7872 12.3329 31.1679 12.3329Z" fill="#2C3444" />
                                                    <path d="M20.3333 10.6664C14.8094 10.6664 10.3335 15.1428 10.3335 20.6662C10.3335 26.1875 14.8094 30.6669 20.3333 30.6669C25.8556 30.6669 30.333 26.1875 30.333 20.6662C30.333 15.1428 25.8556 10.6664 20.3333 10.6664ZM20.3333 27.3335C16.6518 27.3335 13.6669 24.3486 13.6669 20.6662C13.6669 16.9837 16.6518 13.9998 20.3333 13.9998C24.0147 13.9998 26.9996 16.9837 26.9996 20.6662C26.9996 24.3486 24.0147 27.3335 20.3333 27.3335Z" fill="#2C3444" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_50_841">
                                                        <rect width="40" height="40" fill="white" transform="translate(0.333252 0.666664)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 align-items-center  justify-content-center">
                                    <div>
                                        <a href="https://wa.me/+966552533373">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                                <g clip-path="url(#clip0_50_867)">
                                                    <path d="M10.2267 39.0565C13.4138 40.9744 17.0579 41.9852 20.802 41.9852C32.1477 41.9852 41.5 32.727 41.5 21.3674C41.5 10.0211 32.1609 0.75 20.802 0.75C9.47767 0.75 0.264824 9.99902 0.264824 21.3674C0.264824 25.1616 1.27593 28.8334 3.19349 32.023L0.25 42L10.2267 39.0565ZM2.68117 21.3674C2.68117 11.3313 10.8102 3.16603 20.802 3.16603C30.8825 3.16603 39.084 11.3313 39.084 21.3674C39.084 31.4039 30.8826 39.5688 20.802 39.5688C17.3332 39.5688 13.9623 38.5863 11.0547 36.727L10.5902 36.4302L3.82352 38.4267L5.8198 31.6598L5.52299 31.1956C3.66368 28.2874 2.68117 24.8891 2.68117 21.3674Z" fill="#2C3444" />
                                                    <path d="M10.2909 17.5686C10.6899 19.6643 11.8745 23.6951 15.3235 27.144C18.7724 30.593 22.8033 31.7778 24.8992 32.1769C27.2993 32.6338 30.8211 32.7028 32.5423 30.9816L33.5018 30.022C33.9862 29.5377 34.2531 28.8935 34.2531 28.2083C34.2531 27.5232 33.9862 26.8793 33.5019 26.395L29.6645 22.5576C29.1799 22.073 28.536 21.8064 27.8509 21.8064C27.1658 21.8064 26.5219 22.0731 26.0372 22.5577L25.078 23.5169C24.492 24.1029 23.3858 24.1055 22.7954 23.5242L18.9678 19.5362C18.9622 19.5302 18.9565 19.5241 18.9505 19.5185C18.3636 18.9316 18.3636 17.9765 18.9505 17.3895L19.9098 16.4302C20.9124 15.4276 20.9124 13.8052 19.9098 12.8029L16.0724 8.96552C15.0726 7.96569 13.4456 7.96569 12.4454 8.96552L11.4862 9.92506V9.92482C10.1125 11.2989 9.6545 14.2276 10.2909 17.5686ZM13.1947 11.6337C14.2018 10.6496 14.148 10.6307 14.259 10.6307C14.2971 10.6307 14.3352 10.6452 14.3642 10.6742C18.4076 14.7393 18.2452 14.5004 18.2452 14.6168C18.2452 14.6575 18.2305 14.6931 18.2018 14.722L17.2422 15.6812C15.7143 17.2092 15.7083 19.6825 17.2326 21.2173L21.0622 25.2079C21.0682 25.2135 21.0739 25.2195 21.0799 25.2255C22.6074 26.753 25.2539 26.7581 26.7865 25.2255L27.7458 24.2663C27.7737 24.2384 27.8115 24.2228 27.8509 24.2228C27.8903 24.2228 27.9281 24.2384 27.956 24.2663C31.9994 28.3311 31.837 28.0922 31.837 28.2086C31.837 28.2496 31.8223 28.2849 31.7936 28.3138L30.834 29.273C30.1766 29.9304 28.0825 30.3238 25.3512 29.8036C23.5284 29.4562 20.0233 28.4271 17.032 25.4357C14.0406 22.4444 13.0115 18.9395 12.6645 17.1167C12.1439 14.3852 12.5373 12.2908 13.1947 11.6337Z" fill="#2C3444" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_50_867">
                                                        <rect width="41.25" height="41.25" fill="white" transform="translate(0.25 0.75)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="h53 text-center">أتصل بنا</h5>
                        <div class="container">
                            <div class="phone-container mt-5 mb-5">
                                <a href="tel:+966552533373" class="phone-number">966552533373+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 left_contact_us p-2 pt-3">
                    <div class="container align-items-center justify-content-center">
                        <form class="row g-3 needs-validation" action="mail.php" method="POST">
                            <div class="col-12 mt-3">
                                <label class="form-label" for="validationCustom01">الاسم الكامل</label>
                                <input class="form-control" id="validationCustom01" type="text" name="name" required>
                                <div class="valid-feedback">انظر جيدا</div>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label" for="validationCustomUsername">البريد اللاكتروني</label>
                                <div class="input-group has-validation">
                                    <input class="form-control" id="validationCustom03" type="email" name="email" required>
                                    <div class="invalid-feedback">من فضلك ادخل بريد الكتروني</div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label" for="validationCustom03">رقم الهاتف</label>
                                <input class="form-control" id="validationCustom03" type="number" name="phone" required>
                                <div class="invalid-feedback">من فضلك ادخل رقم صحيح</div>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="floatingTextarea2">كيف يمكننا مساعدتك ؟</label>
                                <textarea class="form-control" id="floatingTextarea2" placeholder="" name="message" required style="height: 100px" required></textarea>
                            </div>
                            <input type="hidden" name='token' value="">
                            <input type="hidden" name='form-type' value="msg">
                            <div class="col-12 mt-5 mb-5 text-center">
                                <div class="abutton">
                                    <input type="submit" value="ارسال" name="send" class="btn" style="font-size: 30px; color: white;">
                                    <!-- <a class="text-center mybtn col-12">
                                        راسلنا
                                        <div class="fa-solid fa-paper-plane"></div>
                                         <svg
                                        class="mt-1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_50_860)">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M1.69956 0.0684395C0.69149 -0.26754 -0.267595 0.69141 0.068384 1.69948L7.20805 23.1182C7.60893 24.321 9.32299 24.2837 9.67121 23.0647L12.6477 12.6476L23.0648 9.67127C24.2839 9.32291 24.3212 7.60899 23.1183 7.2081L1.69956 0.0684395ZM2.6596 1.74766L22.7106 8.43132L12.3137 11.4019L2.6596 1.74766ZM1.74774 2.65952L11.4019 12.3137L8.4314 22.7104L1.74774 2.65952Z"
                                                fill="#2C3444"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_50_860">
                                                <rect
                                                    width="24"
                                                    height="24"
                                                    fill="white"
                                                    transform="matrix(0 -1 1 0 0 24)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg> 
                                    </a>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- استدعاء jQuery من CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- استدعاء Popper.js من CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- استدعاء Bootstrap JS من CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>