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
      
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>PRODUCTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>Product Add</a></li>
            <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>Product Show</a></li>
          </ul>
        </li>

           <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>CATAGORY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('catagory.create')}}"><i class="fa fa-circle-o"></i>Catagory Add</a></li>
            <li><a href="{{route('catagory.index')}}"><i class="fa fa-circle-o"></i>Catagory Show</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>BRAND</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('brand.create')}}"><i class="fa fa-circle-o"></i>Brand Add</a></li>
            <li><a href="{{route('brand.index')}}"><i class="fa fa-circle-o"></i>Brand Show</a></li>
          </ul>
        </li>
 <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>FEATURED</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{route('featured.create')}}"><i class="fa fa-circle-o"></i>Featured Add</a></li>
            <li><a href="{{route('featured.index')}}"><i class="fa fa-circle-o"></i>Featured Show</a></li>
          </ul>
        </li>
 
      </ul>
    </section>
  
  </aside>