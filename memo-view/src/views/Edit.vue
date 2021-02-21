<template>
  <div class="edit">
    <v-card>
      <v-card-text>
        <v-form method="POST" @submit.prevent="sendData">
          <v-text-field
            v-model="memo.title"
            label="Title"
          ></v-text-field>

          <v-textarea
            v-model="memo.content"
            label="Content"
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
import axios from 'axios';
export default {
  props: {
    id: Number,
  },
  data() {
    return {
      memo: {},
    };
  },
  methods: {
    sendData() {
      if(this.title === '' || this.content === '') {
        alert('正しく入力してください');
        return;
      } else {
        axios.put(`https://memo-app-9826.herokuapp.com/api/memos/${this.id}`, this.memo)
          .then(res => {
            alert('memoが更新されました');
            console.log(res);
            this.$router.replace({name: 'Home'});
          }).catch(err => {
            alert(err);
            return;
          });
      }
    },
    async getData() {
      const data = await axios.get(`https://memo-app-9826.herokuapp.com/api/memos/${this.id}`);
      this.memo = data.data.data;
      console.log(this.memo)
    },
  },
  mounted() {
    this.getData();
  },
};
</script>