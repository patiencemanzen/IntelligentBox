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

                    <!-- course -->
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
                    <div class="course-name">System analysis and design</div>
                    <div class="course-short-desc">
                        It is a process of collecting and interpreting facts, identifying the problems, and decomposition of a system into its components.
                        System analysis is conducted for the purpose of studying a system or its parts in order to identify its objectives. It is a problem solving technique that improves the system 
                        and ensures that all the components of the system work efficiently to accomplish their purpose.
                    </div>
                    <div class="lessons-count">8 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/system-anlysis.jpg" alt="backend application" width="100%" height="100%"></div>
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
                        <div>
                            <p>Systems Analysis and Design is an active field in which analysts repetitively learn new approaches and different techniques for building the system more effectively and efficiently.
                                The primary objective of systems analysis and design is to improve organizational systems. This tutorial provides a basic understanding of system characteristics, system design, and 
                                its development processes. It is a good introductory guide that provides an overview of all the concepts necessary to build a system</p>
                            <p>Systems development is systematic process which includes phases such as planning, analysis, design, deployment, and maintenance. Here, in this tutorial, 
                                we will primarily focus on </p>
                            <ul>
                                <li>Systems analysis</li>
                                <li>Systems design</li>
                            </ul>
                            <div class="mt-2">
                                <span class="title-ph">Systems Analysis</span>
                                <p>It is a process of collecting and interpreting facts, identifying the problems, and decomposition of a system into its components.</p>
                                <p>System analysis is conducted for the purpose of studying a system or its parts in order to identify its objectives. It is a problem solving technique that improves the system 
                                    and ensures that all the components of the system work efficiently to accomplish their purpose.</p>
                                <p>Analysis specifies <span class="title-ph">what the system should do.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Systems Design</span>
                                <p>It is a process of planning a new business system or replacing an existing system by defining its components or modules to satisfy the specific requirements. Before planning, you need to understand the old system thoroughly
                                     and determine how computers can best be used in order to operate efficiently.</p>
                                <p>System Design focuses on <span class="title-ph"> how to accomplish the objective of the system.</span></p>
                                <p>System Analysis and Design (SAD) mainly focuses on −
                                    <ul>
                                        <li>Systems</li>
                                        <li>Processes</li>
                                        <li>Technology</li>
                                    </ul>
                                </p>     
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph"><b>What is a System?</b></h5>
                                <p>The word System is derived from Greek word Systema, which means an organized relationship between any set of components to achieve some common cause or objective.</p>
                                <i>A system is “an orderly grouping of interdependent components linked together according to a plan to achieve a specific goal.”</i>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Constraints of a System</span>
                                <p>A system must have three basic constraints −</p>
                                <ul>
                                    <li>A system must have some structure and behavior which is designed to achieve a predefined objective.</li>
                                    <li>Interconnectivity and interdependence must exist among the system components.</li>
                                    <li>The objectives of the organization have a higher priority than the objectives of its subsystems.</li>
                                </ul>
                                <p>For example, traffic management system, payroll system, automatic library system, human resources information system.</p>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Properties of a System</h5>
                                <span class="title-ph">Organization</span>
                                <p>Organization implies structure and order. It is the arrangement of components that helps to achieve predetermined objectives.</p>

                                <span>Interaction</span>
                                <p>It is defined by the manner in which the components operate with each other.
                                    For example, in an organization, purchasing department must interact with production department and payroll with personnel department.
                                    </p>

                                <span class="title-ph">Interdependence</span>
                                <p>Interdependence means how the components of a system depend on one another. For proper functioning, the components are coordinated and linked together 
                                    according to a specified plan. The output of one subsystem is the required by other subsystem as input.</p>
                                
                                <span class="title-ph">Integration</span>
                                <p>Integration is concerned with how a system components are connected together. It means that the parts of the system work together within the system even 
                                    if each part performs a unique function.</p>

                                <span class="title-ph">Central Objective</span>
                                <p>The objective of system must be central. It may be real or stated. It is not uncommon for an organization to state an objective and operate to achieve another.
                                    The users must know the main objective of a computer application early in the analysis for a successful design and conversion.
                                    </p>    
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Elements of a System</h5>
                                <p>The following diagram shows the elements of a system −</p>
                                <img src="img_SFDLT_5/system_analysis_1.png" alt="element of system example">
                                <div class="mt-2">
                                    <span class="title-ph">Outputs and Inputs</span>
                                    <ul>
                                        <li>The main aim of a system is to produce an output which is useful for its user.</li>
                                        <li>Inputs are the information that enters into the system for processing.</li>
                                        <li>Output is the outcome of processing.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Processor(s)</span>
                                    <ul>
                                        <li>The processor is the element of a system that involves the actual transformation of input into output.</li>
                                        <li>It is the operational component of a system. Processors may modify the input either totally or partially, depending on the output specification.</li>
                                        <li>As the output specifications change, so does the processing. In some cases, input is also modified to enable the processor for handling the transformation.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Control</span>
                                    <ul>
                                        <li>The control element guides the system.</li>
                                        <li>It is the decision–making subsystem that controls the pattern of activities governing input, processing, and output.</li>
                                        <li>The behavior of a computer System is controlled by the Operating System and software. In order to keep system in balance, what and how much input is needed is determined by Output Specifications.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Feedback</span>
                                    <ul>
                                        <li>Feedback provides the control in a dynamic system.</li>
                                        <li>Positive feedback is routine in nature that encourages the performance of the system.</li>
                                        <li>Negative feedback is informational in nature that provides the controller with information for action.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Environment</span>
                                    <ul>
                                        <li>The environment is the “supersystem” within which an organization operates.</li>
                                        <li>It is the source of external elements that strike on the system.</li>
                                        <li>It determines how a system must function. For example, vendors and competitors of organization’s environment, may provide constraints that affect the actual performance of the business.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Boundaries and Interface</span>
                                    <ul>
                                        <li>A system should be defined by its boundaries. Boundaries are the limits that identify its components, processes, and interrelationship when it interfaces with another system.</li>
                                        <li>Each system has boundaries that determine its sphere of influence and control.</li>
                                        <li>The knowledge of the boundaries of a given system is crucial in determining the nature of its interface with other systems for successful design.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Types of Systems</h5>
                                <p>The systems can be divided into the following types −</p>
                                <div class="mt-2">
                                    <span class="title">Physical or Abstract Systems</span>
                                    <ul>
                                        <li>Physical systems are tangible entities. We can touch and feel them.</li>
                                        <li>Physical System may be static or dynamic in nature. For example, desks and chairs are the physical parts of computer center which are static. A programmed computer is a dynamic 
                                            system in which programs, data, and applications can change according to the user's needs.</li>
                                        <li>Abstract systems are non-physical entities or conceptual that may be formulas, representation or model of a real system.</li>    
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Open or Closed Systems</span>
                                    <ul>
                                        <li>An open system must interact with its environment. It receives inputs from and delivers outputs to the outside of the system. For example, an information system which must adapt to the changing environmental conditions.</li>
                                        <li>A closed system does not interact with its environment. It is isolated from environmental influences. A completely closed system is rare in reality.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Adaptive and Non Adaptive System</span>
                                    <ul>
                                        <li>Adaptive System responds to the change in the environment in a way to improve their performance and to survive. For example, human beings, animals</li>
                                        <li>Non Adaptive System is the system which does not respond to the environment. For example, machines.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Permanent or Temporary System</span>
                                    <ul>
                                        <li>Permanent System persists for long time. For example, business policies.</li>
                                        <li>Temporary System is made for specified time and after that they are demolished. For example, A DJ system is set up for a program and it is dissembled after the program.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Natural and Manufactured System</span>
                                    <ul>
                                        <li>Natural systems are created by the nature. For example, Solar system, seasonal system.</li>
                                        <li>Manufactured System is the man-made system. For example, Rockets, dams, trains.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Deterministic or Probabilistic System</span>
                                    <ul>
                                        <li>Deterministic system operates in a predictable manner and the interaction between system components is known with certainty. For example, two molecules of hydrogen and one molecule of oxygen makes water.</li>
                                        <li>Probabilistic System shows uncertain behavior. The exact output is not known. For example, Weather forecasting, mail delivery.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Social, Human-Machine, Machine System</span>
                                    <ul>
                                        <li>Social System is made up of people. For example, social clubs, societies.</li>
                                        <li>In Human-Machine System, both human and machines are involved to perform a particular task. For example, Computer programming.</li>
                                        <li>Machine System is where human interference is neglected. All the tasks are performed by the machine. For example, an autonomous robot.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Man–Made Information Systems</span>
                                    <ul>
                                        <li>It is an interconnected set of information resources to manage data for particular organization, under Direct Management Control (DMC).</li>
                                        <li>This system includes hardware, software, communication, data, and application for producing information according to the need of an organization.</li>
                                        <li>Man-made information systems are divided into three types −
                                            <ul>
                                                <li><span class="title-ph">Formal Information System</span> − It is based on the flow of information in the form of memos, instructions, etc., from top level to lower levels of management.</li>
                                                <li><span class="title-ph">Informal Information System </span> − This is employee based system which solves the day to day work related problems.</li>
                                                <li><span class="title-ph">Computer Based System </span> − This system is directly dependent on the computer for managing business applications. For example, automatic library system, railway reservation system, banking system, etc.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Systems Models</h5>
                                <span class="title-ph">Schematic Models</span>
                                <ul>
                                    <li>A schematic model is a 2-D chart that shows system elements and their linkages.</li>
                                    <li>Different arrows are used to show information flow, material flow, and information feedback</li>
                                </ul>
                                <div class="mt-2">
                                    <span class="title-ph">Flow System Models</span>
                                    <ul>
                                        <li>A flow system model shows the orderly flow of the material, energy, and information that hold the system together.</li>
                                        <li>Program Evaluation and Review Technique (PERT), for example, is used to abstract a real world system in model form.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Static System Models</span>
                                    <ul>
                                        <li>They represent one pair of relationships such as activity–time or cost–quantity.</li>
                                        <li>The Gantt chart, for example, gives a static picture of an activity-time relationship</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Dynamic System Models</span>
                                    <ul>
                                        <li>Business organizations are dynamic systems. A dynamic model approximates the type of organization or application that analysts deal with.</li>
                                        <li>It shows an ongoing, constantly changing status of the system. It consists of −
                                            <ul>
                                                <li>Inputs that enter the system</li>
                                                <li>The processor through which transformation takes place</li>
                                                <li>The program(s) required for processing</li>
                                                <li>The output(s) that result from processing.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-3">
                                <h5 class="title-ph">Categories of Information</h5>
                                <p>There are three categories of information related to managerial levels and the decision managers make.</p>
                                <img src="img_SFDLT_5/system_analysis_2.png" alt="categories of information">
                                <div class="mt-2">
                                    <span class="title-ph">Strategic Information</span>
                                    <ul>
                                        <li>This information is required by topmost management for long range planning policies for next few years. 
                                            For example, trends in revenues, financial investment, and human resources, and population growth.</li>
                                        <li>This type of information is achieved with the aid of Decision Support System (DSS).</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Managerial Information</span>
                                    <ul>
                                        <li>This type of Information is required by middle management for short and intermediate range planning 
                                            which is in terms of months. For example, sales analysis, cash flow projection, and annual financial statements.</li>
                                        <li>It is achieved with the aid of Management Information Systems (MIS).</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Operational information</span>
                                    <ul>
                                        <li>This type of information is required by low management for daily and short term planning to enforce 
                                            day-to-day operational activities. For example, keeping employee attendance records, overdue purchase orders, and current stocks available.</li>
                                        <li>It is achieved with the aid of Data Processing Systems (DPS).</li>    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: System Development Life Cycle </div><hr>
                            <p>An effective System Development Life Cycle (SDLC) should result in a high quality system that meets customer expectations, 
                                reaches completion within time and cost evaluations, and works effectively and efficiently in the current and planned Information Technology infrastructure.
                                System Development Life Cycle (SDLC) is a conceptual model which includes policies and procedures for developing or altering systems throughout their life cycles.
                                SDLC is used by analysts to develop an information system. SDLC includes the following activities −
                                <ul>
                                    <li>requirements</li>
                                    <li>Design</li>
                                    <li>Imprementation</li>
                                    <li>Testing</li>
                                    <li>deployment</li>
                                    <li>Operation</li>
                                    <li>Maintenance</li>
                                </ul>
                            </p>
                            <div class="mt-2">
                                <h5 class="title-ph">Phases of SDLC</h5>
                                <p>Systems Development Life Cycle is a systematic approach which explicitly breaks down the work into phases that are required to implement either 
                                    new or modified Information System.</p>
                                <img src="img_SFDLT_5/system_analysis_3.png" alt="phases of sdlc">
                                <img src="img_SFDLT_5/system_analysis_4.png" alt="phase of SDLC">  
                                <div class="mt-2">
                                    <span class="title-ph">Feasibility Study or Planning</span>
                                    <ul>
                                        <li>Define the problem and scope of existing system</li>
                                        <li>Overview the new system and determine its objectives</li>
                                        <li>Confirm project feasibility and produce the project Schedule</li>
                                        <li>During this phase, threats, constraints, integration and security of system are also considered</li>
                                        <li>A feasibility report for the entire project is created at the end of this phase.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Analysis and Specification</span>
                                    <ul>
                                        <li>Gather, analyze, and validate the information</li>
                                        <li>Define the requirements and prototypes for new system.</li>
                                        <li>Evaluate the alternatives and prioritize the requirements.</li>
                                        <li>Examine the information needs of end-user and enhances the system goal.</li>
                                        <li>A Software Requirement Specification (SRS) document, which specifies the software, hardware, functional, and network requirements of 
                                            the system is prepared at the end of this phase.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">System Design</span>
                                    <ul>
                                        <li>Includes the design of application, network, databases, user interfaces, and system interfaces.</li>
                                        <li>Transform the SRS document into logical structure, which contains detailed and complete set of specifications that can be implemented in a programming language.</li>
                                        <li>Create a contingency, training, maintenance, and operation plan.</li>
                                        <li>Review the proposed design. Ensure that the final design must meet the requirements stated in SRS document.</li>
                                        <li>Finally, prepare a design document which will be used during next phases</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Implementation</span>
                                    <ul>
                                        <li>Implement the design into source code through coding.</li>
                                        <li>Combine all the modules together into training environment that detects errors and defects.</li>
                                        <li>A test report which contains errors is prepared through test plan that includes test related tasks such as test case generation, testing criteria, and resource allocation for testing.</li>
                                        <li>Integrate the information system into its environment and install the new system.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Maintenance/Support</span>
                                    <ul>
                                        <li>Include all the activities such as phone support or physical on-site support for users that is required once the system is installing.</li>
                                        <li>Implement the changes that software might undergo over a period of time, or implement any new requirements after the software is deployed at the customer location.</li>
                                        <li>It also includes handling the residual errors and resolve any issues that may exist in the system even after the testing phase</li>
                                        <li>Maintenance and support may be needed for a longer time for large systems and for a short time for smaller systems.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Life Cycle of System Analysis and Design</h5>
                                <p>The following diagram shows the complete life cycle of the system during analysis and design phase.</p>
                                <img src="img_SFDLT_5/system_analysis_5.png" alt="Life Cycle of System Analysis and Design">
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Role of System Analyst</h5>
                                <p>The system analyst is a person who is thoroughly aware of the system and guides the system development project by giving proper directions. He is an expert having technical and interpersonal 
                                    skills to carry out development tasks required at each phase.</p>
                                <p>He pursues to match the objectives of information system with the organization goal.</p> 
                                <div class="mt-2">
                                    <span class="title-ph">Main Roles</span>
                                    <ul>
                                        <li>Defining and understanding the requirement of user through various Fact finding techniques</li>
                                        <li>Prioritizing the requirements by obtaining user consensus</li>
                                        <li>Gathering the facts or information and acquires the opinions of users.</li>
                                        <li>Maintains analysis and evaluation to arrive at appropriate system which is more user friendly.</li>
                                        <li>Suggests many flexible alternative solutions, pick the best solution, and quantify cost and benefits</li>
                                        <li>Draw certain specifications which are easily understood by users and programmer in precise and detailed form.</li>
                                        <li>Implemented the logical design of system which must be modular.</li>
                                        <li>Plan the periodicity for evaluation after it has been used for some time, and modify the system as needed.</li>
                                    </ul>
                                </div>   
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Attributes of a Systems Analyst</h5>
                                <p>The following figure shows the attributes a systems analyst should possess −</p>
                                <img src="img_SFDLT_5/system_analysis_6.png" alt="Attributes of a Systems Analyst">
                                <div class="mt-2">
                                    <span class="title-ph">Interpersonal Skills</span>
                                    <ul>
                                        <li>Interface with users and programmer.</li>
                                        <li>Facilitate groups and lead smaller teams.</li>
                                        <li>Managing expectations.</li>
                                        <li>Good understanding, communication, selling and teaching abilities.</li>
                                        <li>Motivator having the confidence to solve queries.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Analytical Skills</span>
                                    <ul>
                                        <li>System study and organizational knowledge</li>
                                        <li>Problem identification, problem analysis, and problem solving</li>
                                        <li>Sound commonsense</li>
                                        <li>Ability to access trade-off</li>
                                        <li>Curiosity to learn about new organization</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Management Skills</span>
                                    <ul>
                                        <li>Understand users jargon and practices.</li>
                                        <li>Resource & project management.</li>
                                        <li>Change & risk management.</li>
                                        <li>Understand the management functions thoroughly.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Technical Skills</span>
                                    <ul>
                                        <li>Knowledge of computers and software.</li>
                                        <li>Keep abreast of modern development.</li>
                                        <li>Know of system design tools.</li>
                                        <li>Breadth knowledge about new technologies.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: System Planning</div><hr>
                        <h5 class="title-ph">What is Requirements Determination?</h5>
                        <p>A requirement is a vital feature of a new system which may include processing or capturing of data, 
                            controlling the activities of business, producing information and supporting the management.</p>
                        <p>Requirements determination involves studying the existing system and gathering details to find out 
                            what are the requirements, how it works, and where improvements should be made.</p> 
                        <div class="mt-2">
                            <h5 class="title-ph">Major Activities in requirement Determination</h5>
                            <span class="title-ph">Requirements Anticipation</span>
                            <ul>
                                <li>It predicts the characteristics of system based on previous experience which include certain 
                                    problems or features and requirements for a new system.</li>
                                <li>It can lead to analysis of areas that would otherwise go unnoticed by inexperienced analyst. 
                                    But if shortcuts are taken and bias is introduced in conducting the investigation, then requirement 
                                    Anticipation can be half-baked.</li> 
                            </ul>

                            <span class="title-ph">Requirements Investigation</span>
                            <ul>
                                <li>It is studying the current system and documenting its features for further analysis.</li>
                                <li>It is at the heart of system analysis where analyst documenting and describing system 
                                    features using fact-finding techniques, prototyping, and computer assisted tools.</li>
                            </ul>

                            <span class="title-ph">Requirements Specifications</span>
                            <ul>
                                <li>It includes the analysis of data which determine the requirement specification, 
                                    description of features for new system, and specifying what information requirements will be provided.</li>
                                <li>It includes analysis of factual data, identification of essential requirements, and selection of 
                                    Requirement-fulfillment strategies.</li>
                            </ul>
                        </div>   
                        <div class="mt-3">
                            <h5 class="title-ph">Information Gathering Techniques</h5>
                            <p>The main aim of fact finding techniques is to determine the information requirements of an organization used by
                                    analysts to prepare a precise SRS understood by user.</p>
                            <p>Ideal SRS Document should −</p>     
                            <ul>
                                <li>be complete, Unambiguous, and Jargon-free.</li>
                                <li>specify operational, tactical, and strategic information requirements.</li>
                                <li>solve possible disputes between users and analyst.</li>
                                <li>use graphical aids which simplify understanding and design.</li>
                            </ul>
                            <p>There are various information gathering techniques −</p>
                            <div class="mt-2">
                                <span class="title-ph">Interviewing</span>
                                <p>Systems analyst collects information from individuals or groups by interviewing. The analyst can be formal, 
                                    legalistic, play politics, or be informal; as the success of an interview depends on the skill of analyst as interviewer.</p>
                                    <p>It can be done in two ways −</p>
                                <ul>
                                    <li><span class="title-ph">Unstructured Interview </span> − The system analyst conducts question-answer session to acquire basic information of the system.</li>
                                    <li><span class="title-ph">Structured Interview </span> − It has standard questions which user need to respond in either close (objective) or open (descriptive) format.</li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Questionnaires</span>
                                <p>This method is used by analyst to gather information about various issues of system from large number of persons.</p>
                                <p>There are two types of questionnaires −</p>
                                <ul>
                                    <li><span class="title-ph">Open-ended Questionnaires </span> − It consists of questions that can be easily and correctly interpreted. They can explore a problem and lead to a specific direction of answer.</li>
                                    <li><span class="title-ph">Closed-ended Questionnaires </span> − It consists of questions that are used when the systems analyst effectively lists all possible responses, which are mutually exclusive.</li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Review of Records, Procedures, and Forms</span>
                                <p>Review of existing records, procedures, and forms helps to seek insight into a system which describes the current system capabilities, its operations, or activities.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Observation</span>
                                <p>This is a method of gathering information by noticing and observing the people, events, and objects. The analyst visits the organization to observe the working of current system and understands the requirements of 
                                    the system.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Joint Application Development (JAD)</span>
                                <p>It is a new technique developed by IBM which brings owners, users, analysts, designers, and builders to define and design the system using organized and intensive workshops. JAD trained analyst act as facilitator 
                                    for workshop who has some specialized skills.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Secondary Research or Background Reading</span>
                                <p>This method is widely used for information gathering by accessing the gleaned information. It includes any previously gathered information used by the marketer from any internal or external source.</p>
                            </div>
                        </div>  

                        <div class="mt-3">
                            <h5 class="title-ph">Structured Analysis</h5>
                            <p>Analysts use various tools to understand and describe the information system. One of the ways is using structured analysis.</p>
                            <div class="mt-2">
                                <span class="title-ph">What is Structured Analysis?</span>
                                <p>Structured Analysis is a development method that allows the analyst to understand the system and its activities in a logical way.</p>
                                <p>It is a systematic approach, which uses graphical tools that analyze and refine the objectives of an existing system and develop a new system specification which can be easily understandable by user.</p>
                                <p>It has following attributes −</p>
                                <ul>
                                    <li>It is graphic which specifies the presentation of application.</li>
                                    <li>It divides the processes so that it gives a clear picture of system flow.</li>
                                    <li>It is logical rather than physical i.e., the elements of system do not depend on vendor or hardware.</li>
                                    <li>It is an approach that works from high-level overviews to lower-level details.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">Structured Analysis Tools</span>
                            <p>During Structured Analysis, various tools and techniques are used for system development. They are −</p>
                            <ul>
                                <li>Data Flow Diagrams</li>
                                <li>Data Dictionary</li>
                                <li>Decision Trees</li>
                                <li>Decision Tables</li>
                                <li>Structured English</li>
                                <li>Pseudocode</li>
                            </ul>
                            <img src="img_SFDLT_5/system_analysis_7.png" alt="Structured Analysis Tools">
                        </div>
                    </div>
                    <div class="lesson" id="section4">
                        <div class="lesson-title mt-2">Lesson 4: System Design</div><hr>
                        <div>
                            <p><span class="title-ph">System design </span> is the phase that bridges the gap between problem domain and the existing system in a manageable way. This phase focuses on the solution domain, i.e. “how to implement?”
                                It is the phase where the SRS document is converted into a format that can be implemented and decides how the system will operate.
                                In this phase, the complex activity of system development is divided into several smaller sub-activities, which coordinate with each other to achieve the main objective of system development.
                            </p>
                            <div class="mt-3">
                                <h5 class="title-ph">Types of System Design</h5>
                                <div class="mt-2">
                                    <span class="title-ph">Logical Design</span>
                                    <p>Logical design pertains to an abstract representation of the data flow, inputs, and outputs of the system. It describes the inputs (sources), outputs (destinations), databases (data stores), procedures 
                                        (data flows) all in a format that meets the user requirements.</p>
                                    <p>While preparing the logical design of a system, the system analyst specifies the user needs at level of detail that virtually determines the information flow into and out of the system and the required 
                                        data sources. Data flow diagram, E-R diagram modeling are used.</p>    
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Physical Design</span>
                                    <p>Physical design relates to the actual input and output processes of the system. It focuses on how data is entered into a system, verified, processed, and displayed as output.</p>
                                    <p>It produces the working system by defining the design specification that specifies exactly what the candidate system does. It is concerned with user interface design, process design, and data design.</p>
                                    <p>It consists of the following steps −</p>
                                    <ul>
                                        <li>Specifying the input/output media, designing the database, and specifying backup procedures.</li>
                                        <li>Planning system implementation.</li>
                                        <li>Devising a test and implementation plan, and specifying any new hardware and software.</li>
                                        <li>Updating costs, benefits, conversion dates, and system constraints.</li>
                                    </ul>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Architectural Design</span>
                                    <p>It is also known as high level design that focuses on the design of system architecture. It describes the structure and behavior of the system. It defines the structure and relationship between various 
                                        modules of system development process.</p>    
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Detailed Design</span>
                                    <p>It follows Architectural design and focuses on development of each module.</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Design Strategies</h5>
                                <span class="title-ph">top-Down Strategy</span>
                                <p>The top-down strategy uses the modular approach to develop the design of a system. It is called so because it starts from the top or the highest-level module and moves towards the lowest level modules.</p>
                                <p>In this technique, the highest-level module or main module for developing the software is identified. The main module is divided into several smaller and simpler submodules or segments based on the task 
                                    performed by each module. Then, each submodule is further subdivided into several submodules of next lower level. This process of dividing each module into several submodules continues until the lowest 
                                    level modules, which cannot be further subdivided, are not identified.</p>
                                <img src="img_SFDLT_5/system_analysis_8.png" alt="top-Down Strategy">   
                                
                                <span class="title-ph">Bottom-Up Strategy</span>
                                <p>Bottom-Up Strategy follows the modular approach to develop the design of the system. It is called so because it starts from the bottom or the most basic level modules and moves towards the highest level modules.</p>
                                <p>In this technique,</p>
                                <ul>
                                    <li>The modules at the most basic or the lowest level are identified.</li>
                                    <li>These modules are then grouped together based on the function performed 
                                        by each module to form the next higher-level modules.</li>
                                    <li>Then, these modules are further combined to form the next higher-level modules.</li>  
                                    <li>This process of grouping several simpler modules to form higher level modules continues until the main module of system development process is achieved.</li>  
                                </ul>
                                <img src="img_SFDLT_5/system_analysis_9.png" alt="Bottom-Up Strategy">
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Structured Design</h5>
                                <p>Structured design is a data-flow based methodology that helps in identifying the input and output of the developing system. The main objective of structured design is to minimize the complexity and increase 
                                    the modularity of a program. Structured design also helps in describing the functional aspects of the system.</p>
                                <p>In structured designing, the system specifications act as a basis for graphically representing the flow of data and sequence of processes involved in a software development with the help of DFDs. 
                                    After developing the DFDs for the software system, the next step is to develop the structure chart.</p>  
                                <img src="img_SFDLT_5/system_analysis_10.png" alt="Structured Design">      
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Factors Affecting System Complexity</h5>
                                <p>To develop good quality of system software, it is necessary to develop a good design. Therefore, the main focus on while developing the design of the system is the quality of the software design. A good quality software design is the one, which minimizes the complexity and cost expenditure in software development.
                                    The two important concepts related to the system development that help in determining the complexity of a system are coupling and cohesion.
                                    </p>
                                <div class="mt-2">
                                    <span class="title-ph">Coupling</span>
                                    <p>Coupling is the measure of the independence of components. It defines the degree of dependency of each module of system development on the other. In practice, this means the stronger the coupling between the modules in a system, the more difficult it is to implement and maintain the system.
                                        Each module should have simple, clean interface with other modules, and that the minimum number of data elements should be shared between modules.
                                        </p>
                                </div>    
                                <div class="mt-2">
                                    <span class="title-ph">Cohesion</span>
                                    <p>Cohesion is the measure of closeness of the relationship between its components. It defines the amount of dependency of the components of a module on one another. In practice, this means the systems designer must ensure that −</p>
                                    <ul>
                                        <li>They do not split essential processes into fragmented modules.</li>
                                        <li>They do not gather together unrelated processes represented as processes on the DFD into meaningless modules.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section5">
                        <div class="lesson-title mt-2">Lesson 5: Testing and Quality Assurance</div><hr>
                        <div>
                            <p>The software system needs to be checked for its intended behavior and direction of progress at each development stage to avoid duplication of efforts, 
                                time and cost overruns, and to assure completion of the system within stipulated time.The software system needs to be checked for its intended behavior 
                                and direction of progress at each development stage to avoid duplication of efforts, time and cost overruns, and to assure completion of the system within 
                                stipulated time.</p>
                            <p>System testing and quality assurance come to aid for checking the system. It includes −</p>   
                            <ul>
                                <li>Product level quality (Testing)</li>
                                <li>Process level quality.</li>
                            </ul> 
                            <p>Let us go through them briefly −</p>
                            <div class="mt-2">
                                <span class="title-ph">Testing</span>
                                <p>Testing is the process or activity that checks the functionality and correctness of software according to specified user requirements in order to improve the quality and reliability of system. It is an expensive, time consuming, and critical approach in system development which requires proper planning of overall testing process.
                                    A successful test is one that finds the errors. It executes the program with explicit intention of finding error, i.e., making the program fail. It is a process of evaluating system with an intention of creating a strong system and mainly focuses on the weak areas of the system or software.
                                    </p>
                                <span class="title-ph">Characteristics of System Testing</span>   
                                <p>System testing begins at the module level and proceeds towards 
                                    the integration of the entire software system. Different testing 
                                    techniques are used at different times while testing the system. 
                                    It is conducted by the developer for small projects and by independent 
                                    testing groups for large projects.</p> 
                                <span class="title-ph mt-2">Stages of System Testing</span>   
                                <div class="mt-1">
                                    <span>Test Strategy</span>
                                    <p>It is a statement that provides information about the various levels, 
                                        methods, tools, and techniques used for testing the system. It should 
                                        satisfy all the needs of an organization.</p>
                                </div>
                                <div class="mt-1">
                                    <span class="title-ph">Test Plan</span>
                                    <p>It provides a plan for testing the system and verifies that the system under testing fulfils all the design and functional specifications. The test plan provides the following information −</p>
                                    <ul>
                                        <li>Objectives of each test phase</li>
                                        <li>Approaches and tools used for testing</li>
                                        <li>Responsibilities and time required for each testing activity</li>
                                        <li>Availability of tools, facilities, and test libraries</li>
                                        <li>Procedures and standards required for planning and conducting the tests</li>
                                        <li>Factors responsible for successful completion of testing process</li>
                                    </ul>
                                </div>
                                <div class="mt-1">
                                    <span class="title-ph">Test Case Design</span>
                                    <ul>
                                        <li>Test cases are used to uncover as many errors as possible in the system.</li>
                                        <li>A number of test cases are identified for each module of the system to be tested.</li>
                                        <li>Each test case will specify how the implementation of a particular requirement 
                                            or design decision is to be tested and the criteria for the success of the test.</li>
                                        <li>The test cases along with the test plan are documented as a part of a system 
                                            specification document or in a separate document called test specification or test description.</li>    
                                    </ul>
                                </div>
                                <div class="mt-1">
                                    <span class="title-ph">Test Procedures</span>
                                    <p>It consists of the steps that should be followed to execute each of the test cases. These procedures are specified in a separate document called test procedure specification. 
                                        This document also specifies any special requirements and formats for reporting the result of testing.</p>
                                </div>
                                <div class="mt-1">
                                    <span class="title-ph">Test Result Documentation</span>
                                    <p>Test result file contains brief information about the total number of test cases executed, the number of errors, and nature of errors. These results are then assessed against 
                                        criteria in the test specification to determine the overall outcome of the test.</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Types of Testing</h5>
                                <p>Testing can be of various types and different types of tests are conducted depending on the kind of bugs one seeks to discover −</p>
                                <div class="mt-2">
                                    <span class="title-ph">Unit Testing</span>
                                    <p>Also known as Program Testing, it is a type of testing where the analyst tests or focuses on each program or module independently. It is carried out with the 
                                        intention of executing each statement of the module at least once.</p>
                                    <ul>
                                        <li>In unit testing, accuracy of program cannot be assured and it is difficult to conduct testing of various input combination in detail.</li>
                                        <li>It identifies maximum errors in a program as compared to other testing techniques.</li>
                                    </ul>  
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Integration Testing</span>
                                    <p>In Integration Testing, the analyst tests multiple module working together. 
                                        It is used to find discrepancies between the system and its original objective, 
                                        current specifications, and systems documentation.</p>
                                    <ul>
                                        <li>Here the analysts are try to find areas where modules have been designed with 
                                            different specifications for data length, type, and data element name.</li>
                                        <li>It verifies that file sizes are adequate and that indices have been built properly.</li>    
                                    </ul>    
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Functional Testing</span>
                                    <p>Function testing determines whether the system is functioning correctly according to its specifications and relevant standards documentation. 
                                        Functional testing typically starts with the implementation of the system, which is very critical for the success of the system.</p>
                                        <p>Functional testing is divided into two categories −</p>
                                    <ul>
                                        <li><span class="title-ph">Positive Functional Testing</span>− It involves testing the system with valid inputs to verify that the outputs produced are correct. </li>
                                        <li><span class="title-ph">Negative Functional Testing </span> − It involves testing the software with invalid inputs and undesired operating conditions.</li>
                                    </ul>    
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Rules for System Testing</h5>
                                <p>To carry out system testing successfully, you need to follow the given rules −</p>
                                <ul>
                                    <li>Testing should be based on the requirements of user.</li>
                                    <li>Before writing testing scripts, understand the business logic should be understood thoroughly.</li>
                                    <li>Test plan should be done as soon as possible</li>
                                    <li>Testing should be done by the third party.</li>
                                    <li>It should be performed on static software.</li>
                                    <li>Testing should be done for valid and invalid input conditions.</li>
                                    <li>Testing should be reviewed and examined to reduce the costs.</li>
                                    <li>Both static and dynamic testing should be conducted on the software.</li>
                                    <li>Documentation of test cases and test results should be done.</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Quality Assurance</h5>
                                <p>It is the review of system or software products and its documentation for assurance that system meets the requirements and specifications.</p>
                                <ul>
                                    <li>Purpose of QA is to provide confidence to the customers by constant delivery of product according to specification.</li>
                                    <li>Software quality Assurance (SQA) is a techniques that includes procedures and tools applied by the software professionals to ensure that software meet the specified standard for its intended use and performance.</li>
                                    <li>The main aim of SQA is to provide proper and accurate visibility of software project and its developed product to the administration.</li>
                                    <li>It reviews and audits the software product and its activities throughout the life cycle of system development.</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Objectives of Quality Assurance</h5>
                                <p>The objectives of conducting quality assurance are as follows −</p>
                                <ul>
                                    <li>To monitor the software development process and the final software developed.</li>
                                    <li>To ensure whether the software project is implementing the standards and procedures set by the management.</li>
                                    <li>To notify groups and individuals about the SQA activities and results of these activities.</li>
                                    <li>To ensure that the issues, which are not solved within the software are addressed by the upper management.</li>
                                    <li>To identify deficiencies in the product, process, or the standards, and fix them.</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Levels of Quality Assurance</h5>
                                <p>There are several levels of QA and testing that need to be performed in order to certify a software product.</p>
                                <div class="mt-2">
                                    <span class="title-ph">Level 1 − Code Walk-through</span>
                                    <p>At this level, offline software is examined or checked for any violations of the official coding rules. 
                                        In general, the emphasis is placed on examination of the documentation and level of in-code comments.</p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Level 2 − Compilation and Linking</span>
                                    <p>At this level, it is checked that the software can compile and 
                                        link all official platforms and operating systems.</p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Level 3 − Routine Running</span>
                                    <p>At this level, it is checked that the software can run properly under a 
                                        variety of conditions such as certain number of events and small and large event sizes etc.</p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Level 4 − Performance test</span>
                                    <p>At this final level, it is checked that the performance of the software satisfies the 
                                        previously specified performance level.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section6">
                        <div class="lesson-title mt-2">Lesson 6: System Implementation and Maintenance</div><hr>
                        <div>
                            <p>Implementation is a process of ensuring that the information system is operational. It involves −</p>
                            <ul>
                                <li>Constructing a new system from scratch</li>
                                <li>Constructing a new system from the existing one.</li>
                            </ul>
                            <p>Implementation allows the users to take over its operation for use and evaluation. It involves 
                                training the users to handle the system and plan for a smooth conversion.</p>
                            <div class="mt-3">
                                <h5 class="title-ph">Training</h5>
                                <p>The personnel in the system must know in detail what their roles will be, how they can use the system, 
                                    and what the system will or will not do. The success or failure of welldesigned and technically elegant 
                                    systems can depend on the way they are operated and used.</p>
                                <div class="mt-2">
                                    <span class="title-ph">Training Systems Operators</span>
                                    <p>Systems operators must be trained properly such that they 
                                        can handle all possible operations, both routine and extraordinary. 
                                        The operators should be trained in what common malfunctions may occur, 
                                        how to recognize them, and what steps to take when they come.</p>
                                    <p>Training involves creating troubleshooting lists to identify possible problems and remedies for them, 
                                        as well as the names and telephone numbers of individuals to contact when unexpected or unusual problems arise.</p>
                                    <p>Training also involves familiarization with run procedures, which involves working through the sequence of 
                                        activities needed to use a new system.</p>    
                                </div>  
                                <div class="mt-2">
                                    <span class="title-ph">User Training</span>
                                    <ul>
                                        <li>End-user training is an important part of the computer-based information system development, 
                                            which must be provided to employees to enable them to do their own problem solving.</li>
                                        <li>User training involves how to operate the equipment, troubleshooting the system problem, 
                                            determining whether a problem that arose is caused by the equipment or software.</li>  
                                        <li>Most user training deals with the operation of the system itself. 
                                            The training courses must be designed to help the user with fast mobilization for the organization.</li>      
                                    </ul>
                                </div> 
                                <div class="mt-2">
                                    <span class="title-ph">Training Guidelines</span>
                                    <ul>
                                        <li>Establishing measurable objectives</li>
                                        <li>Using appropriate training methods</li>
                                        <li>Selecting suitable training sites</li>
                                        <li>Employing understandable training materials</li>
                                    </ul>
                                </div> 
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Training Methods</h5>
                                <div class="mt-2">
                                    <span class="title-ph">Instructor-led training</span>
                                    <p>It involves both trainers and trainees, who have to meet at the same time, but not necessarily at the same place. 
                                        The training session could be one-on-one or collaborative. </p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Self-Paced Training</span>
                                    <p>It involves both trainers and trainees, who do not need to meet at the same place or at the same time. 
                                        The trainees learn the skills themselves by accessing the courses at their own convenience. </p>                                                
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">System Maintenance / Enhancement</h5>
                                <p>Maintenance means restoring something to its original conditions. Enhancement means adding, 
                                    modifying the code to support the changes in the user specification. System maintenance conforms 
                                    the system to its original requirements and enhancement adds to system capability by incorporating 
                                    new requirements.</p>
                                <p>Thus, maintenance changes the existing system, enhancement adds features to the existing system, and 
                                    development replaces the existing system. It is an important part of system development that includes 
                                    the activities which corrects errors in system design and implementation, updates the documents, and 
                                    tests the data.</p>  
                                <div class="mt-2">
                                    <span class="title-ph">Maintenance Types</span>
                                    <p>System maintenance can be classified into three types −</p>
                                    <ul>
                                        <li><span class="title-ph">Corrective Maintenance </span> − Enables user to carry out the repairing and correcting leftover problems.</li>
                                        <li><span class="title-ph">Adaptive Maintenance </span> − Enables user to replace the functions of the programs.</li>
                                        <li> <span class="title-ph">Perfective Maintenance</span> − Enables user to modify or enhance the programs according to the users’ requirements and changing needs.</li>
                                    </ul>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section7">
                        <div class="lesson-title mt-2">Lesson 7: System Security and Audit</div><hr>
                        <p>It is an investigation to review the performance of an operational system. 
                            The objectives of conducting a system audit are as follows −</p>
                        <ul>
                            <li>To compare actual and planned performance.</li>
                            <li>To verify that the stated objectives of system are still valid in current environment.</li>
                            <li>To evaluate the achievement of stated objectives.</li>
                            <li>To ensure the reliability of computer based financial and other information.</li>
                            <li>To ensure all records included while processing.</li>
                            <li>To ensure protection from frauds.</li>
                        </ul> 
                        <div class="mt-3">
                            <h5 class="title-ph">Audit of Computer System Usage</h5>
                            <p>Data processing auditors audits the usage of computer system in order to control it. 
                                The auditor need control data which is obtained by computer system itself.</p>
                            <div class="mt-2">
                                <span class="title-ph">The System Auditor</span>
                                <p>The role of auditor begins at the initial stage of system development so that resulting system is secure. 
                                    It describes an idea of utilization of system that can be recorded which helps in load planning and deciding on 
                                    hardware and software specifications. It gives an indication of wise use of the computer system and possible misuse of the system.</p>
                            </div>    
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Audit Trial</h5>
                            <p>An audit trial or audit log is a security record which is comprised of who has accessed a computer system and what operations are 
                                performed during a given period of time. Audit trials are used to do detailed tracing of how data on the system has changed.</p>
                            <p>It provides documentary evidence of various control techniques that a transaction is subject to during its processing.
                                 Audit trials do not exist independently. They are carried out as a part of accounting for recovering lost transactions.</p>
                        </div>   
                        <div class="mt-3">
                            <h5 class="title-ph">Audit Methods</h5>
                            <p>Auditing can be done in two different ways −</p>
                            <div class="mt-2">
                                <span class="title-ph">Auditing around the Computer</span>
                                <ul>
                                    <li>Take sample inputs and manually apply processing rules.</li>
                                    <li>Compare outputs with computer outputs.</li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Auditing through the Computer</span>
                                <ul>
                                    <li>Establish audit trial which allows examining selected intermediate results.</li>
                                    <li>Control totals provide intermediate checks.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Audit Considerations</h5>
                            <p>Audit considerations examine the results of the analysis by using both the narratives and models to 
                                identify the problems caused due to misplaced functions, split processes or functions, broken data flows, 
                                missing data, redundant or incomplete processing, and nonaddressed automation opportunities.</p>
                                <p>The activities under this phase are as follows −</p>
                             <ul>
                                 <li>Identification of the current environment problems</li>
                                 <li>Identification of problem causes</li>
                                 <li>Identification of alternative solutions</li>
                                 <li>Evaluation and feasibility analysis of each solution</li>
                                 <li>Selection and recommendation of most practical and appropriate solution</li>
                                 <li>Project cost estimation and cost benefit analysis</li>
                             </ul>   
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Security</h5>
                            <p>System security refers to protecting the system from theft, unauthorized access and modifications, and accidental or unintentional damage. 
                                In computerized systems, security involves protecting all the parts of computer system which includes data, software, and hardware. 
                                Systems security includes system privacy and system integrity.</p>
                            <ul>
                                <li><span class="title-ph">System privacy</span> deals with protecting individuals systems from being accessed and used without the permission/knowledge of the concerned individuals.</li>
                                <li><span class="title-ph">System integrity </span> is concerned with the quality and reliability of raw as well as processed data in the system.</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Risk Analysis</h5>
                            <p>A risk is the possibility of losing something of value. Risk analysis starts with planning for secure system by identifying the vulnerability of system and impact of this. 
                                The plan is then made to manage the risk and cope with disaster. It is done to accesses the probability of possible disaster and their cost.</p>
                            <p>Risk analysis is a teamwork of experts with different backgrounds like chemicals, human error, and process equipment.</p>
                            <span class="title-ph mt-2">Risk Analysis – Main Steps</span>
                            <p>As the risks or threats are changing and the potential loss are also changing, management of risk should be performed on periodic basis by senior managers.</p>
                            <p>Risk management is a continuous process and it involves the following steps −</p>
                            <ul>
                                <li>Identification of security measures.</li>
                                <li>Calculation of the cost of implementation of security measures.</li>
                                <li>Comparison of the cost of security measures with the loss and probability of threats.</li>
                                <li>Selection and implementation of security measures.</li>
                                <li>Review of the implementation of security measures.</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">SSADM techniques</h5><hr>
                            <p>The three most important techniques that are used in SSADM are as follows:</p>
                            <div class="mt-2">
                                <span class="title-ph">Logical Data Modelling</span>
                                <p>The process of identifying, modelling and documenting the data requirements of the system being designed. 
                                    The result is a data model containing entities (things about which a business needs to record information), 
                                    attributes (facts about the entities) and relationships (associations between the entities).</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Data Flow Modelling</span>
                                <p>The process of identifying, modelling and documenting how data moves around an information system.
                                    Data Flow Modeling examines processes (activities that transform data from one form to another), 
                                    data stores (the holding areas for data), external entities (what sends data into a system or 
                                    receives data from a system), and data flows (routes by which data can flow).</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Entity Event Modelling</span>
                                <p>A two-stranded process: Entity Behavior Modelling, identifying, 
                                    modelling and documenting the events that affect each entity 
                                    and the sequence (or life history) in which these events occur, and Event Modelling, 
                                    designing for each event the process to coordinate entity life histories.</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5>Stages</h5><hr>
                            <p>The SSADM method involves the application of a sequence of analysis, documentation and design tasks concerned with the following.</p>
                            <div class="mt-2">
                                <span class="title-ph">Stage 1 – Feasibility study</span>
                                <p>In order to determine whether or not a given project is feasible, there must be some form of investigation 
                                    into the goals and implications of the project. For very small scale projects this may not be necessary 
                                    at all as the scope of the project is easily understood. In larger projects, the feasibility may be done 
                                    but in an informal sense, either because there is no time for a formal study or because the project is a 
                                    “must-have” and will have to be done one way or the other. A data flow Diagram is used to describe how the 
                                    current system works and to visualize the known problems.</p>
                                <p>When a feasibility study is carried out, there are four main areas of consideration:</p>  
                                <ul>
                                    <li>Technical – is the project technically possible?</li>
                                    <li>Financial – can the business afford to carry out the project?</li>
                                    <li>Organizational – will the new system be compatible with existing practices?</li>
                                    <li>Ethical – is the impact of the new system socially acceptable?</li>
                                </ul>  
                                <p>To answer these questions, the feasibility study is effectively a condensed version of a comprehensive systems analysis and design. 
                                    The requirements and usages are analyzed to some extent, some business options are drawn up and even some details of the technical 
                                    implementation. The product of this stage is a formal feasibility study document. SSADM specifies the sections that the study should 
                                    contain including any preliminary models that have been constructed and also details of rejected options and the reasons for their 
                                    rejection.</p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 2 – Investigation of the current environment</span>
                                <p>The developers of SSADM understood that in almost all cases there is some form of current system even if it is entirely composed of people and paper. 
                                    Through a combination of interviewing employees, circulating questionnaires, observations and existing documentation, the analyst comes to full understanding 
                                    of the system as it is at the start of the project. This serves many purposes (Like examples?).</p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 3 – Business system options</span>
                                <p>Having investigated the current system, the analyst must decide on the overall design of the new system. To do this, he or she, using the outputs of the previous stage, 
                                    develops a set of business system options. These are different ways in which the new system could be produced varying from doing nothing to throwing out the old system 
                                    entirely and building an entirely new one. The analyst may hold a brainstorming session so that as many and various ideas as possible are generated.</p>
                                    <p>The ideas are then collected to options which are presented to the user. The options consider the following:</p>
                                <ul>
                                    <li>the degree of automation</li>
                                    <li>the boundary between the system and the users</li>
                                    <li>the distribution of the system, for example, is it centralized to one office or spread out across several?</li>
                                    <li>cost/benefit</li>
                                    <li>impact of the new system</li>
                                </ul>
                                <p>Where necessary, the option will be documented with a logical data structure and a level 1 data-flow diagram.</p>   
                                <p>The users and analyst together choose a single business option. This may be one of the ones already defined or 
                                    may be a synthesis of different aspects of the existing options. The output of this stage is the single selected 
                                    business option together with all the outputs of the feasibility stage.</p> 
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 4– Requirements specification</span>
                                <p>This is probably the most complex stage in SSADM. Using the requirements developed in stage 1 and working within 
                                    the framework of the selected business option, the analyst must develop a full logical specification of what the 
                                    new system must do. The specification must be free from error, ambiguity and inconsistency. 
                                    By logical, we mean that the specification does not say how the system will be implemented but 
                                    rather describes what the system will do.</p>
                                <p>To produce the logical specification, the analyst builds the required logical models for both the data-flow diagrams 
                                    (DFDs) and the Logical Data Model (LDM), consisting of the Logical Data Structure (referred to in other methods as 
                                    entity relationship diagrams) and full descriptions of the data and its relationships. 
                                    These are used to produce function definitions of every function which the users will 
                                    require of the system, Entity Life-Histories (ELHs) which describe all events through the life of an entity, 
                                    and Effect Correspondence Diagrams (ECDs) which describe how each event interacts with all relevant entities. 
                                    These are continually matched against the requirements and where necessary, the requirements are added to and completed.</p> 
                                <p>The product of this stage is a complete requirements specification document which is made up of:</p>       
                                <ul>
                                    <li>the updated data catalogue</li>
                                    <li>the updated requirements catalogue</li>
                                    <li>the processing specification which in turn is made up of</li>
                                    <li>user role/function matrix</li>
                                    <li>function definitions</li>
                                    <li>required logical data model</li>
                                    <li>entity life-histories</li>
                                    <li>effect correspondence diagrams</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 5 – Technical system options</span>
                                <p>This stage is the first towards a physical implementation of the new system. Like the Business System Options, 
                                    in this stage a large number of options for the implementation of the new system are generated. </p>
                                <p>This is narrowed down to two or three to present to the user from which the final option is chosen or synthesized.</p> 
                                <p>However, the considerations are quite different being:</p>  
                                <ul>
                                    <li>the hardware architectures</li>
                                    <li>the software to use</li>
                                    <li>the cost of the implementation</li>
                                    <li>the staffing required</li>
                                    <li>the physical limitations such as a space occupied by the system</li>
                                    <li>the distribution including any networks which that may require</li>
                                    <li>the overall format of the human computer interface</li>
                                </ul> 
                                <p>All of these aspects must also conform to any constraints imposed by the business such as available money and standardization of hardware and software.</p>
                                <p>The output of this stage is a chosen technical system option.</p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 6 – Logical design</span>
                                <p>Though the previous level specifies details of the implementation, the outputs of this stage are implementation-independent and concentrate on the requirements
                                    for the human computer interface. The logical design specifies the main methods of interaction in terms of menu structures and command structures.</p>
                                <p>One area of activity is the definition of the user dialogues. These are the main interfaces with which the users will interact with the system. Other activities 
                                    are concerned with analyzing both the effects of events in updating the system and the need to make inquiries about the data on the system. Both of these use the events, 
                                    function descriptions and effect correspondence diagrams produced in stage 3 to determine precisely how to update and read data in a consistent and secure way.</p>
                                <p>The logical design of a system pertains to an abstract representation of the data flows, inputs and outputs of the system. This is often conducted via modelling, 
                                    using an over-abstract (and sometimes graphical) model of the actual system. In the context of systems, designs are included. Logical design includes 
                                    entity-relationship diagrams (ER diagrams).</p>  
                                <p>The product of this stage is the logical design which is made up of:</p>
                                <ul>
                                    <li>Data catalogue</li>
                                    <li>Required logical data structure</li>
                                    <li>Logical process model – includes dialogues and model for the update and inquiry processes</li>
                                    <li>Stress & Bending moment.</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Stage 7 – Physical design</span>
                                <p>The physical design relates to the actual input and output processes of the system. 
                                    This is explained in terms of how data is input into a system, how it is verified/authenticated, 
                                    how it is processed, and how it is displayed. In physical design, the following requirements about 
                                    the system are decided.</p>
                                <ol type="1">
                                     <li>Input requirement</li>
                                     <li>Output requirements,</li>
                                     <li>Storage requirements,</li>
                                     <li>Processing requirements,</li>
                                     <li>System control and backup or recovery.</li>
                                </ol>  
                                <p>Put another way, the physical portion of system design can generally be broken down into three subtasks:</p>  
                                <ol type="1">
                                    <li>User Interface Design</li>
                                    <li>Data Design</li>
                                    <li>Process Design</li>
                                </ol>
                                <p>User Interface Design is concerned with how users add information to the system and with how the system 
                                    presents information back to them. Data Design is concerned with how the data is represented and stored 
                                    within the system. Finally, Process Design is concerned with how data moves through the system, 
                                    and with how and where it is validated, secured and/or transformed as it flows into, through and out 
                                    of the system. At the end of the system design phase, documentation describing the three sub-tasks is 
                                    produced and made available for use in the next phase.</p>
                                <p>Physical design, in this context, does not refer to the tangible physical design of an information system. 
                                    To use an analogy, a personal computer's physical design involves input via a keyboard, processing within 
                                    the CPU, and output via a monitor, printer, etc. It would not concern the actual layout of the tangible 
                                    hardware, which for a PC would be a monitor, CPU, motherboard, hard drive, modems, video/graphics cards, 
                                    USB slots, etc. It involves a detailed design of a user and a product database structure processor and a 
                                    control processor. The H/S personal specification is developed for the proposed system.</p>
                                <p>This is the final stage where all the logical specifications of the system are converted to descriptions 
                                    of the system in terms of real hardware and software. This is a very technical stage and a simple overview 
                                    is presented here.</p>   
                                <p>The logical data structure is converted into a physical architecture in terms of database structures. 
                                    The exact structure of the functions and how they are implemented is specified. The physical data structure 
                                    is optimized where necessary to meet size and performance requirements.</p>  
                                <p>The product is a complete Physical Design which could tell software engineers how to build the system in 
                                    specific details of hardware and software and to the appropriate standards.</p>   
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section8">
                        <div class="lesson-title mt-2">Lesson 8: Object Oriented Approach</div><hr>
                        <p>In the object-oriented approach, the focus is on capturing the structure and behavior of information systems into small 
                            modules that combines both data and process. The main aim of Object Oriented Design (OOD) is to improve the quality and 
                            productivity of system analysis and design by making it more usable.</p>
                        <p>In analysis phase, OO models are used to fill the gap between problem and solution. It performs well in situation where systems 
                            are undergoing continuous design, adaption, and maintenance. It identifies the objects in problem domain, classifying them in 
                            terms of data and behavior.</p>    
                        <p>The OO model is beneficial in the following ways −</p> 
                        <ul>
                            <li>It facilitates changes in the system at low cost</li>
                            <li>It promotes the reuse of components</li>
                            <li>It simplifies the problem of integrating components to configure large system.</li>
                            <li>It simplifies the design of distributed systems.</li>
                        </ul> 
                        <div class="mt-2">
                            <h5 class="title-ph">Elements of Object-Oriented System</h5>
                            <p>Let us go through the characteristics of OO System −</p>
                            <ul>
                                <li><span class="title-ph">Objects</span> − An object is something that is exists within problem domain and can be 
                                    identified by data (attribute) or behavior. All tangible entities (student, patient) and some intangible entities 
                                    (bank account) are modeled as object.</li>
                                <li><span class="title-ph">Attributes </span> − They describe information about the object.</li> 
                                <li><span class="title-ph">Behavior </span> − It specifies what the object can do. It defines the operation performed on objects.</li>
                                <li><span class="title-ph">Class </span> − A class encapsulates the data and its behavior. Objects with similar meaning and purpose grouped together as class.</li>
                                <li><span class="title-ph">Methods </span> − Methods determine the behavior of a class. They are nothing more than an action that an object can perform.</li>
                                <li><span class="title-ph">− A message is a function or procedure call from one object to another. They are information sent to objects to trigger methods. Essentially, a message is a function or procedure call from one object to another.Message </span></li>   
                            </ul>
                        </div> 
                        <div class="mt-3">
                            <h5 class="title-ph">Features of Object-Oriented System</h5>
                            <p>An object-oriented system comes with several great features which are discussed below.</p>
                            <div class="mt-2">
                                <span class="title-ph">Encapsulation</span>
                                <p>Encapsulation is a process of information hiding. It is simply the combination of process and data into a single entity. Data of an object is hidden from the rest of the system and available only through the services of the class. 
                                    It allows improvement or modification of methods used by objects without affecting other parts of a system.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Abstraction</span>
                                <p>It is a process of taking or selecting necessary method and attributes to specify the object. It focuses on essential characteristics of an object relative to perspective of user.</p>
                            </div>
                        </div> 
                        <div class="mt-2">
                            <span class="title-ph">Relationships</span>
                            <p>All the classes in the system are related with each other. The objects do not exist in isolation, they exist in relationship with other objects.</p>
                            <p>There are three types of object relationships −</p>
                            <ul>
                                <li><span class="title-ph">Aggregation </span> − It indicates relationship between a whole and its parts.</li>
                                <li><span class="title-ph">Association </span> − In this, two classes are related or connected in some way such as one class works with another to perform a task or one class acts upon other class.</li>
                                <li><span class="title-ph">Generalization </span> − The child class is based on parent class. It indicates that two classes are similar but have some differences.</li>
                            </ul>
                        </div>
                        <div class="mt-2">
                            <span class="title-ph">Inheritance</span>
                            <p>Inheritance is a great feature that allows to create sub-classes from an existing class by inheriting the attributes and/or operations of existing classes.</p>
                        </div>
                        <div class="mt-2">
                            <span class="title-ph">Polymorphism and Dynamic Binding</span>
                            <p>Polymorphism is the ability to take on many different forms. It applies to both objects and operations. A polymorphic object is one who true type hides within a super or parent class.
                                In polymorphic operation, the operation may be carried out differently by different classes of objects. It allows us to manipulate objects of different classes by knowing only their common properties.
                                </p>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Unified Modeling Language (UML)</h5>
                            <p>UML is a visual language that lets you to model processes, software, and systems to express the design of system architecture. It is a standard language for designing and documenting a system in an object oriented manner that allow technical architects to communicate with developer.
                                It is defined as set of specifications created and distributed by Object Management Group. UML is extensible and scalable.
                                </p>
                            <p>The objective of UML is to provide a common vocabulary of object-oriented terms and diagramming techniques that is rich enough to model any systems development project from analysis through implementation.</p>    
                            <p>UML is made up of −</p>
                            <ul>
                                <li><span class="title-ph">Diagrams </span> − It is a pictorial representations of process, system, or some part of it.</li>
                                <li><span class="title-ph">Notations </span>− It consists of elements that work together in a diagram such as connectors, symbols, notes, etc.</li>
                            </ul>
                            <h5 class="title-ph">Example of UML Notation for class</h5>
                            <img src="img_SFDLT_5/system_analysis_11.png" alt="Example of UML Notation for class">
                            <h5 class="title-ph">Instance diagram-UML notation</h5>
                            <img src="img_SFDLT_5/system_analysis_12.png" alt="Instance diagram-UML notation">
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Static Models</h5>
                            <p>Static models show the structural characteristics of a system, describe its system structure, and emphasize on the parts that make up the system.</p>
                            <ul>
                                <li>They are used to define class names, attributes, methods, signature, and packages.</li>
                                <li>UML diagrams that represent static model include class diagram, object diagram, and use case diagram.</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Dynamic Models</h5>
                            <p>Dynamic models show the behavioral characteristics of a system, i.e., how the system behaves in response to external events.</p>
                            <ul>
                                <li>Dynamic models identify the object needed and how they work together through methods and messages.</li>
                                <li>They are used to design the logic and behavior of system.</li>
                                <li>UML diagrams represent dynamic model include sequence diagram, communication diagram, state diagram, activity diagram.</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Object Oriented System Development Life Cycle</h5>
                            <p>It consists of three macro processes −</p>
                            <ul>
                                <li>Object Oriented Analysis (OOA)</li>
                                <li>Object oriented design (OOD)</li>
                                <li>Object oriented Implementation (OOI)</li>
                            </ul>
                            <img src="img_SFDLT_5/system_analysis_13.png" alt="">
                        </div>
                        <div class="mt-3">
                            <h5 class="title-ph">Object Oriented Systems Development Activities</h5>
                            <p>Object-oriented systems development includes the following stages −</p>
                            <ul>
                                <li>Object-oriented analysis</li>
                                <li>Object-oriented design</li>
                                <li>Prototyping</li>
                                <li>Implementation</li>
                                <li>Incremental testing</li>
                            </ul>
                            <div class="mt-2">
                                <span class="title-ph">Object-Oriented Analysis</span>
                                <p>This phase concerns with determining the system requirements and to understand the system requirements build a use-case model. A use-case is a scenario to describe the interaction between user and computer system. This model represents the user needs or user view of system.
                                    It also includes identifying the classes and their relationships to the other classes in the problem domain, that make up an application.
                                    </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Object-Oriented Design</span>
                                <p>The objective of this phase is to design and refine the classes, attributes, methods, and structures that are identified during the analysis phase, user interface, and data access. This phase also identifies and defines the additional classes or objects that support 
                                    implementation of the requirement.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Prototyping</span>
                                <p>Prototyping enables to fully understand how easy or difficult it will be to implement some of the features of the system.
                                    It can also give users a chance to comment on the usability and usefulness of the design. It can further define a use-case and make use-case modeling much easier.
                                    </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Implementation</span>
                                <p>It uses either Component-Based Development (CBD) or Rapid Application Development (RAD).</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Component-based development (CBD)</span>
                                <p>CODD is an industrialized approach to the software development process using various range of technologies like CASE tools. Application development moves from custom 
                                    development to assembly of pre-built, pre-tested, reusable software components that operate with each other. 
                                    A CBD developer can assemble components to construct a complete software system.</p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Rapid Application Development (RAD)</span>
                                <p>RAD is a set of tools and techniques that can be used to build an application faster than typically possible with traditional methods. It does not replace SDLC 
                                    but complements it, since it focuses more on process description and can be combined perfectly with the object oriented approach.
                                    Its task is to build the application quickly and incrementally implement the user requirements design through tools such as visual basic, power builder, etc.
                                    </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Incremental Testing></span>
                                <p>Software development and all of its activities including testing are an iterative process. Therefore, it can be a costly affair if we wait to test a product only 
                                    after its complete development. Here incremental testing comes into picture wherein the product is tested during various stages of its development.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">System analysis and design</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1: Introduction</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: System Development Life Cycle </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section3">3: System Planning</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section4">4: System Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section5">5: Testing and Quality Assurance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section6">6: System Implementation and Maintenance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section7">7: System Security and Audit
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section8">8: Object Oriented Approach</a>
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