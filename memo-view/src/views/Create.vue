<template>
  <v-form ref="form" v-model="valid" lazy-validation @submit.prevent="sendData">
    <v-text-field
      v-model="newMemoData.title"
      :counter="100"
      label="Title"
      :rules="titleRules"
    ></v-text-field>

    <v-textarea
      v-model="newMemoData.content"
      label="Content"
      :rules="contentRules"
      auto-grow
      required
    ></v-textarea>

    <v-btn
      depressed
      color="cyan lighten-2 white--text"
      type="submit"
      class="my-10"
      >create</v-btn
    >
  </v-form>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      newMemoData: {},
      titleRules: [
        (v) => !!v || "Title is required",
        (v) =>
          (v && v.length <= 100) || "Title must be less than 100 characters",
      ],
      contentRules: [(v) => !!v || "Content is required"],
    };
  },
  methods: {
    sendData() {
      if (this.title === "" || this.content === "") {
        alert("正しく入力してください");
        return;
      } else {
        axios
          .post(
            "https://memo-app-9826.herokuapp.com/api/memos",
            this.newMemoData
          )
          .then((res) => {
            alert("memoが作成されました！");
            console.log(res);
            this.$router.replace({ name: "Home" });
          }).catch(err => {
            alert(err);
          });
      }
    },
  },
};
</script>