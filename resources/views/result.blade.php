<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
            name="csrf-token"
            content="LCu3zr6N9oOZBI8M15wjImcZkLpYbYDltDySQ6Nb"
        />

        <title>Result - Exam Checker</title>
        <link href="/css/admin.css" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800&display=swap"
            rel="stylesheet"
        />
        <style>
            form {
                box-shadow: 0px 8px 40px rgba(9, 44, 76, 0.16);
                border-radius: 24px;
            }

            .card {
                border: 0px;
                border-radius: 24px;
            }

            .highlight {
                background-color: yellow;
                font-family: Jura;
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 22px;
            }

            #btn-result {
                background: #092c4c;
                border-radius: 8px;
            }

            .progress-ring {
            }

            .progress-ring__circle {
                transition: 0.6s stroke-dashoffset;
                transform: rotate(-90deg);
                transform-origin: 50% 50%;
            }

            input {
                position: fixed;
                top: 10px;
                left: 10px;
                width: 80px;
            }
        </style>
    </head>

    <body class="app header-fixed sidebar-fixed sidebar-lg-show">
        <div class="container" id="app">
            <br />
            <div class="row align-items-center justify-content-center">
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
            </div>
            <br />

            <div class="row align-items-center justify-content-center auth">
                <div class="col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-block">
                            <auth-form
                                :action="''"
                                :data="{}"
                                inline-template
                            >
                                <div
                                    class="form-horizontal"
                                    role="form"
                                    method="POST"
                                    action=""
                                    novalidate
                                >
                                    {{ csrf_field() }}
                                    <div
                                        align="center"
                                        class="auth-body"
                                        style="padding-bottom: 12px;"
                                    >
                                        <svg
                                            class="progress-ring"
                                            width="120"
                                            height="120"
                                        >
                                            <circle
                                                class="progress-ring__circle"
                                                stroke="red"
                                                stroke-width="4"
                                                fill="transparent"
                                                r="52"
                                                cx="60"
                                                cy="60"
                                                style="display:none;"
                                            />
                                            <text
                                                fill="#000000"
                                                x="30"
                                                y="70"
                                                id="percent"
                                                style="font-family: Inter; font-style: normal; font-weight: bold; font-size: 32px; line-height: 35px;"
                                            ></text>
                                        </svg>
                                        <h1 class="auth-title" id="title"></h1>
                                        <p
                                            class="auth-subtitle"
                                            id="message"
                                        ></p>
                                    </div>
                                    <a id="redirect" href="">
                                        <div class="auth-body">
                                            <div class="form-group">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-block btn-spinner"
                                                    id="btn-result"
                                                >
                                                    <i class="fa"></i>
                                                </button>
                                                <br />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </auth-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
        <script src="/js/admin.js"></script>
        <script type="text/javascript">
            var newTp = localStorage.getItem("newTp");
            var oldTp = localStorage.getItem("oldTp");
            var params = {
                _token: "{{ csrf_token() }}",
                newTp: newTp,
                oldTp: oldTp
            };

            $.ajax({
                type: "POST",
                url: "/student/match",
                data: params,
                success: function(data, status, jqXHR) {
                    document.getElementById("percent").innerHTML = data + "%";
                    setProgress(data);
                },
                error: function() {}
            });

            var circle = document.querySelector("circle");
            var radius = circle.r.baseVal.value;
            var circumference = radius * 2 * Math.PI;

            circle.style.strokeDasharray = `${circumference} ${circumference}`;
            circle.style.strokeDashoffset = `${circumference}`;

            function setProgress(percent) {
                const offset = circumference - (percent / 100) * circumference;
                circle.style.strokeDashoffset = offset;
            }

            setProgress(0);
            circle.style.display = "block";

            window.onload = function() {
                if (localStorage.getItem("result") == 1) {
                    circle.style.stroke = "green";
                    document.getElementById("title").innerHTML =
                        "Authentication Success!";
                    document.getElementById("title").style.color = "green";
                    document.getElementById("message").innerHTML =
                        "Your account has been created.";
                    document.getElementById("btn-result").innerHTML =
                        "Continue";
                    document.getElementById("percent").style.color = "red";
                    document.getElementById("redirect").href = '/student/dashboard';
                } else {
                    circle.style.stroke = "red";
                    document.getElementById("title").innerHTML =
                        "Authentication Failed!";
                    document.getElementById("title").style.color = "red";
                    document.getElementById("message").innerHTML =
                        "The score obtained is not sufficient. Try to type consistently.";
                    document.getElementById("btn-result").innerHTML =
                        "Start Over";
                    document.getElementById("percent").style.color = "green";
                    document.getElementById("redirect").href = '/student/login';
                }
            };
        </script>
    </body>
</html>
