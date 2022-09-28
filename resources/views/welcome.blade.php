<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Links -->
        <link  href="../css/style.css" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">

        <link rel="stylesheet" type="text/css" href="{{asset('main.css')}}">
        
        <!-- <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet"> -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Work+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        
    </head>
    <body>
    <div class="main">

        <button type="button" class="modal-btn" data-toggle="modal" data-target="#exampleModalCenter">
          Quick Glance
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
              <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              </div> -->
              <div class="modal-body p-0">
                <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                <div class="app-header header-shadow">
                    <div class="app-header__logo">
                        <div class="header__pane mr-3">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <h4 class="logo">$FSLR <span>Quick Glance</span></h4>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="app-header__content">
                       <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>      
                     
                <div class="app-main">
                        <div class="app-sidebar sidebar-shadow">
                            <div class="app-header__logo">
                                <div class="logo-src"></div>
                                <div class="header__pane ml-auto">
                                    <div>
                                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="app-header__mobile-menu">
                                <div>
                                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>    
                            <div class="scrollbar-sidebar">
                                <div class="app-sidebar__inner">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#duck" role="tab" aria-controls="duck" aria-selected="true">
                                            <span class="icon"><i class="bi bi-house-door"></i></span> <span>Overview</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#chicken" role="tab" aria-controls="chicken" aria-selected="false">
                                            <span class="icon"><i class="bi bi-bar-chart"></i></span> <span>Chart</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kiwi" role="tab" aria-controls="kiwi" aria-selected="false">
                                            <span class="icon"><i class="bi bi-eye-slash"></i></span>
                                        <span>Dark Pool
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-exclamation-triangle"></i></span>
                                        <span class="" >
                                             Divergences
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-arrow-down-up"></i></span>
                                        <span class="" >
                                             Cycle Data
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-currency-dollar"></i></span>
                                        <span class="" >
                                             Pivot Points
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
                                        <span class="" >
                                             Cheat Sheet
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-activity"></i></span>
                                        <span class="" >
                                             All Trades
                                        </span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                            <span class="icon"><i class="bi bi-camera"></i></span>
                                        <span class="" >
                                             Snapshots
                                        </span></a>
                                      </li>
                                    </ul>
                                    
                                    <!-- <ul class="nav nav-tabs nav-fill" role="tablist">
                                      <a class="nav-item nav-link active d-flex align-items-center" data-toggle="tab" href="#duck" role="tab" aria-controls="duck" aria-selected="true">
                                        <i class="bi bi-house-door"></i>
                                        <span class="">
                                             Overview
                                        </span>
                                      </a>
                                      <a class="nav-item nav-link d-flex align-items-center" data-toggle="tab" href="#chicken" role="tab" aria-controls="chicken" aria-selected="false">
                                        <i class="bi bi-bar-chart"></i>
                                        <span class="">
                                             Chart
                                        </span>
                                      </a>
                                      <a class="nav-item  nav-link d-flex align-items-center" data-toggle="tab" href="#kiwi" role="tab" aria-controls="kiwi" aria-selected="false">
                                         <i class="bi bi-eye-slash"></i>
                                        <span class="" >
                                           
                                            Dark Pool
                                        </span>
                                      </a>
                                      <a class="nav-item nav-link d-flex align-items-center" data-toggle="tab" href="#emu" role="tab" aria-controls="emu" aria-selected="false">
                                        
                                      </a>
                                    </ul> -->
                                </div>
                                <div class="glance_bar">
                                        <p>Glance quotea</p>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:50%"></div>
                                        </div>
                                        <p>50 of 100</p>
                                    </div>
                            </div>
                        </div>    
                        <div class="app-main__outer">
                            <div class="option-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Options Flow</h5>
                                <div class="btn-group">
                                  <button class="btn btn-border">Action 1</button>
                                  <button class="btn btn-bg-color">Action 2</button>
                                  <i class="bi bi-three-dots-vertical ml-2"></i>
                                </div>
                              </div>

                            <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">Restore Default</button>

                            <button onclick="myFunction()">Toggle dark mode</button>


                            <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                    <div class="tab-content">
                                      <div class="tab-pane active" id="duck" role="tabpanel" aria-labelledby="duck-tab">
                                        <div class="option_table">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Ticker</th>
                                                  <th scope="col">Company</th>
                                                  <th scope="col">Country</th>
                                                  <th scope="col">Market Cap</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Change</th>
                                                  <th scope="col">Volumn</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">METX</th>
                                                  <td>Meten Holding group Ltd.</td>
                                                  <td>China</td>
                                                  <td>7.73M</td>
                                                  <td>0.56</td>
                                                  <td><span class="down">-3.50%</span></td>
                                                  <td>167619</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">JFU</th>
                                                  <td>9F Inc.</td>
                                                  <td>China</td>
                                                  <td>95.58M</td>
                                                  <td>0.39</td>
                                                  <td><span class="down">-4.85%</span></td>
                                                  <td>59,237</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td><span class="up">9.18%</span></td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">CRXT</th>
                                                  <td>Clerus TherapeuticsHolding, Inc.</td>
                                                  <td>USA</td>
                                                  <td>4,15M</td>
                                                  <td>0.06</td>
                                                  <td><span class="down">-17.20%</span></td>
                                                  <td>1,160,042</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td><span class="up">9.18%</span></td>
                                                  <td>45,229</td>
                                                </tr>
                                              </tbody>
                                            </table> 
                                        </div>        
                                      </div>
                                      <div class="tab-pane" id="chicken" role="tabpanel" aria-labelledby="chicken-tab">
                                        <div class="option_table">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Ticker</th>
                                                  <th scope="col">Company</th>
                                                  <th scope="col">Country</th>
                                                  <th scope="col">Market Cap</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Change</th>
                                                  <th scope="col">Volumn</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">CRXT</th>
                                                  <td>Clerus TherapeuticsHolding, Inc.</td>
                                                  <td>USA</td>
                                                  <td>4,15M</td>
                                                  <td>0.06</td>
                                                  <td>-17.20%</td>
                                                  <td>1,160,042</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">METX</th>
                                                  <td>Meten Holding group Ltd.</td>
                                                  <td>China</td>
                                                  <td>7.73M</td>
                                                  <td>0.56</td>
                                                  <td>-3.50%</td>
                                                  <td>167619</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">JFU</th>
                                                  <td>9F Inc.</td>
                                                  <td>China</td>
                                                  <td>95.58M</td>
                                                  <td>0.39</td>
                                                  <td>-4.85%</td>
                                                  <td>59,237</td>
                                                </tr>
                                              </tbody>
                                            </table> 
                                        </div>  
                                      </div>
                                      <div class="tab-pane" id="kiwi" role="tabpanel" aria-labelledby="kiwi-tab">
                                        <div class="option_table">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Ticker</th>
                                                  <th scope="col">Company</th>
                                                  <th scope="col">Country</th>
                                                  <th scope="col">Market Cap</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Change</th>
                                                  <th scope="col">Volumn</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">CRXT</th>
                                                  <td>Clerus TherapeuticsHolding, Inc.</td>
                                                  <td>USA</td>
                                                  <td>4,15M</td>
                                                  <td>0.06</td>
                                                  <td>-17.20%</td>
                                                  <td>1,160,042</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">JFU</th>
                                                  <td>9F Inc.</td>
                                                  <td>China</td>
                                                  <td>95.58M</td>
                                                  <td>0.39</td>
                                                  <td>-4.85%</td>
                                                  <td>59,237</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">METX</th>
                                                  <td>Meten Holding group Ltd.</td>
                                                  <td>China</td>
                                                  <td>7.73M</td>
                                                  <td>0.56</td>
                                                  <td>-3.50%</td>
                                                  <td>167619</td>
                                                </tr>
                                                
                                              </tbody>
                                            </table> 
                                        </div>           
                                      </div>
                                      <div class="tab-pane" id="emu" role="tabpanel" aria-labelledby="emu-tab">
                                        <div class="option_table">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Ticker</th>
                                                  <th scope="col">Company</th>
                                                  <th scope="col">Country</th>
                                                  <th scope="col">Market Cap</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Change</th>
                                                  <th scope="col">Volumn</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">CRXT</th>
                                                  <td>Clerus TherapeuticsHolding, Inc.</td>
                                                  <td>USA</td>
                                                  <td>4,15M</td>
                                                  <td>0.06</td>
                                                  <td>-17.20%</td>
                                                  <td>1,160,042</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">METX</th>
                                                  <td>Meten Holding group Ltd.</td>
                                                  <td>China</td>
                                                  <td>7.73M</td>
                                                  <td>0.56</td>
                                                  <td>-3.50%</td>
                                                  <td>167619</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">JFU</th>
                                                  <td>9F Inc.</td>
                                                  <td>China</td>
                                                  <td>95.58M</td>
                                                  <td>0.39</td>
                                                  <td>-4.85%</td>
                                                  <td>59,237</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">STIX</th>
                                                  <td>Semantic Inc.</td>
                                                  <td>Brazil</td>
                                                  <td>214.73M</td>
                                                  <td>2.8</td>
                                                  <td>9.18%</td>
                                                  <td>45,229</td>
                                                </tr>
                                                
                                              </tbody>
                                            </table> 
                                        </div>        
                                      </div>
                                    </div>        
                                  </div>
                              </div>
                            </div>

                        </div>
                </div>
        </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Modal End -->


        

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>


    <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
    </script>

    </body>
</html>
