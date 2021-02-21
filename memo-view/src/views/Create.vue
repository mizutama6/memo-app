<template>
  <v-form ref="form" v-model="valid" lazy-validation @submit.prevent="sendData">
    <v-text-field
      v-model="title"
      :counter="100"
      label="Title"
      :rules="titleRules"
    ></v-text-field>

    <v-textarea
      v-model="content"
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
export default {
  data() {
    return {
      title: "",
      titleRules: [
        (v) => !!v || "Title is required",
        (v) =>
          (v && v.length <= 100) || "Title must be less than 100 characters",
      ],
      content: "",
      contentRules: [(v) => !!v || "Content is required"],
    };
  },
  methods: {
    sendData() {
      if (this.title.length === 0 || this.content.length === 0) {
        alert("全ての項目を入力してください");
        return;
      } else {
        alert("Sent Datas!");
        this.$router.replace({ name: "Home" });
      }
    },
  },
};
</script>