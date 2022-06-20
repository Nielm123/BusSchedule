
@include('parts.head')
@include('parts.userNav')
<div class="container-fluid">
    <h1 class=" p-10 text-2xl text-white bg-teal-500">{{__('Our vehicles')}}</h1>
    <p class="p-10 max-w-5xl m-auto">
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
                <th class="px-4 py-2">{{__('Vehicle id')}}</th>
                <th class="px-4 py-2">{{__('Vehicle name')}}</th>
                <th class="px-4 py-2">{{__('Vehicle type')}}</th>
                @if ($is_logged_in)
                    <th class="px-4 py-2">{{__('Delete Vehicle')}}</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td class="border px-4 py-2">{{$vehicle->id}}</td>
                    <td class="border px-4 py-2">{{$vehicle->name}}</td>
                    <td class="border px-4 py-2">{{$vehicle->type}}</td>

                     <form action="{{route('admin.vehicle-delete'}}" method="POST">
                        @csrf
                        @method('post')
                         //create input hidden
                        <input type="hidden" name="id" value="{{$vehicle->id}}">
                        <th class="px-4 py-2"><button type="submit" class="m-5 bg-red-700 rounded p-1 hover:text-white">{{__('Delete')}}</th>
                     </form>

                </tr>
            @endforeach
            </tbody>
        </table>
        @if ($vehicles !== null)
            <div class="my-2">
                <div class="table-pagination">
                    {{ $vehicles->links() }}
                </div>
            </div>
        @endif
    </div>


        @if ($is_logged_in)
        <h1 class=" p-10 text-2xl text-white bg-teal-500">{{__('Add vehicle')}}</h1>
        <div class="flex justify-center p-10 bg-indigo-50">
            <form action="{{route('admin.vehicle-create')}}" method="POST" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            {{__('Vehicle name')}}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="name"
                            type="text"
                            name="name"
                            placeholder="{{__('Vehicle name')}}"
                            required
                        >
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            {{__('Vehicle type')}}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="type"
                            type="text"
                            name="type"
                            placeholder="{{__('Vehicle type')}}"
                            required
                        >
                    </div>
                    <div class="w-full basis-full justify-center flex">
                            <button type="submit" class="m-5 p-5 bg-red-700 rounded hover:text-white ">{{__('Add Vehicle')}}</button>
                    </div>
                </div>
            </form>
            </div>
        @endif




</div>
@include('parts.footer')


