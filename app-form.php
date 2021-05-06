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
        
        <section class="section section-career ui container">
        <div class="ui tiny breadcrumb p-4">
            <a class="section">หน้าแรก</a>
            <i class="right chevron icon divider"></i>
            <!-- <a class="section">Registration</a>
            <i class="right chevron icon divider"></i> -->
            <div class="active section">แบบฟอร์มสมัครงาน</div>
        </div>
        <header class="hd-form d-flex justify-content-center text-center mb-4">
            <h1>แบบฟอร์มสมัครงาน <small class="d-block t-orange">Thanachart Application Form</small></h1>

        </header>
        <form method="post" action="" class="form-career">
            <!-- <div class="ui cards ui grid">
                <div class="card sixteen wide column">
                    <div class="content">
                    <div class="header">Veronika Ossi</div>
                    <div class="meta">Friend</div>
                    <div class="description">
                        Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
                    </div>
                    </div>
                </div>
            </div> -->
            <div class="main-job-title">
                <div class="title">
                    <span class="head">ตำแหน่ง และเงินเดือนที่ต้องการ</span>    
                </div>
                <div class="content">

                    <div class="ui form">

                            <!-- <div class="four wide field">
                                <label>Middle</label>
                                <input type="text" placeholder="Middle Name">
                            </div> -->
                            <div class="required field mb-4">
                                <label>ตำแหน่งที่ต้องการ / Position Applied for :</label>
                                <select name="skills" class="ui fluid normal dropdown">
                                    <option value="">เลือกตำแหน่ง / Select Position Applied</option>
                                    <option value="angular">Angular</option>
                                    <option value="css">CSS</option>
                                    <option value="design">Graphic Design</option>
                                    <option value="ember">Ember</option>
                                    <option value="html">HTML</option>
                                    <option value="ia">Information Architecture</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="mech">Mechanical Engineering</option>
                                    <option value="meteor">Meteor</option>
                                    <option value="node">NodeJS</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="python">Python</option>
                                    <option value="rails">Rails</option>
                                    <option value="react">React</option>
                                    <option value="repair">Kitchen Repair</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="ui">UI Design</option>
                                    <option value="ux">User Experience</option>
                                </select>
                            </div>
                            <div class="required field mb-4">
                                <label>เงินเดือนที่ต้องการ / Expected Salary :</label>
                                <input type="text" placeholder="กรุณาระบุเงินเดือนที่ต้องการ">
                            </div>
                            <div class="required field mb-4">
                                <label>ความพร้อมในการเริ่มงาน / Availability :</label>
                                <input type="text" placeholder="กรุณาระบุความพร้อมในการเริ่มงาน">
                            </div>
                        
                    </div>

                </div>
            </div>

            <div class="ui fluid accordion">
                <!-- acc1 -->
                <div class="title ui active">
                    <span class="head">ส่วนที่ 1 ข้อมูลส่วนบุคคล / Personal Information</span>    
                    <i class="chevron down icon"></i>
                    
                </div>
                <div class="content active">
                <div class="ui form">

                    <div class="required field mb-4">
                        <label>คำนำหน้าชื่อ</label>
                        <div class="inline fields mt-3">
                            <div class="field">
                            <div class="ui radio checkbox checked">
                                <input type="radio" name="pre_name" checked="" tabindex="0" class="hidden">
                                <label>นาย</label>
                            </div>
                            </div>
                            <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="pre_name" tabindex="0" class="hidden">
                                <label>นาง</label>
                            </div>
                            </div>
                            <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="pre_name" tabindex="0" class="hidden">
                                <label>นางสาว</label>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="ui equal width form"> -->
                        <div class="fields two">
                            <div class="field required">
                            <label>ชื่อ</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>นามสกุล</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields two">
                            <div class="field required">
                            <label>Firstname</label>
                            <input type="text" placeholder="First Name">
                            </div>
                            <div class="field required">
                            <label>Lastname</label>
                            <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field">
                            <label>ชื่อเล่น/Nickname :</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field">
                            <label>สัญชาติ/Nationality:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields two">
                            <div class="field required">
                            <label>บัตรประชาชนเลขที่/ID Card No.:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>วัน เดือน ปี เกิด/Date of Birth:</label>
                            <div class="ui fluid icon input">
                                <input type="date" placeholder="กรุณาเลือก">
                                <i class="calendar alternate outline icon t-orange"></i>
                            </div>
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>เพศ/Gender:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="field required">
                            <label>ส่วนสูง/Height:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>น้ำหนัก/Weight:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    <!-- </div> -->
                    <fieldset>
                        <h3 class="header-title mb-4 f-kanda">ที่อยู่ตามทะเบียนบ้าน Home Address:*</h3>

                        <div class="fields three">
                            <div class="field required">
                            <label>อาคาร/Building:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ห้อง/Room:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ชั้น/Floor:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>บ้านเลขที่/House No.:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>หมู่/Moo:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>หมู่บ้าน/Village:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>ถนน/Road:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ซอย/Soi:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>แขวง/District:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                        </div>
                        
                        <div class="fields three">
                            <div class="field required">
                            <label>เขต/District:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                            <div class="field required">
                            <label>จังหวัด/Province:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                            <div class="field required">
                            <label>รหัสไปรษณีย์/Post Code:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h3 class="header-title mb-4 f-kanda">ที่อยู่ตามทะเบียนบ้าน Home Address:*</h3>
                        <div class="field ui checkbox">
                            <input id="example-id" type="checkbox" checked>
                            <label for="example-id">เหมือนที่อยู่ตามทะเบียนบ้าน</label>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>อาคาร/Building:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ห้อง/Room:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ชั้น/Floor:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>บ้านเลขที่/House No.:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>หมู่/Moo:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>หมู่บ้าน/Village:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>ถนน/Road:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ซอย/Soi:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>แขวง/District:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                        </div>
                        
                        <div class="fields three">
                            <div class="field required">
                            <label>เขต/District:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                            <div class="field required">
                            <label>จังหวัด/Province:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                            <div class="field required">
                            <label>รหัสไปรษณีย์/Post Code:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ตัวเลือก1</option>
                                <option value="2">ตัวเลือก2</option>
                                <option value="3">ตัวเลือก3</option>
                            </select>
                            </div>
                        </div>
                    </fieldset>
                        <div class="fields two">
                            <div class="field required">
                            <label>เบอร์ติดต่อ / Contact No.:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>อีเมล/Email Address:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields two">
                            <div class="field required">
                            <label>LinkedIn Profile:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>Line ID:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields two">
                            <div class="field required">
                            <label>Emergency Contact:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field">
                                <div class="fields two">
                                    <div class="field required">
                                    <label>ความเกี่ยวข้อง/Relationship: </label>
                                    <select name="skills" class="ui fluid normal dropdown">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="1">ตัวเลือก1</option>
                                        <option value="2">ตัวเลือก2</option>
                                        <option value="3">ตัวเลือก3</option>
                                    </select>
                                    </div>
                                    <div class="field required">
                                    <label>โทรศัพท์:</label>
                                    <input type="text" placeholder="กรุณาระบุ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- acc2 -->
                <div class="title ui ">
                    <span class="head">ส่วนที่ 2 ข้อมูลการศึกษาและคุณสมบัติ  / Education History & Qualification</span>        
                    <i class="chevron down icon"></i>
                </div>
                <div class="content ">
                    <div class="ui form">
                        <fieldset>
                            
                        
                        <div class="fields three">
                            <div class="field required">
                            <label>อาคาร/Building:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ห้อง/Room:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ชั้น/Floor:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>

                        <div class="fields">
                            <div class="eight wide field required">
                            <label>อาคาร/Building:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>ห้อง/Room:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>ชั้น/Floor:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="ui basic button d-block icon bordered "><i class="icon t-green">+</i><span class="t-orange">เพิ่มข้อมูลการศึกษา</span></a>
                        </div>
                        </fieldset>

                        
                        <fieldset>
                        <h3 class="header-title mb-4 f-kanda">ทักษะทางด้านภาษา/Language Skills *</h3>
                        <div class="fields">
                            <div class="seven wide field">
                            <label>ภาษา/Language</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>อ่าน/Reading</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>พูด/Speaking</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>เขียน/Writing</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="seven wide field">
                            <label>ภาษา/Language</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>อ่าน/Reading</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>พูด/Speaking</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="three wide field">
                            <label>เขียน/Writing</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                        </div>
                        </fieldset>

                        
                        <fieldset>
                        <h3 class="header-title mb-4 f-kanda">การทดสอบ, การสอบวัดระดับ หรือใบอนุญาต/Test, Examinations, or License</h3>
                        <div class="fields">
                            <div class="seven wide field">
                            <label>การทดสอบ/Test</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>คะแนน/Score</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>คะแนนรวม/Total Score</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>ผ่าน/Passed</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="seven wide field">
                            <label>การทดสอบ/Test</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>คะแนน/Score</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>คะแนนรวม/Total Score</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="three wide field">
                            <label>ผ่าน/Passed</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        </fieldset>

                        <h3 class="header-title mb-4 f-kanda">การฝึกอบรม / Job Training</h3>
                        <div class="fields">
                            <div class="six wide field">
                            <label>ชื่อหลักสูตร/Course Title</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="six wide field">
                            <label>ชื่อสถาบัน/School Name</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field">
                            <label>วันที่เริ่มต้น/Start Date</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="six wide field">
                            <label>ชื่อหลักสูตร/Course Title</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="six wide field">
                            <label>ชื่อสถาบัน/School Name</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field">
                            <label>วันที่เริ่มต้น/Start Date</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        

                        <h3 class="header-title mb-4 f-kanda">คุณสมบัติ / Qualificatio</h3>

                        <div class="required field mb-4">
                                <label>ท่านสามารถทำงานเป็นกะ/I am able to work on Shift:</label>
                            <div class="inline fields mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="w_Shift" checked="" tabindex="0" class="hidden">
                                    <label>ได้</label>
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="w_Shift" tabindex="0" class="hidden">
                                    <label>ไม่ได้</label>
                                </div>
                                </div>

                            </div>
                        </div>

                        <div class="fields">
                            <div class="five wide required field mb-4">
                                <label>การใช้ยานพาหนะ</label>
                                <div class="inline fields mt-3">
                                    <div class="field">
                                    <div class="ui radio checkbox checked">
                                        <input type="radio" name="Vehicle_use" checked="" tabindex="0" class="hidden">
                                        <label>รถยนต์</label>
                                    </div>
                                    </div>
                                    <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="Vehicle_use" tabindex="0" class="hidden">
                                        <label>รถจักรยานยนต์</label>
                                    </div>
                                    </div>
        
                                </div>
                            </div>
                            <div class="required field mb-4">
                                <label>มีรถส่วนตัว</label>
                                <div class="inline fields mt-3">
                                    <div class="field">
                                    <div class="ui radio checkbox checked">
                                        <input type="radio" name="Vehicle" checked="" tabindex="0" class="hidden">
                                        <label>รถยนต์</label>
                                    </div>
                                    </div>
                                    <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="Vehicle" tabindex="0" class="hidden">
                                        <label>รถจักรยานยนต์</label>
                                    </div>
                                    </div>
        
                                </div>
                            </div>
                            
                        </div>
 
                        

                        <div class="fields two">
                            <div class="field">
                            <label>สถานภาพทางทหาร/Military Status:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                            <div class="field">
                            <label>สถานภาพสมรส/Marital Status:</label>
                            <select name="skills" class="ui fluid normal dropdown">
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- acc3 -->
                <div class="title ui ">
                    <span class="head">ส่วนที่ 3 ประวัติการทำงาน / Work Experience (เรียงจากปัจจุบันไปหาอดีต)</span>        
                    <i class="chevron down icon"></i>
                </div>
                <div class="content ">
                    <div class="ui form">
                        <fieldset>
                        <h3 class="header-title mb-4 f-kanda">ทักษะทางด้านภาษา/Language Skills *</h3>
                        <div class="fields three">
                            <div class="field required">
                            <label>ปี/Year(s)</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>เดือน/Month(s)</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>วัน/Day(s)</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields two">
                            <div class="field required">
                            <label>บริษัท/Employer:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>ตำแหน่งสุดท้าย/Ending Job Title:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>ประเภทธุรกิจ/Business Type:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>จาก/From:</label>
                            <div class="ui fluid icon input">
                                <input type="date" placeholder="กรุณาเลือก">
                                <i class="calendar alternate outline icon t-orange"></i>
                            </div>
                            </div>
                            <div class="field required">
                            <label>ถึง/To:</label>
                            <div class="ui fluid icon input">
                                <input type="date" placeholder="กรุณาเลือก">
                                <i class="calendar alternate outline icon t-orange"></i>
                            </div>
                            </div>
                        </div>
                        <div class="field ui checkbox">
                            <input id="example-id" type="checkbox" checked="">
                            <label for="example-id">Still Working</label>
                        </div>
                        <div class="fields">
                            <div class="six wide field required">
                            <label>Supervisor:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="six wide field required">
                            <label>Sup. Email:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>Sup. Phone:</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>

                        <div class="field required">
                        <label>ที่อยู่/Address:</label>
                        <!-- <input type="text" placeholder="กรุณาระบุ"> -->
                        <textarea rows="2"></textarea>
                        </div>
                        <div class="field required">
                        <label>หน้าที่ความรับผิดชอบ/Job Description:</label>
                        <textarea rows="2"></textarea>
                        </div>
                        <div class="field required">
                        <label>เหตุผลที่ลาออก/Reason for Leaving:</label>
                        <textarea rows="2"></textarea>
                        </div>


                        <div class="mb-4">
                            <a href="#" class="ui basic button d-block icon bordered "><i class="icon t-green">+</i><span class="t-orange">เพิ่มประสบการณ์การทำงาน</span></a>
                        </div>
                        </fieldset>
                    </div>
                </div>
                <!-- acc4 -->
                <div class="title ui ">
                    <span class="head">ส่วนที่ 4 ข้อมูลบิดา-มารดา / Parent Information</span>        
                    <i class="chevron down icon"></i>
                </div>
                <div class="content ">
                <div class="ui form">
                        
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>ชื่อ-นามสกุล ( บิดา ) Firstname-Lastname (Father)</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label> อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>สถานที่ทำงาน</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>เบอร์ติดต่อ Phone</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>Work at TNG</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="field mb-4">
                            <div class="inline fields mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="mrs_live" checked="" tabindex="0" class="hidden">
                                    <label>มีชีวิตอยู่</label>
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="mrs_live" tabindex="0" class="hidden">
                                    <label>เสียชีวิต</label>
                                </div>
                                </div>

                            </div>
                        </div>

                        <div class="fields">
                            <div class="eight wide field required">
                            <label>ชื่อ-นามสกุล ( มารดา ) Firstname-Lastname (Mother)</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label> อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>สถานที่ทำงาน</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>เบอร์ติดต่อ Phone</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>Work at TNG</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="field mb-4">
                            <div class="inline fields mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="mrs_live" checked="" tabindex="0" class="hidden">
                                    <label>มีชีวิตอยู่</label>
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="mrs_live" tabindex="0" class="hidden">
                                    <label>เสียชีวิต</label>
                                </div>
                                </div>

                            </div>
                        </div>
                        

                        <h3 class="header-title mb-4 f-kanda">ข้อมูลคู่สมรส / Spouse Information</h3>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>ชื่อ-นามสกุล  Firstname-Lastname </label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label> อายุ  Age</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>สถานที่ทำงาน</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>เบอร์ติดต่อ Phone</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>Work at TNG</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="field mb-4">
                            <div class="inline fields mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="mrs_live" checked="" tabindex="0" class="hidden">
                                    <label>มีชีวิตอยู่</label>
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="mrs_live" tabindex="0" class="hidden">
                                    <label>เสียชีวิต</label>
                                </div>
                                </div>

                            </div>
                        </div>

                        <h3 class="header-title mb-4 f-kanda">ข้อมูลญาติที่ท่านรู้จักในกลุ่มบริษัทธนชาต / Relatives working at Thanachart Information</h3>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>ชื่อ-นามสกุล  Firstname-Lastname </label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>ชื่อเล่น  Nickname</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>ตำแหน่ง/Position</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                        <div class="fields three">
                            <div class="field required">
                            <label>ฝ่าย Department</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="field required">
                            <label>เบอร์ติดต่อ Phone</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>

                        <fieldset>
                        <h3 class="header-title mb-4 f-kanda">บุคคลอ้างอิง / Reference</h3>
                        <div class="fields">
                            <div class="eight wide field required">
                            <label>ชื่อ-นามสกุล  Firstname-Lastname </label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>ตำแหน่ง/Title</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                            <div class="four wide field required">
                            <label>นายจ้าง/Employer</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>

                        <div class="field required">
                        <label>ที่อยู่/Address:</label>
                        <textarea rows="2"></textarea>
                        </div>

                        <div class="fields three">
                            <div class="field required">
                            <label>เบอร์ติดต่อ Phone</label>
                            <input type="text" placeholder="กรุณาระบุ">
                            </div>
                        </div>


                        <div class="mb-4">
                            <a href="#" class="ui basic button d-block icon bordered "><i class="icon t-green">+</i><span class="t-orange">เพิ่มประสบการณ์การทำงาน</span></a>
                        </div>
                        </fieldset>
                    </div>
                </div>
                <!-- acc5 -->
                <div class="title ui ">
                    <span class="head">ส่วนที่ 5 คำถามเพิ่มเติม / Questionnaire</span>        
                    <i class="chevron down icon"></i>
                </div>
                <div class="content ">
                    <div class="ui form">
                        <div class="field mb-4">
                            <label>คุณเคยมีประสบการณ์ด้านธุรกิจประกันภัยหรือไม่?</label>
                            <div class="inline fields mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_1" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="s5_1" tabindex="0" class="hidden">
                                    <label>ไม่เคย</label>
                                </div>
                                </div>

                            </div>
                        </div>
                        <div class="field">
                        <label>ในช่วงเวลาที่คุณศึกษาอยู่ คุณมีส่วนร่วมหรือชื่นชอบทำกิจกรรมใดของสถาบันการศึกษาบ้าง?</label>
                        <input type="text" placeholder="กรุณาระบุ">
                        </div>
                        <div class="field">
                        <label>งานอดิเรกที่คุณชื่นชอบมีอะไรบ้าง?</label>
                        <input type="text" placeholder="กรุณาระบุ">
                        </div>

                        <div class="field mb-4">
                            <label>คุณเคยป่วยหรือเป็นโรคติดต่อร้ายแรงหรือไม่ ถ้ามีกรุณาระบุอาการป่วยหรือโรคติดต่อร้ายแรงที่ท่านเคยเป็น</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field mb-4">
                            <label>คุณเคยเปลี่ยนชื่อ-นามสกุลหรืออย่างใดอย่างหนึ่งหรือไม่ ถ้าใช่กรุณาระบุชื่อ-นามสกุล ก่อนหน้าที่ท่านจะมีการเปลี่ยนแปลง</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field mb-4">
                            <label>คุณเคยต้องโทษหรือมีประวัติอาชญากรรมหรือไม่ ถ้าเคยกรุณาระบุโทษหรือข้อกล่าวหา</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field mb-4">
                            <label>คุณเคยถูกตรวจลายนิ้วมือ โดนหมายศาล หรือ โดนพนักงานสอบสวนเรียกตัวหรือไม่ ถ้าเคยกรุณาระบุเหตุผล</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field mb-4">
                            <label>คุณเคยถูกไล่ออก/มีประวัติการกระทำผิดวินัย/การฉ้อโกง หรือไม่ ถ้าเคยกรุณาระบุเหตุผลที่เคยถูกไล่ออก/มีประวัติการกระทำผิดวินัย/การฉ้อโกง</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field mb-4">
                            <label>คุณมีประกาศนียบัตรหรือใบอนุญาตที่เกี่ยวข้องกับตำแหน่งงานที่ท่านสมัครหรือไม่ ถ้ามีกรุณาระบุประกาศนียบัตรหรือใบอนุญาตที่ท่านมี</label>
                            <div class="inline fields d-flex mt-3">
                                <div class="field">
                                <div class="ui radio checkbox checked">
                                    <input type="radio" name="s5_2" checked="" tabindex="0" class="hidden">
                                    <label>เคย</label>
                                </div>
                                </div>
                                <div class="inline field d-flex align-items-center col pr-0">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="s5_2" tabindex="0" class="hidden">
                                        <label>ไม่เคย</label>
                                    </div>
                                    <div class="col p-0"><input type="text" placeholder="กรุณาระบุ"></div>
                                </div>

                            </div>
                        </div>

                        <div class="field">
                        <label>ท่านทราบข่าวสารการสมัครงานจาก:</label>
                        <input type="text" placeholder="กรุณาระบุ">
                        </div>
                        <div class="field">
                        <label>ชื่อพนักงานอ้างอิง/Name of Referral Employee:</label>
                        <input type="text" placeholder="กรุณาระบุ">
                        </div>

                        <div class="bg-gray mt-4 p-4 bg-secondary">
                            <div class="field ui checkbox mb-4">
                                <input id="accept1" type="checkbox" onClick="$('.footer-form button').removeClass('disabled')">
                                <label for="accept1">ข้าพเจ้ารับรองว่า ข้อมูลทั้งหมดที่ระบุไว้ในใบสมัครงานถูกต้องและเป็นความจริงทุกประการ และข้าพเจ้าได้อ่านและรับทราบนโยบายคุ้มครองข้อมูลส่วนบุคคล สำหรับผู้สมัครงาน ที่บริษัทได้แจ้งไว้ที่  www.thanachartinsurance/recruitment-policy แล้ว

                                <div class="mt-4">การให้ความยินยอมในการเก็บรวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคล เพื่อวัตถุประสงค์ในการประเมินและพิจารณาคุณสมบัติ ในการรับสมัครเข้าทำงานกับบริษัท ธนชาตประกันภัย จำกัด (มหาชน)</div>
                                </label>
                            </div>
                            <div class="field ui checkbox mb-4">
                                <input id="accept2" type="checkbox" onClick="$('.footer-form button').removeClass('disabled')">
                                <label for="accept2">ข้าพเจ้ายินยอมให้บริษัทเก็บรวบรวม ใช้ และเปิดเผยข้อมูลเครดิตบูโร ข้อมูลสุขภาพ และข้อมูลประวัติอาชญากรรม เพื่อวัตถุประสงค์ในการประเมิน และพิจารณาคุณสมบัติในการรับสมัครเข้าทำงานของบริษัท	</label>
                            </div>
                            <div class="field ui checkbox">
                                <input id="accept3" type="checkbox" onClick="$('.footer-form button').removeClass('disabled')">
                                <label for="accept3">ข้าพเจ้ายินยอมให้บริษัทสอบถามและตรวจสอบประวัติการทำงานของข้าพเจ้าจากบริษัทที่ข้าพเจ้าเป็นหรือเคยเป็นพนักงาน หรือบุคคลอ้างอิงที่ข้าพเจ้าระบุไว้ในใบสมัครงานฉบับนี้ เพื่อวัตถุประสงค์ในการประเมินและพิจารณาคุณสมบัติการรับสมัครเข้าทำงาน ทั้งนี้ ข้าพเจ้ารับรองว่าบุคคลในครอบครัวหรือบุคคลอ้างอิงที่ข้าพเจ้าระบุข้อมูลส่วนบุคคลไว้นั้น ได้รับทราบและให้ความยินยอมในการถูกอ้างอิงเพื่อประโยชน์ในกระบวนการยื่นสมัครงานครั้งนี้  และข้าพเจ้าตกลงรับผิดชอบในความเสียหายหรือสิทธิเรียกร้องใดๆ อันเกิดจากที่ข้าพเจ้าเปิดเผยข้อมูลส่วนบุคคลของบุคคลดังกล่าวต่อบริษัท</label>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- acc6 -->
                <div class="title ui ">
                    <span class="head">ส่วนที่ 6 แนบเอกสาร / Attached </span>        
                    <i class="chevron down icon"></i>
                </div>
                <div class="content ">
                    <div class="ui form">

                        <div class="field">
                            <label>CV :</label>
                            <div class="ui right action left icon input file-upload-wrapper" data-text="Click to Upload file">
                                <i class="file pdf outline icon"></i>
                                <!-- <input class="" type="text" placeholder="Click to Upload file"> -->
                                <input type="file" class="file-upload-field" id="upload_file1" name="upload_file1" accept="image/*" placeholder="Click to Upload file">
                                <label class="hid" for="upload_file1">Click to Upload file</label>
                                <img class="hidden" id="show_image_src" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" />
                                <div class="ui basic label button"><i class="trash alternate outline icon"></i></div>
                                <!-- <div class="ui basic floating dropdown button" tabindex="0">
                                    <i class="trash alternate outline icon"></i>
                                </div> -->
                            </div>
                            <script>
                                document.getElementById("upload_file1").onchange = function () {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    document.getElementById("show_image_src").src = e.target.result;
                                };
                                reader.readAsDataURL(this.files[0]);
                            };    
                            /*input file*/
                            $("form").on("change", ".file-upload-field", function(){ 
                                $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, '') ).addClass("added");
                                //$('#show_image_src').removeClass('hidden');
                            });
                            </script>
                        </div>

                        <div class="field">
                            <label>ID Card :</label>
                            <div class="ui right action left icon input file-upload-wrapper" data-text="Click to Upload file">
                            <i class="id card outline icon"></i>
                                <!-- <input class="" type="text" placeholder="Click to Upload file"> -->
                                <input type="file" class="file-upload-field" id="upload_file1" name="upload_file1" accept="image/*" placeholder="Click to Upload file">
                                <label class="hid" for="upload_file1">Click to Upload file</label>
                                <img class="hidden" id="show_image_src" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" />
                                <div class="ui basic label button"><i class="trash alternate outline icon"></i></div>
                                <!-- <div class="ui basic floating dropdown button" tabindex="0">
                                    <i class="trash alternate outline icon"></i>
                                </div> -->
                            </div>
                        </div>

                        <div class="field">
                            <label>Transcript :</label>
                            <div class="ui right action left icon input file-upload-wrapper" data-text="Click to Upload file">
                            <i class="file alternate outline icon"></i>
                                <!-- <input class="" type="text" placeholder="Click to Upload file"> -->
                                <input type="file" class="file-upload-field" id="upload_file1" name="upload_file1" accept="image/*" placeholder="Click to Upload file">
                                <label class="hid" for="upload_file1">Click to Upload file</label>
                                <img class="hidden" id="show_image_src" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" />
                                <div class="ui basic label button"><i class="trash alternate outline icon"></i></div>
                                <!-- <div class="ui basic floating dropdown button" tabindex="0">
                                    <i class="trash alternate outline icon"></i>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-form d-flex justify-content-center align-items-center mt-5 mb-5">
            
                <button class="ui grey basic button col-5 col-sm-3 col-lg-2 disabled mr-1 mr-md-3">
                บันทึก
                </button>
                <button class="ui primary button col-5 col-sm-3 col-lg-2 disabled ml-1 ml-md-3 text-nowrap">
                ยืนยันการสมัคร
                </button>
            </div>
        </form>
        </section>
        <!-- /section-body -->
		</div>
		<!-- section-footer -->
		<?php include("incs/footer.html") ?>
		<!-- /section-footer -->
	</div>
	<?php include("incs/js.html") ?>
</body>

</html>