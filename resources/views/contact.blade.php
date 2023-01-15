<x-layout title="Contact">
    <x-banner>Contact Us</x-banner>

    <x-container>
        <div class="max-w-[600px] mt-8 mx-auto">
            <form action="#" method="POST">
                <div class="mt-4">
                    <x-input name="name" label="Name" required />
                </div>

                <div class="mt-4">
                    <x-input name="email" label="Email" type="email" required />
                </div>

                <div class="mt-4">
                    <x-textarea name="message" label="Message" rows="8" required />
                </div>

                <div class="mt-4">
                    <x-button label="Send" />
                </div>
            </form>
        </div>
    </x-container>
</x-layout>
