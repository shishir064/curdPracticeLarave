<div class="w-full border border-gray-300 rounded-lg p-4">
    <div class="space-y-2">
        @foreach ($tags as $tag)
        <label class="flex items-center gap-2">
            <input type="checkbox" name="tags[]" value="{{ $tag->id}}" class="rounded">
            <span>{{ $tag->tag }}</span>
        </label>
        @endforeach
    </div>
</div>