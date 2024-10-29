<!DOCTYPE html>
<html dir="rtl" lang="fa" id="html">
<head>
    <meta charSet="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>هوم سرویز، مرجع آنلاین خدمات و تعمیرات در محل</title>
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/fonts.css') }}">
    <style>
        .jss1 {
            z-index: 999999999999;
            pointer-events: auto
        }

        .jss2 .notistack-MuiContent {
            border: 1px solid rgba(0, 0, 0, .12);
            display: flex;
            max-width: 1327px;
            align-items: center;
            border-radius: 24px;
            flex-direction: row-reverse;
            pointer-events: auto;
            justify-content: flex-end
        }

        .jss2 .notistack-MuiContent-info {
            z-index: 999999999999;
            background-color: #888
        }

        @media (min-width: 960px) {
            .jss2 .notistack-MuiContent {
                width: 100vw;
                height: 80px;
                z-index: 999999999999
            }
        }

        .jss2 .notistack-MuiContent #notistack-snackbar {
            flex: 1
        }

        .jss12 {
            height: 10px;
            padding: 1px;
            font-size: .75rem;
            min-width: 13px;
            min-height: 13px;
            line-height: 10px;
            padding-top: 4px;
            border-radius: 4px;
            background-color: #eb5757
        }

        .jss13 {
            width: 8px;
            height: 8px;
            min-width: 8px;
            min-height: 8px;
            border-radius: 100%
        }

        .jss38 {
            margin-right: auto;
            margin-left: auto
        }

        .jss39 {
            background-color: #3ebc64
        }

        .jss40 {
            background-color: #5b70f3
        }

        .jss41 {
            color: #3ebc64
        }

        .jss42 {
            color: #5b70f3
        }

        .jss43 {
            color: #3ebc64;
            border-color: #3ebc64
        }

        .jss44 {
            color: #5b70f3;
            border-color: #5b70f3
        }

        .jss44:hover {
            color: #fff !important;
            border: 1px solid #8d9cfe;
            box-shadow: unset;
            background-color: #8d9cfe !important
        }

        @media (max-width: 959.95px) {
            .jss44:hover {
                color: #5b70f3 !important;
                border-color: #5b70f3 !important;
                background-color: #fff !important
            }

            .jss44:focus {
                color: #5b70f3 !important;
                border-color: #5b70f3 !important;
                background-color: #fff !important
            }
        }

        .jss14 {
            padding: 16px;
            margin-top: 24px;
            border-radius: 24px;
            background-color: #f5f5f5
        }

        .jss15 {
            color: #4bd274;
            font-size: 16px;
            font-weight: 700;
            padding-right: 6px;
            margin-bottom: 20px
        }

        .jss15::before {
            width: 6px;
            height: 6px;
            content: "";
            display: flex;
            animation: 2s linear 0s 1 normal forwards running jss16;
            margin-right: -6px;
            border-radius: 50%;
            background-color: #eb5757;
            animation-iteration-count: infinite
        }

        @media (min-width: 963px) {
            .jss15 {
                margin-bottom: 0
            }
        }

        @keyframes jss16 {
            0% {
                box-shadow: 0 0 0 0 #eb575752
            }
            25% {
                box-shadow: 0 0 0 4px #eb575752
            }
            50% {
                box-shadow: 0 0 0 0 #eb575752
            }
            100% {
                box-shadow: 0 0 0 4px #eb575752
            }
        }

        .jss17 {
            border-radius: 12px
        }

        .jss18 {
            width: 264px;
            height: 56px;
            padding: 4px;
            display-l: flex;
            align-items: center;
            border-radius: 12px;
            background-color: #fff
        }

        @media (max-width: 959.95px) {
            .jss18 {
                margin-top: 16px;
                margin-bottom: 16px;
                background-color: transparent
            }
        }

        .jss19 {
            color: #000;
            font-size: 1rem;
            font-weight: 700;
            margin-right: 16px
        }

        @media (max-width: 959.95px) {
            .jss19 {
                font-size: .88rem
            }
        }

        .jss20 {
            color: #888;
            border: 1px solid #888;
            padding: 2px 8px;
            font-size: 12px;
            margin-right: 8px;
            border-radius: 8px
        }

        .jss21 {
            font-size: .75rem;
            line-height: 150%;
            margin-bottom: .25rem
        }

        .jss22 {
            display: flex;
            font-size: 1rem;
            align-items: center;
            font-weight: 500;
            line-height: 150%
        }

        .jss23 {
            width: auto;
            height: 38px;
            flex-grow: 1;
            max-height: 38px;
            margin-left: 1rem
        }

        .jss23:last-child {
            margin-left: 0
        }

        @media (min-width: 963px) {
            .jss23 {
                width: 120px;
                max-width: 120px;
                min-width: calc(50% - 8px);
                margin-left: 0
            }
        }

        .jss24 {
            font-size: .88rem;
            font-weight: 500
        }

        .jss25 {
            width: 120px;
            height: 38px;
            margin-top: 1.5rem
        }

        .jss26 {
            width: 32px;
            height: 32px;
            display: flex;
            background: #f5f5f5;
            align-items: center;
            margin-right: .5rem;
            border-radius: 8px;
            justify-content: center
        }

        .jss27 {
            display: flex;
            margin-right: .25rem;
            border-radius: 8px
        }

        .jss28 {
            border-radius: 8px
        }

        .jss29 {
            font-size: .75rem;
            max-width: 6rem;
            margin-right: .5rem
        }

        .jss30 {
            margin-bottom: 16px
        }

        @media (max-width: 959.95px) {
            .jss30 {
                border-bottom: 1px solid #888;
                padding-bottom: 24px
            }
        }

        .jss31 {
            display: flex;
            align-items: center
        }

        .jss32 {
            color: #8d9cfe;
            cursor: pointer;
            display: flex;
            font-size: 12px;
            justify-content: center
        }

        .jss33 {
            width: 18px;
            height: 18px
        }

        .jss34 {
            width: 18px;
            height: 18px;
            transform: rotate(-180deg)
        }

        .jss35 {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            margin-left: 8px;
            border-radius: 12px;
            justify-content: center;
            background-color: #eee
        }

        .jss36 {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            margin-left: 8px;
            border-radius: 12px;
            justify-content: center;
            background-color: #8d9CFE40
        }

        .jss37 {
            margin-top: 4px
        }

        .jss3 {
            height: 80px;
            position: relative;
            background-color: #4bd274
        }

        @media (max-width: 963px) {
            .jss3 {
                height: unset
            }
        }

        .jss4 {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .jss5 {
            color: #fff;
            z-index: 9;
            font-size: 14px;
            font-weight: 700;
            margin-right: 8px
        }

        .jss6 {
            color: #fff;
            z-index: 9;
            min-width: 120px;
            border-color: #fff
        }

        .jss6:hover {
            color: #fff !important
        }

        @media (max-width: 963px) {
            .jss6 {
                width: 100%;
                margin-top: 12px
            }
        }

        .jss7 {
            color: #fff;
            font-size: 1.13rem;
            margin-left: 54px
        }

        @media (max-width: 963px) {
            .jss7 {
                right: 0;
                bottom: -30px;
                z-index: 1000;
                position: absolute;
                background: #4bd274;
                border-radius: 12px;
                border-top-right-radius: 0;
                border-top-left-radius: 0
            }
        }

        .jss8 {
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            position: absolute;
            background-size: cover !important;
            background-repeat: no-repeat !important
        }

        @media (max-width: 963px) {
            .jss8 {
                width: 74%;
                background-position: center !important
            }
        }

        @media (max-width: 963px) {
            .jss9 {
                height: 100%;
                padding: 16px
            }
        }

        .jss10 {
            flex-wrap: nowrap
        }

        .jss11 {
            aspect-ratio: 1
        }</style>
</head>
<body id="body">
<div id="__next">
    <div class="__className_e5590e mui-19pri7b">
        <div class="mui-il7bba">
            <div aria-hidden="true" class="MuiBackdrop-root FetchLoadingProvider-backdrop mui-um19vb"
                 style="opacity:0;visibility:hidden">
                <div class="Loading-main fs-lg mui-nflan6">
                    <img src="/images/statics/logo-loading-500x500.gif"
                                                                height="80" width="80" alt="logo" loading="lazy"/>
                    <div class="Loading-main">در حال بارگذاری ...</div>
                </div>
            </div>
        </div>
        <div class="HeaderWrapper-main  mui-cups22" id="headerWrapper">
            <header class="HeaderDefault-main mui-1kai6cp">
                <div class="MuiContainer-root MuiContainer-maxWidthLg mui-18aqaxg">
                    <div class="MuiBox-root mui-70qvj9"><a class="HeaderDefault-image" href="/">
                            <img height="56" width="57"
                                 src="{{ asset('client/images/Frame-1.svg') }}"
                                 alt="logo"/></a>
                        <div class="MuiBox-root mui-1bzatbo">
                            <div class="MuiBox-root mui-1fojr6f"><a href="https://homeservize.com/blog1/"
                                                                    class="fs-md font-weight-medium">وبلاگ</a></div>
                            <div class="MuiBox-root mui-1fojr6f"><a class="fs-md font-weight-medium"
                                                                    href="/hiring-hamyar">استخدام همیار</a></div>
                            <div class="MuiBox-root mui-1fojr6f"><a class="fs-md font-weight-medium" href="/faq">سوالات
                                    متداول</a></div>
                            <div class="MuiBox-root mui-1fojr6f"><a class="fs-md font-weight-medium" href="/contact-us">تماس
                                    با ما</a></div>
                            <div class="MuiBox-root mui-1fojr6f"><a class="fs-md font-weight-medium" href="/service">قیمت
                                    خدمات</a></div>
                            <div class="MuiBox-root mui-1fojr6f"><a
                                    class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorPrimary fs-md font-weight-medium mui-z3kh95"
                                    tabindex="0" href="/app-dl">دانلود اپلیکیشن</a></div>
                        </div>
                        <div class="MuiBox-root mui-drvgxw"><a
                                class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit HeaderDefault-peigiriButton mui-2fsay0"
                                tabindex="0" href="/auth"><span class="MuiBadge-root mui-1rzb3uu">پیگیری سرویس<span
                                        class="MuiBadge-badge jss12 MuiBadge-standard MuiBadge-invisible MuiBadge-anchorOriginTopLeft MuiBadge-anchorOriginTopLeftRectangular MuiBadge-overlapRectangular MuiBadge-colorError mui-1i7ffd1"></span></span></a>
                            <hr class="MuiDivider-root MuiDivider-fullWidth MuiDivider-vertical MuiDivider-flexItem mui-1d7q5f8"/>
                            <div class="fs-md font-weight-medium MuiBox-root mui-1u4ccxu"><a href="tel:90002021">
                                    <button
                                        class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit HeaderDefault-callButton mui-2fsay0"
                                        tabindex="0" type="button">90002021<!-- --> <span
                                            class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-call HeaderDefault-icon HeaderDefault-iconSpace mui-1jgtvd5"
                                            aria-hidden="true"></span></button>
                                </a></div>
                        </div>
                        <a class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary mui-l2bjzg"
                           tabindex="0" href="/auth">ثبت نام / ورود</a></div>
                </div>
            </header>
        </div>
        <main class="MainProvider-main false">
            <div>
                <section class="HomeSectionTwo-main mui-177nedc">
                    <div class="MuiContainer-root MuiContainer-maxWidthLg mui-18aqaxg">
                        <div class="MuiGrid-root MuiGrid-container HomeSectionTwo-wrapper mui-8rnkcc">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 mui-olxh0n">
                                <div class="MuiBox-root mui-79elbk"><h1
                                        class="MuiTypography-root MuiTypography-h1 HomeSectionTwo-title mui-1c9v1ww">
                                        هوم‌سرویز</h1>
                                    <p class="MuiTypography-root MuiTypography-body1 HomeSectionTwo-subTitle mui-vf1akx">
                                        همیار شماییم تا پایان سرویس ...</p>
                                    <div class="HomeSectionTwo-mobileMan"><img loading="eager"
                                                                               class="HomeSectionTwo-mobileInnerImage jss38"
                                                                               src="https://s3.homeservize.com/images/home-page/slider_m2.png"
                                                                               alt="هوم‌سرویز" height="100%"
                                                                               width="100%"/></div>
                                </div>
                                <div class="HomeSectionTwo-space MuiBox-root mui-0">خدمت و شهر مورد نظر خود را انتخاب
                                    کنید
                                </div>
                                <div class="HomeSectionTwo-searchArea" id="searchDiv">
                                    <div class="MuiBox-root mui-10tz50l">
                                        <div class="HomeSectionTwo-where">
                                            <div class="fs-sm font-weight-light MuiBox-root mui-10kvvmn">کجا هستید؟
                                            </div>
                                            <div class="fs-lg font-weight-medium MuiBox-root mui-0">
                                                <button
                                                    class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-fullWidth MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-fullWidth HomeSectionTwo-buttonWrapper mui-1dm4rk8"
                                                    tabindex="0" type="button">
                                                    <div class="HomeSectionTwo-felesh HomeSectionTwo-rotated"><img
                                                            height="7" width="12" src="/images/common/expand-less.svg"
                                                            alt="expand-less"/></div>
                                                    تهران
                                                </button>
                                            </div>
                                        </div>
                                        <hr class="MuiDivider-root MuiDivider-fullWidth MuiDivider-vertical MuiDivider-flexItem HomeSectionTwo-divider mui-1d7q5f8"/>
                                        <div
                                            class="MuiInputBase-root MuiInputBase-colorPrimary HomeSectionTwo-input mui-9rsmhm">
                                            <input placeholder="چه سرویسی نیاز دارید؟ " type="text"
                                                   class="MuiInputBase-input mui-mnn31" value=""/></div>
                                    </div>
                                    <div class="MuiBox-root mui-1me2gch">
                                        <button
                                            class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation HomeSectionTwo-searchBtn mui-1bryk53"
                                            tabindex="0" type="button">جستجو
                                        </button>
                                    </div>
                                </div>
                                <div class="MuiBox-root mui-1uwcjwj">
                                    <button
                                        class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation MuiButton-fullWidth MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation MuiButton-fullWidth HomeSectionTwo-searchBtn mui-1a0cawz"
                                        tabindex="0" type="button">جستجو
                                    </button>
                                </div>
                            </div>
                            <div
                                class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-5 HomeSectionTwo-imageGrid mui-1a13ybk">
                                <div class="HomeSectionTwo-blue">
                                    <img src="https://s3.homeservize.com/images/home-page/slider_d2.png" height="100%"
                                        width="auto" class="HomeSectionTwo-manImage" alt="هوم‌سرویز"/></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionThree-main mui-rbrst">
                    <div class="MuiGrid-root MuiGrid-container mui-1cn3yto">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-10 mui-12r9lqr">
                            <div
                                class="MuiGrid-root MuiGrid-container HomeSectionThree-container HomeSectionThree-containerExpanded mui-fpu91z">
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/cleaning"><img loading="eager"
                                                                                                      class="undefined jss38"
                                                                                                      src="/images/category/cleaning.svg"
                                                                                                      alt="cleaning"
                                                                                                      height="56"
                                                                                                      width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">نظافت و پذیرایی
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/plumbing"><img loading="eager"
                                                                                                      class="undefined jss38"
                                                                                                      src="/images/category/plumbing.svg"
                                                                                                      alt="plumbing"
                                                                                                      height="56"
                                                                                                      width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">لوله کشی و
                                            تاسیسات
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/electricity"><img loading="eager"
                                                                                                         class="undefined jss38"
                                                                                                         src="/images/category/electricity.svg"
                                                                                                         alt="electricity"
                                                                                                         height="56"
                                                                                                         width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">برقکاری ساختمان
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/home-appliances"><img
                                            loading="eager" class="undefined jss38"
                                            src="/images/category/home-appliances.svg" alt="home-appliances" height="56"
                                            width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">لوازم خانگی</div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/decoration"><img loading="eager"
                                                                                                        class="undefined jss38"
                                                                                                        src="/images/category/decoration.svg"
                                                                                                        alt="decoration"
                                                                                                        height="56"
                                                                                                        width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">بنایی و
                                            دکوراسیون
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/building"><img loading="eager"
                                                                                                      class="undefined jss38"
                                                                                                      src="/images/category/building.svg"
                                                                                                      alt="building"
                                                                                                      height="56"
                                                                                                      width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">خانگی و ساختمانی
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/moving"><img loading="eager"
                                                                                                    class="undefined jss38"
                                                                                                    src="/images/category/moving.svg"
                                                                                                    alt="moving"
                                                                                                    height="56"
                                                                                                    width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">جابجایی و حمل
                                            بار
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/educational"><img loading="eager"
                                                                                                         class="undefined jss38"
                                                                                                         src="/images/category/educational.svg"
                                                                                                         alt="educational"
                                                                                                         height="56"
                                                                                                         width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">فرهنگی و آموزشی
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/technology"><img loading="eager"
                                                                                                        class="undefined jss38"
                                                                                                        src="/images/category/technology.svg"
                                                                                                        alt="technology"
                                                                                                        height="56"
                                                                                                        width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">رایانه و
                                            تکنولوژی
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/car"><img loading="eager"
                                                                                                 class="undefined jss38"
                                                                                                 src="/images/category/car.svg"
                                                                                                 alt="car" height="56"
                                                                                                 width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">تعمیر و سرویس
                                            خودرو
                                        </div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/beauty"><img loading="eager"
                                                                                                    class="undefined jss38"
                                                                                                    src="/images/category/beauty.svg"
                                                                                                    alt="beauty"
                                                                                                    height="56"
                                                                                                    width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">زیبایی</div>
                                    </a></div>
                                <div
                                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-auto mui-1kxpcyz">
                                    <a class="HomeSectionThree-card" href="/categories/nursing"><img loading="eager"
                                                                                                     class="undefined jss38"
                                                                                                     src="/images/category/nursing.svg"
                                                                                                     alt="nursing"
                                                                                                     height="56"
                                                                                                     width="56"/>
                                        <div class="font-weight-medium fs-md MuiBox-root mui-1k1y5du">پزشکی و پرستاری
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="HomeSectionThree-whiteFilter"></div>
                    <div class="MuiBox-root mui-u1oaus">
                        <button
                            class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-fullWidth MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-fullWidth mui-sz5wvg"
                            tabindex="0" type="button">مشاهده بیشتر
                        </button>
                    </div>
                </section>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionFour-main mui-1wkzqjv"><a
                        href="/service"><h2
                            class="MuiTypography-root MuiTypography-h2 fs-xxl font-weight-bold mui-in5w7a">قیمت
                            خدمات</h2></a>
                    <div class="MuiGrid-root MuiGrid-container HomeSectionFour-aksContainer mui-1d3bbye">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-3 mui-dkdv1y">
                            <div class="HomeSectionFour-optionContainer">
                                <div class="HomeSectionFour-option font-weight-demibold HomeSectionFour-selectedOption">
                                    <div class="HomeSectionFour-titleArea"><img src="/images/home-page/setare.svg"
                                                                                height="17" width="18" alt="setare"/>
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">خدمات پیشنهادی
                                        </div>
                                    </div>
                                    <a class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeSmall MuiButton-textSizeSmall MuiButton-colorSecondary MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeSmall MuiButton-textSizeSmall MuiButton-colorSecondary HomeSectionFour-btnSelect fs-md mui-ahyzi8"
                                       tabindex="0" href="/service">مشاهده بیشتر</a></div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">نظافت و
                                            پذیرایی
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">لوله کشی و
                                            تاسیسات
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">برقکاری
                                            ساختمان
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">لوازم خانگی
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">بنایی و
                                            دکوراسیون
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">خانگی و
                                            ساختمانی
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">جابجایی و حمل
                                            بار
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">رایانه و
                                            تکنولوژی
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">تعمیر و سرویس
                                            خودرو
                                        </div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">زیبایی</div>
                                    </div>
                                </div>
                                <div class="HomeSectionFour-option font-weight-demibold">
                                    <div class="HomeSectionFour-titleArea">
                                        <div class="font-weight-demibold fs-md MuiBox-root mui-15q8ye2">پزشکی و
                                            پرستاری
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-9 mui-59e7uq">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-4 mui-etojt3">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 mui-1yv2x1">
                                    <div class="HomeSectionFourBigBox-main mui-ovan09"><img loading="eager"
                                                                                            class="HomeSectionFourBigBox-imgService jss38"
                                                                                            src="https://s3.homeservize.com/service/images/6/banner-d.jpg"
                                                                                            alt="house-cleaning"
                                                                                            fetchPriority="high"/>
                                        <div class="HomeSectionFourBigBox-filter">
                                            <div class="MuiBox-root mui-2jich6">
                                                <div><a href="/house-cleaning">
                                                        <div class="font-weight-bold fs-md MuiBox-root mui-0">قیمت نظافت
                                                            منزل
                                                        </div>
                                                    </a>
                                                    <div class="fs-md MuiBox-root mui-1ogakd7">قیمت از 580,000 الی
                                                        870,000 تومان
                                                    </div>
                                                </div>
                                                <button
                                                    class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary HomeSectionFourBigBox-btn mui-ulcx5d"
                                                    tabindex="0" type="button">جزئیات قیمت
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 MuiGrid-grid-md-4 mui-1x0fktr">
                                    <div class="MuiBox-root mui-10klw3m">
                                        <div class="mui-2m9px1"><img loading="lazy"
                                                                     class="HomeSectionFourSmallBox-imgService jss38"
                                                                     src="https://s3.homeservize.com/service/images/79/logo-d.jpg"
                                                                     alt="flower-plant-care"/>
                                            <div class="HomeSectionFourSmallBox-filter"><a href="/flower-plant-care">
                                                    <div class="font-weight-bold fs-md MuiBox-root mui-1ld34ds">قیمت
                                                        مراقبت گل و گیاه
                                                    </div>
                                                </a>
                                                <div class="MuiBox-root mui-16c1hsv">
                                                    <div>
                                                        <div class="fs-sm MuiBox-root mui-0">قیمت از 850,000 الی
                                                            1,500,000 تومان
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary fs-md HomeSectionFourSmallBox-btn mui-ulcx5d"
                                                        tabindex="0" type="button">
                                                        <div class="MuiBox-root mui-xi606m">جزئیات قیمت</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 MuiGrid-grid-md-4 mui-1x0fktr">
                                    <div class="MuiBox-root mui-10klw3m">
                                        <div class="mui-2m9px1"><img loading="lazy"
                                                                     class="HomeSectionFourSmallBox-imgService jss38"
                                                                     src="https://s3.homeservize.com/service/images/90/logo-d.jpg"
                                                                     alt="package-installation-repair"/>
                                            <div class="HomeSectionFourSmallBox-filter"><a
                                                    href="/package-installation-repair">
                                                    <div class="font-weight-bold fs-md MuiBox-root mui-1ld34ds">قیمت
                                                        سرویس و تعمیر پکیج
                                                    </div>
                                                </a>
                                                <div class="MuiBox-root mui-16c1hsv">
                                                    <div>
                                                        <div class="fs-sm MuiBox-root mui-0">قیمت از 500,000 الی
                                                            1,500,000 تومان
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary fs-md HomeSectionFourSmallBox-btn mui-ulcx5d"
                                                        tabindex="0" type="button">
                                                        <div class="MuiBox-root mui-xi606m">جزئیات قیمت</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 MuiGrid-grid-md-4 mui-1x0fktr">
                                    <div class="HomeSectionFour-smallCardBorder MuiBox-root mui-10klw3m">
                                        <div class="mui-2m9px1"><img loading="lazy"
                                                                     class="HomeSectionFourSmallBox-imgService jss38"
                                                                     src="https://s3.homeservize.com/service/images/125/logo-d.jpg"
                                                                     alt="computer-repair"/>
                                            <div class="HomeSectionFourSmallBox-filter"><a href="/computer-repair">
                                                    <div class="font-weight-bold fs-md MuiBox-root mui-1ld34ds">قیمت
                                                        تعمیر کامپیوتر
                                                    </div>
                                                </a>
                                                <div class="MuiBox-root mui-16c1hsv">
                                                    <div>
                                                        <div class="fs-sm MuiBox-root mui-0">قیمت از 400,000 الی
                                                            1,000,000 تومان
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorPrimary fs-md HomeSectionFourSmallBox-btn mui-ulcx5d"
                                                        tabindex="0" type="button">
                                                        <div class="MuiBox-root mui-xi606m">جزئیات قیمت</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="MuiBox-root mui-1xg0yqz"><a
                            class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedSecondary jss44 MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorSecondary MuiButton-fullWidth MuiButton-root MuiButton-outlined MuiButton-outlinedSecondary jss44 MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorSecondary MuiButton-fullWidth mui-tfh0wi"
                            tabindex="0" href="/service">مشاهده همه <!-- -->خدمات پیشنهادی</a></div>
                </section>
                <div class="MuiContainer-root MuiContainer-maxWidthLg mui-1e3h7yu">
                    <div class="HomeDownloadSection-greenCard" id="applicationWrapper">
                        <div class="MuiBox-root mui-10klw3m"><h2
                                class="MuiTypography-root MuiTypography-h2 HomeDownloadSection-title mui-in5w7a">دسترسی
                                به بهترین و حرفه‌ای‌ترین‌های خدمات در محل با اپلیکیشن هوم‌سرویز</h2>
                            <div class="HomeDownloadSection-matn">تنها فاصله شما برای دریافت خدمات در محل، دانلود
                                اپلیکیشن هوم‌سرویز، ثبت سفارش رایگان و مذاکره با همیاران متخصص خواهد بود. به راحتی می
                                توانید در بیش از ۴۰۰ نوع سرویس مختلف از نظافت و پذیرایی تا برقکاری و لوله کشی، تعمیرات
                                لوازم خانگی، بنایی و دکوراسیون، زیبایی و آرایشگری، تعمیرات خودور در محل و ... با بهترین
                                و حرفه ای ترین ها در زمینه درخواست خود دسترسی داشته باشید و از نرخ های رقابتی و تعرفه
                                قیمت خدمات در محل مطلع شوید.
                            </div>
                            <div class="HomeDownloadSection-btnContainer">
                                <div class="HomeDownloadSection-btn"><a target="_blank" rel="nofollow"
                                                                        class="HomeDownloadSection-dFlex"
                                                                        href="https://go.homeservize.com/iosapp"><img
                                            src="https://s3.homeservize.com/images/common/app-store.png" width="100%"
                                            height="100%" alt="store" loading="lazy"/></a></div>
                                <div class="HomeDownloadSection-btn"><a class="HomeDownloadSection-dFlex"
                                                                        target="_blank" rel="nofollow"
                                                                        href="https://play.google.com/store/apps/details?id=com.homeservize.customerapp"><img
                                            src="https://s3.homeservize.com/images/common/google-play-badge (2).png"
                                            alt="google" width="100%" height="100%" loading="lazy"/></a></div>
                                <div class="HomeDownloadSection-btn"><a class="HomeDownloadSection-dFlex"
                                                                        target="_blank" rel="nofollow"
                                                                        href="https://cafebazaar.ir/app/com.homeservize.customerapp"><img
                                            loading="lazy" width="100%" height="100%"
                                            src="https://s3.homeservize.com/images/common/badge-new 12.png"
                                            alt="badge"/></a></div>
                                <a aria-label="وب‌اپلیکیشن" target="_blank" rel="nofollow"
                                   class="HomeDownloadSection-dFlex" href="https://app.homeservize.com">
                                    <button
                                        class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary HomeDownloadSection-btn mui-ovqoit"
                                        tabindex="0" type="button">وب‌اپلیکیشن
                                    </button>
                                </a></div>
                        </div>
                        <div class="MuiBox-root mui-79elbk">
                            <div class="HomeDownloadSection-dotsImage"><img
                                    src="https://s3.homeservize.com/images/user/dots.png" height="145.36px"
                                    width="145.36px" alt="dots" loading="lazy"/></div>
                            <div class="HomeDownloadSection-imageContainer"><img width="100%" height="100%"
                                                                                 loading="lazy"
                                                                                 src="https://s3.homeservize.com/images/home-page/phones.png"
                                                                                 alt="download app"/></div>
                        </div>
                    </div>
                </div>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionSix-main mui-450zjk">
                    <div class="HomeSectionSix-title MuiBox-root mui-0"><h2
                            class="MuiTypography-root MuiTypography-h2 fs-xxl font-weight-bold mui-in5w7a">هوم‌سرویز از
                            نگاه مشتریان</h2></div>
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 mui-eic2kq">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 mui-olxh0n">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 mui-eic2kq">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 mui-1yv2x1">
                                    <div class="HomeSectionSixCard-card mui-1m103gq">
                                        <div class="MuiBox-root mui-k008qs">
                                            <div
                                                class="MuiAvatar-root MuiAvatar-rounded HomeSectionSixCard-avatar mui-1k15p1p">
                                                <img alt="profile picture" src="/images/user/user.svg" loading="lazy"
                                                     class="MuiAvatar-img mui-1hy9t21"/></div>
                                            <div class="MuiBox-root mui-i9gxme">
                                                <div class="MuiBox-root mui-gg4vpm">
                                                    <div
                                                        class="HomeSectionSixCard-title HomeSectionSixCard-titleContainer">
                                                        فاطمه طالع
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary ScoreButton-main mui-14udp1n"
                                                        tabindex="0" type="button"><img src="/images/illu/Group.svg"
                                                                                        height="12" width="12"
                                                                                        alt="امتیاز"/><span
                                                            class="MuiBox-root mui-13rkjf1">5 از 5</span></button>
                                                </div>
                                                <div
                                                    class="HomeSectionSixCard-date HomeSectionSixCard-titleContainerTwo MuiBox-root mui-cdjry9">
                                                    <span class="MuiBox-root mui-10kvvmn">1 روز پیش<!-- --> |</span><a
                                                        href="/water-plumbing-sewerage"><span
                                                            class="MuiBox-root mui-3usy1w">لوله کشی آب و ساختمان</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="HomeSectionSixCard-date MuiBox-root mui-1ogakd7"><p
                                                class="MuiTypography-root MuiTypography-body1 HomeSectionSixCard-messageText mui-vf1akx">
                                                می خواستم از شهاب گل محمدی و همکارانش بابت کار تمیز ورفتارشون تشکر کنم
                                                برایشان امتیاز عالی میگذارم.</p>
                                            <div class="MuiBox-root mui-4ofq7z">
                                                <div class="HomeSectionSixCard-audioBar" style="display:none">
                                                    <div id="waveform"></div>
                                                    <div class="controls"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 mui-1yv2x1">
                                    <div class="HomeSectionSixCard-card mui-1m103gq">
                                        <div class="MuiBox-root mui-k008qs">
                                            <div
                                                class="MuiAvatar-root MuiAvatar-rounded HomeSectionSixCard-avatar mui-1k15p1p">
                                                <img alt="profile picture" src="/images/user/user.svg" loading="lazy"
                                                     class="MuiAvatar-img mui-1hy9t21"/></div>
                                            <div class="MuiBox-root mui-i9gxme">
                                                <div class="MuiBox-root mui-gg4vpm">
                                                    <div
                                                        class="HomeSectionSixCard-title HomeSectionSixCard-titleContainer">
                                                        زويا طواف
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary ScoreButton-main mui-14udp1n"
                                                        tabindex="0" type="button"><img src="/images/illu/Group.svg"
                                                                                        height="12" width="12"
                                                                                        alt="امتیاز"/><span
                                                            class="MuiBox-root mui-13rkjf1">5 از 5</span></button>
                                                </div>
                                                <div
                                                    class="HomeSectionSixCard-date HomeSectionSixCard-titleContainerTwo MuiBox-root mui-cdjry9">
                                                    <span class="MuiBox-root mui-10kvvmn">2 روز پیش<!-- --> |</span><a
                                                        href="/eyelashes-extension"><span
                                                            class="MuiBox-root mui-3usy1w">کاشت و اکستنشن مژه</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="HomeSectionSixCard-date MuiBox-root mui-1ogakd7"><p
                                                class="MuiTypography-root MuiTypography-body1 HomeSectionSixCard-messageText mui-vf1akx">
                                                بسيار حرفه اى كار بلد خوش اخلاق و سريع بودن 🙏 </p>
                                            <div class="MuiBox-root mui-4ofq7z">
                                                <div class="HomeSectionSixCard-audioBar" style="display:none">
                                                    <div id="waveform"></div>
                                                    <div class="controls"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 mui-olxh0n">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 mui-eic2kq">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 mui-1yv2x1">
                                    <div class="HomeSectionSixCard-card mui-1m103gq">
                                        <div class="MuiBox-root mui-k008qs">
                                            <div
                                                class="MuiAvatar-root MuiAvatar-rounded HomeSectionSixCard-avatar mui-1k15p1p">
                                                <img alt="profile picture" src="/images/user/user.svg" loading="lazy"
                                                     class="MuiAvatar-img mui-1hy9t21"/></div>
                                            <div class="MuiBox-root mui-i9gxme">
                                                <div class="MuiBox-root mui-gg4vpm">
                                                    <div
                                                        class="HomeSectionSixCard-title HomeSectionSixCard-titleContainer">
                                                        حمیده امیرلو
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary ScoreButton-main mui-14udp1n"
                                                        tabindex="0" type="button"><img src="/images/illu/Group.svg"
                                                                                        height="12" width="12"
                                                                                        alt="امتیاز"/><span
                                                            class="MuiBox-root mui-13rkjf1">5 از 5</span></button>
                                                </div>
                                                <div
                                                    class="HomeSectionSixCard-date HomeSectionSixCard-titleContainerTwo MuiBox-root mui-cdjry9">
                                                    <span class="MuiBox-root mui-10kvvmn">2 روز پیش<!-- --> |</span><a
                                                        href="/house-cleaning"><span class="MuiBox-root mui-3usy1w">نظافت منزل و محل کار(آقا)</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="HomeSectionSixCard-date MuiBox-root mui-1ogakd7"><p
                                                class="MuiTypography-root MuiTypography-body1 HomeSectionSixCard-messageText mui-vf1akx">
                                                خیلی کارشان را عالی و تمیز و به موقع انجام دادند و در یک کلام عالی بودند
                                                حتما پیشنهاد میکنم </p>
                                            <div class="MuiBox-root mui-4ofq7z">
                                                <div class="HomeSectionSixCard-audioBar" style="display:none">
                                                    <div id="waveform"></div>
                                                    <div class="controls"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 mui-1yv2x1">
                                    <div class="HomeSectionSixCard-card mui-1m103gq">
                                        <div class="MuiBox-root mui-k008qs">
                                            <div
                                                class="MuiAvatar-root MuiAvatar-rounded HomeSectionSixCard-avatar mui-1k15p1p">
                                                <img alt="profile picture" src="/images/user/user.svg" loading="lazy"
                                                     class="MuiAvatar-img mui-1hy9t21"/></div>
                                            <div class="MuiBox-root mui-i9gxme">
                                                <div class="MuiBox-root mui-gg4vpm">
                                                    <div
                                                        class="HomeSectionSixCard-title HomeSectionSixCard-titleContainer">
                                                        فرساد کمال خانی
                                                    </div>
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorPrimary ScoreButton-main mui-14udp1n"
                                                        tabindex="0" type="button"><img src="/images/illu/Group.svg"
                                                                                        height="12" width="12"
                                                                                        alt="امتیاز"/><span
                                                            class="MuiBox-root mui-13rkjf1">5 از 5</span></button>
                                                </div>
                                                <div
                                                    class="HomeSectionSixCard-date HomeSectionSixCard-titleContainerTwo MuiBox-root mui-cdjry9">
                                                    <span class="MuiBox-root mui-10kvvmn">4 روز پیش<!-- --> |</span><a
                                                        href="/car-starter-repair"><span class="MuiBox-root mui-3usy1w">تعمیر استارت ماشین</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="HomeSectionSixCard-date MuiBox-root mui-1ogakd7"><p
                                                class="MuiTypography-root MuiTypography-body1 HomeSectionSixCard-messageText mui-vf1akx">
                                                درود، بسیار محترم و منصف و با تخصص و وقت شناس ، ایران به آدم های بیشتری
                                                مثل ایشون نیاز داره</p>
                                            <div class="MuiBox-root mui-4ofq7z">
                                                <div class="HomeSectionSixCard-audioBar" style="display:none">
                                                    <div id="waveform"></div>
                                                    <div class="controls"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionSeven-main mui-1q7811r">
                    <div class="MuiGrid-root MuiGrid-container mui-1d3bbye">
                        <div
                            class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-5 HomeSectionSeven-topSpace mui-974n8e">
                            <div class="MuiBox-root mui-1nw19kj">
                                <div class="MuiBox-root mui-1vu1wab"><h2
                                        class="MuiTypography-root MuiTypography-h2 HomeApplicationSection-title mui-in5w7a">
                                        چگونه در <span class="HomeApplicationSection-mainTitle">هوم‌سرویز</span> ثبت
                                        سرویس کنم؟</h2>
                                    <p class="MuiTypography-root MuiTypography-body1 HomeApplicationSection-subTitle mui-vf1akx">
                                        هوم‌سرویز این افتخار را دارد که توانسته اعتماد مشتریان را جلب نماید و در سال
                                        ۱۴۰۰ به عنوان برترین سایت از نگاه مردم در جشنواره وب و اپلیکیشن برگزیده شود. شما
                                        هم می‌توانید برای ثبت سرویس پس از جستجوی سرویس مورد نظر و شرح سفارش خود، از بین
                                        متخصصین پیشنهادی هوم‌سرویز، همیاری را انتخاب کنید.</p></div>
                            </div>
                        </div>
                        <div
                            class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-7 HomeSectionSeven-rightArea mui-1vzndxm">
                            <div class="HomeApplicationSteps-container mui-feb5ku">
                                <div class="HomeApplicationSteps-steps">
                                    <div class="HomeApplicationSteps-line"></div>
                                    <div class="HomeApplicationSteps-step HomeApplicationSteps-activeStep">
                                        <div class="HomeApplicationSteps-imageContainer"></div>
                                        <div class="HomeApplicationSteps-label MuiBox-root mui-xi606m">شهر و خدمات مورد
                                            نظر خودت را انتخاب کن!
                                        </div>
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-rightLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="HomeApplicationSteps-step">
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-leftLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                        <div class="HomeApplicationSteps-imageContainer"></div>
                                        <div class="HomeApplicationSteps-label MuiBox-root mui-xi606m">قیمت خدمات را چک
                                            کن و به سوالات جواب بده
                                        </div>
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-rightLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="HomeApplicationSteps-step">
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-leftLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                        <div class="HomeApplicationSteps-imageContainer"></div>
                                        <div class="HomeApplicationSteps-label MuiBox-root mui-xi606m">همیار مورد نظر
                                            خود را انتخاب کن
                                        </div>
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-rightLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="HomeApplicationSteps-step">
                                        <div class="HomeApplicationSteps-line HomeApplicationSteps-leftLine">
                                            <svg width="30" height="4" viewBox="0 0 30 4" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <line x1="30" y1="2" x2="3.26378e-07" y2="2.00001" stroke-width="4"
                                                      stroke-dasharray="8 8"
                                                      class="HomeApplicationSteps-lineColor"></line>
                                            </svg>
                                        </div>
                                        <div class="HomeApplicationSteps-imageContainer"></div>
                                        <div class="HomeApplicationSteps-label MuiBox-root mui-xi606m">بعد از برآورد
                                            هزینه، همیار ما در کنار شماست
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionEight-main mui-5texnx">
                    <div
                        class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-10 HomeSectionEight-flexDirWrapper mui-btgtqy">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-7 mui-q07vy">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 mui-1alyych">
                                <div class="MuiBox-root mui-1enlyf5"><img width="100%" height="154px" loading="lazy"
                                                                          class="HomeSectionEight-image"
                                                                          src="/images/home-page/WhyHomeServize.svg"
                                                                          alt="WhyHomeServize"/>
                                    <div class="MuiGrid-root MuiGrid-container HomeSectionEight-topSpace mui-8rnkcc"><h2
                                            class="MuiTypography-root MuiTypography-h2 HomeSectionEight-titles HomeSectionEight-titlesSpace mui-in5w7a">
                                            گستردگی<!-- --> <!-- -->خدمات</h2>
                                        <h2 class="MuiTypography-root MuiTypography-h2 HomeSectionEight-titles HomeSectionEight-titlesSpace mui-in5w7a">
                                            مرجع ارایه<!-- --> <!-- -->قیمت سرویس</h2>
                                        <h2 class="MuiTypography-root MuiTypography-h2 HomeSectionEight-titles mui-in5w7a">
                                            همیاران اعتبار<!-- --> <!-- -->سنجی شده</h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-5 mui-13xwzyh">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 mui-i07arl"><h3
                                    class="MuiTypography-root MuiTypography-h3 HomeSectionEight-title mui-142xmvw">چرا
                                    <span class="HomeSectionEight-mainTitle">هوم‌سرویز</span>؟</h3></div>
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 mui-i07arl"><p
                                    class="HomeSectionEight-par MuiBox-root mui-0">هوم‌سرویز یک حلقه ارتباطی مناسب و
                                    مورد اطمینان بین مشتریان و متخصصین متعهد و حرفه‌ای است. در هوم‌سرویز هر شخصی
                                    می‌تواند برای انجام کارهای مورد نیاز خود، افراد مطمئن، معتمد و توانمند را پیدا کند.
                                    از سوی دیگر بستری برای افراد و سرویس‌دهنده‌ها فراهم آمده است تا خدمات خود را به
                                    بهترین شکل معرفی و عرضه کنند.</p></div>
                        </div>
                    </div>
                </section>
                <section class="MuiContainer-root MuiContainer-maxWidthLg HomeSectionFive-main mui-swn9an">
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 mui-1qhzn9r">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-4 mui-ccinad">
                            <div class="HomeSectionFive-cardGreen HomeSectionFive-sabz"><span
                                    class="MuiTypography-root MuiTypography-span fs-xl font-weight-bold fs-xxl font-weight-extrabold mui-11nhzn5">شما هم تخصص خودتون را با ما به اشتراک بگذارید</span><a
                                    class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedInherit MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorInherit MuiButton-root MuiButton-outlined MuiButton-outlinedInherit MuiButton-sizeSmall MuiButton-outlinedSizeSmall MuiButton-colorInherit HomeSectionFive-btn mui-qgo0ug"
                                    tabindex="0" href="/hiring-hamyar">همیار هوم‌سرویز شوید</a></div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-8 mui-a1dga0"></div>
                    </div>
                </section>
            </div>
            <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Organization",
                    "name": "هوم سرویز",
                    "alternateName": "homeservize,home service,هوم سرویز",
                    "legalName": "همیار خلاق ویرا",
                    "url": "https://homeservize.com",
                    "logo": "https://homeservize.com/blog1/wp-content/uploads/2022/01/logo-new-3.png",
                    "description": "هوم سرویز به‌ عنوان یک بازار آنلاین خدمات طراحی شده است که در آن، هر شخصی بتواند برای انجام کارهای موردنیازش، افراد مطمئن، معتمد و توانمند را پیدا کند. از سوی دیگر بستری برای افراد و سرویس‌دهنده‌ها فراهم آمده است تا خدمات خود را به بهترین شکل معرفی و عرضه کنند. هوم سرویز یک حلقه ارتباطی مناسب و مورد اطمینان بین مشتریان و متخصصان متعهد و حرفه ای است.",
                    "sameAs": [
                        "https://www.facebook.com/homeservize/",
                        "https://twitter.com/homeservize",
                        "https://www.instagram.com/homeservize/",
                        "https://www.linkedin.com/company/homeservize/",
                        "https://www.pinterest.com/homeservize/",
                        "https://play.google.com/store/apps/details?id=com.homeservize.customerapp",
                        "https://play.google.com/store/apps/details?id=com.homeservize.hamyarapp",
                        "https://cafebazaar.ir/app/com.homeservize.customerapp",
                        "https://cafebazaar.ir/app/com.homeservize.hamyarapp"
                    ],
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "تهران - بلوار کشاورز - جنب خیابان 16 آذر - پلاک 78",
                        "addressLocality": "Tehran",
                        "addressCountry": "Iran",
                        "postalCode": "1417994416"
                    },
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "+982191001332",
                        "contactType": "customer service",
                        "areaServed": "IR",
                        "availableLanguage": "Persian",
                        "email": "info@homeservize.com",
                        "hoursAvailable" : [
                        "Sa,Su,Mo,Tu,We,Th 08:00-21:00",
                        "Fr 09:00-17:00"
                        ]
                    }
                }
            </script>
            <script type="application/ld+json">
                {
                  "@context": "https://schema.org/",
                  "@type": "WebSite",
                  "name": "هوم سرویز، همیار شماییم تا پایان سرویس",
                  "url": "https://homeservize.com/",
                  "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://homeservize.com/service/all/search?q={search_term_string}",
                    "query-input": "required name=search_term_string"
                  }
                }
            </script>
        </main>
        <footer class="DesktopFooter-main mui-yd8dkl">
            <div class="MuiContainer-root MuiContainer-maxWidthLg mui-18aqaxg">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-8 mui-1o7ao1w">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 mui-m5cq9i">
                        <div class="MuiBox-root mui-1l4w6pd">
                            <div class="DesktopFooter-cP MuiBox-root mui-15tl8q3"><img
                                    src="/images/home-page/etehadie.svg" alt="samandehi" height="78" width="56"
                                    rel="nofollow" loading="lazy"/></div>
                            <div class="MuiBox-root mui-15tl8q3"><a referrerPolicy="origin" target="_blank"
                                                                    rel="nofollow"
                                                                    href="https://trustseal.enamad.ir/?id=217534&amp;Code=E8Ln6t2dObcPFJOBqmiw"><img
                                        loading="lazy" referrerPolicy="origin"
                                        src="https://storage.homeservize.com/images/home-page/enamad.png" alt="enamad"
                                        class="DesktopFooter-cP" id="E8Ln6t2dObcPFJOBqmiw" height="78" width="78"/></a>
                            </div>
                        </div>
                        <div class="MuiBox-root mui-71k2zn">
                            <div class="MuiBox-root mui-uoder"><a aria-label="homeservize in telegram " target="_blank"
                                                                  rel="nofollow" href="https://t.me/HomeServize"><span
                                        class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-telegram DesktopFooter-socialIcon mui-1jgtvd5"
                                        aria-hidden="true"></span></a></div>
                            <div class="MuiBox-root mui-uoder"><a aria-label="homeservize in twitter " target="_blank"
                                                                  rel="nofollow" href="https://twitter.com/HomeServize"><span
                                        class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-twitter DesktopFooter-socialIcon mui-1jgtvd5"
                                        aria-hidden="true"></span></a></div>
                            <div class="MuiBox-root mui-uoder"><a aria-label="homeservize in instagram " target="_blank"
                                                                  rel="nofollow"
                                                                  href="https://www.instagram.com/homeservize/"><span
                                        class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-instagram DesktopFooter-socialIcon mui-1jgtvd5"
                                        aria-hidden="true"></span></a></div>
                            <div class="MuiBox-root mui-uoder"><a aria-label="homeservize in linkedin " target="_blank"
                                                                  rel="nofollow"
                                                                  href="https://www.linkedin.com/company/homeservize"><span
                                        class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-linkedin DesktopFooter-socialIcon mui-1jgtvd5"
                                        aria-hidden="true"></span></a></div>
                            <div class="MuiBox-root mui-uoder"><a aria-label="homeservize in telegram " target="_blank"
                                                                  rel="nofollow"
                                                                  href="https://www.facebook.com/HomeServize/"><span
                                        class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-facebook DesktopFooter-socialIcon mui-1jgtvd5"
                                        aria-hidden="true"></span></a></div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 mui-1i80vye"><p
                            class="MuiTypography-root MuiTypography-body1 fs-lg font-weight-bold mui-vf1akx">تماس با
                            ما</p>
                        <div class="MuiBox-root mui-1umuaj"><span
                                class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-location DesktopFooter-icon mui-1jgtvd5"
                                aria-hidden="true"></span>تهران - بلوار کشاورز - جنب خیابان 16 آذر - پلاک 78
                        </div>
                        <div class="MuiBox-root mui-6mrmej"><span
                                class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium icon-call DesktopFooter-icon mui-1jgtvd5"
                                aria-hidden="true"></span><a href="tel:90002021"><span> 90002021</span></a></div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 mui-m5cq9i"><span
                            class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">هوم‌سرویز</span>
                        <div class="MuiBox-root mui-15g2oxy"><a class="fs-md"
                                                                href="https://homeservize.com/blog1/">بلاگ</a></div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/careers">فرصت‌های شغلی</a></div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/privacy">راهنمای استفاده امن</a>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 mui-m5cq9i"><span
                            class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">مشتریان</span>
                        <div class="MuiBox-root mui-15g2oxy"><a class="fs-md" href="/app-dl">دانلود اپلیکیشن</a></div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/faq">سوالات متداول</a></div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/privacy-policy">شرایط و قوانین</a>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 mui-m5cq9i"><span
                            class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">همیاران</span>
                        <div class="MuiBox-root mui-15g2oxy"><a class="fs-md" href="/hiring-hamyar">استخدام همیار</a>
                        </div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/faq-hamyar">سوالات متداول همیار</a>
                        </div>
                        <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/app-dl-hamyar">دانلود اپلیکیشن
                                همیار</a></div>
                    </div>
                </div>
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-8 DesktopFooter-middleGrid mui-1o7ao1w">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 mui-1i80vye">
                        <div class="MuiBox-root mui-acwcvw"><span
                                class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">خدمات ما</span>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container mui-1d3bbye">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/building-cleaning">نظافت راه
                                        پله و مشاعات</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/dry-cleaning-couch">خشک شویی
                                        مبل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/house-cleaning">نظافت
                                        منزل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md"
                                                                       href="/carpet-cleaning">قالیشویی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/cooler-service">تعمیر کولر
                                        آبی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/air-conditioner-service">تعمیر
                                        کولر گازی و اسپلیت</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/drain-well">لوله بازکنی</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/mosquito-netting-service">توری
                                        پنجره</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/mobile-services">تعمیر
                                        موبایل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/repair-refrigerators">تعمیر
                                        یخچال و فریزر</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md"
                                                                       href="/installation-repair-washing-machine">تعمیر
                                        ماشین لباسشویی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md"
                                                                       href="/package-installation-repair">سرویس و تعمیر
                                        پکیج</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/repair-water-heater">سرویس و
                                        تعمیر آبگرمکن</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/computer-repair">تعمیر
                                        کامپیوتر</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/women-haircut">کوتاهی مو
                                        بانوان</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/face-eyebrow-shaving">اصلاح
                                        صورت و ابرو بانوان</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/nail-implantation">ترمیم و
                                        کاشت ناخن بانوان</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/epilation">اپیلاسیون
                                        بانوان</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 mui-1i80vye">
                        <div class="MuiBox-root mui-acwcvw"><span
                                class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">سرویس‌های پر کاربرد</span>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container mui-1d3bbye">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/spraying">سمپاشی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/carpentry">تعمیر کمد، کابینت
                                        و نجاری</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/wallpaper">نصب کاغذ
                                        دیواری</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/painting">نقاشی ساختمان</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/repair-sofa">تعمیر مبل</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/moving">جابجایی و اسباب
                                        کشی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/welding-forging">جوشکاری</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/phone-wiring-fix">سیم کشی
                                        تلفن و رفع خرابی</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/fixing-roof">رفع نم
                                        ساختمان</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/making-kitchen-cabinets">ساخت
                                        کابینت آشپزخانه</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/making-wall-closet">ساخت کمد
                                        دیواری</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/car-repair">تعمیر خودرو</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/car-battery-replacement">تعویض
                                        باتری خودرو</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/injection">تزریقات در
                                        محل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/physiotherapy">فیزیوتراپی در
                                        منزل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/sampling">آزمایش و نمونه
                                        گیری در محل</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/makeup">آرایشگر در منزل</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/parquet-repair">تعمیر
                                        پارکت</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 mui-1i80vye">
                        <div class="MuiBox-root mui-acwcvw"><span
                                class="MuiTypography-root MuiTypography-p fs-lg font-weight-bold mui-11nhzn5">شهرهای تحت پوشش</span>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container mui-1d3bbye">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/tehran">تهران</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/karaj">کرج</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">قدس</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">شهریار</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">اسلام شهر</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">اندیشه</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">رباط کریم</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">پردیس</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">بومهن</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">چهاردانگه</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service#">دماوند</a></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/mashhad">مشهد</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/shiraz">شیراز</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/isfahan">اصفهان</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/tabriz">تبریز</a>
                                </div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 mui-1mboxa4">
                                <div class="MuiBox-root mui-qslnu8"><a class="fs-md" href="/service/rasht">رشت</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="DesktopFooter-descFont">
                        <div class="ExternalClassCFA643C29EBF4036B8CAAC0737981334"><p></p>
                            <h2>هوم سرویز برند مرجع خدمات</h2>
                            <p style="text-align:justify">هوم‌ سرویز یک شرکت دانش بنیان است که از سال 1395 فعالیت خود را
                                به عنوان <strong>اولین پلتفرم خدمات در محل</strong> در کشور آغاز کرده است، این <strong>پلتفرم
                                    خدماتی</strong> به شکلی طراحی و پیاده سازی شده است که در آن هر شخصی به سادگی بتواند
                                برای انجام کارهای موردنیازش، افراد مطمئن، معتمد و توانمند را پیدا کند. به طور مثال شما
                                اگر به دنبال <strong>نظافتچی</strong>، <a
                                    href="https://homeservize.com/electrical-wiring">برقکار</a>، لوله کش سیار، بنای
                                استادکار و یا <strong>نقاش خوب</strong> و همینطور <strong>نجار</strong> حرفه ای یا
                                <strong>تعمیرکار لوازم خانگی</strong> و <strong>مکانیک سیار</strong> هستید و یا نیاز به
                                پزشک متخصص و یا <strong>آرایشگر در منزل</strong> دارید و حتی اگر نیاز به <strong>خدمات
                                    دامپزشکی</strong> در منزل دارید، کافیست از طریق سایت و یا اپلکیشن هوم سرویز سفارش
                                خود را به راحتی و با اطمینان ثبت کنید تا به متخصصین تایید صلاحیت شده هوم سرویز دسترسی
                                پیدا کنید. خدمات هوم سرویز در کلیه ساعات شبانه روز و در محل شما قابل ارائه خواهد بود.
                            </p>
                            <p style="text-align:justify">از سوی دیگر هوم سرویز بستری برای افراد و سرویس‌دهنده‌های حرفه
                                ای فراهم آورده است تا خدمات خود را به بهترین شکل معرفی و عرضه کنند. هوم‌سرویز یک حلقه
                                ارتباطی مناسب و مورد اطمینان بین مشتریان و تکنسین های متعهد و حرفه‌ای است.</p>
                            <h3>چرا هوم سرویز بهترین اپلیکیشن خدماتی از نگاه مشتریان است؟</h3>
                            <p style="text-align:justify">هوم سرویز (<strong>home servize</strong>) به منظور ایجاد تجربه
                                خوب برای شما مشتریان ضمن ایجاد بسترهای ارتباطی مناسب از طریق پلتفرم <strong>خدمات در
                                    محل</strong> هوم سرویز تمام تلاش خود را در سایر بخش ها نظیر پشتیبانی و عملیات نموده
                                است تا به بهترین شکل ممکن خدمات همیاران هوم سرویز را در اختیار شما عزیزان قرار دهد. شعار
                                هوم سرویز &quot;همیار شماییم تا پایان سرویس&quot; خود گویای رسالت و هدف هوم سرویز در جلب
                                رضایت حداکثری شما عزیزان می باشد. هوم­سرویز ضمن دریافت تقدیرنامه ها، جوایز و تندس های
                                مختلف طی این سال ها، به جلب رضایت بیش از 93 درصدی از شما مشتریان عزیز افتخار می کند.
                                اعتقاد داریم در این مسیر سخت و طولانی برای سازماندهی بازار خدمات کشور تنها چیزی که
                                ماندگار بوده و می تواند در مسیر رشد هوم سرویز لذت بخش باشد رضایت حداکثری مشتریان عزیز می
                                باشد. لذا پر تلاش و قوی تر از همیشه همیار شما و در کنار شما خواهیم بود. در ادامه به برخی
                                از نقاط تمایز و ویژگی های هوم سرویز که باعث تفاوت های چشمگیر با سایر <strong>اپلیکیشن
                                    های خدماتی</strong> شده است، اشاره خواهیم کرد:</p>
                            <ul>
                                <li>سهولت دسترسی به متخصصین و افراد حرفه ای در نزدیکی شما</li>
                                <li>دسترسی راحت به تعرفه قیمت خدمات</li>
                                <li>احراز هویت، سکونت و صلاحیت کلیه همیاران و متخصصین هوم سرویز</li>
                                <li>امکان انتخاب متخصص مورد نظر بر اساس اطلاعات دقیق، سوابق ایشان و نظرات مشتریان قبلی
                                </li>
                                <li>امنیت، اعتماد و احترام در ارایه خدمات</li>
                                <li>رتبه بندی همیاران</li>
                                <li>پشتیبانی خدمات</li>
                            </ul>
                            <h3>هوم سرویس (HomeService) یا هوم سرویز (HomeServize):</h3>
                            <p style="text-align:justify">مشتریان و کاربران هوم سرویز، با اسامی دیگری نیز هوم سرویز را
                                می شناسند نظیر <strong>هوم سرویس</strong> (<strong>Home Service</strong>) یا <strong>هوم
                                    سرویسز</strong> (<strong>Home services</strong>) که در حقیقت تمامی این نام ها در
                                ایران با مفهوم هوم سرویز و در قالب برند هوم سرویز شناخته شده است. </p>
                            <p style="text-align:justify">برند هوم سرویز برگرفته شده از سه عبارت هست، هوم (home)، سرویس
                                (Service) و تمایز، با تلفیق این سه عبارت برند هوم سرویز شکل گرفته است. هدف از این عبارت
                                ارایه خدمات متمایز به مشتریان و همیاران هست.</p>
                            <h2>خدمات در محل هوم سرویز</h2>
                            <p style="text-align:justify">هوم‌سرویز با بیش از 500 نوع خدمات در ۱۲ گروه مختلف در شهرهای
                                تهران، کرج، مشهد، اصفهان، شیراز، تبریز و رشت در حال ارائه خدمات در محل می باشد و به
                                تازگی فعالیت خود را در شهرهای قزوین، اراک، اهواز، کرمانشاه، ارومیه، قم، همدان، یزد،
                                ساری، بابل، گرگان، بندر عباس، زنجان، گرگان، زاهدان، بجنورد، آمل، نیشابور، دزفول،
                                قائمشهر، سبزوار، زابل و سایر شهرهای کشور عزیزمان ایران آغاز نموده است. بنابراین شما اگر
                                در جستجوی هر نوع خدماتی هستید به جای پرس و جو از دوستان و آشنایان و یا جستجو در در دیوار
                                محله ها و یا سرچ در گوگل و یا سپردن کار به شرکت های خدماتی نامعتبر، کافیست <strong>اپلیکیشن
                                    هوم سرویس</strong> را در گوشی خود داشته باشید تا در سریعترین زمان ممکن به تکنسین،
                                متخصص، استادکار، آچار به دست و یا بهتر بگوییم همیاران حرفه ای هوم سرویز دسترسی داشته
                                باشید. در ادامه به برخی از خدمات محبوب و پر استفاده هوم سرویز اشاره می کنیم:</p>
                            <p style="text-align:justify">نیروهای متخصص و متعهد همکار با هوم سرویز که اصطلاحا <strong>همیار
                                    هوم سرویز</strong> نامگذاری شده اند، در زمینه های نظافت منزل و <strong>نظافت راه
                                    پله</strong> و مشاعات ساختمان، خدمات شستشوی فرش با <strong>بهترین قالیشویی</strong>،
                                خشک شویی مبل و موکت شویی در محل، <a href="https://homeservize.com/facade-washing">نماشویی</a>
                                و کفسابی و <strong>خدمات مهمانداری</strong> و <a
                                    href="https://homeservize.com/wedding-services">تشریفات مجالس</a> و مهمانی ها و
                                خدمات عکاسی و فیلمبرداری در زیر مجموعه <strong>خدمات نظافت</strong> و پذیرایی آماده
                                ارایه خدمات هستند. </p>
                            <p style="text-align:justify">همچنین همیاران فنی هوم سرویز در زمینه <strong>تاسیسات
                                    ساختمان</strong> (لوله کشی آب و فاضلاب، لوله بازکنی، نصب و تعمیر شیرآلات ساختمان،
                                نصب و تعمیرات پکیج، آبگرمکن و شوفاژ و کلیه تعمیرات موتورخانه، سرویس کولر آبی، سرویس و <a
                                    href="https://homeservize.com/charging-gas-cooler">شارژ گاز اسپلیت</a> و سرویس و
                                تعمیر کولر گازی و ...) و همچنین <strong>خدمات برقکاری</strong> (برقکاری ساختمان و رفع
                                اتصالی، خدمات سیم کشی تلفن، نصب و تعمیر آیفون، نصب و <a
                                    href="https://homeservize.com/cctv-repair">تعمیر دوبین مدار بسته</a> و تعمیرات درب
                                اتوماتیک) همچنین خدمات مربوط به <a
                                    href="https://homeservize.com/reconstruction-decoration">بازسازی خانه</a> و
                                دکوراسیون (نقاشی ساختمان، نصب و تعمیرات پارکت و لمینت، نصب کاغذ دیواری) و خدمات بنایی
                                (کاشیکاری، سنگ کاری ساختمان، رفع نم ساختمان و گچ کاری و گچ بری ساختمان)، خدمات نجاری
                                سیار و ساخت کابینت آشپزخانه، ساخت کمد دیواری، <a
                                    href="https://homeservize.com/wooden-shoe-rack">ساخت جاکفشی</a> و تعمیر مبل در محل و
                                رنگکاری و <a href="https://homeservize.com/furniture-upholstery">رویه کوبی مبل</a> و
                                ساخت انواع سازه آلومنیومی (ساخت درب و پنجره آلومنیومی، درب و پنجره یو پی وی سی و ساخت
                                پنجره دوجداره، نصب توری پنجره) و خدمات جوشکاری سیار و آهنگری نظیر <a
                                    href="https://homeservize.com/window-fence">ساخت حفاظ آهنی پنجره</a> و حفاظ شاخ
                                گوزنی، ساخت درب آکاردئونی فلزی و خدمات اتوبار، باربری و <strong>اسباب کشی</strong> توسط
                                <strong>بهترین شرکت های باربری</strong> و حمل و نقل و همیاران حرفه ای انجام می شود.
                                همچنین صدها خدمات دیگر در هوم سرویز تحت عنوان خدمات فنی توسط <strong>همیاران متخصص هوم
                                    سرویز</strong> انجام می شود.</p>
                            <p style="text-align:justify">در <strong>تعمیرگاه لوازم خانگی</strong> هوم سرویز تعمیرات
                                کلیه لوازم خانگی مانند تعمیر تلویزیون، <a
                                    href="https://homeservize.com/dishwasher-installation-repair">تعمیر ماشین
                                    ظرفشویی</a>، تعمیر آبسردکن، تعمیر یخچال فریزر، تعمیر ماشین لباسشویی، تعمیر تلویزیون
                                و تعمیر ریش تراش و تعمیر انواع لوازم برقی آشپزخانه ریز و درشت و همچنین تعمیر انواع لوازم
                                ورزشی نظیر <a href="https://homeservize.com/treadmill-repair">تعمیر تردمیل</a>،
                                الپتیکال، دوچرخه ثابت با قطعات دارای گارانتی و در محل توسط همیاران متخصص و حرفه ای هوم
                                سرویز عیب یابی و تعمیر می شوند و دیگر هیچ نگرانی از بابت انتقال لوازم به تعمیرگاه تخصصی
                                و مهارت متخصصین نخواهید داشت. </p>
                            <p style="text-align:justify">از دیگر خدمات هوم سرویز می توان به خدمات سمپاشی ساختمان،
                                سمپاشی رستوران و انواع <a href="https://homeservize.com/flower-plant-care">خدمات
                                    باغبانی</a>، هرس درختان و محوطه سازی اشاره کرد.</p>
                            <p style="text-align:justify">تعمیر خودرو در محل توسط مکانیک سیار، کارواش در محل، <a
                                    href="https://homeservize.com/car-ceramic-coating">سرامیک خودرو</a> و نصب شیشه دودی
                                در محل و همچنین <a href="https://homeservize.com/motorcycle-repair">تعمیر موتورسیکلت در
                                    محل</a> و تعمیر ماشین شارژی کودک نیز از خدمات محبوب هوم سرویز در بخش خودرویی محسوب
                                می شوند.</p>
                            <p style="text-align:justify">خدمات پزشکی و پرستاری هوم سرویز نظیر <a
                                    href="https://homeservize.com/child-care">پرستار کودک</a>، پرستاری از بیمار و
                                سالمند، تزریقات در محل، پانسمان در محل، بخیه زدن، <a
                                    href="https://homeservize.com/sonography">انجام سونوگرافی</a> در منزل و رادیولوژی،
                                آزمایش آنلاین و نمونه گیری خون و چکاپ در منزل و همچنین اجاره تجهیزات پزشکی از خدمات پر
                                استفاده هوم سرویز محسوب می شوند.</p>
                            <p style="text-align:justify">تعمیر کامپیوتر و تعمیرات موبایل، تعمیرات پرینتر و <a
                                    href="https://homeservize.com/charging-cartridges">شارژ کارتریج</a>، <a
                                    href="https://homeservize.com/network-services">خدمات شبکه</a> و امنیت، تعمیر انواع
                                کنسول بازی نظیر پلی استیشن و ایکس باکس و همچنین تعمیر دستگاه کارتخوان فوری از خدمات
                                محبوب هوم سرویز هستند.</p>
                            <p style="text-align:justify">خدمات زیبایی و آرایشگر در منزل نظیر اپیلاسیون در منزل، خدمات
                                ناخن، کوتاهی کردن مو، <a href="https://homeservize.com/hair-braiding">بافت مو در
                                    منزل</a>، اصلاح صورت و ابرو بانوان، <a
                                    href="https://homeservize.com/hair-extension">اکستنشن مو در منزل</a> و اصلاح سر
                                آقایان در منزل از پرطرفدارترین خدمات هوم سرویز محسوب می شوند.​</p>
                            <p style="text-align:justify">و اما خدمات جدید هوم سرویز که در گروه خدمات دامپزشکی شامل
                                <strong>ویزیت دامپزشک</strong> در منزل، عقیم سازی حیوانات، شستشو و آرایش حیوانات خانگی و
                                ... ارائه می شود. از دیگر خدمات جدید هوم سرویز می توان به <strong>خدمات آموزش تحصیلی و
                                    مهارتی</strong> نظیر آموزش موسیقی، آموزش زبان های خارجی، آموزش دروس تحصیلی، آموزش
                                مهارت های فنی و مهارتی اشاره نمود. دیگر خدماتی که به تازگی در هوم سرویز ایجاد شده است می
                                توان به <strong>خدمات چاپ و تبلیغات</strong> که عمدتا مخصوص شرکت ها و سازمان ها می شود
                                اشاره نموده که شامل خدمات <strong>چاپ دیجیتال</strong>، چاپ لیبل، بروشور، تراکت، پوستر و
                                چاپ سررسید و ... می باشد.</p>
                            <p style="text-align:justify">ارائه <strong>خدمات روستایی</strong> و <strong>کار در
                                    منزل</strong> نیز از جمله خدمات جدید هوم سرویز هستند که با هدف حمایت از اقشار ضعیف و
                                شریف جامعه و ایجاد هم افزایی در راستای کارآفرینی و بهبود فرهنگ خدمات رسانی ایجاد شده
                                اند.</p>
                            <p style="text-align:justify">تنها فاصله شما با دریافت خدمات، ثبت سفارش رایگان و مذاکره با
                                همیاران متخصص هوم سرویز خواهد بود. به راحتی می توانید سفارش خود را ثبت نموده و با بهترین
                                و کارآزموده ترین افراد در زمینه سفارش خود ارتباط برقرار کنید و از نرخ های رقابتی و تعرفه
                                <strong>قیمت خدمات</strong> مطلع شوید. پشتیبانی هوم سرویز از ابتدای ثبت سفارش تا انتهای
                                کار پشتیبان شما خواهند بود.</p>
                            <p>همیار شماییم تا پایان سرویس​​...​<br/><br/></p></div>
                    </div>
                </div>
                <div class="DesktopFooter-imageContainerFooter MuiBox-root mui-dvxtzn"><img height="30" width="30"
                                                                                            src="/images/logos/Frame-1.svg"
                                                                                            alt="logo" loading="lazy"/>
                    <div class="fs-sm MuiBox-root mui-1k1y5du">هوم‌سرویز، برند مرجع خدمات<br/>HomeServize © <!-- -->2024
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script id="__NEXT_DATA__" type="application/json">
    {"props":{"pageProps":{"meta":{"title":"هوم سرویز، مرجع آنلاین خدمات و تعمیرات در محل","description":"اولین و بزرگترین سایت و اپلیکیشن خدمات در محل: نظافت، پذیرایی، برقکاری، تاسیسات، اسباب کشی، پزشکی، آرایشگری، دامپزشکی، تعمیر لوازم خانگی، کارواش، تعمیرات خودرو و ...","keywords":"","canonical":"https://homeservize.com/","site_Name":"هوم سرویز | Home Servize","custom_MetaTags":"\u003clink rel=\"preload\" as=\"image\" crossorigin=\"anonymous\" href=\"https://s3.homeservize.com/images/home-page/slider_d2.png\"/\u003e","custom_Snippets_EndOfBody":"\u003cscript type=\"application/ld+json\"\u003e\r\n            {\r\n                \"@context\": \"https://schema.org\",\r\n                \"@type\": \"Organization\",\r\n                \"name\": \"هوم سرویز\",\r\n                \"alternateName\": \"homeservize,home service,هوم سرویز\",\r\n                \"legalName\": \"همیار خلاق ویرا\",\r\n                \"url\": \"https://homeservize.com\",\r\n                \"logo\": \"https://homeservize.com/blog1/wp-content/uploads/2022/01/logo-new-3.png\",\r\n                \"description\": \"هوم سرویز به‌ عنوان یک بازار آنلاین خدمات طراحی شده است که در آن، هر شخصی بتواند برای انجام کارهای موردنیازش، افراد مطمئن، معتمد و توانمند را پیدا کند. از سوی دیگر بستری برای افراد و سرویس‌دهنده‌ها فراهم آمده است تا خدمات خود را به بهترین شکل معرفی و عرضه کنند. هوم سرویز یک حلقه ارتباطی مناسب و مورد اطمینان بین مشتریان و متخصصان متعهد و حرفه ای است.\",\r\n                \"sameAs\": [\r\n                    \"https://www.facebook.com/homeservize/\",\r\n                    \"https://twitter.com/homeservize\",\r\n                    \"https://www.instagram.com/homeservize/\",\r\n                    \"https://www.linkedin.com/company/homeservize/\",\r\n                    \"https://www.pinterest.com/homeservize/\",      \r\n                    \"https://play.google.com/store/apps/details?id=com.homeservize.customerapp\",\r\n                    \"https://play.google.com/store/apps/details?id=com.homeservize.hamyarapp\",\r\n                    \"https://cafebazaar.ir/app/com.homeservize.customerapp\",\r\n                    \"https://cafebazaar.ir/app/com.homeservize.hamyarapp\"\r\n                ],\r\n                \"address\": {\r\n                    \"@type\": \"PostalAddress\",\r\n                    \"streetAddress\": \"تهران - بلوار کشاورز - جنب خیابان 16 آذر - پلاک 78\",\r\n                    \"addressLocality\": \"Tehran\",\r\n                    \"addressCountry\": \"Iran\",\r\n                    \"postalCode\": \"1417994416\"\r\n                },\r\n                \"contactPoint\": {\r\n                    \"@type\": \"ContactPoint\",\r\n                    \"telephone\": \"+982191001332\",\r\n                    \"contactType\": \"customer service\",\r\n                    \"areaServed\": \"IR\",\r\n                    \"availableLanguage\": \"Persian\",\r\n                    \"email\": \"info@homeservize.com\",\r\n                    \"hoursAvailable\" : [\r\n                    \"Sa,Su,Mo,Tu,We,Th 08:00-21:00\",\r\n                    \"Fr 09:00-17:00\"\r\n                    ]\r\n                }\r\n            }\r\n            \u003c/script\u003e\n\u003cscript type=\"application/ld+json\"\u003e\r\n            {\r\n              \"@context\": \"https://schema.org/\",\r\n              \"@type\": \"WebSite\",\r\n              \"name\": \"هوم سرویز، همیار شماییم تا پایان سرویس\",\r\n              \"url\": \"https://homeservize.com/\",\r\n              \"potentialAction\": {\r\n                \"@type\": \"SearchAction\",\r\n                \"target\": \"https://homeservize.com/service/all/search?q={search_term_string}\",\r\n                \"query-input\": \"required name=search_term_string\"\r\n              }\r\n            }\r\n            \u003c/script\u003e\n"},"dehydratedState":{"mutations":[],"queries":[{"state":{"data":{"requestDateString":"2024/09/25 14:08","requestId":null,"requestDate":"2024-09-25T14:08:46.1217126+03:30","hasError":false,"message":null,"resultData":[{"categoryName":"suggestion","categoryTitle":"خدمات پیشنهادی","isSuggested":true,"serviceList":[{"serviceId":6,"isNewService":null,"serviceTitle":"قیمت نظافت منزل","serviceName":"house-cleaning","servicePrice":"قیمت از 580,000 الی 870,000 تومان","serviceImage":"/service/images/6/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":79,"isNewService":null,"serviceTitle":"قیمت مراقبت گل و گیاه","serviceName":"flower-plant-care","servicePrice":"قیمت از 850,000 الی 1,500,000 تومان","serviceImage":"/service/images/79/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":90,"isNewService":null,"serviceTitle":"قیمت سرویس و تعمیر پکیج","serviceName":"package-installation-repair","servicePrice":"قیمت از 500,000 الی 1,500,000 تومان","serviceImage":"/service/images/90/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":125,"isNewService":null,"serviceTitle":"قیمت تعمیر کامپیوتر","serviceName":"computer-repair","servicePrice":"قیمت از 400,000 الی 1,000,000 تومان","serviceImage":"/service/images/125/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":20},{"categoryName":"cleaning","categoryTitle":"نظافت و پذیرایی","isSuggested":false,"serviceList":[{"serviceId":5,"isNewService":null,"serviceTitle":"قیمت خشک شویی مبل","serviceName":"dry-cleaning-couch","servicePrice":"قیمت از 600,000 الی 1,200,000 تومان","serviceImage":"/service/images/5/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":36,"isNewService":null,"serviceTitle":"قیمت قالیشویی","serviceName":"carpet-cleaning","servicePrice":"قیمت از 900,000 الی 1,868,000 تومان","serviceImage":"/service/images/36/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":3,"isNewService":null,"serviceTitle":"قیمت نظافت راه پله و مشاعات","serviceName":"building-cleaning","servicePrice":"قیمت از 450,000 الی 560,000 تومان","serviceImage":"/service/images/3/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":396,"isNewService":null,"serviceTitle":"قیمت شستشوی تشک","serviceName":"mattress-cleaning","servicePrice":"قیمت از 500,000 الی 700,000 تومان","serviceImage":"/service/images/396/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":7},{"categoryName":"plumbing","categoryTitle":"لوله کشی و تاسیسات","isSuggested":false,"serviceList":[{"serviceId":90,"isNewService":null,"serviceTitle":"قیمت سرویس و تعمیر پکیج","serviceName":"package-installation-repair","servicePrice":"قیمت از 500,000 الی 1,500,000 تومان","serviceImage":"/service/images/90/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":44,"isNewService":null,"serviceTitle":"قیمت لوله بازکنی","serviceName":"drain-well","servicePrice":"قیمت از 600,000 الی 1,200,000 تومان","serviceImage":"/service/images/44/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":91,"isNewService":null,"serviceTitle":"قیمت سرویس و تعمیر آبگرمکن","serviceName":"repair-water-heater","servicePrice":"قیمت از 350,000 الی 850,000 تومان","serviceImage":"/service/images/91/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":43,"isNewService":null,"serviceTitle":"قیمت تعمیر کولر گازی و اسپلیت","serviceName":"air-conditioner-service","servicePrice":"قیمت از 1,000,000 الی 2,600,000 تومان","serviceImage":"/service/images/43/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":8},{"categoryName":"electricity","categoryTitle":"برقکاری ساختمان","isSuggested":false,"serviceList":[{"serviceId":41,"isNewService":null,"serviceTitle":"قیمت نصب و تعمیر درب اتوماتیک","serviceName":"automatic-door-repair","servicePrice":"قیمت از 1,200,000 الی 1,500,000 تومان","serviceImage":"/service/images/41/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":39,"isNewService":null,"serviceTitle":"قیمت تعمیر آیفون تصویری و صوتی","serviceName":"repair-videodoorphone","servicePrice":"قیمت از 300,000 الی 770,000 تومان","serviceImage":"/service/images/39/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":104,"isNewService":null,"serviceTitle":"قیمت سیم کشی تلفن و رفع خرابی","serviceName":"phone-wiring-fix","servicePrice":"قیمت از 300,000 الی 600,000 تومان","serviceImage":"/service/images/104/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":103,"isNewService":null,"serviceTitle":"قیمت برقکاری","serviceName":"electrical-wiring","servicePrice":"قیمت از 500,000 الی 1,600,000 تومان","serviceImage":"/service/images/103/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":9},{"categoryName":"home-appliances","categoryTitle":"لوازم خانگی","isSuggested":false,"serviceList":[{"serviceId":82,"isNewService":null,"serviceTitle":"قیمت تعمیر تلویزیون","serviceName":"tv-repair","servicePrice":"قیمت از 1,600,000 الی 2,900,000 تومان","serviceImage":"/service/images/82/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":88,"isNewService":null,"serviceTitle":"قیمت تعمیر اجاق گاز","serviceName":"repair-oven-stove","servicePrice":"قیمت از 560,000 الی 1,160,000 تومان","serviceImage":"/service/images/88/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":78,"isNewService":null,"serviceTitle":"قیمت تعمیر یخچال و فریزر","serviceName":"repair-refrigerators","servicePrice":"قیمت از 400,000 الی 1,930,000 تومان","serviceImage":"/service/images/78/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":80,"isNewService":null,"serviceTitle":"قیمت تعمیر ماشین لباسشویی","serviceName":"installation-repair-washing-machine","servicePrice":"قیمت از 500,000 الی 1,610,000 تومان","serviceImage":"/service/images/80/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":10},{"categoryName":"decoration","categoryTitle":"بنایی و دکوراسیون","isSuggested":false,"serviceList":[{"serviceId":22,"isNewService":null,"serviceTitle":"قیمت بازسازی و دکوراسیون","serviceName":"reconstruction-decoration","servicePrice":"قیمت از 175,000,000 الی 595,500,000 تومان","serviceImage":"/service/images/22/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":137,"isNewService":null,"serviceTitle":"قیمت ساخت کمد دیواری","serviceName":"making-wall-closet","servicePrice":"قیمت از 24,000,000 الی 24,000,000 تومان","serviceImage":"/service/images/137/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":31,"isNewService":null,"serviceTitle":"قیمت تعمیر مبل","serviceName":"repair-sofa","servicePrice":"قیمت از 500,000 الی 6,000,000 تومان","serviceImage":"/service/images/31/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":136,"isNewService":null,"serviceTitle":"قیمت ساخت کابینت آشپزخانه","serviceName":"making-kitchen-cabinets","servicePrice":"قیمت از 17,000,000 الی 43,500,000 تومان","serviceImage":"/service/images/136/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":12},{"categoryName":"building","categoryTitle":"خانگی و ساختمانی","isSuggested":false,"serviceList":[{"serviceId":47,"isNewService":null,"serviceTitle":"قیمت جوشکاری","serviceName":"welding-forging","servicePrice":"قیمت از 500,000 الی 1,300,000 تومان","serviceImage":"/service/images/47/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":21,"isNewService":null,"serviceTitle":"قیمت تعمیر آسانسور","serviceName":"elevators","servicePrice":"قیمت از 450,000 الی 700,000 تومان","serviceImage":"/service/images/21/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":121,"isNewService":null,"serviceTitle":"قیمت کانال کشی و نصب دریچه","serviceName":"canalization","servicePrice":"قیمت از 1,500,000 الی 6,000,000 تومان","serviceImage":"/service/images/121/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":397,"isNewService":null,"serviceTitle":"قیمت توری پلیسه ای","serviceName":"pleated-lace","servicePrice":"قیمت از 1,000,000 الی 2,500,000 تومان","serviceImage":"/service/images/397/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":14},{"categoryName":"moving","categoryTitle":"جابجایی و حمل بار","isSuggested":false,"serviceList":[{"serviceId":75,"isNewService":null,"serviceTitle":"قیمت کارگر اسباب کشی","serviceName":"moving-worker","servicePrice":"قیمت از 800,000 الی 1,600,000 تومان","serviceImage":"/service/images/75/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":33,"isNewService":null,"serviceTitle":"قیمت جابجایی و اسباب کشی","serviceName":"moving","servicePrice":"قیمت از 1,800,000 الی 5,000,000 تومان","serviceImage":"/service/images/33/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":237,"isNewService":null,"serviceTitle":"قیمت باربری بین شهری","serviceName":"intercity-relocation","servicePrice":"قیمت از 1,000,000 الی 2,500,000 تومان","serviceImage":"/service/images/237/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":236,"isNewService":null,"serviceTitle":"قیمت بسته بندی وسایل و اثاثیه","serviceName":"furniture-packaging","servicePrice":"قیمت از 1,500,000 الی 3,000,000 تومان","serviceImage":"/service/images/236/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":11},{"categoryName":"technology","categoryTitle":"رایانه و تکنولوژی","isSuggested":false,"serviceList":[{"serviceId":66,"isNewService":null,"serviceTitle":"قیمت تعمیر موبایل","serviceName":"mobile-services","servicePrice":"قیمت از 300,000 الی 300,000 تومان","serviceImage":"/service/images/66/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":128,"isNewService":null,"serviceTitle":"قیمت شارژ و تعویض کارتریج","serviceName":"charging-cartridges","servicePrice":"قیمت از 381,000 الی 820,000 تومان","serviceImage":"/service/images/128/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":124,"isNewService":null,"serviceTitle":"قیمت نصب و راه اندازی شبکه","serviceName":"network-maintenance","servicePrice":"قیمت از 280,000 الی 500,000 تومان","serviceImage":"/service/images/124/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":414,"isNewService":null,"serviceTitle":"قیمت تعمیر لپ تاپ","serviceName":"laptop-repair","servicePrice":"قیمت از 500,000 الی 1,350,000 تومان","serviceImage":"/service/images/414/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":13},{"categoryName":"car","categoryTitle":"تعمیر و سرویس خودرو","isSuggested":false,"serviceList":[{"serviceId":7,"isNewService":null,"serviceTitle":"قیمت کارواش در محل","serviceName":"carwash","servicePrice":"قیمت از 280,000 الی 450,000 تومان","serviceImage":"/service/images/7/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":234,"isNewService":null,"serviceTitle":"قیمت تعمیر دوچرخه","serviceName":"bicycle-repair","servicePrice":"قیمت از 450,000 الی 1,050,000 تومان","serviceImage":"/service/images/234/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":144,"isNewService":null,"serviceTitle":"قیمت تعویض باتری خودرو","serviceName":"car-battery-replacement","servicePrice":"قیمت از 250,000 الی 250,000 تومان","serviceImage":"/service/images/144/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":142,"isNewService":null,"serviceTitle":"قیمت تعمیر خودرو","serviceName":"car-repair","servicePrice":"قیمت از 380,000 الی 1,500,000 تومان","serviceImage":"/service/images/142/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":17},{"categoryName":"beauty","categoryTitle":"زیبایی","isSuggested":false,"serviceList":[{"serviceId":241,"isNewService":null,"serviceTitle":"قیمت بافت مو بانوان","serviceName":"hair-braiding","servicePrice":"قیمت از 850,000 الی 850,000 تومان","serviceImage":"/service/images/241/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":273,"isNewService":null,"serviceTitle":"قیمت اپیلاسیون بانوان","serviceName":"epilation","servicePrice":"قیمت از 600,000 الی 900,000 تومان","serviceImage":"/service/images/273/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":259,"isNewService":null,"serviceTitle":"قیمت اصلاح صورت و ابرو بانوان","serviceName":"face-eyebrow-shaving","servicePrice":"قیمت از 250,000 الی 250,000 تومان","serviceImage":"/service/images/259/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":268,"isNewService":null,"serviceTitle":"قیمت ترمیم و کاشت ناخن بانوان","serviceName":"nail-implantation","servicePrice":"قیمت از 650,000 الی 1,170,000 تومان","serviceImage":"/service/images/268/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":18},{"categoryName":"nursing","categoryTitle":"پزشکی و پرستاری","isSuggested":false,"serviceList":[{"serviceId":346,"isNewService":null,"serviceTitle":"قیمت زدن بخیه و کشیدن بخیه","serviceName":"surgical-suture","servicePrice":"قیمت از 450,000 الی 450,000 تومان","serviceImage":"/service/images/346/banner-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":191,"isNewService":null,"serviceTitle":"قیمت پانسمان در محل","serviceName":"bandage","servicePrice":"قیمت از 450,000 الی 600,000 تومان","serviceImage":"/service/images/191/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":189,"isNewService":null,"serviceTitle":"قیمت تزریقات در محل","serviceName":"injection","servicePrice":"قیمت از 300,000 الی 500,000 تومان","serviceImage":"/service/images/189/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null},{"serviceId":204,"isNewService":null,"serviceTitle":"قیمت آزمایش و نمونه گیری در محل","serviceName":"sampling","servicePrice":"قیمت از 300,000 الی 1,200,000 تومان","serviceImage":"/service/images/204/logo-d.jpg","priceButtonLabel":"جزئیات قیمت","link":null}],"categoryId":19}]},"dataUpdateCount":1,"dataUpdatedAt":1727509976536,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getSuggestServiceList"],"queryHash":"[\"getSuggestServiceList\"]"},{"state":{"data":{"requestDateString":"2024/09/27 18:33","requestId":null,"requestDate":"2024-09-27T18:33:24.2017238+03:30","hasError":false,"message":null,"resultData":[{"id":7,"name":"نظافت و پذیرایی","latinName":"cleaning","priority":1,"imageUrl":"/images/category/cleaning.svg","selectedImageUrl":"/images/category/s/cleaning.svg"},{"id":8,"name":"لوله کشی و تاسیسات","latinName":"plumbing","priority":2,"imageUrl":"/images/category/plumbing.svg","selectedImageUrl":"/images/category/s/plumbing.svg"},{"id":9,"name":"برقکاری ساختمان","latinName":"electricity","priority":3,"imageUrl":"/images/category/electricity.svg","selectedImageUrl":"/images/category/s/electricity.svg"},{"id":10,"name":"لوازم خانگی","latinName":"home-appliances","priority":4,"imageUrl":"/images/category/home-appliances.svg","selectedImageUrl":"/images/category/s/home-appliances.svg"},{"id":12,"name":"بنایی و دکوراسیون","latinName":"decoration","priority":5,"imageUrl":"/images/category/decoration.svg","selectedImageUrl":"/images/category/s/decoration.svg"},{"id":14,"name":"خانگی و ساختمانی","latinName":"building","priority":6,"imageUrl":"/images/category/building.svg","selectedImageUrl":"/images/category/s/building.svg"},{"id":11,"name":"جابجایی و حمل بار","latinName":"moving","priority":7,"imageUrl":"/images/category/moving.svg","selectedImageUrl":"/images/category/s/moving.svg"},{"id":16,"name":"فرهنگی و آموزشی","latinName":"educational","priority":8,"imageUrl":"/images/category/educational.svg","selectedImageUrl":"/images/category/s/educational.svg"},{"id":13,"name":"رایانه و تکنولوژی","latinName":"technology","priority":9,"imageUrl":"/images/category/technology.svg","selectedImageUrl":"/images/category/s/technology.svg"},{"id":17,"name":"تعمیر و سرویس خودرو","latinName":"car","priority":10,"imageUrl":"/images/category/car.svg","selectedImageUrl":"/images/category/s/car.svg"},{"id":18,"name":"زیبایی","latinName":"beauty","priority":11,"imageUrl":"/images/category/beauty.svg","selectedImageUrl":"/images/category/s/beauty.svg"},{"id":19,"name":"پزشکی و پرستاری","latinName":"nursing","priority":11,"imageUrl":"/images/category/nursing.svg","selectedImageUrl":"/images/category/s/nursing.svg"}]},"dataUpdateCount":1,"dataUpdatedAt":1727509976529,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getCategoriedList"],"queryHash":"[\"getCategoriedList\"]"},{"state":{"data":{"requestDateString":"2024/09/27 19:31","requestId":null,"requestDate":"2024-09-27T19:31:17.8388111+03:30","hasError":false,"message":null,"resultData":{"description":"\u003cdiv class=\"ExternalClassCFA643C29EBF4036B8CAAC0737981334\"\u003e\u003cp\u003e\u003c/p\u003e\u003ch2\u003eهوم سرویز برند مرجع خدمات\u003c/h2\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eهوم‌ سرویز یک شرکت دانش بنیان است که از سال 1395 فعالیت خود را به عنوان \u003cstrong\u003eاولین پلتفرم خدمات در محل\u003c/strong\u003e در کشور آغاز کرده است، این \u003cstrong\u003eپلتفرم خدماتی\u003c/strong\u003e به شکلی طراحی و پیاده سازی شده است که در آن هر شخصی به سادگی بتواند برای انجام کارهای موردنیازش، افراد مطمئن، معتمد و توانمند را پیدا کند. به طور مثال شما اگر به دنبال \u003cstrong\u003eنظافتچی\u003c/strong\u003e، \u003ca href=\"https\u0026#58;//homeservize.com/electrical-wiring\"\u003eبرقکار\u003c/a\u003e، لوله کش سیار، بنای استادکار و یا \u003cstrong\u003eنقاش خوب\u003c/strong\u003e و همینطور \u003cstrong\u003eنجار\u003c/strong\u003e حرفه ای یا \u003cstrong\u003eتعمیرکار لوازم خانگی\u003c/strong\u003e و \u003cstrong\u003eمکانیک سیار\u003c/strong\u003e هستید و یا نیاز به پزشک متخصص و یا \u003cstrong\u003eآرایشگر در منزل\u003c/strong\u003e دارید و حتی اگر نیاز به \u003cstrong\u003eخدمات دامپزشکی\u003c/strong\u003e در منزل دارید، کافیست از طریق سایت و یا اپلکیشن هوم سرویز سفارش خود را به راحتی و با اطمینان ثبت کنید تا به متخصصین تایید صلاحیت شده هوم سرویز دسترسی پیدا کنید. خدمات هوم سرویز در کلیه ساعات شبانه روز و در محل شما قابل ارائه خواهد بود.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eاز سوی دیگر هوم سرویز بستری برای افراد و سرویس‌دهنده‌های حرفه ای فراهم آورده است تا خدمات خود را به بهترین شکل معرفی و عرضه کنند. هوم‌سرویز یک حلقه ارتباطی مناسب و مورد اطمینان بین مشتریان و تکنسین های متعهد و حرفه‌ای است.\u003c/p\u003e\u003ch3\u003eچرا هوم سرویز بهترین اپلیکیشن خدماتی از نگاه مشتریان است؟\u003c/h3\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eهوم سرویز (\u003cstrong\u003ehome servize\u003c/strong\u003e) به منظور ایجاد تجربه خوب برای شما مشتریان ضمن ایجاد بسترهای ارتباطی مناسب از طریق پلتفرم \u003cstrong\u003eخدمات در محل\u003c/strong\u003e هوم سرویز تمام تلاش خود را در سایر بخش ها نظیر پشتیبانی و عملیات نموده است تا به بهترین شکل ممکن خدمات همیاران هوم سرویز را در اختیار شما عزیزان قرار دهد. شعار هوم سرویز \u0026quot;همیار شماییم تا پایان سرویس\u0026quot; خود گویای رسالت و هدف هوم سرویز در جلب رضایت حداکثری شما عزیزان می باشد. هوم­سرویز ضمن دریافت تقدیرنامه ها، جوایز و تندس های مختلف طی این سال ها، به جلب رضایت بیش از\u0026#160; 93 درصدی از شما مشتریان عزیز افتخار می کند. اعتقاد داریم در این مسیر سخت و طولانی برای سازماندهی بازار خدمات کشور تنها چیزی که ماندگار بوده و می تواند در مسیر رشد هوم سرویز لذت بخش باشد رضایت حداکثری مشتریان عزیز می باشد. لذا پر تلاش و قوی تر از همیشه همیار شما و در کنار شما خواهیم بود. در ادامه به برخی از نقاط تمایز و ویژگی های هوم سرویز که باعث تفاوت های چشمگیر با سایر \u003cstrong\u003eاپلیکیشن های خدماتی\u003c/strong\u003e شده است، اشاره خواهیم کرد\u0026#58;\u003c/p\u003e\u003cul\u003e\u003cli\u003eسهولت دسترسی به متخصصین و افراد حرفه ای در نزدیکی شما\u003c/li\u003e\u003cli\u003eدسترسی راحت به تعرفه قیمت خدمات\u003c/li\u003e\u003cli\u003eاحراز هویت، سکونت و صلاحیت کلیه\u0026#160;همیاران و متخصصین هوم سرویز\u003c/li\u003e\u003cli\u003eامکان انتخاب متخصص مورد نظر بر اساس اطلاعات دقیق، سوابق ایشان و نظرات مشتریان قبلی\u003c/li\u003e\u003cli\u003eامنیت، اعتماد و احترام در ارایه خدمات\u003c/li\u003e\u003cli\u003eرتبه بندی همیاران\u003c/li\u003e\u003cli\u003eپشتیبانی خدمات\u003c/li\u003e\u003c/ul\u003e\u003ch3\u003eهوم سرویس (HomeService) یا هوم سرویز (HomeServize)\u0026#58;\u003c/h3\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eمشتریان و کاربران هوم سرویز، با اسامی دیگری نیز هوم سرویز را می شناسند نظیر \u003cstrong\u003eهوم سرویس\u003c/strong\u003e (\u003cstrong\u003eHome Service\u003c/strong\u003e) یا \u003cstrong\u003eهوم سرویسز\u003c/strong\u003e (\u003cstrong\u003eHome services\u003c/strong\u003e) که در حقیقت تمامی این نام ها در ایران با مفهوم هوم سرویز و در قالب برند هوم سرویز شناخته شده است. \u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eبرند هوم سرویز برگرفته شده از سه عبارت هست، هوم (home)، سرویس (Service) و تمایز، با تلفیق این سه عبارت برند هوم سرویز شکل گرفته است. هدف از این عبارت ارایه خدمات متمایز به مشتریان و همیاران هست.\u003c/p\u003e\u003ch2\u003eخدمات در محل هوم سرویز\u003c/h2\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eهوم‌سرویز با بیش از 500 نوع خدمات در ۱۲ گروه مختلف در شهرهای تهران، کرج، مشهد، اصفهان، شیراز، تبریز و رشت در حال ارائه خدمات در محل می باشد و به تازگی فعالیت خود را در شهرهای قزوین، اراک، اهواز، کرمانشاه، ارومیه، قم، همدان، یزد، ساری، بابل، گرگان، بندر عباس، زنجان، گرگان، زاهدان، بجنورد، آمل، نیشابور، دزفول، قائمشهر، سبزوار، زابل و سایر شهرهای کشور عزیزمان ایران آغاز نموده است. بنابراین شما اگر در جستجوی هر نوع خدماتی هستید به جای پرس و جو از دوستان و آشنایان و یا جستجو در در دیوار محله ها و یا سرچ در گوگل و یا سپردن کار به شرکت های خدماتی نامعتبر، کافیست \u003cstrong\u003eاپلیکیشن هوم سرویس\u003c/strong\u003e را در گوشی خود داشته باشید تا در سریعترین زمان ممکن به تکنسین، متخصص، استادکار، آچار به دست و یا بهتر بگوییم همیاران حرفه ای هوم سرویز دسترسی داشته باشید. در ادامه به برخی از خدمات محبوب و پر استفاده هوم سرویز اشاره می کنیم\u0026#58;\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eنیروهای متخصص و متعهد همکار با هوم سرویز که اصطلاحا \u003cstrong\u003eهمیار هوم سرویز\u003c/strong\u003e نامگذاری شده اند، در زمینه های نظافت منزل و \u003cstrong\u003eنظافت راه پله\u003c/strong\u003e و مشاعات ساختمان، خدمات شستشوی فرش با \u003cstrong\u003eبهترین قالیشویی\u003c/strong\u003e، خشک شویی مبل و موکت شویی در محل، \u003ca href=\"https\u0026#58;//homeservize.com/facade-washing\"\u003eنماشویی\u003c/a\u003e و کفسابی و \u003cstrong\u003eخدمات مهمانداری\u003c/strong\u003e و \u003ca href=\"https\u0026#58;//homeservize.com/wedding-services\"\u003eتشریفات مجالس\u003c/a\u003e و مهمانی ها و خدمات عکاسی و فیلمبرداری در زیر مجموعه \u003cstrong\u003eخدمات نظافت\u003c/strong\u003e و پذیرایی آماده ارایه خدمات هستند. \u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eهمچنین همیاران فنی هوم سرویز در زمینه \u003cstrong\u003eتاسیسات ساختمان\u003c/strong\u003e (لوله کشی آب و فاضلاب، لوله بازکنی، نصب و تعمیر شیرآلات ساختمان، نصب و تعمیرات پکیج، آبگرمکن و شوفاژ و کلیه تعمیرات موتورخانه، سرویس کولر آبی، سرویس و \u003ca href=\"https\u0026#58;//homeservize.com/charging-gas-cooler\"\u003eشارژ گاز اسپلیت\u003c/a\u003e و سرویس و تعمیر کولر گازی و ...) و همچنین \u003cstrong\u003eخدمات برقکاری\u003c/strong\u003e (برقکاری ساختمان و رفع اتصالی، خدمات سیم کشی تلفن، نصب و تعمیر آیفون، نصب و \u003ca href=\"https\u0026#58;//homeservize.com/cctv-repair\"\u003eتعمیر دوبین مدار بسته\u003c/a\u003e و تعمیرات درب اتوماتیک) همچنین خدمات مربوط به \u003ca href=\"https\u0026#58;//homeservize.com/reconstruction-decoration\"\u003eبازسازی خانه\u003c/a\u003e و دکوراسیون (نقاشی ساختمان، نصب و تعمیرات پارکت و لمینت، نصب کاغذ دیواری) و خدمات بنایی (کاشیکاری، سنگ کاری ساختمان، رفع نم ساختمان و گچ کاری و گچ بری ساختمان)، خدمات نجاری سیار و ساخت کابینت آشپزخانه، ساخت کمد دیواری، \u003ca href=\"https\u0026#58;//homeservize.com/wooden-shoe-rack\"\u003eساخت جاکفشی\u003c/a\u003e و تعمیر مبل در محل و رنگکاری و \u003ca href=\"https\u0026#58;//homeservize.com/furniture-upholstery\"\u003eرویه کوبی مبل\u003c/a\u003e و ساخت انواع سازه آلومنیومی (ساخت درب و پنجره آلومنیومی، درب و پنجره یو پی وی سی و ساخت پنجره دوجداره، نصب توری پنجره) و خدمات جوشکاری سیار و آهنگری نظیر \u003ca href=\"https\u0026#58;//homeservize.com/window-fence\"\u003eساخت حفاظ آهنی پنجره\u003c/a\u003e و حفاظ شاخ گوزنی، ساخت درب آکاردئونی فلزی و خدمات اتوبار، باربری و \u003cstrong\u003eاسباب کشی\u003c/strong\u003e توسط \u003cstrong\u003eبهترین شرکت های باربری\u003c/strong\u003e و حمل و نقل و همیاران حرفه ای انجام می شود. همچنین صدها خدمات دیگر در هوم سرویز تحت عنوان خدمات فنی توسط \u003cstrong\u003eهمیاران متخصص هوم سرویز\u003c/strong\u003e انجام می شود.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eدر \u003cstrong\u003eتعمیرگاه لوازم خانگی\u003c/strong\u003e هوم سرویز تعمیرات کلیه لوازم خانگی مانند تعمیر تلویزیون، \u003ca href=\"https\u0026#58;//homeservize.com/dishwasher-installation-repair\"\u003eتعمیر ماشین ظرفشویی\u003c/a\u003e، تعمیر آبسردکن، تعمیر یخچال فریزر، تعمیر ماشین لباسشویی، تعمیر تلویزیون و تعمیر ریش تراش و تعمیر انواع لوازم برقی آشپزخانه ریز و درشت و همچنین تعمیر انواع لوازم ورزشی نظیر \u003ca href=\"https\u0026#58;//homeservize.com/treadmill-repair\"\u003eتعمیر تردمیل\u003c/a\u003e، الپتیکال، دوچرخه ثابت با قطعات دارای گارانتی و در محل توسط همیاران متخصص و حرفه ای هوم سرویز عیب یابی و تعمیر می شوند و دیگر هیچ نگرانی از بابت انتقال لوازم به تعمیرگاه تخصصی و مهارت متخصصین نخواهید داشت. \u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eاز دیگر خدمات هوم سرویز می توان به خدمات سمپاشی ساختمان، سمپاشی رستوران و انواع \u003ca href=\"https\u0026#58;//homeservize.com/flower-plant-care\"\u003eخدمات باغبانی\u003c/a\u003e، هرس درختان و محوطه سازی اشاره کرد.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eتعمیر خودرو در محل توسط مکانیک سیار، کارواش در محل، \u003ca href=\"https\u0026#58;//homeservize.com/car-ceramic-coating\"\u003eسرامیک خودرو\u003c/a\u003e و نصب شیشه دودی در محل و همچنین \u003ca href=\"https\u0026#58;//homeservize.com/motorcycle-repair\"\u003eتعمیر موتورسیکلت در محل\u003c/a\u003e و تعمیر ماشین شارژی کودک نیز از خدمات محبوب هوم سرویز در بخش خودرویی محسوب می شوند.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eخدمات پزشکی و پرستاری هوم سرویز نظیر \u003ca href=\"https\u0026#58;//homeservize.com/child-care\"\u003eپرستار کودک\u003c/a\u003e، پرستاری از بیمار و سالمند، تزریقات در محل، پانسمان در محل، بخیه زدن، \u003ca href=\"https\u0026#58;//homeservize.com/sonography\"\u003eانجام سونوگرافی\u003c/a\u003e در منزل و رادیولوژی، آزمایش آنلاین و نمونه گیری خون و چکاپ در منزل و همچنین اجاره تجهیزات پزشکی از خدمات پر استفاده هوم سرویز محسوب می شوند.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eتعمیر کامپیوتر و تعمیرات موبایل، تعمیرات پرینتر و \u003ca href=\"https\u0026#58;//homeservize.com/charging-cartridges\"\u003eشارژ کارتریج\u003c/a\u003e، \u003ca href=\"https\u0026#58;//homeservize.com/network-services\"\u003eخدمات شبکه\u003c/a\u003e و امنیت، تعمیر انواع کنسول بازی نظیر پلی استیشن و ایکس باکس و همچنین تعمیر دستگاه کارتخوان فوری از خدمات محبوب هوم سرویز هستند.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eخدمات زیبایی و آرایشگر در منزل نظیر اپیلاسیون در منزل، خدمات ناخن، کوتاهی کردن مو، \u003ca href=\"https\u0026#58;//homeservize.com/hair-braiding\"\u003eبافت مو در منزل\u003c/a\u003e، اصلاح صورت و ابرو بانوان، \u003ca href=\"https\u0026#58;//homeservize.com/hair-extension\"\u003eاکستنشن مو در منزل\u003c/a\u003e و اصلاح سر آقایان در منزل از پرطرفدارترین خدمات هوم سرویز محسوب می شوند.​\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eو اما خدمات جدید هوم سرویز که در گروه خدمات دامپزشکی شامل \u003cstrong\u003eویزیت دامپزشک\u003c/strong\u003e در منزل، عقیم سازی حیوانات، شستشو و آرایش حیوانات خانگی و ... ارائه می شود. از دیگر خدمات جدید هوم سرویز می توان به \u003cstrong\u003eخدمات آموزش تحصیلی و مهارتی\u003c/strong\u003e نظیر آموزش موسیقی، آموزش زبان های خارجی، آموزش دروس تحصیلی، آموزش مهارت های فنی و مهارتی اشاره نمود. دیگر خدماتی که به تازگی در هوم سرویز ایجاد شده است می توان به \u003cstrong\u003eخدمات چاپ و تبلیغات\u003c/strong\u003e که عمدتا مخصوص شرکت ها و سازمان ها می شود اشاره نموده که شامل خدمات \u003cstrong\u003eچاپ دیجیتال\u003c/strong\u003e، چاپ لیبل، بروشور، تراکت، پوستر و چاپ سررسید و ... می باشد.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eارائه \u003cstrong\u003eخدمات روستایی\u003c/strong\u003e و \u003cstrong\u003eکار در منزل\u003c/strong\u003e نیز از جمله خدمات جدید هوم سرویز هستند که با هدف حمایت از اقشار ضعیف و شریف جامعه و ایجاد هم افزایی در راستای کارآفرینی و بهبود فرهنگ خدمات رسانی ایجاد شده اند.\u003c/p\u003e\u003cp style=\"text-align\u0026#58;justify;\"\u003eتنها فاصله شما با دریافت خدمات، ثبت سفارش رایگان و مذاکره با همیاران متخصص هوم سرویز خواهد بود. به راحتی می توانید سفارش خود را ثبت نموده و با بهترین و کارآزموده ترین افراد در زمینه سفارش خود ارتباط برقرار کنید و از نرخ های رقابتی و تعرفه \u003cstrong\u003eقیمت خدمات\u003c/strong\u003e مطلع شوید. پشتیبانی هوم سرویز از ابتدای ثبت سفارش تا انتهای کار پشتیبان شما خواهند بود.\u003c/p\u003e\u003cp\u003eهمیار شماییم تا پایان سرویس​​...​\u003cbr\u003e\u003cbr\u003e\u003c/p\u003e\u003c/div\u003e","categories":[{"sectionName":"خدمات ما","links":[{"linkId":3,"title":"نظافت راه پله و مشاعات","link":"building-cleaning"},{"linkId":5,"title":"خشک شویی مبل","link":"dry-cleaning-couch"},{"linkId":6,"title":"نظافت منزل","link":"house-cleaning"},{"linkId":36,"title":"قالیشویی","link":"carpet-cleaning"},{"linkId":42,"title":"تعمیر کولر آبی","link":"cooler-service"},{"linkId":43,"title":"تعمیر کولر گازی و اسپلیت","link":"air-conditioner-service"},{"linkId":44,"title":"لوله بازکنی","link":"drain-well"},{"linkId":46,"title":"توری پنجره","link":"mosquito-netting-service"},{"linkId":66,"title":"تعمیر موبایل","link":"mobile-services"},{"linkId":78,"title":"تعمیر یخچال و فریزر","link":"repair-refrigerators"},{"linkId":80,"title":"تعمیر ماشین لباسشویی","link":"installation-repair-washing-machine"},{"linkId":90,"title":"سرویس و تعمیر پکیج","link":"package-installation-repair"},{"linkId":91,"title":"سرویس و تعمیر آبگرمکن","link":"repair-water-heater"},{"linkId":125,"title":"تعمیر کامپیوتر","link":"computer-repair"},{"linkId":240,"title":"کوتاهی مو بانوان","link":"women-haircut"},{"linkId":259,"title":"اصلاح صورت و ابرو بانوان","link":"face-eyebrow-shaving"},{"linkId":268,"title":"ترمیم و کاشت ناخن بانوان","link":"nail-implantation"},{"linkId":273,"title":"اپیلاسیون بانوان","link":"epilation"}],"sectionId":1},{"sectionName":"سرویس های پر کاربرد","links":[{"linkId":4,"title":"سمپاشی","link":"spraying"},{"linkId":13,"title":"تعمیر کمد، کابینت و نجاری","link":"carpentry"},{"linkId":14,"title":"نصب کاغذ دیواری","link":"wallpaper"},{"linkId":15,"title":"نقاشی ساختمان","link":"painting"},{"linkId":31,"title":"تعمیر مبل","link":"repair-sofa"},{"linkId":33,"title":"جابجایی و اسباب کشی","link":"moving"},{"linkId":47,"title":"جوشکاری","link":"welding-forging"},{"linkId":104,"title":"سیم کشی تلفن و رفع خرابی","link":"phone-wiring-fix"},{"linkId":114,"title":"رفع نم ساختمان","link":"fixing-roof"},{"linkId":136,"title":"ساخت کابینت آشپزخانه","link":"making-kitchen-cabinets"},{"linkId":137,"title":"ساخت کمد دیواری","link":"making-wall-closet"},{"linkId":142,"title":"تعمیر خودرو","link":"car-repair"},{"linkId":144,"title":"تعویض باتری خودرو","link":"car-battery-replacement"},{"linkId":189,"title":"تزریقات در محل","link":"injection"},{"linkId":193,"title":"فیزیوتراپی در منزل","link":"physiotherapy"},{"linkId":204,"title":"آزمایش و نمونه گیری در محل","link":"sampling"},{"linkId":258,"title":"آرایشگر در منزل","link":"makeup"},{"linkId":422,"title":"تعمیر پارکت","link":"parquet-repair"}],"sectionId":2},{"sectionName":"شهر های تحت پوشش","links":[{"linkId":1,"title":"تهران","link":"/tehran"},{"linkId":2,"title":"کرج","link":"/karaj"},{"linkId":3,"title":"قدس","link":"#"},{"linkId":4,"title":"شهریار","link":"#"},{"linkId":5,"title":"اسلام شهر","link":"#"},{"linkId":13,"title":"اندیشه","link":"#"},{"linkId":14,"title":"رباط کریم","link":"#"},{"linkId":17,"title":"پردیس","link":"#"},{"linkId":18,"title":"بومهن","link":"#"},{"linkId":23,"title":"چهاردانگه","link":"#"},{"linkId":24,"title":"دماوند","link":"#"},{"linkId":45,"title":"مشهد","link":"/mashhad"},{"linkId":46,"title":"شیراز","link":"/shiraz"},{"linkId":47,"title":"اصفهان","link":"/isfahan"},{"linkId":48,"title":"تبریز","link":"/tabriz"},{"linkId":49,"title":"رشت","link":"/rasht"}],"sectionId":4}]}},"dataUpdateCount":1,"dataUpdatedAt":1727509976537,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getFooterLinks"],"queryHash":"[\"getFooterLinks\"]"},{"state":{"data":{"requestDateString":"2024/09/28 11:22","requestId":null,"requestDate":"2024-09-28T11:22:56.5281439+03:30","hasError":false,"message":null,"resultData":[{"cityId":1,"latin":"tehran","name":"تهران","priority":null,"provienceId":1},{"cityId":2,"latin":"karaj","name":"کرج","priority":null,"provienceId":2},{"cityId":45,"latin":"mashhad","name":"مشهد","priority":null,"provienceId":3},{"cityId":46,"latin":"shiraz","name":"شیراز","priority":null,"provienceId":4},{"cityId":47,"latin":"isfahan","name":"اصفهان","priority":null,"provienceId":5},{"cityId":48,"latin":"tabriz","name":"تبریز","priority":null,"provienceId":6},{"cityId":49,"latin":"rasht","name":"رشت","priority":null,"provienceId":7}]},"dataUpdateCount":1,"dataUpdatedAt":1727509976534,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getCities"],"queryHash":"[\"getCities\"]"},{"state":{"data":{"requestDateString":"2024/09/27 20:08","requestId":null,"requestDate":"2024-09-27T20:08:00.1577728+03:30","hasError":false,"message":null,"resultData":[{"customerName":"فاطمه طالع","serviceTitle":"لوله کشی آب و ساختمان","reviewType":0,"score":"5 از 5","friendlyDate":"1 روز پیش","message":"می خواستم از شهاب گل محمدی و همکارانش بابت کار تمیز ورفتارشون تشکر کنم برایشان امتیاز عالی میگذارم.","audioStreamUrl":null,"reviewId":80944,"likeCount":0,"hamyarCode":null,"serviceName":"water-plumbing-sewerage","isCustomer":false},{"customerName":"حمیده امیرلو","serviceTitle":"نظافت منزل و محل کار(آقا)","reviewType":0,"score":"5 از 5","friendlyDate":"2 روز پیش","message":"خیلی کارشان را عالی و تمیز و به موقع انجام دادند و در یک کلام عالی بودند حتما پیشنهاد میکنم ","audioStreamUrl":null,"reviewId":80938,"likeCount":0,"hamyarCode":null,"serviceName":"house-cleaning","isCustomer":false},{"customerName":"زويا طواف","serviceTitle":"کاشت و اکستنشن مژه","reviewType":0,"score":"5 از 5","friendlyDate":"2 روز پیش","message":"بسيار حرفه اى كار بلد خوش اخلاق و سريع بودن  🙏 ","audioStreamUrl":null,"reviewId":80937,"likeCount":0,"hamyarCode":null,"serviceName":"eyelashes-extension","isCustomer":false},{"customerName":"فرساد کمال خانی","serviceTitle":"تعمیر استارت ماشین","reviewType":0,"score":"5 از 5","friendlyDate":"4 روز پیش","message":"درود، بسیار محترم و منصف و با تخصص و وقت شناس ، ایران به آدم های بیشتری مثل ایشون نیاز داره","audioStreamUrl":null,"reviewId":80869,"likeCount":0,"hamyarCode":null,"serviceName":"car-starter-repair","isCustomer":false}]},"dataUpdateCount":1,"dataUpdatedAt":1727509976530,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getHomePageCustomerReview"],"queryHash":"[\"getHomePageCustomerReview\"]"},{"state":{"data":{"requestDateString":"2024/09/28 11:22","requestId":null,"requestDate":"2024-09-28T11:22:56.5257599+03:30","hasError":false,"message":null,"resultData":[{"slideId":1,"imageUrl":"https://s3.homeservize.com/images/home-page/slider_d2.png","mobileImageUrl":"https://s3.homeservize.com/images/home-page/slider_m2.png","imageLink":"#"}]},"dataUpdateCount":1,"dataUpdatedAt":1727509976531,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getSlider"],"queryHash":"[\"getSlider\"]"},{"state":{"data":{"requestDateString":"2024/09/28 11:22","requestId":null,"requestDate":"2024-09-28T11:22:56.5265112+03:30","hasError":false,"message":null,"resultData":null},"dataUpdateCount":1,"dataUpdatedAt":1727509976533,"error":null,"errorUpdateCount":0,"errorUpdatedAt":0,"fetchFailureCount":0,"fetchFailureReason":null,"fetchMeta":null,"isInvalidated":false,"status":"success","fetchStatus":"idle"},"queryKey":["getNotifications"],"queryHash":"[\"getNotifications\"]"}]},"pageMeta":{"title":"خانه"}},"__N_SSG":true},"page":"/","query":{},"buildId":"OtNxQZBJGS0mLpWhsYNB4","isFallback":false,"isExperimentalCompile":false,"dynamicIds":[94247,87663,13079,40313,84244],"gsp":true,"scriptLoader":[]}
</script>
</body>
</html>
