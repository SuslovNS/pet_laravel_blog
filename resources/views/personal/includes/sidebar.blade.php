<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                    <i class="fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="fas fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="fas fa-solid fa-comment"></i>
                    <p>
                       Комментарии
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('main.index')}}" class="nav-link">
                    <i class="fas fa-solid fa-blog"></i>
                    <p>
                        Блог
                    </p>
                </a>
            </li>
            @if(auth()->user()->role == 0)
            <li class="nav-item">
                <a href="{{route('admin.main')}}" class="nav-link">
                    <i class="fas fa-solid fa-hammer"></i>
                    <p>
                        Админ-панель
                    </p>
                </a>
            </li>
        @endif
    </div>
    <!-- /.sidebar -->
</aside>
