<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image float-left">
          <img src="{{asset('/images/user.png')}}" class="rounded" alt="User Image">
        </div>
        <div class="info float-left">
         
          <a href="#"><i class="fa fa-circle text-success"></i>
           
          </a>
        </div>
      </div>
      
      <!-- sidebar menu  -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{route('home')}}">
            <i class="fa fa-calendar"></i> <span>Basic mSells</span>
          </a>
        </li>
      
      
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Header</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('header.create')}}"><i class="fa fa-circle-o"></i> Header Add</a></li>
            <li><a href="{{route('header.index')}}"><i class="fa fa-circle-o"></i> Header List</a></li>
          </ul>
        </li> --}}

      </ul>
    </section>
  
  </aside>