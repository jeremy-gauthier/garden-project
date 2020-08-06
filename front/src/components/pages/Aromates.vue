<template>
    <div>
    
        <h1>Aromates</h1>
      <div class="row">
        <div class="col-sm-4">
          <Card 
            title="Menthe" 
            content="La menthe c'est délicieux" 
            image="https://img-3.journaldesfemmes.fr/DNaVMu1U2BeYLniB0GQaD88Luog=/1240x/smart/c05ed9e0c3384cbdb6537c22ecf63337/ccmcms-jdf/10660976.jpg"
            href="/posts/menthe"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Thym" 
            content="Le thym c'est la vie" 
            image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSdFzMe9pG6mf01fQtLQgDd85XI4yD91vCXtg&usqp=CAU"
            href="/posts/thym"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Persil" 
            content="Le persil c'est le bien" 
            image="https://static.potageons.fr/305-large_default/graines-de-persil-plat.jpg"
            href="/posts/persil"/>
        </div>  
      </div>
    </div>
   
</template>

<script>
import Card from "@/components/Card";
    export default {
    components: {
        Card
    }   
};
</script>

<style lang="scss" scoped>

</style>