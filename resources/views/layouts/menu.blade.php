
<li class="treeview"">
    <a href="#"><i class="fa fa-edit"></i><span>Gestionar Usuarios</span></a>

    <ul class="treeview-menu">
                <li><a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a></li>
                <li> <a href="{{ route('empleados.index') }}"
       class="nav-link {{ Request::is('empleados*') ? 'active' : '' }}">
        <p>Empleados</p>
    </a></li>    
    </ul>

</li>

<li class="treeview"">
    <a href="#"><i class="fa fa-edit"></i><span>Gestionar tramites</span></a>

    

</li>


