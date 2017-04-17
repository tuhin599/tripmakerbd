<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel" style="min-height:70px">
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menus</li>

            @if($authUser->user_type=='Manager')
            <!-- Optionally, you can add icons to the links -->
            <li class="{{$add}}"><a href="{{route('addEmp')}}"><i class="fa fa-plus-square-o"></i> <span>Add Employee</span></a></li>
            <li class="{{$list}}"><a href="{{route('listEmp')}}"><i class="fa fa-list-ol"></i> <span>List Employee</span></a></li>
            @elseif($authUser->user_type=='Emp')
            <li class="{{$add}}"><a href="{{route('addRoom')}}"><i class="fa fa-plus-square-o"></i> <span>Add Rooms</span></a></li>
            <li class="{{$list}}"><a href="{{route('listRoom')}}"><i class="fa fa-list-ol"></i> <span>List Rooms</span></a></li>
            <li class="{{$listreq}}"><a href="{{route('roomRequest')}}"><i class="fa fa-list-ol"></i> <span>Requests</span></a></li>
            @endif
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>