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
                <th scope="col">Volume</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">ABC</th>
                <td>Clerus TherapeuticsHolding, Inc.</td>
                <td class="country flex items-center"><img src="{{asset('images/usa.png')}}" alt="" />USA</td>
                <td>4,15M</td>
                <td>$0.06</td>
                <td><span class="down">-17.20%</span></td>
                <td>{{number_format(1160042)}}</td>
              </tr>
              <tr>
                <th scope="row">ABC</th>
                <td>Meten Holding group Ltd.</td>
                <td class="country flex items-center"><img src="{{asset('images/china.png')}}" alt="" /> China</td>
                <td>7.73M</td>
                <td>$0.56</td>
                <td><span class="down">-3.50%</span></td>
                <td>{{number_format(167619)}}</td>
              </tr>
              <tr>
                <th scope="row">ABC</th>
                <td>Semantix, Inc.</td>
                <td class="country flex items-center"><img src="{{asset('images/brazil.png')}}" alt="" />Brazil</td>
                <td>214.73M</td>
                <td>$2.8</td>
                <td><span class="up">9.18%</span></td>
                <td>{{number_format(45229)}}</td>
              </tr>
              <tr>
                <th scope="row">ABC</th>
                <td>Meten Holding group Ltd.</td>
                <td class="country flex items-center"><img src="{{asset('images/china.png')}}" alt="" /> China</td>
                <td>7.73M</td>
                <td>$0.56</td>
                <td><span class="down">-3.50%</span></td>
                <td>{{number_format(167619)}}</td>
              </tr>
              <tr>
                <th scope="row">ABC</th>
                <td>9F Inc.</td>
                <td class="country flex items-center"><img src="{{asset('images/china.png')}}" alt="" />China</td>
                <td>95.58M</td>
                <td>$0.39</td>
                <td><span class="down">-4.85%</span></td>
                <td>{{number_format(59237)}}</td>
              </tr>
              <tr>
                <th scope="row">ABC</th>
                <td>Semantix Inc.</td>
                <td class="country flex items-center"><img src="{{asset('images/brazil.png')}}" alt="" />Brazil</td>
                <td>214.73M</td>
                <td>$2.8</td>
                <td><span class="up">9.18%</span></td>
                <td>{{number_format(45229)}}</td>
              </tr>
            </tbody>
          </table> 
        </div>
        <div class="pagination flex justify-between items-center">
          <p class="text-sm text-gray-700">
            Showing
            <span class="font-medium">1</span>
            to
            <span class="font-medium">6</span>
            of
            <span class="font-medium">70</span>
            results
          </p>
          <div class="ml-auto">
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                  <span class="sr-only">Previous</span>
                  <svg class="h-5 w-5" x-description="Heroicon name: mini/chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                  <span class="sr-only">Next</span>
                  <svg class="h-5 w-5" x-description="Heroicon name: mini/chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </nav>
          </div>
        </div>
</div>