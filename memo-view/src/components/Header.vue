<template>
  <v-app-bar
    app
    absolute
    color="cyan lighten-2"
    elevate-on-scroll
    scroll-target="#scrolling-techniques-7"
  >
    <v-toolbar-title @click="$router.push({ name: 'Home' })">
      <v-btn class="text-h4" text color="#fff">Memo App</v-btn>
    </v-toolbar-title>

    <v-spacer></v-spacer>

    <v-card-actions>
      <v-btn
        @click="$router.push({ name: 'Create' })"
        color="yellow lighten-2"
        class="brown--text"
      >
        Create a new "memo"
      </v-btn>
    </v-card-actions>
  </v-app-bar>
</template>