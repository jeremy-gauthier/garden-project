<template>
  <div id="app">
    <b-navbar type="dark" variant="dark">
      <b-navbar-brand href="#">Mon potager</b-navbar-brand>
    <b-navbar-nav>
        <b-nav-item href="/">Accueil</b-nav-item>
        <b-nav-item href="fruits">Fruits</b-nav-item>
        <b-nav-item href="légumes">Légumes</b-nav-item>
        <b-nav-item href="aromates">Aromates</b-nav-item>
    </b-navbar-nav>
  </b-navbar>

    <div class="contenu container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>

export default {
  name: 'App',
}
</script>

<style>
</style>
