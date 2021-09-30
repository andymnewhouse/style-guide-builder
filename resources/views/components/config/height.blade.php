<x-bit.input.group for="{{ $el }}-height" label="{{ strtoupper($el) }} Height">
    <x-bit.input.select id="{{ $el }}-height" class="block w-full mt-1" name="{{ $el }}-height" wire:model="form.{{ $group }}.{{ $el }}.height">
        <option value="h-1">h-1</option>
    <option value="h-1.5">h-1.5</option>
    <option value="h-2">h-2</option>
    <option value="h-2.5">h-2.5</option>
    <option value="h-3">h-3</option>
    <option value="h-3.5">h-3.5</option>
    <option value="h-4">h-4</option>
    <option value="h-5">h-5</option>
    <option value="h-6">h-6</option>
    <option value="h-7">h-7</option>
    <option value="h-8">h-8</option>
    <option value="h-9">h-9</option>
    <option value="h-10">h-10</option>
    <option value="h-11">h-11</option>
    <option value="h-12">h-12</option>
    <option value="h-14">h-14</option>
    <option value="h-16">h-16</option>
    <option value="h-20">h-20</option>
    <option value="h-24">h-24</option>
    <option value="h-28">h-28</option>
    <option value="h-32">h-32</option>
    <option value="h-36">h-36</option>
    <option value="h-40">h-40</option>
    <option value="h-44">h-44</option>
    <option value="h-48">h-48</option>
    <option value="h-52">h-52</option>
    <option value="h-56">h-56</option>
    <option value="h-60">h-60</option>
    <option value="h-64">h-64</option>
    <option value="h-72">h-72</option>
    <option value="h-80">h-80</option>
    <option value="h-96">h-96</option>
    </x-bit.input.select>
</x-bit.input.group>
