<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Aitäh registreerumast! Enne jätkamist, kas saaksite kinnitada enda emaili enda postkastist? Kui ei saanud meili kätte, saadame Teile uue!') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Uus kinnitamis mail saadeti Teie poolt lisatud emailile!') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Saada uus kinnitamis mail') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logi välja') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
