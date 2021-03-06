<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>

            <li><a href="{{url('csstransitions')}}"><i class='fa fa-link'></i> <span>Css Transitions</span></a></li>
            <li><a href="{{url('sendpushnotify')}}"><i class='fa fa-link'></i> <span>Send Push Notify</span></a></li>

            <li class="treeview">
                <a href="{{url('reports')}}"><i class='fa fa-link'></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('reports/dailySales')}}">Daily Sales Report</a></li>
                    <li><a href="{{url('reports/downloadInvoice')}}">Download Invoice PDF</a></li>
                    <li><a href="{{url('reports/createInvoice')}}">Create Invoice PDF</a></li>
                </ul>
            </li>
            <li><a href="{{ url('users') }}"><i class='fa fa-link'></i> <span>Users</span></a></li>
            <li><a href="{{ url('shotout') }}"><i class='fa fa-link'></i> <span>Shotout</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
