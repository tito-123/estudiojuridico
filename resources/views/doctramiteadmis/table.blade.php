<div class="table-responsive">
    <table class="table" id="doctramiteadmis-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Tipo</th>
        <th>Clase</th>
        <th>Documento</th>
        <th>Idtramiteadmi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctramiteadmis as $doctramiteadmi)
            <tr>
                <td>{{ $doctramiteadmi->nombre }}</td>
            <td>{{ $doctramiteadmi->tipo }}</td>
            <td>{{ $doctramiteadmi->clase }}</td>
            <td> <a target="_blank" href="{{asset($doctramiteadmi->documento)}}">{{$doctramiteadmi->nombre}}</a></td>
            <td>{{ $doctramiteadmi->idtramiteadmi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['doctramiteadmis.destroy', $doctramiteadmi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctramiteadmis.show', [$doctramiteadmi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('doctramiteadmis.edit', [$doctramiteadmi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>

                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
