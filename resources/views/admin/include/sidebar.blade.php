<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link-->  <!--begin::Brand Image-->  <!--end::Brand Image--> <!--begin::Brand Text--> <a href="{{route('main.index')}}" class="nav-link"><span class="brand-text fw-light m-0">EDICA</span></a> <!--end::Brand Text-->  <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{route('admin.main.index')}}" class="nav-link"> <i class="bi bi-house-fill"></i>
                        <p>Главная</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('admin.user.index')}}" class="nav-link"> <i class="bi bi-people-fill"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('admin.post.index')}}" class="nav-link"> <i class="bi bi-sticky-fill"></i>
                        <p>Посты</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('admin.category.index')}}" class="nav-link"> <i class="bi bi-stack"></i>
                        <p>Категории</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('admin.tag.index')}}" class="nav-link"> <i class="bi bi-tags-fill"></i>
                        <p>Тэги</p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
