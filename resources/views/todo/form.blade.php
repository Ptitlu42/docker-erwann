@csrf
<input type="hidden" name="id" value="{{ old('name', empty($todo)?'':$todo->id) }}">
<div class="mb-3">
    <label for="name" class="form-label" required>Title</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Buy a burger"  value="{{ old('name', empty($todo)?'':$todo->name) }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', empty($todo)?'':$todo->description) }}</textarea>
</div>
<div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $id => $category)
        <option value="{{$id}}" 
            @if (old('category_id', empty($todo)?'':$todo->category->id) == $id)
                selected
            @endif
            > 
            {{ $category }} 
        </option>
        @endforeach
    </select>

</div>
<div class="mb-3">
    <button type="submit" class="btn">OK</button>
</div>