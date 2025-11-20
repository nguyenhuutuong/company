
<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">

            {{-- HEADER --}}
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="logo-icon-container">
                        @php $admin_logo_img = Voyager::setting('admin.icon_image', ''); @endphp
                        @if($admin_logo_img == '')
                            <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                            <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                    </div>
                    <div class="title">{{ Voyager::setting('admin.title', 'VOYAGER') }}</div>
                </a>
            </div>


            {{-- USER WIDGET --}}
            <div class="panel widget center bgimage"
                 style="background-image:url({{ Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/bg.jpg') ) }}); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="{{ $user_avatar }}" class="avatar" alt="{{ Auth::user()->name }} avatar">
                    <h4>{{ ucwords(Auth::user()->name) }}</h4>
                    <p>{{ Auth::user()->email }}</p>

                    <a href="{{ route('voyager.profile') }}" class="btn btn-primary">
                        {{ __('voyager::generic.profile') }}
                    </a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>


        {{-- MENU THEO ROLE --}}
        <div id="adminmenu">
            @php
                // Đảm bảo chỉ 1 menu được render, tránh lỗi Vue router
                if(auth()->user()->hasRole('admin')) {
                    $menuName = 'admin';
                } elseif(auth()->user()->hasRole('editor')) {
                    $menuName = 'editor';
                } elseif(auth()->user()->hasRole('staff')) {
                    $menuName = 'staff';
                } else {
                    $menuName = 'admin';
                }
            @endphp

            
            {!! menu($menuName, 'voyager::menu.bootstrap') !!}

        </div>

    </nav>
</div>
