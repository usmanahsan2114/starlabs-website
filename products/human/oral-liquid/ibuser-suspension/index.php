<!doctype html>
<html class="no-js" lang="en">

<head>

    <?php include_once('../../../../include/seo.php'); ?>
    <?php include_once('../../../../include/head4.php'); ?>

</head>

<body>

    <!-- header begin -->
    <?php include_once('../../../../include/header4.php'); ?>
    <!-- header end -->

    <main id="main-content">
        <?php include_once('../../../../include/breadcrumb.php'); ?>
        <!-- hero-area start -->
        <!-- hero-area end -->
        <!-- shop-banner-area start -->
        <section class="shop-banner-area pt-40 pb-90"
            style="background-image: url('../../../../img/star-b.gif'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="shop-banner-wrapper p-4 shadow">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="product-details-img mb-30 ml-9">
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                                <div class="product-large-img">
                                                    <img src="../../../../img/product/human/oral-liquid/ibuser-suspension.jpg" alt="Ibuser Suspension - Human Oral Liquids by Star Laboratories" loading="lazy" decoding="async">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="product-details mb-30">
                                        <div class="product-details-title">
                                            <p style="color:#db0000;"> <b>Human</b> ~ Oral Liquid</p>
                                            <h1>Ibuser Suspension</h1>
                                        </div>
                                        <p> Used as an analgesic for relief of mild to moderate muscular pain, post-immunisation pyrexia, symptomatic relief of headache, earache, dental pain and backache</p>
                                        <?php include_once('../../../../include/product.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            /* Read More Button Start */
            .product-description {
                position: relative;
                max-height: 5em;
                /* Approximately 2 lines of text */
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .product-description.expanded {
                max-height: none;
            }

            .read-more-btn {
                background: none;
                border: none;
                color: #db0000;
                cursor: pointer;
                padding: 0;
                margin-top: 10px;
            }

            /* Read More Button End */
            /* Shop Banner Area start */
            .shop-banner-wrapper {
                padding-left: 10px;
                padding-right: 60px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0);
                border-radius: 10px;
                margin-right: 30px;
            }

            .product-details-img {
                border-radius: 5px;
            }

            .product-details {
                margin-right: 10px;
            }

            @media (max-width: 767px) {
                .shop-banner-wrapper {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }

            /* Scoped styling for the pack sizes section */
            .product-cat {
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .pack-sizes {
                list-style: none;
                padding: 0;
                margin: 20px 0;
                display: flex;
                justify-content: flex-start;
                /* Align items to the left */
                flex-wrap: nowrap;
                /* Keep icons in a single row */
                font-weight: bold;
                gap: 5px;
                /* Small gap between size icons */
            }

            .pack-sizes li {
                margin: 0;
                /* Reset margin */
                display: flex;
                align-items: center;
            }

            .product-cat .size-icon {
                display: inline-block;
                width: 100px;
                /* Rectangular shape */
                height: 50px;
                line-height: 50px;
                border-radius: 5px;
                /* Slight rounding */
                background-color: #db0000;
                color: white;
                text-align: center;
                font-size: 18px;
                margin-right: 5px;
                /* Reduced space between icons */
                transition: transform 0.3s ease;
            }

            .product-cat .size-icon:hover {
                transform: scale(1.1);
            }

            /* Responsive layout for smaller screens */
            @media (max-width: 768px) {
                .pack-sizes {
                    flex-wrap: wrap;
                    /* Wrap icons on smaller screens */
                    justify-content: center;
                    gap: 5px;
                    /* Maintain small gap between icons */
                }

                .pack-sizes li {
                    width: 48%;
                    /* Adjust width for smaller screens */
                    margin-bottom: 10px;
                }

                .product-cat .size-icon {
                    width: 100%;
                    /* Full width on smaller screens */
                }
            }

            /* Shop Banner Area Image Container Hover Effect */
            .shop-banner-wrapper .product-large-img {
                border: 1px solid rgba(0, 0, 0, 0.1);
                /* Light border */
                border-radius: 5px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                /* Initial shadow */
            }

            /* Hover effect for 3D look */
            .shop-banner-wrapper .product-large-img:hover {
                transform: scale(1.05);
                /* Slight zoom for 3D effect */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                /* Enhanced shadow on hover */
            }

            /* Animation for image on hover */
            .shop-banner-wrapper .product-large-img img {
                transition: transform 0.3s ease;
            }

            .shop-banner-wrapper .product-large-img:hover img {
                transform: translateY(-10px);
                /* Move the image up slightly on hover */
            }

            /* Maintain existing padding and positioning */
            .shop-banner-wrapper {
                padding-left: 10px;
                padding-right: 60px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0);
                border-radius: 10px;
                margin-right: 30px;
            }

            .product-details-img {
                border-radius: 5px;
            }

            .product-details {
                margin-right: 10px;
            }

            /* Responsive adjustments */
            @media (max-width: 767px) {
                .shop-banner-wrapper {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const description = document.querySelector('.product-description');
                const readMoreBtn = document.querySelector('.read-more-btn');

                if (description && readMoreBtn) {
                    const paragraph = description.querySelector('p');

                    if (paragraph.scrollHeight > description.clientHeight) {
                        readMoreBtn.style.display = 'inline-block';

                        readMoreBtn.addEventListener('click', function () {
                            if (description.classList.contains('expanded')) {
                                description.classList.remove('expanded');
                                this.textContent = 'Read More';
                            } else {
                                description.classList.add('expanded');
                                this.textContent = 'Read Less';
                            }
                        });
                    } else {
                        readMoreBtn.style.display = 'none';
                    }
                }
            });
        </script>
        <!-- product-desc-area start -->
        <?php include_once('../../../../include/product-body.php'); ?>
        <!-- product-desc-area end -->
        <!-- shop-banner-area end -->
        <!--PDF Download Start-->
        <?php include_once('../../../../include/download.php'); ?>
        <!--PDF Download End-->
        <!--Related Product Start-->
        <?php include_once('../../../../include/related.php'); ?>
        <!--Related Product End-->
    </main>

    <!-- footer start -->
    <?php include_once('../../../../include/footer4.php'); ?>
    <!-- footer end -->

    <!-- JS here -->
    <?php include_once('../../../../include/end4.php'); ?>

</body>

</html>