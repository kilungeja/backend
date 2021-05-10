<div class="d-flex flex-column p-3 bg-black">
    <small class="text-muted">
        {{ Auth::user()->email }}
    </small>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-igloo"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('project.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'project') ? 'active' : '' }}">
                <i class="fas fa-project-diagram"></i>
                Projects
            </a>
        </li>
        <li>
            <a href="#" class="nav-link  {{ !!strpos(Request::path(), 'testmonial') ? 'active' : '' }}">
                <i class="fas fa-street-view"></i>
                Testimonials
            </a>
        </li>
    </ul>
    <hr>
</div>