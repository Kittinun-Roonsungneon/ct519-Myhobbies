<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
    <?php 
        include('navbar.php');
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg"></div>

<div class="container-fluid tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            About Kittinun Roonsungneon
        </h2>
    </div>
    <div class="row tm-mb-74 tm-row-1640">            
        <div class="col-lg-5 col-md-6 col-12 mb-3">
            <img src="img/bas.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-7 col-md-6 col-12">
            <div class="tm-about-img-text">
                <p class="mb-4">
                    กราบสวัสดีทุกท่าน ผมชื่อนายกิตตินันท์ หรุ่นสูงเนิน ชื่อเล่นชื่อบาส</p>
                <p>
                <p> ขณะนี้กำลังศึกษาอยู่ คณะวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยธุรกิจบัณฑิตย์ </p>
                <p>รหัสนักศึกษา 65130695</p>
            </div>                
        </div>
    </div>
    <div class="row tm-mb-50">
        <div class="col-md-6 col-12">
            <div class="tm-about-2-col">
                <h2 class="tm-text-primary mb-4">
                    My GirlFriend
                </h2>
                <p class="mb-4">
                คิม เซ-จ็อง (เกาหลี: 김세정; อาร์อาร์: Kim Se-jeong; เกิด 28 สิงหาคม ค.ศ. 1996) รู้จักกันในนาม เซจ็อง เป็นนักแสดงและนักร้องหญิงชาวเกาหลีใต้ <h6><strong>ที่รักของผมเอง</strong></h6>
                </p>
                
            </div>                
        </div> 
        <div class="col-md-6 col-12">
            <div class="tm-about-2-col">
                <h2 class="tm-text-primary mb-4">
                    Picture
                </h2>
                <p class="mb-4">
                    <img src="img/A-Business-Proposal-star-Kim-Sejeong-tests-positive-for-COVID-19-currently-in-self-quarantine-after-wrapping-up-the-series-1.jpg" alt="Image" class="img-fluid">
                </p>
                
            </div>                
        </div>     
    </div>

</div> <!-- container-fluid, tm-container-content -->

    <?php 
        include('footer.php');
    ?>
</body>
<script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</html>