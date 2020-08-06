<template>
    <div>
    
        <h1>Fruits</h1>
      <div class="row">
        <div class="col-sm-4">
          <Card 
            title="Pasteque" 
            content="La pasteque c'est délicieux" 
            image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZs_SELW0wBD8MIIqxzdhkz07W7dwLAFmjGQ&usqp=CAU"
            href="/posts/pasteque"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Melon" 
            content="Le melon c'est la vie" 
            image="https://www.carrefour.fr/media/540x540/Photosite/PRODUITS_FRAIS_TRANSFORMATION/FRUITS_ET_LEGUMES/3276550360193_PHOTOSITE_20150619_162633_0.jpg?placeholder=1"
            href="/posts/melon"/>
        </div>
        <div class="col-sm-4">
          <Card 
            title="Pomme" 
            content="Les pommes c'est le bien" 
            image="https://media.gerbeaud.net/2017/01/640/pomme-detouree.jpg"
            href="/posts/pomme"/>
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