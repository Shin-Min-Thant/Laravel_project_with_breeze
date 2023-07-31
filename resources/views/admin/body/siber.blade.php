<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Easy<span>Learning</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('admin.dashbord')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Admin Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">web apps</li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#types" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Property Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="types">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.type')}}" class="nav-link">All Type</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#contents" role="button" aria-expanded="false" aria-controls="contents">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Content Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="contents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.content')}}" class="nav-link">Show All Contents</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('add.content')}}" class="nav-link">Add Contents</a>
                </li>

              </ul>
            </div>
          </li>

        <li class="nav-item">
          <a href="pages/apps/chat.html" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Chat</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item nav-category">Role and Permission</li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Permission</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.permission')}}" class="nav-link">All Permission</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.permission')}}" class="nav-link">Add Permission</a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.roles')}}" class="nav-link">All Roles</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.roles.permission')}}" class="nav-link">Add Role and Permission</a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.roles.permission')}}" class="nav-link">All Role and Permission</a>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
            <i class="link-icon" data-feather="inbox"></i>
            <span class="link-title">Forms</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="forms">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/forms/basic-elements.html" class="nav-link">Basic Elements</a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
              </li>

            </ul>
          </div>
        </li>



        <li class="nav-item nav-category">Pages</li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Authentication</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="authPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/auth/login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="pages/auth/register.html" class="nav-link">Register</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="#" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="settings-sidebar">

  </nav>
