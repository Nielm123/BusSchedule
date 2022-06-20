@include('parts.head')
@include('parts.adminNav')
<div class="container-fluid">
    <h1 class=" p-10 text-2xl text-white bg-teal-500">{{__('Routes for schedule number '. $schedule->id .": ".$schedule->busRoute->name)}}</h1>
    <p class="p-10">
        {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.')}}
    </p>
    <div class="flex justify-center p-5 bg-indigo-50">

        <table class="table-auto ">
            <tbody class="p-5 bg-indigo-50 ">
            <thead>
            <tr>
                <th class="px-4 py-2">{{__('Stops id')}}</th>
                <th class="px-4 py-2">{{__('Stop name')}}</th>
                <th class="px-4 py-2">{{__('Departure/Arrival')}}</th>
                @if ($is_logged_in)
                <th class="px-4 py-2">{{__('Delete Stop')}}</th>
                    @endif
            </tr>
            </thead>
            <tbody>
            @foreach($stops as $stop)


                        <tr>
                            <td class="border px-4 py-2">{{$stop->id}}</td>
                            <td class="border px-4 py-2">{{$stop->name}}</td>
                            <td class="border px-4 py-2">{{$stop->hour}}:{{$stop->minute}}</td>

                            <form method="post" action="{{route('admin.stop-delete',['id'=> $stop->id])}}">
                                @csrf
                                @method('post')


                                <td class="px-4 py-2">

                                    <input type="hidden" name="id" value="{{$stop->id}}">
                                    <button type="submit"
                                            class="m-5 bg-red-700 rounded p-1 hover:text-white">{{__('Delete')}}</button>
                                </td>
                            </form>
                        </tr>
                    </form>

            @endforeach
            </tbody>
        </table>


    </div>
    @if ($stops !== null)
        <div class="my-2">
            <div class="table-pagination">
                {{ $stops->links() }}
            </div>
        </div>
    @endif
</div>


<div class="flex justify-center p-10 bg-indigo-50">
    <form action="{{route('admin.createStop')}}" method="post" class="w-full max-w-lg">
        @csrf
        @method('post')
        <input type="hidden" name="schedule_id" value="{{$schedule->id}}">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-first-name">
                    {{__('Stop name')}}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name" name="name" type="text" placeholder="{{__('Stop name')}}">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-first-name">
                    {{__('Hour')}}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name" name="hour" type="text" placeholder="{{__('Hour')}}">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                       for="grid-last-name">
                    {{__('Minute')}}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" name="minute" type="text" placeholder="{{__('Minute')}}">

                <button type="submit"
                        class="m-5 bg-blue-700 rounded p-1 hover:text-white">{{__('Add Stop')}}</button>
            </div>
    </form>
</div>




@include('parts.footer')


