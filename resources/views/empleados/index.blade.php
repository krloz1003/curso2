<h1>Empleados</h1>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($empleados as $empleado)
		<tr>
			<td>{!! $empleado->matricula !!}</td>
			<td>{!! $empleado->paterno !!}
				{!! $empleado->materno !!}
				{!! $empleado->nombre !!}
			</td>
			<td>
				<a href="/empleados/{!!$empleado->id!!}/edit">Editar</a>
				{!! Form::model('',['route' => ['empleados.destroy',
														 $empleado->id],
														 'method' => 'DELETE'
														])
				!!}
					{!! Form::submit('Eliminar', ['class' => 'btn btn-success']) !!}
				{!! Form::close() !!}				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $empleados->links() }}