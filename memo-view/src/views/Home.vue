<template>
  <v-row class="mb-6" justify="center">
    <v-col
      cols="12"
      sm="8"
      md="4"
      lg="3"
      v-for="(data, index) in memos"
      :key="index"
    >
      <v-card height="200">
        <v-card-title>{{ data.title }}</v-card-title>
        <v-card-text>{{ data.content | omittedText }}</v-card-text>

        <v-card-actions>
          <v-btn
            color="cyan lighten-2"
            text
            absolute
            bottom
            @click="$router.push({ name: 'Detail', params: {id: index+1}})"
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
export default {
  data() {
    return {
      memos: [
        {
          title: "明日の献立",
          content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
        { title: "今日の宿題", content: "現代文の問題、数学教科書p20の問題" },
        {
          title: "明日の献立",
          content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
        {
          title: "明日の献立",
          content:
          "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
        { title: "今日の宿題", content: "現代文の問題、数学教科書p20の問題" },
        {
          title: "明日の献立",
          content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
        { title: "今日の宿題", content: "現代文の問題、数学教科書p20の問題" },
        {
          title: "明日の献立",
          content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
        { title: "今日の宿題", content: "現代文の問題、数学教科書p20の問題" },
        {
          title: "明日の献立",
          content: "卵焼き、味噌汁、アジの塩焼き、豆腐味噌汁",
        },
      ],
    };
  },
  filters: {
    omittedText(text) {
      const length = 45;
      return text.length > length ? text.slice(0, length) + "..." : text;
    },
  },
};
</script>

<style scoped>
.card {
  border: 1px solid #555;
  padding: 10px;
  margin: 10px auto;
}
</style>