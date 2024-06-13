@if (session() -> has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
    <strong>{{session('message')}}</strong>
</div>
@endif