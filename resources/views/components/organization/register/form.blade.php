<form action="{{ route('organization.register.create') }}" method="POST" class="flex flex-col gap-6">
    @csrf

    <x-forms.input id="admin"  name="admin" label="Nome do responsável" type="text" placeholder="Antônio Bandeira" />

    <x-forms.input id="nameOrg"  name="nameOrg" label="Nome da organização" type="text" placeholder="Instituto Salva Animais" />

    <x-forms.input id="email" name="email" label="Email" type="email" placeholder="nome@email.com" />

    <x-forms.input id="cep" name="cep" label="CEP" type="text" placeholder="12345-00" />

    <x-forms.input id="whatsapp" name="whatsapp" label="Whatsapp" type="text" placeholder="88 98888-8888" />

    <x-organization.register.utils.input-map-preview />

    <x-forms.input-password id="password" name="password" label="Senha" placeholder="******" />

    <x-forms.button id="register" name="register" text="Cadastrar" type="submit" />

    <a href="{{ route('organization.login') }}">
        <x-forms.button-secondary text="Já possui conta?" type="button" />
    </a>
</form>
