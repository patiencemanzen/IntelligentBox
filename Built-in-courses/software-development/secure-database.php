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
                    <div class="course-name">Secure database</div>
                    <div class="course-short-desc">
                        Database security refers to the collective measures used to protect 
                        and secure a database or database management software from illegitimate use and malicious threats and attacks.
                    </div>
                    <div class="lessons-count">6 lessons</div>
                    <!-- <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div> -->
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/Database-Security.jpg" alt="database security" width="100%" height="100%"></div>
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
                            <p>
                                <span class="title-ph"> Database security </span> refers to the collective measures used to protect 
                                and secure a database or database management software from illegitimate use and malicious threats and attacks.
                             </p>
                             <p>
                                 It is a broad term that includes a multitude of processes, tools and methodologies 
                                 that ensure security within a database environment.
                             </p>
                             <p>
                                 Database security covers and enforces security on all aspects and components of databases. This includes:
                                 <ul>
                                     <li>Data stored in database</li>
                                     <li>Database server</li>
                                     <li>Database management system (DBMS)</li>
                                     <li>Other database workflow applications</li>
                                 </ul>
                             </p>
                             <p>
                                 Database security is generally planned, implemented and maintained by a <i class="title-ph">database administrator</i> 
                                 and or other <i class="title-ph"> information security professional.</i>
                             </p>
                             <p>
                                 Some of the ways database security is analyzed and implemented include:
                                 <ul>
                                     <li>Restricting unauthorized access and use by implementing strong and multifactor access and data management controls.</li>
                                     <li>Load/stress testing and capacity testing of a database to ensure it does not crash in a distributed denial of service 
                                         (DDoS) attack or user overload.</li>
                                     <li>Physical security of the database server and backup equipment from theft and natural disasters.</li>
                                     <li>Reviewing existing system for any known or unknown vulnerabilities and defining and implementing a road map/plan to mitigate them.</li>
                                 </ul>
                             </p>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: Describe database security concepts and standards </div><hr>
                            <span class="title-ph mt-2">Definition of Elements Relating to Database Security</span>
                            <div class="mt-3">
                                <div class="mb-3">
                                    <span class="title-ph">Threat</span>
                                    <p>
                                        A threat is defined as any event that may compromise the confidentiality, integrity, and/or availability of information assets
                                    </p>
                                    <p>
                                        Threat consists of a combination of the following four elements: <span class="title-ph"> role player </span> that is the source of threat, the information assets 
                                        that must be protected from the threat,<span class="title-ph"> the method of unauthorized access, </span> and the resulting unauthorized action.
                                    </p>
                                    <p>
                                        <span class="title-ph"> (Example: </span> Illegal access of database management information by ordinary users exploiting the vulnerability of the database.)
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="title-ph">Role Player</span>
                                    <p>
                                        The persons involved in database operations, their respective roles, and the role player who may become the source of threat should be defined.
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="title-ph">Information Assets Related to Database</span>
                                    <p>
                                        Information assets that must be protected are defined as information stored in a database server.
                                    </p>
                                </div>
                                <div class="mb-3">
                                     <span class="title-ph">Information Asset Value</span>
                                     <p>
                                        Information assets are valued according to the impact incurred upon the loss of confidentiality and/or unauthorized use.
                                     </p>
                                </div>
                                <div class="mb-3">
                                   <span class="title-ph">Means</span>
                                   <p>
                                        Means (method) is the way that unauthorized activity is perpetrated by the role player upon information assets.
                                        Knowing the means will lead to an understanding of effective controls to mitigate the threat.
                                        Below is a list of some potential means.  
                                        <ol type="i">
                                            <li>packet eavesdropping</li>
                                            <li>password dictionary attack</li>
                                            <li>stealing ID/password via social engineering</li>
                                            <li>unauthorized access of DBMS information by exploiting errors in settings</li>
                                            <li>unauthorized access of DBMS information by exploiting DBMS vulnerability</li>
                                            <li>unauthorized access of DBMS information by modifying database files</li>
                                            <li>Illegal access to ID/password by using DB management information</li>
                                            <li>creating backdoors</li>
                                            <li>unauthorized access of DBMS information by creating unauthorized DBMS administrator or operator account</li>
                                            <li>unauthorized removal of information through an unauthorized route</li>
                                            <li>unauthorized access of DBMS information by modifying management information</li>
                                            <li>SQL execution with the intent of disrupting service </li>
                                            <li>unauthorized removal of information through an authorized route</li>
                                        </ol>                                                  
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="title-ph">Unauthorized Action</span>
                                    <p>
                                        Unauthorized action refers to the illegal activity performed by the role player on the information assets.
                                        <ul>
                                            <li>Unauthorized modification or destruction of DBMS information</li>
                                            <li>Unauthorized access of DBMS information</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: Perform system security</div><hr>
                        <span class="title-ph">Purpose of database security</span>
                        <p>
                            All systems have ASSETS and security is about protecting assets. 
                            The first thing, then, is to know your assets and their value.
                        </p>
                        <p>
                            Data security is built on the confidentiality, integrity and availability of 
                            data and ta a certain extent on access control and non-reputation. Is also called CIA triad.
                        </p>
                        <div class="mt-3">
                            <span class="title-ph">Database security is a broad area that addresses many issues, including the following:</span>
                            <ul>
                                <li>Various legal and ethical issues regarding the right to access certain information— <span class="title-ph">for example,</span> some information 
                                    may be deemed to be private and cannot be accessed legally by unauthorized organizations or persons. In the United States, 
                                    there are numerous laws governing privacy of information.</li>
                                <li>Policy issues at the governmental, institutional, or corporate level as to what kinds of information should not be made publicly available— <span class="title-ph">for example,</span>
                                        credit ratings and personal medical records.</li>    
                                <li><span class="title-ph">System-related issues </span> such as the system levels at which various security functions should be enforced— <span class="title-ph"> for example, </span>
                                        whether a security function should be handled at the physical hardware level, the operating system level, or the DBMS level.</li>    
                                <li><span class="title-ph">The need in some organizations </span> to identify multiple security levels and to categorize the data and users based on these classifications—<span class="title-ph">for example,</span> top secret, secret, confidential, 
                                    and unclassified. The security policy of the organization with respect to permitting access to various classifications of data must be enforced.</li>      
                                <li><span class="title-ph">Threats to databases,</span> Threats to databases can result in the loss or degradation of some or all of the following commonly accepted security goals: integrity, availability, and confidentiality.</li> 
                                <li><span class="title-ph">Loss of confidentiality.</span> Database confidentiality refers to the protection of data from unauthorized disclosure. The impact of unauthorized disclosure of confidential information can range from violation of the Data Privacy 
                                    Act to the jeopardization of national security. Unauthorized, unanticipated, or unintentional disclosure could result in loss of public confidence, embarrassment, or legal action against the organization.</li>   
                                <li><span class="title-ph">Loss of integrity.</span> Database integrity refers to the requirement that information be protected from improper modification. Modification of data includes creation, insertion, updating, changing the status of data, and deletion.b<r>
                                    Integrity is lost if unauthorized changes are made to the data by either intentional or accidental acts. If the loss of system or data integrity is not corrected, continued use of the contaminated system or corrupted data could result in inaccuracy, fraud, or erroneous decisions.
                                </li>    
                            </ul>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">Database security policies </span>
                            <p>
                                The idea of security policies includes many dimensions. Broad considerations include requiring backups to be done regularly and stored off-site. Narrow table or data considerations include ensuring that unauthorized access to sensitive data, 
                                such as employee salaries, is precluded by built-in restrictions on every type of access to the table that contains them. This topic discusses security policies in the following sections:
                            </p>
                            <ol type="a" class="title-ph">
                                <li>System Security Policy</li>
                                <li>Data Security Policy</li>
                                <li>User Security Policy</li>
                                <li>Password Management Policy</li>
                                <li>Auditing Policy</li>
                                <li>A Security Checklist</li>
                            </ol>
                            <div id="accordion">

                                <div class="">
                                    <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">1. System Security Policy <i class="fa fa-angle-double-down ml-4"></i></a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">

                                        <p>This section describes aspects of system security policy, and contains the following topics:</p>
                                        <ul>
                                            <li>Database User Management</li>
                                            <li>User Authentication</li>
                                            <li>Operating System Security</li>
                                        </ul>
                                        <span class="title-ph">Database User Management</span>
                                        <p>
                                        Database users are the access paths to the information in an Oracle database. Therefore, tight security should be maintained for the management of database users. 
                                        Depending on the size of a database system and the amount of work required to manage database users, the security administrator may be the only user with the privileges 
                                        required to create, alter, or drop database users. On the other hand, there may be a number of administrators with privileges to manage database users. Regardless, only 
                                        trusted individuals should have the powerful privileges to administer database users.
                                        </p>
                                        <span class="title-ph mt-2">User Authentication</span>
                                        <p>
                                        Database users can be<span class="title-ph"> authenticated </span> (verified as the correct person) by Oracle using database passwords, 
                                        the host operating system, network services, or by Secure Sockets Layer (SSL).
                                        </p>

                                        <span class="title-ph mt-2">Operating System Security</span>
                                        <p>
                                        The following security issues must also be considered for the operating system environment executing Oracle and any database applications:
                                        <ul>
                                            <li>Database administrators must have the operating system privileges to create and delete files</li>
                                            <li>Typical database users should not have the operating system privileges to create or delete files related to the database.</li>
                                            <li>If the operating system identifies database roles for users, the security administrators must have the operating system privileges 
                                                to modify the security domain of operating system accounts.</li>
                                        </ul>
                                        </p>

                                    </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">2. Data Security Policy <i class="fa fa-angle-double-down ml-2"></i></a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                            <span class="title-ph"> Data security </span> includes the mechanisms that control the access to and use of the database at the object level. Your data security policy 
                                            determines which users have access to a specific schema object, and the specific types of actions allowed for each user on the object. 
                                            </p>
                                            <p>
                                            For example, the policy could establish that user scott can issue SELECT and INSERT statements but not DELETE statements using the emp table. Your data security policy 
                                            should also define the actions, if any, that are audited for each schema object.
                                            </p>
                                            <p>
                                            Some means of implementing data security include system and object privileges, and through roles. A role is a set of privileges grouped together that can be granted to users.
                                            </p>
                                            <p>
                                            <span class="title-ph">Views</span> can also implement data security because their definition can restrict access to table data. They can exclude columns containing sensitive data.
                                            </p>
                                            <p>
                                            Another means of implementing data security is through fine-grained access control and use of an associated application context. Fine-grained access control is a feature 
                                            of Oracle Database that enables you to implement security policies with functions, and to associate those security policies with tables or views. In effect, the security 
                                            policy function generates a WHERE condition that is appended to relevant SQL statements, thereby restricting user access to rows of data in the table or view. An application 
                                            context is a secure data cache for storing information used to make access control decisions. <span class="title-ph">(Access to emails for example)</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">3. User Security Policy <i class="fa fa-angle-double-down ml-2"></i></a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">

                                        <span>This section describes aspects of user security policy, and contains the following topics:</span>
                                        <ul>
                                            <li>General User Security</li>
                                            <li>End-User Security</li>
                                            <li>Administrator Security</li>
                                            <li>Application Developer Security</li>
                                            <li>Application Administrator Security</li>
                                        </ul>

                                        <div class="mt-3">
                                            <span class="title-ph">General User Security</span>
                                            <p>For all types of database users, consider the following general user security issues:</p>
                                            <ul>
                                                <li>Password Security</li>
                                                <li>Privilege Management</li>
                                            </ul>
                                        </div>

                                        <div class="mt-3">
                                            <span class="title-ph">Password Security</span>
                                            <p>
                                                If user authentication is managed by the database, security 
                                                administrators should develop a password security policy to 
                                                maintain database access security. For example, database users 
                                                should be required to change their passwords at regular intervals, 
                                                and of course, when their passwords are revealed to others. By 
                                                forcing a user to modify passwords in such situations, unauthorized 
                                                database access can be reduced.
                                            </p>
                                            <p>
                                                Passwords are always automatically and transparently encrypted 
                                                during network (client/server and server/server) connections, 
                                                using a modified DES (Data Encryption Standard) algorithm, 
                                                before sending them across the network.
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="title-ph">Privilege Management</span>
                                            <p>
                                                Security administrators should consider issues related to 
                                                privilege management for all types of users. For example, 
                                                in a database with many usernames, it may be beneficial 
                                                to use roles (which are named groups of related privileges 
                                                that you grant to users or other roles) to manage the privileges 
                                                available to users. Alternatively, in a database with a handful of 
                                                usernames, it may be easier to grant privileges explicitly to users 
                                                and avoid the use of roles.
                                            </p>
                                            <p>
                                                Security administrators managing a database with many users, 
                                                applications, or objects should take advantage of the benefits 
                                                offered by roles. Roles greatly simplify the task of privilege 
                                                management in complicated environments.
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="title-ph">End-User Security</span>
                                            <p>
                                                Security administrators must define a policy for end-user security. 
                                                If a database has many users, the security administrator can decide 
                                                which groups of users can be categorized into user groups, and then 
                                                create user roles for these groups. The security administrator can 
                                                grant the necessary privileges or application roles to each user role, 
                                                and assign the user roles to the users. To account for exceptions, the 
                                                security administrator must also decide what privileges must be explicitly 
                                                granted to individual users.
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="title-ph">Administrator Security</span>
                                            <p>
                                                Security administrators should have a policy addressing database administrator 
                                                security. For example, when the database is large and there are several types 
                                                of database administrators, the security administrator may decide to group 
                                                related administrative privileges into several administrative roles. 
                                                The administrative roles can then be granted to appropriate administrator users. 
                                                Alternatively, when the database is small and has only a few administrators, 
                                                it may be more convenient to create one administrative role and grant it to all administrators.
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="title-ph">Application Developer Security</span>
                                            <p>
                                                Security administrators must define a special security policy for the application developers 
                                                using a database. A security administrator could grant the privileges to create necessary 
                                                objects to application developers. Or, alternatively, the privileges to create objects 
                                                could be granted only to a database administrator, who then receives requests for object 
                                                creation from developers
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="title-ph">Application Administrator Security</span>
                                            <p>
                                                In large database systems with many database applications, you might consider assigning 
                                                application administrators. An application administrator is responsible for the following types of tasks:
                                            </p>
                                            <ul>
                                                <li>Creating roles for an application and managing the privileges of each application role</li>
                                                <li>Creating and managing the objects used by a database application</li>
                                                <li>Maintaining and updating the application code and Oracle procedures and packages, as necessary</li>
                                            </ul>
                                            <p>
                                                Often, an application administrator is also the application developer who designed an application. 
                                                However, an application administrator could be any individual familiar with the database application.
                                            </p>
                                        </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">4. Password Management Policy <i class="fa fa-angle-double-down ml-4"></i></a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                            Database security systems that are dependent on passwords require that passwords be kept secret at all times. 
                                            Since passwords are vulnerable to theft, forgery, and misuse, Oracle Database has DBAs and security officers 
                                            control password management policy through user profiles, enabling greater control over database security.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">5. Auditing Policy <i class="fa fa-angle-double-down ml-4"></i></a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                            Security administrators should define a policy for the auditing procedures of each database. You may, for example, 
                                            decide to have database auditing disabled unless questionable activities are suspected. When auditing is required, 
                                            the security administrator must decide what level of detail to audit the database; usually, general system auditing is 
                                            followed by more specific types of auditing after the origins of suspicious activity are determined. In addition to 
                                            standard database auditing, Oracle supports fine-grained auditing using policies that can monitor multiple specific 
                                            objects, columns, and statements, including INDEX.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">6. A Security Checklist <i class="fa fa-angle-double-down ml-4"></i></a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                            This security checklist provides guidance on configuring Oracle Database in a secure manner by adhering to and recommending industry-standard "best security practices" for operational database deployments.
                                            In simple summary, before looking at the more detailed checklist: consider all paths the data travels and assess the threats that impinge on each path and node. Then take steps to lessen or eliminate both those 
                                            threats and the consequences of a successful breach of security. Monitoring and auditing to detect either increased threat levels or successful penetration increases the likelihood of preventing or minimizing security losses.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <span class="title-ph">Database security framework</span>
                                <p>
                                    After developing the software and the security measures to safeguard the data stored in the database. The performance of the software was tested against the security measures described/shown in figure 6 above. 
                                    The result indicates that, the user can only gain access to the data after successfully being authenticated against all the CIA mechanism put in place and all assigned role are made available to the user. Similarly, 
                                    the user is denied access if not authenticated.
                                </p>
                            </div>

                            <div class="mt-3">
                                <h5 class="title-ph">Elaborate database security models</h5>
                                <span class="mt-2 title-ph">Definition of security models</span>
                                <p>
                                    Security models are the formal description of security policies. 
                                    Security models are useful tools for evaluating and comparing security policies.
                                </p>
                                <p>
                                    Security models allow us to test security policies for completeness and consistency. They describe what mechanisms are necessary to implement a security policy. Security models are described in terms of the following elements:  
                                    <ul>
                                        <li><span class="title-ph">Subjects:</span> Entities that request access to objects.  </li>
                                        <li><span class="title-ph">Objects:</span> Entities for which access request is being made by subjects. </li>
                                        <li><span class="title-ph">Access Modes:</span> Type of operation performed by subject on object (read, write, create etc.).</li>
                                        <li><span class="title-ph">Policies:</span> Enterprise wide accepted security rules.</li>
                                        <li><span class="title-ph">Authorizations</span> Specification of access modes for each subject on each object.</li>
                                        <li><span class="title-ph">Administrative Rights:</span> Who has rights in system administration and what responsibilities administrators have.  </li>
                                        <li><span class="title-ph">Axioms:</span> Basic working assumptions</li>
                                    </ul>
                                </p>
                                <div class="mt-3">
                                    <p>
                                        <span class="title-ph">Access control</span>
                                        <p>
                                            The purpose of access control is to limit the actions or operations that a legitimate user of a computer system can perform. Access control constraints what a user can do directly, 
                                            as well as what programs executing on behalf of the users are allowed to do. In this way access control seeks to prevent activity that could lead to a breach of security.
                                        </p>
                                    </p>
                                    <p>
                                        <span class="title-ph">Authentication and authorization</span>
                                        <p>
                                            <i class="title-ph">Authentication</i>
                                            <ul>
                                                <li>Authentication is used by a server when the server needs to know exactly who is accessing their information or site</li>
                                                <li>Authentication is used by a client when the client needs to know that the server is system it claims to be.</li>
                                                <li>In authentication, the user or computer has to prove its identity to the server or client.</li>
                                                <li>Usually, authentication by a server entails the use of a user name and password. Other ways to 
                                                    authenticate can be through cards, retina scans, voice recognition, and fingerprints.</li>
                                                <li>Authentication by a client usually involves the server giving a certificate to the client in which 
                                                    a trusted third party such as VeriSign or Thawte states that the server belongs to the entity 
                                                    (such as a bank) that the client expects it to.</li>    
                                                <li>Authentication does not determine what tasks the individual can do or what files the individual can see.
                                                        Authentication merely identifies and verifies who the person or system is.</li>    
                                            </ul>
                                        </p>
                                        <p>
                                            <i class="title-ph">Authorization</i>
                                            <ul>
                                                <li>Authorization is a process by which a server determines if the client has permission to use a resource or access a file.</li>
                                                <li>Authorization is usually coupled with authentication so that the server has some concept of who the client is that is requesting access.</li>
                                                <li>The type of authentication required for authorization may vary; passwords may be required in some cases but not in others.</li>
                                                <li>In some cases, there is no authorization; any user may be use a resource or access a file simply by asking for it. 
                                                    Most of the web pages on the Internet require no authentication or authorization.</li>   
                                            </ul>
                                        </p>
                                        <p>
                                            <span class="title-ph">Encryption</span>
                                            <ul>
                                                <li>Encryption involves the process of transforming data so that it is unreadable by anyone who does not have a decryption key.</li>
                                                <li>The Secure Shell (SSH) and Socket Layer (SSL) protocols are usually used in encryption processes. The SSL drives the secure part 
                                                    of “https://” sites used in e-commerce sites (like E-Bay and Amazon.com.)</li>
                                                <li>By encrypting the data exchanged between the client and server information like social security numbers, credit card numbers, 
                                                    and home addresses can be sent over the Internet with less risk of being intercepted during transit.</li>
                                            </ul>
                                            <span class="title-ph">How encryption works</span>
                                            <p>Unencrypted data, often referred to as plaintext, is encrypted using an encryption algorithm and an encryption key. This process generates 
                                                cipher text that can only be viewed in its original form if decrypted with the correct key. Decryption is simply the inverse of encryption, 
                                                following the same steps but reversing the order in which the keys are applied. Today's most widely used encryption algorithms fall into 
                                                two categories: symmetric and asymmetric.</p>
                                            <ul>
                                                <li><span class="title-ph">Symmetric (secret key): </span> Uses same key for both encryption and decryption</li>
                                                <li><span class="title-ph">Asymmetric (public key): </span> Uses different key for encryption and decryption</li>
                                            </ul>  
                                            <p>Say I want to send you a private message, so I encrypt it using either one of these programs. Here’s the message:</p>
                                            <div class="hightlights">wUwDPglyJu9LOnkBAf4vxSpQgQZltcz7
                                                LWwEquhdm5kSQIkQlZtfxtSTsmaw
                                                q6gVH8SimlC3W6TDOhhL2FdgvdIC7sDv7G1Z7
                                                pCNzFLp0lgB9ACm8r5RZOBi
                                                N5ske9cBVjlVfgmQ9VpFzSwzLLODhCU7/2THg2iDrW3NGQ
                                                Zfz3SSWviwCe7G
                                                mNIvp5jEkGPCGcla4Fgdp/xuyewPk6NDlBewftLtHJVf
                                                =PAb3
                                            </div>  
                                            <p>Once encrypted, the message literally becomes a jumbled mess of random characters. But, equipped with the secret passcode I text you, 
                                                you can decrypt it and find the original message</p>   
                                                <div class="hightlights">Come on over for hot dogs and soda!</div>  
                                        </p>
                                    </p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5 class="title-ph">Explore database security principles</h5>
                                <span class="title-ph">Elaborate Database attacks </span>

                                <div class="mt-2">
                                    <span class="title-ph">1. Excessive privileges</span>
                                    <p>
                                        When users (or applications) are granted database privileges that exceed the requirements of their job function, 
                                        these privileges may be used to gain access to confidential information. For example, a university administrator 
                                        whose job requires read-only access to student records may take advantage of excessive update privileges to change grades.
                                    </p>
                                    <p>
                                        The solution to this problem (besides good hiring policies) is query-level access control. Query-level access control 
                                        restricts privileges to minimum-required operations and data. Most native database security platforms offer some of 
                                        these capabilities (triggers, RLS, and so on), but the manual design of these tools make them impractical in all but 
                                        the most limited deployments.
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">2. Privilege abuse</span>
                                    <p>
                                        Users may abuse legitimate data access privileges for unauthorized purposes. For example, a user with privileges to 
                                        view individual patient records via a custom healthcare application client may abuse that privilege to retrieve all 
                                        patient records via a MS-Excel client.
                                    </p>
                                    <p>
                                        The solution is access control policies that apply not only to what data is accessible, but how data is accessed. 
                                        By enforcing policies for time of day, location, and application client and volume of data retrieved, 
                                        it is possible to identify users who are abusing access privileges.
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">3. Unauthorized privilege elevation</span>
                                    <p>
                                        Attackers may take advantage of vulnerabilities in database management software to convert low-level access 
                                        privileges to high-level access privileges. For example, an attacker might take advantage of a database buffer 
                                        overflow vulnerability to gain administrative privileges.
                                    </p>
                                    <p>
                                        Privilege elevation exploits can be defeated with a combination of query-level access control and traditional 
                                        intrusion prevention systems (IPS). Query-level access control can detect a user who suddenly uses an unusual 
                                        SQL operation, while an IPS can identify a specific documented threat within the operation.
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">4. Platform vulnerabilities</span>
                                    <p>
                                        Vulnerabilities in underlying operating systems may lead to unauthorized data access and corruption. 
                                        For example, the Blaster worm took advantage of a Windows 2000 vulnerability to take down target servers.
                                    </p>
                                    <p>
                                        IPS tools are a good way to identify and/or block attacks designed to exploit known database platform vulnerabilities.
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">5. SQL injection</span>
                                    <p>SQL injection attacks involve a user who takes advantage of vulnerabilities in front-end web applications and 
                                        stored procedures to send unauthorized database queries, often with elevated privileges. Using SQL injection, 
                                        attackers could even gain unrestricted access to  an entire database.</p>
                                    <p>Query-level access control detects unauthorized queries injected via web applications and/or stored procedures.</p>   
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">6. Weak authentication</span>
                                    <p>Weak authentication schemes allow attackers to assume the identity of legitimate database users. Specific attack strategies include brute force attacks, social engineering, and so on.</p>
                                    <p>Implementation of passwords or two-factor authentication is a must. For scalability and ease-of-use, authentication mechanisms should be integrated with enterprise directory/user 
                                        management infrastructures.</p>
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">7. Exposure of backup data.</span>
                                    <p>
                                        Some recent high-profile attacks have involved theft of database backup tapes and hard disks.
                                        All backups should be encrypted. In fact, some vendors have suggested that future DBMS products 
                                        may not support the creation of unencrypted backups. Encryption of online production database 
                                        information is a poor substitute for granular privilege controls.
                                    </p>
                                </div>
                                <div class="mt-4 mb-4">
                                    <span class="title-ph">Conclusion</span>
                                    <p>Although databases and their contents are vulnerable to a host of internal and external threats, it is possible to reduce the attack vectors to near zero. By addressing these threats, 
                                        you will meet the requirements of the most regulated industries in the world.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="lesson" id="section4">
                        <div class="lesson-title mt-3">Lessons 4: Database access control</div><hr>
                        <p>
                            <span class="title-ph"> Database access control </span> is the process of making sure that data or other 
                            resources are accessed only in authorized ways. In planning access, the DBA might use an <span class="title-ph"> access control 
                            matrix </span> for the database.

                            <p>There are two classes of resources in any computer system: (active) subjects and (passive) objects. The ways a subject access 
                                an object are called access privileges. Access privileges allow subjects to either manipulate objects (read, write, execute, etc.) 
                                or modify the access control information (transfer ownership, grant and revoke privileges, etc.). The access control may be based 
                                on different policies which in turn follows different principles. The choice of a security policy is important because it influences
                                 the flexibility, usability, and performance of the system. The principles on which policies are based are as follows:  </p>
                              
                             <div class="mt-2">
                                 <span class="title-ph">Minimum vs. Maximum privilege principle: </span>
                                 <p>According to this subject should use the minimum set of privileges necessary for their activity. The opposite of this is maximum 
                                     privilege principle which is based on the principle of maximum availability of data in a database.  </p>
                             </div> 
                             <div class="mt-2">
                                 <span class="title-ph">Open vs. Closed system principle:</span>
                                 <p>In an open system, all accesses that are not explicitly forbidden are allowed. While in a closed system, all accesses are allowed 
                                     only if explicitly authorized. A closed system is inherently more secure.  </p>
                             </div>
                             <div class="mt-2">
                                 <span class="title-ph">Centralized vs. Decentralized administration principle: </span>
                                 <p>The principle addresses the issue who is responsible for the maintenance and management of privileges in the access control model. 
                                     In centralized administration, a single authority controls all security aspects of the system, while in decentralized system different 
                                     authorities control different portions of the database. Access control is enforced by a reference monitor which mediates every attempted 
                                     access by a user to objects in the system. The reference monitor consults an authorization database in order to determine if the user 
                                     attempting to do an operation is actually authorized to perform that operation. Authorizations in this database are administered 
                                     and maintained by a security administrator as shown in fig 1. The administrator sets these authorizations on the basis of the 
                                     security policy. Access control is different from authentication. Authentication is a process of signing on to a computer system by 
                                     providing an identifier and a password. So, correctly establishing the identity of the user is the responsibility of the authentication 
                                     service. On the other hand, access control assumes that authentication of the user has been successfully verified prior to enforcement 
                                     of access control via a reference monitor.</p>
                             </div>
                         </p>
                         <p>
                             <span class="title-ph">Description of database access matrix models </span>
                             <p>In computer science, an Access Control Matrix or Access Matrix is an abstract, formal security model of protection state in computer 
                                 systems that characterize the rights of each subject with respect to every object in the system. It was first introduced by
                                 <span class="title-ph"> Butler W. Lampson in 1971.</span></p>
                             <p>An access matrix can be envisioned as a rectangular array of cells, with one row per subject and one column per object. The entry in a cell – 
                                 that is, the entry for a particular subject-object pair, indicates the access mode that the subject is permitted to exercise on the object. 
                                 Each column is equivalent to an access control list for the object; and each row is equivalent to an access profile for the subject</p>
                             <p>According to the model, the protection state of a computer system can be abstracted as a set of objects O , that is the set of entities 
                                 that needs to be protected (e.g. processes, files, memory pages) and a set of subjects S , that consists of all active entities 
                                 (e.g. users, processes). Further there exists a set of rights R  of the form r(s,o), where r include in R , s include in S and o 
                                 include in O . A right thereby specifies the kind of access a subject is allowed to process object.</p>        
                         </p>
                         <p>
                             <span class="title-ph">EXAMPLE</span>
                             <p>In this matrix example there exists two processes, a file and a device. The first process has the ability to execute the second, read the file and write some information to 
                                 the device, while the second process can only read information from the first</p>
                             <img src="img_SFDLT_5/database-example-2.png" alt="database table access matrix model">    
                         </p>
                         <p>
                             <span class="title-ph">Using Views for Access Control</span>
                             <p>
                                 The view is a widely used method for implementing access control in database applications.  a view mechanism has a double purpose. 
                                 It is a facility for the user, simplifying and customizing the external model through which the user deals with the database, 
                                 freeing the user from the complexities of the underlying model.                    
                             </p>
                             <p>It is also a security device, hiding structures and data that the user should not see.in the relational and object-relational models, 
                                 a user’s external model can consist entirely of views. By specifying restrictions in the WHERE line of the SELECT statement used to 
                                 create views, the view can be made value-dependent. Figure 8.2(A) gives an example of a view created from the Student table by including 
                                 only data about students whose major is CSC.</p>
                             <p><span class="title-ph"> Value-independent </span> views are created by specifying columns of base tables and omitting the WHERE line of the SELECT statement. FIGURE 8.2(B) 
                                 gives an example of a view of the Student table showing only columns stuId , lastName , firstName , and major .</p>  
                             <img src="img_SFDLT_5/database-example-1.png" alt="database example of view access control">      
                         </p>
                         <p>
                             <span class="title-ph">Security Logs and Audit Trails</span>
                             <p>
                                 Another important security tool is <span class="title-ph"> the security log </span> , which is a journal that keeps a record of all attempted security violations.  
                                 key violation can be simply recorded in the log, or it can trigger an immediate message to the system operator or to the DBA. Knowing about the existence of the log can be a deterrent in itself. If the DBA suspects that data is being compromised without triggering security log entries, it is possible to set up an audit trail . 
                             </p>
                             <p>Such an auditing system records all access to the database, keeping information about the user who requested the access, the operation performed, the workstation used, the exact time of occurrence, the data item, its old value, and its new value, if any.  the audit trail can therefore uncover the sources of suspicious operations 
                                 on the database, even if they are performed by authorized users, such as disgruntled employees.</p>
                         </p>
                    </div>
                    <div class="lesson" id="section5">
                        <div class="lesson-title mt-3">Lessons 5: Database Encryption</div><hr>
                        <span class="title-ph">first. Encryption</span>
                        <p>To counter the possibility of having files accessed directly through the operating system or having files stolen, data can be stored in the database in encrypted form. Only the database management system can unscramble the data, so that anyone who obtains data 
                            by any other means will receive jumbled data. When authorized users access the 
                            information properly, the DBMS retrieves the data and decodes it automatically. Encryption should also be used whenever data is communicated to other sites, so that wire tappers will also receive scrambled data. Encryption requires a cipher system , which consists of the following components:</p>
                        <p>
                            <span class="title-ph">Secord. Encryption</span>
                            <p>In computing, encryption is the method by which plaintext or any other type of data is converted from a readable form to an encoded version that can only be decoded by another entity if they have access to a decryption key. Encryption is one of the most important methods for providing data security, 
                                especially for end-to-end protection of data transmitted across networks.</p>
                        </p>    
                        <p>
                            <span class="title-ph">Cipher system:</span>
                            <img src="img_SFDLT_5/database-example-3.png" alt="database cipher system example">
                            <ul>
                                <li><span class="title-ph">Plaintext</span>It is the data to be protected during transmission</li>
                                <li><span class="title-ph">An encrypting algorithm</span>which takes the normal text ( plaintext ) as input, performs some operations on it, and produces the encrypted text ( ciphertext ) as output </li>
                                <li><span class="title-ph">Encryption Key</span> It is a value that is known to the sender. The sender inputs the encryption key into the encryption algorithm along with the plaintext in order to compute the ciphertext.</li>
                                <li><span class="title-ph">Decryption Algorithm</span> It is a mathematical process, that produces a unique plaintext for any given ciphertext and decryption key. </li>
                                <li><span class="title-ph">Decryption Key</span> It is a value that is known to the receiver. The decryption key is related to the encryption key, but is not always identical to it. The receiver inputs the decryption key into 
                                    the decryption algorithm along with the ciphertext in order to compute the plaintext.</li>
                                <li><span class="title-ph">interceptor </span> (an attacker) is an unauthorized entity who attempts to determine the plaintext.</li>
                                <li><span class="title-ph">Ciphertext</span> It is the scrambled version of the plaintext produced by the encryption algorithm using a specific the encryption key.</li>
                            </ul>
                        </p>
                        <div class="mt-3">
                            <span class="title-ph">Symmetric Key Encryption: </span>
                            <p>Symmetric key encryption is a form of encryption where the decryption key is the same as the encryption key, and the decrypting algorithm is the inverse of the encrypting algorithm. </p>
                            <p>Every user in this system needs to have a pair of dissimilar keys,<span class="title-ph">private key and public key.</span> These keys are mathematically related – when one key is used for encryption, the other can decrypt the ciphertext back to the original plaintext.</p>
                            <p>One widely used symmetric key encryption scheme was the Data Encryption Standard (DES) , devised by IBM for the U.S. National Bureau of Standards and adopted in 1977. In the DES scheme, the algorithm itself is public, while the key is private. FIGURE 8.4 gives an overview of 
                                the DES process.  the DES algorithm uses a 56-bit key on 64-bit blocks of plaintext, producing 64-bit blocks of ciphertext. When data is encoded, it is split up into 64-bit blocks. Within each block, characters are substituted and rearranged according to the value of the key.  
                                the decoding algorithm uses the same key to put back the original characters and to restore them to their original positions in each block. </p>
                            <img src="img_SFDLT_5/database-example-4.png" alt="64bit block symetric cipher system">    
                            <p>Two major challenges with the DES system involve key security and the ease of cracking the code.  e key must be kept secure or the encryption is worthless, since anyone with the key has access to the data.  erefore, the security depends on the secrecy of the key, but all 
                                authorized users must be told the key.  e more people who know the key, the more likely it is that the key will be disclosed to unauthorized users.</p>
                            <p>It is also necessary to distribute the key to the receivers of encrypted message.
                                Often, more secure lines are used for key distribution, or the key is distributed by mail or messenger
                                </p>
                            <ul class="mt-2">
                                <li>It requires to put the public key in public repository and the private key as a well guarded secret. Hence, this scheme of encryption is also called Public Key Encryption</li>
                                <li>Though public and private keys of the user are related, it is computationally not feasible to find one from another. This is a strength of this scheme.</li>
                                <li>When Host1 needs to send data to Host2, he obtains the public key of Host2 from repository, encrypts the data, and transmits.</li>
                                <li>Host2 uses his private key to extract the plaintext.</li>
                            </ul>    
                        </div>
                        <div class="mt-3">
                            <span class="titlt-ph">Public-Key Encryption</span>
                            <p>An alternative approach to encryption is public-key encryption , which is also known as asymmetric encryption . Public-key encryption uses two separate keys, where one key is a public key and the other key is a private ke y. FIGURE 8.5 provides an overview of public-key encryption. 
                                For each user, a pair of large prime numbers, ( p , q ), is chosen as the user’s private key , and the product of the pair, p*q , becomes the user’s public key . Public keys are shared freely, so that anyone wishing to send a message to a user can  nd his or her public key easily. </p>
                            <img src="img_SFDLT_5/database-example-5.png" alt="publick key encryption example">    
                        </div>
                    </div>
                    <div class="lesson" id="section6">
                        <div class="lesson-title mt-3">Lessons 6: Database Security and the Internet</div><hr>
                        <p>Unless security so ware is used, all messages sent over the Internet are transmitted in plaintext and can be detected by intruders using packet s n i  n g so ware. Both senders and receivers need to be con dent that their 
                            communications are kept private. Obviously, customers who wish to purchase products need to have assurance that their credit card information is secure when they send it over the Internet. Companies that allow Web connections 
                            to their internal networks for access to their database need to be able to protect it from attack. Receivers of messages need to have ways to be sure that those messages are genuine and trustworthy and have not been tampered with</p>
                       <div class="mt-2">
                           <span class="title-ph">Proxy Servers </span>
                           <p>A proxy server is a computer or program that acts as an intermediary between a client and another server, handling messages in both directions. When the client requests a service such as a connection or Web page, the proxy evaluates 
                               it and determines whether it can ful ll the request itself. If not, it  lters the request, perhaps altering it, and requests the service from the server or other resource. It may cache (store a copy of ) the server’s response so that a 
                               subsequent request can be full filled from the stored content without using the server again.</p>
                            <p>the proxy server can be used for several purposes, including to maintain security by hiding the actual IP address of the server, to improve performance by caching, to prevent access to sites that an organization wishes to block from its members, 
                                to protect the server from malware, and to protect data by scanning outbound messages for data leaks. </p>   
                       </div>
                       <div class="mt-2">
                           <span class="title-ph">Firewalls</span>
                           <p>A firewall is a hardware and/or software barrier that is used to protect an organization’s internal network (intranet) from unauthorized access. Various techniques are used to ensure that messages entering or leaving the intranet comply with the organization’s standards. For example, 
                               a proxy server can be used to hide the actual network address. Another technique is a packet filter , which examines each packet of information before it enters or leaves the intranet, making sure it complies with a set of rules. Various gateway techniques can apply security mechanisms 
                               to applications or connections. </p>
                       </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Secure database</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1: Introduction</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: Describe Database Security Concepts And Standards</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section3">3: Perform System Security</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section4">4: Database Access Control</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section5">5: Database Encryption</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section6">6: Database Security and the Internet</a>
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
        <script src="../../Lib/wow/wow.min.js"></script>
        <script src="../../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="../../Assets/js/header.box.js"></script>
        <script src="../../Assets/js/courses.box.js"></script>
        <!-- ================================================================================================================================================== -->
    </body>
 </html>