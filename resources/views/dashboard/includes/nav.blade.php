<div class="d-flex flex-column p-3 bg-black">
    <small class="text-muted">
        {{ Auth::user()->email }}
    </small>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('team.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'team') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                team members
            </a>
        </li>
        <li>
            <a href="{{ route('role.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'role') ? 'active' : '' }}">
                <i class="fas fa-users-cog"></i>
                roles
            </a>
        </li>
        <li>
            <a href="{{ route('service.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'service') ? 'active' : '' }}">
                <i class="fas fa-robot"></i>
                services
            </a>
        </li>
        <li>
            <a href="{{ route('project.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'project') ? 'active' : '' }}">
                <i class="fas fa-project-diagram"></i>
                projects
            </a>
        </li>
        <li>
            <a href="{{ route('testimonial.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'testimonial') ? 'active' : '' }}">
                <i class="fas fa-street-view"></i>
                testimonials
            </a>
        </li>
        <li>
            <a href="#" onclick="javascript:document.getElementById('logout-form').submit()" class="nav-link ">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
    </ul>
    <hr>
</div>