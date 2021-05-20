<x-layouts.base>


    @if(in_array(request()->route()->getName(), ['dashboard', 'profile', 'bootstrap-tables', 'transactions', 'buttons', 'forms', 'modals', 'notifications', 'typography']))

        {{-- Nav --}}
        @include('layouts.nav')
        {{-- SideNav --}}
        @include('layouts.sidenav')
        <main class="content">
        {{-- TopBar --}}
        @include('layouts.topbar')
        {{ $slot }}
        {{-- Footer --}}
        @include('layouts.footer')
        </main>

    @elseif(in_array(request()->route()->getName(), ['register', 'login', '404', '500', 'forgot-password', 'reset-password','reset-password-example', 'lock']))

        {{ $slot }}

    @endif
</x-layouts.base>