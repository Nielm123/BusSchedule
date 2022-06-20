@include('parts.head')
@include('parts.userNav')
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
                @if ($is_logged_in)
                    <form method="post" action="{{route('admin.stop-delete',['id'=> $stop->id])}}">
                        @endif
                        <tr>
                            <td class="border px-4 py-2">{{$stop->id}}</td>
                            <td class="border px-4 py-2">{{$stop->name}}</td>
                            <td class="border px-4 py-2">{{$stop->hour}}:{{$stop->minute}}</td>

                            @if ($is_logged_in)
                                @csrf
                                @method('post')
                                <td class="px-4 py-2">
                                    <button type="submit"
                                            class="m-5 bg-red-700 rounded p-1 hover:text-white">{{__('Delete')}}</button>
                                </td>

                            @endif

                        </tr>
                        @if ($is_logged_in)
                    </form>
                @endif
            @endforeach
            </tbody>
        </table>
        @if ($stops !== null)
            <div class="my-2">
                <div class="table-pagination">
                    {{ $stops->links() }}
                </div>
            </div>
        @endif

    </div>
</div>
@include('parts.footer')


