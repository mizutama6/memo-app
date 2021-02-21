<template>
  <div class="detail">
    <v-card>
      <v-card-text>
        <v-form readonly>
          <v-text-field label="Title" :value="memo.title" outlined></v-text-field>

          <v-textarea label="Content" :value="memo.content" outlined auto-grow></v-textarea>

          <v-text-field label="Created at" :value="memo.created_at" outlined></v-text-field>

          <v-btn
            depressed
            color="cyan lighten-2 white--text"
            class="my-10"
            @click="$router.push({ name: 'Edit' })"
          >
            edit
          </v-btn>
        </v-form>
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  props: {
    id: String,
  },
  data() {
    return {
      memo: {},
    };
  },
  methods: {
    async getData() {
      const data = await axios.get(`https://memo-app-9826.herokuapp.com/api/memos/${this.id}`);
      this.memo = data.data.data;
    },
  },
  mounted() {
    this.getData();
  },
};
</script>

<style scoped>


</style>