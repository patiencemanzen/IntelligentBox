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
                    <div class="course-name">Support small scale ICT projects</div>
                    <div class="course-short-desc">
                        Contracted date when activities begin.
                        When actions begin pertaining to a contract.
                        A contractor must begin work on project on the commencement date.
                    </div>
                    <div class="lessons-count">2 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/ict-projects-for-social-awareness-1-638.jpg" alt="" width="100%" height="100%"></div>
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
                            <p>
                                Contracted date when activities begin.
                                When actions begin pertaining to a contract.
                                A contractor must begin work on project on the commencement date.
                                In project commencement, three elements are to be considered: 
                                <ul>
                                    <li>Observe business opportunity to ensure the project objectives are understood in accordance with the project set goals. </li>
                                    <li>Identify stakeholders and gather requirements in accordance with the project specifications. </li>
                                    <li>Prepare of a project charter or project proposal in reference with the project sponsor requirements </li>
                                </ul>
                            </p>
                            <div class="mt-2">
                                <span class="title-ph">What are the 5 phases of a project? </span>
                                <p>The process of directing and controlling a project from start to finish may be further divided into 5 basic phases: </p>
                                <ul>
                                    <li>Project conception and initiation. ... </li>
                                    <li>Project definition and planning. ... </li>
                                    <li>Project launch or execution. ... </li>
                                    <li>Project performance and control. ... </li>
                                    <li>Project close </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">What are the five stages of project management? </span>
                                <p>Developed by the Project Management Institute (PMI), the five phases of project management include
                                    conception and initiation, planning, execution, performance/monitoring, and project close. </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">What does project completion mean? </span>
                                <p><span class="title-ph">DEFINITION</span> of <span class="title-ph">'Project Completion Restriction'</span> A type of clause, seen most often in municipal bond
                                    indentures, which requires the issuing party to sell debt securities (often in the form of revenue bonds) to finance
                                    the full completion of a particular project. </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">What are the 5 phases of IT projects? </span>
                                <p>Dividing your project management efforts into these five phases can help give your efforts structure and
                                    simplify them into a series of logical and manageable steps. </p>
                                <ul>
                                    <li>Project Initiation. ... </li>
                                    <li>Project Planning. ... </li>
                                    <li>Project Execution. ... </li>
                                    <li>Project Monitoring and Control. ... </li>
                                    <li>Project Closure. </li>
                                </ul>    
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">What do you mean by project life cycle? </span>
                                <p>
                                    All projects can be mapped to the following simple life cycle structure: starting the project, organizing and
                                    preparing, carrying out the work, and closing the project. This is known as a fourphase life cycle and the phases
                                    are usually referred to as: initiation, planning, execution, and closure. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">How do I successfully execute a project? </span>
                                <p>
                                    Grace under pressure is always an essential, but below are seven other key ingredients to lead a project to
                                    success: 
                                </p>
                                <ol type="1">
                                    <li>Clearly define the scope of your project. </li>
                                    <li>Carefully select the members of your team. </li>
                                    <li>Outline your goals and keep them SMART. </li>
                                    <li>Manage your data. </li>
                                    <li>Monitor progress daily.</li>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">7 Key Ingredients to Successful Project Execution and Completion  </span>
                                <p>
                                    Spearheading a project isn’t a walk in the park. You would be responsible for its planning, execution and
                                    completion, as well as the aggregation of separate tasks by teams and individuals into a cohesive whole. Grace
                                    under pressure is always an essential, but below are seven other key ingredients to lead a project to success: 
                                </p>
                                <img src="img_SFDLT_5/small_project1.png" alt="Key Ingredients to Successful Project">
                                <ol type="1">
                                    <li>Clearly define the scope of your project. </li>
                                    <li>Carefully select the members of your team. </li>
                                    <li>Outline your goals and keep them SMART. </li>
                                    <li>Manage your data. </li>
                                    <li>Monitor progress daily. </li>
                                    <li>Engender internal motivation in your team. </li>
                                    <li>Manage your resources wisely and prudently. </li>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Clearly define the scope of your project </span>
                                <p>
                                    We know that a problem or in this case, the project’s scope well stated is half-solved. No matter how you do it,
                                    it pays to be clear about your objectives, scope, budget, and methodology right out of the gate. One way to do
                                    this is through a meeting or forum, depending on who your project is ultimately going to serve.
                                    For example, you’re tasked to build a website for a particular company. You should then confer with the
                                    company’s decision-makers to know what they want their website to include, including how they would like
                                    the information to be presented, the overall tone or theme of the web pages, among others. Or if you’d like to
                                    build an app specifically for people who are differently abled, you might want to meet with a focus group
                                    comprised of special education teachers, psychologists, and other learning specialists. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Carefully select the members of your team </span>
                                <p>Once you’ve clearly defined the scope of the project, identifying the talents needed to execute your vision
                                    becomes easier. Carefully select the individuals who will make up your team, and delegate tasks and activities
                                    to people best suited for each. Proper task delegation can come off as a show of confidence in your team
                                    members’ inherent abilities, which then boosts morale and becomes instrumental in bringing about the best
                                    possible project results – a domino effect, if you will. </p>

                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Outline your goals and keep them SMART </span>
                                <p>
                                    Having a clear idea of what to expect for a final product allows you to create short-term goals. Outline goals
                                    that are specific, measurable, attainable, realistic and timely. After delegating the appropriate tasks to your team
                                    members, have each of them list down subtasks that will serve as milestones towards their final goal, and then,
                                    let them set their own deadlines for each milestone.
                                    These deadlines, of course, have to coincide with the project’s overall time targets. Going back to the example
                                    of designing an app for children with learning disabilities, a SMART goal could be: To create a questionnaire
                                    with 10 questions probing into the needs of dyslexic children in Kindergarten-level arithmetic by November
                                    30, 2014. 
                                </p>
                                <img src="img_SFDLT_5/small_project2.png" alt="Outline your goals and keep them SMART">
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Manage your data  </span>
                                <p>
                                    Data storage is getting more and more affordable and more easily accessible. However, with easier accessibility,
                                    security issues arise. While most cloud-based data management solutions keep a close eye on data security,
                                    which is one of their major selling points, things can sometimes get out of hand. To be doubly sure, it’s
                                    imperative that you manage file permissions, document ownerships, and monitor data versions on a consistent
                                    basis. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Monitor progress daily   </span>
                                <p>
                                    Being aware of project, team and individual deadlines is a must to continually propel a project forward. Sending
                                    out regular status updates through face-to-face/virtual meetings or via an enterprise social tool – like
                                    Comindware Team Network, which is the collaboration framework on which Comindware Project is founded
                                    – ensures everyone has a big-picture view of the project’s progress and how each individual’s contribution fits
                                    into the whole. A tracker is a convenient way to keep abreast of important dates, like the target versus
                                    completion date of each short-term goal.
                                    Setting up alerts for items that are nearing their scheduled dates of completion, as well as those that have fallen
                                    behind schedule, is also recommended. 
                                </p>

                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Engender internal motivation in your team  </span>
                                <p>
                                    When it comes to motivating teams, awarding members for good performance takes the cake over punishing
                                    those that underperform. As each team member achieves a milestone, recognize their accomplishments through
                                    team R&R (rewards and recognition) sessions, or even one-onone, as knowing their contributions are valued
                                    by the company makes people more inclined to perform.
                                    Also, it’s worth noting that some individuals may like the attention of being acknowledged publicly, and some
                                    prefer to have their accomplishments recognized by their leaders privately. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Manage your resources wisely and prudently </span>
                                <p>Book or acquire the resources you will need before diving headfirst into the project. Resources include budget
                                    allocation, venues in the case of focus groups, conferences or events you’ll need to hold, tools that your team
                                    members will require, and human resources in the case of thirdparty specialists and consultants. Booking
                                    resources ahead of time can also help you more easily manage your project’s budget. </p>

                            </div>
                            <div class="mt-2">
                                <span class="title-ph">The Four Phases of Project Management </span>
                                <p>
                                    Whether you’re in charge of developing a website, designing a car, moving a department to a new facility,
                                    updating an information system, or just about any other project (large or small), you’ll go through the same four
                                    phases of project management: <span class="title-ph">planning,</span> <span class="title-ph">build-up,</span> <span class="title-ph">implementation,</span> and <span class="title-ph">closeout.</span> Even though the phases
                                    have distinct qualities, they overlap.
                                    For example, you’ll typically begin planning with a ballpark budget figure and an estimated completion date.
                                    Once you’re in the build-up and implementation phases, you’ll define and begin to execute the details of theproject plan. That will give you new information, so you’ll revise your budget and end date in other words, do
                                    more planning according to your clearer understanding of the big picture.
                                    Here’s an overview of each phase and the activities involved.
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Planning: How to Map Out a Project </span>
                                <p>
                                    When people think of project planning, their minds tend to jump immediately to scheduling but you won’t even
                                    get to that part until the build-up phase. Planning is really about defining fundamentals: what problem needs
                                    solving, who will be involved, and what will be done. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Determine the real problem to solve  </span>
                                <p>
                                    Before you begin, take time to pinpoint what issue the project is actually supposed to fi x. It’s not always
                                    obvious. Say the CIO at your company has asked you, an IT manager, to develop a new database and data entry
                                    system. You may be eager to jump right into the project to tackle problems you have struggled with firsthand.
                                    But will that solve the company’s problem? To increase the project’s chances of success, you must look beyond
                                    the symptoms you have observed “We can’t get the data out fast enough” and “I have to sift through four
                                    different reports just to compile an update on my clients’ recent activity” to find the underlying issues the
                                    organization is trying to address. Before designing the database, you should ask what type of data is required,
                                    what will be done with it, how soon a fix is needed, and so on. If you don’t, you’ll run the risk of wasting time
                                    and money by creating a solution that is too simplistic, too complicated, or too late or one that doesn’t do what
                                    users need it to do. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Identify the stakeholders  </span>
                                <p>
                                    The real problem will become even clearer once you figure out who all your stakeholders are that is, which
                                    functions or people might be affected by the project’s activities or outcomes, who will contribute resources
                                    (people, space, time, tools, and money), and who will use and benefit from the project’s output. They will work
                                    with you to spell out exactly what success on the project means. Have them sign off on what they expect at the
                                    end of the project and what they are willing to contribute to it. And if the stakeholders change midstream, be
                                    prepared not only to respond to the new players but also to include all the others in any decision to redirect the
                                    project. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Define project objectives </span>
                                <p>
                                    One of your most challenging planning tasks is to meld stakeholders’ various expectations into a coherent and
                                    manageable set of goals. The project’s success will be measured by how well you meet those goals. The more
                                    explicitly you state them at the outset, the less disagreement you will face later about whether you have met
                                    expectations.
                                    In the planning phase, however, much is still in flux, so you’ll revise your objectives later on, as you gather
                                    information about what you need to achieve. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Determine scope, resources, and major tasks  </span>
                                <p>
                                    Many projects fail either because they bite off more than they can chew and thus grossly underestimate time
                                    and money or because a significant part of the work has been overlooked
                                    (ignored). One tool that can help you avoid these problems is the Work Breakdown Structure (WBS), which
                                    aids in the process of determining scope and tasks and developing estimates. The underlying concept is to
                                    subdivide complex activities into their most manageable units. To create a WBS: 
                                </p>
                                <ul>
                                    <li>Ask, “What will have to be done in order to accomplish X?”</li>
                                    <li>Continue to ask this question until your answer is broken down into tasks that cannot be subdivided further. </li>
                                    <li>Estimate how long it will take to complete these tasks and how much they will cost in terms of dollars and person-hours</li>
                                </ul>
                                <p>
                                    As a result of your thoughtful planning, you’ll be able to rough out an estimate of how many people with what
                                    skills you’ll need for the project. You’ll also have a good idea of how long the project will take.
                                    <span class="title-ph">Prepare for trade-offs</span>
                                    Time, cost, and quality are the three related variables that typically dictate what you can achieve.
                                    <span class="title-ph">Quality = Time + Cost</span>
                                    Change any of these variables, and you change your outcome. Of course, such alterations often occur in the
                                    middle of a project. If your time frame for developing a new database management system is suddenly cut in
                                    half, for instance, you will need to either employ twice the number of people or be satisfied with a system that
                                    isn’t as robust as originally planned. Don’t let bells and whistles get in the way of mission-critical activities.
                                    The key is to establish a level of quality that meets your stakeholders’ needs.
                                    Knowing from the start which variable is most important to each stakeholder will help you make the right
                                    changes along the way. It’s your responsibility to keep everyone informed of any tweaks and tell them what the
                                    consequences will be in terms of time, cost, and quality. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Build-Up: How to Get the Project Going </span>
                                <p>
                                    In the build-up phase, you bring your team together. Time estimates become schedules. Cost estimates become
                                    budgets. You gather your resources. You get commitments, and you make them. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Assemble your team</span>
                                <p>
                                    Your first task in this phase is to assess the skills needed for the project so you can get the right people on board.
                                    This assessment flows directly from the Work Breakdown Structure you did during the planning phase, in which
                                    you developed your best estimate of the necessary tasks and activities. You may need to bring in people either
                                    temporary workers or employees from other parts of the organization who have certain skills. Don’t forget to
                                    budget time and money for training to cover any gaps you can’t fill with people who are already up to speed. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Plan assignments</span>
                                <p>
                                    If you’ve built your own team, you’ve probably already decided who will do what. Or, if you’ve inherited a
                                    team but worked with the members before, you can still make the assignments yourself. But if a new, unfamiliar
                                    group is assigned to you, list the people on the team, list the skills required, and talk to each team member about
                                    her own skill set before you match people to tasks. This approach starts the process of team communication and
                                    cohesion. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Create the schedule </span>
                                <p>
                                    It would be nice if you could tally up the to-dos and say, “With the resources we have, we will need this much
                                    time” and then get exactly what you’ve asked for. But the reality is, most projects come with fixed beginning
                                    and end dates, regardless of available resources.
                                    To create a realistic schedule within those constraints, work backward from any drop-dead deadlines you know
                                    about that is, dates that cannot be changed to see when your deliverables must be ready. For instance, if an
                                    annual report is due for a shareholder’s meeting and you know it takes the printer two weeks, then all the final
                                    art and copy for the report must be ready to go to the printer two weeks before the meeting. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph"> Hold a kickoff meeting </span>
                                <p>
                                    As soon as you’ve chosen your players and set the schedule, bring everyone together for a kickoff meeting. Go
                                    over the project’s plan and objectives with the group in as much detail as possible, and review the proposed
                                    time frame. Be sure to clarify roles and responsibilities. Encourage people to point out spots where problems
                                    may occur and where improvements could be made. Take all suggestions seriously especially in areas where
                                    the team members have more experience than you do and adjust your estimates and activities accordingly. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Develop a budget </span>
                                <p>
                                    The first question to ask when developing a budget is, “What will it take to actually do the work?” To determine
                                    your costs, break down the project into the following categories: personnel, travel, training, supplies, space,
                                    research, capital expenditures, and overhead.
                                    After you’ve entered the figures from these standard categories into the budget, ask a trusted adviser what you
                                    forgot. Did you overlook insurance? Licensing fees? Costs for legal or accounting support?
                                    A budget, no matter how carefully planned, is just your best guess. Expect actual numbers to deviate from
                                    original estimates, and stay as flexible as possible within your limitations of time, quality demands, and total
                                    money available. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph"> Implementation: How to Execute the Project </span>
                                <p>
                                    It’s time to put the plan into action. The implementation phase is often the most gratifying, because work
                                    actually gets done, but it can also be the most frustrating. The details can be tedious and, at times, overwhelming. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Monitor and control process and budget </span>
                                <p>
                                    Whether you have a formal project control system in place or you do your own regular checkups, try to maintain
                                    a big-picture perspective so that you don’t become engulfed by details and petty problems. Project-monitoring
                                    software systems can help you measure your progress. 
                                </p>
                                <p>
                                    No single approach works for all projects. A system that’s right for a large project can easily swamp a small
                                    one with paperwork, whereas a system that works for small projects won’t have enough muscle for a big one.
                                    Respond quickly to changes in data or information as they come in, and look for early signs of problems so you
                                    can initiate corrective action. Otherwise, all you are doing is monitoring, not exercising control. Make it clear
                                    to your team that your responses to problems that arise won’t do any good if you don’t receive timely
                                    information. (But don’t jump in to fix things too quickly allow your team members to work out small problems
                                    on their own. 
                                </p>
                                <p>
                                    Watch the real numbers as they roll in to ensure that they are matching the budgeted amounts. Be ready to
                                    explain why extra costs are unavoidable. Common ones that sneak up on projects include increased overtime
                                    to keep things on schedule, consultant fees to resolve unforeseen problems, and fluctuations in currency
                                    exchange rates. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Report progress </span>
                                <p>
                                    Stakeholders will generally want regular updates and status reports. Consult with them to see how much
                                    information they’d like and in what format. Don’t hide or downplay problems as they come up, or you can
                                    easily transform them into crises. If you keep your stakeholders informed, they may turn out to be good
                                    resources when issues do arise. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Hold weekly team meetings </span>
                                <p>
                                    When you’re immersed in project details, it’s easy to be diverted from critical activities to side paths that waste
                                    time. You and your team can stay focused by meeting once a week and periodically asking yourselves what’s
                                    essential to the project’s success.
                                    Set clear agendas for your meetings. Try structuring them around production numbers, revenue goals, or
                                    whatever other metrics you’ve chosen to gauge performance. Many of your agenda items will naturally stem
                                    from targets the project has missed, met, or exceeded: For instance, you may need to discuss as a group whether
                                    to incorporate more travel into the project because you’ve noticed a decline in productivity at a satellite office.
                                    Or you might ask the product designers on your team to continue gathering among themselves on a biweekly
                                    basis because they’ve doubled their creative output since they’ve begun doing so. Keep the momentums going
                                    by following up each week on any to-dos and connecting them with the metrics for overall performance. Also,
                                    celebrate small successes along the way that will rekindle the team’s enthusiasm as you make progress toward
                                    your larger objectives. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Manage problems </span>
                                <p>
                                    Some problems have such far-reaching consequences that they can threaten the success of the entire project.
                                    The most common are: time slippage, scope creep, quality issues, and people problems. 
                                    Pay attention to small signs of emerging problems, such as a team member’s increased tension and irritability,
                                    loss of enthusiasm, or inability to make decisions. When you see signs like these, get to the heart of the problem
                                    quickly and deal with it. Don’t let it grow from a small irritant into a disaster. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Closeout: How to Handle End Matters  </span>
                                <p>
                                    Though some projects feel endless, they all, eventually, come to a close. How do you, as project manager, know
                                    when to make that happen? And how do you go about it? 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Evaluate project performance </span>
                                <p>
                                    Before closing out your project, your team needs to meet its goals (or determine, along with key stakeholders,
                                    that those goals no longer apply). Compare your progress with the scope everyone agreed on at the beginning.
                                    That will tell you how well the project has performed—and if there’s still work to do. When you discuss your
                                    findings with your stakeholders, make sure you reach consensus with them on how “finished” the project is.
                                    Keep your scope front and center so everyone uses the same yardstick to measure success. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Close the project </span>
                                <p>
                                    The steps you take to wrap things up will depend on whether your team assumes ownership of its own
                                    deliverables, hands them off to others in the organization, or must terminate the project altogether.
                                    If all has gone as planned with your project, then it’s time for celebration. Even if, as is more likely, there are
                                    some rough spots along the way the project takes longer than expected, the result is less than hoped for, or the
                                    costs overtake your estimates it’s still important to recognize the team’s efforts and accomplishments. 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Debrief with the team</span>
                                <p>
                                    No matter what the outcome, make sure you have scheduled a post-evaluation time to debrief and document the
                                    process so that the full benefits of lessons learned can be shared. The postevaluation is an opportunity for
                                    discovery, not for criticism and blame. Team members who fear they’ll be punished for past problems may try
                                    to hide them rather than help find better ways of handling them in the future. What is developing a project plan? 
                                </p>
                                <p>
                                    <span class="title-ph">Develop a Project Plan.</span> A project plan takes into account the approach the team will take and helps the team
                                    and stakeholders document decisions made regarding the objective, scope, schedule, resources, and
                                    deliverables. What are the steps to planning a project? 
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="title-ph">Project Management Basics: 6 Steps to a Foolproof Project Plan </span>
                                <p>
                                    <ul>
                                        <li> Identify & Meet with Stakeholders.</li>
                                        <li> Set & Prioritize Goals. </li>
                                        <li> Define Deliverables.</li>
                                        <li> Create the Project Schedule. </li>
                                        <li> Identify Issues and Complete a Risk Assessment. </li>
                                        <li> Present the Project Plan to Stakeholders. </li>
                                    </ul>
                                </p>
                                <p>What are the key elements of a project plan? </p>
                                <span class="title-ph">But, project success will depend on a solid plan, one that includes 8 essential elements: </span>
                                <ul>
                                    <li>Identification of stakeholder's needs. </li>
                                    <li>Smart project objectives.</li>
                                    <li>Clear deliverables and deadlines. </li>
                                    <li>A detailed project schedules. </li>
                                    <li>Clearly defined roles. </li>
                                    <li>Project costs</li>
                                    <li>A communication plan. </li>
                                    <li>The right systems and processes. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: SUPPORT PROJECT COMMENCEMENT </div><hr>
                            <div>
                                <p>
                                    “Close Project or Phase is the process of finalizing all activities for the project, phase, or contract. The key
                                    benefits of this process are the project or phase information is archived, the planned work is completed, and
                                    organizational team resources are released to pursue new endeavors.
                                    This process is performed once or at predefined points in the project.
                                    Closing a project is not like switching a computer off. There is still a lot to be done, and a lot that can go wrong.
                                    The Close Project or Phase process is another one where the Project Manager takes centre stage and will be
                                    checking that that all project work is completed and that the project has met its objectives, including work and
                                    objectives that were added along the way as the result of approved change requests.
                                    Just a reminder here that the type of “phase” mentioned here is a mini-project inside the main project.
                                    The activities necessary for the administrative closure of the project or phase include: 
                                </p>   
                                <ul>
                                    <li>Actions and activities necessary to satisfy completion or exit criteria for the phase or project such as: 
                                        <ul>
                                            <li>Making certain that all documents and deliverables are up-to-date and that all issues are resolved; </li>
                                            <li>
                                                Confirming the delivery and formal acceptance of deliverables by the customer; o
                                                Ensuring that all costs are charged to the project; o Closing project accounts; o Reassigning
                                                personnel. Depending upon the organization type (we will be covering organization types later in
                                                the course) the project staff will be assigned to another project, or they will return to their usual jobs,
                                                or their contracts will be finalized and they will leave the organization to take up the next contract.
                                                o Dealing with excess project material. This can mean dealing with the materials and equipment that
                                                is lying around after the project has finished. For example, after completing a building there will be
                                                piles of bricks, sands, roof tiles, off cuts of wood, bags of cement, and so on. All this needs to be
                                                dealt with. Some can be returned to stock, machines will be returned to the store, or returned to the
                                                hire company, and material that can’t be reused or recycled but be cleared away. o Reallocating
                                                project facilities, equipment, and other resources; and o Elaborating the final project reports as
                                                required by organizational policies. We are examining the activities necessary for administrative
                                                closure of a project phase. These would also include: 
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Activities needed to: 
                                        <ul>
                                            <li>Collect project or phase records, o Audit project success or failure, </li>
                                            <li>Manage knowledge sharing and transfer, o Identify lessons learned. Please note that you should
                                                be recording lessons learned as they are learned, rather than waiting until the end, because you will
                                                have forgotten them. o Archive project information for future use by the organization. </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Actions and activities necessary to transfer the project’s products, services, or results to the next phase
                                        or to production and/or operations. The whole point of the project is to create a unique product, service,
                                        or result. But that means you have to hand them over. In most projects, deliverable will be completed
                                        and handed over throughout the project, rather than doing it all in one hit. The one hit problem is you
                                        may discover a serious, previously undetected fault in the dying stages of the project. This is a very bad
                                        time to discover a serious fault. 
                                    </li>
                                    <li>
                                        Collecting any suggestions for improving or updating the policies and procedures of the organization,
                                        and sending them to the appropriate organizational unit. This will probably overlap with recording
                                        lessons learned. Remember to be as specific and focused as possible. Use metrics where possible,
                                        because if you can’t measure it, you can’t tell if it has been improved. 
                                    </li>
                                    <li><span class="title-ph">Measuring stakeholder satisfaction.</span> The Close Project or Phase process also establishes the procedures to investigate and document the
                                        reasons for actions taken if a project is terminated before completion. In order to successfully achieve
                                        this, the project manager needs to engage all the proper stakeholders in the process. My preferred way
                                        to do this is by questionnaire and survey.
                                        And “no”, questionnaire and survey don’t mean the same thing. The questionnaire is the question and
                                        answer sheet, and a survey is a tool for analyzing the results. </li>
                                </ul>
                                <div class="mt-2">
                                    <h4 class="title-ph">CLOSE PROJECT OR PHASE: INPUTS</h4>
                                    <ol type="1">
                                        <li><span class="title-ph">PROJECT CHARTER</span> :: The project charter documents the project success criteria, the approval requirements, and who will sign
                                            off on the project. My tip is, specify the “office” rather than the person. For example, “This document
                                            to be approved by the area Financial Controller”, rather than, “This document must be approved by
                                            Efrem Zimbalist Jr”, because in a number of months’ time, Efrem may have left, changed position or
                                            gone on leave. As I mentioned earlier, the
                                            problem with common sense on projects is that it isn’t very common. </li>
                                        <li><span class="title-ph">PROJECT MANAGEMENT PLAN </span>:: All components of the project management plan are an input to this process. </li>
                                        <li><span class="title-ph">PROJECT DOCUMENTS</span>:: Project documents are used on the project but are not considered part of the Project management plan. </li>
                                        <li><span class="title-ph">BUSINESS DOCUMENTS</span>:: What are business documents? They are documents created outside the project, which result in a project
                                            being initiated. The Project Manager uses them, but does not update them.
                                            Business documents include: o Business case. The business case documents the business need and the
                                            cost benefit analysis that justify the project. And now is the stage to check if the justification was
                                            valid. o Benefits management plan. The benefits management plan outlines the target benefits of the project. This will also be used to determine when to confirm when the benefits are to be verified
                                            as achieved, who will check them and the criteria to be used. </li>
                                        <li><span class="title-ph">AGREEMENTS</span>:: In this case, “agreements” means the contracts that were issued for the project and recorded in the
                                            Procurement Management Plan. The actual requirements for formal procurement closure are included
                                            in the Procurement Management Plan, and can be checked against the terms and conditions of the
                                            contracts. </li> 
                                        <li><span class="title-ph">PROCUREMENT DOCUMENTATION</span>:: To close the contract, all procurement documentation is collected, indexed, and filed. </li>  
                                        <li><span class="title-ph">ORGANIZATIONAL PROCESS ASSETS</span>:: The organizational process assets that can influence the Close Project or Phase process include: 
                                            <ul>
                                               <li> Project or phase closure guidelines or requirements (e.g., lessons learned, final project audits,
                                                project evaluations, product validations, acceptance criteria, contract closure, resource
                                                reassignment, team performance appraisals, and knowledge transfer). </li>
                                                <li>
                                                    Configuration management knowledge base containing the versions and baselines of all official
                                                    organizational standards, policies, procedures, and any project documents. 
                                                </li>     
                                            </ul>
                                        </li>    
                                    </ol>
                                </div>

                                <div class="mt-2">
                                    <h4 class="title-ph">CLOSE PROJECT OR PHASE: TOOLS AND TECHNIQUES</h4>
                                    <ol type="1">
                                        <li><span class="title-ph">EXPERT JUDGMENT</span> :: Expertise should be considered from individuals or groups with specialized knowledge or training in the following topics:
                                            <ul>
                                                <li>Management control</li>
                                                <li>Audit</li>
                                                <li>ICT</li>
                                                <li>Legal and procurement, and Legislation and regulations. </li>
                                            </ul>
                                        </li>
                                        <li><span class="title-ph">DATA ANALYSIS </span>:: Data analysis techniques that can be used in project closeout include: o Document analysis. This is used
                                            to extract information to record in the Lessons Learned. o Regression analysis. This technique
                                            analyzes the interrelationships between different project variables that contributed to the project
                                            outcomes to improve performance on future projects. Sometimes this can be combined with
                                            Sensitivity Analysis techniques, which involves re-examining the interrelationships, which keeping
                                            a single variable constant throughout the analysis, then repeating for each variable, to see which
                                            variables had the greatest impact. o Trend analysis can be used to validate the models used in the
                                            organization and to implement adjustments for future projects. This is important because there is a
                                            tendency to blindly trust business models, even if some weaknesses are beginning to show. The
                                            models need to be checked against reality, and then be adjusted or replaced. o Variance analysis can
                                            be used to improve the metrics of the organization by comparing what was initially planned against
                                            the end result.  </li>
                                        <li><span class="title-ph">MEETINGS</span>:: Meetings, such as close-out reporting meetings, customer wrap-up meetings, lessons learned meetings,
                                            and celebration meetings, may be used to confirm that the deliverables have been accepted, to validate that the exit criteria have been met, to formalize the completion of the contracts, to evaluate the
                                            satisfaction of the stakeholders, to gather lessons learned, to transfer knowledge and information from
                                            the project, and to celebrate success. However, it has been my experience that a celebration meeting
                                            works best if held in a restaurant. </li>
                                    </ol>
                                </div>

                                <div class="mt-2">
                                    <h4 class="title-ph">CLOSE PROJECT OR PHASE: OUTPUTS</h4>
                                    <ol type="1">
                                        <li><span class="title-ph">PROJECT DOCUMENTS UPDATES</span> :: All project documents may be updated and marked as final versions as a result of project closure and
                                            archived in the organizations records management system. 
                                        </li>
                                        <li><span class="title-ph">FINAL PRODUCT, SERVICE, OR RESULT TRANSITION </span>:: A product, service, or result, once delivered by the project, may be handed over to a different group or
                                            organization that will operate, maintain, and support it throughout its life cycle.
                                            This output refers to this transition of the final product, service, or result that the project was authorized
                                            to produce (or in the case of phase closure, the intermediate product, service, or result of that phase)
                                            from one team to another. </li>
                                        <li><span class="title-ph">FINAL REPORT</span>:: “The final report provides a summary of the project performance. It can include information such as: o
                                            Summary level description of the project or phase. o Scope objectives, the criteria used to evaluate the
                                            scope, and evidence that the completion criteria were met.  
                                            <ul>
                                                <li>Quality objectives, the criteria used to evaluate the project and product quality, the verification
                                                    and actual milestone delivery dates, and reasons for variances. </li>
                                                <li>Cost objectives, including the acceptable cost range, actual costs, and reasons for any variances.
                                                    o Summary of the validation information for the final product, service, or result. o Schedule
                                                    objectives including whether results achieved the benefits that the project was undertaken to
                                                    address. If the benefits are not met at the close of the project, indicate the degree to which they
                                                    were achieved and estimate for future benefits realization. o Summary of how the final product,
                                                    service, or result achieved the business needs identified in the business plan. If the business
                                                    needs are not met at the close of the project, indicate the degree to which they were achieved
                                                    and estimate for when the business needs will be met in the future. o Summary of any risks or
                                                    issues encountered on the project and how they were addressed.” </li>    
                                            </ul>
                                        </li>
                                    </ol>
                                    <span class="title-ph">What is the project closure? </span>
                                    <p>The Project Closure Phase is the fourth and last phase in the project life cycle.
                                        Project Closure involves handing over the deliverables to your customer, passing the documentation to the
                                        business, cancelling supplier contracts, releasing staff and equipment, and informing stakeholders of the closure
                                        of the project. </p>
                                    <span class="title-ph">What is the project closure report? </span>  
                                    <p>
                                        The Project Closure Report is the final document produced for the project and is used by senior management
                                        to assess the success of the project, identify best practices for future projects, resolve all open issues, and
                                        formally close the project.
                                        Project Closure Processes. This represents the formal completion of the project deliverables and their transfer
                                        to the final beneficiaries usually internal or external customers. 
                                    </p>  
                                    <span class="title-ph">Project Closure Phase </span>
                                    <p>
                                        The Project Closure Phase is the fourth and last phase in the project life cycle. In this phase, you will formally
                                        close your project and then report its overall level of success to your sponsor. Project Closure involves handing
                                        over the deliverables to your customer, passing the documentation to the business, cancelling supplier contracts,
                                        releasing staff and equipment, and informing stakeholders of the closure of the project.
                                        After the project has been closed, a Post Implementation Review is completed to determine the projects
                                        success and identify the lessons learned.
                                        The first step taken when closing a project is to create a Project Closure Report. It is extremely important that
                                        you list every activity required to close the project within this Project Closure report, to ensure that project
                                        closure is completed smoothly and efficiently. Once the report has been approved by your sponsor, the closure
                                        activities stated in the report are actioned.
                                        Between one and three months after the project has been closed and the business has begun to experience the
                                        benefits provided by the project, you need to complete a Post Implementation Review. This review allows
                                        the business to identify the level of success of the project and list any lessons learned for future projects. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Support Small scale ICT projects</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1: Introduction</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: SUPPORT PROJECT COMMENCEMENT</a>
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