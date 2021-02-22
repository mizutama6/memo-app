<template>
  <div class="detail">
    <v-card>
      <v-card-text>
        <v-form readonly>
          <v-text-field
            label="Title"
            :value="memo.title"
            outlined
          ></v-text-field>

          <v-textarea
            label="Content"
            :value="memo.content"
            outlined
            auto-grow
          ></v-textarea>

          <v-text-field
            label="Created at"
            :value="memo.created_at"
            outlined
          ></v-text-field>

          <v-card-actions>
            <v-btn
              depressed
              color="cyan lighten-2 white--text"
              @click="$router.push({ name: 'Edit' })"
            >
              edit
            </v-btn>

            <v-btn
              depressed
              text
              color="pink"
              @click="deleteMemo"
            >
              delete
            </v-btn>
          </v-card-actions>
        </v-form>
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
import axios from "axios";
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
    /**
     * 特定のmemoのデータを取得する
     */
    async getData() {
      await axios.get(
        `https://memo-app-9826.herokuapp.com/api/memos/${this.id}`
      ).then(res => {
        this.memo = res.data.data;
      }).catch(err => {
        console.log(err);
      });
    },
    /**
     * memoを削除する
     */
    deleteMemo() {
      const deleteConfirmation = confirm('削除しますか？');
      if(deleteConfirmation) {
        axios.delete(
          `https://memo-app-9826.herokuapp.com/api/memos/${this.id}`
        ).then(res => {
          console.log(res);
          alert('memoを削除しました！');
          this.$router.replace({name: 'Home'});
        }).catch(err => {
          alert(err);
        });
      } else {
        return;
      }
    }
  },
  mounted() {
    this.getData();
  },
};
</script>