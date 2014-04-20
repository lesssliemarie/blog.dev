@extends('layouts.master')

@section('content')
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
        <div class="col-xs-6 col-md-4">
          <a href="http://lesssliemarie.me/" class="thumbnail" target="_blank">
            <img src="/img/blog-screenshot.png" alt="Screenshot of Leslie Tolbert's Laravel Blog Web Application">
          </a>
          <div class="caption">
            <h3>Laravel Blog Project</h3>
            <p>This application is built for writing and viewing blog posts as well as my personal portfolio and resume. Built using Laravel, PHP, MySQL, JavaScript, jQuery, Twitter Bootstrap, CKeditor text editor plugin, Disqus commenting system. Development done in a Vagrant environment. Version control using Git and GitHub. Features user logins, blog post creation and viewing, image upload, search functionality, and ability for authors to edit posts.</p>
            <p><a href="http://lesssliemarie.me/" class="btn btn-primary" role="button">View Live <span class="glyphicon glyphicon-arrow-right"></span></a> <a href="https://github.com/lesssliemarie/blog.dev" class="btn btn-primary btn-github" role="button" target="_blank"> View GitHub <span><i class="fa fa-github portfolio-github-icon"></i></a></span></p>
          </div>
        </div>
        
        <div class="col-xs-6 col-md-4">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="...">
          </a>
          <div class="caption">
            <h3>Project Title</h3>
            <p>Swag stumptown hella retro, next level seitan pug bicycle rights distillery art party Cosby sweater Thundercats cliche hoodie. Pork belly art party vegan put a bird on it, craft beer mumblecore flexitarian.</p>
            <p><a href="#" class="btn btn-primary" role="button">View Project <span class="glyphicon glyphicon-arrow-right"></span></a></p>
          </div>
        </div>

        <div class="col-xs-6 col-md-4">
          <a href="#" class="thumbnail">
            <img data-src="holder.js/100%x180" alt="...">
          </a>
          <div class="caption">
            <h3>Project Title</h3>
            <p>Swag stumptown hella retro, next level seitan pug bicycle rights distillery art party Cosby sweater Thundercats cliche hoodie. Pork belly art party vegan put a bird on it, craft beer mumblecore flexitarian.</p>
            <p><a href="#" class="btn btn-primary" role="button">View Project <span class="glyphicon glyphicon-arrow-right"></span></a></p>
          </div>
        </div>

      </div>

      </div>
@stop