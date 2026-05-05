<div class="sidebar-wrapper">
  <div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
        <li class="has-child open">
          <a href="{{ route('admin.dashboard') }}" class="active" onclick="window.location=this.href">
            <span class="nav-icon uil uil-create-dashboard"></span>
            <span class="menu-text">Dashboard</span>

          </a>

        </li>




        <li class="menu-title mt-30">
          <span>Website</span>
        </li>
        <li class="has-child">
          <a href="#" class="">
            <span class="nav-icon uil uil-envelope"></span>
            <span class="menu-text">Emails</span>
            <span class="toggle-icon"></span>

          </a>
          <ul>
            <li class="">
              <a href="{{ route('admin.mainform.index') }}">Main Form</a>
            </li>

          </ul>
        </li>
        <li class="has-child">
          <a href="#" class="">
            <span class="nav-icon uil uil-briefcase"></span>
            <span class="menu-text">Careers</span>
            <span class="toggle-icon"></span>
          </a>
          <ul>
            <li class="">
              <a href="{{ route('admin.jobs.index') }}">Job Listings</a>
            </li>
            <li class="">
              <a href="{{ route('admin.applications.index') }}">Applications</a>
            </li>
          </ul>
        </li>
        <li class="has-child">
          <a href="{{ route('admin.teams.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-book-open"></span>
            <span class="menu-text">Teams</span>
          </a>
        </li>
        <li class="has-child">
          <a href="{{ route('admin.users.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-user-plus"></span>
            <span class="menu-text">Users</span>
          </a>
        </li>
        <li class="has-child">
          <a href="{{ route('admin.banners.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-book-open"></span>
            <span class="menu-text">Banners</span>
          </a>
        </li>
        <li class="has-child">
          <a href="{{ route('admin.webinars.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-presentation-play"></span>
            <span class="menu-text">Webinars</span>
          </a>
        </li>



        <li class="has-child">
          <a href="{{ route('admin.casestudies.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-book-open"></span>
            <span class="menu-text">Case Study</span>
          </a>
        </li>

        <li class="has-child">
          <a href="{{ route('admin.podcasts.index') }}" onclick="window.location=this.href">
            <span class="nav-icon uil uil-microphone"></span>
            <span class="menu-text">Podcasts</span>
          </a>
        </li>



      </ul>
    </div>
  </div>
</div>