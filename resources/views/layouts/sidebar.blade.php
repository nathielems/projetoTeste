<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                {{-- <ul class="nav-justified">
                <li class="text-center"><img class="avatar avatar-48 img-circle" src="photo.jpg"/><p>avatar-lg</p></li> 
            </ul>    --}}            
                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <p>Menu Incial</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('lista')) || (request()->is('cadastro'))  ? 'active' : '' }}">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Pessoas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse {{ (request()->routeIs('cadastro')) || (request()->routeIs('lista')) || (request()->routeIs('pdf')) ? 'show' : '' }}"
                        aria-controls="collapseOne" id="base">
                        <ul class="nav nav-collapse ">
                            <li class="{{ (request()->routeIs('cadastro')) ? 'active' : '' }}">
                                <a href="{{ route('cadastro') }}">
                                    <span class="sub-item">Cadastrar</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('lista')) ? 'active' : '' }}">
                                <a href="{{ route('lista') }}">
                                    <span class="sub-item">Lista de pessoas cadastradas</span>
                                </a>
                            </li>
                            <li class="{{ (request()->routeIs('pdf')) ? 'active' : '' }}">
                                <a href="{{ route('pdf') }}">
                                    <span class="sub-item">PDF de pessoas cadastradas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->