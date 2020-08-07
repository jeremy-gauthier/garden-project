<template>
    <div>
        <h1>{{ name }}</h1>
        <h3>Le semi</h3>
        <p> {{ semi }} </p>
        <h3>La récolte</h3>
        <p> {{ recolt }} </p>
        <h3>Exposition</h3>
        <p> {{ exposition }} </p>
        <h3>sol</h3>
        <p> {{ sol }} </p>
        <h3>Arrosage</h3>
        <p>{{ watering }}</p>
        <h3>Conseils</h3>
        <p>{{ advice }}</p>
        <h3>Nombre de plantation dans mon potager</h3>
        <p>{{ quantity_plant }}</p>
    </div>
</template>

<script>
    export default {
    
    props: {
        name: {
            type: String,
            default: "" 
            },
        picture: {
            type: String,
            default:"" 
            },
        semi: {
            type: String,
            default:"" 
            },
        recolt: {
            type: String,
            default:"" 
            },
        exposition:{
            type:String,
            default:""
            },
        sol: {
            type: String,
            default:"" 
            },
        watering: {
            type: String,
            default:"" 
            },
        advice: {
            type: String,
            default:"" 
            },
        quantity_plant: {
            type: String,
            default:"" 
            },
        },
    };
</script>

<style lang="scss" scoped>
h1{
    font-size: 4em;
}
</style>