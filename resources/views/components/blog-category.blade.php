<select class="w-full border border-gray-300 rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500"
    name="category" id="">
    {{-- <option value="">Select Category</option>
                    <option value="Travel">Travel</option>
                    <option value="Food">Food</option>
                    <option value="Fashion">Fashion</option> --}}
    <option value="">Select Category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category }}</option>
    @endforeach
    
</select>
