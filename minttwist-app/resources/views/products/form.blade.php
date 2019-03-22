<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" value="{{ old('name') ?? $product->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" type="text" name="description">{{ old('description') ?? $product->name }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input class="form-control" type="number" step="0.01" min="0.00" name="price" value="{{ old('price') ?? $product->price }}">
    <div>{{ $errors->first('price') }}</div>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
    @foreach($product->statusOptions() as $statusOptionKey => $statusOptionValue)
            <option value="{{ $statusOptionKey }}" {{ $product->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
        @endforeach  
    </select>
    <div>{{ $errors->first('status') }}</div>
</div>
@csrf
