


<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="">Admin Panel</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="">AP</a>
      </div>
      <ul class="sidebar-menu">
          <li class="{{ Route::is('dashboard2') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-home"></i> <span>{{__('Dashboard')}}</span></a></li>

          <li class="nav-item dropdown {{ Route::is('user.all-booking') || Route::is('user.order-show') || Route::is('user.pending-order') || Route::is('user.complete-order') || Route::is('admin.complete-request') || Route::is('admin.completed-booking') || Route::is('admin.declined-booking')  ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>{{__('All Orders')}}</span></a>

              <ul class="dropdown-menu">
                  <li class="{{ Route::is('user.all-booking') || Route::is('user.all-booking') ? 'active' : '' }}"><a class="nav-link" href="">{{__('admin.All Orders')}}</a></li>

                  <li class="{{ Route::is('user.pending-order') ? 'active' : '' }}"><a class="nav-link" href="">{{__('admin.Pending Orders')}}</a></li>

                  <li class="{{ Route::is('user.complete-order') ? 'active' : '' }}"><a class="nav-link" href="">{{__('admin.Complete Orders')}}</a></li>

              </ul>
          </li>
         

         


         
    

        </ul>

    </aside>
  </div>
