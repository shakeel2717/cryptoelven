<div class="sidebar-body">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Exit</li>
        <form action="{{ route('logout') }}" id="logoutForm" method="POST">
            @csrf
        </form>
        <li class="nav-item">
            <a href="javascript:;" onclick="logoutFunction()" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Sign Out</span>
            </a>
        </li>
    </ul>
</div>