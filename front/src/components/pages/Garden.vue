<template>
    <div>
    
        <h1>Mon Potager</h1>
      <div class="row">
        <div class="col-sm-4">
          <Fiche
            plant="Menthe"
            image="https://img-3.journaldesfemmes.fr/DNaVMu1U2BeYLniB0GQaD88Luog=/1240x/smart/c05ed9e0c3384cbdb6537c22ecf63337/ccmcms-jdf/10660976.jpg"
            day_plant="2019-07-16"
            day_recolt="Mars"
            href="/posts/menthe"/>
        </div>

        <div class="col-sm-4">
          <Fiche
            plant="Thym"
            image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSdFzMe9pG6mf01fQtLQgDd85XI4yD91vCXtg&usqp=CAU"
            day_plant="2020-07-16"
            day_recolt="Janvier"
            href="/posts/thym"/>
        </div>

        <div class="col-sm-4">
          <Fiche
            plant="Persil"
            image="https://static.potageons.fr/305-large_default/graines-de-persil-plat.jpg"
            day_plant="2019-07-16"
            day_recolt="Octobre"
            href="/posts/persil"/>
        </div>

        <div class="col-sm-4">
          <Fiche
            plant="Poivron"
            image="https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/poivron/poivron_346_346_filled.jpg"
            day_plant="2019-07-16"
            day_recolt="Novembre"
            href="/posts/poivron"/>
        </div>

        <div class="col-sm-4">
          <Fiche
            plant="poireau"
            image="https://assets.afcdn.com/recipe/20170607/67489_w300h300c1cx350cy350.jpg"
            day_plant="2019-07-16"
            day_recolt="Mars"
            href="/posts/poireau"/>
        </div>

        <div class="col-sm-4">
          <Fiche
            plant="Aubergine"
            image="https://www.biendecheznous.be/sites/default/files/ps_image/istock_aubergine.jpg"
            day_plant="2019-07-16"
            day_recolt="Juillet"
            href="/posts/aubergine"/>
        </div>



      </div>
    </div>
   
</template>

<script>
import Fiche from "@/components/Fiche";
    export default {
    components: {
        Fiche
    }   
};
</script>

<style lang="scss" scoped>

</style>