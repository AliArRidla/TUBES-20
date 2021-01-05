  <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            {{-- profile --}}
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('storage/img/profile/ali.jpg')}}" alt="profile image">
                  {{-- <img class="img-xs rounded-circle" src="{{Auth::user()->image}}" alt="profile image"> --}}
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  {{-- {{Auth::user()->name}} --}}
                  <p class="profile-name">Admin</p>
                  <p class="designation">Percobaan</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('movies') }}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Movies</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('producers') }}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Produser</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users') }}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('comments') }}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Comments</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li> --}}
          </ul>
        </nav>