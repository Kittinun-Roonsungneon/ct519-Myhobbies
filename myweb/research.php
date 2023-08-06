<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research</title>
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
            My Research
        </h2>
    </div>
    <div class="row tm-mb-74 tm-row-1640">            
        <div class="col-lg-5 col-md-6 col-12 mb-3">
            <img src="img/maxresdefault.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-7 col-md-6 col-12">
            <div class="tm-about-img-text">
                <p class="mb-4">
                    <h2>การเปรียบเทียบประสิทธิภาพ Could แต่ละตัว</h2>
                </p>
                <p>ในปัจจุบัน Cloud (คลาวด์) เป็นระบบคอมพิวเตอร์ที่เกิดขึ้นเพื่อรองรับการทำงานของผู้ใช้งานในทุกๆด้าน ทั้งด้านระบบเครือข่าย ด้านการจัดเก็บข้อมูล ด้านการติดตั้งฐานข้อมูล หรือการใช้งานซอฟต์แวร์เฉพาะด้านในธุรกิจต่างๆ เป็นต้น โดยที่ผู้ใช้บริการไม่จำเป็นต้องติดตั้งระบบทั้งฮาร์ดแวร์และซอฟต์แวร์ไว้ที่สำนักงานของตนให้มันยุ่งยาก แต่ผู้ใช้บริการสามารถใช้งานง่ายๆ ด้วยการเชื่อมต่อกับระบบ Cloud ผ่านอินเทอร์เน็ตได้เลย
        ปัจจุบันถ้าหากพูดถึงผู้ให้บริการแพลตฟอร์ม Cloud หลักๆจะมีอยู่สามแห่งที่ครองส่วนแบ่งการตลาดส่วนใหญ่ คงหนีไม่พ้น Amazon Web Services (AWS), Microsoft Azure และ Google Cloud Platform (GCP) </p>
                <p>
                    โดยใช้วิธีการทำ linux ubuntu รับ load และทดสอบประสิทธิภาพ <br>
                    โดยมี linux database private <br>
                    โดยมี linux backend public <br>
                    โดยมี linux web public <br>
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