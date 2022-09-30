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
                    <td colspan="7">
                        <div class="not_found flex items-center justify-center">
                            <div>
                                <img src="{{asset('images/no-data-found.png')}}" alt="" class="mx-auto" />
                                <p class="mt-3 font-medium text-center">No Records Available in <br /><span>{{$title}} !</span></p>
                                <!-- {{$title}} -->
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>