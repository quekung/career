<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="th">

<?php include("incs/head-top.html") ?>

<body ng-app="ngApp" ng-controller="MainController" class="ng-scope">
    <div class="main-all">
        <!-- section-header -->
        <?php include("incs/header.html") ?>
        <!-- section-header -->
        <!-- section-body -->
        <section class="section section-career-detail">
            <div class="ui container">
                <div class="ui tiny breadcrumb p-4">
                    <a class="section">หน้าแรก</a>
                    <i class="right chevron icon divider"></i>
                    <a class="section">ประกาศรับสมัครงาน</a>
                    <i class="right chevron icon divider"></i>
                    <div class="active section">AEC Business Strategy</div>
                </div>
            </div>

            <div class="ui container bg-white">

                <div class="reader-job p-md-3">
                    <div class="ui grid">
                        <div class="hd eleven wide large ten wide computer sixteen wide mobile column d-flex align-items-center mb-0 mb-lg-4">
                            <header class="f-kanda col-12 p-0 d-flex justify-content-between align-items-center">
                                <h1 class="head-topic f-kanda t-black">
                                    AEC Business Strategy
                                </h1>
                                <em class="pr-0 pr-md-4">1 อัตรา </em>
                            </header>
                        </div>
                        <div class="aside five wide large six wide computer sixteen wide mobile column mb-4">
                            <div class="ui two column stackable grid">
                                <div class="column"><a href="app-form.php" class="ui primary button text-nowrap btn-block style col"> สมัครออนไลน์</a></div>
                                <div class="column"><a href="detail.php" class="ui primary basic button text-nowrap btn-block style col"><i class="share alternate icon"></i> แชร์</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="ui grid d-flex flex-row-reverse">

                        <div class="five wide large six wide computer sixteen wide mobile column">
                            <ul class="list-info f-sarabun">
                                <li class="c1 mb-3">
                                    <span class="t-black d-block mb-1">แผนก :</span> <span>ฝ่ายเร่งรัดหนี้สิน</span>
                                </li>
                                <li class="c1 mb-3">
                                    <span class="t-black d-block mb-1">เงินเดือน :</span> <span>เงินเดือนตามโครงสร้างบริษัท</span>
                                </li>
                                <li class="c1 mb-3">
                                    <span class="t-black d-block mb-1">สถานที่ปฏิบัติงาน :</span> <span>สำนักงานใหญ่</span>
                                </li>
                                <li class="c1 mb-3">
                                    <span class="t-black d-block mb-1">วันที่ลงรับสมัคร :</span> <span>28 เมษายน 2543</span>
                                </li>
                            </ul>
                        </div>
                        <div class="eleven wide large ten wide computer sixteen wide mobile column mb-4">
                            <div class="read-body">
                                <h3>รายละเอียดงาน</h3>
                                <ul class="list">
                                    <li>กำกับดูแลการปฏิบัติงานของ Manager ให้มีประสิทธิภาพ</li>
                                    <li>จัดทำงบประมาณประจำปี และควบคุมค่าใช้จ่ายต่างๆให้อยู่ในงบประมาณ</li>
                                    <li>วิเคราะห์สถานการณ์และวางแผนการทำงานของบริษัทฯกับทีมงานให้เกิดประสิทธิภาพ</li>
                                    <li>กำหนด Target และ KPI ของตำแหน่งผู้ช่วยผู้จัดการขึ้นไป ของงานเร่งรัดหนี้สิน</li>
                                    <li>จัดทำอัตราค่าคอมมิชชั่นให้กับพนักงานเร่งรัดหนี้สิน</li>
                                </ul>

                                <h3>คุณสมบัติผู้สมัคร</h3>
                                <ul class="list">
                                    <li>เพศชาย/หญิง อายุ 35 ปีขึ้นไป</li>
                                    <li>วุฒิปริญญาตรี ไม่จำกัดสาขา</li>
                                    <li>มีประสบการณ์บริหารจัดการหน่วยงานระดับรองผู้อำนวยการฝ่าย/ผู้อำนวยการฝ่ายไม่น้อยกว่า 5 ปี</li>
                                    <li>มีประสบการณ์บริหารงานด้านแก้ไขหนี้และเร่งรัดหนี้สินอย่างน้อย 5 ปี</li>
                                    <li>มีทักษะในการบริหารจัดการที่ดี</li>
                                    <li>มีความเป็นผู้นำ สามารถทำงานที่อยู่ในภายใต้แรงกดดันได้ดี</li>
                                </ul>

                                <h3>สวัสดิการ</h3>
                                <ul class="list">
                                    <li>Bonus ประจำปี</li>
                                </ul>

                                <h3>เอกสารประกอบการรับสมัคร</h3>
                                <ul class="list">
                                    <li>สำเนาบัตรประชาชน</li>
                                    <li>เอกสารสำเนาวุฒิการศึกษา</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <!-- /section-body -->
    </div>
    <!-- section-footer -->
    <?php include("incs/footer.html") ?>
    <!-- /section-footer -->
    </div>
    <?php include("incs/js.html") ?>
    <script type="text/javascript" src="./assets/js/parallax.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.parallax-window').parallax();
        });
    </script>
</body>

</html>