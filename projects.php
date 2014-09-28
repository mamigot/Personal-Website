<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>Projects</title>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>

    <div class="jumbotron">
      <div class="container">
        <h1>Projects</h1>
        <p>I study Computer Science and Electrical Engineering at New York University. I am fascinated by technology and entrepreneurship and my goal is to develop a product for the public good.</p>
        <p><a href="contact.php" class="btn btn-primary btn-lg">Contact me &raquo;</a></p>
      </div>
    </div>
    <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <a name="next"></a><h2><i>What I'm Working On</i></h2>
            <p class="lead">This is my fourth year in a five-year program of Computer Science and Electrical Engineering. Among others, I am taking "Signals and Systems" and "Electronics I" (for EE) as well as "Operating Systems" (for CS) --please find my assignments for the latter on GitHub (the latest is this <a href="https://github.com/miguel5/Two-Pass-Linker">Two-Pass Linker</a> in Java).</p>
            <p class="lead">On "the side", I intend to improve as a web application developer through projects and continue to learn to design and develop systems that are efficient, scalable and automized. I'm particularly intrigued by the flow of data and the back-end, and I recently began to use Django because I like the highly structured and <a href="https://docs.djangoproject.com/en/1.7/misc/design-philosophies/">"DRY"</a> approach it follows.</p>
            <p class="lead">In fact, I'm rewriting this website completely in order to make its content accessible through an API and integrate it heavily with platforms such as LinkedIn and GitHub. It's also a way to abstract the front-end, which would allow for the implementation of any JS framework or even a mobile app using the same data (see <a href="https://github.com/miguel5/Chair">the project on GitHub</a>).</p>
            <p class="lead">I am also a product development engineer at <a href="http://iblstudios.com/">IBL Studios Education</a>. Our mission is to provide academic institutions and businesses with the latest learning and teaching technology, from the open source Open edX platform to fully produced documentary-style courses. Visit our site to request a free 30-min demo!</p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
          <div class="col-lg-12">
              <a name="About.com"></a><h2>About.com</h2>
              <p class="lead">Last summer, I interned at <a href="http://about.com">About.com</a> in New York. It was incredible (a longer description is coming, friends).</p>
              <p class="lead"></p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
          <div class="col-lg-12">
            <a name="IBLStudios"></a><h2>IBL Studios Education</h2>
            <p class="lead">I've teamed up with my father and a group of developers, videographers and marketing specialists across the United States and Europe through <a href="http://iblstudios.com/">IBL Studios</a> to bring the latest tech innovations to academic institutions and businesses.</p>
            <p class="lead">Our mission is to provide organizations with the latest educational technology and content, including open source or custom-built platforms, marketing-oriented web development and the production of MOOCs and blended courses. One of our favorite products is the open source, amazing <a href="http://iblstudios.com/products_services/open-source-platforms/open-edx/">edX platform</a> for online courses, which we fully integrate and maintain for educational institutions and businesses that rely on workforce training programs.</p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
          <div class="col-lg-12">
              <a name="oakwide"></a><h2>OakWide</h2>
              <p class="lead">Launched a marketing automation start-up focused on inbound marketing called OakWide with my father and an excellent software engineers based in Spain and New York. </p>
              <p class="lead">Worked as a developer, strategist, inbound marketer and recruiter.  </p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
            <div class="col-lg-12">
              <a name="startupCoursera"></a><h2>Stanford's "Start-up Engineering" via Coursera</h2>
              <div class="col-lg-5">
              <p class="lead">I took Stanford University's "Start-up Engineering" via <a href="https://www.coursera.org/course/startup">Coursera</a> -taught by a <a href="https://www.coursera.org/instructor/balajis"> genomics entrepreneur</a> and a <a href="https://www.coursera.org/instructor/vijaypande">professor of chemistry, structural biology and computer science</a>. Definitely, one of the best courses I've ever taken. Check out the course materials via Dropbox: </p>
                <!-- Links to lectures -->
                <div class="panel-group" id="bossResume"> <!-- Beginning of accordion -->
                  <div class="panel"> <!-- Lectures -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseLectures">
                          Lectures
                        </a>
                      </h4>
                    </div>
                    <div id="collapseLectures" class="panel-collapse collapse">
                      <div class="panel-body">
                         <strong>Software Engineering</strong><br><br>
                          <ol>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AADmbAgAIArA4n5sdJGKVfLqa/1Introduction.pdf">Introduction</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAAKo5vwMAvH9PqlBPIEXj1Qa/2InteractiveStart.pdf">Interactive Start</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABRdDlc224MACjEfPmx4pEQa/3LinuxAndServerSideJavascript.pdf">Linux and Server-Side Javascript (SSJS)</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAAhj35l4Z_EkteJqExJhCDFa/4aLinuxCommandLine.pdf">The Linux Command Line</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AACCA0NqlrJk152aWVtd5X1aa/4bLinuxDevelopmentEnvironment.pdf">Linux Development Environment</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAAEYZ-HhLrDUC936Nsq2NS8a/6IntroHTML-CS-JS.pdf">An Introduction to HTML/CSS/JS</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AADrvwYwAG1b26ZQSSOMv5IJa/7DeploymentDNSandCustomDomains.pdf">Deployment, DNS and Custom Domains</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AACcdqmeRM_uSZ76q-v3HGSSa/10IntermediateJavascript.pdf">Intermediate Javascript</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABpjXtkROeYBdaAqGjg5V15a/12NodejsAsynchronyFlowControlDebugging.pdf">Node.js: Asynchrony, Flow Control, and Debugging</a></li>
  
                          </ol>
                          <hr>
                          <strong>Start-ups and Business</strong><br><br>
                          <ol>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAC_cYQ23KBi3IKGjBJk4P67a/5MarketResearchWireframingAndDesign.pdf">Market Research, Wireframing and Design</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AADV5oIyuJ32-G1kfoYnPMlNa/8Mobile.pdf">Mobile</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABaKtgx8OGwqbXxIaCPGpl7a/9SocialLocalMobileViralityGrowth.pdf">Social/Local/Mobile, Virality and Growth</a></li>
                              <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAB7aKT9MoiETyfvl63D3Mfwa/11RegulationDisruptionandTechnologiesof2013.pdf">Regulation, Disruption and the Technologies of 2013</a></li>
                          </ol>
                      </div>
                    </div>
                  </div> <!-- end of Lectures -->
                  <div class="panel"> <!-- Assignments -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseAssignments">
                          Programming Assignments
                        </a>
                      </h4>
                    </div>
                    <div id="collapseAssignments" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ol>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAAZCmqInocw8Y8-ap7pJcTGa/hw1.pdf">Basic Server-Side Javascript with Node.js</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AACrB__eg_GpCRQzQCDe4UZVa/hw3.pdf">Your First Crowdfunding Site</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABpp05wWWP410YU60mZuVfUa/hw4.pdf">Styling and Populating your Crowdfunding Site</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AADSUjN6GrBVgpcCDLY6LY0Aa/hw6.pdf">Deployment, Social, Analytics, Payments (24.44 MB)</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AAA9jPOpmDvhOOrc63cBKwZSa/hw7Programming%3AQuiz.pdf">Interactive Intro to SSJS, ORMs, DBs</a></li>
                        </ol>
                      </div>
                    </div>
                  </div> <!-- end of Assignments -->
                  <div class="panel"> <!-- Quizzes -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseQuizzes">
                          Quizzes
                        </a>
                      </h4>
                    </div>
                    <div id="collapseQuizzes" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ol>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AACGite0Aw2QZlTC8eQRA9R6a/quiz4MarketResearch.pdf">Market Research</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABohdz8DrPXZyQmPrBp81IXa/quiz5aHTML.pdf">HTML</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AACxp-X8nVgM1bJ83b_HFwrua/quiz5bCSS.pdf">CSS</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AABBHe5pZlq0d9dFa5Xlnqcfa/quiz5cReview.pdf">Review</a></li>
                          <li><a href="https://www.dropbox.com/sh/z5x2gp0gphhjvdw/AADkSKQj25kmb7Z9Z7yXkrTfa/quiz5dGit.pdf">Git</a></li>
                        </ol>
                      </div>
                    </div>
                  </div> <!-- end of Quizzes -->
              </div> <!-- End of accordion -->
              
            </div>

            <div class="col-lg-7">
                <br>
                <img src="data/images/startupEngineeringCertificate.png" alt="Coursera Startup Engineering Certificate" class="img-thumbnail">
            </div>
            
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <h3>Software Engineering</h3>
              <p class="lead">The purpose of the course was to "bridge the gap between academic computer science and production software engineering" by teaching Unix Command Line development, Git (version control through Github and Heroku), Node.js (including libraries like <a href=" https://github.com/caolan/async">Async</a>, <a href=" http://expressjs.com/">Express</a> and <a href=" https://npmjs.org/package/node-fs">FS</a>), front-end technologies like HTML5 and Javascript... Read the full syllabus <a href=" https://www.coursera.org/course/startup">here</a>. </p>
              <p class="lead">We were submerged in a full <strong>modern web development environment</strong> as we deployed our code across development, staging and production processes. </p>
              <img src="data/images/startupCourseraGraphic.png" alt="Coursera Development Environment" class="img-thumbnail">
              <p class="lead">We coded on virtual machines through Amazon Web Services' <a href="http://aws.amazon.com/ec2/">EC2 instances</a> because of their versatility in regards to web-scaling, safety and their set-up. Repeatedly, we pushed our code to develop, staging and master branches in <a href=" https://github.com/miguel5/bitstarter">Github </a> and Heroku. All was geared towards a final project and, even though <a href=" http://sthub.herokuapp.com/">mine</a> is still in development-phase, I've learned an invaluable amount of stuff and I feel confident to use what I've learned to create something awesome. </p>
            </div>
            
            <div class="col-lg-12">
              <h3>Start-ups and Business</h3>
              <p class="lead">The course was not only great because of what it taught about software engineering, but because of what we learned about start-ups and markets. Feel free to browse through the lectures via the link above. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
              <img src="data/images/rsz_startupcourseramarket.png" alt="Coursera Market Graph" class="img-thumbnail">
            </div>
            <div class="col-lg-7">
              <p class="lead">We performed market analyses and studied start-ups' economies of scale. There are many interesting lessons and graphics that the instructors provided, namely that titled "Market size vs. novelty" which incentivizes entrepreneurs to determine the kinds of products they'll have to build in order to achieve a specific status in the industry. </p>
              <p class="lead">Not saying that the lower-left category is worthless (think about <a href="http://techcrunch.com/2013/06/22/source-snapchat-snaps-up-80m-from-ivp-at-a-800m-valuation/">Snapchat</a>, which built an app that found an incredibly high great demand from young people), but I think that a product that has the capacity to make a positive difference in the world must fall closer to the right on the graph. Of course, there are always factors like regulation and lack of funding that tempt us into making a most-start-ups-like product, but still. If we are in a position wherein we can help others, we must do so. </p>
              <p class="lead">Further, we studied ubiquitous facets of inbound marketing like  search-engine optimization and the implementation of analytics, as well as strategies in product development pertaining to <a href="http://en.wikipedia.org/wiki/Minimum_viable_product">Minimum Viable Product</a> and the surge and increasing relevance of mobile technology, among others. </p>
              <p class="lead">The professors provided incredibly rich guidance for those of us who are launching start-ups through their lectures, but they also pointed us to great material like <a href="http://blakemasters.com/peter-thiels-cs183-startup">Peter Thiel's start-up course</a> and <a href="http://paulgraham.com/articles.html">Paul Graham's essays</a>. </p>
              <p class="lead">I look forward to implementing all I've learned and taking more MOOCs in the future. </p>
              <p><a class="btn btn-default" href="https://www.coursera.org/course/startup">View on Coursera &raquo;</a></p>
            </div>
        </div>
        
        <br><br>
        <div class="row">
            <div class="col-lg-12">
              <a name="disarmingRobot"></a><h2>Disarming Robot</h2>
              <p class="lead">
                Everyone who studies Engineering at NYU-Poly takes Introduction to Engineering and Design (EG1003)</a>, marked by a semester-long project for which students in groups of two or three design, program and assemble fully-autonomous robots to endure obstacle courses. I took the course in the fall of 2012, and my friend <a href="http://www.linkedin.com/pub/vicente-ochoa-jr/75/191/a09">Vicente Ochoa</a> and I were assigned the <a href="https://manual.eg.poly.edu/index.php/Bomb_Disarming_Robot_(BDR)"> Bomb Disarming Robot</a> or BDR.
              </p>
              <p class="lead">
                Assigned to reach a checkpoint and safely return to its starting-point, the BDR faced an obstacle course that was riddled with several types of hills, decoy "bombs" (they seemed like buttons to the less imaginative eye) and challenges which could only be overcome if its mechanical structure fulfilled a number of characteristics. Programming the robot was also complicated, considering that our intention was to primarily rely on its sensors even though the circuit did not always allow it.
              </p>
              <p class="lead">
                Despite the technical challenges that the robot presented, the goal of the project was to introduce us to facets of "real-world engineering" that few other courses would cover, such as cost estimation and project planning software. Most importantly, we were taught to present and discuss our milestones and achievements in a public setting. Not as students in an introductory engineering course, but as salesmen and marketers pitching our products. For our final presentation, we had to "sell" our robot to our professor.
              </p>
              <p class="lead">
                Fortunately, Vicente and I were successful and we were awarded the <strong>Nick Russo Award for Outstanding General Engineering and Design</strong>. In the words of Richard, my TA:
              </p>
              <blockquote>
                <p>You showed ingenuity, quick thinking, and guts (risk taker). Presentation was flawless in describing your final design over your original design. Your team fulfilled the purpose of this final presentation to sell your idea to potential investors. Not only was the design extremely effective, you sold the idea the best.</p>
                <small>Richard Kim, TA</small>
              </blockquote>
              <p><a class="btn btn-default" href="http://www.youtube.com/watch?v=txtjvzsdBK4">Watch video &raquo;</a></p>
              <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="data/images/rsz_isorobot.png" alt="IsoView" class="img-thumbnail">
            </div>
            <div class="col-lg-6">
                <img src="data/images/rsz_siderobot.png" alt="IsoView" class="img-thumbnail">
            </div>
        </div>
      
        <br><br>
        <div class="row">
          <div class="col-lg-12">
              <a name="ppm"></a><h2>Polytechnic Playing Machine</h2>
              <p class="lead">Designed and implemented the logic of the machine player of a digital game on programmable hardware. Created, analyzed and tested the schematics of the system using Xilinx ISE as well as an FPGA (field-programmable gate array) board.</p>
              <p class="lead">The objective of the term project for the course was to develop the strategy that the machine player would follow as a result of users' input and other randomized variables, and implement it following a top-down design approach and the industry's best practices.</p>
              <p class="lead">The schematic below is clearly divided into an information gathering subblock, a control unit which uses a counter to determine the logic of the machine player as well as when its process should end, and a decision making section. Though it uses comparators, counters, gates, decoders, registers and multiplexers, it essentially behaves as a function written in any kind of software (see <a href="http://www.xilinx.com/support/sw_manuals/libguide.pdf">Xilinx's guide</a> to learn what each component does).</p>
          </div>
          <object data="data/ppm.pdf" type="application/pdf" width="100%" height="550px">
             <p>View the schematic <a href="data/ppm.pdf">here</a> if it's not being rendered.</p>
          </object>
          <div class="col-lg-12">
              <br>
              <p class="lead">Being able to apply the concepts that are typically expressed through Java, C or Python on programmable hardware through a program like this is really interesting. There are no for loops, while loops or variables other than the ones that are used to name wires. Consequently, one has to be aware of whether he's solving a problem combinationally or sequentially (in other words, in one or multiple clock periods), since in order to make data accessible in the future it may have to be stored in an x-bit register.</p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
          <div class="col-lg-12">
            <a name="smartCMS"></a><h2>Smart Content Manager System (Facebook NY Hackathon)</h2>
            <p class="lead">Implemented the first phase of a "smart" content manager system (CMS) using Javascript and PHP as well as the Raptor Editor, FAROO Search and Alchemy APIs. The objective is to integrate existing tools to make the best possible CMS. Not only does the text editor need to follow the WYSIWYG model, but it needs to allow the user to create content that is relevant from an SEO perspective.</p>
            <p class="lead">The former entailed the use of the open-source Raptor Editor and the latter was achieved through FAROO, which performed filtered search queries for user-entered keywords or topics and instantaneously returned a series of relevant results. These were not only displayed, but inputted through Alchemy to obtain relevant keywords and analyses based on the API's machine learning technology.</p>
            <p class="lead">The project continues to be developed by my friend <a href="http://www.linkedin.com/in/christopherwoessner">Chris Woessner</a> and I, since we plan on drastically improving the functionality and user-experience components in the near future. In the meantime, check out our code via <a href="https://github.com/miguel5/Facebook-Hackathon">GitHub</a> and the <a href="http://hack.miguelamigotgonzalez.com/">initial phase of the CMS</a>.</p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
            <div class="col-lg-6">
              <a name="responsiveWebDesign"></a><h2>Responsive Website</h2>
              <p class="lead">Considering that technology is increasingly becoming mobile and that this requires websites to be responsive to differently-sized screens, I decided to redesign and code my site with <a href="http://getbootstrap.com/">Twitter Bootstrap 3</a>. The back-end is powered by PHP and I'm using the <a href="http://stackoverflow.com/questions/13569/mysqli-or-pdo-what-are-the-pros-and-cons">PDO driver</a> to store all data in a MySQl database. Mainly through my <a href="http://cms.miguelamigotgonzalez.com/">CMS</a>, I'm working to implement front-end Javascript. </p>
              <p><a class="btn btn-default" href="http://www.miguelamigotgonzalez.com/">Index page &raquo;</a></p>
            </div>
            <div class="col-lg-6">
              <h2>Online Forum</h2>
              <p class="lead">When I was learning PHP, I decided to build a basic online forum that would handle questions and comments, which are stored on a MySQL database. Doing so taught me to code <a href="http://en.wikipedia.org/wiki/Create,_read,_update_and_delete">CRUD</a> applications (being <a href="http://cms.miguelamigotgonzalez.com/">built</a> at the moment), which only differ from this forum because of the few added MySQL commands. </p>
              <p><a class="btn btn-default" href="http://miguelamigotgonzalez.com/oldVersionWebsite/forum/allquestions.php">Visit the forum &raquo;</a></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <img src="data/images/rsz_binarywarriors.png" alt="googleTag" class="img-thumbnail">
            </div>
            <div class="col-lg-8">
              <h2>Google Apps Hackathon</h2>
              <p class="lead">At the <a href="http://www.hack4ed.org/">hackathon</a>, sponsored by the Google Apps Script Developer Team, my friend <a href="http://www.linkedin.com/pub/ryan-foo/53/625/1b9">Ryan Foo</a> and I developed and presented a program using Google Apps Script that allows users to publish content onto Google Sites via Google Forms. </p>
              <p class="lead">Though the scope of Google Apps Script is fairly limited from a web development standpoint, it is useful because it is based on Javascript --the soon-to-become <a href="http://readwrite.com/2013/08/09/why-javascript-will-become-the-dominant-programming-language-of-the-enterprise#awesm=~of1E0vivDT7ybJ">"dominant language of the enterprise for IT".</a></p>
              <p class="lead">I look forward to attending more hackathons in the near future, like <a href="http://hackny.org/a/">HackNY</a>.</p>
              <p><a class="btn btn-default" href="http://www.hack4ed.org/">Official home page &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="data/images/rsz_hackathoncomp.png" alt="hackathonComp" class="img-thumbnail">
            </div>
            <div class="col-lg-4">
                <img src="data/images/rsz_hackathonpres.png" alt="hackathonPres" class="img-thumbnail">
            </div>
            <div class="col-lg-4">
                <img src="data/images/rsz_formblog_screenshot.png" alt="hackathonComp" class="img-thumbnail">
            </div>
        </div>
        <br>
                
    </div>
      
    <br><br><hr>
    <div class="container">
      
      <!-- Beginning of resume (add includes file because aboutme page also has it) -->
      <a name="resume"></a><br><br>
    
        <?php
          require_once($DOCUMENT_ROOT. 'includes/bodyResume.php');
          echo resumeAccordion();
        ?>
      
      
    </div><!--/.container-->


    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
  </body>
</html>
