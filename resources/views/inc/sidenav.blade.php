    <!-- sidebar -->
    <div class="sidebar">
        <span class="closeButton">&times;</span>

        <br><br>
        <p class="brand-title"><a href="">Admin</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{ Request::routeIs('dashboard') ? 'active' : ''}}" href="{{ route('dashboard') }}">User Dashboard</a></li>


            @role('admin')
            <li><a class="{{ Request::routeIs('admin.index') ? 'active' : ''}}"href="{{ route('admin.index') }}">Admin Dashboard</a></li>
            <li><a class="{{ Request::routeIs('admin roles.index') ? 'active' : ''}}"href="{{route('admin roles.index')}} ">Roles</a></li>
            <li><a class="{{ Request::routeIs('admin permissions.index') ? 'active' : ''}}"href="{{ route('admin permissions.index') }}">Permissions</a></li>
            @endrole
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small>&copy 2021 Alphayo Blog</small>
        </footer>
