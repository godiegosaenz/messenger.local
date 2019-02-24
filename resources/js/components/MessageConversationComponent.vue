<template>
    <b-media :right-align="me" vertical-align="center" class="mb-2">
        <b-img rounded="circle" slot="aside" blank blank-color="#ccc" width="48" alt="placeholder" />
        <b-card>
            <slot>

            </slot>
        </b-card>

    </b-media>
</template>

<script>
    export default {
        props : {
            me : Boolean
        },
        data() {
            return {
                content: 'ABC'
            }
        },
        mounted() {
            console.log('variable me ', this.me);
        }
    }
</script>
