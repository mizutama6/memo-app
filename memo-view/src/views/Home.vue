<template>
  <v-row class="mb-6" justify="center">
    <v-col
      cols="12"
      sm="8"
      md="4"
      lg="3"
      v-for="(memo, index) in memos"
      :key="index"
    >
      <v-card height="200">
        <v-card-title>{{ memo.title }}</v-card-title>
        <v-card-text>{{ memo.content | omittedText }}</v-card-text>

        <v-card-actions>
          <v-btn
            color="cyan lighten-2"
            text
            absolute
            bottom
            @click="$router.push({ name: 'Detail', params: {id: memo.id}})"
            >
              show more
            </v-btn
          >
        </v-card-actions>
      </v-card>
    </v-col>
    <v-spacer></v-spacer>
  </v-row>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      memos: [],
    };
  },
  filters: {
    omittedText(text) {
      const length = 45;
      return text.length > length ? text.slice(0, length) + "..." : text;
    },
  },
  methods: {
    async getDatas() {
      const datas = await axios.get('https://memo-app-9826.herokuapp.com/api/memos');
      this.memos = datas.data.data;
      console.log(this.memos);
    }
  },
  mounted() {
    this.getDatas();
  }
};
</script>