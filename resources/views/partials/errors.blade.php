@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Oops!</strong> Por favor corrije los errores que se indican a continuación<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif