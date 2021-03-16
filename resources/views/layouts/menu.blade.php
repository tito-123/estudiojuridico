
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

    <ul class="treeview-menu">
               <li class="nav-item">
    <a href="{{ route('tramiteadmis.index') }}"
       class="nav-link {{ Request::is('tramiteadmis*') ? 'active' : '' }}">
        <p>Tramiteadmis</p>
    </a>
</li>
                 
    </ul>

</li>





<li class="nav-item">
    <a href="{{ route('doctramiteadmis.index') }}"
       class="nav-link {{ Request::is('doctramiteadmis*') ? 'active' : '' }}">
        <p>Doctramiteadmis</p>
    </a>
</li>


