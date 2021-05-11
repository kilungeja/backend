<div class="d-flex flex-column p-3 bg-black">
    <small class="text-muted">
        {{ Auth::user()->email }}
    </small>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('project.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'project') ? 'active' : '' }}">
                <i class="fas fa-project-diagram"></i>
                Projects
            </a>
        </li>
        <li>
            <a href="{{ route('testimonial.index') }}"
                class="nav-link  {{ !!strpos(Request::path(), 'testimonial') ? 'active' : '' }}">
                <i class="fas fa-street-view"></i>
                Testimonials
            </a>
        </li>
    </ul>
    <hr>
</div>