
<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('empleados.index') }}"
       class="nav-link {{ Request::is('empleados*') ? 'active' : '' }}">
        <p>Empleados</p>
    </a>
</li>





