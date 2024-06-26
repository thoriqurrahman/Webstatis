<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;

        .profile {
            position: relative;
            width: 300px;
            height: 350px;
            background: url("images/ganteng.JPG");
            background-size: cover;
            cursor: pointer;
            border: 12px;
            border-top-right-radius: 35px !important;
            border-radius: 6px
        }

        .overlay {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 12px;
            cursor: pointer;
            opacity: 0;
            transition: all 1s;
            border-top-right-radius: 35px !important;
            border-radius: 6px
        }

        .profile:hover .overlay {
            opacity: 1
        }

        .social-icons {
            display: flex;
            list-style: none;
            bottom: 10px;
            position: absolute;
            text-align: center;
            justify-content: center;
            left: 22px
        }

        .social-icons li {
            width: 25px;
            height: 25px;
            border: 1px solid #eee;
            padding: 20px;
            margin-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-radius: 5px;
            transition: all 1s
        }

        .social-icons li:hover {
            background: #fff;
            color: #000
        }

        .overlay .about {
            position: relative;
            justify-content: center;
            align-items: center;
            display: flex;
            top: 40%;
            color: #fff;
            flex: column
        }
    }
</style>
<style>
    body {
        color: #6F8BA4;
        margin-top: 20px;
    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg {
        background-color: #f5f5f5;
    }

    /* About Me 
---------------------*/
    .about-text h3 {
        font-size: 45px;
        font-weight: 700;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-text p mark {
        font-weight: 600;
        color: #20247b;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #20247b;
        font-weight: 600;
        width: 88px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #20247b;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 15px;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }

    .about-section .counter {
        padding: 22px 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .about-section .counter .count {
        font-weight: 700;
        color: #20247b;
        margin: 0 0 5px;
    }

    .about-section .counter p {
        font-weight: 600;
        margin: 0;
    }

    mark {
        background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
        background-size: 100% 3px;
        background-repeat: no-repeat;
        background-position: 0 bottom;
        background-color: transparent;
        padding: 0;
        color: currentColor;
    }

    .theme-color {
        color: #fc5356;
    }

    .dark-color {
        color: #20247b;
    }
</style>

<h1><marquee behavior="alternate" direction="left"><i class="fa fa-map-marker" aria-hidden="true">hehh, jangan ngintip</i></marquee></h1>

<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>
                    <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Indonesia</h6>
                    <p>Saya <mark>design and develop</mark> layanan untuk pelanggan dari semua ukuran, yang mengkhususkan diri dalam pembuatan situs web, layanan web, dan toko online yang bergaya dan modern. Semangat saya adalah merancang pengalaman pengguna digital melalui antarmuka yang berani dan interaksi yang bermakna.
                    </p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Birthday</label>
                                <p>27th mei 2008</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>15 Yr</p>
                            </div>
                            <div class="media">
                                <label>Residence</label>
                                <p>jakarta</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>Jakut, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>thoriqurrahmana@gmail.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>815-1161-3869</p>
                            </div>
                            <div class="media">
                                <label>thq.rn2705</label>
                                <p>thq.rn2705</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Tersedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <div class="wrapper">
                        <div class="profile">
                            <div class="overlay">
                                <div class="about d-flex flex-column">
                                    <h4>Thoriqurrahman Akrami</h4> <span>Web Developer</span>
                                </div>
                                <ul class="social-icons">
                                    <li><i class="bi bi-facebook"><img src="images/facebook.svg" alt=""></i></li>
                                    <li><i class="fa fa-linkedin"><img src="images/linkedin.svg" alt=""></i></li>
                                    <li><i class="fa fa-twitter"><img src="images/twitter.svg" alt=""></i></li>
                                    <li><i class="fa fa-instagram"><img src="images/instagram.svg" alt=""></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                        <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Work Results</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                        <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>