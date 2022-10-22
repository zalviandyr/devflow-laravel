<div class="relative flex my-6">
  <input type="text" wire:model="topic" class="w-full py-2.5 px-2 rounded-md placeholder:text-gray-300"
    placeholder="Cari Topic" />
  <select name="topic_id" class="w-full py-2.5 px-2 rounded-md">
    @foreach ($topics as $topic)
      <option value="{{ $topic->id }}" class="w-full py-2.5 px-2 rounded-md">{{ $topic->name }}</option>
    @endforeach
  </select>
  {{-- <input type="hidden" name="topic_id" id="topic_id" /> --}}
</div>
