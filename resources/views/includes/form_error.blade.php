
@if(count($errors) > 0)

    <div class="alert alert-danger" style="padding: 7px;">

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>


@endif