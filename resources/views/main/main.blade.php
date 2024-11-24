@extends('main.core.index')

@section('core-content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <form class="max-w-sm mx-auto" action="{{route('doApriori')}}" method="GET">
        <div class="">
            <label for="minSup" class="block mb-5 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="input" id="minSup" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Minimum Support" required />
        </div>
        <div class="mb-5">
            <label for="minConf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="input" id="minConf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Minimum Confident" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    <div>
        <!--- untuk menampilkan hasil -->
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Item
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trans as $t)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$t['id']}}
                    </th>
                    <td class="px-6 py-4">
                        {{$t['items']}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection