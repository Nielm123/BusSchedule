@include('parts.head')
@include('parts.adminNav')
<div class="container-fluid">
    <h1 class=" p-10 text-2xl text-white bg-teal-500">
        @if ($is_logged_in)
            <span class="text-red-700">Admin account:</span>
        @endif
            {{__('Home')}}
    </h1>


    <p class="p-10 max-w-5xl m-auto">
        {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.')}}
    </p>
    <div class="p-5 bg-emerald-50 w-100 text-center text-xl">
        <a href="{{ route('admin.home') }}" class="font-semibold px-5 text-xl tracking-tight">
            <span class="text-2xl">Home</span>
        </a>
    </div>
    <div class="p-5 bg-emerald-50 w-100 text-center text-xl">
        <a href="{{ route('admin.routes') }}" class="font-semibold px-5 text-xl tracking-tight">
            <span class="text-2xl">Routes</span>
        </a>
    </div>
    <div class="p-5 bg-emerald-50 w-100 text-center text-xl">
        <a href="{{ route('admin.vehicles') }}" class="font-semibold px-5 text-xl tracking-tight">
            <span class="text-2xl">Vehicle</span>
        </a>
    </div>
    <div class="p-5 bg-emerald-50 w-100 text-center text-xl">
        <a href="{{ route('login') }}" class="font-semibold text-xl px-5 tracking-tight">
            <span class="text-2xl">Admin Login</span>
        </a>
    </div>

    <p class="p-10 max-w-5xl m-auto">
        {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.
                 Donec euismod, nisl eget consectetur sagittis, nisl nisi
                 consectetur nisi, euismod euismod nisi nisi euismod.')}}
    </p>
</div>
@include('parts.footer')


