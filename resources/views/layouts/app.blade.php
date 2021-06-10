<x-layouts.base>


    @if(in_array(request()->route()->getName(), ['dashboard', 'profile', 'bootstrap-tables', 'transactions', 'buttons', 'forms', 'modals', 'notifications', 'typography', 'upgrade-to-pro']))

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

    @elseif(in_array(request()->route()->getName(), ['register', 'register-example', 'login', 'login-example', '404', '500', 'forgot-password', 'forgot-password-example', 'reset-password','reset-password-example', 'lock']))

        {{ $slot }}

    @elseif(in_array(request()->route()->getName(), ['index']))

        @include('layouts.index.indexnav')
        {{ $slot }}
        @include('layouts.index.indexfooter')

    @endif
</x-layouts.base>