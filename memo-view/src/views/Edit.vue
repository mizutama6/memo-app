<template>
  <div class="edit">
    <v-card>
      <v-card-text>
        <v-form method="POST" @submit.prevent="sendData">
          <v-text-field
            v-model="title"
            label="Title"
            :value="data.title"
            outlined
          ></v-text-field>

          <v-textarea
            v-model="content"
            label="Content"
            :value="data.content"
            outlined
            auto-grow
          ></v-textarea>

          <v-btn
            depressed
            color="cyan lighten-2 white--text"
            type="submit"
            class="my-10"
            >update</v-btn
          >
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
      title: '',
      content: '',
    };
  },
  methods: {
    sendData() {
      if(this.title.length === 0 || this.content.length === 0) {
        alert('正しく入力してください');
        return;
      } else {
        alert('memoが更新されました');
        this.$router.replace({name: 'Home'});
      }
    }
  },
  mounted() {
    console.log(this.id);
  },
};
</script>