<div>
    <form method="POST" action="/products/store">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div>
            <label for="name">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price">
        </div>

        <input type="submit" value="Save">
    </form>
</div>