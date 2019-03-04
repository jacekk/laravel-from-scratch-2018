@if($errors->any())
<div class="field">
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
