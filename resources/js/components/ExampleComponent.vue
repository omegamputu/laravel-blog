<template>
    <div>
        <form method="post" action="{{ route('users.update', ['user' => $user]) }}">
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="PATCH">

            <!-- Some form fields -->
            
            <button type="submit">{{ __('button.update') }}</button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            csrfToken: {
                type: String,
                required: true,
            },
            user: {
                type: Object,
                required: true,
            },
            updateRoute: {
                type: String,
                required: true,
            }
        },
    }
</script>
