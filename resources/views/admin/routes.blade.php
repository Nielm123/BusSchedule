
@include('parts.head')
@include('parts.adminNav')
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
                    <th class="px-4 py-2"><a class="m-5 bg-emerald-500 rounded p-1 hover:text-white" href="{{route('admin.schedules',['id'=> $route->id])}}">{{__('Check Schedules')}}</th>
                        <form method="post" action="{{route('admin.route-delete')}}">
                            @csrf
                            @method('post')
                            <input type="hidden" name="id" value="{{$route->id}}">
                            <th class="px-4 py-2"><button type="submit" class="m-5 bg-red-700 rounded p-1 hover:text-white" >{{__('Delete')}}</button></th>
                        </form>
                </tr>
                @endforeach
            </tbody>
</table>


    </div>
    @if ($routes !== null)
        <div class="my-2">
            <div class="table-pagination">
                {{ $routes->links() }}
            </div>
        </div>
    @endif
</div>

<div class="flex justify-center p-10 bg-indigo-50">
    <form action="{{route('admin.createRoute')}}" method="post" class="w-full max-w-lg">
        @csrf
        @method('post')

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    {{__('Route Name')}}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-first-name"
                    type="text"
                    name="name"
                    placeholder="{{__('Route Name')}}"
                    required
                >
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    {{__('Vehicle')}}
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="vehicle_id">
                    @foreach($vehicles as $vehicle)
                        <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                    @endforeach
                </select>

                <button type="submit" class="m-5 bg-emerald-500 rounded p-1 hover:text-white" >{{__('Create Route')}}</button>
            </div>
        </div>
    </form>
</div>

@include('parts.footer')


