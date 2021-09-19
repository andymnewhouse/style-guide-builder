<div class="relative border-b border-gray-300">
    <button type="button" class="w-full px-4 py-2 text-left" @click="open = '{{ $id }}'">
        <div class="flex items-center justify-between">
            <span class="font-semibold">{{ $title }}</span>
            <x-heroicon-o-plus x-show="open !== '{{ $id }}'" class="w-4 h-4 text-gray-500"/>
            <x-heroicon-o-minus x-show="open === '{{ $id }}'" class="w-4 h-4 text-gray-500"/>
        </div>
    </button>
    <div class="p-4" x-show="open === '{{ $id }}'">
        {{ $slot }}
    </div>
</div>
