<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Learn how to intall PageManager</h1>
                        <a href="#getting" class="btn btn-outline btn-xl page-scroll">Let's go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="device-container">
                    <div class="device-mockup macbook_2016 portrait white">
                        <div class="device">
                            <div class="screen">
                                <i class="icon-rocket"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="getting" class="getting features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Getting Started</h2>
                    <p class="text-muted">Install & use PageManager easily</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <p>First, <a href="https://github.com/zaosoula/PageManager/releases/latest">download the latest version</a> of PageManager, unzip the compressed file and place the content in your project folder, you will get something like that:
                <figure class="highlight"><pre><code class="language-bash" data-lang="bash">PageManager/
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── img/
│   ├── js/
│   └── plugins/
│       ├──  jquery/
│       │   ├── jquery.js
│       │   └── jquery.min.js
│       └── ...
├── class/
│   └──  Page.php
├── configs/
│   ├── config.php
│   └──  local.php
├── pages/
│   ├── html/
│   │   ├── home.php
│   │   └──  404.php
│   └──  php/
│       ├── home.php
│       └──  404.php
├── require/
│   ├── communFunc.php
│   ├── footer.php
│   ├── header.php
│   └── html.php
├── tmp/
│   └──  trace.log
├── .htaccess
└── index.php
              </code></pre></figure>
              <hr>
              <ul class="list-unstyled">
                <li><code>assets</code> folder contains all your css, fonts, images, js and plugins files</li>
                <li><code>class</code> folder contains all your php class files</li>
                <li>
                  <code>config</code> folder contains two files:
                  <ul class="ul-unstyled">
                    <li><code>config.php</code> file contains your server default value : SQL access, base url...</li>
                    <li><code>local.php</code> file contains your local value to modify default SQL access, base url, etc. This file may be added to .gitignore</li>
                  </ul>
                </li>
                <li>
                  <code>pages</code> folder contains two folders:
                  <ul class="ul-unstyled">
                    <li><i class="fa fa-warning"></i> All pages should have the same name in <code>html</code> and <code>php</code> folder</li>
                    <li><code>html</code> folder contains ui files</li>
                    <li><code>php</code> folder contains application logic files</li>
                  </ul>
                </li>
                <li>
                  <code>require</code> folder contains four files:
                  <ul class="ul-unstyled">
                    <li><code>communFunc.php</code> file contains common php functions : <code>logger()</CODE></li>
                    <li><code>footer.php</code> file contains footer</li>
                    <li><code>header.php</code> file contains header(navbar)</li>
                    <li><code>html.php</code> file contains html template used on all page</li>
                  </ul>
                </li>
                <li>
                  <code>tmp</code> folder contains one file:
                  <ul class="ul-unstyled">
                    <li><code>trace.log</code> file contains logs generated by logger() function</li>
                  </ul>
                </li>
                <li><code>.htaccess</code> file contains rewrite url rules and others</li>
                <li><code>index.php</code> file contains the brain of PageManager</li>
              </ul>
              <hr/><br>
              <p>Now PageManager is ready to be use, <a href="<?echo BaseUrl?>/docs/new-page">learn how to create your first page</a></p>

            </div>
        </div>
    </div>
</section>
