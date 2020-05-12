<!-- <?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
  $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: ' . $location);
  exit;
}

require('constant.php');

?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css"/>
    <title>Online Portfolio | Elymar Nadela</title>
    <meta name="keywords" content="portfolio">
    <meta name="description" content="This is my official personal website. You can check my full information and web projects completed.">
    <script src="js/modernizr.js" type="text/javascript"></script>
  </head>
  <body class="wrapper">
    <div id="loader-wrapper">
      <div id="loader">
        <div class="circ-one"></div>
        <div class="circ-two"></div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <header>
      <nav class="pt-4 px-5 navbar fixed-top navbar-expand-lg navbar-dark">
        <a title="EON" class="navbar-brand" href="#">EON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a title="About Me" class="nav-link" id="about" href="#aboutModal">About Me</a>
            </li>        
            <li class="nav-item pl-3">
              <a title="Resume" class="nav-link" id="resume" href="#resumeModal">Resume</a>
            </li>
            <li class="nav-item pl-3">
              <a title="News" class="nav-link" id="news" href="#newsModal">News</a>
            </li>
            <li class="nav-item pl-3">
              <a title="Porfolio" class="nav-link" id="portfolio" href="#porfolioModal">Portfolio</a>
            </li>
            <li class="nav-item pl-3">
              <a title="Contact" class="nav-link" id="contact" href="#contactModal">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="home">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
          <section class=" home__intro cd-intro">
            <h1 class="home__title pb-3">Elymar Nadela</h1>
            <h4 class="home__headline cd-headline clip is-full-width">
               <span>I'm a</span>
               <span class="cd-words-wrapper">
                  <b class="is-visible">Freelancer.</b>
                  <b>Web Developer.</b>
                  <b>Gamer.</b>
               </span>
            </h1>
         </section>
        </div>
      </div>
    </section>
    <!--About Modal-->
    <div id="aboutModal" class="py-2 content-box about-me">      
      <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
      <div class="close-aboutModal"> 
        <a title="close" href="#" class="close"></a>
      </div>
      <div class="modal-content pt-5">
        <section class="about-bio pb-5">
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">About Me</h2>
            <p class="mb-5">Innovative Front End Developer with more than 6 years of experience building websites and believing that mobile-first responsive website is a thing. Proficient in HTML5, CSS3, Javascript, other javascript libraries frameworks and SCSS/SASS for css preprocessor. Creating internal web based system using PHP as the back end. Maintaining blog websites using wordpress CMS and update to the latest version.</p> 
            <div class="row pt-5">
              <div class="col-12 col-sm-5">
                <img alt="About Me" title="About Me" src="images/about_me.jpg" class="img-fluid pb-5" alt="">
              </div>
              <div class="col-12 col-sm-7">
                <div class="row pb-3">
                  <div class="col-12 col-sm-2"><p>Name:</p></div>
                  <div class="col-12"><p><span class="color-gray">Elymar Nadela</span></p></div>
                </div>
                <div class="row pb-3">
                  <div class="col-12 col-sm-2"><p>Age:</p></div>
                  <div class="col-12"><p><span class="color-gray">29</span></p></div>
                </div>
                <div class="row pb-3">
                  <div class="col-12 col-sm-2"><p>Email:</p></div>
                  <div class="col-12"><p><a title="pjaynadela@gmail.com" href="mailto:pjaynadela@gmail.com"><span class="color-secondary">pjaynadela@gmail.com</span></a></p></div>
                </div>
                <div class="row pb-3">
                  <div class="col-12 col-sm-2"><p>Born:</p></div>
                  <div class="col-12"><p><span class="color-gray">Cebu City, Philippines</span></p></div>
                </div>
                <div class="row pb-3">
                  <div class="col-12 col-sm-2"><p>Hobbies:</p></div>
                  <div class="col-12"><p><span class="color-gray">playing online games in mobile and computer, jogging, solving sudoku and rubik's cube puzzle</span></p></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="about-service py-5">
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">
              My Services 
            </h2>
            <div class="row pt-5">
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card mb-5 rounded border border-color-secondary service__card">
                  <img alt="Static Website" title="Static Website" src="images/svg/static_website.svg" class="img-thumbnail rounded-0 card__img border-0 p-5">
                  <div class="card-body text-center">
                    <h5 class="card-title py-3">Static Website Creation</h5>
                    <p class="card-text pb-3">Create simple website using HTML/CSS/JS</p>
                  </div>
                </div>    
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card mb-5 rounded border border-color-secondary service__card">
                  <img alt="Web Developer" title="Web Developer" src="images/svg/web_developer.svg" class="img-thumbnail rounded-0 card__img border-0 p-5">
                  <div class="card-body text-center">
                    <h5 class="card-title py-3">Web Development</h5>
                    <p class="card-text pb-3">Develop a web-based system</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card mb-5 rounded border border-color-secondary service__card">
                  <img alt="Web Setup" title="Web Setup" src="images/svg/web_setup.svg" class="img-thumbnail rounded-0 card__img border-0 p-5">
                  <div class="card-body text-center">
                    <h5 class="card-title py-3">Website Online Setup</h5>
                    <p class="card-text  pb-3">Host your website</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card mb-5 rounded border border-color-secondary service__card">
                  <img alt="Logo Design" title="Logo Design" src="images/svg/logo_design.svg" class="img-thumbnail rounded-0 card__img border-0 p-5">
                  <div class="card-body text-center">
                    <h5 class="card-title py-3">Logo Design</h5>
                    <p class="card-text pb-3">Design a logo</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card mb-5 rounded border border-color-secondary service__card">
                  <img alt="Web Design" title="Web Design" src="images/svg/web_design.svg" class="img-thumbnail rounded-0 card__img border-0 p-5">
                  <div class="card-body text-center">
                    <h5 class="card-title py-3">Web Design</h5>
                    <p class="card-text pb-3">Create a webpage layout and graphic design</p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div>
    <!--Resume Modal-->
    <div id="resumeModal" class="py-2 content-box resume">
      <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
      <div class="close-resumeModal"> 
        <a title="close" href="#" class="close"></a>
      </div>
      <div class="modal-content pt-5">
        <section class="resume pb-5">
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">My Resume</h2>
            <div class="row pt-5">
              <div class="col-12">
                <div id="accordion" class="pb-5">
                  <h3 class="pb-3 mb-3">Work Experience</h3>                  
                  <!-- EXP 1 -->
                  <div class="resume_accordion border-left border-color-secondary" id="exp1">
                    <h4 class="btn resume_accordion__title color-secondary pb-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      PHP Developer, Specialist / MIS Specialist @ Author Solutions Philippines, Inc.</h4>
                  </div>              
                  <div id="collapseOne" class="collapse show ml-5 pb-5" aria-labelledby="exp1" data-parent="#accordion">                    
                    <p class="pb-3">December 2013 – present</p>
                    <ul class="resume_accordion-list">
                      <li class="resume_accordion-list__item">Coordinate with the content team and update the website using CMS like Ektron and Sitecore</li>
                      <li class="resume_accordion-list__item">Convert the mockup given by the web design team to a working website and make it mobile-first responsive</li>
                      <li class="resume_accordion-list__item">Creates landing page using the unbounce web application</li>
                      <li class="resume_accordion-list__item">Set up some product catalogue information to the Salesforce advised from the products team</li>
                      <li class="resume_accordion-list__item">Develop web based system using PHP as back end to be used by the lead generation and lead distribution team and will only accessible internally</li>
                      <li class="resume_accordion-list__item">Update all the blogs website and making it use the latest version of wordpress and its plugins</li>
                      <li class="resume_accordion-list__item">Handle all hosting accounts and do the task of installing SSL, migrate the microsites and blog websites</li>
                      <li class="resume_accordion-list__item">Communicate with the vendors/3rd party no how to implement the API to receive/send leads data to their system</li>
                      <li class="resume_accordion-list__item">Creates API to communicate send leads request to the server of US and record the server logs if success or fail</li>
                    </ul>
                  </div>
                  <!-- End of EXP 1 -->
                  <!-- EXP 2 -->
                  <div class="resume_accordion border-left border-color-secondary" id="exp2">
                    <h4 class="btn resume_accordion__title color-secondary pb-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                      Part-time Front End Developer / IT Head @ eLocker Technologies</h4>
                  </div>              
                  <div id="collapseTwo" class="collapse show ml-5" aria-labelledby="exp2" data-parent="#accordion">                    
                      <p class="pb-3">June 2016 – June 2018</p>
                      <ul class="resume_accordion-list">
                        <li class="resume_accordion-list__item">Converts mockup images to a working websites making it web responsive across all devices.</li>
                        <li class="resume_accordion-list__item">Coordinate with the C#.net back-end developer how to develop the front end development according to the requirements</li>
                        <li class="resume_accordion-list__item">Meet once with the client and perform demo with the finished web based system</li>
                        <li class="resume_accordion-list__item">Set meeting with the potential clients on how we can make their lives convenient easy and less hassle by creating their web system</li>
                      </ul>
                  </div>
                  <!-- End of EXP 2 -->
                  <!-- EXP 3 -->
                  <div class="resume_accordion border-left border-color-secondary" id="exp3">
                    <h4 class="btn resume_accordion__title color-secondary pb-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                      Junior VB.net Programmer @ Charis Network Solutions</h4>
                  </div>              
                  <div id="collapseThree" class="collapse show ml-5" aria-labelledby="exp3" data-parent="#accordion">                    
                      <p class="pb-3">April 2013 – October 2013</p>
                      <ul class="resume_accordion-list">
                        <li class="resume_accordion-list__item">Plan and create database diagram for the sytem that we will create</li>
                        <li class="resume_accordion-list__item">Builds website and its functionality using VB.net</li>
                        <li class="resume_accordion-list__item">Contacts the client and talks about the update of the progress of the system being develop</li>
                      </ul>
                  </div>
                  <!-- End of EXP 3 -->
                  <!-- EXP 4 -->
                  <div class="resume_accordion border-left border-color-secondary" id="exp4">
                    <h4 class="btn resume_accordion__title color-secondary pb-3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                      Computer Technician @ Ng Khai Development Corporation</h4>
                  </div>              
                  <div id="collapseFour" class="collapse show ml-5" aria-labelledby="exp4" data-parent="#accordion">                    
                      <p class="pb-3">January 2013 – March 2013</p>
                      <ul class="resume_accordion-list">
                        <li class="resume_accordion-list__item">Fix all defective parts of the computer</li>
                        <li class="resume_accordion-list__item">Set-up workstation PC to the BPO companies and also set-up computer laboratory to the schools from mainland and mountain school barangays</li>
                        <li class="resume_accordion-list__item">Install CCTVs, phone cable and internet cable to the clients office/building</li>
                      </ul>
                  </div>
                  <!-- End of EXP 4 -->
                  <!-- EXP 5 -->
                  <div class="resume_accordion border-left border-color-secondary" id="exp5">
                    <h4 class="btn resume_accordion__title color-secondary pb-3" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                      Production Associate @ Innodata Knowledge Services, Inc.</h4>
                  </div>              
                  <div id="collapseFive" class="collapse show ml-5" aria-labelledby="exp5" data-parent="#accordion">                    
                      <p class="pb-3">October 2009 – March 2010</p>
                      <ul class="resume_accordion-list">
                        <li class="resume_accordion-list__item">Convert hardbooks copy to an XML format by using XML parser</li>
                      </ul>
                  </div>
                  <!-- End of EXP 4 -->
                </div>
                <div id="education" class="pb-5">
                  <h3 class="pb-3 mb-3">Education</h3>                  
                  <!-- Education 1 -->
                  <div class="resume_accordion border-left border-color-secondary" id="edu1">
                    <h4 class="btn resume_accordion__title color-secondary pb-3">
                      Bachelor of Science in Information Technology @ CEBU INSTITUTE OF TECHNOLOGY - UNIVERSITY</h4>
                  </div>              
                  <div id="edu1" class="ml-5 pb-5">                    
                    <p>June 2011 – October 2012</p>                    
                  </div>
                  <!-- End of Education 1 -->
                  <!-- Education 2 -->
                  <div class="resume_accordion border-left border-color-secondary">
                    <h4 class="btn resume_accordion__title color-secondary pb-3">
                      Bachelor of Science in Computer Science @ UNIVERSITY OF SAN JOSE - RECOLETOS</h4>
                  </div>              
                  <div class="ml-5 pb-5">
                    <p>June 2010 – March 2011</p>                    
                  </div>
                  <!-- End of Education 2 -->
                  <!-- Education 2 -->
                  <div class="resume_accordion border-left border-color-secondary">
                    <h4 class="btn resume_accordion__title color-secondary pb-3">
                      Bachelor of Science in Computer Science @ CEBU INSTITUTE OF TECHNOLOGY - UNIVERSITY</h4>
                  </div>              
                  <div class="ml-5 pb-5">
                    <p>June 2010 – March 2011</p>                    
                  </div>
                  <!-- End of Education 2 -->
                </div>
                <div id="skill">
                  <h3 class="pb-3 mb-3">My Skills</h3>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>Front End Development: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-secondary">HTML5</span> 
                        <span class="badge badge-pill badge-primary">CSS3</span> 
                        <span class="badge badge-pill badge-primary">jQuery</span> 
                        <span class="badge badge-pill badge-warning">javascript</span> 
                        <span class="badge badge-pill badge-light">XML</span> 
                        <span class="badge badge-pill badge-warning">JSON</span> 
                        <span class="badge badge-pill badge-danger">aJax</span>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>CSS Frameworks: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-primary">Boostrap v3, v4</span> 
                        <span class="badge badge-pill badge-light">Bulma</span> 
                        <span class="badge badge-pill badge-danger">Material Design</span> 
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>CSS Methodology: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-dark">BEM CSS</span> 
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>CSS Preprocessor: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-primary">SASS/SCSS</span> 
                        <span class="badge badge-pill badge-warning">LESS</span> 
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>Back End Development: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-secondary">PHP 5, PHP 7</span> 
                        <span class="badge badge-pill badge-light">Codeigniter (PHP Framework)</span> 
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>Database: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-light">MySQL</span> 
                        <span class="badge badge-pill badge-dark">SQL</span> 
                        <span class="badge badge-pill badge-primary">MS SQL Server</span> 
                        <span class="badge badge-pill badge-success">MS Access</span> 
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>Version Control: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-success">SVN Tortoise</span> 
                        <span class="badge badge-pill badge-dark">Github Desktop</span> 
                        <span class="badge badge-pill badge-light">Git</span>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-4"><p>Web Application: </p></div>
                    <div class="col-12 col-sm-8">
                      <p>
                        <span class="badge badge-pill badge-primary">Salesforce (CRM)</span> 
                        <span class="badge badge-pill badge-light">Ektron CMS</span> 
                        <span class="badge badge-pill badge-info">Wordpress</span>
                        <span class="badge badge-pill badge-warning">Sitecore CMS</span>
                        <span class="badge badge-pill badge-secondary">Unbounce Page</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!--News Modal-->
    <div id="newsModal" class="py-2 content-box resume">
      <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
      <div class="close-newsModal"> 
        <a title="close" href="#" class="close"></a>
      </div>
      <div class="modal-content pt-5">
        <section>
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">News</h2>
            <div class="row">
              <div class="col-12 col-sm-4 pb-5">                  
                <div class="news_card border-top-0">
                  <a title="Sunstar" href="https://www.sunstar.com.ph/article/81311" target="_blank" class="news__link">
                    <img alt="Sunstar" title="Sunstar" src="images/sunstar.png" class="news__img img-fluid mb-3">
                    <h5 class="news__header-title pb-5 px-3">Group leaves corporate ladder for shot at technology startup</h5>
                    <span class="pull-right p-2 news__date"><small><em> July 20, 2016</em></small></span>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-4 pb-5">                  
                <div class="news_card border-top-0">
                  <a title="Cdn" href="https://www.utterlyrandomtechie.com/elocker-ph-launch/" target="_blank" class="news__link">
                    <img alt="Cdn" title="Cdn" src="images/cdn.png" class="news__img img-fluid mb-3">
                    <h5 class="news__header-title pb-5 px-3">eLocker PH Media Launch!</h5>
                    <span class="pull-right p-2 news__date"><small><em> July 19, 2016</em></small></span>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-4 pb-5">                  
                <div class="news_card border-top-0">
                  <a title="Utterly" href="https://www.utterlyrandomtechie.com/elocker-ph-launch/" target="_blank" class="news__link">
                    <img alt="Utterly" title="Utterly" src="images/utterly.png" class="news__img img-fluid mb-3">
                    <h5 class="news__header-title pb-5 px-3">Digital laundry start-up outlines expansion plans</h5>
                    <span class="pull-right p-2 news__date"><small><em> June 26, 2016</em></small></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!--Portfolio Modal-->
    <div id="porfolioModal" class="py-2 content-box portfolio">
      <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
      <div class="close-porfolioModal"> 
        <a title="close" href="#" class="close"></a>
      </div>
      <div class="modal-content pt-5">
        <section class="pb-5">
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">Portfolio</h2>
            <div class="row py-5">
              <div class="col-12 col-sm-4">
                <div class="card mb-5 rounded border border-color-secondary portfolio__card">
                  <a title="Elocker Technologies" href="https://www.elockertechnologies.com/" target="_blank" class="news__link">
                    <img alt="Elocker Technologies" title="Elocker Technologies" src="images/elocker-technologies.png" class="img-thumbnail portfolio__img rounded-0 border-0 p-5">
                    <div class="card-body text-center">
                      <h5 class="card-title py-3">Elocker Technologies</h5>
                    </div>
                  </a>
                </div>    
              </div>
              <div class="col-12 col-sm-4">
                <div class="card mb-5 rounded border border-color-secondary portfolio__card">
                  <a title="Blue Auras" href="http://blue-auras.com.ph/" target="_blank" class="news__link">
                    <img alt="Blue Auras" title="Blue Auras" src="images/blue-auras.png" class="img-thumbnail portfolio__img rounded-0 border-0 p-5">
                    <div class="card-body text-center">
                      <h5 class="card-title py-3">Blue <span class="portoflio__span-content">Auras</span></h5>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="card mb-5 rounded border border-color-secondary portfolio__card">
                  <a title="Molly Agency" href="https://trusting-colden-2dd1e4.netlify.com/" target="_blank" class="news__link">
                    <img alt="Molly Agency" title="Molly Agency" src="images/molly-agency.png" class="img-thumbnail portfolio__img rounded-0 border-0 p-5">
                    <div class="card-body text-center">
                      <h5 class="card-title py-3">Agency <span class="portoflio__span-content">Molly</span></h5>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="card mb-5 rounded border border-color-secondary portfolio__card">
                  <a title="Github" href="https://github.com/aspienadela" target="_blank" class="news__link">
                    <img alt="Github" title="Github" src="images/github.jpg" class="img-thumbnail portfolio__img rounded-0 border-0 p-5 pb-3">
                    <div class="card-body text-center">
                      <h5 class="card-title py-3">My Github Profile</h5>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
    </div>

    <!--Contact Modal-->
    <div id="contactModal" class="py-2 content-box contact">
      <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
      <div class="close-contactModal"> 
        <a title="close" href="#" class="close"></a>
      </div>
      <div class="modal-content pt-5">
        <section class="pb-5">
          <div class="container">
            <h2 class="content-box__title pb-3 mb-5">Contact Info</h2>
            <p>Feel free to contact and talk about your project</p>
            <div class="row py-5">
              <div class="col-12">
                <div class="row py-5 text-center border rounded">
                  <div class="col-12 col-sm-4 col-md-3">
                    <i class="fa fa-address-card fa-4x" aria-hidden="true"></i>
                    <p class="pt-4"><span class="color-gray">Elymar Nadela</span></p>
                  </div>
                  <div class="col-12 col-sm-4 col-md-3">
                    <i class="fa fa-location-arrow fa-4x" aria-hidden="true"></i>
                    <p class="pt-4"><span class="color-gray">Cebu City, Philippines</span></p>
                  </div>                  
                  <div class="col-12 col-sm-4 col-md-3">
                    <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>
                    <p class="pt-4"><span class="color-gray">+63 943 520 2519</span></p>
                  </div>
                  <div class="col-12 col-sm-4 col-md-3">
                    <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                    <p class="pt-4"><span class="color-gray">pjaynadela@gmail.com</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row py-5 contact-social-media-list">
              <div class="col-12">
                <p>You can also contact me through social media links</p>
                <div class="row py-5 text-center border rounded">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 contact-social-media__item py-5">
                    <a title="facebook" href="https://www.facebook.com/elymar.nadela">
                      <i class="fa fa-facebook fa-4x" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 contact-social-media__item py-5">
                    <a title="linkedin" href="https://www.linkedin.com/in/elymar-nadela-09022072/">
                      <i class="fa fa-linkedin fa-4x" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 contact-social-media__item py-5">
                    <a title="youtube" href="https://www.youtube.com/channel/UCUMjzGU8W9Zo56XFFxMsFvg">
                      <i class="fa fa-youtube-play fa-4x" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 contact-social-media__item py-5">
                    <a title="google" href="#">
                      <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                      <p class="pt-4 word-break">pjaynadela@gmail.com</p>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 contact-social-media__item py-5">
                    <a title="skype" href="#">
                      <i class="fa fa-skype fa-4x" aria-hidden="true"></i>
                      <p class="pt-4">nadz2021</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row py-5 contact-us">
              <div class="col-12">
                <p class="pb-5">You can also direct contact by filling up this contact us form.</p>
                <form role="form" action="contact.php" method="post" class="contact-form" name="contact-form" data-toggle="validator">
                  <!-- Name -->
                  <div class="form-group label-floating pb-5">
                    <label class="control-label" for="name">Name</label>
                    <input class="form-control pt-4" id="name" type="text" name="name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>

                  <!-- email -->
                  <div class="form-group label-floating pb-5">
                    <label class="control-label" for="email">Email</label>
                    <input class="form-control pt-4" id="email" type="email" name="email" required data-error="Please enter your Email">
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <!-- Message -->
                  <div class="form-group label-floating pb-5">
                      <label for="message" class="control-label">Message</label>
                      <textarea class="form-control pt-4" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
                  <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                  <!-- Form Submit -->
                  <div class="form-submit mt-5">
                      <button class="btn btn-lg btn-primary contact-form__btn" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                  </div>
                </form>
              </div> 
            </div>           
          </div>
        </section>
      </div>
    </div>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/animatedModal.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/headline-master.js" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>	
    <script type="text/javascript">
      $(document).ready(function() {
      setTimeout(function() {
          $('.wrapper').addClass('loaded');
      }, 3000);
      });
      jQuery(function() {
          $(window).load(function() {
              $('.wrapper').removeClass('preload');
          });
      });
      $("#about").animatedModal({
          color: '#000'
      });
      $("#resume").animatedModal({
          color: '#000'
      });
      $("#news").animatedModal({
          color: '#000'
      });
      $("#portfolio").animatedModal({
          color: '#000'
      });
      $("#contact").animatedModal({
          color: '#000'
      });
    </script>
  </body>
</html>