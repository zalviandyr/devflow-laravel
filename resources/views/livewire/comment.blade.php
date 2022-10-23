<div class="block mb-10">
  <form wire:submit.prevent="addComment">
    <textarea name="body" class="w-full border border-blue-500 rounded-md" wire:model="comment">
  </textarea>
    <button class="px-3 py-3 text-white bg-red-500 rounded-md hover:bg-red-600">Komentari</button>
  </form>
</div>
<div class="block space-y-6">
  @foreach ($comments as $kom)
    <div class="block px-4 py-1 rounded-md hover:bg-gray-100">
      <div class="flex ">
        <img src="{{ $kom->user->photo }}" class="w-10 h-10 mr-6 rounded-full" />
        <div class="block w-full pl-2 border-l-2 border-blue-500">
          <div class="flex justify-between border-b border-b-slate-200">
            <a href="#" class="text-lg text-blue-500">{{ $kom->user->name }}</a>
            <span class="p-1 text-xs rounded-full">{{ formatDate($kom->created_at) }}</span>
          </div>
          <div class="block mt-2">
            {!! Str::markdown($kom->body) !!}
          </div>
        </div>

      </div>
    </div>
  @endforeach
</div>
