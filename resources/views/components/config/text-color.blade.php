<x-bit.input.group for="{{ $el }}-text-color" label="{{ strtoupper($el) }} Text Color">
    <x-bit.input.select id="{{ $el }}-text-color" class="block w-full mt-1" name="{{ $el }}-text-color" wire:model="form.{{ $group }}.{{ $el }}.text-color">
        <option value="text-sapphire">Sapphire</option>
        <option value="text-blue-700">Blue</option>
        <option value="text-blue-750">Blue Darker</option>
        <option value="text-gray-50">Gray 50</option>
        <option value="text-gray-100">Gray 100</option>
        <option value="text-gray-200">Gray 200</option>
        <option value="text-gray-300">Gray 300</option>
        <option value="text-gray-400">Gray 400</option>
        <option value="text-gray-500">Gray 500</option>
        <option value="text-gray-600">Gray 600</option>
        <option value="text-gray-700">Gray 700</option>
        <option value="text-gray-800">Gray 800</option>
        <option value="text-gray-900">Gray 900</option>
        <option value="text-white">White</option>
        <option value="text-black">Black</option>
    </x-bit.input.select>
</x-bit.input.group>
