<div style="margin:opx 50px 0px 50px">
@if($pages)
	<table class="table teble-hover table-striped">
		<thead>
			<tr>
				<th>№</th>
				<th>Имя</th>
				<th>Псевдоним</th>
				<th>Текст</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pages as $k =>$page)
				<tr >
					<td>{{$page->id}}</td>
					<td>{!! Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
					<td>{{$page->alias}}</td>
					<td>{!! $page->text !!}</td>
					<td>{{$page->created_at}}</td>
					<td>
			{!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				{!! Form::hidden('_method','delete') !!}
				{!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
			{!! Form::close() !!}
					</td>					
				</tr>
			
			@endforeach
		</tbody>
	</table>
@endif
<style>
a {color: black;}	
</style>
{!! Html::link(route('pagesAdd'),'Новая страница') !!}


</div>