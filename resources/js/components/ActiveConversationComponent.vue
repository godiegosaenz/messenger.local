<template>
     <b-row class="h-100">
        <b-col cols="8" class="h-100">
            <b-card
                footer-bg-variant="ligth"
                footer-border-variant="dark"
                title="Title"
                class="h-100"
            >
            <p class="card-text">Header and pi variants.</p>
            <b-media left-align vertical-align="center" class="mb-2">
                <b-img rounded="circle" slot="aside" blank blank-color="#ccc" width="48" alt="placeholder" />
                <b-card>
                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                    congue felis in faucibus.
                </b-card>

            </b-media>
            <b-media right-align vertical-align="center" class="mb-2">
            <b-img rounded="circle" slot="aside" blank blank-color="#ccc" width="48" alt="placeholder" />
                <b-card>
                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                    congue felis in faucibus.
                </b-card>

            </b-media>
            <div slot="footer">
                <b-form class="mb-0">
                    <b-input-group>
                         <b-form-input class="text-center"
                            type="text"
                            placeholder="Escribe un mensaje ..."
                            required>

                        </b-form-input>

                        <b-input-group-append>
                            <b-button variant="primary">Enviar</b-button>
                        </b-input-group-append>
                    </b-input-group>
                </b-form>
            </div>
            </b-card>
        </b-col>
        <b-col cols="4">
            <b-img rounded="circle" blank width="60" height="60" blank-color="#777" alt="img" class="m-1" />
            <p>Usuario Seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificacion
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
