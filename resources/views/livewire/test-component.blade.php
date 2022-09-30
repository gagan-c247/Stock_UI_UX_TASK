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
            
                <button type="button" class="ml-4 py-2 px-4 rounded shadow-xl font-semibold" onclick="toggleModal()"><i
              class="fas fa-times"></i> X</button>
        </div>
      </header>
      <section class="body_sec">
      <aside class="flex flex-col menu_sidebar" :class="{'hidden sm:flex sm:flex-col': window.outerWidth > 768}">
        <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
          <nav class="flex flex-col space-y-4">
            <a href="#" wire:click="overview"
              class="menu_item {{$htmlData == 1 ? 'active' : ''}} inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2"
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-house-door"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Overview</span>
            </a>
            <a  href="#" wire:click="chart"  class="menu_item inline-flex items-center py-3 text-blue-600 bg-white px-2  {{$htmlData == 2 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-bar-chart"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Chart</span>
            </a>
            <a href="#" wire:click="darkPool"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 3 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-eye-slash"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Dark Pool</span>
            </a>
            <a href="#" wire:click="divergences"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2 {{$htmlData == 4 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-exclamation-triangle"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Divergences</span>
            </a>
            <a href="#" wire:click="cycleData"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 5 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-arrow-down-up"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Cycle Data</span>
            </a>
            <a href="#" wire:click="pivotPoints"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 6 ? 'active' : ''}}"
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Pivot Points</span>
            </a>
            <a href="#" wire:click="cheatSheet"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 7 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-activity"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Cheat Sheet</span>
            </a>
            <a href="#" wire:click="allTrades"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 8 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-exclamation-triangle"></i></span>
              <span class="ml-2 menu_name" x-show="menu">All Trades</span>
            </a>
            <a href="#" wire:click="snapshots"
              class="menu_item inline-flex items-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 px-2  {{$htmlData == 9 ? 'active' : ''}} "
              :class="{'justify-start': menu, 'justify-center': menu == false}">
              <span class="icon"><i class="bi bi-camera"></i></span>
              <span class="ml-2 menu_name" x-show="menu">Snapshots</span>
            </a>
          </nav>
        </div>
          <div class="glance_bar" x-show="menu">
              <p>Glance quota</p>
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
          @if($htmlData == 1) 
            @include('include.table')
          @elseif($htmlData == 2)
            @include('include.table2')
          @elseif($htmlData == 3)
            @include('include.data-not')
          @elseif($htmlData == 4)
            @include('include.data-not')
          @elseif($htmlData == 5)
            @include('include.data-not')
          @elseif($htmlData == 6)
            @include('include.data-not')
          @elseif($htmlData == 7)
            @include('include.data-not')
          @elseif($htmlData == 8)
            @include('include.data-not')
          @elseif($htmlData == 9)
            @include('include.data-not')
          @endif
        </main>
      </div>
      </section>
    </div>
  </div>