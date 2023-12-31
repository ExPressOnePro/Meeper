@section('sidebar')
    <div class="sidebar-panel bg-white">
        <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center">
{{--            <a href="{{ route('home') }}">--}}
{{--                <img class="pl-3" src="../../dist-assets/images/logo.png" alt="alt" />--}}
{{--                <span class=" item-name text-20 text-primary font-weight-700">MEEPER</span>--}}
{{--            </a>--}}
            {{--<img class="pl-3" src="../../dist-assets/images/logo.png" alt="alt" />
            <span class=" item-name text-20 text-primary font-weight-700">MEEPER</span>--}}
            <div class="sidebar-compact-switch ml-auto"><span></span></div>
        </div>
        <!--  Developer -->
        <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
            <div class="side-nav">
                <div class="main-menu">
                    <ul class="metismenu" id="menu">

{{--                        --}}{{--Stands--}}
{{--                        @can('Stand-Open stand table')--}}
{{--                            <li class="Ul_li--hover">--}}
{{--                                <a href="{{ route('stand') }}">--}}
{{--                                    <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                    <span class="item-name text-15 heading">Стенды</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endcan--}}

{{--                        --}}{{--Users--}}
{{--                        @if(auth()->user()->hasRole('Developer'))--}}
{{--                            @can('Users-Open all users')--}}
{{--                                <li class="Ul_li--hover">--}}
{{--                                    <a href="{{ route('users') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="item-name text-15 heading">Все Возвещатели</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        @else--}}
{{--                            @can('Users-Open congregation users')--}}
{{--                                <li class="Ul_li--hover">--}}
{{--                                    <a href="{{ route('users') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="item-name text-15 heading">Возвещатели</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        @endif--}}

{{--                        --}}{{--Congregations--}}
{{--                        @if(auth()->user()->hasRole('Developer'))--}}
{{--                            @can('Congregations-Open all congregations')--}}
{{--                                <li class="Ul_li--hover">--}}
{{--                                    <a href="{{ route('congregationSelect') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="item-name text-15 heading">Все собрания</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        @else--}}
{{--                            @can('Congregations-Open congregation')--}}
{{--                                <li class="Ul_li--hover">--}}
{{--                                    <a href="{{ route('congregationView', Auth::user()->congregation_id) }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="item-name text-15 heading">Мое собрание</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        @endif--}}



{{--                        @role('Developer')--}}
{{--                        --}}{{--Next--}}
{{--                        <li class="Ul_li--hover">--}}
{{--                            <a class="has-arrow" href="#">--}}
{{--                                <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                <span class="item-name text-15 heading">Роли и права</span>--}}
{{--                            </a>--}}
{{--                            <ul class="mm-collapse">--}}
{{--                                <li class="item-name">--}}
{{--                                    <a href="{{ route('rolesPermissionsPage') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="heading">Главная</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="item-name">--}}
{{--                                    <a href="{{ route('createNewRolePage') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="heading">Создать роль</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="item-name">--}}
{{--                                    <a href="{{ route('createNewPermissionPage') }}">--}}
{{--                                        <i class="text-20 mr-2 text-muted"></i>--}}
{{--                                        <span class="heading">Создать право</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        @endrole--}}
                        {{--Documentations--}}
                        <li class="Ul_li--hover">
                            {{--<a href="">--}}
                            <i class="fa-solid fa-file text-20 mr-2 text-muted"></i>
                            <span class="item-name text-15 text-muted">Документы</span>
                            {{--</a>--}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
            </div>
        </div>

        <!--  User -->
        <!--  side-nav-close -->
    </div>
    <div class="switch-overlay"></div>
