<h1>{{ isset($item) ? 'Edit Item' : 'Create Item' }}</h1>
<form action="{{ isset($item) ? route('items.update', $item->id) : route('items.store') }}" method="POST">
    @csrf
    @if(isset($item))
        @method('PUT')
    @endif
    <label for="name">Nama departemen:</label>
    <input type="text" name="name" value="{{ $item->name ?? '' }}" required>
    <button type="submit">{{ isset($item) ? 'Update' : 'Create' }}</button>
</form>
