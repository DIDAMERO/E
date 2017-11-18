@if(Session::has('info'))
<div class="alert aler-info">
<button type="button" class="close" data-dismiss="alert">
	&times;
</button>
{{Session::get('info')}}	
</div>
@endif