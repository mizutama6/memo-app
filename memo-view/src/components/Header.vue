<template>
  <div>
    <v-app-bar
      app
      absolute
      color="cyan lighten-2"
      elevate-on-scroll
      scroll-target="#scrolling-techniques-7"
    >
      <v-toolbar-title
        @click="$router.push({ name: 'Home' })"
        class="white--text text-h5 font-weight-medium"
        style="cursor: pointer"
      >
        MEMO APP
      </v-toolbar-title>

      <v-spacer></v-spacer>

      <v-card-actions>
        <v-btn
          @click="$router.push({ name: 'Create' })"
          depressed
          class="d-none d-md-block create-btn"
          color="cyan--text"
        >
          Create a new "memo"
        </v-btn>
      </v-card-actions>
    </v-app-bar>
    <v-btn
      @click="$router.push({ name: 'Create' })"
      fab
      fixed
      right
      bottom
      color="cyan lighten-2 white--text"
      class="d-md-none create-btn"
      >
      <v-icon> mdi-plus </v-icon>
    </v-btn>
  </div>
</template>