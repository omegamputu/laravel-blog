<my-component 
    csrf-token="{{ csrf_token() }}"
    :user="{{ $user }}"
    update-route="{{ route('users.update', ['user' => $user]) }}">
</my-component inline-component>