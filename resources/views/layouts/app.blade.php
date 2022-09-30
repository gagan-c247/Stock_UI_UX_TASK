

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <title>Laravel Tailwind</title>

  <!-- Links -->
  <!-- <link  href="../css/style.css" rel="stylesheet"> -->
  @livewireStyles

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
          {{$slot}}
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
    // const root = document.querySelector(".tabs"),tabs=root.querySelectorAll(".tab"),btns=root.querySelectorAll(".btn");
    //   root.onclick = function(e){
    //     var t = e.target,val = t.getAttribute("tab");
    //     if(val != null){
    //       tabs.forEach(each=>{each.classList.remove("active-tab");});
    //       btns.forEach(each=>{each.classList.remove("active-button");});
    //       tabs[val - 1].classList.add("active-tab");
    //       btns[val - 1].classList.add("active-button");
    //     }
    //   }
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
  @livewireScripts

</body>

</html>