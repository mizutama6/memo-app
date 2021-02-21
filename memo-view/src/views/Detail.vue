<template>
  <div class="detail">
    <v-card>
      <v-card-text>
        <v-form readonly>
          <v-text-field label="Title" :value="data.title" outlined></v-text-field>

          <v-textarea label="Content" :value="data.content" outlined auto-grow></v-textarea>

          <v-text-field label="Created at" :value="data.created_at" outlined></v-text-field>

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
export default {
  props: {
    id: Number,
  },
  data() {
    return {
      data: {
        title: "明日の献立",
        content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        created_at: "2020/02/12",
      },
    };
  },
  mounted() {
    console.log(this.id);
  },
};
</script>

<style scoped>


</style>