<nav class="nav">
    <div>
        <a href="{{route('dashboard')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i>
            <span class="nav_logo-name">BBBootstrap</span>
        </a>
        <div class="nav_list">
            <a href="{{route('user-add')}}" class="nav_link">
                <i class='bx bx-user nav_icon'></i>
                <span class="nav_name">Users</span>
            </a>
        </div>
    </div>

    <a href="{{route('logout')}}" class="nav_link">
        <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span>
    </a>

</nav>
