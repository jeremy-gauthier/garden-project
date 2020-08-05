<template>
    <div>
        <b-card
            :title="title"
            :img-src="image"
            img-alt="Photo de poireau"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-2"
  >
        <b-card-text>
        {{ content }}
        </b-card-text>

    <b-button href="#" variant="primary">Voir</b-button>
        </b-card>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: "" 
            },
            content: {
                type: String,
                default:"" 
            },
            image: {
                    type: String,
                    default:"" 
            }
        }, 
    };
</script>

<style lang="scss" scoped>

</style>