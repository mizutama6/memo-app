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
  },
  mounted() {
    this.getData();
  },
};
</script>