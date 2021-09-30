<div class="flex h-screen grid-cols-2">
    <div class="w-1/4 p-8 overflow-scroll bg-gray-100 shadow-inset">
        <div class="prose">
            <h1>Configuration</h1>

            @foreach($form as $group => $elements)
            <div id="config-{{ $group }}">
                <h2>{{ $group }}</h2>
                <x-accordian>
                    @foreach($elements as $el => $options)
                    <x-accordian.panel :title="strtoupper($el)" :id="$el">
                        <div class="grid gap-6">
                            @foreach($options as $def => $config)
                                <x-dynamic-component :component="'config.' . $def" :group="$group" :el="$el" />
                            @endforeach
                        </div>
                    </x-accordian.panel>
                    @endforeach
                </x-accordian>
            </div>
            @endforeach
        </div>
    </div>
    <div class="w-full overflow-scroll">
        @if($guide->name === 'PSP Audioware')
            @include('psp')
        @else
        <div>
            <h1 class="text-4xl font-black text-gray-900">Style Guide</h1>

            <div id="view-headings">
                <h1 class="{{ $this->classesFor('headings.h1') }}">Heading 1</h1>
                <p class="{{ $this->classesFor('typography.p') }}">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <h2 class="{{ $this->classesFor('headings.h2') }}">Heading 2</h2>
                <p class="{{ $this->classesFor('typography.p') }}">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <h3 class="{{ $this->classesFor('headings.h3') }}">Heading 3</h3>
                <p class="{{ $this->classesFor('typography.p') }}">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <h4 class="{{ $this->classesFor('headings.h4') }}">Heading 4</h4>
                <p class="{{ $this->classesFor('typography.p') }}">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div id="view-typography" class="space-y-2">
                <p class="{{ $this->classesFor('typography.p') }}">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <strong class="{{ $this->classesFor('typography.p-strong') }}">Quod aperiam totam odio sequi illum ipsam eveniet quos</strong>, et pariatur tenetur obcaecati repellat <a href="#" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">Link Styling</a> veniam quas nihil sapiente harum, adipisci voluptatibus.</p>

                <ul class="{{ $this->classesFor('typography.ul') }}">
                    <li>Lorem ipsum dolor sit</li>
                    <li>Eaque labore nulla vitae</li>
                    <li>Quod aperiam totam odio</li>
                </ul>

                <ol class="{{ $this->classesFor('typography.ol') }}">
                    <li>Lorem ipsum dolor sit</li>
                    <li>Eaque labore nulla vitae</li>
                    <li>Quod aperiam totam odio</li>
                </ol>
            </div>

            <div id="view-buttons-links">
                <a href="#" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">Link Styling</a>
            </div>
        </div>
        @endif
    </div>

    <div class="absolute bottom-4 right-4">
        <button wire:click="save" type="button" class="inline-flex items-center p-3 text-white bg-blue-700 border border-transparent rounded-full shadow-lg hover:bg-blue-750 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
            <x-heroicon-o-save class="w-6 h-6" />
        </button>
    </div>
</div>
