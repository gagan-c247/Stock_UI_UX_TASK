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
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 448 448.04455" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g><path d="m224.023438 448.03125c85.714843.902344 164.011718-48.488281 200.117187-126.230469-22.722656 9.914063-47.332031 14.769531-72.117187 14.230469-97.15625-.109375-175.890626-78.84375-176-176 .972656-65.71875 37.234374-125.832031 94.910156-157.351562-15.554688-1.980469-31.230469-2.867188-46.910156-2.648438-123.714844 0-224.0000005 100.289062-224.0000005 224 0 123.714844 100.2851565 224 224.0000005 224zm0 0" fill="#ffffff" data-original="#000000" class="hovered-path"></path></g></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g><path d="m100.307 168.213c16.036-28.329 39.576-51.869 67.905-67.905l-77.512-28.761c-5.461-2.027-11.601-.684-15.719 3.434-4.119 4.118-5.459 10.258-3.434 15.719z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m77.22 256c0-16.617 2.287-32.71 6.549-47.986l-75.082 34.443c-5.294 2.428-8.687 7.719-8.687 13.543s3.393 11.115 8.687 13.543l75.083 34.443c-4.262-15.276-6.55-31.369-6.55-47.986z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m256 77.22c16.618 0 32.71 2.287 47.986 6.549l-34.443-75.082c-2.428-5.294-7.719-8.687-13.543-8.687s-11.115 3.393-13.543 8.687l-34.444 75.083c15.277-4.263 31.369-6.55 47.987-6.55z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m411.693 168.213 28.76-77.513c2.026-5.46.685-11.601-3.434-15.719-4.119-4.119-10.261-5.458-15.719-3.434l-77.513 28.76c28.329 16.037 51.869 39.577 67.906 67.906z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m256 434.78c-16.618 0-32.71-2.287-47.986-6.549l34.444 75.083c2.427 5.293 7.718 8.686 13.542 8.686s11.115-3.393 13.543-8.687l34.443-75.083c-15.276 4.262-31.368 6.55-47.986 6.55z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m100.307 343.787-28.76 77.513c-2.026 5.46-.685 11.601 3.434 15.719 2.845 2.845 6.655 4.364 10.539 4.364 1.738 0 3.492-.305 5.18-.93l77.513-28.76c-28.329-16.037-51.869-39.577-67.906-67.906z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m503.313 242.457-75.083-34.444c4.262 15.277 6.549 31.369 6.549 47.986s-2.287 32.71-6.549 47.986l75.083-34.443c5.294-2.427 8.687-7.718 8.687-13.542s-3.393-11.115-8.687-13.543z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m411.693 343.787c-16.036 28.329-39.576 51.869-67.905 67.905l77.513 28.76c1.689.627 3.442.93 5.18.93 3.884 0 7.694-1.519 10.539-4.364 4.119-4.118 5.459-10.258 3.434-15.719z" fill="#ffffff" data-original="#000000" class="hovered-path"></path><path d="m256 404.98c-82.148 0-148.98-66.832-148.98-148.98s66.832-148.98 148.98-148.98 148.98 66.832 148.98 148.98-66.832 148.98-148.98 148.98z" fill="#ffffff" data-original="#000000" class="hovered-path"></path></g></svg>
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
            <div class="right_side_bar flex-grow text-gray-800">

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