<template>
    <div>
        <b-card
            :title="plant"
            :img-src="image"
            img-alt="Photo"
            img-top
            tag="plant"
            style="max-width: 20rem;"
            class="mb-2"
  >
        <b-card-text>
        Vous avez planté ceci le {{ day_plant }} <br> il vous faudra le recolter en {{ day_recolt }}
        </b-card-text>
        <br>
        <div class="text-center">
            <b-button :href="href" variant="primary">En savoir plus</b-button>
        </div>
        </b-card>
    </div>
</template>

<script>
    export default {
    
    methods: {
      randomValue() {
        this.value = Math.random() * this.max
      }
    },
    props: {
        plant: {
            type: String,
            default: "" 
            },
        day_plant: {
            type: Date,
            default:"" 
            },
        day_recolt: {
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

</style>