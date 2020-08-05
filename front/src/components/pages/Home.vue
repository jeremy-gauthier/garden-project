<template>
    <div>
    
        <h1>Mon potager</h1>
      <div class="row">
        <div class="col-sm-4">
          <Card title="Poireau" content="Le poireau c'est délicieux" image="https://assets.afcdn.com/recipe/20170607/67489_w300h300c1cx350cy350.jpg"/>
        </div>
        <div class="col-sm-4">
          <Card title="Aubergine" content="L'aubergine c'est la vie" image="https://www.biendecheznous.be/sites/default/files/ps_image/istock_aubergine.jpg"/>
        </div>
        <div class="col-sm-4">
          <Card title="Menthe" content="La menthe c'est le bien" image="https://img-3.journaldesfemmes.fr/DNaVMu1U2BeYLniB0GQaD88Luog=/1240x/smart/c05ed9e0c3384cbdb6537c22ecf63337/ccmcms-jdf/10660976.jpg"/>
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