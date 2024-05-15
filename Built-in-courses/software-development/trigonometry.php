<!DOCTYPE html>
 <html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="E-learning website that help everyone who want to learn intellectual skills like software development, share what you're about and challenge with other connection and become profession in it. intelligent box is good website for you to become what you dream about and it connect you around the world with many other professions student and teacher." />
        <meta name="keywords" content="social network,social media, learning, e-learning, share, friends, challenges, e-tvet, courses, schools, create, skills, account, signin, online charting, online learning, courses, groups, intelligentbox rwanda, e-learning rwanda, connect, intelligentbox, microbox, box rwanda, help" />
        <meta name="author" content="Manirabona Patience" />
        <meta name="robots" content="index, follow"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>intelligentBox</title>

        <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../../Assets/css/each-courses.css">

        <link rel="stylesheet" href="../../Lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Lib/material/css/material-dashboard.css?v=2.1.1">
        <link rel="stylesheet" href="../../Lib/now-ui-kit/now-ui-kit.css?v=1.3.0">
        <link rel="stylesheet" href="../../Lib/font-awesome/css/font-awesome.min.css">
    </head>
    <body class="bg-white position-relative" data-spy="scroll" data-target=".scrollspy-1" data-offset="50">

        <!-- top navigation bar -->
        <!-- ============================================================================================================= -->
        <nav class="top-header-fixed fixed-top">
            <div class="company-present-logo d-flex justify-content-between">
                <div class="logo-present"> intelligent box </div>
                <div class="small-dev-nav" onclick="openNavSmall_device()"><i class="fa fa-navicon"></i></div>
            </div>

            <!-- subnavbar down -->
            <!-- =========================================================================================================================== -->
            <div class="navigation-bar-icon">
                <div class="nav-icons">
                    <!-- global session email variables -->
                    <!-- ===================================================================================================== -->
                    <input type="hidden" name="" id="user_mail" value="<?php echo $Session_email_call; ?>">

                    <!-- news notification icon -->
                    <!-- ======================================================================================================================================= -->
                    <div class="nav-item">
                        <a class="" href="../../World-News/"><i class="fa fa-newspaper-o" data-toggle="tooltip" data-placement="bottom" title="News"></i> <span class="pre-top"> News </span></a>
                    </div>
                    <!-- ======================================================================================================================================= -->

                    <!-- home notification icon -->
                    <!-- =============================================================================================================================================== -->
                    <div class="nav-item" id="nav-item" onclick="unsetPosts(this)">
                        <a class="" href="../../Home/"> <i class="fa fa-home" data-toggle="tooltip" data-placement="bottom" title="Home"></i> <span class="pre-top"> Home </span></a>
                        <div id="count_posts"></div>
                    </div>
                    <!-- ================================================================================================================================================= -->

                    <!-- history notification icon -->
                    <!-- =========================================================================== -->
                    <div class="nav-item">
                        <a class="" href="../../History/"><i class="fa fa-square-o" data-toggle="tooltip" data-placement="bottom" title="History"></i> <span class="pre-top"> History </span></a>
                    </div>
                    <!-- ============================================================================ -->
                    
                    <!-- Religion -->
                    <!-- ============================================================================== -->
                    <div class="nav-item">
                        <a class="" href="../../Religion/"><i class="" data-toggle="tooltip" data-placement="bottom" title="History"></i> <span class="pre-top"> Religions </span></a>
                    </div>
                    <!-- ================================================================================ -->

                    <!-- Religion -->
                    <!-- ============================================================================== -->
                    <div class="nav-item">
                        <a class="" href="../index.php"><i class="fa fa-graduation-cap" data-toggle="tooltip" data-placement="bottom" title="courses"></i> <span class="pre-top"> Courses </span></a>
                    </div>
                    <!-- ================================================================================ -->

                </div>
            </div>
            <!-- ======================================================================================================================================= -->
        </nav>
        <!-- ======================================================================================================================================= -->

        <!-- COURSE TITLE -->
        <!-- ========================================================================================================================================================= -->
        <div class="course-title">
            <div class="container">
                <div class="course-desc">
                    <div class="course-name">Algebra and trigonometry</div>
                    <div class="course-short-desc">
                        The techniques in trigonometry are used for finding
                        relevance in navigation particularly satellite systems and
                        astronomy, naval and aviation industries, oceanography,
                        land surveying, and in cartography (creation of maps).
                    </div>
                    <div class="lessons-count">3 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/trigonometry.png" alt="" width="100%" height="100%"></div>
                </div>
            </div>
        </div>
        <!-- ========================================================================================================================================================= -->

        <!-- COURSE CONTENT -->
        <!-- =============================================================================================================================================================== -->
        <div class="course-content">
            <div class="container">
                <div class="left-side-content">
                    <div class="lesson" id="section1">
                        <div class="lesson-title mt-2">Lesson 1: Introduction</div><hr>
                        <!-- <div class="introduction-course mb-2">introduction</div> -->
                        <div>
                            <p>Trigonometry studies relationship involving lengths and angle of a triangle.</p>
                            <p>
                                The techniques in trigonometry are used for finding
                                relevance in navigation particularly satellite systems and
                                astronomy, naval and aviation industries, oceanography,
                                land surveying, and in cartography (creation of maps).
                                Now those are the scientific applications of the concepts
                                in trigonometry, but most of the mathematics we study
                                would seem (on the surface) to have little real-life
                                application. Trigonometry is really relevant in our day to
                                day activities. 
                            </p>
                            <p class="short-def">
                                <span>Trigonometry</span> is the study of how the sides and angles
                                of a triangle are related to each other. A rotation angle is
                                formed by rotating an <span>initial side</span> through an angle, about
                                a fixed point called vertex, to terminal position called
                                <span>terminal side. </span>
                            </p>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: Trigonometry concepts </div><hr>
                            <p class="short-def">
                                <span>Trigonometry </span> drawn in what is called standard position if the initial
                                side is on the positive x-axis and the vertex of the angle is
                                at the origin. 
                            </p>
                            <p class="short-def">
                                <div class="examples-title">Example 1</div>
                                <div class="example E1"><img src="img_SFDLT_5/example-1.png" alt="example of trigonometric"></div>
                                <div class="short-def ml-3">
                                    Angles in standard position that have a common terminal
                                    side are called <span>co-terminal angles;</span> the measure of smallest
                                    positive rotation angle is called <span>principal angle.</span> Angle
                                    is positive if rotated in a counterclockwise direction and
                                    negative when rotated clockwise.
                                    Angles are named according to where their terminal side
                                    lies, for instance, the x-axis and y-axis divide a plane into
                                    four quadrants as follow
                                </div>
                                <img src="img_SFDLT_5/example-2.png" alt="example of co-terminal">
                            </p>
                            <p class="short-def">
                                <div class="examples-title">Example 2</div>
                                <div class="mt-2">Draw each of the following angles in standard position and which of these angles is co-terminal to 300 ?</div>
                                <div class="angles">
                                    <div>a) 30<sup>0</sup></div>
                                    <div>b) 120<sup>0</sup></div>
                                    <div>c) -230<sup>0</sup></div>
                                    <div>d) 750<sup>0</sup></div>
                                    <div>e) -330<sup>0</sup></div>
                                </div>
                            </p>
                            <p>
                                <div class="Solution-title">Solution</div>
                                <img src="img_SFDLT_5/solution-1.png" alt="solution of example 2">
                                <img src="img_SFDLT_5/solution-2.png" alt="solution of example 2">
                            </p>
                            <p>
                                <div class="examples-title">Example 3</div>
                                <div class="mt-2">Draw each of the following angles in standard position
                                    and indicate in which quadrant the terminal side is.</div>
                                <div class="angles">
                                    <div>a) 150<sup>0</sup></div>
                                    <div>b) -35<sup>0</sup></div>
                                    <div>c) 210<sup>0</sup></div>
                                </div>
                            </p>
                            <p>
                                <div class="Solution-title">Solution</div>
                                <img src="img_SFDLT_5/solution-3.png" alt="solution of example 3">
                            </p>
                            <div class="exercise mb-3">
                                <div class="exercise-title">Exercise 1</div>
                                <div class="each-exercise d-flex">
                                    <div class="number">1.</div>
                                    <div class="question-exercise ml-2">
                                        <div>Draw each of the following angles in standard position and which
                                            of these angles is co-terminal to 200
                                            ?</div>
                                            <div class="angles">
                                                <div>a) 150<sup>0</sup></div>
                                                <div>b) -35<sup>0</sup></div>
                                                <div>c) 210<sup>0</sup></div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: Solving triangle</div><hr>
                        <p>
                            Solving a triangle is to find the length of its sides and
                            measures of its angles. There are two methods for solving
                            a triangle: cosine law and sine law
                        </p>
                        <div class="subtitle-lessons mt-3">Cosine Law</div>
                        <p>
                            Cosine law (also known as cosine formula or cosine rule)
                            relates the lengths of sides to the cosine of one of the
                            angles.
                            Consider the following triangle:
                        </p>
                        <p>Consider the following triangle:</p>
                        <img src="img_SFDLT_5/example-4.png" alt="example on cosine rule">
                        <p>
                            <div class="examples-title">Example 1</div>
                            <p class="mt-2">How long is the side c
                                in the following figure?</p>
                            <img src="img_SFDLT_5/example-5.png" alt="example on example1">    
                        </p>
                        <p>
                            <div class="Solution-title mb-1">Solution</div>
                            <img src="img_SFDLT_5/solution-4.png" alt="solution of example1">
                        </p>
                        <p>
                            <div class="examples-title">Example 2</div>
                            <p class="mt-2">Find the angle C</p>
                            <img src="img_SFDLT_5/solution-6.png" alt="example2 image">    
                        </p>
                        <p>
                            <div class="Solution-title mb-1">Solution</div>
                            <img src="img_SFDLT_5/solution-7.png" alt="solution of example 2">
                        </p>
                        <div class="exercise mb-3">
                            <div class="exercise-title">Exercise 1</div>
                            <div class="each-exercise d-flex">
                                <div class="number">1.</div>
                                <div class="question-exercise ml-2">
                                    <div>Find the length of the side BC of triangle ABC in which</div>
                                        <div class="angles">
                                            <div>AB cm AC cm = = 7, 9 and ∠ = BAC 71<sup>0</sup></div>
                                        </div>
                                </div>
                            </div>
                            <div class="each-exercise d-flex">
                                <div class="number">2.</div>
                                <div class="question-exercise ml-2">
                                    <div>Find the length of the side AB of triangle ABC in which</div>
                                        <div class="angles">
                                            <div>BC cm AC cm =15.3 , 9.4 = and ∠ = ACB 121<sup>0</sup></div>
                                        </div>
                                </div>
                            </div>
                            <div class="each-exercise d-flex">
                                <div class="number">3.</div>
                                <div class="question-exercise ml-2">
                                    <div>From triangle ABC in which AC cm BC cm = = 9.5 , 5.5 and
                                        ∠ = ACB 145 <sup>0</sup> , find the value of the angle at A & B then the
                                        length of side AB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subtitle-lessons mt-3">Sine Law</div>
                        <p class="mt-1">
                            The sine law (or sine formula or sine rule) is an equation
                            relating the lengths of the sides of a triangle to the sine of
                            its angles.
                        </p>
                        <p>
                            If a,b,c are the lengths of the sides of a triangle and ABC , ,
                            are the opposite angles respectively, then the sine law is
                            <img src="img_SFDLT_5/rule-1.png" alt="example of triangle sine law">
                        </p>
                        <p>
                            <div class="examples-title">Example 1</div>
                            <p class="mt-2">Calculate side c</p>
                            <img src="img_SFDLT_5/example-6.png" alt="example 1 on sine law">    
                            <img src="img_SFDLT_5/sub-example-6.png" alt="example1 on sine law">
                        </p>
                        <p>
                            <div class="examples-title">Example 2</div>
                            <p class="mt-2">Calculate angle B</p>
                            <img src="img_SFDLT_5/example-7.png" alt="example2 of calculate angle b">    
                            <img src="img_SFDLT_5/sub-example-7.png" alt="sub-example-7" >
                        </p>
                        <div class="exercise mb-3">
                            <div class="exercise-title">Exercise 2</div>
                            <div class="each-exercise d-flex">
                                <div class="number">1.</div>
                                <div class="question-exercise ml-2">
                                    <div>Calculate, in cm to 3 significant figures, the length of the sides AB
                                        of triangle ABC in which ∠ ACB = 62 <sup>0</sup>
                                        , ∠ ABC = 47 <sup>0</sup>
                                         and AC = 7cm
                                    </div>
                                </div>
                            </div>
                            <div class="each-exercise d-flex">
                                <div class="number">2.</div>
                                <div class="question-exercise ml-2">
                                    <div>Find, in degrees to 1 decimal place, the size of the angles CAB
                                        and ACB in the triangle ABC, where AC = 4cm BC = 5cm and
                                        ∠ ABC = 42 <sup>0</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="each-exercise d-flex">
                                <div class="number">3.</div>
                                <div class="question-exercise ml-2">
                                    <div>Calculate, in cm to 3 significant figures, the length of the sides AC
                                        of triangle ABC in which ∠ BAC = 71 <sup>0</sup>
                                        , ∠ ACB = 43 <sup>0</sup>
                                         and BC = 6.4cm
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="applications-apply">
                            <div class="subtitle-lessons mt-3">Applications</div>
                            <div class="exapmle-application ml-3">
                                <p>
                                    Many real situations involve right triangles. Using angles
                                    and trigonometric functions, we can solve problems
                                    involving right triangle. We have already seen how to
                                    solve a triangle.
                                </p>
                                <div class="sub-applications-apply">
                                    <div class="subtitle-lessons">2. Angle of elevation and angle of depression</div>
                                    <div class="ml-3">
                                        <p>
                                            You can use right triangles to find distances, if you know
                                            an angle of elevation or an angle of depression. The figure
                                            below shows each of these kinds of angles.
                                        </p>
                                        <p>
                                            Suppose that an observer is standing at the top of a building
                                            and looking straight ahead at the birds (horizontal line).
                                            The observer must lower his/her eyes to see the car parked
                                            (slanting line). The angle formed between the two lines is
                                            called the angle of depression.
                                        </p>
                                        <img src="img_SFDLT_5/example-8.png" alt="example of observer on bulding">
                                        <p>
                                            Suppose that an observer is standing at the top of a building
                                            and looking straight ahead at the birds (horizontal line).
                                            The observer must raise his/her eyes to see the airplane
                                            (slanting line). The angle formed between the two lines is
                                            called the angle of elevation.
                                        </p>   
                                    </div>
                                    <div class="example-section">
                                        <div class="examples-title">Example 1</div>
                                        <div class="ml-3">
                                            <p>
                                                The angle of elevation of the top of a pole measures 48
                                                from a point on the ground 18 metres away from its base.
                                                Find the height of the flagpole.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="example-section">
                                        <div class="examples-title">Solution</div>
                                        <div class="ml-3">
                                            <p>
                                                <img src="img_SFDLT_5/solution-8.png" alt="image support solution on exapmle 1">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="example-section">
                                        <div class="examples-title">Example 2</div>
                                        <div class="ml-3">
                                            <p>
                                                An airplane is flying at a height of 2 kilometres above the
                                                level ground. The angle of depression from the plane to
                                                the foot of a tree is 15 <sup>0</sup>
                                                . Find the distance that the air plane
                                                must fly to be directly above the tree.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="example-section">
                                        <div class="examples-title">Solution</div>
                                        <div class="ml-3">
                                            <p>
                                                <img src="img_SFDLT_5/solution-9.png" alt="image support solution on example2">
                                            </p>
                                            <div>
                                                Let x be the distance the airplane must fly to be directly
                                                above the tree. The level ground and the horizontal
                                                are parallel, so the alternate interior angles are equal in
                                                measure. 
                                            </div>
                                            <img src="img_SFDLT_5/solution-10.png" alt="image of tree and flying plane triangle">
                                            <div>
                                                So, the airplane must fly about 7.46 kilometres to be directly
                                                above the tree.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="example-section">
                                        <div class="subtitle-lessons mt-2">Unit summary</div>
                                        <div class="ml-3">
                                            <div class="each-exercise d-flex">
                                                <div class="number">1.</div>
                                                <div class="question-exercise ml-2">
                                                    <div class="short-def"><span>Trigonometry</span> is the study of how the sides and angles of a
                                                        triangle are related to each other. A rotation angle is formed
                                                        by rotating an initial side through an angle, about a fixed
                                                        point called vertex, to terminal position called terminal side.
                                                        Angle is positive if rotated in a counterclockwise direction
                                                        and negative when rotated clockwise.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each-exercise d-flex">
                                                <div class="number">2.</div>
                                                <div class="question-exercise ml-2">
                                                    <div class="short-def"><span>Unity circle </span>is a circle of radius one centered at the origin
                                                        (0,0) in the Cartesian coordinate system in the Euclidian
                                                        plane. In the unit circle, the coordinate axes delimit four
                                                        quadrants that are numbered in an anticlockwise direction. 
                                                    </div>
                                                    <p>
                                                        Each quadrant measures 90 degrees, means that the entire
                                                        circle measures 360 degrees or radians.
                                                    </p>
                                                    <img src="img_SFDLT_5/unity-circle.png" alt="unity circle of trigonometric">
                                                </div>
                                            </div>
                                            <div class="each-exercise d-flex">
                                                <div class="number">3.</div>
                                                <div class="question-exercise ml-2">
                                                    <div class="short-def"><span>The table of trigonometric number of remarkable angles </span> 
                                                    </div>
                                                    <img src="img_SFDLT_5/trigonometry-table.png" alt="table of trigonometric number">
                                                </div>
                                            </div>
                                            <div class="each-exercise d-flex">
                                                <div class="number">4.</div>
                                                <div class="question-exercise ml-2">
                                                    <div class="short-def"><span>Applications</span></div>
                                                    <p>
                                                        Many real situations involve right triangle. Using angles
                                                        and trigonometric functions, we can solve problems
                                                        involving right triangle like: 
                                                    </p>
                                                    <ul>
                                                        <li>Angles of elevation and angle of depression</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Algebra & trigonometry</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1: Introduction</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: Trigonometry Concepts</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section3">3: Triangle and applications</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============================================================================================================================================================== -->
    
        <!-- javascript external file, type js  and libraries-->
        <!-- ========================================================================================================================================== -->
        <script src="../../Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../../Lib/jquery/jquery.min.js"></script>
        <script src="../../Lib/jquery/jquery-3.3.1.min"></script>
        <script src="../../Lib/material/js/material-dashboard?v=2.1.1.js"></script>
        <script src="../../Lib/now-ui-kit/now-ui-kit.js"></script>
        <script src="../../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="../../Assets/js/header.box.js"></script>
        <script src="../../Assets/js/courses.box.js"></script>
        <!-- ================================================================================================================================================== -->
    </body>
 </html>