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
        <link rel="stylesheet" href="../../Lib/animate/animate.min.css">
        <link rel="stylesheet" href="../../Lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../Lib/lightbox/css/lightbox.min.css">
        <link rel="stylesheet" href="../../Lib/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../../Lib/venobox/venobox.css">
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
                    <div class="course-name">Develop a web application</div>
                    <div class="course-short-desc">
                        PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web
                        applications. PHP stands for <span class="title-ph">Hypertext Pre-processor</span>, that earlier stood for Personal Home Pages.
                        PHP scripts can only be interpreted on a server that has PHP installed.
                        The client computers accessing the PHP scripts require a web browser only.
                        A PHP file contains PHP tags and ends with the extension ".php". 
                    </div>
                    <div class="lessons-count">3 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/develop-web-application.jpg" alt="" width="100%" height="100%"></div>
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
                        <div class="lesson-title mt-2">Lesson 1: Define PHP language and its basics</div><hr>
                        <div>
                            <p>Introduction to PHP as a scripting language </p>
                            <span class="title-ph">What PHP stands for</span>
                            <p>PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web
                                applications. PHP stands for <span class="title-ph">Hypertext Pre-processor</span>, that earlier stood for Personal Home Pages.
                                PHP scripts can only be interpreted on a server that has PHP installed.
                                The client computers accessing the PHP scripts require a web browser only.
                                A PHP file contains PHP tags and ends with the extension ".php". </p>
                            <span class="title-pg">Purpose of PHP</span>  
                            <p> PHP is a general-purpose scripting language that is especially suited to server-side web development, in
                                which case PHP generally runs on a web server.
                                PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such
                                as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much
                                more. There are three main areas where PHP scripts are used.
                                One of the important advantages of PHP is that it is Open Source. Therefore, PHP is readily available and is
                                entirely free. In contrast to other scripting languages used for web development which requires the user to
                                pay for the support files, PHP is open to everyone, anytime and anywhere. PHP files
                                File extension and Tags In order for the server to identify our PHP files and scripts, we must save the file
                                with the “.php” extension. Older PHP file extensions include </p>
                            <ul>
                                <li>.phtml </li>
                                <li>.php3 </li>
                                <li>.php4 </li>
                                <li>.php5 </li>
                                <li>.phps </li>
                            </ul>      
                            <p>PHP was designed to work with HTML, and as such, it can be embedded into the HTML code. </p>
                            <img src="img_SFDLT_5/web_dev-1.png" alt="">
                            <p> You can create PHP files without any html tags and that is called Pure PHP file .
                                The server interprets the PHP code and outputs the results as HTML code to the web browsers.
                                In order for the server to identify the PHP code from the HTML code, we must always enclose the PHP code
                                in PHP tags. </p>
                            <p> A PHP tag starts with the less than symbol followed by the question mark and then the words “php”.
                                PHP is a case sensitive language, “VAR” is not the same as “var”.
                                The PHP tags themselves are not case-sensitive, but it is strongly recommended that we use lower case letter.
                                The code below illustrates the above point. </p>    
                            <span class="title-ph">PHP program structure </span>   
                            <p>
                                Basic PHP Syntax
                                A PHP script can be placed anywhere in the document.
                                A PHP script starts with < ?php and ends with ? >:
                            </p> 
                            <p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php
                                        // PHP code goes here
                                    ?<span class="close_tag">></span>
                                </div>
                            </p>
                            <p>
                                The default file extension for PHP files is ".php".
                                A PHP file normally contains HTML tags, and some PHP scripting code.
                                Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo"
                                to output the text "Hello World!" on a web page:
                                Example 
                            </p>
                            <div class="php_code">
                                <span class="close_tag"><</span>!DOCTYPE html<span class="close_tag">></span><br>
                                <span class="close_tag"><</span>html<span class="close_tag">></span><br>
                                    <div class="identation">
                                        <span class="close_tag"><</span>body<span class="close_tag">></span><br>
                                            <div class="identation">
                                                <span class="close_tag"><</span>h1<span class="close_tag">></span> first PHP page <span class="close_tag"><</span>/h1<span class="close_tag">></span><br>
                                                    <span class="close_tag"><</span>?php <br>
                                                    <div class="identation">
                                                        echo "Hello World!"; <br>
                                                    </div>
                                                ?<span class="close_tag">></span><br>
                                            </div>
                                        <span class="close_tag"><</span>/body<span class="close_tag">></span><br>
                                    </div>
                                <span class="close_tag"><</span>/html<span class="close_tag">></span><br>
                            </div>
                            <p><span class="title-ph">Note:</span> PHP statements end with a semicolon (;).</p>

                            <div class="mt-3">
                                <span class="title-ph">Interpreter </span>
                                <p> A local PHP interpreter is a PHP engine installed on your computer.
                                    Installing and configuring XAMPP XAMPP is a cross-platform package consisting of an Apache HTTP server, MySQL database, PHP
                                    interpreter, and Perl interpreter. The word "XAMPP" is an acronym, where "X" stands for "cross", meaning
                                    "cross-platform", and the other letters stand for the package components.
                                    XAMPP is a reliable and fast way to set up environment for PHP programming. It provides all the components
                                    required for developing, running, debugging, and unit testing of PHP applications. XAMPP is a good
                                    alternative to installing and configuring a Web server, a PHP engine, a database server, and a debug engine
                                    separately. All you need to do to start developing is download XAMPP, run XAMPP installer.exe, and start
                                    the components using the XAMPP control panel. </p>
                                <span class="title-ph">Compiler</span> 
                                <p> A program that converts instructions into a machine-code or lower-level form so that they can be read and
                                    executed by a computer.
                                    A compiler is a computer program that translates computer code written in one programming language into
                                    another programming language. The name compiler is primarily used for programs that translate source code
                                    from a high-level programming language to a lower level language to create an executable program.
                                    The PHP language is interpreted. The binary that lets you interpret PHP is compiled, but what you write is
                                    interpreted. Both. PHP is compiled down to an intermediate bytecode that is then interpreted by the runtime
                                    engine. </p>
                                    
                                <span class="title-ph">Inside HTML files </span> 
                                <p> Php is a programming style language used to create pages that are processed and served from the server. Php
                                    files can always read and display HTML code, but HTML does not automatically parse php code. To do so,
                                    you will need to make adjustments to your .htaccess file.

                                    By default you can't use PHP in HTML pages. If you only have php code in one html file but have multiple
                                    other files that only contain html code, you can add the following to your .htaccess file so it will only serve
                                    that particular file as php.</p>   
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Describe PHP Syntax, Data types, Variables, Operators and Arrays </span>
                                <span class="title-ph">Primitive Data types</span>
                                <p> The values assigned to a PHP variable may be of different data types including simple string and numeric
                                    types to more complex data types like arrays and objects.
                                    PHP supports total eight primitive data types: Integer, Floating point number or Float, String, Booleans,
                                    Array, Object, resource and NULL. These data types are used to construct variables. Now let's discuss each
                                    one of them in detail.
                                    PHP Integers
                                    Integers are whole numbers, without a decimal point (..., -2, -1, 0, 1, 2, ...). Integers can be specified in decimal
                                    (base 10), hexadecimal (base 16 - prefixed with 0x) or octal (base 8 - prefixed with 0) notation, optionally
                                    preceded by a sign (- or +).
                                    Example </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                       <div class="identation">
                                        $a = 123; <span class="comments">// decimal number var_dump($a);</span><br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>"; <br>

                                        $b = -123; <span class="comments">// a negative number var_dump($b);</span> <br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>";  <br>
                                        $c = 0x1A; <span class="comments">// hexadecimal number var_dump($c);</span> <br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>";<br>

                                        $d = 0123; <span class="comments">// octal number var_dump($d);</span>  <br>
                                       </div>
                                    ?<span class="close_tag">> </span>
                                </div>    
                                <p> Note: Since PHP 5.4+ you can also specify integers in binary (base 2) notation. To use binary notation precede
                                    the number with 0b (e.g. $var = 0b11111111;).
                                    PHP Strings </p>
                                <p> Strings are sequences of characters, where every character is the same as a byte.
                                    A string can hold letters, numbers, and special characters and it can be as large as up to 2GB (2147483647
                                    bytes maximum). The simplest way to specify a string is to enclose it in single quotes (e.g. 'Hello world!'),
                                    however you can also use double quotes ("Hello world!").
                                    Example</p>  
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            $a = 'Hello world!'; <br>
                                            echo $a; <br>
                                            echo "<span class="close_tag"><</span>br<span class="close_tag">></span>";<br>
                                            $b = "Hello world!"; <br>
                                            echo $b; <br>
                                            echo "<span class="close_tag"><</span>br<span class="close_tag">></span>";<br>

                                            $c = 'Stay here, I\'ll be back.'; echo $c; 
                                        </div>
                                    ?<span class="close_tag">></span>
                                </div>   
                                <p> PHP Floating Point Numbers or Doubles
                                    Floating point numbers (also known as "floats", "doubles", or "real numbers") are decimal or fractional
                                    numbers, like demonstrated in the example below.
                                    Example </p> 
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br> 
                                       <div class="identation">
                                            $a = 1.234; var_dump($a); <br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>"; <br>
                                            $b = 10.2e3; var_dump($b); <br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>";  <br>
                                            $c = 4E-10; var_dump($c);<br>
                                       </div>
                                    ?<span class="close_tag">> </span>
                                </div>      
                                <p> HP Booleans
                                    Booleans are like a switch it has only two possible values either 1 (true) or 0 (false).
                                    Example </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// Assign the value TRUE to a variable</span> <br>
                                            $show_error = true; var_dump($show_error); <br>
                                        </div>
                                    ?<span class="close_tag">> </span>
                                </div>  
                                <p> PHP Arrays
                                    An array is a variable that can hold more than one value at a time. It is useful to aggregate a series of related
                                    items together, for example a set of country or city names.
                                    An array is formally defined as an indexed collection of data values. Each index (also known as the key) of
                                    an array is unique and references a corresponding value.
                                    Example </p> 
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            $colors = array("Red", "Green", "Blue"); <br>
                                            var_dump($colors); <br> echo "<span class="close_tag"><</span>br<span class="close_tag">></span>"; <br>
                                            $color_codes = array( <br>
                                               <div class="identation">
                                                "Red" => "#ff0000", <br>
                                                "Green" => "#00ff00", <br>
                                                "Blue" => "#0000ff" <br>
                                               </div>
                                            ); <br>
                                            var_dump($color_codes); <br>
                                        </div>
                                    ?<span class="close_tag">></span>
                                </div> 
                                <p> PHP Objects
                                    An object is a data type that not only allows storing data but also information on, how to process that data.
                                    An object is a specific instance of a class which serve as templates for objects. Objects are created based on
                                    this template via the new keyword.
                                    Every object has properties and methods corresponding to those of its parent class. Every object instance is
                                    completely independent, with its own properties and methods, and can thus be manipulated independently of
                                    other objects of the same class.
                                    Here's a simple example of a class definition followed by the object creation.
                                    Example </p> 
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php  <br>
                                        <div class="identation">
                                            <span class="comments">// Class definition</span> <br>
                                            class greeting{ 
                                                <div class="identation">
                                                    <span class="comments">// properties</span> <br>
                                                    public $str = "Hello World!"; <br>
                                                        <div class="identation">
                                                            <span class="comments">// methods</span> <br>
                                                            function show_greeting(){  <br>
                                                                <div class="identation">return $this->str; <br></div>
                                                            } <br>
                                                        </div>
                                                    } <br>
                                                </div>
                                            <span class="comments">// Create object from class</span> <br>
                                            $message = new greeting; <br> 
                                            var_dump($message);
                                        </div> 
                                    ?<span class="close_tag">></span>
                                </div>
                                <p> <span class="close_tag">Tip:</span> The data elements stored within an object are referred to as its properties and the information, or code
                                    which describing how to process the data is called the methods of the object.
                                    PHP NULL
                                    The special NULL value is used to represent empty variables in PHP. A variable of type NULL is a variable
                                    without any data. NULL is the only possible value of type null.
                                    Example </p>  
                                <p><span class="close_tag"><</span>?php $a = NULL; var_dump($a); echo "<span class="close_tag"><</span>br<span class="close_tag">></span>"; $b = "Hello World!"; $b = NULL; var_dump($b); ?> </p>         
                                <p> When a variable is created without a value in PHP like $var; it is automatically assigned a value of null.
                                    Many novice PHP developers mistakenly considered both $var1 = NULL; and $var2 = ""; are same, but this is not
                                    true. Both variables are different — the $var1 has null value while $var2 indicates no value assigned to it.
                                    PHP Resources
                                    A resource is a special variable, holding a reference to an external resource.
                                    Resource variables typically hold special handlers to opened files and database connections.
                                    Example</p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// Open a file for reading</span> <br>
                                            $handle = fopen("note.txt", "r"); <br>
                                            var_dump($handle); <br>
                                            echo " <span class="close_tag"><</span>br<span class="close_tag">></span>"; <span class="comments">// Connect to MySQL database server with default setting</span> <br>
                                            $link = mysql_connect("localhost", "root", ""); <br>
                                            var_dump($link); <br>
                                        </div>
                                    ?> 
                                    </div>   
                                <span class="title-ph">Variable declaration</span> 
                                <p> Variables are "containers" for storing information. Creating (Declaring) PHP Variables
                                    In PHP, a variable starts with the $ sign, followed by the name of the variable:
                                    Example </p>
                                <div class="php_code">
                                   <span class="close_tag"><</span>?php
                                        <div class="identation">
                                            $txt = "Hello world!"; <br>
                                            $x = 5; <br>
                                            $y = 10.5; <br>
                                        </div>
                                    ?> 
                                </div>  
                                <p>
                                    After the execution of the statements above, the variable $txt will hold the value Hello world!, the variable
                                    $x will hold the value 5, and the variable $y will hold the value 10.5.
                                    Note: When you assign a text value to a variable, put quotes around the value.
                                    Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the
                                    moment you first assign a value to it.
                                    A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume). 
                                </p>  
                                <span class="title-ph">Rules for PHP variables: </span>
                                <ul>
                                    <li>A variable starts with the $ sign, followed by the name of the variable </li>
                                    <li>A variable name must start with a letter or the underscore character</li>
                                    <li>A variable name cannot start with a number </li>
                                    <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) </li>
                                    <li>Variable names are case-sensitive ($age and $AGE are two different variables) Output Variables </li>
                                </ul>
                                <p> The PHP echo statement is often used to output data to the screen.
                                    The following example will show how to output text and a variable:
                                    Example </p>
                                <div class="php_code">
                                   <span class="close_tag"><</span>?php
                                        <div class="identation">
                                            $txt =
                                            "W3Schools.com"; <br>
                                            echo "I love $txt!";
                                        </div> 
                                    ?>
                                </div>   
                                <p>
                                    The following example will produce the same output as the example above: Example 
                                </p> 
                                <div class="php_code">
                                   <span class="close_tag"><</span>?php
                                       <div class="identation">
                                            $txt =
                                            "W3Schools.com"; <br>
                                            echo "I love " . $txt . "!";
                                       </div> 
                                    ?> 
                                </div>
                                <p>The following example will output the sum of two variables:
                                     Example </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php
                                        <div class="identation">
                                            $x = 5; <br>
                                            $y = 4; <br> 
                                            echo $x + $y; 
                                        </div>
                                    ?> 
                                    </div> 
                                <p>
                                    Note: You will learn more about the echo statement and how to output data to the screen in the next chapter.
                                    PHP is a Loosely Typed Language
                                    In the example above, notice that we did not have to tell PHP which data type the variable is.
                                    PHP automatically converts the variable to the correct data type, depending on its value.
                                    PHP Variables Scope
                                    In PHP, variables can be declared anywhere in the script.
                                    The scope of a variable is the part of the script where the variable can be referenced/used.
                                    PHP has three different variable scopes: 
                                </p> 
                                <ul>
                                    <li>local</li>
                                    <li>global </li>
                                    <li>static</li>
                                </ul> 
                                <p>Global and Local Scope
                                    A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
                                    Example</p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            $x = 5; <br>
                                            <span class="coments">// global scope</span> <br>
                                            function myTest() { <br>
                                             <div class="identation">
                                                <span class="comments">// using x inside this function will generate an error</span> <br>
                                                echo "<span class="close_tag"><</span>p<span class="close_tag">></span>Variable x inside function is: $x <span class="title-ph"><</span>/p<span class="title-ph">></span>";
                                             </div><br>
                                            } <br>
                                        myTest(); <br>
                                        echo "<span class="close_tag"><</span>p>Variable x outside function is: $x <span class="close_tag"><</span>/p<span class="close_tag">></span>"; 
                                        </div>
                                    ?>
                                </div>   
                                <p>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function: Example</p> 
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php  <br>
                                       <div class="identation">
                                            function myTest() { <br>
                                                <div class="identation">
                                                    $x = 5; <span class="comments">// local scope</span> <br>
                                                    echo "<span class="close_tag"><</span>p<span class="close_tag">></span>Variable x inside function is: $x<span class="close_tag"><</span>/p<span class="close_tag">></span>";
                                                </div><br>
                                            } <br>
                                    myTest(); <br>

                                    <span class="comments">// using x outside the function will generate an error</span> <br>
                                    echo "<span class="close_tag"><</span>p<span class="close_tag">></span>Variable x outside function is: $x<span class="title-ph"><</span>/p<span class="title-ph">></span>"; 
                                       </div>
                                    ?>
                                </div>  
                                <p> You can have local variables with the same name in different functions, because local variables are only
                                    recognized by the function in which they are declared.
                                    PHP The global Keyword
                                    The global keyword is used to access a global variable from within a function.
                                    To do this, use the global keyword before the variables (inside the function):
                                    Example</p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php
                                        <div class="identation">
                                            $x = 5; <br>
                                            $y = 10; <br>
                                            function myTest() { <br>
                                                <div class="identation">
                                                    global $x, $y; <br>
                                                    $y = $x + $y; <br>
                                                </div>
                                            } <br>
                                            myTest(); <br>
                                            echo $y;  <br>
                                            <span class="comments">// outputs 15 </span>
                                        </div>
                                    ?> 
                                </div> 
                                <p>
                                    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the
                                    variable. This array is also accessible from within functions and can be used to update global variables
                                    directly.
                                    The example above can be rewritten like this:
                                    Example 
                                </p>   
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            $x = 5; <br>
                                            $y = 10; <br>
                                            function myTest() { <br>
                                            <div class="identation">$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];</div>
                                            } <br>
                                            myTest(); <br>
                                            echo $y; <br>
                                            <span class="comments">// outputs 15 </span> <br>
                                        </div>
                                    ?> 
                                </div>
                                <p>
                                    PHP The static Keyword
                                    Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we
                                    want a local variable NOT to be deleted. We need it for a further job.
                                    To do this, use the static keyword when you first declare the variable:
                                    Example
                                </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php  <br>
                                            <div class="identation">
                                                function myTest() {  <br>
                                                    <div class="identation">
                                                        static $x = 0; <br> 
                                                        echo $x; <br>
                                                        $x++; <br>
                                                    </div>
                                                } <br>
                                                myTest(); <br>
                                                myTest(); <br>
                                                myTest(); 
                                            </div>
                                        ?> 
                                </div>
                                <p> Then, each time the function is called, that variable will still have the information it contained from the last
                                    time the function was called.
                                    Note: The variable is still local to the function. </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Operators</span>
                                <p>Operators are used to perform operations on variables and values.
                                   PHP divides the operators in the following groups: </p>
                                <ul>
                                    <li>Arithmetic operators </li>
                                    <li>Assignment operators </li>
                                    <li>Comparison operators </li>
                                    <li>Increment/Decrement operators</li>
                                    <li>Logical operators </li>
                                    <li>String operators </li>
                                    <li>Array operators </li>
                                    <li>Conditional Operator </li>
                                </ul>   
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PHP Arithmetic Operators </span>
                                <p>The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such
                                   as addition, subtraction, multiplication etc.</p>
                                <img src="img_SFDLT_5/web_dev-2.png" alt="PHP Arithmetic Operators">   
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PHP Assignment Operators </span>
                                <p>The PHP assignment operators are used with numeric values to write a value to a variable.
                                    The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the
                                    assignment expression on the right.
                                    The left operand gets set to the value of the expression on x = y x = y the right x += y x = x + y
                                    Addition x -= y x = x - y Subtraction x *= y x = x * y
                                    Multiplication x /= y x = x / y
                                    Division x %= y x = x
                                    % y Modulus </p>
                            </div>
                            <div class="mt-3">
                                <span class="titl-">PHP Comparison Operators </span>
                                <p>The PHP comparison operators are used to compare two values (number or string): </p>
                                <img src="img_SFDLT_5/web_dev-3.png" alt="PHP Comparison Operators"> 
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PHP Increment / Decrement Operators </span>
                                <p>The PHP increment operators are used to increment a variable's value.
                                   The PHP decrement operators are used to decrement a variable's value. </p>
                                   <img src="img_SFDLT_5/web_dev-4.png" alt="PHP Increment / Decrement Operators">    
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PHP Logical Operators </span>
                                <p>The PHP logical operators are used to combine conditional statements. </p>
                                <img src="img_SFDLT_5/web_dev-5.png" alt="PHP Logical Operators"> 
                            </div>
                            <div class="mt-">
                                <span class="title-ph">PHP String Operators</span>
                                <p>PHP has two operators that are specially designed for strings. </p>
                                <img src="img_SFDLT_5/web_dev-6.png" alt="PHP String Operators"> 
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">PHP Array Operators</span>
                                <p>The PHP array operators are used to compare arrays. </p>
                                <img src="img_SFDLT_5/web_dev-7.png" alt="PHP array operators">
                                <img src="img_SFDLT_5/web_dev-9.png" alt="PHP array operators">
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Arrays </span>
                                <p>
                                    Arrays in PHP is a type of data structure that allows us to store multiple elements of similar data type under
                                    a single variable thereby saving us the effort of creating a different variable for every data. The arrays are
                                    helpful to create a list of elements of similar types, which can be accessed using their index or key. Suppose
                                    we want to store five names and print them accordingly. This can be easily done by the use of five different
                                    string variables. But if instead of five, the number rises to hundred, then it would be really difficult for the
                                    user or developer to create so much different variables. Here array comes into play and helps us to store every
                                    element within a single variable and also allows easy access using an index or a key.
                                    An array is created using an array() function in PHP.
                                    There are basically three types of arrays in PHP: 
                                </p>
                                <span class="title-ph">Indexed or Numeric Arrays:</span>
                                <p>An array with a numeric index where values are stored linearly. </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// One way to create an indexed array</span> <br>
                                            $name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); <br>

                                            <div class="comments">// Accessing the elements directly echo "Accessing the 1st array elements directly:\n";</div> <br>
                                            echo $name_one[2], "\n"; <br> 
                                            echo $name_one[0],"\n"; <br>
                                            echo $name_one[4], "\n"; <br>

                                            <span class="comments">// Second way to create an indexed array</span> <br>
                                            $name_two[0] = "ZACK"; <br>
                                            $name_two[1] = "ANTHONY"; <br>
                                            $name_two[2] = "RAM"; <br>
                                            $name_two[3] = "SALIM"; <br>
                                            $name_two[4] = "RAGHAV"; <br>

                                            <span class="comments">// Accessing the elements directly</span> <br>
                                            echo "Accessing the 2nd array elements directly:\n"; <br> 
                                            echo $name_two[2],"\n"; echo $name_two[0], "\n"; <br> 
                                            echo $name_two[4], "\n";
                                        </div>
                                    ?> 
                                </div>
                                <span class="title-ph">Associative Arrays: </span>
                                <p>
                                    An array with a string index where instead of linear storage, each value can be assigned
                                    a specific key.
                                    Example:
                                    filter_none
                                    edit
                                    play_arrow
                                    brightness_4 
                                </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// One way to create an associative array</span>
                                            $name_one = array("Zack"=>"Zara", "Anthony"=>"Any","Ram"=>"Rani", "Salim"=>"Sara","Raghav"=>"Ravina"); <br><br>
    
                                            <span class="comments">// Second way to create an associative array</span><br>
                                            $name_two["zack"] = "zara"; <br>
                                            $name_two["anthony"] = "any"; <br>
                                            $name_two["ram"] = "rani"; <br>
                                            $name_two["salim"] = "sara"; <br>
                                            $name_two["raghav"] = "ravina"; <br> <br>
    
                                            <span class="comments">// Accessing the elements directly</span> <br> 
                                            echo "Accessing the elements directly:\n"; <br> 
                                            echo $name_two["zack"], "\n"; <br>
                                            echo $name_two["salim"], "\n"; <br> 
                                            echo $name_two["anthony"], "\n"; echo $name_one["Ram"], "\n"; <br> 
                                            echo $name_one["Raghav"], "\n";
                                        </div>
                                    ?> 
                                </div>
                                <span class="title-ph">Multidimensional Arrays:</span>
                                <p>An array which contains single or multiple array within it and can be accessed
                                  via multiple indices. </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// Defining a multidimensional array</span>
                                            $favorites = array( array(
                                            "name" => "Dave Punk",
                                            "mob" => "5689741523",
                                            "email" => "davepunk@gmail.com",
                                            ),
                                            array(
                                            "name" => "Monty Smith",
                                            "mob" => "2584369721",
                                            "email" => "montysmith@gmail.com",
                                            ),  array(
                                                "name" => "John Flinch",
                                                "mob" => "9875147536",
                                                "email" => "johnflinch@gmail.com",
                                                )
                                            ); <br> <br>
                                            
                                            <span class="comments">// Accessing elements</span> <br> 
                                            echo "Dave Punk email-id is: " . $favorites[0]["email"], "\n"; <br> 
                                            echo "John Flinch mobile number is: " . $favorites[1]["mob"];
                                        </div>
                                    ?> 
                                </p>  
                            </div>
                        </div>
                    </div>
                    </div>
            
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: Use of PHP program flow control </div><hr>
                            <div>
                                <span class="title-ph">Application of program flow control Conditional statements </span>
                                <p>Very often when you write code, you want tmo perform different actions for different conditions. You can
                                    use conditional statements in your code to do this.
                                    In PHP we have the following conditional statements:</p>
                                <ul>
                                    <li><span class="title-ph">if</span> statement - executes some code if one condition is true </li>
                                    <li><span class="title-ph">if...else</span> statement - executes some code if a condition is true and another code if that condition is false </li>
                                    <li><span class="title-ph">if...elseif....else</span> statement - executes different codes for more than two conditions </li>
                                    <li>switch statement - selects one of many blocks of code to be executed </li>
                                </ul>    

                                <div class="mt-3">
                                    <span class="title-ph">PHP - The if Statement</span>
                                    <p>The if statement executes some code if one condition is true. </p>
                                    <span class="title-ph">Syntax </span>
                                    <p> if (condition) {
                                            code to be executed if condition is true; 
                                        } </p>
                                    <p>The example below will output "Have a good day!" if the current time (HOUR) is less than 20: </p>  
                                    <span class="title-ph">Example </span>  
                                    <div class="php_code">
                                        <span class="close_tag"><</span>?php <br>
                                            <div class="identation">
                                                $t = date("H"); <br>

                                                if ($t < "20") { <br>
                                                    <div class="identation">echo "Have a good day!";</div> <br>
                                                }  <br>
                                            </div>
                                        ?<span class="close_tag">></span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">PHP - The if...else Statement </span>
                                    <p>The if....else statement executes some code if a condition is true and another code if that condition is false. </p>
                                    <span class="title-ph">Syntax</span>
                                    <div class="php_code">
                                        if (condition) { <br>
                                            <div class="identation">code to be executed if condition is true;</div> <br>
                                        } else { <br>
                                            <div class="identation">code to be executed if condition is false;</div> <br>
                                        } 
                                    </div>
                                    <p>The example below will output "Have a good day!" if the current time is less than 20, and "Have a good
                                       night!" otherwise: </p>
                                    <span class="title-ph">Example </span>  
                                    <div class="php_code">
                                        <span class="close_tag"><</span>?php <br>
                                            <div class="identation">
                                                $t = date("H"); <br>

                                                if ($t < "20") { <br>
                                                <div class="identation">echo "Have a good day!";</div>
                                                } else { <br>
                                                <div class="identation">echo "Have a good night!";</div>
                                                }
                                            </div>
                                        ?>
                                    </div> 
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">PHP - The if...elseif....else Statement </span>
                                    <p>The if....elseif...else statement executes different codes for more than two conditions. </p>
                                    <span class="title-ph">Syntax</span>
                                    <div class="php_code">
                                        if (condition) { <br>
                                            <span class="identation">code to be executed if this condition is true;</span> <br>
                                        } elseif (condition) { <br>
                                            <span class="identation">code to be executed if this condition is true;</span> <br>
                                        } else { <br>
                                            <span class="identation">code to be executed if all conditions are false; </span><br>
                                        } 
                                    </div>
                                    <p>The example below will output "Have a good morning!" if the current time is less than 10, and "Have a good
                                      day!" if the current time is less than 20. Otherwise it will output "Have a good night!":</p>
                                    <span class="title-ph">Example</span>  
                                    <div class="php_code">
                                        <span class="close_tag"><</span>?php <br>
                                            <div class="identation">
                                                $t = date("H"); <br>

                                                if ($t < "10") { <br>
                                                    <span class="identation">echo "Have a good morning!";</span> <br>
                                                } elseif ($t < "20") {  <br>
                                                    <span class="identation">echo "Have a good day!"; </span> <br>
                                                } else { <br>
                                                    <span class="identation">echo "Have a good night!";</span> <br>
                                                }
                                            </div>
                                        ?> 
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">The PHP switch Statement</span>
                                    <p>Use the switch statement to select one of many blocks of code to be executed. </p>
                                    <span class="title-ph">Syntax</span>
                                    <div class="php_code">
                                        switch (n) {  <br>
                                            <div class="identation">
                                                case label1:  <br>
                                                <div class="identation">
                                                    code to be executed if n=label1; 
                                                    break; 
                                                </div>
                                            case label2:  <br>
                                                <div class="identation">
                                                    code to be executed if n=label2; 
                                                    break;
                                                </div> 
                                            case label3:  <br>
                                                <div class="identation">
                                                    code to be executed if n=label3; 
                                                    break;
                                                </div>
                                            ... default: <br>
                                                <div class="indetation">
                                                    code to be executed if n is different from all labels;
                                                </div>
                                            </div>
                                        } 
                                    </div>
                                    <p>
                                        This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The
                                        value of the expression is then compared with the values for each case in the structure. If there is a match, the
                                        block of code associated with that case is executed. Use break to prevent the code from running into the next
                                        case automatically. The default statement is used if no match is found. $favcolor = "red"; 
                                    </p>
                                    <div class="php_code">
                                        switch ($favcolor) { <br>
                                            <div class="identation">
                                                case "red": <br>
                                                    <span class="identation">
                                                        echo "Your favorite color is red!"; 
                                                        break;
                                                    </span> <br>
                                                case "blue":  <br>
                                                    <div class="identation">
                                                        echo "Your favorite color is blue!"; 
                                                        break; 
                                                    </div>
                                                case "green": <br> 
                                                    <div class="identation">
                                                        echo "Your favorite color is green!"; 
                                                        break;
                                                    </div> 
                                                default:  <br>
                                                    <div class="identation">echo "Your favorite color is neither red, blue, nor green!";</div>
                                            </div>
                                        } 
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">Iterative statements (PHP Loops) </span>
                                    <p> Often when you write code, you want the same block of code to run over and over again in a row. Instead of
                                        adding several almost equal code-lines in a script, we can use loops to perform a task like this.
                                        In PHP, we have the following looping statements: </p>
                                    <ol>
                                        <li><span class="title-ph"> while </span>- loops through a block of code as long as the specified condition is true </li>
                                        <li><span class="title-ph">do...while </span> - loops through a block of code once, and then repeats the loop as long as the specified condition is true </li>
                                        <li><span class="title-ph">for </span> - loops through a block of code a specified number of times </li>
                                        <li><span class="title-ph">foreach </span> - loops through a block of code for each element in an array</li>
                                    </ol>  
                                    <div class="mt-3">
                                        <span class="title-ph">The PHP while Loop</span>
                                        <p>The while loop executes a block of code as long as the specified condition is true. </p>
                                        <span class="title-ph">Syntax</span>
                                        <div class="php_code">
                                            while (condition is true) { <br>
                                               <div class="identation"> code to be executed;</div>
                                            } 
                                        </div>
                                        <p>
                                            The example below first sets a variable $x to 1 ($x = 1). Then, the while loop will continue to run as long as
                                            $x is less than, or equal to 5 ($x <= 5). $x will increase by 1 each time the loop runs ($x++): 
                                        </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $x = 1; <br>
                                                    while($x <= 5) {  <br>
                                                        <div class="identation">
                                                            echo "The number is: $x <br>";
                                                            $x++;
                                                        </div>
                                                    }
                                                </div>
                                            ?> 
                                        </div>
                                    </div> 
                                    <div class="mt-3">
                                        <span class="title-ph">PHP do...while Loop</span>
                                        <p>The do...while loop will always execute the block of code once, it will then check the condition, and repeat the
                                           loop while the specified condition is true. </p>
                                        <p>Syntax do { code to be executed; } while (condition is true); </p> 
                                        <p> The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and
                                            then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the
                                            loop will continue to run as long as $x is less than, or equal to 5: </p> 
                                        <span class="title-ph">Example </span> 
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $x = 1; <br>

                                                    do { <br>
                                                    <div class="identation">
                                                        echo "The number is: $x <br>";
                                                        $x++;
                                                    </div>
                                                    } while ($x <= 5);  <br>
                                                </div>
                                            ?> 
                                        </div>    
                                        <p>
                                            Notice that in a do while loop the condition is tested AFTER executing the statements within the loop. This
                                            means that the do while loop would execute its statements at least once, even if the condition is false the first
                                            time.
                                            The example below sets the $x variable to 6, then it runs the loop, and then the condition is checked:
                                        </p>
                                        <div class="php_code">
                                           <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $x = 6;  <br>
                                                    do {  <br>
                                                        <div class="identation">
                                                            echo "The number is: $x <span class="close_tag"><</span>br<span class="close_tag">></span>";  $x++;
                                                        </div>
                                                    } while ($x <= 5);
                                                </div>
                                            ?>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">The PHP for Loop </span>
                                        <p>The for loop is used when you know in advance how many times the script should run. </p>
                                        <p>Syntax for (init counter; test counter; increment counter) {
                                            code to be executed;
                                            } </p>
                                        <p>Parameters: </p>   
                                        <ul>
                                            <li>init counter: Initialize the loop counter value </li>
                                            <li>test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends. </li>
                                            <li>increment counter: Increases the loop counter value The example below displays the numbers from 0 to 10: </li>
                                        </ul> 
                                        <div class="php_code">
                                        Example <span class="close_tag"><</span>?php for ($x = 0; $x <= 10; $x++) {
                                                          echo "The number is: $x <span class="close_tag"><</span>br>";
                                                    }
                                                    ?> 
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <span class="title-ph">The PHP foreach Loop </span>
                                        <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. </p>
                                        <span class="title-ph">Syntax</span>
                                        <div class="php_code">
                                            foreach ($array as $value) { <br>
                                                <span class="identation">code to be executed;  <br></span>
                                            } 
                                        </div>
                                        <p>
                                            For every loop iteration, the value of the current array element is assigned to $value and the array pointer is
                                            moved by one, until it reaches the last array element.
                                            The following example demonstrates a loop that will output the values of the given array ($colors):
                                            Example
                                        </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                    <div class="identation">
                                                        $colors = array("red", "green", "blue", "yellow"); <br>

                                                        foreach ($colors as $value) {  <br>
                                                            <div class="identation">echo "$value <br>";</div>
                                                        } <br>
                                                    </div>
                                                ?> 
                                        </div>
                                        <span class="title-ph"> Use PHP Functions</span>
                                        <span class="title-ph">Application of PHP functions Built-in functions</span>
                                        <p> Functions are reusable bits of code that you use throughout a project. They help to better organize your
                                            application as well as eliminate the need to copy/paste repetitive pieces of code. In an ideal world an
                                            application should not have multiple functions doing the same thing.
                                            PHP has a lot! of built in functions and while you are not expected to learn all of them at once there are some
                                            useful functions that can help in everyday programming and we will start from there.
                                            String Manipulation Functions
                                            Some of the most useful PHP functions are string manipulation functions. As the name suggests they
                                            manipulate strings.
                                            Finding the length of a String
                                            The strlen() functions works by passing a string or variable and then returns the total number of characters
                                            including spaces. </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php
                                                $name = "Matthew "; echo strlen($name); <span class="comments">// 8</span>
                                            ?>
                                        </div>  
                                        <p>
                                            Return part of a String
                                            The substr() function is used to return a substring or part of a string. This function has 3 parameters which you
                                            can pass along.
                                        </p>  
                                        <span class="title-ph"> Syntax </span>
                                        <p>substr($string, $start,$length); </p>
                                    </div>
                                    <div class="mt-3">
                                        <ul>
                                            <li>$string – a string of text or a variable containing a string of text. Input must be at least one character. </li>
                                            <li>$start – think of the string as an array starting from [0]. If you wanted to start from the first character you
                                               would enter 0. A negative value will go to the end of the string. </li>
                                            <li>$length – (Optional) is the number of characters returned after the start character. If this value is less than
                                                or equal to the start value then it will return false. </li>   
                                        </ul>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $name = "Matthew "; <br> 
                                                    echo substr($name, 0, 5); <span class="comments">// Matth</span>  <br>
                                                    echo substr($name, 2); <span class="comments">// tthew</span> <br> 
                                                    echo substr($name, -6, 5);<span class="comments"> // tthew</span>
                                                </div> 
                                            ?> 
                                        </div>
                                        <p>
                                            Note: If you don’t provide a $length parameter, this function will just return the remainder of the string
                                            starting from the $start parameter.
                                            Converting strings to UPPER or lower case
                                            Two useful string functions that are simple to use are strtoupper() and strtolower(), these functions can convert your
                                            strings to all UPPERCASE or all lowercase.
                                            They are very useful for case sensitive operations where you may require all characters to be lowercase for
                                            example. 
                                        </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $name = "Matthew "; <br> 
                                                    echo strtoupper($name); <span class="comments">// MATTHEW</span> 
                                                    echo strtolower($name); <span class="comments">// matthew </span>
                                                </div>
                                            ?>
                                        </div>
                                        <p>
                                            Searching for a needle in a haystack!
                                            Sometimes we need to find a substring within a string and to do that we can use strpos()
                                        </p>
                                        <span class="title-ph">Syntax</span>
                                        <div class="php_code">strpos ($haystack,$needle,$offset) </div>
                                        <ul>
                                            <li>$haystack – this is the string in which you are going to find the $needle starting from [0]. </li>
                                            <li>$needle – this is what you are going to search for in the $haystack. </li>
                                            <li>$offset – (Optional) search will start from this number of characters counted from the beginning of the string. Cannot be negative. </li>
                                        </ul>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $name = "Matthew "; <br> 
                                                    echo strpos($name, "M");<span class="comments"> // 0</span> <br> 
                                                    echo strpos($name, "hew"); <span class="comments">// 4</span> 
                                                    echo strpos($name, "m"); <span class="comments">// false </span>
                                                </div>
                                            ?> 
                                        </div>
                                        <p> Notice that the last example is false. That is because this function is case
                                            sensitive and could not find a match.
                                            we can almost make use of an if statement and some variables to make the strpos function more useful and
                                            meaningful. </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $string = "I am learning how to use PHP string functions!"; <br>
                                                    $search = "JavaScript"; <br>
                                                    if(strpos($string, $search) === false) { <br>
                                                    <div class="identation">echo "Sorry we could not find '$search' in '$string'.";</div> 
                                                } 
                                                </div>
                                            ?> 
                                        </div> 
                                        <p>
                                            This would echo “Sorry we could not find ‘JavaScript’ in ‘I am learning how to use PHP string functions!’“.
                                            Arithmetic Manipulation Functions As well as string manipulation function, PHP also has functions to manipulate numbers.
                                            Rounding numbers
                                            One of the most commonly used math function is round(). This function rounds numbers with decimal points
                                            up or down. You can round a number to an integer (whole number) or to a floating point (decimal numbers). 
                                        </p>  
                                        <span class="title-ph">Syntax</span> 
                                        <div class="php_code">round($val, $precision, $mode) </div>
                                        <ul>
                                            <li>$val – is the value to be rounded. </li>
                                            <li>$precision – (optional) number of decimal places to round to. </li>
                                            <li>$mode – the type of rounding that occurs and can be one of the following </li>
                                        </ul>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                               <div class="identation">
                                                $number = 3.55776232; <br> 
                                                echo round($number) . "<span class="close_tag"><</span>br/>". <span class="comments">// 4</span> 
                                                round($number, 1) . "<span class="close_tag"><</span>br/>". <span class="comments">// 3.6</span> round($number, 3) .
                                                "<span class="close_tag"><</span>br/>"; <span class="comments">// 3.558 </span>
                                               </div>
                                            ?> 
                                        </div>
                                        <p>
                                            Other math functions for rounding are ceil() and floor() . If you simply need to round a number to the nearest
                                            whole number then these functions are better suited to that purpose. 
                                        </p>
                                        <ul>
                                            <li><span class="title-ph">ceil()</span> – rounds fractions up. </li>
                                            <li><span class="title-ph">floor() </span> – rounds fractions down.</li>
                                        </ul>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $number = 3.55776232; <br> 
                                                    echo ceil($number) . <span class="close_tag"><</span>br/>". <span class="comments">// 4</span> floor($number) . "<span class="close_tag"><</span>br/>"; <span class="comments">// 3</span> 
                                                </div>
                                            ?> 
                                        </div>
                                        <p> Both functions require a value and unlike round(), do not have any additional parameters.
                                            Generating Random Numbers
                                            Another very common math function is rand() which returns a random number between two numbers.</p>
                                        <span class="title-ph">rand($min, $max) </span>
                                        <ul>
                                            <li>$min – (optional) sets the lowest value to be returned. Default is 0 </li>
                                            <li>$max – (optional) sets the maximum value to be returned. Default returns getrandmax(). </li>
                                        </ul> 
                                        <p>
                                            Note: getrandmax() on some windows machines will return 32767. You will need to specify a $max value in
                                            order to return a larger number. 
                                        </p>   
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    echo rand(). "\n"; <span class="comments">//10884</span> <br> 
                                                    echo rand(). "\n"; <span class="comments">// 621</span> <br> 
                                                    echo rand(2, 10); <span class="comments">//2</span> 
                                                </div>
                                            ?> 
                                        </div>
                                        <p>
                                            Note: End-of-line terminator (\n) is used in Unix and Unix-like systems (most servers) to move the carriage
                                            down to a new line. Simply put, it creates a new line in source code. Array Functions
                                            Array or array() is itself a function that stores multiple values in to a single variable. Aside from the array()
                                            function there are a number of other functions to manipulate arrays, here we will look at some of the most
                                            common ones.
                                            Adding New Elements
                                            Adding new elements to the end of an array can be achieved by calling the array_push() function. 
                                        </p>
                                        <span class="title-ph">array_push($array, $value1, $value2) </span>
                                        <ul>
                                            <li>$array – the array in which you are adding new elements to. </li>
                                            <li>$value1 – (required) is the first value to push onto the end of the $array. </li>
                                            <li>$value2 – (optional) is the second value to push onto the end of the $array. </li>
                                        </ul>
                                        <p>You can push as many values as you need. </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $games = array(); <br>

                                                    $array = array_push($games, "Farcry 4"); <br>
                                                    $array = array_push($games, "Fallout 4"); <br>
                                                    $array = array_push($games, "Metal Gear"); <br>
                                                    $array = array_push($games, "Witcher 3"); <br>
                                                    echo $array; <span class="comments">// returns 4</span> <br> 
                                                    var_dump($games); 
                                                </div>
                                            ?> <br> <br>
                                            However is better to list each element in a single call like this: <br>
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $games = array(); <span class="comments">// target array</span> <br>

                                                    $array = array_push($games,
                                                    "Farcry 4",
                                                    "Fallout 4",
                                                    "Metal Gear",
                                                    "Witcher 3"); <br>

                                                    echo $array; <span class="comments"> // returns</span> <br> 
                                                    4 var_dump($games); 
                                                </div>
                                            ?>
                                            Both methods result in the same outcome. If you echo or  print array_push() it will return the number of items to be
                                            pushed in to the array.
                                            If you var_dump() the target array you will see something like this. 
                                        </div>
                                        <div class="php_code">
                                            array(4) { [0]
                                            => string(8) "Farcry 4"
                                            [1] =>
                                            string(9) "Fallout 4"
                                            [2] => string(10) "Metal Gear"
                                            [3] => string(9) "Witcher 3" } 
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">Sorting an Array </span>
                                        <p> As well as adding items to an array we sometimes need to be able to sort them. PHP has a handy function
                                            called “funnily enough” sort() to do just that</p>
                                        <span class="title-ph"> Syntax </span> 
                                        <p>sort($array, $sort_flags)</p>  
                                        <ul>
                                            <li>$array – the array in which you wish to sort. </li>
                                            <li>$sort_flags – (optional) modifies the sorting behavior. </li>
                                        </ul>
                                        <p>By default the sorting behavior will reorganize an array alphabetically or numerically. </p>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    $games = array(
                                                    "Farcry 4",
                                                    "Metal Gear",
                                                    "Fallout 4",
                                                    "Witcher 3", "Batman"); sort($games); <span class="comments">// array to sort</span><br> 
                                                    echo join(", ", $games); <br>
                                                    <span class="comments">//output - Batman, Fallout 4,
                                                        Farcry 4, Metal Gear, Witcher 3</span>
                                                </div>
                                            ?> 
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">User-defined functions</span>
                                        <p>A user defined function declaration starts with the word "function":</p>
                                        <span class="title-ph">Syntax</span>
                                        <div class="php_code"> 
                                            function functionName() { <br> 
                                                <div class="identation">code to be executed;</div>
                                            } 
                                        </div>
                                        <p>Note: A function name can start with a letter or underscore (not a number). </p>
                                        <p> Tip: Give the function a name that reflects what the function does!
                                            Function names are NOT case-sensitive.
                                            In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the
                                            beginning of the function code and the closing curly brace ( } ) indicates the end of the function. The function
                                            outputs "Hello world!". To call the function, just write its name:</p>
                                        <span class="title-ph">Example </span>   
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php  <br>
                                                function writeMsg() {  <br>
                                                    <div class="identation">echo "Hello world!";</div>
                                                } <br> writeMsg(); <span class="comments">// call the function</span> 
                                            ?>
                                        </div> 
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">PHP Function Arguments</span>
                                        <p>
                                            Information can be passed to functions through arguments. An argument is just like a variable.
                                            Arguments are specified after the function name, inside the parentheses. You can add as many arguments as
                                            you want, just separate them with a comma.
                                            The following example has a function with one argument ($fname). When the familyName() function is
                                            called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several
                                            different first names, but an equal last name: 
                                        </p>
                                        <span class="title-ph">Example </span>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php  <br>
                                                <div class="identation">
                                                    function familyName($fname) {  <br>
                                                        <div class="identation">echo "$fname Refsnes.<br>"; </div>
                                                    } <br> familyName("Jani"); <br>
                                                      familyName("Hege");  <br>
                                                      familyName("Stale");  <br>
                                                      familyName("Kai Jim");  <br>
                                                      familyName("Borge"); <br>
                                                </div> 
                                            ?>
                                            The following example has a function with two arguments ($fname and $year): 
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <span class="title-ph">PHP Default Argument Value</span>
                                        <p>The following example shows how to use a default parameter. If we call the function setHeight() without
                                           arguments it takes the default value as argument: </p>
                                        <span class="title-ph">Example </span> 
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php  <br>
                                                <div class="identation">
                                                    function setHeight($minheight = 50) { <br>
                                                        echo "The height is : $minheight <br>";
                                                    } <br>
                                                    setHeight(350); <br> 
                                                    setHeight(); <br> <span class="comments">// will use the default value of 50</span>
                                                    setHeight(135); <br> 
                                                    setHeight(80);  <br>
                                                </div>
                                                ?> 
                                            </div>  
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">PHP Functions - Returning values</span>
                                        <p>To let a function return a value, use the return statement: </p>
                                        <span class="title-ph">Example </span>
                                        <div class="php_code">
                                            <span class="close_tag"><</span>?php <br> 
                                                <div class="identation">
                                                    function sum($x, $y) { <br> 
                                                        <div class="identation">
                                                            $z = $x + $y;  <br>
                                                            return $z;
                                                        </div> 
                                                    } <br> echo "5 + 10 = " . sum(5, 10) . "<span class="close_tag"><</span>br>"; <br> 
                                                    echo "7 + 13 = " . sum(7, 13) . "<span class="close_tag"><</span>br>"; echo "2 + 4 = " . sum(2, 4); 
                                                </div>
                                                ?> 
                                            </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="title-ph">Try and catch keywords</span>
                                        <p> The finally block may also be specified after or instead of catch blocks. Code within the finally block will
                                            always be executed after the try and catch blocks, regardless of whether an exception has been thrown, and
                                            before normal execution resumes. </p>
                                        <span class="title-ph">Examples</span> 
                                        <span class="title-ph">Throwing an Exception</span>   
                                        <div class="php_code">
                                        <span class="close_tag"><</span>?php  <br>
                                            <div class="identation">
                                                function inverse($x) {  <br>
                                                    <div class="identation">
                                                        if (!$x) {  <br>
                                                            <div class="identation">throw new Exception('Division by zero.');</div>
                                                        } <br>
                                                        return 1/$x; <br>
                                                    </div>
                                                } try <br>
                                                    { <br>
                                                        <div class="identation">echo inverse(5) . "\n"; echo inverse(0) . "\n"; </div>
                                                    } catch (Exception $e) { <br> 
                                                       <div class="identation"> echo 'Caught exception: ', $e->getMessage(), "\n";</div>
                                                    }
    
                                                    <span class="comments">// Continue execution</span> <br> 
                                                    echo "Hello World\n"; 
                                            </div>
                                        ?> <br> <br>
                                        <span class="close_tag"><</span>?php  <br>
                                        <div class="identation">
                                            function inverse($x) {  <br>
                                                <div class="identation">
                                                    if (!$x) { <br>
                                                        <div class="identation">
                                                            throw new Exception('Division by zero.');
                                                        </div>
                                                    } return 1/$x; <br>
                                                </div>
                                            }  <br>
                                            try {  <br>
                                                <div class="identation">echo inverse(5) . "\n"; </div>
                                               } catch (Exception $e) {  <br>
                                                   <div class="identation">echo 'Caught exception: ', $e->getMessage(),
                                                    "\n";</div>
                                                } finally {  <br>
                                                    <div class="identation">echo "First finally.\n";</div>
                                                } try {  <br>
                                                    <div class="identation">echo inverse(0) . "\n"; } catch (Exception $e) { echo 'Caught exception: ', $e->getMessage(),
                                                        "\n";</div>
                                                    } finally { <br>  echo "Second finally.\n";
                                            } <br>

                                            // Continue execution echo "Hello World\n";
                                        </div>
                                            ?> 
                                        </div>
                                        <p>The above example will output: </p>
                                        <div class="result">
                                            0.2 <br>
                                            First finally. <br>
                                            Caught exception: Division by zero. Second finally. <br>
                                            Hello World
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>

                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: Install and configure a PHP server </div><hr>
                       <div>
                        <span class="title-ph">Introduction to web server</span>
                        <span class="title-ph">Description of XAMPP components </span>
                        <p>
                            <span class="title-ph">XAMPP?</span> XAMPP stands for Cross-Platform (X), Apache (A), MariaDB (M), PHP (P) and Perl (P). Since
                            XAMPP is simple, lightweight Apache distribution it is extremely easy for developers to create a local web
                            server for testing and deployment purposes. 
                        </p>
                        <p><span class="title-ph"> Apache:</span> Apache is the most widely used web server software. Developed and maintained by Apache
                            Software Foundation, Apache is an open source software available for free. It runs on 67% of all webservers
                            in the world. It is fast, reliable, and secure. </p>
                        <p> <span class="title-ph">MySQL:</span> MySQL is a full-featured relational database management system (RDBMS) that competes with
                            the likes of Oracle DB and Microsoft's SQL Server. MySQL is sponsored by the Swedish company MySQL
                            AB, which is owned by Oracle Corp. MySQL is written in C and C++ and is compatible with all major
                            operating systems.</p>  
                        <p><span class="title-ph">PHP: Hypertext Preprocessor (or simply PHP)</span> is a general-purpose programming language originally
                           designed for web development. It was originally created by Rasmus Lerdorf in 1994 </p> 
                        <p> <span class="title-ph">Perl:</span> is a family of two high-level, general-purpose, interpreted, dynamic programming languages. "Perl"
                            usually refers to Perl 5, but it may also refer to its redesigned "sister language", Perl 6.
                            Though Perl is not officially an acronym, there are various backronyms in use, including
                            "Practical Extraction and Reporting Language". Perl was originally developed by Larry Wall in 1987 as a
                            general-purpose Unix scripting language to make report processing easier. </p>   
                        <div class="mt-3">
                            <span class="title-ph">Connect and access MySQL Database </span>
                            <p>Application of connection object and method</p>
                            <span class="title-ph">Connection object </span>
                            <div class="php_code">
                                $servername = "localhost"; <br>
                                $username = "username"; <br>
                                $password = "password"; <br>
                                $dbname = "myDB"; 
                            </div>

                            <span class="title-ph">Mysqli_connect </span>
                            <p>Before we can access data in the MySQL database, we need to be able to connect to the server:
                               Example (MySQLi Procedural) </p>
                            <br><div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = "password"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = mysqli_connect($servername, $username, $password); <br> <br>

                                        <span class="comments">// Check connection</span> <br> 
                                        if (!$conn) { <br>
                                        <div class="identation">die("Connection failed: " . mysqli_connect_error());</div>
                                        } <br>
                                        echo "Connected successfully"; 
                                    </div>
                                ?> 
                                </div> <br>
                            <p>Example (MySQLi Object-Oriented)</p> 
                            <br><div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = "password"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = new mysqli($servername, $username, $password); <br> <br>

                                        <span class="comments">// Check connection</span> <br> 
                                        if($conn->connect_error){ <br> 
                                            <div class="identation">die("Connection failed: " . $conn->connect_error);</div>
                                        } <br>
                                        echo "Connected successfully"; 
                                    </div>
                                ?> 
                                </div><br>
                            <span class="title-ph">PDO (PHP Data Objects)</span> 
                            <p>Application database access methods </p>
                            <span class="title-ph">Mysqli_select </span>
                            <p>Definition and Usage. The mysqli_select_db() function is used to change the default database for the connection. </p>
                            <span class="title-ph">Mysqli_query </span>
                            <p>The mysqli_query() function is used to simplify the act of performing a query against the database
                               represented by the link parameter. </p>
                            <p>Example
                               Perform queries against the database: </p>  
                            <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $con=mysqli_connect("localhost","my_user","my_password","my_db"); <br> <br>
                                        <span class="comments">// Check connection</span> <br>
                                        if (mysqli_connect_errno()){ <br>
                                            <div class="identation">echo "Failed to connect to MySQL: " . mysqli_connect_error();</div>
                                        } <br> <br>

                                        <span class="comments">// Perform queries</span> <br>
                                        mysqli_query($con,"SELECT * FROM Persons"); <br>
                                        mysqli_query($con,"INSERT INTO Persons(FirstName,LastName,Age) VALUES ('Glenn','Quagmire',33)"); mysqli_close($con);
                                    </div> 
                                ?> 
                            </div>   
                            <p>Note: To insert using form, values are replaced by values declared for receiving value from the form. </p> 
                        </div>         
                        <div class="mt-3">
                            <span class="title-ph">Implement database CRUD Operations </span>
                            <p>
                                The Data Access Layer communicates with the Data Storage Layer to perform CRUD operations. CRUD
                                represents an acronym for the database operations Create, Read, Update, and Delete. The communication
                                between two layers could be in the form of ad hoc SQL statements such as INSERT, SELECT, UPDATE,
                                and DELETE
                            </p>
                            <p>Manipulation of database table records </p>
                            <span class="title-ph">Insert record </span>
                            <p>The INSERT INTO statement is used to add new records to a MySQL table: </p>
                            <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = ""; <br>
                                        $dbname = "myDB"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = mysqli_connect($servername, $username, $password, $dbname); <br>
                                        <span class="comments"> // Check connection</span> <br> 
                                        if (!$conn) { <br> 
                                            <div class="identation">die("Connection failed: " . mysqli_connect_error()); </div>
                                        } <br> <br>

                                        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')"; <br> <br>

                                        if (mysqli_query($conn, $sql)) { <br>
                                            <div class="identation">
                                                echo "New record created successfully";
                                            </div>
                                        } else { <br> 
                                            <div class="identation">echo "Error: " . $sql . "<br>" . mysqli_error($conn); </div>
                                        } <br> <br>

                                        mysqli_close($conn); 
                                    </div>
                                ?> 
                                </div>
                            <p> Note: To insert using form, values are replaced by values declared for receiving value from the form. Retrieve records
                                The SELECT statement is used to select data from one or more tables: </p>
                            <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = "password"; <br>
                                        $dbname = "myDB"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = mysqli_connect($servername, $username, $password, $dbname); <br>
                                       <span class="comments"> // Check connection </span> <br>
                                        if(!$conn) { <br>
                                            <div class="identation"> die("Connection failed: " . mysqli_connect_error()); </div>
                                        } <br> <br>

                                        $sql = "SELECT id, firstname, lastname FROM MyGuests"; <br>
                                        $result = mysqli_query($conn, $sql); <br> <br>

                                        if (mysqli_num_rows($result) > 0) { <br>
                                            <div class="identation">
                                                <span class="comments">// output data of each row</span> <br>
                                                while($row = mysqli_fetch_assoc($result)) { <br>
                                                <div class="identation">echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";</div>
                                                } <br>
                                            </div>
                                        } else { <br>
                                        <div class="identation">echo "0 results";</div>
                                        } <br> <br>

                                        mysqli_close($conn);
                                    </div>
                                ?> 
                                </div>  
                            <span class="title-ph">Retrieve one record</span>  
                            <div class="php_code">
                                $result = mysqli_query($conn, $sql); <br>

                                if (mysqli_num_rows($result) > 0) { <br>
                                    <div class="identation">
                                        <span class="comments">
                                            // output data of each row
                                        </span> <br> 
                                        while($row = mysqli_fetch_assoc($result)) { <br>
                                            <div class="identation">echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";</div>
                                        } <br>
                                    </div>
                                } else { <br>
                                    <div class="identation">echo "0 results";</div>
                                }  
                            </div>
                            <span class="title-ph">Update record</span>
                            <p>The UPDATE statement is used to update existing records in a table: </p>
                            <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = "password"; <br>
                                        $dbname = "myDB"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = mysqli_connect($servername, $username, $password, $dbname); <br>
                                        <span class="comments">// Check connection </span> <br>
                                        if (!$conn) { <br> 
                                            <span class="identation">die("Connection failed: " . mysqli_connect_error()); </span> <br>
                                        } <br> <br>

                                        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2"; <br> <br>

                                        if (mysqli_query($conn, $sql)) { <br>
                                       <div class="identation"> echo "Record updated successfully";</div>
                                        } else { <br> 
                                            <div class="iedntation">echo "Error updating record: " . mysqli_error($conn);</div> 
                                        } <br> <br>

                                        mysqli_close($conn);
                                    </div>
                                ?>
                            </div>
                            <span class="title-ph">Delete record</span>
                            <p>The DELETE statement is used to delete records from a table: </p>
                            <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        $servername = "localhost"; <br>
                                        $username = "username"; <br>
                                        $password = "password"; <br>
                                        $dbname = "myDB"; <br> <br>

                                        <span class="comments">// Create connection</span> <br>
                                        $conn = mysqli_connect($servername, $username, $password, $dbname); <br>
                                        <div class="span comments">// Check connection </div><br>
                                        if(!$conn) { <br> 
                                            <div class="identation">die("Connection failed: " . mysqli_connect_error());</div> 
                                        } <br> <br>

                                        <span class="comments">// sql to delete a record</span> <br>
                                        $sql = "DELETE FROM MyGuests WHERE id=3"; <br> <br>

                                        if (mysqli_query($conn, $sql)) { <br>
                                        <div class="identation">echo "Record deleted successfully";</div>
                                        } else { <br> 
                                            <div class="identation">echo "Error deleting record: " . mysqli_error($conn); </div>
                                        }  <br> <br>
                                        mysqli_close($conn);
                                    </div>
                                ?> 
                                </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">Manage Sessions and Cookies </span>
                            <p>Introduction and use of cookies </p>
                            <span class="title-ph">Importance of cookies</span>
                            <p>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer.
                                Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can
                                both create and retrieve cookie values. </p>
                            <span class="title-ph">Types of Cookies: </span>    
                            <p>Session based cookie which expire at the end of session and Persistent cookies which are written on hard disk. </p>
                            <span class="title-ph">Cookies life time </span>
                            <p>The distribution of lifetimes of 3rd party cookies is bimodal. Either they live less than a day, or they are likely
                               to live for more than two weeks. Cookies seen by a campaign (any campaign!) live for longer</p>
                            <span class="title-ph">Servlet API (Application programming interface) </span> 
                            <p>Programming a PHP/Java Bridge servlet
                                You need to use Servlet API to create servlets. There are two packages that you must remember while using
                                API, the javax.servlet package that contains the classes to support generic servlet (protocolindependent
                                servlet) and the javax.servlet.http package that contains classes to support http servlet.
                                This shows how to create a servlet and how to call it from PHP code.
                                Create a servlet using the Eclipse IDE </p> 
                            <ul>
                                <li>Start Eclipse Java EE IDE for Web Developers </li>
                                <li>Click on File/New/Dynamic Web Project </li>
                                <li>Enter Project name: "MyWebApp", Target runtime: "Apache Tomcat v6.0", Configuration: "Default configuration for Apache Tomcat" </li>
                                <li>Open the tree: Project Explorer/MyWebApp/WebContent/WEB-INF so that the lib directory becomes visible</li>
                                <li>Drag and drop JavaBridge.jar and php-servlet.jar to the lib directory. </li>
                                <li>Click on File/New/Servlet </li>
                                <li>Enter Java package: "test", Class name: "Hello" </li>
                                <li>Click Next, Click Next</li>
                                <li>Uncheck "doPost", check "doGet" and "doPut" </li>
                                <li>Click on Finish</li>
                                <li>Add the following code to the doGet method body: response.getWriter().write("HelloServlet is running!"); </li>
                                <li>Add the following code to the doPut method body (press Control-Shift-o to automatically resolve references):
                                    RemoteHttpServletContextFactory ctx = new RemoteHttpServletContextFactory(this, getServletContext(),
                                    request, request, response); response.setHeader("X_JAVABRIDGE_CONTEXT", ctx.getId());
                                    response.setHeader("Pragma", "no-cache"); response.setHeader("Cache-Control", "no-cache"); try {
                                    ctx.handleRequests(request.getInputStream(), response.getOutputStream());
                                    } finally { ctx.destroy();
                                    } </li>
                                <li>Add the following method to the servlet: public String hello() {return "hello from MyServlet";} </li>
                                <li>Click on the Run button. In the dialog box click on the Finish button. You should see the browser
                                    "http://localhost:8080/MyWebApp/Hello" with the message "HelloServlet is running!". Connect PHP with
                                    your servlet </li>   
                                <li>Drag and drop Java.inc to a directory and create the following PHP script "test.php":
                                    <span class="close_tag"><</span>?php define("JAVA_HOSTS", "localhost:8080"); define("JAVA_SERVLET", "/MyWebApp/Hello");
                                    require_once("Java.inc");</li>     
                            </ul> 
                            <div class="mt-3">
                                <span class="title-ph">Create cookies </span>
                                <p>A cookie is created with the setcookie() function.
                                    Syntax setcookie(name, value, expire, path, domain, secure, httponly);
                                    Only the name parameter is required. All other parameters are optional. </p>
                                <p>PHP Create/Retrieve a Cookie
                                    The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after
                                    30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the
                                    directory you prefer).
                                    We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset()
                                    function to find out if the cookie is set:
                                    Example </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                   <div class="identation">
                                        $cookie_name = "user"; $cookie_value = "John Doe"; setcookie($cookie_name, $cookie_value, time() +
                                        (86400 * 30), "/"); <span class="comments">// 86400 = 1
                                            day </span>
                                   </div>
                                ?>
                                </div>  
                                <span class="title-ph">Retrieve cookies value</span> 
                                <div class="php_code">
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        if(!isset($_COOKIE[$cookie_name])) { <br>
                                            <div class="identation">echo "Cookie named '" . $cookie_name . "' is not set!";</div>
                                        } else { <br>
                                            <div class="identation">
                                                echo "Cookie '" . $cookie_name . "' is set!<span class="close_tag"><</span>br>"; <br>
                                                echo "Value is: " . $_COOKIE[$cookie_name];
                                            </div>
                                        }
                                    </div>
                                ?> 
                                </div>     
                            </div>  
                            <div class="mt-3">
                                <span class="title-ph">Delete cookies</span>
                                <p>To delete a cookie, use the setcookie() function with an expiration date in the past:
                                    Example </p>
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// set the expiration date to one hour ago </span> <br>
                                           setcookie("user", "", time() - 3600);
                                        </div>
                                    ?> 
                                </div> 
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">echo "Cookie 'user' is deleted.";</div>
                                    ?> 
                                </div>   
                            </div>  
                            <div class="mt-3">
                                <span class="title-ph">Importance of sessions</span>
                                <p> A session is a way to store information (in variables) to be used across multiple pages.
                                    When you work with an application, you open it, do some changes, and then you close it. This is much like a
                                    Session. The computer knows who you are. It knows when you start the application and when you end. But
                                    on the internet there is one problem: the web server does not know who you are or what you do, because
                                    the HTTP address doesn't maintain state.
                                    Session variables solve this problem by storing user information to be used across multiple pages (e.g.
                                    username, favorite color, etc). By default, session variables last until the user closes the browser.
                                    So; Session variables hold information about one single user, and are available to all pages in one application. </p>
                                <span class="title-ph">Session life time</span> 
                                <p>
                                    The session will last for 1440 seconds (24 minutes). You're searching for gc_maxlifetime Create sessions
                                    A session is started with the session_start() function.
                                    Session variables are set with the PHP global variable: $_SESSION.
                                    Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set
                                    some session variables: 
                                </p>   
                                <div class="php_code">
                                    <span class="close_tag"><</span>?php <br>
                                        <div class="identation">
                                            <span class="comments">// Start the session </span> <br>
                                            session_start();
                                        </div>
                                    ?> <br> <br> 
                                    <span class="close_tag"><</span>!DOCTYPE html> <br>
                                    <span class="close_tag"><</span>html>
                                       <div class="identation">
                                        <span class="close_tag"><</span>body>

                                            <div class="identation">
                                                <span class="close_tag"><</span>?php <br>
                                                <div class="identation">
                                                    <span class="comments">// Set session variables</span> <br>
                                                $_SESSION["favcolor"] = "green"; $_SESSION["favanimal"] = "cat"; echo "Session variables are set.";
                                                </div>
                                            ?>
    
                                            </div>
                                            <span class="close_tag"><</span>/body>
                                       </div>
                                    <span class="close_tag"><</span>/html> 
                                        </div>
                            </div>
                            <div class="mt-2 php_code">
                                <span class="title-ph">Destroy session variables</span>
                                <p> To remove all global session variables and destroy the session, use session_unset() and session_destroy():
                                    Example </p>
                                <p>
                                <span class="close_tag"><</span>?php <br>
                                    <div class="identation">
                                        <span class="comments">// remove all session variables </span> <br>
                                        session_unset(); <br> <br>

                                       <span class="comments"> // destroy the session</span><br> 
                                        session_destroy();
                                    </div>
                                ?> 
                                </p>    
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="title-ph">Manage dynamic Forms</span>
                            <p>Application of HTML form processing methods </p>
                            <span class="title-ph">Embedded PHP scripts </span>
                            <p>
                                When you embed PHP code in an HTML file, you need to use the .php file extension for that file, so that
                                your web server knows to send the file to PHP for processing. 
                            </p>
                            <span class="title-ph">POST method</span>
                            <p> Information sent from a form with the POST method is invisible to others (all names/values are embedded
                                within the body of the HTTP request) and has no limits on the amount of information to send.
                                Moreover POST supports advanced functionality such as support for multi-part binary input while uploading
                                files to server.
                                However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
                                $_POST is an array of variables passed to the current script via the HTTP POST method. </p>
                             
                            <span class="title-ph">GET method</span>  
                            <p>Information sent from a form with the GET method is visible to everyone (all variable names and values are
                                displayed in the URL). GET also has limits on the amount of information to send. The limitation is about
                                2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the
                                page. This can be useful in some cases.

                                GET may be used for sending non-sensitive data. </p>
                            <p>Note: GET should NEVER be used for sending passwords or other sensitive information! </p> 
                            <span class="title-ph">PHP form validation </span>  
                            <img src="img_SFDLT_5/web_dev-10.png" alt="PHP form validation">  
                            <img src="img_SFDLT_5/web_dev-11.png" alt="PHP form validation"> 
                            <img src="img_SFDLT_5/web_dev-12.png" alt="PHP form validation"> 
                        </div>
                       </div>
                    </div>
                    <div class="lesson">
                        <div class="lesson-title mt-3">Lessons 4: Introduce Frameworks </div><hr>
                        <div class="">
                            <p> <span class="title-ph"> A PHP Framework</span> is a basic platform that allows us to develop web applications. In other words,
                                it provides structure. By using a PHP Framework, you will end up saving loads of time, stopping the need
                                to produce repetitive code, and you'll be able to build applications rapidly (RAD).</p>
                            <span class="title-ph">Description of PHP frameworks </span>  
                            <span class="title-ph">CakePHP</span>
                            <p> CakePHP is a web development framework that uses the MVC model. It is a free open source framework for
                                PHP that uses the Mode-View-Controller software design pattern. CakePHP reduces developmental costs and
                                helps developers write less code. </p>  
                            <img src="img_SFDLT_5/web_dev-13.png" alt="CakePHP">  
                            <span class="title-ph">Benefits of CakePHP: </span> 
                            <ul>
                                <li>All segments work independently, which means, the developer may modify a segment without affecting others. </li>
                                <li>Frequently updated with new features, making it feature-rich and highly secured. </li>
                                <li>Due to its MVC pattern, creating powerful web applications is easy. </li>
                                <li>Reduced development cost & time. </li>
                                <li>Highly effective for scaffolding code generation. </li>
                                <li>Easier to work on classes</li>
                                <li>Automated configuration for preferred settings. </li>
                            </ul>

                            <div class="mt-3">
                                <span class="title-ph">Laravel</span>
                                <p>
                                    Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the
                                    development of web applications following the model–view–controller architectural pattern and based on
                                    Symfony. Wikipedia
                                    License: MIT License
                                    Initial release: June 2011; 8 years ago
                                    Stable release: 5.8.10 / April 4, 2019; 2 months ago
                                    Written in: PHP
                                    Developer(s): Taylor Otwell 
                                </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Symfony</span>
                                <p>Symfony is a PHP web application framework and a set of reusable PHP components/libraries. Symfony was
                                    published as free software on October 18, 2005 and released under the MIT license. Wikipedia Original
                                    author(s): Fabien Potencier
                                    License: MIT license
                                    Stable release: 4.2.7 / 2019-04-17 Written in: PHP
                                    Initial release: 22 October 2005 </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Zend</span>
                                <p>Zend Framework is an open source, object-oriented web application framework implemented in PHP 7 and
                                    licensed under the New BSD License. The framework is basically a collection of professional PHPbased
                                    packages. Wikipedia
                                    Developed by: Zend Technologies
                                    Stable release: 3.0.0 / June 28, 2016; 2 years ago
                                    Initial release date: 2005
                                    License: New BSD license
                                    Written in: PHP </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">Phalcon</span>
                                <p>Phalcon is a PHP web framework based on the model–view–controller pattern. Originally released in 2012,
                                    it is an open-source framework licensed under the terms of the BSD License.
                                    Stable release: 3.4.4 / 30 June 2019; 26 days ago
                                    Initial release date: November 14, 2012
                                    Developer(s): Andres Gutierrez and others
                                    License: BSD License
                                    Platforms: Unix, Linux, macOS, Microsoft Windows
                                    Written in: C, PHP </p>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">RESTful APIs</span>
                                <p>REST stands for REpresentational State Transfer and is an architectural style for network communication
                                    between applications, which relies on a stateless protocol (usually HTTP) for interaction.
                                    HTTP Verbs Represent Actions
                                    In RESTful APIs, we use the HTTP verbs as actions, and the endpoints are the resources acted upon.
                                    We’ll be using the HTTP verbs for their semantic meaning: </p>
                                <ul>
                                    <li>GET: retrieve resources </li>
                                    <li>POST: create resources </li>
                                    <li>PUT: update resources</li>
                                    <li>DELETE: delete resources </li>
                                </ul>   
                                <img src="img_SFDLT_5/web_dev-14.png" alt="RESTful APIs"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Develop a web application</div>
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
        <script src="../../Lib/wow/wow.min.js"></script>
        <script src="../../Lib/bootstrap/js/bootstrap-material-design.min.js"></script>
        <script src="../../Assets/js/header.box.js"></script>
        <script src="../../Assets/js/courses.box.js"></script>
        <!-- ================================================================================================================================================== -->
    </body>
 </html>