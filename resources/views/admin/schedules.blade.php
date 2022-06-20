
@include('parts.head')
@include('parts.adminNav')
<div class="container-fluid">
    <h1 class=" p-10 text-2xl text-white bg-teal-500">{{__('Schedules for route '.$route->name)}}</h1>
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
                <th class="px-4 py-2">{{__('Schedule id')}}</th>
                <th class="px-4 py-2">{{__('Route name')}}</th>
                <th class="px-4 py-2">{{__('Check Stops')}}</th>
                @if ($is_logged_in)
                    <th class="px-4 py-2">{{__('Delete schedule')}}</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($schedules as $schedule)

                    <td class="border px-4 py-2">{{$schedule->id}}</td>
                    <td class="border px-4 py-2">{{$schedule->busRoute->name}}</td>
                    <th class="px-4 py-2"><a class="m-5 bg-emerald-500 rounded p-1 hover:text-white" href="{{route('admin.stops',['id'=> $schedule->id])}}">{{__('Check Stops')}}</th>
                <form method="post" action="{{route('admin.schedule-delete',['id'=> $schedule->id])}}">
                    @csrf
                    @method('post')
                    <input type="hidden" name="id" value="{{$schedule->id}}">
                    <th class="px-4 py-2"><button class="m-5 bg-red-700 rounded p-1 hover:text-white" href="{{route('admin.schedule-delete',['id'=> $schedule->id])}}">{{__('Delete')}}</button></th>

                </form>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    @if ($schedules !== null)
        <div class="my-2">
            <div class="table-pagination">
                {{ $schedules->links() }}
            </div>
        </div>
    @endif
</div>


<div class="flex justify-center p-10 bg-indigo-50">
    <form action="{{route('admin.createSchedule')}}" method="post" class="w-full max-w-lg">
        @csrf
        @method('post')
        <input type="hidden" name="route_id" value="{{$route->id}}">
        <button class="m-5 bg-emerald-500 rounded p-1 hover:text-white" type="submit">{{__('Create New schedule on route ').$route->name}}</button>
    </form>
</div>

@include('parts.footer')


