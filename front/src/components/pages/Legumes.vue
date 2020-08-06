<template>
    <div>
    
        <h1>Légumes</h1>
      <div class="row">
        <div class="col-sm-4">
          <Card 
            title="Poireau" 
            content="Le poireau c'est délicieux" 
            image="https://assets.afcdn.com/recipe/20170607/67489_w300h300c1cx350cy350.jpg"
            href="/posts/poireau"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Aubergine" 
            content="L'aubergine c'est la vie" 
            image="https://www.biendecheznous.be/sites/default/files/ps_image/istock_aubergine.jpg"
            href="/posts/au"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Poivron" 
            content="Le poivron c'est le bien" 
            image="https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/poivron/poivron_346_346_filled.jpg"
            href="/posts/poivron"/>
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