<template>
  <div id="app">
    <v-app>
      <Header />
      <v-main>
        <v-container>
          <!-- router-view -->
        </v-container>
      </v-main>
    </v-app>
  </div>
</template>

<script>
import Header from './components/Header'
export default {
  components: {
    Header
  }
}
</script>