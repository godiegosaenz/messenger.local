<template>
    <div>
         <b-form class="my-3 mx-2">
            <b-form-input class="text-center"
                type="text"
                placeholder="Buscar contacto ..."
                required>

            </b-form-input>
        </b-form>
        <b-list-group>
            <contact-component variante="dark">
            </contact-component>
            <contact-component variante="">
            </contact-component>
            <contact-component variante="secondary">
            </contact-component>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
