@extends('layouts.master')

@section('content')
    <div id="wrapper">
      <div>
        <h1 class="cursive">Resume</h1>
        <hr>
      </div>
      <div class="row resume-row">
          <div class="col-md-4">
            CONTACT
          </div>
          <div class="col-md-5">
            <strong>Leslie M. Tolbert</strong><br>
            lesssliemarie@gmail.com<br>
            (210) 332-0399
          </div>
          <div class="col-md-3">
            <a href="http://www.linkedin.com/in/leslietolbert">LinkedIn</a><br>
            <a href="https://github.com/lesssliemarie">GitHub</a>
          </div>
      </div>
      <hr>
      <div class="row resume-row">
          <div class="col-md-4">
            QUALIFICATIONS &amp; ATTRIBUTES
          </div>
          <div class="col-md-8">
          <ul>
            <li>Web programming experience with HTML/CSS, JavaScript, jQuery, Laravel, PHP, MySQL, Linux, Apache, Twitter Bootstrap, Firebase, Git, GitHub</li>
            <li>Proficiency in Adobe Creative Suite (InDesign, Photoshop, Illustrator)</li>
            <li>Member of Geekdom; actively attends Web Dev Meetups and New Tech Meetups</li>
            <li>Participant in 3-Day Startup hosted by Venture Lab at Geekdom, November 2013</li>
            <li>Strong graphic design skills with experience creating both print and digital materials for businesses and events as well as some social media marketing and event planning knowledge</li>
            <li>Variety of art and design courses ranging from Digital Imaging, Corporate Identity and Packaging, Art and Design History, Printmaking, Interactive I, Environmental Design, Color Theory, 3D Design, Digital and Traditional Illustration, Photography, etc.</li>
            <li>Contribution to maintenance/improvement of internal office procedures (related company collateral, office workflow, software implementation and training)</li>
            <li>Transcription, proofreading, technical writing, copywriting and editing</li>
            <li>Self-starter and multitasker with a refined eye for detail</li>
            <li>Self-supervised worker with high personal expectations and strong desire to excel, cultivate skills, and aid others</li>
            <li>Tech savvy problem solver with an innate ability to learn and adapt at an accelerated rate</li>
            <li>Member of LOOP, Tobin Center Ghost Light Society, SAMA and Downtown Kickball</li>
          </ul>
          </div>
      </div>
      <hr>
      <div class="row resume-row">
          <div class="col-md-4">
            WORK EXPERIENCE
          </div>
          <div class="col-md-8">
            <strong>Freelance Web Developer</strong><br>
            <em>February 2014-Present</em><br>
            <p><span style="text-decoration: underline">Local Care Package Web Application:</span> application for placing orders of care packages, tracking orders from processing to delivered, storing and editing customer account data, and improving efficiency in internal workflow. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, Stripe. Development done in a Vagrant environment. Version control using Git and GitHub. Features a customer interface and administrative interface with customized views and data.</p>
            <p><span style="text-decoration: underline">Laravel Blog Project:</span> application for writing and viewing blog posts as well as my personal portfolio and resume. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, CKeditor text editor plugin, Disqus commenting system. Development done in a Vagrant environment. Version control using Git and GitHub. Features user logins, blog post creation and viewing, image upload, search functionality, and ability for authors to edit posts.</p>
            <p><span style="text-decoration: underline">Spiral:</span> one-page application for writing and saving notes.  Built using JavaScript, jQuery, Twitter Bootstrap, wysiwyg Summernote text editor plugin and Firebase. Development done with simple built-in HTTP Python server on Mac. Features ability to add subject tabs, saves and shows tab information to Firebase in real time.</p>
          </div>
      </div>
      <div class="row resume-row">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <strong>Valbridge Property Advisors | Dugger, Canaday, Grafe, Inc.</strong><br>
            <em>January 2012-January 2014</em><br>
            <p><span style="text-decoration: underline">Duties:</span> Implementation of new software (Datappraise), creating appraisal report templates for both national and office-wide use, transcription, proofreading, technical writing, design of appraisal reports, general administration and managerial duties, website upkeep, light invoicing and IT assistance.</p>
          </div>
      </div>
      <div class="row resume-row">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <strong>Freelance Graphic Designer</strong><br>
            <em>January 2011-August 2011, November 2013-Present</em><br>
            <p><em>Clients include Santex Painting and Drywall, Lewis &amp; Company, Scott Ball Photography, Dental Sleep Solutions, San Antonio Hispanic Chamber of Commerce, Boundless Network</em></p>
            <p><span style="text-decoration: underline">Duties:</span> Team up with clients to assist in marketing efforts and creation of marketing materials to include numerous print and web-based assignments such as brand and identity direction and creation, series of posters, series of promotional e-mails, websites, flyers, event materials, brochures, PowerPoint presentations, copy writing and social media marketing efforts.</p>
          </div>
      </div>
      <hr>
      <div class="row resume-row">
          <div class="col-md-4">
            EDUCATION
          </div>
          <div class="col-md-5">
            <strong>LAMP+J Software Development Bootcamp</strong><br>
            <a href="http://www.codeup.com/" target="_blank">Codeup</a><br>
            <em>San Antonio, Texas</em><br>
            <p>Full-time 11-week course teaching the LAMP stack (Linux, Apache, MySQL, PHP) as well as JavaScript, jQuery, HTML/CSS, Laravel and Twitter Bootstrap</p>           
          </div>
          <div class="col-md-3">
            February 2014-April 2014<br>
          </div>
      </div>
      <div class="row resume-row">
          <div class="col-md-4"></div>
          <div class="col-md-5">
            <strong>BFA Communication Design</strong><br>
            Texas State University<br>
            <em>San Marcos, Texas</em><br>
            <p>Cum Laude, 3.5-year graduate, 3.5 Overall GPA<br>
              Dean’s List, 2011 Fine Arts and Communication Council of Scholars</p>
          </div>
          <div class="col-md-3">
            Fall 2007 - Fall 2010
          </div>
      </div>
      <div class="row resume-row">
          <div class="col-md-4"></div>
          <div class="col-md-5">
            <strong>High School Diploma</strong><br>
            Judson Senior Highschool<br>
            <em>Converse, Texas</em><br>
            <p>Honor Student, 3-year graduate</p>
          </div>
          <div class="col-md-3">
            August 2004-May 2007
          </div>
      </div>
    </div>
@stop

@section('bottomscript')
<script>
  $(document).ready(function() {
      $('#wrapper').fadeIn(1500);
  });
</script>
@stop