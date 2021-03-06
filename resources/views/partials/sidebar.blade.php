<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <ul class="c-sidebar-nav">


    @if (auth()->user()->is_admin)
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('welcome') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
          </use>
        </svg> Dashboard</a></li>
    <li class="c-sidebar-nav-title">{{__('Manage Checklists')}}</li>
    @foreach (\App\CheckListGroup::with('Checklists')->get() as $group)
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show">
      <a class="c-sidebar-nav-link" href="{{ route('admin.checklist_groups.edit', $group->id) }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-folder-open') }}">
          </use>
        </svg> {{ $group->name }}
      </a>
      <ul class="c-sidebar-nav-dropdown-items">
        @foreach ($group->checklists as $checklist)
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
            href="{{ route('admin.checklist_groups.checklists.edit' , [$group ,$checklist]) }}"><span
              class="c-sidebar-nav-icon"></span>
            {{$checklist->name}}</a>
        </li>
        @endforeach
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
            href="{{ route('admin.checklist_groups.checklists.create',$group) }}">
            {{ __('New Checklist') }}</a>
        </li>
      </ul>
    </li>
    @endforeach
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
        href="{{ route('admin.checklist_groups.create') }}">
        {{ __('New Checklist Group') }}</a>
    </li>


    <li class="c-sidebar-nav-title">{{__('Pages')}}</li>
    @foreach (\App\Page::all() as $page)
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
        href="{{ route('admin.pages.edit',$page) }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}">
          </use>
        </svg>{{ $page->title }}
      </a>

    </li>
    @endforeach

    <li class="c-sidebar-nav-title">{{__('Manage Data')}}</li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
        href="{{ route('admin.users.index') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}">
          </use>
        </svg>{{ __('Users') }}
      </a>
    </li>

    @endif






  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button>
</div>