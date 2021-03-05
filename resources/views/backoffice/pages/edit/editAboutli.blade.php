<div class="container mt-5 pt-5">
    <div class="bg-light py-3 px-4">
        <div class="mb-4">
            <h1>Add an element</h1>
        </div>

        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="/" method="POST">
            @csrf
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="divColClass" value="{{old('')}}">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="iClass" value="{{old('')}}">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="title" value="{{old('')}}">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="description" value="{{old('')}}">
            </div>
            <button type="submit" class="btn btn-success my-3">ADD</button>
        </form>
    </div>
</div>