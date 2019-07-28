<div class="pt-32">
    <img wire:click="switch" class="mx-auto cursor-pointer w-1/2" src="{{ $uri }}" />

    <div class="w-1/2 ml-24">
        <pre class="text-pink-500 text-sm pt-6">
            <span class="text-pink-900">&lt;!-- resources/views/livewire/neon.blade.php --&gt;</span><br />
            &lt;img wire:click="switch" class="mx-auto cursor-pointer w-1/2" src="{{ $uri }}"&gt;
        </pre>

        <pre class="text-pink-500 text-sm pt-6">
            <span class="text-pink-900">&lt;!-- app/Http/Livewire/neon.php --&gt;</span><br />
            public function switch()<br />
            {<br />
                $uris = [<br />
                    true => url('/img/livewire-purple.png'),<br />
                    false => url('/img/livewire-dark.png'),<br />
                ];<br />
                <br />
                $this->uri = $uris[$this->isSwitchedOn];<br />
                $this->isSwitchedOn = !$this->isSwitchedOn;<br />
            }<br />
        </pre>
    </div>
</di>
