<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ديتلي - المكان المثالي للتمور الفاخرة</title>
    <link rel="icon" href="./images/nav_logo.svg">
    <!-- Meta Tags for SEO -->
    <meta name="description" content="ديتلي يقدم تجربة استثنائية ونكهات مميزة من التمور الفاخرة. اكتشف منتجاتنا المتنوعة بجودة عالية وتصميمات مبتكرة.">
    <meta name="keywords" content="تمور, تمور فاخرة, ديتلي, نكهات مميزة, تمور محشية, هدايا الشركات">
    <meta name="author" content="ديتلي">
    <!-- Social Media Meta Tags -->
    <meta property="og:title" content="ديتلي - المكان المثالي للتمور الفاخرة">
    <meta property="og:description" content="ديتلي يقدم تجربة استثنائية ونكهات مميزة من التمور الفاخرة. اكتشف منتجاتنا المتنوعة بجودة عالية وتصميمات مبتكرة.">
    <meta property="og:image" content="./images/nav_logo.svg">
    <meta property="og:url" content="https://example.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ديتلي - المكان المثالي للتمور الفاخرة">
    <meta name="twitter:description" content="ديتلي يقدم تجربة استثنائية ونكهات مميزة من التمور الفاخرة. اكتشف منتجاتنا المتنوعة بجودة عالية وتصميمات مبتكرة.">
    <meta name="twitter:image" content="./images/nav_logo.svg">
    <!-- استدعاء Bootstrap CSS من CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- استدعاء ملف CSS الخاص بك -->
    <link rel="stylesheet" href="./css/gifts_style.css">
</head>

<body>
    <header class="header">
        <nav class="container navbar navbar-expand-lg sticky">
            <a class="navbar-brand" href="#">
                <img src="./images/nav_logo.svg" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
                        <a class="nav-link" href="./contact_us.php">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h2 class="mt-5">تواصل مع فريقنا</h2>
            <p class="mb-5"> لمساعدتك في إعداد صندوق هدايا مخصص وفقًا لمتطلبات شركتك آختر بين مجموعة مميزة من علب الهدايا ، وأنواع التمور الفاخرة والحشوات</p>
        </div>
    </main>
    <div class="contact mb-5">
        <div class="container">
        <?php if (isset($_GET['status'])) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> نجاح :</strong> تم ارسال طلبك بنجاح
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-12 col-sm-12 left_contact_us p-2 pt-3">
                    <div class="container align-items-center justify-content-center">
                        <!-- <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfTFOS4SZM6qOR-CDpktIKiiktfXvG98V2qDV88WApKXz_7KA/formResponse" class="row g-3 needs-validation" novalidate=""> -->
                        <form action="mail.php" method="post">
                            <div class="col-12 mt-3">
                            <label class="form-label" for="validationCustom01">الاسم الكامل</label>
                            <input class="form-control" id="validationCustom01" type="text" name="name" required>
                            <div class="valid-feedback">انظر جيدا</div>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="form-label" for="validationCustomUsername">البريد اللاكتروني</label>
                            <div class="input-group has-validation">
                                <input class="form-control" id="validationCustom03" type="text" name='email' required>
                                <div class="invalid-feedback">من فضلك ادخل بريد الكتروني</div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="form-label" for="validationCustom03">رقم الهاتف</label>
                            <input name="phone" class="form-control" id="validationCustom03" type="number" required>
                            <div class="invalid-feedback">من فضلك ادخل رقم صحيح</div>
                        </div>
                        <div class="col-12 mt-4">
                            <label for="floatingTextarea2">كيف يمكننا مساعدتك ؟</label>
                            <textarea name="message" required class="form-control" id="floatingTextarea2" placeholder="" style="height: 100px"></textarea>
                        </div>
                        <input type="hidden" name="token" value="">
                        <input type="hidden" name="form-type" value="dem">
                        <div class="col-12 mt-5 mb-5 text-center">
                            <div class="abutton">
                                <button type="submit" class="text-center mybtn col-12" name="send">
                                    راسلنا
                                    <div class="fa-solid fa-paper-plane"></div>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right_contact_us p-3 align-items-center">
                    <div class="container text-center">
                        <!-- <h5 class="h51">تواصل معنا</h5> -->
                        <h5 class="h52">نحن جاهزين دائما لمساعدتك</h5>
                        <div class="container text-center mt-5"></div>
                        <div class="container">
                            <div class="phone-container mt-5 mb-5">
                                <a href="mailto:marketing@datelly.sa" class="phone-number"> marketing@datelly.sa</a>
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
            </div>
        </div>
    </div>
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