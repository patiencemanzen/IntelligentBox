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
                    <div class="course-name">Set database server</div>
                    <div class="course-short-desc">
                        A server is a computer program that provides a service to another computer programs (and its
                        user). In a data center, the physical computer that a server program runs in is also frequently
                        referred to as a server. That machine may be a dedicated server or it may be used for other
                        purposes as well.
                    </div>
                    <div class="lessons-count">7 lessons</div>
                    <div class="rate">4.6 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></div>
                </div>
                <div class="course-image">
                    <div class="c-image"><img src="../../Images/course-img/setup-database-server.jpg" alt="backend application" width="100%" height="100%"></div>
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
                        <div class="lesson-title mt-2">Lesson 1: Current and common used Windows Servers</div><hr>
                        <div>
                            <span class="title-ph">1. Overview</span>
                                            
                            <p><span class="title-ph">A server </span> is a computer program that provides a service to another computer programs (and its
                                user). In a data center, the physical computer that a server program runs in is also frequently
                                referred to as a server. That machine may be a dedicated server or it may be used for other
                                purposes as well.</p>
                            <p>
                                <span class="title-ph">Windows Server</span> is a group of operating systems designed by Microsoft that supports enterpriselevel management, data storage, applications, and communications. Previous versions of
                                Windows Server have focused on stability, security, networking, and various improvements to
                                the file system.
                            </p>    
                            <p><span class="title-ph"> Server Core </span> is a minimal server installation option for the Windows Server 2008 R2 operating
                                system. Server Core provides a low-maintenance environment capable of providing core server
                                roles. Server Core is designed to provide an environment that reduces .A core is part of a CPU
                                that receives instructions and performs calculations, or actions, based on those instructions.</p>
                            <p><span class="title-ph">Server Core</span> is a minimal installation option introduced in Windows Server 2008 as a way to
                               run Windows Server with a limited set of features and with support for only certain server roles</p> 
                               
                            <div class="mt-3">
                                <span class="title-ph">2. Windows Server Editions</span>
                                <ul>
                                    <li><span class="title-ph">The Standard edition </span> is designed for small-to-medium-sized organizations. It allows
                                        you to run two instances of the server software in a virtual operating system on the
                                        licensed server. If you need to run additional virtual instances, you can acquire licenses
                                        that are more standard.</li>
                                    <li><span class="title-ph">The Essentials edition is designed for small organizations with up to 25 users and 50
                                        devices. It allows only one instance of the server software to be run in the physical</li>    
                                </ul>
                            </div>  
                            <div class="mt-3">
                                <span class="title-ph">3. Windows Server Roles services</span>
                                <p>A role is a primary duty that a server performs</p>
                                <ul>
                                    <li>Active Directory Domain Services (AD DS) : Active Directory Domain Services (AD
                                        DS) is a server role in Active Directory that allows admins to manage and store
                                        information about resources from a network, as well as application data, in a distributed
                                        database. AD DS can also help admins manage a network's elements (computers and end
                                        users) and reorder them into a custom hierarchy</li>
                                    <li>Active Directory Lightweight Directory Services (AD LDS) : s a light-weight
                                        implementation of AD DS. ... It provides a Data Store for storage of directory data and a
                                        Directory Service with an LDAP Directory Service Interface.</li>   
                                    <li>DHCP Server : A DHCP Server is a network server that automatically provides and
                                        assigns IP addresses, default gateways and other network parameters to client devices. It
                                        relies on the standard protocol known as Dynamic Host Configuration Protocol or DHCP
                                        to respond to broadcast queries by clients</li>     
                                    <li>DNS Server : A DNS server is a computer server that contains a database of public IP
                                        addresses and their associated hostnames, and in most cases serves to resolve, or
                                        translate, those names to IP addresses as requested. DNS servers run special software and
                                        communicate with each other using special protocols.</li>   
                                    <li>File Services: file server is a computer responsible for the central storage and
                                        management of data files so that other computers on the same network can access the
                                        files.</li>  
                                    <li>Hyper-V : Hypervisor technology is software on which multiple virtual machines can
                                        run, with the hypervisor layer controlling the hardware and allocating resources to each
                                        VM operating system. Hyper-V is the virtualization platform that is included in Windows
                                        Server</li>
                                    <li>Print Services: is a server role in Windows Server 2008 R2 that enables you to share
                                        printers and scanners on a network, set up print servers and scan servers, and centralize
                                        network printer and scanner management tasks.</li> 
                                    <li>Streaming Media Services: is transmitted by a server application and received and
                                        displayed in real-time by a client application called a media player.</li> 
                                    <li>Web Server Internet Information Server (IIS): is an extensible web server created by
                                        Microsoft for use with the Windows NT family. IIS supports HTTP, HTTP/2, HTTPS,
                                        FTP, FTPS, SMTP and NNTP.</li>   
                                    <li>Active Directory Certificate Services: is an Active Directory tool that lets administrators
                                        customize services in order to issue and manage public key certificates. ... Network
                                        Device Enrollment Service - lets network devices without domain accounts retrieve
                                        certificates</li>  
                                    <li>Windows Server Update Server (WSUS): is a free add-on application offered by
                                        Microsoft that can download and manage updates and patches for Windows Server
                                        operating systems. It is the successor of the previous Software Update Services (SUS)
                                        program.</li>
                                    <li>Active Directory Rights Management Server: is a Microsoft Windows security tool that
                                        provides persistent data protection by enforcing data access policies. The server
                                        component is made up of multiple web services that run on a Microsoft server.</li>  
                                    <li>Remote Desktop Services Connection Broker: A remote desktop connection broker is
                                        software that allows clients to access various types of server-hosted desktops and
                                        applications.</li>
                                    <li>Licensing: A Windows Server client access license (CAL) is a license that allows
                                        customers to access Windows Server. CALs are used in conjunction with Microsoft
                                        Windows Server OS licenses to allow Users and/or Devices to access and utilize the
                                        services of that server OS.</li>    
                                    <li>Virtualization: means to create a virtual version of a device or resource, such as a server,
                                        storage device, network or even an operating system where the framework divides the
                                        resource into one or more execution environments.
                                        </li>                          
                                </ul>
                            </div> 
                            <div class="mt-3">
                                <span class="title-ph">4. Windows Server Features</span>
                                <p>A feature is something that helps a server perform its primary duty (Windows Backup,
                                    network load balancing).</p>
                                <p> Microsoft Windows Features on Demand is a feature that allows system administrators to
                                    add or remove roles and features in Windows 8 and Windows Server 2012, and later
                                    versions of the client and server operating system to alter the file size of those operating
                                    systems.</p>
                                <ul>
                                    <li>Microsoft .NET Framework 3.5 : NET is a programming framework created by Microsoft
                                        that developers can use to create applications more easily. ... So nobody besides
                                        developers would need a package like .NET, which provides applications with an orderly
                                        way to access databases, web services, and other communication tools</li>
                                    <li>Windows PowerShell: Windows PowerShell is a Windows command-line shell designed
                                        especially for system administrators. Windows PowerShell includes an interactive prompt
                                        and a scripting environment that can be used independently or in combination.</li>  
                                    <li>Background Intelligent Transfer Service (BITS) : is a component of Microsoft Windows
                                        XP and later iterations of the operating systems, which facilitates asynchronous,
                                        prioritized, and throttled transfer of files between machines using idle network
                                        bandwidth</li>  
                                    <li>BitLocker Drive Encryption</li>
                                    <li>BitLocker Network Unlock</li>    
                                    <li>BranchCache</li>  
                                    <li>Data Center Bridging</li>  
                                    <li>Enhanced Storage</li>
                                    <li>Failover Clustering</li>\
                                    <li>Multipath I/O</li>
                                    <li>Network Load Balancing</li>
                                    <li>Peer Name Resolution Protocol</li>
                                    <li>Quality Windows Audio Video Experience</li>
                                    <li>Remote Differential Compression</li>
                                    <li>Simple TCP/IP Services</li>
                                    <li>RPC over HTTP Proxy</li>
                                    <li>SMTP Server</li>
                                    <li>SNMP Service</li>
                                    <li>Telnet client</li>
                                    <li>Telnet server</li>
                                    <li>TFTP client</li>
                                    <li>Windows Internal Database</li>
                                    <li>Windows PowerShell Web Access</li>
                                    <li>Windows Process Activation Service</li>
                                    <li>Windows Standards-based Storage Management</li>
                                    <li>WinRM IIS extension</li>
                                    <li>WINS server</li>
                                    <li>WoW64 support</li>
                                </ul>        
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">5. Methods of removing feature files</span>
                                <p>
                                    Two methods are available for removing feature files from Windows Server in a Features on
                                    Demand configuration.
                                </p>
                                <ul>
                                    <li> The remove parameter of the Uninstall-WindowsFeature cmdlet lets you delete feature
                                        files from a server or offline virtual hard disk (VHD) that is running Windows Server
                                        2012 R2 or Windows Server 2012 . Valid values for the remove parameter are the names
                                        of roles, role services, and features.</li>
                                    <li>Deployment Image Servicing and Management (DISM) commands let you create custom
                                        WIM files that conserve disk space by omitting feature files that are either not needed, or
                                        can be obtained from other, remote sources.</li>    
                                </ul>
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">6. Remove feature files by using Uninstall-WindowsFeature</span>
                                <p>You can use the Uninstall-Windows Feature cmdlet both to uninstall roles, role services, and
                                    features from servers and offline VHDs that are running Windows Server 2012 R2 or Windows
                                    Server 2012 , and to delete feature files. You can both uninstall and delete the same roles, role
                                    services, and features in the same command if desired</p>
                                <p> When you delete feature files for a role, role service, or feature, roles, role services, and features
                                    that depend upon the files you are removing are also deleted. If you are deleting feature files for
                                    a role service or sub feature, and no other role services or sub features for the parent role or
                                    feature remain installed, then files for the entire parent role or feature are deleted. To view all
                                    feature files that would be deleted by the Uninstall-WindowsFeature -remove command, add the
                                    whatif parameter to the command to run it and view results without actually deleting feature
                                    files.</p> 
                                <span class="title-ph">To remove role and feature files by using Uninstall-WindowsFeature</span>  
                                <ol type="1">
                                    <li> Do one of the following to open a Windows PowerShell session with elevated user rights. if you are uninstalling roles and features from a remote server, you do not need to run
                                         Windows PowerShell with elevated user rights.
                                         <ul>
                                             <li>On the Windows desktop, right-click Windows PowerShell on the taskbar, and
                                                 then click Run as Administrator</li>
                                             <li>On the Windows start screen, right-click the Windows PowerShell tile, and then
                                                 on the app bar, click Run as Administrator.</li>
                                             <li>On a server that is running the Server Core installation option, type PowerShell
                                                 into a command prompt, and then press Enter.</li>       
                                         </ul>
                                    </li>
                                    <li>Type the following, and then press Enter.
                                        <p>Uninstall-WindowsFeature -Name <feature_name> -computerName <computer_name> -remove</p>
                                        <p> Example: Remote Desktop Licensing is the last remaining role service of Remote Desktop
                                            Services that is installed. The command uninstalls Remote Desktop Licensing, and then deletes
                                            feature files for the entire Remote Desktop Services role from the specified server, contoso_1.</p>
                                        <p>Uninstall-WindowsFeature -Name rdS-Licensing -computerName contoso_1 -remove</p>   
                                        <p> Example: In the following example, the command removes active directory Domain Services
                                            and Group Policy Management from an offline VHD. The role and feature are first uninstalled,
                                            then their feature files removed entirely from the offline VHD, Contoso.vhd</p> 
                                        <p>You must add the computerName parameter if you are running the cmdlet from a computer that
                                           is running Windows 8.1 or Windows 8.</p> 
                                           
                                        <p> if you enter the name of a VHD file from a network share, that share must grant Read and Write
                                            permissions to the computer account of the server that you selected to mount the VHD. Useronly account access is not sufficient. The share can grant Read and Write permissions to the
                                            everyone group to allow access to the VHD, but for security reasons, this is not recommended.
                                            Uninstall-WindowsFeature -Name AD-Domain-Services,GPMC -VHD
                                            C:\WS2012VHDs\Contoso.vhd -computerName ContosoDC1</p>   
                                    </li>
                                </ol>     
                            </div>
                            <div class="mt-3">
                                <span class="title-ph">What is RAID Windows Server?</span>
                                <p>RAID is a technology that is used to increase the performance and/or reliability of data storage.
                                    The abbreviation stands for Redundant Array of Inexpensive Disks. A RAID system consists of
                                    two or more drives working in parallel.</p>
                                <p>RAID (Redundant Array of Independent Disks, originally Redundant Array of Inexpensive
                                    Disks) is a data storage virtualization technology that combines multiple physical disk drive
                                    components into one or more logical units for the purposes of data redundancy, performance
                                    improvement, or both.</p>    
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section2">
                        <div class="content-course">
                            <div class="lesson-title mt-2">Lessons 2: Analyze data migration requirement </div><hr>
                            <div>
                                <span class="title-ph">Data migration requirements</span>
                                <p> Data migration is the process of transporting data between computers, storage devices or
                                    formats. It is a key consideration for any system implementation, upgrade or consolidation.</p>
                                <span class="title-ph">1.3.1 Operating system</span>   
                                <p> A server operating system, also called a server OS, is an operating system specifically designed
                                    to run on servers, which are specialized computers that operate within a client/server architecture
                                    to serve the requests of client computers on the network.</p> 
                                <p>Some common examples of server OSs include:</p>  
                                <ul>
                                    <li>Red Hat Enterprise Linux</li>
                                    <li>Windows Server</li>
                                    <li>Mac OS X Server</li>
                                </ul> 
                                <p>Some of the key features of a server operating system include:</p> 
                                <ul>
                                    <li>Ability to access the server both in GUI and command-level interface</li>
                                    <li>Execute all or most processes from OS commands</li>
                                    <li>Advanced-level hardware, software and network configuration services</li>
                                    <li>Install/deploy business applications and/or web applications</li>
                                    <li>Provides central interface to manage users, implement security and other administrative processes</li>
                                    <li>Manages and monitors client computers and/or operating systems</li>
                                </ul>
                                <div class="mt-3">
                                    <p><span class="title-ph">Operating system</span> Your existing physical or virtual target server can have any of the
                                        following Windows operating system editions.</p>
                                    <ul>
                                        <li>Windows Server 2008 or 2008 R2 Datacenter, Enterprise (i386, x64), Standard (i386,
                                            x64), Essential Business Server, Web Server, Foundation Server, Small Business Server,
                                            or Storage Server Edition</li>
                                        <li>Windows Server 2003 or 2003 R2 Datacenter, Enterprise (i386, x64), Standard (i386,
                                            x64), Web Server, Small Business Server, or Storage Server Edition. Each of the
                                            Windows 2003 operating systems require Service Pack 1 or later.</li>    
                                    </ul>    
                                </div>
                                <div class="mt-3">
                                    <p><span class="title-ph">System memory </span> The minimum system memory on each server should be 1 GB. The
                                        recommended amount for each server is 2 GB.</p>   
                                </div>
                                <div class="mt-3">
                                    <p><span class="title-ph">Disk space for program files </span> This is the amount of disk space needed for the Double-Take
                                        program files. For Windows 2003, this is approximately 300 MB. For Windows 2008, this is
                                        approximately 375 MB.</p> 
                                    <p>The program files can be installed to any volume while the Microsoft Windows Installer files are
                                        automatically installed to the operating system boot volume.</p>  
                                    <p>Make sure you have additional disk space for Double-Take queuing, logging, and so on.</p>       
                                </div>
                                <div class="mt-3">
                                    <p><span class="title-ph">Disk space for data files </span> This is the amount of disk space needed for the source data files.
                                        This will be dependent on the applications you are running and the amount of data files you
                                        have.</p>   
                                </div>
                                <div class="mt-3">
                                    <p><span class="title-ph">Server name </span> —Double-Take includes Unicode file system support, but your server name
                                        must still be in ASCII format. If you have the need to use a server's fully-qualified domain name,
                                        your server cannot start with a numeric character because that will be interpreted as an IP
                                        address.</p>   
                                </div>
                                <div class="mt-3">
                                    <p><span class="title-ph">Protocols and networking </span> Your servers must meet the following protocol and networking requirements.
                                        <ul>
                                            <li>Your servers must have TCP/IP with static IP addressing. (Some job types allow you to
                                                add DHCP addresses for failover monitoring, although only after a job has already been created. Keep in mind that depending on your failover configuration, a source reboot may
                                                or may not cause a failover but having a new address assigned by DHCP may also cause
                                                a failover.)</li>
                                            <li>By default, Double-Take is configured for IPv6 and IPv4 environments, but the DoubleTake service will automatically check the server at service startup and modify the
                                                appropriate setting if the server is only configured for IPv4. If you later add IPv6, you
                                                will need to manually modify the DefaultProtocol server setting.IPv6 is only supported
                                                for Windows 2008 servers.</li>  
                                            <li>If you are using IPv6 on your servers, your clients must be run from an IPv6 capable machine.</li>
                                            <li>In order to properly resolve IPv6 addresses to a hostname, a reverse lookup entry should
                                                be made in DNS.</li>      
                                        </ul>
                                    </p>   
                                </div>
                                <div class="mt-2">
                                    <span class="title-ph">Microsoft .NET Framework</span>—Microsoft .NET Framework version 3.5 Service Pack 1 is
                                    required. This version is not included in the .NET version 4.0 release. Therefore, even if you
                                    have .NET version 4.0 installed, you will also need version 3.5.1. You can install this version
                                    from the Double-Take CD, via a web connection during the Double-Take installation, or from a
                                    copy you have obtained manually from the Microsoft web site.
                                </div>
                                <div class="mt-3">
                                    <p>
                                        <span class="title-ph">Cloud Double </span>
                                        Take can be used to migrate data to an existing server in the cloud. Keep in
                                        mind that you should enable appropriate security measures, like VPN, to protect your data as it
                                        migrates to the cloud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section3">
                        <div class="lesson-title mt-3">Lessons 3: Install server Network Operating System</div><hr>
                        <div>
                            <p> Microsoft distributes Windows Server 2012 on optical media and in an .iso (ISO) image format. ISO
                                format is becoming more common as organizations acquire software over the Internet rather than by
                                obtaining physical removable media. Once you have obtained the Windows Server 2012 operating
                                system from Microsoft, you can use your own method to deploy the operating system. You can install
                                Windows Server 2012 by using a variety of methods, including the
                                following:</p>
                            <ul>
                                <li>Optical Media Advantages include: Traditional method of deployment. Disadvantages include:
                                    Requires that the computer have access to a DVD-ROM drive.
                                    Is typically slower than USB media.
                                    You cannot update the installation image without replacing the media.
                                    You can only perform one installation per DVD-ROM at a time.
                                    <img src="img_SFDLT_5/setup_server-1.png" alt="">
                                    <p>USB Media</p>
                                </li>
                                <li>Advantages include:
                                    All computers with USB drives allow boot from USB media.
                                    The image can be updated as new software updates and drivers become available.
                                    The answer file can be stored on a USB drive, minimizing the amount of interaction that the
                                    administrator must perform</li>
                                <li>Disadvantages include:
                                    Requires the administrator to perform special steps to prepare USB media from an ISO file.
                                    <ul>
                                        <li> Mounted ISO image </li>
                                    </ul>
                                </li>  
                                <li>Advantages include:
                                    With virtualization software, you can mount the ISO image directly and install Windows Server 2012
                                    on the virtual machine.
                                    <ul>
                                        <li>Network Share</li>
                                    </ul>
                                </li> 
                                <li> Advantages include:
                                    It is possible to boot a server off a boot device (DVD or USB drive) and install from
                                    installation files that are hosted on a network share.</li> 
                                <li>Disadvantages include: This method is much slower than using Windows Deployment Services. If you already have access to
                                    a DVD or USB media, it is simpler to use those tools for operating system deployment.
                                    <ul>
                                        <li>Windows Deployment Services </li>
                                    </ul>
                                </li>
                                <li>Advantages include:
                                    You can deploy Windows Server 2012 from .wim image files or specially prepared virtual hard disk
                                    (.vhd) files.
                                    You can use the Windows® Automated Installation Kit (AIK) to configure lite-touch
                                    deployment.
                                    Deployment Services server, and the operating system image is transmitted to the server over the
                                    network.
                                    Windows Deployment Services allows multiple concurrent installations of Windows Server 2012
                                    using multicast network transmissions.
                                    System Center Configuration Manager </li> 
                                <li> Advantages include:
                                    Configuration Manager allows you to fully automate the deployment of Windows Server 2012 to new
                                    servers that do not have an operating system installed. This process is called Zero Touch deployment.
                                    <ul>
                                        <li>Virtual Machine Manager Templates</li>
                                    </ul>
                                </li>       
                            </ul>
                        </div>
                    </div>
                    <div class="lesson" id="section4">
                        <div class="lesson-title mt-2">Lesson 4: Post-Install And Configure The Server</div><hr>
                        <div>
                            <span class="title-ph">Overview of Post-Installation Configuration</span>
                            <p>Configuration of server network settings (Configure the IP address)
                                Navigate to Start > Network. Windows Explorer for Network appears.</p>
                            <img src="img_SFDLT_5/setup_server-2.png" alt="">    
                            <p>Click Network and Sharing Center.</p>
                            <img src="img_SFDLT_5/setup_server-3.png" alt=""> 
                            <p>Click Change adapter settings. The Network Connections appear.</p>
                            <img src="img_SFDLT_5/setup_server-4.png" alt="">
                            <p>Right-click the network connection and select Properties.</p>
                            <img src="img_SFDLT_5/setup_server-5.png" alt="">
                            <p>The Properties screen appears.</p>
                            <img src="img_SFDLT_5/setup_server-6.png" alt="">
                            <p>Highlight Internet Protocol Version 4 (TCP/IPv4) and click Properties</p>
                            <img src="img_SFDLT_5/setup_sever-8.png" alt="">
                            <p>The Internet Protocol Version 4 (TCP/IPv4) Properties screen appears.</p>
                            <img src="img_SFDLT_5/setup_sever-8.png" alt="">
                            <p> Assign static IP address and DNS server information as appropriate. For Microsoft's guidance for
                                configuring IPv4 for static addressing on a DHCP server, see Configuring a DHCP server static
                                IP address.</p>
                            <p>IP Address: Pick an address within the same subnet as the router. For example, if your router is
                                192.168.1.1 (subnet 255.255.255.0), you could go with anything between 192.168.1.2 and 192.168.1.255, 
                                or if it's 192.168.0.1 (subnet 255.255.255.0), 192.168.0.2–192.168.0.255 would be the range.</p> 
                            <p>
                                <span class="title-ph">Subnet Mask:</span> This would be the same as your router, probably 255.255.255.0.
                                <span class="title-ph">Default Gateway:</span> This is your router's IP address.
                                <span class="title-ph">Preferred DNS:</span> You can either enter a DNS server's IP address, if you know it, or simply enter
                                your router's IP address.
                            </p>
                            <span class="title-ph">Set the computer name</span>
                            <p> Changing a computer name to either a Windows Server or a Windows client is one of the first
                                steps you will need after the installation of the operating system. Microsoft has chosen to
                                automatically give a computer name consisting of a sequence of letters and numbers that for
                                most people makes no sense to the role of the server or client.</p>  
                            <p> In today’s article, you will see how to change the computer name in Windows Server 2016 by
                                using the classic method through the GUI as well as the most ‘fast’ methods through the
                                command line and of course Powershell.</p>  
                            <div class="mt-3">
                                <span class="title-ph">Rename Windows Server 2016 from the GUI</span>
                                <p>Right-click the Start icon, and then click System</p>
                                <img src="img_SFDLT_5/setup_sever-10.png" alt="">
                                <p>In the new window, click Change settings, next to the computer name, as shown in the figure below.</p>
                                <img src="img_SFDLT_5/setup_sever-11.png" alt="">
                                <p>Then click the Change button.</p>
                                <img src="img_SFDLT_5/setup_sever-12.png" alt="">
                                <p>In the Computer name field, type the new computer name you want your server to have and click OK.</p>
                                <img src="img_SFDLT_5/setup_sever-13.png" alt="">
                                <p>To complete the renaming of the server, you will need to restart it. When you close the System
                                properties window, a new window will appear to give you this option.</p>
                                <img src="img_SFDLT_5/setup_sever-13.png" alt="">   
                                <span class="title-ph">Rename Windows Server 2016 from command prompt</span>
                                <p> First, you will need to know the name of the computer you are about to rename. Open the
                                    command line with Administrator rights and type the following command to see the current
                                    computer name.</p>
                                <img src="img_SFDLT_5/setup_sever-15.png" alt="">   
                                <p> Next, we will use the netdom command to change the name. The command will look like this.
                                    netdom renamecomputer <current computer name> /newname:<new computer name> /reboot
                                    <seconds>
                                    That is, to change the name from WIN-IMLI1SK9BV9 to SRV01 we will use the following
                                    command.
                                    netdom renamecomputer WIN-IMLI1SK9BV9 /newname:SRV01 /reboot 0</p> 
                                <img src="img_SFDLT_5/setup_sever-16.png" alt="">  
                                <p>Confirm your action by pressing Y (for Yes) and Enter</p>  
                            </div>  
                            <div class="mt-3">
                                <span class="title-ph">Rename Windows Server 2016 from SConfig tool</span>
                                <p>Open Powershell with Administrator privileges and type the sconfig command to enter the
                                    system configuration environment through Powershell.</p>
                                <img src="img_SFDLT_5/setup_sever-17.png" alt="">   
                                <p>Here, press 2 to change the computer name.
                                    After you type the new computer name you will be prompted to restart it to complete the process.</p>
                                <img src="img_SFDLT_5/setup_sever-17.png" alt="">
                            </div> 
                            <div class="mt-3">
                                <span class="title-ph">Join a domain</span>
                                <span class="title-ph">What is Domain?</span>
                                <p>Is A collection of computers & servers that are part of the same centralized database. in general,
                                    a domain is an area of control or a sphere of knowledge.</p>
                                <p> Windows domains provide network administrators with a way to manage a large number of PCs
                                    and control them from one place. One or more servers — known as domain controllers — have
                                    control over the domain and the computers on it.</p>  
                                <p>Domains are generally made up of computers on the same local network. However, computers
                                    joined to a domain can continue communicating with their domain controller over VPN or Internet connection. This allows businesses and schools to remotely manage laptops they provide
                                    to their employees and students.</p>   
                                <p> In the Internet's domain name system (DNS), a domain is a name with which name server
                                    records are associated that describe subdomains or host. For example, "tss.com" could be a
                                    domain with records for "www.tss.com"</p>
                                <span class="title-ph">Workgroup and Domain</span>   
                                <p> Workgroup is Microsoft's term for peer-to-peer local area network. Computers running
                                    Microsoft operating systems in the same workgroup may share files, printers, or Internet
                                    connection. Workgroup contrasts with a domain, in which computers rely on centralized
                                    authentication</p> 
                                <p> Computers on a network can be part of a workgroup or a domain. The main difference between
                                    workgroups and domains is how resources on the network are managed. Computers on home
                                    networks are usually part of a workgroup, and computers on workplace networks are usually part
                                    of a domain</p>  
                                <span class="title-ph">In a workgroup:</span> 
                                <p>All computers are peers; no computer has control over another computer</p> 
                                <p>Each computer has a set of user accounts. To use any computer in the workgroup, you must have
                                    an account on that computer.</p>   
                                <p>There are typically no more than ten to twenty computers. </p>   
                                <p>All computers must be on the same local network or subnet. </p>  
                                <span class="title-ph">In a domain:</span>
                                <p> One or more computers are servers. Network administrators use servers to control the security
                                    and permissions for all computers on the domain. This makes it easy to make changes because
                                    the changes are automatically made to all computers.</p>
                                <p>If you have a user account on the domain, you can log on to any computer on the domain without
                                    needing an account on that computer.</p> 
                                <p>There can be hundreds or thousands of computers. </p>     
                                <p>The computers can be on different local networks.</p> 
                                <span class="title-ph">Many domains are available like:</span>
                                <p>Single Domain, Parent Domain, Child Domain, Domain tree, and Forest domain.</p>
                                <img src="img_SFDLT_5/setup_server-19.png" alt="">
                                <p><span class="title-ph">Parent domain</span> - One domain above another in a domain tree</p>
                                <img src="img_SFDLT_5/setup_server-20.png" alt="">
                                <p> Child domain - One domain below another in a domain tree. The child inherits the domain name
                                    of its parent in a DNS hierarchical naming convention. Example: "sales.cohowinery.com</p>
                                <span class="title-ph">What is a domain tree?</span>  
                                <p> In Windows server, a domain can be a child of another domain (e.g., sales.cohowinery.com is a
                                    child of cohowinery.com). A child domain name always includes the complete parent domain
                                    name. A child domain and its parent share a two-way transitive trust.</p> 
                                <p>A domain tree exists when one domain is the child of another domain that we called Domain
                                    tree. A domain tree must have <span class="title-ph">a contiguous names pace.</span></p> 
                                <img src="img_SFDLT_5/setup_server-21.png" alt="">  
                                <span class="title-ph">What is a domain forest?</span> 
                                <img src="img_SFDLT_5/setup_server-22.png" alt="">  
                                <p>You might have several domain trees in your organization that you need to share resources. To
                                    solve this problem, you can join the trees to form a forest.</p>  
                                <p> A forest is a collection of trees that don’t necessarily form a contiguous namespace (although
                                    each tree must be contiguous).
                                    To join a computer to a domain
                                    On the Start screen, type Control Panel, and then press ENTER.
                                    Navigate to System and Security, and then click System.
                                    Under Computer name, domain, and workgroup settings, click Change settings.
                                    On the Computer Name tab, click Change.
                                    Under Member of, click Domain, type the name of the domain that you wish this computer to
                                    join, and then click OK.
                                    Click OK, and then restart the computer</p>   
                            </div>       
                            <div class="mt-3">
                                <span class="title-ph">Configure the time zone</span>
                                <p>A time zone is a region where the same standard time is used.</p>
                                <span class="title-ph">Importance of Correct Computer Date & Time</span>
                                <p class="title-ph">Scheduled Tasks</p>
                                <p> If you've set up your computer to perform specific tasks on a scheduled basis, an incorrectly set
                                    computer clock effectively prevents your system from knowing when to do its work. These tasks
                                    can include uploading content to a blog or server, checking for results from a piece of scientific
                                    instrumentation, running a diagnostic process or correlating customer purchase information prior
                                    to shipping merchandise. Unless you correct your system time, you run the risk of obtaining
                                    information that lacks the time-based reliability you expect from a computer-controlled process.</p>
                                <p class="title-ph">File Information</p>
                                <p>Your computer uses its system clock to apply a date and time stamp to every file you create and
                                    edit, including the documents you save from your applications and the email messages you send
                                    or receive. If you use your computer to send facsimile transmissions, the clock also marks your
                                    faxes with time information. Depending on the nature of your business, establishing a reliable
                                    work-task chronology can be critical, especially if you rely on time-sensitive data.</p> 
                                <p class="title-ph">Software and Access Authorization</p> 
                                <p>If your computer clock strays too far from the correct time, software that relies on Internet-based
                                    authorization schemes and Web-based services that require access information may reject your
                                    attempts to use these resources. Some software companies produce time-limited demonstration
                                    versions that stop functioning once their free access period expires. If you set your clock back in
                                    an attempt to trick a demo into providing continued access, it may lock you out completely rather
                                    than grant you extended use. In addition, online services such as investment portals may require
                                    you to set your clock correctly if you want to log in to your account.</p>      
                                <p class="title-ph">Causes of Time Discrepancies</p> 
                                <p> Computer clocks can diverge from the proper time for many reasons. Setting your clock to the
                                    wrong time zone forces it to synchronize with an incorrect time reference. If your operating system doesn't automatically compensate for the seasonal impact of Daylight Savings Time, your
                                    clock can vary by an hour until you reset it after a time change. Authorization schemes that</p>  
                                <p> check your system for a compliant time setting typically allow for these predictable glitches. If
                                    the battery that backs up key settings on your motherboard ages beyond the point at which it
                                    reliably retains information, you may start your computer and find it set to a seemingly random
                                    point in the past or future -- or unwilling to boot up at all. In addition, when you set up your
                                    computer to use more than one operating system, your time settings may become scrambled as
                                    you switch from one OS to another. Likewise, some forms of malware can interfere with your
                                    system time settings. To maintain a steady time reference on a computer with an always-on Web
                                    connection, you can set your operating system to use a network- or Internet-based time server, so
                                    that it checks and corrects its clock at regular intervals from a known reference</p>   
                                <p>The correct date, time, and time zone are one of the first settings a Windows Server should have.
                                    In today’s article, we’ll see how we can change time, date, and time zone through the graphical
                                    environment, command line and Powershell.</p>  
                                <span class="title-ph">Set time, date, and time zone settings from the graphical interface</span>
                                <p>The process is very simple. Right-click the time field in the lower right corner and then click the Adjust date/time option.</p>
                                <img src="img_SFDLT_5/setup_server-23.png" alt="">
                                <p>In the settings window, you can change the time, date, and time zones of each Windows Server. I do not think there is a need for further guidance as it is a simple process.</p>
                                <img src="img_SFDLT_5/setup_server-24.png" alt="">
                                <p>Alternatively, you can open the time and date settings window by clicking on the corresponding
                                    field in the Local Server section of the Server Manager.</p>
                                <img src="img_SFDLT_5/setup_server-25.png" alt="">    
                                <p>As you will see, in this case, opens the “old” management window through which you can set the
                                    time, date and time zone.</p>
                                <p>Set time, date, and time zone settings on command prompt</p>
                                <p>By typing the following command will open the time and date setting window, even in a Server
                                    Core installation.</p>
                                <p>control timedate.cpl</p> 
                                <p>To display the current date and time, enter the following commands. </p>  
                                <p>Date /t  Time /t</p>
                                <img src="img_SFDLT_5/setup_server-26.png" alt="">
                                <p>To set time and date, you can use the corresponding Time and Date commands at the command line.</p>
                                <p>In Windows Server 2012 have been added the Timezone Utility (tzutil) tool that allows us to display and set a time zone through the Windows command line</p>
                                <p>First, open the command line with administrator privileges and make sure you are in the System32 folder.</p>
                                <p>To display the current Windows Server Time Zone, type the following command. </p>
                                <span class="title-ph">tzutil /g</span>
                                <img src="img_SFDLT_5/setup_server-27.png" alt="">
                                <p>To display all available time zones, type the following command.</p>
                                <span class="title-ph">tzutil /l </span>
                                <img src="img_SFDLT_5/setup_server-28.png" alt="">
                                <p> To change the current time zone in Windows Server, type the following command, between the
                                    doubles, enter the time zone as it appears in the list of the previous command. For example, for
                                    the Greek time zone type:</p>
                                <span class="title-ph">tzutil /s "GTB Standard Time"</span>   
                                <p> To confirm that the time zone has changed, you can see the corresponding registry entry by using
                                    the following command from within the same command-line window.</p> 
                                <p>reg query HKLM\SYSTEM\CurrentControlSet\Control\TimeZoneInformation</p>   
                                <img src="img_SFDLT_5/setup_server-29.png" alt=""> 
                                <p>Set time, date and time zone settings on Powershell
                                    To view the current date and time, type the following command.</p>
                                <span class="title-ph">Get-Date</span> 
                                <img src="img_SFDLT_5/setup_server-30.png" alt="">  
                                <p>To set the time and date through Powershell the process is very easy. Use the following
                                    command as an example by changing the date and time values.</p>
                                <span class="title-ph">Set-Date -Date "06/06/2017 14:45"</span>  
                                <p> Alternatively, you can simply type the Set-Date command and promptly you will be prompted to
                                    enter the server’s date and time</p>
                                <img src="img_SFDLT_5/setup_server-31.png" alt="">  
                                <p>To view the current time zone through Powershell, type the following command. </p>  
                                <span class="title ph">Get-TimeZone</span>
                                <img src="img_SFDLT_5/setup_server-32.png" alt="">
                                <p>Before changing the time zone, you will need to know the right name. Type the following
                                    command to see all available time zones in Windows Server.</p>
                                <span class="title-ph">Get-TimeZone -ListAvailable</span>   
                                <img src="img_SFDLT_5/setup_server-33.png" alt="">
                                <p>To change the time zone, use the following command along with the corresponding time zone of your server.</p>
                                <!-- <span class="title-ph">Set-TimeZone -Name "GTB Standard Time"</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="lesson" id="section5">
                        <div class="lesson-title mt-2">Lesson 5: Install and administer active directory, Organizational units (OUs).</div><hr>
                        <div>
                            <p>Definition of Server Manager</p>
                            <p> Microsoft Windows Server Manager is a tool to view and manage server roles and make
                                configuration changes. Server Manager allows administrators to manage local and remote servers
                                without requiring physical access to the servers or enabling Remote Desktop Protocol
                                connections</p>
                            <p>Tools available from Server Manager. </p>
                            <p> Basic system configuration tasks
                                Performance monitoring
                                Device management
                                Viewing the roles and features that are installed on a server
                                Viewing the Windows event logs
                                PowerShell based management</p>
                            <span class="title-ph">Administrative Tools and Remote Server Administration Tools</span>
                            <span class="title-ph">Remote Server Administration Tools (RSAT) for Windows operating systems</span>
                            <p> Remote Server Administration Tools (RSAT) enables IT administrators to remotely manage
                                roles and features in Windows Server from a computer that is running Windows 10, Windows
                                8.1, Windows 8, Windows 7, or Windows Vista. </p>
                            <div class="mt-3">
                                <span class="title-ph">Active Directory Domain Services</span>
                                <span class="title-ph">Overview of AD DS</span>
                                <p> Active Directory (AD) is a Microsoft technology used to manage computers and other devices on
                                    a network. As a network grows, Active Directory provides a way to organize a large number of
                                    users into logical groups and subgroups, while providing access control at each level </p>
                                <span class="title-ph">Benefits of Active Directory Domain Services</span>
                                <p>There are several benefits to using AD DS for your basic network user and computer management</p>   
                                <p> You can customize how your data is organized to meet your companies needs
                                    You can manage AD DS from any computer on the network, if necessary
                                    AD DS provides built in replication and redundancy: if one Domain Controller (DC) fails,
                                    another DC picks up the load
                                    All access to network resources goes through AD DS, which keeps network access rights
                                    management centralized
                                    What Services are Provided in Active Directory Domain Services?
                                    Here are the services that AD DS provides as the core functionality required by a centralized user
                                    management system.</p>
                                <ul>
                                    <li><span class="title-ph">Domain Services</span>  Stores data and manages communications between the users and the DC. This
                                        is the primary functionality of AD DS.</li>
                                    <li><span class="title-ph">Certificate Services:</span>  Allows your DC to serve digital certificates, signatures, and public key cryptography</li>   
                                    <li><span class="title-ph">Lightweight Directory Services:</span> Supports LDAP for cross platform domain services, like any Linux computers in your network.</li> 
                                    <li><span class="title-ph">Directory Federation Services</span> Provides SSO authentication for multiple applications in the
                                        same session, so users don’t have to keep providing the same credentials.</li>
                                    <li><span class="title-ph">Rights Management: </span> Controls information rights and data access policies. For example, Rights Management determines if you can access a folder or send an email. </li>    
                                </ul>  
                                <span class="title-ph">Role of Domain Controllers with Active Directory Domain Services</span>  
                                <p> Domain Controllers (DC) are the servers in your network that host AD DS. DCs respond to
                                    authentication requests and store AD DS data. DCs host other services that are complementary to
                                    AD DS as well. Those are:
                                    Kerberos Key Distribution Center (KDC): The kdc verifies and encrypts kerberos tickets that AD
                                    DS uses for authentication
                                    NetLogon: Netlogon is the authentication communication service.
                                    Windows Time (W32time): Kerberos requires all computer times to be in sync.
                                    Intersite Messaging (IsmServ): Intersite messaging allows DCs to communicate with each other
                                    for replication and site-routing.
                                    A domain controller (DC) is a server that responds to security authentication requests within a
                                    Windows Server domain. It is a server on a Microsoft Windows or Windows NT network that is
                                    responsible for allowing host access to Windows domain resources.</p> 
                                <span class="title-ph">Parts and Structure:</span>  
                                <p>The domain is the core unit in the Active Directory structure. Active Directory includes: </p>  
                                <ul>
                                    <li>A database of information about network users and resources</li>
                                    <li>A service managing the database.</li>
                                </ul>
                                <p>Active directory is organized hierarchically and contains information about: </p>
                                <ul>
                                    <li>User & Group Accounts</li>
                                    <li>Computers </li>
                                    <li>Shared folders </li> 
                                    <li>Printers</li>
                                    <li>Installing a Domain Controller</li>
                                </ul>
                                <p>The name for Microsoft’s directory service, similar to Novell’s NDS.</p>
                                <ul>
                                    <li>-Dcpromo.exe is used to install Active Directory onto a server 2003 computer</li>
                                    <li>-Installing Active Directory on a server 2003 computer turns it into a domain controller</li>
                                    <li>Creates a file named NTDS.DIT, which is the Active Directory Database</li>
                                    <li>Disables the local Users/Groups tool. Users/Groups are created in AD Users and Computers</li>
                                </ul>
                                <p>Requirements: </p>
                                <ul>
                                    <li>Server 2003 CD </li>
                                    <li>NTFS partition</li>
                                    <li>NIC Plugged into a network </li>
                                    <li>TCP/IP Configured properly </li>
                                    <li>DNS Configured Properly</li>
                                </ul>
                                <span class="title-ph">Active Directory Database Files:</span>
                                <p>Note: It’s located in c:\windows\NTDS</p>
                                <ul>
                                    <li>Active Directory's database engine is the Extensible Storage Engine (ESE)</li>
                                    <li>The ESE has the capability to grow to 16 terabytes which would be large enough for 10 million objects.</li>
                                </ul>
                                <p>NTDS.DIT (New Technology Directory Service. Directory Information Tree)</p>
                                <p>edb.chk (Engine database. checkpoint) </p>
                                <p>edb.log (transaction. Log) </p>
                                <p>Edbxxxxx.log – transaction logs. </p>
                                <p>res1.log (Reserved Log file)</p>
                                <p>res2.log (Reserved Log file)</p>
                                <p>temp.edb</p>
                                <p>Ntds.dit grows as the database fills up. However, the logs are of fixed size (10 MB). Any change
                                   made to the database is also appended to the current log file.</p>
                                <p> Edb.log is the current log file. When a change is made to the database, it is written to the Edb.log
                                    file. When the Edb.log file is full of transactions, it is renamed to Edbxxxxx.log. (It starts at
                                    00001 and continues to increment using hexadecimal notation.) Since Active Directory uses
                                    circular logging, old log files are constantly deleted, once they have been written to the database.
                                    At any point, you will find the edb.log file, and maybe one or more Edbxxxxx.log files.</p>
                                <p> Res1.log and Res2.log are "placeholders" — designed to reserve (in this case) the last 20 MB of
                                    disk space on this drive. This is designed to give the log files sufficient room for a graceful
                                    shutdown if all other disk space is consumed.</p>
                                <p> The Edb.chk file, stores the database checkpoint, which identifies the point where the database
                                    engine needs to replay the logs.</p>
                                <p>Temp.edb contains information on the transactions that are being processed. </p>  
                                <p>System Volume (SYSVOL):</p>     
                                <p>SYSVOL stores and replicates Group Policy Objects (GPO's), and scripts. As the network
                                   grows, SYSVOL can begin to require substantial storage space.</p>    
                                <p>Install DNS on Windows Server 2003</p>    
                                <p> Before installing and configuring DNS on our server we have to perform some preliminary tasks.
                                    Specifically, we have to configure the server with a static IP address and a DNS suffix. The
                                    suffix will be used to fully-qualify the server name. To begin:</p>
                                <ul>
                                    <li> Go to Start > Control Panel > Network Connections , right-click Local Area Connection and choose Properties .</li>
                                    <li> When the Local Area Connection Properties window comes up, select Internet Protocol
                                        (TCP/IP) and click Properties . When the Internet Protocol (TCP/IP) window comes up, enter
                                        an IP address , subnet mask and default gateway IP addresses that are all compatible with
                                        your LAN.</li>
                                </ul>  
                                <span class="title-ph">Our LAN is on a 192.168.1.0/24 network, so our settings are as follows:</span>  
                                <img src="img_SFDLT_5/setup_server-40.png" alt="">  
                                <p> For the Preferred DNS Server , enter the loopback address 127.0.0.1 . This tells the server to
                                    use its own DNS server service for name resolution, rather than using a separate server. After
                                    filling out those fields , click the Advanced button.</p>
                                <p> When the Advanced TCP/IP Settings window comes up, click the DNS tab, enter firewall.test
                                    on the DNS suffix for this connection text field, check Register this connection's address in
                                    DNS , check Use this connection's DNS suffix in DNS registration , and click OK , OK , and
                                    then Close:</p> 
                                <img src="img_SFDLT_5/setup_server-41.png" alt="">    
                                <p>Now that we have configured our server with a static IP address and a DNS suffix, we are ready
                                   to install DNS. To do this:</p>  
                                   <ul>
                                       <li>Go to Start > Control Panel > Add or Remove Programs .</li>
                                       <li> When the Add or Remove Program window launches, click Add/Remove Windows
                                            Components on the left pane.</li>
                                        <li> When the Windows Components Wizard comes up, scroll down and highlight Networking
                                            Services and then click the Details button.</li> 
                                        <li>When the Networking Services window comes up, place a check mark next to Domain Name
                                            System (DNS) and click OK and OK again.</li>   
                                   </ul>
                                <img src="img_SFDLT_5/setup_server-42.png" alt="">   
                                <p> Note that, during the install, Windows may generate an error claiming that it could not find a file
                                    needed for DNS installation. If this happens, insert your Windows Server 2003 CD into the
                                    server's CD-ROM drive and browse to the i386 directory. The wizard should automatically find
                                    the file and allow you to select it. After that, the wizard should resume the install.</p>
                                <p>After this, DNS should be successfully installed. To launch the DNS MMC, go to Start > Administrative Tools > DNS</p> 
                                <img src="img_SFDLT_5/setup_server-43.png" alt="">  
                                <p>As our DNS server was just installed it is not populated with anything. On t he left pane of the
                                    DNS MMC, there is a server node with three nodes below it, titled Forward Lookup Zones,
                                    Reverse Lookup Zones and Event Viewer.
                                    The Forward Lookup Zones node stores zones that are used to map host names to IP addresses,
                                    whereas the Reverse Lookup Zones node stores zones that are used to map IP addresses to host
                                    names.</p>  
                                <span class="title-ph">Setting Up a Cache-Only DNS Server</span>   
                                <p> A cache-only DNS server contains no zones or resource records. Its only function is to cache
                                    answers to queries that it processes, that way if the server receives the same query again later,
                                    rather than go through the recursion process again to answer the query, the cache-only DNS
                                    server would just return the cached response, thereby saving time. With that said, our newly
                                    installed DNS server is already a cache-only DNS server!</p> 
                                <p>Creating a Primary Forward Lookup Zone</p>  
                                <p> A forward lookup zone is a DNS zone in which hostname to IP address relations are stored.
                                    When a computer asks the IP address of a specific hostname, the forward lookup zone is
                                    checked and the desired result is returned. DNS has a few different types of zones, and each has
                                    a different function. We will first create a primary forward lookup zone titled firewall.test . We do not want to name it firewall.cx , or any variation that uses a valid top-level domain name, as
                                    this would potentially disrupt the clients' abilities to access the real websites for those domains.</p>  
                                <ul>
                                    <li> On the DNS MMC, right-click the Forward Lookup Zones node and choose New Zone .</li>
                                    <li> When the New Zone Wizard comes up, click Next .</li>
                                    <li> On the Zone Type screen, make sure that Primary zone is selected and click Next .</li>
                                    <li> On the Zone Name screen, type firewall.test .</li>
                                    <li>On the Zone File screen, click Next .</li>
                                    <li> On the Dynamic Update screen, make sure that “ Do not allow dynamic updates ” is selected and click Next .</li>
                                    <li>On the next screen, click Finish .</li>
                                </ul> 
                                <p>We now have a foundation that we can place resource records in for name resolution by internal clients.</p> 
                                <p>Creating a Primary Reverse Lookup Zone</p>  
                                <p>Contrary to the forward lookup zone, a reverse lookup zone is used by the DNS server to resolve
                                    IP addresses to host names. Not as frequently used as forward lookup zones, reverse lookup
                                    zones are often used by anti-spam systems in countering spam and by monitoring systems when
                                    logging events or issues. To create a reverse lookup zone:</p>
                                <ol type="1">
                                    <li> IP addresses to host names. Not as frequently used as forward lookup zones, reverse lookup
                                    zones are often used by anti-spam systems in countering spam and by monitoring systems when
                                    logging events or issues. To create a reverse lookup zone:</p></li>
                                    <li> When the New Zone Wizard comes up, click Next .</li>
                                    <li> On the Zone Type screen, make sure that Primary zone is selected and click Next .</li>
                                    <li>On the Reverse Lookup Zone Name screen, enter 192.168.1 and click Next .</li>
                                    <li> On the Zone File screen, click Next .</li>
                                    <li> On the Dynamic Update screen, make sure that “Do not allow dynamic updates” is selected and click Next .</li>
                                    <li> On the next screen, click Finish</li>
                                </ol>    
                                <img src="img_SFDLT_5/setup_server-44.png" alt="">  
                                <p>There is now a reverse lookup zone titled 192.168.1.x Subnet on the left pane of the DNS MMC.
                                    This will be used to store PTR records for computers and servers in those subnets.
                                    Using the instructions above, go ahead and create two additional reverse lookup zones, one for a
                                    192.168.2.x subnet and for a 192.168.3.x subnet. </p>
                                <p>Creating Resource Records</p> 
                                <p>DNS uses resource records (RRs) to tie host names to IP addresses and the reverse. There are
                                    different types of resource records, and the DNS server will respond with the record that is
                                    requested in a query.
                                    The most common resource records are: Host (A); Mail Exchanger (MX); Alias (CNAME); and
                                    Service Location (SRV) for Active Directory zones. As such, we will create all but SRV records
                                    because Active Directory will create those automatically:</p>  
                                <ul>
                                    <li> On the DNS MMC, expand the Forward Lookup Zones node followed by the firewall.test zone</li>
                                    <li> Right-click firewall.test zone and choose Other New Records .</li>
                                    <li> On the Resource Record Type window, select Host (A) and click Create Record</li>
                                    <li>On the New Resource Record window, type “ webserver001 ” on the Host text field, type “
                                        192.168.2.200” in the IP address text field, check the box next to “Create associated pointer
                                        (PTR) record” and click OK . This tells DNS to create a PTR record in the appropriate reverse lookup zone. And, for
                                        demonstration purposes, it does not matter whether this server actually exists or not.</li>
                                    <li>Back at the Resource Record Type window, select Host (A) again and click Create Record</li>  
                                    <li>On the New Resource Record window, type “ mailserver001 ” on the Host text field and type
                                        “ 192.168.3.200” in the IP address text field. Make sure that the check box next to “Create
                                        associated pointer (PTR) record” is checked and click OK . A corresponding PTR record will be
                                        created in the appropriate reverse lookup zone.</li>  
                                    <li> Back at the Resource Record Type window, select Alias (CNAME) and click Create Record</li>   
                                    <li> On the New Resource Record window, type “ www ” on the Alias name text field, then click Browse .</li> 
                                    <li>On the Browse window, double-click the server name, then double-click Forward Lookup
                                        Zones, then double-click firewall.test , and finally double-click webserver001 . This should
                                        populate the webserver001's fully qualified domain name in the Fully qualified domain name
                                        (FQDN) for target host text field. Click OK afterwards.</li>
                                    <li> Back at the Resource Record Type window, select Mail Exchanger (MX) and click Create Record .</li>
                                    <li> On the New Resource Record window, click Browse , double-click the server name, then
                                         double-click Forward Lookup Zones, then double-click firewall.test, and finally double-click mailserver001 . This should populate the mailserver001's fully qualified domain name in the
                                         Fully qualified domain name (FQDN) of mail server text field. Click OK afterwards. </li>
                                </ul>   
                                <p>join a computer to a domain</p>  
                                <p>On the Start screen, type Control Panel, and then press ENTER. </p>
                                <p>Navigate to System and Security, and then click System.</p>
                                <p>Under Computer name, domain, and workgroup settings, click Change settings. </p>
                                <p>On the Computer Name tab, click Change.</p>
                                <p>Under Member of, click Domain, type the name of the domain that you wish this computer to
                                   join, and then click OK.</p>
                                <p>Click OK, and then restart the computer. </p>  
                                <p>Active Directory Domain Services Objects </p> 
                                <p>Managing User Accounts</p>
                                <p>User Accounts</p>
                                <p> In Windows Server 2003 computers there are two types of user accounts. These types are local
                                    and domain user accounts. The local user accounts are the single user accounts that are locally
                                    created on a Windows Server 2003 computer to allow a user to log on to a local computer. The
                                    local user accounts are stored in Security Accounts Manager (SAM) database locally on the hard
                                    disk. The local user accounts allow you to access local resources on a computer
                                    On the other hand the domain user accounts are created on domain controllers and are saved in
                                    Active Directory. These accounts allow to you access resources anywhere on the network. On a
                                    Windows Server 2003 computer, which is a member of a domain, you need a local user account
                                    to log in locally on the computer and a domain user account to log in to the domain. Although
                                    you can have a same login and password for both the accounts, they are still entirely different
                                    account types.You become a local administrator on your computer automatically because local computer
                                    account is created when a server is created. A domain administrator can be local administrator on all the member computers of the domain because by default the domain administrators are added
                                    to the local administrators group of the computers that belong to the domain.
                                    This article discusses about creating local as well as domain user accounts, creating groups and
                                    then adding members to groups.</p>
                                <span class="title-ph">Creating a Local User Account</span> 
                                <p>To create a local user account, you need to:</p> 
                                <ol type="1">
                                    <li>Log on as Administrator, or as a user of local administrator group or Account Operators local group in the domain.</li>
                                    <li> Open Administrative Tools in the Control Panel and then click Computer Management, as shown in Figure 1. <img src="img_SFDLT_5/setup_server-45.png" alt=""></li>
                                    <li> Click Users folder under Local Users and Groups node, as shown in Figure 2.</li>
                                    <li> Right-click Users and then click New User in the menu that appears, as shown in Figure 3: <img src="img_SFDLT_5/setup_server-45.png" alt=""> The New User dialog box appears as shown below in Figure 4.</li>
                                    <li>Provide the User name and the Password for the user in their respective fields.</li>
                                    <li> Select the desired password settings requirement. <p>Select User must change password at next logon option if you want the user to change the
                                        password when the user first logs into computer. Select User cannot change password option if
                                        you do not want the user to change the password. Select Password never expires option if you do
                                        not want the password to become obsolete after a number of days. Select Account is disabled to
                                        disable this user account.</p></li>
                                    <li>Click Create, and then click Close: <img src="img_SFDLT_5/setup_server-47.png" alt=""> The user account will appear on clicking Users node under Local Users and Groups on the right
                                        panel of the window.
                                        You can now associate the user to a group. To associate the user to a group, you need to:</li>
                                    <li> Click Users folder under Local Users and Groups node.</li>  
                                    <li> Right-click the user and then select Properties from the menu that appears, as shown in Figure <img src="img_SFDLT_5/setup_server-48.png" alt=""> The Properties dialog box of the user account appears, as shown in Figure 6:</li>  
                                    <li>.Click Member of tab <p>The group(s) with which the user is currently associated appears.</p></li>
                                    <li> Click Add. <img src="img_SFDLT_5/setup_server-49.png" alt=""> The Select Groups dialog box appears, as shown in Figure 7.</li>   
                                    <li> Select the name of the group/object that you want the user to associate with from the Enter
                                        the object names to select field.
                                        If the group/object names do not appear, you can click Advanced button to find them. Also if
                                        you want to choose different locations from the network or choose check the users available,
                                        then click Locations or Check Names buttons. </li>
                                    <li> Click OK. <img src="img_SFDLT_5/setup_server-50.png" alt=""></li>  
                                    <li>The selected group will be associated with the user and will appear in the Properties window of
                                        the user, as shown in Figure 8: <img src="img_SFDLT_5/setup_server-51.png" alt=""></li>  
                                </ol>  
                                 <span class="title-ph">Creating a Domain User Account</span>
                                 <p>The process of creating a domain user account is more or less similar to the process of creating a
                                    local user account. The only difference is a few different options in the same type of screens and
                                    a few steps more in between.
                                    For example, you need Active Directory Users and Computers MMC (Microsoft Management
                                    Console) to create domain account users instead of Local Users and Computers MMC. Also,
                                    when you create a user in domain then a domain is associated with the user by default. However,
                                    you can change the domain if you want.
                                    Besides all this, although, a domain user account can be created in the Users container, it is
                                    always better to create it in the desired Organization Unit (OU).
                                    To create a domain user account, follow the steps given below:</p>
                                <ol>
                                    <li>Log on as Administrator and open Active Directory Users and Computers MMC from the
                                        Administrative Tools in Control Panel, as shown in Figure 9.</li>
                                    <li>Expand the OU in which you want to create a user, right-click the OU and select New->User from the menu that appears.<img src="img_SFDLT_5/setup_server-52.png" alt=""></li>  
                                    <li> Alternatively, you can click on Action menu and select New->User from the menu that appears.The New Object –User dialog box appears, as shown in Figure 10.</li>  
                                    <li> Provide the First name, Last name, and Full name in their respective fields.</li>
                                    <li> Provide a unique logon name in User logon name field and then select a domain from the
                                        dropdown next to User logon name field if you want to change the domain name.
                                        <p>The domain and the user name that you have provided will appear in the User logon name (preWindows 2000) fields to ensure that user is allowed to log on to domain computers that are using
                                           earlier versions of Windows such as Windows NT.<img src="img_SFDLT_5/setup_server-53.png" alt=""></p>
                                    </li>
                                    <li>Click Next.
                                        The second screen of New Object –User dialog box appears similar to Figure 4.</li>
                                    <li> Provide the User name and the Password in their respective fields.</li> 
                                    <li> Select the desired password settings requirement: <p>Select User must change password at next logon option if you want the user to change the
                                        password when the user first logs into computer. Select User cannot change password option if
                                        you do not want the user to change the password. Select Password never expires option if you do
                                        not want the password to become obsolete after a number of days. Select Account is disabled to
                                        disable this user account.</p></li>   
                                    <li>Click Next.</li>   
                                    <li>Verify the user details that you had provided and click Finish on the third screen of New
                                        Object –User dialog box</li> 
                                    <li> Follow the steps 9-13 mentioned in Creating a Local User Account section to associate a user to a group.</li>    
                                </ol>    
                                <span class="title-ph">Creating Groups</span>
                                <p> Just like user accounts, the groups on a Windows Server 2003 computer are also of two types,
                                    the built-in local groups and built in domain groups. The example of certain built in domain
                                    groups are: Account Operators, Administrators, Backup Operators, Network Configuration
                                    Operators, Performance Monitor Users, and Users. Similarly, certain built in local groups are:
                                    Administrators, Users, Guests, and Backup operators.
                                    The built-in groups are created automatically when the operating system is installed and become
                                    a part of a domain. However, sometimes you need to create your own groups to meet your
                                    business requirements. The custom groups allow you limit the access of resources on a network
                                    to users as per your business requirements. To create custom groups in domain, you need to:</p>
                                <ul>
                                    <li>. Log on as Administrator and open Active Directory Users and Computers MMC from the
                                        Administrative Tools in Control Panel, as shown in Figure 9.</li>
                                    <li>Right-click the OU and select New->Group from the menu that appears.
                                        The New Object –Group dialog box appears, as shown in Figure 10.</li> 
                                    <li> Provide the name of the group in the Group name field.
                                        The group name that you have provided will appear in the Group name (pre-Windows 2000)
                                        field to ensure that group is functional on domain computers that are using earlier versions of
                                        Windows such as Windows NT.</li>
                                    <li> Select the desired group scope of the group from the Group scope options.
                                        If the Domain Local Scope is selected the members can come from any domain but the members
                                        can access resources only from the local domain.
                                        If Global scope is selected then members can come only from local domain but can access
                                        resources in any domain.If Universal scope is selected then members can come from any domain and members can access
                                        resources from any domain</li>
                                    <li> Select the group type from the Group Type options.
                                        The group type can be Security or Distribution. The Security groups are only used to assign and
                                        gain permissions to access resources and Distribution groups are used for no-security related
                                        tasks such as sending emails to all the group members <img src="img_SFDLT_5/setup_server-53.png" alt=""></li> 
                                    <li> Click OK.
                                        You can add members to group just as you add groups to members. Just right-click the group in
                                        Active Directory Users and Computers node in the Active Directory Users and Computers snapin, select Properties, click Members tab from the Properties window of the group and then follow
                                        the steps from 11-13 from Creating Local User Accounts section.</li>                  
                                </ul>    
                            </div>  
                        </div>
                    </div>
                    <div class="lesson" id="section6">
                        <div class="lesson-title mt-2">Lesson 6: Deploy and configure server roles</div><hr>
                        <div>
                            <p>Dynamic Host Configuration Protocol (DHCP) is a network protocol that enables a server to
                                automatically assign an IP address to a computer from a defined range of numbers (that is, a
                                scope) configured for a given network.</p>
                            <p>DHCP Server is a network server that automatically provides and assigns IP addresses, default
                               gateways and other network parameters to client devices.</p>    
                            <span class="title-ph">DCHP Lease Generation Process</span> 
                            <p>DHCP Lease generation process is a four step process. It is also known as D O R A process. It’s
                               very simple and easy to understand. Let’s see how this DHCP Lease generation process works. </p>
                            <p>
                               <p>D- Discover</p>
                               <p>O- Offer</p>
                               <p>R- Request</p>
                               <p>A- Acknowledge</p>
                            </p>   
                            <img src="img_SFDLT_5/setup_server-56.png" alt="">  
                            <p>Let me explain this lease generation process with a funny conversation between Server and
                               Client (let’s just assume ).</p>
                            <p> <span class="title-ph">Discover</span>
                                In this first step, Clients that are DHCP enabled and have no IP addresses and are assigned will
                                broadcast on the network and say</p>  
                            <p><span class="title-ph">Client </span>
                                “Hey, I’m a client machine on this network, who’s been looking for an IP address. Is there a
                                DCHP Server out there, who can help me?</p> 
                            <p><span class="title-ph">Offer</span>
                                In this second step, if any DCHP Server hears DHCP Discover ( from step 1), it will broadcast
                                out and says</p> 
                            <p><span class="title-ph">DHCP Server</span>
                               “Hi,I am a DHCP Server. Here is an offer of an IP address, if you’d like to have it). “</p>  
                            <p><span class="title-ph">Request</span>
                                This is where the client machines accepts the offer (IP address) from DHCP Server and
                                broadcasts out back to to DHCP Server, which says</p> 
                            <p><span class="title-ph">Client </span>
                               Okay, I would like that IP address and thank you so much ) “</p>  
                            <p><span class="title-ph">Acknowledge</span>
                               DCHP Server sends an acknowledgement to the client with the lease information.</p>   
                            <p><span class="title-ph">DHCP Server </span>
                                Okay, I acknowledge it and now you have that IP address).</p>  
                            <div class="mt-3">
                                <span class="title-ph">DHCP Scope</span>
                                <p>A DHCP scope is a collection of IP address settings that are configured for devices such as a
                                    computer to use. You can create multiple scopes for different device types and subnets. For
                                    example, I have a scope for computers and different scopes for IP phones.
                                    When you setup a scope, you will need to configure the following:</p>
                                <p> <span class="title-ph">Scope name </span> – This is the name of the scope. Give it a descriptive name so it is easy to identify
                                   which devices it is for.</p>    
                                <p><span class="title-ph">IP address range </span> – This is the IP range that you want the devices to use. For example 10.2.2.0/24</p>   
                                <p><span class="title-ph"> IP address exclusions</span> – You can specify to exclude IP address from the scope. This is useful if
                                    you have devices on the subnet that need a static IP like a router or server.</p>
                                <p><span class="title-ph">Lease duration </span> – The lease specifies how long a client has an IP address before returning it to the pool.</p>  
                                <p><span class="title-ph">DHCP options </span>– There are a number of different options you can include when DHCP assigns
                                   an IP address. More on this below</p> 
                                <span class="title-ph">DHCP options </span> 
                                <p>There are many DCHP options, below are the most commonly used options in a Windows domain.</p>  
                                <p>
                                    <p> <span class="title-ph">003 router</span> – The default gateway of the subnet</p>
                                    <p> <span class="title-ph">005 DNS server</span> – The IP address of the DNS server clients should use for name resolution.</p>
                                    <p> <span class="title-ph">015 DNS Domain Name </span> – The DNS suffix the client should use, often the same as the domain name</p>
                                </p> 
                                <span class="title-ph">DHCP filtering</span>
                                <p>DHCP filtering can be used to deny or allow devices based on their MAC address. For example,
                                   I use it to block mobile devices from connecting to our secure wifi</p>

                                <span class="title-ph">Superscopes</span>   
                                <p>A superscope is a collection of individual DHCP scopes. This can be used when you want to join
                                   to scopes together. Honestly, I’ve never used this.</p>

                                <span class="title-ph">Split Scopes</span>  
                                <p>This is a method of providing fault tolerance for a DHCP scope. Using DHCP failover is not the
                                   preferred method for fault tolerance.</p> 

                                <div class="mt-3">
                                    <span class="title-ph">DHCP Failover</span>
                                    <p>DCHP failover was a new feature starting in server version 2012. It allows two DHCP servers to
                                    share lease information providing high availability for DCHP services. If one server becomes
                                    unavailable the other server takes over.</p>
                                    <span class="title-ph">Windows 2003 DHCP Server Installation & Configuration</span> 
                                    <span class="title-ph">Assigning the Server a Static IP Address</span> 
                                    <p>Before we install the DHCP server service on Windows Server 2003, we need to assign the
                                       Windows server a static IP address. To do this:</p>
                                    <p>Go to Start > Control Panel > Network Connections , right-click Local Area Connection and
                                       choose Properties .</p>  
                                    <p>When the Local Area Connection Properties window comes up, select Internet Protocol
                                       (TCP/IP) and click the Properties button.</p> 
                                    <p>When the Internet Protocol (TCP/IP) window comes up, enter an IP address , subnet mask
                                       and default gateway IP address that is compatible with your LAN</p>
                                    <p>We've configured our settings according to our network, as shown below:</p>  
                                    <img src="img_SFDLT_5/setup_server-57.png" alt=""> 
                                    <p>Enter 192.168.0.252 for the Preferred DNS server and 192.168.1.252 for the Alternate DNS
                                        server. The Preferred and Alternate DNS server IP addresses are optional for the functionality of
                                        the DHCP server, but we will populate them since you typically would in a real-world network.
                                        Usually these fields are populated with the IP addresses of your Active Directory domain
                                        controllers.</p>
                                    <p>After filling out those fields, click OK and OK to save and close all windows.</p> 
                                    <span class="title-ph">Install DHCP Server Service on Windows Server 2003</span> 
                                    <p>Our server now has a static IP address and we are now ready to install the DHCP server service.
                                       To do this:</p>      
                                    <p>Go to Start > Control Panel > Add or Remove Programs .</p>  
                                    <p>When the Add or Remove Programs window launches, click Add/Remove Windows Components in the left pane</p> 
                                    <p>When the Windows Components Wizard comes up, scroll down and highlight Networking
                                       Services and then click the Details button.</p>
                                    <img src="img_SFDLT_5/setup_server-58.png" alt="">  
                                    <p>When the Networking Services window comes up, place a check mark next to Dynamic Host
                                       Configuration Protocol (DHCP) and click OK and OK again</p>  
                                       <img src="img_SFDLT_5/setup_server-59.png" alt="">  
                                    <p>Note that, during the install, Windows may generate an error claiming that it could not find a file
                                        needed for DHCP installation. If this happens, insert your Windows Server 2003 CD into the
                                        server's CD-ROM drive and browse to the i386 directory. The wizard should automatically find
                                        the file and allow you to select it. After that, the wizard should resume the installation process.</p>     
                                </div> 
                                <div class="mt-3">
                                     <span class="title-ph">Configure DHCP on Windows Server 2003</span>
                                     <p>DHCP has now been successfully installed and we are ready to configure it. We will create a
                                        new scope and configure some of the scope's options. To begin:</p>
                                    <p>Launch the DHCP MMC by going to Start > Administrative Tools > DHCP .</p>
                                    <p>Currently, the DHCP MMC looks empty and the server node in the left pane has a red arrow
                                       pointing down. Keep that in mind because it will be significant later on.</p>
                                    <img src="img_SFDLT_5/setup_server-60.png" alt="">  
                                    <p>Right-click the server node in the left pane and choose New Scope . This will launch the New
                                       Scope Wizard.</p> 
                                    <p>On the New Scope Wizard, click Next .</p>   
                                    <p>Specify a scope name and scope description. For the scope Name , enter “ Building A, Floor
                                        1 .” For the scope Description , enter “ This scope is for Floor 1 of Building A .” Afterwards,
                                        click Next .</p>
                                    <img src="img_SFDLT_5/setup_server-61.png" alt="">   
                                    <p>The scope name can be anything, but we certainly want to name it something that describes the
                                        scope's purpose. The scope Description is not required. It is there in case we needed to provide a
                                        broader description of the scope.</p>
                                    <p>Specify an IP address range and subnet mask. For the Start IP address enter 192.168.0.1, for
                                        the End IP address enter 192.168.0.254 . Finally, specify a subnet mask of 255.255.255.0 and
                                        click Next.</p>    
                                    <p>Specifying the IP address range of a scope requires some knowledge of subnetting. Each scope in
                                        a DHCP server holds a pool of IP addresses to give out to clients, and the range of IP addresses
                                        must be within the allowed range of the subnet (that you specify on the subnet mask field).</p> 
                                    <p>For simplicity we entered a classful, class C IP address range from 192.168.0.1 to 192.168.0.254.
                                    Notice that the range encompasses the IP address of our server, the DNS servers and the default
                                    gateway, meaning that the DHCP server could potentially assign a client an IP address that is
                                    already in use! Do not worry -- we will take care of that later.</p>
                                    <img src="img_SFDLT_5/setup_server-62.png" alt="">    
                                    <p> Specify IP addresses to exclude from assignment. For the Start IP address , enter
                                        192.168.0.240 and for the End IP address enter 192.168.0.254 , click Add , and then click
                                        Next.</p>  
                                    <img src="img_SFDLT_5/setup_server-63.png" alt="">     
                                    <p>Certain network devices, such as servers, will need statically configured IP addresses. The IP
                                        addresses may sometimes be within the range of IP addresses defined for a scope. In those cases,
                                        you have to exclude the IP addresses from being assigned out by DHCP.</p>
                                    <p> We have the opportunity here to define those IP addresses that are to be excluded. We specified
                                        IP addresses 192.168.0.240 to 192.168.0.254 to ensure we've included our servers plus a few
                                        spare IP addresses for future use</p> 
                                    <p>Specify the lease duration for the scope. Verify that Days is 8 and click Next</p>  
                                    <p>The lease duration is how long clients should keep their IP addresses before having to renew them.</p>     
                                    <img src="img_SFDLT_5/setup_server-64.png" alt=""> 
                                    <p>There are a few considerations at this point. If a short lease duration is configured, clients will be
                                        renewing their IP addresses more frequently. The result will be additional network traffic and
                                        additional strain on the DHCP server. On the other hand if a long lease duration is configured, IP
                                        addresses previously obtained by decommissioned clients would remain leased and unavailable
                                        to future clients until the leases either expire or are manually deleted.
                                        Additionally if network changes occur, such as the implementation of a new DNS server, those
                                        clients would not receive those updates until their leases expire or the computers are restarted.
                                        As Microsoft states, “lease durations should typically be equal to the average time the computer
                                        is connected to the same physical network.” You would typically leave the default lease duration
                                        in an environment where computers are rarely moved or replaced, such as a wired network. In an
                                        environment where computers are often moved and replaced, such as a wireless network, you
                                        would want to specify a short duration since a new wireless client could roam within range at
                                        any time.</p>
                                    <p> Configure DHCP Options. Make sure “ Yes, I want to configure these settings now ” is
                                        selected and click Next to begin configuring DHCP options.
                                        DHCP options are additional settings that the DHCP server can provide to clients when it issues
                                        them with IP addresses. These are the other settings that help clients communicate on the
                                        network. In the New Scope Wizard we can only configure a few options but from the DHCP
                                        MMC we have several more options.
                                        Specify the router IP address. Enter 192.168.0.254 as the IP address of the subnet's router,
                                        click Add , and then click Next .
                                        The first option we can configure is the IP address for the subnet's router for which this scope is
                                        providing IP addresses. Keep in mind that this IP address must be in the same network as the IP
                                        addresses in the range that we created earlier.</p>  
                                    <img src="img_SFDLT_5/setup_server-65.png" alt="">   
                                    <p><span class="title-ph">Configure domain name and DNS servers.</span> On the next page, enter “firewall.cx" for the
                                        domain name. Then enter 192.168.0.252 for the IP address of a DNS server, click Add , enter <span class="title-ph"> 192.168.1.252 </span> as the IP address for another DNS server, and click Add again. When finished, click Next.</p> 
                                    <p>If you had a DNS infrastructure in place, you could have simply typed in the fully qualified
                                        domain name of the DNS server and clicked Resolve .
                                        The DNS servers will be used by clients primarily for name resolution, but also for other
                                        purposes that are beyond the scope of this article. The DNS domain name will be used by clients
                                        when registering their hostnames to the DNS zones on the DNS servers (covered in the
                                        'Advanced DHCP Server Configuration on Windows 2003' article).</p> 
                                    <img src="img_SFDLT_5/setup_server-66.png" alt=""> 
                                    <p>Configure WINS servers. On the next screen, enter 192.168.0.251 as the IP address for the first
                                        WINS server, click Add , enter 192.168.1.251 as the IP address for the second WINS server,
                                        click Add again, and then click Finish .</p>  
                                    <img src="img_SFDLT_5/setup_server-67.png" alt="">  
                                    <p><span class="title-ph">Finally, the wizard asks whether you want to activate the scope.</span> For now, choose “ No, I will
                                        activate this scope later ” and click Next and then Finish to conclude the New Scope Wizard
                                        and return to the DHCP MMC.
                                        At this point we almost have a functional DHCP server. Let us go ahead and expand the scope
                                        node in the left pane of the DHCP MMC to see the new available nodes:</p>   
                                    <p><span class="title-ph">Address Pool</span> – Shows the IP address range the scope offers along with any IP address
                                       exclusions.</p> 
                                    <p><span class="title-ph">Address Leases</span> – Shows all the leased IP addresses.</p>  
                                    <p><span class="title-ph">Reservations</span> – Shows the IP addresses that are reserved. Reservations are made by specifying
                                        the MAC address that the server would “listen to” when IP address requests are received by the
                                        server. Certain network devices, such as networked printers, are best configured with reserved IP
                                        addresses rather than static IP addresses.</p> 
                                    <p><span class="title-ph">Scope Options</span> – Shows configured scope options. Some of the visible options now are router,
                                       DNS, domain name and WINS options.</p>   
                                    <p><span class="title-ph">Server Options </span> – Shows configured server options. This is similar to scope options except that
                                        these options are either inherited by all the scopes or overridden by them (covered in 'Advanced
                                        DHCP Server Configuration on Windows 2003' article).</p> 
                                    <p>Earlier, we only defined exclusions for our servers, router plus a few more spare IP addresses. In
                                        case you need to exclude more IP addresses, you can do it at this point by following these
                                        instructions:</p>
                                    <p>Select and right-click Address Pool and choose New Exclusion Range.
                                        When the Add Exclusion window comes up, enter the required range and then click Add. In our
                                        example, we've excluded the addition range 192.168.0.230 - 192.168.0.232.</p> 
                                        <img src="img_SFDLT_5/setup_server-68.png" alt=""> 
                                        <img src="img_SFDLT_5/setup_server-69.png" alt=""> 
                                    <p> Notice that the server node and scope node still has a red arrow pointing down. These red arrows
                                        pointing down mean that the server and scope are not “turned on”.
                                        The concept of “turning on” the scope is called “activating” and the concept of “turning on” the
                                        server for DHCP service is called “authorizing”. Security has some influence in the concept of
                                        authorizing a DHCP server and, to authorize a DHCP server, you must be a member of the
                                        Enterprise Admins Active Directory group.</p>  
                                    <p>Right-click the server (server001.firewall.cx) and choose Authorize , then rightclick the scope
                                        (Building A, Floor 1) and choose Activate . If the red arrows remain, refresh the MMC by going
                                        to Action > Refresh .</p> 
                                    <img src="img_SFDLT_5/setup_server-70.png" alt="">                         
                                </div>  
                                <div class="mt-3">
                                    <span class="title-ph">Managing a DHCP Database</span>
                                    <p>The DHCP database is a dynamic database that is updated when DHCP clients are assigned or as
                                        they release their Transmission Control Protocol/Internet Protocol (TCP/IP) address leases. The
                                        DHCP database contains the DHCP configuration data (such as information about scopes,
                                        reservations, options, leases, etc.).
                                        Managing DHCP Databases. Managing a DHCP server database involves backing up the
                                        database, restoring the database and reconciling the database. You can do all of these from
                                        within the DHCP manager by right-clicking on the DHCP server (see below) or they can be done
                                        from the command line.</p>
                                    <img src="img_SFDLT_5/setup_server-71.png" alt="">    
                                    <p>Backing up the database manually is as simple as right-clicking on the server and selecting
                                        backup. You will be prompted for the location for storing the backup file. The default is
                                        <span class="title-ph">\windows\system32\dhcp\backup</span>.</p> 
                                    <p>The DHCP server automatically backs up its data every 60 minutes. These automatic backups are
                                        only used if the server detects that its database is corrupt. They cannot be used to manually
                                        restore the DHCP data or migrate the data to another server.
                                        Restoring the DHCP database is as straightforward as backing it up. If the DHCP server is
                                        already running, you need to stop the DHCP Server Service, restore the database and then restart
                                        the DHCP Server Service. You will be prompted for the location of the file you want to restore
                                        from.</p>     
                                </div>
                                <div class="mt-3">
                                     <span class="title-ph">Securing and Monitoring DHCP</span>
                                     <p>The DHCP server role is responsible for dynamically assigning IP addresses to DHCP clients,
                                        and for assigning additional TCP/IP configuration information to DHCP clients as well. This
                                        includes subnet mask information, default gateway IP addresses, Domain Name System (DNS)
                                        server IP addresses, and Windows Internet Naming Service (WINS) server IP addresses</p>
                                     <p>The common threats to DHCP servers are listed here:
                                        An unauthorized user could start a denial-of-service
                                        (DoS) attack by requesting and obtaining a large number
                                        of IP addresses.
                                        A denial-of-service (DoS) attack can by launched through
                                        an unauthorized user that performs a large number of
                                        DNS dynamic updates through the DHCP server.</p> 
                                    <img src="img_SFDLT_5/setup_server-72.png" alt=""> 
                                    <p>An unauthorized user could use a rogue DHCP server to provide incorrect IP addresses to your
                                        DHCP clients.
                                        Assigning DNS IP addresses and WINS IP addresses through the DHCP server increases the
                                        likelihood of an unauthorized user accessing this information and then using it to attack your
                                        DNS servers and WINS servers</p>   
                                    <span class="title-ph">Basic Security Measures for DHCP Servers</span>  
                                    <p>Basic security measures for securing the DHCP server role are listed here: </p>   
                                    <ul>
                                        <li>Physically secure your DHCP servers.</li>
                                        <li>The NTFS file system should be utilized to protect data on the system volume. </li>
                                        <li>Apply and maintain a strong virus protection solution</li>
                                        <li>Software patches should be kept up to date.</li>
                                    </ul>  
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">Configure the server roles and features: file and share access services</span>
                                    <p>To configure file and folder security:</p>
                                    <p>Log on by using your domain user name and password. </p>
                                    <p>Start Windows Explorer.</p>
                                    <p>Expand My Computer, and then click the drive that contains the folder that you want to configure</p>
                                    <p>Right-click the folder that you want to configure, and then click Properties. </p>
                                    <p>Click the Security tab.</p>
                                    <p>Click Advanced.</p>
                                    <p>Click to clear the Allow inheritable permissions from parent to propagate to this object and
                                        all child objects. Include these with entries explicitly defined here check box.
                                        In the Security dialog box that appears, click Copy.</p>
                                    <p>NOTE: The inherited permissions are copied directly to the folder. </p> 
                                    <p>Click OK.</p>  
                                    <p>To set permissions for a group or user who is not listed in the Group or user names box, click Add.</p> 
                                    <p>In the Select Users or Groups dialog box that appears, type the names of the groups or users for
                                        whom you want to set permissions. For example, Accounting, Sales, and accounts receivable
                                        manager name).
                                        Click OK. The groups and users you added appear in the Group or user names box.
                                        To grant or deny a permission in the Permissions for User or Group box, click the user or
                                        group in the Group or user names box, and then click to select the Allow or Deny check box
                                        next to the permission that you want to allow or deny. For example:
                                        To grant Modify permissions to the Accountants group, click Accountants, and then click to
                                        select the Allow check box next to Modify. Members of this group can add new files to the
                                        folder or edit the files in the folder.
                                        To grant Read & Execute, List Folder Contents, and Read permissions to the Sales group, click
                                        Sales, and then click to select the Allow check box next to these permissions.
                                        To grant Full Control permission to the accounts receivable manager, click accounts receivable
                                        manager name, and then click to select the Allow check box next to Full Control.
                                        Click OK.
                                    </p>
                                    <span class="title-ph">Protecting Shared Files and Folders by Using Shadow Copies</span>
                                    <p>Shadow Copy (also known as Volume Snapshot Service, Volume Shadow Copy Service or VSS)
                                        is a technology included in Microsoft Windows that allows taking manual or automatic backup
                                        copies or snapshots of computer files or volumes, even when they are in use.
                                        To configure shadow copies
                                        When you configure shadow copies on the server cluster, a dependency is automatically
                                        configured between the host drive and the destination drive. You do not have to manually create
                                        this dependency. To configure shadow copies, follow these steps:
                                        Click Start, right-click My Computer, and then click Manage.
                                        Right-click Shared Folders point to All Tasks, and then click Configure Shadow Copies.
                                        In the Select a volume list, click the drive that contains the file share resource that you want to
                                        create a shadow copy for. For example, click drive R.
                                        Click Settings, and then click the destination drive for the shadow copy in the Located on this
                                        volume list.</p>
                                    <p>Note To appear in the Located on this volume list, the destination drive must contain a share.
                                      If you do not want to configure a limit to the size of the shadow copy, click No limit.</p>  
                                    <p>Click OK, and then click Enable. </p>  
                                    <p>Click Yes to enable shadow copies.</p> 
                                    <p>Note There may be a delay while the initial shadow copy is created. </p> 
                                    <p>Click OK.</p>
                                </div>
                                <div class="mt-2">
                                     <span class="title-ph">Configuring Work Folders</span>
                                     <p>Work Folders is a feature in Windows Server 2012 R2 that allows Windows users to store and
                                        access work files on personal PCs and Windows devices as well as corporate PCs. ... Work
                                        Folders can be deployed alongside existing deployments of Folder Redirection, Offline Files and
                                        home folders.</p>
                                    <p>Work Folders technology allows users to remotely access their files on the internal corporate
                                        file server and allows to work with them offline on any device (laptop, tablet or smartphone).
                                        The next time you connect to the corporate network, all changes of these files on a user device
                                        will be synchronized with the internal Windows file server.</p>    
                                </div>
                                <div class="mt-3">
                                    <span class="title-ph">Configuring Network Printing</span>
                                    <p>A print server, or printer server, is a device that connects printers to client computers over a
                                        network. It accepts print jobs from the computers and sends the jobs to the appropriate printers,
                                        queuing the jobs locally to accommodate the fact that work may arrive more quickly than the
                                        printer can handle.
                                        A print server is a computer that can process print-related jobs on a network of computers. Print
                                        servers are connected to a computer network in order to serve the need for printing jobs in a
                                        network that may contain more than one printer.</p>
                                    <span class="title-ph">Configuring Network Printing</span>  
                                    <ol>
                                        <li>Open Server Manager, by clicking on the Start button and selecting Server Manager</li>
                                        <li>Click on Dashboard, and then select Add roles and features</li>
                                        <li> On the Before You Begin page click Next and then select Role based or feature base installation then click Next.</li>
                                        <li> On the Server Selection page, select the name of the server you are logged into and then click Next.</li>
                                        <li> Select and tick the check box of Print and Document Services on the Server Roles page.<img src="img_SFDLT_5/setup_server-73.png" alt=""></li>
                                        <li>Now the component and features want to be installed. Just click Add Features and then click Next.<img src="img_SFDLT_5/setup_server-74.png" alt=""></li>
                                        <li>Leave the Features page by default and click Next. You don’t need to install any features for print and document services, so do nothing in this page.</li>
                                        <li>On the Print and Document Services page read the text and click Next.</li>
                                        <li>Select the Print Server and Internet Printing options from Role Services. <img src="img_SFDLT_5/setup_server-75.png" alt=""></li>
                                        <li>On the confirmation page, click on the Install button and the print server role will now
                                            be installed. After a few minutes the role will be installed, and you will see the confirmation
                                            page. Click Close</li>
                                        <li>When the Print Server role has been installed, you can access the Print Management
                                            console from the tools tab on Server Manager.</li>    
                                    </ol>  
                                     
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="lesson" id="section7">
                        <div class="lesson-title mt-2">Lesson 7: Test the server performance</div><hr>
                        <div>
                            <span class="title-ph">Monitoring of Server</span>
                            <p>CPU Usage</p>
                            <p>Resource Monitor is a tool built into Windows and Windows Server that provides more detail
                               about processor usage than Task Manager. ... This tab provides details about processor usage
                               such as Name, PID, Description, Status, Threads, CPU, and Average CPU. The rows of data can
                               be sorted in ascending or descending order.
                               The most basic form of monitoring comes from the Task Manager. The Task Manager has seen
                               many improvements over the years. In Windows Server 2012 and Windows 8, we now have a
                               very detailed and robust, built-in means of monitoring many performance aspects in real time. As
                               you can see from the screen shot below, the new Task Manager has a significantly different look
                               to it. We now list all Applications, Windows Processes, and Background Processes and allow
                               each item to be expanded out for more detail. In the screen shot below, you can see that we have
                               expanded out the Internet Explorer process so that it shows each window or tab that is open. This
                               allows us to see what CPU resources are being utilized be each open windows or tab. This is
                               very useful for troubleshooting an web page or app that may be frozen or causing a performance
                               on a machine.</p>
                           <img src="img_SFDLT_5/setup_server-76.png" alt=""> 
                           <p>When we select the Performance tab in Task manager, we also have a new view into the big 4
                               items. For CPU monitoring, the default view consolidates all physical and logical CPU’s into a
                               single CPU view. in the sample from my machine, the default view shows the cumulative
                               performance across all CPU’s. Even though it only shows a single CPU in this view, my machine
                               is actually a quad-processor machine. To change the view to chow all logical CPU’s, right click
                               in the main window, and select Change graph to –> Logical Processors</p>
                           <span class="title-ph">Default View</span>   
                           <img src="img_SFDLT_5/setup_server-77.png" alt="">  
                           <span class="title-ph">Showing all Logical Processors</span>
                           <img src="img_SFDLT_5/setup_server-78.png" alt="">
                           <p> Another feature we have in the Task Manager is access to the Resource Monitor. It is the link at
                               the bottom of the previous screen shot. When you open the Resource Monitor we cab get a detailed real time view of CPU usage across any process. You can check the box to the left of a
                               process to add/remove it from the graphed processes on the far right hand side.</p>
                               <img src="img_SFDLT_5/setup_server-79.png" alt=""> 
                           <p>On Windows 8 client machines, here is also an App History tab where we can find historical
                               CPU performance of the apps on our systems. This data is reflected for the previous 30 days and
                               can manually be reset at anytime from this screen. Double-clicking an application in the list will
                               launch that application.</p>       
                               <img src="img_SFDLT_5/setup_server-80.png" alt="">   
                           <p>Finally, we have a Users Tab that allows us to get information about what apps and processes are
                               consuming resources in different user sessions. Below we see my active session as well as
                               another user that logged in but is currently disconnected.</p>
                               <img src="img_SFDLT_5/setup_server-81.png" alt="">
                           <p> Now….if we really want to dig into CPU performance monitoring, we need to leverage
                               Performance Monitor and the new Hyper-V counters. However, we have to be careful to select
                               the appropriate counters. When the Hyper-V role is enabled on a Windows Server, there are a
                               whole host of new PerfMon counters and objects that are added to allow us to monitor
                               performance of the virtualized workloads. These can be found in PerfMon by selecting to add
                               counters then scrolling to the “Hyper-V” section where you will see a large number of new
                               Hyper-V related counters. What you choose to monitor will depend on what information you are
                               trying to retrieve.</p>  
                           <img src="img_SFDLT_5/setup_server-82.png" alt="">   
                           <p>in the first section we run through using the Task Manager to view RAM utilisation on a
                               Windows Server 2003 VPS. The second section covers Windows Server 2008 and using the
                               Performance Monitor to view VPS RAM utilisation.</p>

                           <div class="mt-3">
                               <span class="title-ph">Windows 2003</span>
                               <p>Start by logging into your VPS with Remote Desktop.</p>
                               <p>Click on the Task Bar located at the bottom of the VPS screen with the right mouse button. </p>
                               <p>Select Task Manager from the pop-up dialogue.</p>
                               <img src="img_SFDLT_5/setup_server-83.png" alt="">
                               <p>Once the Task Manager window has opened, click the Performance tab.</p>
                               <img src="img_SFDLT_5/setup_server-84.png" alt="">
                               <p>In the bottom section of the window, you will see Physical Memory (K), which displays your
                                   current RAM usage in kilobytes(KB). One MB is 1024KB. Dividing the values shown in this
                                   section by 1024(or roughly 1000) will give you the RAM usage in MB. e.g. 523792 KB is
                                   approximately 511 MB.
                                   A value of 32768KB (32MB) Available or less would indicate the VPS is close to, or at it's
                                   physical memory limit.</p>
                               <img src="img_SFDLT_5/setup_server-85.png" alt="">   
                               <p>The lower graph on the left side of the window shows the Page File usage. This value will
                                   increase along with your RAM usage.
                                   If your Available Physical Memory value is very low, you may also notice your Page File
                                   increasing.</p>
                               <img src="img_SFDLT_5/setup_server-86.png" alt="">
                               <p>High Page File values along with a low Available Physical Memory will often be accompanied
                                   by a noticeable performance degradation, and in some cases an unresponsive VPS. e.g. you may
                                   notice a long delay between clicking on the interface, and the interface responding, or possibly
                                   find you can't log into your VPS' desktop at all.
                                   If your VPS is performing poorly while showing values similar to those mentioned above, this is
                                   an indication that your VPS doesn't have enough RAM to meet the current requirements of the
                                   software you are running.
                                   You may want to close any programs on your VPS that aren't required and check the
                                   performance of the VPS again, or consider upgrading the amount of RAM on your VPS.
                                   RAM upgrades can be done by going to your VPS Management page in mPanel, then clicking
                                   Change next to the Memory listed. Upgrading RAM requires the VPS to be rebooted.</p>
                           </div>   
                           <div class="mt-3">
                                <span class="title-ph">Windows 2008</span>
                                <p>Start by logging into your VPS with Remote Desktop</p>
                                <p>Click the Start menu on your VPS' desktop, then using the 'Search programs and files' box
                                   simply type in resmon. Hit enter to start Resource Monitor.</p>
                               <img src="img_SFDLT_5/setup_server-87.png" alt="">
                               When the Resource Monitor window opens, click the Memory tab.
                               <img src="img_SFDLT_5/setup_server-88.png" alt="">
                               <p>In the upper section here you will see a list of running processes and how much memory they are
                                   using.
                                   The lower section shows a graphical representation of how your RAM is currently being utilised
                                   on the VPS.</p>
                               <img src="img_SFDLT_5/setup_server-89.png" alt=""> 
                               <p>Ideally the VPS should always have at least 32MB or greater Available RAM to reduce the need
                                   for the Page File to be overused, as this can result in noticeable performance degradation.
                                   If you do have noticeable VPS performance degradation, you may want to close any programs on
                                   your VPS that aren't required and check the performance again, or consider upgrading the
                                   amount of RAM on your VPS.
                                   RAM upgrades can be done by going to your VPS Management page in mPanel, then clicking
                                   Change next to the Memory listed. Upgrading RAM requires the VPS to be rebooted.</p> 
                               <span class="title-ph">I/O Network</span> 
                               <p>Network monitoring is a critical IT process where all networking components like routers,
                                   switches, firewalls, servers, and VMs are monitored for fault and performance and evaluated
                                   continuously to maintain and optimize their availability. One important aspect of network
                                   monitoring is that it should be proactive.
                                   So why is it important to monitor networks? The network is the life line of the IT
                                   infrastructure. When networks fail, the flow of information required by applications and
                                   business operations stop.
                                   Networks are dynamic environments. Network Admins are continually asked to add new users,
                                   technologies and applications to their networks. These changes can impact their ability to
                                   deliver consistent, predictable network performance.</p>

                               <span class="title-ph">Disk I/O Monitoring</span>  
                               <p>Disk I/O monitoring allows you to monitor Read and Write operations of logical disks on your
                                   machine and set thresholds so that you get alerted if any of the below metrics reaches some
                                   critical level preset by you:
                                   Reads/sec – the rate of read operations on the disk.
                                   Writes/sec – the rate of write operations on the disk.
                                   Queue length – the number of requests outstanding on the disk at the time the performance data
                                   is collected.
                                   Busy time – the percentage of elapsed time that the selected disk drive was busy servicing read
                                   or write requests.</p>
                               <span class="title-ph">Response Time</span>  
                               <p>If your server response time is slow, then your whole site will be slow, no matter how optimized
                                   your other resources are. According to Google and other speed test tools such as GTmetrix, you
                                   should aim for a server response time of less than 200ms.</p>  

                               <span class="title-ph">Why Monitor Response Time?</span>  
                               <ol type="1">
                                   <li>If a webpage is slow the experience for the visitor is usually bad. Many users simply leave a
                                       site if it doesn't respond within a few seconds.</li>
                                   <li>When a site has a high response time it is usually an indication that the server is struggling.
                                       Slow response times are really common when servers are overloaded, and the information can be
                                       used to identify server problems or to explain that there is a problem when contacting a web host.</li>
                                   <li>Slow response times and high levels of downtime are linked. A site that has a high response
                                       time is more likely to suffer from downtime than a site that is running quickly.</li>        
                               </ol>         
                           </div> 
                           <div class="mt-3">
                               <span class="title-ph"> install, configure and maintain the antivirus for the proper protection of the systems</span>
                               <p>Anti-viruses on windows server</p>
                               <p> Antivirus - A proactive antivirus engine that automatically detects and eliminates different types
                                   of malware including viruses, worms and trojans. Defense - A unique collection of preventionbased security technologies that help preserve the integrity, security and privacy of the server
                                   operating system and data.
                                   Antivirus software, or anti-virus software (abbreviated to AV software), also known as antimalware, is a computer program used to prevent, detect, and remove malware. Antivirus
                                   software was originally developed to detect and remove computer viruses, hence the name</p>
                           </div>         
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="content-right">
                        <div class="r-title">Set database server</div>
                        <div class="scrollspy-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="#section1">1:  Current and common used Windows Servers</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section2">2: Analyze data migration requirement </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#section3">3: Install server Network Operating System</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section4">4: Post-Install And Configure The Server</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section5">5: Install and administer active directory, Organizational units (OUs).</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section6">6: Deploy and configure server roles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section7">7: Test the server performance</a>
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