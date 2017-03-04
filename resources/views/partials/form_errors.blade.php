@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <h4><i class="fa fa-warning"></i> Verify the following errors:</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif