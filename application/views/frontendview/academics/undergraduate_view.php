<header>
    <div class="inner_page_top_div">
        <div class="inner_page_top_img" style="background: url(<?php echo base_url("assets/frontend/"); ?>images/shading.png) left center no-repeat, url(<?php echo base_url("assets/frontend/"); ?>images/slider01.jpg) center top repeat;">
            <div class="container inner_page_top_heading">
                <div class="row ms-auto">
                    <h1 class="heading" data-aos="fade-up">Undergraduate Programmes</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('undergraduate-programme'); ?>">Academic</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('undergraduate-programme'); ?>">Academic Programmes </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><b>Undergraduate Programmes</b></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header section -->

<!--=============================================-->
<!--===================header====================-->

<div class="w-100 d-none d-md-block"></div>
<br>


<!--=============================================-->
<!--===================body====================-->


<!-- mission section -->

<div class="container">

    <div class="row">

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row ms-auto">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 0px !important;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <p>BSc Agtech & Mgt</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            <p>Bsc ASF</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-fst" type="button" role="tab" aria-controls="pills-fst"
                            aria-selected="false">
                            <p>Bsc FST</p>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">

                        <h1 class="heading mb-3">B.sc. Degree In Agricultural Technology And Management (B.sc. Agtech &
                            Mgt)</h1>

                        <div class="row">

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <img src="<?php echo base_url('front_img/').$undergraduate_data[0]->fFigure1; ?>" alt="" class="d-block w-100" data-aos="fade-down">
                                <p><?php echo $undergraduate_data[0]->vTitleFigure1; ?></p>
                            </div>

                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <h1 class="sub_heading mb-3"><?php echo $undergraduate_data[0]->vSubHeading1; ?></h1>
                                <p><?php echo $undergraduate_data[0]->tContent1; ?></p>
                            </div>

                        </div>

                        <h1 class="sub_heading mb-3"><?php echo $undergraduate_data[0]->vSubHeading2; ?></h1>

                        <?php echo $undergraduate_data[0]->tContent2; ?>

                        <div class="clearfix"></div>
                        <br>

                        <div class="row">

                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <img src="<?php echo base_url('front_img/').$undergraduate_data[0]->fFigure2; ?>" alt="" class="d-block w-100" data-aos="fade-down">
                                <p><?php echo $undergraduate_data[0]->vTitleFigure2; ?></p>
                            </div>

                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <?php echo $undergraduate_data[0]->tContent3; ?>

                            </div>

                        </div>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_data[0]->tCoreProStructure; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_data[0]->tCoreProSequence; ?>

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_data[0]->tAdvProStructure; ?>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>

                        <?php echo $undergraduate_data[0]->tAdvProModule; ?>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href='<?php echo base_url('front_img/').$undergraduate_data[0]->fPdf; ?>' target="_blank">
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <h1 class="sub_heading mb-1">Calendar of Dates-2019/2020</h1>
                        <h1 class="sub_heading mb-3">17.10.2019 - Amendment</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <!--                       <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                      </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>&nbsp;</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ACADEMIC PROGRAMME IS SUSPENDED</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>AgTech & Mgt, AS & F, and BFST Programmes</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Undergraduate Admission
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">Admission under general admission policy
                                                implemented by he University Grants Commission(UGC).</h1>

                                            <ol class="custome_ol">
                                                <li>B.Sc. in Agricultural Technology and Management.</li>
                                                <ol class="custome_ol">
                                                    <li class="d">G.C.E. (O/L)</li>

                                                    <ol class="custome_ol">
                                                        <li class="c">Six passes in one sitting including Pure/Applied
                                                            Mathematics, Chemestry, Biology/Botany/Zoology,
                                                            Physics/Agriculture with 3 credit passes from the subject
                                                            listed,</li>
                                                        <li class="c">G.C.E. (O/L) New or NCGE | Six passes in one
                                                            sitting with 4 credit passes including Science.</li>
                                                    </ol>

                                                    <li class="d">Passes in at least three of the following G.C.E. (A/L)
                                                        subjects; Botany, Chemistry, Zoology, Physics, Geography and
                                                        Agriculture, obtaining at a single attempt.</li>
                                                </ol>
                                                <li>B.Sc. in Food Science and Technology</li>
                                                <li>B.Sc. in Animal Science and Fisheries</li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Programme Organization
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="heading mb-1">Credit Unit</h1>
                                            <p>
                                                This is the numeric value assigned to a course, which indicates its
                                                relative weight within the degree programme. The credit value of a
                                                course is indicated by a single digit following the course notation and
                                                course title. One Credit Unit is equivalent to either 15 hours of
                                                lectures or 30 hours of practical/tutorials/assignments/field visits.
                                            </p>

                                            <p>
                                                The curriculum of the B.Sc. Agricultural Technology and Management and
                                                B.Sc. Animal Science and Fisheries degrees have being developed using a
                                                student learning outcomes based approach. Hence, each credit unit has
                                                been assigned a maximum total student work load of 40 hours including
                                                lectures, practical and specified independent learning (IL) activities.
                                            </p>

                                            <h1 class="heading mb-1">Credit</h1>
                                            <p>
                                                A 4-point scale will be adopted for grading the performance of students
                                                in credited courses. A letter grade shall be awarded to every credited
                                                course. The letter grades and corresponding grade points are given
                                                below.
                                            </p>

                                            <!-- table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Letter Grade*</th>
                                                            <th scope="col">Grade Point</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- table -->

                                            <p>
                                                <b>* A+ is given only to those who obtain a distinctly high mark and are
                                                    outliers of the marks' distribution.</b>
                                            </p>

                                            <div class="gray_text_div mb-3">
                                                <p style="margin-bottom: 0px;">Note: The threshold level of grading is
                                                    equivalent to a C-. To pass a credited course a student should
                                                    achieve a minimum of 'C-' grade.</p>
                                            </div>

                                            <h1 class="heading mb-1">Grade Points</h1>
                                            <p>
                                                Grading procedure recommended by the Senate of the University of
                                                Peradeniya will be adopted. Accordingly, the grade for a course shall
                                                not correspond to a cut-off markm but based on the distribution of marks
                                                for the course.
                                            </p>

                                            <h1 class="heading mb-1">Grade Point Average (GPA)</h1>
                                            <p>
                                                An aggregate index will be calculated as the weighted average of the
                                                grade points obtained from grades of different courses and the number of
                                                corresponding course units. This aggregate index shall be called the
                                                Grade Point Average (GPA).
                                            </p>

                                            <h1 class="heading mb-1">Independent Study</h1>
                                            <p>
                                                Independant learning is identified for most of the courses offered. The
                                                students are supposed to complete independant learning components
                                                assigned by the teachers.
                                            </p>

                                            <h1 class="heading mb-1">No- Credit Course</h1>
                                            <p>
                                                It is compulsory for every student to achieve a 'Pass' or 'Satisfactory'
                                                grade from every non-credited course that he/she offer.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Requirements for a Degree
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>102 credit units from the specified compulsory courses of the Core
                                                    Programme.</li>
                                                <li>a minimum of 18 credit units from the specified compulsory and
                                                    optional courses of the selected Advanced Module.</li>
                                                <li>06 credit units from the 'Project' in a selected field of study.
                                                </li>
                                            </ul>

                                            <p>
                                                In addition to the above mentioned credited courses, a set of
                                                supplementary and complementary courses are offered to impart
                                                satisfactory proficiency in English, Sinhala, Tamil, Mathematics,
                                                Physics, Information and Communication Technology and Laboratory Skills
                                                among all students. It is mandatory for every student to pass the
                                                supplementary courses before the 6th semester, and the complementary
                                                courses before the 8th semester to be eligible for the award of the
                                                degree.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Assessment Scheme
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>The courses will be assessed on a continuous basis to provide an
                                                    opportunity for student to receive a feedback on his/her performance
                                                    during the course.</li>
                                                <li>Every course will have more than one assessment, conducted at the
                                                    critical stages of learning of the course.</li>
                                                <li>Appropriate assessment procedure/s, the percentage contribution of
                                                    each assessment including independent learning activities to the
                                                    final mark, and the appropriate stage (time/level) of assessment for
                                                    each course will be determined by the course coordinator and should
                                                    be approved by the relevant Department of Study.</li>
                                                <li>The approved assessment procedure for a given course will be made
                                                    known to the students at the commencement of the course.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->


                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <h1 class="heading mb-3">B.SC. DEGREE IN ANIMAL SCIENCE AND FISHERIES (B.Sc. AS&F)</h1>

                        <p>
                            Livestock industry and Fisheries play a crucial role in the economy of Sri Lanka where
                            livelihood of many depends on direct or indirect involvement in those sectors. With the
                            expansion and development of those industries, the need and demand has risen for graduates
                            specialized in those fields having capabilities to solve problems and boost growth of those
                            sectors. B.Sc. in Animal Science and Fisheries degree programme was meticulously designed to
                            cater to the growing need for such graduates locally and internationally.
                        </p>

                        <h1 class="sub_heading mb-3">Objectives of the Degree Programme</h1>
                        <p>Following are the essential features of the programme:</p>

                        <ul class="custome_ul">
                            <li>Thorough and well balanced theoretical knowledge as well as practical skills on the
                                subject matter. (Theory : Practical = 1437 h:1286 h)</li>
                            <li>Series of On-farm/industrial training in all major disciplines, periodically scheduled
                                during semester and vacation periods.</li>
                            <li>Supplementary minor projects/assignments, and a research oriented major project which
                                will provide an in-depth knowledge on a specific field (Dairy, Poultry, Fisheries etc.).
                            </li>
                        </ul>

                        <p>The AS & F graduate will have the necessary knowledge, skills and attitudes to pursue a
                            career as an academic, researcher, manager, planner, implementer and entrepreneur in the
                            field of animal science and fisheries.</p>

                        <div class="row mb-3">

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h1 class="sub_heading mb-3">Main Features of the Degree Programme</h1>
                                <p>The B.Sc. AS & F degree curriculum was formulated after a series of consultations
                                    with various stakeholders, features of the degree programmes offered by the Faculty
                                    of Agriculture of University of Peradeniya and of other Universities.</p>
                            </div>

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h1 class="sub_heading mb-3">The Curriculum</h1>
                                <p>Apart from relevant courses of the B.Sc. AgTech & Mgt. degree programme, the B.Sc. AS
                                    & F degree programme is comprised of 35 courses, which have been specially designed
                                    and introduced in line with the current and future needs of the Livestock and
                                    Fisheries sectors.</p>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h1 class="sub_heading mb-3">Compulsory and Optional courses</h1>
                                <p>There are compulsory (C) and optional (O) components in the curriculum. The
                                    compulsory components include mandatory courses which are designed to impart
                                    knowledge and skills essential for a student. Students have a choice in selecting
                                    courses from the optional components.</p>
                            </div>

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h1 class="sub_heading mb-3">Credit and Non-credit courses</h1>
                                <p>There are credited and non-credited courses in the Degree programme. The grade point
                                    of the credited courses will be used in calculating the Grade Point Average
                                    (GPA)(see the relevant section below for more details of GPA), while the non-credit
                                    course (supplementary course) will not carry a grade point and therefore will not be
                                    used in the calculation of the GPA. However, these courses are required to be
                                    completed successfully in order to be eligible for the award of the Degree.
                                    Non-credit courses are designed to develop practical skills, communication skills
                                    and career development of students.</p>
                            </div>

                        </div>

                        <h1 class="sub_heading mb-1">Structure of the Curriculum</h1>

                        <p>
                            The four-year Degree programme includes compulsory, optional and supplementary courses
                            offered during 1-7 semesters. Taught courses in the 1st semester will be completed within
                            the first seven weeks while the remaining time will be devoted for Industrial training
                            courses. All students will undergo one livestock practices course, and three industrial
                            training courses, each of two weeks duration on rotation basis. In addition all students
                            will undergo in-plant training of 4 weeks duration at the end of the 2nd and 3rd academic
                            years, and should obtain a ‘Pass’ grade.
                        </p>

                        <p>
                            The final semester (8th) is devoted for a Research Project which will be carried out by
                            individual students on a specific topic under the supervision of a senior academic. Students
                            are required to submit a thesis on the Research Project in order to complete the Project
                            work successfully.
                        </p>

                        <div class="clearfix"></div>
                        <br>

                        <h1 class="sub_heading mb-3">Outline of the B.Sc. AS & F degree</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Semester</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Type of courses offered</th>
                                        <th scope="col">No. of Credits Offered/ required</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1100</td>
                                        <td>Compulsory courses</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1100</td>
                                        <td>Compulsory courses</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2200</td>
                                        <td>Compulsory and optional courses</td>
                                        <td>18 (16 C + 2 O)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2200</td>
                                        <td>Compulsory and optional courses</td>
                                        <td>18 (16 C + 2 O)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" style="text-align: center;">4 weeks In-Plant
                                            training During Vacation</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2200</td>
                                        <td>Compulsory and optional courses</td>
                                        <td>18 (16 C + 2 O)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2200</td>
                                        <td>Compulsory and optional courses</td>
                                        <td>18 (16 C + 2 O)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" style="text-align: center;">4 weeks In-Plant
                                            training During Vacation</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2200</td>
                                        <td>Compulsory and optional courses</td>
                                        <td>18 (16 C + 2 O)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="3" style="text-align: center;">Total Credit Units</th>
                                        <td>128 (118 C + 10 O)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->


                        <p class="mb-1"><b>C = Compulsory courses, O = Optional courses</b></p>
                        <p><b>Consists of 160 hrs of involvement and evaluated on Pass/Fail basis</b></p>

                        <div class="clearfix"></div>
                        <br>


                        <h1 class="sub_heading mb-1">Courses Offered in B.Sc. AS & F Degree</h1>
                        <p>
                            The courses offered in B.Sc. AS & F degree have been formulated by incorporating the
                            essential knowledge, skills and attitudes that require fulfilling the objectives of the
                            degree programme. The theoretical and practical skills have been incorporated in a balanced
                            recipe in designing each course. In total, the compulsory courses and practical training
                            alone (before considering the 10 credit hours of optional courses) provides 1,321 hours of
                            theoretical knowledge and 1,218 hours of practical skills. The identified courses have been
                            sequenced in such a way to deliver especially the knowledge and skills pertinent to Animal
                            Science and Fisheries themes evolving from principles to synthesis and application.
                        </p>


                        <div class="clearfix"></div>
                        <br>

                        <h1 class="sub_heading mb-3">Course Sequence of the B.Sc. AS & F degree</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Semester</th>
                                        <th scope="col">Notation</th>
                                        <th scope="col">Courses and Credit Hours</th>
                                        <th scope="col">Credits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>ASF 1101</p>
                                            <p>ASF 1102</p>
                                            <p>ASF 1103</p>
                                        </td>
                                        <td>
                                            <p>Animal Biochemistry (2: 30/00/00)</p>
                                            <p>Anatomy & Physiology of Farm Animals (2:25/10/15)</p>
                                            <p>Anatomy and Physiology of Fish (1: 12/06/10)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>ASF 1101</p>
                                            <p>ASF 1102</p>
                                            <p>ASF 1103</p>
                                        </td>
                                        <td>
                                            <p>Animal Biochemistry (2: 30/00/00)</p>
                                            <p>Anatomy & Physiology of Farm Animals (2:25/10/15)</p>
                                            <p>Anatomy and Physiology of Fish (1: 12/06/10)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>ASF 1101</p>
                                            <p>ASF 1102</p>
                                            <p>ASF 1103</p>
                                        </td>
                                        <td>
                                            <p>Animal Biochemistry (2: 30/00/00)</p>
                                            <p>Anatomy & Physiology of Farm Animals (2:25/10/15)</p>
                                            <p>Anatomy and Physiology of Fish (1: 12/06/10)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>ASF 1101</p>
                                            <p>ASF 1102</p>
                                            <p>ASF 1103</p>
                                        </td>
                                        <td>
                                            <p>Animal Biochemistry (2: 30/00/00)</p>
                                            <p>Anatomy & Physiology of Farm Animals (2:25/10/15)</p>
                                            <p>Anatomy and Physiology of Fish (1: 12/06/10)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->

                        <p class="mb-1"><b>C = Compulsory courses, O = Optional courses</b></p>
                        <p><b>Total number of credits required to be completed in each semester</b></p>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href=''>
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <h1 class="sub_heading mb-1">Calendar of Dates-2019/2020</h1>
                        <h1 class="sub_heading mb-3">17.10.2019 - Amendment</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <!--                       <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                      </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>&nbsp;</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ACADEMIC PROGRAMME IS SUSPENDED</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>AgTech & Mgt, AS & F, and BFST Programmes</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Undergraduate Admission
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">Admission under general admission policy
                                                implemented by he University Grants Commission(UGC).</h1>

                                            <ol class="custome_ol">
                                                <li>B.Sc. in Agricultural Technology and Management.</li>
                                                <ol class="custome_ol">
                                                    <li class="d">G.C.E. (O/L)</li>

                                                    <ol class="custome_ol">
                                                        <li class="c">Six passes in one sitting including Pure/Applied
                                                            Mathematics, Chemestry, Biology/Botany/Zoology,
                                                            Physics/Agriculture with 3 credit passes from the subject
                                                            listed,</li>
                                                        <li class="c">G.C.E. (O/L) New or NCGE | Six passes in one
                                                            sitting with 4 credit passes including Science.</li>
                                                    </ol>

                                                    <li class="d">Passes in at least three of the following G.C.E. (A/L)
                                                        subjects; Botany, Chemistry, Zoology, Physics, Geography and
                                                        Agriculture, obtaining at a single attempt.</li>
                                                </ol>
                                                <li>B.Sc. in Food Science and Technology</li>
                                                <li>B.Sc. in Animal Science and Fisheries</li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Programme Organization
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="heading mb-1">Credit Unit</h1>
                                            <p>
                                                This is the numeric value assigned to a course, which indicates its
                                                relative weight within the degree programme. The credit value of a
                                                course is indicated by a single digit following the course notation and
                                                course title. One Credit Unit is equivalent to either 15 hours of
                                                lectures or 30 hours of practical/tutorials/assignments/field visits.
                                            </p>

                                            <p>
                                                The curriculum of the B.Sc. Agricultural Technology and Management and
                                                B.Sc. Animal Science and Fisheries degrees have being developed using a
                                                student learning outcomes based approach. Hence, each credit unit has
                                                been assigned a maximum total student work load of 40 hours including
                                                lectures, practical and specified independent learning (IL) activities.
                                            </p>

                                            <h1 class="heading mb-1">Credit</h1>
                                            <p>
                                                A 4-point scale will be adopted for grading the performance of students
                                                in credited courses. A letter grade shall be awarded to every credited
                                                course. The letter grades and corresponding grade points are given
                                                below.
                                            </p>

                                            <!-- table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Letter Grade*</th>
                                                            <th scope="col">Grade Point</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- table -->

                                            <p>
                                                <b>* A+ is given only to those who obtain a distinctly high mark and are
                                                    outliers of the marks' distribution.</b>
                                            </p>

                                            <div class="gray_text_div mb-3">
                                                <p style="margin-bottom: 0px;">Note: The threshold level of grading is
                                                    equivalent to a C-. To pass a credited course a student should
                                                    achieve a minimum of 'C-' grade.</p>
                                            </div>

                                            <h1 class="heading mb-1">Grade Points</h1>
                                            <p>
                                                Grading procedure recommended by the Senate of the University of
                                                Peradeniya will be adopted. Accordingly, the grade for a course shall
                                                not correspond to a cut-off markm but based on the distribution of marks
                                                for the course.
                                            </p>

                                            <h1 class="heading mb-1">Grade Point Average (GPA)</h1>
                                            <p>
                                                An aggregate index will be calculated as the weighted average of the
                                                grade points obtained from grades of different courses and the number of
                                                corresponding course units. This aggregate index shall be called the
                                                Grade Point Average (GPA).
                                            </p>

                                            <h1 class="heading mb-1">Independent Study</h1>
                                            <p>
                                                Independant learning is identified for most of the courses offered. The
                                                students are supposed to complete independant learning components
                                                assigned by the teachers.
                                            </p>

                                            <h1 class="heading mb-1">No- Credit Course</h1>
                                            <p>
                                                It is compulsory for every student to achieve a 'Pass' or 'Satisfactory'
                                                grade from every non-credited course that he/she offer.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Requirements for a Degree
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>102 credit units from the specified compulsory courses of the Core
                                                    Programme.</li>
                                                <li>a minimum of 18 credit units from the specified compulsory and
                                                    optional courses of the selected Advanced Module.</li>
                                                <li>06 credit units from the 'Project' in a selected field of study.
                                                </li>
                                            </ul>

                                            <p>
                                                In addition to the above mentioned credited courses, a set of
                                                supplementary and complementary courses are offered to impart
                                                satisfactory proficiency in English, Sinhala, Tamil, Mathematics,
                                                Physics, Information and Communication Technology and Laboratory Skills
                                                among all students. It is mandatory for every student to pass the
                                                supplementary courses before the 6th semester, and the complementary
                                                courses before the 8th semester to be eligible for the award of the
                                                degree.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Assessment Scheme
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>The courses will be assessed on a continuous basis to provide an
                                                    opportunity for student to receive a feedback on his/her performance
                                                    during the course.</li>
                                                <li>Every course will have more than one assessment, conducted at the
                                                    critical stages of learning of the course.</li>
                                                <li>Appropriate assessment procedure/s, the percentage contribution of
                                                    each assessment including independent learning activities to the
                                                    final mark, and the appropriate stage (time/level) of assessment for
                                                    each course will be determined by the course coordinator and should
                                                    be approved by the relevant Department of Study.</li>
                                                <li>The approved assessment procedure for a given course will be made
                                                    known to the students at the commencement of the course.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->

                    </div>

                    <div class="tab-pane fade" id="pills-fst" role="tabpanel" aria-labelledby="pills-fst-tab">

                        <h1 class="heading mb-3">B.SC. DEGREE IN FOOD SCIENCE AND TECHNOLOGY (B.Sc. FST)</h1>

                        <p>
                            Food Science & Technology is one of the rapidly developing areas of current industrial
                            importance in Sri Lanka. It is a major contributor to the goods and services sector of the
                            GDP. It is identified as one of the 10 thrust areas for support under the Human Resource
                            Development project of the Ministry of Science & Technology. Industries leading to
                            skill-intensive value addition, and involving small- and medium -scale entrepreneurs are
                            recognized by the UNIDO for assistance in their programmes in Sri Lanka. Absence of intense
                            value addition and post-harvest handling & preservation technologies have become a major
                            constraint in making available the agricultural produce to the consumers, thus creating
                            economic losses to the farmers. There are more than six research institutes in Sri Lanka
                            engaged in research on processing of foods, and 120 large-scale industries and more than 300
                            medium small enterprises engaged in food processing. A degree programme in Food Science &
                            Technology at the level of B.Sc. is a national necessity in producing graduates with
                            fundamental knowledge and practical capabilities in Food Science & Technology to serve the
                            industry, research sector and the academia.
                        </p>

                        <div class="clearfix"></div>
                        <br>

                        <h1 class="sub_heading mb-3">Objectives of the Degree Programme</h1>
                        <p>The objective of this programme is to produce graduates with a B.Sc. degree capable of
                            handling the technical, supervisory, marketing and managerial functions of the food industry
                            and take up research leading to product development. The course envisages in inculcating
                            students with,</p>

                        <p>Knowledge and understanding of scientific agro-processing concepts.</p>

                        <ul class="custome_ul">
                            <li>Understanding of nutritional role of foods</li>
                            <li>Professional attitude and orientation.</li>
                            <li>Technical and research skills and abilities.</li>
                            <li>Personal, managerial and leadership characteristics.</li>
                        </ul>

                        <div class="clearfix"></div>
                        <br>

                        <h1 class="sub_heading mb-3">Structure of the Degree Programme</h1>
                        <p>The B.Sc. FST degree programme comprises more than 50% practical, and is aimed at
                            learner-centered education with close links with the industry. This programme consists of 8
                            semesters of fulltime academic work with implant training and few industrial visits. The
                            last semester is assigned for the research project preferably in the industry.</p>

                        <div class="clearfix"></div>
                        <br>

                        <h1 class="sub_heading mb-3">Course Sequence of the B.Sc. AS & F degree</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Semester</th>
                                        <th scope="col">Notation</th>
                                        <th scope="col">Courses and Credit Hours</th>
                                        <th scope="col">Credits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>BFST 1101</p>
                                            <p>BFST 1102</p>
                                            <p>BFST 1103</p>
                                        </td>
                                        <td>
                                            <p>Introduction to Food Science & Technology (2: 30/00)</p>
                                            <p>Basic Science Practical (1: 00/30)</p>
                                            <p>Chemistry for Food Science (3: 45/00)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>BFST 1101</p>
                                            <p>BFST 1102</p>
                                            <p>BFST 1103</p>
                                        </td>
                                        <td>
                                            <p>Introduction to Food Science & Technology (2: 30/00)</p>
                                            <p>Basic Science Practical (1: 00/30)</p>
                                            <p>Chemistry for Food Science (3: 45/00)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>BFST 1101</p>
                                            <p>BFST 1102</p>
                                            <p>BFST 1103</p>
                                        </td>
                                        <td>
                                            <p>Introduction to Food Science & Technology (2: 30/00)</p>
                                            <p>Basic Science Practical (1: 00/30)</p>
                                            <p>Chemistry for Food Science (3: 45/00)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>BFST 1101</p>
                                            <p>BFST 1102</p>
                                            <p>BFST 1103</p>
                                        </td>
                                        <td>
                                            <p>Introduction to Food Science & Technology (2: 30/00)</p>
                                            <p>Basic Science Practical (1: 00/30)</p>
                                            <p>Chemistry for Food Science (3: 45/00)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100</th>
                                        <td>
                                            <p>BFST 1101</p>
                                            <p>BFST 1102</p>
                                            <p>BFST 1103</p>
                                        </td>
                                        <td>
                                            <p>Introduction to Food Science & Technology (2: 30/00)</p>
                                            <p>Basic Science Practical (1: 00/30)</p>
                                            <p>Chemistry for Food Science (3: 45/00)</p>
                                        </td>
                                        <td>16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->

                        <p><b>C = Compulsory courses, O = Optional courses</b></p>

                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="gray_text_div">

                                    <blockquote class="blockquote" style="margin-bottom: 0px;">
                                        <p>Document</p>
                                    </blockquote>
                                    <!-- arrow link -->
                                    <a class='animated-arrow' href=''>
                                        <span class='the-arrow -left'>
                                            <span class='shaft'></span>
                                        </span>
                                        <span class='main'>
                                            <span class='text'>
                                                Click here to Download
                                            </span>
                                            <span class='the-arrow -right'>
                                                <span class='shaft'></span>
                                            </span>
                                        </span>
                                    </a>
                                    <!-- arrow link -->

                                </div>
                            </div>

                            <!-- ============== -->
                        </div>

                        <div class="clearfix"></div>
                        <br>
                        <br>

                        <h1 class="sub_heading mb-1">Calendar of Dates-2019/2020</h1>
                        <h1 class="sub_heading mb-3">17.10.2019 - Amendment</h1>
                        <!-- table-->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <!--                       <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                      </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>&nbsp;</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ACADEMIC PROGRAMME IS SUSPENDED</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1100 SERIES (17/18)</th>
                                        <td>AgTech & Mgt, AS & F, and BFST Programmes</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>ORIENTATION PROGRAM at PERADENIYA</td>
                                        <td>01 Day</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 400; color: #000000;">18-Jan-19 to 18-Jan-19</th>
                                        <td>SUPPLEMENTARY / COMPLEMENTARY COURSES /Orientation Program Cound..</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table -->

                        <div class="clearfix"></div>
                        <br>


                        <!-- ================== -->
                        <!-- ================== -->
                        <!-- tab section -->
                        <div class="">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Undergraduate Admission
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">Admission under general admission policy
                                                implemented by he University Grants Commission(UGC).</h1>

                                            <ol class="custome_ol">
                                                <li>B.Sc. in Agricultural Technology and Management.</li>
                                                <ol class="custome_ol">
                                                    <li class="d">G.C.E. (O/L)</li>

                                                    <ol class="custome_ol">
                                                        <li class="c">Six passes in one sitting including Pure/Applied
                                                            Mathematics, Chemestry, Biology/Botany/Zoology,
                                                            Physics/Agriculture with 3 credit passes from the subject
                                                            listed,</li>
                                                        <li class="c">G.C.E. (O/L) New or NCGE | Six passes in one
                                                            sitting with 4 credit passes including Science.</li>
                                                    </ol>

                                                    <li class="d">Passes in at least three of the following G.C.E. (A/L)
                                                        subjects; Botany, Chemistry, Zoology, Physics, Geography and
                                                        Agriculture, obtaining at a single attempt.</li>
                                                </ol>
                                                <li>B.Sc. in Food Science and Technology</li>
                                                <li>B.Sc. in Animal Science and Fisheries</li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Programme Organization
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="heading mb-1">Credit Unit</h1>
                                            <p>
                                                This is the numeric value assigned to a course, which indicates its
                                                relative weight within the degree programme. The credit value of a
                                                course is indicated by a single digit following the course notation and
                                                course title. One Credit Unit is equivalent to either 15 hours of
                                                lectures or 30 hours of practical/tutorials/assignments/field visits.
                                            </p>

                                            <p>
                                                The curriculum of the B.Sc. Agricultural Technology and Management and
                                                B.Sc. Animal Science and Fisheries degrees have being developed using a
                                                student learning outcomes based approach. Hence, each credit unit has
                                                been assigned a maximum total student work load of 40 hours including
                                                lectures, practical and specified independent learning (IL) activities.
                                            </p>

                                            <h1 class="heading mb-1">Credit</h1>
                                            <p>
                                                A 4-point scale will be adopted for grading the performance of students
                                                in credited courses. A letter grade shall be awarded to every credited
                                                course. The letter grades and corresponding grade points are given
                                                below.
                                            </p>

                                            <!-- table-->
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Letter Grade*</th>
                                                            <th scope="col">Grade Point</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">A+/A</th>
                                                            <td>4.0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- table -->

                                            <p>
                                                <b>* A+ is given only to those who obtain a distinctly high mark and are
                                                    outliers of the marks' distribution.</b>
                                            </p>

                                            <div class="gray_text_div mb-3">
                                                <p style="margin-bottom: 0px;">Note: The threshold level of grading is
                                                    equivalent to a C-. To pass a credited course a student should
                                                    achieve a minimum of 'C-' grade.</p>
                                            </div>

                                            <h1 class="heading mb-1">Grade Points</h1>
                                            <p>
                                                Grading procedure recommended by the Senate of the University of
                                                Peradeniya will be adopted. Accordingly, the grade for a course shall
                                                not correspond to a cut-off markm but based on the distribution of marks
                                                for the course.
                                            </p>

                                            <h1 class="heading mb-1">Grade Point Average (GPA)</h1>
                                            <p>
                                                An aggregate index will be calculated as the weighted average of the
                                                grade points obtained from grades of different courses and the number of
                                                corresponding course units. This aggregate index shall be called the
                                                Grade Point Average (GPA).
                                            </p>

                                            <h1 class="heading mb-1">Independent Study</h1>
                                            <p>
                                                Independant learning is identified for most of the courses offered. The
                                                students are supposed to complete independant learning components
                                                assigned by the teachers.
                                            </p>

                                            <h1 class="heading mb-1">No- Credit Course</h1>
                                            <p>
                                                It is compulsory for every student to achieve a 'Pass' or 'Satisfactory'
                                                grade from every non-credited course that he/she offer.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Requirements for a Degree
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>102 credit units from the specified compulsory courses of the Core
                                                    Programme.</li>
                                                <li>a minimum of 18 credit units from the specified compulsory and
                                                    optional courses of the selected Advanced Module.</li>
                                                <li>06 credit units from the 'Project' in a selected field of study.
                                                </li>
                                            </ul>

                                            <p>
                                                In addition to the above mentioned credited courses, a set of
                                                supplementary and complementary courses are offered to impart
                                                satisfactory proficiency in English, Sinhala, Tamil, Mathematics,
                                                Physics, Information and Communication Technology and Laboratory Skills
                                                among all students. It is mandatory for every student to pass the
                                                supplementary courses before the 6th semester, and the complementary
                                                courses before the 8th semester to be eligible for the award of the
                                                degree.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Assessment Scheme
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <h1 class="sub_heading mb-3">To be eligible for the award of the degree a
                                                student should complete a minimum of 126 credit units during the four
                                                academic years of the degree programme. The credit unit requirement
                                                should include the following:</h1>

                                            <ul class="custome_ul">
                                                <li>The courses will be assessed on a continuous basis to provide an
                                                    opportunity for student to receive a feedback on his/her performance
                                                    during the course.</li>
                                                <li>Every course will have more than one assessment, conducted at the
                                                    critical stages of learning of the course.</li>
                                                <li>Appropriate assessment procedure/s, the percentage contribution of
                                                    each assessment including independent learning activities to the
                                                    final mark, and the appropriate stage (time/level) of assessment for
                                                    each course will be determined by the course coordinator and should
                                                    be approved by the relevant Department of Study.</li>
                                                <li>The approved assessment procedure for a given course will be made
                                                    known to the students at the commencement of the course.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- tab section -->
                        <!-- ================== -->
                        <!-- ================== -->

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- mission section -->



<div class="w-100 d-none d-md-block"></div>
<br>