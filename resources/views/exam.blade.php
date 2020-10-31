<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        
        <meta name="csrf-token" content="LCu3zr6N9oOZBI8M15wjImcZkLpYbYDltDySQ6Nb">

        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Exam</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800&display=swap"
            rel="stylesheet"
        />
        <link href="/css/admin.css" rel="stylesheet">
        <style>
            * {
                box-sizing: border-box;
            }
            body,
            html {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Verdana, sans-serif;
                margin: 0;
            }
            .mySlides {
                display: none;
                height: 450px;
            }
            img {
                vertical-align: middle;
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 45px;
                width: 45px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.5s ease;
                font-size: 30px;
            }

            .active,
            .dot:hover {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }

            @keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .prev,
                .next,
                .text {
                    font-size: 11px;
                }
            }

            textarea {
                padding-top: 3%;
                padding-bottom: 3%;
                padding-left: 3%;
                padding-right: 3%;
            }
        </style>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
        />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div
                class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"
            >
                <a class="navbar-brand" href="#">
                    <svg
                        width="310"
                        height="31"
                        viewBox="0 0 310 31"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g id="EXAMCHECKER">
                            <path
                                d="M0.817472 30H20.4766V24.929H6.96804V17.983H19.4112V12.9119H6.96804V5.98011H20.4197V0.90909H0.817472V30ZM31.0767 0.90909H24.1023L33.0369 15.4545L23.9318 30H30.9773L36.9432 20.071H37.1705L43.1364 30H50.2102L41.1335 15.4545L50.0114 0.90909H43.0653L37.1705 10.8239H36.9432L31.0767 0.90909ZM58.9176 30L61.0767 23.3665H71.5739L73.733 30H80.3239L70.2955 0.90909H62.3693L52.3267 30H58.9176ZM62.6392 18.5653L66.2188 7.55682H66.446L70.0256 18.5653H62.6392ZM83.8253 0.90909V30H89.7912V10.9943H90.0327L97.5611 29.858H101.624L109.152 11.0653H109.393V30H115.359V0.90909H107.774L99.7628 20.4545H99.4219L91.4105 0.90909H83.8253Z"
                                fill="#092C4C"
                            />
                            <path
                                d="M146.094 11.0938C145.285 4.375 140.2 0.511363 133.467 0.511363C125.782 0.511363 119.915 5.9375 119.915 15.4545C119.915 24.9432 125.683 30.3977 133.467 30.3977C140.924 30.3977 145.427 25.4403 146.094 20.0852L139.873 20.0568C139.29 23.1676 136.847 24.9574 133.566 24.9574C129.148 24.9574 126.151 21.6761 126.151 15.4545C126.151 9.40341 129.106 5.9517 133.609 5.9517C136.975 5.9517 139.404 7.89773 139.873 11.0938H146.094ZM150.505 30H156.656V17.983H169.141V30H175.278V0.90909H169.141V12.9119H156.656V0.90909H150.505V30ZM180.349 30H200.008V24.929H186.499V17.983H198.942V12.9119H186.499V5.98011H199.951V0.90909H180.349V30ZM230.509 11.0938C229.699 4.375 224.614 0.511363 217.881 0.511363C210.196 0.511363 204.33 5.9375 204.33 15.4545C204.33 24.9432 210.097 30.3977 217.881 30.3977C225.338 30.3977 229.841 25.4403 230.509 20.0852L224.287 20.0568C223.705 23.1676 221.261 24.9574 217.98 24.9574C213.562 24.9574 210.565 21.6761 210.565 15.4545C210.565 9.40341 213.52 5.9517 218.023 5.9517C221.389 5.9517 223.818 7.89773 224.287 11.0938H230.509ZM234.919 30H241.07V21.733L244.095 18.0398L252.064 30H259.422L248.499 13.9347L259.294 0.90909H251.922L241.453 13.7358H241.07V0.90909H234.919V30ZM262.497 30H282.156V24.929H268.648V17.983H281.091V12.9119H268.648V5.98011H282.099V0.90909H262.497V30ZM286.989 30H293.14V19.6875H297.629L303.14 30H309.93L303.751 18.6932C307.06 17.2727 308.893 14.3892 308.893 10.4119C308.893 4.63068 305.072 0.90909 298.467 0.90909H286.989V30ZM293.14 14.7443V5.9375H297.288C300.839 5.9375 302.558 7.5142 302.558 10.4119C302.558 13.2955 300.839 14.7443 297.316 14.7443H293.14Z"
                                fill="#F2994A"
                            />
                        </g>
                    </svg>
                </a>
            </div>
            <div class="form-inline ml-auto">
                <button
                    type="button"
                    id="btn-submit"
                    class="btn btn-warning my-2 my-sm-0"
                    type="submit"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    style="background-color:#F2994A;border-color:#F2994A;color:white;font-family: Inter; font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;text-align: center;"
                >
                    Join Exam
                </button>
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container">
                                    <div
                                        class="row justify-content-center align-items-center"
                                    >
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="col-12">
                                                    <br />
                                                    <div class="text-center">
                                                        <svg
                                                            width="172"
                                                            height="200"
                                                            viewBox="0 0 172 200"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <g
                                                                clip-path="url(#clip0)"
                                                            >
                                                                <path
                                                                    d="M113.481 0H3.85185C2.83062 0.0011309 1.85155 0.407313 1.12943 1.12943C0.407313 1.85155 0.0011309 2.83062 0 3.85185V152C0.00115594 153.021 0.407346 154 1.12946 154.722C1.85157 155.445 2.83063 155.851 3.85185 155.852H113.481C114.503 155.851 115.482 155.445 116.204 154.722C116.926 154 117.332 153.021 117.333 152V3.85185C117.332 2.83063 116.926 1.85157 116.204 1.12946C115.482 0.407346 114.503 0.00115594 113.481 0Z"
                                                                    fill="#F2F2F2"
                                                                />
                                                                <path
                                                                    d="M7.23838 4.74072C6.52588 4.7528 5.84725 5.04692 5.35127 5.55858C4.8553 6.07025 4.58245 6.75771 4.59256 7.47024V148.382C4.58245 149.094 4.8553 149.782 5.35127 150.293C5.84725 150.805 6.52588 151.099 7.23838 151.111H110.095C110.807 151.099 111.486 150.805 111.982 150.293C112.478 149.782 112.751 149.094 112.741 148.382V7.47024C112.751 6.75771 112.478 6.07025 111.982 5.55858C111.486 5.04692 110.807 4.7528 110.095 4.74072H7.23838Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M12.5927 11.2593C11.6124 11.2593 10.8149 12.1593 10.8149 13.2656V32.6603C10.8149 33.7667 11.6124 34.6667 12.5927 34.6667H104.741C105.721 34.6667 106.519 33.7667 106.519 32.6603V13.2656C106.519 12.1593 105.721 11.2593 104.741 11.2593H12.5927Z"
                                                                    fill="#E6E6E6"
                                                                />
                                                                <path
                                                                    d="M12.5924 44.0742C12.1143 44.0816 11.6587 44.2783 11.3254 44.6211C10.9922 44.964 10.8085 45.425 10.8146 45.903V87.3565C10.8085 87.8346 10.9922 88.2956 11.3254 88.6384C11.6587 88.9813 12.1143 89.1779 12.5924 89.1853H104.741C105.219 89.1779 105.674 88.9813 106.008 88.6384C106.341 88.2956 106.524 87.8346 106.518 87.3565V45.903C106.524 45.425 106.341 44.964 106.008 44.6211C105.674 44.2783 105.219 44.0816 104.741 44.0742H12.5924Z"
                                                                    fill="#E6E6E6"
                                                                />
                                                                <path
                                                                    d="M95.111 14H22.2222V18.1481H95.111V14Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M95.259 22.7407H22.3701V24.6666H95.259V22.7407Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M95.259 26.1479H22.3701V28.0739H95.259V26.1479Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M95.259 29.5557H22.3701V31.4816H95.259V29.5557Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M65.5296 89.259H99.0736C99.2872 89.259 99.4959 89.1957 99.6735 89.077C99.8511 88.9584 99.9894 88.7897 100.071 88.5924C100.153 88.3951 100.174 88.178 100.133 87.9686C100.091 87.7591 99.9882 87.5667 99.8372 87.4157L78.3686 65.9471C78.166 65.7449 77.8914 65.6313 77.6051 65.6313C77.3188 65.6313 77.0442 65.7449 76.8416 65.9471L71.5029 71.2858C71.2926 71.4961 71.0429 71.663 70.7681 71.7768C70.4933 71.8907 70.1988 71.9493 69.9014 71.9493C69.6039 71.9493 69.3094 71.8907 69.0346 71.7768C68.7599 71.663 68.5102 71.4961 68.2999 71.2858L51.5784 54.5643C51.3757 54.3621 51.1011 54.2485 50.8148 54.2485C50.5285 54.2485 50.2539 54.3621 50.0512 54.5643L17.3479 87.2676C17.1969 87.4186 17.0941 87.611 17.0525 87.8204C17.0108 88.0299 17.0322 88.247 17.114 88.4443C17.1957 88.6416 17.3341 88.8102 17.5116 88.9289C17.6892 89.0475 17.898 89.1109 18.1115 89.1109H65.5726L65.5296 89.259Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M25.6296 57.9999C27.9206 57.9999 29.7777 56.1427 29.7777 53.8518C29.7777 51.5608 27.9206 49.7036 25.6296 49.7036C23.3386 49.7036 21.4814 51.5608 21.4814 53.8518C21.4814 56.1427 23.3386 57.9999 25.6296 57.9999Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M12.5924 98.8892C12.1143 98.8965 11.6587 99.0932 11.3254 99.4361C10.9922 99.7789 10.8085 100.24 10.8146 100.718V142.171C10.8085 142.65 10.9922 143.111 11.3254 143.453C11.6587 143.796 12.1143 143.993 12.5924 144H104.741C105.219 143.993 105.674 143.796 106.008 143.453C106.341 143.111 106.524 142.65 106.518 142.171V100.718C106.524 100.24 106.341 99.7789 106.008 99.4361C105.674 99.0932 105.219 98.8965 104.741 98.8892H12.5924Z"
                                                                    fill="#E6E6E6"
                                                                />
                                                                <path
                                                                    d="M65.5296 144.074H99.0736C99.2872 144.074 99.4959 144.011 99.6735 143.892C99.851 143.773 99.9894 143.605 100.071 143.408C100.153 143.21 100.174 142.993 100.133 142.784C100.091 142.574 99.9882 142.382 99.8372 142.231L78.3686 120.762C78.1659 120.56 77.8913 120.447 77.6051 120.447C77.3188 120.447 77.0443 120.56 76.8415 120.762L71.5028 126.101C71.2926 126.311 71.0429 126.478 70.7681 126.592C70.4933 126.706 70.1988 126.765 69.9013 126.765C69.6038 126.765 69.3093 126.706 69.0345 126.592C68.7597 126.478 68.51 126.311 68.2997 126.101L51.5784 109.38C51.3756 109.177 51.101 109.064 50.8148 109.064C50.5285 109.064 50.2539 109.177 50.0512 109.38L17.3479 142.083C17.1969 142.234 17.0941 142.426 17.0525 142.636C17.0108 142.845 17.0322 143.062 17.1139 143.259C17.1957 143.457 17.3341 143.625 17.5116 143.744C17.6892 143.863 17.8979 143.926 18.1115 143.926H65.5726L65.5296 144.074Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M25.6296 112.815C27.9206 112.815 29.7777 110.958 29.7777 108.667C29.7777 106.376 27.9206 104.519 25.6296 104.519C23.3386 104.519 21.4814 106.376 21.4814 108.667C21.4814 110.958 23.3386 112.815 25.6296 112.815Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M42.3703 34.0742C41.6633 34.075 40.9855 34.3563 40.4856 34.8562C39.9856 35.3561 39.7044 36.0339 39.7036 36.7409V184.889C39.7044 185.596 39.9856 186.274 40.4855 186.774C40.9855 187.274 41.6633 187.555 42.3703 187.556H152C152.707 187.555 153.385 187.274 153.885 186.774C154.385 186.274 154.666 185.596 154.667 184.889V36.7409C154.666 36.0339 154.385 35.3561 153.885 34.8561C153.385 34.3562 152.707 34.075 152 34.0742H42.3703Z"
                                                                    fill="#E6E6E6"
                                                                />
                                                                <path
                                                                    d="M45.6085 38.2222C44.896 38.2342 44.2174 38.5284 43.7214 39.04C43.2254 39.5517 42.9526 40.2392 42.9627 40.9517V181.863C42.9526 182.576 43.2254 183.263 43.7214 183.775C44.2174 184.286 44.896 184.58 45.6085 184.593H148.465C149.177 184.58 149.856 184.286 150.352 183.775C150.848 183.263 151.121 182.576 151.111 181.863V40.9517C151.121 40.2392 150.848 39.5517 150.352 39.04C149.856 38.5284 149.177 38.2342 148.465 38.2222H45.6085Z"
                                                                    fill="white"
                                                                />
                                                                <path
                                                                    d="M61.7037 58.7207C61.3895 58.7211 61.0883 58.846 60.8661 59.0682C60.6439 59.2904 60.5189 59.5917 60.5186 59.9059V65.3456C60.5189 65.6598 60.6439 65.961 60.8661 66.1832C61.0883 66.4054 61.3895 66.5304 61.7037 66.5307H131.63C131.944 66.5304 132.245 66.4054 132.467 66.1832C132.69 65.961 132.815 65.6598 132.815 65.3456V59.9059C132.815 59.5917 132.69 59.2904 132.467 59.0682C132.245 58.846 131.944 58.721 131.63 58.7207H61.7037Z"
                                                                    fill="#092C4C"
                                                                />
                                                                <path
                                                                    d="M61.2592 76.7227C61.1806 76.7228 61.1053 76.754 61.0498 76.8096C60.9942 76.8651 60.963 76.9404 60.9629 77.019V79.1425C60.963 79.2211 60.9942 79.2964 61.0498 79.3519C61.1053 79.4075 61.1806 79.4387 61.2592 79.4388H132.37C132.449 79.4387 132.524 79.4075 132.58 79.3519C132.635 79.2964 132.667 79.2211 132.667 79.1425V77.019C132.667 76.9404 132.635 76.8651 132.58 76.8095C132.524 76.754 132.449 76.7227 132.37 76.7227H61.2592Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.2592 83.625C61.1806 83.6251 61.1053 83.6564 61.0498 83.7119C60.9942 83.7674 60.963 83.8427 60.9629 83.9213V86.0449C60.963 86.1234 60.9942 86.1987 61.0498 86.2543C61.1053 86.3098 61.1806 86.3411 61.2592 86.3412H132.37C132.449 86.3411 132.524 86.3098 132.58 86.2543C132.635 86.1987 132.667 86.1234 132.667 86.0449V83.9213C132.667 83.8427 132.635 83.7674 132.58 83.7119C132.524 83.6563 132.449 83.6251 132.37 83.625H61.2592Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.2592 90.5269C61.1806 90.527 61.1053 90.5582 61.0498 90.6138C60.9942 90.6693 60.963 90.7446 60.9629 90.8232V92.9466C60.963 93.0251 60.9942 93.1004 61.0498 93.156C61.1053 93.2115 61.1806 93.2428 61.2592 93.2429H132.37C132.449 93.2428 132.524 93.2115 132.58 93.156C132.635 93.1004 132.667 93.0251 132.667 92.9466V90.8232C132.667 90.7446 132.635 90.6693 132.58 90.6137C132.524 90.5582 132.449 90.5269 132.37 90.5269H61.2592Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 104.314C61.0327 104.315 60.9574 104.346 60.9018 104.401C60.8463 104.457 60.815 104.532 60.8149 104.611V106.734C60.815 106.813 60.8463 106.888 60.9018 106.944C60.9574 106.999 61.0327 107.03 61.1112 107.03H132.222C132.301 107.03 132.376 106.999 132.432 106.944C132.487 106.888 132.519 106.813 132.519 106.734V104.611C132.519 104.532 132.487 104.457 132.432 104.401C132.376 104.346 132.301 104.315 132.222 104.314H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 111.217C61.0327 111.217 60.9574 111.248 60.9018 111.304C60.8463 111.359 60.815 111.435 60.8149 111.513V113.636C60.815 113.715 60.8463 113.79 60.9018 113.846C60.9574 113.901 61.0327 113.933 61.1112 113.933H132.222C132.301 113.933 132.376 113.901 132.432 113.846C132.487 113.79 132.519 113.715 132.519 113.636V111.513C132.519 111.435 132.487 111.359 132.432 111.304C132.376 111.248 132.301 111.217 132.222 111.217H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 118.119C61.0327 118.119 60.9574 118.15 60.9018 118.206C60.8463 118.261 60.815 118.336 60.8149 118.415V120.539C60.815 120.617 60.8463 120.692 60.9018 120.748C60.9574 120.804 61.0327 120.835 61.1112 120.835H132.222C132.301 120.835 132.376 120.804 132.432 120.748C132.487 120.692 132.519 120.617 132.519 120.539V118.415C132.519 118.336 132.487 118.261 132.432 118.205C132.376 118.15 132.301 118.119 132.222 118.119H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 125.055C61.0327 125.055 60.9574 125.087 60.9018 125.142C60.8463 125.198 60.815 125.273 60.8149 125.351V127.475C60.815 127.554 60.8463 127.629 60.9018 127.684C60.9574 127.74 61.0327 127.771 61.1112 127.771H132.222C132.301 127.771 132.376 127.74 132.432 127.684C132.487 127.629 132.519 127.554 132.519 127.475V125.351C132.519 125.273 132.487 125.198 132.432 125.142C132.376 125.086 132.301 125.055 132.222 125.055H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 131.957C61.0327 131.957 60.9574 131.988 60.9018 132.044C60.8463 132.099 60.815 132.175 60.8149 132.253V134.377C60.815 134.455 60.8463 134.531 60.9018 134.586C60.9574 134.642 61.0327 134.673 61.1112 134.673H132.222C132.301 134.673 132.376 134.642 132.432 134.586C132.487 134.531 132.519 134.455 132.519 134.377V132.253C132.519 132.175 132.487 132.099 132.432 132.044C132.376 131.988 132.301 131.957 132.222 131.957H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 138.859C61.0327 138.859 60.9574 138.891 60.9018 138.946C60.8463 139.002 60.815 139.077 60.8149 139.156V141.279C60.815 141.358 60.8463 141.433 60.9018 141.489C60.9574 141.544 61.0327 141.575 61.1112 141.576H132.222C132.301 141.575 132.376 141.544 132.432 141.489C132.487 141.433 132.519 141.358 132.519 141.279V139.156C132.519 139.077 132.487 139.002 132.432 138.946C132.376 138.891 132.301 138.859 132.222 138.859H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 145.796C61.0327 145.796 60.9574 145.827 60.9018 145.883C60.8463 145.938 60.815 146.014 60.8149 146.092V148.216C60.815 148.294 60.8463 148.37 60.9018 148.425C60.9574 148.481 61.0327 148.512 61.1112 148.512H132.222C132.301 148.512 132.376 148.481 132.432 148.425C132.487 148.37 132.519 148.294 132.519 148.216V146.092C132.519 146.014 132.487 145.938 132.432 145.883C132.376 145.827 132.301 145.796 132.222 145.796H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 152.698C61.0327 152.698 60.9574 152.73 60.9018 152.785C60.8463 152.841 60.815 152.916 60.8149 152.995V155.118C60.815 155.197 60.8463 155.272 60.9018 155.328C60.9574 155.383 61.0327 155.414 61.1112 155.414H132.222C132.301 155.414 132.376 155.383 132.432 155.328C132.487 155.272 132.519 155.197 132.519 155.118V152.995C132.519 152.916 132.487 152.841 132.432 152.785C132.376 152.73 132.301 152.698 132.222 152.698H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M61.1112 159.6C61.0327 159.6 60.9574 159.631 60.9018 159.687C60.8463 159.743 60.815 159.818 60.8149 159.896V162.02C60.815 162.099 60.8463 162.174 60.9018 162.229C60.9574 162.285 61.0327 162.316 61.1112 162.316H132.222C132.301 162.316 132.376 162.285 132.432 162.229C132.487 162.174 132.519 162.099 132.519 162.02V159.896C132.519 159.818 132.487 159.742 132.432 159.687C132.376 159.631 132.301 159.6 132.222 159.6H61.1112Z"
                                                                    fill="#CCCCCC"
                                                                />
                                                                <path
                                                                    d="M149.63 200C161.575 200 171.259 190.316 171.259 178.37C171.259 166.425 161.575 156.741 149.63 156.741C137.684 156.741 128 166.425 128 178.37C128 190.316 137.684 200 149.63 200Z"
                                                                    fill="#27AE60"
                                                                />
                                                                <path
                                                                    d="M147.569 187.501L141.095 179.177L144.859 176.249L147.925 180.19L158.28 169.259L161.743 172.539L147.569 187.501Z"
                                                                    fill="white"
                                                                />
                                                            </g>
                                                            <defs>
                                                                <clipPath
                                                                    id="clip0"
                                                                >
                                                                    <rect
                                                                        width="171.259"
                                                                        height="200"
                                                                        fill="white"
                                                                    />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <h1
                                                        class="text-center"
                                                        style="font-family: Inter;
                                                                    font-style: normal;
                                                                    font-weight: bold;
                                                                    font-size: 40px;
                                                                    line-height: 44px;"
                                                    >
                                                        Are you sure?
                                                    </h1>
                                                    <p
                                                        class="text-center"
                                                        style="font-family: Inter;
                                                                    font-style: normal;
                                                                    font-weight: normal;
                                                                    font-size: 15px;
                                                                    line-height: 22px;"
                                                    >
                                                        You can’t change your
                                                        answer anymore after
                                                        submitting this.
                                                    </p>
                                                </div>
                                                <div
                                                    class="col-12 d-flex justify-content-center"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary mt-3 font-weight-bold"
                                                        style="width: 100%;background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #092C4C; color: black; border: 2px solid #092C4C; border-radius: 8px; height: 45px; margin-right: 10px;"
                                                        onclick="hide()"
                                                        >
                                                        Cancel
                                                    </button>
                                                    <button
                                                        id="btn-confirm"
                                                        type="submit"
                                                        class="btn btn-primary mt-3 font-weight-bold"
                                                        style="width: 100%;background: #092C4C; border: 2px solid #092C4C; border-radius: 8px; height: 45px; margin-left: 10px;"
                                                        onclick="back()"
                                                        >
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container my-4">
            <div class="row-4">
                <div class="col-12">
                    <h3
                        class="font-weight-bold"
                        style="color: #092C4C; margin-left: 10%;"
                    >
                        Exam Name : {{ $exam->exam_name }}
                    </h3>
                </div>
            </div>

            <div class="slideshow-container">
                @foreach($questions as $item)
                <div class="mySlides">
                    <div class="row-4">
                        <div class="col-12">
                            <h5 style="color: #828282; margin-left: 5.5%;">
                                Question {{ $loop->iteration }} of
                                {{ count($questions) }}
                            </h5>
                        </div>
                    </div>
                    <hr
                        style="border-style: solid none; border-width: 3px; margin: 18px 0;"
                    />

                    <div style="margin-left: 7%;">
                        <h5
                            style="font-family: Inter; font-style: normal; font-weight: bold; font-size: 20px; line-height: 28px;color: #092C4C;"
                        >
                            {{$item->question}}
                        </h5>
                        <br />
                        <input type="hidden" id='question-{{ $loop->iteration }}' value="{{ $item->id }}">
                        <textarea
                            name=""
                            id="answer-{{ $loop->iteration }}"
                            cols="30"
                            rows="10"
                            placeholder="Answer..."
                            style="width: 90%; max-width: 90%; border: 2px solid #2e3030; border-radius: 15px"
                        ></textarea>
                    </div>
                </div>
                @endforeach
            </div>
            <br />
            <div style="text-align:center">
                <button
                    type="button"
                    id="btn-prev"
                    class="btn btn-dark btn-lg"
                    style="width: 200px; margin-right:10px; background-color: white; color: black; border: 1px gray solid;"
                    onclick="plusSlides(-1)"
                >
                    Back
                </button>
                <button
                    type="button"
                    id="btn-next"
                    class="btn btn-dark btn-lg"
                    style="width: 200px; margin-left:10px;"
                    onclick="plusSlides(1)"
                >
                    Next
                </button>
                <br />
                <br />

                @foreach($questions as $item)
                <span
                    class="dot"
                    onclick="currentSlide({{ $loop->iteration }})"
                    >{{ $loop->iteration }}</span
                >
                @endforeach
            </div>
        </div>
        <script src="/js/admin.js"></script>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                saveCurrentAnswer(slideIndex);
                showSlides((slideIndex += n));
            }

            function currentSlide(n) {
                saveCurrentAnswer(slideIndex);
                showSlides((slideIndex = n));
            }

            function saveCurrentAnswer(n){
                console.log("SAVE SOAL KE " + n);
                console.log('answer-' + n);
                console.log('question-' + n);
                var answer = document.getElementById('answer-' + n).value;
                var questionId = document.getElementById('question-' + n).value;
                var params = {
                    "_token": "{{ csrf_token() }}",
                    'examId': "{{ $exam->id }}",
                    'userId': localStorage.getItem('userId'),
                    'questionId': questionId,
                    'answer': answer,
                };
                console.log(params);

                $.ajax({
                    type: "POST",
                    url: "/student/answer",
                    data: params,
                    success: function(data, status, jqXHR){
                        console.log(data);
                    },
                    error: function(){

                    }
                });
            }

            function hide(){
                // document.getElementById('exampleModal').modal('hide');
                $('#exampleModal').modal('hide');
            }

            function back(){
                window.location.href = '/student/dashboard';
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");

                if(n == slides.length+1){
                    document.getElementById('btn-submit').click();
                }
                else if(n == slides.length) {
                    document.getElementById("btn-next").innerHTML = "Submit";
                } else {
                    document.getElementById("btn-next").innerHTML = "Next";
                }

                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(
                        " active",
                        ""
                    );
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </body>
</html>
