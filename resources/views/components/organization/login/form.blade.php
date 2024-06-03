<form action="{{ route('organization.session') }}" method="POST" class="flex flex-col gap-8">
    @csrf

    <x-forms.input id="email" name="email" label="Email" type="email" placeholder="nome@email.com" />
    <x-forms.input-password id="password" name="password" label="Password" placeholder="*******" />
    <x-forms.button text="Login" type="submit" />
    <a href="{{ route('organization.register') }}" target="_self">
        <x-forms.button-secondary text="Cadastrar organização" type="button" />
    </a>
</form>
