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
                    <div class="course-name">Develop Backend applications</div>
                    <div class="course-short-desc">
                        The back end refers to parts of a computer application or a program's code that allow it to
                        operate and that cannot be accessed by a user. Most data and operating syntax are stored and
                        accessed in the back end of a computer system.
                    </div>
                    <div class="lessons-count">7 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/backend.jpg" alt="backend application" width="100%" height="100%"></div>
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
                            <span class="title-ph">DEFINITION</span>
                            <p>Computer program (such as server software) that remains in the background, or resides on a
                                server located in a back room. A user, generally, interfaces only with a front-end application
                                and rarely (if ever) needs to access back-end applications (which normally remain
                                'transparent' to him or her).</p>
                            <p>The back end refers to parts of a computer application or a program's code that allow it to
                                operate and that cannot be accessed by a user. Most data and operating syntax are stored and
                                accessed in the back end of a computer system.</p>
                            <p>The back end is also called the data access layer of software or hardware and includes any
                               functionality that needs to be accessed and navigated to by digital means.</p>   
                            <p>Computer program (such as server software) that remains in the background, or resides on a
                                server located in a back room. A user, generally, interfaces only with a front-end application
                                and rarely (if ever) needs to access back-end applications (which normally remain 'transparent'
                                to him or her)</p>
                            <p>Concepts and components that focus on the front end of a system include:</p>       
                            <ul>
                                <li>Design and markup languages like HTML, CSS and JavaScript.</li>
                                <li>Search engine optimization (SEO)</li>
                                <li>Usability and accessibility testing.</li>
                                <li>Graphic design and image editing tools.</li>
                                <li>Web performance and browser compatibility.</li>
                            </ul>  
                            <p>Inversely, those that focus on the back end of a system include:</p>   
                            <ul>
                                <li>Programming and scripting languages like PHP, Python and C#.</li>
                                <li>Automated testing frameworks.</li>
                                <li>Network scalability and availability</li>
                                <li>Database management and data transformation.</li>
                                <li>Cybersecurity and data backup practices.</li>
                            </ul>

                            <div class="mt-3">
                                <h4 class="title-ph">PYTHON</h4>
                                <p><span class="title-ph"> Python </span> is a widely used interpreted, high-level, general-purpose ,object oriented programming
                                    language.it was initially designed by Guido van Rossum and first released in 1991 at Centrum
                                    Wiskunde & Informatica (CWI) in the Netherlands as a successor to the ABC
                                    language, capable of exception handling and interfacing with the Amoeba operating
                                    system.[8] Its implementation began in December 1989. and developed by Python Software
                                    Foundation. It was mainly developed for emphasis on code readability, and its syntax allows
                                    programmers to express concepts in fewer lines of code.
                                    Python is a high-level, interpreted and general-purpose dynamic programming language that
                                    focuses on code readability. The syntax in Python helps the programmers to do coding in fewer
                                    steps as compared to Java or C++. Python is a general-purpose interpreted, interactive, objectoriented, and high-level programming language. It was created by Guido van Rossum during
                                    1985 – 1990. Like Perl, Python source code is also available under the GNU General Public
                                    License (GPL). Python is named after a TV Show called ‘Monty Python’s Flying Circus’ and
                                    not after Python-the snake.</p>
                                <span class="title-ph">CHARACTERISTICS OF PYTHON</span>    
                                <ol type="1">
                                   <li><span class="title-ph">Easy to code</span> Python is a very developer-friendly language which means that anyone and everyone can learn
                                        to code it in a couple of hours or days. As compared to other object-oriented programming
                                        languages like Java, C, C++, and C#, Python is one of the easiest to learn.</li>
                                    <li><span class="title-ph">Expressive</span> First, let’s learn about expressiveness. Suppose we have two languages A and B, and all
                                        programs that can be made in A can be made in B using local transformations. However, there
                                        are some programs that can be made in B, but not in A, using local transformations. Then, B is
                                        said to be more expressive than A. Python provides us with a myriad of constructs that help us
                                        focus on the solution rather than on the syntax. This is one of the outstanding python features
                                        that tell you why you should learn Python.</li> 
                                    <li><span class="title-ph">Free and Open-Source</span> Firstly, Python is freely available. You can download it from the Python Website.
                                        Secondly, it is open-source. This means that its source code is available to the public. You can
                                        download it, change it, use it, and distribute it. This is called FLOSS(Free/Libre and Open
                                        Source Software). As the Python community, we’re all headed toward one goal- an everbettering Python.</li>
                                    <li><span class="title-ph"> High-Level language</span> As we discussed in point 2b, it is a high-level language. This means that as programmers, we
                                        don’t need to remember the system architecture. Nor do we need to manage the memory. This
                                        makes it more programmer-friendly and is one of the key python features.</li> 
                                    <li><span class="title-ph">Portable</span> Let’s assume you’ve written a Python code for your Windows machine. Now, if you want to
                                        run it on a Mac, you don’t need to make changes to it for the same. In other words, you can take one code and run it on any machine, there is no need to write different code for different
                                        machines. This makes Python a portable language. However, you must avoid any systemdependent features in this case.</li> 
                                    <li><span class="title-ph">Interpreted</span> If you’re familiar with any languages like C++ or Java, you must first compile it, and then run
                                        it. But in Python, there is no need to compile it. Internally, its source code is converted into an
                                        immediate form called bytecode. So, all you need to do is to run your Python code without
                                        worrying about linking to libraries, and a few other things.By interpreted, we mean the source
                                        code is executed line by line, and not all at once. Because of this, it is easier to debug your
                                        code. Also, interpreting makes it just slightly slower than Java, but that does not matter
                                        compared to the benefits it has to offer.</li>
                                    <li><span class="title-ph">Object-Oriented approach</span> A programming language that can model the real world is said to be object-oriented. It focuses
                                        on objects and combines data and functions. Contrarily, a procedure-oriented language revolves
                                        around functions, which are code that can be reused. Python supports both procedureoriented and object-oriented programming which is one of the key python features. It also
                                        supports multiple inheritances, unlike Java. A class is a blueprint for such an object. It is an
                                        abstract data type and holds no values.</li> 
                                    <li><span class="title-ph">Extensible</span> If needed, you can write some of your Python code in other languages like C++. This makes
                                        Python an extensible language, meaning that it can be extended to other languages.</li>   
                                    <li><span class="title-ph">Embeddable</span> We just saw that we can put code in other languages in our Python source code. However, it is
                                        also possible to put our Python code in a source code in a different language like C++. This
                                        allows us to integrate scripting capabilities into our program of the other language.</li>
                                    <li><span class="title-ph">Large Standard Library</span> Python downloads with a large library that you can use so you don’t have to write your own
                                        code for every single thing. There are libraries for regular expressions, documentationgeneration, unit-testing, web browsers, threading, databases, CGI, email, image manipulation,
                                        and a lot of other functionality.</li>
                                    <li><span class="title-ph"> GUI Programming</span> A software is not user-friendly until its GUI is made. A user can easily interact with the software
                                        with a GUI. Python offers various libraries for making Graphical user interface for your
                                        applications. For this, you can use Tkinter, wxPython or JPython. These toolkits allow you for
                                        easy and fast development of GUI.</li>
                                    <li><span class="title-ph">Dynamically Typed</span> Python is dynamically-typed. This means that the type for a value is decided at runtime, not in
                                        advance. This is why we don’t need to specify the type of data while declaring it. Python's features include
                                        <ul>
                                            <li><span class="title-ph">Easy-to-learn: </span> Python has few keywords, simple structure, and a clearly defined
                                                syntax. This allows a student to pick up the language quickly.</li>
                                            <li><span class="title-ph">Easy-to-read: </span>  Python code is more clearly defined and visible to the eyes.</li>
                                            <li><span class="title-ph">Easy-to-maintain: </span> Python's source code is fairly easy-to-maintain.</li> 
                                            <li><span class="title-ph">A broad standard library: </span> Python's bulk of the library is very portable and crossplatform compatible on UNIX, Windows, and Macintosh.</li>   
                                            <li><span class="title-ph">Interactive Mode: </span>  Python has support for an interactive mode, which allows interactive
                                                testing and debugging of snippets of code.</li>
                                            <li><span class="title-ph">Portable</span> Python can run on a wide variety of hardware platforms and has the same
                                                interface on all platforms.</li>
                                            <li><span class="title-ph">Extendable:</span> You can add low-level modules to the Python interpreter. These modules
                                                enable programmers to add to or customize their tools to be more efficient.</li>        
                                            <li><span class="title-ph">Databases</span> Python provides interfaces to all major commercial databases</li> 
                                            <li><span class="title-ph">GUI Programming:</span>  Python supports GUI applications that can be created and ported
                                                to many system calls, libraries and windows systems, such as Windows MFC,
                                                Macintosh, and the X Window system of Unix.</li> 
                                            <li><span class="title-ph">Scalable: </span> Python provides a better structure and support for large programs than shell scripting.</li>      
                                        </ul>
                                        <p>Apart from the above-mentioned features, Python has a big list of good features. A few are listed below</p>
                                        <ul>
                                            <li><span class="title-ph">It supports functional and structured programming methods as well as OOP.</span></li>
                                            <li>It can be used as a scripting language or can be compiled to byte-code for building large applications.</li>
                                            <li>It provides very high-level dynamic data types and supports dynamic type checking.</li>
                                            <li>It supports automatic garbage collection.</li>
                                            <li>It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java.</li>
                                        </ul>
                                    </li>                                       
                                </ol>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">ADVANTAGES OR BENEFITS OF PYTHON</span>
                                <ul>
                                    <li><span class="title-ph">Extensive Support Libraries</span><p>It provides large standard libraries that include the areas like string operations, Internet, web
                                        service tools, operating system interfaces and protocols. Most of the highly used programming
                                        tasks are already scripted into it that limits the length of the codes to be written in Python.</p></li>
                                    <li><span class="title-ph">Integration Feature</span><p>Python integrates the Enterprise Application Integration that makes it easy to develop Web
                                        services by invoking COM or COBRA components. It has powerful control capabilities as it
                                        calls directly through C, C++ or Java via Jython. Python also processes XML and other markup
                                        languages as it can run on all modern operating systems through same byte code.</p></li>  
                                    <li><span class="title-ph">Improved Programmer’s Productivity</span><p>The language has extensive support libraries and clean object-oriented designs that increase two
                                        to ten fold of programmer’s productivity while using the languages like Java, VB, Perl, C, C++
                                        and C#.</p></li> 
                                    <li><span class="title-ph">Productivity</span><p>With its strong process integration features, unit testing framework and enhanced control
                                        capabilities contribute towards the increased speed for most applications and productivity of
                                        applications. It is a great option for building scalable multi-protocol network applications.</p></li>         
                                </ul>
                                <span class="title-ph">LIMITATIONS OR DISADVANTAGES OF PYTHON</span>
                                <p> Python has varied advantageous features, and programmers prefer this language to other
                                    programming languages because it is easy to learn and code too. However, this language has still
                                    not made its place in some computing arenas that includes Enterprise Development Shops.
                                    Therefore, this language may not solve some of the enterprise solutions, and limitations include-
                                    <ul>
                                        <li><span class="title-ph">Difficulty in Using Other Languages</span> The Python lovers become so accustomed to its features and its extensive libraries, so they face
                                            problem in learning or working on other programming languages. Python experts may see the
                                            declaring of cast “values” or variable “types”, syntactic requirements of adding curly braces or
                                            semi colons as an onerous task.</li>
                                        <li><span class="title-ph">Weak in Mobile Computing</span> Python has made its presence on many desktop and server platforms, but it is seen as a weak
                                            language for mobile computing. This is the reason very few mobile applications are built in it
                                            like Carbonnelle.</li>  
                                        <li><span class="title-ph">Gets Slow in Speed</span> Python executes with the help of an interpreter instead of the compiler, which causes it to slow
                                            down because compilation and execution help it to work normally. On the other hand, it can be
                                            seen that it is fast for many web applications too.</li>
                                        <li><span class="title-ph">Run-time Errors</span>The Python language is dynamically typed so it has many design restrictions that are reported
                                            by some Python developers. It is even seen that it requires more testing time, and the errors show
                                            up when the applications are finally run.</li>
                                        <li><span class="title-ph">Underdeveloped Database Access Layers</span>As compared to the popular technologies like JDBC and ODBC, the Python’s database access
                                            layer is found to be bit underdeveloped and primitive. However,it cannot be applied in the
                                            enterprises that need smooth interaction of complex legacy data.</li>              
                                    </ul>
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">WHY COMPANIES PREFER PYTHON?</span>
                                <p>The software development companies prefer Python language because of its versatile features and fewer programming codes.</p>
                                <span class="title-ph">PYTHON APPLICATIONS</span>
                                <p> Python supports cross-platform operating systems which makes building applications with it
                                    all the more convenient. Some of the globally known applications such as YouTube, BitTorrent,
                                    DropBox, etc. use Python to achieve their functionality.</p>

                                <span class="title-ph">Web Development</span> 
                                <p> Python can be used to make web-applications at a rapid rate,because of the frameworks Python
                                    uses to create these applications. There is common-backend logic that goes into making these
                                    frameworks and a number of libraries that can help integrate protocols such as HTTPS, FTP,
                                    SSL etc. and even help in the processing of JSON, XML, E-Mail and so much more.
                                    Some of the most well-known frameworks are Django, Flask, Pyramid. Why use a framework?
                                    The security, scalability, convenience that they provide is unparalleled compared to starting
                                    the development of a website from scratch.</p>   

                                <span class="title-ph">Game Development</span> 
                                <p>Python is also used in the development of interactive games. There are libraries such as PySoy
                                    which is a 3D game engine supporting Python 3, PyGame which provides functionality and a
                                    library for game development. Games such as Civilization-IV, Disney’s Toontown Online,
                                    Vega Strike etc. have been built using Python.</p>
                                    
                                <span class="title-ph">Machine Learning and Artificial Intelligence</span>    
                                <p> Machine Learning and Artificial Intelligence are the talks of the town as they yield the most
                                    promising careers for the future. We make the computer learn based on past experiences through
                                    the data stored or better yet, create algorithms which makes the computer learn by itself. The
                                    programming language that mostly everyone chooses? It’s Python. Why? Support for these
                                    domains with the libraries that exist already such as Pandas, Scikit-Learn, NumPy and so
                                    many more.</p>

                                <span class="title-ph"> Data Science and Data Visualization</span> 
                                <p> Data is money if you know how to extract relevant information which can help you take
                                    calculated risks and increase profits. You study the data you have, perform operations and
                                    extract the information required. Libraries such as Pandas, NumPy help you in extracting  information.You can even visualize the data libraries such as Matplotlib, Seaborn, which are
                                    helpful in plotting graphs and much more. This is what Python offers you to become a Data
                                    Scientist.</p>   

                                <span class="title-ph">Desktop GUI</span> 
                                <p> Python can be used to program desktop applications. It provides the Tkinter library that can
                                    be used to develop user interfaces. There are some other useful toolkits such as the
                                    wxWidgets, Kivy, PYQT that can be used to create applications on several platforms.You can
                                    start out with creating simple applications such as Calculators, To-Do apps and go ahead and
                                    create much more complicated applications.</p>  
                                    
                                <span class="title-ph"> Web Scraping Applications</span> 
                                <p>Python can be used to pull a large amount of data from websites which can then be helpful in
                                    various real-world processes such as price comparison, job listings, research and development
                                    and much more.</p>   

                                <div class="title-ph">IDE AND TEXT OR CODE EDITOR</div>  
                                <p>IDE is a development environment which provides many features like coding, compiling,
                                    debugging, executing, autocomplete, libraries, in one place for the developer’s thus making
                                    tasks simpler whereas Code editor is a platform for editing and modifying the code only.</p> 
                                    
                                <div class="mt-3">
                                    <span class="tite">DIFFERENCE BETWEEN IDE AND TEXT EDITOR</span>
                                    <p>IDE and Text Editor can be used in the place of each other for developing any software. Text
                                        editor helps the programmer for writing scripts, modifying code or text etc.
                                        But with IDE a programmer can perform several other functions as well like running and
                                        executing the code, controlling the version, debug, interpreting, compiling, auto-complete
                                        feature, auto linting function, pre-defined functions and in build terminal etc.
                                        IDE can be considered as a development environment where a programmer can write the script,
                                        compile and debug the completing process.
                                        IDE also has an integrated file management system and deployment tool. IDE provides support
                                        to SVN, CVS, FTP, SFTP, framework etc. Basically, a Text editor is a simple editor to edit the
                                        source code and it does not possess any integrated tools or packages.
                                        One advantage of Text editor is that it allows modifying all types of files rather than specifying
                                        any particular language or types. Both play an important role in their respective situations when
                                        used.</p>
                                </div> 
                                <div class="mt-3">
                                    <span class="title-ph">WHY WE NEED A GOOD PYTHON IDE AND HOW TO SELECT ONE?</span>
                                    <p> There are a lot of benefits of using Python IDE like developing a better quality code, debugging
                                        feature, justifying why notebooks are handy, getting all the features like compiling and
                                        deploying, in one place by making it easier for the developer.
                                        An ideal IDE selection is purely based on the developer requirement like if a developer has to
                                        code in multiple languages or any highlighting of syntax or any product compilation is required
                                        or more extensibility and the integrated debugger is required or any drag-drop GUI layout is
                                        required or features like autocomplete and class browsers are required</p>
                                </div>  
                                <div class="mt-3">
                                    <span class="title-ph">PYTHON EDITORS</span>
                                    <p>There are many python editors such as VIM,Sublime,Atom,Eclipse+PyDev,GNU Emacs,Visual studio etc</p>
                                    <ol type="1">
                                        <li><span class="title-ph">VI / VIM</span>VI and VIM are modal editors, separating the viewing of a file from the editing of a file. VIM
                                            includes many improvements on the original VI, including an extensibility model and in-place
                                            code building. VIMScripts are available for various Python development tasks.</li>
                                        <li><span class="title-ph">SUBLIME TEXT</span> Written by a Google engineer with a dream for a better text editor, Sublime Text is an extremely
                                            popular code editor. Supported on all platforms, Sublime Text has built-in support for Python
                                            code editing and a rich set of extensions (called packages) that extend the syntax and editing
                                            features.Installing additional Python packages can be tricky: all Sublime Text packages are
                                            written in Python itself, and installing community packages often requires you to execute
                                            Python scripts directly in Sublime Text.</li>    
                                    </ol>
                                    <span class="title-ph">PYTHON IDEs(Integrated Development Environment)</span>
                                    <ol>
                                        <li><span class="title-ph">PYCHARM</span> Pycharm firstly released in 2010 and Developed by JetBrains, PyCharm stands out from the
                                        competition with its productivity tools that allow for quick fixes. It is available in three versions
                                        – Apache-licensed Community version, the Educational (Edu) version, and a proprietary
                                        Professional version. The first two are open source and free, while you must pay for the
                                        Professional one.it can run in Windows,Linux and MacOs</li>
                                        <li><span class="title-ph">WING</span> Wing is a lightweight Python environment which is designed to give you productive development experience.</li>
                                    </ol>
                                </div> 
                                <div class="mt-3">
                                    <span class="tt">PYTHON FRAMEWORKS </span>
                                    <p> What do Python programmers need to make their life easier? The answer is frameworks.
                                        By automating the implementation of redundant tasks, frameworks cut development
                                        time and enable developers to focus greatly on application logic rather than routine
                                        elements.
                                        Because it is one of the leading programming languages, there is no scarcity of
                                        frameworks for Python. Different frameworks have their own set of advantages and
                                        issues. Hence, the selection needs to be made on the basis of project requirements and
                                        developer preference.
                                        There are primarily three types of Python frameworks, namely full-stack, microframework, and asynchronous. Before moving onto discussing the best Python
                                        frameworks to go for in 2020, let’s first take a brief look into the various types of Python
                                        frameworks.</p>
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">TYPES OF PYTHON FRAMEWORKS</span>
                                    <ol type="1">
                                        <li><span class="title-ph"> Full-Stack Framework</span> Such frameworks are a one-stop-solution for all developer requirements. Form
                                            generators, form validation, and template layouts are usually available with a typical
                                            full-stack framework.</li>
                                        <li><span class="title-ph">Microframework</span> These are lightweight frameworks that don’t offer additional functionalities and
                                            features, such as database abstraction layer, form validation, and specific tools and
                                            libraries. Developers using a microframework need to add a lot of code and additional
                                            requirements manually.</li> 
                                        <li><span class="title-ph">Asynchronous Framework</span> Gaining popularity recently, any asynchronous framework is a microframework that allows for
                                            handling a large set of concurrent connections. Typically, an asynchronous framework built for
                                            Python uses the programming language’s asyncio library.</li>       
                                    </ol>
                                    <p> There are many python frameworks such as
                                        Web2Py,TurboGears,Django,Tornado,Sanic,Pyramid,Pylons,Pycnic,MorePath,Hug,Growler,
                                        Giotto,Flask,Falcon,Dash,CubicWeb,CherryPy,Bottle and AIOHTTP.</p>
                                    <ol type="1">
                                        <li><span class="title-ph">DJANGO</span> <p>Type – Full-stack framework Django is one of the most beloved web development frameworks
                                            for developing Python applications. In fact, it ended up being one of the top 10 web
                                            development frameworks of 2020. Django framework follows the DRY
                                            (Don’t Repeat Yourself) principle.
                                            Unlike others, the free-to-use and open-source full-stack Python framework include a grand
                                            number of built-in features rather than offering them as individual libraries. Django makes use
                                            of its ORM for mapping objects to database tables.
                                            This results in allowing the code to work across different databases as well as making it easier
                                            to migrate from one database to the other. Though Django has inherent support for MySQL,
                                            PostgreSQL, SQLite, and Oracle Database, it can support other databases via third-party
                                            drivers</p></li>
                                        <li><span class="title-ph">TURBOGEARS</span> <p>Type – Full-stack TurboGears is a data-driven, open-source, full-stack web application
                                            framework for Python. The framework allows developers to rapidly develop extensible datadriven web apps.
                                            In addition to supporting a flexible and powerful ORM, TurboGears come with intelligible
                                            templating. The full-stack framework makes use of components such as Genshi, Repoze,
                                            SQLAlchemy, and WebOb to easily and quickly develop apps requiring database connectivity.</p></li>    
                                    </ol>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: BASIC SYNTAX OF PYTHON </div><hr>
                            <p>Python syntax can be executed by writing directly in the Command Line:</p>
                            <span class="title-ph">PYTHON VARIABLES</span>
                            <p>In Python, variables are created when you assign a value to it:</p>
                            <span class="title-ph">Example: Variables in Python: </span>
                            <div class="code">
                                x= 5 <br>
                                y = "Hello, World!"
                            </div>

                            <div class="mt-3">
                                <span class="title-ph">PYTHON IDENTIFIERS </span>
                                <p> A Python identifier is a name used to identify a variable, function, class, module or other object.
                                    An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more
                                    letters, underscores and digits (0 to 9).
                                    Python does not allow punctuation characters such as @, $, and % within identifiers. Python is
                                    a case sensitive programming language. Thus, Manpower and manpower are two different
                                    identifiers in Python.</p>
                                <p>Here are naming conventions for Python identifiers</p>  
                                <ul>
                                    <li>Class names start with an uppercase letter. All other identifiers start with a lowercase letter</li>
                                    <li>Starting an identifier with a single leading underscore indicates that the identifier is private</li>
                                    <li>Starting an identifier with two leading underscores indicates a strong private identifier.</li>
                                    <li>If the identifier also ends with two trailing underscores, the identifier is a languagedefined special name.</li>
                                </ul>  
                            </div>

                            <div class="mt-3">
                                <span class="title-ph">LINES AND INDENTATION </span>
                                <p> Python does not use braces({}) to indicate blocks of code for class and function definitions or
                                    flow control. Blocks of code are denoted by line indentation, which is rigidly enforced.
                                    Indentation refers to the spaces at the beginning of a code line.Where in other programming
                                    languages the indentation in code is for readability only, the indentation in Python is very
                                    important.</p>
                                <p>Python uses indentation to indicate a block of code.</p>    
                                <div class="code">  if 5 > 2:
                                        print("Five is greater than two!")</div>
                            </div>
                            <div class="mt-3">
                                <h4 class="title-ph">PYTHON COMMENTS</h4>
                                <p>Python has commenting capability for the purpose of in-code documentation.
                                    Comments start with a #, and Python will render the rest of the line as a comment:</p>
                                <span class="title-ph">Example</span> 
                                <p>Comments in Python:</p><br> 
                                <div class="code">  #This is a comment. <br>
                                        print("Hello, World!") </div>  
                                <span class="title-ph">Python Comments uses</span> 
                                <p>Comments can be used to explain Python code</p> 
                                <p>Comments can be used to make the code more readable.</p>  
                                <p>Comments can be used to prevent execution when testing code.</p>  
                                <span class="title-ph">Example</span><br>
                                <div class="code">print("Hello, World!") #This is a comment</div> <br>
                                <span class="title-ph">Multi Line Comments</span>
                                <p> Python does not really have a syntax for multi-line comments.
                                    To add a multiline comment you could insert a # for each line:</p>
                                <span class="title-ph">Example</span>  <br>
                                <div class="code">
                                    <div class="comments">
                                    #This is a comment
                                    #written in
                                    #more than just one line
                                    </div>
                                    print("Hello, World!")
                                </div> <br>
                                <p>Since Python will ignore string literals that are not assigned to a variable, you can add a
                                    multiline string (triple quotes) in your code, and place your comment inside it:</p> 
                                <span class="title-ph">Example</span> 
                                <div class="code">
                                    <div class="comments">
                                        """
                                    This is a comment
                                    written in
                                    more than just one line
                                    
                                    """
                                    </div>
                                    print("Hello, World!")
                                </div><br>  
                            </div>

                        </div>
                    </div>
                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: PYTHON VARIABLES</div><hr>
                        <span class="title-ph">CREATING VARIABLES</span>
                        <span class="title-ph">Variables are containers for storing data values.</span>
                        <span class="title-ph">Unlike other programming languages, Python has no command for declaring a variable.</span>
                        <span class="title-ph">A variable is created the moment you first assign a value to it.</span>

                        <span class="title-ph">Example</span><br>
                        <div class="code">
                            x = 5 <br>
                            y = "John" <br>
                            print(x) <br>
                            print(y) <br>
                        </div> <br>
                        <p>Variables do not need to be declared with any particular type and can even change type after
                            they have been set.</p>
                        <span class="title-ph">Example</span> <br>
                        <div class="code">
                            x = 4 <span class="comments"># x is of type int</span> <br>
                            x = "Sally" <span class="comments"># x is now of type str</span> <br>
                            print(x) <br>
                        </div> <br>
                        <p>String variables can be declared either by using single or double quotes:</p>
                        <span class="title-ph">Example</span><br>
                        <div class="code">
                            x = "John" <br>
                            <span class="comments"># is the same as </span><br>
                            x = 'John' <br>
                        </div><br>

                        <div class="mt-3">
                            <span class="title-ph">Global Variables</span>
                            <p> Variables that are created outside of a function (as in all of the examples above) are known as
                                global variables.</p>
                            <p>Global variables can be used by everyone, both inside of functions and outside.</p> 
                            <span class="title-ph">Example</span>   
                            <p>Create a variable outside of a function, and use it inside the function</p><br>
                            <div class="code">
                                x = "awesome" <br>
                                def myfunc():  <br>
                                print("Python is " + x)  <br>
                                myfunc() <br>
                            </div> <br>

                            <p>
                                If you create a variable with the same name inside a function, this variable will be local, and
                                can only be used inside the function. The global variable with the same name will remain as it
                                was, global and with the original value.
                            </p>
                            <span class="title-ph">Example</span>
                            <p>Create a variable inside a function, with the same name as the global variable</p><br>
                            <div class="code">
                                x = "awesome" <br>
                                def myfunc(): <br>
                                x = "fantastic" <br>
                                print("Python is " + x) <br>
                                myfunc() <br>
                                print("Python is " + x) <br>
                            </div> <br>
                            <p>Normally, when you create a variable inside a function, that variable is local, and can only be
                                used inside that function.</p>
                            <p>To create a global variable inside a function, you can use the global keyword</p>  
                            <span class="title-ph">Example</span>  
                            <p>If you use the global keyword, the variable belongs to the global scope:</p>
                            <br>
                            <div class="code">
                                def myfunc(): <br>

                                global x <br>
                                x = "fantastic" <br>
                                myfunc() <br>
                                print("Python is " + x) <br>
                            </div>
                            <p>Also, use the global keyword if you want to change a global variable inside a function.</p>
                            <span class="title-ph">Example</span>
                            <p>To change the value of a global variable inside a function, refer to the variable by using the global keyword:</p>
                            <br><div class="code">
                                x = "awesome"
                                def myfunc():

                                global x
                                x = "fantastic"
                                myfunc()
                                print("Python is " + x)
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">VARIABLE TYPES </span>
                            <p> Variables are nothing but reserved memory locations to store values. It means that when you
                                create a variable, you reserve some space in the memory.
                                Based on the data type of a variable, the interpreter allocates memory and decides what can be
                                stored in the reserved memory. Therefore, by assigning different data types to the variables,
                                you can store integers, decimals or characters in these variables.</p>
                            <span class="title-ph">ASSIGNING VALUES TO VARIABLES </span>  
                            <p>Python variables do not need explicit declaration to reserve memory space. The declaration
                                happens automatically when you assign a value to a variable. The equal sign (=) is used to
                                assign values to variables</p>
                            <img src="img_SFDLT_5/backend-1.png" alt="ASSIGNING VALUES TO VARIABLES">
                            <span class="title-ph">MULTIPLE ASSIGNMENT</span> 
                            <p>Python allows you to assign a single value to several variables simultaneously. For example</p>  
                            <br><div class="code">a = b = c = 1</div>  <br>
                            <p>Here, an integer object is created with the value 1, and all the three variables are assigned to
                                the same memory location. You can also assign multiple objects to multiple variables.</p> 
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">STANDARD DATA TYPES </span>
                            <p>The data stored in memory can be of many types. For example, a person's age is stored as a
                                numeric value and his or her address is stored as alphanumeric characters. Python has various
                                standard data types that are used to define the operations possible on them and the storage
                                method for each of them.</p>
                            <p>Python has five standard data types</p>    
                            <ul>
                                <li>Numbers</li>
                                <li>String</li>
                                <li>List</li>
                                <li>Tuple</li>
                                <li>Dictionary</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <h4 class="title-ph">PYTHON NUMBERS </h4>
                            <p> Number data types store numeric values. Number objects are created when you assign a value
                                to them. For example</p>
                            <span>var1 = 1</span>  
                            <span>var2 = 10</span> 
                            <p>You can also delete the reference to a number object by using the del statement. The syntax of the del statement is − del var1[,var2[,var3[....,varN]]]]</p> 
                            <p>del var</p>
                            <p>del var_a, var_b</p>
                            <p>Python supports three different numerical types −</p>
                            <ul>
                                <li>int (signed integers)</li>
                                <li>float (floating point real values)</li>
                                <li>complex (complex numbers)</li>
                            </ul>
                            <p>All integers in Python 3 are represented as long integers. Hence, there is no separate number type as long.</p>
                            <span class="title-ph">Examples</span>
                            <p>Here are some examples of numbers</p>
                            <img src="img_SFDLT_5/backend-2.png" alt="examples of numbers">
                            <p> A complex number consists of an ordered pair of real floating-point numbers denoted by x +
                                yj, where x and y are real numbers and j is the imaginary unit.</p>
                        </div>
                        <div class="mt-3">
                            <h4 class="title-ph">PYTHON STRINGS</h4>
                            <p> Strings in Python are identified as a contiguous set of characters represented in the quotation
                                marks. Python allows either pair of single or double quotes. Subsets of strings can be taken
                                using the slice operator ([ ] and [:] ) with indexes starting at 0 in the beginning of the string and
                                working their way from -1 to the end.</p>
                            <p>The plus (+) sign is the string concatenation operator and the asterisk (*) is the repetition
                                operator. For example</p>    
                            <p>
                                <span class="title-ph">str = 'Hello World!'</span><p>print (str) Prints complete string</p>
                                <p>print (str[0]) Prints first character of the string</p>
                                <p>print (str[2:5]) Prints characters starting from 3rd to 5th</p>
                                <p> print(str[2:]) Prints string starting from 3rd character</p>
                                <p> print (str * 2)  Prints string two times</p>
                                <p>print (str + "TEST")  Prints concatenated string</p>
                                <p>This will produce the following result:</p>

                                <p>
                                    Hello World!
                                    H
                                    llo
                                    llo World!
                                    Hello World!Hello World!
                                    Hello World!TEST
                                </p>
                            </p> 
                            <div class="mt-3">
                                <span class="title-ph">Multiline Strings</span>
                                <p>You can assign a multiline string to a variable by using three quotes:</p>
                                <span class="title-ph">Example</span>
                                <p>You can use three double quotes:</p>
                                <span class="title-ph">
                                    a = """Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua."""
                                    print(a)</span>
                                <p>Or three single quotes:</p> 
                                <span class="title-ph">Example</span>  
                                <p> a = '''Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.'''
                                    print(a)</p>
                            </div> 
                            <div class="mt-3">
                                <span class="title-ph">Strings are Arrays</span>
                                <p> Like many other popular programming languages, strings in Python are arrays of bytes
                                    representing unicode characters.
                                    However, Python does not have a character data type, a single character is simply a string
                                    with a length of 1.
                                    Square brackets can be used to access elements of the string.</p>
                                <span class="title-ph">Example</span>  
                                <p>Get the character at position 1 (remember that the first character has the position 0):</p>  
                                <span class="title-ph">a = "Hello, World!"
                                                        print(a[1])</span>
                            </div> 
                            <div class="mt-3">
                                <span class="title-ph">SLICING</span>
                                <p>You can return a range of characters by using the slice syntax.
                                    Specify the start index and the end index, separated by a colon, to return a part of the string.</p>
                                <span class="title-ph">Example</span>    
                                <p>Get the characters from position 2 to position 5 (not included):</p>
                                <br><div class="code">
                                    b = "Hello, World!"
                                    print(b[2:5])
                                </div><br>
                                <span class="title-ph">Negative Indexing</span>
                                <p>Use negative indexes to start the slice from the end of the string:</p>
                                <span class="title-ph">Example</span>
                                <p>Get the characters from position 5 to position 1, starting the count from the end of the string:</p>
                                <br><div class="code">
                                    b = "Hello, World!"
                                    print(b[-5:-2])
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">String Length</span>
                                <p>To get the length of a string, use the len() function.</p>
                                <span class="title-ph">Example</span>
                                <p>The len() function returns the length of a string:</p>
                                <br><div class="code">
                                    a = "Hello, World!"
                                    print(len(a))
                                </div><br>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">String Methods</span>
                                <p>Python has a set of built-in methods that you can use on strings.</p>
                                <span class="title-ph">Example</span>
                                <p>The strip() method removes any whitespace from the beginning or the end:</p>
                                <br><div class="code">
                                    a = " Hello, World! "
                                    print(a.strip()) <span class="comments"># returns "Hello, World!"</span>
                                </div><br>
                                <span class="title-ph">Example</span>
                                <p>The lower() method returns the string in lower case:</p>
                                <br><div class="code">
                                    a = "Hello, World!"
                                    print(a.lower())
                                </div><br>
                                <span class="title-ph">Example</span>
                                <p>The upper() method returns the string in upper case:</p>
                                <br><div class="code">
                                    a = "Hello, World!"
                                    print(a.upper())
                                </div><br>
                                <span class="title-ph">Example</span>
                                <p>The replace() method replaces a string with another string:</p>
                                <div class="code">
                                    a = "Hello, World!"
                                    print(a.replace("H", "J"))
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Check String</span>
                                <p>To check if a certain phrase or character is present in a string, we can use the keywords in or not in.</p>
                                <span class="title-ph">Example</span>
                                <p>Check if the phrase "ain" is present in the following text:</p><br>
                                <div class="code"> txt = "The rain in Spain stays mainly in the plain"
                                        x = "ain" in txt
                                        print(x)</div>
                                <span class="title-ph">Example</span>   
                                <p>Check if the phrase "ain" is NOT present in the following text:</p>  <br>
                                <div class="code">
                                    txt = "The rain in Spain stays mainly in the plain"
                                    x = "ain" not in txt
                                    print(x)
                                </div><br>   
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">STRING CONCATENATION </span>
                            <p>To concatenate, or combine, two strings you can use the + operator.</p>
                            <span class="title-ph">Example</span>
                            <p>Merge variable a with variable b into variable c:</p>
                            <div class="code">
                                a = "Hello"
                                b = "World"
                                c = a + b
                                print(c)
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">String Format</span>
                                <p>As we learned in the Python Variables chapter, we cannot combine strings and numbers like this:</p>
                                <span class="title-ph">Example</span><br>
                                <div class="code">
                                    age = 36
                                    txt = "My name is John, I am " + age
                                    print(txt)
                                </div><br>
                                <p>But we can combine strings and numbers by using the format() method!</p>
                                <p>The format() method takes the passed arguments, formats them, and places them in the string
                                    where the placeholders {} are:</p>
                            </div> 
                            <div class="mt-2">
                                <span class="title-ph">Escape Character</span>
                                <p> To insert characters that are illegal in a string, use an escape character.
                                    An escape character is a backslash \ followed by the character you want to insert.
                                    An example of an illegal character is a double quote inside a string that is surrounded by
                                    double quotes:</p>
                                <span class="title-ph">Example</span> 
                                <p>You will get an error if you use double quotes inside a string that is surrounded by double quotes:</p>  
                                <br><div class="code">txt = "We are the so-called "Vikings" from the north."</div> 
                                <p>To fix this problem, use the escape character \":</p>
                                <p>Other escape characters used in Python:</p>
                                <img src="img_SFDLT_5/backend-3.png" alt="escape">
                                <img src="img_SFDLT_5/backend-4.png" alt="escape">
                            </div>   
                            <div class="mt-3">
                                <span class="title-ph">String Methods</span>
                                <p>Python has a set of built-in methods that you can use on strings.</p>
                                <img src="img_SFDLT_5/backend-5.png" alt="built-in methods that you can use on strings">
                                <img src="img_SFDLT_5/backend-6.png" alt="built-in methods that you can use on strings">
                                <img src="img_SFDLT_5/backend-7.png" alt="built-in methods that you can use on strings">
                                <img src="img_SFDLT_5/backend-8.png" alt="built-in methods that you can use on strings">
                                <img src="img_SFDLT_5/backend-9.png" alt="built-in methods that you can use on strings">
                                <img src="img_SFDLT_5/backend-10.png" alt="built-in methods that you can use on strings">
                            </div>                                                  
                        </div>
                        <div class="mt-3">
                            <h4 class="title-">PYTHON COLLECTIONS(ARRAYS) </h4>
                            <p>There are four collection data types in the Python programming language:</p>
                            <ul>
                                <li><span class="title-ph">List</span> is a collection which is ordered and changeable. Allows duplicate members.</li>
                                <li><span class="title-ph">Tuple</span> is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                                <li><span class="title-ph">Set</span> is a collection which is unordered and unindexed. No duplicate members.</li>
                                <li><span class="title-ph">Dictionary</span> is a collection which is unordered, changeable and indexed. No duplicate members.</li>
                            </ul>
                            <p> When choosing a collection type, it is useful to understand the properties of that type. Choosing
                                the right type for a particular data set could mean retention of meaning, and, it could mean an
                                increase in efficiency or security.</p>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">PYTHON LISTS </span>
                            <p> Lists are the most versatile of Python's compound data types. A list contains items separated
                                by commas and enclosed within square brackets ([]). To some extent, lists are similar to arrays
                                in C. One of the differences between them is that all the items belonging to a list can be of
                                different data type.</p>
                            <p>The values stored in a list can be accessed using the slice operator ([ ] and [:]) with indexes
                                starting at 0 in the beginning of the list and working their way to end -1. The plus</p> 
                            <p>(+) sign is the list concatenation operator, and the asterisk (*) is the repetition operator. For example</p>
                            <p>list = [ 'abcd', 786 , 2.23, 'john', 70.2 ] tinylist = [123, 'john']</p>  
                            <p> print (list) <span class="comments"># Prints complete list</span>
                                print (list[0]) <span class="comments"># Prints first element of the list</span>
                                print (list[1:3]) <span class="comments"># Prints elements starting from 2nd till 3rd</span>
                                print (list[2:]) <span class="comments"># Prints elements starting from 3rd element</span>
                                print (tinylist * 2) <span class="comments"># Prints list two times</span>
                                print (list + tinylist) <span class="comments"># Prints concatenated lists</span></p>    
                            <p>This produces the following result-</p>
                            <p>
                                ['abcd', 786, 2.23, 'john', 70.200000000000003]
                                abcd
                                [786, 2.23]
                                [2.23, 'john', 70.200000000000003]
                                [123, 'john', 123, 'john']
                                ['abcd', 786, 2.23, 'john', 70.200000000000003, 123, 'john']
                            </p> 
                            <p>A list is a collection which is ordered and changeable. In Python lists are written with square brackets.</p> 
                            <p>Example</p>  
                            <p>Create a List:</p>
                            <span class="title-ph">
                                thislist=["apple", "banana", "cherry"]
                                print(thislist)
                            </span>
                            <span class="title-ph">Access Items</span>
                            <p>You access the list items by referring to the index number:</p>

                            <span class="title-ph">Example</span>
                            <p>Print the second item of the list:</p>
                            <br><div class="code">
                                thislist=["apple", "banana", "cherry"]
                                print(thislist[1])
                            </div><br>
                            <span class="tt">Negative Indexing</span>
                            <p> Negative indexing means beginning from the end, -1 refers to the last item, -2 refers to the
                                second last item etc.</p>
                            <span class="title-ph">Example</span>   
                            <p>Print the last item of the list:</p> <br>
                            <div class="code">
                                thislist=["apple", "banana", "cherry"]
                                print(thislist[-1])
                            </div><br>
                            <span class="title-ph">Range of Indexes</span>
                            <p> You can specify a range of indexes by specifying where to start and where to end the range.
                                When specifying a range, the return value will be a new list with the specified items.</p>
                            <span class="title-ph">Example</span> 
                            <p>Return the third, fourth, and fifth item:</p>  
                            <span class="title-p">
                                thislist=["apple", "banana", "cherry", "orange", "kiwi", "melon", "mango"]
                                print(thislist[2:5])
                            </span> 

                            <span class="title-ph"><b>List Methods</b></span>
                            <p>Python has a set of built-in methods that you can use on lists.</p>
                            <img src="img_SFDLT_5/backend-11.png" alt=" built-in methods that you can use on lists.">
                            <img src="img_SFDLT_5/backend-12.png" alt=" built-in methods that you can use on lists.">
                            <img src="img_SFDLT_5/backend-13.png" alt=" built-in methods that you can use on lists.">
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">PYTHON TUPLES </span>
                            <p> A tuple is another sequence data type that is similar to the list. A tuple consists of a number of
                                values separated by commas. Unlike lists, however, tuples are enclosed within parenthesis.</p>
                            <p> The main difference between lists and tuples is- Lists are enclosed in brackets ( [ ] ) and their
                                elements and size can be changed, while tuples are enclosed in parentheses ( ( ) ) and cannot
                                be updated. Tuples can be thought of as read-only lists. For example</p>  
                            <p>tuple = ( 'abcd', 786 , 2.23, 'john', 70.2 )
                                tinytuple = (123, 'john')</p>     
                            <p>
                                print (tuple) # Prints complete tuple
                                print (tuple[0]) # Prints first element of the tuple
                                print (tuple[1:3]) # Prints elements starting from 2nd till 3rd
                                print (tuple[2:]) # Prints elements starting from 3rd element
                                print (tinytuple * 2) # Prints tuple two times
                                print (tuple + tinytuple) # Prints concatenated tuple
                            </p>  
                            <p>This produces the following result:</p> 
                            <p>
                                ('abcd', 786, 2.23, 'john', 70.200000000000003)
                                abcd
                                (786, 2.23)
                                (2.23, 'john', 70.200000000000003)
                                (123, 'john', 123, 'john')
                                ('abcd', 786, 2.23, 'john', 70.200000000000003, 123, 'john')
                            </p>
                            <p> The following code is invalid with tuple, because we attempted to update a tuple, which is not
                                allowed. Similar case is possible with lists −</p>
                            <p>
                                tuple = ( 'abcd', 786 , 2.23, 'john', 70.2 )
                                list = [ 'abcd', 786 , 2.23, 'john', 70.2 ]
                                tuple[2] = 1000 # Invalid syntax with tuple
                                list[2] = 1000 # Valid syntax with list
                            </p> 
                            <span class="title-ph">Tuple</span>  
                            <p>A tuple is a collection which is ordered and unchangeable. In Python tuples are written with
                                round brackets.</p> 
                            <span class="title-ph">Example</span> 
                            <p>Create a Tuple:</p> 
                            <span class="title-ph">
                                thistuple = ("apple", "banana", "cherry")
                                print(thistuple)
                            </span> 
                            <span class="title-ph"><b>Access Tuple Items</b></span>
                            <p>You can access tuple items by referring to the index number, inside square brackets:</p>
                            <span class="title-ph">Example</span>
                            <p>Print the second item in the tuple:</p><br>
                            <div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                print(thistuple[1])
                            </div>
                            <span class="title-ph">Negative Indexing</span>
                            <p>Negative indexing means beginning from the end, -1 refers to the last item, -2 refers to the
                                second last item etc.</p>
                            <span class="title-ph">Example</span>   
                            <p>Print the last item of the tuple:</p><br>
                            <div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                print(thistuple[-1])
                            </div>
                            <span class="title-ph">Change Tuple Values</span>
                            <p> Once a tuple is created, you cannot change its values. Tuples are unchangeable,
                                or immutable as it also is called.
                                But there is a workaround. You can convert the tuple into a list, change the list, and convert
                                the list back into a tuple.</p>

                            <span class="title-ph">Loop Through a Tuple</span> 
                            <p>You can loop through the tuple items by using a for loop.</p> 
                            <span class="title-ph">Example</span>  
                            <p>Iterate through the items and print the values:</p><br>
                            <div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                for x in thistuple:
                                print(x)
                            </div><br>
                            <p>You will learn more about for loops in our Python For Loops Chapter.</p>

                            <span class="title-ph">Check if Item Exists</span>
                            <p>To determine if a specified item is present in a tuple use the in keyword:</p>
                            <span class="title-ph">Example</span>
                            <p>Check if "apple" is present in the tuple:</p><br>
                            <div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                if "apple" in thistuple:
                                print("Yes, 'apple' is in the fruits tuple")
                            </div><br>
                            <span class="title-ph">Tuple Length</span>
                            <p>To determine how many items a tuple has, use the len() method:</p>
                            <span class="title-ph">Example</span>
                            <p>Print the number of items in the tuple:</p>
                            <br><div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                print(len(thistuple))
                            </div><br>
                            <span class="title-ph">Add Items</span>
                            <p>Once a tuple is created, you cannot add items to it. Tuples are unchangeable.</p>
                            <span class="title-ph">Example</span>
                            <p>You cannot add items to a tuple:</p><br>
                            <div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                thistuple[3] = "orange" # This will raise an error
                                print(thistuple)
                            </div><br>
                            <span class="title-ph">Create Tuple With One Item</span>
                            <p>To create a tuple with only one item, you have add a comma after the item, unless Python
                                will not recognize the variable as a tuple.</p>

                            <span class="title-ph">Example</span>
                            <p>One item tuple, remember the commma:</p>   
                            <br><div class="code">
                                thistuple = ("apple",)
                                print(type(thistuple))

                                #NOT a tuple
                                thistuple = ("apple")
                                print(type(thistuple))
                            </div><br>
                            <p><span class="title-ph">Note:</span> You cannot remove items in a tuple.</p>
                            <p>Tuples are unchangeable, so you cannot remove items from it, but you can delete the tuple
                                completely:</p>
                            <span class="title-ph">Example</span>  
                            <p>The del keyword can delete the tuple completely:</p> 
                            <br><div class="code">
                                thistuple = ("apple", "banana", "cherry")
                                del thistuple
                                print(thistuple) #this will raise an error because the tuple no longer exists
                            </div><br>

                            <span class="title-ph">Join Two Tuples</span>
                            <p>To join two or more tuples you can use the + operator:</p>
                            <span class="title-ph">Example</span>
                            <p>Join two tuples:</p><br>
                            <div class="code">
                                tuple1 = ("a", "b" , "c")
                                tuple2 = (1, 2, 3)
                                tuple3 = tuple1 + tuple2
                                print(tuple3)
                            </div>

                            <span class="title-ph">The tuple() Constructor</span>
                            <p>It is also possible to use the tuple() constructor to make a tuple</p>

                            <span class="title-ph">Example</span>
                            <p>Using the tuple() method to make a tuple:</p><br>
                            <div class="code">
                                thistuple = tuple(("apple", "banana", "cherry")) # note the double round-brackets
                                print(thistuple)
                            </div>

                            <span class="title-ph">Tuple Methods</span>
                            <p>Python has two built-in methods that you can use on tuples</p>
                            <img src="img_SFDLT_5/backend-14.png" alt="">
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">PYTHON SETS </span>
                            <p>A set is a collection which is unordered and unindexed. In Python sets are written with curly brackets.</p>
                            <span class="title-ph">Example</span>
                            <p>Create a Set:</p><br>
                            <div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                print(thisset)
                            </div><br><p><span class="title-ph">Note:</span> Sets are unordered, so you cannot be sure in which order the items will appear.</p>

                            <span class="title-ph">Access Items</span>
                            <p>You cannot access items in a set by referring to an index, since sets are unordered the items has no index.</p>
                            <p>But you can loop through the set items using a for loop, or ask if a specified value is present in a set, by using the in keyword.</p>
                            <span class="title-ph">Example</span>
                            <p>Loop through the set, and print the values:</p>
                            <p>
                                thisset = {"apple", "banana", "cherry"}
                                for x in thisset:
                                print(x)
                            </p>

                            <span class="title-ph">Change Items</span>
                            <p>Once a set is created, you cannot change its items, but you can add new items.</p>

                            <span class="title-ph">Add Items</span>
                            <p> To add one item to a set use the add() method.
                                To add more than one item to a set use the update() method.</p>

                            <span class="title-ph">Example</span> 
                            <p>Add an item to a set, using the add() method:</p> 
                            <br><div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                thisset.add("orange")
                                print(thisset)
                            </div>  <br>
                            <p>Example</p>
                            <p>Add multiple items to a set, using the update() method:</p>
                            <br><div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                thisset.update(["orange", "mango", "grapes"])
                                print(thisset)
                            </div><br>
                            <span class="title-ph">Get the Length of a Set</span>
                            <p>To determine how many items a set has, use the len() method.</p>

                            <span class="title-ph">Example</span>
                            <p>Get the number of items in a set:</p>
                            <br><div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                print(len(thisset))
                            </div><br>
                            <span class="title-ph">Remove Item</span>
                            <p>To remove an item in a set, use the remove(), or the discard() method.</p>

                            <span class="title-ph">Example</span>
                            <p>Remove "banana" by using the remove() method:</p>
                            <br><div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                thisset.remove("banana")
                                print(thisset)
                            </div><br>
                            <p> <span class="title-ph">Note:</span> If the item to remove does not exist, remove() will raise an error.</p>

                            <span class="title-ph">Example</span>
                            <p>Remove "banana" by using the discard() method:</p><br>
                            <div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                thisset.discard("banana")
                                print(thisset)
                            </div><br>
                            <p><span class="title-ph">Note:</span> If the item to remove does not exist, discard() will NOT raise an error.</p>
                            <p> You can also use the pop(), method to remove an item, but this method will remove
                                the last item. Remember that sets are unordered, so you will not know what item that gets
                                removed.</p>
                            <p>The return value of the pop() method is the removed item.</p>    
                            <span class="title-php">Example</span>
                            <p>Remove the last item by using the pop() method:</p>
                            <p>
                                thisset = {"apple", "banana", "cherry"}
                                x = thisset.pop()
                                print(x)
                                print(thisset)
                            </p>
                            <p><span class="title-php">Note:</span> Sets are unordered, so when using the pop() method, you will not know which item that gets removed.</p>
                            <span class="title-ph">Example</span>
                            <p>The clear() method empties the set:</p>
                            <br><div class="code">
                                thisset = {"apple", "banana", "cherry"}
                                thisset.clear()
                                print(thisset)
                            </div>
                            <p>Python has a set of built-in methods that you can use on sets.</p>
                            <img src="img_SFDLT_5/backend-15.png" alt="built-in methods that you can use on sets">
                            <img src="img_SFDLT_5/backend-16.png" alt="built-in methods that you can use on sets">
                            <img src="img_SFDLT_5/backend-17.png" alt="built-in methods that you can use on sets">
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">PYTHON DICTIONARY</span>
                            <p> Python's dictionaries are kind of hash-table type. They work like associative arrays or hashes
                                found in Perl and consist of key-value pairs. A dictionary key can be almost any Python type,
                                but are usually numbers or strings. Values, on the other hand, can be any arbitrary Python
                                object.
                                A dictionary is a collection which is unordered, changeable and indexed. In Python dictionaries
                                are written with curly brackets, and they have keys and values.
                                Dictionaries are enclosed by curly braces ({ }) and values can be assigned and accessed using
                                square braces ([]). For example</p>
                            <p>
                                dict = {}
                                dict['one'] = "This is one"
                                dict[2]= "This is two"
                                tinydict = {'name': 'john','code':6734, 'dept': 'sales'}
                                print (dict['one']) # Prints value for 'one' key
                                print (dict[2]) # Prints value for 2 key
                                print (tinydict) # Prints complete dictionary
                                print (tinydict.keys()) # Prints all the keys
                                print (tinydict.values()) # Prints all the values
                            </p>  
                            <p>This produces the following result:</p> 
                            <p>
                                This is one
                                This is two
                                {'dept': 'sales', 'code': 6734, 'name': 'john'} ['dept',
                                'code', 'name'] ['sales', 6734, 'john']
                            </p>
                            <p>
                                Dictionaries have no concept of order among the elements. It is incorrect to say that the
                                elements are "out of order"; they are simply unordered.
                            </p>
                            <span class="title-ph">Example</span>
                            <p>Create and print a dictionary:</p>
                            <br><div class="code">
                                thisdict = {
                                "brand": "Ford",
                                "model": "Mustang",
                                "year": 1964
                                }
                                print(thisdict)
                            </div><br>
                            <span class="title-ph">Accessing Items</span>
                            <p>You can access the items of a dictionary by referring to its key name, inside square brackets:</p>
                            <span class="title-ph">Example</span>
                            <p>Get the value of the "model" key:</p><div class="code">x = thisdict["model"]</div>
                            <p>There is also a method called get() that will give you the same result:</p>

                            <span class="title-ph">Example</span>
                            <p>Get the value of the "model" key:</p> <div class="code">x = thisdict.get("model")</div>
                            <p><span class="title-ph">Change Values</span></p>
                            <p>You can change the value of a specific item by referring to its key name:</p>

                            <span class="title-ph">Example</span>
                            <p>Change the "year" to 2018:</p>
                            <div class="code">
                                thisdict = {
                                    "brand": "Ford",
                                    "model": "Mustang",
                                    "year": 1964
                                }
                                thisdict["year"] = 2018
                            </div><br>
                            <span class="title-ph">Loop Through a Dictionary</span>
                            <p>You can loop through a dictionary by using a for loop.
                                When looping through a dictionary, the return value are the keys of the dictionary, but there
                                are methods to return the values as well.</p>
                            <span class="title-ph">Example</span>   
                            <p>Print all key names in the dictionary, one by one:</p> <br>
                            <div class="code">
                                for x in thisdict:
                                print(x)
                            </div>

                            <span class="title-ph">Dictionary Length</span>
                            <p>To determine how many items (key-value pairs) a dictionary has, use the len() method.</p>
                            <span class="title-ph">Example</span>
                            <p>Print the number of items in the dictionary:</p>
                            <br><div class="code">print(len(thisdict))</div>

                            <span class="title-ph">Adding Items</span>
                            <p>Adding an item to the dictionary is done by using a new index key and assigning a value to it:</p>

                            <span class="title-ph">Example</span>
                            <br><div class="code">
                                thisdict = {
                                "brand": "Ford",
                                "model": "Mustang",
                                "year": 1964
                                }
                                thisdict["color"] = "red"
                                print(thisdict)
                            </div><br>
                            <span class="title-ph">Removing Items</span>
                            <p>There are several methods to remove items from a dictionary:</p>
                            <span class="title-ph">Example</span>
                            <p>The pop() method removes the item with the specified key name:</p><br>
                            <div class="code">
                                thisdict = {
                                "brand": "Ford",
                                "model": "Mustang",
                                "year": 1964
                                }
                                thisdict.pop("model")
                                print(thisdict)
                            </div>

                            <span class="title-ph">Dictionary method</span>
                            <p>Python has a set of built-in methods that you can use on dictionaries</p>
                            <img src="img_SFDLT_5/backend-18.png" alt="built-in methods that you can use on dictionaries">
                            <img src="img_SFDLT_5/backend-19.png" alt="built-in methods that you can use on dictionaries">
                        </div>
                    </div>
                    <div class="lesson" id="section4">
                        <div class="lesson-title mt-2">Lesson 4: Basic python operators</div><hr>
                        <div>
                            <h4 class="title-ph">Basic Python operators</h4><hr>
                            <span class="title-ph">Types of Operator</span>
                            <p>Python language supports the following types of operators</p>
                            <ul>
                                <li>Arithmetic Operators</li>
                                <li>Comparison (Relational) Operators</li>
                                <li>Assignment Operators</li>
                                <li>Logical Operators</li>
                                <li>Bitwise Operators</li>
                                <li>Membership Operators</li>
                                <li>Identity Operators</li>
                            </ul>
                            <p>Let us have a look at all the operators one by one.</p>

                            <div class="mt-2">
                                <span class="title-ph">PYTHON ARITHMETIC OPERATORS </span>
                                <p>Assume variable a holds the value 10 and variable b holds the value 21, then</p>
                                <img src="img_SFDLT_5/backend-20.png" alt="PYTHON ARITHMETIC OPERATORS ">
                                <img src="img_SFDLT_5/backend-21.png" alt="PYTHON ARITHMETIC OPERATORS ">
                                <img src="img_SFDLT_5/backend-21.png" alt="PYTHON ARITHMETIC OPERATORS ">

                                <span class="title-ph">Example</span>
                                <p>Assume variable a holds 10 and variable b holds 20, then</p><br>
                                <div class="code">
                                    a = 21 <br>
                                    b = 10 <br>
                                    c = 0 <br>
                                    c = a + b <br>
                                    print ("Line 1 - Value of c is ", c) <br>
                                    c = a - b <br>
                                    print ("Line 2 - Value of c is ", c ) <br>
                                    c = a * b <br>
                                    print ("Line 3 - Value of c is ", c) <br>
                                    c = a / b <br>
                                    print ("Line 4 - Value of c is ", c ) <br>
                                    c = a % b <br>
                                    print ("Line 5 - Value of c is ", c) <br>
                                    a = 2 <br>
                                    b = 3 <br>
                                    c = a**b <br>
                                    print ("Line 6 - Value of c is ", c) <br>
                                    a = 10 <br>
                                    b = 5 <br>
                                    c = a//b <br>
                                    print ("Line 7 - Value of c is ", c) <br>
                                </div><br>
                                <p>When you execute the above program, it produces the following result</p>
                                <p>
                                    Line 1 - Value of c is 31
                                    Line 2 - Value of c is 11
                                    Line 3 - Value of c is 210
                                    Line 4 - Value of c is 2.1
                                    Line 5 - Value of c is 1
                                    Line 6 - Value of c is 8
                                    Line 7 - Value of c is 2
                                </p>
                                <p>Arithmetic operators are used with numeric values to perform common mathematical operations:</p>
                                <img src="img_SFDLT_5/backend-23.png" alt="mathematical operations">
                                <img src="img_SFDLT_5/backend-24.png" alt="mathematical operations">
                            </div>

                            <div class="mt-3">
                                <span class="title-ph">PYTHON COMPARISON OPERATORS </span>
                                <p>These operators compare the values on either side of them and decide the relation among them.
                                    They are also called Relational operators.
                                    Assume variable a holds the value 10 and variable b holds the value 20, then</p>
                                <img src="img_SFDLT_5/backend-25.png" alt="PYTHON COMPARISON OPERATORS"> 
                                <img src="img_SFDLT_5/backend-26.png" alt="PYTHON COMPARISON OPERATORS">   
                                
                                <span class="title-ph">Example</span>
                                <p>Assume variable a holds 10 and variable b holds 20, then</p>
                                <div class="code">
                                    a = 21 <br>
                                    b = 10 <br>
                                    if ( a == b ): <br>
                                        <span class="identation">print ("Line 1 - a is equal to b")</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 1 - a is not equal to b")</span> <br>

                                    if ( a != b ): <br>
                                        <span class="identation">print ("Line 2 - a is not equal to b")</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 2 - a is equal to b")</span> <br>

                                    if ( a < b ): <br>
                                       <span class="identation"> print ("Line 3 - a is less than b" )</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 3 - a is not less than b")</span> <br>

                                    if ( a > b ): <br>
                                        <span class="identation">print ("Line 4 - a is greater than b")</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 4 - a is not greater than b")</span> <br>

                                    a,b=b,a <span class="comments">#values of a and b swapped. a becomes 10, b becomes 21</span> <br>
                                    if ( a <= b ): <br>
                                        <span class="identation">print ("Line 5 - a is either less than or equal to b")</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 5 - a is neither less than nor equal to b")</span> <br>

                                    if ( b >= a ): <br>
                                        <span class="identation">print ("Line 6 - b is either greater than or equal to b")</span> <br>
                                    else: <br>
                                        <span class="identation">print ("Line 6 - b is neither greater than nor equal to b")</span> <br>
                                </div>
                                <p>When you execute the above program, it produces the following result</p>
                                <p>
                                    Line 1 - a is not equal to b
                                    Line 2 - a is not equal to b
                                    Line 3 - a is not less than b
                                    Line 4 - a is greater than b
                                    Line 5 - a is either less than or equal to b
                                    Line 6 - b is either greater than or equal to b
                                </p>
                                <p>Comparison operators are used to compare two values:</p>
                                <img src="img_SFDLT_5/backend-27.png" alt=""> 
                                <img src="img_SFDLT_5/backend-28.png" alt="">
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PYTHON ASSIGNMENT OPERATORS </span>
                                <p>Assume variable a holds 10 and variable b holds 20, then</p>
                                <img src="img_SFDLT_5/backend-29.png" alt="">
                                <img src="img_SFDLT_5/backend-30.png" alt="">

                                <span class="title-ph">Example</span>
                                <p>Assume variable a holds 10 and variable b holds 20, then</p>
                                <p>
                                    a = 21
                                    b = 10
                                    c = 0
                                    c = a + b
                                    print ("Line 1 - Value of c is ", c)
                                    c += a
                                    print ("Line 2 - Value of c is ", c )
                                    c *= a
                                    print ("Line 3 - Value of c is ", c )
                                    c /= a
                                    print ("Line 4 - Value of c is ", c )
                                    c = 2
                                    c %=
                                    a
                                    print ("Line 5 - Value of c is ", c)
                                    c **= a
                                    print ("Line 6 - Value of c is ", c)
                                    c //= a
                                    print ("Line 7 - Value of c is ", c)
                                </p>
                                <p>When you execute the above program, it produces the following result</p>
                                <p>
                                    Line 1 - Value of c is 31
                                    Line 2 - Value of c is 52
                                    Line 3 - Value of c is 1092
                                    Line 4 - Value of c is 52.0
                                    Line 5 - Value of c is 2
                                    Line 6 - Value of c is 2097152
                                    Line 7 - Value of c is 99864
                                </p>
                                <p>Assignment operators are used to assign values to variables:</p>
                                <img src="img_SFDLT_5/backend-31.png" alt="Assignment operators">
                                <img src="img_SFDLT_5/backend-32.png" alt="Assignment operators">
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PYTHON BITWISE OPERATORS </span>
                                <p> Bitwise operator works on bits and performs bit-by-bit operation. Assume if a = 60; and b =
                                    13; Now in binary format they will be as follows</p>
                                <p>
                                    a = 0011 1100
                                    b = 0000 1101
                                    -----------------
                                    a&b = 0000 1100
                                    a|b = 0011 1101
                                    a^b = 0011 0001
                                    ~a = 1100 0011
                                </p>   
                                <p>
                                    Pyhton's built-in function bin() can be used to obtain binary
                                    representation of an integer number. The following Bitwise operators
                                    are supported by Python language-
                                </p> 
                                <img src="img_SFDLT_5/backend-33.png" alt="">
                                <img src="img_SFDLT_5/backend-34.png" alt="">

                                <span class="title-ph">Example</span>
                                <p>
                                    a = 60 # 60 = 0011
                                    110
                                    0
                                    b = 13 # 13 = 0000
                                    110
                                    1
                                    print ('a=',a,':',bin(a),'b=',b,':',bin(b))
                                    c = 0
                                    c = a & b; # 12 =
                                    000
                                    0 1100
                                    print ("result of AND is ", c,':',bin(c))
                                    c = a | b; # 61 =
                                    001
                                    1 1101
                                    print ("result of OR is ", c,':',bin(c))
                                    c = a ^ b; # 49= 0011 0001
                                    print ("result of EXOR is ", c,':',bin(c))
                                    c = ~a; # -61 = 1100 0011
                                    print ("result of COMPLEMENT is ", c,':',bin(c))
                                    c = a << 2; # 240 = 1111 0000
                                    print ("result of LEFT SHIFT is ", c,':',bin(c))
                                    c = a >> 2; # 15= 0000 1111
                                    print ("result of RIGHT
                                    SHIFT is ", c,':',bin(c))
                                </p>
                                <p>When you execute the above program, it produces the following result</p>
                                <p>
                                    a= 60 : 0b111100 b= 13 : 0b1101
                                    result of AND is 12 : 0b1100
                                    result of OR is 61 : 0b111101
                                    result of EXOR is 49 : 0b110001
                                    result of COMPLEMENT is-61 : -0b111101
                                    result of LEFT SHIFT is 240 : 0b11110000
                                    result of RIGHT SHIFT is 15 : 0b111
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PYTHON LOGICAL OPERATORS </span>
                                <p>The following logical operators are supported by Python language. Assume variable a holds
                                    True and variable b holds False then</p>
                                <img src="img_SFDLT_5/backend-35.png" alt="PYTHON LOGICAL OPERATORS">    

                                <div class="mt-2">
                                    <span class="title-ph">PYTHON BOOLEANS</span>
                                    <p>Booleans represent one of two values: True or False.</p>
                                    <span class="title-ph">Boolean Values</span>
                                    <p>
                                        In programming you often need to know if an expression is True or False.
                                        You can evaluate any expression in Python, and get one of two answers, True or False.
                                        When you compare two values, the expression is evaluated and Python returns the Boolean
                                        answer:
                                    </p>
                                    <span class="title-ph">Example</span>
                                    <p>
                                        print(10 > 9)
                                        print(10 == 9)
                                        print(10 < 9)
                                    </p>
                                    <p>When you run a condition in an if statement, Python returns True or False:</p>
                                    <span class="title-ph">Example</span>
                                    <p>Print a message based on whether the condition is True or False:</p>
                                    <p>
                                        a = 200
                                        b = 33
                                        if b > a:
                                        print("b is greater than a")
                                        else:
                                        print("b is not greater than a")
                                    </p>
                                    <span class="title-ph">Evaluate Values and Variables</span>
                                    <p>The bool() function allows you to evaluate any value, and give you True or False in return,</p>
                                    <span class="title-php">Example</span>
                                    <p>Evaluate a string and a number:</p>
                                    <p>
                                        print(bool("Hello"))
                                        print(bool(15))
                                    </p>

                                    <span class="title-ph">Most Values are True</span>
                                    <p>
                                        Almost any value is evaluated to True if it has some sort of content.
                                        Any string is True, except empty strings.
                                        Any number is True, except 0.
                                        Any list, tuple, set, and dictionary are True, except empty ones.
                                    </p>
                                    <span class="title-ph">Example</span>
                                    <p>The following will return True:</p>
                                    <p>
                                        bool("abc")
                                        bool(123)
                                        bool(["apple", "cherry", "banana"])
                                    </p>

                                    <span class="title-ph">Some Values are False</span>
                                    <p> In fact, there are not many values that evaluates to False, except empty values, such
                                        as (), [], {}, "", the number 0, and the value None. And of course the value False evaluates
                                        to False.</p>
                                    <span class="title-ph">Example</span> 
                                    <p>The following will return False:</p>   
                                    <p>
                                        bool(False)
                                        bool(None)
                                        bool(0)
                                        bool("")
                                        bool(())
                                        bool([])
                                        bool({})
                                    </p>
                                    <p> One more value, or object in this case, evaluates to False, and that is if you have an object
                                        that is made from a class with a __len__ function that returns 0 or False:</p>
                                    <span class="title-ph">Example</span>  
                                    <p>
                                        class myclass():
                                        def __len__(self):
                                        return 0
                                        myobj = myclass()
                                        print(bool(myobj))
                                    </p>  
                                    <span class="title-ph">Functions can Return a Boolean</span>
                                    <p>You can create functions that returns a Boolean Value:</p>
                                    <span class="title-ph">Example</span>
                                    <p>Print the answer of a function:</p>
                                    <p>def myFunction() :
                                        return True
                                        print(myFunction())</p>
                                   <p>You can execute code based on the Boolean answer of a function:</p> 
                                   <span class="title-ph">Example</span>   
                                   <p>Print "YES!" if the function returns True, otherwise print "NO!":</p> 
                                   <p>
                                    def myFunction() :
                                        return True
                                        if myFunction():
                                        print("YES!")
                                        else:
                                        print("NO!")
                                   </p>
                                   <p>Python also has many built-in functions that returns a boolean value, like
                                      the isinstance() function, which can be used to determine if an object is of a certain data type:</p>
                                    <span class="title-ph">Example</span>  
                                    <p>Check if an object is an integer or not:</p>
                                    <p>
                                        x = 200
                                        print(isinstance(x, int))
                                    </p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PYTHON MEMBERSHIP OPERATORS </span>
                                <p>Python’s membership operators test for membership in a sequence, such as strings, lists, or
                                   tuples. There are two membership operators as explained below</p>
                                <img src="img_SFDLT_5/backend-36.png" alt="">
                                <span class="title-ph">Example</span>   
                                <p>
                                    a = 10
                                    b = 20
                                    list = [1, 2, 3, 4, 5 ]
                                    if ( a in list ):
                                    print ("Line 1 - a is available in the given list")
                                    else:
                                    print ("Line 1 - a is not available in the given list")
                                    if ( b not in list ):
                                    print ("Line 2 - b is not available in the given list")
                                    else:
                                    print ("Line 2 - b is available in the given list")
                                    c=b/a
                                    if ( c in list ):
                                    print ("Line 3 - a is available in the given list")
                                    else:
                                    print ("Line 3 - a is not available in the given list")
                                </p> 
                                <p>When you execute the above program, it produces the following result:</p>
                                <p>
                                    Line 1 - a is not available in the given list
                                    Line 2 - b is not available in the given list
                                    Line 3 - a is available in the given list
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PYTHON IDENTITY OPERATORS </span>
                                <p>Identity operators compare the memory locations of two objects. There are two Identity
                                   operators as explained below:</p>
                                   <img src="img_SFDLT_5/backend-36.png" alt="">
                                <span class="title-ph">Example</span>   
                                <p>
                                    a = 20
                                    b = 20
                                    print ('Line 1','a=',a,':',id(a), 'b=',b,':',id(b))
                                    if ( a is b ):
                                    print ("Line 2 - a and b have same identity")
                                    else:
                                    print ("Line 2 - a and b do not have same identity")
                                    if ( id(a) == id(b) ):
                                    print ("Line 3 - a and b have same identity")
                                    else:
                                    print ("Line 3 - a and b do not have same identity")
                                    b = 30
                                    print ('Line 4','a=',a,':',id(a), 'b=',b,':',id(b))
                                    if ( a is not b ):
                                    print ("Line 5 - a and b do not have same identity")
                                    else:
                                    print ("Line 5 - a and b have same identity")
                                </p>
                                <p>When you execute the above program, it produces the following result:</p>
                                <p>
                                    Line 1 a= 20 : 1594701888 b= 20 : 1594701888
                                    Line 2 - a and b have same identity
                                    Line 3 - a and b have same identity
                                    Line 4 a= 20 : 1594701888 b= 30 : 1594702048
                                    Line 5 - a and b do not have same identity
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section5">
                        <div class="lesson-title mt-2">Lesson 5: >Python Algorithm</div><hr>
                        <div>
                            <p> Algorithm is a step-by-step procedure, which defines a set of instructions to be executed in a
                                certain order to get the desired output. Algorithms are generally created independent of
                                underlying languages, i.e. an algorithm can be implemented in more than one programming
                                language.</p>
                            <p>From the data structure point of view, following are some important categories of algorithms </p> 
                            <ul>
                                <li><span class="title-ph">Search −</span>  Algorithm to search an item in a data structure.</li>
                                <li><span class="title-ph">Sort </span> − Algorithm to sort items in a certain order.</li>
                                <li><span class="title-ph">Insert −</span> Algorithm to insert item in a data structure</li>
                                <li><span class="title-ph">Update</span>  Algorithm to update an existing item in a data structure.</li>
                                <li><span class="title-ph">Delete </span> Algorithm to delete an existing item from a data structure.</li>
                            </ul>   
                            <div class="mt-3">
                                <span class="title-ph">CHARACTERISTICS OF AN ALGORITHM</span>
                                <p>Not all procedures can be called an algorithm. An algorithm should have the following characteristics −</p>
                                <ul>
                                    <li><span class="title-ph">Unambiguous</span> − Algorithm should be clear and unambiguous. Each of its steps (or
                                        phases), and their inputs/outputs should be clear and must lead to only one meaning.</li>
                                    <li><span class="title-ph">Input</span>  − An algorithm should have 0 or more well-defined inputs.</li> 
                                    <li><span class="title-ph">Output </span> − An algorithm should have 1 or more well-defined outputs, and should match the desired output.</li>  
                                    <li><span class="title-ph">Finiteness </span> − Algorithms must terminate after a finite number of steps.</li> 
                                    <li><span class="title-ph">Independent −</span> An algorithm should have step-by-step directions, which should be independent of any programming code.</li>
                                </ul>
                                <span class="title-ph">HOW TO WRITE AN ALGORITHM?</span>
                                <p> There are no well-defined standards for writing algorithms. Rather, it is problem and resource
                                    dependent. Algorithms are never written to support a particular programming code.
                                    As we know that all programming languages share basic code constructs like loops (do, for,
                                    while), flow-control (if-else), etc. These common constructs can be used to write an algorithm.
                                    We write algorithms in a step-by-step manner, but it is not always the case. Algorithm writing
                                    is a process and is executed after the problem domain is well-defined. That is, we should know
                                    the problem domain, for which we are designing a solution.</p>
                                <span class="title-ph">Example</span>
                                <p>Let's try to learn algorithm-writing by using an example.</p>  
                                <p><span class="title-ph">Problem</span> − Design an algorithm to add two numbers and display the result.</p>  
                                <p>
                                    step 1 − START
                                    step 2 − declare three integers a, b & c
                                    step 3 − define values of a & b
                                    step 4 − add values of a & b
                                    step 5 − store output of step 4 to c
                                    step 6 − print c
                                    step 7 − STOP
                                </p>
                                <p>Algorithms tell the programmers how to code the program. Alternatively, the algorithm can be written as −</p>
                                <p>
                                    step 1 − START ADD
                                    step 2 − get values of a & b
                                    step 3 − c ← a + b
                                    step 4 − display c
                                    step 5 − STOP
                                </p>
                                <p>
                                    In design and analysis of algorithms, usually the second method is used to describe an
                                    algorithm. It makes it easy for the analyst to analyze the algorithm ignoring all unwanted
                                    definitions. He can observe what operations are being used and how the process is flowing.
                                    Writing step numbers, is optional.
                                    We design an algorithm to get a solution of a given problem. A problem can be solved in more
                                    than one ways.
                                </p>
                                <img src="img_SFDLT_5/backend-40.png" alt="design and analysis of algorithms,">
                                <p>Hence, many solution algorithms can be derived for a given problem. The next step is to
                                  analyze those proposed solution algorithms and implement the best suitable solution.</p>
                                <span class="title-ph">Python - Divide and conquer</span>  
                                <p> In divide and conquer approach, the problem in hand, is divided into smaller sub-problems
                                    and then each problem is solved independently. When we keep on dividing the subproblems
                                    into even smaller sub-problems, we may eventually reach a stage where no more division is
                                    possible. Those "atomic" smallest possible sub-problem (fractions) are solved. The solution
                                    of all sub-problems is finally merged in order to obtain the solution of an original problem.</p>
                                <img src="img_SFDLT_5/backend-41.png" alt="Divide and conquer">  
                                <p>Broadly, we can understand divide-and-conquer approach in a three-step process.</p>  

                                <span class="title-ph">Divide/Break</span>
                                <p> This step involves breaking the problem into smaller sub-problems. Sub-problems should
                                    represent a part of the original problem. This step generally takes a recursive approach to
                                    divide the problem until no sub-problem is further divisible. At this stage, sub-problems
                                    become atomic in nature but still represent some part of the actual problem.</p>
                                   
                                <span class="title-ph">Conquer/Solve</span>    
                                <p>This step receives a lot of smaller sub-problems to be solved. Generally, at this level, the
                                   problems are considered 'solved' on their own.</p>

                                <span class="title-ph">Merge/Combine</span>  
                                <p>When the smaller sub-problems are solved, this stage recursively combines them until they
                                    formulate a solution of the original problem. This algorithmic approach works recursively and
                                    conquer & merge steps works so close that they appear as one.</p> 
                                <span class="title-ph">Examples</span> 
                                <p>The following program is an example of divide-and-conquer programming approach where
                                   the binary search is implemented using python.</p>
                                   
                                <span class="title-ph">Binary Search implementation</span> 
                                <p>In binary search we take a sorted list of elements and start looking for an element at the middle
                                    of the list. If the search value matches with the middle value in the list we complete the search.
                                    Otherwise we eliminate half of the list of elements by choosing whether to proceed with the </p>
                                <p>right or left half of the list depending on the value of the item searched. This is possible as the
                                    list is sorted and it is much quicker than linear search. Here we divide the given list and
                                    conquer by choosing the proper half of the list. We repeat this approcah till we find the element
                                    or conclude about it's absence in the list.</p>    
                                <img src="img_SFDLT_5/backend-42.png" alt="Binary Search implementation">
                                <img src="img_SFDLT_5/backend-43.png" alt="Binary Search implementation">     
                                <p>When the above code is executed, it produces the following result:</p> 
                                <img src="img_SFDLT_5/backend-44.png" alt="Binary Search implementation"> 
                                <p> Python supports two important control structures that algorithms require: selection and
                                    iteration. Using Python’s while statement, until the condition for the statement is true, the body
                                    code is repeated.
                                    For statement will iterate over the value of a collection. The second important function
                                    of For statement is the implementation of definite iteration over the range of values.
                                    There would be an if-else and an if function used to implement conditions in an Algorithm.
                                    Below is an example of such a function.</p>  
                                <img src="img_SFDLT_5/backend-45.png" alt="Control Structures">  
                                <p>Control Structures</p>     
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section6">
                        <div class="lesson-title mt-2">Lesson 6: DECISION MAKING</div><hr>
                        <div>
                            <p> Decision-making is the anticipation of conditions occurring during the execution of a program
                                and specified actions taken according to the conditions.
                                Decision structures evaluate multiple expressions, which produce TRUE or FALSE as the
                                outcome. You need to determine which action to take and which statements to execute if the
                                outcome is TRUE or FALSE otherwise.
                                Following is the general form of a typical decision making structure found in most of the
                                programming languages</p>
                            <img src="img_SFDLT_5/backend-46.png" alt="DECISION MAKING">
                            <p>Python programming language provides the following types of decision-making statements.</p>
                            <img src="img_SFDLT_5/backend-47.png" alt="DECISION MAKING">
                            <p>Let us go through each decision-making statement quickly.</p>

                            <div class="mt-3">
                                <span class="title-ph">IF Statement </span>
                                <p> The IF statement is similar to that of other languages. The if statement contains a logical
                                    expression using which the data is compared and a decision is made based on the result of the
                                    comparison.</p>
                                <span class="title-ph">Syntax</span>    
                                <p>if expression:
                                      statement(s)</p>
                                <p>
                                    If the boolean expression evaluates to TRUE, then the block of statement(s) inside the if
                                    statement is executed. In Python, statements in a block are uniformly indented after the
                                    : symbol. If boolean expression evaluates to FALSE, then the first set of code after the end of
                                    block is executed.
                                </p>     
                                <span class="title-ph">Flow Diagram</span> 
                                <img src="img_SFDLT_5/backend-48.png" alt="Flow Diagram">
                                <span class="title-ph">Example</span>
                                <div class="code">
                                    var1 = 100 <br>
                                    if var1: <br>
                                    <span class="identation">print ("1 - Got a true expression value")</span> <br>
                                    <span class="identation">print (var1)</span><br>
                                    var2 = 0 <br>
                                    if var2: <br>
                                    <span class="identation">
                                        print ("2 - Got a true expression value")<br>
                                        print (var2)
                                        print ("Good bye!")
                                    </span>
                                    When the above code is executed, it produces the following result −
                                    1 - Got a true expression value
                                    100
                                    Good bye!
                                </div>
                                <span class="title-ph">IF...ELIF...ELSE Statements </span>
                                <p>An else statement can be combined with an if statement. An else statement contains a block of
                                    code that executes if the conditional expression in the if statement resolves to 0 or a FALSE
                                    value.</p>
                                <p>The else statement is an optional statement and there could be at the most only one else
                                   statement following if.</p>  
                                <span class="title-ph">Syntax</span>  
                                <p>
                                    The syntax of the if...else statement isif expression:
                                    statement(s)
                                    else:
                                    statement(s)
                                </p>   
                                <span class="title-ph">Flow Diagram</span>
                                <img src="img_SFDLT_5/backend-49.png" alt="Flow Diagram">

                                <span class="title-ph">Example</span>
                                <div class="code">
                                    amount = int(input("Enter amount: ")) <br>
                                    if amount < 1000: <br>
                                    <span class="identation">
                                        discount=amount*0.05 </span> <br>
                                     <span class="identation"> print ("Discount",discount) <br>
                                    </span>
                                    else: <br>
                                    <span class="identation">
                                        discount=amount*0.10 <br> </span>
                                        <span class="identation">    print ("Discount",discount) <br> </span>
                                            <span class="identation">   print ("Net payable:",amount-discount)
                                    </span>
                                </div>
                                <p>
                                    In the above example, discount is calculated on the input amount. Rate of discount is 5%, if the
                                    amount is less than 1000, and 10% if it is above 10000. When the above code is executed, it
                                    produces the following result
                                </p>
                                <div class="result">
                                    Enter amount: 600 <br>
                                    Discount 30.0 <br>
                                    Net payable: 570.0 <br>
                                    Enter amount: 1200 <br>
                                    Discount 120. <br>
                                    Net payable: 1080.0 <br>
                                </div>
                                <span class="title-ph">The elif Statement </span>
                                <p>
                                    The elif statement allows you to check multiple expressions for TRUE and execute a block of code
                                    as soon as one of the conditions evaluates to TRUE.
                                    Similar to the else, the elif statement is optional. However, unlike else, for which there can be at
                                    the most one statement, there can be an arbitrary number of elif statements following an if.
                                </p>
                                <span class="title-ph">Syntax</span>
                                <div class="code">
                                    if expression1: <br>
                                    <span class="identation">statement(s)</span><br>
                                    elif expression2: <br>
                                    <span class="identation">statement(s)</span><br>
                                    elif expression3: <br>
                                    <span class="identation">statement(s)</span><br>
                                    else: <br>
                                    <span class="identation">statement(s)</span><br>
                                </div>
                                <p>
                                    Core Python does not provide switch or case statements as in other languages, but we can use
                                    if..elif...statements to simulate switch case as follows
                                </p>
                                <span class="title-ph">Example</span>
                                <div class="code">
                                    amount=int(input("Enter amount: ")) <br>
                                    if amount < 1000: <br>
                                        <span class="identation">discount=amount*0.05</span><br>
                                        <span class="identation">print ("Discount",discount)</span><br>
                                    elif amount < 5000: <br>
                                        <span class="identation">discount=amount*0.10</span> <br>
                                        <span class="identation">print ("Discount",discount)</span> <br>
                                    else: <br>
                                        <span class="identation">discount=amount*0.15</span> <br>
                                        <span class="identation">print ("Discount",discount)</span> <br>
                                        <span class="identation">print ("Net payable:",amount-discount)</span>
                                </div>
                                <p>When the above code is executed, it produces the following result</p>
                                <div class="result">
                                    Enter amount: 600 <br>
                                    Discount 30.0 <br>
                                    Net payable: 570.0 <br>
                                    Enter amount: 3000 <br>
                                    Discount 300.0 <br>
                                    Net payable: 2700.0 <br>
                                    Enter amount: 6000 <br>
                                    Discount 900.0 <br>
                                    Net payable: 5100.0
                                </div>

                                <span class="title-ph">Nested IF Statements </span>
                                <p> There may be a situation when you want to check for another condition after a condition resolves
                                    to true. In such a situation, you can use the nested if construct.
                                    In a nested if construct, you can have an if...elif...else construct inside another if...elif...else
                                    construct.</p>
                                <span class="title-ph">Syntax</span> 
                                <p>The syntax of the nested if...elif...else construct may be</p> 
                                <div class="code">
                                    if expression1: <br>
                                    <div class="identation-1">
                                        if expression2: <br>
                                        <span class="identation">statement(s)</span> <br>
                                        elif expression3: <br>
                                        <span class="identation">statement(s)</span> <br>
                                        elif expression4: <br>
                                        <span class="identation">statement(s)</span> <br>
                                        else: <br>
                                        <span class="identation">statement(s)</span> <br>
                                    </div>
                                    else: <br>
                                    <span class="identation">statement(s)</span> <br>
                        
                                </div>
                                <span class="title-ph">Single Statement Suites </span>  
                                <p>
                                    If the suite of an if clause consists only of a single line, it may go on the same line as the header
                                    statement.
                                    Here is an example of a one-line if clause
                                </p>
                                <p>
                                    var = 100
                                    if ( var == 100 ) : print ("Value of expression is 100")
                                    print ("Good bye!")
                                </p>
                                <p>
                                    When the above code is executed, it produces the following resultValue of expression is 100
                                    <span class="title-ph">Good bye!</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section7">
                        <div class="lesson-title mt-2">Lesson 7: Python loop</div><hr>
                        <p>In general, statements are executed sequentially- The first statement in a function is executed first,
                            followed by the second, and so on. There may be a situation when you need to execute a block of
                            code several number of times.
                            Programming languages provide various control structures that allow more complicated execution
                            paths.
                            A loop statement allows us to execute a statement or group of statements multiple times.
                        </p>
                        <p>Python programming language provides the following types of loops to handle looping requirements.</p>
                        <img src="img_SFDLT_5/backend-50.png" alt="loops">

                        <div class="mt-3">
                            <span class="title-ph">while Loop Statements </span>
                            <p>A while loop statement in Python programming language repeatedly executes a target statement as long as a given condition is true.</p>
                            <span class="title-ph">Syntax</span>
                            <p>The syntax of a while loop in Python programming language is</p>
                            <div class="code">
                                while expression: <br>
                                <span class="identation">statement(s)</span>
                            </div>
                            <p>
                                Here, statement(s) may be a single statement or a block of statements with uniform indent. The
                                condition may be any expression, and true is any non-zero value. The loop iterates while the
                                condition is true.
                                When the condition becomes false, program control passes to the line immediately following the
                                loop.
                                In Python, all the statements indented by the same number of character spaces after a
                                programming construct are considered to be part of a single block of code. Python uses indentation
                                as its method of grouping statements.
                            </p>
                            <span class="title-ph">Flow Diagram</span>
                            <img src="img_SFDLT_5/backend-51.png" alt="Flow Diagram">

                            <span class="title-ph">Example</span>
                            <div class="code">
                                count = 0 <br>
                                    while (count < 9): <br>
                                        <span class="identation">print ('The count is:', count)</span> <br>
                                        <span class="identation">count = count + 1</span> <br>
                                    print ("Good bye!")
                            </div>
                            <p>When the above code is executed, it produces the following result</p>
                            <div class="result">
                                The count is: 0
                                The count is: 1
                                The count is: 2
                                The count is: 3
                                The count is: 4
                                The count is: 5
                                The count is: 6
                                The count is: 7
                                The count is: 8
                                Good bye!
                            </div>
                            <p>
                                The block here, consisting of the print and increment statements, is executed repeatedly until count
                                is no longer less than 9. With each iteration, the current value of the index count is displayed and
                                then increased by 1.
                            </p>
                            <span class="title-ph">The Infinite Loop</span>
                            <p> A loop becomes infinite loop if a condition never becomes FALSE. You must be cautious when
                                using while loops because of the possibility that this condition never resolves to a FALSE value.
                                This results in a loop that never ends. Such a loop is called an infinite loop.
                                An infinite loop might be useful in client/server programming where the server needs to run
                                continuously so that client programs can communicate with it as and when required.</p>
                            <div class="code">
                                var = 1 <br>
                                while var == 1 : # This constructs an infinite loop  <br>
                                    <span class="identation">num = int(input("Enter a number :"))</span><br>
                                    <span class="identation">print ("You entered: ", num)</span><br>
                                print ("Good bye!")
                            </div>   
                            <p>When the above code is executed, it produces the following result-</p> 
                            <div class="kanel">
                                <span class="prompt">Enter a number :20</span><br>
                                You entered: 20 <br>
                                <span class="prompt">Enter a number :29</span> <br>
                                You entered: 29 <br>
                                <span class="prompt">Enter a number :3</span> <br>
                                You entered: 3 <br>
                                <span class="prompt">Enter a number :11</span> <br>
                                You entered: 11 <br>
                                <span class="prompt">Enter a number :22</span>
                                You entered: 22 <br>
                                <span class="prompt">Enter a number :</span> <br>
                                <span class="code-error">
                                    Traceback (most recent call last):
                                    File "examples\test.py", line 5, in
                                    num = int(input("Enter a number :"))
                                    KeyboardInterrupt
                                </span>
                            </div>
                            <p>The above example goes in an infinite loop and you need to use CTRL+C to exit the program.</p>
                            <span class="title-ph">Using else Statement with Loops</span>
                            <p>Python supports having an else statement associated with a loop statement.</p>
                            <ul>
                                <li>If the else statement is used with a for loop, the else statement is executed when the loop
                                    has exhausted iterating the list.</li>
                                <li>If the else statement is used with a while loop, the else statement is executed when the
                                    condition becomes false.</li>    
                            </ul>
                            <p>The following example illustrates the combination of an else statement with a while statement that
                               prints a number as long as it is less than 5, otherwise the else statement gets executed.</p>
                            <div class="code">
                                count = 0 <br>
                                while count < 5: <br>
                                <span class="identation">print (count, " is less than 5")</span> <br>
                                <span class="identation">count = count + 1</span> <br>
                                else: <br>
                                <span class="identation">print (count, " is not less than 5")</span>
                            </div>
                            <p>When the above code is executed, it produces the following result</p>
                            <div class="result">
                                0 is less than 5 <br>
                                1 is less than 5 <br>
                                2 is less than 5 <br>
                                3 is less than 5 <br>
                                4 is less than 5 <br>
                                5 is not less than 5
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">for Loop Statements </span>
                            <p>The for statement in Python has the ability to iterate over the items of any sequence, such as a list or a string.</p>
                            <span class="title-ph">Syntax</span>
                            <div class="code">
                                for iterating_var in sequence: <br>
                                    <span class="identation">statements(s)</span>
                            </div>
                            <p>    
                                If a sequence contains an expression list, it is evaluated first. Then, the first item in the sequence
                                is assigned to the iterating variable iterating_var. Next, the statements block is executed. Each
                                item in the list is assigned to iterating_var, and the statement(s) block is executed until the entire
                                sequence is exhausted.
                            </p> 
                            <span class="title-ph">Flow Diagram</span> 
                            <img src="img_SFDLT_5/backend-52.png" alt="Flow Diagram">   
                            <span class="title-ph">Example</span>  
                            <div class="code">
                                for letter in 'Python':  <span class="comments"># traversal of a string sequence</span> <br>
                                    <span class="identation">print ('Current Letter :', letter)</span> <br>
                                    <span class="identation">print()</span> <br>
                                    <span class="identation">fruits = ['banana', 'apple','mango']</span> <br>
                                for fruit in fruits:  <span class="comments"># traversal of List sequence</span> <br>
                                    <span class="identation">print ('Current fruit :', fruit)</span>
                                    <span class="identation">print ("Good bye!")</span>
                            </div> 
                            <p>When the above code is executed, it produces the following result −</p>
                            <div class="result">
                                Current Letter : P <br>
                                Current Letter : y <br>
                                Current Letter : t <br>
                                Current Letter : h <br>
                                Current Letter : o <br>
                                Current Letter : n <br>
                                Current fruit : banana  <br>
                                Current fruit : apple <br>
                                Current fruit : mango <br>
                                Good bye!
                            </div>
                            <span class="title-ph">Using else Statement with Loops</span>
                            <p>Python supports having an else statement associated with a loop statement.</p>
                            <ul>
                                <li>If the else statement is used with a for loop, the else block is executed only if for loops
                                    terminates normally (and not by encountering break statement).</li>
                                <li>If the else statement is used with a while loop, the else statement is executed when the
                                    condition becomes false.</li>    
                            </ul>
                            <p>
                                The following example illustrates the combination of an else statement with a for statement that
                                searches for even number in given list.
                            </p>
                            <div class="code">
                                numbers=[11,33,55,39,55,75,37,21,23,41,13] <br>
                                for num in numbers: <br>
                                <div class="identation">
                                    if num%2==0: <br>
                                    <span class="identation">print ('the list contains an even number')</span> <br>
                                    <span class="identation">break</span> <br>
                                    else: <br>
                                    <span class="identation">print ('the list doesnot contain even number')</span>
                                </div>
                            </div>
                            <p>When the above code is executed, it produces the following result:</p>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">Nested loops</span>
                            <p>
                                Python programming language allows the use of one loop inside another loop. The following
                                section shows a few examples to illustrate the concept.
                            </p>
                            <span class="title-ph">Syntax</span>
                            <div class="code">
                                for iterating_var in sequence: <br>
                                    <div class="identation">
                                        for iterating_var in sequence: <br>
                                        <span class="identation">statements(s)</span>
                                    </div>
                                    <span class="identation">statements(s)</span>
                            </div>
                            <p>The syntax for a nested while loop statement in Python programming language is as follows</p>
                            <div class="code">
                                while expression: <br>
                                    <div class="identation">
                                        while expression: <br>
                                        <span class="identation">statement(s)</span><br>
                                    </div>
                                    <span class="identation">statement(s)</span>
                            </div>
                            <p>
                                A final note on loop nesting is that you can put any type of loop inside any other type of loop. For
                                example a for loop can be inside a while loop or vice versa.
                            </p>
                            <span class="title-ph">Example</span>
                            <p>The following program uses a nested-for loop to display multiplication tables from 1-10.</p>
                            <div class="code">
                                <span class="import">import sy</span> <br>
                                    for i in range(1,11): <br>
                                        <div class="identation">
                                            for j in range(1,11): <br>
                                                <span class="identation">k=i*j</span> <br>
                                            print (k, end=' ') <br>
                                        </div>
                                    print()    
                            </div>
                            <p>
                                   The print() function inner loop has end=' ' which appends a space instead of default newline.
                                    Hence, the numbers will appear in one row.
                                    Last print() will be executed at the end of inner for loop.
                                    When the above code is executed, it produces the following result −
                            </p>
                            <img src="img_SFDLT_5/backend-53.png" alt="">   
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Develop backend applications</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1: Introduction</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: Basic syntax of python</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section3">3: Python variables, Numbers, Strings and corrections</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section4">4: Python basic operators</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section5">5: Python algorithm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section6">6: Decision Making</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section7s">7: Python loop</a>
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