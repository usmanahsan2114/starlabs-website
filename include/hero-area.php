<section class="breadcrumb-bg pt-200 pb-180">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="page-title">
                    <p class="small-text pb-15">Cure, Care, Connect!</p>
                    <h1>Product Details</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                <div class="page-breadcumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item">
                                <a href="../../../">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="wave-bg">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
</section>
<style>
    .breadcrumb-bg {
        position: relative;
        background: linear-gradient(to right, rgba(255, 0, 0, 0.6), rgba(255, 100, 100, 0.4)), url('../../../img/page/page-bg.jpg') no-repeat center center;
        background-size: cover;
        overflow: hidden;

        padding: 130px 0;
    }

    .wave-bg {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100px;
        overflow: hidden;
    }

    .waves {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        min-height: 100px;
        max-height: 150px;
    }

    .parallax>use {
        animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
    }

    .parallax>use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }

    .parallax>use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }

    .parallax>use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .parallax>use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }

    @keyframes move-forever {
        0% {
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            transform: translate3d(85px, 0, 0);
        }
    }
</style>