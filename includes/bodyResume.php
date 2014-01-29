<?php
//Resume in the body tag
//Place within Bootstrap's <div class="container"> tags
//==============================================================

//Bootstrap core Javascript
//Body <script> tags
function resumeAccordion(){
return <<<HTML
    <h1>Resume</h1>
        <br>
        <div class="panel-group" id="bossResume"> <!-- Beginning of accordion/resume -->
            <div class="panel"> <!-- Experience -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseExperience">
                    Experience
                  </a>
                </h4>
              </div>
              <!-- subcategory -->
              <div id="collapseExperience" class="panel-collapse collapse in">
                <div class="panel-body">
                    <strong>Co-Founder at OakWide</strong><br><i>June 2013 - Present</i><br><br>
                    <p>Launching a marketing automation start-up and working as a developer, strategist, inbound marketer and recruiter.</p>
                    <hr>
                    <strong>Head of Product Development and Sales at <a href="http://www.iblstudios.com/">IBL Studios</a></strong><br><i>June 2010 - Present</i><br><br>
                    <p>Assembled a series of software and content-oriented products and services designed to provide academic institutions and businesses with the most innovative educational technology.</p>
                    <p>Analyzed and contributed to the development of a business model based on the implementation of open source software, custom-built platforms, strategic web development and video production (including MOOCs and blended courses).</p>
                    <p>Marketed IBL Studios' products through written content on our website and one-on-one sales with clients.</p>
                    <hr>
                    <strong>Marketing, Research and Sales Intern at <a href="http://www.mobiconsumers.com/">Mobile Consumer LLC</a></strong><br><i>June 2011 - August 2011</i><br><br>
                    <p>Researched and analyzed trends driving the mobile consumer industry.</p>
                    <p>Promoted the mobile couponing application among consumers and retailers in Greenwich, CT.</p>
                    <hr>
                    <strong>Market Segment Identification Intern at <a href="http://www.gpny.com/">Grand Prix New York</a></strong><br><i>May 2011 - June 2011</i><br><br>
                    <p>Planned and executed kart racing events for teenagers.</p>
                    <p>Publicized events through social media.</p>
                    <hr>
                    <strong>Private Tutor</strong><br><i>February 2011 - June 2011</i><br><br>
                    <p>Taught mathematics and helped my student acquire self-confidence and feel motivated to confront academic challenges.</p>
                </div>
              </div>
              <!-- end of subcategory -->
            </div> <!-- end of Experience -->
            <div class="panel"> <!-- Honors and Awards -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseHonors">
                    Honors and Awards
                  </a>
                </h4>
              </div>
              <div id="collapseHonors" class="panel-collapse collapse">
                <div class="panel-body">
                    <strong>Nick Russo Award for Outstanding General Engineering Design</strong><br><i>July 2013</i><br><br>
                    <p>Awarded at the <a href="http://www.poly.edu/">Polytechnic Institute of New York University</a> for the disarming robot that was designed and built for General Engineering 1003</p>
                </div>
              </div>
            </div> <!-- end of Honors and Awards -->
            <div class="panel"> <!-- Courses -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseCourses">
                    Courses
                  </a>
                </h4>
              </div>
              <div id="collapseCourses" class="panel-collapse collapse">
                <div class="panel-body">
                    <strong>Start-up Engineering</strong><br><i><a href="https://www.coursera.org/course/startup">Stanford University - Coursera.org</a></i><br><br>
                    <p>"Learn the engineering skills needed to build a technology startup from the ground up"</p><!-- Link to review I'll write of the class -->
                    <p>Find my notes and completed assignments at <a href="https://www.dropbox.com/sh/ckhhsfoqm83lyj5/vOAz8WkJIm">this Dropbox folder</a></p>
                    <hr>
                    <strong>Mathematics</strong><br><br>
                    <ul>
                        <li>Ordinary Differential Equations</li>
                        <li>Linear Algebra</li>
                        <li>Single and Multivariable Calculus (Calculus I-III)</li>
                        <li>Discrete Mathematics</li>
                    </ul>
                    <hr>
                    <strong>Computer Science</strong><br><br>
                    <ul>
                        <li>Data Structures</li>
                        <li>Introduction to Computer Science (Java)</li>
                        <li>Introduction to Computer Programming (Python)</li>
                    </ul>
                    <hr>
                    <strong>Physics and Chemistry</strong><br><br>
                    <ul>
                        <li>Physics I, II, III</li>
                        <li>Experimental Laboratory I, II, III</li>
                        <li>General Chemistry for Engineers</li>
                    </ul>
                    <hr>
                    <strong>Electrical Engineering</strong><br><br>
                    <ul>
                        <li>Fundamentals of Electric Circuits I</li>
                        <li>Introduction to Engineering and Design</li>
                    </ul>
                    <hr>
                    <strong>Miscellaneous</strong><br><br>
                    <ul>
                        <li>Economics Principles I (Macroeconomics)</li>
                        <li>Texts and Ideas: Antiquity and the Enlightenment</li>
                        <li>Cultures and Contexts: Greco-Roman Egypt</li>
                        <li>Expressive Cultures: Architecture in NY Field Study</li>
                        <li>Writing the Essay</li>
                        <li>Investigative Reporting, Data Journalism, and Advanced Nonsense Detection (Freshman Seminar)</li>
                    </ul>
                </div>
              </div>
            </div> <!-- end of Courses -->
            <div class="panel"> <!-- Programming -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseProgramming">
                    Programming
                  </a>
                </h4>
              </div>
              <div id="collapseProgramming" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li>Java</li>
                        <li>PHP</li>
                        <li>JavaScript</li>
                        <li>HTML5 and CSS3</li>
                        <li>Python</li>
                        <li>MySQL</li>
                    </ul>
                </div>
              </div>
            </div> <!-- end of Programming -->
            <div class="panel"> <!-- Languages -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseLanguages">
                    Languages
                  </a>
                </h4>
              </div>
              <div id="collapseLanguages" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li>English</li>
                        <li>Spanish</li>
                    </ul>
                </div>
              </div>
            </div> <!-- end of Languages -->
            <div class="panel"> <!-- Projects -->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#bossResume" href="#collapseProjects">
                    Projects
                  </a>
                </h4>
              </div>
              <div id="collapseProjects" class="panel-collapse collapse">
                <div class="panel-body">
                    <strong><a href="http://www.youtube.com/watch?v=txtjvzsdBK4">Disarming Robot (Nick Russo Award for Outstanding General Engineering Design)</a></strong><br><i>September 2012 - December 2012</i><br><br>
                    <p>Successfully designed, programmed and assembled a fully autonomous robot as part of a small team.</p>
                    <p>The robot navigated around a circuit and disarmed a modeled bomb while avoiding decoys.</p>
                    <p>Developed and adhered to a budget and a schedule marked by milestones.</p>
                    <hr>
                    <strong><a href="https://github.com/miguel5/Facebook-Hackathon">Smart Content Manager System (Facebook Hackathon)</a></strong><br><i>Fall 2013 - Present</i><br><br>
                    <p>Developed the first phase of a smart CMS that suggests relevant content to users based on chosen topics and SEO.</p>
                    <p>Implemented it using PHP and JavaScript, as well as machine learning APIs and an open-source WYSIWYG editor.</p>
                    <hr>
                    <strong>Responsive Personal Website</strong><br><i>August 2013 - Present</i><br><br>
                    <p>Developed a personal website using HTML5, CSS3, Javascript and PHP. I also implemented the Twitter Bootstrap 3 web framework.</p>
                    <p>Its purpose is not only to provide its visitors with key information about my motivations and personality through the mentioned sections, but to provide me with a medium through which I can test certain elements and tools of programming or web design, like Google Analytics and MySQL.</p>
                    <hr>
                    <strong><a href="http://www.hack4ed.org/">2013 NY-NJ Google Apps Scripts for Education Hackathon</a></strong><br><i>March 2013</i><br><br>
                    <p>Developed a script using JavaScript-based Google Apps Script that allows users to publish content via Google Forms.</p>
                    <p>Programmed users' input to be extracted from a database populated through Google Forms into Google Sites.</p>
                </div>
              </div>
            </div> <!-- end of Projects -->
        </div> <!-- End of accordion / resume -->
        <br>
        <p>
          <a class="btn btn-lg btn-primary" href="materialFiles/resumeMiguel.pdf">Download PDF &raquo;</a>
        </p>
      <!-- End of entire resume block -->
HTML;
}

?>