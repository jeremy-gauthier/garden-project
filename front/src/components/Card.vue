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
        <div class="text-center">
            <b-button class="buttons" :href="href" variant="primary">Voir</b-button>
            <b-button class="buttons"  variant="success">Planter</b-button>
        </div>
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
            },
            href:{
                type:String,
                default:""
            }
        }, 
    };
</script>

<style lang="scss" scoped>
.buttons{
    margin:2px;
}
</style>