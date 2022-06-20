
@include('parts.head')
@include('parts.userNav')
<div class="container-fluid">
    <h1 class=" p-10 text-2xl text-white bg-teal-500">{{__('Routes')}}</h1>
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
                    <th class="px-4 py-2">{{__('Route')}}</th>
                    <th class="px-4 py-2">{{__('Route name')}}</th>
                    <th class="px-4 py-2">{{__('Bus Name')}}</th>
                    <th class="px-4 py-2">{{__('Vehicle')}}</th>
                    <th class="px-4 py-2">{{__('Check Schedules')}}</th>
                    @if ($is_logged_in)
                        <th class="px-4 py-2">{{__('Delete Routes')}}</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($routes as $route)
                <tr>
                    <td class="border px-4 py-2">{{$route->id}}</td>
                    <td class="border px-4 py-2">{{$route->name}}</td>
                    <td class="border px-4 py-2">{{$route->vehicle->name}}</td>
                    <td class="border px-4 py-2">{{$route->vehicle->type}}</td>
                    <th class="px-4 py-2"><a class="m-5 bg-emerald-500 rounded p-1 hover:text-white" href="{{route('user.schedules',['id'=> $route->id])}}">{{__('Check Schedules')}}</th>

                </tr>
                @endforeach
            </tbody>
</table>
    @if ($routes !== null)
        <div class="my-2">
            <div class="table-pagination">
                {{ $routes->links() }}
            </div>
        </div>
    @endif

    </div>
</div>
@include('parts.footer')


