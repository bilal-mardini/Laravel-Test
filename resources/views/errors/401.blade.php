<!DOCTYPE html>
<html lang="ar" dir="rtl" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head>
    <!-- TITLE -->
    <title>401 غير مصرح بالدخول</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('build/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-698853b8.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-698853b8.css') }}" />

    <!-- MAIN JS -->
    <script src="{{ asset('build/assets/authentication-main.js') }}"></script>
</head>

<body>
    <div class="page error-bg dark:!bg-bodybg" id="particles-js">
        <!-- Start::error-page -->
        <div class="error-page">
            <div class="container text-defaulttextcolo dark:text-defaulttextcolor/70 text-defaultsize">
                <div class="text-center p-5 my-auto">
                    <div class="flex items-center justify-center h-full !text-defaulttextcolor">
                        <div class="xl:col-span-3"></div>
                        <div class="xl:col-span-6 col-span-12">
                            <p class="error-text sm:mb-0 mb-2">404</p>
                            <p class="text-[1.125rem] font-semibold mb-4">
                                عذرًا، الصفحة التي تبحث عنها غير متوفرة.
                            </p>
                            <div class="flex justify-center items-center mb-[3rem]">
                                <div class="xl:col-span-6 w-[50%]">
                                    <p class="mb-0 opacity-[0.7]">
                                        نعتذر عن الإزعاج، الصفحة التي تحاول الوصول إليها قد تم حذفها أو لم تكن موجودة أبدًا.
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0);" onclick="window.history.back();" class="ti-btn btn-wave bg-primary text-white font-semibold">
                                <i class="ri-arrow-left-line align-middle inline-block"></i>
                                عودة
                            </a>
                        </div>
                        <div class="xl:col-span-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <!-- Particles JS -->
    <script src="{{ asset('build/assets/libs/particles.js/particles.js') }}"></script>

    <!-- Error JS -->
    <link rel="modulepreload" href="{{ asset('build/assets/error-97cc9c6c.js') }}" />
    <script type="module" src="{{ asset('build/assets/error-97cc9c6c.js') }}"></script>
</body>
</html>
