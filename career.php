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
        <section class="section section-career">
        <div class="banner-top">
            <div class="ui container d-flex justify-content-start align-items-end">
                <div class="_self-cl-xs-12-md-08-pd0 center-xs end-md cover parallax-window" data-parallax="scroll" data-image-src="./assets/imgs/bg-career.jpg"><!--span class="visible-xs visible-sm"><img src="./assets/imgs/bg-career.jpg" alt="หากท่านต้องการสร้างผลงานกับเรา?"></span--></div>

                <div class="wrap mb-5">
                    <div class="title">
                        <h1 class="t-orange f-kanda">#WORK</h1>
                        <p class="t-white">ร่วมเป็นส่วนหนึ่งของทีมสุดยอดผู้เชี่ยวชาญ <br>ที่จะทำให้ทุกความเป็นไปได้ในโลกดิจิทัลแบงค์กิ้งเป็นจริง</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui container">
            <div class="search-box p-0 p-lg-4">
                <div class="ui grid">
                    <div class="twelve wide computer sixteen wide mobile column">
                        <div class="ui left icon input col p-0">
                        <input type="text" placeholder="Search...">
                        <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="four wide computer sixteen wide mobile column"><button class="ui primary button text-nowrap btn-block style col">
                    ค้นหา
                    </button></div>
                </div>

                <!-- filter -->
                <div class="d-flex justify-content-end mt-2 mb-4 mb-lg-0">
                    <div class="ui dropdown">
                        <input type="hidden" name="filters">
                        
                        <span class="text">จัดเรียง</span>
                        <i class="sort amount down icon"></i>
                        <div class="menu">
                            <!-- <div class="ui icon search input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search tags...">
                            </div>
                            <div class="divider"></div>
                            <div class="header">
                            <i class="tags icon"></i>
                            Tag Label
                            </div> -->
                            <div class="scrolling menu">
                            <div class="item" data-value="important">
                                <div class="ui red empty circular label"></div>
                                Important
                            </div>
                            <div class="item" data-value="announcement">
                                <div class="ui blue empty circular label"></div>
                                Announcement
                            </div>
                            <div class="item" data-value="cannotfix">
                                <div class="ui black empty circular label"></div>
                                Cannot Fix
                            </div>
                            <!-- <div class="item" data-value="news">
                                <div class="ui purple empty circular label"></div>
                                News
                            </div>
                            <div class="item" data-value="enhancement">
                                <div class="ui orange empty circular label"></div>
                                Enhancement
                            </div>
                            <div class="item" data-value="off-topic">
                                <div class="ui yellow empty circular label"></div>
                                Off Topic
                            </div>
                            <div class="item" data-value="interesting">
                                <div class="ui pink empty circular label"></div>
                                Interesting
                            </div>
                            <div class="item" data-value="discussion">
                                <div class="ui green empty circular label"></div>
                                Discussion
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-jobs">
                <!-- box1 -->
                <div class="bx bg-white p-4 mb-4">
                    <div class="ui grid">
                        <div class="twelve wide computer sixteen wide mobile column">
                            <h2>ผู้ช่วยผู้จัดการ ฝ่ายปฏิบัติการประกันภัยหรือประกันชีวิต</h2>
                            <div class="info ui grid">
                                <div class="six wide computer sixteen wide mobile column pt-4 pb-0 pb-lg-2">
                                    <div class="location"><i class="map marker alternate icon"></i> สำนักงานใหญ่ The nine</div>
                                </div>
                                <div class="six wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="depart">สังกัดสายงาน: Operation Support</div>
                                </div>
                                <div class="four wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="date">12/02/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer ten wide mobile column"><a href="career-detail.php" class="ui primary button text-nowrap btn-block style col">ดูรายละเอียด</a></div>
                    </div>
                </div>
                <!-- box2 -->
                <div class="bx bg-white p-4 mb-4">
                    <div class="ui grid">
                        <div class="twelve wide computer sixteen wide mobile column">
                            <h2>เจ้าหน้าที่ส่วนพัฒนาผลิตภัณฑ์ประกันภัยทั่วไป</h2>
                            <div class="info ui grid">
                                <div class="six wide computer sixteen wide mobile column pt-4 pb-0 pb-lg-2">
                                    <div class="location"><i class="map marker alternate icon"></i> สาขาเชียใหม่</div>
                                </div>
                                <div class="six wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="depart">สังกัดสายงาน: Operation Support</div>
                                </div>
                                <div class="four wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="date">12/02/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer ten wide mobile column"><a href="career-detail.php" class="ui primary button text-nowrap btn-block style col">ดูรายละเอียด</a></div>
                    </div>
                </div>
                
                <!-- box3 -->
                <div class="bx bg-white p-4 mb-4">
                    <div class="ui grid">
                        <div class="twelve wide computer sixteen wide mobile column">
                            <h2>เจ้าหน้าที่บริหารความเสี่ยงด้านรับประกันภัย</h2>
                            <div class="info ui grid">
                                <div class="six wide computer sixteen wide mobile column pt-4 pb-0 pb-lg-2">
                                    <div class="location"><i class="map marker alternate icon"></i> สำนักงานใหญ่ The nine</div>
                                </div>
                                <div class="six wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="depart">สังกัดสายงาน: Operation Support</div>
                                </div>
                                <div class="four wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="date">12/02/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer ten wide mobile column"><a href="career-detail.php" class="ui primary button text-nowrap btn-block style col">ดูรายละเอียด</a></div>
                    </div>
                </div>
                
                <!-- box4 -->
                <div class="bx bg-white p-4 mb-4">
                    <div class="ui grid">
                        <div class="twelve wide computer sixteen wide mobile column">
                            <h2>Telesales</h2>
                            <div class="info ui grid">
                                <div class="six wide computer sixteen wide mobile column pt-4 pb-0 pb-lg-2">
                                    <div class="location"><i class="map marker alternate icon"></i> สำนักงานใหญ่ The nine</div>
                                </div>
                                <div class="six wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="depart">สังกัดสายงาน: Operation Support</div>
                                </div>
                                <div class="four wide computer sixteen wide mobile column pt-0 pt-lg-4 pb-0 pb-lg-2">
                                    <div class="date">12/02/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer ten wide mobile column"><a href="career-detail.php" class="ui primary button text-nowrap btn-block style col">ดูรายละเอียด</a></div>
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
    $(document).ready(function(){
        $('.parallax-window').parallax();
    });
    </script>
</body>

</html>