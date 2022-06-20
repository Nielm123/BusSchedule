
<div>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a href="#" class="font-semibold text-xl tracking-tight">
                <span class="text-2xl">Chungus Bus Travel</span>
            </a>
        </div>



        <div class="flex items-center flex-shrink-0 text-white mr-6 ">
            <a href="{{ route('user.home') }}" class="font-semibold px-5 text-xl tracking-tight">
                <span class="text-2xl">Home</span>
            </a>
            <a href="{{ route('user.routes') }}" class="font-semibold px-5 text-xl tracking-tight">
                <span class="text-2xl">Routes</span>
            </a>
            <a href="{{ route('user.vehicles') }}" class="font-semibold px-5 text-xl tracking-tight">
                <span class="text-2xl">Vehicle</span>
            </a>

            <a href="{{ route('user.vehicles') }}" class="font-semibold px-5 text-xl tracking-tight">
                <span class="text-2xl">Vehicle</span>
            </a>
            <a href="{{ route('login') }}" class="font-semibold text-xl px-5 tracking-tight">
                <span class="text-2xl">Admin Login</span>
            </a>

        </div>

        <nav>
</div>
    <div>
        <div class="h-full w-full justify-center flex">
        <img class="object-cover w-full h-96" src="https://myglogow.pl/wp-content/uploads/2021/05/2L8A6852-800x600.jpg" alt="">
    </div>
</div>
<div class="p-5">
@if (isset($status))
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
</div>
