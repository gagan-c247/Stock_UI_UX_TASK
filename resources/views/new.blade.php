<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <title>Laravel Tailwind</title>

  <!-- Links -->
  <!-- <link  href="../css/style.css" rel="stylesheet"> -->

  <!-- Icons -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" />

  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">

  <!-- <link rel="stylesheet" type="text/css" href="{{asset('main.css')}}"> -->

  <!-- <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Work+Sans:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('style_new.css')}}">

</head>

<body>
 
  <div class="flex items-center justify-center h-100vh">
    <button class="modal-btn py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700" onclick="toggleModal()">Quick Glance</button>
  </div>
  <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hide" id="modal">
    <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-900 opacity-75" />
      </div>
      <span class="hide sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
      <div class="modal_main inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white">

          <div class="flex flex-wrap bg-gray-100" x-data="{panel:false, menu:true}">
            <header class="flex justify-between w-screen items-center h-16 px-6 sm:px-10 bg-white top_header header-shadow">
              <div class="left_bar flex items-center">
                <div class="mr-3 cursor-pointer" @click="menu = !menu">
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </div>
                <div>
                  <h4 class="logo">$FSLR <span>Quick Glance</span></h4>
                </div>
              </div>
                <div class="right_bar flex items-center">
                    <div>
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="label cursor-pointer">
                            <i class="fas fa-moon"></i>
                            <i class='fas fa-sun'></i>
                            <div class='ball'></div>
                        </label>
                    </div>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 transform -rotate-90"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg> -->
                               <button type="button" class="ml-4 py-2 px-4 rounded shadow-xl font-semibold" onclick="toggleModal()"><i
                    class="fas fa-times"></i> X</button>
              </div>
            </header>
            <aside class="flex flex-col menu_sidebar" :class="{'hidden sm:flex sm:flex-col': window.outerWidth > 768}">
              <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
                <nav class="flex flex-col space-y-4">
                  <a href="#"
                    class="menu_item active inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-house-door"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Overview</span>
                  </a>
                  <a href="#" class="menu_item inline-flex items-center py-3 text-blue-600 bg-white px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-bar-chart"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Chart</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-eye-slash"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Dark Pool</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-exclamation-triangle"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Divergences</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-arrow-down-up"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Cycle Data</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Pivot Points</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-activity"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Cheat Sheet</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-exclamation-triangle"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">All Trades</span>
                  </a>
                  <a href="#"
                    class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
                    :class="{'justify-start': menu, 'justify-center': menu == false}">
                    <span class="icon"><i class="bi bi-camera"></i></span>
                    <span class="ml-2 menu_name" x-show="menu">Snapshots</span>
                  </a>
                </nav>
              </div>
                <div class="glance_bar" x-show="menu">
                    <p>Glance quotea</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:50%"></div>
                    </div>
                    <p>50 of 100</p>
                </div>
            </aside>
            <div class="flex-grow text-gray-800">

              <main class="">
                <div class="option-header flex items-center justify-between">
                    <h5 class="mb-0">Options Flow</h5>
                    <div class="btn-group">
                      <button class="btn btn-border">Action 1</button>
                      <button class="btn btn-bg-color">Action 2</button>
                      <i class="bi bi-three-dots-vertical ml-2"></i>
                    </div>
                </div>
                <div class="body_content">
                    <div class="option_table">
                        <table class="table rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800 w-full">
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
              </main>
            </div>
          </div>


        </div>
        <!-- <div class="bg-gray-200 px-4 py-3 text-right">
          <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2"
            onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
          <button type="button" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 mr-2"><i
              class="fas fa-plus"></i> Create</button>
        </div> -->
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
    integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    function toggleModal() {
      document.getElementById('modal').classList.toggle('hide')
    }
  </script>

    <script>
    const root = document.querySelector(".tabs"),tabs=root.querySelectorAll(".tab"),btns=root.querySelectorAll(".btn");
      root.onclick = function(e){
        var t = e.target,val = t.getAttribute("tab");
        if(val != null){
          tabs.forEach(each=>{each.classList.remove("active-tab");});
          btns.forEach(each=>{each.classList.remove("active-button");});
          tabs[val - 1].classList.add("active-tab");
          btns[val - 1].classList.add("active-button");
        }
      }
    </script>

    <script>
        // function myFunction() {
        //    var element = document.body;
        //    element.classList.toggle("dark-mode");
        // }

        const checkbox = document.getElementById('checkbox');
        checkbox.addEventListener('change', ()=>{
          document.body.classList.toggle('dark-mode');
        })
    </script>

</body>

</html>