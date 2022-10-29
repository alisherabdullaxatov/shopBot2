





<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}"
       class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <p>@lang('models/categories.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('test') }}"
       class="nav-link {{ Request::is('test*') ? 'active' : '' }}">
        <p>Test</p>
    </a>
</li>

