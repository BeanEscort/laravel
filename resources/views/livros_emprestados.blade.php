{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('livro_id', 'Livro_id:') !!}
			{!! Form::text('livro_id') !!}
		</li>
		<li>
			{!! Form::label('data_emprestimo', 'Data_emprestimo:') !!}
			{!! Form::text('data_emprestimo') !!}
		</li>
		<li>
			{!! Form::label('data_devolucao', 'Data_devolucao:') !!}
			{!! Form::text('data_devolucao') !!}
		</li>
		<li>
			{!! Form::label('estado', 'Estado:') !!}
			{!! Form::text('estado') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}