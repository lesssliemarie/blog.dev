@extends('layouts.master')

@section('content')
    <div id="wrapper">
    <div>
        <h1 class="cursive">Portfolio</h1>
        <hr>
    </div>
      <div class="row">
        <div class="col-md-6">
          <img src="/img/lcp-app.png" id="lcp-screenshot" class="img-responsive img-rounded" alt="Screenshot of Local Care Package Web Application">
        </div>
        <div class="col-md-6">
            <h3>Local Care Package Web Application</h3>
              <p class="text-justify">This application allows customers to place orders of care packages, track orders from processing to delivered, stores and allows for editing of customer account data, and improves the efficiency of internal workflow for the company. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, Stripe. Development done in a Vagrant environment. Version control using Git and GitHub. Features a customer interface and administrative interface with customized views and data.</p>
              <a href="http://lcp-app.com/" class="btn btn-primary" role="button" target="_blank">View Live <span class="glyphicon glyphicon-arrow-right"></span></a> <a href="https://github.com/Local-Care-Package/lcp.dev" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></a></span>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href="http://lesssliemarie.me/" class="thumbnail" target="_blank">
            <img src="/img/blog-screenshot.png" alt="Screenshot of Leslie Tolbert's Laravel Blog Web Application">
          </a>
          <div class="caption">
            <h3>Laravel Blog Project</h3>
            <p>This application is built for writing and viewing blog posts as well as my personal portfolio and resume. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, CKeditor text editor plugin, Disqus commenting system. Development done in a Vagrant environment. Version control using Git and GitHub. Features user logins, blog post creation and viewing, image upload, search functionality, and ability for authors to edit posts.</p>
            <p><a href="http://lesssliemarie.me/" class="btn btn-primary" role="button">View Live <span class="glyphicon glyphicon-arrow-right"></span></a> <a href="https://github.com/lesssliemarie/blog.dev" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></a></span></p>
          </div>
        </div>
        
        <div class="col-md-4">
          <a href="https://chrome.google.com/webstore/detail/red-panda-tv/cbnohlbedooafamnkjigohfbbpjhhlmj" class="thumbnail" target="_blank">
            <img src="/img/redpandatv.png" class="img-responsnive" alt="Screenshot of Red Panda TV Chrome Extension">
          </a>
          <div class="caption">
            <h3>Red Panda TV Chrome Extension</h3>
            <p>As Tex Morgan said in his lunch time talk at Codeup, sometimes you just need to take a break to look at adorable red pandas, especially after coding for hours on end. This extension features a pop-up window that will play a random red panda video from YouTube. Built using JavaScript, HTML, and CSS. Download it to your browswer and start feeling the positive effects of Red Panda TV today!</p>
            <p><a href="https://chrome.google.com/webstore/detail/red-panda-tv/cbnohlbedooafamnkjigohfbbpjhhlmj" class="btn btn-primary" role="button">Download <span class="glyphicon glyphicon-arrow-right"></span></a> <a href="https://github.com/lesssliemarie/chrome-extensions/tree/master/redpandatv" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></a></span></p>
          </div>
        </div>

        <div class="col-md-4">
          <a href="{{{ action('HomeController@showSpiral') }}}" class="thumbnail" target="_blank">
            <img src="/img/spiral.png" class="img-responsnive" alt="Screenshot of Spiral Note-taking Web Application">
          </a>
          <div class="caption">
            <h3>Spiral Note-taking Application</h3>
            <p>One-page application for writing and saving notes. Built using JavaScript, jQuery, Twitter Bootstrap, wysiwyg Summernote text editor plugin and Firebase. Development done with simple built-in HTTP Python server on Mac. Features ability to add subject tabs, saves and shows tab information to Firebase in real time. Final project of HotSauceJS class (6-weeks, once a week meetup).</p>
            <p><a href="{{{ action('HomeController@showSpiral') }}}" class="btn btn-primary" role="button">View Live <span class="glyphicon glyphicon-arrow-right"></span></a> <a href="https://github.com/lesssliemarie/spiral" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></a></span></p>
          </div>
        </div>

      </div>

    </div>
@stop